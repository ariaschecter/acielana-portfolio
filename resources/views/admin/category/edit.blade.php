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
                <form class="space-y-4" method="POST" action="{{ route('admin.category.update', $category->id) }}">
                    @csrf
                    <div class="input-area relative">
                        <label for="category_name" class="form-label">Category Name<span class="text-danger-500">*</span></label>
                        <input type="text" id="category_name" name="category_name" class="form-control" placeholder="Enter category Name" value="{{ $category->category_name }}">
                        <x-input-error :messages="$errors->get('category_name')" class="mt-2" />
                    </div>
                    <button class="btn inline-flex justify-center btn-dark">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
