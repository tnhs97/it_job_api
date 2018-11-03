
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>S-cart Admin  | Special price manager</title>
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
            Special price manager
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
    <a href="https://demo.s-cart.org/system_admin/shop_special_price" class="btn btn-sm btn-default" title="List"><i class="fa fa-list"></i><span class="hidden-xs">&nbsp;List</span></a>
</div>
        </div>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form action="https://demo.s-cart.org/system_admin/shop_special_price" method="post" accept-charset="UTF-8" class="form-horizontal" pjax-container>

        <div class="box-body">

                            <div class="fields-group">

                                                                        <div class="form-group  ">

<label for="product_id" class="col-sm-2  control-label">Product</label>

    <div class="col-sm-8">

        
        <input type="hidden" name="product_id"/>

        <select class="form-control product_id" style="width: 100%;" name="product_id" data-value="" >
                            <option value=""></option>
                                    <option value="30" >Easy Polo Black Edition (3D-BELT-GT2)</option>
                                    <option value="21" >Easy Polo Black Edition (3D-CARBON1.75)</option>
                                    <option value="22" >Easy Polo Black Edition (3D-GOLD1.75)</option>
                                    <option value="32" >Easy Polo Black Edition (3D-HOTWIRE1240)</option>
                                    <option value="35" >Easy Polo Black Edition (3D-SENSOR-NTC 100K)</option>
                                    <option value="29" >Easy Polo Black Edition (3D-TEFLONLOCK)</option>
                                    <option value="31" >Easy Polo Black Edition (3D-TEFLONLOCK-M10)</option>
                                    <option value="33" >Easy Polo Black Edition (3D-TEFTLON-24)</option>
                                    <option value="34" >Easy Polo Black Edition (3D-TEFTLON-W24)</option>
                                    <option value="12" >Easy Polo Black Edition (3DHLFD)</option>
                                    <option value="28" >Easy Polo Black Edition (3DNOZZLE)</option>
                                    <option value="10" >Easy Polo Black Edition (A4988)</option>
                                    <option value="27" >Easy Polo Black Edition (ANYCUBIC-I3M)</option>
                                    <option value="11" >Easy Polo Black Edition (ANYCUBIC-P)</option>
                                    <option value="37" >Easy Polo Black Edition (ARDUINO-NANO)</option>
                                    <option value="47" >Easy Polo Black Edition (BX-5U0)</option>
                                    <option value="48" >Easy Polo Black Edition (BX-5UT)</option>
                                    <option value="49" >Easy Polo Black Edition (BX-5UTbnv)</option>
                                    <option value="5" >Easy Polo Black Edition (CLOCKFAN1)</option>
                                    <option value="6" >Easy Polo Black Edition (CLOCKFAN2)</option>
                                    <option value="7" >Easy Polo Black Edition (CLOCKFAN3)</option>
                                    <option value="26" >Easy Polo Black Edition (EFULL-3D)</option>
                                    <option value="9" >Easy Polo Black Edition (FILAMENT)</option>
                                    <option value="23" >Easy Polo Black Edition (LCD12864-3D)</option>
                                    <option value="24" >Easy Polo Black Edition (LCD2004-3D)</option>
                                    <option value="4" >Easy Polo Black Edition (LEDFAN1)</option>
                                    <option value="38" >Easy Polo Black Edition (LEDSTRIP-5050RGB)</option>
                                    <option value="39" >Easy Polo Black Edition (LEDSTRIP-S)</option>
                                    <option value="45" >Easy Polo Black Edition (LFF)</option>
                                    <option value="3" >Easy Polo Black Edition (MEGA2560)</option>
                                    <option value="36" >Easy Polo Black Edition (nRLF24L01+2.4HZ)</option>
                                    <option value="42" >Easy Polo Black Edition (P10-IB)</option>
                                    <option value="41" >Easy Polo Black Edition (P10-IG)</option>
                                    <option value="40" >Easy Polo Black Edition (P10-IR)</option>
                                    <option value="44" >Easy Polo Black Edition (P10-IRG)</option>
                                    <option value="43" >Easy Polo Black Edition (P10-IRGB)</option>
                                    <option value="46" >Easy Polo Black Edition (P2.5-I)</option>
                                    <option value="25" >Easy Polo Black Edition (RAMPS1.5-3D)</option>
                                    <option value="20" >Easy Polo Black Edition (SS495A)</option>
                                    <option value="8" >Easy Polo Black Edition (TMC2208)</option>
                                    </select>

        
    </div>
