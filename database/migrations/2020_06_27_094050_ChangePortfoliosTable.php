<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    // дополняем в таблицу portfolios поля  filter_alias - поле фильтра
    public function up()
    {
        Schema::table('portfolios', function (Blueprint $table) {
            //
            $table-> string('filter_alias');
            $table-> foreign('filter_alias')-> references('alias')->on('filters');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('portfolios', function (Blueprint $table) {
            //
        });
    }
}
