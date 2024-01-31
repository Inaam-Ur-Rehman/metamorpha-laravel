@aware(['page'])
@props(['name', 'color', 'image', 'content', 'more_content', 'direction'])

@if ($direction == 'left')
    <div class="mx-auto my-6 max-w-7xl" x-data="{
        showMore: false,
        toggleShowMore() {
            this.showMore = !this.showMore
        }
    }">
        <img src="{{ Storage::url($image) }}" alt="Bart" class="mx-auto md:m-4 md:float-left w-80" />
        <div class="p-2">
            <h2 class="relative inline max-w-max text-3xl uppercase !font-vp700 md:text-4xl my-4">
                {{ $name }}
                <span style="background-color: {{ $color }}"
                    class="absolute left-0 w-full h-3 -z-10 bottom-[0.2em] "></span>
            </h2>
            <div class="mt-4 !font-v400 prose-base prose-ul:list-disc">
                {!! $content !!}

                @if ($more_content)
                    <button
                        class="text-theme-blue  hover:text-theme-light-blue !font-vp700 flex text-center mx-auto max-w-max w-full"
                        @click="toggleShowMore()">
                        <span x-show="!showMore">
                            MEER
                            <x-heroicon-s-chevron-down class="inline w-4 h-4" />
                        </span>
                    </button>
                @endif

                <div x-show="showMore">
                    {!! html_entity_decode($more_content) !!}

                    @if ($more_content)
                        <button
                            class="text-theme-blue mt-8 hover:text-theme-light-blue !font-vp700 flex text-center mx-auto max-w-max w-full"
                            @click="toggleShowMore()">
                            <span x-show="showMore">
                                VERBERGEN
                                <x-heroicon-s-chevron-up class="inline w-4 h-4" />
                            </span>
                        </button>
                    @endif
                </div>
            </div>
        </div>
    </div>
@else
    <div class="mx-auto my-12 max-w-7xl" x-data="{
        showMore: false,
        toggleShowMore() {
            this.showMore = !this.showMore
        }
    }">
        <img src="{{ Storage::url($image) }}" alt="Bart" class="mx-auto md:m-4 md:float-right w-80" />

        <div class="p-2">
            <h2 class="relative inline max-w-max text-3xl uppercase !font-vp700 md:text-4xl my-4">
                {{ $name }}
                <span style="background-color: {{ $color }}"
                    class="absolute left-0 w-full h-3 -z-10 bottom-[0.2em]"></span>
            </h2>
            <div class="mt-4 !font-v400 prose-base prose-ul:list-disc">
                {!! $content !!}

                @if ($more_content)
                    <button
                        class="text-theme-blue  hover:text-theme-light-blue !font-vp700 flex text-center mx-auto max-w-max w-full"
                        @click="toggleShowMore()">
                        <span x-show="!showMore">
                            MEER
                            <x-heroicon-s-chevron-down class="inline w-4 h-4" />
                        </span>
                    </button>
                @endif

                <div x-show="showMore">
                    {!! html_entity_decode($more_content) !!}

                    @if ($more_content)
                        <button
                            class="text-theme-blue mt-8 hover:text-theme-light-blue !font-vp700 flex text-center mx-auto max-w-max w-full"
                            @click="toggleShowMore()">
                            <span x-show="showMore">
                                VERBERGEN
                                <x-heroicon-s-chevron-up class="inline w-4 h-4" />
                            </span>
                        </button>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endif
