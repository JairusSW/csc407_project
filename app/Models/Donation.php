<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    public $primaryKey = 'donation_id';
    public $timestamps = false;
    public $guarded = [];
    public $casts = ['donation_date' => 'datetime', 'donation_amount' => 'decimal:2'];
}
