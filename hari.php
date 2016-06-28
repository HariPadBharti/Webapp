<?php
include 'serverconnect.php';


/*images*/

$query12="SELECT name FROM images WHERE id = '1'";
$queryrun12=mysql_query($query12);
$img1=mysql_result($queryrun12, 0, 'name');

$query12="SELECT name FROM images WHERE id = '2'";
$queryrun12=mysql_query($query12);
$img2=mysql_result($queryrun12, 0, 'name');


$query12="SELECT name FROM images WHERE id = '3'";
$queryrun12=mysql_query($query12);
$img3=mysql_result($queryrun12, 0, 'name');

$query12="SELECT name FROM images WHERE id = '4'";
$queryrun12=mysql_query($query12);
$img4=mysql_result($queryrun12, 0, 'name');

$query12="SELECT name FROM images WHERE id = '6'";
$queryrun12=mysql_query($query12);
$img6=mysql_result($queryrun12, 0, 'name');

/*Menu*/

$query12="SELECT name FROM menu WHERE id = '1'";
$queryrun12=mysql_query($query12);
$txt1=mysql_result($queryrun12, 0, 'name');

$query12="SELECT name FROM menu WHERE id = '2'";
$queryrun12=mysql_query($query12);
$txt2=mysql_result($queryrun12, 0, 'name');

$query12="SELECT name FROM menu WHERE id = '3'";
$queryrun12=mysql_query($query12);
$txt3=mysql_result($queryrun12, 0, 'name');

$query12="SELECT name FROM menu WHERE id = '4'";
$queryrun12=mysql_query($query12);
$txt4=mysql_result($queryrun12, 0, 'name');

$query12="SELECT name FROM menu WHERE id = '5'";
$queryrun12=mysql_query($query12);
$txt5=mysql_result($queryrun12, 0, 'name');

/* Intereste=s */
$query12="SELECT name FROM interests WHERE id = '1'";
$queryrun12=mysql_query($query12);
$ts1=mysql_result($queryrun12, 0, 'name');

$query12="SELECT name FROM interests WHERE id = '2'";
$queryrun12=mysql_query($query12);
$ts2=mysql_result($queryrun12, 0, 'name');

$query12="SELECT name FROM interests WHERE id = '3'";
$queryrun12=mysql_query($query12);
$ts3=mysql_result($queryrun12, 0, 'name');

$query12="SELECT name FROM interests WHERE id = '4'";
$queryrun12=mysql_query($query12);
$ts4=mysql_result($queryrun12, 0, 'name');

$query12="SELECT name FROM interests WHERE id = '5'";
$queryrun12=mysql_query($query12);
$ts5=mysql_result($queryrun12, 0, 'name');

$query12="SELECT name FROM interests WHERE id = '6'";
$queryrun12=mysql_query($query12);
$ts6=mysql_result($queryrun12, 0, 'name');

$query12="SELECT name FROM interests WHERE id = '7'";
$queryrun12=mysql_query($query12);
$ts7=mysql_result($queryrun12, 0, 'name');

$query12="SELECT name FROM interests WHERE id = '8'";
$queryrun12=mysql_query($query12);
$ts8=mysql_result($queryrun12, 0, 'name');

 /*Whats New */
 
 
$query12="SELECT name FROM whats_new WHERE id = '1'";
$queryrun12=mysql_query($query12);
$new1=mysql_result($queryrun12, 0, 'name');

 
$query12="SELECT name FROM whats_new WHERE id = '2'";
$queryrun12=mysql_query($query12);
$new2=mysql_result($queryrun12, 0, 'name');

 
$query12="SELECT name FROM whats_new WHERE id = '3'";
$queryrun12=mysql_query($query12);
$new3=mysql_result($queryrun12, 0, 'name');

 
$query12="SELECT name FROM whats_new WHERE id = '4'";
$queryrun12=mysql_query($query12);
$new4=mysql_result($queryrun12, 0, 'name');
 
$query12="SELECT name FROM whats_new WHERE id = '5'";
$queryrun12=mysql_query($query12);
$new5=mysql_result($queryrun12, 0, 'name');
/*data*/
$query12="SELECT info FROM data WHERE id = '1'";
$queryrun12=mysql_query($query12);
$inf1=mysql_result($queryrun12, 0, 'info');

?><!DOCTYPE html>
<html xmlns="">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AutoEra</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="hpb_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/coda-slider.css" type="text/css" media="screen" charset="utf-8" />

<script src="js/jquery-1.2.6.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo-1.3.3.js" type="text/javascript"></script>
<script src="js/jquery.localscroll-1.2.5.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.serialScroll-1.2.1.js" type="text/javascript" charset="utf-8"></script>
<script src="js/coda-slider.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>

</head>
<body>






