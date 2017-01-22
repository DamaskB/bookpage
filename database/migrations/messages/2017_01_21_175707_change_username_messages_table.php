<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeUsernameMessagesTable extends Migration
{
    public function up()
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->renameColumn('username','name');
            $table->dropColumn('age');
        });
    }

    public function down()
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->renameColumn('name','username');
            $table->integer('age')->unsigned()->after('email');
        });
    }
}
