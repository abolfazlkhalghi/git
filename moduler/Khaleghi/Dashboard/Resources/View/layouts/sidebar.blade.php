<div class="sidebar__nav border-top border-left  ">
    <span class="bars d-none padding-0-18"></span>
    <a class="header__logo  d-none" href="https://webamooz.net"></a>
    <div class="profile__info border cursor-pointer text-center">
        <div class="avatar__img"><img src="/panel/img/pro.jpg" class="avatar___img">
            <input type="file" accept="image/*" class="hidden avatar-img__input">
            <div class="v-dialog__container" style="display: block;"></div>
            <div class="box__camera default__avatar"></div>
        </div>
        <span class="profile__name">کاربر : ابوالفضل خالقی</span>
    </div>

    <ul class="">
<li class="item-li Home"><a href="/">


    <i class="fa fa-home" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
      </svg></i>
      ورود به سایت </a>

</li>
               @foreach(config('sidebar.items') as $sidebarItem)

                    <li class="item-li {{$sidebarItem["icon"]}}
                    @if($sidebarItem['url']==request()->url()) is-active @endif">
                        <a href="{{$sidebarItem['url'] }}">
                        {{$sidebarItem['title']}}</a></li>
                    @endforeach



    </ul>

</div>


{{--<li class="item-li i-courses "><a href="courses.html">پروژه ها</a></li>--}}
{{--<li class="item-li i-users"><a href="users.html"> کاربران</a></li>--}}
{{--<li class="item-li i-categories"><a href="categories.html">دسته بندی ها</a></li>--}}
{{--<li class="item-li i-slideshow"><a href="slideshow.html">اسلایدشو</a></li>--}}
{{--<li class="item-li i-banners"><a href="banners.html">بنر ها</a></li>--}}
{{--<li class="item-li i-articles"><a href="articles.html">مقالات</a></li>--}}
{{--<li class="item-li i-ads"><a href="ads.html">تبلیغات</a></li>--}}
{{--<li class="item-li i-comments"><a href="comments.html"> نظرات</a></li>--}}
{{--<li class="item-li i-tickets"><a href="tickets.html"> تیکت ها</a></li>--}}
{{--<li class="item-li i-discounts"><a href="discounts.html">تخفیف ها</a></li>--}}
{{--<li class="item-li i-transactions"><a href="transactions.html">تراکنش ها</a></li>--}}
{{--<li class="item-li i-checkouts"><a href="checkouts.html">تسویه حساب ها</a></li>--}}
{{--<li class="item-li i-checkout__request "><a href="checkout-request.html">درخواست تسویه </a></li>--}}
{{--<li class="item-li i-my__purchases"><a href="mypurchases.html">خرید های من</a></li>--}}
{{--<li class="item-li i-my__peyments"><a href="mypeyments.html">پرداخت های من</a></li>--}}
{{--<li class="item-li i-notification__management"><a href="notification-management.html">مدیریت اطلاع رسانی</a>--}}
{{--</li>--}}
{{--<li class="item-li i-user__inforamtion"><a href="user-information.html">اطلاعات کاربری</a></li>--}}
