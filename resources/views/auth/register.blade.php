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
<div class="form-group">
    <label>NIM</label>
    <input
        type="text"
        name="nim"
        required
    >
</div>

<div class="form-group">
    <label>Program Studi</label>
    <input
        type="text"
        name="prodi"
        required
    >
</div>
            <!-- Password -->
            <div class="form-group">
                <label><i class="fas fa-lock"></i> Password <span>*</span></label>
                <div class="password-wrapper">
    <input
        type="password"
        name="password"
        id="passwordInput"
        placeholder="Minimal 8 karakter"
        required
    >

    <button type="button" id="togglePassword" class="toggle-password">
        <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg"
             width="20" height="20" fill="none"
             viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M2.458 12C3.732 7.943 7.523 5 12 5
                     c4.478 0 8.268 2.943 9.542 7
                     -1.274 4.057-5.064 7-9.542 7
                     -4.477 0-8.268-2.943-9.542-7z" />
        </svg>
    </button>
</div>

            <!-- Konfirmasi Password -->
            <div class="form-group">
    <label>
        <i class="fas fa-check-circle"></i>
        Konfirmasi Password <span>*</span>
    </label>

    <div class="password-wrapper">
        <input
            type="password"
            name="password_confirmation"
            id="passwordConfirmationInput"
            placeholder="Ulangi Password"
            required
        >

        <button type="button"
                id="togglePasswordConfirmation"
                class="toggle-password">

            <svg xmlns="http://www.w3.org/2000/svg"
                 width="20"
                 height="20"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor">

                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>

                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M2.458 12C3.732 7.943 7.523 5 12 5
                         c4.478 0 8.268 2.943 9.542 7
                         -1.274 4.057-5.064 7-9.542 7
                         -4.477 0-8.268-2.943-9.542-7z"/>
            </svg>

        </button>
    </div>
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