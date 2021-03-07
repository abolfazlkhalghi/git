@extends('Dashboard::master')

@section('breadcrumb')
    <li><a href="{{ route('project.index') }}" title="پروژه ها ">پروژه ها</a></li>
@endsection
@section('content')
    <div class="tab__box">
        <div class="tab__items">
            <a class="tab__item is-active" href="{{ url('project') }}">پروژه ها</a>
            <a class="tab__item " class="btn all-confirm-btn" href="{{ route('project.create') }}">ایجادپروژه
                جدید</a>
        </div>
    </div>
    <div class="row no-gutters  ">
        <div class="col-12 margin-left-10 margin-bottom-15 border-radius-3">
            <p class="box__title">پروژه ها</p>
            <div class="table__box">
                <table class="table">
                    <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>عکس </th>
                            <th>شناسه</th>
                            <th>نام پروژه</th>
                            <th> وضعیت </th>
                            <th> مبلغ پروزه </th>
                            <th> درصد مشارکت </th>
                            <th> تعداد سهام </th>
                            <th> مشارکت آستان قدس </th>
                            <th> نویسنده </th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr role="row" class="">
                                <td width="100"><img src="{{ $project->banner }}" alt="" width="100"></td>
                                {{-- ->thumb --}}
                                <td><a href="">{{ $project->id }}</a></td>
                                <td><a href="">{{ $project->name }}</a></td>
                                <td>@lang($project->status)</td>
                                <td>{{ $project->price }} </td>
                                <td>{{ $project->percent }}%</td>
                                <td>{{ $project->Participant }}</td>
                                <td>{{ $project->AstanQuds }}%</td>
                                <td>{{ $project->auther->name }}</td>
                                <td>
                                    <a href=""
                                        onclick="event.preventDefault(); deleteItem(event, '{{ route('project.destroy', $project->id) }}')"
                                        class="item-delete mlg-15" title="حذف"></a>
                                    <a href="" target="_blank" class="item-eye mlg-15" title="مشاهده"></a>
                                    <a href="{{ route('project.edit', $project->id) }}" class="item-edit "
                                        title="ویرایش"></a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="/panel/css/jquery.toast.min.css">
@endsection

@section('js')
    <script src="/panel/js/jquery.toast.min.js"></script>
    <script>
        function deleteItem(event, route) {
            if (confirm('آیا از حذف این آیتم اطمینان دارید؟')) {
                $.post(route, {
                        _method: "delete",
                        _token: "{{ csrf_token() }}"
                    })

                    .done(function(response) {
                        event.target.closest('tr').remove();
                        $.toast({
                            heading: 'عملیات موفق',
                            text: response.message,
                            showHideTransition: 'slide',
                            icon: 'success'
                        })
                    })

                    .fail(function(response) {

                    })
            }
        }

    </script>
@endsection
