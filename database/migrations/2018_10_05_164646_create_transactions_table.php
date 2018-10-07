<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('trx_id')->unique();
            $table->string('name')->nullable();
            $table->string('acronym')->nullable();
            $table->longText('description')->nullable();
            $table->string('url')->nullable();
            $table->string('type'))->nullable();
            $table->longText('languagesupported')->nullable();
            $table->string('periodicity')->nullable();
            $table->longText('economycoverage')->nullable();
            $table->longText('granularity')->nullable();
            $table->longText('numberofeconomies')->nullable();
            $table->longText('topics')->nullable();
            $table->longText('updatefrequency')->nullable();
            $table->longText('updateschedule')->nullable();
            $table->string('lastrevisiondate')->nullable();
            $table->email('contactdetails')->nullable();
            $table->longText('accessoption')->nullable();
            $table->longText('bulkdownload')->nullable();
            $table->longText('cite')->nullable();
            $table->longText('detailpageurl')->nullable();
            $table->string('popularity')->nullable();
            $table->string('coverage')->nullable();
            $table->string('api')->nullable();
            $table->longText('apiaccessurl')->nullable();
            $table->string('apisourceid')->nullable();
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
        Schema::dropIfExists('transactions');
    }
}
