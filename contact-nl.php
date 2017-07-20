<?php 
if(isset($_POST['submit'])){
    $to = "christophmeulyzer@hotmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: confirm-nl.php'); //to redirect to another page.
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Christoph Meulyzer</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
    <nav class="light-blue lighten-1" role="navigation">
        <div class="nav-wrapper container">
            <ul class="left">
                <li><a href="home-nl.html">HOME</a></li>
            </ul>
            <ul class="right">
                <li><a href="#">Deutsch</a></li>
                <li><a href="#">English</a></li>
                <li><a href="#">Français</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="col s12">
            <div class="icon-block">
                <h2 class="center light-blue-text"><i class="material-icons">contact_mail</i></h2>
                <h5 class="center">Contact</h5>

                <p class="light" id="instructions">Vul het formulier in en druk op verzenden.</p>
            </div>
        </div>
        <!--action="confirm-nl.html"-->
        <form action="confirm-nl.php" method="post" class="col s12">
            <div class="row center">
                <div class="input-field col s6">
                    <input id="first_name" name="first_name" type="text" class="validate" required>
                    <label for="first_name">Voornaam</label>
                </div>
                <div class="input-field col s6">
                    <input id="last_name" name="last_name" type="text" class="validate" required>
                    <label for="last_name">Familienaam</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input id="email" name="email" type="email" class="validate" required>
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">mode_edit</i>
                    <textarea id="icon_prefix2" name="message" class="materialize-textarea"></textarea>
                    <label for="icon_prefix2">Boodschap</label>
                </div>
            </div>
            <div class="row">
                <button class="btn waves-effect light-blue lighten-1 " type="submit" name="action">Verzenden<i class="material-icons right">send</i></button>
            </div>
        </form>
    </div>

    <footer class="page-footer orange">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Christoph Meulyzer</h5>
                    <p class="grey-text text-lighten-4">Softwareontwikkeling en testing:
                        <br>kwaliteitsvol en kostenefficient</p>

                </div>
                <div class="col l3 s12">
                    <!-- <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul> -->
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Connect</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Link 1</a></li>
                        <li><a class="white-text" href="#!">Link 2</a></li>
                        <li><a class="white-text" href="#!">Link 3</a></li>
                        <li><a class="white-text" href="#!">Link 4</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Last updated: <a class="orange-text text-lighten-3" href="http://materializecss.com">17-07-2017</a>
            </div>
        </div>
    </footer>


    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>

</body>

</html>