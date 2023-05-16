<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" <?php if(Route::is('faq')) : ?>itemscope itemtype="https://schema.org/FAQPage"<?php endif; ?>>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <link rel="canonical" href="{{ url()->current() }}" />
        <link rel="icon" type="image/x-icon" href="/favicon.svg">

        @production
            <script async src="https://stats.pegase.io/script.js" data-website-id="f330893a-1490-47c0-8e3f-2e0fb4a88818"></script>
            <script async src="https://tree-nation.com/js/track.js"></script>
        @endproduction
        
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @routes
        @inertiaHead
</head>
<body class="font-sans antialiased bg-neutral-900">
    @inertia
    @if(!auth()->user()->subscribed())
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6495635642797272" crossorigin="anonymous"></script>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    @endif
    @production
        <script>treenation_track("645b732967eee");</script>
    @endproduction
</body>
</html>
