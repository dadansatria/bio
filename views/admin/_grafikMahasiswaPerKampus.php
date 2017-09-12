<?php 
  use app\models\Mahasiswa; 
?>
<script>

FusionCharts.ready(function(){
      var revenueChart = new FusionCharts({
        "type": "Column3d",
        "renderAt": "grafik-mahasiswa-per-kampus",
        "width": "100%",
        "height": "300",
        "dataFormat": "json",
        "dataSource": {
          "chart": {
              "caption" : "Grafik Mahasiswa per Kampus",
              "xAxisName": "Mahasiswa per Kampus",
              "yAxisName": "Jumlah",
              "theme": "fint"
           },
          "data":        
              [ <?php print Mahasiswa::getGrafikPerKampus(); ?> ]
        }
    });
    revenueChart.render();
})
		
</script> 
<div id="grafik-mahasiswa-per-kampus"> FusionChart XT will load here! </div>