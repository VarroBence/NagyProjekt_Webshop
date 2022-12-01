@extends('layout')

@section('content')
    <x-card class="p-10 max-w-lg mx-auto mt-24">

        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Create
            </h2>
            <p class="mb-4">Post a new T-shirt</p>
        </header>

        <form method="POST" action="/listings" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Title</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                    value="{{ old('title') }}" placeholder="Example: Super cool T-shirt" />
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Price</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="price"
                    value="{{ old('price') }}" placeholder="Ft" />
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags (Comma Separated)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                    value="{{ old('tags') }}" placeholder="Example: Black, Latest model, etc" />
                @error('tags')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Image
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
                @error('logo')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>


            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Description
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                    placeholder="Made from 100% cotton, black, made in Italy, etc...">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
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
