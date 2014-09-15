
<?php
include('lock.php');
include('register.php');
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Global Sound</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Add custom CSS here -->
        <link href="css/modern-business.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
        
        <script>
        	function Login(){
        		
        	}
        </script>
    </head>



    <body>
	
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="width: 1400px; background-color:black">
         <img src ="gsFav.jpg" style="float: left; height: 100px"/>
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
                        
           
                      	<form action="login.php" method="post">
                      		<div class="col-xs-2 col-md-2" style="width: 180px; height: 20px">
                                <input class="form-control" name="username" placeholder="Username" type="text" required autofocus />
                            </div>

                            <div class="col-xs-2 col-md-2" style="width: 180px; height: 20px">
                                <input class="form-control" name="password" placeholder="Password" type="password" required />
                            </div>
                            
                       		<div class="col-xs-2 col-md-2">
                                <button class="btn btn-m btn-primary btn-block" type="submit" name="login" style="height: 34px">Log In</button>
                       		</div>	
                       	</form>
          	  </div>
            	
            
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        
        

        <div id="myCarousel" class="carousel slide" style="padding-top: 55px; height: 300px;">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="fill" style="background-image:url('music2.jpg');"></div>
                    <div class="carousel-caption">

                    </div>
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('music3.jpg');"></div>
                    <div class="carousel-caption">

                    </div>
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('music1.jpeg');"></div>
                    <div class="carousel-caption">

                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="icon-next"></span>
            </a>
        </div>

        <div class="section" style="width:1300px">

            <!--- -------------------------------------------register starts here ------ -->

   

 

                <div class="area" style="width: 600px; float:left; margin-left: 25px">
             <h1 class="mbs_3ma_6n_6s_6v" style="font-size: 36px; width: 620px; float:left">Sign Up</h1>

                    <form action="register.php" method="post" class="form" role="form">

                        <div class="row">

                            <div class="col-xs-2 col-md-2" style="width: 200px; padding-right: 0px">
                                <input class="form-control" name="firstname" placeholder="First Name" type="text" required autofocus />
                            </div>

                            <div class="col-xs-2 col-md-2" style="width: 200px; padding-right: 0px">
                                <input class="form-control" name="lastname" placeholder="Last Name" type="text" required />
                            </div>

                               
                        </div >


						<div class="row" style="margin-top: 10px">
							 <div class="col-xs-2 col-md-2" style="width: 400px; padding-right: 0px">
                                <input class="form-control" name="email" placeholder="Your Email" type="email" />
                            </div>
                        </div>


                        <div class="row" style="margin-top: 10px">

                            <div class="col-xs-2 col-md-2" style="width: 200px; padding-right: 0px">
                                <input class="form-control" name="user" placeholder="User Name" type="text" required />
                            </div>

                            <div class="col-xs-2 col-md-2" style="width: 200px; padding-right: 0px">
                                <input class="form-control" name="pass" placeholder="New Password" type="pass" />
                            </div>
                            
                    	</div>
                    	
                    	<div class="row" style="margin-top: 10px; padding-bottom: 15px">

                            <div class="col-xs-2 col-md-2">
                                <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" onclick="myFunction()" style="width: 175px">Sign Up</button>
                                <script>
function myFunction()
{
alert("Registration Successful");
}
</script>
                          
                            </div>  
                        </div>   
				 </form>
				 

</div>

<div class="area" style="width: 600px; float:left; margin-left: 25px; height: 325px;">
             <h2 class="mbs_3ma_6n_6s_6v" style="font-size: 36px; width: 620px; float:left; padding-bottom: 15px;">World music at the touch of a button</h2>

							<div class="row" style="padding-bottom:15px;">
							<img src="ma.jpg" style="width: 50px; height: 50px; float: left;">
							<div class="_6a _6b product_desc">
							<span style="width: 400px float: right; padding-left: 10px; font-size: 20px;">Get the latest information on your favourite artist</span>	
							 </div>
							 </div>
						
						
							<div class="row" style="padding-bottom:15px;">	 
							 <img src="con.jpg" style="width: 50px; height: 50px; float: left;">
							<div class="_6a _6b product_desc">
							<span style="width: 400px float: right; padding-left: 10px; font-size: 20px;">See where your favourite artist or group will be playing</span>
							</br>
							<span style="width: 400px float: right; padding-left: 10px; font-size: 20px;"> their 	next gigs</span>	
							 </div>
							 </div>
							 
							 
							 <div class="row" style="padding-bottom:25px;">
							 <img src="lyrics.jpeg" style="width: 50px; height: 50px; float: left;">
							<div class="_6a _6b product_desc">
							<span style="width: 400px float: right; padding-left: 10px; font-size: 20px;">Look up song lyrics.</span>
							</br>
							<span style="width: 400px float: right; padding-left: 10px; font-size: 20px;">Added feature of translation into your language of choice</span>	
							 </div>
							 </div>
							 

  <div class="navbar navbar-inverse navbar-fixed-bottom">
          
                <p style="color: white; text-align: center;">Natalie Edward | Mark Mooney | Zhi Yan Han</p>
         
        </div>
   

 

<!-- /.container -->





<!-- JavaScript -->
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/modern-business.js"></script>
<!--<script type="text/javascript" src="/scripts/retina.js"></script>-->
</body>

</html>
