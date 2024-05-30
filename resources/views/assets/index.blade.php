@extends('layouts.main')

@section('content')
<section class="sm:ml-64">
    <div class="p-4">
        <div class="flex items-center px-2 py-8">
            <ion-icon name="briefcase" class="text-2xl text-gray-800"></ion-icon>
            <h1 class="font-bold uppercase text-xl ml-2 text-gray-800">Assets</h1>
        </div>
        <div class="relative overflow-x-auto rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-400">
                <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            type
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Serial Number
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Brand/Model
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Quantity
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($assets as $asset)
                    <tr class="border-b bg-gray-800 border-gray-700 text-white">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap ">
                            {{ $asset->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $asset->assetType->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $asset->serial_number}}
                        </td>
                        <td class="px-6 py-4">
                            {{ $asset->brand_model }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $asset->quantity }}
                        </td>
                        <td class="px-6 py-4">
                            @if($asset->assetStatus->name == 'Available')
                                <span class="text-xs font-medium me-2 px-2.5 py-0.5 rounded bg-green-800 text-green-300">Available</span>
                            @else
                                <span class="text-xs font-medium me-2 px-2.5 py-0.5 rounded bg-red-900 text-red-300">In Used</span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="{{'default-modal' . $asset->id}}" data-modal-toggle="{{'default-modal' . $asset->id}}"  type="button" class="focus:outline-none text-white  font-medium rounded-lg text-sm px-4 py-2 mb-2 bg-indigo-500 hover:bg-indigo-600 ">Edit</button>
                        </td>
                    </tr>
                    @include('assets.modal')

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @if(session('status'))
    <div class="absolute right-3 top-3">
        @include('assets.toast')
    </div>
    @endif

</section>
@endsection

@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var toast = document.getElementById('toast-success');
        if(toast) {
            setTimeout(function() {
                toast.style.display = 'none';
            }, 2000);
        }
    });
</script>
@endsection
