<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategories;
use App\Models\Products;

class ProductController extends Controller
{

    public function index()
    {
        $Products = Products::join('product_categories as pc', 'products.categories', '=', 'pc.id')
            ->select('products.*', 'pc.name as catname')
            ->where('products.is_deleted', 1)
            ->get();
        return view('tbl-files/tbl-products')->with('Products', $Products);
    }

    public function create()
    {
        $Categories = ProductCategories::where('is_deleted', 1)->get();
        return view('add-files/add-product')->with('Categories', $Categories);
    }

    public function store(Request $req)
    {
        $req->validate([
            "name" => 'required | unique:products',
            "categories" => 'required',
            "price" => 'required'
        ]);
        $Products = new Products;
        $Products->name = $req->name;
        $Products->code = $req->code;
        $Products->categories = $req->categories;
        $Products->price = $req->price;
        $Products->description = $req->description;
        $Products->tax = $req->tax;
        $Products->discount = $req->discount;
        $Products->quantity = $req->quantity;
        $save = $Products->save();
        if ($save) {
            return back()->with('success', 'Product has been Successfuly added.');
        } else {
            return back()->with('fail', 'Somthing Went wrong, try Again Later');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Products = Products::join('product_categories as pc', 'products.categories', '=', 'pc.id')
            ->select('products.*', 'pc.name as catname')
            ->where('products.id', $id)
            ->first();
        $Categories = ProductCategories::where('is_deleted', 1)->get();
        return view('edit-files/edit-product')->with(['Products' => $Products, 'Categories' => $Categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "name" => 'required',
            "categories" => 'required',
            "price" => 'required'
        ]);
        $Products = Products::where('id', $id)
            ->update([
                'name' => $request->name,
                'code' => $request->code,
                'categories' => $request->categories,
                'price' => $request->price,
                'description' => $request->description,
                'tax' => $request->tax,
                'discount' => $request->discount,
                'quantity' => $request->quantity,
            ]);
        return redirect('product')->with('success', 'Product has been Successfuly Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function add_productCatagories(Request $req)
    {
        $req->validate([
            "name" => 'required | unique:product_categories'
        ]);
        $productCat = new ProductCategories;
        $productCat->name =  $req->name;
        $productCat->saree_niddle1 =  $req->saree_niddle1;
        $productCat->saree_niddle2 =  $req->saree_niddle2;
        $productCat->saree_niddle3 =  $req->saree_niddle3;
        $productCat->saree_niddle4 =  $req->saree_niddle4;
        $productCat->saree_niddle5 =  $req->saree_niddle5;
        $productCat->saree_niddle6 =  $req->saree_niddle6;
        $productCat->lace_niddle1 =  $req->lace_niddle1;
        $productCat->lace_niddle2 =  $req->lace_niddle2;
        $productCat->lace_niddle3 =  $req->lace_niddle3;
        $productCat->lace_niddle4 =  $req->lace_niddle4;
        $productCat->lace_niddle5 =  $req->lace_niddle5;
        $productCat->lace_niddle6 =  $req->lace_niddle6;
        $productCat->description =  $req->Description;
        $save = $productCat->save();
        if ($save) {
            return back()->with('success', 'Category has been Successfuly added.');
        } else {
            return back()->with('fail', 'Somthing Went wrong, try Again Later');
        }
    }

    public function tbl_fetchproductCatagories()
    {
        $Categories = ProductCategories::where('is_deleted', 1)->get();
        return view('tbl-files/tbl-categories')->with('Categories', $Categories);
    }

    public function edit_productCatagories($id)
    {
        $Categories = ProductCategories::where('id', $id)->first();
        return view('edit-files/edit-productcategory')->with('Categories', $Categories);
    }

    public function update_productCatagories(Request $req)
    {
        $req->validate([
            "name" => 'required'
        ]);
        $ProductCategories = ProductCategories::where('id', $req->id)
            ->update([
                'name' => $req->name,
                'description' => $req->Description,
                'saree_niddle1' =>  $req->saree_niddle1,
                'saree_niddle2' =>  $req->saree_niddle2,
                'saree_niddle3' =>  $req->saree_niddle3,
                'saree_niddle4' =>  $req->saree_niddle4,
                'saree_niddle5' =>  $req->saree_niddle5,
                'saree_niddle6' =>  $req->saree_niddle6,
                'lace_niddle1' =>  $req->lace_niddle1,
                'lace_niddle2' =>  $req->lace_niddle2,
                'lace_niddle3' =>  $req->lace_niddle3,
                'lace_niddle4' =>  $req->lace_niddle4,
                'lace_niddle5' =>  $req->lace_niddle5,
                'lace_niddle6' =>  $req->lace_niddle6
            ]);

        return redirect('/tbl-productCatagories')->with('success', 'Product Category has been Successfuly Updated.');
    }
    public function delete_productCatagories($id)
    {
        $ProductCategories = ProductCategories::where('id', $id)->update(['is_deleted' => 0]);
        return redirect('/tbl-productCatagories')->with('success', 'Product Category has been Successfuly Deleted.');
    }
}
