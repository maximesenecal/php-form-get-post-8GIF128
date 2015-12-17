<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
    	<script type="text/javascript" src="js/script.js"></script>
		<title>TP4 :: GreenShop</title>
	</head>
	<body>
		<div id="banner"></div>
		<div id="container">
            <div id="header">
                <div id="logo">
                    <a href="./index.php">
                        <img src="./img/logo.png" alt="GreenShop"/>
                    </a>
                </div>
                <?php
					/***Code 
					Ã  Ã©crire [4]***/
                	if (isset($_COOKIE["greenshop"])) 
					{
						$val=$_COOKIE["greenshop"];
						
						echo"<div id=identification> <form action=\"cookie.php\" method=\"get\">
						Vous êtes connecté en tant que $val .
						<input type=\"submit\" name=\"deconection\" value=\"deconection\">
						</form> </div>";
					}
                	
					
				?>
            <div class="clear"></div>   
            </div>
			<div id="contents">