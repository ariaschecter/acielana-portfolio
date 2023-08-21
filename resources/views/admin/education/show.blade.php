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
                        <label for="education_name" class="form-label">Education Name<span class="text-danger-500">*</span></label>
                        <input type="text" id="education_name" name="education_name" class="form-control" placeholder="Enter Education Name" value="{{ $education->education_name }}" readonly>
                        <x-input-error :messages="$errors->get('education_name')" class="mt-2" />
                    </div>
                    <div class="input-area relative">
                        <label for="education_institution" class="form-label">Institution<span class="text-danger-500">*</span></label>
                        <input type="text" id="education_institution" name="education_institution" class="form-control" placeholder="Enter Institution" value="{{ $education->education_institution }}" readonly>
                        <x-input-error :messages="$errors->get('education_institution')" class="mt-2" />
                    </div>
                    <div>
                        <label for="education_start" class=" form-label">Date Start<span class="text-danger-500">*</span></label>
                        <input class="form-control py-2" id="education_start" name="education_start" value="{{ $education->education_start }}" type="date" readonly>
                        <x-input-error :messages="$errors->get('education_start')" class="mt-2" />
                      </div>
                    <div>
                        <label for="education_end" class=" form-label">Date End</label>
                        <input class="form-control py-2" id="education_end" name="education_end" value="{{ $education->education_end }}" type="date" readonly>
                        <x-input-error :messages="$errors->get('education_end')" class="mt-2" />
                      </div>
                    <div class="input-area">
                        <label for="education_desc" class="form-label">Description<span class="text-danger-500">*</span></label>
                        <textarea id="education_desc" name="education_desc" rows="5" class="form-control" placeholder="Type Here" readonly>{{ $education->education_desc }}</textarea>
                      </div>
                </form>
            </div>
        </div>
    </div>
@endsection
