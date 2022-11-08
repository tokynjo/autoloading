Commande composer 
     1- composer init : Pour initialiser un fichier composer.json et mettre à jour la partie la où il y a les depedance
           exemple : 
           require : {}
           "autoload": {
                "psr-4": {
                    "App\\": "classes"
                },
           }
        ici App veux dire Name space des class declarer dans le repertoire 'classes'
        'classes' est le repertoire qui contient les classe avec la namespate App
      
      2- composer dump-autoload : generation de autoload dans le repertoire /vendor
      3- Dans le fichier index.php , on peut appeler require('vendor/autoload.php'); pour que l'application appel l'autoload dans vendor

    
