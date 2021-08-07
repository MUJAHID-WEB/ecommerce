<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\controller;
use App\Models\UserRole;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserRoleController extends Controller
{
   
    public function index(){
        $collection=UserRole::orderBy('serial','ASC')->where('status',1)->get();
        return view('admin.user_role.index', compact('collection'));
    }

    public function update(Request $request){
        $user_role= UserRole::find($request->id);

        $user_role->name = $request->name;
        $user_role->serial = $request->serial;
        $user_role->creator = Auth::user()->id;
        $user_role->updated_at = Carbon::now()->toDateTimeString();

        $user_role->save();

        return redirect()->back();

    }

    public function delete(Request $request){
        $user_role = UserRole::find($request->id);
        $user_role -> status= 0;
        $user_role -> creator = Auth::user()->id;
        $user_role->save();
        return redirect()->back();
    }
}
