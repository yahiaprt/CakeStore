<?php

// database/migrations/2023_11_26_create_orders_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('item')->nullable();
            $table->string('name')->nullable();
            $table->string('customer')->nullable();
            $table->json('items')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->string('payment')->nullable();
            $table->string('status')->nullable();
            $table->date('date')->nullable();
            // Add more columns as needed

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
