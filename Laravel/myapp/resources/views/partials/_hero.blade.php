<section
class="relative h-72 bg-blue flex flex-col justify-center align-center text-center space-y-4 mb-4"
>
<div
    class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
    style="background-image: url('images/laravel-logo.png')"
></div>
        @php
            $admin = \App\Http\Controllers\AdminController::check(\Illuminate\Support\Facades\Auth::id());
        @endphp
<div class="z-10">
    @if($admin)
    <h1 class="text-6xl font-bold uppercase text-white">
        T-Shirt<span class="text-black">Welcome Admin!</span>
    </h1>
    @else
    <h1 class="text-6xl font-bold uppercase text-white">
        T-Shirt<span class="text-black">Webshop</span>
    </h1>
    @endif
    <p class="text-2xl text-black-200 font-bold my-4">
        Find T-shirts for your taste
    </p>
    <div>
        @guest
            <a
                href="{{ route('register') }}"
                class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black"
                >Click here to Sign Up</a
            >
        @endguest
    </div>
</div>
</section>
