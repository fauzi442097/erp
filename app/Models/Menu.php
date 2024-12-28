<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_menu');
    }

    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id')->orderBy('seq', 'ASC');
    }

    public function subMenu()
    {
        return $this->children()->with('subMenu');
    }
}
