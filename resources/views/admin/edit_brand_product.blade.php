@extends('admin_layout')
@section('admin_content')
<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
           cập nhật thương hiệu sản phẩm
        </header>
        <?php
                $message = Session::get('message');
                if($message){
                    echo '<span class= "text-alert">'.$message.'</span>';
                    Session::put('message',null);
                }
        ?>
        <div class="panel-body">
            @foreach ($edit_brand_product as $key =>$edit_value)
            <div class="position-center">
                <form role="form" action="{{URL::to('/update-brand-product/'.$edit_value->brand_id)}}" method="post">
                    {{csrf_field() }}
                    <div class="form-group">
                    <label for="exampleInputEmail1">Tên thương hiệu</label>
                    <input type="text" name="brand_product_name" value="{{$edit_value->brand_name}}" class="form-control" id="exampleInputEmail1" placeholder="tên thương hiệu">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mô tả thương hiệu</label>
                    <textarea style="resize: none" rows="8" name="brand_product_desc" class="form-control" id="exampleInputPassword1" placeholder="Mô tả thương hiệu">{{$edit_value->brand_desc}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Hiển thị</label>
                    <select class="form-control input-sm m-bot15" name="brand_product_status">
                        <option value="0">Ẩn</option>
                        <option value="1">Hiện</option>
                    </select>
                </div>

                <button type="submit" name="update_brand_product" class="btn btn-info">cập nhật thương hiệu</button>
            </form>
            </div>
            @endforeach
            {{-- <div class="position-center">
                <form role="form" action="{{URL::to('/update-brand-product/'.$edit_brand_product->brand_id)}}" method="post">
                    {{csrf_field() }}
                    <div class="form-group">
                    <label for="exampleInputEmail1">Tên thương hiệu</label>
                    <input type="text" name="brand_product_name" value="{{$edit_brand_product->brand_name}}" class="form-control" id="exampleInputEmail1" placeholder="tên thương hiệu">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mô tả thương hiệu</label>
                    <textarea style="resize: none" rows="8" name="brand_product_desc" class="form-control" id="exampleInputPassword1" placeholder="Mô tả thương hiệu">{{$edit_brand_product->brand_desc}}</textarea>
                </div>


                <button type="submit" name="update_brand_product" class="btn btn-info">cập nhật thương hiệu</button>
            </form>
            </div> --}}
        </div>
    </section>

</div>
@endsection
