<?php

namespace App\Models;

use App\Traits\Trashed;
use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Packages extends Model
{
    use Filterable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = ['package_ID', 'name', 'less_amount', 'biggest_amount'];
}
