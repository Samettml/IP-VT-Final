<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function product()
    {
        return view('admin.product');
    }

    public function uploadproduct(Request $request)
    {
        $data=new Product();

        $image=$request->file;


        $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->file->move('productimage', $imagename);

            $data->image = $imagename;


        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->des;


        $data->save();

        return redirect()->back()->with('message','İlan başarıyla eklendi');


    }
    public function showproduct()
    {
        $data=product::all();

        return view('admin.showproduct',compact('data'));
    }

 public function deleteproduct($id)
 {
     $data=product::find($id);

     $data->delete();
     return redirect()->back();with('message','İlan başarıyla silindi');

 }

        public function updateview($id)
        {
            $data=product::find($id);
            return view('admin.updateview',compact('data'));

        }

        public function updateproduct(Request $request , $id)
        {
            $data=product::find($id);

            $image=$request->file;

            if($image) {

                $imagename = time() . '.' . $image->getClientOriginalExtension();

                $request->file->move('productimage', $imagename);

                $data->image = $imagename;


            }
            $data->title=$request->title;
            $data->price=$request->price;
            $data->description=$request->des;


            $data->save();

            return redirect()->back()->with('message','İlan başarıyla güncellendi');


        }

}
