<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Line Voltage Graph</title>

                <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">



        <!-- Google Charts JS -->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript">
        google.charts.load('current', {packages: ['corechart', 'line']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var record={!! json_encode($linevdata) !!};
            console.log(record);
            var data = new google.visualization.DataTable();
            
            data.addColumn('datetime', 'Datetime');
            data.addColumn('number', 'Volts');

            
                for(i = 0; i < record.length; i++) {
                    data.addRow([record[i].date, 122]);
                }
                //data.addRow([new Date(1999,1,2), 124]);
                
                /*
                data.addRows([
                [new Date(2017,03,01), 123], 
                [new Date(2017, 03, 02), 122], 
                [new Date(2017, 03, 03), 122],
                ]);
                */
                
                

/*
            for(var k in record) {
                var v = record[k];
                data.addRow([k,v]);
                console.log(v);
            }  

            data.addRow([new Date(2017,02,01), 123]);

            data.addColumn('date', 'Datetime');
            data.addColumn('number', 'Volts');
           
*/
/*
            data.addRows([

                [new Date(2017,03,01), 123], [new Date(2017, 03, 02), 122], [new Date(2017, 03, 03), 122]
                
                ]);

            var options = {
                hAxis: {
                title: 'Time'
                },
                vAxis: {
                title: 'Line Voltage'
                }
            };
            
            var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

            chart.draw(data, options);
 */           
  /*
            var jsonData = $.ajax({
                url: "/Api/UpsHeartbeat/1/linev",
                dataType: "json",
                async: false
                }).responseText;
                
            // Create our data table out of JSON data loaded from server.
            var data = new google.visualization.DataTable(jsonData);

            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data, {width: 400, height: 240});



            var data = new google.visualization.DataTable();
            data.addColumn('date', 'Datetime');
            data.addColumn('number', 'Volts');
           

            data.addRows([

                [new Date(2017,03,01), 123], [new Date(2017, 03, 02), 122], [new Date(2017, 03, 03), 122]
                
                
            ]);
*/
            var options = {
                hAxis: {
                title: 'Datetime'
                },
                vAxis: {
                title: 'Line Voltage'
                }
            };

            var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

            chart.draw(data, options);
    
            }

        </script>

       </head>
<body>

<div id="chart_div"></div>

</body>
</html>