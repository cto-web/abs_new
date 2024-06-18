jQuery(document).ready(function($) {
	var activeIconUrl = 'https://dev.logo4life.nl/abs/wp-content/uploads/2024/06/icon-active.svg';
	$('.tab img').each(function() {
		$(this).data('original-src', $(this).attr('src'));
	});
	$('.tab').click(function() {
		var tabId = $(this).data('tab');
		$('.tab').removeClass('active');
		$('.tab img').each(function() {
			$(this).attr('src', $(this).data('original-src'));
		});

		$(this).addClass('active');
		$(this).find('img').attr('src', activeIconUrl);

		$('.tab-content').removeClass('active');
		$('#' + tabId).addClass('active');
	});

	$('.tab.active img').attr('src', activeIconUrl);

	$('header .mobielmenu').click(function(){
        $(".mobilemenu-container").toggleClass('show');
    });

    $('.mobsluiten').click(function(){
        $(".mobilemenu-container").toggleClass('show');
    });

	var data = {
        action: 'fetch_external_data',
        security: ajax_obj.nonce
    };

    $.post(ajax_obj.ajax_url, data, function(response) {
        if(response.success) {
            // $('#result').html(response.data);
			$(".funds-box img").hide();
			$("#abs-chart-container").show();
			const chart = Highcharts.chart('abs-chart-container', {
				chart: {
					type: 'line'
				},
				title: {
					text: '',
					align: 'left',
					x: 0,
					y: 10,
					style: {
						fontFamily: '"neue-haas-grotesk-display", sans-serif',
						fontWeight: 'normal',
						fontSize: '1.75em'
					}
				},
				xAxis: {
					type: 'datetime',
					title: {
						text: ''
					}
				},
				yAxis: {
					title: {
						text: ''
					},
					labels: {
						formatter: function () {
							return this.value + '%';
						}
					}
				},
				series: [{
					name: 'ABS Fund',
					data: JSON.parse(response.data).data
				}],
				credits: {
					enabled: false
				},
				legend: {
					layout: 'vertical',
					align: 'right',
					verticalAlign: 'top',
					x: -10,
					y: 10,
					floating: true,
					itemStyle: {
						fontSize: '16px',
						fontWeight: 'bold',
						fontFamily: '"neue-haas-grotesk-display", sans-serif',
					}
				},
				tooltip: {
					valueDecimals: 2
				}
			});
			
			Highcharts.setOptions({
				lang: {
					months: ['januari', 'februari', 'maart', 'april', 'mei', 'juni', 'juli', 'augustus', 'september', 'oktober', 'november', 'december'],
					weekdays: ['zondag', 'maandag', 'dinsdag', 'woensdag', 'donderdag', 'vrijdag', 'zaterdag'],
					decimalPoint: ',',
					thousandsSep: '.',
					numericSymbols: null
				}
			});
			
        } else {
            // $('#result').html('Error: ' + response.data);
			debugger;
        }
    });
});