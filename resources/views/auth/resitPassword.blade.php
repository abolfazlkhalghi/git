@extends('auth.master')

@section('content')

    <form action="" method="post">
        <div class="form-group first">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>

        <div class="form-group last mb-4">
            <label for="password">phone</label>
            <input type="text" class="form-control" id="phone" name="phone">
        </div>

        <input type="submit" value="restPassword" class="btn btn-pill text-white btn-block btn-primary">




    </form>

@endsection
