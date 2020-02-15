<?php
if (empty($active_sidebar)) {
    $active_sidebar = [];
}
?>
<div class="sidebar">
    <div class="main-menu">
        <div class="scroll">
            <ul class="list-unstyled">
                <li class="{{empty($active_sidebar) ? 'active':''}}">
                    <a href="#dashboard">
                        <i class="flaticon-business-1"></i>
                        <span>داشبورد</span>
                    </a>
                </li>
                <li class="{{in_array('orders',$active_sidebar) ? 'active':''}}">
                    <a href="#orders">
                        <i class="flaticon-shopping-cart"></i>سفارش ها
                    </a>
                </li>
                <li class="{{in_array('customer',$active_sidebar) ? 'active':''}}">
                    <a href="#customer">
                        <i class="flaticon-user-1"></i>مشتری ها
                    </a>
                </li>
                <li class="{{in_array('branches',$active_sidebar) ? 'active':''}}">
                    <a href="#branches">
                        <i class="flaticon-shapes-1"></i>شعب بانک
                    </a>
                </li>
                <li class="{{in_array('cards',$active_sidebar) ? 'active':''}}">
                    <a href="#cards">
                        <i class="far fa-fw fa-credit-card"></i>کارت ها
                    </a>
                </li>
                <li class="{{in_array('printerHouse',$active_sidebar) ? 'active':''}}">
                    <a href="#printers">
                        <i class="flaticon-print"></i>{{__('static.admin.printerHouse')}}
                    </a>
                </li>
                <li class="{{in_array('support',$active_sidebar) ? 'active':''}}">
                    <a href="#support">
                        <i class="flaticon-support"></i> پشتیبانی
                    </a>
                </li>
                <li class="{{in_array('setting',$active_sidebar) ? 'active':''}}">
                    <a href="#setting">
                        <i class="flaticon-settings"></i> تنظیمات
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <div class="sub-menu">
        <div class="scroll">
            <ul class="list-unstyled" data-link="dashboard">
                <li class="{{empty($active_sidebar) ? 'active':''}}">
                    <a href="Dashboard.Default.html">
                        <i class="fas fa-fw fa-television"></i> صفحه اصلی
                    </a>
                </li>
                <li>
                    <a href="Dashboard.Analytics.html">
                        <i class="fas fa-fw fa-chart-line"></i>تجزیه و تحلیل
                    </a>
                </li>
                <li>
                    <a href="Dashboard.Content.html">
                        <i class="fas fa-fw fa-align-left"></i> محتوا
                    </a>
                </li>
            </ul>
            <ul class="list-unstyled" data-link="orders">
                <li>
                    <a href="Apps.Todo.List.html">
                        <i class="fas fa-fw fa-tasks"></i> لیست سفارش ها
                    </a>
                </li>
                <li class="{{in_array('printOrder',$active_sidebar) ? 'active':''}}">
                    <a href="{{route('admin.printOrder.index')}}">
                        <i class="fas fa-fw fa-cart-arrow-down"></i> {{__('static.admin.card.printOrder')}}
                    </a>
                </li>
                <li class="{{in_array('newPrintOrder',$active_sidebar) ? 'active':''}}">
                    <a href="{{route('admin.printOrder.create')}}">
                        <i class="fas fa-fw fa-cart-plus"></i> {{__('static.admin.printOrder.addNew')}}
                    </a>
                </li>
                <li>
                    <a href="Apps.Survey.List.html">
                        <i class="far fa-fw fa-question-circle"></i> آرشیو
                    </a>
                </li>
            </ul>
            <ul class="list-unstyled" data-link="customer">
                <li class="{{in_array('customerList',$active_sidebar) ? 'active':''}}">
                    <a href="{{route('admin.customerList.index')}}">
                        <i class="fas fa-fw fa-users "></i>لیست مشتری ها
                    </a>
                </li>
                <li class="{{in_array('discountCode',$active_sidebar) ? 'active':''}}">
                    <a href="{{route('admin.discountList.index')}}">
                        <i class="fas fa-fw fa-tags "></i>کدهای تخفیف
                    </a>
                </li>
            </ul>
            <ul class="list-unstyled" data-link="cards">
                <li>
                    <a href="Layouts.List.html">
                        <i class="fas fa-fw fa-list"></i> لیست کارت ها
                    </a>
                </li>
                <li class="{{in_array('bodyDesign',$active_sidebar) ? 'active':''}}">
                    <a href="{{route('admin.bodyDesigns.index')}}">
                        <i class="fas fa-fw fa-th-list"></i> لیست طرح ها
                    </a>
                </li>
                <li class="{{in_array('panPool',$active_sidebar) ? 'active':''}}">
                    <a href="{{route('admin.panPool.index')}}">
                        <i class="fas fa-fw fa-database"></i> Pan Pool
                    </a>
                </li>
                <li class="{{in_array('categories',$active_sidebar) ? 'active':''}}">
                    <a href="{{route('admin.categories.index')}}">
                        <i class="fas fa-fw fa-group"></i> {{__('static.admin.card.categories')}}
                    </a>
                </li>

                <li class="{{in_array('tags',$active_sidebar) ? 'active':''}}">
                    <a href="{{route('admin.tags.index')}}">
                        <i class="fas fa-fw fa-group"></i> {{__('static.admin.card.tags')}}
                    </a>
                </li>
            </ul>
            <ul class="list-unstyled" data-link="branches">
                <li class="{{in_array('branchesList',$active_sidebar) ? 'active':''}}">
                    <a href="{{route('admin.branches.index')}}">
                        <i class="fas fa-fw fa-list"></i> لیست شعب
                    </a>
                </li>
                <li class="{{in_array('branchesNew',$active_sidebar) ? 'active':''}}">
                    <a href="{{route('admin.branches.create')}}">
                        <i class="fas fa-fw fa-list"></i> تعریف شعبه جدید
                    </a>
                </li>
            </ul>
            <ul class="list-unstyled" data-link="printers">
                <li class="{{in_array('printerHouseList',$active_sidebar) ? 'active':''}}" >
                    <a href="{{route('admin.printerHouse.index')}}">
                        <i class="fas fa-fw fa-list"></i>{{__('static.admin.printer.printerHouse.list')}}
                    </a>
                </li>
            </ul>

            <ul class="list-unstyled" data-link="support">
                <li class="{{in_array('tickets',$active_sidebar) ? 'active':''}}" >
                    <a href="{{route('admin.tickets.index')}}">
                        <i class="fas fa-fw fa-support"></i>{{__('static.admin.support.tickets')}}
                    </a>
                </li>

                <li class="{{in_array('faq',$active_sidebar) ? 'active':''}}" >
                    <a href="{{route('admin.faq.index')}}">
                        <i class="fas fa-fw fa-question"></i>{{__('static.admin.faq.faq')}}
                    </a>
                </li>


                <li class="{{in_array('smsir',$active_sidebar) ? 'active':''}}" >
                    <a href="{{route('admin.smsir.index')}}">
                        <i class="fas fa-fw fa-address-book"></i>{{__('static.admin.smsir.SMSIR')}}
                    </a>
                </li>

            </ul>


            <ul class="list-unstyled  " data-link="setting">
                <li>
                    <a href="Menu.Subhidden.html">
                        <i class="fas fa-fw fa-file-word"></i>متن کارت ها
                    </a>
                </li>
                <li class="{{in_array('cardCategory',$active_sidebar) ? 'active':''}}">
                    <a href="{{route('admin.cardCategory.index')}}">
                        <i class="fas fa-fw fa-th-list"></i>انواع کارت
                    </a>
                </li>
                <li class="{{in_array('userList',$active_sidebar) ? 'active':''}}">
                    <a href="{{route('admin.userList.index')}}">
                        <i class="fas fa-fw fa-users"></i> لیست کاربران
                    </a>
                </li>
                <li class="{{in_array('permission',$active_sidebar) ? 'active':''}}">
                    <a href="{{route('admin.permissionList.index')}}">
                        <i class="fas fa-fw fa-certificate"></i> دسترسی ها
                    </a>
                </li>
                <li class="{{in_array('group',$active_sidebar) ? 'active':''}}">
                    <a href="{{route('admin.groupList.index')}}">
                        <i class="fas fa-fw fa-dedent"></i> گروه ها
                    </a>
                </li>
                <li class="{{in_array('role',$active_sidebar) ? 'active':''}}">
                    <a href="{{route('admin.roleList.index')}}">
                        <i class="fas fa-fw fa-dedent"></i>نقش ها
                    </a>
                </li>


                <li class="{{in_array('slideShow',$active_sidebar) ? 'active':''}}">
                    <a href="{{route('admin.slider.index')}}">
                        <i class="fas fa-fw fa-dedent"></i>{{__('static.admin.slideShow.slideShow')}}
                    </a>
                </li>
            </ul>

        </div>
    </div>
</div>
