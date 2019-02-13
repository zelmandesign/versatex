import '@fortawesome/fontawesome-free/js/all.js';

// import 'overlayscrollbars/js/jquery.overlayScrollbars.min.js';

export default {
  init() {

    // $(function() {
    //   //The passed argument has to be at least a empty object or a object with your desired options
    //   $("body").overlayScrollbars(
    //     {
    //       className            : "os-theme-round-dark",
    //       resize               : "none",
    //       sizeAutoCapable      : true,
    //       clipAlways           : true,
    //       normalizeRTL         : true,
    //       paddingAbsolute      : false,
    //       autoUpdate           : null,
    //       autoUpdateInterval   : 33, 
    //       nativeScrollbarsOverlaid : {
    //         showNativeScrollbars   : false,
    //         initialize             : true,
    //       },
    //       overflowBehavior : {
    //         x : "scroll",
    //         y : "scroll",
    //       },
    //       scrollbars : {
    //         visibility       : "auto",
    //         autoHide         : "never",
    //         autoHideDelay    : 800,
    //         dragScrolling    : true,
    //         clickScrolling   : false,
    //         touchSupport     : true,
    //       },
    //       textarea : {
    //         dynWidth       : false,
    //         dynHeight      : false,
    //         inheritedAttrs : ["style", "class"],
    //       },
    //       callbacks : {
    //         onInitialized               : null,
    //         onInitializationWithdrawn   : null,
    //         onDestroyed                 : null,
    //         onScrollStart               : null,
    //         onScroll                    : null,
    //         onScrollStop                : null,
    //         onOverflowChanged           : null,
    //         onOverflowAmountChanged     : null,
    //         onDirectionChanged          : null,
    //         onContentSizeChanged        : null,
    //         onHostSizeChanged           : null,
    //         onUpdated                   : null,
    //       },
    //     }
    //   );
    // });

    $('.navbar .dropdown > a').click(function() {
        location.href = this.href;
    });
    
    // JavaScript to be fired on all pages
  },
  finalize() {

  },
};
