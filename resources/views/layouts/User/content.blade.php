@include('layouts.User.sidebar')
<div class="left_panel col-md-8 col-lg-9">
    <span class="right_panel_titr">افزودن پروژه جدید</span>
    <div class="left_panel1 order-0">
        <form class="contact_form row">
            <div class="form-group col-md-6">
                <input class="form-control form-control-lg" id="first_name_id" type="text" placeholder="عنوان پروژه">
            </div>
            <div class="form-group col-md-6">
                <input class="form-control form-control-lg" id="mobile_id" type="text" placeholder="شماره موبایل">
            </div>
            <div class="form-group col-md-6">
                <select class="form-control" id="categorylist">
                    <option>نام دسته</option>
                    <option>نام دسته</option>
                    <option>نام دسته</option>
                    <option>نام دسته</option>
                    <option>نام دسته</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <input class="form-control form-control-lg" id="mony_id" type="text" placeholder="مبلغ مورد نیاز">
            </div>
            <div class="form-group col-md-6">
                <select class="form-control" id="categorysublist">
                    <option>نام زیر دسته</option>
                    <option>نام زیر دسته</option>
                    <option>نام زیر دسته</option>
                    <option>نام زیر دسته</option>
                    <option>نام زیر دسته</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <select class="form-control" id="percentcat">
                    <option>درصد مشارکت آستان قدس رضوی</option>
                    <option>درصد مشارکت آستان قدس رضوی</option>
                    <option>درصد مشارکت آستان قدس رضوی</option>
                    <option>درصد مشارکت آستان قدس رضوی</option>
                    <option>درصد مشارکت آستان قدس رضوی</option>
                </select>
            </div>
            <div class="form-group col-12">
                <textarea class="form-control" id="text_id" rows="5" placeholder="پیام خود را اینجا بنویسید"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">ارسال پیام</button>
        </form>
    </div>
    <div class="left_panel2 order-1">

    </div>
</div>
