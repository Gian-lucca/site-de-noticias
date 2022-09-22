/**
 * modalEffects.js v1.0.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2013, Codrops
 * http://www.codrops.com
 */
 ;(function($) {
	var ModalEffects = (function() {

		function init() {

			var overlay = document.querySelector( '.md-overlay-telefones' );
			

			[].slice.call( document.querySelectorAll( '.md-trigger' ) ).forEach( function( el, i ) {

				var modal = document.querySelector( '#' + el.getAttribute( 'data-modal' ) ),
					close = modal.querySelector( '.md-close' );

				function removeModal( hasPerspective ) {
					//classie.remove( modal, 'md-show-telefones' );
					$(".md-modal-telefones").removeClass('md-show-telefones');
					if( hasPerspective ) {
						$(".md-modal-telefones").removeClass('md-perspective');
					}
				}

				function removeModalHandler() {
					removeModal( classie.has( el, 'md-setperspective' ) ); 
				}

				el.addEventListener('click', function (ev) {
					if ($(".md-modal-telefones").hasClass("md-show-telefones") === true) {
						removeModalHandler();
						
					}
					classie.add( modal, 'md-show-telefones' );
					overlay.removeEventListener( 'click', removeModalHandler );
					overlay.addEventListener( 'click', removeModalHandler );

					

					if( classie.has( el, 'md-setperspective' ) ) {
						setTimeout( function() {
							classie.add( document.documentElement, 'md-perspective' );
						}, 25 );
					}
				});

				close.addEventListener( 'click', function( ev ) {
					ev.stopPropagation();
					removeModalHandler();

					$(".md-trigger").css("opacity", "1.0");
					$(".md-trigger").css("filter: alpha(opacity", "= 100)"); //ie8
					//$("#overlay").css("display", "none");
				});

			} );

		}

		init();

	})();
})(jQuery);