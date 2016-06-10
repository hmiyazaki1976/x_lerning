$(function () {
  // Submit
  $('#entry_btn').click(function() {

    // action、methodの指定
    $('#values').attr({
       'action':'http://localhost/x_lerning/userentry_ctl/entry_validate',
       'method':'post'
    });
    $('#values').submit();
  });

  $('#login_btn').click(function() {

    // action、methodの指定
    $('#values').attr({
       'action':'http://localhost/x_lerning/',
       'method':'post'
    });
    $('#values').submit();
  });


});
