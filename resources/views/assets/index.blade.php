@extends('layouts.main')

@section('content')
<section class="sm:ml-64">
    <div class="p-4">
        <div class="flex items-center px-2 py-8">
            <ion-icon name="briefcase" class="text-2xl text-gray-800"></ion-icon>
            <h1 class="font-bold uppercase text-xl ml-2 text-gray-800">Assets</h1>
        </div>
        <div class="relative overflow-x-auto rounded-xl">
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
                            Purchase Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Delivery Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b bg-gray-800 border-gray-700 text-white">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap ">
                            Apple MacBook Pro 17"
                        </th>
                        <td class="px-6 py-4">
                            Silver
                        </td>
                        <td class="px-6 py-4">
                            Electronic
                        </td>
                        <td class="px-6 py-4">
                            Laptop
                        </td>
                        <td class="px-6 py-4">
                            1
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-xs font-medium me-2 px-2.5 py-0.5 rounded bg-red-900 text-red-300">In Used</span>
                            <span class="text-xs font-medium me-2 px-2.5 py-0.5 rounded bg-green-900 text-green-300">Available</span>
                        </td>
                        <td class="px-6 py-4">
                            22-2-2022
                        </td>
                        <td class="px-6 py-4">
                            22-2-2022
                        </td>
                        <td class="px-6 py-4">
                            <button type="button" class="focus:outline-none text-white  font-medium rounded-lg text-sm px-5 py-2.5 mb-2 bg-purple-500 hover:bg-purple-600 ">Edit</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
