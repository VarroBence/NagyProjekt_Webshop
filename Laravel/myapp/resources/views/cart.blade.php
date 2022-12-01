@extends('layout')

@section('content')

    <h1>Cart</h1>

    <table class="table">
        <tbody>
        <?php $items = Cart::name('shopping')->getItems() ?>
        @foreach ($items as $hash => $item)
            <?php $current = $item->getDetails() ?>
            <tr>
                <td >{{$current['title']}}</td>
            </tr>
        @endforeach
        </tbody>
@endsection
