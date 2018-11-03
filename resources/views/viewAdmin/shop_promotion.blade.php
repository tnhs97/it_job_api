
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>S-cart Admin  | Quản lý Promotion</title>
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
            Quản lý Promotion
            <small>Description</small>
        </h1>

        <!-- breadcrumb start -->
        
        <!-- breadcrumb end -->

    </section>

    <section class="content">

                        
        <div class="row"><div class="col-md-12"><div class="box">
    
    <div class="box-header with-border">
        <div class="pull-right">
            
            
<div class="btn-group pull-right" style="margin-right: 10px">
    <a href="/system_admin/shop_promotion/create" class="btn btn-sm btn-success" title="New">
        <i class="fa fa-save"></i><span class="hidden-xs">&nbsp;&nbsp;New</span>
    </a>
</div>

        </div>
        <span>
            <input type="checkbox" class="grid-select-all" />&nbsp;

<div class="btn-group">
    <a class="btn btn-sm btn-default">&nbsp;<span class="hidden-xs">Action</span></a>
    <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
        <span class="caret"></span>
        <span class="sr-only">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu" role="menu">
                    <li><a href="#" class="grid-batch-0">Delete</a></li>
            </ul>
</div> <a class="btn btn-sm btn-primary grid-refresh" title="Refresh"><i class="fa fa-refresh"></i><span class="hidden-xs"> Refresh</span></a> <div class="btn-group" style="margin-right: 10px" data-toggle="buttons">
    <label class="btn btn-sm btn-dropbox 5bcf3a2456570-filter-btn " title="Filter">
        <input type="checkbox"><i class="fa fa-filter"></i><span class="hidden-xs">&nbsp;&nbsp;Filter</span>
    </label>

    </div>
        </span>
    </div>

    <div class="box-header with-border hide" id="filter-box">
    <form action="https://demo.s-cart.org/system_admin/shop_promotion" class="form-horizontal" pjax-container method="get">

        <div class="row">
                        <div class="col-md-12">
                <div class="box-body">
                    <div class="fields-group">
                                                    <div class="form-group">
    <label class="col-sm-2 control-label"> ID</label>
    <div class="col-sm-8">
        <div class="input-group input-group-sm">
            <div class="input-group-addon">
            <i class="fa fa-pencil"></i>
        </div>

    <input type="text" class="form-control id" placeholder="ID" name="id" value="">
</div>    </div>
</div>
                                            </div>
                </div>
            </div>
                    </div>
        <!-- /.box-body -->

        <div class="box-footer">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="btn-group pull-left">
                            <button class="btn btn-info submit btn-sm"><i
                                        class="fa fa-search"></i>&nbsp;&nbsp;Search</button>
                        </div>
                        <div class="btn-group pull-left " style="margin-left: 10px;">
                            <a href="https://demo.s-cart.org/system_admin/shop_promotion" class="btn btn-default btn-sm"><i
                                        class="fa fa-undo"></i>&nbsp;&nbsp;Reset</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>

    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
            <thead>
                <tr>
                                        <th> </th>
                                        <th>ID<a class="fa fa-fw fa-sort" href="https://demo.s-cart.org/system_admin/shop_promotion?_sort%5Bcolumn%5D=id&_sort%5Btype%5D=desc"></a></th>
                                        <th>Coupon code</th>
                                        <th>Giá trị</th>
                                        <th>Loại</th>
                                        <th>Mô tả</th>
                                        <th>Được dùng</th>
                                        <th>Đã dùng</th>
                                        <th>History</th>
                                        <th>Bật/tắt</th>
                                        <th>Ngày hết hạn</th>
                                        <th>Action</th>
                                    </tr>
            </thead>

            <tbody>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="1" />
                    </td>
                                        <td >
                        1
                    </td>
                                        <td >
                        ABC-XAA01
                    </td>
                                        <td >
                        100,000
                    </td>
                                        <td >
                        <span class='label label-success'>VNĐ</span>
                    </td>
                                        <td >
                        Khuyến m&atilde;i đầu năm
                    </td>
                                        <td >
                        100
                    </td>
                                        <td >
                        2
                    </td>
                                        <td >
                        <a class="btn btn-xs btn-default grid-expand" data-inserted="0" data-key="1" data-toggle="collapse" data-target="#grid-collapse-1">
    <i class="fa fa-caret-right"></i> Lịch sử sử dụng
