<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-12">
            <div class="bg-white overflow-hidden shadow-xl shadow-gray-900 sm:rounded-lg">

                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-1">
                        <div class="p-6">
                            <div class="flex items-center">

                                <div class="p-2 text-lg text-gray-600 leading-7 font-semibold">
                                    <a href="">Accounts List</a>
                                </div>
                            </div>

                            <div class="m-6">
                               @livewire("employee",["id"=>1])
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
