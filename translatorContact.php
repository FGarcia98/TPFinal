<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="style.css" rel="stylesheet">
    <link href="http://fr.allfont.net/allfont.css?fonts=crete-round" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width" />
</head>

<body>

    <header>
        <div class="wrapper">

            <h1>Super<span class="orange">Human</span></h1>
            <nav>
                <ul>

                    <li><a href="index.html">Homme</a></li>
                    <li><a href="cv.html">CV</a></li>
                    <li><a href="Motivation.html">Motivation</a></li>
                    <li><a href="societe.html">Society</a></li>
                    <li><a href="DP.html">Personal development</a></li>
                    <li><a href="spirituel.html"> Spiritual</a></li>
                    <li><a href="livre.html">Book</a></li>
                    <li><a href="contact.php">contact</a></li>


                </ul>
            </nav>

        </div>
    </header>

    <section id="main-image">
        <div class="wrapper">
            <h2>Super<span class="orange">Human</span> </h2>
        </div>

        <body>
            <div class="wrapperLivre">

                <body>
                    <div id="translator">
                        <a href="contact.php"> <img src="translator/fr.jpg" alt></a>
                    </div>
                    <h1>Contact</h1>
                    <form method="post">
                        <div>
                            <label for="name">Name :</label>
                            <input type="text" id="name" name="user_name">
                        </div>
                        <div>
                            <label for="mail">e-mail :</label>
                            <input type="email" id="mail" name="user_mail">
                        </div>
                        <div>
                            <label for="msg">Message :</label>
                            <textarea id="msg" name="user_message"></textarea>
                        </div>
                        <div class="button">
                            <button type="submit">Send the message !</button>
                        </div>
                    </form>
                    <?php
                    if (isset($_POST['message'])) {
                        $position_arobase = strpos($_POST['email'], '@');
                        if ($position_arobase === false)
                            echo '<p>Votre email doit comporter un arobase.</p>';
                        else {
                            $retour = mail('fgarcia@la-providence.net', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
                            if ($retour)
                                echo '<p>Votre message a été envoyé.</p>';
                            else
                                echo '<p>Erreur.</p>';
                        }
                    }
                    ?>
                </body>

</html>
</div>
</section>