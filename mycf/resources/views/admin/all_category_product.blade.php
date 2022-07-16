@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      <b>Liệt kê danh mục sản phẩm</b>
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        
        <a href="{{URL::to('/add-category-product')}}"><button class="btn btn-danger"><b>Thêm danh mục</b></button></a>                
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
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Tên danh mục</th>
            <th>Slug</th>
            <th>Mô tả</th>
            <th>Hiển thị</th>
            <th>Hành động</th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_category_product as $key => $cate_pro)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{ $cate_pro->category_name }}</td>
            <td>{{ $cate_pro->slug_category_product }}</td>
            <td>{{ $cate_pro->category_desc }}</td>

            <td><span class="text-ellipsis">
              <?php
               if($cate_pro->category_status==0){
                ?>
                <a href="{{URL::to('/unactive-category-product/'.$cate_pro->category_id)}}"><span class="fa-thumb-styling fa fa-eye"></span></a>
                <?php
                 }else{
                ?>  
                 <a href="{{URL::to('/active-category-product/'.$cate_pro->category_id)}}"><span class="fa-thumb-styling fa fa-eye-slash"></span></a>
                <?php
               }
              ?>
            </span></td>
           
            <td>
              <a href="{{URL::to('/edit-category-product/'.$cate_pro->category_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil"></i></a>

              <a onclick="return confirm('Bạn có muốn xóa danh mục này không?')" href="{{URL::to('/delete-category-product/'.$cate_pro->category_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-trash"></i>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm"><i> hiển thị tất cả các danh mục</i></small>
        </div>
        
      </div>
    </footer>
  </div>
</div>
@endsection