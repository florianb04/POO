<?php 
 
namespace MonNamespace; // Déclaration du namespace. 
    
// Toutes les constantes, fonctions et classes déclarées ici feront partie du namespace MonNamespace. 
 
 function strlen() 
    { 
        echo 'Hello world !<br/>'; 
    } 
 
    strlen(); // lance la fonction strlen du namespace même chose que \MonNamespace\strlen(); 
     
    echo \strlen('Hello world !'); //  Le backslash (\) permet d'aller chercher dans le namespace global 
 
?> 