<div id="slider">
	
    <div id="templatemo_sidebar">
    	<div id="t_header">
        	<a href="" target="_parent"> <img src="images/logo1.png"alt="AuroEra"/></a>
        </div> <!-- end of header -->
        
        <ul class="navigation">
            <li><a href="#home"><?php echo $txt1  ?><span class="ui_icon home"></span></a></li>
            <li><a href="#aboutus"><?php echo $txt2  ?><span class="ui_icon aboutus"></span></a></li>
            <li><a href="#services"><?php echo $txt3  ?><span class="ui_icon services"></span></a></li>
            <li><a href="#gallery"><?php echo $txt4  ?><span class="ui_icon gallery"></span></a></li>
            <li><a href="#contactus"><?php echo $txt5  ?><span class="ui_icon contactus"></span></a></li>
        </ul>
    </div> <!-- end of sidebar -->

	<div id="templatemo_main">
    	<ul id="social_box">
            <li><a href="http://www.facebook.com/thehpb"><img src="<?php  echo $img1; ?>" alt="facebook" /></a></li>
            <li><a href="http://www.twitter"><img src="<?php  echo $img2; ?>" alt="twitter" /></a></li>
            <li><a href="http://www.linkinden.com"><img src="<?php  echo $img3; ?>" alt="linkin" /></a></li>
            <li><a href="http://www.technorati.com"><img src="<?php  echo $img4; ?>" alt="technorati" /></a></li>
            <li><a href="http://www.myspace.com"><img src="<?php  echo $img6; ?>" alt="myspace" /></a></li>
			
        </ul>
		<a href="buzzaround/login.php">Login</a>
	
			<button href="buzzaround/login.php" style="position:absolute;width:100px;left:1000px;top:100px;border-radius:15px;height:30px">Login</button>
				<div style="position:absolute;width:700px;left:500px;top:500px;border-radius:15px;height:30px;display:none;z-index:999">
</div>		
			<button style="position:absolute;width:100px;left:1200px;top:100px;border-radius:15px;height:30px">SignUp</button>
			
        <div id="content">
        
        <!-- scroll -->
        
        	
            <div class="scroll">
                <div class="scrollContainer">
                
                    <div class="panel" id="home">
                        <h1><br><br><?php  echo $inf1; ?></br></br></h1>    
                        <div class="image_wrapper image_fl;"><img src="images/home.jpg" alt="image" /></div>
                        <p><em> <a href="" rel="nofollow"></a>  <a href="" rel="nofollow"></a></em></p>
                        <p> <a href="" target="_parent"></a>  <a href="" target="_parent"></a><a href="http://www.photovaco.com" target="_blank"></a><a href="http://jwloh.deviantart.com/art/Social-me-90694011" target="_blank"></a>  <a href="http://www.wefunction.com" target="_blank"> </a> </p>
                      <div class="cleaner_h40"></div>
                        
                        <h2></h2> 
                        <p><em></em></p>
                        <p></p>
                        <div class="btn_more"><a href="#aboutus"> <span> </span></a></div>
                    </div> <!-- end of home -->
                    
                    <div class="panel" id="Interests">
                        <h1> </h1>
                    	
                        
						<li><a href="#home"><?php echo $ts1  ?><span class="ui_icon home"></span></a></li><br></br>
						<li><a href="#aboutus"><?php echo $ts2  ?><span class="ui_icon aboutus"></span></a></li><br></br>
						<li><a href="#services"><?php echo $ts3  ?><span class="ui_icon services"></span></a></li><br></br>
						<li><a href="#gallery"><?php echo $ts4  ?><span class="ui_icon gallery"></span></a></li><br></br>
						<li><a href="#contactus"><?php echo $ts5  ?><span class="ui_icon contactus"></span></a></li><br></br>
						<li><a href="#contactus"><?php echo $ts6  ?><span class="ui_icon contactus"></span></a></li><br></br>
						<li><a href="#contactus"><?php echo $ts7  ?><span class="ui_icon contactus"></span></a></li><br></br>
