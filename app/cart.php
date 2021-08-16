<?php

namespace App;

class Cart{
    public $products = null;
    public $totalPrice =0;
    public $totalQuanty =0;

    public function __construct($cart){
        if($cart){
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQuanty = $cart->totalQuanty;
        }  
    }

    public function addCart($product,$id){
        $newProduct = ['quanty' => 0 , 'subTotalPrice' => 0, 'productInfor' => $product];
        if($this->products){
            if(array_key_exists($id,$this->products)){
                $newProduct = $this->products[$id];
            }
        }
        //check sale
        if($product->p_price_sale > -1){
            $price = $product->p_price_sale;
        }else{
            $price =  $product->p_price;
        }

        $newProduct['quanty']++;
        $newProduct['subTotalPrice'] = $newProduct['quanty'] * $price;
        $this->products[$id] = $newProduct;
        $this->totalPrice += $price;
        $this->totalQuanty ++ ;
        
    }

    public function deleteItemCart($id){ 
        $this->totalPrice -=  $this->products[$id]['subTotalPrice'];
        $this->totalQuanty -=  $this->products[$id]['quanty'];
        unset($this->products[$id]);
    }

    public function updateItemCart($id,$quanty){
        //xóa tổng số lượng và tổng tiền khi cập nhật sản phẩm
        $this->totalQuanty -= $this->products[$id]['quanty'];
        $this->totalPrice -= $this->products[$id]['subTotalPrice'];

         //check sale
         if($this->products[$id]['productInfor']->p_price_sale > -1){
            $price = $this->products[$id]['productInfor']->p_price_sale;
        }else{
            $price =  $this->products[$id]['productInfor']->p_price;
        } 

        $this->products[$id]['quanty'] = $quanty;
        $this->products[$id]['subTotalPrice'] = $quanty * $price;

        $this->totalQuanty += $this->products[$id]['quanty'];
        $this->totalPrice += $this->products[$id]['subTotalPrice'];
    }
}