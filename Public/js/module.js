$('.theme-colours a').click(function(e) {
	$("input[name='settings[themes.theme]']").val($(this).attr('data-color'));
	$("#colour-label").html($(this).attr('data-color'));
	$('.theme-colours a').removeClass('active');
	$(this).addClass('active');
	e.preventDefault();
});