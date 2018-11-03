
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>S-cart Admin  | Product manager</title>
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
            Product manager
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
    <a href="https://demo.s-cart.org/system_admin/shop_product" class="btn btn-sm btn-default" title="List"><i class="fa fa-list"></i><span class="hidden-xs">&nbsp;List</span></a>
</div>
        </div>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form action="https://demo.s-cart.org/system_admin/shop_product" method="post" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data" pjax-container>

        <div class="box-body">

                            <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">

                    <li class=active>
                <a href="#tab-form-1" data-toggle="tab">
                    Product info <i class="fa fa-exclamation-circle text-red hide"></i>
                </a>
            </li>
                    <li >
                <a href="#tab-form-2" data-toggle="tab">
                    Other image <i class="fa fa-exclamation-circle text-red hide"></i>
                </a>
            </li>
        
    </ul>
    <div class="tab-content fields-group">

                    <div class="tab-pane active" id="tab-form-1">
                                    <div class="form-group">
    <label  class="col-sm-2  control-label"></label>
    <div class="col-sm-8">
        <b>English</b> <img style="height:25px" src="/documents/website/language/flag_uk.png">
    </div>
</div>
                                    <div class="form-group  ">

    <label for="en__name" class="col-sm-2  control-label">Product name</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="en__name" name="en__name" value="" class="form-control en__name" placeholder="Input Product name" />

            
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

        
        <textarea name="en__description" class="form-control en__description" rows="5" placeholder="Input Description"  ></textarea>

        
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

<label for="category_id" class="col-sm-2  control-label">Shop category</label>

    <div class="col-sm-8">

        
        <input type="hidden" name="category_id"/>

        <select class="form-control category_id" style="width: 100%;" name="category_id" data-value="" >
                            <option value=""></option>
                                    <option value="1" >SPORTSWEAR</option>
                                    <option value="11" >-- DIOR</option>
                                    <option value="12" >-- VALENTINO</option>
                                    <option value="2" >MENS</option>
                                    <option value="10" >-- VALENTINO</option>
                                    <option value="16" >-- NIKE</option>
                                    <option value="3" >WOMENS</option>
                                    <option value="17" >-- UNDER ARMOUR</option>
                                    <option value="18" >-- ADIDAS</option>
                                    <option value="4" >KIDS</option>
                                    <option value="7" >-- PUMA</option>
                                    <option value="8" >-- ASICS</option>
                                    <option value="14" >-- FENDI</option>
                                    <option value="5" >FASHION</option>
                                    <option value="15" >-- FENDI</option>
                                    <option value="9" >HOUSEHOLDS</option>
                                    <option value="6" >-- GUESS</option>
                                    <option value="13" >-- DIOR</option>
                                    </select>

        
    </div>
</div>

                                    <div class="form-group  ">

    <label for="image" class="col-sm-2  control-label">Image</label>

    <div class="col-sm-8">

        
        <input type="file" class="image" name="image"  />

        
    </div>
</div>

                                    <div class="form-group  ">

    <label for="price" class="col-sm-2  control-label">Price for sale</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon">VND</span>
            
            <input style="width: 120px" type="text" id="price" name="price" value="" class="form-control price" placeholder="Input Price for sale" />

            
        </div>

        
    </div>
</div>
                                    <div class="form-group  ">

    <label for="cost" class="col-sm-2  control-label">Price cost</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon">VND</span>
            
            <input style="width: 120px" type="text" id="cost" name="cost" value="" class="form-control cost" placeholder="Input Price cost" />

            
        </div>

        
    </div>
</div>
                                    <div class="form-group  ">

    <label for="stock" class="col-sm-2  control-label">Stock</label>

    <div class="col-sm-8">

        
        <div class="input-group">

            
            <input style="width: 100px" type="text" id="stock" name="stock" value="0" class="form-control stock" placeholder="Input Stock" />

            
        </div>

        
    </div>
</div>
                                    <div class="form-group  ">

    <label for="sku" class="col-sm-2  control-label">SKU</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="sku" name="sku" value="" class="form-control sku" placeholder="Ex: ABKOOT01,ABKOOT02,..." />

            
        </div>

        <span class="help-block">
    <i class="fa fa-info-circle"></i>&nbsp;This field must be onlyone. Only use a-z and 0-9.
</span>

    </div>
</div>
                                    <div class="form-group  ">

<label for="brand_id" class="col-sm-2  control-label">Brands</label>

    <div class="col-sm-8">

        
        <input type="hidden" name="brand_id"/>

        <select class="form-control brand_id" style="width: 100%;" name="brand_id" data-value="0" >
                            <option value=""></option>
                                    <option value="0" selected>-- Brands --</option>
                                    <option value="1" >Husq</option>
                                    <option value="2" >Ideal</option>
                                    <option value="3" >Apex</option>
                                    <option value="4" >CST</option>
                                    <option value="5" >Klein</option>
                                    <option value="6" >Metabo</option>
                                    </select>

        
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

    <label for="sort" class="col-sm-2  control-label">Sort</label>

    <div class="col-sm-8">

        
        <div class="input-group">

            
            <input style="width: 100px" type="text" id="sort" name="sort" value="0" class="form-control sort" placeholder="Input Sort" />

            
        </div>

        
    </div>
</div>
                                    <hr>
                                    <div class="form-group  ">

    <label for="type" class="col-sm-2  control-label">Product type</label>

    <div class="col-sm-8">

        
                                    <label class="radio-inline">
                    <input type="radio" name="type" value="0" class="minimal type" checked  />&nbsp;Default&nbsp;&nbsp;
                </label>
                                                <label class="radio-inline">
                    <input type="radio" name="type" value="1" class="minimal type"   />&nbsp;New&nbsp;&nbsp;
                </label>
                    
        
    </div>
