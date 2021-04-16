@extends('admin_layout')
@section('admin_content')
<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
           Thêm Slider
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
                <form role="form" action="{{URL::to('/insert-slider')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field() }}
                    <div class="form-group">
                    <label for="exampleInputEmail1">Tên slide</label>
                    <input type="text" name="slider_name" class="form-control" id="exampleInputEmail1" placeholder="tên Thương hiệu">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Hình ảnh</label>
                    <input type="file" style="resize: none" rows="8" name="slider_image" class="form-control" id="exampleInputPassword1" placeholder="Slide">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mô tả slier</label>
                    <textarea style="resize: none" rows="8" name="slider_desc" class="form-control" id="exampleInputPassword1" placeholder="Mô tả Thương hiệu"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Hiển thị</label>
                    <select class="form-control input-sm m-bot15" name="slider_status">
                        <option value="0">Ẩn slider</option>
                        <option value="1">Hiện slider</option>
                    </select>
                </div>

                <button type="submit" name="add_slider" class="btn btn-info">Thêm slider</button>
            </form>
            </div>

        </div>
    </section>

</div>
@endsection