</a>
<template class="grid-expand-1">
    <div id="grid-collapse-1" class="collapse"><br><span style="padding-left:20px;"><i class="fa fa-angle-double-right"></i> Khách hàng ID2 dùng lúc 2018-05-20 22:04:28.  Nội dung: Đơn hàng 3</span><br><span style="padding-left:20px;"><i class="fa fa-angle-double-right"></i> Khách hàng ID3 dùng lúc 2018-05-22 06:22:35.  Nội dung: Đơn hàng 11</span><br><br></div>
</template>
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="1" />
                    </td>
                                        <td >
                        2018-08-11 00:00:00
                    </td>
                                        <td >
                        <a href="/system_admin/shop_promotion/1/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="1" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="2" />
                    </td>
                                        <td >
                        2
                    </td>
                                        <td >
                        KKB3-KLLA
                    </td>
                                        <td >
                        30
                    </td>
                                        <td >
                        <span class='label label-info'>%</span>
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        33
                    </td>
                                        <td >
                        2
                    </td>
                                        <td >
                        <a class="btn btn-xs btn-default grid-expand" data-inserted="0" data-key="2" data-toggle="collapse" data-target="#grid-collapse-2">
    <i class="fa fa-caret-right"></i> Lịch sử sử dụng
</a>
<template class="grid-expand-2">
    <div id="grid-collapse-2" class="collapse"><br><span style="padding-left:20px;"><i class="fa fa-angle-double-right"></i> Khách hàng ID3 dùng lúc 2018-06-03 14:20:25.  Nội dung: Order #48</span><br><span style="padding-left:20px;"><i class="fa fa-angle-double-right"></i> Khách hàng ID5 dùng lúc 2018-09-07 20:58:47.  Nội dung: Order #77</span><br><br></div>
</template>
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="2" />
                    </td>
                                        <td >
                        2018-10-11 00:00:00
                    </td>
                                        <td >
                        <a href="/system_admin/shop_promotion/2/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="2" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="3" />
                    </td>
                                        <td >
                        3
                    </td>
                                        <td >
                        PAA-LLK01
                    </td>
                                        <td >
                        100,000
                    </td>
                                        <td >
                        <span class='label label-warning'>Point</span>
                    </td>
                                        <td >
                        Tặng điểm kh&aacute;ch h&agrave;ng th&acirc;n thiết
                    </td>
                                        <td >
                        22
                    </td>
                                        <td >
                        1
                    </td>
                                        <td >
                        <a class="btn btn-xs btn-default grid-expand" data-inserted="0" data-key="3" data-toggle="collapse" data-target="#grid-collapse-3">
    <i class="fa fa-caret-right"></i> Lịch sử sử dụng
</a>
<template class="grid-expand-3">
    <div id="grid-collapse-3" class="collapse"><br><span style="padding-left:20px;"><i class="fa fa-angle-double-right"></i> Khách hàng ID3 dùng lúc 2018-05-22 14:06:21.  Nội dung: Order #43</span><br><br></div>
</template>
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="3" />
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        <a href="/system_admin/shop_promotion/3/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="3" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="4" />
                    </td>
                                        <td >
                        4
                    </td>
                                        <td >
                        VONN_KKH1
                    </td>
                                        <td >
                        150,000
                    </td>
                                        <td >
                        <span class='label label-success'>VNĐ</span>
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        1
                    </td>
                                        <td >
                        1
                    </td>
                                        <td >
                        <a class="btn btn-xs btn-default grid-expand" data-inserted="0" data-key="4" data-toggle="collapse" data-target="#grid-collapse-4">
    <i class="fa fa-caret-right"></i> Lịch sử sử dụng
</a>
<template class="grid-expand-4">
    <div id="grid-collapse-4" class="collapse"><br><span style="padding-left:20px;"><i class="fa fa-angle-double-right"></i> Khách hàng ID3 dùng lúc 2018-05-22 14:03:02.  Nội dung: </span><br><br></div>
</template>
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="4" />
                    </td>
                                        <td >
                        2019-03-08 00:00:00
                    </td>
                                        <td >
                        <a href="/system_admin/shop_promotion/4/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="4" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="5" />
                    </td>
                                        <td >
                        5
                    </td>
                                        <td >
                        PAA-LLK02
                    </td>
                                        <td >
                        150,000
                    </td>
                                        <td >
                        <span class='label label-warning'>Point</span>
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        111
                    </td>
                                        <td >
                        0
                    </td>
                                        <td >
                        <a class="btn btn-xs btn-default grid-expand" data-inserted="0" data-key="5" data-toggle="collapse" data-target="#grid-collapse-5">
    <i class="fa fa-caret-right"></i> Lịch sử sử dụng
