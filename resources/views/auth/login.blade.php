<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes, viewport-fit=cover">
  <title>Koki Farm · Admin Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    /* Tailwind config for dark mode */
    :root {
      --tw-bg-opacity: 1;
      --tw-text-opacity: 1;
      --tw-border-opacity: 1;
      --tw-shadow-opacity: 1;
    }
    .dark {
      --tw-bg-opacity: 1;
      --tw-text-opacity: 1;
      --tw-border-opacity: 1;
      --tw-shadow-opacity: 1;
    }

    /* Dark Mode Disabled for Login Page */

    /* General Styles */
    @keyframes float {
      0% { transform: translateY(0px) translateX(0) scale(1); opacity: 0.4; }
      50% { transform: translateY(-20px) translateX(5px) scale(1.05); opacity: 0.7; }
      100% { transform: translateY(0px) translateX(0) scale(1); opacity: 0.4; }
    }
    @keyframes float-slow {
      0% { transform: translateY(0) translateX(0) rotate(0deg); }
      33% { transform: translateY(-8px) translateX(-6px) rotate(2deg); }
      66% { transform: translateY(-4px) translateX(8px) rotate(-1deg); }
      100% { transform: translateY(0) translateX(0) rotate(0deg); }
    }
    @keyframes fade-slide-up {
      0% { opacity: 0; transform: translateY(20px); }
      100% { opacity: 1; transform: translateY(0); }
    }
    .animate-float {
      animation: float 6s ease-in-out infinite;
    }
    .animate-float-slow {
      animation: float-slow 12s ease-in-out infinite;
    }
    .animate-fade-slide {
      animation: fade-slide-up 0.9s cubic-bezier(0.2, 0.9, 0.3, 1) forwards;
    }
    /* bubble wrapper */
    .bubble {
      position: absolute;
      background: rgba(255, 255, 255, 0.2);
      border-radius: 100%;
      backdrop-filter: blur(1px);
      box-shadow: inset 0 0 8px rgba(255,255,255,0.6);
      pointer-events: none;
      z-index: 1;
    }
    /* ripple */
    .ripple-btn {
      position: relative;
      overflow: hidden;
    }
    .ripple-btn:after {
      content: "";
      display: block;
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      background: radial-gradient(circle, rgba(255,255,255,0.6) 0%, rgba(255,255,255,0) 70%);
      transform: scale(0);
      opacity: 0;
      transition: transform 0.3s, opacity 0.4s;
      pointer-events: none;
    }
    .ripple-btn:active:after {
      transform: scale(2);
      opacity: 0.3;
      transition: 0s;
    }
    /* glassmorphism */
    .glass-card {
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(4px);
      -webkit-backdrop-filter: blur(4px);
      border: 1px solid rgba(255, 255, 255, 0.3);
    }
    /* shadow halus dan glow hijau untuk input focus */
    input:focus {
      outline: none;
      border-color: transparent;
      box-shadow: 0 0 0 4px rgba(16, 185, 129, 0.2), 0 2px 6px rgba(0,0,0,0.03);
    }
    /* untuk checkbox custom */
    .checkbox-custom {
      accent-color: #0d9488; /* teal-600 */
    }
  </style>
