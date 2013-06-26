<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
    <div class="boxlogowanie">
            <div class="logo"><img src="<?php echo LOGO_PATH; ?>" alt="LOGO"></div>
            <div style="color:red; font-family: Arial; font-size:12px; margin-top: 20px;">
                <?php
                        if(isset($error[0])){
                            echo $error;
                        }
                ?>
            </div>
            <div style="margin: 35px auto;width: 243px;">
                <form method="post">
                    <div class="login">login</div>
                    <input type="text" name="nick" class="logininput" />
                    <div style="clear:both;"></div>
                    <div class="haslo">hasło</div>
                    <input type="password" name="password" class="hasloinput" />
                    <div style="clear:both;"></div>
                    <input type="submit" class="logujinput" style="" value="zaloguj mnie do CMS" />
                </form>
            </div>
    </div>    
</body>
</html>