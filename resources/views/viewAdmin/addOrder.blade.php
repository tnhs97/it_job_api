
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>S-cart Admin  | Tạo đơn hàng mới</title>
    @include("viewAdmin.elements.stylesheet")

</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="/system_admin/" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>S-cart</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><img src="/images/scart-min.png"></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <style>
.search-form {
    width: 250px;
    margin: 10px 0 0 20px;
    border-radius: 3px;
    float: left;
}
.search-form input[type="text"] {
    color: #666;
    border: 0;
}
.search-form .btn {
    color: #999;
    background-color: #fff;
    border: 0;
}
</style>

<form action="https://demo.s-cart.org/system_admin/shop_order" method="get" class="search-form" pjax-container>
    <div class="input-group input-group-sm ">
        <input type="text" name="keyword" class="form-control" placeholder="Search order id, email, phone or name">
        <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
          </span>
    </div>
</form>


        <!-- Navbar Right Menu -->
        @include("viewAdmin.elements.NavbarRightMenu")
    </nav>
</header>
    @include("viewAdmin.elements.menu")
    <div class="content-wrapper" id="pjax-container">
            <section class="content-header">
        <h1>
            Tạo đơn hàng mới
            <small>Description</small>
        </h1>

        <!-- breadcrumb start -->
        
        <!-- breadcrumb end -->

    </section>

    <section class="content">

                        
        <div class="row"><div class="col-md-12"><div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Create</h3>

        <div class="box-tools">
            <div class="btn-group pull-right" style="margin-right: 5px">
    <a href="https://demo.s-cart.org/system_admin/shop_order" class="btn btn-sm btn-default" title="List"><i class="fa fa-list"></i><span class="hidden-xs">&nbsp;List</span></a>
</div>
        </div>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form action="https://demo.s-cart.org/system_admin/shop_order" method="post" accept-charset="UTF-8" class="form-horizontal" pjax-container>

        <div class="box-body">

                            <div class="fields-group">

                                                                        <div class="form-group  ">

<label for="user_id" class="col-sm-2  control-label">Chọn khách hàng</label>

    <div class="col-sm-8">

        
        <input type="hidden" name="user_id"/>

        <select class="form-control user_id" style="width: 100%;" name="user_id" data-value="" >
                            <option value=""></option>
                                    <option value="1" >Hoang Ngoc Tu&lt;dfne11pd2707@gmail.com&gt;</option>
                                    <option value="2" >Hung&lt;hung@fdgfdg.com&gt;</option>
                                    <option value="3" >Lê Văn Lanh&lt;lanhktc@gmail.com&gt;</option>
                                    <option value="4" >Châu Tuấn Anh&lt;lengocchau_11233@gmail.com&gt;</option>
                                    <option value="5" >Bao Khanh&lt;baokhanh123@gmail.com&gt;</option>
                                    <option value="6" >ABC&lt;abc@abc.com&gt;</option>
                                    <option value="7" >trucnguyen&lt;q@gmail.com&gt;</option>
                                    <option value="8" >trucnguyen&lt;qq@gmail.com&gt;</option>
                                    <option value="9" >Ho Luat&lt;holuat162@gmail.com&gt;</option>
                                    <option value="10" >Hoang&lt;tuannguyen@gmail.com2&gt;</option>
                                    <option value="11" >levantu&lt;levantu.nd1997@gmail.com&gt;</option>
                                    </select>

        
    </div>
</div>

                                                    <div class="form-group  ">

    <label for="toname" class="col-sm-2  control-label">Tên người nhận hàng</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="toname" name="toname" value="" class="form-control toname" placeholder="Input Tên người nhận hàng" />

            
        </div>

        
    </div>
</div>
                                                    <div class="form-group  ">

    <label for="address1" class="col-sm-2  control-label">Số nhà, đường</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="address1" name="address1" value="" class="form-control address1" placeholder="Input Số nhà, đường" />

            
        </div>

        
    </div>
