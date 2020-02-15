@extends('admin.user.userList.frame')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="mb-3">
                <h1>{{__('static.admin.users.list').' '.__('static.admin.users.users')}}</h1>
                <div class="float-sm-left text-zero">
                    <a href="{{route('admin.addUserUI')}}">
                        <button type="button"
                                class="btn btn-primary btn-lg top-right-button ml-5">{{__('static.admin.users.add')}}</button>
                    </a>

                </div>
            </div>
            <div class="mb-2">
                <a class="btn pt-0 pl-0 d-inline-block d-md-none" data-toggle="collapse"
                   href="#displayOptions" role="button" aria-expanded="true" aria-controls="displayOptions">
                    {{__('static.admin.displayOption')}}
                    <i class="fas fa-fw fa-caret-down"></i>
                </a>
                <div class="collapse d-md-block" id="displayOptions">

                    <div class="d-block d-md-inline-block">
                        <div class="btn-group float-md-left mr-1 mb-1">
                            <button type="button" class="btn btn-outline-dark btn-xs mb-1">{{__('static.admin.search')}}</button>
                        </div>
                        <div class="search-sm d-inline-block float-md-left mr-1 mb-1 align-top">
                            <input placeholder="{{__('static.admin.search')}}...">
                        </div>
                    </div>
                    <div class="float-md-left">
                                <span class="text-muted text-small">نمایش 1-10 از 210 مورد
                                    </span>
                        <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            20
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">10</a>
                            <a class="dropdown-item active" href="#">20</a>
                            <a class="dropdown-item" href="#">30</a>
                            <a class="dropdown-item" href="#">50</a>
                            <a class="dropdown-item" href="#">100</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator mb-5"></div>
        </div>
    </div>

    @foreach($users as $user)
        <div class="row">
            <div class="col-12 list" data-check-all="checkAll">
                <div class="card d-flex flex-row mb-3">
                    <div class="d-flex flex-grow-1 min-width-zero">
                        <div
                            class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                            <a class="list-item-heading mb-1 truncate w-40 w-xs-100" href="#">
                                {{$user->first_name ." ".$user->last_name}}
                            </a>
                            <p class="mb-1 text-muted text-small w-15 w-xs-100">{{$user->national_code}}</p>
                            <p class="mb-1 text-muted text-small w-15 w-xs-100">{{$user->phone}}</p>
                            <p class="mb-1 text-muted text-small w-15 w-xs-100">{{$user->email}}</p>
                            <p class="mb-1 text-muted text-small w-15 w-xs-100">{{$user->gender==1 ? __('static.admin.users.man'):__('static.admin.users.woman')}}</p>
                            <div class="w-15 w-xs-100">
                                <span class="badge badge-pill badge-info {{$user->status==1 ? 'badge-info':'badge-primary'}}">{{$user->status==1 ?  __('static.admin.active'):__('static.admin.inActive')}}</span>
                            </div>
                        </div>
                        <div class="custom-control custom-checkbox pl-1 align-self-center pr-4">
                            <a href="{{route('admin.editUserUI',['id'=>$user->id])}}" type="button" class="btn btn-outline-success btn-xs mb-1"><i class="fa fa-pen"></i> </a> </a>
                            <button type="button"
                                    class="legitRipple swal-alert-delete btn btn-outline-danger btn-xs mb-1"
                                    data-ajax-link="{{route('admin.userList.destroy',[$user['id']])}}"
                                    data-title="{{trans('static.admin.card.delete_card')}}"
                                    data-text="{{trans('static.admin.card.delete_card_text')}}"
                                    data-redirect="{{route('admin.userList.index')}}">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
                <nav class="mt-4 mb-3">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item">
                            <a class="page-link first" href="#">
                                <i class="flaticon-last"></i>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link prev" href="#">
                                <i class="flaticon-next"></i>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link next" href="#" aria-label="Next">
                                <i class="flaticon-prev"></i>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link last" href="#">
                                <i class="flaticon-first"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

@endsection
