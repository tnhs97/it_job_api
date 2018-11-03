
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>S-cart Admin  | Tạo mới</title>
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
            Tạo mới
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
    <a href="https://demo.s-cart.org/system_admin/shop_promotion" class="btn btn-sm btn-default" title="List"><i class="fa fa-list"></i><span class="hidden-xs">&nbsp;List</span></a>
</div>
        </div>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form action="https://demo.s-cart.org/system_admin/shop_promotion" method="post" accept-charset="UTF-8" class="form-horizontal" pjax-container>

        <div class="box-body">

                            <div class="fields-group">

                                                                        <div class="form-group  ">

    <label for="code" class="col-sm-2  control-label">Mã coupon</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="code" name="code" value="" class="form-control code" placeholder="Ví dụ: SAVEOFF2018,SAVE50,..." />

            
        </div>

        <span class="help-block">
    <i class="fa fa-info-circle"></i>&nbsp;Mã coupon là duy nhất. Viết liền, không dấu
</span>

    </div>
</div>
                                                    <div class="form-group  ">

    <label for="reward" class="col-sm-2  control-label">Giá trị</label>

    <div class="col-sm-8">

        
        <div class="input-group">

            
            <input style="width: 100px" type="text" id="reward" name="reward" value="0" class="form-control reward" placeholder="Input Giá trị" />

            
        </div>

        
    </div>
</div>
                                                    <div class="form-group  ">

<label for="type" class="col-sm-2  control-label">Loại</label>

    <div class="col-sm-8">

        
        <input type="hidden" name="type"/>

        <select class="form-control type" style="width: 100%;" name="type" data-value="" >
                            <option value=""></option>
                                    <option value="0" selected>VNĐ</option>
                                    <option value="1" >Point</option>
                                    <option value="2" >%</option>
                                    </select>

        
    </div>
</div>

                                                    <div class="form-group  ">

    <label for="data" class="col-sm-2  control-label">Mô tả</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="data" name="data" value="" class="form-control data" placeholder="Input Mô tả" />

            
        </div>

        
    </div>
</div>
                                                    <div class="form-group  ">

    <label for="number_uses" class="col-sm-2  control-label">Số lần sử dụng</label>

    <div class="col-sm-8">

        
        <div class="input-group">

            
            <input style="width: 100px" type="text" id="number_uses" name="number_uses" value="1" class="form-control number_uses" placeholder="Input Số lần sử dụng" />

            
        </div>

        
    </div>
</div>
                                                    <div class="form-group  ">

    <label for="expires_at" class="col-sm-2  control-label">Ngày hết hạn</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
            
            <input style="width: 160px" type="text" id="expires_at" name="expires_at" value="" class="form-control expires_at" placeholder="Input Ngày hết hạn" />

            
        </div>

        
    </div>
</div>
                                                    <div class="form-group  ">

    <label for="status" class="col-sm-2  control-label">Status</label>

    <div class="col-sm-8">

        
        <input type="checkbox" class="status la_checkbox"   />
        <input type="hidden" class="status" name="status" class="" value="off" />

        
    </div>
</div>

                                            

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

                    <input type="hidden" name="_previous_" value="https://demo.s-cart.org/system_admin/shop_promotion" class="_previous_"  />

        
        <!-- /.box-footer -->
    </form>
</div>

</div></div>

    </section>
        <script data-exec-on-popstate>

    $(function () {
                    
$('.reward:not(.initialized)')
    .addClass('initialized')
    .bootstrapNumber({
        upClass: 'success',
        downClass: 'primary',
        center: true
    });

                    $(".type").select2({"allowClear":true,"placeholder":{"id":"","text":"Lo\u1ea1i"}});
                    
$('.number_uses:not(.initialized)')
    .addClass('initialized')
    .bootstrapNumber({
        upClass: 'success',
        downClass: 'primary',
        center: true
    });

                    $('.expires_at').parent().datetimepicker({"format":"YYYY-MM-DD HH:mm:ss","locale":"en","allowInputToggle":true});
                    
$('.status.la_checkbox').bootstrapSwitch({
    size:'small',
    onText: 'ON',
    offText: 'OFF',
    onColor: 'primary',
    offColor: 'default',
    onSwitchChange: function(event, state) {
        $(event.target).closest('.bootstrap-switch').next().val(state ? 'on' : 'off').change();
    }
});

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
