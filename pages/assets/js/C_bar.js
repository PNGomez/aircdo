<?php include('pages/db.php') ; ?>

google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = google.visualization.arrayToDataTable([
        ['vehicle emmission', 'emmission',],
        ['Carbon Dioxide', <?php  $query = mysql_query("SELECT Carbon FROM emit_comp");

                                                    while ($rows = mysql_fetch_array($query)) {
                                                      $carbon = $rows["Carbon"];
                                                    }
                                                    

                                                    echo $carbon; ?>],
        ['Nitrogen', 8175000],
        ['Oxides of Nitrogen', 3792000],
      ]);

      var options = {
        title: 'Air Quality Count',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'emmission',
          minValue: 0
        },
        vAxis: {
          title: 'emmission'
        }
      };

      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

      chart.draw(data, options);
    }