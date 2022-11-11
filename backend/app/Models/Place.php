<?php

namespace App\Models;

use EloquentFilter\Filterable;

class Place extends Model
{
    use Filterable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = ['id', 'place_name', 'image', 'price', 'package_ID'];

    /**
     * Determines one-to-many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function packages()
    {
        return $this->belongsTo(Packages::class);
    }
}
