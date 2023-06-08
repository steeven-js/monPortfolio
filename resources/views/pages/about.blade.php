@extends('layouts.default')
@section('content')
    <!-- About Hero start-->
    <section class="relative bg-slate-50/50 dark:bg-gray-800">
        <!-- Background gradient -->
        <img src="{{ Storage::url('about-hero-bg.svg') }}" alt=""
            class="absolute inset-0 object-cover object-left w-full h-full lg:w-2/3" />

        <!-- Content -->
        <div class="relative max-w-screen-xl px-5 py-16 mx-auto sm:py-24 lg:py-32 sm:px-6 lg:px-8">
            <div class="max-w-3xl px-4 mx-auto sm:px-6 lg:mx-0 lg:w-2/3 lg:max-w-none lg:px-8 lg:pr-16">
                <h1 class="text-5xl font-semibold font-display text-slate-900 sm:text-6xl dark:text-white">
                    Bonjour, Je m'appelle 
                    <!-- Highlighted text -->
                    <span class="relative whitespace-nowrap">
                        <span class="relative dark:text-sky-700">Steeven</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="249" height="22" viewBox="0 0 249 22"
                            fill="currentColor" class="absolute top-2/3 left-0 h-[0.6em] w-full fill-sky-200/75">
                            <path
                                d="M247.564 18.5807C241.772 13.3568 232.473 12.7526 225.225 11.4427C217.124 9.97395 208.996 8.57031 200.846 7.46093C186.542 5.51302 172.169 4.08854 157.79 3.01562C126.033 0.645827 94.0929 0.0338481 62.3387 2.36979C42.1785 3.85416 22.008 5.90885 2.32917 10.8463C-0.0155171 11.4349 0.207047 14.6719 2.6889 14.7083C22.0261 14.9896 41.3866 12.6406 60.7109 11.8568C79.9471 11.0807 99.2274 10.6719 118.484 10.9557C142.604 11.3125 166.719 12.8333 190.722 15.5156C199.956 16.5469 209.195 17.6016 218.411 18.8255C227.864 20.0807 237.259 22 246.767 20.7422C247.709 20.6198 248.426 19.3568 247.564 18.5807Z" />
                        </svg>
                    </span>
                    et je suis un développeur web
                </h1>
                <p class="mt-8 text-lg leading-8 text-slate-700 dark:text-white">
                    Je suis un développeur web junior passionné par la création d'applications web et mobiles élégantes et
                    fonctionnelles. Avec mes compétences en HTML, CSS, JavaScript et ma pratique des frameworks Laravel et
                    Symfony, je suis en mesure de réaliser des projets sur mesure répondant aux besoins de mes clients. Je
                    suis prêt à relever tous les défis pour créer des projets de qualité, que ce soit pour une plateforme
                    e-commerce complexe ou une application mobile intuitive. Contactez-moi pour discuter de vos besoins en
                    développement web et d'applications mobiles.
                </p>
                <p class="mt-16 text-3xl text-slate-700 font-cursive dark:text-white">Steeven Jacques</p>
            </div>
        </div>

        <!-- Image -->
        <div
            class="bg-picton-blue-25 relative h-96 w-full md:h-[6300px] lg:absolute lg:inset-y-0 lg:right-0 lg:h-full lg:w-1/3">
            <img src="{{ Storage::url('about-hero.png') }}" alt=""
                class="object-cover object-left w-full h-full rounded-2xl" />
            <svg width="229" height="40" viewBox="0 0 229 40" fill="none" xmlns="http://www.w3.org/2000/svg"
                class="absolute left-0 w-auto h-8 -translate-x-1/2 bottom-16 mt-14 sm:mt-20 sm:h-10">
                <g clip-path="url(#clip0_204_150)">
                    <path d="M1 19L29.4 39L57.7 19L86.1 39L114.5 19L142.8 39L171.2 19L199.6 39L228 19" stroke="#0369A1"
                        stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M1 19L29.4 39L57.7 19L86.1 39L114.5 19L142.8 39L171.2 19L199.6 39L228 19" stroke="black"
                        stroke-opacity="0.2" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M1 1L29.4 21L57.7 1L86.1 21L114.5 1L142.8 21L171.2 1L199.6 21L228 1" stroke="#BAE6FD"
                        stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                </g>
                <defs>
                    <clipPath id="clip0_204_150">
                        <rect width="229" height="40" fill="white" />
                    </clipPath>
                </defs>
            </svg>
        </div>
    </section>
    <!-- About Hero end-->

    <!-- Work Experience start-->
    <section class="relative py-16 bg-white overflow-x-clip sm:py-24 lg:py-32 dark:bg-gray-800">
        <!-- Container -->
        <div class="relative max-w-screen-xl px-5 mx-auto sm:px-6 lg:px-8">
            <div
                class="grid max-w-2xl grid-cols-1 mx-auto gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                <!-- Section header with button -->
                <div>
                    <h2 class="text-4xl font-semibold font-display text-slate-900 sm:text-5xl dark:text-white">
                        Mon

                        <!-- Highlighted text -->
                        <span class="relative whitespace-nowrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="167" height="24" viewBox="0 0 167 24"
                                fill="currentColor" class="absolute top-2/3 left-0 h-[0.6em] w-full fill-sky-200/75">
                                <g clip-path="url(#clip0_257_225)">
                                    <path
                                        d="M166.409 20.2699C162.515 14.571 156.265 13.9119 151.392 12.4829C145.948 10.8807 140.484 9.3494 135.006 8.13918C125.391 6.01418 115.729 4.4602 106.064 3.28974C84.7177 0.704517 63.2477 0.036903 41.9031 2.5852C28.3517 4.20452 14.7934 6.44599 1.5656 11.8324C-0.0104672 12.4744 0.139137 16.0057 1.8074 16.0454C14.8056 16.3522 27.8194 13.7897 40.8089 12.9346C53.7392 12.088 66.6991 11.642 79.6433 11.9517C95.8562 12.3409 112.066 14 128.2 16.9261C134.407 18.0511 140.617 19.2017 146.812 20.5369C153.167 21.9062 159.481 24 165.873 22.6278C166.506 22.4943 166.988 21.1164 166.409 20.2699Z" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_257_225">
                                        <rect width="167" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>

                            <span class="relative text-sky-700 dark:text-sky-700">Parcours</span>
                        </span>
                        professionnel jusqu'à présent
                    </h2>
                    <p class="mt-6 text-lg leading-relaxed text-slate-700 dark:text-white">
                        Lors de mon parcours professionnel, j'ai eu le plaisir de développer une application e-commerce avec
                        le Framework Symfony. Lors de ma période de stage, j'ai créer un site vitrine et un site e-commerce
                        avec Wordpress et WooCommerce.
                    </p>

                    <!-- Download CV button -->
                    <a href="{{ Storage::url('images/moncv.pdf') }}" download>
                        <button
                            class="mt-10 text-slate-900 shadow-sm shadow-sky-100/50 ring-1 ring-slate-100 hover:bg-slate-200/60 hover:shadow-sky-100/50 bg-slate-100/80 inline-flex items-center rounded-full gap-2.5 justify-center px-7 py-3 text-md font-semibold leading-none outline-offset-2 transition-all duration-200 ease-in-out active:transition-none">
                            Download CV
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                class="h-[18px] w-[18px] text-slate-600">
                                <g fill="currentColor">
                                    <path
                                        d="M12,1a1,1,0,0,0-1,1v8H7a1,1,0,0,0-.768,1.641l5,6a1,1,0,0,0,1.536,0l5-6A1,1,0,0,0,17,10H13V2A1,1,0,0,0,12,1Z"
                                        fill="currentColor"></path>
                                    <path d="M22,21H2a1,1,0,0,0,0,2H22a1,1,0,0,0,0-2Z"></path>
                                </g>
                            </svg>
                        </button>
                    </a>
                </div>

                <!-- Work list -->
                <ol
                    class="col-span-2 grid grid-cols-1 gap-x-8 gap-y-10 text-base leading-7 text-gray-600 [counter-reset:section] sm:grid-cols-2 lg:gap-y-16">
                    <!-- Work 1 -->
                    <li
                        class="relative [counter-increment:section] before:absolute before:right-0 before:-top-7 before:font-mono before:text-9xl before:font-black before:leading-none before:text-slate-50 before:content-[counter(section,decimal-leading-zero)]">
                        <div>
                            <div
                                class="flex items-center justify-center mb-6 rounded-lg h-11 w-11 bg-gradient-to-br from-sky-50 via-slate-50 to-sky-50 ring-1 ring-slate-900/5">
                                <img src="{{ Storage::url('logos/icons/adobe.png') }}" alt="Adobe" />
                            </div>
                            <p class="text-sm font-medium text-sky-700">
                                Mar 2022 - Jan 2022
                            </p>
                            <p class="mt-2 text-lg font-semibold font-display text-slate-900">
                                Titre Professionnel
                            </p>
                        </div>
                        <p class="mt-3 text-base leading-7 text-slate-700 dark:text-white">
                            Titre professionnel - Développement Web Web Mobile
                        </p>
                    </li>

                    <!-- Work 2 -->
                    <li
                        class="relative [counter-increment:section] before:absolute before:right-0 before:-top-7 before:font-mono before:text-9xl before:font-black before:leading-none before:text-slate-50 before:content-[counter(section,decimal-leading-zero)]">
                        <div>
                            <div
                                class="flex items-center justify-center mb-6 rounded-lg h-11 w-11 bg-gradient-to-br from-sky-50 via-slate-50 to-sky-50 ring-1 ring-slate-900/5">
                                <img src="{{ Storage::url('logos/icons/dropbox.png') }}" alt="Dropbox" />
                            </div>
                            <p class="text-sm font-medium text-sky-700">
                                Oct 2022 - Dec 2023
                            </p>
                            <p class="mt-2 text-lg font-semibold font-display text-slate-900">
                                Titre Professionnel
                            </p>
                        </div>
                        <p class="mt-3 text-base leading-7 text-slate-700 dark:text-white">
                            Stage en entreprise - VSInformatique
                        </p>
                    </li>

                    <!-- Work 3 -->
                    <li
                        class="relative [counter-increment:section] before:absolute before:right-0 before:-top-7 before:font-mono before:text-9xl before:font-black before:leading-none before:text-slate-50 before:content-[counter(section,decimal-leading-zero)]">
                        <div>
                            <div
                                class="flex items-center justify-center mb-6 rounded-lg h-11 w-11 bg-gradient-to-br from-sky-50 via-slate-50 to-sky-50 ring-1 ring-slate-900/5">
                                <img src="{{ Storage::url('logos/icons/gumroad.png') }}" alt="Gumroad" />
                            </div>
                            <p class="text-sm font-medium text-sky-700">
                                Mar 2023 - Actuellement
                            </p>
                            <p class="mt-2 text-lg font-semibold font-display text-slate-900">
                                Titre Professionnel
                            </p>
                        </div>
                        <p class="mt-3 text-base leading-7 text-slate-700 dark:text-white">
                            Apprenant en Conception Développement d'Application
                        </p>
                    </li>

                    <!-- Handwritten text with arrow -->
                    <li
                        class="relative mt-3 flex h-fit items-center font-writing text-2xl tracking-wide text-slate-600 sm:top-6 sm:left-14 sm:mt-0 sm:block sm:text-[27px] md:left-20">
                        <span class="inline-block w-52 max-w-[240px] transform sm:w-auto sm:-rotate-12 text-sky-700">
                            Je suis actuellement ici dans mon voyage :D
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="124" height="121" viewBox="0 0 124 121"
                            fill="none"
                            class="relative w-24 h-auto transform rotate-90 -translate-y-5 -left-4 -scale-y-100 text-slate-600 sm:-left-8 sm:w-32 sm:translate-y-2 sm:-rotate-6 sm:scale-100 dark:text-sky-700">
                            <g clip-path="url(#clip0_257_335)">
                                <path
                                    d="M101.672 26.3321C96.8237 38.134 92.186 44.0573 79.0339 44.4141C70.6979 44.6403 60.8529 42.694 53.4527 38.7688C49.1632 36.4936 56.8633 35.9887 58.3238 36.046C75.2213 36.7084 91.469 47.7751 94.8076 64.9225C96.9834 76.0979 88.4245 81.9067 78.6041 84.1752C63.6278 87.6349 47.752 81.2525 36.0397 72.0991C32.1436 69.0541 19.8172 60.5149 22.0934 54.2698C23.9793 49.0954 31.7507 55.0061 34.018 56.9118C37.2506 59.6288 44.0244 65.7437 43.9149 70.3449C43.7576 76.9438 32.7995 78.0771 28.2217 77.7848C19.5283 77.2298 10.3327 73.6012 2.05876 71.0225C1.4496 70.8325 5.37871 69.9759 6.06477 69.8198C8.02976 69.3721 9.72632 68.1441 11.7325 67.8657C13.2208 67.6592 21.2769 68.287 16.2554 69.947C14.4855 70.532 2.71379 69.3189 2.58655 69.7453C2.06535 71.4868 10.2182 79.8642 11.7371 81.4008C15.3955 85.1003 14.5874 73.4626 14.2296 71.9325"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_257_335" class="dark:text-sky-700">
                                    <rect width="106" height="67" fill="white"
                                        transform="matrix(-0.748497 0.663138 0.663138 0.748497 79.3407 0)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </li>
                </ol>
            </div>
        </div>
    </section>
    <!-- Work Experience end-->

    <!-- Stack start-->
    <section class="py-16 overflow-hidden bg-white sm:py-24 lg:py-32 dark:bg-gray-800">
        <!-- Container -->
        <div class="max-w-screen-xl px-5 mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-y-16 gap-x-8 sm:gap-y-20 lg:grid-cols-2">
                <!-- Content -->
                <div class="lg:order-2">
                    <div class="max-w-2xl mx-auto lg:mx-0">
                        <h2 class="text-4xl font-semibold font-display text-slate-900 sm:text-5xl dark:text-white">
                            Une pile simple à laquelle vous pouvez 

                            <!-- Highlighted text -->
                            <span class="relative whitespace-nowrap">
                                <svg width="329" height="31" viewBox="0 0 329 31" fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="absolute top-[70%] left-1/2 h-[0.62em] w-auto -translate-x-1/2 fill-sky-200/90">
                                    <mask id="mask0_239_1189" style="mask-type: luminance" maskUnits="userSpaceOnUse"
                                        x="0" y="0" width="329" height="31">
                                        <path d="M0.147461 0.918457H328.121V30.1173H0.147461V0.918457Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask0_239_1189)">
                                        <path
                                            d="M270.105 20.3507C253.379 18.442 236.624 16.7484 219.848 15.2738C229.174 15.8156 238.495 16.3968 247.81 17.0606C247.836 17.0606 247.86 17.0642 247.883 17.0642C255.302 18.0796 262.713 19.1667 270.105 20.3507ZM156.373 6.05272C158.594 6.05272 160.812 6.04913 163.033 6.06348C169.547 6.10295 176.056 6.19982 182.566 6.34334C179.715 6.32181 176.867 6.29311 174.02 6.26799C169.368 6.22853 164.72 6.21059 160.068 6.19623C158.835 6.14242 157.604 6.09577 156.373 6.05272ZM84.3602 5.72621C100.973 4.66059 117.611 4.05063 134.252 3.89635C117.603 4.20491 100.975 4.84357 84.3602 5.72621ZM163.46 10.3583C154.324 10.0533 145.184 9.83802 136.042 9.6658C128.219 9.30341 120.391 8.97691 112.563 8.69704C119.414 8.59658 126.263 8.52482 133.112 8.47818C156.739 8.73651 180.358 9.9636 203.899 12.0769C190.42 11.3737 176.935 10.8068 163.46 10.3583ZM327.139 22.9484C305.186 20.096 283.134 17.8105 261.033 15.9555C240.91 12.9416 220.683 10.5377 200.396 8.79392C216.731 9.01996 233.09 9.41105 249.412 10.1968C260.803 11.5531 272.171 13.1102 283.502 14.9042C285.249 15.1805 285.777 13.2968 283.989 13.0134C281.621 12.6402 279.245 12.3101 276.874 11.9549C290.335 13.2466 303.779 14.7392 317.193 16.4506C319.3 16.7197 319.603 14.4844 317.512 14.1795C304.748 12.2994 291.913 10.9036 279.037 9.83802C261.243 8.09068 243.41 6.72366 225.554 5.71903C164.598 0.0608174 103.074 0.505725 42.18 7.15422C31.7917 7.49508 21.5097 8.49971 11.6034 10.8426C9.98643 11.2266 9.96311 12.2527 10.7275 12.877C10.2792 12.938 9.83355 13.0026 9.38785 13.0672C7.00132 13.3793 4.61997 13.713 2.24122 14.079C-0.793126 14.549 -0.15568 17.8069 2.87348 17.3476C44.6805 10.9754 87.848 10.8355 130.458 11.8365C142.142 12.3532 153.821 12.9667 165.492 13.7058C217.335 16.9852 268.968 22.3851 320.337 29.6507C322.697 29.988 324.089 27.4226 321.345 26.8414C310.086 24.4661 298.772 22.2811 287.425 20.2718C287.71 20.2969 287.995 20.322 288.283 20.3472C295.025 20.9607 301.76 21.6173 308.497 22.299C311.936 22.647 315.377 22.9735 318.818 23.3036C320.298 23.4436 321.78 23.5907 323.259 23.7342C323.384 23.8347 323.542 23.9064 323.718 23.9172C324.944 23.9925 326.164 24.0679 327.385 24.1396C328.47 24.2042 327.921 23.0489 327.139 22.9484Z" />
                                    </g>
                                </svg>

                                <span class="relative text-sky-700">toujours faire confiance</span>
                            </span>
                        </h2>
                        <p class="mt-6 text-lg leading-8 text-slate-700 dark:text-white">
                            {{-- I've been a software developer for over 13 years, and while my
                            stack has shifted over the years, I kept coming back to the same
                            technologies. The following is the stack that I've developed &
                            honed over the years as a software developer. --}}
                        </p>

                        <!-- Stack list -->
                        <div class="grid grid-cols-2 gap-2 mt-12 sm:gap-3">
                            <!-- 1st Item -->
                            <div class="px-4 py-6 overflow-hidden rounded-lg bg-slate-50 ring-1 ring-slate-900/5 sm:px-6">
                                <div class="flex gap-4 sm:gap-6">
                                    <div
                                        class="flex items-center justify-center bg-white rounded-lg shadow-sm h-9 w-9 shrink-0 shadow-sky-100/75 ring-1 ring-slate-100/95 sm:h-11 sm:w-11">
                                        <img src="{{ Storage::url('logos/icons/laravel.png') }}" alt="Laravel"
                                            class="h-auto w-5 shrink-0 sm:w-[22px]" />
                                    </div>
                                    <div class="overflow-hidden">
                                        <p class="text-base font-semibold font-display text-slate-900 sm:text-lg">
                                            laravel
                                        </p>
                                        <p class="mt-1 truncate text-md text-slate-600 sm:text-base">
                                            2+ years of experience
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- 2nd Item -->
                            <div class="px-4 py-6 overflow-hidden rounded-lg bg-slate-50 ring-1 ring-slate-900/5 sm:px-6">
                                <div class="flex gap-4 sm:gap-6">
                                    <div
                                        class="flex items-center justify-center bg-white rounded-lg shadow-sm h-9 w-9 shrink-0 shadow-sky-100/75 ring-1 ring-slate-100/95 sm:h-11 sm:w-11">
                                        <img src="{{ Storage::url('logos/icons/javascript.png') }}" alt="Javascript"
                                            class="h-auto w-5 shrink-0 sm:w-[22px]" />
                                    </div>
                                    <div class="overflow-hidden">
                                        <p class="text-base font-semibold font-display text-slate-900 sm:text-lg">
                                            Javascript
                                        </p>
                                        <p class="mt-1 truncate text-md text-slate-600 sm:text-base">
                                            3+ years of experience
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- 3rd Item -->
                            <div class="px-4 py-6 overflow-hidden rounded-lg bg-slate-50 ring-1 ring-slate-900/5 sm:px-6">
                                <div class="flex gap-4 sm:gap-6">
                                    <div
                                        class="flex items-center justify-center bg-white rounded-lg shadow-sm h-9 w-9 shrink-0 shadow-sky-100/75 ring-1 ring-slate-100/95 sm:h-11 sm:w-11">
                                        <img src="{{ Storage::url('logos/icons/symfony.png') }}" alt="Symfony"
                                            class="h-auto w-5 shrink-0 sm:w-[22px]" />
                                    </div>
                                    <div class="overflow-hidden">
                                        <p class="text-base font-semibold font-display text-slate-900 sm:text-lg">
                                            symfony
                                        </p>
                                        <p class="mt-1 truncate text-md text-slate-600 sm:text-base">
                                            3 years of experience
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- 4th Item -->
                            <div class="px-4 py-6 overflow-hidden rounded-lg bg-slate-50 ring-1 ring-slate-900/5 sm:px-6">
                                <div class="flex gap-4 sm:gap-6">
                                    <div
                                        class="flex items-center justify-center bg-white rounded-lg shadow-sm h-9 w-9 shrink-0 shadow-sky-100/75 ring-1 ring-slate-100/95 sm:h-11 sm:w-11">
                                        <img src="{{ Storage::url('logos/icons/vuejs.png') }}" alt="Vuejs"
                                            class="h-auto w-5 shrink-0 sm:w-[22px]" />
                                    </div>
                                    <div class="overflow-hidden">
                                        <p class="text-base font-semibold font-display text-slate-900 sm:text-lg">
                                            vuejs
                                        </p>
                                        <p class="mt-1 truncate text-md text-slate-600 sm:text-base">
                                            1 years of experience
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- 5th Item -->
                            <div class="px-4 py-6 overflow-hidden rounded-lg bg-slate-50 ring-1 ring-slate-900/5 sm:px-6">
                                <div class="flex gap-4 sm:gap-6">
                                    <div
                                        class="flex items-center justify-center bg-white rounded-lg shadow-sm h-9 w-9 shrink-0 shadow-sky-100/75 ring-1 ring-slate-100/95 sm:h-11 sm:w-11">
                                        <img src="{{ Storage::url('logos/icons/tailwindcss.png') }}" alt="Tailwind CSS"
                                            class="h-auto w-5 shrink-0 sm:w-[22px]" />
                                    </div>
                                    <div class="overflow-hidden">
                                        <p class="text-base font-semibold font-display text-slate-900 sm:text-lg">
                                            Tailwind
                                        </p>
                                        <p class="mt-1 truncate text-md text-slate-600 sm:text-base">
                                            3 years of experience
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- 6th Item -->
                            <div class="px-4 py-6 overflow-hidden rounded-lg bg-slate-50 ring-1 ring-slate-900/5 sm:px-6">
                                <div class="flex gap-4 sm:gap-6">
                                    <div
                                        class="flex items-center justify-center bg-white rounded-lg shadow-sm h-9 w-9 shrink-0 shadow-sky-100/75 ring-1 ring-slate-100/95 sm:h-11 sm:w-11">
                                        <img src="{{ Storage::url('logos/icons/reactjs.png') }}" alt="Reactjs"
                                            class="h-auto w-5 shrink-0 sm:w-[22px]" />
                                    </div>
                                    <div class="overflow-hidden">
                                        <p class="text-base font-semibold font-display text-slate-900 sm:text-lg">
                                            reactjs
                                        </p>
                                        <p class="mt-1 truncate text-md text-slate-600 sm:text-base">
                                            1 years of experience
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Image with social proof -->
                <div class="relative w-full max-w-xl pb-24 mx-auto lg:order-1 lg:mx-0 lg:max-w-none">
                    <div class="relative w-full max-w-lg mx-auto lg:mr-auto lg:ml-0">
                        <div class="aspect-w-5 aspect-h-7">
                            <img src="{{ Storage::url('portrait-02.png') }}" alt=""
                                class="object-cover object-left w-full h-full rounded-2xl" />
                        </div>

                        <!-- Social Proof -->
                        <div
                            class="absolute max-w-xs p-8 -bottom-16 right-6 rounded-2xl bg-sky-700/95 backdrop-blur-sm xl:right-0 xl:bottom-10 xl:translate-x-1/4">
                            <p class="text-2xl font-medium font-display text-sky-50">
                                <span class="text-[28px] font-bold text-white">1</span>
                                client aime mon travail !
                            </p>

                            <!-- Client avatars -->
                            <div class="mt-6 flex -space-x-1.5 overflow-hidden">
                                <img class="inline-block w-8 h-8 rounded-full ring-2 ring-sky-700/95"
                                    src="{{ Storage::url('avatars/avatar-1.png') }}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Stack end-->
@endsection
