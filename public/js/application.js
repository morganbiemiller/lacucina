$('#nav li').click(function(e) {
    $('#nav li').removeClass('active');
    $(this).addClass('active');
});

(function(){
	var words = [
		'party',
		'office meeting',
		'shower',
		'wedding',
		'Bat Mitzvah',
		'surprise',
		'graduation'
	], i = 0;
	setInterval(function(){
		$('#eventType').fadeOut(function(){
			$(this).html(words[i=(i+1)%words.length]).fadeIn();
		});
	}, 1000);

})();
//# sourceMappingURL=application.js.map
