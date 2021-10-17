<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Obras') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Clique no link abaixo para visualizar nosso catalogo ou adicionar uma nova obra
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex py-2">
                        <x-nav-link :href="route('catalogo')" :active="request()->routeIs('catalogo')">
                            {{ __('Catalogo') }}
                        </x-nav-link>
                    </div>
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex py-1">
                        <x-nav-link :href="route('adicionar-obra')" :active="request()->routeIs('adicionar-obra')">
                            {{ __('Adicionar nova obra') }}
                        </x-nav-link>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
