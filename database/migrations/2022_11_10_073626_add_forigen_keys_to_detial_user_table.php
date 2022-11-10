<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForigenKeysToDetialUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detial_user', function (Blueprint $table) {
            //user id hasil detial_user ke users references (mengarah ke)field 'id' pada tabel (users)
            $table->foreign('user_id', 'fk_detail_user_to_users')->reference('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('type_user_id', 'fk_detail_user_to_type_user')->reference('id')->on('type_user')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detial_user', function (Blueprint $table) {

            $table->dropForeign('fk_detail_user_to_users');
            $table->dropForeign('fk_detail_user_to_type_user');
            //
        });
    }
}
