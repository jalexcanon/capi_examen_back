<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class UserDomicilio extends Model
{
    use HasFactory;
    protected $table ='user_domicilio';
    public $timestamps = false;
    public function user(){
        return $this->belongsTo(User::class);
    }

}
