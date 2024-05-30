<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;
use App\Models\AssetStatus;
use App\Models\AssetType;
use App\Http\Requests\AssetsStoreRequest;
use App\Http\Requests\PurchaseUpdateRequest;
use Carbon\Carbon;

class PurchaseController extends Controller
{
    public function index()
    {
        $assets = Asset::with([
            'assetType',
            'assetStatus',
        ])->get();
        $assetStatuses = AssetStatus::all();
        $assetTypes = AssetType::all();

        return view('purchases.index',[
            'assets' => $assets,
            'assetStatuses' => $assetStatuses,
            'assetTypes' => $assetTypes,
        ]);
    }

    public function store(AssetsStoreRequest $assetsStoreRequest)
    {
        $assets = Asset::create([
            'name' => $assetsStoreRequest->name,
            'asset_type_id' => $assetsStoreRequest->asset_type,
            'serial_number' => $assetsStoreRequest->serial_number,
            'brand_model' => $assetsStoreRequest->brand_model,
            'asset_status_id' => $assetsStoreRequest->asset_status,
            'purchase_date' => Carbon::createFromFormat('m/d/Y', $assetsStoreRequest->purchase_date)->format('Y-m-d'),
            'delivery_date' => Carbon::createFromFormat('m/d/Y', $assetsStoreRequest->delivery_date)->format('Y-m-d'),
            'quantity' => $assetsStoreRequest->quantity,
        ]);

        return redirect('/purchase')->with('status', "created");
    }

    public function update(PurchaseUpdateRequest $purchaseUpdateRequest, $id)
    {
        $asset = Asset::find($id);

        $asset->update([
            'name' => $purchaseUpdateRequest->name,
            'asset_type_id' => $purchaseUpdateRequest->asset_type,
            'serial_number' => $purchaseUpdateRequest->serial_number,
            'brand_model' => $purchaseUpdateRequest->brand_model,
            'asset_status_id' => $purchaseUpdateRequest->asset_status,
            'purchase_date' => Carbon::createFromFormat('m/d/Y', $purchaseUpdateRequest->purchase_date)->format('Y-m-d'),
            'delivery_date' => Carbon::createFromFormat('m/d/Y', $purchaseUpdateRequest->delivery_date)->format('Y-m-d'),
            'quantity' => $purchaseUpdateRequest->quantity,
        ]);

        return redirect('/purchase')->with('status', "updated");
    }

    public function destroy($id)
    {
        $assets = Asset::find($id);

        $assets->delete();

        return redirect('/purchase')->with('status', "deleted");
    }
}
