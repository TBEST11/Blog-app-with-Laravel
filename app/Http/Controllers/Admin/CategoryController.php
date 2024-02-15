<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\CategoryFormRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $category=category::all();
        return view('admin.category.index', compact('category'));
    }

    public function create()
    {
        return view('admin.category.create');
    }
    public function store(CategoryFormRequest $request)
    {
       $data=$request->validated();
       $category= new category;
       $category->name=$data['name'];
       $category->slog=$data['slog'];
       $category->description=$data['description'];
       if($request->hasfile('image')){
        $file=$request->file('image');
        $filename = time() . '.' .$file->getClientOriginalExtension();
        $file->move('uploads/category/', $filename);
        $category->image=$filename;
       }
       $category->mata_title=$data['mata_title'];
       $category->mata_description=$data['mata_description'];
       $category->mata_keyword=$data['mata_keyword'];

       $category->navbar_status=$request->navbar_status == true ? '1':'0';
       $category->status=$request->status ==true ? '1':'0';;
       $category->created_by=Auth::user()->id;
       $category->save();


       return redirect('admin/category')->with('message', 'Category Added Successfully');



    }
}
