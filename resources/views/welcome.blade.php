<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengkel Pro - System Access</title>
    <!-- Importing Tailwind CSS via CDN for quick styling -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom configuration for specific colors found in your image -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        bengkel: {
                            bg: '#111111',
                            panel: '#151515',
                            border: '#2a201c',
                            accent: '#ffaa8b',
                            text: '#c0c0c0',
                            inputBg: '#0a0a0a'
                        }
                    },
                    fontFamily: {
                        sans: ['ui-sans-serif', 'system-ui', 'sans-serif'],
                        mono: ['ui-monospace', 'SFMono-Regular', 'Menlo', 'Monaco', 'Consolas', "Liberation Mono", "Courier New", 'monospace'],
                    }
                }
            }
        }
    </script>
    <style>
        /* Creates the subtle dotted background effect seen in the image */
        body {
            background-color: #111111;
            background-image: radial-gradient(#2a201c 1px, transparent 1px);
            background-size: 20px 20px;
        }
        /* Custom scrollbar for an industrial feel (optional) */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #111; }
        ::-webkit-scrollbar-thumb { background: #ffaa8b; }
    </style>
</head>
<body class="text-bengkel-text min-h-screen flex flex-col font-sans selection:bg-bengkel-accent selection:text-black">

    <!-- NAVIGATION BAR -->
    <nav class="flex justify-between items-center px-10 py-6 border-b border-bengkel-border bg-bengkel-bg/90 backdrop-blur-sm fixed w-full top-0 z-50">
        <div class="text-bengkel-accent text-xl font-bold tracking-widest">
            BENGKEL PRO
        </div>
        <div class="hidden md:flex space-x-8 text-sm">
            <a href="#" class="hover:text-white transition-colors">Home</a>
            <a href="#" class="hover:text-white transition-colors">Booking</a>
            <a href="#" class="hover:text-white transition-colors">Parts</a>
            <a href="#" class="hover:text-white transition-colors">Pricing</a>
        </div>
        <div>
            <a href="#" class="text-sm hover:text-white transition-colors">Login</a>
        </div>
    </nav>

    <!-- MAIN CONTENT (LOGIN BOX) -->
    <main class="grow flex items-center justify-center px-4 pt-24 pb-12">

       <div class="w-full max-w-125 bg-bengkel-panel ...">
            <!-- Header Section -->
            <div class="mb-8">
                <div class="flex items-center space-x-3 text-bengkel-accent mb-4">
                    <!-- Simple SVG Icon representing a terminal/system -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <h1 class="text-2xl font-medium tracking-wide">SYSTEM ACCESS</h1>
                </div>
                <p class="text-sm text-gray-400">Authenticate to access diagnostic tools and booking data.</p>
            </div>

            <!-- Laravel Form -->
            <form method="POST" action="#">
                <!-- Laravel CSRF Token (Crucial for Laravel Forms) -->
                @csrf

                <!-- Email/Phone Input -->
                <div class="mb-6">
                    <label for="identifier" class="block text-xs font-mono uppercase tracking-widest mb-2 text-gray-300">
                        Identifier (Email/Phone)
                    </label>
                    <input type="text" id="identifier" name="identifier" placeholder="Enter ID" required
                        class="w-full bg-bengkel-inputBg border border-gray-800 text-white px-4 py-3 focus:outline-none focus:border-bengkel-accent transition-colors">
                </div>

                <!-- Password Input -->
                <div class="mb-6">
                    <label for="password" class="block text-xs font-mono uppercase tracking-widest mb-2 text-gray-300">
                        Access Key (Password)
                    </label>
                    <input type="password" id="password" name="password" placeholder="••••••••" required
                        class="w-full bg-bengkel-inputBg border border-gray-800 text-white px-4 py-3 focus:outline-none focus:border-bengkel-accent transition-colors font-mono placeholder:text-gray-600">
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between mb-8 text-xs font-mono">
                    <label class="flex items-center cursor-pointer">
                        <input type="checkbox" name="remember" class="sr-only peer">
                        <div class="w-4 h-4 border border-gray-600 bg-bengkel-inputBg peer-checked:bg-bengkel-accent peer-checked:border-bengkel-accent flex items-center justify-center mr-2">
                            <!-- Checkmark SVG -->
                            <svg class="w-3 h-3 text-black hidden peer-checked:block" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span class="text-gray-400 select-none">Remember Me</span>
                    </label>

                    <a href="#" class="text-bengkel-accent hover:text-white transition-colors">Forgot Password?</a>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full bg-bengkel-accent text-black font-bold py-4 text-lg uppercase tracking-widest hover:bg-orange-300 transition-colors">
                    Authenticate
                </button>
            </form>

            <!-- Bottom Link -->
            <div class="mt-8 text-center border-t border-gray-800 pt-6 text-sm">
                <span class="text-gray-500">No authorized access?</span>
                <a href="#" class="text-bengkel-accent hover:text-white ml-1">Register Operator</a>
            </div>

        </div>
    </main>

    <!-- FOOTER -->
    <footer class="border-t border-bengkel-border bg-bengkel-bg px-10 py-12">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
            <div class="text-white text-xl font-medium tracking-wide mb-4 md:mb-0">
                Bengkel Pro
            </div>
            <div class="text-gray-500 text-xs font-mono">
                © 2024 Bengkel Pro Industrial. All Rights Reserved.
            </div>
        </div>

        <hr class="border-gray-800 mb-8">

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Col 1 -->
            <div>
                <h3 class="text-bengkel-accent text-xs font-mono uppercase tracking-widest mb-3">Location</h3>
                <p class="text-gray-400 text-xs font-mono leading-relaxed">
                    Address: 123 Turbo Lane, Gearbox City
                </p>
            </div>
            <!-- Col 2 -->
            <div>
                <h3 class="text-bengkel-accent text-xs font-mono uppercase tracking-widest mb-3">Operations</h3>
                <p class="text-gray-400 text-xs font-mono leading-relaxed">
                    Hours: Mon-Sat 08:00 - 18:00
                </p>
            </div>
            <!-- Col 3 -->
            <div>
                <h3 class="text-bengkel-accent text-xs font-mono uppercase tracking-widest mb-3">Support</h3>
                <p class="text-gray-400 text-xs font-mono leading-relaxed">
                    Contact: +62 812-3456-7890 (WhatsApp)
                </p>
            </div>
            <!-- Col 4 -->
            <div>
                <h3 class="text-bengkel-accent text-xs font-mono uppercase tracking-widest mb-3">Legal</h3>
                <div class="flex flex-col space-y-2">
                    <a href="#" class="text-gray-400 text-xs font-mono hover:text-bengkel-accent transition-colors">Privacy Policy</a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
