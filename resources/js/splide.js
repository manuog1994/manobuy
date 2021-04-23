/* SPLIDE JS */
import Splide from '@splidejs/splide';


document.addEventListener( 'DOMContentLoaded', function () {
	new Splide( '#splideAds', {
		type   : 'loop',
		perPage: 3,
		focus  : 'center',
	} ).mount();
	
	new Splide( '#splide', {
		type   : 'loop',
		perPage: 1,
		focus  : 'center',
	} ).mount();
	
	new Splide( '#splideCategoryFull', {
		type   : 'loop',
		perPage: 5,
		focus  : 'center',
	} ).mount();
} );



