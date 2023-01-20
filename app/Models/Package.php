<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'packages';

    protected $guarded = ['id'];

    public function destinations()
    {
        return $this->hasMany(Destination::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