</a>
<template class="grid-expand-5">
    <div id="grid-collapse-5" class="collapse"><br><br></div>
</template>
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="5" />
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        <a href="/system_admin/shop_promotion/5/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="5" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="6" />
                    </td>
                                        <td >
                        6
                    </td>
                                        <td >
                        VONN_KKH2
                    </td>
                                        <td >
                        900,000
                    </td>
                                        <td >
                        <span class='label label-success'>VNĐ</span>
                    </td>
                                        <td >
                        Refurn
                    </td>
                                        <td >
                        4
                    </td>
                                        <td >
                        1
                    </td>
                                        <td >
                        <a class="btn btn-xs btn-default grid-expand" data-inserted="0" data-key="6" data-toggle="collapse" data-target="#grid-collapse-6">
    <i class="fa fa-caret-right"></i> Lịch sử sử dụng
</a>
<template class="grid-expand-6">
    <div id="grid-collapse-6" class="collapse"><br><span style="padding-left:20px;"><i class="fa fa-angle-double-right"></i> Khách hàng ID3 dùng lúc 2018-05-27 10:53:16.  Nội dung: Order #45</span><br><br></div>
</template>
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="6" />
                    </td>
                                        <td >
                        2018-07-07 00:00:00
                    </td>
                                        <td >
                        <a href="/system_admin/shop_promotion/6/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="6" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="8" />
                    </td>
                                        <td >
                        8
                    </td>
                                        <td >
                        PAA-LLK03
                    </td>
                                        <td >
                        150,000
                    </td>
                                        <td >
                        <span class='label label-success'>VNĐ</span>
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        111
                    </td>
                                        <td >
                        1
                    </td>
                                        <td >
                        <a class="btn btn-xs btn-default grid-expand" data-inserted="0" data-key="8" data-toggle="collapse" data-target="#grid-collapse-8">
    <i class="fa fa-caret-right"></i> Lịch sử sử dụng
</a>
<template class="grid-expand-8">
    <div id="grid-collapse-8" class="collapse"><br><span style="padding-left:20px;"><i class="fa fa-angle-double-right"></i> Khách hàng ID3 dùng lúc 2018-06-03 14:56:26.  Nội dung: Order #50</span><br><br></div>
</template>
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="8" />
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        <a href="/system_admin/shop_promotion/8/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="8" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="9" />
                    </td>
                                        <td >
                        9
                    </td>
                                        <td >
                        PAA-LLK04
                    </td>
                                        <td >
                        150,000
                    </td>
                                        <td >
                        <span class='label label-success'>VNĐ</span>
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        111
                    </td>
                                        <td >
                        2
                    </td>
                                        <td >
                        <a class="btn btn-xs btn-default grid-expand" data-inserted="0" data-key="9" data-toggle="collapse" data-target="#grid-collapse-9">
    <i class="fa fa-caret-right"></i> Lịch sử sử dụng
</a>
<template class="grid-expand-9">
    <div id="grid-collapse-9" class="collapse"><br><span style="padding-left:20px;"><i class="fa fa-angle-double-right"></i> Khách hàng ID3 dùng lúc 2018-06-03 15:15:19.  Nội dung: Order #51</span><br><span style="padding-left:20px;"><i class="fa fa-angle-double-right"></i> Khách hàng ID5 dùng lúc 2018-09-06 18:59:25.  Nội dung: Order #76</span><br><br></div>
</template>
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="9" />
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        <a href="/system_admin/shop_promotion/9/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="9" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="10" />
                    </td>
                                        <td >
                        10
                    </td>
                                        <td >
                        PAA-LLK05
                    </td>
                                        <td >
                        150,000
                    </td>
                                        <td >
                        <span class='label label-success'>VNĐ</span>
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        111
                    </td>
                                        <td >
                        1
                    </td>
                                        <td >
                        <a class="btn btn-xs btn-default grid-expand" data-inserted="0" data-key="10" data-toggle="collapse" data-target="#grid-collapse-10">
    <i class="fa fa-caret-right"></i> Lịch sử sử dụng
</a>
<template class="grid-expand-10">
    <div id="grid-collapse-10" class="collapse"><br><span style="padding-left:20px;"><i class="fa fa-angle-double-right"></i> Khách hàng ID3 dùng lúc 2018-06-03 15:41:31.  Nội dung: Order #52</span><br><br></div>
