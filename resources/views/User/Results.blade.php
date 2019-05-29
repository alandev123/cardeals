

@if(session()->has('email'))

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    
    <link href="css/custom.css" rel="stylesheet">
    <!-- Title -->
    <title>Car-Deals</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/logo1.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootrap.css">

    <style>
                
            .zoom {
              padding: 30px;
             transition: transform .9s;
              margin: 0 auto;
            }
            
            .zoom:hover {
              -ms-transform: scale(1.5); /* IE 9 */
              -webkit-transform: scale(1.5); /* Safari 3-8 */
              transform: scale(1.5); 
            }
            </style>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>


@include('User.userheader') 
<div style="margin-top:50px; margin-left: 25px;">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
  color: orange;
}
</style>

<div class="row">
    <div class="col-6">
<h2>Model Name:&nbsp;&nbsp; {{$vz1}}</h2>
   
<br>
    @isset($req)
    <h3>
Mileage out of 5:&nbsp;&nbsp;

<?php
if($req == 5){
echo '<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>';
}
elseif($req == 4){
echo '<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>';
}
elseif($req == 3){
echo '<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>';
}
elseif($req == 2){
echo '<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>';
}
elseif($req == 1){
echo '<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>';
}
?>
@endisset
<br>


Fuel Type:&nbsp;&nbsp; {{$fuel}}
<br>
Mileage: &nbsp;&nbsp;{{$mil}} &nbsp;KMPL
<br>

<br>
Ground Clearance:&nbsp;&nbsp;{{$gr}}&nbsp; Millimeter
<br>
Offroad Rating:  &nbsp;&nbsp;
<?php
if($grnd == 5){
echo '<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>';
}
elseif($grnd == 4){
echo '<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>';
}
elseif($grnd == 3){
echo '<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>';
}
elseif($grnd == 2){
echo '<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>';
}
elseif($grnd == 1){
echo '<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>';
}
?>
</h3>
<br>
<br>
</div>
<div class="col-6">
        <h2>Model Name:&nbsp;&nbsp; {{$model2}}</h2>
   
        <br>
            @isset($req1)
            <h3>
        Mileage Out of 5:&nbsp;&nbsp;
        
        <?php
        if($req1 == 5){
        echo '<span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>';
        }
        elseif($req1 == 4){
        echo '<span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>';
        }
        elseif($req1 == 3){
        echo '<span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>';
        }
        elseif($req1 == 2){
        echo '<span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>';
        }
        elseif($req1 == 1){
        echo '<span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>';
        }
        ?>
        @endisset
        <br>
        
        
        Fuel Type:&nbsp;&nbsp; {{$fuel}}
        <br>
        Mileage: &nbsp;&nbsp;{{$mil1}} &nbsp;KMPL
        <br>
        
        <br>
        Ground Clearance:&nbsp;&nbsp;{{$ground2}}&nbsp; Millimeter
        <br>
        Offroad Rating:  &nbsp;&nbsp;
        <?php
        if($grnd2 == 5){
        echo '<span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>';
        }
        elseif($grnd2 == 4){
        echo '<span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>';
        }
        elseif($grnd2 == 3){
        echo '<span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>';
        }
        elseif($grnd2 == 2){
        echo '<span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>';
        }
        elseif($grnd2 == 1){
        echo '<span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>';
        }
        ?>
        </h3>
        <br>
        <br>
</div>
</div>
<div id="chart_div">

</div>
<hr>
<div id="chart_div1">

    </div>
    <hr>
    <center><b><div id="chart_div2" style="height:500px; margin-left:50px; margin-right: 50px;">
       
        </div></b></center>
        <div style="margin-left:450px;">
     <b>   <h3>Values in Millimeter</h3></b>
        </div>
        <br>
    <br>

<div class="row">
  <div class="col-6">
    <div style="margin-top:15px;">
        @isset($rate)
    <h1>Users Comments and Ratings {{$vz1}}</h1>
<br>
<table>
    
    <tr>
        <th width="200px">User</th>
        <th width="200px">Rating</th>
        <th width="200px">Comment</th>
    </tr>
    @foreach($rate as $rating)
   
    <tr>
    <th width="200px">{{$rating->name}}</th>
   
        <th width="200px"><?php
            if($v == 5){
            echo '<span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>';
            }
            elseif($v == 4){
            echo '<span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>';
            }
            elseif($v == 3){
            echo '<span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>';
            }
            elseif($v == 2){
            echo '<span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>';
            }
            elseif($v == 1){
            echo '<span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>';
            }
            ?></th>
    <td width="200px">{{$rating->comment}}</td>
    </tr>
    @endforeach
