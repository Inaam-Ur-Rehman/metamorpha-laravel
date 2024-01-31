@props([
    'color' => 'primary',
    'icon' => '',
    'label' => '',
    'class' => '',
    'disabled' => false,
    'href' => '',
    'target' => '_self',
    'type' => 'button',
])

@if ($color === 'primary')
    <a href="{{ $href }}" type="{{ $type }}" target="{{ $target }}"
        class="!flex items-center gap-3 px-2 py-2 pl-3 text-white duration-500 !font-vp600 rounded-full hover:scale-105 whitespace-nowrap bg-theme-blue max-w-max {{ $class }} ">
        {{ $label }}
        <span class="flex items-center justify-center w-8 h-8 bg-white rounded-full">
            <i class="{{ $icon }} text-theme-blue fill-theme-blue stroke-2"></i>
        </span>
    </a>
@elseif ($color === 'secondary')
    <a href="{{ $href }}" target="{{ $target }}"
        class="!flex items-center gap-3 px-2 py-2 pl-3 text-theme-blue duration-500 !font-vp600 rounded-full hover:scale-105 whitespace-nowrap max-w-max bg-white {{ $class }} ">
        {{ $label }}
        <span class="flex items-center justify-center w-8 h-8 rounded-full bg-theme-blue">
            <i class="{{ $icon }} text-base text-white stroke-2"></i>
        </span>
    </a>
@endif
