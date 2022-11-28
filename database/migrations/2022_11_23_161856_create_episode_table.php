<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpisodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episode', function (Blueprint $table) {
            $table->id();
            $table->date('episode_day')->comment('งวดที่');
            $table->integer('user_id')->comment('ไอดีผู้สร้าง');
            $table->text('digits_two')->nullable()->comment('เลข 2 ตัว');
            $table->text('digits_three')->nullable()->comment('เลข 3 ตัว');
            $table->integer('max_price_two')->nullable();
            $table->integer('max_price_three')->nullable();
            $table->integer('total')->nullable();
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
        Schema::dropIfExists('episode');
    }
}
