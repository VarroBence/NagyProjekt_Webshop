<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#ef3b2d",
                    },
                },
            },
        };
    </script>
    <title>Webshop | Find T-shirts for your taste</title>
</head>
    @php
    $admin = \App\Http\Controllers\AdminController::check(\Illuminate\Support\Facades\Auth::id());
    @endphp
<body class="mb-48"
    style="background-image:url({{ url('images/background.jpg') }}); background-size: cover; background-position: center center">
    <nav class="flex justify-between items-center mb-4">
        <a href="/"><img class="w-24" src="{{ asset('images/logo.png') }}" alt="" class="logo" /></a>
        <ul class="flex space-x-6 mr-6 text-lg">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('cart') }}">Cart</a>
            </li>
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                @if($admin)
                <li class="nav-item">
                    <a class="nav-link" href="/orders">Orders</a>
                </li>
                @endif
                <li>
                    <a class="nav-link" href="/user/{{ Auth::user()->id }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            @endguest

        </ul>
    </nav>

    <main>
        {{-- Vire output --}}
        @yield('content')

    </main>
        <footer
            class="fixed bottom-0 left-0 w-full  flex  items-center justify-start font-bold bg-laravel text-white h-20 mt-24 opacity-90 md:justify-center">
            <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>
            @if($admin)
            <a href="listings/create" class="absolute top-1/4 right-10 bg-black text-white py-2 px-5">Post a T-shirt</a>
            @endif
        </footer>


    <x-flash-message />
</body>

</html>
