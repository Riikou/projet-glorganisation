<head>
    <title>Contact - GL Organisation</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/style_contact.css">
    <link rel="icon" type="image/png" href="../images/logo_GL.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</head>

<body>
    <?php
        $position = "relative";
        include("include/header.php"); 
    ?>
    <p id="contact">Contact</p><br />
    <p class="text-center" id="contact-message">For more information about GL Organisation, please complete the form below</p>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <form id="contact-form" method="post" action="" role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="firstname">First Name </label>
                            <input id="firstname" type="text" name="firstname" class="form-control" placeholder="Votre prénom">
                        </div>
                        <div class="col-md-6">
                            <label for="name">Last Name *</label>
                            <input id="name" type="text" name="name" class="form-control" placeholder="Votre Nom">
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email *</label>
                            <input id="email" type="text" name="email" class="form-control" placeholder="Votre Email">
                        </div>
                        <div class="col-md-6">
                            <label for="phone">Phone</label>
                            <input id="phone" type="tel" name="phone" class="form-control" placeholder="Votre Téléphone">
                        </div>
                        <div class="col-md-6">
                            <label for="subject">Subject</label>
                            <input id="subject" type="text" name="subject" class="form-control" placeholder="Sujet de votre message">
                        </div>
                        <div class="col-md-12">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" class="form-control" placeholder="Votre Message" rows="4"></textarea>
                        </div>
                        
                        <div class="col-md-12">
                            <p><strong>* Those fields are required.</strong></p>
                        </div>
                        <div class="col-md-12 text-center">
                            <input type="submit" class="button1" value="send">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
