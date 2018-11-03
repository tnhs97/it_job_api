
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>S-cart Admin  | Page manager</title>
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
            Page manager
            <small> </small>
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
    <a href="https://demo.s-cart.org/system_admin/cms_page" class="btn btn-sm btn-default" title="List"><i class="fa fa-list"></i><span class="hidden-xs">&nbsp;List</span></a>
</div>
        </div>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form action="https://demo.s-cart.org/system_admin/cms_page" method="post" accept-charset="UTF-8" class="form-horizontal" pjax-container>

        <div class="box-body">

                            <div class="fields-group">

                                                                        <div class="form-group">
    <label  class="col-sm-2  control-label"></label>
    <div class="col-sm-8">
        <b>English</b> <img style="height:25px" src="/documents/website/language/flag_uk.png">
    </div>
</div>
                                                    <div class="form-group  ">

    <label for="en__title" class="col-sm-2  control-label">Tên</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="en__title" name="en__title" value="" class="form-control en__title" placeholder="Input Tên" />

            
        </div>

        
    </div>
</div>
                                                    <div class="form-group  ">

    <label for="en__keyword" class="col-sm-2  control-label">Keyword</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="en__keyword" name="en__keyword" value="" class="form-control en__keyword" placeholder="Input Keyword" />

            
        </div>

        
    </div>
</div>
                                                    <div class="form-group  ">

    <label for="en__description" class="col-sm-2  control-label">Description</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="en__description" name="en__description" value="" class="form-control en__description" placeholder="Input Description" />

            
        </div>

        
    </div>
</div>
                                                    <div class="form-group 1">

    <label for="en__content" class="col-sm-2 control-label">Content</label>

    <div class="col-sm-8">

        
        <textarea class="form-control en__content" id="en__content" name="en__content" placeholder="Input Content"  ></textarea>
        
    </div>
</div>

                                                    <hr>
                                                    <div class="form-group  ">

    <label for="uniquekey" class="col-sm-2  control-label">Unique Key</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="uniquekey" name="uniquekey" value="" class="form-control uniquekey" placeholder="Ví dụ: thong-tin-khuyen-mai, tin-tuc,..." />

            
        </div>

        <span class="help-block">
    <i class="fa fa-info-circle"></i>&nbsp;This field must be onlyone. Only use a-z and 0-9.
</span>

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

                    <input type="hidden" name="_previous_" value="https://demo.s-cart.org/system_admin/cms_page" class="_previous_"  />

        
        <!-- /.box-footer -->
    </form>
</div>

</div></div>

    </section>
        <script data-exec-on-popstate>

    $(function () {
                    $('textarea.en__content').ckeditor(
                {
                    filebrowserImageBrowseUrl: '/system_admin/documents?type=Images',
                    filebrowserImageUploadUrl: '/system_admin/documents/upload?type=Images&_token=',
                    filebrowserBrowseUrl: '/system_admin/documents?type=Files',
                    filebrowserUploadUrl: '/system_admin/documents/upload?type=Files&_token=',
                    filebrowserWindowWidth: '900',
                    filebrowserWindowHeight: '500'
                }
            );
            
                    
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
