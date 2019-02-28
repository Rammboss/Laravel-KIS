<!doctype html>
<html lang="de">
<head>
    @include('includes.head-admin')

</head>
<body>
@if(Auth::user()->role_id === 1)
    <header>
        @include('includes.header-admin')
    </header>

    @include('includes.sidebar-admin')

    @yield('content')
@else
    <!-- error-404  -->
    <div class="md:flex min-h-screen">
        <div class="w-full md:w-1/2 bg-white flex items-center justify-center">
            <div class="max-w-sm m-8">
                <div class="text-black text-5xl md:text-15xl font-black">
                    {{ __('404') }}
                </div>

                <div class="w-16 h-1 bg-purple-light my-3 md:my-6"></div>

                <p class="text-grey-darker text-2xl md:text-3xl font-light mb-8 leading-normal">
                    {{ __('Sorry, the page you are looking for could not be found.') }}
                </p>

                <a href="http://192.168.10.10">
                    <button class="bg-transparent text-grey-darkest font-bold uppercase tracking-wide py-3 px-6 border-2 border-grey-light hover:border-grey rounded-lg">
                        {{ __('Go Home') }}
                    </button>
                </a>
            </div>
        </div>

        <div class="relative pb-full md:flex md:pb-0 md:min-h-screen w-full md:w-1/2">
            <div style="background-image: url(http://192.168.10.10/svg/404.svg);" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
            </div>
        </div>
    </div>
@endif
</body>
</html>