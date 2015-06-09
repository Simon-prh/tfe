  var height = window.innerHeight - 50;
  var width = window.innerWidth ;

//---------------------------------READY --------

 $(document).ready(function(){
    
    var height = window.innerHeight - 50;
    var width = window.innerWidth ;
  
   /* HEIGHT NAV */
   // $(".selection").css("height", height + 'px');
   // $(".selection").css("max-height", height + 'px');
   $(".gif").remove();

  
   /* PLAY/PAUSE GIFS */
  // var imgSrc1=$('.first img').attr('src');
  // var imgSrc2=$('.second img').attr('src');
  // var imgSrc3=$('.third img').attr('src');
  // var imgSrc4=$('.fourth img').attr('src');
  // var imgSrc5=$('.fifth img').attr('src');
  // var imgSrc6=$('.sixth img').attr('src');
  // var imgSrc7=$('.seventh img').attr('src');
  // var imgSrc8=$('.eighth img').attr('src');
  // var imgSrc9=$('.ninth img').attr('src');

  // $('.first').css('background-image', 'url(' + imgSrc1 + ')');
  // $('.second').css('background-image', 'url(' + imgSrc2 + ')');
  // $('.third').css('background-image', 'url(' + imgSrc3 + ')');
  // $('.fourth').css('background-image', 'url(' + imgSrc4 + ')');
  // $('.fifth').css('background-image', 'url(' + imgSrc5 + ')');
  // $('.sixth').css('background-image', 'url(' + imgSrc6 + ')');
  // $('.seventh').css('background-image', 'url(' + imgSrc7 + ')');
  // $('.eighth').css('background-image', 'url(' + imgSrc8 + ')');
  // $('.ninth').css('background-image', 'url(' + imgSrc9 + ')');



  // function play(){
    
  //     $(this).find("img").attr("src", $(this).find("img").attr("src").replace("jpg", "gif"));
  //     $(this).css('background-image', 'url(' + $(this).find("img").attr('src') + ')');
  // }
  // function pause(){
  //     $(this).find("img").attr("src", $(this).find("img").attr("src").replace("gif", "jpg"));
  //     $(this).css('background-image', 'url(' + $(this).find("img").attr('src') + ')');
  // }
 
  // $('.first, .second, .third, .fourth, .fifth, .sixth, .seventh, .eighth, .ninth').mouseenter(play);
  // $('.first, .second, .third, .fourth, .fifth, .sixth, .seventh, .eighth, .ninth').mouseleave(pause);
    var gif = new Image();
    gif.src = 'img/lostworld.gif';
    var gif2 = new Image();
    gif2.src = 'img/strangelove.gif';
    var gif3 = new Image();
    gif3.src = 'img/caligari.gif';
    var gif4 = new Image();
    gif4.src = 'img/battleship.gif';
    var gif5 = new Image();
    gif5.src = 'img/doa.gif';
    var gif6 = new Image();
    gif6.src = 'img/thegeneral.gif';
    var gif7 = new Image();
    gif7.src = 'img/steamboat.gif';
    var gif8 = new Image();
    gif8.src = 'img/39steps.gif';
    var gif9 = new Image();
    gif9.src = 'img/myman.gif';
  


    $(".first").mouseenter( function() {
      gif.src = 'img/lostworld.gif?#' + Math.random();
      $(this).css('background-image', 'url(' + gif.src + ')');
    });
    $(".first").mouseleave( function() {
      setTimeout(function(){ 
        gif.src = '';
        $(".first").css('background-image', 'none');
      }, 150);
    });

    $(".second").mouseenter( function() {
      gif2.src = 'img/strangelove.gif?#' + Math.random();
      $(".second").css('background-image', 'url(' + gif2.src + ')');
    });
    $(".second").mouseleave( function() {
      setTimeout(function(){ 
        gif2.src = '';
        $(".second").css('background-image', 'none');
      }, 150);
    });

    $(".third").mouseenter( function() {
      gif3.src = 'img/caligari.gif?#' + Math.random();
      $(this).css('background-image', 'url(' + gif3.src + ')');
    });
    $(".third").mouseleave( function() {
      setTimeout(function(){ 
        gif3.src = '';
        $(".third").css('background-image', 'none');
      }, 150);
    });

    $(".fourth").mouseenter( function() {
      gif4.src = 'img/battleship.gif?#' + Math.random();
      $(this).css('background-image', 'url(' + gif4.src + ')');
    });
    $(".fourth").mouseleave( function() {
      setTimeout(function(){ 
        gif4.src = '';
        $(".fourth").css('background-image', 'none');
      }, 150);
    });

    $(".fifth").mouseenter( function() {
      gif5.src = 'img/doa.gif?#' + Math.random();
      $(this).css('background-image', 'url(' + gif5.src + ')');
    });
    $(".fifth").mouseleave( function() {
      setTimeout(function(){ 
        gif5.src = '';
        $(".fifth").css('background-image', 'none');
      }, 150);
    });

    $(".sixth").mouseenter( function() {
      gif6.src = 'img/thegeneral.gif?#' + Math.random();
      $(this).css('background-image', 'url(' + gif6.src + ')');
    });
    $(".sixth").mouseleave( function() {
      setTimeout(function(){ 
        gif6.src = '';
        $(".sixth").css('background-image', 'none');
      }, 150);
    });

    $(".seventh").mouseenter( function() {
      gif7.src = 'img/steamboat.gif?#' + Math.random();
      $(this).css('background-image', 'url(' + gif7.src + ')');
    });
    $(".seventh").mouseleave( function() {
      setTimeout(function(){ 
        gif7.src = '';
        $(".seventh").css('background-image', 'none');
      }, 150);
    });

    $(".eighth").mouseenter( function() {
      gif8.src = 'img/39steps.gif?#' + Math.random();
      $(this).css('background-image', 'url(' + gif8.src + ')');
    });
    $(".eighth").mouseleave( function() {
      setTimeout(function(){ 
        gif8.src = '';
        $(".eighth").css('background-image', 'none');
      }, 150);
    });

    $(".ninth").mouseenter( function() {
      gif9.src = 'img/myman.gif?#' + Math.random();
      $(this).css('background-image', 'url(' + gif9.src + ')');
    });
    $(".ninth").mouseleave( function() {
      setTimeout(function(){ 
        gif9.src = '';
        $(".ninth").css('background-image', 'none');
      }, 150);
    });







 
  // checked box in filters
  // $(".filters_box label").click(function() {

  //   if ( $(this).prev('input:radio').attr('checked') == true) {
  //     $(".filters_box label").addClass("box_checked");
  //     $(this).removeClass("box_checked");
      
  //   } else {
  //      $(".filters_box label").removeClass("box_checked");
  //       $(this).addClass("box_checked");
      
  //     }


  



    // if ( $("#surprise").is(":checked") ) {
    //   $(".surprise_movie").fadeIn(200).toggleClass("result_arrival");
    // } else {
    //     $(".surprise_movie").fadeOut(200).toggleClass("result_arrival");
    //   }


   



   //box is checked focus
  $(".filters_box label").click(function() {
    
      $('#search').val('');    
      if ( $(this).prev('input:checkbox').is(':checked') ) {
        $(this).removeClass("box_checked");


        
      } else {
          $(this).addClass("box_checked");
          
        }
      
       

   })

  //filter results based box checked
  $("input:checkbox").attr('checked', false);
  $('.filters_box').delegate('input[type=checkbox]', 'change', function() {
            var $lis = $('.movie_resume'),
            $checked = $('input:checked');  

            if ($checked.length) {

              var selector = '';
              $($checked).each(function(index, element){
                if(selector === '') {
                 selector += "[data-category~='" + element.id + "']";                  
                } else {
                 selector += ",[data-category~='" + element.id + "']";
                }
              });    
              
              $lis.hide().removeClass("visible"); 
                          
              $('.movie_resume').stop(true, true).fadeOut(500).filter(selector).removeClass("visible").stop(true, true).fadeIn(1000).addClass("visible");
              
            

            } else {
              $lis.stop(true, true).fadeIn(1000).addClass("visible");
               

            }

            if ($('input:checkbox').is(":checked")) {
              $("#reset").fadeIn(300);
            } else {
              $("#reset").fadeOut(300);
            }

          $("#noresult").fadeOut(200);





  });


  // refresh result, clear filters with click
  $('#reset').click(function(){
      $('#search').val('');
      $("input:checkbox").attr('checked', false);
      $('.box_checked').removeClass("box_checked");
      $('.movie_resume').hide().removeClass("visible"); 
      $("#reset").fadeOut(300);                  
      $('.movie_resume').stop(true, true).fadeIn(1000).addClass("visible");
  });     

  // refresh result, clear filters with esc
  $('body.keyup').keyup(function(event) {
    if (event.keyCode == 27 && $('input:checkbox').is(':checked')  ) {
       $('#search').val('');
       $("input:checkbox").attr('checked', false);
       $('.box_checked').removeClass("box_checked");
       $('.movie_resume').hide().removeClass("visible"); 
       $("#reset").fadeOut(300);                  
       $('.movie_resume').stop(true, true).fadeIn(1000).addClass("visible");
    } else if (event.keyCode == 27 && !$('#search').val() ) { 
        $('#search').val(''); 
        $("#reset").fadeOut(300);  
    } else if($('#search').val().length === 0  && !$('input:checkbox').is(':checked') ) {
        $("#reset").fadeOut(300); 
    }
  });
  //filter results based on query search
  function filter(selector, query) {
    query =   $.trim(query); //trim white space
    query = query.replace(/ /gi, '|'); //add OR for regex query
   
    $(selector).each(function() {
        if ($(this).text().search(new RegExp(query, "i")) < 0) {
          $(this).parent().stop(true,true).fadeOut(500);
      } else {
          $(this).parent().stop(true,true).fadeIn(500);
      }
    });

  }

  $('#search').keyup(function(event) {
      //if esc is pressed or nothing is entered
      if (event.keyCode == 27 || $(this).val() == '') {
        //if esc is pressed we want to clear the value of search box
        $(this).val('');
               
        //we want each row to be arrival because if nothing
        //is entered then all rows are matched.
        $('.visible').stop(true,true).fadeIn(500);
      }
   
      //if there is text, lets filter
      else {
        filter('.visible .movie_visu', $(this).val());
        $("#reset").fadeIn(500); 
      }
       if ( $("div.movieresume:visible").length === 0 && !$("#search").val() == '') {
          $("#noresult").fadeIn(200);
       } else  {
          $("#noresult").fadeOut(200);
       }

    })



  // $('#surprise').on('change',function(){
  //   if($("#surprise").is(':checked')){
  //       $(".movie_resume:not('.surprise_movie')").fadeOut();
  //   } else {
        
  //       $(".movie_resume:not('.surprise_movie')").fadeIn();
  //   }
  // });
  // $('#joy').on('change',function(){
  //   if($("#joy").is(':checked')){
  //       $(".movie_resume:not('.joy_movie')").fadeOut();
  //   } else {
        
  //       $(".movie_resume:not('.joy_movie')").fadeIn();
  //   }
  // });
  

    // if($("#joy").prop('checked') == true){
    //     $(".movie_resume:not('.joy_movie')").addClass("arrival");
    // } else {
        
    //     $(".movie_resume:not('.joy_movie')").removeClass("arrival");
    // }

    // if($("#fear").prop('checked') == true){
    //     $(".movie_resume:not('.fear_movie')").addClass("arrival");
    // } else {
        
    //     $(".movie_resume:not('.fear_movie')").removeClass("arrival");
    // }

  











   /* INDEX INTO SELECTION */
   $('.video_background').bind('ended',function(){

     $('.intro').fadeOut(500);
     setTimeout(function() {
       href = $("#next").attr('href');
       window.location = href;
     }, 500);
      
   });


  /* WIDTH PROGRESS BAR VIDEO */
  // var videow = ($(".videoContainer video").innerWidth()) - 176;
  // $(".progress-bar").css("width", videow + "px");
  



    $(".clickit").click(function(e) {

        e.preventDefault();
        href = $(this).attr('href');
        $("body").fadeOut("500", function() {
            window.location = href;
        });
  });

  $(".more_click1").click(function(){
    $(".blur").fadeIn(200);
    $(".moment1").toggleClass("allo");
  });
    $(".more_click2").click(function(){
    $(".blur").fadeIn(200);
    $(".moment2").toggleClass("allo");
  });
    $(".more_click3").click(function(){
    $(".blur").fadeIn(200);
    $(".moment3").toggleClass("allo");
  });
    $(".more_click4").click(function(){
    $(".blur").fadeIn(200);
    $(".moment4").toggleClass("allo");
  });
    $(".more_click5").click(function(){
    $(".blur").fadeIn(200);
    $(".moment5").toggleClass("allo");
  });
    $(".more_click6").click(function(){
    $(".blur").fadeIn(200);
    $(".moment6").toggleClass("allo");
  });

  $(".blur").click(function(){
    $(".blur").fadeOut(200);
    $(".more").removeClass("allo");
  });



//scroll to specific scene + play
$('.whittetitle').click( function() { 
      $('html,body').animate({ scrollTop: $(".videoContainer").offset().top }, 500);
      $(".movies")[0].play();
      $('.btnPlay').addClass('paused');
      $('.btnPlay').find('.icon-play').addClass('icon-pause').removeClass('icon-play');
} );

   
});



//---------------------------------RESIZE ------
$(window).resize(function(){
  /* HEIGHT NAV */
  // var height = window.innerHeight - 50;
  // var width = window.innerWidth ;
  // $(".selection").css("height", height + 'px');
  // $(".selection").css("max-height", height + 'px');

  /* WIDTH PROGRESS BAR VIDEO */
  // var videow = ($(".videoContainer video").innerWidth() - 176);
  // $(".progress-bar").css("width", videow + "px");

  


});  

//---------------------------------LOAD --------
$(window).load(function() {

  $("#preloader").delay(1000).fadeOut(500);
  
  // $("#video_intro").get(0).play();
     
  
  

   });


//---------------------------------JAVASCRIPT--------------------------------------------------

var vid = document.getElementById("movies");


// CAMILLE 
function scene1Strangelove() { 
    vid.currentTime=2140;
} 