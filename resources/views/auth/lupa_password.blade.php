    <!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes, viewport-fit=cover">
  <title>Alfin Aquatic · Lupa Password</title>
  
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  
  <script>
    /* Tailwind config for dark mode */
    tailwind.config = {
      darkMode: 'class', // Mengaktifkan mode gelap berdasarkan kelas 'dark' pada elemen induk
      theme: {
        extend: {
          fontFamily: {
            sans: ['Google Sans Flex', 'sans-serif'], // Assuming Google Sans Flex is preferred, otherwise adjust
          },
          colors: {
            emerald: {
              50: '#ecfdf5', 100: '#d1fae5', 200: '#a7f3d0', 300: '#6ee7b7', 400: '#34d399',
              500: '#10b981', 600: '#059669', 700: '#047857', 800: '#065f46', 900: '#064e3b',
            },
            teal: {
              50: '#f0fdfa', 100: '#ccfbf1', 200: '#99f6e4', 300: '#5eead4', 400: '#2dd4bf',
              500: '#14b8a6', 600: '#0d9488', 700: '#0f766e', 800: '#115e59', 900: '#134e4a',
            },
            cyan: {
              50: '#ecfeff', 100: '#cffafe', 200: '#a5f3fc', 300: '#67e8f9', 400: '#22d3ee',
              500: '#06b6d4', 600: '#059669', 700: '#047857', 800: '#065f46', 900: '#064e3b',
            }
          },
          boxShadow: {
            'soft': '0 2px 15px -3px rgba(5, 150, 105, 0.07), 0 10px 20px -2px rgba(5, 150, 105, 0.04)',
            'glow': '0 0 20px rgba(5, 150, 105, 0.15)',
            'floating': '0 15px 35px -10px rgba(5, 150, 105, 0.25)',
            'card': '0 4px 20px rgba(0, 0, 0, 0.05)',
          },
          animation: {
            'float': 'float 6s ease-in-out infinite',
            'float-delayed': 'float 6s ease-in-out 2s infinite',
            'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
            'slide-up': 'slideUp 0.5s ease-out',
            'fade-in': 'fadeIn 0.6s ease-out',
            'scale-in': 'scaleIn 0.3s ease-out',
          }
        }
      }
    }
  </script>
  
  <style>
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
    .bubble {
      position: absolute;
      background: rgba(255, 255, 255, 0.2);
      border-radius: 100%;
      backdrop-filter: blur(1px);
      box-shadow: inset 0 0 8px rgba(255,255,255,0.6);
      pointer-events: none;
      z-index: 1;
    }
    .glass-card {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
      border: 1px solid rgba(255, 255, 255, 0.4);
    }
    input:focus {
      outline: none;
      border-color: transparent;
      box-shadow: 0 0 0 4px rgba(16, 185, 129, 0.15), 0 2px 6px rgba(0,0,0,0.03);
    }
    .btn-press:active {
      transform: scale(0.97);
    }
    /* Dark Mode Overrides for Login/Reset Page */
    .dark body,
    .dark .bg-gradient-to-br,
    .dark .min-h-screen {
      background: #0f1115 !important; /* Dark background */
      color: #e2e8f0; /* Light text */
    }
    .dark .bubble {
      background: rgba(255, 255, 255, 0.05); /* Darker bubbles */
      box-shadow: inset 0 0 8px rgba(255,255,255,0.1);
    }
    .dark .glass-card {
      background: #1a1d23 !important; /* Darker card background */
      border-color: rgba(255, 255, 255, 0.05) !important;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3) !important; /* Darker shadow */
    }
    .dark .text-gray-800, .dark h1, .dark h2, .dark h3 { color: #f8fafc !important; } /* Light text for headings */
    .dark .text-gray-700 { color: #cbd5e1 !important; } /* Lighter gray for labels */
    .dark .text-gray-600 { color: #94a3b8 !important; } /* Lighter gray for descriptions */
    .dark .text-gray-500 { color: #64748b !important; } /* Lighter gray for descriptions */
    .dark .text-emerald-50, .dark .text-teal-400, .dark .text-cyan-400 { color: #a7f3d0 !important; } /* Lighter green/cyan for accents */
    .dark .text-teal-600 { color: #2dd4bf !important; } /* Adjusted teal for links */
    .dark .text-red-500 { color: #f87171 !important; } /* Lighter red for errors */
    .dark .border-gray-200 { border-color: #374151 !important; } /* Darker border for inputs */
    .dark .bg-white\/70 { background-color: rgba(26, 29, 35, 0.7) !important; } /* Darker input background */
    .dark .focus\:bg-white:focus { background-color: #1f242d !important; } /* Darker focus background for inputs */
    .dark .hover\:text-teal-600 { color: #2dd4bf !important; } /* Dark hover text */
    .dark .bg-gradient-to-r, .dark .from-emerald-600, .dark .to-teal-600 {
      background-image: linear-gradient(to right, #059669 0%, #0d9488 100%) !important;
    }
    .dark .hover\:from-emerald-500, .dark .hover\:to-teal-500 {
      background-image: linear-gradient(to right, #10b981 0%, #14b8a6 100%) !important;
    }
    .dark .shadow-lg { box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2) !important; } /* Darker shadow */
    .dark .shadow-teal-600\/30 { box-shadow: 0 4px 20px rgba(13, 148, 115, 0.2) !important; }
    .dark .hover\:shadow-xl { box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3) !important; }
    .dark .hover\:shadow-teal-500\/40 { box-shadow: 0 10px 40px rgba(13, 148, 115, 0.3) !important; }
    .dark .text-teal-700 { color: #2dd4bf !important; }
    .dark .underline-offset-2 { text-decoration-thickness: 1px; text-underline-offset: 2px; }
    .dark .decoration-teal-300 { text-decoration-color: #5eead4 !important; }
    .dark .text-gray-300 { color: #cbd5e1 !important; }
    .dark .text-gray-500 { color: #94a3b8 !important; }
    .dark .text-red-500 { color: #f87171 !important; }
    .dark .bg-white\/20 { background-color: rgba(255, 255, 255, 0.05) !important; }
    .dark .blur-xl { filter: blur(1.5rem) !important; }
    .dark .blur-md { filter: blur(0.75rem) !important; }
    .dark .opacity-30 { opacity: 0.3; }
    .dark .text-emerald-100 { color: #d1fae5 !important; }
    .dark .font-light { font-weight: 300; }
    .dark .bg-white\/5 { background-color: rgba(255, 255, 255, 0.02) !important; }
    .dark .bg-black\/50 { background-color: rgba(0,0,0,0.5) !important; }
    .dark .bg-black\/70 { background-color: rgba(0,0,0,0.7) !important; }
  </style>
</head>
<body class="font-sans antialiased bg-gradient-to-br from-emerald-700 via-teal-600 to-cyan-600 min-h-screen flex items-center justify-center relative overflow-x-hidden p-4 dark:bg-gray-900 dark:text-white">

  <!-- BACKGROUND BUBBLES -->
  <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
    <!-- elemen gelombang / bentuk organik (dekoratif) -->
    <svg class="absolute bottom-0 left-0 w-full text-white/10 dark:text-white/5" viewBox="0 0 1440 200" preserveAspectRatio="none">
      <path fill="currentColor" d="M0 0h60v60H0z" class="dark:fill-gray-800"></path>
      <path d="M0 30c15 0 15-10 30-10s15 10 30 10v30H0z" fill-opacity="0.03" fill="currentColor"></path>
    </svg>
    <!-- lapisan gelombang kedua -->
    <svg class="absolute top-0 left-0 w-full text-emerald-200/20 rotate-180 dark:text-emerald-400/10" viewBox="0 0 1440 320" preserveAspectRatio="none">
      <path fill="currentColor" d="M0,64L48,80C96,96,192,128,288,138.7C384,149,480,139,576,122.7C672,107,768,85,864,96C960,107,1056,149,1152,154.7C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
    
    <!-- Bubbles -->
    <div class="bubble w-16 h-16 left-[5%] top-[20%] opacity-30 animate-float dark:bg-gray-800 dark:border-gray-700"></div>
    <div class="bubble w-10 h-10 left-[15%] top-[70%] opacity-40 animate-float dark:bg-gray-800 dark:border-gray-700" style="animation-delay: 1.5s; animation-duration: 8s;"></div>
    <div class="bubble w-20 h-20 left-[80%] top-[45%] opacity-20 animate-float dark:bg-gray-800 dark:border-gray-700" style="animation-delay: 0.8s; animation-duration: 9s;"></div>
    <div class="bubble w-12 h-12 left-[60%] top-[85%] opacity-30 animate-float dark:bg-gray-800 dark:border-gray-700" style="animation-delay: 2.2s;"></div>
    <div class="bubble w-8 h-8 left-[40%] top-[10%] opacity-40 animate-float dark:bg-gray-800 dark:border-gray-700" style="animation-delay: 0.2s; animation-duration: 5s;"></div>
  </div>

  <!-- MAIN CARD -->
  <div class="relative z-10 w-full max-w-[400px] md:max-w-[440px] mx-auto animate-fade-slide dark:bg-gray-800 dark:border-gray-700 dark:shadow-lg">
    
    <!-- HEADER -->
    <div class="relative rounded-t-3xl rounded-b-2xl bg-gradient-to-r from-emerald-500 via-teal-400 to-cyan-400 p-6 shadow-xl overflow-hidden dark:from-emerald-700 dark:via-teal-700 dark:to-cyan-700 dark:border-white/5">
      <div class="absolute -right-6 -top-6 w-32 h-32 bg-white/20 rounded-full blur-xl dark:bg-emerald-800/20"></div>
      <div class="absolute -left-4 bottom-2 w-16 h-16 bg-white/20 rounded-full blur-md dark:bg-teal-800/20"></div>
      
      <div class="flex items-center gap-3 relative">
        <div class="w-14 h-14 rounded-2xl bg-white/20 backdrop-blur-sm flex items-center justify-center text-white shadow-lg dark:bg-gray-700 dark:border-gray-600">
          <i class="fa-solid fa-key text-2xl"></i>
        </div>
        <div>
          <h1 class="text-2xl font-bold text-white drop-shadow-md dark:text-gray-200">Lupa Password?</h1>
          <p class="text-sm text-emerald-50/90 font-light dark:text-emerald-200/90">Tenang, kami akan bantu reset</p>
        </div>
      </div>
    </div>

    <!-- CARD CONTENT -->
    <div class="glass-card rounded-2xl shadow-2xl mt-2 p-6 md:p-7 border border-white/30 text-gray-800 transition-all dark:bg-gray-800 dark:border-gray-700 dark:shadow-lg dark:text-gray-200">
      
      <!-- Info Text -->
      <div class="text-center mb-6">
        <div class="w-20 h-20 mx-auto bg-emerald-100 rounded-full flex items-center justify-center mb-4 dark:bg-emerald-700">
          <i class="fa-solid fa-envelope-open-text text-3xl text-emerald-600 dark:text-emerald-400"></i>
        </div>
        <h2 class="text-lg font-bold text-gray-800 mb-2 dark:text-white">Reset Password</h2>
        <p class="text-sm text-gray-600 dark:text-gray-300">Masukkan email atau username Anda. Kami akan mengirimkan instruksi reset password.</p>
      </div>
      
      <!-- FORM RESET -->
      <div class="space-y-5">
        <!-- Email/Username Field -->
        <div>
          <label class="block text-sm font-semibold text-gray-700 mb-1 ml-1 dark:text-gray-300">
            <i class="fa-regular fa-envelope mr-1 text-teal-600 dark:text-teal-400"></i>Email atau Username
          </label>
          <input type="text" placeholder="admin@alfinaquatic.com" class="w-full px-5 py-3.5 rounded-xl border border-gray-200 bg-white/70 focus:bg-white transition-colors placeholder:text-gray-400 text-gray-800 text-base dark:border-gray-700 dark:bg-gray-700 dark:focus:bg-gray-600 dark:text-white">
        </div>

        <!-- Tombol Kirim -->
        <button class="btn-press relative w-full bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-500 hover:to-teal-500 text-white font-bold py-4 rounded-xl text-lg shadow-lg shadow-teal-600/30 hover:shadow-xl hover:shadow-teal-500/40 transition-all duration-300 active:scale-[0.98] mt-4 flex items-center justify-center gap-2 dark:from-emerald-700 dark:via-teal-700 dark:to-cyan-700 dark:hover:from-emerald-600 dark:hover:to-teal-600 dark:shadow-lg dark:shadow-teal-700/40">
          <i class="fa-regular fa-paper-plane"></i>
          <span>Kirim Instruksi Reset</span>
        </button>

        <!-- Link Kembali ke Login -->
        <div class="text-center mt-4">
          <a href="#" class="text-sm text-teal-600 hover:text-teal-700 font-medium transition flex items-center justify-center gap-1 dark:text-teal-400 dark:hover:text-teal-300">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Kembali ke halaman login</span>
          </a>
        </div>
      </div>
    </div>

    <!-- FOOTER DEKORATIF -->
    <div class="flex justify-between items-center mt-3 px-2 text-white/50 text-xs dark:text-gray-400">
      <div class="flex gap-1">
        <i class="fa-solid fa-fish"></i>
        <i class="fa-solid fa-fish"></i>
        <i class="fa-solid fa-water"></i>
      </div>
      <div class="flex gap-1">
        <span class="w-1 h-1 bg-white/30 rounded-full dark:bg-gray-600"></span>
        <span class="w-1.5 h-1.5 bg-white/40 rounded-full animate-pulse dark:bg-gray-500"></span>
        <span class="w-1 h-1 bg-white/30 rounded-full dark:bg-gray-600"></span>
      </div>
    </div>
  </div>

  <!-- SUCCESS MODAL (Hidden by default) -->
  <div id="successModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden dark:bg-black/70">
    <div class="h-screen flex items-center justify-center p-4">
      <div class="text-center w-full max-w-sm">
        <div class="w-20 h-20 mx-auto bg-emerald-100 rounded-full flex items-center justify-center mb-4 dark:bg-emerald-700">
          <i class="fa-solid fa-check text-4xl text-emerald-600 dark:text-emerald-400"></i>
        </div>
        <h3 class="text-xl font-bold text-gray-800 mb-2 dark:text-white">Email Terkirim!</h3>
        <p class="text-sm text-gray-600 mb-4 dark:text-gray-300">Kami telah mengirimkan instruksi reset password ke email Anda. Silakan cek kotak masuk.</p>
        <button onclick="closeModal()" class="w-full bg-gradient-to-r from-emerald-600 to-teal-600 text-white font-semibold py-3 rounded-xl hover:from-emerald-500 hover:to-teal-500 transition-all btn-press dark:from-emerald-700 dark:to-teal-700 dark:hover:from-emerald-600 dark:hover:to-teal-600">
          Tutup
        </button>
      </div>
    </div>
  </div>

  <script>
    // Theme Initialization Logic (based on localStorage or OS preference)
    (function() {
        const savedTheme = localStorage.getItem('theme');
        const html = document.documentElement;

        if (savedTheme === 'Gelap') {
            html.classList.add('dark');
        } else if (savedTheme === 'Terang') {
            html.classList.remove('dark');
        } else if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
            html.classList.add('dark');
        }
    })();

    // Function to toggle password visibility
    const togglePasswordBtn = document.getElementById('togglePassword');
    if (togglePasswordBtn) {
        const passwordField = document.getElementById('passwordField');
        const icon = document.getElementById('toggleIcon');
        toggleBtn.addEventListener('click', function() {
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
            // Change icon
            if (type === 'password') {
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            } else {
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            }
        });
    }
    
    // Modal control functions
    function closeModal() {
        document.getElementById('successModal').classList.add('hidden');
    }
    
    // Close modal with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !document.getElementById('successModal').classList.contains('hidden')) {
            closeModal();
        }
    });
  </script>
</body>
</html>
