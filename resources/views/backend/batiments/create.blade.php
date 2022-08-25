@extends('layout.back')
@section('content')
<div class="container">
<h1 class="flex items-center text-5xl font-extrabold dark:text-black">Create batiments</h1>

<form action="{{ url('batiments') }}" method="post">
    @csrf
    <div>
        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nom</label>
        <input name="nom" placeholder="nom" type="text" id="small-input" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div>
        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Description</label>
        <input name="description" placeholder="description" type="text" id="small-input" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>

    <button type="submit" class="m-5 align-center bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">save</button>
</form>
</div>

@endsection
