$(document).ready(function () {
	/*
	function donutChart () {

		Morris.Donut({
			element: 'donut-chart',
			data: [
				{value: 70, label: 'Used'},
				{value: 30, label: 'Available'},
			],
			backgroundColor: 'none',
			labelColor: 'rgba(255,255,255,.7)',
			colors: [
				'rgba(0,0,0,.4)',
				'rgba(0,0,0,.5)'
			],
			formatter: function (x) { return x + "MB"}
		});
	}

	donutChart();
	
	// Sparkline Graph
	/*function examplesInlineGraph () {
	    $('.inlinesparkline').sparkline('html', {
	    	type: 'bar',
	    	height: '100',
	    	barWidth: 10, 
	    	barColor: '#4fa950',
		    negBarColor: '#ce483d',
		    stackedBarColor: '#FFA93C',
	    } );

	    var myvalues = [1200000,800000,650000,500000,300000,200000];
	    $('.dynamicsparkline').sparkline(myvalues, {
	    	type: 'bar',
	    	height: '200',
	    	barWidth: 120, 
	    	barSpacing: 20,
	    	barColor: '#e74c3c',
		    negBarColor: '#ce483d',
		    stackedBarColor: '#FFA93C',
		    tooltipFormat: '{{offset:offset}} {{value}}',
		    tooltipValueLookups: {
		        'offset': {
		            0: 'Bungalow',
		            1: 'Semi-Detached',
		            2: 'Terrace',
		            3: 'Townhouse',
		            4: 'Condominium',
		            5: 'Flats',
		        }
		    },
	    });


		function inlinebar () {
			$(".sparkline-bar").sparkline([5,6,7,2,0,-4,-2,-6], {
			    type: 'bar',
			    height: '100',
			    barColor: '#4fa950',
			    negBarColor: '#ce483d',
			    stackedBarColor: '#FFA93C',
			    barWidth: 10,
			    barSpacing: 3,
			    nullColor: '#aaa'
			});
		}
		function inlinestackbar () {
			$(".sparkline-stackbar").sparkline([ [1,4], [2,2], [2, 4], [5, 2], [3, 5], [4, 1] ], { 
				type: 'bar',
			    height: '100',
			    barWidth: 12,
			    barSpacing: 3,
			    stackedBarColor: ['#00aced','#ce483d','#FFA93C','#4fa950']
			});
		}
		function inlineline () {
			$(".sparkline-line").sparkline([5,6,7,9,9,5,3,2,0,4,6,7], {
			    type: 'line',
			    width: '100px',
			    height: '100px',
			    lineColor: '#82b721',
			    fillColor: '#538115',
			    lineWidth: 5,
			    spotColor: '#95c535',
			    minSpotColor: '#95c535',
			    maxSpotColor: '#95c535',
			    highlightSpotColor: '#333',
			    highlightLineColor: '#000',
			    spotRadius: 6,
			    normalRangeColor: '#111',
			    drawNormalOnTop: false
			});
		}
		function inlinepie () {
			$(".sparkline-pie").sparkline([1,1,2,5], {
			    type: 'pie',
			    width: '100px',
			    height: '100px',
			    sliceColors: ['#00aced','#ce483d','#FFA93C','#4fa950'],
			    offset: 0
			});
		}
		inlineline();
		inlinebar();
		inlinestackbar();
		inlinepie();
	}
	examplesInlineGraph();*/

//-- FLOT Chart -- //
	
	// Line Chart
	$(function () {
		var d1 = [ [0, 1], [1, 12], [2, 5], [3, 4], [4, 5], [5, 1], [6, 10] ];
		var d2 = [ [0, 5], [1, 2], [2, 10], [3, 1], [4, 9],  [5, 5], [6, 2] ];

		var plot = $.plot($("#line-chart"),
			   [ { data: d1, label: "Top Post"}, { data: d2, label: "Most Active" } ], {
					lines: { 
						show: true, 
						fill: true, /*SWITCHED*/
						lineWidth: 2 
					},
					points: { 
						show: true, 
						lineWidth: 3
					},
					grid: {
						clickable: true,
						hoverable: true,
						autoHighlight: true,
						mouseActiveRadius: 10,
						aboveData: true,
						backgroundColor: "#fafafa",
						borderWidth: 0,
						minBorderMargin: 25,
					},
					colors: [ "#1abc9c", "#e74c3c" ],
					shadowSize: 0
				 });

		function showTooltip(x, y, contents) {
			$('<div id="charttip">' + contents + '</div>').css( {
				position: 'absolute',
				display: 'none',
				top: y + 5,
				left: x + 5
			}).appendTo("body").fadeIn(300);
		}

		var previousPoint = null;
		$("#line-chart").bind("plothover", function (event, pos, item) {
			$("#x").text(pos.x.toFixed(2));
			$("#y").text(pos.y.toFixed(2));

			if (item) {
				if (previousPoint != item.dataIndex) {
					previousPoint = item.dataIndex;
					
					$("#charttip").remove();
					var x = item.datapoint[0].toFixed(0),
						y = item.datapoint[1].toFixed(0);
					
					showTooltip(item.pageX, item.pageY,
								"x : " + x + "&nbsp;&nbsp;&nbsp; y : " + y);
				}
			}
			else {
				$("#charttip").remove();
				previousPoint = null;            
			}
		});
	});

	// Pie Chart - Donut + Interctive
	var data = [
		{label: "Used", data: 8000, color: "#3498db"},
		{label: "Available", data: 5000, color: "#2ecc71"},
	];

	// DEFINE ACTIONS FOR pieHover & pieClick
	function pieHover(event, pos, obj) 
	{
		if (!obj)
		return;
		percent = parseFloat(obj.series.percent).toFixed(2);
		$("#label-data").html('<div class="label-data-item"><span>'+percent+'%</span><span class="small">'+obj.series.label+'</span></div>');
	}

	function pieClick(event, pos, obj) 
	{
		if (!obj)
		return;
		percent = parseFloat(obj.series.percent).toFixed(2);
		//alert(''+obj.series.label+': '+percent+'%');
	}

	$.plot($("#pie-chart"), data,
	{
			series: {
				pie: {
					show: true,
					innerRadius: 35
				}
			},

			grid: {
				hoverable: true,
				clickable: true
			}
	});

	$("#pie-chart").bind("plothover", pieHover);
	$("#pie-chart").bind("plotclick", pieClick);

});