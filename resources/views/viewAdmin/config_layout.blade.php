
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>S-cart Admin  | Edit</title>
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
        <span class="logo-lg"><img src="{{ asset('image/img/scart-min.png')}}"></span>
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
            Edit
            <small>description</small>
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
    <a href="https://demo.s-cart.org/system_admin/config_layout" class="btn btn-sm btn-default" title="List"><i class="fa fa-list"></i><span class="hidden-xs">&nbsp;List</span></a>
</div>
        </div>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form action="https://demo.s-cart.org/system_admin/config_layout/1" method="post" accept-charset="UTF-8" class="form-horizontal" pjax-container>

        <div class="box-body">

                            <div class="fields-group">

                                                                        <div class="form-group">
    <label  class="col-sm-2  control-label"></label>
    <div class="col-sm-8">
        Phần source này thêm bên dưới các thẻ <i><</i>meta<b>></b>
    </div>
</div>
                                                    <div class="form-group  ">

    <label for="meta" class="col-sm-2  control-label">Meta</label>

    <div class="col-sm-8">

        
        <textarea name="meta" class="form-control meta" rows="5" placeholder="Input Meta"  ></textarea>

        
    </div>
</div>

                                                    <div class="form-group">
    <label  class="col-sm-2  control-label"></label>
    <div class="col-sm-8">
        Phần source này thêm ngay dưới thẻ <b><</b>body<b>></b>
    </div>
</div>
                                                    <div class="form-group  ">

    <label for="header" class="col-sm-2  control-label">Header</label>

    <div class="col-sm-8">

        
        <textarea name="header" class="form-control header" rows="5" placeholder="Input Header"  >&lt;div id=&quot;fb-root&quot;&gt;&lt;/div&gt;
&lt;script&gt;(function(d, s, id) {
  var js, fjs = d.getviewAdmin.elementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = &#039;//connect.facebook.net/vi_VN/sdk.js#xfbml=1&amp;version=v2.8&amp;appId=934208239994473&#039;;
  fjs.parentNode.insertBefore(js, fjs);
}(document, &#039;script&#039;, &#039;facebook-jssdk&#039;));
&lt;/script&gt;</textarea>

        
    </div>
</div>

                                                    <div class="form-group">
    <label  class="col-sm-2  control-label"></label>
    <div class="col-sm-8">
        Phần source này thêm trên thẻ <b><</b>footer<b>></b>
    </div>
</div>
                                                    <div class="form-group  ">

    <label for="footer_top" class="col-sm-2  control-label">Footer Top</label>

    <div class="col-sm-8">

        
        <textarea name="footer_top" class="form-control footer_top" rows="5" placeholder="Input Footer Top"  ></textarea>

        
    </div>
</div>

                                                    <div class="form-group">
    <label  class="col-sm-2  control-label"></label>
    <div class="col-sm-8">
        Phần source này thêm ngay trên thẻ <b><</b>/body<b>></b>
    </div>
</div>
                                                    <div class="form-group  ">

    <label for="footer_bottom" class="col-sm-2  control-label">Footer Bottom</label>

    <div class="col-sm-8">

        
        <textarea name="footer_bottom" class="form-control footer_bottom" rows="5" placeholder="Input Footer Bottom"  >&lt;!-- Global site tag (gtag.js) - Google Analytics --&gt;
&lt;script async src=&quot;https://www.googletagmanager.com/gtag/js?id=UA-125870439-1&quot;&gt;&lt;/script&gt;
&lt;script&gt;
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag(&#039;js&#039;, new Date());
  gtag(&#039;config&#039;, &#039;UA-125870439-1&#039;);
&lt;/script&gt;</textarea>

        
    </div>
</div>

                                            

                </div>
            
        </div>
        <!-- /.box-body -->

        <div class="box-footer">

    <input type="hidden" name="_token" value="2OSjS2rhXhGRhQYksSMBeGgbMZR5CO29pgYG2RLa">

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

        
        <!-- /.box-footer -->
    </form>
</div>

</div></div>

    </section>
        <script data-exec-on-popstate>

    $(function () {
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
    LA.token = "2OSjS2rhXhGRhQYksSMBeGgbMZR5CO29pgYG2RLa";
</script>

    @include("viewAdmin.elements.script")


</body>
</html>
