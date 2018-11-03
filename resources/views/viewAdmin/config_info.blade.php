
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>S-cart Admin  | Config control</title>
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
            Config control
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
                                        <th>Fields config</th>
                                        <th>Use Mode</th>
                                    </tr>
            </thead>

            <tbody>
                                <tr >
                                        <td >
                        On/Off website
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-value" checked data-key="44" />
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        Show date available
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-value" checked data-key="22" />
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        Allow buy product out of stock
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-value" checked data-key="20" />
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        Show product out of stock
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-value" checked data-key="19" />
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        Allow pre-order
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-value" checked data-key="18" />
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        Allow for guest order
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-value" checked data-key="10" />
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        Use coupon
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-value" checked data-key="24" />
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        Enable https
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-value"  data-key="30" />
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        Enable log admin
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-value"  data-key="31" />
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        Use Watermark
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-value" checked data-key="32" />
                    </td>
                                    </tr>
                            </tbody>
        </table>

    </div>

    

    <div class="box-footer clearfix">
        
    </div>
    <!-- /.box-body -->
</div>
</div></div><div class="row"><div class="col-md-4"><div  class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Config Email</h3>
        <div class="box-tools pull-right">
                    </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body" style="display: block;">
        <table class="table box table-bordered">
                <tr>
          <td style="width: 200px;">Use SMTP:</td>
          <td>
            <a href="#" class=" no-required" data-name="smtp_mode" data-type="select" data-pk="smtp_mode" data-source ="[{&quot;value&quot;:&quot;0&quot;,&quot;text&quot;:&quot;Not use&quot;},{&quot;value&quot;:&quot;1&quot;,&quot;text&quot;:&quot;SMTP&quot;}]" data-url="https://demo.s-cart.org/system_admin/updateConfigField" data-title="Use SMTP" data-value="0"></a>
          </td>
        </tr>
                <tr>
          <td style="width: 200px;">Server SMTP:</td>
          <td>
            <a href="#" class=" no-required" data-name="smtp_host" data-type="text" data-pk="smtp_host" data-source ="" data-url="https://demo.s-cart.org/system_admin/updateConfigField" data-title="Server SMTP" data-value=""></a>
          </td>
        </tr>
                <tr>
          <td style="width: 200px;">Tài khoản SMTP:</td>
          <td>
            <a href="#" class=" no-required" data-name="smtp_user" data-type="text" data-pk="smtp_user" data-source ="" data-url="https://demo.s-cart.org/system_admin/updateConfigField" data-title="Tài khoản SMTP" data-value=""></a>
          </td>
        </tr>
                <tr>
          <td style="width: 200px;">Password SMTP:</td>
          <td>
            <a href="#" class=" no-required" data-name="smtp_password" data-type="text" data-pk="smtp_password" data-source ="" data-url="https://demo.s-cart.org/system_admin/updateConfigField" data-title="Password SMTP" data-value=""></a>
          </td>
        </tr>
                <tr>
          <td style="width: 200px;">Security SMTP:</td>
          <td>
            <a href="#" class=" no-required" data-name="smtp_security" data-type="select" data-pk="smtp_security" data-source ="[{&quot;value&quot;:&quot;tls&quot;,&quot;text&quot;:&quot;TLS&quot;},{&quot;value&quot;:&quot;ssl&quot;,&quot;text&quot;:&quot;SSL&quot;}]" data-url="https://demo.s-cart.org/system_admin/updateConfigField" data-title="Security SMTP" data-value=""></a>
          </td>
        </tr>
                <tr>
          <td style="width: 200px;">Port SMTP:</td>
          <td>
            <a href="#" class=" no-required" data-name="smtp_port" data-type="number" data-pk="smtp_port" data-source ="" data-url="https://demo.s-cart.org/system_admin/updateConfigField" data-title="Port SMTP" data-value=""></a>
          </td>
        </tr>
              </table>



<script type="text/javascript">
$(document).ready(function() {
        $('.no-required').editable({});
        $('.fied-required').editable({
        validate: function(value) {
            if (value == '') {
                return 'Data not empty!';
            }
        }
    });
});
</script>

    </div><!-- /.box-body -->
</div></div><div class="col-md-4"><div  class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Config Items/pages display</h3>
        <div class="box-tools pull-right">
                    </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body" style="display: block;">
        <table class="table box table-bordered">
                <tr>
          <td style="width: 200px;">Hot product:</td>
          <td>
            <a href="#" class=" no-required" data-name="product_hot" data-type="number" data-pk="product_hot" data-source ="" data-url="https://demo.s-cart.org/system_admin/updateConfigField" data-title="Hot product" data-value="12"></a>
          </td>
        </tr>
                <tr>
          <td style="width: 200px;">New product:</td>
          <td>
            <a href="#" class=" no-required" data-name="product_new" data-type="number" data-pk="product_new" data-source ="" data-url="https://demo.s-cart.org/system_admin/updateConfigField" data-title="New product" data-value="6"></a>
          </td>
        </tr>
                <tr>
          <td style="width: 200px;">List product:</td>
          <td>
            <a href="#" class=" no-required" data-name="product_list" data-type="number" data-pk="product_list" data-source ="" data-url="https://demo.s-cart.org/system_admin/updateConfigField" data-title="List product" data-value="18"></a>
          </td>
        </tr>
                <tr>
          <td style="width: 200px;">Product releation:</td>
          <td>
            <a href="#" class=" no-required" data-name="product_relation" data-type="number" data-pk="product_relation" data-source ="" data-url="https://demo.s-cart.org/system_admin/updateConfigField" data-title="Product releation" data-value="4"></a>
          </td>
        </tr>
              </table>



