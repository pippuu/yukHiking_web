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
        Schema::create('users', function (Blueprint $table) {
            $table->id('ID_user');
            $table->string('username');
            $table->string('password');
            $table->string('alamat');
            $table->timestamps();
        });

        // DB::table('users')->insert(
        //     array(
        //         'username' => 'rafif',
        //         'password' => Hash::make('fausta'),
        //         'alamat' => 'antah berantah',
        //         'created_at' => 'datetime',
        //         'updated_at' => 'datetime',

        //     )
        // );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
