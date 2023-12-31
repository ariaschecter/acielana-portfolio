<!-- BEGIN: Sidebar -->
<div class="sidebar-wrapper group">
    <div id="bodyOverlay" class="w-screen h-screen fixed top-0 bg-slate-900 bg-opacity-50 backdrop-blur-sm z-10 hidden">
    </div>
    <div class="logo-segment">
        <a class="flex items-center" href="index.html">
            <img src="{{ asset('backend/images/logo/logo-c.svg') }}" class="black_logo" alt="logo">
            <img src="{{ asset('backend/images/logo/logo-c-white.svg') }}" class="white_logo" alt="logo">
            <span class="ltr:ml-3 rtl:mr-3 text-xl font-Inter font-bold text-slate-900 dark:text-white">DashCode</span>
        </a>
        <!-- Sidebar Type Button -->
        <div id="sidebar_type" class="cursor-pointer text-slate-900 dark:text-white text-lg">
            <iconify-icon class="sidebarDotIcon extend-icon text-slate-900 dark:text-slate-200"
                icon="fa-regular:dot-circle"></iconify-icon>
            <iconify-icon class="sidebarDotIcon collapsed-icon text-slate-900 dark:text-slate-200"
                icon="material-symbols:circle-outline"></iconify-icon>
        </div>
        <button class="sidebarCloseIcon text-2xl">
            <iconify-icon class="text-slate-900 dark:text-slate-200" icon="clarity:window-close-line"></iconify-icon>
        </button>
    </div>
    <div id="nav_shadow"
        class="nav_shadow h-[60px] absolute top-[80px] nav-shadow z-[1] w-full transition-all duration-200 pointer-events-none
    opacity-0">
    </div>
    <div class="sidebar-menus bg-white dark:bg-slate-800 py-2 px-4 h-[calc(100%-80px)] overflow-y-auto z-50"
        id="sidebar_menus">
        @php
            $route = Route::currentRouteName();
        @endphp
        <ul class="sidebar-menu">
            <li class="sidebar-menu-title">HOME</li>
            <li class="">
                <a href="{{ route('admin.dashboard') }}" class="navItem {{ $route == 'admin.dashboard' ? 'active' : '' }}">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="heroicons-outline:home"></iconify-icon>
                        <span>Home</span>
                    </span>
                </a>
            </li>

            <li class="">
                <a href="javascript:void(0)" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class="nav-icon" icon="heroicons-outline:user"></iconify-icon>
                        <span>Education</span>
                    </span>
                  <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                </a>
                <ul class="sidebar-submenu">
                  <li class="">
                    <a href="{{ route('admin.education.index') }}" class="{{ $route == 'admin.education.index' ? 'active' : '' }}">All Education</a>
                  </li>
                  <li class="">
                    <a href="{{ route('admin.education.create') }}" class="{{ $route == 'admin.education.create' ? 'active' : '' }}">Add Education</a>
                  </li>
                </ul>
              </li>

              <li class="">
                <a href="javascript:void(0)" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class="nav-icon" icon="heroicons-outline:user"></iconify-icon>
                        <span>Experience</span>
                    </span>
                  <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                </a>
                <ul class="sidebar-submenu">
                  <li class="">
                    <a href="{{ route('admin.experience.index') }}" class="{{ $route == 'admin.experience.index' ? 'active' : '' }}">All Experience</a>
                  </li>
                  <li class="">
                    <a href="{{ route('admin.experience.create') }}" class="{{ $route == 'admin.experience.create' ? 'active' : '' }}">Add Experience</a>
                  </li>
                </ul>
              </li>

              <li class="">
                <a href="javascript:void(0)" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class="nav-icon" icon="heroicons-outline:user"></iconify-icon>
                        <span>Skill</span>
                    </span>
                  <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                </a>
                <ul class="sidebar-submenu">
                  <li class="">
                    <a href="{{ route('admin.skill.index') }}" class="{{ $route == 'admin.skill.index' ? 'active' : '' }}">All Skill</a>
                  </li>
                  <li class="">
                    <a href="{{ route('admin.skill.create') }}" class="{{ $route == 'admin.skill.create' ? 'active' : '' }}">Add Skill</a>
                  </li>
                </ul>
              </li>

              <li class="">
                <a href="javascript:void(0)" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class="nav-icon" icon="heroicons-outline:user"></iconify-icon>
                        <span>Project</span>
                    </span>
                  <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                </a>
                <ul class="sidebar-submenu">
                  <li class="">
                    <a href="{{ route('admin.project.index') }}" class="{{ $route == 'admin.project.index' ? 'active' : '' }}">All Project</a>
                  </li>
                  <li class="">
                    <a href="{{ route('admin.project.create') }}" class="{{ $route == 'admin.project.create' ? 'active' : '' }}">Add Project</a>
                  </li>
                </ul>
              </li>

              <li class="">
                <a href="javascript:void(0)" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class="nav-icon" icon="heroicons-outline:user"></iconify-icon>
                        <span>Category</span>
                    </span>
                  <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                </a>
                <ul class="sidebar-submenu">
                  <li class="">
                    <a href="{{ route('admin.category.index') }}" class="{{ $route == 'admin.category.index' ? 'active' : '' }}">All Category</a>
                  </li>
                  <li class="">
                    <a href="{{ route('admin.category.create') }}" class="{{ $route == 'admin.category.create' ? 'active' : '' }}">Add Category</a>
                  </li>
                </ul>
              </li>
              <li class="">
                <a href="javascript:void(0)" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class="nav-icon" icon="heroicons-outline:user"></iconify-icon>
                        <span>Blog</span>
                    </span>
                  <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                </a>
                <ul class="sidebar-submenu">
                  <li class="">
                    <a href="{{ route('admin.blog.index') }}" class="{{ $route == 'admin.blog.index' ? 'active' : '' }}">All Blog</a>
                  </li>
                  <li class="">
                    <a href="{{ route('admin.blog.create') }}" class="{{ $route == 'admin.blog.create' ? 'active' : '' }}">Add Blog</a>
                  </li>
                </ul>
              </li>
              <li class="">
                <a href="javascript:void(0)" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class="nav-icon" icon="heroicons-outline:user"></iconify-icon>
                        <span>Resume</span>
                    </span>
                  <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                </a>
                <ul class="sidebar-submenu">
                  <li class="">
                    <a href="{{ route('admin.resume.index') }}" class="{{ $route == 'admin.resume.index' ? 'active' : '' }}">All Resume</a>
                  </li>
                  <li class="">
                    <a href="{{ route('admin.resume.create') }}" class="{{ $route == 'admin.resume.create' ? 'active' : '' }}">Add Resume</a>
                  </li>
                </ul>
              </li>
              <li class="">
                <a href="{{ route('admin.contact.index') }}" class="navItem {{ $route == 'admin.contact.index' ? 'active' : '' }}">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="heroicons-outline:home"></iconify-icon>
                        <span>Contact</span>
                    </span>
                </a>
            </li>
              <li class="">
                <a href="{{ route('admin.comment.index') }}" class="navItem {{ $route == 'admin.comment.index' ? 'active' : '' }}">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="heroicons-outline:home"></iconify-icon>
                        <span>Comment</span>
                    </span>
                </a>
            </li>

            <li class="sidebar-menu-title">User</li>
            <li class="">
                <a href="javascript:void(0)" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class="nav-icon" icon="heroicons-outline:user"></iconify-icon>
                        <span>User</span>
                    </span>
                  <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                </a>
                <ul class="sidebar-submenu">
                  <li class="">
                    <a href="{{ route('admin.user.index') }}" class="{{ $route == 'admin.user.index' ? 'active' : '' }}">All User</a>
                  </li>
                  <li class="">
                    <a href="{{ route('admin.user.create') }}" class="{{ $route == 'admin.user.create' ? 'active' : '' }}">Add User</a>
                  </li>
                  <li class="">
                    <a href="{{ route('admin.user.archive') }}" class="{{ $route == 'admin.user.archive' ? 'active' : '' }}">Archive</a>
                  </li>
                </ul>
              </li>
            {{-- <li class="">
                <a href="{{ route('admin.user.index') }}" class="navItem {{ $active == 'user' ? 'active' : '' }}">
                    <span class="flex items-center">
                        <iconify-icon class="nav-icon" icon="heroicons-outline:user"></iconify-icon>
                        <span>User {{ $active }}</span>
                    </span>
                </a>
            </li> --}}
        </ul>
    </div>
</div>
<!-- End: Sidebar -->
