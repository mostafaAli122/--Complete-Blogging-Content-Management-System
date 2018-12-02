<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user= App\User::create([
            'name'=>'Mostafa Ali',
            'email'=>'mostafaAli@gmail.com',
            'password'=>bcrypt('password'),
            'admin'=>1
        ]);
        App\Profile::create([
        'user_id'=>$user->id,
        'image'=>'uploads/image/1.png',
        'about'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam iure neque soluta ab. Dolore, iure neque! Repudiandae fugit, provident, libero laudantium quam nihil recusandae eum ex officia consequuntur suscipit velit!',
        'facebook'=>'facebook.com',
        'youtube'=>'youtube.com'
        ]);
    }
}
