<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Partner Lomba Unitrta</title>
    <link rel="stylesheet" href="{{ asset('css/style3.css') }}">
</head>
<body>
    <div class="register-container">
        <div class="register-header">
            <h1>Buat akun baru</h1>
            <p>Daftar untuk mencari partner lomba</p>
        </div>

        <form method="POST" action="{{ route('register') }}">
        @csrf
            <!-- Nama Lengkap -->
            <div class="form-group">
                <label><i class="fas fa-user"></i> Nama Lengkap <span>*</span></label>
                <input
                        type="text"
                        name="name"
                        placeholder="Masukkan nama lengkap"
                        value="{{ old('name') }}"
                        required
                    >
            </div>

            <!-- Email Kampus -->
            <div class="form-group">
                <label><i class="fas fa-envelope"></i> Email Kampus <span>*</span></label>
                <input
    type="email"
    name="email"
    placeholder="nim@untirta.ac.id"
    value="{{ old('email') }}"
    required
>
            </div>

            <!-- Password -->
            <div class="form-group">
                <label><i class="fas fa-lock"></i> Password <span>*</span></label>
                <input
    type="password"
    name="password"
    placeholder="Minimal 8 karakter"
    required
>
                <div class="password-hint">Minimal 8 karakter</div>
            </div>

            <!-- Konfirmasi Password -->
            <div class="form-group">
                <label><i class="fas fa-check-circle"></i> Konfirmasi Password <span>*</span></label>
                <input
    type="password"
    name="password_confirmation"
    placeholder="Ulangi Password"
    required>
            </div>
@if ($errors->any())
<div style="color:red; margin-bottom:15px;">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
            <button type="submit" class="btn-daftar">Daftar</button>

            <div class="login-link">
                Sudah punya akun? <a href="{{ route('login') }}">Masuk disini</a>
            </div>
        </form>
    </div>

    <script>
document.querySelectorAll('.toggle-password').forEach(button => {

    button.addEventListener('click', () => {

        const input =
            button.parentElement.querySelector('input');

        input.type =
            input.type === 'password'
            ? 'text'
            : 'password';

    });

});
</script>
</body>
</html>