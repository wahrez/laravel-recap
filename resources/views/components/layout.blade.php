<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="utf-8">
    @vite('resources/js/app.js')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">
<div class="min-h-full">
    <nav class="bg-gray-800 dark:bg-gray-800/50">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="shrink-0">
                        <a href="/"><img
                                src="https://skytechnology.dev/build/images/logo-2.4c5960f46110c08efd9ee2f0ab09dc7f.png"
                                alt="Sky Technology"/>
                        </a>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <!-- Current: "bg-gray-900 dark:bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
                            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                            <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                            <x-nav-link href="/jobs" :active="request()->is('jobs')">jobs</x-nav-link>
                            <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <button type="button"
                                class="relative rounded-full p-1 text-gray-400 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">View notifications</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                 data-slot="icon" aria-hidden="true" class="size-6">
                                <path
                                    d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0"
                                    stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>

                        <!-- Profile dropdown -->
                        <el-dropdown class="relative ml-3">
                            <button
                                class="relative flex max-w-xs items-center rounded-full focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">Open user menu</span>
                                <img
                                    src="https://skytechnology.dev/build/images/about-us/staff-profile/wahrez.0fae8f929663aa72d9794aba1b0036ea.png"
                                    alt="" class="size-8 rounded-full outline -outline-offset-1 outline-white/10"/>
                            </button>
                        </el-dropdown>
                    </div>
                </div>
                <div class="-mr-2 flex md:hidden">
                    <!-- Mobile menu button -->
                    <button type="button" command="--toggle" commandfor="mobile-menu"
                            class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon"
                             aria-hidden="true" class="size-6 in-aria-expanded:hidden">
                            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon"
                             aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
                            <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <el-disclosure id="mobile-menu" hidden class="block md:hidden">
            <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
                <!-- Current: "bg-gray-900 dark:bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
                <a href="/" aria-current="page"
                   class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white dark:bg-gray-950/50">Home</a>
                <a href="/about"
                   class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">About</a>
                <a href="/jobs"
                   class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">jobs</a>
                <a href="/contact"
                   class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Contact</a>
            </div>
            <div class="border-t border-white/10 pt-4 pb-3">
                <div class="flex items-center px-5">
                    <div class="shrink-0">
                        <img
                            src="https://skytechnology.dev/build/images/about-us/staff-profile/wahrez.0fae8f929663aa72d9794aba1b0036ea.png"
                            alt="" class="size-8 rounded-full outline -outline-offset-1 outline-white/10"/>
                    </div>
                    <div class="ml-3">
                        <div class="text-base/5 font-medium text-white">Tom Cook</div>
                        <div class="text-sm font-medium text-gray-400">tom@example.com</div>
                    </div>
                    <button type="button"
                            class="relative ml-auto shrink-0 rounded-full p-1 text-gray-400 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">View notifications</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon"
                             aria-hidden="true" class="size-6">
                            <path
                                d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0"
                                stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </div>
        </el-disclosure>
    </nav>

    <header
        class="relative bg-white shadow-sm dark:bg-gray-800 dark:shadow-none dark:after:pointer-events-none dark:after:absolute dark:after:inset-x-0 dark:after:inset-y-0 dark:after:border-y dark:after:border-white/10">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex items-start justify-between">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $heading }}</h1>
            <x-button href="/jobs/create/">Create Job</x-button>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>
</div>

</body>
</html>
