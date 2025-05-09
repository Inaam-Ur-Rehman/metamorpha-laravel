<header class="border-b-2 border-theme-blue" x-cloak x-data="{ open: false }">
    <div
        class="flex flex-col justify-between px-4 py-6 mx-auto bg-white max-w-8xl lg:flex-row lg:items-center md:px-8 gap-y-8">
        <div class="flex items-center justify-between w-full">
            <a href="/">
                <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="w-44 md:w-64 lg:w-72 object-fill" />
            </a>
            <x-heroicon-o-bars-3 class="w-8 text-black cursor-pointer lg:hidden" @click="open = !open" />
        </div>
        {{-- Desktop --}}
        <nav class="hidden gap-3 text-base lg:flex xl:gap-6 lg:items-center">
            {{-- render spaite menu --}}
            @foreach ($menu as $link)
                @if (isset($link['submenu']))
                    <div class="relative" x-data="{ subOpen: false }">
                        <div class="flex items-center gap-2" @click="subOpen = !subOpen">
                            <p
                                class="hover:underline underline-offset-4 decoration-2 cursor-pointer {{ request()->is($link['url']) ? 'underline' : '' }}">
                                {{ $link['name'] }}
                            </p>
                            <x-heroicon-o-chevron-down class="inline-block w-4 h-4 text-black cursor-pointer" />
                        </div>
                        <div x-show="subOpen" @click.outside="subOpen = false"
                            class="left-0 z-40 flex flex-col w-full gap-2 px-4 py-2 lg:shadow-lg lg:absolute lg:bg-gray-50 top-8 min-w-max">
                            @foreach ($link['submenu'] as $sublink)
                                {{-- if not null --}}
                                @if ($sublink['name'] !== null)
                                    <a href="{{ $sublink['url'] }}"
                                        class="hover:underline underline-offset-4 decoration-2 whitespace-nowrap">
                                        {{ $sublink['name'] }}
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @else
                    @if (Request::path() === trim($link['url'], '/') || Request::path() === $link['url'])
                        <a href="{{ $link['url'] }}" class="underline hover:underline underline-offset-4 decoration-2 whitespace-nowrap">
                            {{ $link['name'] }}
                        </a>
                    @else
                        <a href="{{ $link['url'] }}" class="hover:underline underline-offset-4 decoration-2 whitespace-nowrap">
                            {{ $link['name'] }}
                        </a>
                    @endif
                @endif
            @endforeach
            <x-button color="primary" label="NEEM CONTACT OP" href="/contact" icon="fa-solid fa-phone" />
        </nav>
        {{-- Mobile --}}
        <nav x-show="open" class="flex flex-col gap-3 text-base xl:gap-6 lg:hidden lg:items-center">
            {{-- render spaite menu --}}
            @foreach ($menu as $link)
                @if (isset($link['submenu']))
                    <div class="relative" x-data="{ subOpen: false }">
                        <div class="flex items-center gap-2" @click="subOpen = !subOpen">
                            <p>
                                {{ $link['name'] }}
                            </p>
                            <x-heroicon-o-chevron-down class="inline-block w-4 h-4 text-black cursor-pointer" />
                        </div>
                        <div x-show="subOpen" @click.outside="subOpen = false"
                            class="left-0 z-40 flex flex-col w-full gap-2 px-4 py-2 lg:shadow-lg lg:absolute lg:bg-gray-50 top-8 min-w-max">
                            @foreach ($link['submenu'] as $sublink)
                                {{-- if not null --}}
                                @if ($sublink['name'] !== null)
                                    <a href="{{ $sublink['url'] }}"
                                        class="hover:underline underline-offset-4 decoration-2 whitespace-nowrap">
                                        {{ $sublink['name'] }}
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @else
                    <a href="{{ $link['url'] }}">
                        {{ $link['name'] }}
                    </a>
                @endif
            @endforeach
            <x-button color="primary" label="NEEM CONTACT OP" href="/contact" icon="fa-solid fa-phone" />
        </nav>

    </div>
</header>
