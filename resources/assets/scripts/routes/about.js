import 'jquery-scrollify';

export default {
  init() {
    // JavaScript to be fired on the about us page
    $(function() {
      $.scrollify({
          section: ".section-class-name",
          scrollbars: true,
          overflowScroll: true,
          scrollOverflow:true,
          setHeights: true,
          updateHash: true,
          touchScroll: true,
          before: function(i, panels) {
              var ref = panels[i].attr("data-section-name");

              $(".pagination a.active").removeClass("active");

              $(".pagination a[href=#" + ref + "]").addClass("active");

              if (ref === "about") {
                  $("#about .container").fadeIn(900);
                  $("#ingenuity .container").fadeOut(900);
                  $("#our-reach .container").fadeOut(900);
                  $("#our-values .container-fluid").fadeOut(900);
              }

              if (ref === "ingenuity") {
                  $("#about .container").fadeOut(900);
                  $("#ingenuity .container").fadeIn(900);
                  $("#our-reach .container").fadeOut(900);
                  $("#our-values .container-fluid").fadeOut(900);
              }

              if (ref === "our-reach") {
                  $("#about .container").fadeOut(900);
                  $("#ingenuity .container").fadeOut(900);
                  $("#our-reach .container").fadeIn(900);
                  $("#our-values .container-fluid").fadeOut(900);
              }

              if (ref === "our-values") {
                  $("#about .container").fadeOut(900);
                  $("#ingenuity .container").fadeOut(900);
                  $("#our-reach .container").fadeOut(900);
                  $("#our-values .container-fluid").fadeIn(900);
              }
          },
          after: function(i, panels) {
              var ref = panels[i].attr("data-section-name");

              if (ref === "home") {
                  $(".design").find(".gallery0,.gallery1,.gallery2").removeClass("moved");
              }
              for (var j = 0; j < panels.length; j++) {
                  if (j > i) {

                      //panels[j].find(".moved").removeClass("moved");
                  }
              }
          },
          afterResize: initialPosition,
          afterRender: initialPosition,
      });

      $(".pagination a, .nav-link a").on("click", function() {
          $.scrollify.move($(this).attr("href"));
      });

      function initialPosition() {

          var current = $.scrollify.current();

          if (current.hasClass("ios7") === false) {
              var height = parseInt($(".ios7").height());
              var f = parseInt($(".features .gallery1").height()) - 50;

              var top = 0 - (height * 0.4) - (height - f);
              $(".ios7 .gallery0").css("top", top);
          } else {
              $(".features").find(".gallery0,.gallery1,.gallery2").addClass("moved");
          }

      }

      var pagination = "<ul class=\"pagination\">";
            var activeClass = "";
            $(".section-class-name").each(function(i) {
                activeClass = "";
                if (i === 0) {
                    activeClass = "active";
                }
                pagination += "<li><a class=\"" + activeClass + "\" href=\"#" + $(this).attr("data-section-name") + "\"><span class=\"hover-text\">" + $(this).attr("data-section-name").charAt(0).toUpperCase() + $(this).attr("data-section-name").slice(1) + "</span></a></li>";
            });

            pagination += "</ul>";

            $("#about").append(pagination);
            
            $(".pagination a, .nav-link a, ul li a").on("click", function() {
                $.scrollify.move($(this).attr("href"));
            });
      });
    $(window).resize(function() {
      var width = $(this).width();
      if(width < 768) {
        $.scrollify.disable();
      } else {
        $.scrollify.enable();
      }
    });

    $(window).trigger('resize');
  },
};
