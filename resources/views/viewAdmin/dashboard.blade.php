
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>S-cart Admin  | Dashboard</title>

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
            Dashboard
            <small> </small>
        </h1>

        <!-- breadcrumb start -->
        
        <!-- breadcrumb end -->

    </section>

    <section class="content">

                        
        <div class="row"><div class="col-md-4"><div  class="small-box bg-aqua">
    <div class="inner">
        <h3>40</h3>

        <p>Product total</p>
    </div>
    <div class="icon">
        <i class="fa fa-tags"></i>
    </div>
    <a href="/system_admin/shop_product" class="small-box-footer">
        More&nbsp;
        <i class="fa fa-arrow-circle-right"></i>
    </a>
</div></div><div class="col-md-4"><div  class="small-box bg-green">
    <div class="inner">
        <h3>40</h3>

        <p>Order total</p>
    </div>
    <div class="icon">
        <i class="fa fa-shopping-cart"></i>
    </div>
    <a href="/system_admin/shop_order" class="small-box-footer">
        More&nbsp;
        <i class="fa fa-arrow-circle-right"></i>
    </a>
</div></div><div class="col-md-4"><div  class="small-box bg-yellow">
    <div class="inner">
        <h3>11</h3>

        <p>Customer total</p>
    </div>
    <div class="icon">
        <i class="fa fa-user"></i>
    </div>
    <a href="/system_admin/shop_customer" class="small-box-footer">
        More&nbsp;
        <i class="fa fa-arrow-circle-right"></i>
    </a>
</div></div></div>
<div class="row">
    <div class="col-md-12">
        <div  class="box">
    <div class="box-header with-border">
        <h3 class="box-title">In this month</h3>
        <div class="box-tools pull-right">
                    </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body" style="display: block;">
        <div class="box-body">
<div class="row">
<!-- /.col -->
<canvas id="chart-days-in-month" width="700" height="200"></canvas>
<!-- /.col -->
</div>
<!-- /.row -->
</div>
<script src="{{ asset('js/vendor/chartjs/dist/Chart.bundle.min.js')}}"></script>
<script>
function format_number(n) {
    return n.toFixed(0).replace(/./g, function(c, i, a) {
        return i > 0 && c !== "." && (a.length - i) % 3 === 0 ? "," + c : c;
    });
}

$(document).ready(function($) {
var ctx = document.getElementById('chart-days-in-month').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        // type: 'category',
        labels: ["1/10","2/10","3/10","4/10","5/10","6/10","7/10","8/10","9/10","10/10","11/10","12/10","13/10","14/10","15/10","16/10","17/10","18/10","19/10","20/10","21/10","22/10","23/10"],
        datasets: [


        {
            label: "Total amount",
            backgroundColor: 'rgba(225,0,0,0.4)',
            borderColor: "rgb(231, 53, 253)",
            borderCapStyle: 'square',
          pointHoverRadius: 8,
          pointHoverBackgroundColor: "yellow",
          pointHoverBorderColor: "brown",
            data: [0,0,0,0,30000,30000,60000,120000,190000,190000,190000,190000,190000,190000,190000,190000,435000,435000,530000,530000,560000,560000,640000],
            showLine: true, // disable for a single dataset,
            yAxisID: "y-axis-gravity",
            fill: false,
            type: 'line',
            lineTension: 0.1,
        },
        {
            label: "Total order",
            backgroundColor: 'rgb(138, 199, 214)',
            borderColor: 'rgb(138, 199, 214)',
      pointHoverRadius: 8,
      pointHoverBackgroundColor: "brown",
      pointHoverBorderColor: "yellow",
            data: [0,0,0,0,1,0,1,2,2,0,0,0,0,0,0,0,2,0,2,0,1,0,2],
            showLine: true, // disable for a single dataset,
            yAxisID: "y-axis-density",
            spanGaps: true,
            lineTension: 0.1,

        },

        ]
    },

    // Configuration options go here
    options: {
        responsive: true,
        legend: {
          display: true,
        },
        layout: {
            padding: {
                left: 10,
                right: 10,
                top: 0,
                bottom: 0
            }
        },
        scales: {
            yAxes: [
            {
              position: "left",
              id: "y-axis-density",
                ticks: {
                    beginAtZero:true,
                    max: 2 + 5,
                    min: 0,
                    stepSize: 2,
                },
                  scaleLabel: {
                     display: true,
                     labelString: 'Total order',
                     fontSize: 15,

                  }
            },
            {
              position: "right",
              id: "y-axis-gravity",
              ticks: {
                    beginAtZero:true,
                    callback: function(label, index, labels) {
                        return format_number(label);
                    },
                },
                scaleLabel: {
                     display: true,
                     labelString: 'Total amount (VNĐ)',
                     fontSize: 15
                  }
            }
            ]
        },

        tooltips: {
            callbacks: {
                label: function(tooltipItem, data) {
                    var label = data.datasets[tooltipItem.datasetIndex].label || '';

                    if (label) {
                        label += ': ';
                    }
                    label += format_number(tooltipItem.yLabel);
                    return label;
                }
            }
        }
    }
});
});
</script>

    </div><!-- /.box-body -->
