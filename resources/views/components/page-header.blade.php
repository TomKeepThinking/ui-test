@props(['class' => ''])

<div
    {{ $attributes->merge([
      'class' => 'dark:text-white font-normal text-charcoal text-2.5xl lg:text-7.5xl leading-9 lg:leading-20 tracking-header-m lg:tracking-header-d ' . $class
  ]) }}>
    {{ $slot }}
</div>
