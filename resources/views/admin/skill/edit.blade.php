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
                <form class="space-y-4" method="POST" action="{{ route('admin.skill.update', $skill->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="input-area relative">
                        <label for="skill_name" class="form-label">Skill Name<span
                                class="text-danger-500">*</span></label>
                        <input type="text" id="skill_name" name="skill_name" class="form-control"
                            placeholder="Enter Skill Name" value="{{ $skill->skill_name }}">
                        <x-input-error :messages="$errors->get('skill_name')" class="mt-2" />
                    </div>
                    <div class="input-area">
                        <label for="skill_desc" class="form-label">Description<span class="text-danger-500">*</span></label>
                        <textarea id="skill_desc" name="skill_desc" rows="5" class="form-control my-editor" placeholder="Type Here">{!! $skill->skill_desc !!}</textarea>
                        <x-input-error :messages="$errors->get('skill_desc')" class="mt-2" />
                    </div>
                    <div class="input-area">
                        <label for="skill_picture" class="form-label">Skill Picture</label>
                        <div class="filePreview">
                            <label>
                                <input type="file" class=" w-full hidden" id="skill_picture" name="skill_picture">
                                <span class="w-full h-[40px] file-control flex items-center custom-class">
                                    <span class="flex-1 overflow-hidden text-ellipsis whitespace-nowrap">
                                        <span id="placeholder" class="text-slate-400">Choose a file or drop it
                                            here...</span>
                                    </span>
                                    <span
                                        class="file-name flex-none cursor-pointer border-l px-4 border-slate-200 dark:border-slate-700 h-full inline-flex items-center bg-slate-100 dark:bg-slate-900 text-slate-600 dark:text-slate-400 text-sm rounded-tr rounded-br font-normal">Browse</span>
                                </span>
                            </label>
                            <x-input-error :messages="$errors->get('skill_picture')" class="mt-2" />
                            <div id="file-preview"></div>
                        </div>
                    </div>
                    <button class="btn inline-flex justify-center btn-dark">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
