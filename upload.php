

<!DOCTYPE html>
<html>
<head>
    <title>ECE in : Social media Professionnel de l'ECE Paris</title>
    <meta charset="utf-8" />
    <link href="MiseEnPage.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="">
    
    
    <link rel="shortcut icon" type="image/png" href="favicon.png"  />
    
    


</head>
<body>
    <div id="nav1">
<img src="ece in logo final.png" alt="ECE logo" height="100" width="240"> </img>
    <div id="nav">
            <a href="accueil.html"><img src="bouton accueil.png" alt="Accueil" id= "icone"></a>
            <a href="mon reseau.html"><img src="bouton mon reseau.png" alt="Mon Reseau" id= "icone"></a>
            <a href="vous.html"><img src="bouton vous.png" alt="Vous" id= "icone"></a>
            <a href="notifications.html"><img src="bouton notifications.png" alt="Notifications" id= "icone"></a>
            <a href="messagerie.html"><img src="bouton messagerie.png" alt="Messagerie" id= "icone"></a>
            <a href="emplois.html"><img src="bouton emplois.png" alt="Emplois" id= "icone"></a>
    </div>
 
 <div id="entete"><h1>Social media Professionnel de l'ECE Paris</h1></div>
</div>
<br>
<?php
    include("index2.html");
?>




<h2>Bienvenue dans ECE in</h2>
<p>Que vous soyez étudiant/e
de licence, master ou doctorat, ou étudiant/e apprenti dans un entreprise, ou étudiant/e qui cherche
un stage dans une entreprise ou peut-être un/e enseignant/e ou employé de l’Ecole qui cherche
des partenaires pour votre projet de recherche ou autre, ce site web s'adresse à toutes et à tous
qui souhaitent prendre leur vie professionnelle au sérieux, trouver de nouvelles opportunités pour
développer leur carrière et se connecter avec d'autres personnes pour des buts professionnels.</p>
<p>Cete platforme permet aux utilisateurs de
se connecter avec son réseau pour le but professionnel, ainsi que pour publier leurs événements,chercher un emploi, ou chercher un emploi dans la page « Emplois ». Chaque utilisateur pourra
poster des évènements, des photos, des vidéos, de CV et le/s afficher, partager avec d’autres, etc...</p>

<h2>Les évènements de la semaine</h2>

