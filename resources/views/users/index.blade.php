@extends('layouts.app')
 
@section('content')
        <div id="layoutSidenav_content" style=" margin-top:-20px;">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Nhân sự</h1>
                    <a class="btn btn-success" href="{{ route('users.create') }}" style="float:right;"> Thêm nhân viên</a>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Nhân sự</li>
                    </ol>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                    <div class="card mb-4">
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead style="text-align: center;">
                                    <tr>
                                        <th width=3% style="text-align: center;">STT</th>
                                        <th width=5% style="text-align: center;">MNV</th>
                                        <th width=8% style="text-align: center;">Ảnh đại diện</th>
                                        <th width=10% style="text-align: center;">Họ và tên</th>
                                        <th width=8% style="text-align: center;">Số điện thoại</th>
                                        <th width=8% style="text-align: center;">Email</th>
                                        <th width=8% style="text-align: center;">Ngày sinh</th>
                                        <th width=6% style="text-align: center;">Bộ phận</th>
                                        <th width=6% style="text-align: center;">Chức danh</th>
                                        <th width=6% style="text-align: center;">Hoạt động</th>
                                        <th width=8% style="text-align: center;">Quyền truy cập</th>
                                        <th width=10% style="text-align: center;">Thao tác</th>
                                    </tr>
                                </thead> 
                        @foreach ($users as $user)
                                <tbody>
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $user->id }}</td>
                                        <td></td>
                                        <td>{{ $user->name }}</td>
                                        <td></td>
                                        <td>{{ $user->email }}</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td style="text-align:center;">
                                            <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                
                                                <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                            
                                                @csrf
                                                @method('DELETE')
                                
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                        @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
  
    {!! $users->links() !!}
      
@endsection