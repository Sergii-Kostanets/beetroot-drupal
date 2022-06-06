(function (Drupal, $) {
  Drupal.behaviors.redColorInput = {
    attach: function (context) {
      $('input', context).css({backgroundColor: 'red'})
      $('textarea', context).on('change', function () {
        var ajaxObject = Drupal.ajax({
          url: '/example/api',
          base: false,
          element: $(this),
          progress: false
        });
        ajaxObject.execute();
      });
    }
  }
})(Drupal, jQuery)
