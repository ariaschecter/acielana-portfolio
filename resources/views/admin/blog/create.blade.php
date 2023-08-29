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
                <form class="space-y-4" method="POST" action="{{ route('admin.blog.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="input-area relative">
                        <label for="blog_title" class="form-label">Title<span class="text-danger-500">*</span></label>
                        <input type="text" id="blog_title" name="blog_title" class="form-control" placeholder="Enter Blog Title" value="{{ old('blog_title') }}">
                        <x-input-error :messages="$errors->get('blog_title')" class="mt-2" />
                    </div>
                    <div>
                        <label for="category_id" class="form-label">Category</label>
                        <select name="category_id" id="category_id" class="select2 form-control w-full mt-2 py-2">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $category->id == old('category_id') ? 'selected' : '' }} class=" inline-block font-Inter font-normal text-sm text-slate-600">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                    </div>
                    <div class="input-area">
                        <label for="blog_desc" class="form-label">Description<span class="text-danger-500">*</span></label>
                        <textarea id="blog_desc" name="blog_desc" rows="5" class="form-control my-editor" placeholder="Type Here">{!! old('blog_desc') !!}</textarea>
                        <x-input-error :messages="$errors->get('blog_desc')" class="mt-2" />
                    </div>
                    <div class="input-area">
                        <label for="blog_quote" class="form-label">Quote</label>
                        <textarea id="blog_quote" name="blog_quote" rows="5" class="form-control" placeholder="Type Here">{{ old('blog_quote') }}</textarea>
                        <x-input-error :messages="$errors->get('blog_quote')" class="mt-2" />
                    </div>
                    <div class="input-area">
                        <label for="blog_picture" class="form-label">Picture<span class="text-danger-500">*</span></label>
                        <div class="filePreview">
                            <label>
                                <input type="file" class=" w-full hidden" id="blog_picture" name="blog_picture">
                                <span class="w-full h-[40px] file-control flex items-center custom-class">
                                    <span class="flex-1 overflow-hidden text-ellipsis whitespace-nowrap">
                                        <span id="placeholder" class="text-slate-400">Choose a file or drop it
                                            here...</span>
                                    </span>
                                    <span
                                        class="file-name flex-none cursor-pointer border-l px-4 border-slate-200 dark:border-slate-700 h-full inline-flex items-center bg-slate-100 dark:bg-slate-900 text-slate-600 dark:text-slate-400 text-sm rounded-tr rounded-br font-normal">Browse</span>
                                </span>
                            </label>
                            <x-input-error :messages="$errors->get('blog_picture')" class="mt-2" />
                            <div id="file-preview"></div>
                        </div>
                    </div>
                    <button class="btn inline-flex justify-center btn-dark">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
