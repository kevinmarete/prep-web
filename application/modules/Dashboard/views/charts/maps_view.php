<!--chart_container-->
<div id="<?php echo $chart_name; ?>_container"></div>
<input type="hidden" data-filters="<?php echo $selectedfilters; ?>" id="<?php echo $chart_name; ?>_filters"/>

<!--highmaps_configuration-->
<script type="text/javascript">
	$(function () {
		var mapDIV = '<?php echo $chart_name."_container"; ?>';
	    var chart_data = <?php echo $chart_series_data; ?>;

        $.get("public/dashboard/json/kenya.json", function(datam, status){
        	var api_data=datam.data;

		    var data = Highcharts.geojson(api_data),
		        separators = Highcharts.geojson(api_data, 'mapline'),
		        // Some responsiveness
		        small = $('#'+mapDIV).width() < 400;

		    // Set drilldown pointers
		    $.each(data, function (i, v) {
		        this.drilldown = this.properties['code'];
		        var county_name = this.properties['name'].replace(" ", "_").replace("'", "").replace("-", "_").toLowerCase();
		        //Get facility count 
		        this.value = 0;
		        if(county_name in chart_data){
		        	this.value = chart_data[county_name]['total'];
		    	}
		    });

		    //Instantiate the map
		    Highcharts.mapChart(mapDIV, {
		        chart: {
		            events: {
		                drilldown: function (e) {
		                    if (!e.seriesOptions) {
		                        var county_name = e.point.name.replace(" ", "_").replace("'", "").replace("-", "_").toLowerCase();
		                        var chart = this,
		                            mapKey = 'public/dashboard/json/counties/' + county_name + '.json' ,
		                            // Handle error, the timeout is cleared on success
		                            fail = setTimeout(function () {
		                                if (mapKey) {
		                                    chart.showLoading('<i class="icon-frown"></i> Failed loading ' + e.point.name);
		                                    fail = setTimeout(function () {
		                                        chart.hideLoading();
		                                    }, 1000);
		                                }
		                            }, 3000);

		                        // Show the spinner
		                        chart.showLoading('<i class="icon-spinner icon-spin icon-3x"></i>'); // Font Awesome spinner

		                        $.get('public/dashboard/json/counties/' + county_name + '.json', function(datam, status){
		                            data = Highcharts.geojson(datam.data);
		                            //Get facility count
		                            $.each(data, function (i, v) {
		                            	var subcounty_name = v.properties.name.replace(" ", "_").replace("'", "").replace("-", "_").toLowerCase();
		                            	this.value = 0;
		                                if(county_name in chart_data){
		                                	//Confirm subcounty
		                                	if(subcounty_name in chart_data[county_name]['subcounties']){
								        		this.value = chart_data[county_name]['subcounties'][subcounty_name]['total'];
								        	}
								    	}
								    });

		                            // Hide loading and add series
		                            chart.hideLoading();
		                            clearTimeout(fail);
		                            chart.addSeriesAsDrilldown(e.point, {
		                                name: e.point.name,
		                                data: data,
		                                dataLabels: {
		                                    enabled: true,
		                                    format: '{point.name}'
		                                }
		                            });

		                            //Update facilities/partners
		                            chart.update({
									    tooltip: {
									      	formatter: function() {
									      		var subcounty_name = this.key.replace(" ", "_").replace("'", "").replace("-", "_").toLowerCase();
									      		var rV = '<b>' + this.key + '</b><br/>';
		                          
		                                		if(county_name in chart_data){
		                                			//Confirm subcounty
		                                			if(subcounty_name in chart_data[county_name]['subcounties']){
								        				$.each(chart_data[county_name]['subcounties'][subcounty_name]['facilities'], function(i, facility_name){
								        					if(i == 0){
								        						rV += '<span><b>Total</b></span>: ' + Highcharts.numberFormat(chart_data[county_name]['subcounties'][subcounty_name]['total'], 0)+'<br/>';
								        					}
								        					rV += facility_name+'<br/>';
								        				});
								        			}else{
								        				rV += '<span><b>Total</b></span>: 0 <br/>';
								        			}
								    			}
							                    return rV;
									      	}
									    }
									});
		                        });
		                    }

		                    this.setTitle(null, { text: e.point.name });
		                },
		                drillup: function () {
		                    this.setTitle(null, { text: '' });
		                }
		            }
		        },

		        title: {
		            text: '<?php echo $chart_title; ?>'
		        },

		        subtitle: {
		            text: '<?php echo $chart_source; ?>'
		        },

		        legend: small ? {} : {
		            layout: 'vertical',
		            align: 'right',
		            verticalAlign: 'middle'
		        },
		        credits: false,
		        colorAxis: {
		            min: 0,
		            minColor: '#aaaebc',
		            maxColor: '#008080'
		        },

		        mapNavigation: {
		            enabled: true,
		            buttonOptions: {
		                verticalAlign: 'bottom'
		            }
		        },

		        plotOptions: {
		            map: {
		                states: {
		                    hover: {
		                        color: '#ee6e6e'
		                    }
		                }
		            }
		        },

		        series: [{
		            data: data,
		            name: 'Kenya',
		            dataLabels: {
		                enabled: true,
		                format: '{point.properties.postal-code}'
		            }
		        }, {
		            type: 'mapline',
		            data: separators,
		            color: 'silver',
		            enableMouseTracking: false,
		            animation: {
		                duration: 500
		            }
		        }],

		        drilldown: {
		            activeDataLabelStyle: {
		                color: '#FFFFFF',
		                textDecoration: 'none',
		                textOutline: '1px #000000'
		            },
		            drillUpButton: {
		                relativeTo: 'spacingBox',
		                position: {
		                    x: 0,
		                    y: 60
		                }
		            }
		        }
		    });
		});
	});
</script>