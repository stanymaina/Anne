<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailTTsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_t_ts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('timetable_id');
            $table->string('unit_name');
            $table->string('day');
            $table->string('time_start');
            $table->string('time_end');
            $table->string('lectured_by');
            $table->string('added_by');
            $table->string('updated_by');          
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
        Schema::dropIfExists('detail_t_ts');
    }
}
