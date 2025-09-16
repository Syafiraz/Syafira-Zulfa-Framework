<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Judul -->
        <h2 style="text-align: center; margin-bottom: 20px; 
                   font-size: 24px; color: #333;">
            Daftar Akun Baru
        </h2>

        <!-- Name -->
        <div style="margin-bottom: 18px;">
            <label for="name" 
                   style="display: block; margin-bottom: 6px; 
                          font-weight: 600; color: #555;">
                Nama Lengkap
            </label>
            <input id="name" type="text" name="name" 
                   value="{{ old('name') }}" required autofocus autocomplete="name"
                   placeholder="Masukkan nama lengkap"
                   style="width: 100%; padding: 14px 18px; border: 2px solid #ddd; 
                          border-radius: 30px; font-size: 15px; outline: none;">
        </div>

        <!-- Email -->
        <div style="margin-bottom: 18px;">
            <label for="email" 
                   style="display: block; margin-bottom: 6px; 
                          font-weight: 600; color: #555;">
                Email
            </label>
            <input id="email" type="email" name="email" 
                   value="{{ old('email') }}" required autocomplete="username"
                   placeholder="Contoh: user@example.com"
                   style="width: 100%; padding: 14px 18px; border: 2px solid #ddd; 
                          border-radius: 30px; font-size: 15px; outline: none;">
        </div>

        <!-- Password -->
        <div style="margin-bottom: 18px;">
            <label for="password" 
                   style="display: block; margin-bottom: 6px; 
                          font-weight: 600; color: #555;">
                Password
            </label>
            <input id="password" type="password" name="password" 
                   required autocomplete="new-password"
                   placeholder="Minimal 8 karakter"
                   style="width: 100%; padding: 14px 18px; border: 2px solid #ddd; 
                          border-radius: 30px; font-size: 15px; outline: none;">
        </div>

        <!-- Confirm Password -->
        <div style="margin-bottom: 18px;">
            <label for="password_confirmation" 
                   style="display: block; margin-bottom: 6px; 
                          font-weight: 600; color: #555;">
                Konfirmasi Password
            </label>
            <input id="password_confirmation" type="password" 
                   name="password_confirmation" required autocomplete="new-password"
                   placeholder="Ulangi password"
                   style="width: 100%; padding: 14px 18px; border: 2px solid #ddd; 
                          border-radius: 30px; font-size: 15px; outline: none;">
        </div>

        <!-- Tombol -->
        <button type="submit"
            style="width: 100%; padding: 14px; background-color: #ff7e5f; 
                   color: #fff; border: none; border-radius: 30px; 
                   font-size: 16px; font-weight: 600; cursor: pointer; 
                   transition: background-color 0.3s, transform 0.2s;">
            Daftar Sekarang
        </button>

        <!-- Sudah punya akun -->
        <p style="margin-top: 22px; text-align: center; 
                  font-size: 14px; color: #555;">
            Sudah punya akun? 
            <a href="{{ route('login') }}" 
               style="color: #ff7e5f; font-weight: 600; text-decoration: none;">
                Masuk di sini
            </a>
        </p>
    </form>
</x-guest-layout>
