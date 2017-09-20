<section class="har_player_container_red har_left_player">
         <div class="har_over" data-color="rgb(0, 0, 0)" data-opacity="1" data-blend="multiply" style="background-color: rgb(0, 0, 0); opacity: 1; mix-blend-mode: multiply;"></div>
            <div class="container">

               
                <div id="jp_container_content" class="jp-audio-main" role="application" aria-label="media player">
                 <div class="har_left_player_controls">
                  <div id="unmute_all" class="har-play" style="display: none;">
                        <i class="ti ti-control-play"></i>
                    </div>
                    <div id="mute_all" class="har-pause" style="display: block;">
                        <i class="ti ti-control-pause"></i>
                    </div>
                          
                    
                </div>
                
                
            </div>
        </div>
        <!-- Player End -->

    </section>



<script src="//widget.mixcloud.com/media/js/widgetApi.js" type="text/javascript"></script>

<script type="text/javascript">
    var widget = Mixcloud.PlayerWidget(document.getElementById("mixcloudframe"));
    widget.ready.then(function() {
       /*** Mute all ***/
       $('#mute_all').on('click',function(){

          widget.pause();
          $('#mute_all').hide();
          $('#unmute_all').show();


       });
      
       /*** UnMute all ***/
       $('#unmute_all').on('click',function(){

          /*** Un Mute all video and audio on page ***/
          widget.play();
          $('#unmute_all').hide();
          $('#mute_all').show();


       });
       $('#next-btn').on('click',function(){

          /*** Un Mute all video and audio on page ***/
          widget.next();
          


       });
       // Put code that interacts with the widget here
    });

     // if you have more than one widget to control
</script>
<script type="text/javascript">
    $(document).ready(function(){

      
      
    });
</script>