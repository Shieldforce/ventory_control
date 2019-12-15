<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFieldsUsersTable extends Migration
{

    public function up()
    {
        Schema::table('users', function (Blueprint $table){
            $table->dropColumn('name');
            $table->string('first_name')->after('id');
            $table->string('last_name')->after('first_name');

            $table->date('birth')->after('last_name');
            $table->string('gender')->after('birth');
            $table->string('avatar')->after('gender');
            $table->boolean('terms')->after('avatar');
        });
    }


    public function down()
    {
        Schema::table('users', function (Blueprint $table){

        });
    }
}
