{{--<div class="grid gap-4 grid-cols-2 grid-rows-2">

  <div>
    <h1>Vamos</h1>
  </div>


  <div>
    <h1>a probar</h1>
  </div>


  <div>
    <h1>esta wea</h1>
  </div>



  {{- -<x-layouts.chart :items="$users" :dato="$c_us">- -}}
  {{- -<x-layouts.chart :items="" :dato="">
  <x-layouts.chart :items="" :dato="">
  <x-layouts.chart :items="" :dato="">- -}}
  
</div>
--}}


<script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

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
          {{--['Mushrooms', 3],
          ['Onions', 1],
          ['Olives', 1],
          ['Zucchini', 1],
          ['Pepperoni', 2]--}}
          @foreach($users as $item)
            ['{{$item->name}}', {{(int)$item->id}}],
           {{-- ['{{data_get($us, $c_us[0])}}', {{(int)data_get($us, $c_us[1])}}], --}}
          @endforeach
        ]);

        // Set chart options
        var options = {'title':'Piezas',
                       'width':400,
                       'height':400};

        var options2 = {'title':'Piezas',
                       'width':400,
                       'height':400};               


        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        var chart2 = new google.visualization.BarChart(document.getElementById('chart_div2'));
        chart.draw(data, options);
        chart2.draw(data, options2);
      }
    </script>

    <!--Div that will hold the pie chart-->

    {{--<div class="flex justify-center">--}}
      <div class="p-6 grid justify-items-center gap-4 grid-cols-2 grid-rows-2">

        <div class="rounded shadow-2xl" id="chart_div"></div>
        <div class="rounded shadow-2xl" id="chart_div2"></div>
        
      </div>  
    {{--</div>--}}
    