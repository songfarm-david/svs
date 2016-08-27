(function(){

	var y = $('nav ul li a').attr('data-toggle','');
	var collapse;

	function checkAttr () {

		$.each(y, function(i, value) {
			// console.log(value);

			if ( $(value).attr('data-toggle') == '') {
				console.log("not undefinied");
				$(this).attr('data-toggle','collapse');
				console.log($(this).attr('data-toggle','collapse'));
				// $(this).attr('data-toggle','collapse');
				// collapse = true;
			} else {
				console.log("definied");
				$(this).attr('data-toggle','');

				// collapse = false;
			}

		});

	}

	// on resize
	$(window).resize(function() {

		if (window.innerWidth <= 990) {
			checkAttr();
			console.log('checkAttr called');
		}

		if (window.innerWidth >= 991) {
			checkAttr();
			console.log('checkAttr called');
		}

	});

	window.onload = function() {
		if (window.innerWidth <= 990) {
			alert('function called');
			checkAttr();
		}
	}

})();
