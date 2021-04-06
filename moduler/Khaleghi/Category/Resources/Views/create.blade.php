
<p class="box__title">ایجاد دسته  جدید</p>
<form action="{{ Route('categories.store') }}" method="post" class="padding-30" enctype="multipart/form-data">
    @csrf
    {{ method_field('POST') }}
    <input type="text" name="title" required placeholder=" نام پروژه   " class="text">
    <input type="text" name="slug" required placeholder="نام مستعار پروژه " class="text">
    <p class="box__title margin-bottom-15">انتخاب وضعیت</p>
    <select name="parent_id" id="parent_id">
        <option value="">ندارد</option>
        @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->title }}</option>
        @endforeach
    </select>
    

    <button class="btn btn-webamooz_net">اضافه کردن</button>
</form>
