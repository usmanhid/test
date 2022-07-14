<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="cs.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>  
 <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</head>

<body>


<div class="container">
      <div class="row">
        <div class="col">
          <div class="card mt-5">
            <div class="card-header" align=center>
              <h1>Daftar Karyawan</h1>
            </div>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th width="1%">No</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
				    <th>Penilaian</th>
                    <th>Grade</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</br>
      <div id="pie"></div>
      </br>
      </br>
      </br>
      <div id="cont"></div>

</div>

<script type="text/javascript">
      $(function(){
        $.ajax({
          url:"data.php",
          type: "GET",
          dataType: "JSON",
          success: function(data){
            var nomor = 0;
            for(i=0; i<data.length; i++){
              nomor++;
              $('tbody').append(
				'<tr><td>'+nomor+'</td><td>'+data[i].Nama+'</td><td>'+data[i].Jabatan+'</td><td>'+data[i].Penilaian+'</td><td>'+data[i].Grade+'</td></tr>');
            }
          },
          error: function(data){
           alert("Terjadi Kesalahan!");
         }
       });
      });

      $(function(){
        $.ajax({
          url:"pie.php",
          type: "GET",
          dataType: "JSON",
          success: function(data){

            Highcharts.chart('cont', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'column'
    },
    title: {
        text: 'Klasifikasi Karyawan'
    },
    // tooltip: {
    //     pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    // },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.y} '
            }
        }
    },
    series: [{
        name: 'Total',
        colorByPoint: true,
        data: [{
            name: 'B',
            y: data.B,
            sliced: true,
            selected: true
        }, {
            name: 'A',
            y: data.A,
        }, {
            name: 'A+',
            y: data.A
        }]
    }]
});
          }
      });
});

$(function(){
        $.ajax({
          url:"pie.php",
          type: "GET",
          dataType: "JSON",
          success: function(data){

            Highcharts.chart('pie', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Klasifikasi Karyawan'
    },
    // tooltip: {
    //     pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    // },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.y} '
            }
        }
    },
    series: [{
        name: 'Total',
        colorByPoint: true,
        data: [{
            name: 'B',
            y: data.B,
            sliced: true,
            selected: true
        }, {
            name: 'A',
            y: data.A,
        }, {
            name: 'A+',
            y: data.A
        }]
    }]
});
          }
      });
});

    </script>
</body>
</html>