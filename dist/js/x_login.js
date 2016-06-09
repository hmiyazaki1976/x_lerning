$(function () {
  // Submit
  $('#login_btn').click(function() {

    // action、methodの指定
    $('#values').attr({
       'action':'http://localhost/x_lerning/login_ctl',
       'method':'post'
    });
    $('#values').submit();
  });

  $('#singup_btn').click(function() {

    // action、methodの指定
    $('#values').attr({
       'action':'http://localhost/x_lerning/userentry_ctl',
       'method':'get'
    });
    $('#values').submit();
  });

});
