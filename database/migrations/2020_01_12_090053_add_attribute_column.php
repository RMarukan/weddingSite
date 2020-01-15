<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAttributeColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('attribute', function (Blueprint $table) {
            $table->string('attendtype',15)->after('attributeId');
            $table->string('weddingDay',15)->after('attendtype');
            $table->time('reception')->after('weddingDay');
            $table->time('start')->after('reception');
            $table->time('end')->after('start');
            $table->integer('fee')->after('end');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attribute', function (Blueprint $table) {
            //
        });
    }
}
