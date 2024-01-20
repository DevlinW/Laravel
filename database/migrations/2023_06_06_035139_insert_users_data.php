<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        $users = [
            [
                'name' => 'devlin',
                'email' => 'devlin@admin.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'dustin',
                'email' => 'dustin@admin.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'customer1',
                'email' => 'customer1@gmail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'customer2',
                'email' => 'customer2@gmail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'customer3',
                'email' => 'customer3@gmail.com',
                'password' => Hash::make('password'),
            ],
        ];
    
        foreach ($users as $user) {
            DB::table('users')->insert($user);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $emails = [
            'devlin@admin.com',
            'dustin@admin.com',
            'customer1@gmail.com',
            'customer2@gmail.com',
            'customer3@gmail.com',
        ];
    
        DB::table('users')->whereIn('email', $emails)->delete();
    }
    
};
