@extends('Dashboard::master')
@section('breadcrumb')
    <li><a href="{{ url('Project') }}" title="دوره ها">پروژه ها</a></li>
    <li><a href="#" title="ویرایش پروژه">ایجاد پروژه</a></li>
@endsection
@section('content')
    <div class="row no-gutters  ">
        <div class="col-12 bg-white">
            <p class="box__title">ایجاد پروژه</p>
            <form action="{{ route('project.store') }}" class="padding-30" method="post" enctype="multipart/form-data">
                @csrf
                <x-input name="name" placeholder="عنوان پروژه" type="text" required />
                <x-input type="text" name="slug" placeholder="نام انگلیسی پروژه" class="text-left" required />


                <div class="d-flex multi-text">
                    <x-input type="text" class="text-left mlg-15 w-100" name="prioity" placeholder="ردیف پروژه" />
                    <x-input type="text" placeholder="مبلغ پروژه" name="price" class="text-left w-100" required />
                    <x-input type="number" placeholder="درصد مشارکت" name="percent" class="text-left w-100" required />
                    <x-input type="number" placeholder="درصد آستان" name="AstanQuds" class="text-left w-100" required />
                    <x-input type="number" placeholder="تعداد مشارکت کنندگان" name="Participant" class="text-left w-100"
                        required />

                </div>
                {{-- <x-select name="teacher_id" required>
                    <option value="">انتخاب نویسنده پروژه</option>
                    @foreach ($authers as $auther)
                        <option value="{{ $auther->id }}" @if ($auther->id == old('teacher_id')) selected @endif>{{ $auther->name }}</option>
                    @endforeach
                </x-select> --}}

                <x-tag-select name="tags" />

                <x-select name="status" required>
                    <option value="">وضعیت پروژه</option>
                    @foreach (\Khaleghi\Project\Models\Project::$statuses as $status)
                        <option value="{{ $status }}" @if ($status == old('status')) selected @endif>@lang($status)</option>
                    @endforeach
                </x-select>

                <x-select name="category_id" required>
                    <option value="">دسته بندی</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if ($category->id == old('category_id')) selected @endif>
                            {{ $category->title }}</option>
                    @endforeach
                </x-select>

                <x-file placeholder="آپلود بنر " name="image" required />
                <x-textarea placeholder="توضیحات پروژه" name="body" />
                <br>
                <button class="btn btn-webamooz_net">ایجاد پروژه</button>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script src="/panel/js/tagsInput.js?v=12"></script>
@endsection
