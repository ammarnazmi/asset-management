<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;
use App\Models\AssetStatus;
use App\Models\AssetType;
use App\Http\Requests\AssetsRequest;

class AssetController extends Controller
{
    public function index()
    {
        $assets = Asset::with([
            'assetType',
            'assetStatus',
        ])->get();
        $assetStatuses = AssetStatus::all();
        $assetTypes = AssetType::all();

        return view('assets.index',[
            'assets' => $assets,
            'assetStatuses' => $assetStatuses,
            'assetTypes' => $assetTypes,
        ]);
    }

    public function update(AssetsRequest $assetsRequest, $id)
    {
        $asset = Asset::find($id);

        $asset->name = $assetsRequest->name;
        $asset->asset_type_id = $assetsRequest->asset_type;
        $asset->serial_number = $assetsRequest->serial_number;
        $asset->brand_model = $assetsRequest->brand_model;
        $asset->asset_status_id = $assetsRequest->asset_status;
        $asset->update();

        return redirect('/assets')->with('status', "Data updated Successfully");
    }
}
