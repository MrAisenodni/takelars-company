<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;

    protected $table = 'stg_login';

    public function user()
    {
        return $this->belongsTo(User::class)->where('active', 1);
    }
}
