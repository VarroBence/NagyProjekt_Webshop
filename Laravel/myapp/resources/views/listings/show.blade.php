@extends('layout')

@section('content')
    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-5" style="margin-left: 30rem; margin-right: 30rem">
        <x-card class="p-10">
            <div class="flex flex-col items-center justify-center text-center">
                <img class="w-48 mr-6 mb-6"
                    src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png') }}"
                    alt="" />

                <h3 class="text-2xl mb-2">{{ $listing->title }}</h3>
                <div class="text-xl font-bold mb-4">{{ $listing->price }} Ft</div>
                <div>
                    <x-listing-tags :tagsCsv="$listing->tags" />
                </div>

                <div class="border border-gray-200 w-full mb-6"></div>

                    <h3 class="text-3xl font-bold mb-4">
                        Description <i class="fa-solid fa-shirt"></i>
                    </h3>
                    <div class="text-lg space-y-6">
                        <pre>{{ $listing->description }}
                        <pre>

                        <?php $shoppingCart = (new Jackiedo\Cart\Cart)->name('shopping')?>

                        {{-- Kosárhoz adáshoz majd szerkeszteni!!!!!!!!!! --}}
                        <button onclick="<?php $shoppingCart->addItem([
                                                                'id'=>$listing->id,
                                                                'title'=>$listing->title
                                                            ])?>"><a target="_blank"

                            class="block bg-black text-white py-2 rounded-xl hover:opacity-80"><i class="fa fa-cart-plus"
                                aria-hidden="true">"</i>Add to cart</a></button>
                    </div>

            </div>
        </x-card>
        <x-card class="mt-4 p-2 flex space-x-6">
            <a href="/listings/{{ $listing->id }}/edit">
                <i class="fa-solid fa-pencil"></i>Edit
            </a>

            <form method="POST" action="/listings/{{ $listing->id }}">
                @csrf
                @method('DELETE')
                <button class="text-red-500">
                    <i class="fa-solid fa-trash"></i>Delete
                </button>
            </form>
        </x-card>
    </div>
@endsection
