<!-- Portfolio section start -->
<section
    class="bg-[#EFF3F7] dark:bg-dark_primary_bg pt-[70px] lg:pt-[100px] pb-[40px] lg:pb-[70px] dark:border-t dark:border-b dark:border-dark_accent1"
    id="portfolio">
    <div class="container mx-auto">
        <div class="flex justify-between items-center gap-[20px] lg:gap-[30px] mb-[55px] md:flex-wrap md:text-center">
            <div class="max-w-full lg:max-w-[580px]  w-full">
                <span class="text-accent1 text-[20px] lg:text-[24px] font-medium mb-[10px] lg:mb-[5px]">PORTFOLIO</span>
                <h2
                    class="text:[28px] lg:text-[48px] font-bold font-heebo leading-[36x] lg:leading-[58px] text-[#000248] dark:text-white">
                    Never compromise for
                    portfolio quality
                </h2>
            </div>
            <div class="md:grow">
                <p class="text-[#636363] dark:text-slate-200 text-[17px] leading-[28px] lg:max-w-[472px] w-full">
                    Explore my portfolio showcasing creative and innovative projects, reflecting my expertise and
                    passion for web development.</p>
            </div>
        </div>

        <!-- Filter portfolio start -->
        <div class="isotope--filter">
            @if (session()->get('message_project'))
                <p class="text-accent1 text-[20px] lg:text-[24px] font-medium mb-[10px] lg:mb-[5px]">
                    {{ session()->get('message_project') }}</p>
            @endif
            <div class="portfolio__grid flex mt-[50px] mx-[-15px]">
                <!-- single portfolio start -->
                @foreach ($projects as $pro)
                    @include('home.components.portfolio')
                @endforeach
            </div>
            <div class="button-group filters-button-group flex justify-center flex-wrap gap-[30px]">
                <button class="btn solid-btn mt-12"><a href="/portfolio">See All</a></button>
            </div>
            <!-- single portfolio end -->
        </div>
    </div>
    <!-- Filter portfolio end -->

    </div>
</section>
<!-- Portfolio section end -->
