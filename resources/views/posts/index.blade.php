<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex items-center justify-between">
            {{ __('Posts') }}
            <div class="pr-4">
                <a href="{{ Route('posts.create') }}"
                class=" bg-gray-800 font-semibold text-white rounded px-4 py-2 mr-4">&nbsp;&nbsp;&nbsp;&nbsp;Nuevo Post&nbsp;&nbsp;&nbsp;&nbsp;</a>
                {{-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; --}}
            </div>

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-800 dark:text-gray-800">


                    <table class="mb-4 w-full">
                        <thead>
                            <tr>
                                <th colspan="3"><span class="text-indigo-700 font-semibold text-3xl uppercase">Listado de publicaciones</span></th>
                            </tr>
                        </thead>
                        @foreach ($posts as $post)
                            <tr class="border-b border-gray-800 text-sm w-full">
                                <td class="px-6 py-4 w-4/6">{{ $post->title }}</td>
                                <td class="pl-4 pr-0 py-4 w-1/12 ">
                                    <div class="px-0 mx-0 text-right">
                                        <a href="{{ Route('posts.edit', $post) }}" class="bg-gray-800 font-semibold text-white rounded px-4 py-2 ml-12 mr-0">Editar</a>
                                    </div>
                                </td>
                                <td class="px-0 py-4 w-1/6">

                                    <form action="{{ Route('posts.destroy', $post) }}" method="POST" class="px-0 mx-0 text-center">
                                    @csrf
                                    @method('DELETE')
                                    {{-- &nbsp;&nbsp;&nbsp; --}}
                                        <input
                                            type="submit"
                                            Value="Eliminar"
                                            class="bg-red-800 font-semibold text-white rounded px-4 py-2 mx-0"
                                            onclick="return confirm('¿Está seguro que desea eliminar este posteo?')"
                                        >
                                    </form>

                                    {{-- <a href="{{ Route('posts.destroy', $post)}}" class="text-indigo-600">Eliminar</a> --}}
                                </td>
                            </tr>

                        @endforeach
                        <tbody>
                            <tr>
                                <td colspan="3" class="py-4 w-full">{{ $posts->links() }}</td>
                            </tr>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
