<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Danh sách khách hàng
    </title>
    @include("viewAdmin.elements.stylesheet")
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <!-- Main Header -->
      <header class="main-header">
        <!-- Logo -->
        <a href="/test/public/" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">
            <b>S-cart
            </b>
          </span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">
            <img src="{{ asset('image/img/scart-min.png')}}">
          </span>
        </a>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation
            </span>
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
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search">
                  </i>
                </button>
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
            Danh sách khách hàng
            <small>Description
            </small>
          </h1>
          <!-- breadcrumb start -->
          <!-- breadcrumb end -->
        </section>
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <div class="pull-right">
                    <div class="btn-group pull-right" style="margin-right: 10px">
                      <a class="btn btn-sm btn-twitter" title="Export">
                        <i class="fa fa-download">
                        </i>
                        <span class="hidden-xs"> Export
                        </span>
                      </a>
                      <button type="button" class="btn btn-sm btn-twitter dropdown-toggle" data-toggle="dropdown">
                        <span class="caret">
                        </span>
                        <span class="sr-only">Toggle Dropdown
                        </span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li>
                          <a href="/system_admin/shop_customer?_export_=all" target="_blank">All
                          </a>
                        </li>
                        <li>
                          <a href="/system_admin/shop_customer?_export_=page%3A1" target="_blank">Current page
                          </a>
                        </li>
                        <li>
                          <a href="/system_admin/shop_customer?_export_=selected%3A__rows__" target="_blank" class='export-selected'>Selected rows
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="btn-group pull-right" style="margin-right: 10px">
                      <a href="/system_admin/shop_customer/create" class="btn btn-sm btn-success" title="New">
                        <i class="fa fa-save">
                        </i>
                        <span class="hidden-xs">&nbsp;&nbsp;New
                        </span>
                      </a>
                    </div>
                  </div>
                  <span>
                    <input type="checkbox" class="grid-select-all" />&nbsp;
                    <div class="btn-group">
                      <a class="btn btn-sm btn-default">&nbsp;
                        <span class="hidden-xs">Action
                        </span>
                      </a>
                      <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                        <span class="caret">
                        </span>
                        <span class="sr-only">Toggle Dropdown
                        </span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li>
                          <a href="#" class="grid-batch-0">Delete
                          </a>
                        </li>
                      </ul>
                    </div> 
                    <a class="btn btn-sm btn-primary grid-refresh" title="Refresh">
                      <i class="fa fa-refresh">
                      </i>
                      <span class="hidden-xs"> Refresh
                      </span>
                    </a> 
                    <div class="btn-group" style="margin-right: 10px" data-toggle="buttons">
                      <label class="btn btn-sm btn-dropbox 5bcf39fd7de7f-filter-btn " title="Filter">
                        <input type="checkbox">
                        <i class="fa fa-filter">
                        </i>
                        <span class="hidden-xs">&nbsp;&nbsp;Filter
                        </span>
                      </label>
                    </div>
                  </span>
                </div>
                <div class="box-header with-border hide" id="filter-box">
                  <form action="https://demo.s-cart.org/system_admin/shop_customer" class="form-horizontal" pjax-container method="get">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="box-body">
                          <div class="fields-group">
                            <div class="form-group">
                              <label class="col-sm-2 control-label"> ID
                              </label>
                              <div class="col-sm-8">
                                <div class="input-group input-group-sm">
                                  <div class="input-group-addon">
                                    <i class="fa fa-pencil">
                                    </i>
                                  </div>
                                  <input type="text" class="form-control id" placeholder="ID" name="id" value="">
                                </div>    
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="col-md-2">
                          </div>
                          <div class="col-md-8">
                            <div class="btn-group pull-left">
                              <button class="btn btn-info submit btn-sm">
                                <i
                                   class="fa fa-search">
                                </i>&nbsp;&nbsp;Search
                              </button>
                            </div>
                            <div class="btn-group pull-left " style="margin-left: 10px;">
                              <a href="https://demo.s-cart.org/system_admin/shop_customer" class="btn btn-default btn-sm">
                                <i
                                   class="fa fa-undo">
                                </i>&nbsp;&nbsp;Reset
                              </a>
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
                        <th> 
                        </th>
                        <th>ID
                          <a class="fa fa-fw fa-sort" href="https://demo.s-cart.org/system_admin/shop_customer?_sort%5Bcolumn%5D=id&_sort%5Btype%5D=desc">
                          </a>
                        </th>
                        <th>Email
                          <a class="fa fa-fw fa-sort" href="https://demo.s-cart.org/system_admin/shop_customer?_sort%5Bcolumn%5D=email&_sort%5Btype%5D=desc">
                          </a>
                        </th>
                        <th>Name
                          <a class="fa fa-fw fa-sort" href="https://demo.s-cart.org/system_admin/shop_customer?_sort%5Bcolumn%5D=name&_sort%5Btype%5D=desc">
                          </a>
                        </th>
                        <th>Ngày tạo
                        </th>
                        <th>Lần cuối chỉnh sửa
                        </th>
                        <th>Action
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr >
                        <td >
                          <input type="checkbox" class="grid-row-checkbox" data-id="11" />
                        </td>
                        <td >
                          11
                        </td>
                        <td >
                          levantu.nd1997@gmail.com
                        </td>
                        <td >
                          levantu
                        </td>
                        <td >
                          2018-10-23 13:20:42
                        </td>
                        <td >
                          2018-10-23 13:20:42
                        </td>
                        <td >
                          <a href="/system_admin/shop_customer/11/edit">
                            <i class="fa fa-edit">
                            </i>
                          </a>
                          <a href="javascript:void(0);" data-id="11" class="grid-row-delete">
                            <i class="fa fa-trash">
                            </i>
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
                          tuannguyen@gmail.com2
                        </td>
                        <td >
                          Hoang
                        </td>
                        <td >
                          2018-10-23 11:34:43
                        </td>
                        <td >
                          2018-10-23 11:34:43
                        </td>
                        <td >
                          <a href="/system_admin/shop_customer/10/edit">
                            <i class="fa fa-edit">
                            </i>
                          </a>
                          <a href="javascript:void(0);" data-id="10" class="grid-row-delete">
                            <i class="fa fa-trash">
                            </i>
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
                          holuat162@gmail.com
                        </td>
                        <td >
                          Ho Luat
                        </td>
                        <td >
                          2018-10-23 08:25:21
                        </td>
                        <td >
                          2018-10-23 08:25:21
                        </td>
                        <td >
                          <a href="/system_admin/shop_customer/9/edit">
                            <i class="fa fa-edit">
                            </i>
                          </a>
                          <a href="javascript:void(0);" data-id="9" class="grid-row-delete">
                            <i class="fa fa-trash">
                            </i>
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
                          qq@gmail.com
                        </td>
                        <td >
                          trucnguyen
                        </td>
                        <td >
                          2018-10-18 22:46:20
                        </td>
                        <td >
                          2018-10-18 22:46:20
                        </td>
                        <td >
                          <a href="/system_admin/shop_customer/8/edit">
                            <i class="fa fa-edit">
                            </i>
                          </a>
                          <a href="javascript:void(0);" data-id="8" class="grid-row-delete">
                            <i class="fa fa-trash">
                            </i>
                          </a>
                        </td>
                      </tr>
                      <tr >
                        <td >
                          <input type="checkbox" class="grid-row-checkbox" data-id="7" />
                        </td>
                        <td >
                          7
                        </td>
                        <td >
                          q@gmail.com
                        </td>
                        <td >
                          trucnguyen
                        </td>
                        <td >
                          2018-10-17 23:37:56
                        </td>
                        <td >
                          2018-10-17 23:37:56
                        </td>
                        <td >
                          <a href="/system_admin/shop_customer/7/edit">
                            <i class="fa fa-edit">
                            </i>
                          </a>
                          <a href="javascript:void(0);" data-id="7" class="grid-row-delete">
                            <i class="fa fa-trash">
                            </i>
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
                          abc@abc.com
                        </td>
                        <td >
                          ABC
                        </td>
                        <td >
                          2018-09-23 07:54:21
                        </td>
                        <td >
                          2018-09-23 07:54:21
                        </td>
                        <td >
                          <a href="/system_admin/shop_customer/6/edit">
                            <i class="fa fa-edit">
                            </i>
                          </a>
                          <a href="javascript:void(0);" data-id="6" class="grid-row-delete">
                            <i class="fa fa-trash">
                            </i>
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
                          baokhanh123@gmail.com
                        </td>
                        <td >
                          Bao Khanh
                        </td>
                        <td >
                          2018-09-05 20:57:19
                        </td>
                        <td >
                          2018-09-05 20:57:19
                        </td>
                        <td >
                          <a href="/system_admin/shop_customer/5/edit">
                            <i class="fa fa-edit">
                            </i>
                          </a>
                          <a href="javascript:void(0);" data-id="5" class="grid-row-delete">
                            <i class="fa fa-trash">
                            </i>
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
                          lengocchau_11233@gmail.com
                        </td>
                        <td >
                          Ch&acirc;u Tuấn Anh
                        </td>
                        <td >
                          2018-03-12 16:20:04
                        </td>
                        <td >
                          2018-05-09 15:00:55
                        </td>
                        <td >
                          <a href="/system_admin/shop_customer/4/edit">
                            <i class="fa fa-edit">
                            </i>
                          </a>
                          <a href="javascript:void(0);" data-id="4" class="grid-row-delete">
                            <i class="fa fa-trash">
                            </i>
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
                          lanhktc@gmail.com
                        </td>
                        <td >
                          L&ecirc; Văn Lanh
                        </td>
                        <td >
                          2018-02-04 09:56:12
                        </td>
                        <td >
                          2018-09-03 17:13:17
                        </td>
                        <td >
                          <a href="/system_admin/shop_customer/3/edit">
                            <i class="fa fa-edit">
                            </i>
                          </a>
                          <a href="javascript:void(0);" data-id="3" class="grid-row-delete">
                            <i class="fa fa-trash">
                            </i>
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
                          hung@fdgfdg.com
                        </td>
                        <td >
                          Hung
                        </td>
                        <td >
                          2018-01-15 15:43:35
                        </td>
                        <td >
                          2018-01-15 16:40:14
                        </td>
                        <td >
                          <a href="/system_admin/shop_customer/2/edit">
                            <i class="fa fa-edit">
                            </i>
                          </a>
                          <a href="javascript:void(0);" data-id="2" class="grid-row-delete">
                            <i class="fa fa-trash">
                            </i>
                          </a>
                        </td>
                      </tr>
                      <tr >
                        <td >
                          <input type="checkbox" class="grid-row-checkbox" data-id="1" />
                        </td>
                        <td >
                          1
                        </td>
                        <td >
                          dfne11pd2707@gmail.com
                        </td>
                        <td >
                          Hoang Ngoc Tu
                        </td>
                        <td >
                          2018-01-14 03:12:50
                        </td>
                        <td >
                          2018-09-03 17:13:27
                        </td>
                        <td >
                          <a href="/system_admin/shop_customer/1/edit">
                            <i class="fa fa-edit">
                            </i>
                          </a>
                          <a href="javascript:void(0);" data-id="1" class="grid-row-delete">
                            <i class="fa fa-trash">
                            </i>
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="box-footer clearfix">
                  Showing 
                  <b>1
                  </b> to 
                  <b>11
                  </b> of 
                  <b>11
                  </b> entries
                  <ul class="pagination pagination-sm no-margin pull-right">
                    <!-- Previous Page Link -->
                    <li class="page-item disabled">
                      <span class="page-link">&laquo;
                      </span>
                    </li>
                    <!-- Pagination viewAdmin.elements -->
                    <!-- "Three Dots" Separator -->
                    <!-- Array Of Links -->
                    <li class="page-item active">
                      <span class="page-link">1
                      </span>
                    </li>
                    <!-- Next Page Link -->
                    <li class="page-item disabled">
                      <span class="page-link">&raquo;
                      </span>
                    </li>
                  </ul>
                  <label class="control-label pull-right" style="margin-right: 10px; font-weight: 100;">
                    <small>Show
                    </small>&nbsp;
                    <select class="input-sm grid-per-pager" name="per-page">
                      <option value="https://demo.s-cart.org/system_admin/shop_customer?per_page=10" >10
                      </option>
                      <option value="https://demo.s-cart.org/system_admin/shop_customer?per_page=20" selected>20
                      </option>
                      <option value="https://demo.s-cart.org/system_admin/shop_customer?per_page=30" >30
                      </option>
                      <option value="https://demo.s-cart.org/system_admin/shop_customer?per_page=50" >50
                      </option>
                      <option value="https://demo.s-cart.org/system_admin/shop_customer?per_page=100" >100
                      </option>
                    </select>
                    &nbsp;
                    <small>entries
                    </small>
                  </label>
                </div>
                <!-- /.box-body -->
              </div>
            </div>
          </div>
        </section>
        <script data-exec-on-popstate>
          $(function () {
            $('.grid-row-checkbox').iCheck({
              checkboxClass:'icheckbox_minimal-blue'}
                                          ).on('ifChanged', function () {
              if (this.checked) {
                $(this).closest('tr').css('background-color', '#ffffd5');
              }
              else {
                $(this).closest('tr').css('background-color', '');
              }
            }
                                              );
            var selectedRows = function () {
              var selected = [];
              $('.grid-row-checkbox:checked').each(function(){
                selected.push($(this).data('id'));
              }
                                                  );
              return selected;
            }
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
                      url: '/system_admin/shop_customer/' + id,
                      data: {
                        _method:'delete',
                        _token:LA.token,
                      }
                      ,
                      success: function (data) {
                        $.pjax.reload('#pjax-container');
                        resolve(data);
                      }
                    }
                          );
                  }
                                    );
                }
              }
                  ).then(function(result) {
                var data = result.value;
                if (typeof data === 'object') {
                  if (data.status) {
                    swal(data.message, '', 'success');
                  }
                  else {
                    swal(data.message, '', 'error');
                  }
                }
              }
                        );
            }
                                                       );
            $('.export-selected').click(function (e) {
              e.preventDefault();
              var rows = selectedRows().join(',');
              if (!rows) {
                return false;
              }
              var href = $(this).attr('href').replace('__rows__', rows);
              location.href = href;
            }
                                       );
            $('.grid-select-all').iCheck({
              checkboxClass:'icheckbox_minimal-blue'}
                                        );
            $('.grid-select-all').on('ifChanged', function(event) {
              if (this.checked) {
                $('.grid-row-checkbox').iCheck('check');
              }
              else {
                $('.grid-row-checkbox').iCheck('uncheck');
              }
            }
                                    );
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
                      url: '/system_admin/shop_customer/' + id,
                      data: {
                        _method:'delete',
                        _token:'2OSjS2rhXhGRhQYksSMBeGgbMZR5CO29pgYG2RLa'
                      }
                      ,
                      success: function (data) {
                        $.pjax.reload('#pjax-container');
                        resolve(data);
                      }
                    }
                          );
                  }
                                    );
                }
              }
                  ).then(function(result) {
                var data = result.value;
                if (typeof data === 'object') {
                  if (data.status) {
                    swal(data.message, '', 'success');
                  }
                  else {
                    swal(data.message, '', 'error');
                  }
                }
              }
                        );
            }
                                 );
            $('.grid-refresh').on('click', function() {
              $.pjax.reload('#pjax-container');
              toastr.success('Refresh succeeded !');
            }
                                 );
            $('.5bcf39fd7de7f-filter-btn').click(function (e) {
              if ($('#filter-box').is(':visible')) {
                $('#filter-box').addClass('hide');
              }
              else {
                $('#filter-box').removeClass('hide');
              }
            }
                                                );
            $('.grid-per-pager').on("change", function(e) {
              $.pjax({
                url: this.value, container: '#pjax-container'}
                    );
            }
                                   );
          }
           );
        </script>
      </div>
      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          &nbsp;&nbsp;&nbsp;&nbsp;
          <strong>Version
          </strong>&nbsp;&nbsp; 2.0.4
        </div>
        <!-- Default to the left -->
        <strong>
          <a href="https://s-cart.org">S-Cart
          </a>
        </strong> Free Open Source eCommerce for Business
      </footer>
    </div>
    <script>
      function LA() {
      }
      LA.token = "2OSjS2rhXhGRhQYksSMBeGgbMZR5CO29pgYG2RLa";
    </script>
    @include("viewAdmin.elements.script")
  </body>
</html>
