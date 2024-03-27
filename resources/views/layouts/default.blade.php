@props(['page'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <!-- Google tag (gtag.js) -->
{{--<script async src="https://www.googletagmanager.com/gtag/js?id=G-0F11FHP9ML"></script>--}}
{{--<script>--}}
{{--  window.dataLayer = window.dataLayer || [];--}}
{{--  function gtag(){dataLayer.push(arguments);}--}}
{{--  gtag('js', new Date());--}}

{{--  gtag('config', 'G-0F11FHP9ML');--}}
{{--</script>--}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="/slick.css" />
    <link type="text/css" rel="stylesheet" href="/slick-theme.css" />
    <title>
        {{ isset($page->title) ? $page->title . ' | ' . 'Metamorpha' : 'Metamorpha' }}
    </title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @vite('resources/css/app.css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    @livewireStyles
</head>

<body class="antialiased">
    <a href="/contact"
        class="w-12 h-12 fixed bottom-5 right-5 z-[99999]  rounded-full bg-theme-blue flex items-center justify-center cursor-pointer transition-all hover:scale-105">
        <img src="/message.svg" alt="message" class="text-white ">
    </a>
    @if (session()->has('success'))
        <div class="absolute p-4 rounded-md bg-green-50 top-5 right-5" x-data="{ show: true }" x-show="show"
            x-init="setTimeout(() => show = false, 5000)">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="w-5 h-5 text-green-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-green-800"> {{ session('success') }}</p>
                </div>
                <div class="pl-3 ml-auto">
                    <div class="-mx-1.5 -my-1.5">
                        <button type="button"
                            class="inline-flex rounded-md bg-green-50 p-1.5 text-green-500 hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-offset-2 focus:ring-offset-green-50">
                            <span class="sr-only">Dismiss</span>
                            <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path
                                    d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if (session()->has('error'))
        <div class="absolute p-4 rounded-md bg-red-50 top-5 right-5" {{-- hidden after 5 seconds --}} x-data="{ show: true }"
            x-show="show" x-init="setTimeout(() => show = false, 5000)">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="w-5 h-5 text-red-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-red-800"> {{ session('error') }}</p>
                </div>
                <div class="pl-3 ml-auto">
                    <div class="-mx-1.5 -my-1.5">
                        <button type="button"
                            class="inline-flex rounded-md bg-red-50 p-1.5 text-red-500 hover:bg-red-100 focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2 focus:ring-offset-red-50">
                            <span class="sr-only">Dismiss</span>
                            <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path
                                    d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @livewire('navbar')
    @yield('main')
    {{--    <x-filament-fabricator::page-blocks :blocks="$page->blocks" /> --}}
    @livewire('footer')
    @vite('resources/js/app.js')
    <script src="https://kit.fontawesome.com/ac0911dcb0.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/slick.min.js"></script>
    @livewireScripts
</body>

</html>
