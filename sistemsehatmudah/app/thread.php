<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class thread extends Model
{
    //Table Name
    protected $table = 'thread';

    //Primary key
    public $primary = 'id';
    // DB Conn
    // protected $connection = 'connection-name';
}
