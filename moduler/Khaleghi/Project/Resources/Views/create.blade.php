@extends('Dashboard::master')
@section('content')
    <div class="main-content padding-0">
        <p class="box__title">ایجاد پروژه جدید</p>
        <div class="row no-gutters bg-white">
            <div class="col-12">
                <form action="{{ route('project.store') }}" method="POST" class="padding-30">
                    @csrf
                    <input type="text" class="text" placeholder="عنوان پروژه"name="">
                    <input type="text" class="text text-left " placeholder="نام مستعار پروژه"name="">

                    <div class="d-flex multi-text">
                        <input type="text" placeholder="مبلغ پروژه" class="text-left text mlg-15"name="">
                        <input type="text" placeholder="تعدادمشارکت کننده پروژه" class="text-left text mlg-15"name="">
                        <input type="text" placeholder="درصد مشارکت هر مشارکت کننده" class="text-left text mlg-15"name="" value="">
                    </div>

                    <select name="">
                        <option value="0">وضعیت پروژه</option>
                        <option value="1">بزوردی فاز بعدی</option>
                        <option value="2">تکمیل</option>
                        <option value="3">قفل شده</option>
                    </select><div class="dropdown-select wide" tabindex="0"><span class="current"name="">وضعیت دوره</span><div class="list"><div class="dd-search"><input id="txtSearchValue" autocomplete="off" onkeyup="filter()" class="dd-searchbox" type="text"></div><ul><li class="option selected" data-value="0" data-display-text="">وضعیت دوره</li><li class="option " data-value="1" data-display-text="">درحال برگزاری</li><li class="option " data-value="2" data-display-text="">تکمیل</li><li class="option " data-value="3" data-display-text="">قفل شده</li></ul></div></div>

                    <div class="file-upload">
                        <div class="i-file-upload">
                            <span>آپلود تصویر پروژه</span>
                            <input type="file" class="file-upload" id="files" name="files">
                        </div>
                        <span class="filesize"></span>
                        <span class="selectedFiles">فایلی انتخاب نشده است</span>
                    </div>
                    <ul class="tags">
                        <li class="tagAdd taglist">
                            <input type="text" id="search-field" placeholder="برچسب" name="" >
                        </li>
                    </ul>
                    <textarea placeholder="توضیحات پروژه" class="text h  my-editor" name="" id="editor" ></textarea>

                    <!-- <textarea id="my-editor" name="content" class="form-control">{!! old('content', 'test editor content') !!}</textarea> -->

                    <button class="btn btn-webamooz_net" type="submit">اضافه کردن</button>
                </form>
            </div>
        </div>
    </div>


</form>
@endsection
