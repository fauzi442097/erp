<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Role extends \Spatie\Permission\Models\Role implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'role_menu');
    }
}
