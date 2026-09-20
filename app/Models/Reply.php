<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillable = [
        'contact_message_id',
        'reply',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function contactMessage()
    {
        return $this->belongsTo(ContactMessage::class);
    }
}
