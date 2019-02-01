// From University of Washington Theme - 2014

// Image select iframe.
jQuery(document).ready(function( $ ) {

  var frame;

  $('body').on('click', '.select-an-image', function(e){

      e.preventDefault();

      var $this    = $(this)
        , $preview = $this.siblings('.image-preview')
        , $inputs  = $this.siblings('input')

      frame = wp.media.frames.frame = wp.media({

          className: 'media-frame single-image-media-frame',

          frame: 'select',

          multiple: false,

          title: 'Select an image',

      });

      frame.on('select', function(){

          var media = frame.state().get('selection').first().toJSON()
            , $img  = $('<img/>').attr({
              'src'   : media.url,
              'width' : '100%'
            })

          $inputs.filter('.wp-get-posts-imageID').val( media.id )
          $inputs.filter('.wp-get-posts-image').val( media.url )

      });

      frame.open();
  });

/** Panels fix: preview of the image doesn't show otherwise **/
   $('body').on('mouseenter', '[id*=call-to-action-widget] .image-control', function() {

    var $this = $(this)
      , $img  = $this.find('img')
      , src   = $this.find('input.site-panels-image-fix').val()

    $img.attr( 'src', src )

  })

})


// Remove Image Button
jQuery(document).ready(function( $ ) {

  $('body').on('click', '.clear-an-image', function(e){

      e.preventDefault();

      $(this).parent('.image-control').find('input').val('')
      $(this).parent('.image-control').find('img').attr('src', '')


  });

});
