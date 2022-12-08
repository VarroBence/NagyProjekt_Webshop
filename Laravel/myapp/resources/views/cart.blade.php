@extends('layout')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Cart</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

@section('content')
    <div class="container-fluid" style="margin-bottom: 0px;padding-bottom: 0px;padding-left: 12px;">
        <div class="row">
            <div class="col-lg-6 offset-lg-0">
                <div class="card d-lg-flex align-items-center">
                    <div class="card-body">
                        <h4 class="card-title">Cart</h4>
                    </div>
                    <div class="card-body text-start d-lg-flex">
                        <div class="table-responsive overflow-visible" style="margin-left: 0px;">
                            <?php $items = Cart::name('shopping')->getItems(); $i = 1;
                                  $total = 0;
                            @if(empty($items))
                                <div>
                                    <label class=>Your cart is empty!</label>
                                </div>
                            @else
                                <table class="table ">
                                    <tr>
                                        <th>{{$i++}}</th>
                                        <td>
                                            <img class="hidden w-10 mr-6 md:block"
                                                 src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png') }}"
                                                 alt="" />
                                        </td>
                                        <td>{{$listing->title}}</td>
                                        <td {{$total += $listing->price}}>{{$listing->price}} Ft</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="row p-2">
                                <div class="col">
                                    <label>Total:</label>
                                </div>
                                <div class="col" style="text-align: right">
                                    <label >{{$total}}Ft</label>
                                </div>
                            </div>
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-0">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Shipping details</h4>
                        <form>
                            <div class="row">
                                <div class="col"><label class="form-label">name</label><input class="form-control" type="text">
                                    <div class="row">
                                        <div class="col"><label class="form-label">email</label><input class="form-control" type="email"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col"><label class="form-label">phone</label><input class="form-control d-lg-flex justify-content-lg-end" type="tel"></div>
                            </div>
                            <div class="row">
                                <div class="col"><label class="form-label">post code</label><input class="form-control d-lg-flex justify-content-lg-end" type="text"></div>
                                <div class="col"><label class="form-label">city</label><input class="form-control" type="text"></div>
                            </div>
                            <div class="row">
                                <div class="col"><label class="form-label">address</label><input class="form-control" type="text"></div>
                            </div>
                            <div class="row">
                                <div class="col d-lg-flex justify-content-lg-end" style="margin-top: 26px;"><button class="btn btn-primary d-lg-flex" type="button">place order</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
@endsection
