<!DOCTYPE html>
<html>
    <head>
        <title>
            <?php
                echo $title;
            ?>
        </title>
        <link rel="stylesheet" type="text/css" href="styles/header_style.css">
    </head>
    <body>
        <header style="position: <?php echo $position ?>">
            <div class="brand">
                <div>
                    <img src="images/logo_GL.png">
                </div>
                <div id='text-header'>
                    <h1>INTERNATIONAL AGENCY <strong class="red">FOR LIVE SHOWS</strong></h1>
                </div>
            </div>
            <div class="nav">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><p>|</p></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><p>|</p></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>    
        </header>
    </body>
</html>
