<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $primaryKey = 'contact_id';
    public $timestamps = false;
    public $guarded = [];
    public $casts = ['date_of_birth' => 'datetime'];

    public function events()
    {
        return $this->belongsToMany(Event::class, 'event_participants', 'contact_id', 'event_id');
    }

    public function donations()
    {
        return $this->hasMany(Donation::class, 'donor_id', 'donor_id');
    }
}
