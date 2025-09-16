<x-guest-layout>
    <div 
        style="display: flex; justify-content: center; align-items: flex-start; 
               height: auto; font-family: 'Poppins', sans-serif; 
               padding-top: 40px;">

        <!-- Form Login (dibuat rounded) -->
        <form method="POST" action="{{ route('login') }}" 
              style="width: 100%; max-width: 450px; border-radius: 20px;">
            @csrf

            <h2 
                style="text-align: center; margin-bottom: 28px; 
                       font-size: 24px; color: #333;">
                Masuk ke Akun Anda
            </h2>

            <!-- Email -->
            <div style="margin-bottom: 18px;">
                <label for="email" 
                    style="display: block; margin-bottom: 6px; 
                           font-weight: 600; color: #555;">
                    Email
                </label>
                <input 
                    id="email" type="email" name="email" 
                    value="{{ old('email') }}" required autocomplete="email"
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
                <input 
                    id="password" type="password" name="password" 
                    required autocomplete="current-password"
                    placeholder="Masukkan password Anda"
                    style="width: 100%; padding: 14px 18px; border: 2px solid #ddd; 
                           border-radius: 30px; font-size: 15px; outline: none;">
            </div>

            <!-- Remember & Forgot -->
            <div 
                style="display: flex; justify-content: space-between; 
                       align-items: center; margin-bottom: 22px;">
                <label style="display: flex; align-items: center; 
                              font-size: 14px; color: #555;">
                    <input type="checkbox" name="remember" style="margin-right: 8px;">
                    Ingat saya
                </label>
                <a href="{{ route('password.request') }}" 
                   style="font-size: 14px; color: #ff7e5f; text-decoration: none;">
                    Lupa password?
                </a>
            </div>

            <!-- Button Login -->
            <button type="submit"
                style="width: 100%; padding: 14px; background-color: #ff7e5f; 
                       color: #fff; border: none; border-radius: 30px; 
                       font-size: 16px; font-weight: 600; cursor: pointer; 
                       transition: background-color 0.3s, transform 0.2s;">
                Masuk Sekarang
            </button>

            <!-- Daftar Akun -->
            <p style="margin-top: 22px; text-align: center; 
                      font-size: 14px; color: #555;">
                Belum punya akun? 
                <a href="{{ route('register') }}" 
                   style="color: #ff7e5f; font-weight: 600; text-decoration: none;">
                    Daftar di sini
                </a>
            </p>
        </form>
    </div>
</x-guest-layout>
