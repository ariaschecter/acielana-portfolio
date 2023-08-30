<!-- Blog section start -->
<section class="pb-[70px] lg:pb-[100px]" id="blog">
    <div class="container mx-auto">
        <!-- Section title start -->
        <div
            class="flex justify-between items-center gap-[20px] lg:gap-[30px] mb-[55px] md:flex-wrap md:text-center">
            <div class="max-w-full lg:max-w-[580px]  w-full">
                <span class="text-accent1 text-[20px] lg:text-[24px] font-medium mb-[10px] lg:mb-[5px]">LATEST
                    BLOGS</span>
                <h2
                    class="text:[28px] lg:text-[48px] font-bold font-heebo leading-[36x] lg:leading-[58px] text-[#000248] dark:text-white">
                    Blog Latest of News
                    tricks & Updates</h2>
            </div>
            <div class="md:grow">
                <p
                    class="text-[#636363] dark:text-slate-200 text-[17px] leading-[28px] lg:max-w-[472px] w-full">
                    Dive into my portfolio's blog section for insightful articles, showcasing my expertise and passion in just a few words.</p>
            </div>
        </div>
        <!-- Section title end -->
        @if (session()->get('message_blog'))
            <p class="text-accent1 text-[20px] lg:text-[24px] font-medium mb-[10px] lg:mb-[5px] mb-5">{{ session()->get('message_blog') }}</p>
        @endif
        <div class="grid grid-cols-1 only-md:grid-cols-2 lg:grid-cols-3 gap-[30px]">


            @foreach ($blogs as $blog)
                @include('home.components.blog')
            @endforeach

        </div>
    </div>
</section>
<!-- Blog section end -->
