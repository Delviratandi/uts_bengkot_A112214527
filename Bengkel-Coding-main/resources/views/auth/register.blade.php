<x-layouts.guest title="Register - Klinik Modern Delvira">
    <div class="auth-wrapper">
        <div class="auth-card fade-up">
            <div class="auth-left">
                <img src="{{ asset('images/clinic-modern.jpg') }}" alt="Klinik Modern Delvira" class="auth-image">
                <div class="auth-left-text">
                    <h2>Klinik Modern Delvira</h2>
                    <p>Solusi layanan kesehatan modern dengan sistem informasi terpadu dan pelayanan terbaik.</p>
                </div>
            </div>

            <div class="auth-right">
                <h3 class="form-title">Daftar Akun Baru</h3>
                <form action="{{ route('register') }}" method="POST" class="auth-form">
                    @csrf

                    <div class="input-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" class="form-control" required placeholder="Nama Lengkap">
                    </div>

                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" class="form-control" required placeholder="Email">
                    </div>

                    <div class="input-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" id="alamat" name="alamat" class="form-control" required placeholder="Alamat">
                    </div>

                    <div class="input-group">
                        <label for="no_hp">No HP</label>
                        <input type="number" id="no_hp" name="no_hp" class="form-control" required placeholder="No HP">
                    </div>

                    <div class="input-group">
                        <label for="no_ktp">No KTP</label>
                        <input type="number" id="no_ktp" name="no_ktp" class="form-control" required placeholder="No KTP">
                    </div>

                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control" required placeholder="Password">
                    </div>

                    <div class="input-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required placeholder="Confirm Password">
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

                    <button type="submit" class="btn-submit">Register</button>

                    <p class="form-footer">
                        Sudah punya akun? <a href="{{ route('login') }}" class="text-link">Login</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</x-layouts.guest>
