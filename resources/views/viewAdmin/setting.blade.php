
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>S-cart Admin  | User setting</title>
    @include("viewAdmin.elements.stylesheet")

</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="/test/public/" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>S-cart</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><img src="{{ asset('images/img/scart-min.png')}}"></span>
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
            User setting
            <small>Description</small>
        </h1>

        <!-- breadcrumb start -->
        
        <!-- breadcrumb end -->

    </section>

    <section class="content">

                        
        <div class="row"><div class="col-md-12"><div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Edit</h3>

        <div class="box-tools">
            <div class="btn-group pull-right" style="margin-right: 5px">
    <a href="javascript:void(0);" class="btn btn-sm btn-danger 5bcf42f50f95d-delete" title="Delete">
        <i class="fa fa-trash"></i><span class="hidden-xs">  Delete</span>
    </a>
</div><div class="btn-group pull-right" style="margin-right: 5px">
    <a href="https://demo.s-cart.org/system_admin/3" class="btn btn-sm btn-primary" title="View">
        <i class="fa fa-eye"></i><span class="hidden-xs"> View</span>
    </a>
</div>
        </div>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form action="/system_admin/auth/setting" method="post" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data" pjax-container>

        <div class="box-body">

                            <div class="fields-group">

                                                                        <div class="form-group ">
    <label class="col-sm-2  control-label">Username</label>
    <div class="col-sm-8">
        <div class="box box-solid box-default no-margin">
            <!-- /.box-header -->
            <div class="box-body">
                user&nbsp;
            </div><!-- /.box-body -->
        </div>

        
    </div>
</div>
                                                    <div class="form-group  ">

    <label for="name" class="col-sm-2  control-label">Name</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="name" name="name" value="User" class="form-control name" placeholder="Input Name" />

            
        </div>

        
    </div>
</div>
                                                    <div class="form-group  ">

    <label for="avatar" class="col-sm-2  control-label">Avatar</label>

    <div class="col-sm-8">

        
        <input type="file" class="avatar" name="avatar" data-initial-preview="https://demo.s-cart.org/vendor/laravel-admin/AdminLTE/dist/img/user2-160x160.jpg" data-initial-caption="user2-160x160.jpg" />

        
    </div>
</div>

                                                    <div class="form-group  ">

    <label for="password" class="col-sm-2  control-label">Password</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-eye-slash fa-fw"></i></span>
            
            <input type="password" id="password" name="password" value="$2y$10$Ao7Uey2z5jPFta/rZG51XuG1OZiWdlbdf3QSgsAjKn9Hfpcp14Ami" class="form-control password" placeholder="Input Password" />

            
        </div>

        
    </div>
</div>
                                                    <div class="form-group  ">

    <label for="password_confirmation" class="col-sm-2  control-label">Password confirmation</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-eye-slash fa-fw"></i></span>
            
            <input type="password" id="password_confirmation" name="password_confirmation" value="$2y$10$Ao7Uey2z5jPFta/rZG51XuG1OZiWdlbdf3QSgsAjKn9Hfpcp14Ami" class="form-control password_confirmation" placeholder="Input Password confirmation" />

            
        </div>

        
    </div>
</div>
                                            

                </div>
            
        </div>
        <!-- /.box-body -->

        <div class="box-footer">

    <input type="hidden" name="_token" value="S1LncOTsX6BqbTUqHCYNYLTI1192IQImxY2vjoXJ">

    <div class="col-md-2">
    </div>

    <div class="col-md-8">

                <div class="btn-group pull-right">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

                <label class="pull-right" style="margin: 5px 10px 0 0;">
            <input type="checkbox" class="after-submit" name="after-save" value="1"> admin.continue_editing
        </label>
        
                <label class="pull-right" style="margin: 5px 10px 0 0;">
            <input type="checkbox" class="after-submit" name="after-save" value="2"> View
        </label>
        
        
                <div class="btn-group pull-left">
            <button type="reset" class="btn btn-warning">Reset</button>
        </div>
            </div>
</div>

                    <input type="hidden" name="_method" value="PUT" class="_method"  />

                    <input type="hidden" name="_previous_" value="https://demo.s-cart.org/system_admin" class="_previous_"  />

        
        <!-- /.box-footer -->
    </form>
</div>

</div></div>

    </section>
        <script data-exec-on-popstate>

    $(function () {
                    
$('.5bcf42f50f95d-delete').unbind('click').click(function() {

    swal({
        title: "Are you sure to delete this item ?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Confirm",
        showLoaderOnConfirm: true,
        cancelButtonText: "Cancel",
        preConfirm: function() {
            return new Promise(function(resolve) {
                $.ajax({
                    method: 'post',
                    url: 'https://demo.s-cart.org/system_admin/3',
                    data: {
                        _method:'delete',
                        _token:LA.token,
                    },
                    success: function (data) {
                        $.pjax({container:'#pjax-container', url: 'https://demo.s-cart.org/system_admin' });

                        resolve(data);
                    }
                });
            });
        }
    }).then(function(result) {
        var data = result.value;
        if (typeof data === 'object') {
            if (data.status) {
                swal(data.message, '', 'success');
            } else {
                swal(data.message, '', 'error');
            }
        }
    });
});

                    
$("input.avatar").fileinput({"overwriteInitial":true,"initialPreviewAsData":true,"browseLabel":"Browse","showRemove":false,"showUpload":false,"deleteExtraData":{"avatar":"_file_del_","_file_del_":"","_token":"S1LncOTsX6BqbTUqHCYNYLTI1192IQImxY2vjoXJ","_method":"PUT"},"deleteUrl":"https:\/\/demo.s-cart.org\/system_admin\/3","allowedFileTypes":["image"]});

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
    LA.token = "S1LncOTsX6BqbTUqHCYNYLTI1192IQImxY2vjoXJ";
</script>

@include("viewAdmin.elements.script")


</body>
</html>
