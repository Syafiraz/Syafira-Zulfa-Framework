<x-guest-layout>
    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Judul -->
        <h2 style="text-align: center; margin-bottom: 20px; 
                   font-size: 24px; color: #333;">
            Lupa Password
        </h2>

        <p style="margin-bottom: 18px; font-size: 14px; color: #555; text-align: center;">
            Tidak masalah, masukkan email Anda dan kami akan mengirimkan link reset password.
        </p>

        <!-- Email -->
        <div style="margin-bottom: 18px;">
            <label for="email" 
                   style="display: block; margin-bottom: 6px; 
                          font-weight: 600; color: #555;">
                Email
            </label>
            <input id="email" type="email" name="email" 
                   value="{{ old('email') }}" required autofocus
                   placeholder="Contoh: user@example.com"
                   style="width: 100%; padding: 14px 18px; border: 2px solid #ddd; 
                          border-radius: 30px; font-size: 15px; outline: none;">
        </div>

        <!-- Tombol -->
        <button type="submit"
            style="width: 100%; padding: 14px; background-color: #ff7e5f; 
                   color: #fff; border: none; border-radius: 30px; 
                   font-size: 16px; font-weight: 600; cursor: pointer; 
                   transition: background-color 0.3s, transform 0.2s;">
            Kirim Link Reset Password
        </button>

        <!-- Balik ke login -->
        <p style="margin-top: 22px; text-align: center; 
                  font-size: 14px; color: #555;">
            Ingat password Anda? 
            <a href="{{ route('login') }}" 
               style="color: #ff7e5f; font-weight: 600; text-decoration: none;">
                Masuk di sini
            </a>
        </p>
    </form>
</x-guest-layout>
