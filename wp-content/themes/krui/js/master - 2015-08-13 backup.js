jQuery(document).ready(function() {
    // Header navigate to homepage
    jQuery('#blog-title').click(function(){
      window.location = '/';
    });
  // Featured content per page/category
  jQuery('#main-feature').s3Slider({
    timeOut: 5000
  });
  // Define latest lab studio song function
    function labLatest() {
        jQuery.ajax({
            type: 'GET',
            url: 'http://staff.krui.fm/api/playlist/lab/latest.json?callback=playlist',
            dataType: 'jsonp',
            success: function(playlist) {
                jQuery('#blog-title').append('<div id="lab-playlist" class="playlist-header"><span class="iconic beaker-alt"></span> '+playlist.song.artist+' - '+playlist.song.name+'<br/>from '+playlist.song.album+', '+humaneDate(playlist.song.time)+'</div>');
            }
        });
    }
  // Get latest main studio song
  jQuery.ajax({
        type: 'GET',
        url: 'http://staff.krui.fm/api/playlist/main/latest.json?callback=playlist',
        dataType: 'jsonp',
        success: function(playlist) {
            jQuery('#blog-title').append('<div id="main-playlist" class="playlist-header"><span class="iconic bolt"></span> '+playlist.song.artist+' - '+playlist.song.name+'<br/>from '+playlist.song.album+', '+humaneDate(playlist.song.time)+'</div>');
            labLatest();
        }
  });
  // Main studio extended playlist
   jQuery.ajax({
        type: 'GET',
        url: 'http://staff.krui.fm/api/playlist/main/items.json?limit=10',
        dataType: 'jsonp',
        success: function(playlist) {
            jQuery('#main-studio-1').append('<ol id="extended-playlist" style="padding-top:5px;"></ol>');
            for (var i = 0; i < 10; i++) {
                jQuery('#extended-playlist').append('<li style="color: black;font-size: 14px;font-weight: normal;line-height: 15px;padding-top: 4px;text-shadow: 0px 1px 0px white;">'+playlist[i][0].song.artist+' - '+playlist[i][0].song.name+'<br/>from '+playlist[i][0].song.album+'</li>');
            }
        }
  });
  // The Lab extended playlist
   jQuery.ajax({
        type: 'GET',
        url: 'http://staff.krui.fm/api/playlist/lab/items.json?limit=10',
        dataType: 'jsonp',
        success: function(playlist) {
            jQuery('#lab-studio-1').append('<ol id="lab-extended-playlist" style="padding-top:5px;"></ol>');
            for (var i = 0; i < 10; i++) {
                jQuery('#lab-extended-playlist').append('<li style="color: black;font-size: 14px;font-weight: normal;line-height: 15px;padding-top: 4px;text-shadow: 0px 1px 0px white;">'+playlist[i][0].song.artist+' - '+playlist[i][0].song.name+'<br/>from '+playlist[i][0].song.album+'</li>');
            }
        }
  });
});
  /*Google Analytics*/
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20702959-1']);
  _gaq.push(['_setDomainName', '.krui.fm']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
