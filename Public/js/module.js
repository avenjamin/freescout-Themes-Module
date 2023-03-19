$('.theme-colours a').click(function(e) {
	$("input[name='settings[themes.theme]']").val($(this).attr('data-colour'));
	$("#colour-label").html($(this).attr('data-colour'));
	$('.theme-colours a').removeClass('active');
	$(this).addClass('active');
	e.preventDefault();
});