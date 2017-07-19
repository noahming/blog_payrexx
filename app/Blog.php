<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Blog extends Model
{
    use Notifiable;
    protected $fillable = array('user_id', 'title', 'desc_short', 'desc_long', 'date');

    public function images(){
        return $this->hasMany('App\Image');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }


}
