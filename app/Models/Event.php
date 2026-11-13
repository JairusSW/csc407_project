<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $primaryKey = 'event_id';
    public $timestamps = false;
    public $casts = ['event_start_date' => 'datetime', 'event_end_date' => 'datetime'];
}
