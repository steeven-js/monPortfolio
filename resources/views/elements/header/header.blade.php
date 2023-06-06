<header class="h-24 bg-white border-b border-slate-200/80 dark:bg-gray-800">
    <div class="flex items-center w-full h-full max-w-screen-xl px-5 mx-auto sm:px-6 lg:px-8">
        <nav class="relative z-50 flex items-center justify-between w-full">
            <!-- Logo -->
            <div class="flex items-center shrink-0">
                <a href="index.html" aria-label="Home" class="flex items-center flex-shrink-0">
                    <img src="https://flowbite.com/docs/images/logo.svg" alt="logo"
                        class="w-auto h-8 sm:h-9 md:hidden lg:block lg:h-10" />
                    <img src="storage/images/logo-icon.png" alt=""
                        class="hidden w-auto h-8 md:block lg:hidden" />
                </a>
                <p class="font-medium text-slate-700 hover:text-slate-900 hover:after:opacity-25 dark:text-white ml-3">Steeven</p>
            </div>

            <!-- Desktop navigation links -->
            <div class="items-center hidden md:flex md:space-x-6 lg:space-x-8">
                <a href="{{ route('home') }}"
                    class="relative duration-200 after:absolute after:left-1/2 after:-bottom-2.5 after:h-0.5 after:w-4 after:-translate-x-1/2 after:rounded-full after:bg-slate-900 after:opacity-0 after:content-[&quot;&quot;] font-medium text-slate-700 hover:text-slate-900 hover:after:opacity-25 dark:text-white">
                    Home
                </a>
                <a href="{{ route('about') }}"
                    class="relative duration-200 after:absolute after:left-1/2 after:-bottom-2.5 after:h-0.5 after:w-4 after:-translate-x-1/2 after:rounded-full after:bg-slate-900 after:opacity-0 after:content-[&quot;&quot;] font-medium text-slate-700 hover:text-slate-900 hover:after:opacity-25 dark:text-white">
                    About
                </a>
                <a href="{{ route('portfolio') }}"
                    class="relative duration-200 after:absolute after:left-1/2 after:-bottom-2.5 after:h-0.5 after:w-4 after:-translate-x-1/2 after:rounded-full after:bg-slate-900 after:opacity-0 after:content-[&quot;&quot;] font-medium text-slate-700 hover:text-slate-900 hover:after:opacity-25 dark:text-white">
                    Portfolio
                </a>
                <a href="{{ route('blog') }}"
                    class="relative duration-200 after:absolute after:left-1/2 after:-bottom-2.5 after:h-0.5 after:w-4 after:-translate-x-1/2 after:rounded-full after:bg-slate-900 after:opacity-0 after:content-[&quot;&quot;] font-medium text-slate-700 hover:text-slate-900 hover:after:opacity-25 dark:text-white">
                    Blog
                </a>
                <a href="{{ route('contact') }}"
                    class="relative duration-200 after:absolute after:left-1/2 after:-bottom-2.5 after:h-0.5 after:w-4 after:-translate-x-1/2 after:rounded-full after:bg-slate-900 after:opacity-0 after:content-[&quot;&quot;] font-medium text-slate-700 hover:text-slate-900 hover:after:opacity-25 dark:text-white">
                    Contact
                </a>
                <a href="#">
                    <!-- Dark mode switcher -->
                    @include('components/darkMode')
                    <!-- Dark mode switcher end -->
                </a>
            </div>


            <div class="flex items-center">
                <!-- Call to action -->
                <a class="text-slate-900 shadow-sm shadow-sky-100/50 ring-1 ring-slate-100 hover:bg-slate-200/60 hover:shadow-sky-100/50 bg-slate-100/80 inline-flex items-center rounded-full gap-2.5 justify-center px-7 py-3 text-md font-semibold leading-none outline-offset-2 transition-all duration-200 ease-in-out active:transition-none"
                    href="{{ route('contact') }}">
                    Book a call
                </a>

                <!-- Mobile menu button -->
                <div class="ml-4 md:hidden" x-data="{ mobileMenuOpen: false }">
                    <button
                        class="relative z-50 flex items-center justify-center p-3 transition duration-300 ease-in-out rounded-full shadow-sm cursor-pointer group bg-slate-100/80 shadow-sky-100/50 ring-1 ring-slate-900/5 hover:bg-slate-200/60 focus:outline-none md:hidden"
                        aria-label="Toggle Navigation" @click="mobileMenuOpen=!mobileMenuOpen">
                        <span class="relative h-3.5 w-4 transform transition duration-500 ease-in-out">
                            <span
                                class="absolute block h-0.5 rotate-0 transform rounded-full bg-slate-700 opacity-100 transition-all duration-300 ease-in-out group-hover:bg-slate-900"
                                :class="mobileMenuOpen ? 'top-1.5 left-1/2 w-0' : 'top-0 left-0 w-full'"></span>
                            <span
                                class="absolute left-0 top-1.5 block h-0.5 w-full transform rounded-full bg-slate-700 opacity-100 transition-all duration-300 ease-in-out group-hover:bg-slate-900"
                                :class="mobileMenuOpen ? 'rotate-45' : 'rotate-0'"></span>
                            <span
                                class="absolute left-0 top-1.5 block h-0.5 w-full transform rounded-full bg-slate-700 opacity-100 transition-all duration-300 ease-in-out group-hover:bg-slate-900"
                                :class="mobileMenuOpen ? '-rotate-45' : 'rotate-0'"></span>
                            <span
                                class="absolute block h-0.5 rotate-0 transform rounded-full bg-slate-700 opacity-100 transition-all duration-300 ease-in-out group-hover:bg-slate-900"
                                :class="mobileMenuOpen ? 'top-1.5 left-1/2 w-0' : 'left-0 top-3 w-full'"></span>
                        </span>
                    </button>

                    <!-- Mobile menu container -->
                    <div class="md:hidden">
                        <!-- Background dark overlay when mobile menu is open -->
                        <div x-show="mobileMenuOpen" x-transition:enter="duration-200 ease-out"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="duration-150 ease-in" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0" class="fixed inset-0 z-20 bg-opacity-50 bg-slate-900"
                            style="display: none">
                        </div>

                        <!-- Mobile menu popover -->
                        <div x-show="mobileMenuOpen" x-transition:enter="duration-300 ease-out"
                            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="duration-200 ease-in" x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-90"
                            class="absolute inset-x-0 z-30 px-6 mt-4 overflow-hidden origin-top shadow-xl top-full rounded-2xl bg-slate-50 py-7 shadow-sky-100/40 ring-1 ring-slate-900/5"
                            style="display: none" @click.away="mobileMenuOpen = false">
                            <div>
                                <!-- Mobile menu links -->
                                <div class="flex flex-col space-y-4">
                                    <a href="{{ route('home') }}"
                                        class="block text-base font-semibold duration-200 text-slate-700 hover:text-slate-900">
                                        Home
                                    </a>
                                    <a href="{{ route('about') }}"
                                        class="block text-base font-semibold duration-200 text-slate-700 hover:text-slate-900">
                                        About
                                    </a>
                                    <a href="{{ route('portfolio') }}"
                                        class="block text-base font-semibold duration-200 text-slate-700 hover:text-slate-900">
                                        Portfolio
                                    </a>
                                    <a href="{{ route('blog') }}"
                                        class="block text-base font-semibold duration-200 text-slate-700 hover:text-slate-900">
                                        Blog
                                    </a>
                                    <a href="{{ route('contact') }}"
                                        class="block text-base font-semibold duration-200 text-slate-700 hover:text-slate-900">
                                        Contact
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
