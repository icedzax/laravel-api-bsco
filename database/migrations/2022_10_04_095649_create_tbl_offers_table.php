<?php

use Illuminate\Database\Console\Migrations\StatusCommand;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_offer', function (Blueprint $table) {

            $table->id();
            // $table->bigInteger('user_id');
            $table->bigInteger('company_id');
            $table->bigInteger('pic_id')->nullable();
            $table->string('matgroup', 10);
            $table->string('matcode', 32);
            $table->string('matdesc', 100);
            $table->string('offer_group', 30);
            $table->string('sub', 30)->nullable();
            $table->string('size', 100)->nullable();
            $table->string('grade', 30)->nullable();
            $table->string('length', 30)->nullable();
            $table->string('std', 30)->nullable();
            $table->string('class', 30)->nullable();
            $table->integer('qty')->nullable();
            $table->string('weight', 12, 3)->nullable();
            $table->string('currency', 6);
            $table->string('price_type', 10);
            $table->float('price', 15, 3)->nullable();
            $table->string('ship_eta', 20);
            $table->string('ship_date', 20);
            $table->datetime('validity_start')->nullable();
            $table->datetime('validity_time')->nullable();
            $table->string('offer_status', 30)->nullable();
            $table->text('remark')->nullable();
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
        Schema::dropIfExists('tbl_offer');
    }
}
