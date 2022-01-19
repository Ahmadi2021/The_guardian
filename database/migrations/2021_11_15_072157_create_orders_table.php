<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_id')->unique();
            $table->string('title');
            $table->enum('type', config('enums.type'))->default('private');
            $table->text('description');
            $table->unsignedDecimal('budget');
            $table->enum('status', config('enums.status'))->default('pending');
            $table->boolean('is_assigned')->default(false);
            $table->date('deadline');
            $table->enum('payment_type', config('enums.payment_type'))->default('partial');
            $table->enum('payment_status', config('enums.payment_status'))->default('unpaid');
            $table->text('file');
            $table->foreignId('customer_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
