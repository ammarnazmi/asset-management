@extends('layouts.main')

@section('content')
<section class="sm:ml-64">
    <div class="p-4">

        <div class="flex items-center px-2 py-8">
            <ion-icon name="wallet" class="text-2xl text-gray-700"></ion-icon>
            <h1 class="font-bold uppercase text-xl ml-2 text-gray-700">Purchase</h1>
        </div>
        <div class="pl-2">
            <button data-modal-target="add-modal" data-modal-toggle="add-modal"  type="button" class="flex focus:outline-none text-white  font-medium rounded-lg text-sm px-4 py-2 mb-2 bg-indigo-500 hover:bg-indigo-600 items-center justify-center">
                <ion-icon name="add-circle" class="mr-1 text-lg"></ion-icon>
                <p>Add</p>
            </button>
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
                            Purchase Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Delivery Date
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
                            {{ $asset->purchase_date }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $asset->delivery_date }}
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="{{'default-modal' . $asset->id}}" data-modal-toggle="{{'default-modal' . $asset->id}}"  type="button" class="focus:outline-none text-white  font-medium rounded-lg text-sm px-4 py-2 mb-2 bg-indigo-500 hover:bg-indigo-600 ">
                                <div class="flex items-center justify-center">
                                    <ion-icon name="create" class="mr-1 text-lg"></ion-icon>
                                    <p>Edit</p>
                                </div>
                            </button>
                            <a href="{{ route('purchase.destroy', $asset->id) }}">
                                <button type="button" class="focus:outline-none text-white  font-medium rounded-lg text-sm px-4 py-2 mb-2 bg-indigo-500 hover:bg-indigo-600 ">
                                    <div class="flex items-center justify-center">
                                        <ion-icon name="trash" class="mr-1 text-lg"></ion-icon>
                                        <p>Delete</p>
                                    </div>
                                </button>
                            </a>
                        </td>
                    </tr>
                    @include('purchases.modal')

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @if(session('status') === "updated")
    <div class="absolute right-3 top-3">
        @include('purchases.updatedToast')
    </div>
    @elseif(session('status') === "created")
    <div class="absolute right-3 top-3">
        @include('purchases.CreatedToast')
    </div>
    @elseif(session('status') === "deleted")
    <div class="absolute right-3 top-3">
        @include('purchases.deletedToast')
    </div>
    @endif
    @include('purchases.addModal')

</section>
@endsection

@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var toast = document.getElementById('toast-danger');
        if(toast) {
            setTimeout(function() {
                toast.style.display = 'none';
            }, 2000);
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        var toast = document.getElementById('toast-success');
        if(toast) {
            setTimeout(function() {
                toast.style.display = 'none';
            }, 2000);
        }
    });

    document.getElementById('decrement-button').addEventListener('click', function() {
        var input = document.getElementById('quantity-input');
        var currentValue = parseInt(input.value);
        if (currentValue <= 1) {
            input.value = 2;
            return;
        }
        console.log('hello');
    });
</script>
@endsection
