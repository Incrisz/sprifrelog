<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->string('tracking_id')->unique();

            $table->string('ref_code');
            $table->string('serial_number');
            $table->string('item_name');
            $table->string('order_type');
            $table->string('deposit_number');
            $table->string('delivery_percentage');
            $table->string('shipping_from');
            $table->string('shipping_to');



            $table->string('sender_name');
            $table->string('sender_address');
            $table->string('sender_city')->nullable()->default("");
            $table->string('sender_state')->nullable()->default("");
            $table->string('sender_country')->nullable()->default("");
            $table->string('sender_phone')->nullable()->default("");
            $table->string('sender_email')->nullable()->default("");

            $table->string('receiver_name');
            $table->string('receiver_address');
            $table->string('receiver_city')->nullable()->default("");
            $table->string('receiver_state')->nullable()->default("");
            $table->string('receiver_country')->nullable()->default("");
            $table->string('receiver_phone')->nullable()->default("");
            $table->string('receiver_email')->nullable()->default("");


            $table->string('shipment_weight')->nullable()->default("");
            

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
           
    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipments');
    }
};
