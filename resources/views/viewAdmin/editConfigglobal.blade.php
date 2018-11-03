
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>S-cart Admin  | Info global</title>
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
            Info global
            <small> </small>
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
    <a href="https://demo.s-cart.org/system_admin/config_global" class="btn btn-sm btn-default" title="List"><i class="fa fa-list"></i><span class="hidden-xs">&nbsp;List</span></a>
</div>
        </div>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form action="https://demo.s-cart.org/system_admin/config_global/1" method="post" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data" pjax-container>

        <div class="box-body">

                            <div class="fields-group">

                                                                        <div class="form-group  ">

    <label for="logo" class="col-sm-2  control-label">Logo</label>

    <div class="col-sm-8">

        
        <input type="file" class="logo" name="logo" data-initial-preview="http://demo.s-cart.org/documents/website/images/scart-mid.png" data-initial-caption="scart-mid.png" />

        
    </div>
</div>

                                                    <div class="form-group  ">

    <label for="watermark" class="col-sm-2  control-label">watermark</label>

    <div class="col-sm-8">

        
        <input type="file" class="watermark" name="watermark" data-initial-preview="http://demo.s-cart.org/documents/website/images/watermark.png" data-initial-caption="watermark.png" />

        
    </div>
</div>

                                                    <div class="form-group  ">

<label for="template" class="col-sm-2  control-label">Template</label>

    <div class="col-sm-8">

        
        <input type="hidden" name="template"/>

        <select class="form-control template" style="width: 100%;" name="template" data-value="s-cart" >
                            <option value=""></option>
                                    <option value="s-cart" selected>s-cart</option>
                                    </select>

        
    </div>
</div>

                                                    <div class="form-group  ">

    <label for="title" class="col-sm-2  control-label">Title</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="title" name="title" value="Free open source - eCommerce Platform for Business" class="form-control title" placeholder="Input Title" />

            
        </div>

        
    </div>
</div>
                                                    <div class="form-group  ">

    <label for="description" class="col-sm-2  control-label">Description</label>

    <div class="col-sm-8">

        
        <textarea name="description" class="form-control description" rows="5" placeholder="Input Description"  >Free website shopping cart for business</textarea>

        
    </div>
</div>

                                                    <div class="form-group  ">

    <label for="keyword" class="col-sm-2  control-label">Keywords</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="keyword" name="keyword" value="" class="form-control keyword" placeholder="Input Keywords" />

            
        </div>

        
    </div>
</div>
                                                    <div class="form-group  ">

    <label for="phone" class="col-sm-2  control-label">Phone</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="phone" name="phone" value="0123456789" class="form-control phone" placeholder="Input Phone" />

            
        </div>

        
    </div>
</div>
                                                    <div class="form-group  ">

    <label for="address" class="col-sm-2  control-label">Address</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="address" name="address" value="123st - abc - xyz" class="form-control address" placeholder="Input Address" />

            
        </div>

        
    </div>
</div>
                                                    <div class="form-group  ">

    <label for="email" class="col-sm-2  control-label">Email</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="email" name="email" value="admin@admin.com" class="form-control email" placeholder="Input Email" />

            
        </div>

        
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

                    <input type="hidden" name="_method" value="PUT" class="_method"  />

                    <input type="hidden" name="_previous_" value="https://demo.s-cart.org/system_admin/config_global" class="_previous_"  />

        
        <!-- /.box-footer -->
    </form>
</div>

</div></div>

    </section>
        <script data-exec-on-popstate>

    $(function () {
                    
$("input.logo").fileinput({"initialPreviewConfig":[{"caption":"scart-mid.png","key":0}],"overwriteInitial":true,"initialPreviewAsData":true,"browseLabel":"Browse","showRemove":false,"showUpload":false,"deleteExtraData":{"logo":"_file_del_","_file_del_":"","_token":"YkDCfkRWPRyZTW2zQVo3IfKy3x6paUJmuFe7BBwx","_method":"PUT"},"deleteUrl":"https:\/\/demo.s-cart.org\/system_admin\/config_global\/1","allowedFileTypes":["image"]});

                    
$("input.watermark").fileinput({"initialPreviewConfig":[{"caption":"watermark.png","key":0}],"overwriteInitial":true,"initialPreviewAsData":true,"browseLabel":"Browse","showRemove":false,"showUpload":false,"deleteExtraData":{"watermark":"_file_del_","_file_del_":"","_token":"YkDCfkRWPRyZTW2zQVo3IfKy3x6paUJmuFe7BBwx","_method":"PUT"},"deleteUrl":"https:\/\/demo.s-cart.org\/system_admin\/config_global\/1","allowedFileTypes":["image"]});

                    $(".template").select2({"allowClear":true,"placeholder":{"id":"","text":"Template"}});
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
