$(function () {
  // Submit
  $('#logout_btn').click(function() {
    // action、methodの指定
    $('#uivalues').attr({
       'action':'http://localhost/x_lerning/login_ctl',
       'flg':'0',
       'method':'post'
    });
    $('#uivalues').submit();
  });
});

$(function(){
  $("#light-pagination").pagination({
    items:3,
    displayedPages:1,
    cssStyle: 'light-theme',
    prevText:'<<',
    nextText:'>>',
    onPageClick:function(pageNumber){show(pageNumber)}
  });
});

function show(pageNumber) {
  var page='#page-'+pageNumber;
  $('.selection').hide();
  $(page).show();
}
