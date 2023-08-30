<!DOCTYPE html>
<html lang="en" class="scroll-smooth" dir="ltr">

@include('home.partials.head')

<body class="font-rubik dark:bg-dark_primary_bg">

    <!-- Preloader start -->
    <div id="preloader">
        <div class="loader--border"></div>
    </div>
    <!-- Preloader end -->

    <!-- Dark and light button start -->
    <div class="fixed ltr:right-0 rtl:left-0 top-[50%] translate-y-[-50%] z-50">
        <button
            class="bg-accent1 w-[50px] h-[50px] text-white flex justify-center items-center rounded-lg ltr:rounded-tr-none ltr:rounded-br-none rtl:rounded-tl-none rtl:rounded-bl-none"
            id="light__to--dark">
            <svg xmlns="http://www.w3.org/2000/svg" class="dark--mode__icon ionicon max-w-[25px] fill-white"
                viewBox="0 0 512 512">
                <title>Moon</title>
                <path
                    d="M264 480A232 232 0 0132 248c0-94 54-178.28 137.61-214.67a16 16 0 0121.06 21.06C181.07 76.43 176 104.66 176 136c0 110.28 89.72 200 200 200 31.34 0 59.57-5.07 81.61-14.67a16 16 0 0121.06 21.06C442.28 426 358 480 264 480z" />
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" class="light--mode__icon ionicon max-w-[25px] fill-white"
                viewBox="0 0 512 512">
                <title>Sunny</title>
                <path
                    d="M256 118a22 22 0 01-22-22V48a22 22 0 0144 0v48a22 22 0 01-22 22zM256 486a22 22 0 01-22-22v-48a22 22 0 0144 0v48a22 22 0 01-22 22zM369.14 164.86a22 22 0 01-15.56-37.55l33.94-33.94a22 22 0 0131.11 31.11l-33.94 33.94a21.93 21.93 0 01-15.55 6.44zM108.92 425.08a22 22 0 01-15.55-37.56l33.94-33.94a22 22 0 1131.11 31.11l-33.94 33.94a21.94 21.94 0 01-15.56 6.45zM464 278h-48a22 22 0 010-44h48a22 22 0 010 44zM96 278H48a22 22 0 010-44h48a22 22 0 010 44zM403.08 425.08a21.94 21.94 0 01-15.56-6.45l-33.94-33.94a22 22 0 0131.11-31.11l33.94 33.94a22 22 0 01-15.55 37.56zM142.86 164.86a21.89 21.89 0 01-15.55-6.44l-33.94-33.94a22 22 0 0131.11-31.11l33.94 33.94a22 22 0 01-15.56 37.55zM256 358a102 102 0 11102-102 102.12 102.12 0 01-102 102z" />
            </svg>
        </button>

    </div>
    <!-- Dark and light button end -->

    <!-- Header area start -->
    <header class="absolute w-full left-0 top-0">
        <div class="header__sticky py-5">
            <div class="container mx-auto">
                <div class="flex justify-between items-center">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img class="hidden dark:block" src="{{ asset('frontend/images/logo-light.png') }}"
                                alt="">
                            <img class="dark:hidden" src="{{ asset('frontend/images/logo.png') }}" alt="">
                        </a>
                    </div>
                    <div class="flex items-center md:hidden">
                        @include('home.partials.topbar')
                    </div>
                    <div class="lg:hidden">
                        <button class="offcanvas__header--menu__open--btn text-primary dark:text-white " data-offcanvas>
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-menu">
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Start Offcanvas header menu -->
            <div class="offcanvas__header lg:hidden dark:bg-gray-800">
                <div class="offcanvas__inner">
                    <div class="offcanvas__logo">
                        <a class="offcanvas__logo_link" href="{{ url('/') }}">
                            <img class="dark:hidden" src="{{ asset('frontend/images/logo.png') }}" alt="Grocee Logo"
                                width="158" height="36">
                            <img class="hidden dark:block" src="{{ asset('frontend/images/logo-light.png') }}"
                                alt="Grocee Logo" width="158" height="36">
                        </a>
                        <button class="offcanvas__close--btn dark:text-white" data-offcanvas>close</button>
                    </div>
                    <nav class="offcanvas__menu">
                        <ul class="offcanvas__menu_ul">
                            <li class="offcanvas__menu_li">
                                <a class="offcanvas__menu_item dark:text-white" href="#home">Home</a>
                            </li>
                            <li class="offcanvas__menu_li"><a class="offcanvas__menu_item dark:text-white"
                                    href="#about">About</a></li>
                            <li class="offcanvas__menu_li"><a class="offcanvas__menu_item dark:text-white"
                                    href="#services">Services</a></li>
                            <li class="offcanvas__menu_li"><a class="offcanvas__menu_item dark:text-white"
                                    href="#portfolio">Portfolio</a></li>
                            <li class="offcanvas__menu_li"><a class="offcanvas__menu_item dark:text-white"
                                    href="#blog">Blog</a></li>
                            <li class="offcanvas__menu_li"><a class="offcanvas__menu_item dark:text-white"
                                    href="#contact">Contact</a></li>
                        </ul>
                        <button
                            class="flex mx-auto bg-accent1 lg:px-[15px] px-[12px] xl:py-[12px] py-[10px] rounded-[2rem] text-[16px] xl:text-[18px] font-medium text-white items-center transition duration-300 relative after:absolute :after:content-[''] after:bg-primary after:h-full after:w-full after:bottom-0 after:left-0 after:rounded-[2rem] after:trasition after:duration-300 after:opacity-0 hover:after:opacity-[1] mt-[30px]"
                            type="submit">
                            <span
                                class="icon bg-[#EFEBEB] text-accent1 w-[34px] h-[34px] rounded-full flex items-center justify-center ltr:xl:mr-[15px] ltr:mr-[10px] rtl:xl:ml-[15px] rtl:ml-[10px] relative z-[8] flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-download">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                    <polyline points="7 10 12 15 17 10"></polyline>
                                    <line x1="12" y1="15" x2="12" y2="3"></line>
                                </svg>
                            </span>
                            <a href="{{ $resume ? Storage::url($resume->resume_url) : '' }}" target="_blank"
                                rel="noopener noreferrer"><span
                                    class="ltr:xl:pr-[5px] ltr:lg:pr-[5px] rtl:xl:pl-[5px] rtl:lg:pl-[5px] relative z-[8] flex-shrink-0">Download
                                    CV
                                </span></a>
                        </button>
                    </nav>

                </div>
            </div>
            <!-- End Offcanvas header menu -->
        </div>


    </header>
    <!-- Header area end -->

    @if (session()->get('message'))
        <p>{{ session()->get('message') }}</p>
    @endif

    <!-- Main wrapper start -->
    <main>
        @include('home.partials.home')

        @include('home.partials.about')

        @include('home.partials.experience')

        @include('home.partials.skill')

        @include('home.partials.portfolio')

        @include('home.partials.contact')

        @include('home.partials.blog')

    </main>
    <!-- Main wrapper end -->


    <!-- Footer start -->
    <footer
        class="py-[50px] bg-cover bg-no-repeat bg-center bg-[url('../images/footer-bg.png')] bg-[#EFF3F7] dark:bg-[url('../images/footer-bg-dark.png')] dark:bg-dark_primary_bg dark:border-t dark:border-dark_accent1">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 only-md:grid-cols-2 lg:grid-cols-2">
                <div class="flex">
                    <p class="flex items-center flex-wrap sm:justify-center dark:text-slate-200">
                        Developed with
                        <span class="px-[3px] text-paragraph dark:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="currentColor" stroke="text-paragraph" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                                <path
                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                </path>
                            </svg>
                        </span>
                        by
                        <span class=" px-[3px]">
                            <a class="text-accent1 hover:font-bold" href="{{ url('/') }}">
                                Acielana
                            </a>
                        </span>© {{ date('Y') }}
                    </p>
                </div>
            </div>
        </div>

    </footer>
    <!-- Footer end -->

    <!-- Back to top start -->
    <button id="scroll__top"
        class="fixed bottom-12 ltr:right-5 rtl:left-5 z-50 bg-accent1 text-white shadow-[0_2px_22px_rgba(0,0,0,0.16)] cursor-pointer translate-y-12 opacity-0 invisible transition-all duration-300 leading-[1] w-11 h-11 rounded-full border-none flex items-center justify-center hover:bg-primary dark:hover:bg-dark_accent1">
        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-6 leading-[1]" viewBox="0 0 512 512">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="48"
                d="M112 244l144-144 144 144M256 120v292" />
        </svg>
    </button>
    <!-- Back to top end -->



    <!-------- Plugins js ------>

    <!-- Swiper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!-- imagesloaded js -->
    <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}" defer></script>

    <!-- Isotope js -->
    <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}" defer></script>

    <!-- Custom js -->
    <script src="{{ asset('frontend/js/script.js') }}" defer></script>
</body>

</html>
