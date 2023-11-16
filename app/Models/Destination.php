<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function search($keyword)
    {
        return $this->where('name', 'LIKE', '%' . $keyword . '%')->get();
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function photo()
    {
        return $this->hasMany(Photos::class);
    }

    public static function fillOrder()
    {
        $packages = Package::all();

        foreach ($packages as $package) {
            $destination = self::where('package_id', $package->id)->orderBy('order', 'desc')->get();

            $urutan = 1;

            foreach ($destination as $item) {
                $item->order = $urutan;
                $item->save();

                $urutan++;
            }
        }
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($destination) {
            $latestOrder = self::orderBy('order', 'desc')->value('order');
            $destination->order = $latestOrder ? $latestOrder + 1 : 1;
        });

        static::updating(function ($destination) {
            if ($destination->isDirty('order')) {
                $existingOrder = self::where('order', $destination->order)->where('id', '<>', $destination->id)->first();

                if ($existingOrder) {
                    self::where('order', '>=', $destination->order)
                        ->where('id', '<>', $destination->id)
                        ->increment('order');
                }
            }
        });
    }
}
