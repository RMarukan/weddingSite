<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGuestAttendType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('guest', function (Blueprint $table) {
            $table->string('1stAttendFlg')->change();
            $table->renameColumn('1stAttendFlg', 'attendType');
            $table->renameColumn('2ndAttendFlg', 'attendFlg');
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
