<?php

namespace App\Http\Controllers;
use App\ProductSpecs;
use App\Product;
use App\ProductImage;
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
                 // dd($request);
                $p = new Product;
                $p->product_name=$request->product_name[0];
                $p->product_price=$request->product_price[0];
                $p->product_company=$request->product_company[0];
                $p->product_description=$request->product_description[0];
                $p->warrenty_summary=$request->warrenty_summary[0];
                $p->covered_warrenty=$request->covered_warrenty[0];
                $p->not_covered_warrenty=$request->not_covered_warrenty[0];
                $p->warrenty_service_type=$request->warrenty_service_type[0];    
                $p->save();
                $no =  $request->product_specification_name;
               
                foreach ($no as $i) {
                    $s = new ProductSpecs;
      
                    $s->product_id = 1;
                    $s->specification_type = $request->product_specification_name[0];
                    $s->specification_heading = $request->product_specification_heading[0];
                    $s->specification_name = $request->product_specification_name[0];
                    $s->save();  
                 }  
                  
                  // dd($request->image1);
                  $image = $request->image1;
                  dd($image);

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
