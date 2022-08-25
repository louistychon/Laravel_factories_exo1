@extends('layout.back')
@section('content')
    <div class="card">
        <h1 class="flex items-center text-5xl font-extrabold dark:text-black">Modify batiments</h1>
        <div class="card-body">

            <form action="{{ url('batiments/' . $batiments->id) }}" method="post">
                @csrf
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{ $batiments->id }}" id="id" />
                <label for="nom" class="block mb-2 text-sm font-medium">Nom</label>
                <input type="text" name="nom" id="nom" value="{{ $batiments->nom }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
                <label for="description" class="block mb-2 text-sm font-medium">Description</label>
                <input type="text" name="description" id="description" value="{{ $batiments->description }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
                <input type="submit" value="Update" class="btn btn-success m-5 align-center bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
            </form>

        </div>
    </div>
@endsection
