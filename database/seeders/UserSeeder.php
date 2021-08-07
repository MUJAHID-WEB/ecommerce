<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $user = new User();
        $user->role_id = 1;
        $user->name = 'Mr. superadmin';
        $user->username = 'superadmin';
        $user->gender = 'Male';
        $user->description = 'I am the one!';
        $user->image = 'avatar.jpg';
        $user->address = 'Dhaka';
        $user->phone = '880 1849 100 112';
        $user->email = 'superadmin@gmail.com';
        $user->password = Hash::make(12345678);
        $user->creator = 'super_admin';
        $user->slug = 'superadmin';
        $user->created_at = Carbon::now()->toDateTimeString();
        $user->save();

        $user = new User();
        $user->role_id = 2;
        $user->name = 'Mr. admin';
        $user->username = 'admin';
        $user->gender = 'Male';
        $user->description = 'I am the admin!';
        $user->image = 'avatar.jpg';
        $user->address = 'Dhaka';
        $user->phone = '880 1849 100 112';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make(12345678);
        $user->creator = 'admin';
        $user->slug = 'admin';
        $user->created_at = Carbon::now()->toDateTimeString();
        $user->save();

        $user = new User();
        $user->role_id = 3;
        $user->name = 'Mr. modarator';
        $user->username = 'modarator';
        $user->gender = 'Male';
        $user->description = 'I am the modarator!';
        $user->image = 'avatar.jpg';
        $user->address = 'Dhaka';
        $user->phone = '880 1849 100 112';
        $user->email = 'modarator@gmail.com';
        $user->password = Hash::make(12345678);
        $user->creator = 'modarator';
        $user->slug = 'modarator';
        $user->created_at = Carbon::now()->toDateTimeString();
        $user->save();

        $user = new User();
        $user->role_id = 4;
        $user->name = 'Mr. user';
        $user->username = 'user';
        $user->gender = 'Male';
        $user->description = 'I am the user!';
        $user->image = 'avatar.jpg';
        $user->address = 'Dhaka';
        $user->phone = '880 1849 100 112';
        $user->email = 'user@gmail.com';
        $user->password = Hash::make(12345678);
        $user->creator = 'user';
        $user->slug = 'user';
        $user->created_at = Carbon::now()->toDateTimeString();
        $user->save();

        $user = new User();
        $user->role_id = 5;
        $user->name = 'Mr. subscriber';
        $user->username = 'subscriber';
        $user->gender = 'Male';
        $user->description = 'I am the subscriber!';
        $user->image = 'avatar.jpg';
        $user->address = 'Dhaka';
        $user->phone = '880 1849 100 112';
        $user->email = 'subscriber@gmail.com';
        $user->password = Hash::make(12345678);
        $user->creator = 'subscriber';
        $user->slug = 'subscriber';
        $user->created_at = Carbon::now()->toDateTimeString();
        $user->save();

        
    }
}