</div>

                                    <div class="form-group  ">

    <label for="date_available" class="col-sm-2  control-label">Date available</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
            
            <input style="width: 160px" type="text" id="date_available" name="date_available" value="" class="form-control date_available" placeholder="Input Date available" />

            
        </div>

        <span class="help-block">
    <i class="fa fa-info-circle"></i>&nbsp;Allows purchase from creation date as default.
</span>

    </div>
</div>
                            </div>
                    <div class="tab-pane " id="tab-form-2">
                                    <div class="row">
    <div class="col-sm-2 "><h4 class="pull-right"> </h4></div>
    <div class="col-sm-8"></div>
</div>

<hr style="margin-top: 0px;">

<div id="has-many-images" class="has-many-images">

    <div class="has-many-images-forms">

            </div>

    <template class="images-tpl">
        <div class="has-many-images-form fields-group">

            <div class="form-group  ">

    <label for="image" class="col-sm-2  control-label">Other image</label>

    <div class="col-sm-8">

        
        <input type="file" class="images new___LA_KEY__ image" name="images[new___LA_KEY__][image]"  />

        
    </div>
</div>
<input type="hidden" name="images[new___LA_KEY__][id]" value="" class="images new___LA_KEY__ id"  />
<input type="hidden" name="images[new___LA_KEY__][_remove_]" value="0" class="images new___LA_KEY__ _remove_ fom-removed"  />


            <div class="form-group">
                <label class="col-sm-2  control-label"></label>
                <div class="col-sm-8">
                    <div class="remove btn btn-warning btn-sm pull-right"><i class="fa fa-trash"></i>&nbsp;Remove</div>
                </div>
            </div>
            <hr>
        </div>
    </template>

    <div class="form-group">
        <label class="col-sm-2  control-label"></label>
        <div class="col-sm-8">
            <div class="add btn btn-success btn-sm"><i class="fa fa-save"></i>&nbsp;New</div>
        </div>
    </div>

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

                    <input type="hidden" name="_previous_" value="https://demo.s-cart.org/system_admin/shop_product" class="_previous_"  />

        
        <!-- /.box-footer -->
    </form>
</div>

</div></div>

    </section>
        <script data-exec-on-popstate>

    $(function () {
                    
var hash = document.location.hash;
if (hash) {
    $('.nav-tabs a[href="' + hash + '"]').tab('show');
}

// Change hash for page-reload
$('.nav-tabs a').on('shown.bs.tab', function (e) {
    history.pushState(null,null, e.target.hash);
});

if ($('.has-error').length) {
    $('.has-error').each(function () {
        var tabId = '#'+$(this).closest('.tab-pane').attr('id');
        $('li a[href="'+tabId+'"] i').removeClass('hide');
    });

    var first = $('.has-error:first').closest('.tab-pane').attr('id');
    $('li a[href="#'+first+'"]').tab('show');
}

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
            
                    $(".category_id").select2({"allowClear":true,"placeholder":{"id":"","text":"Shop category"}});
                    
$("input.image").fileinput({"overwriteInitial":true,"initialPreviewAsData":true,"browseLabel":"Browse","showRemove":false,"showUpload":false,"deleteExtraData":{"image":"_file_del_","_file_del_":"","_token":"YkDCfkRWPRyZTW2zQVo3IfKy3x6paUJmuFe7BBwx","_method":"PUT"},"deleteUrl":"https:\/\/demo.s-cart.org\/system_admin\/","allowedFileTypes":["image"]});

                    $('.price').inputmask({"alias":"currency","radixPoint":".","prefix":"","removeMaskOnSubmit":true,"digits":0});
                    $('.cost').inputmask({"alias":"currency","radixPoint":".","prefix":"","removeMaskOnSubmit":true,"digits":0});
                    
$('.stock:not(.initialized)')
    .addClass('initialized')
    .bootstrapNumber({
        upClass: 'success',
        downClass: 'primary',
        center: true
    });

                    $(".brand_id").select2({"allowClear":true,"placeholder":{"id":"","text":"Brands"}});
                    
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

                    
$('.sort:not(.initialized)')
    .addClass('initialized')
    .bootstrapNumber({
        upClass: 'success',
        downClass: 'primary',
        center: true
    });

                    $('.type').iCheck({radioClass:'iradio_minimal-blue'});
                    $('.date_available').parent().datetimepicker({"format":"YYYY-MM-DD HH:mm:ss","locale":"en","allowInputToggle":true});
                    var index = 0;
$('#has-many-images').on('click', '.add', function () {

    var tpl = $('template.images-tpl');

    index++;

    var template = tpl.html().replace(/__LA_KEY__/g, index);
    $('.has-many-images-forms').append(template);
    
$("input.images.new___LA_KEY__.image").fileinput({"overwriteInitial":true,"initialPreviewAsData":true,"browseLabel":"Browse","showRemove":false,"showUpload":false,"deleteExtraData":{"image":"_file_del_","_file_del_":"","_token":"YkDCfkRWPRyZTW2zQVo3IfKy3x6paUJmuFe7BBwx","_method":"PUT"},"deleteUrl":"https:\/\/demo.s-cart.org\/system_admin\/","allowedFileTypes":["image"]});

});

$('#has-many-images').on('click', '.remove', function () {
    $(this).closest('.has-many-images-form').hide();
    $(this).closest('.has-many-images-form').find('.fom-removed').val(1);
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
