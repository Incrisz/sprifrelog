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
        'user_id', 


       
    ];


    public function comments()
{
    return $this->hasMany(Comment::class);
}

public function user()
{
    return $this->belongsTo(User::class);
}

}
