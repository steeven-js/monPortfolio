@extends('layouts.default')
@section('content')
    <!-- Contact Section -->
    <section class="relative overflow-hidden dark:bg-gray-800">
        <!-- Container -->
        <div class="max-w-screen-xl mx-auto">
            <div class="lg:columns-2 lg:gap-8">
                <!-- Content -->
                <div
                    class="relative bg-slate-50 py-16 px-5 sm:py-24 sm:px-6 lg:col-span-6 lg:rounded-br-[64px] lg:px-8 lg:pt-32 2xl:pl-0 dark:bg-gray-800">
                    <!-- Background to cover left portion of large screens -->
                    <div class="absolute inset-y-0 left-0 hidden w-full -translate-x-full bg-slate-50 lg:block dark:bg-gray-800"></div>

                    <div class="relative max-w-2xl mx-auto lg:mx-0 lg:max-w-none ">
                        <h2
                            class="font-display text-4xl font-semibold leading-tight text-slate-900 sm:text-5xl sm:leading-tight lg:text-[40px] lg:leading-tight xl:text-5xl xl:leading-tight dark:text-sky-700">
                            Comment puis-je t'aider? Prenons contact
                            <span class="ml-4 sm:ml-6">👋</span>
                        </h2>

                        <div class="mt-12 aspect-w-3 aspect-h-2 sm:mt-16">
                            <img src="storage/images/contact.jpg" alt=""
                                class="object-cover w-full h-full rounded-3xl xl:translate-x-16" />
                        </div>

                        <!-- Handwritten text with arrow -->
                        <div
                            class="relative mt-14 h-fit w-fit font-writing text-2xl tracking-wide text-slate-600 sm:mt-20 sm:text-[27px]">
                            <span class="inline-block w-52 max-w-[220px] transform sm:w-auto sm:-rotate-6 dark:text-white">
                                Vous pouvez <span class="text-sky-700 dark:text-sky-700">me joindre</span> par-ici!
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="124" height="121" viewBox="0 0 124 121"
                                fill="none"
                                class="absolute -right-16 top-4 h-24 w-auto -rotate-90 transform text-slate-600 sm:-right-20 sm:-top-1 sm:translate-y-2 sm:rotate-[-100deg] dark:text-sky-700">
                                <g clip-path="url(#clip0_257_335)">
                                    <path
                                        d="M101.672 26.3321C96.8237 38.134 92.186 44.0573 79.0339 44.4141C70.6979 44.6403 60.8529 42.694 53.4527 38.7688C49.1632 36.4936 56.8633 35.9887 58.3238 36.046C75.2213 36.7084 91.469 47.7751 94.8076 64.9225C96.9834 76.0979 88.4245 81.9067 78.6041 84.1752C63.6278 87.6349 47.752 81.2525 36.0397 72.0991C32.1436 69.0541 19.8172 60.5149 22.0934 54.2698C23.9793 49.0954 31.7507 55.0061 34.018 56.9118C37.2506 59.6288 44.0244 65.7437 43.9149 70.3449C43.7576 76.9438 32.7995 78.0771 28.2217 77.7848C19.5283 77.2298 10.3327 73.6012 2.05876 71.0225C1.4496 70.8325 5.37871 69.9759 6.06477 69.8198C8.02976 69.3721 9.72632 68.1441 11.7325 67.8657C13.2208 67.6592 21.2769 68.287 16.2554 69.947C14.4855 70.532 2.71379 69.3189 2.58655 69.7453C2.06535 71.4868 10.2182 79.8642 11.7371 81.4008C15.3955 85.1003 14.5874 73.4626 14.2296 71.9325"
                                        stroke="currentColor" stroke-width="1.75" stroke-linecap="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_257_335">
                                        <rect width="106" height="67" fill="white"
                                            transform="matrix(-0.748497 0.663138 0.663138 0.748497 79.3407 0)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>

                        <!-- Contact information -->
                        <div class="grid gap-8 mt-16 sm:mt-20 sm:grid-cols-2 sm:gap-6 xl:gap-8">
                            <!-- Contact 1 -->
                            <div class="flex gap-[18px]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.75" stroke="currentColor" class="w-6 h-6 shrink-0 text-sky-600">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>
                                <div class="sm:pt-0.5">
                                    <p class="text-lg font-display text-slate-900 dark:text-sky-700">Par email</p>
                                    <p class="mt-1.5 text-base text-slate-600 sm:mt-2 dark:text-white">
                                        Je vous répondrai généralement par e-mail dans l'heure qui suit
                                    </p>
                                    <a href="mailto:jacques.steeven@gmail.com"
                                        class="inline-block mt-5 duration-200 ease-in-out text-sky-700 hover:text-sky-600 sm:mt-6">
                                        jacques.steeven@gmail.com
                                    </a>
                                </div>
                            </div>

                            <!-- Contact 2 -->
                            <div class="flex gap-[18px]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.75" stroke="currentColor" class="w-6 h-6 shrink-0 text-sky-600">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                </svg>

                                <div class="sm:pt-0.5">
                                    <p class="text-lg font-display text-slate-900 dark:text-sky-700">Par téléphone</p>
                                    <p class="mt-2 text-base text-slate-600 dark:text-white">
                                        Je suis disponible en semaine de 9h à 17h </p>
                                    <a href="tel:+596 696 30 76 31"
                                        class="inline-block mt-6 duration-200 ease-in-out text-sky-700 hover:text-sky-600">
                                        +596 696 30 76 31 </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact form container -->
                <div
                    class="px-5 py-16 sm:py-24 sm:px-6 lg:col-span-6 lg:pl-0 lg:pr-8 lg:pt-32 xl:col-span-5 xl:col-start-8 2xl:pr-0">
                    <div class="max-w-lg mx-auto lg:mr-0">
                        <h3 class="text-3xl font-semibold font-display text-slate-900 dark:text-sky-700">
                            Remplissez notre formulaire ci-dessous pour commencer
                        </h3>
                        <p class="mt-4 text-lg text-slate-600 dark:text-white">
                            Vous avez des questions, des commentaires ou des projets passionnants à discuter ? Nous sommes là pour vous ! Partagez-nous les détails. Nous sommes impatients de vous aider à concrétiser vos idées en ligne.
                        </p>

                        <!-- Contact form -->
                        <form action="#" method="POST" class="mt-10">
                            <div class="space-y-7">
                                <div>
                                    <label for="name" class="block font-medium leading-6 text-md text-slate-900 dark:text-sky-700">
                                        Nom
                                    </label>
                                    <div class="mt-2">
                                        <input type="text" name="name" id="name" autocomplete="name"
                                            placeholder="Jane Doe"
                                            class="block w-full px-4 py-4 leading-4 transition-colors duration-200 ease-in-out border-0 shadow-sm rounded-xl bg-slate-50 text-md text-slate-900 shadow-sky-100/50 ring-1 ring-inset ring-slate-200 placeholder:text-slate-400 hover:bg-white focus:border-0 focus:bg-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-sky-600/60" />
                                    </div>
                                </div>
                                <div>
                                    <label for="email" class="block font-medium leading-6 text-md text-slate-900 dark:text-sky-700">
                                        Email
                                    </label>
                                    <div class="mt-2">
                                        <input id="email" name="email" type="email" autocomplete="email"
                                            placeholder="foobar@email.com"
                                            class="block w-full px-4 py-4 leading-4 transition-colors duration-200 ease-in-out border-0 shadow-sm rounded-xl bg-slate-50 text-md text-slate-900 shadow-sky-100/50 ring-1 ring-inset ring-slate-200 placeholder:text-slate-400 hover:bg-white focus:border-0 focus:bg-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-sky-600/60" />
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between leading-6 text-md">
                                        <label for="phone" class="block font-medium text-slate-900 dark:text-sky-700">
                                            Phone
                                        </label>
                                        <p id="phone-description" class="text-slate-500/80">
                                            Optional
                                        </p>
                                    </div>
                                    <div class="mt-2">
                                        <input type="tel" name="phone" id="phone" autocomplete="tel"
                                            aria-describedby="phone-description" placeholder="+1 (800) 123-4567"
                                            class="block w-full px-4 py-4 leading-4 transition-colors duration-200 ease-in-out border-0 shadow-sm rounded-xl bg-slate-50 text-md text-slate-900 shadow-sky-100/50 ring-1 ring-inset ring-slate-200 placeholder:text-slate-400 hover:bg-white focus:border-0 focus:bg-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-sky-600/60" />
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between leading-6 text-md">
                                        <label for="message" class="block font-medium text-slate-900 dark:text-sky-700">
                                            Coment puis-je vous aider?
                                        </label>
                                        <p id="message-description" class="text-slate-500/80">
                                            Max 500 characteres
                                        </p>
                                    </div>
                                    <div class="mt-2">
                                        <textarea id="message" name="message" rows="5" aria-describedby="message-description"
                                            placeholder="Parlez-moi un peu de votre projet..."
                                            class="block w-full px-4 py-4 leading-6 transition-colors duration-200 ease-in-out border-0 shadow-sm rounded-xl bg-slate-50 text-md text-slate-900 shadow-sky-100/50 ring-1 ring-inset ring-slate-200 placeholder:text-slate-400 hover:bg-white focus:border-0 focus:bg-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-sky-600/60"></textarea>
                                    </div>
                                </div>
                                <fieldset>
                                    <legend class="block font-medium leading-6 text-md text-slate-900 dark:text-sky-700">
                                        Prestations attendues
                                    </legend>
                                    <div class="mt-4 space-y-3">
                                        <div class="flex items-start">
                                            <div class="flex items-center h-6">
                                                <input id="web-development" name="web-development" type="checkbox"
                                                    class="w-4 h-4 rounded shadow-sm border-slate-300/80 bg-slate-50 text-sky-600 shadow-sky-100/50 focus:outline-none focus:ring-transparent" />
                                            </div>
                                            <div class="ml-3 text-sm leading-6">
                                                <label for="web-development" class="text-slate-700 dark:text-white">
                                                    Web development
                                                </label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-6">
                                                    <input id="web-design" name="web-design" type="checkbox"
                                                        class="w-4 h-4 rounded shadow-sm border-slate-300/80 bg-slate-50 text-sky-600 shadow-sky-100/50 focus:outline-none focus:ring-transparent" />
                                                </div>
                                                <div class="ml-3 text-sm leading-6">
                                                    <label for="web-design" class="text-slate-700 dark:text-white">
                                                        Web design
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-6">
                                                    <input id="consulting" name="consulting" type="checkbox"
                                                        class="w-4 h-4 rounded shadow-sm border-slate-300/80 bg-slate-50 text-sky-600 shadow-sky-100/50 focus:outline-none focus:ring-transparent" />
                                                </div>
                                                <div class="ml-3 text-sm leading-6">
                                                    <label for="consulting" class="text-slate-700 dark:text-white">
                                                        Consulting
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-6">
                                                    <input id="other" name="other" type="checkbox"
                                                        class="w-4 h-4 rounded shadow-sm border-slate-300/80 bg-slate-50 text-sky-600 shadow-sky-100/50 focus:outline-none focus:ring-transparent" />
                                                </div>
                                                <div class="ml-3 text-sm leading-6">
                                                    <label for="other" class="text-slate-700 dark:text-white">
                                                        Autre
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="pt-8 mt-10 border-t border-slate-200">
                                <button type="submit"
                                    class="inline-flex items-center rounded-full gap-2.5 justify-center px-7 py-3 font-semibold leading-none outline-offset-2 transition-all duration-200 ease-in-out active:transition-none bg-slate-900 text-white hover:bg-sky-800 w-full text-base sm:text-lg">
                                    Envoyer
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
