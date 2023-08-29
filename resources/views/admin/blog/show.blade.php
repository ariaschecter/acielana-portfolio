@extends('admin.admin_template')

@section('main')
    @include('admin.partials.breadcrumb')
    <div class="card">
        <div class="card-body flex flex-col p-6">
            <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                <div class="flex-1">
                    <div class="card-title text-slate-900 dark:text-white">{{ $title }}</div>
                </div>
            </header>
            <div class="card-text h-full ">
                <form class="space-y-4">
                    <div class="input-area relative">
                        <label for="blog_title" class="form-label">Title<span class="text-danger-500">*</span></label>
                        <input type="text" id="blog_title" name="blog_title" class="form-control" placeholder="Enter Blog Title" value="{{ $blog->blog_title }}">
                        <x-input-error :messages="$errors->get('blog_title')" class="mt-2" />
                    </div>
                    <div class="input-area relative">
                        <label for="category_id" class="form-label">Category<span class="text-danger-500">*</span></label>
                        <input type="text" id="category_id" name="category_id" class="form-control" placeholder="Enter Blog Title" value="{{ $blog->category->category_name }}">
                        <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                    </div>
                    <div class="input-area">
                        <label for="blog_desc" class="form-label">Description<span class="text-danger-500">*</span></label>
                        <textarea id="blog_desc" name="blog_desc" rows="5" class="form-control my-editor" placeholder="Type Here">{!! $blog->blog_desc !!}</textarea>
                        <x-input-error :messages="$errors->get('blog_desc')" class="mt-2" />
                    </div>
                    <div class="input-area">
                        <label for="blog_quote" class="form-label">Quote</label>
                        <textarea id="blog_quote" name="blog_quote" rows="5" class="form-control" placeholder="Type Here">{{ $blog->blog_quote }}</textarea>
                        <x-input-error :messages="$errors->get('blog_quote')" class="mt-2" />
                    </div>
                    <div class="input-area">
                        <label for="skill_desc" class="form-label">Picture<span class="text-danger-500">*</span></label>
                        <div class="card">
                            <div class="card-body flex flex-col p-6">
                                <div class="card-text h-full ">
                                    <img src="{{ Storage::url($blog->blog_picture) }}" class="rounded-md" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