</div>
                                                    <div class="form-group  ">

    <label for="address2" class="col-sm-2  control-label">Quận Huyện</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="address2" name="address2" value="" class="form-control address2" placeholder="Input Quận Huyện" />

            
        </div>

        
    </div>
</div>
                                                    <div class="form-group  ">

    <label for="phone" class="col-sm-2  control-label">Phone</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
            
            <input style="width: 150px" type="text" id="phone" name="phone" value="" class="form-control phone" placeholder="Input Phone" />

            
        </div>

        
    </div>
</div>
                                                    <div class="form-group  ">

    <label for="comment" class="col-sm-2  control-label">Ghi chú</label>

    <div class="col-sm-8">

        
        <textarea name="comment" class="form-control comment" rows="5" placeholder="Input Ghi chú"  ></textarea>

        
    </div>
</div>

                                                    <div class="form-group  ">

<label for="status" class="col-sm-2  control-label">Status</label>

    <div class="col-sm-8">

        
        <input type="hidden" name="status"/>

        <select class="form-control status" style="width: 100%;" name="status" data-value="" >
                            <option value=""></option>
                                    <option value="0" selected>Mới</option>
                                    <option value="1" >Đang xử lý</option>
                                    <option value="2" >Tạm giữ</option>
                                    <option value="3" >Hủy bỏ</option>
                                    <option value="4" >Hoàn thành</option>
                                    <option value="5" >Failed</option>
                                    </select>

        
    </div>
</div>

                                                    <hr>
                                            

                </div>
            
        </div>
        <!-- /.box-body -->

        <div class="box-footer">

    <input type="hidden" name="_token" value="YkDCfkRWPRyZTW2zQVo3IfKy3x6paUJmuFe7BBwx">

    <div class="col-md-2">
    </div>

    <div class="col-md-8">

                <div class="btn-group pull-right">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

        
        
        
                <div class="btn-group pull-left">
            <button type="reset" class="btn btn-warning">Reset</button>
        </div>
            </div>
</div>

                    <input type="hidden" name="_previous_" value="https://demo.s-cart.org/system_admin/shop_order" class="_previous_"  />

        
        <!-- /.box-footer -->
    </form>
</div>

</div></div>

    </section>
        <script data-exec-on-popstate>

    $(function () {
                            $('[name="user_id"]').change(function(){
            id = $(this).val();
                $.ajax({
                    url : 'https://demo.s-cart.org/system_admin/getInfoUser',
                    type : "get",
                    dateType:"application/json; charset=utf-8",
                    data : {
                         id : id
                    },
                    success: function(result){
                        var returnedData = JSON.parse(result);
                        $('[name="toname"]').val(returnedData.name);
                        $('[name="address1"]').val(returnedData.address1);
                        $('[name="address2"]').val(returnedData.address2);
                        $('[name="phone"]').val(returnedData.phone);
                    }
                });
        });

                    $(".user_id").select2({"allowClear":true,"placeholder":{"id":"","text":"Ch\u1ecdn kh\u00e1ch h\u00e0ng"}});
                    
$('.phone').inputmask({"mask":"99999999999"});
                    $(".status").select2({"allowClear":true,"placeholder":{"id":"","text":"Status"}});
                    $('.after-submit').iCheck({checkboxClass:'icheckbox_minimal-blue'}).on('ifChecked', function () {
    $('.after-submit').not(this).iCheck('uncheck');
});
            });
</script>
    </div>

    <!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
        &nbsp;&nbsp;&nbsp;&nbsp;

        <strong>Version</strong>&nbsp;&nbsp; 2.0.4

    </div>
    <!-- Default to the left -->
    <strong><a href="https://s-cart.org">S-Cart</a></strong> Free Open Source eCommerce for Business
</footer>

</div>

<script>
    function LA() {}
    LA.token = "YkDCfkRWPRyZTW2zQVo3IfKy3x6paUJmuFe7BBwx";
</script>

@include("viewAdmin.elements.script")


</body>
</html>
