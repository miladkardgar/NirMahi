@extends('panel.adminLayout.base')
@section('css')
    <link rel="stylesheet" href="{{asset('/css/vendor/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/vendor/datatables.responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/vendor/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/vendor/select2-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/vendor/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('/css/vendor/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/vendor/bootstrap-stars.css')}}">
    <link rel="stylesheet" href="{{asset('/css/vendor/nouislider.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/vendor/sweetalert2.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/vendor/bootstrap-datepicker3.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/Mh1PersianDatePicker.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/input.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap_select/css/bootstrap-select.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('/js/vendor/tempusdominus/tempusdominus-bootstrap-4.css')}}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

@endsection
@yield('css2')
@section('body')
    <body id="app-container" class="menu-default">
    @include('adminLayout.navbar')
    @include('adminLayout.sidebar')
    <main>
        @yield('main')
    </main>

    <div id="general-modal" class="modal fade modal-right" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">جدید اضافه کن</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <form>
                        <div class="form-group">
                            <label>عنوان</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>جزئیات</label>
                            <textarea placeholder="" class="form-control" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label>دسته بندی</label>
                            <select class="form-control">
                                <option label="&nbsp;">&nbsp;</option>
                                <option value="Flexbox">کتاب</option>
                                <option value="Sass">روزنامه</option>
                                <option value="React">متون</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>وضعیت</label>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">تکمیل شده</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">لغو</button>
                    <button type="button" class="btn btn-primary">ارسال</button>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection


@section('js')
    <script src="{{asset('/js/vendor/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('/js/vendor/chartjs-plugin-datalabels.js')}}"></script>
    <script src="{{asset('/js/vendor/moment.min.js')}}"></script>
    <script src="{{asset('/js/vendor/datatables.min.js')}}"></script>
    <script src="{{asset('/js/vendor/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('/js/vendor/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/js/vendor/progressbar.min.js')}}"></script>
    <script src="{{asset('/js/vendor/jquery.barrating.min.js')}}"></script>
    <script src="{{asset('/js/vendor/select2.full.js')}}"></script>
    <script src="{{asset('/js/vendor/nouislider.min.js')}}"></script>
    <script src="{{asset('/js/vendor/Sortable.js')}}"></script>
    <script src="{{asset('/js/vendor/sweetalert2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/Mh1PersianDatePicker.js')}}"></script>
    <script src="{{asset('/js/custom.js')}}"></script>
    <script src="{{asset('/js/AlertDialog.js')}}"></script>
    <script src="{{asset('/js/bootstrap_select/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap_select/js/i18n/defaults-fa_IR.min.js')}}"></script>
    <script src="{{asset('/js/codeGenerator/txtGenerator.js')}}"></script>
    <script src="{{asset('/js/vendor/jquery.validate.js')}}"></script>
    <script src="{{asset('/js/vendor/form/validator.js')}}"></script>
    <script src="{{asset('/js/vendor/form/localization/messages_fa.js')}}"></script>
    <script src="{{asset('/js/vendor/tempusdominus/moment.min.js')}}"></script>
    <script src="{{asset('/js/vendor/tempusdominus/fa.js')}}"></script>
    <script src="{{asset('/js/vendor/tempusdominus/popper.min.js')}}"></script>
    <script src="{{asset('/js/vendor/tempusdominus/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script src="{{asset('/js/vendor/tempusdominus/fa.js')}}"></script>
    <script src="{{asset('/js/vendor/tempusdominus/fa.js')}}"></script>
    <script src="{{asset('/js/vendor/tempusdominus/fa.js')}}"></script>

    <script>
        @if(!$errors->isEmpty())
        Alert('{{__('static.admin.errorAlert')}}', 'primary');
        @endif
        @if(isset($alertDialog))
        Alert('{{$alertDialog}}', 'success');
        @endif
        @if($message = Session::get('message'))
        Alert('{{$message}}', 'success');
        @endif
        @if(session()->get('type'))
        Alert('{{session()->get('messageRes')}}', 'success');
        @endif
        function toggle(source) {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i] != source)
                    checkboxes[i].checked = source.checked;
            }
        }
    </script>

    @yield('js2')



@endsection
