<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        $user = new User();
        $user->name = 'tomal';
        $user->email = 'towhozib223@gmail.com';
        $user->password = bcrypt(value: 'password');
        
        $user->save();  
        // $user = new User();
        // $user->name = 'root';
        // $user->email = 'towhozibtat223@gmail.com';
        // $user->password = bcrypt('root');
        
        // $user->save();

    }
}
