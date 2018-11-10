<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model; 

class Log extends Model
{
    use SoftDeletes;

    protected $collection = 'logs';
    protected $fillable = [
        'instance',
        'channel',
        'level',
        'message',
        'context',
        'created_at',
        'updated_at'
    ]; 
}
