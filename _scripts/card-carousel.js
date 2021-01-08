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
          // append slides to end
          if (e.direction == "left") {
            $("#" + curr_id + " .carousel-item")
              .eq(i)
              .appendTo(".carousel-inner");
          } else {
            $("#" + curr_id + " .carousel-item")
              .eq(0)
              .appendTo(".carousel-inner");
          }
        }
      }
    });
  });

  /* 
  $(document).ready(function() {
    $("#actorCarousel").on("slide.bs.carousel", function(e) {
      var $e = $(e.relatedTarget);
      var idx = $e.index();
      var itemsPerSlide = 4;
      var totalItems = $("#actorCarousel.carousel-item").length;
  
      if (idx >= totalItems - (itemsPerSlide - 1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i = 0; i < it; i++) {
          // append slides to end
          if (e.direction == "left") {
            $("#actorCarousel.carousel-item")
              .eq(i)
              .appendTo("#actorCarousel.carousel-inner");
          } else {
            $("#actorCarousel.carousel-item")
              .eq(0)
              .appendTo($(this).find("#actorCarousel.carousel-inner"));
          }
        }
      }
    });
  });
  */