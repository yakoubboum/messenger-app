<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    protected $fillable = [
        'user1_id',
        'user2_id',
        'last_message_id'
    ];

    public function lastMessage()
    {
        return $this->belongsTo(Message::class, 'last_message_id');
    }

    public function user1()
    {
        return $this->belongsTo(User::class, 'user1_id','id');
    }

    public function user2()
    {
        return $this->belongsTo(User::class, 'user2_id','id');
    }    


}
