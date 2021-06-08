<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipToFakturomats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fakturomats', function (Blueprint $table) {
          $table->unsignedBigInteger('klient_id');
          $table->foreign('klient_id')->references('id')->on('klients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fakturomats', function (Blueprint $table) {
            $table->dropForeign(['klient_id']);
        });
    }
}
