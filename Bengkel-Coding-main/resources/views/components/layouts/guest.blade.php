<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Klinik Modern Delvira' }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/guest.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">

</head>
<script>
    // Scroll Reveal Animation
    document.addEventListener("DOMContentLoaded", () => {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("show");
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1
        });

        document.querySelectorAll('.fade-up, .fade-in').forEach(el => observer.observe(el));
    });
    // Parallax Background Effect
    window.addEventListener("scroll", () => {
        const scrollY = window.scrollY;
        const bg = document.querySelector('.background');
        if (bg) {
            bg.style.transform = `translateY(${scrollY * 0.3}px)`; // ubah 0.3 untuk efek lebih halus atau kuat
        }
    });
</script>

<body>
    <div class="background">
        <div class="overlay"></div>
        <div class="main-wrapper">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
