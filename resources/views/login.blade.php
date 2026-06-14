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
    required
>
            </div>
            <div class="form-group">
                <label><i class="fas fa-lock"></i> Password <span>*</span></label>
                <input
    type="password"
    name="password"
    id="passwordInput"
    placeholder="Masukkan Password"
    required
>
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
</script>
</body>
</html>