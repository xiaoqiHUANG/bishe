
$(function(){    
  $('#container').masonry({    
    // options    
    itemSelector : '.box',    
    columnWidth : 200
  });    
});

var $container = $('#container');    
$container.imagesLoaded(function(){    
  $container.masonry({    
    itemSelector : '.box',    
    columnWidth : 200

//for journery

jQuery(document).ready(function ($) {
	    $('ul.cards').on('click', function () {
	        $(this).toggleClass('transition');
	    });
	    $('ul.card-stacks').on('click', function () {
	        $(this).toggleClass('transition');
	    });
	    $('ul.cards-split').on('click', function () {
	        $(this).toggleClass('transition');
	    });
	    $('ul.cards-split-delay').on('click', function () {
	        $(this).toggleClass('transition');
	    });
	});

//for star
$('#star').raty();
