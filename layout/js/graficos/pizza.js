// Load the Visualization API and the corechart package.
google.charts.load('current', {'packages': ['corechart']});

// Set a callback to run when the Google Visualization API is loaded.
google.charts.setOnLoadCallback(drawChart);

// Callback that creates and populates a data table,
// instantiates the pie chart, passes in the data and
// draws it.
function drawChart() {

    // Create the data table.
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Topping');
    data.addColumn('number', 'Slices');
    data.addRows([
        ['de 0 a 3 anos', 3],
        ['de 3 a 5 anos', 1],
        ['de 5 a 10 anos', 1],
        ['de 10 a 14 anos', 1],
        ['de 14 a 18 anos', 1],
        ['de 18 a 21 anos', 2]
    ]);

    // Set chart options
    var options = {'title': 'Alunos por faixa etária',
        'width': 600,
        'height': 500};

    // Instantiate and draw our chart, passing in some options.
    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
    chart.draw(data, options);
}