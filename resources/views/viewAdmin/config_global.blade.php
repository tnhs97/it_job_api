
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
            Info global
            <small> </small>
        </h1>

        <!-- breadcrumb start -->
        
        <!-- breadcrumb end -->

    </section>

    <section class="content">

                        
        <div class="row"><div class="col-md-12"><div class="box">
    
    <div class="box-header with-border">
        <div class="pull-right">
            
            
        </div>
        <span>
            
        </span>
    </div>

    

    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
            <thead>
                <tr>
                                        <th>&nbsp;</th>
                                        <th>Logo</th>
                                        <th>watermark</th>
                                        <th>Template</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Keywords</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
            </thead>

            <tbody>
                                <tr >
                                        <td >
                        
                    </td>
                                        <td >
                        <img src="https://demo.s-cart.org/documents/website/images/scart-mid.png" style='max-width:50px;max-height:200px' class='img img-thumbnail' />
                    </td>
                                        <td >
                        <img src="https://demo.s-cart.org/documents/website/images/watermark.png" style='max-width:50px;max-height:200px' class='img img-thumbnail' />
                    </td>
                                        <td >
                        <a href='#' class='grid-editable-template' data-type='select' data-pk='1' data-url='/system_admin/config_global/1' data-value='s-cart'></a>
                    </td>
                                        <td >
                        <div style="max-width:150px; overflow:auto;">Free open source - eCommerce Platform for Business</div>
                    </td>
                                        <td >
                        <div style="max-width:150px; overflow:auto;">Free website shopping cart for business</div>
                    </td>
                                        <td >
                        <div style="max-width:150px; overflow:auto;"></div>
                    </td>
                                        <td >
                        0123456789
                    </td>
                                        <td >
                        <div style="max-width:150px; overflow:auto;">123st - abc - xyz</div>
                    </td>
                                        <td >
                        <div style="max-width:150px; overflow:auto;">admin@admin.com</div>
                    </td>
                                        <td >
                        <a href="/system_admin/config_global/1/edit">
    <i class="fa fa-edit"></i>
</a>
                    </td>
                                    </tr>
                            </tbody>
        </table>

    </div>

    

    <div class="box-footer clearfix">
        
    </div>
    <!-- /.box-body -->
</div>
</div></div>

    </section>
        <script data-exec-on-popstate>

    $(function () {
                    $('.grid-editable-template').editable({"emptytext":"<i class=\"fa fa-pencil\"><\/i>","name":"template","source":[{"value":"s-cart","text":"s-cart"}]});
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
    LA.token = "2OSjS2rhXhGRhQYksSMBeGgbMZR5CO29pgYG2RLa";
</script>

    @include("viewAdmin.elements.script")


</body>
</html>