</table>
@endisset
</div>
  </div>
<div class="col-6">
    <div style="margin-top:15px;">
        @isset($rate)
    <h1>Users Comments and Ratings {{$model2}}</h1>
<br>
<table>
    
    <tr>
        <th width="200px">User</th>
        <th width="200px">Rating</th>
        <th width="200px">Comment</th>
    </tr>
    @foreach($rati as $ratin)
     
      
    <tr>
    <th width="200px">{{$ratin->name}}</th>
   
        <th width="200px"><?php
            if($ratin -> rating == 5){
            echo '<span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>';
            }
            elseif($ratin -> rating == 4){
            echo '<span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>';
            }
            elseif($ratin -> rating == 3){
            echo '<span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>';
            }
            elseif($ratin -> rating == 2){
            echo '<span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>';
            }
            elseif($ratin -> rating == 1){
            echo '<span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>';
            }
            ?></th>
    <td width="200px">{{$rating->comment}}</td>
    </tr>
    @endforeach
</table>
@endisset
</div>
</div>


</div>




</div>
<script src="js/jquery.min.js"></script>
<!-- Popper -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- All Plugins -->
<script src="js/roberto.bundle.js"></script>
<!-- Active -->
<script src="js/default-assets/active.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
    google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawAxisTickColors);

function drawAxisTickColors() {
      var data = google.visualization.arrayToDataTable([
        ['Specifications', '{{$model1}} ({{$fuel1}})', '{{$model2}} ({{$fuel2}})'],
        ['Models', {{$mil}}, {{$mil1}}],
        // ['engine', 130, 180],
        // ['ground', {{$gr}}, 210]
      ]);
         
      var options = {
        title: 'Mileage Comparison',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'KM per 1 Litre',
          minValue: 0,
          textStyle: {
            bold: true,
            fontSize: 12,
            color: '#4d4d4d'
          },
          titleTextStyle: {
            bold: true,
            fontSize: 18,
            color: '#4d4d4d'
          }
        },
        vAxis: {
          title: 'Mileage',
          textStyle: {
            fontSize: 14,
            bold: true,
            color: '#848484'
          },
          titleTextStyle: {
            fontSize: 14,
            bold: true,
            color: '#848484'
          }
        }
      };
      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
      chart.draw(data,options);
    }
    </script>
    
    <script>
           google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = google.visualization.arrayToDataTable([
        ['Specifications', '{{$model1}} ({{$type1}})', '{{$model2}} ({{$type2}})'],
        ['Models', {{$ground1}}, {{$ground2}}],
        
      ]);
         
      var options = {
        title: 'Ground Clearance Comparison',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'Ground Clearance in Millimeter',
          minValue: 0,
          textStyle: {
            bold: true,
            fontSize: 12,
            color: '#4d4d4d'
          },
          titleTextStyle: {
            bold: true,
            fontSize: 18,
            color: '#4d4d4d'
          }
        },
        vAxis: {
          title: 'Ground Clearance',
          textStyle: {
            fontSize: 14,
            bold: true,
            color: '#848484'
          },
          titleTextStyle: {
            fontSize: 14,
            bold: true,
            color: '#848484'
          }
        }
      };

      var chart = new google.visualization.BarChart(document.getElementById('chart_div1'));

      chart.draw(data, options);
    }
            </script>
            <script>
                google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawMaterial);

function drawMaterial() {
      var data = google.visualization.arrayToDataTable([
        ['Diamensions', '{{$model1}}', '{{$model2}}'],
        ['Length', {{$length1}}, {{$length2}}],
        ['Width', {{$width1}}, {{$width2}}],
        ['Height', {{$height1}}, {{$height2}}],
        ['Wheelbase', {{$wbase1}}, {{$wbase2}}],
      ]);
      var materialOptions = {
        chart: {
          title: 'Dimension Compariosn'
        },
        hAxis: {
          title: 'Values in Millimeter',
          minValue: 0,
          textStyle: {
            bold: true,
            fontSize: 12,
            color: '#4d4d4d'
          },
          titleTextStyle: {
            bold: true,
            fontSize: 18,
            color: '#4d4d4d'
          }
        },
        vAxis: {
          title: 'City'
        },
        bars: 'horizontal'
      };
      var materialChart = new google.charts.Bar(document.getElementById('chart_div2'));
      materialChart.draw(data, materialOptions);
    }
                </script>

</html>
  @endif              

{{-- https://developers.google.com/chart/interactive/docs/gallery/barchart --}}