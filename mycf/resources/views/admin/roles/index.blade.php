@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      <b>Danh sách các nhân viên</b>
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <button class="btn btn-sm btn-default">HI...!!</button>                
      </div>
      <div class="col-sm-4">
      </div>
     
    </div>
    <div class="table-responsive">
                      <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
     
    </div>
    <footer class="panel-footer">
      <div class="row">
        <table class="table table-striped">
        <thead>
          <tr>
            <th>Tên user</th>
            <th>Email user</th>
            <th>Phone</th>
            <th>Địa chỉ</th>
            <th>Vai trò</th>
           
            <th>Quản lý</th>
          </tr>
        </thead>
        <tbody>
          @foreach($user as $key => $u)
          <tr>
            <td>{{$u->name}}</td>
            <td>{{$u->email}}</td>
            <td>{{$u->phone}}</td>
            <td>{{$u->address}}</td>
           
            <td>
              @foreach($u->roles as $key => $rol)
                {{$rol->name}}
              @endforeach
            </td>

           

            <td>
              <a href="{{url('create-spatie/'.$u->id)}}" class="btn btn-success">Cấp vai trò</a>
              <a href="{{url('edit-users/'.$u->id)}}" class="btn btn-primary">Cập nhật thông tin</a>
              {{--<a href="{{url('create-permission/'.$u->id)}}" class="btn btn-danger">Cấp quyền</a>--}}
             {{-- <a href="{{url('impersonate/'.$u->id)}}" class="btn btn-primary">Chuyển user nhanh</a>--}}

              @if(Auth::user()->id!=$u->id)
              <a href="{{url('delete_user/'.$u->id)}}" onclick="return confirm('Xác nhận xóa users này ?')" class="btn btn-danger">Xóa</a>
                            @endif
            </td>
          </tr>
          @endforeach
         
        </tbody>
      </table>
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm"><i>hiển thị tất các users authenticaton</i></small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
         {{--  <ul class="pagination pagination-sm m-t-none m-b-none">
             {!!$category_post->links()!!}
          </ul> --}}
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection