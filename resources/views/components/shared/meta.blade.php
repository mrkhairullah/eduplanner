@props([
    'description' => null,
    'robots' => 'index, follow',
    'ogTitle' => null,
    'ogDescription' => null,
    'ogImage' => null,
    'ogUrl' => null,
    'ogType' => 'website',
])

@php
    $resolvedDescription = $description ?? 'Aplikasi penjadwalan mata pelajaran SMKN 1 Tangerang berbasis website.';
    $resolvedOgTitle = $ogTitle ?? config('app.name', 'EduPlanner');
    $resolvedOgDescription = $ogDescription ?? $resolvedDescription;
    $resolvedOgImage = $ogImage ?? asset('assets/img/app-logo.png');
    $resolvedOgUrl = $ogUrl ?? url('/');
@endphp

@if ($resolvedDescription)
    <meta name="description" content="{{ $resolvedDescription }}">
@endif

<meta name="robots" content="{{ $robots }}">

<meta property="og:title" content="{{ $resolvedOgTitle }}">

@if ($resolvedOgDescription)
    <meta property="og:description" content="{{ $resolvedOgDescription }}">
@endif

<meta property="og:image" content="{{ $resolvedOgImage }}">
<meta property="og:url" content="{{ $resolvedOgUrl }}">
<meta property="og:type" content="{{ $ogType }}">
