/**
 * @file
 * Description.
 */

(function ($, Drupal) {

  Drupal.behaviors.fontawesomeIconpicker = {
    attach: function (context, settings) {
      $(context).find('.fontawesome-iconpicker-element').once('jsFontawesomeIconpicker').each(function () {
        if ($(this).hasClass('js-fontawesome-iconpicker-is-component')) {
          $(this)
            .wrap($('<div class="input-group"></div>'));
          $(this).parent().append($('<span class="input-group-addon"></span>'));
        };
        $(this).iconpicker();
      });
    }
  }

})(jQuery, Drupal);