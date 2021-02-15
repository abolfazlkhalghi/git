@extends('Dashboard::master')

@section('breadcrumb')
    <li><a href="{{route('categories.index')}}" title="دسته بندی ها "> کاربران</a></li>
@endsection
@section('content')
    <div class="row no-gutters  ">
        <div class="col-12 margin-left-10 margin-bottom-15 border-radius-3">
            <p class="box__title"> کاربران</p>
            <div class="table__box">
                <table class="table">
                    <thead role="rowgroup">
                    <tr role="row" class="title-row">
                        <td>ردیف</td>
                        <th>شناسه</th>
                        <th>نام </th>
                        <th> ایمیل</th>
                        <th>نقش</th>
                        <th>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr role="row" class="">
                            <td> {{$loop->index +1}}</td>
                            <td><a href="">{{ $user->id }}</a></td>
                            <td><a href="">{{ $user->name }}</a></td>
                            <td>{{ $user->email }}</td>
                            <td>-</td>
                            <td>
                                <a href="" onclick="event.preventDefault(); deleteItem(event, '{{ route('categories.destroy', $user->id) }}')" class="item-delete mlg-15" title="حذف"></a>
                                
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
