<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname_cliente',
        'email_report',
        'phone_report',
        'description',
    ];

    public function getTag(){
        return $this->hasOne(Tag::class, 'id', 'tag');

    } 

    public function getState(){
        return $this->hasOne(State::class, 'id', 'state');

    } 
}
