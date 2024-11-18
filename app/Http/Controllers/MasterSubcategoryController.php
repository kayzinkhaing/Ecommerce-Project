<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use Illuminate\Http\Request;

class MasterSubcategoryController extends Controller
{
    public function storesubcat(Request $request)
    {
        $validate_data= $request->validate([
            'subcategory_name'=>'unique:subcategories|max:100|min:5',
            'category_id'=>'required|exists:categories,id'
        ]);

        Subcategory::create($validate_data);
        return redirect()->back()->with('message','Sub Category Added Successfully');
    }

    public function showsubcat($id){
        $subcategory_info=Subcategory::find(id: $id);
        return view('admin.sub_category.edit',compact('subcategory_info'));
    }
    public function updatesubcat(Request $request,$id){
        $subcategory=Subcategory::findOrfail($id);
        $validate_data= $request->validate([
            'subcategory_name'=>'unique:subcategories|max:100|min:5',

        ]);
        $subcategory->update($validate_data);
        return redirect()->back()->with('message','Sub Category Updated Successfully');
    }
    public function deletesubcat($id){
        Subcategory::findOrfail($id)->delete();
        return redirect()->back()->with('message','Sub Category Deleted Successfully');
    }
}