<br>
<span id="sl_play" class="sl_command">&nbsp;</span>
    <span id="sl_pause" class="sl_command">&nbsp;</span>
    <span id="sl_i1" class="sl_command sl_i">&nbsp;</span>
    <span id="sl_i2" class="sl_command sl_i">&nbsp;</span>
    <span id="sl_i3" class="sl_command sl_i">&nbsp;</span>
    <span id="sl_i4" class="sl_command sl_i">&nbsp;</span>
    
    
    
    
    <section id="slideshow">
    
        <a class="commands prev commands1" href="#sl_i4" title="Go to last slide">&lt;</a>
        <a class="commands next commands1" href="#sl_i2" title="Go to 2nd slide">&gt;</a>
        <a class="commands prev commands2" href="#sl_i1" title="Go to 1rst slide">&lt;</a>
        <a class="commands next commands2" href="#sl_i3" title="Go to 3rd slide">&gt;</a>
        <a class="commands prev commands3" href="#sl_i2" title="Go to 2nd slide">&lt;</a>
        <a class="commands next commands3" href="#sl_i4" title="Go to 4th slide">&gt;</a>
        <a class="commands prev commands4" href="#sl_i3" title="Go to 3rd slide">&lt;</a>
        <a class="commands next commands4" href="#sl_i1" title="Go to first slide">&gt;</a>
        
        <a class="play_commands pause" href="#sl_pause" title="Maintain paused">Pause</a>
        <a class="play_commands play" href="#sl_play" title="Play the animation">Play</a>
        
        <div class="container">
            <div class="c_slider"></div>
            <div class="slider">
                <figure>
                    <img src="img/bordeaux.png" alt="" width="840" height="510" />
                    <figcaption>Journée Porte Ouvertes-Campus bordeaux- vendredi 15 décembre 2023 - de 14h à 18h</figcaption>
                    
                </figure><!--
                --><figure>
                    <img src="img/paris.png" alt="" width="840" height="510" />
                    <figcaption><p>Journée Porte Ouvertes-Campus Paris- samedi 16 décembre 2023 - de 14h à 18h</p></figcaption>
                    
                </figure><!--
                --><figure>
                    <img src="img/forum.png" alt="" width="840" height="510" />
                    <figcaption>Forum de carrière de L'ECE le mardi 19 décembre 2023 de 10h à 16h</figcaption>
                    
                </figure><!--
                --><figure>
                    <img src="img/webinaire.png" alt="" width="840" height="510" />
                    <figcaption>Webinaire -Spécial Bachelor-EN LIGNE sur teams,-Mercredi 20 décembre 2023 de 18h à 19h</figcaption>
                    
                </figure>
            </div>
        </div>
        
        <span id="timeline"></span>
        
        <ul class="dots_commands"><!--
            --><li><a title="Show slide 1" href="#sl_i1">Slide 1</a></li><!--
            --><li><a title="Show slide 2" href="#sl_i2">Slide 2</a></li><!--
            --><li><a title="Show slide 3" href="#sl_i3">Slide 3</a></li><!--
            --><li><a title="Show slide 4" href="#sl_i4">Slide 4</a></li>
        </ul>
        
    </section><br>

    <a  href="https://www.ece.fr/inseecu/salon/8147"><p style="text-align:center"> Cliquer ici pour s'inscrire au porte ouverte de Bordeaux</p></a>
    <a href="https://ece.fr/inseecu/journees-portes-ouvertes/7541"><p style="text-align:center"> Cliquer ici pour s'inscrire au porte ouverte de Paris</p></a>
    <a href="https://www.ece.fr/inseecu/conference/8040"><p style="text-align:center"> Cliquer ici pour s'inscrire au webinaire pour le forum de carrière</p></a>
    <a href="https://www.ece.fr/inseecu/conference/8040"> <p style="text-align:center"> ici pour s'inscrire au webinaire pour le Bachelor</p></a>

    






                    <div class="ui container">
            <form  action="add-post.php" method="POST" enctype="multipart/form-data">
                <h2 class="ui header olive" ><strong>Poster des évènements</strong></h2>
                <div class="ui field">
                    <div class="ui mini input">
                        <textarea type="text" name="title" placeholder="Title" style="margin-bottom: 20px; margin-left: 20px;"cols="140" rows="3" /></textarea>
                    </div>
                </div>
                <div class="ui field">
                    <div class="ui mini input">
                        <textarea name="description" id="" cols="140" rows="7" style="margin-bottom: 20px; margin-left: 20px;"placeholder="Description"></textarea>
                    </div>
                </div>

                <div class="ui field">
                    <div class="ui mini input">
                        <input type="file" name="images" id="images" required="required" multiple="multiple" />
                    </div>
                </div>




                <div class="ui field">
                    <input class="ui blue mini button " type="submit" name="submit" value="Poster">
                </div>

            </form>



            <br>
            <br>
            <br>

        </div>
        <div class="ui container">
            <div class="ui">
                <h2>
                    Les évènements
                </h2>
                <br>
                <?php
                // SHOWING DATA TO USERS 
                require('config.php');
                $sql = "SELECT * FROM post";
                $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                $stmt = $dbh->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll();
                // print_r($result);
                // echo count($result);
                // echo $result['title'];
                ?>
                <div class="ui six stackable cards">
                    <?php
                    // https://www.php.net/manual/en/pdostatement.fetchall.php
                    // array_shift — Shift an element off the beginning of array
                    while ($row = array_shift($result)) {
                    ?>
                        <div class="cover">
                            <div id="box">
                                <div id="post">
                                    <img src="uploads/<?php echo $row['image_src']; ?>"  alt="" style="width: 310px; height:200px; object-fit:cover; " >
                                </div>
                            
                            <textarea rows="10" cols="43" style="text-align: center;" ><?php echo $row['title']; ?> 
<?php echo substr($row['description'], 0,30); ?>
                                
                            </textarea>
                            <div id="delete" >
                                <a  href="delete-post.php?id=<?php echo $row['id']; ?>" >Delete</a>
                            </div>
                        </div>
                    <?php                }                ?>

                </div>


            </div>

        </div>
    </div><br>



<br><br><br>

<div id="contact">
<b>Contacter l'administrateur de ECE in :</b><br>
    e-mail : <a href="mailto:administrateur.ecein@edu.ece.fr">administrateur.ecein@edu.ece.fr</a><br>
    Numéro : 0123456789
    <address>Adresse: 10 Rue Sextius Michel, 75015 Paris</a></address>

</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.3626272501365!2d2.2875398182464597!3d48.8512951133786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6701b486bb253%3A0x61e9cc6979f93fae!2s10%20Rue%20Sextius%20Michel%2C%2075015%20Paris!5e0!3m2!1sen!2sfr!4v1701719409218!5m2!1sen!2sfr" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>








<footer id="fin"><a href="Accueil.html">Accueil</a>
        <a href="MonReseau.html">Mon Réseau</a>
        <a href="Vous.html">Vous</a>
        <a href="Notification.html">Notification</a>
        <a href="Messagerie.html">Messagerie</a>
        <a href="Emplois.html">Emplois</a><br>
        Copyright &copy; 2023 ECE in Social media professionnel de l'ECE Paris<br>
        <a href="mailto:ecein.paris@gmail.com">ecein.paris@gmail.com</a>
    </footer>



</body>
</html>