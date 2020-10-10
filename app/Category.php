<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;


class Category extends Model
{
    use Sortable;
    //public $timestamps = false;
    public $sortable = ['id',
        'name',
        'created_at',
        'updated_at'];
}
