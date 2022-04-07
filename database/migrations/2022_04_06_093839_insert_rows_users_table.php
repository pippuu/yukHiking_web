<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert(
            array(
                'username' => 'alfin',
                'password' => Hash::make('admin'),
                'alamat' => 'morioh',
                'created_at' => 'datetime',
                'updated_at' => 'datetime',

            )
        );
        DB::table('users')->insert(
            array(
                'username' => 'rafif',
                'password' => Hash::make('admin'),
                'alamat' => 'egypt',
                'created_at' => 'datetime',
                'updated_at' => 'datetime',

            )
        );
        DB::table('users')->insert(
            array(
                'username' => 'jehua',
                'password' => Hash::make('admin'),
                'alamat' => 'solo',
                'created_at' => 'datetime',
                'updated_at' => 'datetime',

            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
