export default {
  init() {

  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    $( ".skip-splash" ).click(function() {
      $( ".splash" ).fadeOut(100);
    });

    setTimeout(function(){
      $( ".splash" ).fadeOut(200);
    }, 3100);
  },
};
