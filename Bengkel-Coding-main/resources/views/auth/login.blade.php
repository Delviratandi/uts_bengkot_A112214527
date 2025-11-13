<x-layouts.guest title="Login - Klinik Modern Delvira">
    <div class="auth-wrapper">
        <div class="auth-card fade-up">
            <!-- Kiri -->
            <div class="auth-left">
                <img src="{{ asset('images/clinic-modern.jpg') }}" alt="Klinik Modern Delvira" class="auth-image">
                <div class="auth-left-text">
                    <h2>Klinik Modern Delvira</h2>
                    <p>Selamat datang di sistem layanan kesehatan digital terpadu kami.</p>
                </div>
            </div>

            <!-- Kanan -->
            <div class="auth-right">
                <h3 class="form-title">Masuk ke Akun Anda</h3>
                <form action="{{ route('login') }}" method="POST" class="auth-form">
                    @csrf

                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" class="form-control" required placeholder="Masukkan Email Anda">
                    </div>

                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control" required placeholder="Masukkan Password Anda">
                    </div>

                    <div class="input-group flex-between">
                        <label>
                            <input type="checkbox" name="remember"> Ingat saya
                        </label>
                        @if (Route::has('password.request'))
                            <a class="text-link small" href="{{ route('password.request') }}">Lupa password?</a>
                        @endif
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger mt-2">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <button type="submit" class="btn-submit">Masuk</button>

                    <p class="form-footer">
                        Belum punya akun? <a href="{{ route('register') }}" class="text-link">Daftar Sekarang</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</x-layouts.guest>
