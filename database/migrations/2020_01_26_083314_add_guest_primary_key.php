<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGuestPrimaryKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('guest', function (Blueprint $table) {
            $table->dropColumn(['attributeId']);
        });

        Schema::table('guest', function (Blueprint $table) {
            $table->integer('attributeId')->after('guestId');
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
