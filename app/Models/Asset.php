<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'asset_type_id',
        'serial_number',
        'brand_model',
        'quantity',
        'purchase_date',
        'asset_status_id',
        'delivery_date',
    ];

    public function assetType()
    {
        return $this->belongsTo(AssetType::class, 'asset_type_id');
    }

    public function assetStatus()
    {
        return $this->belongsTo(AssetStatus::class, 'asset_status_id');
    }
}
