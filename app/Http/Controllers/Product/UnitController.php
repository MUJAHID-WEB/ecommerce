<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection=Unit::where('status',1)->latest()->paginate(8);
        return view('admin.product.unit.index', ['collection'=>$collection]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.unit.create');
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
        $unit = Unit::create($request->all());
        // $unit = Unit::create($request->except('logo'));
        // if($request->hasfile('logo')){
        //     $brand->logo = Storage::put('uploads/unit', $request->file('logo'));
        //     $brand->save();
        // }
        $unit->slug = Str::slug($unit->name);
        $unit->creator = Auth::user()->id;
        $unit->save();

        // return redirect()->route('unit.index', $unit->id);
        return 'success';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($unit)
    {
        $unit = Unit::where('id',$unit)->first();
        return view('admin.product.unit.view', compact('unit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Unit $unit)
    {
        return view('admin.product.unit.edit',['unit'=>$unit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unit $unit)
    {
        $this->validate($request,[
            'name'=>['required']
            
        ]);
        $unit = $unit;
        $unit->update($request->all());
        // $brand->update($request->except('logo'));
        // if($request->hasfile('logo')){
        //     $brand->logo = Storage::put('uploads/brand', $request->file('logo'));
        //     $brand->save();
        // }
        $unit->slug = Str::slug($unit->name);
        $unit->creator = Auth::user()->id;
        $unit->save();

        // return redirect()->route('unit.index', $unit->id);
        return 'success';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unit $unit)
    {
        $unit = $unit;
        $unit->delete();
        return response('success');
    }
}