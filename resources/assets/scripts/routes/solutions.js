export default {
  init() {

  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    $(".menu-wrapper").fadeOut(1);

    $(function() {
      $.scrollify({
          section: ".section-class-name",
          scrollbars: true,
          overflowScroll: true,
          scrollOverflow:true,
          setHeights: true,
          updateHash: true,
          touchScroll: true,
          easing: "easeOutExpo",
          before: function(i, panels) {
              var ref = panels[i].attr("data-section-name");

              $(".pagination a.active, .menu-wrapper ul li a.active").removeClass("active");

              $(".pagination a[href=#" + ref + "], .menu-wrapper ul li a[href=#" + ref + "]").addClass("active");


              if (ref === "top") {
                  $("#top .container").fadeIn(10);
                  $("#tail .container").fadeOut(10);
                  $("#compliance .container").fadeOut(10);
                  $("#spend .container").fadeOut(10);
                  $("#process .container").fadeOut(10);
                  $("#supplier .container").fadeOut(10);
                  $(".menu-wrapper").animate({left: '-350px'});
                  $(".video-background").fadeIn(10);
                  $(".pagination").css("background","#fff");
              }

              if (ref === "tail") {
                  $("#top .container").fadeOut(10);
                  $("#tail .container").fadeIn(10);
                  $("#compliance .container").fadeOut(10);
                  $("#spend .container").fadeOut(10);
                  $("#process .container").fadeOut(10);
                  $("#supplier .container").fadeOut(10);
                  $(".menu-wrapper").animate({left: '10px'}).fadeIn(1);
                  $(".box").fadeOut(1).fadeIn(2000);
                  $(".video-background").fadeOut(10);
                  $(".pagination").css("background","#333");
              }

              if (ref === "compliance") {
                  $("#top .container").fadeOut(10);
                  $("#tail .container").fadeOut(10);
                  $("#compliance .container").fadeIn(10);
                  $("#spend .container").fadeOut(10);
                  $("#process .container").fadeOut(10);
                  $("#supplier .container").fadeOut(10);
                  $(".menu-wrapper").fadeIn(1);
                  $(".video-background").fadeOut(10);
                  $(".pagination").css("background","#333");
              }

              if (ref === "spend") {
                  $("#top .container").fadeOut(10);
                  $("#tail .container").fadeOut(10);
                  $("#compliance .container").fadeOut(10);
                  $("#spend .container").fadeIn(10);
                  $("#process .container").fadeOut(10);
                  $("#supplier .container").fadeOut(10);
                  $(".menu-wrapper").fadeIn(1);
                  $(".video-background").fadeOut(10);
                  $(".pagination").css("background","#333");
              }

              if (ref === "process") {
                  $("#top .container").fadeOut(10);
                  $("#tail .container").fadeOut(10);
                  $("#compliance .container").fadeOut(10);
                  $("#spend .container").fadeOut(10);
                  $("#process .container").fadeIn(10);
                  $("#supplier .container").fadeOut(10);
                  $(".menu-wrapper").fadeIn(1);
                  $(".video-background").fadeOut(10);
                  $(".pagination").css("background","#333");
              }

              if (ref === "supplier") {
                  $("#top .container").fadeOut(300);
                  $("#tail .container").fadeOut(300);
                  $("#compliance .container").fadeOut(300);
                  $("#spend .container").fadeOut(300);
                  $("#process .container").fadeOut(300);
                  $("#supplier .container").fadeIn(300);
                  $(".menu-wrapper").fadeIn(1);
                  $(".video-background").fadeOut(10);
                  $(".pagination").css("background","#333");
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

            $("#top").append(pagination);
            
            $(".pagination a, .nav-link a, ul li a").on("click", function() {
                $.scrollify.move($(this).attr("href"));
            });
      });
  
    $(window).resize(function() {
      var width = $(this).width();
      if(width < 768) {
        $.scrollify.disable();
        $(".menu-wrapper").fadeOut(1);
      } else {
        $.scrollify.enable();
        $(".menu-wrapper").fadeIn(1);
      }
    });

    $(window).trigger('resize');
  },
};
