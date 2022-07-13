<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{
    use HasFactory;

    protected $table = 'stg_submenu';

    public function menu()
    {
        return belongsTo(Menu::class, 'menu_id', 'id')->select('id', 'title', 'url', 'icon')->where('active', 1)->where('admin', 1);
    }
}
