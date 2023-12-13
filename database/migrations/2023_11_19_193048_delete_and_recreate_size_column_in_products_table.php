<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteAndRecreateSizeColumnInProductsTable extends Migration
{
    public function up()
    {
        // Drop the existing 'size' column
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('size');
        });

        // Recreate the 'size' column as an array
        Schema::table('products', function (Blueprint $table) {
            $table->json('size')->nullable();
        });
    }

    public function down()
    {
        // If you need to rollback, you can define the down method.
        // However, be cautious as it may result in data loss.
    }
}
