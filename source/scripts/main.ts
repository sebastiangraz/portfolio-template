import { documentReady } from './modules/events';

import * as $ from "jquery";

documentReady(function() {
  traverseArt('.projects a');
});

function traverseArt(fn) {
  $(fn).on("mouseenter", function () {
      var attachedContainer = $(this).data('id');
      $('.projects li:first-child h2 a').addClass('active');
      $('.projects a').removeClass("active");
      $(this).addClass("active");
      $('#projects li').removeClass('active');
      $("." + attachedContainer).addClass('active');
  });
}
