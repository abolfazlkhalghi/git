@extends('Dashboard::master')
@section('content')
<p class="box__title">ایجاد پروژه جدید</p>
<form action="{{ Route('project.store') }}" method="post" class="padding-30">
    @csrf
    {{ method_field('POST') }}
    <input type="text" name="title" required placeholder=" نام پروژه   " class="text">
    <input type="text" name="slug" required placeholder="نام مستعار پروژه " class="text">
    <p class="box__title margin-bottom-15">انتخاب وضعیت</p>
    {{-- <select name="parent_id" id="parent_id">
        <option value="">ندارد</option>
        @foreach($project as $category)
        <option value="{{ $category->id }}">{{ $category->title }}</option>
        @endforeach
    </select> --}}
    <input type="text" name="dictionary" required placeholder="توضیحات پروژه " class="text">
    <input type="text" name="capital_required" required placeholder="سرمایه لازم پروژه " class="text">
    <input type="text" name="amountMain" required placeholder="مبلغ اولیه  پروژه " class="text">
    <input type="text" name="AstanQuds" required placeholder=" آستان قدس در  پروژه " class="text">
    <input type="text" name="position" required placeholder="وضعیت   پروژه " class="text">
    <input type="text" name="Phase" required placeholder="فاز های  پروژه " class="text">
    <input type="text" name="author" required placeholder="نویسنده  پروژه " class="text">

    <button class="btn btn-webamooz_net">اضافه کردن</button>
</form>
@endsection
