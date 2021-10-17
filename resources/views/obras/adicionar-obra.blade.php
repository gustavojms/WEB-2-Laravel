<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Adicionar nova obra') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('adicionar-obra') }}" method="post">
                        @csrf

                        <label for="titulo"> Titulo </label>
                        <input type="text" id="titulo" name="titulo" value="{{ old("titulo") }}">

                        <label for="lancamento"> Ano de lancamento </label>
                        <input type="number" id="lancamento" name="lancamento" value="{{ old("lancamento") }}"
                               min="1950" max="2021">

                        <button type="submit">Adicionar</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
