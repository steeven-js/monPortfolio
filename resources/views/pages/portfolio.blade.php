@extends('layouts.default')
@section('content')
    <!-- Études de cas -->
    <section class="py-16 overflow-hidden bg-white sm:pt-24 lg:pt-32 dark:bg-gray-800">
        <div class="max-w-screen-xl px-5 mx-auto sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto lg:mx-0 lg:max-w-none">
                <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
                    <h2
                        class="text-5xl font-semibold font-display text-slate-900 sm:text-6xl lg:leading-none dark:text-sky-700">
                        Études de cas
                    </h2>

                    <p class="text-lg text-slate-700 lg:ml-auto lg:max-w-lg dark:text-white">
                        Découvrez mon portfolio et explorez les projets sur lesquels j'ai travaillé pour voir comment je
                        peux vous aider à atteindre vos objectifs en ligne.
                    </p>
                </div>

                <!-- Tabs -->
                <ul class="mt-14 gap-x-1.5 gap-y-4 md:gap-x-1 lg:mt-16 lg:gap-2 flex flex-wrap items-center">
                    <!-- Active: "bg-slate-50 text-sky-800 shadow-sm shadow-sky-100/50 ring-1 ring-slate-900/5", Inactive: "bg-white text-slate-700 duration-200 ease-in-out hover:bg-slate-50/95", Default: "inline-block rounded-full px-5 py-1.5 text-md font-medium transition" -->

                    <li>
                        <!-- Active tab -->
                        <a href="#0"
                            class="inline-block rounded-full px-5 py-1.5 text-md font-medium transition bg-slate-50 text-sky-800 shadow-sm shadow-sky-100/50 ring-1 ring-slate-900/5">
                            Tous mes projets
                        </a>
                    </li>

                    {{-- <li>
                        <a href="#0"
                            class="bg-white text-slate-700 duration-200 ease-in-out hover:bg-slate-50/95 inline-block rounded-full px-5 py-1.5 text-md font-medium transition">
                            Framework
                        </a>
                    </li>

                    <li>
                        <a href="#0"
                            class="bg-white text-slate-700 duration-200 ease-in-out hover:bg-slate-50/95 inline-block rounded-full px-5 py-1.5 text-md font-medium transition">
                            App mobile
                        </a>
                    </li>

                    <li>
                        <a href="#0"
                            class="bg-white text-slate-700 duration-200 ease-in-out hover:bg-slate-50/95 inline-block rounded-full px-5 py-1.5 text-md font-medium transition">
                            Custom Website
                        </a>
                    </li>

                    <li>
                        <a href="#0"
                            class="bg-white text-slate-700 duration-200 ease-in-out hover:bg-slate-50/95 inline-block rounded-full px-5 py-1.5 text-md font-medium transition">
                            Product Design
                        </a>
                    </li> --}}
                </ul>

                <!-- Études de cas list-->
                <div
                    class="grid max-w-xl gap-12 mx-auto mt-12 sm:mt-16 lg:mx-0 lg:mt-24 lg:max-w-none lg:grid-cols-2 lg:gap-10 xl:gap-24 lg:pb-32">
                    <!-- 1st case study -->
                    <div
                        class="flex flex-col gap-12 rounded-3xl bg-slate-50 px-7 py-12 sm:gap-14 sm:p-16 lg:py-14 lg:px-10 xl:gap-16 xl:p-16 rounded-tl-[64px]">
                        <a href="case-study.html"
                            class="relative order-1 block w-full overflow-hidden group aspect-w-16 aspect-h-9 rounded-xl md:aspect-w-3 md:aspect-h-2">
                            <img src="{{ Storage::('urlcase_studies/case-study-thumbnail-02.jpg') }}" alt="JSTech"
                                class="object-cover object-top w-full transition duration-300 rounded-xl bg-slate-100 group-hover:scale-105" />
                            <div class="absolute inset-0 rounded-xl ring-1 ring-inset ring-slate-900/5"></div>
                        </a>
                        <div class="flex flex-col items-center order-2">
                            <h3 class="text-center font-display text-[28px] font-medium text-slate-900">
                                Mon premier projet e-commerce
                            </h3>
                            <p class="mt-5 text-base leading-8 text-center text-slate-700">
                                Dans le cadre de ma formation de développeur Web et Web mobile, j’ai eu le plaisir de
                                développer la partie front-end et back-end d’une application web et web mobile.
                            </p>
                            <a href="https://js-tech.fr/" target="_blank"
                                class="inline-flex items-center justify-center gap-2 py-3 mt-12 font-medium transition duration-300 bg-white rounded-full shadow-sm group px-9 text-md text-sky-900 shadow-sky-100/50 ring-1 ring-slate-100/90 hover:bg-white/60 hover:text-sky-700 hover:shadow-md hover:shadow-sky-100">
                                Voir le résultat
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5 duration-300 ease-in-out text-sky-800 group-hover:text-sky-700">
                                    <path fill-rule="evenodd"
                                        d="M5.22 14.78a.75.75 0 001.06 0l7.22-7.22v5.69a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75h-7.5a.75.75 0 000 1.5h5.69l-7.22 7.22a.75.75 0 000 1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- 2nd case study -->
                    {{-- <div
                        class="flex flex-col gap-12 rounded-3xl bg-slate-50 px-7 py-12 sm:gap-14 sm:p-16 lg:py-14 lg:px-10 xl:gap-16 xl:p-16 transform rounded-br-[64px] lg:translate-y-24 xl:translate-y-32">
                        <a href="case-study.html"
                            class="relative order-2 block w-full overflow-hidden group aspect-w-16 aspect-h-9 rounded-xl md:aspect-w-3 md:aspect-h-2">
                            <img src="{{ Storage::url('case_studies/case-study-thumbnail-01.jpg') }}" alt="Horizons in Perspective"
                                class="object-cover object-top w-full transition duration-300 rounded-xl bg-slate-100 group-hover:scale-105" />
                            <div class="absolute inset-0 rounded-xl ring-1 ring-inset ring-slate-900/5"></div>
                        </a>
                        <div class="flex flex-col items-center order-1">
                            <h3 class="text-center font-display text-[28px] font-medium text-slate-900">
                                Horizons in Perspective
                            </h3>
                            <p class="mt-5 text-base leading-8 text-center text-slate-700">
                                I helped Horizons in Perspective develop a new branding and
                                website experience, as well as an engaging product design for
                                their bi-annual journal publication.
                            </p>
                            <a href="case-study.html"
                                class="inline-flex items-center justify-center gap-2 py-3 mt-12 font-medium transition duration-300 bg-white rounded-full shadow-sm group px-9 text-md text-sky-900 shadow-sky-100/50 ring-1 ring-slate-100/90 hover:bg-white/60 hover:text-sky-700 hover:shadow-md hover:shadow-sky-100">
                                View Case study
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5 duration-300 ease-in-out text-sky-800 group-hover:text-sky-700">
                                    <path fill-rule="evenodd"
                                        d="M5.22 14.78a.75.75 0 001.06 0l7.22-7.22v5.69a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75h-7.5a.75.75 0 000 1.5h5.69l-7.22 7.22a.75.75 0 000 1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div> --}}

                    <!-- 3rd case study -->
                    {{-- <div
                        class="flex flex-col gap-12 rounded-3xl bg-slate-50 px-7 py-12 sm:gap-14 sm:p-16 lg:py-14 lg:px-10 xl:gap-16 xl:p-16 rounded-tl-[64px]">
                        <a href="case-study.html"
                            class="relative order-1 block w-full overflow-hidden group aspect-w-16 aspect-h-9 rounded-xl md:aspect-w-3 md:aspect-h-2">
                            <img src="{{ Storage::url('case_studies/case-study-thumbnail-03.jpg') }}" alt="Banter"
                                class="object-cover object-top w-full transition duration-300 rounded-xl bg-slate-100 group-hover:scale-105" />
                            <div class="absolute inset-0 rounded-xl ring-1 ring-inset ring-slate-900/5"></div>
                        </a>
                        <div class="flex flex-col items-center order-2">
                            <h3 class="text-center font-display text-[28px] font-medium text-slate-900">
                                Banter
                            </h3>
                            <p class="mt-5 text-base leading-8 text-center text-slate-700">
                                Transforming Banter's digital presence through website
                                redesign, branding enhancement, content strategy consulting,
                                and AI integration for content creation.
                            </p>
                            <a href="case-study.html"
                                class="inline-flex items-center justify-center gap-2 py-3 mt-12 font-medium transition duration-300 bg-white rounded-full shadow-sm group px-9 text-md text-sky-900 shadow-sky-100/50 ring-1 ring-slate-100/90 hover:bg-white/60 hover:text-sky-700 hover:shadow-md hover:shadow-sky-100">
                                View Case study
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5 duration-300 ease-in-out text-sky-800 group-hover:text-sky-700">
                                    <path fill-rule="evenodd"
                                        d="M5.22 14.78a.75.75 0 001.06 0l7.22-7.22v5.69a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75h-7.5a.75.75 0 000 1.5h5.69l-7.22 7.22a.75.75 0 000 1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div> --}}

                    <!-- 4th case study -->
                    {{-- <div
                        class="flex flex-col gap-12 rounded-3xl bg-slate-50 px-7 py-12 sm:gap-14 sm:p-16 lg:py-14 lg:px-10 xl:gap-16 xl:p-16 transform rounded-br-[64px] lg:translate-y-24 xl:translate-y-32">
                        <a href="case-study.html"
                            class="relative order-2 block w-full overflow-hidden group aspect-w-16 aspect-h-9 rounded-xl md:aspect-w-3 md:aspect-h-2">
                            <img src="{{ Storage::url('case_studies/case-study-thumbnail-04.jpg') }}" alt="Bright School"
                                class="object-cover object-top w-full transition duration-300 rounded-xl bg-slate-100 group-hover:scale-105" />
                            <div class="absolute inset-0 rounded-xl ring-1 ring-inset ring-slate-900/5"></div>
                        </a>
                        <div class="flex flex-col items-center order-1">
                            <h3 class="text-center font-display text-[28px] font-medium text-slate-900">
                                Bright School
                            </h3>
                            <p class="mt-5 text-base leading-8 text-center text-slate-700">
                                Revitalizing Bright School's online presence with a redesigned
                                website, branding, and Google Ads campaign, resulting in a
                                200% enrollment increase.
                            </p>
                            <a href="case-study.html"
                                class="inline-flex items-center justify-center gap-2 py-3 mt-12 font-medium transition duration-300 bg-white rounded-full shadow-sm group px-9 text-md text-sky-900 shadow-sky-100/50 ring-1 ring-slate-100/90 hover:bg-white/60 hover:text-sky-700 hover:shadow-md hover:shadow-sky-100">
                                View Case study
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5 duration-300 ease-in-out text-sky-800 group-hover:text-sky-700">
                                    <path fill-rule="evenodd"
                                        d="M5.22 14.78a.75.75 0 001.06 0l7.22-7.22v5.69a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75h-7.5a.75.75 0 000 1.5h5.69l-7.22 7.22a.75.75 0 000 1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div> --}}

                    <!-- 5th case study -->
                    {{-- <div
                        class="flex flex-col gap-12 rounded-3xl bg-slate-50 px-7 py-12 sm:gap-14 sm:p-16 lg:py-14 lg:px-10 xl:gap-16 xl:p-16 rounded-tl-[64px]">
                        <a href="case-study.html"
                            class="relative order-1 block w-full overflow-hidden group aspect-w-16 aspect-h-9 rounded-xl md:aspect-w-3 md:aspect-h-2">
                            <img src="{{ Storage::url('case_studies/case-study-thumbnail-05.jpg') }}" alt="Crator Studio"
                                class="object-cover object-top w-full transition duration-300 rounded-xl bg-slate-100 group-hover:scale-105" />
                            <div class="absolute inset-0 rounded-xl ring-1 ring-inset ring-slate-900/5"></div>
                        </a>
                        <div class="flex flex-col items-center order-2">
                            <h3 class="text-center font-display text-[28px] font-medium text-slate-900">
                                Crator Studio
                            </h3>
                            <p class="mt-5 text-base leading-8 text-center text-slate-700">
                                Revitalizing Crator Studio's website and branding, while
                                providing consulting services that enhanced teamwork,
                                resulting in doubled productivity.
                            </p>
                            <a href="case-study.html"
                                class="inline-flex items-center justify-center gap-2 py-3 mt-12 font-medium transition duration-300 bg-white rounded-full shadow-sm group px-9 text-md text-sky-900 shadow-sky-100/50 ring-1 ring-slate-100/90 hover:bg-white/60 hover:text-sky-700 hover:shadow-md hover:shadow-sky-100">
                                View Case study
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5 duration-300 ease-in-out text-sky-800 group-hover:text-sky-700">
                                    <path fill-rule="evenodd"
                                        d="M5.22 14.78a.75.75 0 001.06 0l7.22-7.22v5.69a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75h-7.5a.75.75 0 000 1.5h5.69l-7.22 7.22a.75.75 0 000 1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div> --}}

                    <!-- 6th case study -->
                    {{-- <div
                        class="flex flex-col gap-12 rounded-3xl bg-slate-50 px-7 py-12 sm:gap-14 sm:p-16 lg:py-14 lg:px-10 xl:gap-16 xl:p-16 transform rounded-br-[64px] lg:translate-y-24 xl:translate-y-32">
                        <a href="case-study.html"
                            class="relative order-2 block w-full overflow-hidden group aspect-w-16 aspect-h-9 rounded-xl md:aspect-w-3 md:aspect-h-2">
                            <img src="{{ Storage::url('case_studies/case-study-thumbnail-06.jpg') }}" alt="NebulaTech Icon Set"
                                class="object-cover object-top w-full transition duration-300 rounded-xl bg-slate-100 group-hover:scale-105" />
                            <div class="absolute inset-0 rounded-xl ring-1 ring-inset ring-slate-900/5"></div>
                        </a>
                        <div class="flex flex-col items-center order-1">
                            <h3 class="text-center font-display text-[28px] font-medium text-slate-900">
                                NebulaTech Icon Set
                            </h3>
                            <p class="mt-5 text-base leading-8 text-center text-slate-700">
                                Created a cohesive and versatile icon set for NebulaTech and
                                its satellite companies, unifying their visual language and
                                enhancing brand recognition across diverse tech industry
                                sectors.
                            </p>
                            <a href="case-study.html"
                                class="inline-flex items-center justify-center gap-2 py-3 mt-12 font-medium transition duration-300 bg-white rounded-full shadow-sm group px-9 text-md text-sky-900 shadow-sky-100/50 ring-1 ring-slate-100/90 hover:bg-white/60 hover:text-sky-700 hover:shadow-md hover:shadow-sky-100">
                                View Case study
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5 duration-300 ease-in-out text-sky-800 group-hover:text-sky-700">
                                    <path fill-rule="evenodd"
                                        d="M5.22 14.78a.75.75 0 001.06 0l7.22-7.22v5.69a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75h-7.5a.75.75 0 000 1.5h5.69l-7.22 7.22a.75.75 0 000 1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div> --}}
                </div>

                <!-- Pagination -->
                {{-- <div class="flex items-center justify-center gap-2 mt-20">
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
                </div> --}}
            </div>
        </div>
    </section>
@endsection
