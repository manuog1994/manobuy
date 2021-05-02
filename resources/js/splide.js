/* SPLIDE JS */
import Splide from '@splidejs/splide';

if(document.getElementById('splideAds')){
	new Splide( '#splideAds', {
		type   : 'loop',
		perPage: 3,
		pagination  : false,
	} ).mount();

};
if(document.getElementById('splideCategoriesMobile')){
	new Splide( '#splideCategoriesMobile', {
		type   : 'loop',
		perPage: 1,
		focus  : 'center',
	} ).mount();

};
if(document.getElementById('splide')){
	new Splide( '#splide', {
		type   : 'loop',
		perPage: 1,
		focus  : 'center',
	} ).mount();
};


if(document.getElementById('splideCategoryFull')){
	new Splide( '#splideCategoryFull', {
		type   : 'loop',
		perPage: 4,
		pagination  : false,

	} ).mount();
};
if(document.getElementById('splideCategory')){
	new Splide( '#splideCategory', {
		type   : 'loop',
		perPage: 4,
		pagination  : false,

	} ).mount();
};




