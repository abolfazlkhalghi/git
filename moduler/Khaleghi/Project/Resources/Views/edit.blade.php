@extends('Dashboard::master')
@section('breadcrumb')
    <li><a href="{{ url('project') }}" title="دوره ها">پروژه ها</a></li>
    <li><a href="#" title="ویرایش پروژه">ویرایش پروژه</a></li>
@endsection
@section('content')
    <div class="row no-gutters  ">
        <div class="col-12 bg-white">
            <p class="box__title">ویرایش پروژه</p>
            <form action="{{ route('project.update', $project->id) }}" class="padding-30" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('patch')
                <x-input name="name" value="{{ $project->name }}" placeholder="عنوان پروژه" type="text" required />
                <x-input type="text" name="slug" value="{{ $project->slug }}" placeholder="نام انگلیسی پروژه"
                    class="text-left" required />


                <div class="d-flex multi-text">
                    <x-input type="text" class="text-left mlg-15 w-100" name="prioity" value="{{ $project->prioity }}"
                        placeholder="ردیف پروژه" />
                    <x-input type="text" placeholder="مبلغ پروژه" name="price" value="{{ $project->price }}"
                        class="text-left w-100" required />
                    <x-input type="number" placeholder="درصد مشارکت" name="percent" value="{{ $project->percent }}"
                        class="text-left w-100" required />
                    <x-input type="number" placeholder="درصد آستان" name="AstanQuds" value="{{ $project->AstanQuds }}"
                        class="text-left w-100" required />
                    <x-input type="number" placeholder="تعداد مشارکت کنندگان" name="Participant"
                        value="{{ $project->Participant }}" class="text-left w-100" required />

                </div>

                <x-tag-select name="tags" value="{{ $project->tags }}" />

                <x-select name="status" required>
                    <option value="">وضعیت پروژه</option>
                    @foreach (\Khaleghi\Project\Models\Project::$statuses as $status)
                        <option value="{{ $status }}" @if ($status == $project->status) selected @endif>@lang($status)</option>
                    @endforeach
                </x-select>

                <x-select name="category_id" required>
                    <option value="">دسته بندی</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if ($category->id == $project->catyegory_id) selected @endif>
                            {{ $category->title }}</option>
                    @endforeach
                </x-select>

                <x-file placeholder="آپلود بنر " name="image" :value="$project->banner" />
                <x-textarea placeholder="توضیحات پروژه" name="body" value="{{ $project->body }}" />
                <br>
                <button class=" btn btn-webamooz_net">ویرایش پروژه</button>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script src="/panel/js/tagsInput.js?v=12"></script>
@endsection
