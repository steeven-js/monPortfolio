@extends('layouts.default')
@section('content')
    <main>
        <!-- Article -->
        <article>
            <!-- Article header -->
            <header class="relative py-16 bg-slate-50 sm:pt-24 lg:pt-28">
                <div class="absolute inset-x-0 bottom-0 bg-white h-1/4"></div>
                <div class="relative max-w-6xl px-4 mx-auto text-center sm:px-6 lg:px-8">
                    <a href="#0"
                        class="group inline-flex items-center justify-center gap-3.5 text-base leading-5 tracking-wide text-sky-700 transition duration-200 ease-in-out hover:text-sky-600 sm:text-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="currentColor"
                            class="h-[18px] w-[18px] text-sky-700/90 transition duration-200 group-hover:text-sky-600 sm:h-5 sm:w-5">
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
                    <h1
                        class="mt-6 text-4xl font-semibold leading-tight text-center font-display text-slate-900 sm:text-5xl sm:leading-tight">
                        How I Use Tailwind CSS To Design A Website From Scratch
                    </h1>
                    <p class="max-w-2xl mx-auto mt-6 text-lg leading-8 text-center text-slate-700">
                        Learn how to design a responsive and visually appealing website
                        from scratch using Tailwind CSS, a utility-first CSS framework
                        that simplifies and streamlines the web development process.
                    </p>
                    <div class="flex items-center justify-center gap-4 mt-8 text-md text-slate-500">
                        <span class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.75"
                                stroke="currentColor" class="w-6 h-6 text-slate-400">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                            </svg>
                            <time datetime="2023-02-27">Feb 27, 2023</time>
                        </span>
                        <span class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.75"
                                stroke="currentColor" class="w-6 h-6 text-slate-400">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            14 minute read
                        </span>
                    </div>
                    <div class="w-full max-w-4xl mx-auto mt-16">
                        <div
                            class="relative block w-full overflow-hidden shadow-lg aspect-w-16 aspect-h-9 rounded-3xl shadow-sky-100/50 md:aspect-w-3 md:aspect-h-2">
                            <img src="{{ Storage::url('images/articles/article-04.jpg') }}"
                                alt="How I Use Tailwind CSS To Design A Website From Scratch"
                                class="object-cover w-full rounded-3xl bg-slate-100" />
                            <div class="absolute inset-0 rounded-3xl ring-1 ring-inset ring-slate-900/10"></div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="px-4 bg-white sm:px-6 lg:px-8">
                <!-- Article body -->
                <div class="max-w-2xl mx-auto prose prose-lg">
                    <p>
                        Tailwind CSS, a utility-first CSS framework, has gained
                        significant traction among web developers and designers for its
                        flexible, efficient, and customizable approach to styling
                        websites. In this blog post, I'll walk you through the process of
                        designing a website from scratch using Tailwind CSS, illustrating
                        its key features and benefits along the way.
                    </p>
                    <h2>Setting Up the Development Environment</h2>
                    <p>
                        Before diving into design, it's essential to set up the
                        development environment correctly. To start, install Node.js and
                        npm (Node Package Manager) on your machine. Next, create a new
                        project directory and initialize it using npm:
                    </p>
                    <pre><code class="language-bash">mkdir my-tailwind-project 
                    cd my-tailwind-project 
                    npm init -y</code></pre>
                    <p>
                        Now, install Tailwind CSS, PostCSS, and autoprefixer as
                        dependencies:
                    </p>
                    <pre><code class="language-bash">npm install tailwindcss@latest postcss@latest autoprefixer@latest</code></pre>
                    <p>Create a postcss.config.js file to configure PostCSS:</p>
                    <pre><code class="language-js">// postcss.config.js
                    module.exports = {
                    plugins: {
                    tailwindcss: {},
                    autoprefixer: {},
                    },
                    }</code></pre>
                    <h2>Generating the Tailwind CSS Configuration File</h2>
                    <p>To generate a configuration file, run the following command:</p>
                    <pre><code class="language-bash">npx tailwindcss init</code></pre>
                    <p>
                        This will create a tailwind.config.js file, which is essential for
                        customizing your Tailwind CSS setup, including colors, fonts,
                        breakpoints, and more.
                    </p>
                    <h2>Creating the HTML Structure</h2>
                    <p>
                        Start by creating an <code>index.html</code> file in your project
                        directory. This will serve as the main page for your website. Add
                        a basic HTML structure and include a link to the Tailwind CSS
                        stylesheet. Also, include a custom CSS file, which will come in
                        handy for any additional styles:
                    </p>
                    <pre><code class="language-html">&lt;!DOCTYPE html&gt;
                    &lt;html lang="en"&gt;
                    &lt;head&gt;
                    &lt;meta charset="UTF-8" /&gt;
                    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0" /&gt;
                    &lt;title>My Tailwind CSS Project&lt;/title&gt;
                    &lt;link href="./src/tailwind.css" rel="stylesheet" /&gt;
                    &lt;link href="./src/custom.css" rel="stylesheet" /&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                    &lt;!-- Your website content goes here --&gt;
                    &lt;/body&gt;
                    &lt;/html&gt;</code></pre>
                    <h2>Designing the Website with Tailwind CSS</h2>
                    <p>
                        With the setup complete, you can now leverage Tailwind CSS's
                        utility classes to design your website. Begin by adding a
                        navigation bar, followed by the main content sections such as a
                        hero image, feature highlights, and a footer.
                    </p>
                    <p>
                        For example, to create a responsive navigation bar, you can use
                        the following code:
                    </p>
                    <pre><code class="language-html">&lt;header class="px-6 py-4 text-white bg-gray-800"&gt;
                    &lt;div class="container flex items-center justify-between mx-auto"&gt;
                    &lt;a href="#" class="text-2xl font-bold">MyWebsite&lt;/a&gt;
                    &lt;nav class="hidden space-x-4 md:flex"&gt;
                        &lt;a href="#" class="hover:text-gray-300"&gt;Home&lt;/a&gt;
                        &lt;a href="#" class="hover:text-gray-300"&gt;Features&lt;/a&gt;
                        &lt;a href="#" class="hover:text-gray-300"&gt;Pricing&lt;/a&gt;
                        &lt;a href="#" class="hover:text-gray-300"&gt;Contact&lt;/a&gt;
                    &lt;/nav&gt;
                    &lt;/div&gt;
                    &lt;/header&gt;
                    </code></pre>
                    <p>
                        With Tailwind CSS, you can easily control the layout, colors,
                        typography, and responsiveness of your website by applying utility
                        classes to your HTML elements.
                    </p>
                    <h2>Customizing Tailwind CSS</h2>
                    <p>
                        Tailwind CSS excels in its customizability. To modify the default
                        styles, open the tailwind.config.js file and adjust the settings
                        as needed. For instance, to change the primary color, add the
                        following to your configuration:
                    </p>
                    <pre><code class="language-js">module.exports = {
                    theme: {
                    extend: {
                        backgroundColor: {
                        primary: '#1D3557',
                        },
                        textColor: {
                        primary: '#1D3557',
                        },
                    },
                    },
                    variants: {},
                    plugins: [],
                    }</code></pre>
                    <p>Rebuild your CSS file to see the changes take effect.</p>
                    <h2>Optimizing for Production</h2>
                    <p>
                        You don't have to do anything in this step other than pointing the
                        Tailwind config file to your content files in order for Tailwind
                        to automatically purge your stylesheets.
                    </p>
                    <pre><code class="language-js">module.exports = {
                    content: ['./src/**/*.html'],
                    theme: {
                    extend: {
                        // Customizations go here
                    },
                    },
                    variants: {},
                    plugins: [],
                    }</code></pre>
                    <h2>Conclusion</h2>
                    <p>
                        Tailwind CSS is a powerful and flexible framework that simplifies
                        the process of designing a website from scratch. By following this
                        step-by-step guide, you'll be able to set up your development
                        environment, create a responsive and visually appealing website
                        using utility classes, customize your design, and optimize your
                        CSS for production.
                    </p>
                    <p>
                        Tailwind CSS's utility-first approach encourages rapid prototyping
                        and clean, maintainable code, making it an ideal choice for web
                        developers and designers looking to streamline their workflow and
                        create modern, responsive websites with ease.
                    </p>
                </div>

                <!-- Article footer -->
                <footer class="max-w-2xl mx-auto">
                    <hr class="w-full h-px pb-6 mt-14 text-slate-300/75 sm:pb-4" />
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                        <p class="pl-0.5 text-lg font-semibold tracking-wide text-slate-900 sm:pl-0">
                            Share article
                        </p>

                        <!-- Social share buttons -->
                        <div class="mt-2.5 flex gap-3 sm:mt-0 sm:gap-4">
                            <button
                                class="flex items-center justify-center h-10 gap-3 px-6 text-sm font-medium duration-200 ease-in-out border rounded-full group border-slate-200 text-slate-600 hover:bg-slate-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                    class="h-3.5 w-3.5 text-slate-500 transition duration-200 ease-in-out group-hover:text-slate-600">
                                    <g stroke-width="1.25" fill="none" stroke="currentCOlor" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <rect x="2.5" y="3.5" width="10" height="12"></rect>

                                        <polyline points="4.5,0.5 15.5,0.5 15.5,13.5 " stroke="currentCOlor"></polyline>

                                        <line x1="5.5" y1="6.5" x2="9.5" y2="6.5"></line>

                                        <line x1="5.5" y1="9.5" x2="9.5" y2="9.5"></line>

                                        <line x1="5.5" y1="12.5" x2="9.5" y2="12.5"></line>
                                    </g>
                                </svg>
                                Copy link
                            </button>

                            <!-- LinkedIn icon -->
                            <a href="https://linkedin.com"
                                class="flex items-center justify-center w-10 h-10 duration-200 border rounded-full border-slate-200 hover:bg-slate-50"
                                aria-label="Share on LinkedIn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16"
                                    viewBox="0 0 18 16" fill="currentColor"
                                    class="h-3.5 w-3.5 fill-slate-500 transition group-hover:fill-slate-600">
                                    <path
                                        d="M16.5128 0H0.717949C0.287179 0 0 0.266667 0 0.666667V15.3333C0 15.7333 0.287179 16 0.717949 16H16.5128C16.9436 16 17.2308 15.7333 17.2308 15.3333V0.666667C17.2308 0.266667 16.9436 0 16.5128 0ZM5.09744 13.6667H2.58462V6H5.16923V13.6667H5.09744ZM3.80513 4.93333C3.01538 4.93333 2.29744 4.33333 2.29744 3.53333C2.29744 2.8 2.94359 2.13333 3.80513 2.13333C4.59487 2.13333 5.31282 2.73333 5.31282 3.53333C5.31282 4.33333 4.66667 4.93333 3.80513 4.93333ZM14.7179 13.6667H12.1333V9.93333C12.1333 9.06667 12.1333 7.93333 10.841 7.93333C9.47692 7.93333 9.33333 8.86667 9.33333 9.86667V13.6667H6.74872V6H9.18974V7.06667C9.54872 6.46667 10.3385 5.86667 11.6308 5.86667C14.2154 5.86667 14.7179 7.46667 14.7179 9.53333V13.6667Z" />
                                </svg>
                            </a>

                            <!-- Instagram icon -->
                            <a href="https://instagram.com"
                                class="flex items-center justify-center w-10 h-10 duration-200 border rounded-full border-slate-200 hover:bg-slate-50"
                                aria-label="Share on Instagram">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="currentColor"
                                    class="h-3.5 w-3.5 fill-slate-500 transition group-hover:fill-slate-600">
                                    <g>
                                        <path
                                            d="M12,2.982c2.937,0,3.285.011,4.445.064a6.072,6.072,0,0,1,2.042.379,3.4,3.4,0,0,1,1.265.823,3.4,3.4,0,0,1,.823,1.265,6.072,6.072,0,0,1,.379,2.042c.053,1.16.064,1.508.064,4.445s-.011,3.285-.064,4.445a6.072,6.072,0,0,1-.379,2.042,3.644,3.644,0,0,1-2.088,2.088,6.072,6.072,0,0,1-2.042.379c-1.16.053-1.508.064-4.445.064s-3.285-.011-4.445-.064a6.072,6.072,0,0,1-2.042-.379,3.4,3.4,0,0,1-1.265-.823,3.4,3.4,0,0,1-.823-1.265,6.072,6.072,0,0,1-.379-2.042c-.053-1.16-.064-1.508-.064-4.445s.011-3.285.064-4.445a6.072,6.072,0,0,1,.379-2.042,3.4,3.4,0,0,1,.823-1.265,3.4,3.4,0,0,1,1.265-.823,6.072,6.072,0,0,1,2.042-.379c1.16-.053,1.508-.064,4.445-.064M12,1c-2.987,0-3.362.013-4.535.066a8.108,8.108,0,0,0-2.67.511A5.625,5.625,0,0,0,1.577,4.8a8.108,8.108,0,0,0-.511,2.67C1.013,8.638,1,9.013,1,12s.013,3.362.066,4.535a8.108,8.108,0,0,0,.511,2.67A5.625,5.625,0,0,0,4.8,22.423a8.108,8.108,0,0,0,2.67.511C8.638,22.987,9.013,23,12,23s3.362-.013,4.535-.066a8.108,8.108,0,0,0,2.67-.511A5.625,5.625,0,0,0,22.423,19.2a8.108,8.108,0,0,0,.511-2.67C22.987,15.362,23,14.987,23,12s-.013-3.362-.066-4.535a8.108,8.108,0,0,0-.511-2.67A5.625,5.625,0,0,0,19.2,1.577a8.108,8.108,0,0,0-2.67-.511C15.362,1.013,14.987,1,12,1Z">
                                        </path>
                                        <path
                                            d="M12,6.351A5.649,5.649,0,1,0,17.649,12,5.649,5.649,0,0,0,12,6.351Zm0,9.316A3.667,3.667,0,1,1,15.667,12,3.667,3.667,0,0,1,12,15.667Z">
                                        </path>
                                        <circle cx="17.872" cy="6.128" r="1.32"></circle>
                                    </g>
                                </svg>
                            </a>

                            <!-- Twitter icon -->
                            <a href="https://twitter.com"
                                class="flex items-center justify-center w-10 h-10 duration-200 border rounded-full border-slate-200 hover:bg-slate-50"
                                aria-label="Share on Twitter">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="currentColor"
                                    class="h-3.5 w-3.5 fill-slate-500 transition group-hover:fill-slate-600">
                                    <g>
                                        <path
                                            d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z">
                                        </path>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </footer>
            </div>
        </article>
    </main>

    <!-- Footer Container -->
    <section class="pt-12 sm:pt-16">
        <!-- Newsletter CTA -->
        <div class="relative">
            <div class="absolute inset-x-0 bottom-0 h-1/2 bg-slate-900"></div>
            <div class="relative max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
                <div class="relative px-5 py-12 overflow-hidden rounded-2xl bg-sky-700 sm:px-16 lg:py-14">
                    <!-- Background gradient -->
                    <img src="{{ Storage::url('images/newsletter-bg.svg') }}" alt=""
                        class="absolute inset-0 object-cover object-right w-full h-full" />

                    <!-- Content -->
                    <div class="relative flex flex-col items-center w-full lg:flex-row">
                        <div class="max-w-2xl text-center lg:pr-4 lg:text-left">
                            <h3 class="text-4xl font-semibold text-white font-display sm:text-5xl">
                                Subscribe to my newsletter
                            </h3>
                            <p class="max-w-lg mx-auto mt-4 text-lg text-sky-50 lg:mx-0 lg:mt-6">
                                Join 10,000+ designers and get creative site breakdowns,
                                design musings and tips every Monday.
                            </p>
                        </div>

                        <!-- Email form -->
                        <form action="#" method="post" class="relative z-10 w-full max-w-lg mt-10 lg:mt-0">
                            <input type="email"
                                class="h-14 w-full rounded-full border-0 bg-white/10 py-3.5 pl-5 pr-32 text-sm leading-5 text-sky-50 placeholder-sky-100/90 outline-none ring-1 ring-white/25 backdrop-blur duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-white/30 sm:pl-6"
                                required placeholder="Enter your email" autocomplete="email" />
                            <button type="submit"
                                class="absolute right-1.5 top-1.5 inline-flex h-11 items-center rounded-full bg-sky-900 py-3 px-5 text-sm font-semibold text-sky-50 outline-none transition duration-200 ease-in-out hover:bg-sky-800 focus:outline-none sm:px-7 sm:text-md">
                                Subscribe
                            </button>
                        </form>
                    </div>

                    <!-- Background illustration -->
                    <svg width="390" height="319" viewBox="0 0 390 319" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="absolute h-auto -bottom-24 -right-24 w-96">
                        <g clip-path="url(#clip0_776_176)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M34.873 301.123C49.0025 238.088 107.966 211.273 168.222 240.483C190.777 251.415 197.856 250.42 211.586 234.377C220.916 223.483 223.457 215.284 224.068 194.133C224.954 163.469 225.473 162.37 239.847 160.666C250.341 159.421 259.073 160.089 274.02 163.287C313.702 171.778 324.748 165.182 323.138 133.968C321.464 101.499 325.66 87.1588 339.61 77.7183C348.575 71.6569 364.263 74.9076 362.796 82.5308C362.452 84.3148 362.19 84.3623 357.066 83.5862C350.182 82.5361 346.096 84.1821 340.699 90.1724C333.329 98.3593 331.997 107.044 333.336 138.233C334.814 172.771 317.209 182.6 271.916 172.519C253.722 168.47 235.489 168.412 234.734 172.404C234.154 175.443 233.647 184.125 233.256 197.636C232.676 217.794 230.011 225.964 219.795 238.868C202.835 260.3 190.736 262.128 162.105 247.584C113.637 222.966 64.0667 239.682 43.7277 287.505C37.8764 301.26 36.147 311.316 39.5467 311.777C42.3563 312.164 42.3507 315.929 39.5424 316.676C34.5673 317.996 32.5764 311.363 34.873 301.123ZM31.4012 252.649C39.787 224.248 61.9305 205.695 98.0315 196.825C111.849 193.428 118.55 194.274 145.18 202.775C177.686 213.148 193.604 195.483 183.07 160.728C177.917 143.711 178.25 132.213 184.147 123.702C191.731 112.754 197.513 112.503 223.954 121.975C252.445 132.177 274.213 119.132 270.161 94.2783C266.166 69.8088 265.939 65.2565 268.455 59.8844C274.19 47.6362 284.622 41.7789 304.56 39.6119C316.853 38.2772 318.239 37.9382 322.714 35.2211C328.814 31.5151 329.161 31.4938 329.553 34.7756C330.455 42.3298 323.607 46.1775 305.912 48.0687C280.567 50.7763 271.167 60.4362 276.038 78.7691C282.908 104.614 281.524 113.716 269.125 124.198C253.911 137.07 242.086 138.409 218.365 129.965C197.907 122.68 196.704 122.541 192.655 127.027C186.891 133.408 186.763 141.122 192.13 159.012C199.722 184.335 195.92 199.94 179.598 210.438C168.464 217.598 160.67 217.467 137.309 209.722C113.938 201.97 106.128 201.741 86.4548 208.238C67.7582 214.408 57.4748 221.2 47.0923 234.241C35.0198 249.397 29.7124 267.23 37.5496 266.294C39.0121 266.12 39.9697 266.55 40.0747 267.429C40.3241 269.518 34.334 269.995 32.1043 268.066C29.4844 265.797 29.222 260.026 31.4012 252.649ZM27.6647 220.983C32.306 201.179 50.1519 183.357 72.5364 176.182C79.8321 173.842 82.1283 173.673 100.744 174.072C134.377 174.789 144.756 165.23 143.829 134.387C143.162 112.195 145.712 102.885 155.687 91.1309C168.071 76.5394 175.321 74.2615 195.275 78.6894C224.042 85.0708 237.609 75.3248 235.913 49.4834C234.852 33.2737 237.487 26.786 247.921 19.9318C260.021 11.983 294.501 7.70851 295.26 14.0653C295.541 16.4242 296.926 16.1056 274.143 18.923C244.291 22.6166 241.738 24.951 243.253 47.1383C245.415 78.7542 226.798 93.2468 193.506 85.8604C176.37 82.0564 172.722 83.0528 162.11 94.4108C153.044 104.115 150.621 112.414 151.153 131.947C152.232 171.648 138.717 183.401 95.4441 180.398C72.8278 178.826 54.0187 186.608 40.8705 202.965C32.1592 213.801 28.051 228.813 32.9068 232.042C35.0911 233.487 35.0391 234.958 32.7994 235.226C27.9953 235.799 25.6915 229.405 27.6647 220.983Z"
                                fill="#F0F9FF" fill-opacity="0.1" />
                        </g>
                        <defs>
                            <clipPath id="clip0_776_176">
                                <rect width="277.68" height="358.714" fill="white"
                                    transform="matrix(0.118567 0.992946 0.992946 -0.118567 0 42.5317)" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
            </div>
        </div>

    </section>
@endsection
