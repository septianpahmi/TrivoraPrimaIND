<!DOCTYPE html>
<html lang="id">

<head>
    {{-- <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "PT Trivora Prima Indonesia",
            "url": "{{ url('/') }}",
            "logo": "{{ asset('img/logotrivora.svg') }}",
            "description": "PT Trivora Prima Indonesia adalah perusahaan general trading yang menyediakan produk dan solusi supply chain untuk kebutuhan industri, komersial, dan retail.",
            "email": "marketing@trivora.co.id",
            "telephone": "+6287749043084",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "MEGA REGENCY BLOK H 22 NO. 65 DESA SUKASARI, KECAMATAN SERANG BARU",
                "addressLocality": "Kabupaten Bekasi",
                "addressRegion": "Jawa Barat",
                "postalCode": "17330",
                "addressCountry": "ID"
            }
        }
        </script> --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PT Trivora Prima Indonesia | General Trading & Supply Chain</title>
    <link rel="icon" type="image/png" href="{{ asset('img/logo-blue.png') }}">
    <meta name="description"
        content="PT Trivora Prima Indonesia adalah perusahaan general trading yang menyediakan produk dan solusi supply chain untuk kebutuhan industri, komersial, dan retail di Indonesia.">

    <meta name="keywords"
        content="PT Trivora Prima Indonesia, general trading Indonesia, supplier Indonesia, supply chain, product sourcing, distribusi produk, industrial supply, commercial supply, retail supply">

    <meta name="author" content="PT Trivora Prima Indonesia">
    <meta name="robots" content="index, follow">

    <link rel="canonical" href="{{ url('/') }}">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:title" content="PT Trivora Prima Indonesia | General Trading & Supply Chain">
    <meta property="og:description"
        content="General trading dan supply chain solution untuk kebutuhan industri, komersial, dan retail.">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:site_name" content="PT Trivora Prima Indonesia">
    <meta property="og:image" content="{{ asset('img/og-logo.svg') }}">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="PT Trivora Prima Indonesia | General Trading & Supply Chain">
    <meta name="twitter:description"
        content="Penyedia produk dan solusi supply chain untuk sektor industri, komersial, dan retail.">
    <meta name="twitter:image" content="{{ asset('img/x-logo.svg') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">




</head>
