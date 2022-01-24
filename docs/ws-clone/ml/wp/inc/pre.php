<?php

/* If you have valid PRO License, make definition below active,
   so website knows it should unlock PRO functions.
   Just make sure you have added your servers to the list 
   in Manager Area (www.kopage.com/manager) */
   
define('kopagePRO',1);

/* By default, Kopage is a cPanel Website builder, 
   so if you're not using cPanel on your server, 
   make definition below active to disable cPanel-login process 
   
   Possible alternatives: 
   
   		DA = DirectAdmin
		FTP = login with FTP user/pass
   
   */
   
define('noCPanelLogin', 'FTP');
define('ftpLogin_CustomHostname', '185.27.134.11');

?>
