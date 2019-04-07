<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminpanel.add_product');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
         $data = $request->except('_token');
            $a = count($data['product_name']);
           for($i=0; $i < $a; $i++){
                $p = new Product;
                $p->product_name=$data['product_name'][$i];
                $p->product_price=$data['product_price'][$i];
                $p->product_company=$data['product_company'][$i];
                $p->product_description=$data['product_description'][$i];
                $p->warrenty_summary=$data['warrenty_summary'][$i];
                $p->covered_warrenty=$data['covered_warrenty'][$i];
                $p->not_covered_warrenty=$data['not_covered_warrenty'][$i];
                $p->warrenty_service_type=$data['warrenty_service_type'][$i];
                $p->save();
              
            }    
        
        //  $data = $request->except('_token');
        //  dd($data);

        // $p = new Product;
        // $p->product_name=$request->product_name[$i];
        // $p->product_price=$request->product_price[$i];
        // $p->discount=$request->discount[$i];
        // $p->product_company=$request->product_company[$i];
        // $p->product_description=$request->product_description[$i];
        // $p->warrenty_summary=$request->warrenty_summary[$i];
        // $p->covered_warrenty=$request->covered_warrenty[$i];
        // $p->not_covered_warrenty=$request->not_covered_warrenty[$i];
        // $p->warrenty_service_type=$request->warrenty_service_type[$i];
        // $p->quantity=$request->quantity[$i];
        // $p->save();
        $msg = 'Product is added';
        return response()->json(array($msg),200);
       


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
