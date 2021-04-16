@extends('admin_layout')
@section('admin_content')
<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
           Thêm Thương hiệu sản phẩm
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
                <form role="form" action="{{URL::to('/save-brand-product')}}" method="post">
                    {{csrf_field() }}
                    <div class="form-group">
                    <label for="exampleInputEmail1">Tên Thương hiệu</label>
                    <input type="text" name="brand_product_name" class="form-control" id="exampleInputEmail1" placeholder="tên Thương hiệu">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mô tả Thương hiệu</label>
                    <textarea style="resize: none" rows="8" name="brand_product_desc" class="form-control" id="exampleInputPassword1" placeholder="Mô tả Thương hiệu"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Hiển thị</label>
                    <select class="form-control input-sm m-bot15" name="brand_product_status">
                        <option value="0">Ẩn</option>
                        <option value="1">Hiện</option>
                    </select>
                </div>

                <button type="submit" name="add_brand_product" class="btn btn-info">Thêm Thương hiệu</button>
            </form>
            </div>

        </div>
    </section>

</div>
@endsection
