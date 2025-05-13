<x-layouts.app :title="__('Dashboard')">
    <div class="flex flex-col items-center justify-center min-h-[70vh] text-center space-y-6 animate-slide-in-up">
        <div class="text-5xl md:text-6xl font-bold text-indigo-500 dark:text-indigo-300">
            👨‍💻 Dashboard Admin
        </div>

        <h2 class="text-3xl md:text-4xl font-semibold text-gray-800 dark:text-white">
            Halo, Puk's! Senang melihatmu kembali.
        </h2>

        <p class="text-base md:text-lg text-gray-600 dark:text-gray-300 max-w-xl">
            Di sini kamu bisa memantau statistik, mengelola data penting, dan memastikan semuanya berjalan lancar.
        </p>
    </div>

    <style>
        @keyframes slide-in-up {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-slide-in-up {
            animation: slide-in-up 1s ease-out both;
        }
    </style>
</x-layouts.app>
