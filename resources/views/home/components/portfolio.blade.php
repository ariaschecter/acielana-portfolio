<div class="element-item mb-[30px] w-[50%] lg:w-[33.33%]  px-[15px] portfolio__parent">
    <div class="relative overflow-hidden">
        <a href="#" class="popup-modal--open">
            <span
                class="absolute w-full h-full bg-accent1 left-0 top-0 opacity-0 transition duration-300 portfolio__overlay z-10">
                <div
                    class="flex items-center justify-end flex-col text-center h-full text-white p-[20px]">
                    <span
                        class="portfolio--zoom flex items-center grow transition-all duration-300 translate-y-[-20px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-maximize">
                            <path
                                d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3">
                            </path>
                        </svg>
                    </span>
                    <h3
                        class="portfolio--title text-[18px] lg:text-[24px] font-heebo transition-all duration-300 translate-y-3">
                        {{ $pro->project_name }}</h3>
                    <span
                        class="portfolio--sub-title text-[17px] 2xs:hidden transition-all duration-500 translate-y-3">
                        {{ mb_strimwidth($pro->project_desc, 0, 75, '...') }}
                    </span>
                </div>
            </span>
            <div class="w-full portfolio__image--card">
                <img class="w-full transition duration-300"
                    src="{{ Storage::url($pro->project_picture) }}" alt="{{ $pro->project_name }}">
            </div>
        </a>
        <!-- Portfolio popup start -->
        <div class="modal_portfolio fixed h-screen w-full left-0 top-0 z-[98] opacity-0 invisible">
            <div
                class="modal_popup_overlay fixed w-full h-full bg-[#000] left-0 top-0 opacity-[0.3]">
            </div>
            <!-- Modal content -->
            <div
                class="modal__portfolio--content relative z-10 h-full flex items-center px-[15px] max-w-[750px] xl:max-w-[800px] mx-auto transition duration-300 translate-y-[-50px]">
                <div
                    class="overflow-y-auto modal__portfolio--content-inner bg-white dark:bg-gray-800  max-h-[60vh] lg:max-h-[80vh] p-8 rounded-2xl relative">
                    <button
                        class="modal__popup--close ltr:right-[10px] rtl:left-[10px] top-[10px] absolute w-[50px] h-[50px] bg-accent1 hover:bg-primary dark:hover:bg-dark_accent1 text-white rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18">
                            </line>
                            <line x1="6" y1="6" x2="18" y2="18">
                            </line>
                        </svg>
                    </button>
                    <h2 class="text-accent1 text-center font-bold">
                        {{ $pro->project_name }} Project
                    </h2>
                    <div class="grid grid-cols-1 lg:grid-cols-2 my-6">
                        <div class="space-y-2">
                            <p class="dark:text-white flex items-center">
                                <span class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                        height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-file-text">
                                        <path
                                            d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                        </path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" y1="13" x2="8"
                                            y2="13"></line>
                                        <line x1="16" y1="17" x2="8"
                                            y2="17"></line>
                                        <polyline points="10 9 9 9 8 9"></polyline>
                                    </svg>
                                </span>
                                Project :&nbsp;
                                <span class="font-medium"> {{ $pro->project_media }}</span>
                            </p>
                            <p class="dark:text-white flex items-center">
                                <span class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                        height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-code">
                                        <polyline points="16 18 22 12 16 6"></polyline>
                                        <polyline points="8 6 2 12 8 18"></polyline>
                                    </svg>
                                </span>
                                Languages :&nbsp;
                                <span class="font-medium">{{ $pro->project_language }}</span>
                            </p>
                        </div>

                        <div class="space-y-2">
                            <p class="dark:text-white flex items-center mt-2 lg:mt-0  ">
                                <span class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                        height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2">
                                        </path>
                                        <circle cx="12" cy="7" r="4">
                                        </circle>
                                    </svg>
                                </span>
                                Client :&nbsp; <span
                                    class="font-medium">{{ $pro->project_client }}</span>
                            </p>
                            <p class="dark:text-white flex items-center">
                                <span class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                        height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-external-link">
                                        <path
                                            d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                        </path>
                                        <polyline points="15 3 21 3 21 9"></polyline>
                                        <line x1="10" y1="14" x2="21"
                                            y2="3"></line>
                                    </svg>
                                </span>
                                Preview :&nbsp;
                                <span
                                    class="font-medium transition-all duration-300 ease-in-out hover:text-accent1">
                                    <a href="{{ $pro->project_url }}" target="_blank"
                                        rel="noopener noreferrer">Click to Preview</a>
                                </span>
                            </p>
                        </div>
                    </div>

                    <p class="dark:text-white font-normal text-[17px]">
                        {{ $pro->project_desc }}
                    </p>
                    <div class="pr-3">
                        <img class="max-w-full h-auto rounded-xl mt-6 mx-auto"
                            src="{{ Storage::url($pro->project_picture) }}"
                            alt="portfolio image">
                    </div>

                    <!-- Blog comment box start -->
                    <div class="mt-10">
                        <h4 class="text-primary mb-5 dark:text-white">Comments
                            ({{ count($pro->comment) }})</h4>
                        <div class="mt-7">
                            @foreach ($pro->comment as $comment)
                                <!-- Single comment start -->
                                <div
                                    class="flex gap-4 border-b border-gray-300 pb-7 dark:text-slate-300">
                                    <div>
                                        <div class="flex items-center gap-3">
                                            <h6 class="text-primary font-heebo dark:text-white">
                                                {{ $comment->comment_name }}</h6>
                                            <span>{{ \Carbon\Carbon::parse($comment->created_at)->format('d M Y') }}</span>
                                        </div>
                                        <p class="py-2">{{ $comment->comment_message }}</p>
                                    </div>
                                </div>
                                <!-- Single comment end -->
                            @endforeach
                        </div>
                    </div>
                    <!-- Blog comment box end -->

                    <form action="{{ route('home.comment.project.store', $pro->id) }}" method="POST"
                        class="mt-10">
                        @csrf
                        <h4 class="text-primary mb-5 dark:text-white">Leave a Reply</h4>
                        <div class="grid grid-cols-2 gap-7">
                            <div>
                                <input
                                    class="w-full bg-white rounded px-5 py-2 h-11 border border-gray-300 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600"
                                    type="text" name="comment_name" placeholder="Your name"
                                    required>
                            </div>
                            <div>
                                <input
                                    class="w-full bg-white rounded px-5 py-2 h-11 border border-gray-300 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600"
                                    type="email" name="comment_email" placeholder="Your email"
                                    required>
                            </div>
                            <div class="col-span-2">
                                <textarea
                                    class="w-full bg-white rounded px-5 py-2 h-40 border border-gray-300 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600"
                                    name="comment_message" id="" cols="30" rows="10" placeholder="Message" required></textarea>
                            </div>
                        </div>
                        <button class="btn--small solid-btn mt-7">Post Comment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio popup end -->
</div>
