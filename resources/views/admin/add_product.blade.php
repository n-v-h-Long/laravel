@extends('admin_layout')
@section('admin_content')
<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
           Thêm  sản phẩm
        </header>
        <div class="panel-body">
            <?php
                $message = Session::get('message');
                if($message){
                    echo '<span class= "text-alert">'.$message.'</span>';
                    Session::put('message',null);
                }
            ?>
            <div class="position-center">
                <form role="form" action="{{URL::to('/save-product')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                    <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="tên sản phẩm">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Số lượng sản phẩm</label>
                    <input type="text" name="product_quantity" class="form-control" id="exampleInputEmail1" placeholder="Điền số lượng">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Giá sản phẩm</label>
                    <input type="text" name="product_price" class="form-control" id="exampleInputEmail1" placeholder="Giá sản phẩm">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                    <input type="file" name="product_image" class="form-control" id="exampleInputEmail1" >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                    <textarea style="resize: none" rows="8" name="product_desc" class="form-control" id="ckeditor1" placeholder="Mô tả sản phẩm"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nội dung sản phẩm</label>
                    <textarea style="resize: none" rows="8" name="product_content" class="form-control" id="exampleInputPassword1" placeholder="Nội dung sản phẩm"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Danh mục sản phẩm</label>
                    <select class="form-control input-sm m-bot15" name="product_cate">
                        @foreach ($cate_product as $key => $cate)
                        <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                        @endforeach


                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Thương hiệu</label>
                    <select class="form-control input-sm m-bot15" name="product_brand">
                        @foreach ($brand_product as $key => $brand)
                        <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Hiển thị</label>
                    <select class="form-control input-sm m-bot15" name="product_status">
                        <option value="0">Ẩn</option>
                        <option value="1">Hiện</option>
                    </select>
                </div>

                <button type="submit" name="add_product" class="btn btn-info">Thêm sản phẩm</button>
            </form>
            </div>

        </div>
    </section>

</div>
@endsection
