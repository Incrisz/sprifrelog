<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'tracking_id',

        'ref_code',
        'serial_number',
        'item_name',
        'order_type',
        'deposit_number',
        'delivery_percentage',
        'shipping_from',
        'shipping_to',


        'sender_name', 
        'sender_address', 
        'sender_city', 
        'sender_state', 
        'sender_country', 
        'sender_phone', 
        'sender_email', 

        'receiver_name', 
        'receiver_address', 
        'receiver_city', 
        'receiver_state', 
        'receiver_country', 
        'receiver_phone', 
        'receiver_email',


        'shipment_weight', 


        'comment1',
        'package_detail1',
        'date1',


        'comment2',
        'package_detail2',
        'date2',


        'comment3',
        'package_detail3',
        'date3',


        'comment4',
        'package_detail4',
        'date4',


        'comment5',
        'package_detail5',
        'date5',


        'comment6',
        'package_detail6',
        'date6',


        'comment7',
        'package_detail7',
        'date7',


        'comment8',
        'package_detail8',
        'date8',
    ];
}
