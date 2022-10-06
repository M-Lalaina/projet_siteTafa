<?php
    if(isset($_POST['btn'])) {
        print_r($_FILES);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="./assets/styles/inscription.style.css">
    <title>Inscription tafa </title>
</head>
<body>
<<<<<<< HEAD
                <div class="container"> 
                    <div class="formulaire">
                        <div class="titre">
                            <h1 class="text is-family-monospace is-size-1 animate__animated animate__bounce">INCRIPTION TAFA 3.0</h1>
                        </div>
                        <form class="formulaire" action="uploade.php" method="post" enctype="multipart/form-data">
                            <div class="field">
                                <label class="label">Nom</label>
                                <div class="control">
                                <input class="input text is-uppercase" type="text" name="nom" placeholder="votre nom">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Prenom(s)</label>
                                <div class="control">
                                <input class="input text is-capitalized" name="prenom" type="text" placeholder="votre prenom">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Mail</label>
                                <div class="control">
                                <input class="input" type="email" name="mail" placeholder="Votre email">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Contact</label>
                                <div class="control">
                                <input class="input" type="text" name="contact" placeholder="Numero telephone">
                                </div>
                            </div>

                            <div class="label" id="stfield">
                                <label for="myfile" class="label">CV:</label>
                                <div class="file">
                                    <div class="icon">
                                        <img src="assets/imgs/icon.png" alt="">
                                    </div>
                                    <div class="control">
                                        <input  type="file" name="cv" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="field" id="ndfield">
                                <label for="myfile" class="label">Lettre de motivation:</label>
                                <div class="file">
                                    <div class="icon">
                                        <img src="assets/imgs/icon.png" alt="">
                                    </div>
                                    <div class="control">
                                        <input  type="file" name="lm">
                                    </div>
                                </div>
                            </div>

                            <div class="bouton">
                                <button type="submit" name="btn" class="button animate__heartBeat ">Envoyer</button>
                            </div>
                        </form>
                    </div>
                    <div class="image">
                        <img src="assets/imgs/tafa.jpg" alt="TAFA 2.0">
                    </div>   
                </div> 
=======
    <div class="container"> 
        <div class="formulaire">
            <div class="titre">
                <h1 class="text is-family-monospace is-size-1 animate__animated animate__bounce">INCRIPTION TAFA 3.0</h1>
>>>>>>> upstream/main
            </div>
            <form class="formulaire" action="insert.php" method="post" enctype="multipart/form-data">
                <div class="field">
                    <label class="label">Nom</label>
                    <div class="control">
                        <input class="input text is-uppercase" type="text" name="nom" placeholder="votre nom">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Prenom(s)</label>
                    <div class="control">
                        <input class="input text is-capitalized" name="prenom" type="text" placeholder="votre prenom">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Mail</label>
                    <div class="control">
                        <input class="input" type="email" name="mail" placeholder="Votre email">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Contact</label>
                    <div class="control">
                        <input class="input" type="text" name="contact" placeholder="Numero telephone">
                    </div>
                </div>

                <div class="label" id="stfield">
                    <label for="myfile" class="label">CV:</label>
                    <div class="file">
                        <div class="icon">
                            <img src="assets/imgs/icon.png" alt="">
                        </div>
                        <div class="control">
                            <input  type="file" name="cv">
                        </div>
                    </div>
                </div>

                <div class="field" id="ndfield">
                    <label for="myfile" class="label">Lettre de motivation:</label>
                    <div class="file">
                        <div class="icon">
                            <img src="assets/imgs/icon.png" alt="">
                        </div>
                        <div class="control">
                            <input  type="file" name="lm">
                        </div>
                    </div>
                </div>

                <div class="bouton">
                    <button type="submit" name="btn" class="button animate__heartBeat ">Envoyer</button>
                </div>
            </form>
        </div>
        <div class="image">
            <img src="assets/imgs/tafa.jpg" alt="TAFA 2.0">
        </div>   
    </div>
</body>
</html>