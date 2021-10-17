<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Catalogo') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table>
                        <tr>
                            <th>Titulo</th>
                            <th>Ano de lancamento</th>
                        </tr>
                        @foreach($obras as $obra)
                            <tr>
                                <td>
                                    {{ $obra['titulo'] }}
                                </td>
                                <td>
                                    {{ $obra['lancamento'] }}
                                </td>
                                <td class="text-red-500">
                                    <form action="/catalogo/{{ $obra->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        @if (Auth::id() !== null && Auth::id() === $obra->user_id)
                                            <button type="submit">Deletar</button>
                                        @endif
                                    </form>
                                </td>
                                <td class="text-green-500">
                                    @if (Auth::id() !== null && Auth::id() === $obra->user_id)
                                        <a href="/obra/{{ $obra->id }}/edit">Editar</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
