@extends('layout')
@section('content')
    <a href="/" class="inline-block text-black ml-4 mb-4"
    ><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <x-card class="p-10">
            <div class="flex flex-col items-center justify-center text-center">
                <h3 class="text-2xl mb-2">{{$user->name}}</h3>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div class="table-responsive overflow-visible" style="margin-left: 0px;">
                    <table class="table ">
                        <thead></thead>
                        <tr>

                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Price</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">City</th>
                            <th scope="col">Address</th>

                        </tr>
                        <tbody>

                        <!--
                            TODO: Ide másold át az orderből a kiiratást meg valahogy csináld meg hogy id alapján kiválogassa
                                  A jelenlegi user id-ját itt el tudod érni $user->id -val szerintem, minden máshol meg Auth::id() -vel
                        -->

                        </tbody>
                    </table>
                    <div class="row p-2">
                        <div class="col">
                            <label>Shipping: 1800 Ft</label>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col">
                            <label>Total:</label>
                        </div>
                        <div class="col" style="text-align: right">
                            <label >{{$total}}Ft</label>
                        </div>
                    </div>
                </div>
            </div>
        </x-card>
    </div>

@endsection
