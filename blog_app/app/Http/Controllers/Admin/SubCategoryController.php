<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubCategoryRequest;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $subcategories=SubCategory::with('category')->get();
        return view('admin.sub_categories.index')->with('subcategories',$subcategories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.sub_categories.create')->with('categories',Category::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(SubCategoryRequest $request)
    {
        $validated=$request->all();
        $validated['slug']=Str::slug($validated['title']);

         SubCategory::create($validated);

        return  redirect(route('subcategories.index'))->with('success','successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $subcategory=SubCategory::findOrFail($id);
        $categories=Category::all();

        return  view('admin.sub_categories.edit')->with(
            [
                'categories'=>$categories,
                'subcategory'=>$subcategory
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(SubCategoryRequest $request, int $id)
    {
        $subcategory=SubCategory::findOrFail($id);
        $validated=$request->all();
        $validated['slug']=Str::slug($validated['title']);

        $subcategory->update($validated);

        return  redirect(route('subcategories.index'))->with('success','successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $subcategory=SubCategory::findOrFail($id);
        $subcategory->delete();

        return  redirect(route('subcategories.index'))->with('success','successfully deleted');

    }
}
