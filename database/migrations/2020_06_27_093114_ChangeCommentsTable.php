<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    // дополняем в таблицу 'comments' поля articles_id - id ставтьи,  user_id  - id пользователя добавившего соммент
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {
            //

            $table->integer('articles_id')-> unsigned()->default(1);
            $table->foreign('articles_id')-> references('id')-> on('articles');

            $table->integer('user_id')-> unsigned()->nullable();  // когда комментырий будет добавляеть не зарегистрированый поьзователь, поле оставляем пустым
            $table->foreign('user_id')-> references('id')-> on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments', function (Blueprint $table) {
            //
        });
    }
}
