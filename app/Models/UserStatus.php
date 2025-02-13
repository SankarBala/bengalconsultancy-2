<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserStatus extends Model
{
    use HasFactory;

    public function status(){
        return $this->hasOne(ClientStatus::class, 'status_id', 'user_status')->withDefault();
    }
}
