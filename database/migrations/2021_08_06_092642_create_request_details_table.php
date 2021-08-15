<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_details', function (Blueprint $table) {
            $table->id();

            $table->string('request_id')->nullable();
            
            $table->integer('jumlah_ember')->nullable();
            $table->integer('jumlah_polibag')->nullable();
            $table->integer('jumlah_pot')->nullable();
            $table->integer('jumlah_mulsa')->nullable();


            $table->integer('jumlah_benih')->nullable();
            $table->integer('jumlah_petroganik')->nullable();
            $table->integer('jumlah_phonska')->nullable();
            $table->integer('jumlah_urea')->nullable();
            $table->integer('jumlah_za')->nullable();
            $table->integer('jumlah_zk')->nullable();
            $table->integer('jumlah_kci')->nullable();
            $table->string('benih_lain')->nullable();
            $table->integer('jumlah_lain')->nullable();


            $table->boolean('pestisida');
            $table->boolean('herbisida');
            $table->boolean('fungisida');
            $table->boolean('plastik_barrier');
            $table->boolean('jaring_burung');
            $table->string('sarana_lain')->nullable();

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
        Schema::dropIfExists('request_details');
    }
}
