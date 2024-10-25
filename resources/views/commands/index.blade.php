@extends('layouts.app')
@include('layouts.navbar')

@section('content')
    <div
        class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 mt-10">



        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nome
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Comando
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Saída
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Descrição
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($commands as $command)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $command->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $command->input }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $command->output }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $command->description }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
