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
                        <label for="skill_name" class="form-label">Skill Name<span
                                class="text-danger-500">*</span></label>
                        <input type="text" id="skill_name" name="skill_name" class="form-control"
                            placeholder="Enter Skill Name" value="{{ $skill->skill_name }}" readonly>
                        <x-input-error :messages="$errors->get('skill_name')" class="mt-2" />
                    </div>
                    <div class="input-area">
                        <label for="skill_desc" class="form-label">Description<span class="text-danger-500">*</span></label>
                        <textarea id="skill_desc" name="skill_desc" rows="5" class="form-control" placeholder="Type Here" readonly>{{ $skill->skill_desc }}</textarea>
                        <x-input-error :messages="$errors->get('skill_desc')" class="mt-2" />
                    </div>
                    <div class="input-area">
                        <label for="skill_desc" class="form-label">Skill SVG<span class="text-danger-500">*</span></label>
                        <div class="card">
                            <div class="card-body flex flex-col p-6">
                                <div class="card-text h-full ">
                                    <div class="grid xl:grid-cols-6 lg:grid-cols-3 md:grid-cols-3 grid-cols-1 gap-5">
                                        <img src="{{ Storage::url($skill->skill_svg) }}"
                                            class="rounded-md border-2 border-slate-300 max-w-full w-full block"
                                            alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
