@extends('layout')

@section('content')

<a href="/" class="inline-block text-black ml-4 mb-4"
                ><i class="fa-solid fa-arrow-left"></i> Back
            </a>
            <div class="mx-4">
                <div class="bg-gray-50 border border-gray-200 p-10 rounded">
                    <div
                        class="flex flex-col items-center justify-center text-center"
                    >
                        <img
                            class="w-48 mr-6 mb-6"
                            src="{{asset('images/no-image.png')}}"
                            alt=""
                        />

                        <h3 class="text-2xl mb-2">{{$listing->title}}</h3>
                        <div class="text-xl font-bold mb-4">{{$listing->price}} Ft</div>
                
                        <div class="border border-gray-200 w-full mb-6"></div>
                        <div>
                            <h3 class="text-3xl font-bold mb-4">
                                Description
                            </h3>
                            <div class="text-lg space-y-6">
                                <p>
                                    {{$listing->description}}
                                </p>

                            
                                {{--Kosárhoz adáshoz majd szerkeszteni!!!!!!!!!!--}}
                                <a
                                    href="https://test.com"
                                    target="_blank"
                                    class="block bg-black text-white py-2 rounded-xl hover:opacity-80"
                                    ><i class="fa fa-cart-plus" aria-hidden="true"></i></i> Add to cart</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection