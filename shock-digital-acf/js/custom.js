function parseNumber(value) {
	return value.replace('.', ',');
}

function addSignToNumber(number) {
    if (number > 0) {
        return '+' + number;
    } else {
        return number;
    }
}


jQuery(document).ready(function($) {
	
	// Initialize the ScrollMagic controller
	var controller = new ScrollMagic.Controller();

	// Target the element
	var target = document.querySelector('.about-box .animted-title');
	var trigger = document.querySelector('.about-box .animted-title');

	// Create a Tween using GSAP
	var tween = gsap.fromTo(target, 
		{ left: '-5%' }, 
		{ left: '32%', ease: "none" });

	// Create a ScrollMagic Scene
	var scene = new ScrollMagic.Scene({
		triggerElement: trigger, // Starting when the element comes into view
		duration: '100%', // Animation will complete in the next 100% of the viewport height
		triggerHook: 1 // Starts at the middle of the viewport
	})
	.setTween(tween) // Apply the GSAP animation
	.addTo(controller); // Add this scene to the ScrollMagic controller

	
	
	window.addEventListener('scroll', function() { 
	 if(window.scrollY > 200) {
	  $(".site-header").addClass("background");
	 } else {
	  $(".site-header").removeClass("background");
	 }
	});
	
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
			//$(".funds-box img").hide();
			//$("#abs-chart-container").show();
			//$(".abs-chart-container-panel .chart-title").show();
			var data = JSON.parse(response.data).data;
			var first_y = data[0][1]; 
			const chart = Highcharts.chart('abs-chart-container', {
				chart: {
					type: 'line',
					marginTop: 30
				},
				title: {
					margin: 100,
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
							var increase = (this.value - first_y) / first_y * 100 ; 
							return increase.toFixed(2) + '%';
						}
					}
				},
				series: [{
					name: 'ABS Fund',
					data: data
				}],
				credits: {
					enabled: false
				},
				legend: {
					enabled: false,
					layout: 'vertical',
					align: 'right',
					verticalAlign: 'top',
					x: -10,
					y: -20,
					floating: true,
					itemStyle: {
						fontSize: '16px',
						fontWeight: 'bold',
						fontFamily: '"neue-haas-grotesk-display", sans-serif',
					}
				},
				tooltip: {
					valueDecimals: 2,
					pointFormatter: function() {
						var increase = (this.y - first_y) / first_y * 100 ; 
						increase = parseNumber(addSignToNumber(increase.toFixed(2)));
			
						return '<span style="color:' + this.color + '">\u25CF</span> ' + this.series.name + ': <b>' + parseNumber(this.y.toFixed(2)) + " (" + increase + '%)</b><br/>';
					}
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