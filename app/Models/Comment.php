<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['comment', 'package_detail', 'date'];

    public function shipment()
{
    return $this->belongsTo(Shipment::class);
}

}
