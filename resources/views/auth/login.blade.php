<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - Partner Lomba Unitrta</title>
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h1>Selamat datang</h1>
            <p>Masuk untuk mencari partner lomba</p>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label><i class="fas fa-envelope"></i> Email Kampus <span>*</span></label>
                <input
   type="email"
    name="email"
    id="emailInput"
    placeholder="nim@untirta.ac.id"
    value="{{ old('email') }}"
    required
>
            </div>
            <div class="form-group">
                <label><i class="fas fa-lock"></i> Password <span>*</span></label>
                <div class="password-wrapper">
    <input
        type="password"
        name="password"
        id="passwordInput"
        placeholder="Masukkan Password"
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
            </div>
            <div class="opsi-group">
                <label class="remember">
                    <input
    type="checkbox"
    name="remember"
    id="rememberCheckbox"
> Ingat saya
                </label>
                <span class="lupa-pw" id="lupaPasswordBtn">Lupa password?</span>
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
            <button type="submit" class="btn-masuk">Masuk</button>
            <div class="register-link">
                Belum punya akun? <a id="daftarDisiniLink" href="{{ route('register') }}">Daftar disini</a>
            </div>
        </form>
    </div>
    <div id="toastMsg" class="toast-message"></div>

    <script>
    function showToast(text, isError = false) {
        const toast = document.getElementById('toastMsg');
        toast.textContent = text;
        toast.style.backgroundColor = isError ? '#b3412e' : '#1e5e3c';
        toast.style.opacity = '1';

        setTimeout(() => {
            toast.style.opacity = '0';
        }, 2500);
    }

    const emailInput = document.getElementById('emailInput');
    const rememberCheck = document.getElementById('rememberCheckbox');
    const lupaBtn = document.getElementById('lupaPasswordBtn');

    if (
        localStorage.getItem('rememberFlag') === 'true' &&
        localStorage.getItem('rememberEmail')
    ) {
        emailInput.value = localStorage.getItem('rememberEmail');
        rememberCheck.checked = true;
    }

    lupaBtn.addEventListener('click', () => {
        showToast('🔐 Hubungi admin untuk reset password');
    });
    
    const passwordInput = document.getElementById('passwordInput');
const togglePassword = document.getElementById('togglePassword');

togglePassword.addEventListener('click', () => {
    passwordInput.type =
        passwordInput.type === 'password'
        ? 'text'
        : 'password';
});

</script>
</body>
</html>

