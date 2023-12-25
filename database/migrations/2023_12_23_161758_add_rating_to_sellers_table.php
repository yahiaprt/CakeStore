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
            $table->integer('rating')->default(0)->after('email');
            // Adjust the default value as needed
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
