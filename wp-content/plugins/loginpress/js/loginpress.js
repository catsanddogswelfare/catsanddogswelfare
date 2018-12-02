(function($) {
  'use strict';

  $(function() {
    $('#user_pass').each(function() {
      $(this).wrap('<div class="user-pass-fields"></div>');
    });
    $('.user-pass-fields').each(function() {
      $(this).append('<div class="loginpress-caps-lock">' +
        loginpress_script.caps_lock + '</div>');
    });
  });
})(jQuery);
(function() {
  window.onload = function(e) {
    var capsLock = 'off';
    var passwordField = document.getElementById("user_pass");
    passwordField.onkeydown = function(e) {
      var el = this;
      if (e.getModifierState("CapsLock")) {
        capsLock = 'on';
        el.nextElementSibling.style.display = "block";
      } else {
        capsLock = 'off';
        el.nextElementSibling.style.display = "none";
      }
    };
    passwordField.onblur = function(e) {
      var el = this;
      el.nextElementSibling.style.display = "none";
    };
    passwordField.onfocus = function(e) {
      var el = this;
      if (capsLock == 'on') {
        el.nextElementSibling.style.display = "block";
      }
    };
  };
}());