<li><a href="#contactus"><?php echo $ts8  ?><span class="ui_icon contactus"></span></a></li>
						<p><em> </em></p>
                        <p>  <a href="#"> </a></p>
                      <p></p>
                    </div>
                    
                    <div class="panel" id="services">
                        <h1><?php echo $txt3  ?></h1>
                		<p> <a href="http://www.icojoy.com" target="_blank"></a> </p>
                        
                        <ul class="service_list">
                            <li><a href="#gallery"><span class="ui_icon gallery"></span><?php echo $new1  ?></a></li>
                            <li><a href="#" onclick="ajax()" class="service_two"><?php echo $new2  ?></a></li>
                            <li><a href="" class="service_three"><?php echo $new3  ?></a></li>
                            <li><a href="" class="service_four"><?php echo $new4  ?></a></li> 
                            <li><a href="" class="service_five"><?php echo $new5  ?></a></li>  
							
							
                        </ul>
						
						
											
						<div id="hariya"><br><br><br><h1>India News</h1>
												<?php
				 
				include('simple_html_dom.php');
				main();
				function scraping_URL($url) {
					$html = file_get_html($url);
					
				for($i=3;$i<=12;$i++)
						{
								$ret[$i] = $html->find('p',$i);
							echo $ret[$i];
						}
							
					
					$html->clear();
					unset($html);
				//    return $ret;
				}
					
				 function main()
						{
						set_time_limit(0); 
						error_reporting(0);
									for($i=1;$i<=1;$i++)
									{
										$ph1='http://timesofindia.indiatimes.com/india';
										scraping_URL($ph1);
									}
									
						}																					
				?>
						</div>
	
						
						
						
                    </div>
                
			
				
				

				
				
						
					
					
				
                    <div class="panel" id="gallery">
                        
            			<?php
						define('DB_NAME','minor');
						define('DB_USER','root');
						define('DB_PASSWORD','hari');
						define('DB_HOST','localhost');
						$link=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
						$db_selected=mysql_select_db(DB_NAME,$link);
						$html = "";
						$url = "http://gdata.youtube.com/feeds/api/users/itvnewsindia/uploads";
						$xml = simplexml_load_file($url);
						for($i = 0; $i < 3; $i++)
						{
							$id=$xml->entry[$i]->id;
							$id=str_replace("http://gdata.youtube.com/feeds/api/videos/","",$id);
							$ft=$_POST['$id'];
							$query="insert into videos values('$id')";
							$result=mysql_query($query);
							$html .= "<iframe width='320' height='220'src='http://www.youtube.com/embed/$id'></iframe><br/>" ;
							
						}
						echo $html;
						
						
						?>
						
						
						
						    
                    </div>
                
                    <div class="panel" id="contactus">
                        <h1>Feel free to send us a message</h1>
                        <div id="contact_form">
<script>           
		   function checkform()
	{	
		var x=document.hari.nm.value;
		if(x==null || x=="")
		{
			alert("Name must be filled");
			return false;
		}
		else
		{
			var y = document.hari.pwd.value;
			if(y==null || y=="")
			{
			alert("Password must be filled");
			return false;
			}

			else
			{
				if ( ( document.hari.gender[0].checked == false ) && ( document.hari.gender[1].checked == false ) ) 
				{
				alert ( "Please choose your Gender: Male or Female" ); 
				return false;
				}
				else
				{
					if(!document.hari.tc.checked)
					{
						alert("You must abide by Terms and Conditions");
						return false;
					}
					else
					{
						if(document.hari.cars.value==0)
						{
							alert("Select");
							return false;
						}
						else
						{
								return true;
						}
					}
				}				
			}		
		}		
	}
	
	
	
	function printToPage() {
		var myWindow = open("", "My Local Window");
		myWindow.focus();
		alert("Welcome to Your form");
		myWindow.document.writeln("Name :");
		myWindow.document.writeln(document.hari.nm.value);
		myWindow.document.writeln("<br>");
		
		myWindow.document.writeln("Gender :");
		myWindow.document.writeln(document.getElementById('t3').value);
		myWindow.document.writeln("<br>");
		
		myWindow.document.writeln("Car Selected :");
		myWindow.document.writeln(document.hari.cars.value);
		myWindow.document.writeln("<br>");
		
		myWindow.document.writeln("About Yourself :");
		myWindow.document.writeln(document.hari.ta.value);
		myWindow.document.writeln("<br>");
		
		myWindow.document.writeln(document.hari.date1.value);
					
	}


	
	
	</script>

	
	
	</head>
<body>
	<div class="main">
	
	<div class="webname">
		<a href="sa.html"><h1></h1></a>
	</div>
	
	<div class="mmenu">
		<div class="menu">
					</div>
	
		<div class="log">
		</div>
		
	</div>
	

	<form name="hari" onSubmit="printToPage()">
		Enter Your Name: <input type="text" name="nm" id="nm"><br>
		
		Password :		 <input type="password" name="pwd" id="t2" ><br><br>
		
		<input type="radio" name="gender" id="t3" value="male">Male
		<input type="radio" name="gender" id="t3" value="female">Female<br><br>
		
		<input type="checkbox" name="tc" id="t4" value="T and C">Terms and Conditions<br><br>
		
		Write your questions or feedback<br>
		<textarea rows="5" cols="10" name="ta">
		</textarea><br>
		<br>
		<input type="submit" name="continue" value="submit" onClick="return checkform();">
	</form></div>
                    </div>
                
                </div>
			</div>
            
        <!-- end of scroll -->
        
        </div> <!-- end of content -->
        
        <div id="templatemo_footer">

           
        
        </div> <!-- end of templatemo_footer -->
    
    </div> <!-- end of main -->
</div>

</body>
</html>