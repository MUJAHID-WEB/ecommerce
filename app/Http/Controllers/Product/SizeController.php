<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Size;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection=Size::where('status',1)->latest()->paginate(8);
        return view('admin.product.size.index', ['collection'=>$collection]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.size.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $this->validate($request,[
            'name'=>['required']
            
        ]);
        $size = Size::create($request->all());
        // $size = Size::create($request->except('logo'));
        // if($request->hasfile('logo')){
        //     $brand->logo = Storage::put('uploads/brand', $request->file('logo'));
        //     $brand->save();
        // }
        $size->slug = Str::slug($size->name);
        $size->creator = Auth::user()->id;
        $size->save();

        // return redirect()->route('size.index', $size->id);
        return 'success';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($size)
    {
        $size = Size::where('id',$size)->first();
        return view('admin.product.size.view', compact('size'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Size $size)
    {
        return view('admin.product.size.edit',['size'=>$size]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Size $size)
    {
        $this->validate($request,[
            'name'=>['required']
            
        ]);
        $size = $size;
        $size->update($request->all());
        // $brand->update($request->except('logo'));
        // if($request->hasfile('logo')){
        //     $brand->logo = Storage::put('uploads/brand', $request->file('logo'));
        //     $brand->save();
        // }
        $size->slug = Str::slug($size->name);
        $size->creator = Auth::user()->id;
        $size->save();

        // return redirect()->route('size.index', $size->id);
        return 'success';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Size $size)
    {
        $size = $size;
        $size->delete();
        return response('success');
    }
}
