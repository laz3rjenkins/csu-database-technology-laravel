<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailBox extends Model
{
    use HasFactory;

    protected $table = "mail_box";
    protected $fillable = [
        'sender_id',
        'recipient',
        'mail_text',
        'subject',
        'is_read'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'id', 'recipient');
    }

    public function sender(){
        return $this->hasOne(User::class, 'id', 'sender_id');
    }

    public function recipientObject(){
        return $this->hasOne(User::class, 'id', 'recipient');
    }

    public function usersSentMails(){
        return $this->belongsTo(User::class, 'id', 'sender_id');
    }
}
