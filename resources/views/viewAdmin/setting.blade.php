
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IT-Jobs Admin  | Admin setting</title>
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
                Admin setting
                <small>Description</small>
            </h1>

            <!-- breadcrumb start -->

            <!-- breadcrumb end -->

        </section>

        <section class="content">


            <div class="row"><div class="col-md-12"><div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit</h3>


                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="{!! url('/api/setting') !!}" method="post" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data" >

                    <div class="box-body">

                        <div class="fields-group">

                            <div class="form-group ">
                                <label class="col-sm-2  control-label">Username</label>
                                <div class="col-sm-8">

                                    <input type="text" class="box box-solid box-default no-margin" name="username" value="{!! old('username',isset($data)? $data['username']: null) !!}"  />


                                </div>
                            </div>
                            
                            <div class="form-group  ">

                                <label for="avatar" class="col-sm-2  control-label">Avatar</label>

                                <div class="col-sm-8">


                                    <input type="file" class="avatar" name="avatar" data-initial-preview="" data-initial-caption="" />


                                </div>
                            </div>

                            <div class="form-group  ">

                                <label for="password" class="col-sm-2  control-label">Password</label>

                                <div class="col-sm-8">


                                    <div class="input-group">

                                        <span class="input-group-addon"><i class="fa fa-eye-slash fa-fw"></i></span>

                                        <input type="password" id="password" name="password" value="" class="form-control password" placeholder="Input Password" />


                                    </div>


                                </div>
                            </div>
                            <div class="form-group  ">

                                <label for="password_confirmation" class="col-sm-2  control-label">Password confirmation</label>

                                <div class="col-sm-8">


                                    <div class="input-group">

                                        <span class="input-group-addon"><i class="fa fa-eye-slash fa-fw"></i></span>

                                        <input type="password" id="password_confirmation" name="password_confirmation" value="" class="form-control password_confirmation" placeholder="Input Password confirmation" />


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
                            <div class="btn-group pull-left">
                                <button type="reset" class="btn btn-warning">Reset</button>
                            </div>
                        </div>
                    </div>

                    


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

    <strong>IT-Jobs</strong> 
</footer>

</div>

<script>
    function LA() {}
    LA.token = "S1LncOTsX6BqbTUqHCYNYLTI1192IQImxY2vjoXJ";
</script>

@include("viewAdmin.elements.script")


</body>
</html>
