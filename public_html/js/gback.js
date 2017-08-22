//$(window).on('load', function() {
//    var $grid=$('.masonry-grid').masonry({
//                 columnWidth: '.grid-sizer',
//                 gutter: '.gutter-sizer',
//                 itemSelector: '.grid-item',
//                 horizontalOrder: true,
//                 percentPosition: true
//                 });
// $grid.imagesLoaded().progress( function() {
//  $grid.masonry();
//});    
//var $grid = ('.masonry-grid');
//$grid.imagesLoaded().progress(function(){
//  $grid .masonry({
//        columnWidth: '.grid-sizer',
//                 gutter: '.gutter-sizer',
//                 itemSelector: '.grid-item',
//                 horizontalOrder: true,
//                 percentPosition: true
//  });
//});
//               });

$(window).on('load', function() {
$('.masonry-grid').masonry({
                columnWidth: '.grid-sizer',
                 gutter: '.gutter-sizer',
                 itemSelector: '.grid-item',
                 horizontalOrder: true,
                 percentPosition: true
}).masonry('reload');
    });