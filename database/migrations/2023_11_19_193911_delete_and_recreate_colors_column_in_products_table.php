<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteAndRecreateColorsColumnInProductsTable extends Migration
{
    public function up()
    {
        // Drop the existing 'colors' column
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('color');
        });

        // Recreate the 'colors' column as a JSON column (assuming it's an array)
        Schema::table('products', function (Blueprint $table) {
            $table->json('color')->nullable();
        });
    }

    public function down()
    {
        // If you need to rollback, you can define the down method.
        // However, be cautious as it may result in data loss.
    }
}
