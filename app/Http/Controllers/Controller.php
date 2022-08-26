<?php

namespace App\Http\Controllers;

use App\Models\Admin\Login;
use App\Models\Admin\Masters\{
    Category,
    Position,
    Tag,
};
use App\Models\Settings\{
    SubMenu,
    Menu,
    Provider, 
};
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->login = new Login();
        $this->menu = new Menu();
        $this->provider = new Provider();
        $this->submenu = new SubMenu();
        
        // This is Master Variable
        $this->category = new Category();
        $this->position = new Position();
        $this->tag = new Tag();
    }
}
