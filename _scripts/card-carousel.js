/* Allows for multi-carrousels to work without disturbing each other  */
$(document).ready(function() {
    $("#actorCarousel, #directorCarousel").on("slide.bs.carousel", function(e) {
      var $e = $(e.relatedTarget);
      var idx = $e.index();
      var curr_id = e.currentTarget.id;
      var itemsPerSlide = 4;
      var totalItems = $("#" + curr_id + " .carousel-item").length;
  
      if (idx >= totalItems - (itemsPerSlide - 1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i = 0; i < it; i++) {
          // Append slides to end
          if (e.direction == "left") {
            $("#" + curr_id + " .carousel-item")
              .eq(i)
              .appendTo("#" + curr_id + " .carousel-inner");
          } else {
            $("#" + curr_id + " .carousel-item")
              .eq(0)
              .appendTo("#" + curr_id + " .carousel-inner");
          }
        }
      }
    });
  });