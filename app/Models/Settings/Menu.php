<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'stg_menu';

    public function submenu()
    {
        return $this->hasMany(SubMenu::class, 'menu_id', 'id')->select('id', 'menu_id', 'title', 'url', 'icon')->where('active', 1)->where('admin', 1);
    }
}
