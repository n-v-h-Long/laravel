@extends('admin_layout')
@section('admin_content')
<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
           Thêm vận chuyển
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
                <form >
                    @csrf

                <div class="form-group">
                    <label for="exampleInputFile">Chọn thành phố</label>
                    <select class="form-control input-sm m-bot15 choose city" name="city" id="city">
                        <option value="">---Chọn thành phố---</option>
                        @foreach ($city as $ci)
                        <option value="{{$ci->matp}}">{{$ci->name_city}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Chọn quận huyện</label>
                    <select class="form-control input-sm m-bot15 province choose" name="province" id="province">
                        <option value="">---Chọn quận huyện---</option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Chọn xã phường</label>
                    <select class="form-control input-sm m-bot15 wards" name="wards" id="wards">
                        <option value="">---Chọn xã phường---</option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phí vận chuyển</label>
                    <input type="text" name="fee_ship" class="form-control fee_ship" id="exampleInputEmail1" >
                </div>
                <button type="button" name="add_delivery" class="btn btn-info add_delivery">Thêm phí vận chuyển</button>
            </form>
            </div>
            <div id="load_delivery">

            </div>
        </div>
    </section>

</div>
@endsection
