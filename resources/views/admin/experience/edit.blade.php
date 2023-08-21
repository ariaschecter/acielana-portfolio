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
                <form class="space-y-4" method="POST" action="{{ route('admin.experience.update', $experience->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="input-area relative">
                        <label for="experience_name" class="form-label">Experience Name<span class="text-danger-500">*</span></label>
                        <input type="text" id="experience_name" name="experience_name" class="form-control" placeholder="Enter Experience Name" value="{{ $experience->experience_name }}">
                        <x-input-error :messages="$errors->get('experience_name')" class="mt-2" />
                    </div>
                    <div class="input-area relative">
                        <label for="experience_institution" class="form-label">Institution<span class="text-danger-500">*</span></label>
                        <input type="text" id="experience_institution" name="experience_institution" class="form-control" placeholder="Enter Institution" value="{{ $experience->experience_institution }}">
                        <x-input-error :messages="$errors->get('experience_institution')" class="mt-2" />
                    </div>
                    <div>
                        <label for="experience_start" class=" form-label">Date Start<span class="text-danger-500">*</span></label>
                        <input class="form-control py-2" id="experience_start" name="experience_start" value="{{ $experience->experience_start }}" type="date">
                        <x-input-error :messages="$errors->get('experience_start')" class="mt-2" />
                      </div>
                    <div>
                        <label for="experience_end" class=" form-label">Date End</label>
                        <input class="form-control py-2" id="experience_end" name="experience_end" value="{{ $experience->experience_end }}" type="date">
                        <x-input-error :messages="$errors->get('experience_end')" class="mt-2" />
                      </div>
                    <div class="input-area">
                        <label for="experience_desc" class="form-label">Description<span class="text-danger-500">*</span></label>
                        <textarea id="experience_desc" name="experience_desc" rows="5" class="form-control" placeholder="Type Here">{{ $experience->experience_desc }}</textarea>
                      </div>
                      <button class="btn inline-flex justify-center btn-dark">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
