@extends('layout')

@section('content')

    <h1>Cart</h1>

    <table class="table">
        <tbody>
        @foreach ($cart as $item)

            <tr>
                <td>{{ $item }}</td>
            </tr>
        @endforeach
        </tbody>
@endsection
