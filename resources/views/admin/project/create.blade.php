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
                <form class="space-y-4" method="POST" action="{{ route('admin.project.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="input-area relative">
                        <label for="project_name" class="form-label">Project Name<span class="text-danger-500">*</span></label>
                        <input type="text" id="project_name" name="project_name" class="form-control" placeholder="Enter Project Name" value="{{ old('project_name') }}">
                        <x-input-error :messages="$errors->get('project_name')" class="mt-2" />
                    </div>
                    <div class="input-area relative">
                        <label for="project_client" class="form-label">Project Client<span class="text-danger-500">*</span></label>
                        <input type="text" id="project_client" name="project_client" class="form-control" placeholder="Enter Project Client" value="{{ old('project_client') }}">
                        <x-input-error :messages="$errors->get('project_client')" class="mt-2" />
                    </div>
                    <div class="input-area relative">
                        <label for="project_language" class="form-label">Project Language<span class="text-danger-500">*</span></label>
                        <input type="text" id="project_language" name="project_language" class="form-control" placeholder="Enter Project Language" value="{{ old('project_language') }}">
                        <x-input-error :messages="$errors->get('project_language')" class="mt-2" />
                    </div>
                    <div class="input-area relative">
                        <label for="project_media" class="form-label">Project Media<span class="text-danger-500">*</span></label>
                        <input type="text" id="project_media" name="project_media" class="form-control" placeholder="Enter Project Media" value="{{ old('project_media') }}">
                        <x-input-error :messages="$errors->get('project_media')" class="mt-2" />
                    </div>
                    <div class="input-area relative">
                        <label for="project_url" class="form-label">Project Url<span class="text-danger-500">*</span></label>
                        <input type="text" id="project_url" name="project_url" class="form-control" placeholder="Enter Project Url" value="{{ old('project_url') }}">
                        <x-input-error :messages="$errors->get('project_url')" class="mt-2" />
                    </div>
                    <div class="input-area">
                        <label for="project_desc" class="form-label">Description<span class="text-danger-500">*</span></label>
                        <textarea id="project_desc" name="project_desc" rows="5" class="form-control" placeholder="Type Here">{{ old('project_desc') }}</textarea>
                        <x-input-error :messages="$errors->get('project_desc')" class="mt-2" />
                    </div>
                    <div class="input-area">
                        <label for="project_picture" class="form-label">Project Picture<span class="text-danger-500">*</span></label>
                        <div class="filePreview">
                            <label>
                                <input type="file" class=" w-full hidden" id="project_picture" name="project_picture">
                                <span class="w-full h-[40px] file-control flex items-center custom-class">
                                    <span class="flex-1 overflow-hidden text-ellipsis whitespace-nowrap">
                                        <span id="placeholder" class="text-slate-400">Choose a file or drop it
                                            here...</span>
                                    </span>
                                    <span
                                        class="file-name flex-none cursor-pointer border-l px-4 border-slate-200 dark:border-slate-700 h-full inline-flex items-center bg-slate-100 dark:bg-slate-900 text-slate-600 dark:text-slate-400 text-sm rounded-tr rounded-br font-normal">Browse</span>
                                </span>
                            </label>
                            <x-input-error :messages="$errors->get('project_picture')" class="mt-2" />
                            <div id="file-preview"></div>
                        </div>
                    </div>
                    <button class="btn inline-flex justify-center btn-dark">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
