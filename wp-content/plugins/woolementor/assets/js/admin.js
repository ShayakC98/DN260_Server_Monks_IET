jQuery(function($){
	$('#wl_faq').click(function (e) {
		$('#wl_vidtt, #wl_support').removeClass('active');
		$(this).addClass('active');

		$('#wl_vidtt_content, #wl_support_content').removeClass('active');
		$('#wl_faq_content').addClass('active');
	});
	$('#wl_vidtt').click(function (e) {
		$('#wl_faq, #wl_support').removeClass('active');
		$(this).addClass('active');

		$('#wl_faq_content, #wl_support_content').removeClass('active');
		$('#wl_vidtt_content').addClass('active');
	});
	$('#wl_support').click(function (e) {
		$('#wl_faq, #wl_vidtt').removeClass('active');
		$(this).addClass('active');
		
		$('#wl_faq_content, #wl_vidtt_content').removeClass('active');
		$('#wl_support_content').addClass('active');
	});

	$('.woolementor-help-heading').click(function(e){
		var $this = $(this);
		var target = $this.data('target');
		$('.woolementor-help-text:not('+target+')').slideUp();
		if($(target).is(':hidden')){
			$(target).slideDown();
		}
		else {
			$(target).slideUp();
		}
	})
})