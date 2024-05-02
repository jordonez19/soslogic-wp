!function($) {

  $('body').on('click', '.pix_param_img', function(e){
      e.preventDefault();
      $(this).closest('.pix_param_block').find('.pix_param_img').removeClass('selected');
      $(this).addClass('selected');
      var input = $(this).closest('.pix_param_block').find('.pix_param_val');
      var val = $(this).data('val');
      input.each(function(i, el){
          $(el).val(val);
          $(el).change();
          $(el).trigger("change");;
      });
  });


  $('.pix_param_val').each(function(i, el){
      $(el).closest('.pix_param_block').find('.pix_param_img').removeClass('selected');
      $(el).closest('.pix_param_block').find('.pix_param_img[data-val="'+$(el).val()+'"]').addClass('selected');
      $(el).change();
  });


}(window.jQuery);
