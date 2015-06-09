/*
JS Modified from a tutorial found here: 
http://www.inwebson.com/html5/custom-html5-video-controls-with-jquery/

I really wanted to learn how to skin html5 video.
*/
$(document).ready(function(){
  //INITIALIZE
  var video = $('.movies');
  
  //remove default control when JS loaded
  $('.movies').removeAttr("controls");





//hide cursor when inactive
$(function () {
    var timer;
    var fadeInBuffer = false;
    $('.video-wrapper').mousemove(function () {
        if (!fadeInBuffer) {
            if (timer) {
                
                clearTimeout(timer);
                timer = 0;
            }

                
            $('.control').fadeIn();
            $('.movies').css("cursor", "");
        } else {
            fadeInBuffer = false;
        }


        timer = setTimeout(function () {
            
            $('.control').fadeOut()
            $('.movies').css("cursor", "none");
            fadeInBuffer = true;
        }, 3000)
    });
});










 // $('.video-wrapper').hover(function() {
 //      $('.control').stop().fadeIn(300);
      
 //    }, function() {
 //      if(!volumeDrag && !timeDrag){
 //        $('.control').stop().fadeOut(300);
        
 //      }
 //    })

  //before everything get started
  video.on('loadedmetadata', function() {
      
    //set video properties
    $('.current').text(timeFormat(0));
    $('.duration').text(timeFormat(video[0].duration));
    updateVolume(0, 0.7);
      
    //start to get video buffering data 
    setTimeout(startBuffer, 150);
      
    //bind video events
   //  $('.movies, .control').hover(function() {
   //    $('.control').stop().fadeIn(300);
      
   //  }, function() {
   //    if(!volumeDrag && !timeDrag){
   //      $('.control').stop().fadeOut(300);
        
   //    }
   //  })

   // .click( function() {

   //    $('.btnPlay').find('.icon-play').addClass('icon-pause').removeClass('icon-play');
   //    $(this).unbind('click');
   //    video[0].play();

   //  });
  });
  
  //display video buffering bar
  var startBuffer = function() {
    var currentBuffer = video[0].buffered.end(0);
    var maxduration = video[0].duration;
    var perc = 100 * currentBuffer / maxduration;
    $('.bufferBar').css('width',perc+'%');
      
    if(currentBuffer < maxduration) {
      setTimeout(startBuffer, 500);
    }
  };  
  
  //display current video play time
  video.on('timeupdate', function() {
    var currentPos = video[0].currentTime;
    var maxduration = video[0].duration;
    var perc = 100 * currentPos / maxduration;
    $('.timeBar').css('width',perc+'%');  
    $('.current').text(timeFormat(currentPos)); 
  });
  
  //CONTROLS EVENTS
  //video screen and play button clicked
  $('.progress-bar').click( function() {
       video[0].play();
       $('.btnPlay').addClass('paused');
      $('.btnPlay').find('.icon-play').addClass('icon-pause').removeClass('icon-play');
   } );
  $('.movies').click( function() { playpause(); } );
  $('.btnPlay').click(  function() { playpause(); } );
  var playpause = function() {
    if(video[0].paused || video[0].ended) {
      $('.btnPlay').addClass('paused');
      $('.btnPlay').find('.icon-play').addClass('icon-pause').removeClass('icon-play');
      video[0].play();
    }
    else {
      $('.btnPlay').removeClass('paused');
      $('.btnPlay').find('.icon-pause').removeClass('icon-pause').addClass('icon-play');
      video[0].pause();
    }
  };


  //fullscreen button clicked

  var isFullscreen= false;
  $('.btnFS').on('click', function() {

    // $('.movies').addClass('adjust');
    // $('.control').addClass('adjustctrl');
    // $('.video-wrapper').addClass('adjustwrapper');
    
    if((window.fullScreen) || (window.innerWidth == screen.width && window.innerHeight == screen.height)){
        if(document.exitFullscreen) {
          document.exitFullscreen();
        } else if(document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        } else if(document.webkitExitFullscreen) {
            document.webkitExitFullscreen();
        }
      
    }


    else {
                  if($.isFunction($('.video-wrapper')[0].toggleFullscreen)) {
               $('.video-wrapper')[0].requestFullscreen();
          
               
              
            }
            if($.isFunction($('.video-wrapper')[0].webkitRequestFullscreen)) {
              $('.video-wrapper')[0].webkitRequestFullscreen();
           
             


            } 
            else if ($.isFunction($('.video-wrapper')[0].mozRequestFullScreen)) {
              $('.video-wrapper')[0].mozRequestFullScreen();

          

              
             
             
            }
            else {
              alert('Your browsers doesn\'t support fullscreen');
            }
             // var ratio = screen.width / screen.height;
           
             //  if (ratio <= 4/3) {
             //      // $(".video-wrapper:full-screen").css("width", "100%");

             //      $('.movies').addClass('adjust');
             //      $('.control').addClass('adjustctrl');
             //  };
    // $('.movies').removeClass('adjust');
    // $('.control').removeClass('adjustctrl');
    // $('.video-wrapper').removeClass('adjustwrapper');

    
    }

    
    

});
  

     // $("body").keyup(function(event) {

     //  //if esc is pressed or nothing is entered
     //  if ( event.keyCode == 27 && isFullscreen) {
     //    alert("esxp");
     //    $('.movies').removeClass('adjust');
     //    $('.control').removeClass('adjustctrl');
     //    $('.video-wrapper').removeClass('adjustwrapper');
     //   if(document.exitFullscreen) {
     //      document.exitFullscreen();
     //    } else if(document.mozCancelFullScreen) {
     //      document.mozCancelFullScreen();
     //    } else if(document.webkitExitFullscreen) {
     //      document.webkitExitFullscreen();
     //    }
     //  isFullscreen=false;
     //  }
  
  

    

                
  
  
  //sound button clicked
  $('.sound').click(function() {
    video[0].muted = !video[0].muted;
    $(this).toggleClass('muted');
    if(video[0].muted) {
      $('.volumeBar').css('width',0);
    }
    else{
      $('.volumeBar').css('width', video[0].volume*100+'%');
    }
  });
  
  //VIDEO EVENTS
  //video canplay event
  video.on('canplay', function() {
    $('.loading').fadeOut(100);
  });
  
  //video canplaythrough event
  //solve Chrome cache issue
  var completeloaded = false;
  video.on('canplaythrough', function() {
    completeloaded = true;
  });
  
  //video ended event
  video.on('ended', function() {
    $('.btnPlay').find('.icon-play').addClass('icon-pause').removeClass('icon-play');
    video[0].pause();
  });

  //video seeking event
  video.on('seeking', function() {
    //if video fully loaded, ignore loading screen
    if(!completeloaded) { 
      $('.loading').fadeIn(200);
    } 
  });
  
  //video seeked event
  video.on('seeked', function() { 
    $('.loading').fadeOut(200);
  });
  
  //video waiting for more data event
  video.on('waiting', function() {
    $('.loading').fadeIn(200);
  });
  
  //VIDEO PROGRESS BAR
  //when video timebar clicked
  var timeDrag = false; /* check for drag event */
  $('.progress').on('mousedown', function(e) {
    timeDrag = true;
    updatebar(e.pageX);
  });
  $(document).on('mouseup', function(e) {
    if(timeDrag) {
      timeDrag = false;
      updatebar(e.pageX);
    }
  });
  $(document).on('mousemove', function(e) {
    if(timeDrag) {
      updatebar(e.pageX);
    }
  });
  var updatebar = function(x) {
    var progress = $('.progress');
    
    //calculate drag position
    //and update video currenttime
    //as well as progress bar
    var maxduration = video[0].duration;
    var position = x - progress.offset().left;
    var percentage = 100 * position / progress.width();
    if(percentage > 100) {
      percentage = 100;
    }
    if(percentage < 0) {
      percentage = 0;
    }
    $('.timeBar').css('width',percentage+'%');  
    video[0].currentTime = maxduration * percentage / 100;
  };

  //VOLUME BAR
  //volume bar event
  var volumeDrag = false;
  $('.volume').on('mousedown', function(e) {
    volumeDrag = true;
    video[0].muted = false;
    $('.sound').removeClass('muted');
    updateVolume(e.pageX);
  });
  $(document).on('mouseup', function(e) {
    if(volumeDrag) {
      volumeDrag = false;
      updateVolume(e.pageX);
    }
  });
  $(document).on('mousemove', function(e) {
    if(volumeDrag) {
      updateVolume(e.pageX);
    }
  });
  var updateVolume = function(x, vol) {
    var volume = $('.volume');
    var percentage;
    //if only volume have specificed
    //then direct update volume
    if(vol) {
      percentage = vol * 100;
    }
    else {
      var position = x - volume.offset().left;
      percentage = 100 * position / volume.width();
    }
    
    if(percentage > 100) {
      percentage = 100;
    }
    if(percentage < 0) {
      percentage = 0;
    }
    
    //update volume bar and video volume
    $('.volumeBar').css('width',percentage+'%');  
    video[0].volume = percentage / 100;
    
    //change sound icon based on volume
    if(video[0].volume == 0){
      $('.sound').removeClass('sound2').addClass('muted');
    }
    else if(video[0].volume > 0.5){
      $('.sound').removeClass('muted').addClass('sound2');
    }
    else{
      $('.sound').removeClass('muted').removeClass('sound2');
    }
    
  };

  //Time format converter - 00:00
  var timeFormat = function(seconds){
    var m = Math.floor(seconds/60)<10 ? "0"+Math.floor(seconds/60) : Math.floor(seconds/60);
    var s = Math.floor(seconds-(m*60))<10 ? "0"+Math.floor(seconds-(m*60)) : Math.floor(seconds-(m*60));
    return m+":"+s;
  };
});