</template>
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="10" />
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        <a href="/system_admin/shop_promotion/10/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="10" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="11" />
                    </td>
                                        <td >
                        11
                    </td>
                                        <td >
                        PAA-LLK06
                    </td>
                                        <td >
                        150,000
                    </td>
                                        <td >
                        <span class='label label-success'>VNĐ</span>
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        111
                    </td>
                                        <td >
                        1
                    </td>
                                        <td >
                        <a class="btn btn-xs btn-default grid-expand" data-inserted="0" data-key="11" data-toggle="collapse" data-target="#grid-collapse-11">
    <i class="fa fa-caret-right"></i> Lịch sử sử dụng
</a>
<template class="grid-expand-11">
    <div id="grid-collapse-11" class="collapse"><br><span style="padding-left:20px;"><i class="fa fa-angle-double-right"></i> Khách hàng ID3 dùng lúc 2018-06-05 23:01:53.  Nội dung: Order #62</span><br><br></div>
</template>
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="11" />
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        <a href="/system_admin/shop_promotion/11/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="11" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="13" />
                    </td>
                                        <td >
                        13
                    </td>
                                        <td >
                        PAA-LLK07
                    </td>
                                        <td >
                        219,999
                    </td>
                                        <td >
                        <span class='label label-success'>VNĐ</span>
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        111
                    </td>
                                        <td >
                        2
                    </td>
                                        <td >
                        <a class="btn btn-xs btn-default grid-expand" data-inserted="0" data-key="13" data-toggle="collapse" data-target="#grid-collapse-13">
    <i class="fa fa-caret-right"></i> Lịch sử sử dụng
</a>
<template class="grid-expand-13">
    <div id="grid-collapse-13" class="collapse"><br><span style="padding-left:20px;"><i class="fa fa-angle-double-right"></i> Khách hàng ID3 dùng lúc 2018-09-23 12:41:07.  Nội dung: Order #93</span><br><br></div>
</template>
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="13" />
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        <a href="/system_admin/shop_promotion/13/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="13" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="15" />
                    </td>
                                        <td >
                        15
                    </td>
                                        <td >
                        PAA-LLK08
                    </td>
                                        <td >
                        219,999
                    </td>
                                        <td >
                        <span class='label label-success'>VNĐ</span>
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        111
                    </td>
                                        <td >
                        2
                    </td>
                                        <td >
                        <a class="btn btn-xs btn-default grid-expand" data-inserted="0" data-key="15" data-toggle="collapse" data-target="#grid-collapse-15">
    <i class="fa fa-caret-right"></i> Lịch sử sử dụng
</a>
<template class="grid-expand-15">
    <div id="grid-collapse-15" class="collapse"><br><span style="padding-left:20px;"><i class="fa fa-angle-double-right"></i> Khách hàng ID3 dùng lúc 2018-09-23 12:44:03.  Nội dung: Order #94</span><br><br></div>
</template>
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="15" />
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        <a href="/system_admin/shop_promotion/15/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="15" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="16" />
                    </td>
                                        <td >
                        16
                    </td>
                                        <td >
                        PAA-LLK09
                    </td>
                                        <td >
                        219,999
                    </td>
                                        <td >
                        <span class='label label-success'>VNĐ</span>
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        111
                    </td>
                                        <td >
                        2
                    </td>
                                        <td >
                        <a class="btn btn-xs btn-default grid-expand" data-inserted="0" data-key="16" data-toggle="collapse" data-target="#grid-collapse-16">
    <i class="fa fa-caret-right"></i> Lịch sử sử dụng
</a>
<template class="grid-expand-16">
    <div id="grid-collapse-16" class="collapse"><br><span style="padding-left:20px;"><i class="fa fa-angle-double-right"></i> Khách hàng ID3 dùng lúc 2018-09-23 12:46:05.  Nội dung: Order #95</span><br><br></div>
</template>
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="16" />
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        <a href="/system_admin/shop_promotion/16/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="16" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="17" />
                    </td>
                                        <td >
                        17
                    </td>
                                        <td >
                        PAA-LLK010
                    </td>
                                        <td >
                        219,999
                    </td>
                                        <td >
                        <span class='label label-success'>VNĐ</span>
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        111
                    </td>
                                        <td >
                        2
                    </td>
                                        <td >
                        <a class="btn btn-xs btn-default grid-expand" data-inserted="0" data-key="17" data-toggle="collapse" data-target="#grid-collapse-17">
    <i class="fa fa-caret-right"></i> Lịch sử sử dụng
