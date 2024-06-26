<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetType extends Model
{
    use HasFactory;

    public function assets()
    {
        return $this->hasMany(Asset::class, 'asset_status_id');
    }
}
