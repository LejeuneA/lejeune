<?php
/**
 * **********
 * CONTROLLER
 * **********
 */
 require_once 'fct.php';

 $msg = null;
    
    // Si le formulaire est soumis...
    if (!empty($_POST))
    {
    
        // On affecte les valeurs du formulaire aux variables
       disp_ar($_POST, 'Données du formulaire');

       // On affecte les valeurs du formulaire aux variables
       $email = $_POST['email'];
       $password = $_POST['password'];
       $password_confirm = $_POST['password_confirm'];
    
        // On vérifie que l'email existe
        if (!empty($email))
        {
        
            // On vérifie que l'email est valide
            if (filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                // On affiche un message 
                $msg = 'Le formulaire est soumis et correctement rempli (I)';
            } else {
                // On affiche un message d'erreur
                $msg = 'L\'email n\'est pas valide';
            }        
                
        } else {
            // On affiche un message d'erreur
            $msg = 'L\'email est vide';
        } 
        
        // Tests sur les mots de passe
        if (!empty($password))
        {
        
            // On vérifie que le mot de passe est correct
            if ($password === $password_confirm) {
                // On affiche un message de succès
                $msg = 'Le formulaire est soumis et correctement rempli (II)';
            } else {
                // On affiche un message d'erreur
                $msg = 'Les mots de passe ne sont pas identiques';
            }
        } else {    
            // On affiche un message d'erreur
            $msg = 'Le mot de passe est vide';
        }


    }else {
        // On affiche un message 
        $msg = 'Le formulaire n\'a pas  encore été soumis';
    }
    
?>