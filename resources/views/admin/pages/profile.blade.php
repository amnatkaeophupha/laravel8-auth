@extends('admin/layouts/users')

@section('title', 'มหาวิทยาลัยราชภัฏพระนครศรีอยุธยา')

@section('content')
<div class="outer">
    <div class="inner bg-container">
            @if(Session::has('success'))
            <div class="alert alert-success alert-dismissable">{{Session::get('success')}}<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button></div>
            @endif
            @if(Session::has('error'))
            <div class="alert alert-danger alert-dismissable">{{Session::get('error')}}<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button></div>
            @endif
        <div class="row">

            <div class="col">
                <div class="card">
                    <div class="card-body m-t-25">
                        <div>
                            <h4 style="font-family:'Chakra Petch', sans-serif;">ตั้งค่าโปรไฟล์</h4>
                        </div>
                        <div class="p-6 text-gray-900">
                        <form class="form-horizontal login_validator" id="tryitForm" action="{{ url('admin/profile_update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row m-t-15" style="font-family:'Chakra Petch', sans-serif;">
                                        <div class="col-12 col-lg-3 text-center text-lg-right">
                                            <label class="col-form-label">Profile Pic</label>
                                        </div>
                                        <div class="col-12 col-lg-6 text-center text-lg-left">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new img-thumbnail text-center">
                                                    @if(Auth::user()->image <> null)
                                                    <img src="{{ asset('img_admin/'.Auth::user()->image.'')}}" data-src="{{ asset('img_admin/'.Auth::user()->image.'')}}" alt="not found"></div>
                                                    @else
                                                    <img src="{{ asset('admire/img/admin2.jpg')}}" data-src="{{ asset('admire/img/admin2.jpg')}}" alt="not found"></div>
                                                    @endif
                                                <div class="fileinput-preview fileinput-exists img-thumbnail"></div>
                                                @error('image')<span class="text-danger">{{ $message }}</span>@enderror
                                                <div class="m-t-20 text-center">
                                            <span class="btn btn-primary btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="image">
                                            </span>
                                                    <a href="#" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row m-t-25" style="font-family:'Chakra Petch', sans-serif;">
                                        <div class="col-12 col-lg-3 text-lg-right">
                                            <label for="u-name" class="col-form-label">User Name *</label>
                                        </div>
                                        <div class="col-12 col-xl-6 col-lg-8">
                                            <div class="input-group input-group-prepend">
                                        <span class="input-group-text border-right-0 rounded-left"> <i class="fa fa-user text-primary"></i></span>
                                                <input type="text" value="{{ Auth::user()->name}}" name="name" id="u-name" class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="font-family:'Chakra Petch', sans-serif;">
                                        <div class="col-12 col-lg-3 text-lg-right">
                                            <label for="email" class="col-form-label">Email *</label>
                                        </div>
                                        <div class="col-12 col-xl-6 col-lg-8">
                                            <div class="input-group input-group-prepend">
                                                <span class="input-group-text border-right-0 rounded-left"><i class="fa fa-envelope text-primary"></i></span>
                                                <input type="text" value="{{ Auth::user()->email}}" id="email" name="email" class="form-control">
                                            </div>
                                             @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group row" style="font-family:'Chakra Petch', sans-serif;">
                                        <div class="col-12 col-lg-3 text-lg-right">
                                            <label for="pwd" class="col-form-label">Old Password *</label>
                                        </div>
                                        <div class="col-12 col-xl-6 col-lg-8">
                                            <div class="input-group input-group-prepend">
                                                <span class="input-group-text border-right-0 rounded-left"><i class="fa fa-lock text-primary"></i></span>
                                                <input type="password" value="" name="current_password" id="pwd" class="form-control" placeholder="รหัสเดิมไม่ต้องกรอก">
                                            </div>
                                            @if(Session::has('current_password'))<span class="text-danger">{{ Session::get('current_password') }}</span>@endif
                                        </div>
                                    </div>
                                    <div class="form-group row" style="font-family:'Chakra Petch', sans-serif;">
                                        <div class="col-12 col-lg-3 text-lg-right">
                                            <label for="pwd" class="col-form-label">New Password *</label>
                                        </div>
                                        <div class="col-12 col-xl-6 col-lg-8">
                                            <div class="input-group input-group-prepend">
                                                <span class="input-group-text border-right-0 rounded-left"><i class="fa fa-lock text-primary"></i></span>
                                                <input type="password" value="" name="password" id="pwd" class="form-control">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group row" style="font-family:'Chakra Petch', sans-serif;">
                                        <div class="col-12 col-lg-3 text-lg-right">
                                            <label for="cpwd" class="col-form-label">Confirm Password *</label>
                                        </div>
                                        <div class="col-12 col-xl-6 col-lg-8">
                                            <div class="input-group input-group-prepend">
                                                <span class="input-group-text border-right-0 rounded-left"><i class="fa fa-lock text-primary"></i></span>
                                                <input type="password" name="confirmpassword" value="" id="cpwd" class="form-control">
                                            </div>
                                            @if(Session::has('confirmpassword'))<span class="text-danger">{{ Session::get('confirmpassword') }}</span>@endif
                                        </div>
                                    </div>
                                    <div class="form-group row" style="font-family:'Chakra Petch', sans-serif;">
                                        <div class="col-12 col-lg-3 text-lg-right">
                                            <label for="phone" class="col-form-label">Phone *</label>
                                        </div>
                                        <div class="col-12 col-xl-6 col-lg-8">
                                            <div class="input-group input-group-prepend">
                                                <span class="input-group-text border-right-0 rounded-left"><i class="fa fa-phone text-primary"></i></span>
                                                <input type="text" id="phone" name="phone" class="form-control" value="{{ Auth::user()->phone}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12 col-lg-3 text-lg-right">
                                            <label for="pincode" class="col-form-label">Role * </label>
                                        </div>
                                        <div class="col-12 col-xl-6 col-lg-8">
                                            <div class="input-group input-group-prepend">
                                                <span class="input-group-label input-group-text border-right-0 rounded-left"><i class="fa fa-plus text-primary"></i></span>
                                                <select name="role" class="form-control">
                                                    <option value="admin"@if(Auth::user()->role=='admin') selected @endif>Admin</option>
                                                    <option value="manager"@if(Auth::user()->role=='manger') selected @endif>Manager</option>
                                                    <option value="user"@if(Auth::user()->role=='user') selected @endif>User</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12 col-lg-3 text-lg-right">
                                            <label for="checkbox1" class="col-form-label">Status *</label>
                                        </div>
                                        <div class="col-12 col-xl-6 col-lg-8">
                                            <div>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="activate" class="custom-control-input" @if(Auth::user()->activate=='on')checked @endif>
                                                    <span class="custom-control-label"></span>
                                                    <span class="custom-control-description">Activate your account</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12 col-lg-9 ml-auto">
                                            <input type="hidden" name="id" value="{{ Auth::user()->id}}">
                                            <button class="btn btn-primary" id="submit2" type="submit">Save</button>
                                            <input type="reset" class="btn btn-warning" value='Reset' id="clear" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.inner -->
</div>
@endsection
