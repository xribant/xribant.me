$(document).ready(function() {
    $('.js-scrollTo').on('click', function() { // Au clic sur un élément
      var page = $(this).attr('href'); // Page cible
      var speed = 750; // Durée de l'animation (en ms)
      $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
      return false;
    });
  });


// skills chart
  $(document).ready(function(e) {
  //var windowBottom = $(window).height();
  var index=0;
  $(document).scroll(function(){
    var top = $('#skills').height()-$(window).scrollTop();
    console.log(top)
    if(top<-300){
      if(index==0){ 
      
        $('.chart').easyPieChart({
          easing: 'easeOutBounce',
          onStep: function(from, to, percent) {
            $(this.el).find('.percent').text(Math.round(percent));
          }
        });
      
        }
      index++;
    }
  })
  //console.log(nagativeValue)
  }); 