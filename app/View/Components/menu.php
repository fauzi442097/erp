<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Role;

class menu extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $roleId = auth()->user()->roles->first()->id;
        $role = Role::find($roleId);
        $menus = $role->menus()->with('children')->whereNull('parent_id')->orderBy('seq')->get();
        $param['menus'] = $menus;
        return view('components.menu', $param);
    }
}
