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
});