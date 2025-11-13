<x-layouts.guest title="Home | Klinik Modern Delvira">
    <div class="landing-wrapper">

        <!-- Hero Section -->
        <section class="hero-section fade-in">
            <div class="hero-text">
                <h1>Klinik Modern Delvira</h1>
                <p>Inovasi layanan kesehatan digital dengan teknologi modern dan profesionalitas tinggi.</p>
                <div class="hero-buttons">
                    <a href="{{ route('login') }}" class="btn-main">Masuk</a>
                    <a href="{{ route('register') }}" class="btn-outline">Daftar Sekarang</a>
                </div>
            </div>

            <!-- Logo Klinik Modern Delvira -->
            <div class="logo-container">
                <img src="{{ asset('images/clinic-modern.jpg') }}" alt="Logo Klinik Modern Delvira" class="logo-small">
            </div>
        </section>

        <!-- Highlight Section -->
        <section class="highlight-section">
            <div class="highlight-card fade-up">
                <img src="{{ asset('images/profesional.png') }}" alt="Profesional">
                <h3>Profesional</h3>
                <p>Dokter & tenaga medis berpengalaman dengan standar pelayanan tinggi.</p>
            </div>
            <div class="highlight-card fade-up delay-1">
                <img src="{{ asset('images/digital-terpadu.png') }}" alt="Digital Terpadu">
                <h3>Digital Terpadu</h3>
                <p>Sistem online yang memudahkan pendaftaran dan monitoring pasien.</p>
            </div>
            <div class="highlight-card fade-up delay-2">
                <img src="{{ asset('images/respons-cepat.png') }}" alt="Respons Cepat">
                <h3>Respons Cepat</h3>
                <p>Proses pelayanan efisien tanpa antre panjang dengan sistem modern.</p>
            </div>
        </section>

        <!-- About Section -->
        <section class="about-section fade-up">
            <h2>Tentang Klinik Kami</h2>
            <p>
                Klinik Modern Delvira hadir sebagai solusi layanan kesehatan berbasis teknologi yang memberikan
                pengalaman terbaik bagi setiap pasien. Sistem informasi terpadu kami menjamin efisiensi,
                kenyamanan, dan transparansi layanan.
            </p>
        </section>

        <!-- CTA -->
        <section class="cta-section fade-up">
            <h2>Mulai Langkah Sehat Bersama Kami</h2>
            <p>Daftarkan diri Anda dan nikmati kemudahan layanan kesehatan modern.</p>
            <a href="{{ route('register') }}" class="btn-main">Daftar Sekarang</a>
        </section>

        <footer class="footer">
            <p>&copy; {{ date('Y') }} Klinik Modern Delvira — Sistem Kesehatan Modern Indonesia.</p>
        </footer>
    </div>
</x-layouts.guest>
