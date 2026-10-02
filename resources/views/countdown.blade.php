<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PT Trivora Prima Indonesia | Coming Soon</title>

    <link rel="icon" type="image/png" href="{{ asset('img/logo-blue.png') }}">
    <meta name="description"
        content="PT Trivora Prima Indonesia adalah perusahaan general trading yang menyediakan produk dan solusi supply chain untuk kebutuhan industri, komersial, dan retail di Indonesia.">

    <meta name="keywords"
        content="PT Trivora Prima Indonesia, general trading Indonesia, supplier Indonesia, supply chain, product sourcing, distribusi produk, industrial supply, commercial supply, retail supply">

    <meta name="author" content="PT Trivora Prima Indonesia">
    <meta name="robots" content="index, follow">

    <link rel="canonical" href="{{ url('/') }}">

    <meta property="og:type" content="website">
    <meta property="og:title" content="PT Trivora Prima Indonesia | General Trading & Supply Chain">
    <meta property="og:description"
        content="General trading dan supply chain solution untuk kebutuhan industri, komersial, dan retail.">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:site_name" content="PT Trivora Prima Indonesia">
    <meta property="og:image" content="{{ asset('img/og-logo.svg') }}">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="PT Trivora Prima Indonesia | General Trading & Supply Chain">
    <meta name="twitter:description"
        content="Penyedia produk dan solusi supply chain untuk sektor industri, komersial, dan retail.">
    <meta name="twitter:image" content="{{ asset('img/x-logo.svg') }}">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, Helvetica, sans-serif;
            background:
                radial-gradient(circle at 20% 20%, rgba(37, 99, 235, .18), transparent 35%),
                radial-gradient(circle at 80% 80%, rgba(14, 165, 233, .12), transparent 35%),
                #050b18;
            color: #fff;
            overflow: hidden;
        }

        .background {
            position: fixed;
            inset: 0;
            pointer-events: none;
        }

        .background::before {
            content: "";
            position: absolute;
            width: 500px;
            height: 500px;
            top: -250px;
            right: -150px;
            border: 1px solid rgba(59, 130,
                    246, .15);
            border-radius: 50%;
            box-shadow: 0 0 0 80px rgba(59, 130, 246, .03), 0 0 0 160px rgba(59, 130, 246,
                    .02);
        }

        .container {
            position: relative;
            z-index: 2;
            width: min(900px, 92%);
            text-align: center;
        }

        .logo {
            width: 200px;
            height: auto;
            object-fit: contain;
            margin-bottom: 28px;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 16px;
            border: 1px solid rgba(96, 165, 250, .25);
            border-radius:
                999px;
            background: rgba(37, 99, 235, .08);
            color: #93c5fd;
            font-size: 12px;
            font-weight: 700;
            letter-spacing:
                2px;
            margin-bottom: 24px;
        }

        .badge span {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #3b82f6;
            box-shadow: 0 0 12px #3b82f6;
            animation: pulse 1.5s infinite;
        }

        h1 {
            font-size: clamp(42px, 7vw, 76px);
            line-height: 1.05;
            letter-spacing: -3px;
            margin-bottom: 22px;
        }

        h1 strong {
            color: #60a5fa;
        }

        .description {
            max-width: 650px;
            margin: 0 auto;
            color: #94a3b8;
            font-size: 16px;
            line-height: 1.8;
        }

        .countdown {
            display:
                grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
            max-width: 650px;
            margin: 45px auto 35px;
        }

        .time-box {
            padding: 24px 10px;
            border: 1px solid rgba(148, 163, 184, .12);
            background: rgba(15, 23, 42, .65);
            backdrop-filter: blur(12px);
            border-radius: 18px;
        }

        .number {
            display: block;
            font-size: clamp(32px, 5vw, 48px);
            font-weight: 700;
            letter-spacing: -2px;
            color: #fff;
        }

        .label {
            display: block;
            margin-top: 7px;
            font-size:
                10px;
            font-weight: 700;
            letter-spacing: 2px;
            color: #64748b;
        }

        .company {
            color: #64748b;
            font-size: 13px;
            letter-spacing: 1px;
        }

        .company strong {
            color: #94a3b8;
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
                transform:
                    scale(1);
            }

            50% {
                opacity: .4;
                transform: scale(.7);
            }
        }

        @media (max-width: 600px) {
            .countdown {
                gap: 8px;
            }

            .time-box {
                padding: 18px 5px;
                border-radius: 14px;
            }

            h1 {
                letter-spacing: -2px;
            }

            .description {
                font-size:
                    14px;
            }
        }
    </style>
</head>

<body>

    <div class="background"></div>

    <main class="container">

        <img src="{{ asset('img/trivora.png') }}" alt="PT Trivora Prima Indonesia" class="logo">
        <br>

        <div class="badge">
            <span></span>
            WEBSITE COMING SOON
        </div>

        <h1>
            We Are <strong>Launching</strong>
            Soon.
        </h1>

        <p class="description">
            Website resmi PT Trivora Prima Indonesia sedang dalam tahap
            persiapan. Kami sedang menyiapkan pengalaman terbaik untuk
            memberikan informasi mengenai produk, layanan, dan solusi
            supply chain kami.
        </p>

        <div class="countdown">

            <div class="time-box">
                <span class="number" id="days">04</span>
                <span class="label">HARI</span>
            </div>

            <div class="time-box">
                <span class="number" id="hours">00</span>
                <span class="label">JAM</span>
            </div>

            <div class="time-box">
                <span class="number" id="minutes">00</span>
                <span class="label">MENIT</span>
            </div>

            <div class="time-box">
                <span class="number" id="seconds">00</span>
                <span class="label">DETIK</span>
            </div>

        </div>

        <p class="company">
            <strong>PT Trivora Prima Indonesia</strong>
            &nbsp;•&nbsp; General Trading & Supply Chain
        </p>

    </main>


    <script>
        // Waktu rilis tetap: 2 Oktober 2026, pukul 21.15 WIB.
        const launchTime = new Date('2026-10-02T22:15:00+07:00').getTime();

        // Waktu server saat halaman dibuat, menggunakan zona waktu Jakarta.
        const serverTimeAtRender = @json(now('Asia/Jakarta')->timestamp * 1000);

        // Menghitung waktu berjalan tanpa bergantung pada jam perangkat.
        const pageStart = performance.now();

        function updateCountdown() {
            const currentServerTime =
                serverTimeAtRender + (performance.now() - pageStart);

            const distance = launchTime - currentServerTime;

            if (distance <= 0) {
                document.getElementById('days').textContent = '00';
                document.getElementById('hours').textContent = '00';
                document.getElementById('minutes').textContent = '00';
                document.getElementById('seconds').textContent = '00';

                // Muat ulang agar Laravel menjalankan route website utama.
                window.location.reload();
                return;
            }

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor(
                (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
            );
            const minutes = Math.floor(
                (distance % (1000 * 60 * 60)) / (1000 * 60)
            );
            const seconds = Math.floor(
                (distance % (1000 * 60)) / 1000
            );

            document.getElementById('days').textContent =
                String(days).padStart(2, '0');

            document.getElementById('hours').textContent =
                String(hours).padStart(2, '0');

            document.getElementById('minutes').textContent =
                String(minutes).padStart(2, '0');

            document.getElementById('seconds').textContent =
                String(seconds).padStart(2, '0');
        }

        updateCountdown();
        setInterval(updateCountdown, 1000);
    </script>

</body>

</html>
