<!-- Contact form section start -->
<section
    class="py-[70px] lg:py-[100px] mb-[270px] bg-cover bg-no-repeat bg-center bg-[url('../images/contact-bg.png')] bg-[#ECF1F6] dark:bg-[url('../images/contact-bg-dark.png')] dark:bg-dark_primary_bg"
    id="contact">
    <div class="container mx-auto">
        <!-- Form wrapper start -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-[30px]">
            <div>
                <!-- Section title -->
                <div class="mb-[55px] md:text-center">
                    <span
                        class="text-accent1 text-[20px] lg:text-[24px] font-medium mb-[10px] lg:mb-[5px]">CONTACT</span>
                    <h2
                        class="text:[28px] lg:text-[48px] font-bold font-heebo leading-[36x] lg:leading-[58px] text-[#000248] dark:text-white">
                        Get I contact work
                    </h2>
                    <p class="text-[#636363] dark:text-slate-200 text-[17px] leading-[28px] lg:max-w-[472px] w-full">
                        Connect for collaboration or inquiries. Excited to hear from you and explore opportunities to
                        work together on creative projects.</p>
                </div>
                <!-- Section title end -->

                <!-- from inner start-->
                <form action="{{ route('home.contact.store') }}" method="POST">
                    @csrf
                    @if (session()->get('message'))
                        <p class="text-accent1 text-[20px] lg:text-[24px] font-medium mb-[10px] lg:mb-[5px]">
                            {{ session()->get('message') }}</p>
                    @endif
                    <div class="grid grid-cols-2 gap-7">
                        <div>
                            <input
                                class="w-full bg-white rounded px-5 py-2 h-11 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600"
                                type="text" name="contact_name" placeholder="Your name" required>
                        </div>
                        <div>
                            <input
                                class="w-full bg-white rounded px-5 py-2 h-11 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600"
                                type="email" name="contact_email" placeholder="Your email" required>
                        </div>
                        <div class="col-span-2">
                            <textarea
                                class="w-full bg-white rounded px-5 py-2 h-40 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600"
                                name="contact_message" id="" cols="30" rows="10" placeholder="Message" required></textarea>
                        </div>
                    </div>
                    <button class="btn solid-btn mt-12" type="submit">Send Request</button>
                </form>
                <!-- from inner end -->
            </div>

            <div
                class="ltr:only-md:pl-[30px] ltr:lg:pl-[50px] rtl:only-md:pr-[30px] rtl:lg:pr-[50px] mt-[30px] lg:mt-[150px] md:flex md:gap-[30px] md:flex-wrap">
                <!-- Single contact info start -->
                <div class="flex items-center">
                    <div>
                        <span
                            class="w-[50px] h-[50px] lg:w-[70px] lg:h-[70px] bg-accent1 text-white flex items-center rounded-full justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="35px" height="35px" viewBox="0 0 30 30" version="1.1">
                                <g id="surface1">
                                    <path
                                        style=" stroke:none;fill-rule:evenodd;fill:rgb(100%,100%,100%);fill-opacity:1;"
                                        d="M 4.375 15 C 4.375 9.132812 9.132812 4.375 15 4.375 C 20.867188 4.375 25.625 9.132812 25.625 15 C 25.625 20.867188 20.867188 25.625 15 25.625 C 12.910156 25.625 10.964844 25.023438 9.324219 23.984375 C 9.015625 23.789062 8.644531 23.738281 8.296875 23.839844 L 4.695312 24.914062 L 6.050781 21.742188 C 6.210938 21.371094 6.179688 20.941406 5.964844 20.59375 C 4.957031 18.96875 4.375 17.054688 4.375 15 Z M 15 1.875 C 7.75 1.875 1.875 7.75 1.875 15 C 1.875 17.296875 2.464844 19.460938 3.503906 21.339844 L 1.351562 26.382812 C 1.160156 26.828125 1.246094 27.34375 1.566406 27.707031 C 1.890625 28.070312 2.394531 28.210938 2.859375 28.074219 L 8.480469 26.394531 C 10.402344 27.496094 12.628906 28.125 15 28.125 C 22.25 28.125 28.125 22.25 28.125 15 C 28.125 7.75 22.25 1.875 15 1.875 Z M 17.867188 17.726562 L 16.222656 18.886719 C 15.453125 18.445312 14.601562 17.835938 13.75 16.980469 C 12.863281 16.09375 12.203125 15.179688 11.71875 14.339844 L 12.765625 13.453125 C 13.210938 13.074219 13.335938 12.433594 13.058594 11.914062 L 11.730469 9.414062 C 11.550781 9.078125 11.226562 8.839844 10.851562 8.769531 C 10.476562 8.703125 10.089844 8.808594 9.804688 9.058594 L 9.410156 9.402344 C 8.460938 10.230469 7.898438 11.589844 8.363281 12.96875 C 8.847656 14.394531 9.875 16.640625 11.980469 18.75 C 14.25 21.015625 16.550781 21.910156 17.898438 22.257812 C 18.984375 22.535156 20.011719 22.160156 20.734375 21.570312 L 21.472656 20.96875 C 21.789062 20.710938 21.960938 20.316406 21.929688 19.910156 C 21.898438 19.5 21.671875 19.136719 21.324219 18.925781 L 19.226562 17.675781 C 18.800781 17.421875 18.269531 17.445312 17.867188 17.726562 Z M 17.867188 17.726562 " />
                                </g>
                            </svg>
                        </span>
                    </div>
                    <div class="ltr:pl-6 rtl:pr-6">
                        <h3 class="text-[28px] md:text-[22px] font-heebo font-bold text-primary dark:text-white">
                            WhatsApp</h3>
                        <span class="text-primary dark:text-slate-200 text-[22px] md:text-[18px] mt-5">
                            <a href="https://wa.me/6285156631578" target="_blank">6285156631578</a>
                        </span>
                    </div>
                </div>
                <!-- Single contact info end -->

                <!-- Single contact info start -->
                <div class="flex items-center lg:mt-7">
                    <div>
                        <span
                            class="w-[50px] h-[50px] lg:w-[70px] lg:h-[70px] bg-accent1 text-white flex items-center rounded-full justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-mail">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                </path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </span>
                    </div>
                    <div class="ltr:pl-6 rtl:pr-6">
                        <h3 class="text-[28px] md:text-[22px] font-heebo font-bold text-primary dark:text-white">
                            Email</h3>
                        <span class="text-primary  dark:text-slate-200 text-[22px] md:text-[18px] mt-5">
                            <a href="mailto:aria.maulana.m@gmail.com">aria.maulana.m@gmail.com</a>
                        </span>
                    </div>
                </div>
                <!-- Single contact info end -->

                <!-- Single contact info start -->
                <div class="flex items-center lg:mt-7">
                    <div>
                        <span
                            class="w-[50px] h-[50px] lg:w-[70px] lg:h-[70px] bg-accent1 text-white flex items-center rounded-full justify-center">
                            <svg width="32" height="34" fill="currentColor" stroke="currentColor"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <path
                                    d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z" />
                            </svg>
                        </span>
                    </div>
                    <div class="ltr:pl-6 rtl:pr-6">
                        <h3 class="text-[28px] md:text-[22px] font-heebo font-bold text-primary dark:text-white">
                            Address</h3>
                        <span class="text-primary  dark:text-slate-200 text-[22px] md:text-[18px] mt-5">
                            Malang, Jawa Timur <br>
                            Indonesia
                        </span>
                    </div>
                </div>
                <!-- Single contact info end -->

            </div>
        </div>
        <!-- Form wrapper end -->

        <!-- Google map start  -->
        {{-- <div class="mb-[-275px] pt-[70px] lg:pt-[100px]">
            <div style="width: 100%"><iframe width="100%" height="400" frameborder="0" scrolling="no"
                    marginheight="0" marginwidth="0"
                    src="https://maps.google.com/maps?width=100%25&amp;height=440&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                        href="https://www.maps.ie/distance-area-calculator.html">distance maps</a></iframe>
            </div>
        </div> --}}
        <!-- Google map send -->

    </div>
</section>
<!-- Contact form section end -->
