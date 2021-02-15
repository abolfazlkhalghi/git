<p class="box__title"></p>
<form action="{{ route('categories.store') }}" method="post" class="padding-30">
    @csrf
    <input type="text" name="title" required placeholder="نام " class="text">
    <input type="email" name="emile" required placeholder="ایمیل" class="text">
    <input type="password" name="password" required placeholder="پسورد" class="text">
    <input type="file" name="avatar" required placeholder="تصویر پروفایل" class="text">
    <p class="box__title margin-bottom-15">وضعیت</p>
    <select name="status" id="status">

        @foreach($Users as $User)
        <option value="{{ $user->id }}">{{ $user->status }}</option>
        @endforeach
    </select>
    <p class="box__title margin-bottom-15">وضعیت</p>
    <select name="role" id="role">
        @foreach($Users as $User)
            <option value="{{ $user->id }}">{{ $user->role }}</option>
        @endforeach
    </select>
    <button class="btn btn-webamooz_net">اضافه کردن</button>
</form>
