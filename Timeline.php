<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile |E-REGATA</title>
</head>

<style type="text/css">
#blue_bar{
		height: 50px;
		background-color: mediumaquamarine;
		color: orangered; 
	}

	#search_box{
		width: 400px;
		height: 20px;
		border-radius: 5px;
		border: none;
		padding: 4px;
		font-size: 14px;
		background-image: url(search.png) ;
		background-repeat: no-repeat;
		background-position: right;


	}

	#profile_pic{
		width: 150px;
		border-radius: 50%;
		border: solid 2px white;
	}

	#menu_buttons{

		width: 100px;
		display: inline-block;
		margin: 2px;
	}
	#friends_img{
		width: 75px;
		float: left;
		margin: 8px;


	}
	#friends_bar{

		min-height: 400px;
		margin-top: 20px;
		padding: 8px;
		text-align: center;
		font-size: 20px;
		color: mediumaquamarine;
	}

	#friends{
		clear: both;
		font-size: 12px;
		font-weight: bold;
		color: mediumaquamarine;
	}
	
	textarea{
		width: 100%;
		border: none;
		font-family: tahoma;
		font-size: 14px;
		height: 60px;

	}
	#post_button{
		float: right;
		background-color: mediumaquamarine;
		border: none;
		color: white;
		font-size: 14px;
		border-radius: 2px;
		width: 50px;
	}
	#post_bar{
		margin-top: 20px;
		background-color: white;
		padding: 10px;

	}
	#post{
		padding: 4px;
		font-size: 13px;
		display: flex;
		margin-bottom: 20px;
	}
	
</style>

<body style="font-family: tahoma; background-color: whitesmoke;"> 
	<!--top bar-->

	<div id="blue_bar">
		<div style="width: 800px;margin: auto;font-size: 30px;">

		E-REGATA  &nbsp &nbsp<input type="text" id="search_box"
		placeholder="search for people">

		<img src="han1.png" style="width: 50px; float: right;">
	</div>

	</div>
	<!--cover area-->
	<div style="width: 800px; margin: auto;min-height:400px;">

		
		<!--below cover area-->

		<div style="display: flex;">
 		 		<!--friends area-->
 		 	<div style=" min-height: 400px;flex: 1;">
 		 		<div id="friends_bar">

 		 			<img src="han1.png" id="profile_pic"><br>
 		 			Hanna Ashenafi

 		 	
 		 	
 		 	</div>


 		 </div>
 		 	
		<!--post area-->
		<div style="min-height: 400px;flex: 3;padding: 20px;padding-right: 0px;">
			<div style="border: solid thin #aaa;padding: 10px;background-color: white;">
				<textarea placeholder="whats on your mind?"></textarea>
				<input id ="post_button"type="submit"value="post">
				<br>
			</div>
			
	
			
			<!--posts-->
			<div id="post_bar">
				<div id="post">
					<div>
						<img src="user4.jpg" style="width: 75px;margin-right: 4px;">
						
					</div>
					<div>
						<div style="font-weight: bold; color: mediumaquamarine;">Jhon</div>
						Text messaging users send or receive an average of 41.5 messages per day, with the median user sending or receiving 10 texts daily.
						<br/><br/>

						<a href="">Like</a> . <a href="">comment</a> .  <span style="color: #999;">November 1 2021</span>
					</div>

				</div>
				<div id="post_bar">
				<div id="post">
					<div>
						<img src="user4.jpg" style="width: 75px;margin-right: 4px;">
						
					</div>
					<div>
						<div style="font-weight: bold; color: mediumaquamarine;">Jhon</div>
						Text messaging users send or receive an average of 41.5 messages per day, with the median user sending or receiving 10 texts daily.
						<br/><br/>

						<a href="">Like</a> . <a href="">comment</a> .  <span style="color: #999;">November 1 2021</span>
					</div>

				</div>
			
				</div>
		

	</div>
</div>
</div>

		
</body>
</html>


