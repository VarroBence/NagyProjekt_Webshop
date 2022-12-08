@extends('layout')

@section('content')

<div class="container">
    <div class="card d-lg-flex align-items-lg-center">
        <div class="card-body">
            <h4 class="card-title">Placed orders</h4>
        </div>
        <div class="card-body text-start d-lg-flex">
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
                        <th scope="col">Adress</th>

                    </tr>
                    <tbody>
                    <?php $total = 1800;?>
                    @foreach ($orders as $item)
                            <?php $listing = $item->getModel();
                                ?>
                        <tr>
                            <td>
                                <img class="hidden w-10 mr-6 md:block"
                                     src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png') }}"
                                     alt="" />
                            </td>
                            <td>{{$listing->title}}</td>
                            <td {{$total += $listing->price}}>{{$listing->price}} Ft</td>
                            <td>{{$listing->name}}</td>
                            <td>{{$listing->email}}</td>
                            <td>{{$listing->city}}</td>
                            <td>{{$listing->adress}}</td>
                        </tr>
                    @endforeach
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
    </div>
  </div>




@endsection
