$(function() {
    var H_nav = $('header').height();

    function pagelink(heightnum) {
        var headerH = heightnum;
        $('a.anchorlink').click(function() {
            var href = $(this).attr('href');
            var target = $(href == '#' || href == '' ? 'body' : href);
            var position = target.offset().top - headerH;
            $('html, body').animate({ scrollTop: position }, 500, 'swing');
            return false;
        });
    }
    pagelink(H_nav);
});


$(function(){

  const MSG_TEXT_MAX = '20文字以内で入力してください。';
  const MSG_EMPTY = '入力必須です。';
  const MSG_EMAIL_TYPE = 'E-mailの形式ではありません。';
  const MSG_TEXTAREA_MAX = '255文字以内で入力してください。';

  $('.js-valid-text').keyup(function(){

    var form_g = $(this).closest('.form-group');

    if( $(this).val().length === 0){
      form_g.removeClass('has-success').addClass('has-error');
      form_g.find('.err_msg').text(MSG_EMPTY);
    }else if( $(this).val().length > 20 ){
      form_g.removeClass('has-success').addClass('has-error');
      form_g.find('.err_msg').text(MSG_TEXT_MAX);
    }else{
      form_g.removeClass('has-error').addClass('has-success');
      form_g.find('.err_msg').text('');
    }
  });

  $('.js-valid-email').keyup(function(){

    var form_g = $(this).closest('.form-group');

    if( $(this).val().length === 0 ){
      form_g.removeClass('has-success').addClass('has-error');
      form_g.find('.err_msg').text(MSG_EMPTY);
    }else if($(this).val().length > 50 || !$(this).val().match(/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/) ){
      form_g.removeClass('has-success').addClass('has-error');
      form_g.find('.err_msg').text(MSG_EMAIL_TYPE);
    }else{
      form_g.removeClass('has-error').addClass('has-success');
      form_g.find('.err_msg').text('');
    }
  });

  $('.js-valid-textarea').keyup(function(){
    var form_g = $(this).closest('.form-group');

    if($(this).val().length === 0) {
      form_g.removeClass('has-success').addClass('has-error');
      form_g.find('.err_msg').text(MSG_EMPTY);
    }else if( $(this).val().length > 255 ){
      form_g.removeClass('has-success').addClass('has-error');
      form_g.find('.err_msg').text(MSG_TEXTAREA_MAX);
    }else{
      form_g.removeClass('has-error').addClass('has-success');
      form_g.find('.err_msg').text('');
    }
  });
});