</div>

                                                    <div class="form-group">
    <label  class="col-sm-2  control-label">Origin price</label>
    <div class="col-sm-8">
        
        <div class="input-group">
        <span class="input-group-addon">VNĐ</span><input disabled style="width: 120px; text-align: right;" type="text" id="price-old"  value="0" class="form-control price">
        </div>
    </div>
</div>
                                                    <div class="form-group  ">

    <label for="off" class="col-sm-2  control-label">Discount percent</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon">%</span>
            
            <input style="width: 120px" type="text" id="off" name="off" value="0" class="form-control off" placeholder="Input Discount percent" />

            
        </div>

        
    </div>
</div>
                                                    <div class="form-group  ">

    <label for="price" class="col-sm-2  control-label">Special price</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon">VND</span>
            
            <input style="width: 120px" type="text" id="price" name="price" value="0" class="form-control price" placeholder="Input Special price" />

            
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

                                                    <div class="form-group  ">

    <label for="date_start" class="col-sm-2  control-label">Date start</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
            
            <input style="width: 160px" type="text" id="date_start" name="date_start" value="" class="form-control date_start" placeholder="Input Date start" />

            
        </div>

        
    </div>
</div>
                                                    <div class="form-group  ">

    <label for="date_end" class="col-sm-2  control-label">Date end</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
            
            <input style="width: 160px" type="text" id="date_end" name="date_end" value="" class="form-control date_end" placeholder="Input Date end" />

            
        </div>

        
    </div>
</div>
                                                    <div class="form-group  ">

    <label for="comment" class="col-sm-2  control-label">Comment</label>

    <div class="col-sm-8">

        
        <textarea name="comment" class="form-control comment" rows="5" placeholder="Input Comment"  ></textarea>

        
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

                    <input type="hidden" name="_previous_" value="https://demo.s-cart.org/system_admin/shop_special_price" class="_previous_"  />

        
        <!-- /.box-footer -->
    </form>
</div>

</div></div>

    </section>
        <script data-exec-on-popstate>

    $(function () {
                            $(document).ready(function(){
            var id = $('select[name*="product_id"]').val();
            $.ajax({
                url : 'https://demo.s-cart.org/system_admin/getInfoProduct',
                type : "get",
                datatype : "json",
                dateType:"application/json; charset=utf-8",
                data : {
                     id : id
                },
                success: function(result){
                    console.log(result);
                    var returnedData = JSON.parse(result);
                    $('#price-old').val(returnedData.price);
                }
            });
        });

        $('[name*="product_id"]').change(function(){
            var id = $(this).val();
                $.ajax({
                    url : 'https://demo.s-cart.org/system_admin/getInfoProduct',
                    type : "get",
                    datatype : "json",
                    dateType:"application/json; charset=utf-8",
                    data : {
                         id : id
                    },
                    success: function(result){
                        var returnedData = JSON.parse(result);
                        $('#price-old').val(returnedData.price);
                        var newPrice = returnedData.price * (100 - parseInt($('#off').val())) /100;
                        $('#price').val(newPrice);
                    }
                });
        });

    $('#off').change(function(){
    var newPrice = $('#price-old').val().replace(',','') * (100 - parseInt($('#off').val())) /100;
    $('#price').val(newPrice);
    });


  function formatNumber (num) {
      return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
  }


                    $(".product_id").select2({"allowClear":true,"placeholder":{"id":"","text":"Product"}});
                    $('.off').inputmask({"alias":"currency","radixPoint":".","prefix":"","removeMaskOnSubmit":true,"digits":0});
                    $('.price').inputmask({"alias":"currency","radixPoint":".","prefix":"","removeMaskOnSubmit":true,"digits":0});
                    
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

                    $('.date_start').parent().datetimepicker({"format":"YYYY-MM-DD HH:mm:ss","locale":"en","allowInputToggle":true});
                    $('.date_end').parent().datetimepicker({"format":"YYYY-MM-DD HH:mm:ss","locale":"en","allowInputToggle":true});
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
