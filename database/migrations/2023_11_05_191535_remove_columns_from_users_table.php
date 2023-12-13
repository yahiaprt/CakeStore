<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveColumnsFromUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('First_name');
            $table->dropColumn('Last_name');
            $table->dropColumn('birthdate');
            $table->dropColumn('address');
        });
    }

    public function down()
    {
        // If you ever need to rollback the migration, you can recreate the columns in the 'down' method.
        Schema::table('users', function (Blueprint $table) {
            $table->string('First_name');
            $table->string('Last_name');
            $table->date('birthdate')->nullable();
            $table->string('address');
        });
    }
}
