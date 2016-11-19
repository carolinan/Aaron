jQuery(document).ready(function($) {
	$('.featured-wrap').masonry({
	  itemSelector: '.grid-item',
	  columnWidth: '.grid-sizer',
	  percentPosition: true,
	  gutter: 45,
	  isFitWidth: true
	});
});