</head>
<body class="font-sans antialiased bg-gradient-to-br from-emerald-700 via-teal-600 to-cyan-600 min-h-screen flex items-center justify-center relative overflow-x-hidden p-4">

  <!-- === BACKGROUND BUBBLES === -->
  <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
    <!-- lapisan gelombang -->
    <svg class="absolute top-0 left-0 w-full text-emerald-200/20 rotate-180" viewBox="0 0 1440 320" preserveAspectRatio="none">
      <path fill="currentColor" d="M0 64L48 80C96 96,192 128,288 138.7C384 149,480 139,576 122.7C672 107,768 85,864 96C960 107,1056 149,1152 154.7C1248 160,1344 128,1392 112L1440 96L1440 320L1392 320C1344 320,1248 320,1152 320C1056 320,960 320,864 320C768 320,672 320,576 320C480 320,384 320,288 320C192 320,96 320,48 320L0 320Z"></path>
    </svg>

    <!-- gelembung-gelembung (bubble animation) -->
    <div class="bubble w-16 h-16 left-[5%] top-[20%] opacity-30 animate-float" style="animation-delay: 0s;"></div>
    <div class="bubble w-20 h-20 left-[80%] top-[45%] opacity-20 animate-float" style="animation-delay: 0.8s; animation-duration: 9s;"></div>
    <div class="bubble w-12 h-12 left-[60%] top-[85%] opacity-30 animate-float" style="animation-delay: 2.2s;"></div>
    <div class="bubble w-14 h-14 left-[92%] top-[15%] opacity-25 animate-float" style="animation-delay: 1.0s; animation-duration: 7s;"></div>
    <div class="bubble w-24 h-24 left-[20%] top-[40%] opacity-15 animate-float" style="animation-delay: 2.5s; animation-duration: 11s;"></div>
    <div class="bubble w-10 h-10 left-[15%] top-[70%] opacity-40 animate-float" style="animation-delay: 1.5s; animation-duration: 8s;"></div>
    <div class="bubble w-8 h-8 left-[40%] top-[10%] opacity-40 animate-float" style="animation-delay: 0.2s; animation-duration: 5s;"></div>
    <div class="bubble w-16 h-16 left-[75%] top-[75%] opacity-25 animate-float" style="animation-delay: 1.2s; animation-duration: 10s;"></div>
    <div class="bubble w-8 h-8 left-[35%] top-[55%] opacity-35 animate-float" style="animation-delay: 0.5s; animation-duration: 6s;"></div>
    <div class="bubble w-14 h-14 left-[10%] top-[45%] opacity-20 animate-float" style="animation-delay: 2.0s; animation-duration: 8.5s;"></div>
    <div class="bubble w-10 h-10 left-[88%] top-[65%] opacity-30 animate-float" style="animation-delay: 1.8s; animation-duration: 7.5s;"></div>
    <div class="bubble w-6 h-6 left-[50%] top-[20%] opacity-35 animate-float" style="animation-delay: 0.3s; animation-duration: 5.5s;"></div>
    <div class="bubble w-20 h-20 left-[25%] top-[70%] opacity-20 animate-float" style="animation-delay: 2.8s; animation-duration: 12s;"></div>
  </div>

  <!-- CARD UTAMA (wrapper) -->
  <div class="relative z-10 w-full max-w-[900px] mx-auto animate-fade-slide">

    <!-- === CARD LOGIN (2 KOLOM) === -->
    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden flex flex-col md:flex-row">

      <!-- SISI KIRI: FORM LOGIN -->
      <div class="w-full md:w-1/2 p-8 md:p-10">

        <!-- FORM LOGIN -->
        <form method="POST" action="{{ route('login') }}" class="space-y-5">
          @csrf

          <!-- field email -->
          <div>
            <label class="block text-sm font-semibold text-gray-700 mb-1 ml-1"><i class="fa-regular fa-user mr-1 text-teal-600"></i>Email</label>
            <input type="email" name="email" placeholder="admin@kokifarm" value="{{ old('email') }}" class="w-full px-5 py-3.5 rounded-xl border bg-white/70 focus:bg-white pr-12 transition-colors placeholder:text-gray-400 text-gray-800 text-base" style="border-color: @error('email') #ef4444 @else #d1d5db @enderror;">
            @error('email')
              <p class="text-red-500 text-xs mt-1 ml-1">{{ $message }}</p>
            @enderror
          </div>

          <!-- field password dengan icon show/hide -->
          <div class="relative">
            <label class="block text-sm font-semibold text-gray-700 mb-1 ml-1"><i class="fa-solid fa-lock mr-1 text-teal-600"></i>Password</label>
            <div class="relative">
              <input type="password" id="passwordField" name="password" placeholder="••••••••" class="w-full px-5 py-3.5 rounded-xl border bg-white/70 focus:bg-white pr-12 transition-colors placeholder:text-gray-400 text-gray-800 text-base" style="border-color: @error('password') #ef4444 @else #d1d5db @enderror;">
              <button type="button" id="togglePassword" class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-500 hover:text-teal-600 transition">
                <i class="fa-regular fa-eye" id="toggleIcon"></i>
              </button>
            </div>
            @error('password')
              <p class="text-red-500 text-xs mt-1 ml-1">{{ $message }}</p>
            @enderror
          </div>

          <!-- baris checkbox "Ingat saya" dan "Lupa password?" -->
          <div class="flex items-center justify-between text-sm">
            <label class="flex items-center gap-2 cursor-pointer text-gray-600 hover:text-teal-700 transition">
              <input type="checkbox" name="remember" class="checkbox-custom w-4 h-4 rounded border-gray-300">
              <span>Ingat saya</span>
            </label>
            <a href="#" class="font-medium text-teal-700 hover:text-teal-800 underline decoration-teal-300 underline-offset-2 transition">Lupa password?</a>
          </div>

          <!-- Tombol login -->
          <button type="submit" class="ripple-btn relative w-full bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-500 hover:to-teal-500 text-white font-bold py-4 rounded-xl text-lg shadow-lg shadow-teal-600/30 hover:shadow-xl hover:shadow-teal-500/40 transition-all duration-300 active:scale-[0.98] mt-4 
         ">
            Masuk
          </button>
        </form>

        <!-- Privacy Policy & Terms -->
        <div class="mt-6 text-center text-xs text-gray-500 space-x-3">
          <a href="#" class="hover:text-teal-600 transition">Privacy Policy</a>
          <span class="text-gray-300">|</span>
          <a href="#" class="hover:text-teal-600 transition">Terms of Service</a>
        </div>
      </div>

      <!-- SISI KANAN: LOGO PERUSAHAAN BESAR -->
      <div class="hidden md:flex w-1/2 bg-white relative overflow-hidden">
        <!-- elemen dekoratif gradient lembut -->
        <div class="absolute inset-0 bg-gradient-to-br from-emerald-50/40 via-teal-50/30 to-cyan-50/20 opacity-60"></div>
        <div class="absolute -right-16 -top-16 w-48 h-48 bg-gradient-to-br from-emerald-100 to-teal-100 rounded-full blur-3xl opacity-50"></div>

        <!-- bubble dekoratif -->
        <div class="absolute top-8 right-12 w-4 h-4 bg-teal-200/30 rounded-full animate-pulse"></div>
        <div class="absolute bottom-16 left-8 w-3 h-3 bg-emerald-200/30 rounded-full animate-pulse" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 right-8 w-2 h-2 bg-cyan-200/40 rounded-full animate-pulse" style="animation-delay: 0.5s;"></div>

        <!-- Logo besar -->
        <img src="{{ asset('images/alfin1.png') }}" alt="Alfin Aquatic Logo" class="absolute inset-0 w-3/4 h-3/4 object-contain z-10 m-auto">
      </div>

    </div>

    <!-- bagian bawah dekorasi ekstra: ikan kecil + bubble -->
    <div class="flex justify-between items-center mt-4 px-2 text-white/50 text-xs">
      <div class="flex gap-1">
        <i class="fa-solid fa-fish"></i>
        <i class="fa-solid fa-fish"></i>
        <i class="fa-solid fa-water"></i>
      </div>
      <div class="flex gap-1">
        <span class="w-1 h-1 bg-white/30 rounded-full"></span>
        <span class="w-1.5 h-1.5 bg-white/40 rounded-full animate-pulse"></span>
        <span class="w-1 h-1 bg-white/30 rounded-full"></span>
      </div>
    </div>
  </div>

  <script>
    (function() {
      const toggleBtn = document.getElementById('togglePassword');
      if (toggleBtn) {
        const passwordField = document.getElementById('passwordField');
        const icon = document.getElementById('toggleIcon');
        toggleBtn.addEventListener('click', function() {
          const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
          passwordField.setAttribute('type', type);
          // ganti icon
          if (type === 'password') {
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
          } else {
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
          }
        });
      }
    })();
  </script>

  
  <style>
    @media (max-width: 380px) {
      .glass-card { padding: 1.25rem; }
      h1 { font-size: 1.8rem; }
    }
    
    @media (orientation: landscape) and (max-height: 500px) {
      .min-h-screen { min-height: 120vh; }
    }
    
    .bubble {
      transition: opacity 0.2s;
    }
    
    .max-w-\[400px\] {
      max-width: 400px;
    }
    @media (min-width: 768px) {
      .max-w-\[400px\] {
        max-width: 440px;
      }
    }
   
    .xs\:block { display: none; }
    @media (min-width: 480px) {
      .xs\:block { display: block; }
    }
  </style>
</body>
</html>
