<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\order;
use App\Models\orderDetail;
use App\Models\product;
use App\Models\discount;
use App\Models\category;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{   
   
   protected $folder = 'backend.dashboard.';

    public  function index(){

        $customerToday = User::whereDate('created_at', Carbon::today())->count();
        $orderToday = order::whereDate('created_at', Carbon::today())->count();
        $revenueToday = order::whereDate('created_at', Carbon::today())->sum('or_total');
        $revenueThisMonth = order::whereYear('created_at', '=', date('Y',time()))
        ->whereMonth('created_at', '=', date('m',time()))->sum('or_total');
        $viewData = [
            'customerToday' => $customerToday,
            'orderToday' => $orderToday,
            'revenueToday' => $revenueToday,
            'revenueThisMonth' => $revenueThisMonth,
        ];
        return view($this->folder.'index',$viewData);
    }

    public function returnCategory(){
        $Category = category::select('id','c_name')->get();
        //init lable category
        $bablesCategory = array();
        //init data category by product
        $dataProductByCategoryData = array();
        $dataProductByCategoryBackgroundColor = array();
        foreach ($Category as $key => $item) {
            $backgroundColor = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
            //push data lable category
           array_push($bablesCategory,$item->c_name);
           //push data product by category
         $product =  product::where('p_category_id',$item->id)->count();
         array_push($dataProductByCategoryData,$product);
         //push data backgroundColor product
         array_push($dataProductByCategoryBackgroundColor,$backgroundColor);
         $dataProductByCategory['backgroundColor'] = $backgroundColor;

        };
        $viewData = json_encode([
            'lables' => $bablesCategory,
            'dataReturnCategory' => $dataProductByCategoryData,
            'backgroundColor' => $dataProductByCategoryBackgroundColor,
        ]);
       // return  response()->json($viewData, 200);
       return $viewData;
    }

    public function chartReturnRevenueByMonth(){
        $currentMonth = date('m');
        //init array motnth
        $labelRevenueByMonth = array();
        //init array data revenue by month
        $dataRevenueByMonth = array();
        for ($i=1; $i <= $currentMonth; $i++) { 
             //push month in array
             array_push($labelRevenueByMonth,'Tháng '.$i);
             //push  array data revenue by month
             $revenueThisMonth = order::whereYear('created_at', '=', date('Y',time()))
             ->whereMonth('created_at', '=', $i)->sum('or_total');
             array_push($dataRevenueByMonth,$revenueThisMonth);
        } 
        //init background color
        $backgroundColor = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
     
        $viewData = json_encode([
            'lables' => $labelRevenueByMonth,
            'dataRevenueByMonth' => $dataRevenueByMonth,
            'backgroundColor' => $backgroundColor,
        ]);
       // return  response()->json($viewData, 200);
       return $viewData;
    }

    public function chartReturnProductHotTrend(){
    //     $products = product::select('id','p_sku')->get();
         $currentMonth = date('m');
    //     //init array motnth
        $labelHotTrendByMonth = array();
    //     //init array data hot trend by month
         $datasetHotTrendByMonth = array();

         for ($i=1; $i <= $currentMonth; $i++) { 
            //push month in array
            array_push($labelHotTrendByMonth,'Tháng '.$i);
          //push  array data product hot trend by month
            $productHotTrendThisMonth = orderDetail::select('orD_p_id',DB::raw("SUM(orD_qty) as totalQty"),'created_at')
            ->whereYear('created_at', '=', date('Y',time()))
            ->whereMonth('created_at', '=', $i)
            ->groupBy('orD_p_id')
            ->get();
            // dd($productHotTrendThisMonth);
            foreach ($productHotTrendThisMonth as $item) {
                 //init background color
                $backgroundColor = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
                //
                    $datasetHotTrendByMonth[$item->orD_p_id] =[
                        'label' => $item['orD_p_id'],
                        'data' => array(),
                        'backgroundColor' => $backgroundColor,
                    ];
                }
            }

            for ($i=1; $i <= $currentMonth; $i++) { 
                $productHotTrendThisMonth = orderDetail::select('orD_p_id',DB::raw("SUM(orD_qty) as totalQty"),'created_at')
                ->whereYear('created_at', '=', date('Y',time()))
                ->whereMonth('created_at', '=', $i)
                ->groupBy('orD_p_id')
                ->get();
                if( $productHotTrendThisMonth->isEmpty()){
                    foreach ($datasetHotTrendByMonth as $key => $item) {
                        array_push($datasetHotTrendByMonth[$key]['data'],0);
                    }
                }else{
                    foreach ($datasetHotTrendByMonth as $key => $item) {
                        array_push($datasetHotTrendByMonth[$key]['data'],0);
                    }
                    foreach ($productHotTrendThisMonth as $item) {
                        array_pop($datasetHotTrendByMonth[$item->orD_p_id]['data'] );
                        array_push($datasetHotTrendByMonth[$item->orD_p_id]['data'],$item->totalQty);  
                    }
                    }
                }

                // init dataset format
                $dataset = array();
               foreach ($datasetHotTrendByMonth as  $item) {
                   array_push($dataset,$item);
               }
               
                $viewData = json_encode([
                    'lables' => $labelHotTrendByMonth,
                    'dataset' => $dataset,
                ]);
                //dd($viewData);
               // return  response()->json($viewData, 200);
               return $viewData;
     }
}
