import { documentReady } from './modules/events';

import * as $ from "jquery";

documentReady(function() {
  traverseArt('.projects li h2 a');
});


function traverseArt(fn) {
  $(fn).on("mouseenter", function () {
      var attachedContainer = $(this).data('id');
      var color = $(this).data('color');
      $('#projects ul li').removeClass('active');
      $("." + attachedContainer).addClass('active');
  });
}
