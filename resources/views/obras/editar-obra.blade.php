<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editando obra') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="/obra/{{ $obra->id }}" method="post">
                        @csrf
                        @method('PUT')

                        <label for="titulo"> Titulo </label>
                        <input type="text" id="titulo" name="titulo" value="{{ old("titulo") }}">

                        <label for="lancamento"> Ano de lancamento </label>
                        <input type="text" id="lancamento" name="lancamento" value="{{ old("lancamento") }}">

                        <button type="submit">Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
