<section
class="relative h-72 flex flex-col justify-center items-center text-center space-y-4 mb-4" style="background-color: #7f8952;"
>
    <div
        class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
        style="background-image: url('images/laravel-logo.png')"
    ></div>

    <div class="z-10">
        <h1 class="text-6xl font-bold uppercase text-white">
            IZILI<span class="text-black">JOB</span>
        </h1>
        <p class="text-2xl text-gray-200 font-bold my-4">
            Find or post jobs
        </p>
        @if (auth()->check())
        <div>
            <a
                href="createjob"
                class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black"
            >Create a Job</a
            >
        </div>
        @else
        <div>
            <a
                href="{{route("showregister")}}"
                class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black"
            >Sign Up to add a offer</a
            >
        </div>
        @endif
    </div>
</section>
