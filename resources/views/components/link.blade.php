<a href="{{ $attributes->get('href') }}" {{ $attributes->except('href') }}
    {{ $attributes->has('blank') ? 'target="_blank"' : '' }}
    {{ $attributes->merge(['class' => 'inline-block no-underline group text-emerald-500 hover:text-emerald-600 transition']) }}>
    {{ $slot }}
    <span
        class="absolute bottom-0 block h-1 w-full origin-top-left scale-x-0 bg-current transition group-hover:scale-x-100"></span>
</a>
