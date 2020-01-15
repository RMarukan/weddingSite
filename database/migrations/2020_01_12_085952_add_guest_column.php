<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGuestColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('guest', function (Blueprint $table) {
            $table->string('name', 10)->change();
            $table->renameColumn('name', 'lstNameK');

        });

        Schema::table('guest', function (Blueprint $table) {
            $table->string('fstNameK',10)->after('lstNameK');
            $table->string('lstNameF',15)->after('fstNameK');
            $table->string('fstNameF',15)->after('lstNameF');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('guest', function (Blueprint $table) {
            //
        });
    }
}