</a>
<template class="grid-expand-17">
    <div id="grid-collapse-17" class="collapse"><br><span style="padding-left:20px;"><i class="fa fa-angle-double-right"></i> Khách hàng ID3 dùng lúc 2018-09-23 12:48:40.  Nội dung: Order #96</span><br><br></div>
</template>
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="17" />
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        <a href="/system_admin/shop_promotion/17/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="17" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                            </tbody>
        </table>

    </div>

    

    <div class="box-footer clearfix">
        Showing <b>1</b> to <b>14</b> of <b>14</b> entries<ul class="pagination pagination-sm no-margin pull-right">
    <!-- Previous Page Link -->
        <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
    
    <!-- Pagination viewAdmin.elements -->
        <!-- "Three Dots" Separator -->
    
    <!-- Array Of Links -->
                <li class="page-item active"><span class="page-link">1</span></li>
                
    <!-- Next Page Link -->
        <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
    </ul>

<label class="control-label pull-right" style="margin-right: 10px; font-weight: 100;">

        <small>Show</small>&nbsp;
        <select class="input-sm grid-per-pager" name="per-page">
            <option value="https://demo.s-cart.org/system_admin/shop_promotion?per_page=10" >10</option>
<option value="https://demo.s-cart.org/system_admin/shop_promotion?per_page=20" selected>20</option>
<option value="https://demo.s-cart.org/system_admin/shop_promotion?per_page=30" >30</option>
<option value="https://demo.s-cart.org/system_admin/shop_promotion?per_page=50" >50</option>
<option value="https://demo.s-cart.org/system_admin/shop_promotion?per_page=100" >100</option>
        </select>
        &nbsp;<small>entries</small>
    </label>

    </div>
    <!-- /.box-body -->
</div>
</div></div>

    </section>
        <script data-exec-on-popstate>

    $(function () {
                    $('.grid-row-checkbox').iCheck({checkboxClass:'icheckbox_minimal-blue'}).on('ifChanged', function () {
    if (this.checked) {
        $(this).closest('tr').css('background-color', '#ffffd5');
    } else {
        $(this).closest('tr').css('background-color', '');
    }
});

var selectedRows = function () {
    var selected = [];
    $('.grid-row-checkbox:checked').each(function(){
        selected.push($(this).data('id'));
    });

    return selected;
}

                    
$('.grid-expand').on('click', function () {
    if ($(this).data('inserted') == '0') {
        var key = $(this).data('key');
        var row = $(this).closest('tr');
        var html = $('template.grid-expand-'+key).html();

        row.after("<tr><td colspan='"+row.find('td').length+"' style='padding:0 !important; border:0px;'>"+html+"</td></tr>");

        $(this).data('inserted', 1);
    }

    $("i", this).toggleClass("fa-caret-right fa-caret-down");
});
                    
$('.grid-switch-status').bootstrapSwitch({
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
            url: "/system_admin/shop_promotion/" + pk,
            type: "POST",
            data: {
                "status": value,
                _token: LA.token,
                _method: 'PUT'
            },
            success: function (data) {
                toastr.success(data.message);
            }
        });
    }
});

                    
$('.grid-row-delete').unbind('click').click(function() {

    var id = $(this).data('id');

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
                    url: '/system_admin/shop_promotion/' + id,
                    data: {
                        _method:'delete',
                        _token:LA.token,
                    },
                    success: function (data) {
                        $.pjax.reload('#pjax-container');

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

                    
$('.grid-select-all').iCheck({checkboxClass:'icheckbox_minimal-blue'});

$('.grid-select-all').on('ifChanged', function(event) {
    if (this.checked) {
        $('.grid-row-checkbox').iCheck('check');
    } else {
        $('.grid-row-checkbox').iCheck('uncheck');
    }
});

                    
$('.grid-batch-0').on('click', function() {

    var id = selectedRows().join();

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
                    url: '/system_admin/shop_promotion/' + id,
                    data: {
                        _method:'delete',
                        _token:'2OSjS2rhXhGRhQYksSMBeGgbMZR5CO29pgYG2RLa'
                    },
                    success: function (data) {
                        $.pjax.reload('#pjax-container');

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

                    
$('.grid-refresh').on('click', function() {
    $.pjax.reload('#pjax-container');
    toastr.success('Refresh succeeded !');
});

                    $('.5bcf3a2456570-filter-btn').click(function (e) {
    if ($('#filter-box').is(':visible')) {
        $('#filter-box').addClass('hide');
    } else {
        $('#filter-box').removeClass('hide');
    }
});
                    
$('.grid-per-pager').on("change", function(e) {
    $.pjax({url: this.value, container: '#pjax-container'});
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
