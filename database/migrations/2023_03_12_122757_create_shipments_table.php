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
            
            $table->string('comment1')->nullable()->default("");
            $table->string('package_detail1')->nullable()->default("");
            $table->text('date1')->nullable();

            $table->string('comment2')->nullable()->default("");
            $table->string('package_detail2')->nullable()->default("");
            $table->text('date2')->nullable();

            $table->string('comment3')->nullable()->default("");
            $table->string('package_detail3')->nullable()->default("");
            $table->text('date3')->nullable();

            $table->string('comment4')->nullable()->default("");
            $table->string('package_detail4')->nullable()->default("");
            $table->text('date4')->nullable();

            $table->string('comment5')->nullable()->default("");
            $table->string('package_detail5')->nullable()->default("");
            $table->text('date5')->nullable();

            $table->string('comment6')->nullable()->default("");
            $table->string('package_detail6')->nullable()->default("");
            $table->text('date6')->nullable();

            $table->string('comment7')->nullable()->default("");
            $table->string('package_detail7')->nullable()->default("");
            $table->text('date7')->nullable();

            $table->string('comment8')->nullable()->default("");
            $table->string('package_detail8')->nullable()->default("");
            $table->text('date8')->nullable();

            $table->string('comment9')->nullable()->default("");
            $table->string('package_detail9')->nullable()->default("");
            $table->text('date9')->nullable();

            $table->string('comment10')->nullable()->default("");
            $table->string('package_detail10')->nullable()->default("");
            $table->text('date10')->nullable();

            $table->string('comment11')->nullable()->default("");
            $table->string('package_detail11')->nullable()->default("");
            $table->text('date11')->nullable();

            $table->string('comment12')->nullable()->default("");
            $table->string('package_detail12')->nullable()->default("");
            $table->text('date12')->nullable();


            $table->string('comment13')->nullable()->default("");
            $table->string('package_detail13')->nullable()->default("");
            $table->text('date13')->nullable();

            $table->string('comment14')->nullable()->default("");
            $table->string('package_detail14')->nullable()->default("");
            $table->text('date14')->nullable();

            $table->string('comment15')->nullable()->default("");
            $table->string('package_detail15')->nullable()->default("");
            $table->text('date15')->nullable();
            
    
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
