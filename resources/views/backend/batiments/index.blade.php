@extends('layout.back')
@section('content')
<div class="overflow-x-auto relative">
<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
        <th scope="col" class="py-3 px-6 text-center">ID</th>
        <th scope="col" class="py-3 px-6 text-center">Nom</th>
        <th scope="col" class="py-3 px-6 text-center">Description</th>
        <th scope="col" class="py-3 px-6 text-center">Show</th>
        <th scope="col" class="py-3 px-6 text-center">Edit</th>
        <th scope="col" class="py-3 px-6 text-center">Delete</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($batiments as $batiment)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                <td class="py-4 px-6">{{ $batiment->id }}</td>
                <td class="py-4 px-6">{{ $batiment->nom }}</td>
                <td class="py-4 px-6">{{ $batiment->description }}</td>
                <td class="py-4 px-6"><a href="{{ url('/batiments/' . $batiment->id) }}"><button class="m-5 align-center bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">show</button></a></td>
                <td class="py-4 px-6"><a href="{{ url('/batiments/' . $batiment->id . '/edit') }}"><button class="m-5 align-center bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">edit</button></a></td>
                <form action="{{ url('/batiments/' . $batiment->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <td class="py-4 px-6"><button class="m-5 align-center bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" type="submit" name="delete">delete</button></td>
                </form>
            </tr>
        @endforeach
    </tbody>
</table>
</div>

<a href="{{ url('/batiments/create') }}"><button class="m-5 align-center bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">create batiment</button></a>
@endsection


