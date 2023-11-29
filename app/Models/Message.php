<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    public const UNREAD = 0;
    public const READ = 1;
    public const REPLIED = 3;

    protected $fillable = [
        'sender_name',
        'sender_email',
        'body'
    ];
    
}