<script type="text/javascript">
$(document).ready(function() {
        $('.no-required').editable({});
        $('.fied-required').editable({
        validate: function(value) {
            if (value == '') {
                return 'Data not empty!';
            }
        }
    });
});
</script>

    </div><!-- /.box-body -->
</div></div><div class="col-md-12"><div  class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Config Paypal</h3>
        <div class="box-tools pull-right">
                    </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body" style="display: block;">
        <table class="table box table-bordered">
                <tr>
          <td style="width: 200px;">Enable module:</td>
          <td>
            <a href="#" class=" no-required" data-name="paypal_status" data-type="select" data-pk="paypal_status" data-source ="[{&quot;value&quot;:&quot;0&quot;,&quot;text&quot;:&quot;OFF&quot;},{&quot;value&quot;:&quot;1&quot;,&quot;text&quot;:&quot;ON&quot;}]" data-url="https://demo.s-cart.org/system_admin/updateConfigField" data-title="Enable module" data-value="0"></a>
          </td>
        </tr>
                <tr>
          <td style="width: 200px;">Paypal mode:</td>
          <td>
            <a href="#" class=" no-required" data-name="paypal_mode" data-type="select" data-pk="paypal_mode" data-source ="[{&quot;value&quot;:&quot;sandbox&quot;,&quot;text&quot;:&quot;sandbox&quot;},{&quot;value&quot;:&quot;live&quot;,&quot;text&quot;:&quot;live&quot;}]" data-url="https://demo.s-cart.org/system_admin/updateConfigField" data-title="Paypal mode" data-value="sandbox"></a>
          </td>
        </tr>
                <tr>
          <td style="width: 200px;">Client ID:</td>
          <td>
            <a href="#" class=" no-required" data-name="paypal_client_id" data-type="text" data-pk="paypal_client_id" data-source ="" data-url="https://demo.s-cart.org/system_admin/updateConfigField" data-title="Client ID" data-value=""></a>
          </td>
        </tr>
                <tr>
          <td style="width: 200px;">Secret:</td>
          <td>
            <a href="#" class=" no-required" data-name="paypal_secret" data-type="text" data-pk="paypal_secret" data-source ="" data-url="https://demo.s-cart.org/system_admin/updateConfigField" data-title="Secret" data-value=""></a>
          </td>
        </tr>
                <tr>
          <td style="width: 200px;">Enable log:</td>
          <td>
            <a href="#" class=" no-required" data-name="paypal_log" data-type="select" data-pk="paypal_log" data-source ="[{&quot;value&quot;:&quot;0&quot;,&quot;text&quot;:&quot;OFF&quot;},{&quot;value&quot;:&quot;1&quot;,&quot;text&quot;:&quot;ON&quot;}]" data-url="https://demo.s-cart.org/system_admin/updateConfigField" data-title="Enable log" data-value="1"></a>
          </td>
        </tr>
                <tr>
          <td style="width: 200px;">Path log (in storage):</td>
          <td>
            <a href="#" class=" no-required" data-name="paypal_path_log" data-type="text" data-pk="paypal_path_log" data-source ="" data-url="https://demo.s-cart.org/system_admin/updateConfigField" data-title="Path log (in storage)" data-value="logs/paypal.log"></a>
          </td>
        </tr>
                <tr>
          <td style="width: 200px;">Currency:</td>
          <td>
            <a href="#" class=" no-required" data-name="paypal_currency" data-type="text" data-pk="paypal_currency" data-source ="" data-url="https://demo.s-cart.org/system_admin/updateConfigField" data-title="Currency" data-value="USD"></a>
          </td>
        </tr>
                <tr>
          <td style="width: 200px;">Order status success:</td>
          <td>
            <a href="#" class=" no-required" data-name="paypal_order_status_success" data-type="text" data-pk="paypal_order_status_success" data-source ="" data-url="https://demo.s-cart.org/system_admin/updateConfigField" data-title="Order status success" data-value="1"></a>
          </td>
        </tr>
                <tr>
          <td style="width: 200px;">Order status faild:</td>
          <td>
            <a href="#" class=" no-required" data-name="paypal_order_status_faild" data-type="text" data-pk="paypal_order_status_faild" data-source ="" data-url="https://demo.s-cart.org/system_admin/updateConfigField" data-title="Order status faild" data-value="5"></a>
          </td>
        </tr>
              </table>



<script type="text/javascript">
$(document).ready(function() {
        $('.no-required').editable({});
        $('.fied-required').editable({
        validate: function(value) {
            if (value == '') {
                return 'Data not empty!';
            }
        }
    });
});
</script>

    </div><!-- /.box-body -->
</div></div></div>

    </section>
        <script data-exec-on-popstate>

    $(function () {
                    
$('.grid-switch-value').bootstrapSwitch({
    size:'mini',
    onText: 'ON',
    offText: 'OFF',
    onColor: 'primary',
    offColor: 'default',
    onSwitchChange: function(event, state){

        $(this).val(state ? 'on' : 'off');

        var pk = $(this).data('key');
        var value = $(this).val();

        $.ajax({
            url: "/system_admin/config_info/" + pk,
            type: "POST",
            data: {
                "value": value,
                _token: LA.token,
                _method: 'PUT'
            },
            success: function (data) {
                toastr.success(data.message);
            }
        });
    }
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
