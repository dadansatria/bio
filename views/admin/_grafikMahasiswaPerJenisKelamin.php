<?php 
  use app\models\Mahasiswa; 
?>
<script>

FusionCharts.ready(function(){
      var revenueChart = new FusionCharts({
        "type": "Column3d",
        "renderAt": "grafik-pelayanan-per-jenis-kelamin",
        "width": "100%",
        "height": "300",
        "dataFormat": "json",
        "dataSource": {
          "chart": {
              "caption" : "Grafik Pelayanan per Jenis Kelamin",
              "xAxisName": "Pelayanan per Jenis Kelamin",
              "yAxisName": "Jumlah",
              "theme": "fint"
           },
          "data":        
              [ <?php print Mahasiswa::getGrafikPerJenisKelamin(); ?> ]
        }
    });
    revenueChart.render();
})
		
</script> 
<div id="grafik-pelayanan-per-jenis-kelamin"> FusionChart XT will load here! </div>