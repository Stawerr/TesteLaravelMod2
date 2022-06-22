<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Project;
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
        $products = Product::orderBy('id','asc')->paginate(10);
        return view('pages.products.index',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::orderBy('id','asc')->get();
        $projects = Project::orderBy('id','asc')->get();
        $categories = Category::orderBy('id','asc')->get();
        return view('pages.products.create',['products'=>$products,'projects'=>$projects,'categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'category_id'        => 'required',
            'project_id'        => 'required',
            'name'        => 'required',
            'detail'        => 'required',
        ]);

        Product::create([
            'category_id'        => $request->category_id,
            'project_id'        => $request->project_id,
            'name'        => $request->name,
            'detail'        => $request->detail,
        ]);
        return redirect('products')->with('status','Product created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('pages.products.show',['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $projects = Project::orderBy('id','asc')->get();
        $categories = Category::orderBy('id','asc')->get();
        return view('pages.products.edit',['product'=>$product,'projects'=>$projects,'categories'=>$categories]);
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
        $product->update($request->all());
        return redirect('products')->with('status','Item edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        try {
            $product->delete();
            return redirect('products')->with('status','Item deleted successfully!')->with('type', 'success');
        }
        catch (\Exception $exception){
            return redirect('products')->with('status',$exception->getMessage())->with('type', 'error');
        }
    }
}
