
<?php
include('lock.php');
include('Logout.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
		
	<style type="text/css">
		.songs-search-result {
			border: 1px solid Gray;
			margin-bottom: 5px;
			padding: 5px;
		}

		.songs-search-result  .label{
			display: inline-block;
			width: 200px;
		}
		</style>


<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jsrender.js"></script>
<script type="text/javascript" src="js/lastfm.api.md5.js"></script>
<script type="text/javascript" src="js/lastfm.api.js"></script>
<script type="text/javascript" src="js/lastfm.api.cache.js"></script>
<script src="js/jquery-1.2.1.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/modern-business.js"></script>

<link href="css/main.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" >
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" >

<link href="css/modern-business.css" rel="stylesheet" type="text/css" >
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" >



<!-- define three templates for our units -->

 <script id="lastfmTemplateArtists" type="text/x-jsrender">
        <div id="{{:mbid}}" class="artist">
            <a href="{{:url}}" rel="nofollow" target="_blank"><img src="{{:image[2]["#text"]}}" alt="{{:name}}" /><b>{{:name}}:</b></a>
        </div>
 </script>

 <script id="lastfmTemplateArtistInfo" type="text/x-jsrender">
        <div class="artist_info" >
            <a href="{{:url}}" rel="nofollow" target="_blank"><b>{{:name}}</b><img src="{{:image[3]["#text"]}}" alt="{{:name}}" style="width:300px; height: 300px; float: left;" /></a>
            <div style="float: left; width: 500px; height: 200px; padding-left: 20px; padding-top: 40px; font-size: 15px;"><noindex>
                {{:bio.content}}
            </noindex></div>
        </div>
 </script>

    <script id="lastfmTemplateTracks" type="text/x-jsrender">
        {{if image}}
        <div id="{{:mbid}}" class="track" style="width: 250px;">
            <!--<a href="{{:"url"}}" rel="nofollow" target="_blank"><img src="{{:image[0]["#text"]}}" /><b>{{:name}}</b></a>-->
            <b><img src="{{:image[0]["#text"]}}" style="width: 50px; height:50px;" /><b>{{:name}}</b>
            <br>
          <!-- <input type="button" class="getLyricsBtn" onClick=displayLyrics(data.toptracks.track.mbid) value="Get Lyrics" style="margin-left: 45px"/>-->
           
           
        </div>

        {{/if}}
    </script>
    
    
	
  	
</head>

<body background="web_background.jpg">


<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="width: 1400px; background-color:black">
            <a href="home.php"><img src ="gsFav.jpg" style="float: left; height: 100px"/></a>
            <div class="container" style="height: 100px; background-color: black; width: 1200px">
                <div class="navbar-header">

                    <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->

                    <p style="color: white; font-size:xx-large;">Global Sound</p>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->


   <div class="collapse navbar-collapse navbar-ex1-collapse" style="margin-left: 775px; width: 600px;">
                    <ul class="nav navbar-nav navbar-right" style="width: 500px">
                        <li>
                        </li>
                    </ul>

                    <h1 style="color: white; font-size: medium; float: right; margin-right: 190px; margin-top: 5px;">Logged In: <?php echo $login_session; ?></h1>


                    <form action="Logout.php" method="post">
                        <button class="btn btn-m btn-primary btn-block" type="submit" name="logout" style="height: 28px; width: 102px; margin-top: 30px; margin-left: 307px; padding-top: 3px; padding-bottom: 3px;">Log Out</button>
                    </form>




                </div>

    </div>
            <!-- /.container -->
        </nav>
	
	<div id="myCarousel" class="carousel slide" style="padding-top: 55px; height: 300px;">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
				<div class="item active">
                    <div class="fill" style="background-image:url('search_img_3.jpg');"></div>
                    <div class="carousel-caption"></div>
                </div>
			</div>

      


     <div class="section" style="width:1300px">



 <!--- -------------------------------------------Search Bar ------ -->

<form name="input" method ="get">
     <input type="text" id="mySubmitd" placeholder="Enter Artist name here" style="width: 189px; height: 34px;"/>
     <input type="button" id="mySubmit" onClick=getartistName() value="Search" style="width: 54px; height: 30px;"/>
 </form>
 
  <!--- ---------------------------------------End Search Bar ------ -->
 
 
 	<!-- -----------------------Divs for display of LastFM results ------ -->
 
  <div class="content-main" style="border:0; filter:alpha(opacity=50); opacity:0.5;">
  
        <div class="content-body" style="background-color:white; border:0;">
           <div class="content-body-inner" id="top_artist" style="border-bottom-width: 0px"></div>
  		</div>

		<div class="content-body" style="background-color:white;">
			<div class="content-body-inner" id="top_tracks" style="border-bottom-width: 0px"></div>
 		</div>


<!-- -----------------------End of Divs for display of LastFM results ------ -->

 <!-- ----------------------ITunes Song return ----------------------- -->
 
		 <div id="itunes-results"></div>
		
		<div align="center">
 			<input type="button" value="Perform iTunes Search" onclick="performSearch();">
		</div>
		
	</div>
 
 <!-- ----------------------End ofITunes Song return ----------------------- -->
 
 
</body>

<!-- ----------------------Script for iTunes search ---------------------- -->
		<script type="text/javascript">
			function urlEncode(obj) {
				var s = '';
				for (var key in obj) {
				s += encodeURIComponent(key) + '=' + encodeURIComponent(obj[key]) + '&';
				}
				if (s.length > 0) {
					s = s.substr(0, s.length - 1);
				}

				return (s);
				}
		</script>
			
<!-- ----------------------End of Script for iTunes search ---------------------- -->

 <div class="navbar navbar-inverse navbar-fixed-bottom">

                <p style="color: white; text-align: center;">Natalie Edward | Mark Mooney | Zhi Yan Han</p>

            </div>

</html>