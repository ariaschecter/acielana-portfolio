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
                        <label for="project_name" class="form-label">Project Name<span
                                class="text-danger-500">*</span></label>
                        <input type="text" id="project_name" name="project_name" class="form-control"
                            placeholder="Enter Project Name" value="{{ $project->project_name }}" readonly>
                        <x-input-error :messages="$errors->get('project_name')" class="mt-2" />
                    </div>
                    <div class="input-area relative">
                        <label for="project_client" class="form-label">Project Client<span
                                class="text-danger-500">*</span></label>
                        <input type="text" id="project_client" name="project_client" class="form-control"
                            placeholder="Enter Project Client" value="{{ $project->project_client }}" readonly>
                        <x-input-error :messages="$errors->get('project_client')" class="mt-2" />
                    </div>
                    <div class="input-area relative">
                        <label for="project_date" class="form-label">Project Date<span
                                class="text-danger-500">*</span></label>
                        <input class="form-control py-2" id="education_end" name="education_end"
                            value="{{ $project->project_date }}" type="date" readonly>
                        <x-input-error :messages="$errors->get('project_date')" class="mt-2" />
                    </div>
                    <div class="input-area relative">
                        <label for="project_category" class="form-label">Project Category<span
                                class="text-danger-500">*</span></label>
                        <input type="text" id="project_category" name="project_category" class="form-control"
                            placeholder="Enter Project Category" value="{{ $project->project_category }}" readonly>
                        <x-input-error :messages="$errors->get('project_category')" class="mt-2" />
                    </div>
                    <div class="input-area relative">
                        <label for="project_url" class="form-label">Project Url<span
                                class="text-danger-500">*</span></label>
                        <input type="text" id="project_url" name="project_url" class="form-control"
                            placeholder="Enter Project Url" value="{{ $project->project_url }}" readonly>
                        <x-input-error :messages="$errors->get('project_url')" class="mt-2" />
                    </div>
                    <div class="input-area">
                        <label for="project_desc" class="form-label">Description<span
                                class="text-danger-500">*</span></label>
                        <textarea id="project_desc" name="project_desc" rows="5" class="form-control my-editor" placeholder="Type Here"
                            readonly>{!! $project->project_desc !!}</textarea>
                        <x-input-error :messages="$errors->get('project_desc')" class="mt-2" />
                    </div>
                    <div class="input-area">
                        <label for="skill_desc" class="form-label">Project Picture<span
                                class="text-danger-500">*</span></label>
                        <div class="card">
                            <div class="card-body flex flex-col p-6">
                                <div class="card-text h-full ">
                                    <img src="{{ Storage::url($project->project_picture) }}" class="rounded-md"
                                        alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
