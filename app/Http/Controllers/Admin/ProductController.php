<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function add_product(){

        $category = Category::all();

        return view('admin.add_product',compact('category'));
    }

    public function upload_product(Request $request){

        $data = new Product();

        $data->title = $request->title;

        $data->description = $request->description;

        $data->price = $request->price;

        $data->quantity = $request->quantity;

        $data->category = $request->category;

        $image = $request->image;

        if($image){

            $imageName = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('products',$imageName);

            $data->image = $imageName;
        }

        $data->save();

        toastr()->timeOut(10000)->closeButton(true)->success('Add Product Successfully');

        return redirect()->back();

    }

    public function view_product(){

        $product = Product::paginate(3);

        return view('admin.view_product',compact('product'));
    }

    public function update_product($id){

        $data = Product::find($id);

        $category = Category::all();

        return view('admin.update_page',compact('data','category'));
    }

    public function edit_product(Request $request,$id){

        $data = Product::find($id);

        $data->title = $request->title;

        $data->description = $request->description;

        $data->price = $request->price;

        $data->quantity = $request->quantity;

        $data->category = $request->category;

        $image = $request->image;

        if($image)
        {
            $imageName = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('products',$imageName);

            $data->image = $imageName;
        }

        $data->save();

        toastr()->timeOut(10000)->closeButton(true)->success('Update Product Successfully');

        return redirect('/view_product');
    }

    public function delete_product($id){

        $data = Product::find($id);

        $image_path = public_path('products/'.$data->image);

        if(file_exists($image_path)){

            unlink($image_path);
        }

        $data->delete();

        toastr()->timeOut(10000)->closeButton(true)->success('Delete Product Successfully');

        return redirect()->back();
    }

    public function product_search(Request $request){

        $search = $request->search;

        $product = Product::where('title','LIKE','%'.$search.'%')->
                    orWhere('category','LIKE','%'.$search.'%')->paginate(3);

        return view('admin.view_product',compact('product'));
    }


}