</div></div></div><div class="row"><div class="col-md-12"><div  class="box">
    <div class="box-header with-border">
        <h3 class="box-title">In 12 months</h3>
        <div class="box-tools pull-right">
                    </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body" style="display: block;">
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <!-- /.col -->
            <canvas id="chartjs-1" width="600" height="150"></canvas>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
  <script src="{{ asset('js/vendor/chartjs/dist/Chart.bundle.min.js')}}"></script>
<script>
function format_number(n) {
    return n.toFixed(0).replace(/./g, function(c, i, a) {
        return i > 0 && c !== "." && (a.length - i) % 3 === 0 ? "," + c : c;
    });
}
$(document).ready(function($) {
var ctx = document.getElementById('chartjs-1').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        "labels":["10/2017","11/2017","12/2017","01/2018","02/2018","03/2018","04/2018","05/2018","06/2018","07/2018","08/2018","09/2018","10/2018"],
        "datasets":[
            {
                "label":"Total amount",
                "data":[0,0,0,0,0,0,0,1845000,0,0,0,1001000,640000],
                "fill":false,
                "backgroundColor":[
                "rgba(191, 25, 232, 0.2)",
                "rgba(191, 25, 232, 0.2)",
                "rgba(191, 25, 232, 0.2)",
                "rgba(191, 25, 232, 0.2)",
                "rgba(255, 99, 132, 0.2)",
                "rgba(255, 159, 64, 0.2)",
                "rgba(255, 205, 86, 0.2)",
                "rgba(75, 192, 192, 0.2)",
                "rgba(54, 162, 235, 0.2)",
                "rgba(153, 102, 255, 0.2)",
                "rgba(201, 203, 207, 0.2)",
                "rgba(181, 147, 50, 0.2)",
                "rgba(232, 130, 81, 0.2)",
                ],
                "borderColor":[
                "rgb(191, 25, 232)",
                "rgb(191, 25, 232)",
                "rgb(191, 25, 232)",
                "rgb(191, 25, 232)",
                "rgb(255, 99, 132)",
                "rgb(255, 159, 64)",
                "rgb(255, 205, 86)",
                "rgb(75, 192, 192)",
                "rgb(54, 162, 235)",
                "rgb(153, 102, 255)",
                "rgb(201, 203, 207)",
                "rgb(181, 147, 50)",
                "rgb(232, 130, 81)",
                ],
                "borderWidth":1,
                type:"bar",
            },
            {
                "label":"Line total amount",
                "data":[0,0,0,0,0,0,0,1845000,0,0,0,1001000,640000],
                "fill":false,
                "backgroundColor":"red",
                "borderColor":"red",
                "borderWidth":1,
                type:"line",
            }
        ]
    },
    options: {
        responsive: true,
        legend: {
          display: true,
        },
        layout: {
            padding: {
                left: 10,
                right: 10,
                top: 0,
                bottom: 0
            }
        },

        tooltips: {
            callbacks: {
                label: function(tooltipItem, data) {
                    var label = data.datasets[tooltipItem.datasetIndex].label || '';

                    if (label) {
                        label += ': ';
                    }
                    label += format_number(tooltipItem.yLabel);
                    return label;
                }
            }
        },
        scales: {
            yAxes: [
            {
              position: "left",
              // id: "y-axis-amount",
              ticks: {
                    beginAtZero:true,
                    callback: function(label, index, labels) {
                        return format_number(label);
                    },
                },
                scaleLabel: {
                     display: true,
                     labelString: 'VNĐ',
                     fontSize: 15
                  }
            }
            ]
        },
    },



});
});
</script>

    </div><!-- /.box-body -->
