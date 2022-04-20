@extends('layouts.app')

@section('content')
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
<form class="jotform-form" action="{{ route('users.update',$user->id) }}" method="POST" enctype="multipart/form-data" name="form" id="form" accept-charset="utf-8" style="border:2px;">
    @csrf
    @method('PUT')  
    <div role="main" class="form-all">
    <style>
        .form-all:before {
         background: none;
        }
    </style>
            <ul class="form-section page-section" style="background-color:#eaeeee;border-radius:10px;">
                <li id="cid_34" class="form-input-wide" data-type="control_head">
                    <div class="form-header-group  header-large">
                        <div class="header-text httal htvam">
                            <h1 id="header_34" class="form-header" data-component="header" style="text-align:center; ">
                                Thêm nhân viên</h1>
                        </div>
                    </div>
                </li>
                <li class="form-input-wide">
                    <label class="form-label form-label-top form-label-auto" style="margin-left: 20px;">Ảnh đại diện </label>
                    <div class="avatar-wrapper" >  
                        <img id="avatar" name="avatar" class="profile-pic" src=" "/>
                            <div class="upload-button">
                                <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                            </div>
                        <input class="file-upload" name="avatar" id="avatar" type="file" accept="image/*" value="" />
                    </div>
                </li>
                <li class="form-line form-line-column form-col-1">
                    <label class="form-label form-label-top form-label-auto"> Họ và tên </label>
                    <div class="form-input-wide">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input type="text" name="name" value="{{ $user->name }}" id="name" class="form-textbox" style="width:310px" data-masked="true"/>
                        </span>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-2" >
                    <label class="form-label form-label-top form-label-auto" > Mã nhân viên</label>
                    <div class="form-input-wide" >
                        <input type="text" class="form-textbox" style="width:310px" size="310" name="manhanvien" id="manhanvien" value="" data-component="textbox"/>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-1">
                    <label class="form-label form-label-top form-label-auto"> Ngày sinh </label>
                    <div class="form-input-wide" >
                        <span class="form-sub-label-container" style="vertical-align:top" >
                            <input type="date" id="ngaysinh" type="text" class="form-textbox" style="width:310px" name="ngaysinh" value="2000-01-01"/>
                        </span>
                    </div>
                </li>  
                
                <li class="form-line form-line-column form-col-1" >
                    <label class="form-label form-label-top form-label-auto" > Số điện thoại </label>
                    <div class="form-input-wide" >
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input type="tel" class="mask-phone-number form-textbox validate[Fill Mask]" style="width:310px" data-masked="true" name="sodienthoai" id="sodienthoai" value="" />
                        </span>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-1" >
                    <label class="form-label form-label-top form-label-auto" > Email</label>
                    <div class="form-input-wide" data-layout="half">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input type="email" name="email" name="email" value="{{ $user->email }}" class="form-textbox validate[Email]" style="width:310px" size="310"  />
                        </span>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-1" >
                <div class="form-input-wide">
                    <label class="form-label form-label-top form-label-auto" for="bophan">Bộ phận</label>
                    <select class="form-textbox validate" name="bophan" id="bophan" style="width:310px; height: 40px;">
                        <option style="background-color:rgb(30, 182, 228)"></option>
                        <option value="Dev">Dev</option>
                        <option value="Game design">Game design</option>
                        <option value="Art">Art</option>
                        <option value="Tester">Tester</option>
                    </select>
                </div>
                </li>
                <li class="form-line form-line-column form-col-1">
                    <div class="form-input-wide">
                        <label class="form-label form-label-top form-label-auto" for="chucdanh">Chức danh</label>
                        <select class="form-textbox validate" name="chucdanh" type="text" style="width:310px; height: 40px;" id= "chucdanh">
                            <option style="background-color:rgb(30, 182, 228)"> </option>
                            <option value="Nhân viên">Nhân viên</option>
                            <option value="Leader">Leader</option>
                            <option value="Quản lý">Quản lý</option>
                            <option value="Giám đốc">Giám đốc</option>
                        </select>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-1">
                    <div class="form-input-wide">
                        <label class="form-label form-label-top form-label-auto" for="quyentruycap">Quyền truy cập</label>
                        <div class="form-input-wide" data-layout="half">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input type="text" class="mask-phone-number form-textbox validate" style="width:310px" value=""/> 
                        </span>
                    </div>
                        
                    </div>
                </li>
                <li class="form-line form-line-column form-col-1">
                    <label class="form-label form-label-top form-label-auto"> Mật khẩu </label>
                    <div class="form-input-wide">
                        <input type="password" class="mask-phone-number form-textbox validate"name="password" value="{{ $user->password }}" style="width:310px"/>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-1" >
                    <label class="form-label form-label-top form-label-auto" id="label_75" for="input_75_addr_line1"> Địa chỉ </label>
                    <div class="form-input-wide">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input type="text" name="diachi" id="diachi" class="form-textbox form-address-line" value="" /> 
                        </span>
                    </div>
                </li>
                <li class="form-line">
                    <div class="form-input-wide text-center">
                        <button type="submit" class="btn btn-primary" style="margin: 0px 50px 0px 0px">Lưu</button>
                        <a class="btn btn-gray" style="background-color:grey;" href="{{ route('users.index') }}"> Quay lại</a>
                    </div>
                </li> 
            </ul>     
        </div>  
    </form>
@endsection