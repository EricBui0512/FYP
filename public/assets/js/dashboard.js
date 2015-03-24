/* 
* @Author: Dung Ho
* @Date:   2015-03-11 23:10:28
* @Last Modified by:   Dung Ho
* @Last Modified time: 2015-03-24 22:09:38
*/

'use strict';
var chart;
AmCharts.loadJSON = function(url) {
  // create the request
  if (window.XMLHttpRequest) {
    // IE7+, Firefox, Chrome, Opera, Safari
    var request = new XMLHttpRequest();
  } else {
    // code for IE6, IE5
    var request = new ActiveXObject('Microsoft.XMLHTTP');
  }

  // load it
  // the last "false" parameter ensures that our code will wait before the
  // data is loaded
  request.open('GET', url, false);
  request.send();

  // parse adn return the output
  return eval(request.responseText);
};

$(document).ready(function() {

	// var chartData = AmCharts.loadJSON( '/deal/charts/day' );

	// $('.chart').on('click', '.btn', function(){
	// 	var type = $(this).attr('id');

	// 	var chartData = AmCharts.loadJSON('/deal/charts/' + type);

	// 	chart.dataProvider = chartData;
	// 	chart.validateData();

	// });

	// AmCharts.ready(function () {
 //        // SERIAL CHART
 //        chart = new AmCharts.AmSerialChart();
 //        chart.dataProvider = chartData;
 //        chart.categoryField = "category";
 //        chart.startDuration = 1;

 //        // AXES
 //        // category
 //        var categoryAxis = chart.categoryAxis;
 //        categoryAxis.labelRotation = 90;
 //        categoryAxis.gridPosition = "start";

 //        // value
 //        // in case you don't want to change default settings of value axis,
 //        // you don't need to create it, as one value axis is created automatically.

 //        // GRAPH
 //        var graph = new AmCharts.AmGraph();
 //        graph.valueField = "value";
 //        graph.balloonText = "[[category]]: <b>[[value]]</b>";
 //        graph.type = "column";
 //        graph.lineAlpha = 0;
 //        graph.fillAlphas = 0.8;
 //        chart.addGraph(graph);

 //        // CURSOR
 //        var chartCursor = new AmCharts.ChartCursor();
 //        chartCursor.cursorAlpha = 0;
 //        chartCursor.zoomable = false;
 //        chartCursor.categoryBalloonEnabled = false;
 //        chart.addChartCursor(chartCursor);

 //        chart.creditsPosition = "top-right";

 //        chart.write("chartdiv");
 //    });
   
});

	

	
