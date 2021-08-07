<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserRole;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $collection=User::where('status',1)->with('role_info')->get();
        return view('admin.user.index', ['collection'=>$collection]);
    }

    public function view($id){
        $user = User::where('id',$id)->first();
        // $user = User::find($id);
        return view('admin.user.view', compact('user'));
    }

    public function create(){
        $user_role= UserRole::orderBy('serial','DESC')->get();
        return view('admin.user.create', compact('user_role'));


    }

    public function edit($id){
        $user_role= UserRole::orderBy('serial','DESC')->get();
        $user= User::find($id);
        return view('admin.user.edit', compact('user_role','user'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'name'=>['required'],

        ]);
        $user= new User();
        $user->name = $request-> name;
        $user->username = $request-> username;
        $user->role_id = $request-> role_id;
        $user->gender = $request-> gender;
        $user->description = $request-> description;
        $user->address = $request-> address;
        $user->phone = $request-> phone;
        $user->email = $request-> email;
        
        $user->password = Hash::make($request-> password);
        $user->created_at = Carbon::now()->toDateTimeString();
        $user->slug = $request-> id.uniqid(10);
        if($request->hasfile ('image')){
            $user->image = storage::put('uploads/user', $request->file('image'));
            $user->save();
        }
        $user->save();

        return redirect()->route('admin_user_index', $user->id);
    }

    public function update(Request $request){
        
        $user= User::find($request->id);
        
        if($user->name !=$request->name){
            $this->validate($request, [
                'name'=>['required'],
            ]);
            $user->name = $request-> name;
        }


        
        $user->username = $request-> username;
        $user->role_id = $request-> role_id;
        $user->gender = $request-> gender;
        $user->description = $request-> description;
        $user->address = $request-> address;
        $user->phone = $request-> phone;
        $user->email = $request-> email;

        if(!is_null($request->old_password) && !is_null($request->password) && !is_null($request->password_confirmation)){
            $this->validate($request, [
                'password'=>['required','string','min:8','confirmed'],
            ]);
            
            if(Hash::check($request->old_password,$user->password)){
                $user->password = Hash::make($request-> password);
            }else{
                return redirect()->back()->with('old_password','Old Password doesnt match');
            }
        }
        
        
        $user->updated_at = Carbon::now()->toDateTimeString();

        if($request->hasfile ('image')){
            if(!file_exists(public_path().'/'.$user->image)){
                unlink (public_path().'/'.$user->image);
            }
            $user->image = storage::put('uploads/user', $request->file('image'));
            $user->save();
        }
        $user->save();

        return redirect()->route('admin_user_index', $user->id);
    }

    public function delete(Request $request){
        $user = User::find($request->id);
        $user -> status= 0;
        $user -> creator = Auth::user()->id;
        $user->save();
        return redirect()->back();
    }

   
}
