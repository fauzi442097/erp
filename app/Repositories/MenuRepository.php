<?php

namespace App\Repositories;

use App\Models\Menu;
use DB;

class MenuRepository
{
    protected $model;

    public function __construct(Menu $model)
    {
        $this->model = $model;
    }

    public function getMenuHierarchy()
    {
        return \collect(DB::SELECT("with recursive menu_hierarchy as (
            select
                id,
                parent_id,
                name,
                seq,
                1 as level,
                array[id] as path
            from
                menu
            where
                parent_id is null
            union all
            select
                m.id,
                m.parent_id,
                m.name,
                m.seq,
                mh.level + 1 as level,
                mh.path || m.id
            from
                menu m
            inner join
                    menu_hierarchy mh on
                m.parent_id = mh.id
            )
            select
                *
            from
                menu_hierarchy
            order by
                path"));
    }
}