</div></div></div><div class="row"><div class="col-md-12"><div  class="box box-info box-solid">
    <div class="box-header with-border">
        <h3 class="box-title">New customer</h3>
        <div class="box-tools pull-right">
                    </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body" style="display: block;">
        <table  class="table">
    <thead>
    <tr>
                    <th>Id</th>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Time</th>
            </tr>
    </thead>
    <tbody>
        <tr>
                <td>11</td>
                <td>levantu.nd1997@gmail.com</td>
                <td>levantu</td>
                <td>0914731527</td>
                <td>2018-10-23 13:20:42</td>
            </tr>
        <tr>
                <td>10</td>
                <td>tuannguyen@gmail.com2</td>
                <td>Hoang</td>
                <td>099845345</td>
                <td>2018-10-23 11:34:43</td>
            </tr>
        <tr>
                <td>9</td>
                <td>holuat162@gmail.com</td>
                <td>Ho Luat</td>
                <td>01695415813</td>
                <td>2018-10-23 08:25:21</td>
            </tr>
        <tr>
                <td>8</td>
                <td>qq@gmail.com</td>
                <td>trucnguyen</td>
                <td>0975236549</td>
                <td>2018-10-18 22:46:20</td>
            </tr>
        <tr>
                <td>7</td>
                <td>q@gmail.com</td>
                <td>trucnguyen</td>
                <td>0975236548</td>
                <td>2018-10-17 23:37:56</td>
            </tr>
        <tr>
                <td>6</td>
                <td>abc@abc.com</td>
                <td>ABC</td>
                <td>098765432321</td>
                <td>2018-09-23 07:54:21</td>
            </tr>
        <tr>
                <td>5</td>
                <td>baokhanh123@gmail.com</td>
                <td>Bao Khanh</td>
                <td>09012345678</td>
                <td>2018-09-05 20:57:19</td>
            </tr>
        <tr>
                <td>4</td>
                <td>lengocchau_11233@gmail.com</td>
                <td>Châu Tuấn Anh</td>
                <td>0664456189</td>
                <td>2018-03-12 16:20:04</td>
            </tr>
        <tr>
                <td>3</td>
                <td>lanhktc@gmail.com</td>
                <td>Lê Văn Lanh</td>
                <td>0667151172</td>
                <td>2018-02-04 09:56:12</td>
            </tr>
        <tr>
                <td>2</td>
                <td>hung@fdgfdg.com</td>
                <td>Hung</td>
                <td>099789987686</td>
                <td>2018-01-15 15:43:35</td>
            </tr>
        </tbody>
</table>
    </div><!-- /.box-body -->
</div></div></div>

    </section>
        <script data-exec-on-popstate>

    $(function () {
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
    LA.token = "hRSRROpQ7LLnmzWtDmA0VqRjp4t0pxc0QEI0O2NK";
</script>

<!-- REQUIRED JS SCRIPTS -->
@include("viewAdmin.elements.script")

</body>
</html>
