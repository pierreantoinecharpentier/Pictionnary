<!DOCTYPE html>
<html>  
    <head>  
         <meta charset=utf-8 />  
         <title>Pictionnary - Inscription</title> 
	       	<!-- Latest compiled and minified CSS -->
	       	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	       	<!-- Latest compiled and minified JavaScript -->
	       	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    </head>  
    <body>
        <div class="container" style="padding-left:200px; padding-right:200px">
        <h2>Inscrivez-vous</h2>  
        <form class="inscription" action="req_inscription.php" method="post" name="inscription" background-color: #ffff>  
          <!-- c'est quoi les attributs action et method ? "action" definit la page qui va etre appelee, "method" definit le type d'action -->
          <!-- qu'y a-t-il d'autre comme possiblité que post pour l'attribut method ? -->  

            <span class="required_notification">* : Champs obligatoires</span>

    
            <div class="form-group" style="margin-top: 15px;" >
               <label for="email">Adresse mail*</label>
               <input class="form-control" type="email" name="user_mail"  autofocus id="email" placeholder="E-mail* (ex: example@mail.com)" />
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" id="password" placeholder="Mot de passe"/>
            </div>

            <div class="form-group">
                <label for="name">Nom</label>
            	<input class="form-control" id="name" type="text" name="nom" placeholder="Nom" />
            </div>

            <div class="form-group">
                <label for="firstname">Prenom*</label>
            	<input class="form-control" type="text" name="prenom" placeholder="Prenom*" id="firstname" />
            </div>

            <div class="form-group">
                <label for="phone">Telephone</label>
            	<input class="form-control" id="phone" type="tel" name="telephone" placeholder="Telephone (ex: 06 12 34 56 78)" pattern="[0-9]{10}"/>
            </div>

            <div class="form-group">
                <label for="website">Site Web</label>
         	    <input class="form-control" id="website" type="url" name="Site Web" placeholder="Site Web" />
            </div>

                <label for="optionsRadios1">Sexe</label>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option2"> M
                </label>
            </div>

            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option1"> F
                </label>
            </div>

            <div class="form-group">
                <label for="date">Date</label>
                <input class="form-control" id="date" type="date" placeholder="Date (jj/mm/aaaa)" min="1900-01-01" />
            </div>

            <div class="form-group">
                <label for="birthday">Date de naissance*</label>
                <input class="form-control" id="birthday" type="date" name="Date de naissance" placeholder="Date de naissance*" />
            </div>

            <div class="form-group">
                <label for="age">Age*</label>
                <input class="form-control" id="age" type="number" name="Age" placeholder="Age*" />
            </div>

            <div class="form-group" style="padding-bottom:20px">
                <div class="col-md-10">
                    <input type="range" name="Taille" placeholder="Taille" min="0" max="2.5" step="0.01" oninput="document.getElementById('lataille').textContent=value"/>
                </div>
                <div class="col-md-2">
                    <label>Taille:<span id="lataille">1.25</span>m</label>
                </div>
            </div>

            <div class="form-group">
                <label for="color">Couleur préférée</label>
                <input class="form-control" id="color" type="color" name="Couleur préférée" placeholder="Couleur préférée"  />
            </div>

            <div class="form-group">
                <label for="profilepicture">Photo de profil</label>
                <input class="form-control" id="profilepicture" type="file" name="Photo de profil" placeholder="Photo de profil"  />
            </div>

                    <!-- ajouter à input l'attribut qui lui donne le focus automatiquement -> autofocus dans input -->  
                    <!-- ajouter à input l'attribut qui dit que c'est un champs obligatoire -> cf head (link + script) -->  
                    <!-- quelle est la différence entre les attributs name et id ? -> "id" s'applique à un objet unique (il ne peut pas y avoir deux mêmes id dans une page, "classe" peut caractériser plusieurs objets (identiques ou non) -->
                    <!-- c'est lequel qui doit être égal à l'attribut for du label ? -->   
            <!-- ajouter à input l'attribut qui dit que c'est un champs obligatoire -->  
            <!-- ajouter à input l'attribut qui donne une indication grisée (placeholder) -->  
      
            <input type="submit" value="Soumettre Formulaire">  
  
        </form>  
        </div>
    </body>  
</html>  
