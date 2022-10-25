<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Createzzmb51tmp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('zzmb51tmp', function (Blueprint $table) {

            $table->id();
            $table->string('MANDT', 9)->default('000')->nullable();
            $table->string('MBLNR', 30)->nullable();
            $table->string('MJAHR', 12)->default('0000')->nullable();
            $table->string('ZEILE', 12)->default('0000')->nullable();
            $table->string('BUDAT', 24)->default('00000000')->nullable();
            $table->string('GRADE', 90)->nullable();
            $table->string('USNAM', 36)->nullable();
            $table->string('SJAHR', 12)->default('0000')->nullable();
            $table->string('SMBLN', 30)->nullable();
            $table->string('SMBLP', 12)->default('0000')->nullable();
            $table->string('CHARG', 30)->nullable();
            $table->string('HKONT', 30)->nullable();
            $table->string('MTXT50', 150)->nullable();
            $table->string('SAKTO', 30)->nullable();
            $table->string('TXT50', 150)->nullable();
            $table->string('KOSTL', 30)->nullable();
            $table->string('BWART', 9)->nullable();
            $table->string('BTEXT', 120)->nullable();
            $table->string('GRUND', 9)->nullable();
            $table->string('LGORT', 12)->nullable();
            $table->string('UMLGO', 12)->nullable();
            $table->string('VLPLA', 90)->nullable();
            $table->string('UMWRK', 12)->nullable();
            $table->string('UMCHA', 30)->nullable();
            $table->string('UMMAT', 54)->nullable();
            $table->string('MATNR', 54)->nullable();
            $table->string('MTART', 12)->nullable();
            $table->string('WRKST', 144)->nullable();
            $table->string('MAKTX', 12)->nullable();
            $table->decimal('DMBTR', 13, 2)->default(0)->nullable();
            $table->decimal('SMBTR', 13, 2)->default(0)->nullable();
            $table->decimal('FMBTR', 13, 2)->default(0)->nullable();
            $table->decimal('PERKG', 13, 2)->default(0)->nullable();
            $table->string('WEMPF', 36)->nullable();
            $table->string('GEWEI', 9)->nullable();
            $table->string('AUFNR', 36)->nullable();
            $table->string('EBELN', 30)->nullable();
            $table->string('EBELP', 15)->default('00000')->nullable();
            $table->decimal('MENGE', 13, 3)->default(0)->nullable();
            $table->string('MEINS', 9)->nullable();
            $table->decimal('ERFMG', 13, 3)->default(0)->nullable();
            $table->string('ERFME', 9)->nullable();
            $table->decimal('BPMNG', 13, 3)->default(0)->nullable();
            $table->string('BPRME', 9)->nullable();
            $table->string('BKTXT', 75)->nullable();
            $table->string('BLDAT', 24)->default('00000000')->nullable();
            $table->string('BUKRS', 12)->nullable();
            $table->string('CPUDT', 24)->default('00000000')->nullable();
            $table->string('CPUTM', 18)->default('000000')->nullable();
            $table->string('SHKZG', 3)->nullable();
            $table->string('SGTXT', 150)->nullable();
            $table->string('LIFNR', 30)->nullable();
            $table->string('NLIFNR', 90)->nullable();
            $table->string('KUNNR', 30)->nullable();
            $table->string('NKUNNR', 90)->nullable();
            $table->string('ANLN1', 36)->nullable();
            $table->string('ANLN2', 12)->nullable();
            $table->string('VGART', 6)->nullable();
            $table->string('POWAERS', 15)->nullable();
            $table->decimal('POWKURS', 9, 5)->default(0)->nullable();
            $table->string('WAERS', 15)->nullable();
            $table->decimal('NETPR', 11, 2)->default(0)->nullable();
            $table->decimal('PEINH',)->default(0)->nullable();
            $table->decimal('VATPR', 13, 2)->default(0)->nullable();
            $table->decimal('NETLC', 13, 2)->default(0)->nullable();
            $table->string('WERKS', 12)->nullable();
            $table->string('XAUTO', 3)->nullable();
            $table->string('XBLNR', 48)->nullable();
            $table->string('WADAT_IST', 24)->default('00000000')->nullable();
            $table->decimal('NTGEW', 13, 3)->default(0)->nullable();
            $table->decimal('CLGEW', 13, 3)->default(0)->nullable();
            $table->decimal('WEMPC', 13, 3)->default(0)->nullable();
            $table->decimal('ZTOLR', 11, 2)->default(0)->nullable();
            $table->decimal('DIFPC', 11, 2)->default(0)->nullable();
            $table->string('BANFN', 30)->nullable();
            $table->string('BNFPO', 15)->default('00000')->nullable();
            $table->decimal('PRMENGE', 13, 3)->default(0)->nullable();
            $table->string('PRMEINS', 9)->nullable();
            $table->string('AFNAM', 36)->nullable();
            $table->decimal('AVGEW', 13, 3)->default(0)->nullable();
            $table->decimal('AVGEWPC', 13, 3)->default(0)->nullable();
            $table->string('ABLAD', 75)->nullable();
            $table->string('VKGRP', 9)->nullable();
            $table->string('BEZEI', 75)->nullable();
            $table->string('VKBUR', 12)->nullable();
            $table->string('INSMK', 3)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zzmb51tmp');
    }
}
