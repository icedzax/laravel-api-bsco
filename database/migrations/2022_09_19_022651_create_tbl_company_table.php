<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_company', function (Blueprint $table) {

            $table->id();

            $table->string('name', 100);
            $table->string('address');
            $table->decimal('lat', 12, 9)->nullable();
            $table->decimal('long', 12, 9)->nullable();
            $table->string('country', 100);
            $table->string('website', 100);
            $table->string('type', 10);
            $table->text('note');
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
        Schema::dropIfExists('tbl_company');
    }
}
