<?php
//index.php
$connect = mysqli_connect("localhost", "root", "", "farm");
date_default_timezone_set('Asia/Ho_Chi_Minh');
$current_time = date('Y-m-d');
$query = "
SELECT data, UNIX_TIMESTAMP(action_time) AS datetime FROM statistic WHERE device_id=1 AND DATE(action_time) = '" .$current_time. "'
";
$result = mysqli_query($connect, $query);
$rows = array();
$table = array();

$table['cols'] = array(
 array(
  'label' => 'Date Time', 
  'type' => 'datetime'
 ),
 array(
  'label' => 'pump', 
  'type' => 'number'
 )
);
date_default_timezone_set('Asia/Ho_Chi_Minh');
$current_time = date('Y-m-d');
$sub_array = array();
$sub_array[] =  array(
    "v" => 'Date(' . date('Y') . ', ' . (date('n') - 1) . ', ' . date('j') . ', ' . (date('G', 0) - 8) . ', ' . date('i', 0) . ', ' . date('s', 0) . ')'
);
$sub_array[] =  array(
    "v" => 0
);
$rows[] = array(
    "c" => $sub_array
);

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $datetime = explode(".", $row["datetime"]);
 $sub_array[] =  array(
    "v" => 'Date(' . date('Y', $datetime[0]) . ', ' . (date('n', $datetime[0]) - 1) . ', ' . date('j', $datetime[0]) . ', ' . date('G', $datetime[0]) . ', ' . date('i', $datetime[0]) . ', ' . date('s', $datetime[0]) . ')'
 );
 $sub_array[] =  array(
      "v" => $row["data"]
 );
 $rows[] =  array(
     "c" => $sub_array
    );
}


$table['rows'] = $rows;

$jsonTable = json_encode($table);

?>


<html>
 <head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript">
   google.charts.load('current', {'packages':['corechart']});
   google.charts.setOnLoadCallback(drawChart);
   function drawChart()
   {
    var data = new google.visualization.DataTable(<?php echo $jsonTable; ?>);

    var options = {
     title:'Pump',
     legend:{position:'bottom'},
     chartArea:{width:'95%', height:'65%'}
    };

    var chart = new google.visualization.LineChart(document.getElementById('line_chart'));

    chart.draw(data, options);
   }
   init_reload();
   function init_reload(){
        setInterval( function(){
            window.location.reload();
        },5000);
   }
  </script>
  <style>
  .page-wrapper
  {
   width:1000px;
   margin:0 auto;
  }
  </style>
 </head>  
 <body>
  <div class="page-wrapper">
   <br />
   <h2 align="center">Display Google Line Chart with JSON PHP & Mysql</h2>
   <div id="line_chart" style="width: 100%; height: 500px"></div>
  </div>
 </body>
</html>

