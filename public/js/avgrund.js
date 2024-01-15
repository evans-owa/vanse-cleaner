(function($) {
  'use strict';
  $(function() {
    $('#show').avgrund({
      height: 500,
      holderClass: 'custom',
      showClose: true,
      showCloseText: 'x',
      onBlurContainer: '.container-scroller',
      template: '<p>So implement your design and place content here! If you want to close modal, please hit "Esc", click somewhere on the screen or use special button.</p>' +
        '<div>' +
        '<a href="#" target="_blank" class="btn btn-success me-2">Great!</a>' +
        '<a href="#" target="_blank" class="btn btn-light">Cancel</a>' +
        '</div>'
    });
  })
})(jQuery);
