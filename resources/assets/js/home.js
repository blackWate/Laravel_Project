


			      $("#guyana-news").rss("https://news.google.com/news?q=guyana&lr=lang_en&as_qdr=d&as_occt=any&safe=images&num=25&output=rss",
			      {
			        limit: 30,
			        dateFormat: 'MMMM Do, YYYY',
			        entryTemplate:'<div  class="grid-item post hvr-float"><div class="caption"><h3>{title}</h3><p class="badge">   {date}</p><p><span class="pull-left news-img-pad">{teaserImage}</span> {bodyPlain}</p><p><a class="btn btn-success button" href="{url}">Read More...</a> </p></div></div> '
			      });
			      $("#toronto-news").rss("https://news.google.com/news?q=toronto&lr=lang_en&as_qdr=d&as_occt=any&safe=images&num=25&output=rss",
			      {
			        limit: 30,
			        dateFormat: 'MMMM Do, YYYY',
			        entryTemplate:'<div  class="grid-item post hvr-float"><div class="caption"><h3>{title}</h3><p class="badge">{date}</p><p><span class="pull-left news-img-pad">{teaserImage}</span>{bodyPlain}</p><p><a class="btn btn-success button" href="{url}">Read More...</a> </p></div></div>'
			      });

$(window).on('load', function() {
    var $grid=$('.masonry-grid').masonry({
                 columnWidth: '.grid-sizer',
                 gutter: '.gutter-sizer',
                 itemSelector: '.grid-item',
                 horizontalOrder: true,
                 percentPosition: true
                 });
 $grid.imagesLoaded().progress( function() {
  $grid.masonry();
});    

               });
			
