@extends('layout')

@section('content')
<x-card class="p-10 max-w-lg mx-auto mt-24">

    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Create
        </h2>
        <p class="mb-4">Post a new T-shirt</p>
    </header>

    <form action="">

        <div class="mb-6">
            <label for="title" class="inline-block text-lg mb-2">Title</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                placeholder="Example: Super cool T-shirt" />
        </div>

        <div class="mb-6">
            <label for="tags" class="inline-block text-lg mb-2">
                Tags (Comma Separated)
            </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                placeholder="Example: Black, Latest model, etc" />
        </div>

        <div class="mb-6">
            <label for="logo" class="inline-block text-lg mb-2">
                Image
            </label>
            <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
        </div>

        <div class="mb-6">
            <label for="description" class="inline-block text-lg mb-2">
                Description
            </label>
            <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                placeholder="Made from 100% cotton, black, made in Italy, etc"></textarea>
        </div>

        <div class="mb-6">
            <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                Create T-shirt
            </button>

            <a href="/" class="text-black ml-4"> Back </a>
        </div>
    </form>
    </div>
</x-card>
@endsection

