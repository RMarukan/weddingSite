<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGuestComent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('guest', function (Blueprint $table) {
            $table->dropColumn(['guestComment']);
            $table->dropColumn(['attendType']);
        });

        Schema::table('guest', function (Blueprint $table) {
            $table->string('attendType')->after('attributeId');
            $table->text('guestComment')->after('attendFlg');
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
