google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
         ['Bimestre', 'Moura Carvalho', 'São José', 'Antodio Barbosa', 'Luterana'],
         ['2017/01',  7,      9,         4,             6],
         ['2017/02',  8,      7,        9,             8],
         ['2017/03',  3,      2,        5,             9],
         ['2017/04',  9,      8,        6,             7]
      ]);

    var options = {
      title : 'Notas das 4 melhores escolas por Bimestre',
      vAxis: {title: 'Notas'},
      hAxis: {title: 'Bimestre'},
      seriesType: 'bars',
      series: {5: {type: 'line'}}
    };

    var chart = new google.visualization.ComboChart(document.getElementById('chart_div_col'));
    chart.draw(data, options);
  }