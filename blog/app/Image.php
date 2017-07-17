<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Image extends Model
{
    use Notifiable;

    protected $fillable = array('blog_id', 'directory', 'typ');
}