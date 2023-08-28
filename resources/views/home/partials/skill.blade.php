<!-- Skill section start -->
<section class="lg:py-[100px] md:py-[70px]" id="skill">
    <div class="container mx-auto">
        <!-- Section title start -->
        <div
            class="flex justify-between items-center gap-[20px] lg:gap-[30px] mb-[55px] md:flex-wrap md:text-center">
            <div class="max-w-full lg:max-w-[580px]  w-full">
                <span
                    class="text-accent1 text-[20px] lg:text-[24px] font-medium mb-[10px] lg:mb-[5px]">CREATIVE
                    SERVICE</span>
                <h2
                    class="text:[28px] lg:text-[48px] font-bold font-heebo leading-[36x] lg:leading-[58px] text-[#000248] dark:text-white">
                    What can i do for service clients you</h2>
            </div>
            <div class="md:grow">
                <p
                    class="text-[#636363] text-[17px] leading-[28px] lg:max-w-[472px] w-full dark:text-slate-200">
                    Promote your blog posts, case udie, and product ouncems
                    with the the branded videoscustomers coming back for
                    services Makes best effort.</p>
            </div>
        </div>
        <!-- Section title end -->

        @php
        $background = [
            'before:bg-[#79DAB9] before:opacity-[0.26]',
            'before:bg-[#ED5F38] before:opacity-[0.16]',
            'before:bg-[#007EFF] before:opacity-[0.16]',
            'before:bg-[#E6BC13] before:opacity-[0.22]',
            'before:bg-[#ED38D1] before:opacity-[0.16]',
            'before:bg-[#A348CD] before:opacity-[0.16]',
        ]
        @endphp

        <!-- Services list start -->
        <div class="grid gap-[30px] lg:grid-cols-3 grid-cols-1 only-md:grid-cols-2">

            @foreach ($skills as $key => $skill)
            <!-- Single service start -->
            <div
                class="shadow-[0_0_50px_0_rgba(196,206,213,0.2)] hover:shadow-[0_0_150px_0_rgba(196,206,213,0.7)]  dark:shadow-[0_0_20px_0_rgba(0,0,0,0.1)] dark:hover:shadow-[0_0_50px_0_rgba(0,0,0,0.2)] hover:translate-y-[-10px] transition duration-500">
                <div class="overflow-hidden px-[30px] xl:px-[40px] lg:pt-[50px] md:pt-[40px] pb-[40px] ">
                    <span
                        class="bg-[#48CDA0] text-white w-[70px] h-[70px] lg:w-[93px] lg:h-[93px] flex items-center justify-center rounded-full service-shape {{ $background[$key % 6] }}">
                        {!! Storage::get($skill->skill_svg) !!}

                    </span>
                    <h3
                        class="text-primary dark:text-white text-[20px] xl:text-[25px] font-bold font-heebo mt-[20px] mb-[15px]">
                        {{ $skill->skill_name }}</h3>
                    <p class="text-[17px] text-[#636363] dark:text-slate-200">{{ $skill->skill_desc }}</p>
                </div>
            </div>
            <!-- Single service end -->
            @endforeach
        </div>
        <!-- Services list end -->

    </div>
</section>
<!-- Skill section end -->
