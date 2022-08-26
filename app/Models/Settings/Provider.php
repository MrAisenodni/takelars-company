<?php

namespace App\Models\Settings;

use App\Models\Admin\Masters\Position;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $table = 'stg_provider';

    public function position()
    {
        return $this->belongsTo(Position::class)->select('id', 'name')->where('active', 1);
    }
}
