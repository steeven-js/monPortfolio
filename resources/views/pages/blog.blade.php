@extends('layouts.default')
@section('content')
    <!-- Blog Hero -->
    <section class="relative overflow-hidden bg-white lg:px-8 dark:bg-gray-800">
        <div
            class="relative max-w-screen-xl px-5 py-16 mx-auto sm:px-6 lg:px-8 bg-slate-50 sm:py-24 lg:rounded-b-3xl lg:py-32">
            <img src="{{ Storage::url('images/blog-hero-bg.svg') }}" alt="" class="absolute inset-0 w-full h-full" />
            <div class="relative flex flex-col items-center justify-center">
                <h1 class="text-5xl font-semibold text-center font-display text-slate-900 sm:text-6xl dark:text-sky-700">
                    Bienvenue sur 

                    <!-- Highlighted text -->
                    <span class="relative whitespace-nowrap">
                        <svg xmlns="http://www.w3.org/2000/svg" width="249" height="22" viewBox="0 0 249 22"
                            fill="currentColor" class="absolute top-2/3 left-0 h-[0.6em] w-full scale-110 fill-sky-200/75">
                            <path
                                d="M247.564 18.5807C241.772 13.3568 232.473 12.7526 225.225 11.4427C217.124 9.97395 208.996 8.57031 200.846 7.46093C186.542 5.51302 172.169 4.08854 157.79 3.01562C126.033 0.645827 94.0929 0.0338481 62.3387 2.36979C42.1785 3.85416 22.008 5.90885 2.32917 10.8463C-0.0155171 11.4349 0.207047 14.6719 2.6889 14.7083C22.0261 14.9896 41.3866 12.6406 60.7109 11.8568C79.9471 11.0807 99.2274 10.6719 118.484 10.9557C142.604 11.3125 166.719 12.8333 190.722 15.5156C199.956 16.5469 209.195 17.6016 218.411 18.8255C227.864 20.0807 237.259 22 246.767 20.7422C247.709 20.6198 248.426 19.3568 247.564 18.5807Z" />
                        </svg>
                        <span class="relative">mon blog</span>
                    </span>
                </h1>
                <p class="max-w-xl mx-auto mt-6 text-lg leading-8 text-center text-slate-700">
                    Join me on my journey as I share my insights and experiences on web
                    development, business, and content creation.
                </p>

                <!-- Newsletter form -->
                <form action="#" method="post" class="relative w-full max-w-lg mt-12">
                    <!-- Floating handwritten text with arrow -->
                    <div class="absolute hidden -left-48 -top-12 lg:flex xl:-left-72">
                        <span class="inline-block max-w-[175px] -rotate-12 transform font-writing text-2xl text-slate-600">
                            Subscribe to my newsletter
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="91" height="49" viewBox="0 0 91 49"
                            fill="none" class="relative left-0 w-20 h-auto -top-5 text-slate-600">
                            <g clip-path="url(#clip0_324_1142)">
                                <path
                                    d="M1.69238 27.312C20.3067 17.6575 42.2779 13.0915 62.6792 20.3817C68.653 22.5164 74.9261 26.8457 79.7975 31.004C80.8268 31.8828 81.6964 32.9264 82.5869 33.944C83.4001 34.8733 83.6539 26.1696 83.7375 25.1594C84.6308 14.3591 83.4075 25.9604 83.6012 30.1072C83.7516 33.3254 84.9068 36.8047 84.5415 40.0293C84.2474 42.6259 79.3878 40.8403 77.6335 40.5719C75.8298 40.2959 63.737 40.239 66.2469 36.714C70.7498 30.3895 77.2856 27.0444 83.4264 22.7486"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_324_1142">
                                    <rect width="85" height="29" fill="white"
                                        transform="translate(83 49) rotate(-165.831)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>

                    <!-- Email input -->
                    <input type="email"
                        class="h-12 w-full rounded-full border-0 bg-white/95 py-3.5 pl-5 pr-32 text-sm leading-5 text-slate-900 placeholder-slate-400 shadow-md shadow-sky-100/50 outline-none ring-1 ring-slate-900/5 duration-200 ease-in-out focus:border-0 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-sky-900/20 sm:pl-6 sm:text-md"
                        required placeholder="Enter your email" autocomplete="email" />
                    <button type="submit"
                        class="absolute inline-flex items-center h-10 px-5 text-sm font-semibold transition duration-200 ease-in-out rounded-full outline-none right-1 top-1 bg-slate-900 text-sky-50 hover:bg-sky-800 focus:outline-none sm:px-7 sm:text-md">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Articles -->
    <section id="articles" class="py-16 overflow-hidden bg-white sm:py-24 lg:py-28 dark:bg-gray-800">
        <!-- Container -->
        <div class="max-w-screen-xl px-5 mx-auto sm:px-6 lg:px-8">
            <h2 class="text-4xl font-semibold text-center font-display text-slate-900 sm:text-5xl dark:text-sky-700">
                Latest Articles
            </h2>

            <!-- Tabs -->
            <ul class="flex flex-wrap items-center justify-center gap-2 mt-9">
                <!-- Active: "bg-slate-50 text-sky-800 shadow-sm shadow-sky-100/50 ring-1 ring-slate-900/5", Inactive: "bg-white text-slate-700 duration-200 ease-in-out hover:bg-slate-50/95", Default: "inline-block rounded-full px-5 py-1.5 text-md font-medium transition" -->

                <li>
                    <!-- Active tab -->
                    <a href="#0"
                        class="inline-block rounded-full px-5 py-1.5 text-md font-medium transition bg-slate-50 text-sky-800 shadow-sm shadow-sky-100/50 ring-1 ring-slate-900/5">
                        All Articles
                    </a>
                </li>

                <li>
                    <a href="#0"
                        class="bg-white text-slate-700 duration-200 ease-in-out hover:bg-slate-50/95 inline-block rounded-full px-5 py-1.5 text-md font-medium transition">
                        Web Development
                    </a>
                </li>

                <li>
                    <a href="#0"
                        class="bg-white text-slate-700 duration-200 ease-in-out hover:bg-slate-50/95 inline-block rounded-full px-5 py-1.5 text-md font-medium transition">
                        Business
                    </a>
                </li>

                <li>
                    <a href="#0"
                        class="bg-white text-slate-700 duration-200 ease-in-out hover:bg-slate-50/95 inline-block rounded-full px-5 py-1.5 text-md font-medium transition">
                        Tutorials
                    </a>
                </li>

                <li>
                    <a href="#0"
                        class="bg-white text-slate-700 duration-200 ease-in-out hover:bg-slate-50/95 inline-block rounded-full px-5 py-1.5 text-md font-medium transition">
                        Content Creation
                    </a>
                </li>
            </ul>

            <!-- Articles list -->
            <div
                class="grid max-w-lg gap-8 mx-auto mt-14 sm:mt-16 md:mx-0 md:max-w-none md:grid-cols-2 lg:grid-cols-3 lg:gap-y-6 lg:gap-x-5 xl:gap-x-6 xl:gap-y-8">
                <!-- 1st Article -->
                <article
                    class="flex flex-col items-start justify-between shadow-sm rounded-2xl bg-slate-50 shadow-sky-100/50 ring-1 ring-slate-100">
                    <!-- Image -->
                    <div class="w-full px-4 pt-4">
                        <a href="{{ route('blog.article') }}"
                            class="relative block w-full overflow-hidden group aspect-w-16 aspect-h-9 rounded-xl md:aspect-w-3 md:aspect-h-2">
                            <img src="{{ Storage::url('images/articles/article-01.jpg') }}" alt=""
                                class="object-cover w-full transition duration-300 rounded-xl bg-slate-100 group-hover:scale-105" />
                            <div class="absolute inset-0 rounded-xl ring-1 ring-inset ring-slate-900/5"></div>
                        </a>
                    </div>

                    <!-- Content -->
                    <div class="relative flex flex-col flex-1 px-5 pt-8 pb-10 group xl:px-7">
                        <a href="#0"
                            class="relative z-10 flex items-center gap-2.5 text-md text-sky-700 transition duration-200 ease-in-out hover:text-sky-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" class="w-4 h-4 text-sky-600">
                                <g stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75"
                                    transform="translate(0.5 0.5)" fill="none" stroke="currentColor">
                                    <polyline points="8.333,14 1,14 1,1 23,1 23,14 20,14 "></polyline>
                                    <line x1="13" y1="14" x2="19" y2="20" stroke="currentColor">
                                    </line>
                                    <polygon points=" 6,7 10,19 13,14 18,11 " stroke="currentColor"></polygon>
                                </g>
                            </svg>
                            Web Development
                        </a>
                        <div class="flex-1">
                            <h3
                                class="mt-4 text-xl font-medium leading-normal transition duration-200 ease-in-out font-display text-slate-900 decoration-slate-400 group-hover:text-sky-900">
                                <a href="{{ route('blog.article') }}">
                                    <span class="absolute inset-0"></span>
                                    ChatGPT : A Developer's Best Friend or Worst Enemy?
                                </a>
                            </h3>
                            <p class="mt-3.5 text-md leading-7 text-slate-700 line-clamp-3">
                                Explore the pros and cons of ChatGPT as a tool for developers,
                                and whether its AI-powered capabilities are a boon or a bane
                                in the world of programming and software development.
                            </p>
                        </div>
                        <div class="flex items-center gap-3 mt-8 text-sm text-slate-500">
                            <span class="flex items-center gap-1.5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.75" stroke="currentColor" class="w-5 h-5 text-slate-400">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                </svg>
                                <time datetime="2023-03-24">Mar 23, 2023</time>
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.75" stroke="currentColor" class="w-5 h-5 text-slate-400">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                11 minute read
                            </span>
                        </div>
                    </div>
                </article>

                <!-- 2nd Article -->
                <article
                    class="flex flex-col items-start justify-between shadow-sm rounded-2xl bg-slate-50 shadow-sky-100/50 ring-1 ring-slate-100">
                    <!-- Image -->
                    <div class="w-full px-4 pt-4">
                        <a href="{{ route('blog.article') }}"
                            class="relative block w-full overflow-hidden group aspect-w-16 aspect-h-9 rounded-xl md:aspect-w-3 md:aspect-h-2">
                            <img src="{{ Storage::url('images/articles/article-02.jpg') }}" alt=""
                                class="object-cover w-full transition duration-300 rounded-xl bg-slate-100 group-hover:scale-105" />
                            <div class="absolute inset-0 rounded-xl ring-1 ring-inset ring-slate-900/5"></div>
                        </a>
                    </div>

                    <!-- Content -->
                    <div class="relative flex flex-col flex-1 px-5 pt-8 pb-10 group xl:px-7">
                        <a href="#0"
                            class="relative z-10 flex items-center gap-2.5 text-md text-sky-700 transition duration-200 ease-in-out hover:text-sky-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" class="w-4 h-4 text-sky-600">
                                <g stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75"
                                    transform="translate(0.5 0.5)" fill="none" stroke="currentColor">
                                    <path d="M6,3H3C1.895,3,1,3.895,1,5 v0c0,1.105,0.895,2,2,2"></path>

                                    <polyline points=" 6,7 6,1 20,1 20,7 " stroke="currentColor"></polyline>

                                    <path d="M23,7H3 C1.895,7,1,6.105,1,5v15c0,1.657,1.343,3,3,3h19V7z"></path>

                                    <circle cx="17" cy="15" r="2"></circle>
                                </g>
                            </svg>

                            Business
                        </a>
                        <div class="flex-1">
                            <h3
                                class="mt-4 text-xl font-medium leading-normal transition duration-200 ease-in-out font-display text-slate-900 decoration-slate-400 group-hover:text-sky-900">
                                <a href="{{ route('blog.article') }}">
                                    <span class="absolute inset-0"></span>
                                    8 Ways Designers Can Make Money Online in 2022
                                </a>
                            </h3>
                            <p class="mt-3.5 text-md leading-7 text-slate-700 line-clamp-3">
                                Learn how to leverage your skills and capitalize on various
                                platforms to boost your income and thrive in the digital
                                landscape.
                            </p>
                        </div>
                        <div class="flex items-center gap-3 mt-8 text-sm text-slate-500">
                            <span class="flex items-center gap-1.5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.75" stroke="currentColor" class="w-5 h-5 text-slate-400">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                </svg>
                                <time datetime="2023-03-19">Mar 19, 2023</time>
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.75" stroke="currentColor" class="w-5 h-5 text-slate-400">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                10 minute read
                            </span>
                        </div>
                    </div>
                </article>

                <!-- 3rd Article -->
                <article
                    class="flex flex-col items-start justify-between shadow-sm rounded-2xl bg-slate-50 shadow-sky-100/50 ring-1 ring-slate-100">
                    <!-- Image -->
                    <div class="w-full px-4 pt-4">
                        <a href="{{ route('blog.article') }}"
                            class="relative block w-full overflow-hidden group aspect-w-16 aspect-h-9 rounded-xl md:aspect-w-3 md:aspect-h-2">
                            <img src="{{ Storage::url('images/articles/article-03.jpg') }}" alt=""
                                class="object-cover w-full transition duration-300 rounded-xl bg-slate-100 group-hover:scale-105" />
                            <div class="absolute inset-0 rounded-xl ring-1 ring-inset ring-slate-900/5"></div>
                        </a>
                    </div>

                    <!-- Content -->
                    <div class="relative flex flex-col flex-1 px-5 pt-8 pb-10 group xl:px-7">
                        <a href="#0"
                            class="relative z-10 flex items-center gap-2.5 text-md text-sky-700 transition duration-200 ease-in-out hover:text-sky-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" class="w-4 h-4 text-sky-600">
                                <g stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75"
                                    transform="translate(0.5 0.5)" fill="none" stroke="currentColor">
                                    <polyline points="8.333,14 1,14 1,1 23,1 23,14 20,14 "></polyline>
                                    <line x1="13" y1="14" x2="19" y2="20"
                                        stroke="currentColor"></line>
                                    <polygon points=" 6,7 10,19 13,14 18,11 " stroke="currentColor"></polygon>
                                </g>
                            </svg>
                            Web Development
                        </a>
                        <div class="flex-1">
                            <h3
                                class="mt-4 text-xl font-medium leading-normal transition duration-200 ease-in-out font-display text-slate-900 decoration-slate-400 group-hover:text-sky-900">
                                <a href="{{ route('blog.article') }}">
                                    <span class="absolute inset-0"></span>
                                    Will Artificial Intelligence Replace Designers?
                                </a>
                            </h3>
                            <p class="mt-3.5 text-md leading-7 text-slate-700 line-clamp-3">
                                Breve cup lait affogato cortado grounds pumpkin filter.
                                Robusta cappuccino french milk dark flavour brewed go caffeine
                                a aromatic robust shot.
                            </p>
                        </div>
                        <div class="flex items-center gap-3 mt-8 text-sm text-slate-500">
                            <span class="flex items-center gap-1.5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.75" stroke="currentColor" class="w-5 h-5 text-slate-400">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                </svg>
                                <time datetime="2023-03-24">Mar 4, 2023</time>
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.75" stroke="currentColor" class="w-5 h-5 text-slate-400">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                9 minute read
                            </span>
                        </div>
                    </div>
                </article>

                <!-- 4th Article -->
                <article
                    class="flex flex-col items-start justify-between shadow-sm rounded-2xl bg-slate-50 shadow-sky-100/50 ring-1 ring-slate-100">
                    <!-- Image -->
                    <div class="w-full px-4 pt-4">
                        <a href="{{ route('blog.article') }}"
                            class="relative block w-full overflow-hidden group aspect-w-16 aspect-h-9 rounded-xl md:aspect-w-3 md:aspect-h-2">
                            <img src="storage/images/articles/article-04.jpg" alt=""
                                class="object-cover w-full transition duration-300 rounded-xl bg-slate-100 group-hover:scale-105" />
                            <div class="absolute inset-0 rounded-xl ring-1 ring-inset ring-slate-900/5"></div>
                        </a>
                    </div>

                    <!-- Content -->
                    <div class="relative flex flex-col flex-1 px-5 pt-8 pb-10 group xl:px-7">
                        <a href="#0"
                            class="relative z-10 flex items-center gap-2.5 text-md text-sky-700 transition duration-200 ease-in-out hover:text-sky-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" class="w-4 h-4 text-sky-600">
                                <g stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75"
                                    transform="translate(0.5 0.5)" fill="none" stroke="currentColor">
                                    <path d="M3,13V5A2,2,0,0,1,5,3H19a2,2,0,0,1,2,2v8"></path>
                                    <path d="M23,17a4,4,0,0,1-4,4H5a4,4,0,0,1-4-4Z"></path>
                                    <polygon points="10 7 10 13 15 10 10 7" stroke="none" fill="currentColor"></polygon>
                                </g>
                            </svg>

                            Tutorials
                        </a>
                        <div class="flex-1">
                            <h3
                                class="mt-4 text-xl font-medium leading-normal transition duration-200 ease-in-out font-display text-slate-900 decoration-slate-400 group-hover:text-sky-900">
                                <a href="{{ route('blog.article') }}">
                                    <span class="absolute inset-0"></span>
                                    How I Use Tailwind CSS To Design A Website From Scratch
                                </a>
                            </h3>
                            <p class="mt-3.5 text-md leading-7 text-slate-700 line-clamp-3">
                                Learn how to design a responsive and visually appealing
                                website from scratch using Tailwind CSS, a utility-first CSS
                                framework that simplifies and streamlines the web development
                                process.
                            </p>
                        </div>
                        <div class="flex items-center gap-3 mt-8 text-sm text-slate-500">
                            <span class="flex items-center gap-1.5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.75" stroke="currentColor" class="w-5 h-5 text-slate-400">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                </svg>
                                <time datetime="2023-02-27">Feb 27, 2023</time>
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.75" stroke="currentColor" class="w-5 h-5 text-slate-400">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                14 minute read
                            </span>
                        </div>
                    </div>
                </article>

                <!-- 5th Article -->
                <article
                    class="flex flex-col items-start justify-between shadow-sm rounded-2xl bg-slate-50 shadow-sky-100/50 ring-1 ring-slate-100">
                    <!-- Image -->
                    <div class="w-full px-4 pt-4">
                        <a href="{{ route('blog.article') }}"
                            class="relative block w-full overflow-hidden group aspect-w-16 aspect-h-9 rounded-xl md:aspect-w-3 md:aspect-h-2">
                            <img src="storage/images/articles/article-05.jpg" alt=""
                                class="object-cover w-full transition duration-300 rounded-xl bg-slate-100 group-hover:scale-105" />
                            <div class="absolute inset-0 rounded-xl ring-1 ring-inset ring-slate-900/5"></div>
                        </a>
                    </div>

                    <!-- Content -->
                    <div class="relative flex flex-col flex-1 px-5 pt-8 pb-10 group xl:px-7">
                        <a href="#0"
                            class="relative z-10 flex items-center gap-2.5 text-md text-sky-700 transition duration-200 ease-in-out hover:text-sky-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" class="w-4 h-4 text-sky-600">
                                <g stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75"
                                    transform="translate(0.5 0.5)" fill="none" stroke="currentColor">
                                    <path d="M3,13V5A2,2,0,0,1,5,3H19a2,2,0,0,1,2,2v8"></path>
                                    <path d="M23,17a4,4,0,0,1-4,4H5a4,4,0,0,1-4-4Z"></path>
                                    <polygon points="10 7 10 13 15 10 10 7" stroke="none" fill="currentColor"></polygon>
                                </g>
                            </svg>

                            Tutorials
                        </a>
                        <div class="flex-1">
                            <h3
                                class="mt-4 text-xl font-medium leading-normal transition duration-200 ease-in-out font-display text-slate-900 decoration-slate-400 group-hover:text-sky-900">
                                <a href="{{ route('blog.article') }}">
                                    <span class="absolute inset-0"></span>
                                    SEO in 2023 for Dummies
                                </a>
                            </h3>
                            <p class="mt-3.5 text-md leading-7 text-slate-700 line-clamp-3">
                                Discover essential SEO strategies and techniques for 2023 to
                                boost your website's visibility, improve user experience, and
                                drive organic traffic in this comprehensive beginner's guide.
                            </p>
                        </div>
                        <div class="flex items-center gap-3 mt-8 text-sm text-slate-500">
                            <span class="flex items-center gap-1.5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.75" stroke="currentColor" class="w-5 h-5 text-slate-400">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                </svg>
                                <time datetime="2023-02-19">Feb 19, 2023</time>
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.75" stroke="currentColor" class="w-5 h-5 text-slate-400">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                15 minute read
                            </span>
                        </div>
                    </div>
                </article>

                <!-- 6th Article -->
                <article
                    class="flex flex-col items-start justify-between shadow-sm rounded-2xl bg-slate-50 shadow-sky-100/50 ring-1 ring-slate-100">
                    <!-- Image -->
                    <div class="w-full px-4 pt-4">
                        <a href="{{ route('blog.article') }}"
                            class="relative block w-full overflow-hidden group aspect-w-16 aspect-h-9 rounded-xl md:aspect-w-3 md:aspect-h-2">
                            <img src="storage/images/articles/article-06.jpg" alt=""
                                class="object-cover w-full transition duration-300 rounded-xl bg-slate-100 group-hover:scale-105" />
                            <div class="absolute inset-0 rounded-xl ring-1 ring-inset ring-slate-900/5"></div>
                        </a>
                    </div>

                    <!-- Content -->
                    <div class="relative flex flex-col flex-1 px-5 pt-8 pb-10 group xl:px-7">
                        <a href="#0"
                            class="relative z-10 flex items-center gap-2.5 text-md text-sky-700 transition duration-200 ease-in-out hover:text-sky-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" class="w-4 h-4 text-sky-600">
                                <g stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75"
                                    transform="translate(0.5 0.5)" fill="none" stroke="currentColor">
                                    <polyline points="8.333,14 1,14 1,1 23,1 23,14 20,14 "></polyline>
                                    <line x1="13" y1="14" x2="19" y2="20"
                                        stroke="currentColor"></line>
                                    <polygon points=" 6,7 10,19 13,14 18,11 " stroke="currentColor"></polygon>
                                </g>
                            </svg>
                            Web Development
                        </a>
                        <div class="flex-1">
                            <h3
                                class="mt-4 text-xl font-medium leading-normal transition duration-200 ease-in-out font-display text-slate-900 decoration-slate-400 group-hover:text-sky-900">
                                <a href="{{ route('blog.article') }}">
                                    <span class="absolute inset-0"></span>
                                    Mistakes To Avoid When Displaying Errors On Forms
                                </a>
                            </h3>
                            <p class="mt-3.5 text-md leading-7 text-slate-700 line-clamp-3">
                                Learn to improve user experience and form submission success
                                by avoiding common mistakes and implementing best practices
                                for displaying error messages on forms.
                            </p>
                        </div>
                        <div class="flex items-center gap-3 mt-8 text-sm text-slate-500">
                            <span class="flex items-center gap-1.5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.75" stroke="currentColor" class="w-5 h-5 text-slate-400">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                </svg>
                                <time datetime="2023-01-29">Jan 29, 2023</time>
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.75" stroke="currentColor" class="w-5 h-5 text-slate-400">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                12 minute read
                            </span>
                        </div>
                    </div>
                </article>

                <!-- 7th Article -->
                <article
                    class="flex flex-col items-start justify-between shadow-sm rounded-2xl bg-slate-50 shadow-sky-100/50 ring-1 ring-slate-100">
                    <!-- Image -->
                    <div class="w-full px-4 pt-4">
                        <a href="{{ route('blog.article') }}"
                            class="relative block w-full overflow-hidden group aspect-w-16 aspect-h-9 rounded-xl md:aspect-w-3 md:aspect-h-2">
                            <img src="storage/images/articles/article-07.jpg" alt=""
                                class="object-cover w-full transition duration-300 rounded-xl bg-slate-100 group-hover:scale-105" />
                            <div class="absolute inset-0 rounded-xl ring-1 ring-inset ring-slate-900/5"></div>
                        </a>
                    </div>

                    <!-- Content -->
                    <div class="relative flex flex-col flex-1 px-5 pt-8 pb-10 group xl:px-7">
                        <a href="#0"
                            class="relative z-10 flex items-center gap-2.5 text-md text-sky-700 transition duration-200 ease-in-out hover:text-sky-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" class="w-4 h-4 text-sky-600">
                                <g stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75"
                                    transform="translate(0.5 0.5)" fill="none" stroke="currentColor">
                                    <path d="M6,3H3C1.895,3,1,3.895,1,5 v0c0,1.105,0.895,2,2,2"></path>

                                    <polyline points=" 6,7 6,1 20,1 20,7 " stroke="currentColor"></polyline>

                                    <path d="M23,7H3 C1.895,7,1,6.105,1,5v15c0,1.657,1.343,3,3,3h19V7z"></path>

                                    <circle cx="17" cy="15" r="2"></circle>
                                </g>
                            </svg>

                            Business
                        </a>
                        <div class="flex-1">
                            <h3
                                class="mt-4 text-xl font-medium leading-normal transition duration-200 ease-in-out font-display text-slate-900 decoration-slate-400 group-hover:text-sky-900">
                                <a href="{{ route('blog.article') }}">
                                    <span class="absolute inset-0"></span>
                                    How Much Money can you Make on Youtube Making Progamming
                                    Tutorials
                                </a>
                            </h3>
                            <p class="mt-3.5 text-md leading-7 text-slate-700 line-clamp-3">
                                Discover the earning potential of creating programming
                                tutorials on YouTube, along with tips and strategies to
                                maximize your income and build a successful career in this
                                niche.
                            </p>
                        </div>
                        <div class="flex items-center gap-3 mt-8 text-sm text-slate-500">
                            <span class="flex items-center gap-1.5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.75" stroke="currentColor" class="w-5 h-5 text-slate-400">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                </svg>
                                <time datetime="2023-01-15">Jan 15, 2023</time>
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.75" stroke="currentColor" class="w-5 h-5 text-slate-400">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                8 minute read
                            </span>
                        </div>
                    </div>
                </article>

                <!-- 8th Article -->
                <article
                    class="flex flex-col items-start justify-between shadow-sm rounded-2xl bg-slate-50 shadow-sky-100/50 ring-1 ring-slate-100">
                    <!-- Image -->
                    <div class="w-full px-4 pt-4">
                        <a href="{{ route('blog.article') }}"
                            class="relative block w-full overflow-hidden group aspect-w-16 aspect-h-9 rounded-xl md:aspect-w-3 md:aspect-h-2">
                            <img src="storage/images/articles/article-08.jpg" alt=""
                                class="object-cover w-full transition duration-300 rounded-xl bg-slate-100 group-hover:scale-105" />
                            <div class="absolute inset-0 rounded-xl ring-1 ring-inset ring-slate-900/5"></div>
                        </a>
                    </div>

                    <!-- Content -->
                    <div class="relative flex flex-col flex-1 px-5 pt-8 pb-10 group xl:px-7">
                        <a href="#0"
                            class="relative z-10 flex items-center gap-2.5 text-md text-sky-700 transition duration-200 ease-in-out hover:text-sky-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" class="w-4 h-4 text-sky-600">
                                <g stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75"
                                    transform="translate(0.5 0.5)" fill="none" stroke="currentColor">
                                    <path d="M6,3H3C1.895,3,1,3.895,1,5 v0c0,1.105,0.895,2,2,2"></path>

                                    <polyline points=" 6,7 6,1 20,1 20,7 " stroke="currentColor"></polyline>

                                    <path d="M23,7H3 C1.895,7,1,6.105,1,5v15c0,1.657,1.343,3,3,3h19V7z"></path>

                                    <circle cx="17" cy="15" r="2"></circle>
                                </g>
                            </svg>

                            Business
                        </a>
                        <div class="flex-1">
                            <h3
                                class="mt-4 text-xl font-medium leading-normal transition duration-200 ease-in-out font-display text-slate-900 decoration-slate-400 group-hover:text-sky-900">
                                <a href="{{ route('blog.article') }}">
                                    <span class="absolute inset-0"></span>
                                    Doubling my Side Hustle Income: 2022 Income Report
                                </a>
                            </h3>
                            <p class="mt-3.5 text-md leading-7 text-slate-700 line-clamp-3">
                                Discover the strategies, tactics and various systems I used as
                                a side hustler to double my income in 2022.
                            </p>
                        </div>
                        <div class="flex items-center gap-3 mt-8 text-sm text-slate-500">
                            <span class="flex items-center gap-1.5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.75" stroke="currentColor" class="w-5 h-5 text-slate-400">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                </svg>
                                <time datetime="2023-01-06">Jan 6, 2023</time>
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.75" stroke="currentColor" class="w-5 h-5 text-slate-400">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                7 minute read
                            </span>
                        </div>
                    </div>
                </article>

                <!-- 9th Article -->
                <article
                    class="flex flex-col items-start justify-between shadow-sm rounded-2xl bg-slate-50 shadow-sky-100/50 ring-1 ring-slate-100">
                    <!-- Image -->
                    <div class="w-full px-4 pt-4">
                        <a href="{{ route('blog.article') }}"
                            class="relative block w-full overflow-hidden group aspect-w-16 aspect-h-9 rounded-xl md:aspect-w-3 md:aspect-h-2">
                            <img src="storage/images/articles/article-09.jpg" alt=""
                                class="object-cover w-full transition duration-300 rounded-xl bg-slate-100 group-hover:scale-105" />
                            <div class="absolute inset-0 rounded-xl ring-1 ring-inset ring-slate-900/5"></div>
                        </a>
                    </div>

                    <!-- Content -->
                    <div class="relative flex flex-col flex-1 px-5 pt-8 pb-10 group xl:px-7">
                        <a href="#0"
                            class="relative z-10 flex items-center gap-2.5 text-md text-sky-700 transition duration-200 ease-in-out hover:text-sky-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" class="w-4 h-4 text-sky-600">
                                <g stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75"
                                    transform="translate(0.5 0.5)" fill="none" stroke="currentColor">
                                    <line x1="9" y1="14" x2="19" y2="14"
                                        stroke="currentColor"></line>
                                    <line x1="9" y1="18" x2="19" y2="18"
                                        stroke="currentColor"></line>
                                    <rect x="9" y="6" width="10" height="4"
                                        stroke="currentColor"></rect>
                                    <path d="M3,23a2.006,2.006,0,0,1-2-2V13H2"></path>
                                    <path d="M5,1V21a2.006,2.006,0,0,1-2,2H21a2.006,2.006,0,0,0,2-2V1Z"></path>
                                </g>
                            </svg>

                            Content Creation
                        </a>
                        <div class="flex-1">
                            <h3
                                class="mt-4 text-xl font-medium leading-normal transition duration-200 ease-in-out font-display text-slate-900 decoration-slate-400 group-hover:text-sky-900">
                                <a href="{{ route('blog.article') }}">
                                    <span class="absolute inset-0"></span>
                                    Dealing with Online Hate as a Content Creator
                                </a>
                            </h3>
                            <p class="mt-3.5 text-md leading-7 text-slate-700 line-clamp-3">
                                Discover tips for dealing with online hate as a content
                                creator, including developing a support system, implementing
                                strong moderation and safety measures, practicing self-care,
                                and engaging with constructive feedback.
                            </p>
                        </div>
                        <div class="flex items-center gap-3 mt-8 text-sm text-slate-500">
                            <span class="flex items-center gap-1.5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.75" stroke="currentColor" class="w-5 h-5 text-slate-400">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                </svg>
                                <time datetime="2023-12-18">Dec 18, 2022</time>
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.75" stroke="currentColor" class="w-5 h-5 text-slate-400">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                5 minute read
                            </span>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Pagination -->
            <div class="flex items-center justify-center gap-2 mt-20">
                <span
                    class="inline-flex items-center justify-center w-20 h-10 text-sm font-medium rounded-full shadow-sm bg-slate-50 text-slate-500/60 shadow-sky-100/50 ring-1 ring-slate-900/5">
                    Prev
                </span>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 text-sm font-medium rounded-full shadow-sm bg-sky-600 text-sky-50 shadow-sky-100/50 ring-1 ring-slate-900/5">
                    1
                </span>
                <a href="#0"
                    class="items-center justify-center hidden w-10 h-10 text-sm font-medium transition duration-200 ease-in-out rounded-full shadow-sm bg-slate-50 text-slate-700 shadow-sky-100/50 ring-1 ring-slate-900/5 hover:bg-slate-100 hover:text-sky-700 sm:inline-flex">
                    2
                </a>
                <a href="#0"
                    class="items-center justify-center hidden w-10 h-10 text-sm font-medium transition duration-200 ease-in-out rounded-full shadow-sm bg-slate-50 text-slate-700 shadow-sky-100/50 ring-1 ring-slate-900/5 hover:bg-slate-100 hover:text-sky-700 sm:inline-flex">
                    3
                </a>
                <span href="#0"
                    class="inline-flex items-center justify-center w-10 h-10 text-sm font-medium rounded-full shadow-sm bg-slate-50 text-slate-500/60 shadow-sky-100/50 ring-1 ring-slate-900/5">
                    ...
                </span>
                <a href="#0"
                    class="inline-flex items-center justify-center w-10 h-10 text-sm font-medium transition duration-200 ease-in-out rounded-full shadow-sm bg-slate-50 text-slate-700 shadow-sky-100/50 ring-1 ring-slate-900/5 hover:bg-slate-100 hover:text-sky-700">
                    5
                </a>
                <a href="#0"
                    class="inline-flex items-center justify-center w-20 h-10 text-sm font-medium transition duration-200 ease-in-out rounded-full shadow-sm bg-slate-50 text-slate-700 shadow-sky-100/50 ring-1 ring-slate-900/5 hover:bg-slate-100 hover:text-sky-700">
                    Next
                </a>
            </div>
        </div>
    </section>
@endsection
