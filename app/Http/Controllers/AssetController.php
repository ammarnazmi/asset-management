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

        $asset->update([
            'name' => $assetsRequest->name,
            'asset_type_id' => $assetsRequest->asset_type,
            'serial_number' => $assetsRequest->serial_number,
            'brand_model' => $assetsRequest->brand_model,
            'asset_status_id' => $assetsRequest->asset_status,
        ]);

        return redirect('/assets')->with('status', "Data updated Successfully");
    }

    public function downloadCsv()
    {
        $data = Asset::with([
            'assetType',
            'assetStatus',
        ])->get();

        $fileName = "assets.csv";
        $filePath = fopen($fileName, "w+");
        fputcsv($filePath, array('Name', 'Type', 'Serial Number', 'Brand Model', 'Quantity', 'Status', 'Purchase Date', 'Delivery Date'));

        foreach($data as $row) {
            fputcsv($filePath, array($row->name, $row->assetType->name, $row->serial_number,
            $row->brand_model, $row->quantity, $row->assetStatus->name, $row->purchase_date, $row->delivery_date));
        }

        fclose($filePath);
        $headers = array('Content-type' => 'text/csv');
        return response()->download($fileName, 'assets.csv', $headers);
    }
}
