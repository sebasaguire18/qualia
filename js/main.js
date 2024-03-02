$(document).ready(function() {
	

	// setInterval(() => {
	// 	tablas('tblLisCertificados'),
	// 	tablas('tblLisCertificadosCancel'),
	// 	tablas('tblLisUsuarios'),
	// 	tablas('tblLisFirmas')

	// }, 1000);


});

(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	$('#sidebarCollapse').on('click', function () {
		$('#sidebar').toggleClass('active');
	});


	
	

})(jQuery);
