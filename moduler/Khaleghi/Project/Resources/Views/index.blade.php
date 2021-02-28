@extends('Dashboard::master')

@section('breadcrumb')
    <li><a href="{{url('project') }}" title="پروژه ها ">پروژه ها</a></li>
@endsection
@section('content')
    <div class="row no-gutters  ">
        <div>
            <input type="button" value="">
        </div>
        <div class="col-12 margin-left-10 margin-bottom-15 border-radius-3">


            <div class="tab__box">
                <div class="tab__items">
                    <a class="tab__item is-active" href="{{url('project') }}">پروژه ها</a>
                    <a class="tab__item " class="btn all-confirm-btn" href="{{route('project.create') }}">ایجادپروژه جدید</a>
                </div>
            </div>
            <div class="table__box">
                <table class="table">
                    <thead role="rowgroup">
                    <tr role="row" class="title-row">
                        <th>شناسه</th>
                        <th> نام پروژه </th>
                        <th>نام مستعار  </th>
                        <td>تصویر</td>
                        <th> توضیحات </th>
                        <th> سرمایه  </th>
                        <th> مبلغ پروژه </th>
                        <th> تعداد سهام </th>
                        <th> مشارکت آستان قدس </th>
                        <th> فاز هایی پروژه   </th>
                        <th> نویسنده </th>
                        <th>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($projects as $project)
                            <td>{{$project->id}}</td>
                            <td>{{$project->name}}</td>
                            <td>{{$project->slug}}</td>
                            <td>{{-----}}</td>
                            <td>{{$project->dictionary}}</td>
                            <td>{{$project->capital_required}} </td>
                            <td>{{$project->amountMain}}</td>
                            <td>{{$project->position}}</td>
                            <td>{{$project->AstanQuds}}</td>
                            <td>{{$project->Phase}}</td>
                            <td>{{$project->author}}</td>
                            <td>
                                <a href="" onclick="event.preventDefault(); deleteItem(event, '{{ route('project.destroy', $project->id) }}')" class="item-delete mlg-15" title="حذف"></a>
                                <a href="" target="_blank" class="item-eye mlg-15" title="مشاهده"></a>
                                <a href="{{ route('project.edit',  $project->id) }}" class="item-edit " title="ویرایش"></a>
                            </td>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/jquery.toast.min.css">
@endsection

@section('js')
    <script src="/js/jquery.toast.min.js"></script>
    <script>
        function deleteItem(event, route) {
           if(confirm('آیا از حذف این آیتم اطمینان دارید؟')){
                $.post(route, { _method: "delete", _token: "{{ csrf_token() }}" })

                    .done(function (response) {
                        event.target.closest('tr').remove();
                        $.toast({
                            heading: 'عملیات موفق',
                            text: response.message,
                            showHideTransition: 'slide',
                            icon: 'success'
                        })
                    })

                    .fail(function (response) {

                })
           }
        }
    </script>
@endsection
