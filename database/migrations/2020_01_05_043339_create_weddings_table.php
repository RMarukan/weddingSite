<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeddingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guest', function (Blueprint $table) {
            $table->increments('guestId')-> unique() -> nullable();
            $table->string('name',30)-> unique();
            $table->integer('attributeId');
            $table->boolean('1stAttendFlg');
            $table->boolean('2ndAttendFlg');
            $table->text('dinnerComment');
            $table->text('anotherComment');
            $table->timestamps();
        });

        Schema::create('attribute', function (Blueprint $table) {
            $table->integer('attributeId');
            $table->string('attributeName', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weddings');
    }
}
