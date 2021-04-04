<?php
    // Check if the user is logged in, if not then redirect to the login.php
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        ?>
        <h2 class="title">Minute, papillon !</h2>
        <p class="title">Il faut être connecté·e pour pouvoir poster une histoire !</p>
        <?php
    } else { ?>
        <div class="wrapper">
        <h2 class="title">Ajouter une histoire</h2>
        <form action="" method="post" novalidate>
            <div class="form-group">
                <label>Titre de l'histoire :</label>
                <input type="text" name="stories_title" class="form-control">
            </div>
    
            <div class="form-group">
            <label>Contenu :</label>
                <textarea name="stories_content" cols="40" rows="5" class="form-control"></textarea>
            </div>

            <?php if (!empty($viewVars['errorList'])) : ?>
                <?php foreach ($viewVars['errorList'] as $key => $error) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $error; ?>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
    
            <div class="form-group form-group-bottom">
                <input type="submit" class="btn btn-success" value="Publier mon histoire">
                <input type="reset" class="btn btn-danger" value="Annuler">
            </div>
        </form>
    </div>
<?php } ?> 