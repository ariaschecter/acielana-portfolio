<!DOCTYPE html>
<html lang="en" class="scroll-smooth" dir="ltr">

@include('home.partials.head')

<body class="font-rubik dark:bg-dark_primary_bg">

    <!-- Preloader start -->
    <div id="preloader">
        <div class="loader--border"></div>
    </div>
    <!-- Preloader end -->

    @include('home.partials.side_sidebar')

    <!-- Main wrapper start -->
    <main class="md:pb-[90px]">

      <!-- Breadcrumb section start -->
      <section class="pt-[70px] lg:pt-20">
        <div class="container mx-auto">
            <div class="text-center relative">
                <h1 class="text-[40px] only-md:text-[55px] lg:text-[70px] stroke-white	text-white font-heebo font-bold title-stroke opacity-[0.15] leading-[1] uppercase">Blog</h1>
                <span class="text-primary dark:text-white  text-[25px] only-md:text-[35px] lg:text-[40px] font-heebo font-extrabold absolute left-0 right-0 bottom-0 uppercase">Blog</span>
            </div>
        </div>
      </section>
      <!-- Breadcrumb section end -->


      <!-- Blog section start -->
      <section class="py-[70px] lg:py-[100px]" id="blog">
        <div class="container mx-auto">


          <div class="grid grid-cols-1 only-md:grid-cols-2 lg:grid-cols-3 gap-[30px]">

            @foreach ($blogs as $blog)
            @include('home.components.blog')
            @endforeach


          </div>
        </div>
      </section>
      <!-- Blog section end -->

    </main>
    <!-- Main wrapper end -->


    <!-------- Plugins js ------>

    @include('home.partials.javascript')
  </body>
</html>
