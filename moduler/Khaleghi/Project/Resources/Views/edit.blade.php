@extends('Dashboard::master')
@section('content')
    <div class="row no-gutters  ">
        <div class="col-6 bg-white">
        <p class="box__title">بروزرسانی  پروژه</p>
        <form action="{{ route('project.update', $project->id) }}" method="post" class="padding-30">
            @csrf
            @method('patch')
            <input type="text" name="name" required placeholder="نام  بندی" class="text" value="{{ $project->name}}">
            <input type="text" name="slug" required placeholder="نام انگلیسی دسته بندی" class="text" value="{{ $project->slug}}">
            <button class="btn btn-webamooz_net">بروزرسانی</button>
            <a href="{{url('project')}}">برگشت</a>
        </form>

        </div>
    </div>
@endsection
