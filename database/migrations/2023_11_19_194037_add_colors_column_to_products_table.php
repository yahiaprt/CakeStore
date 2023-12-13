<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColorsColumnToProductsTable extends Migration
{
    public function up()
    {
        // Add 'colors' column as a JSON column (MySQL)
        Schema::table('products', function (Blueprint $table) {
            $table->json('colors')->nullable();
        });

        // Uncomment the following line if you are using PostgreSQL
        // $table->jsonb('colors')->nullable();
    }

    public function down()
    {
        // Drop the 'colors' column if you need to rollback
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('colors');
        });
    }
}