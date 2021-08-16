<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use App\Models\categoryChild;
use App\Models\category;
use App\Models\product;
use App\Models\blog;
use App\Models\categoryBlog;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        Paginator::defaultView('pagination');
        Paginator::defaultSimpleView('pagination');
        Paginator::useBootstrap();
       
        try {

            $listCategoryGlobal = category::with('category_child:id,c_name,c_slug,c_parent')->where('c_parent',null)->where('c_active',1)->get();
            $listProductHotGlobal = product::where('p_hot',1)->where('p_active',1)->limit(5)->get();
            $blogHotGlobal = blog::where('bl_hot',1)->orderByDesc('created_at')->limit(4)->get();
            $categoryBlogGlobal = categoryBlog::where('cbl_active',1)->orderByDesc('created_at')->get();
           // dd($categoryBlogGlobal);
        } catch (\Throwable $th) {
            //throw $th;
        }
        $viewData = [
            'listCategoryGlobal' => $listCategoryGlobal ?? null,
            'listProductHotGlobal' => $listProductHotGlobal ?? null,
            'blogHotGlobal' => $blogHotGlobal ?? null,
            'categoryBlogGlobal' => $categoryBlogGlobal ?? null,
        ];
        View::share($viewData);
    }
}
