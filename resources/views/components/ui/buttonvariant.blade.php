@props(
    [
        'variant' => 'primary',
        'size' => 'medium',
    ])

@php
    $variants = [
        'primary' => 'bg-blue-600 hover:bg-blue-700 focus:ring-blue-500',
        'secondary' => 'bg-gray-600 hover:bg-gray-700 focus:ring-gray-500',
        'danger' => 'bg-red-600 hover:bg-red-700 focus:ring-red-500',
        'warning' => 'bg-yellow-600 hover:bg-yellow-700 focus:ring-yellow-500',
        'success' => 'bg-green-600 hover:bg-green-700 focus:ring-green-500',
        'info' => 'bg-cyan-600 hover:bg-cyan-700 focus:ring-cyan-500',
        'light' => 'bg-gray-100 hover:bg-gray-200 focus:ring-gray-100',
    ];
    $sizes = [
        'small' => 'px-2 py-1 text-sm',
        'medium' => 'px-4 py-2 text-base',
        'large' => 'px-6 py-3 text-lg',
    ];

    $classes = $variants[$variant] ?? $variants['primary'];
    $sizes = $sizes[$size] ?? $sizes['medium'];
@endphp

<button {{ $attributes -> class("px-4 py-2 font-semibold text-white rounded-lg focus:outline-none focus:ring-2
$classes $sizes") }}>
    {{ $slot }}
</button>
