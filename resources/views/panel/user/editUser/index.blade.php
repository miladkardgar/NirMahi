@extends('panel.user.addUser.frame')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 col">
                <div class="card-body">
                    <h5 class="mb-4">{{__('static.admin.users.editUser')}}
                    </h5>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('admin.userList.update' , $user->id)}}" method="post"
                          accept-charset="utf-8">
                        @csrf
                        {{ method_field('PATCH') }}
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputName">{{__('static.admin.users.name')}}</label>
                                <input type="text" class="form-control" id="inputName" value="{{$user->first_name}}"
                                       name="name" placeholder="{{__('static.admin.users.inputName')}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputFamily">{{__('static.admin.users.family')}}</label>
                                <input type="family" class="form-control" id="inputFamily" value="{{$user->last_name}}"
                                       name="family" placeholder="{{__('static.admin.users.inputFamily')}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="gender">{{trans('static.admin.users.roll')}}</label>
                                <select id="inputState" class="form-control" name="role_id">
                                    <option disabled selected
                                            value="{{$current_role->id}}">{{$current_role->name}}</option>
                                    @foreach($roles as $role)
                                        @if($role->status==1)
                                            {
                                            <option value="{{$role->id}}">{{$role->name}}</option>
                                            }
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="gender">{{trans('static.admin.users.group')}}</label>
                                <select id="inputState" class="form-control" name="group_id">
                                    <option disabled selected
                                            value="{{$current_group->id}}">{{$current_group->name}}</option>
                                    @foreach($groups as $group)
                                        @if($group->status==1)
                                            {
                                            <option value="{{$group->id}}">{{$group->name}}</option>
                                            }
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputEmail">{{__('static.admin.users.email')}}</label>
                                <input type="email" class="form-control" id="inputEmail" value="{{$user->email}}"
                                       name="email" placeholder="{{__('static.admin.users.inputEmail')}}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">{{__('static.admin.users.password')}}</label>
                                <input type="password" class="form-control" id="inputPassword4"
                                       value="{{$user->password}}"
                                       name="password" placeholder="{{__('static.admin.users.inputPassword')}}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="gender">{{trans('static.admin.users.status')}}</label>
                                <select id="inputState" class="form-control" name="status">
                                    <option disabled selected
                                            value="{{$user->status}}">{{$user->status==1 ?  __('static.admin.active'):__('static.admin.inActive')}}</option>
                                    <option value="1">{{trans('static.admin.active')}}</option>
                                    <option value="2">{{trans('static.admin.inActive')}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="phoneNumber">{{__('static.admin.users.phoneNumber')}}</label>
                                <input type="number" class="form-control" id="phoneNumber" value="{{$user->phone}}"
                                       name="phoneNumber" placeholder="">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="nationalCode">{{__('static.admin.users.nationalCode')}}</label>
                                <input type="number" class="form-control" name="nationalCode"
                                       value="{{$user->national_code}}" id="nationalCode">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="gender">{{__('static.admin.users.gender')}}</label>
                                <select id="inputState" class="form-control" name="gender">
                                    <option disabled selected
                                            value="{{$user->gender}}">{{$user->gender==1 ?  __('static.admin.users.man'):__('static.admin.users.woman')}}</option>
                                    <option value="1">{{__('static.admin.users.man')}}</option>
                                    <option value="2">{{__('static.admin.users.woman')}}</option>
                                </select>
                            </div>
                        </div>


                        <button type="submit"
                                class="btn btn-primary d-block mt-3"> {{__('static.admin.submit')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
