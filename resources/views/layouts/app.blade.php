<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Books') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app" class="flex flex-col h-screen justify-between">
        <nav class="flex items-center justify-between flex-wrap bg-blue-400 px-16 py-6">
            <div class="flex items-center flex-shrink-0 text-white">
                <div class="w-12">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 388.578 388.578" style="enable-background:new 0 0 388.578 388.578;" xml:space="preserve">
                    <g id="XMLID_18_">
                        <rect id="XMLID_38_" x="45.539" y="0" style="fill:#00D7DF;" width="297.5" height="333.815" />
                        <rect id="XMLID_19_" x="194.289" style="fill:#00969B;" width="148.75" height="333.815" />
                        <rect id="XMLID_36_" x="112.168" y="99.052" style="fill:#FFEB99;" width="137.121" height="70" />
                        <rect id="XMLID_35_" x="112.168" y="209.052" style="fill:#FFEB99;" width="137.121" height="40" />
                        <rect id="XMLID_20_" x="194.289" y="209.052" style="fill:#FFE477;" width="77.879" height="40" />
                        <rect id="XMLID_21_" x="194.289" y="99.052" style="fill:#FFE477;" width="77.879" height="70" />
                        <rect id="XMLID_32_" x="45.539" y="324.289" style="fill:#FFDA44;" width="297.5" height="64.289" />
                        <rect id="XMLID_22_" x="194.289" y="324.289" style="fill:#FFCD00;" width="148.75" height="64.289" />
                    </g>
                </svg>
                </div>
                <span class="font-semibold text-xl tracking-tight w-30"><a href="/book" >Book App</a></span>
            </div>
            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                <div class="text-sm lg:flex-grow">

                </div>
                @if(auth()->user() && auth()->user()->role == 'admin' )
                <a href="/users" class="mr-4 inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">
                    User list

                </a>
                @endif
                @guest
                @if (Route::has('login'))
                <a href="{{ route('login') }}" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">
                    {{ __('Login') }}

                </a>
                @endif
                @if (Route::has('register'))
                <a class="ml-4 inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
                @else
                <div>
                    <a id="navbarDropdown" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                </div>
                <div>
                    <a class="ml-4 inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                </div>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                @endguest
            </div>
        </nav>


        <main >
            <div class="m-16 h-full">
            @yield('content')
            </div>
        </main>
        <footer class=" border-t border-gray-200 flex items-center justify-between flex-wrap bg-blue-400 px-16 py-6 w-full sticky">
            <p class="text-white text-md">Naji Yaseen - 2021</p>
        </footer>
    </div>
</body>

</html>