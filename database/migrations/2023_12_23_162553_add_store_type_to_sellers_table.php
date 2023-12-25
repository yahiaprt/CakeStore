<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('seller', function (Blueprint $table) {
            $table->string('store_type')->nullable()->after('rating');
            // Adjust the data type and constraints as needed
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
             //
   
    }
};
