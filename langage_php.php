<?php 
    include "./php/includes/templates/header.tpl.php";
?>
                    <h2>Le langage PHP</h2>
                </div>    
<?php 
    include "./php/includes/templates/nav.tpl.php"
?>   
</header> 
<section>
    <article>
        <p class="introduction_langage">Envie d'apprendre le langage PHP, pas de soucis :D :<br /></p>

        <h1 id="ancre_sur_introduction_au_langage">Introduction au langage PHP</h1>

        <h2>Différence entre site web statique et dynamique</h2>
        <p>Un site <span class="mise_en_valeur1">statique</span> :</p>  
        <ul>
            <li>Se réalise uniquement à l'aide des langages HTML et CSS</li>
            <li>Ne permet pas de mettre à jour son contenu automatiquement, il faut que les webmaster modifie le code source pour y ajouter des nouveautés, pas pratique quand on doit mettre à jour son site plusieurs fois dans la même journée, surtout si on veut créer un site autonome pour l'utilisateur</li>
            <li>Est donc adapté pour un site "vitrine" (pour présenter son entreprise par exemple) mais sans aller plus loin</li>
            <li>Est de plus en plus rare aujourd'hui, car dès que l'on rajoute un élément d'interaction comme un formulaire de contact, on ne parle plus de site statique mais de site dynamique</li>
        </ul>
        <p>Un site <span class="mise_en_valeur1">dynamique</span> :</p>  
        <ul>
            <li>Utilise d'autre langage en plus du HTML et CSS, etls que PHP et MySQL</li>
            <li>Peut changer sans l'intervention du webmaster</li>
            <li>Permet aux visiteurs de participer à la vie du site, de poster des messages, etc.. de rendre le site vivant</li>
        </ul>

        <h2>Fonctionnement d'un site web</h2>
        <p>Lorsqu'on veut visiter un site web, on tape son adresse dans le navigateur web
        Internet est un réseau composé d'ordinateurs qui peuvent être classés en deux catégories :</p>
        <ul>
            <li>Les clients : Ordinateurs des internautes, chaque client représente un visiteur d'un site web</li>
            <li>Les serveurs : Ordinateurs puissants qui stockent et délivrent des sites web aux internautes, c'est-à-dire aux clients</li>
        </ul>
        <p>On voit la différence entre un site statique et un site dynamique dans la communication entre le client et le serveur. <br />
        Pour un site statique :</p>
        <ol>
            <li>Le client demande au serveur à voir une page web ("coucou, je voudrais voir cette page web")</li>
            <li>Le serveur lui répond en lui envoyant la page réclamée ("coucou, voici la page demandée")</li>
        </ol>
        <p><span class="survol_image_autre"><img src="images_pour_mise_en_forme/site_statique.png" title="Site dynamique" alt="Site statique" /></span></p>

        <p>Pour un site dynamique :</p>
        <ol>
            <li>Le client demande au serveur à voir une page web ("coucou, je voudrais voir cette page web")</li>
            <li>Le serveur prépare la page spécialement pour le client (il la génère)</li>
            <li>Le serveur lui répond en lui envoyant la page réclamée ("coucou, voici la page demandée, celle qui t'es appropiée")</li>
        </ol>
        <p><span class="survol_image_autre"><img src="images_pour_mise_en_forme/site_dynamique.png" title="Site dynamique" alt="Site dynamique" /></span></p>
        <p>La page web est générée à chaque fois qu'un client la réclame, c'est précisément ce qui rend les sites dynamiques "vivants" car le contenu d'une même page peut changer d'un instant à l'autre.<br />
        C'est comme cela que certains sites parviennent à afficher par exemple un pseudo sur toutes les pages, étant donné que le serveur génère une page à chaque fois qu'on lui en demande une, il peut la personnaliser en fonction des goûts et des préférences du visiteur.</p>

        <h2>Les langages du web</h2>
        <ul>
            <li><span class="mise_en_valeur1">HTML</span> : Permet d’écrire le contenu des pages web et de le structurer</li><br />
            <li><span class="mise_en_valeur1">CSS</span> : Langage de mise en forme et de la mise en page du site web, il permet de choisir la couleur, la taille des menus, etc..</li>
            <p><span class="mise_en_valeur2">Avec ces deux langages on fait un site statique, mais pour un site dynamique on rajoute PHP et MySQL :</span></p>
            <li><span class="mise_en_valeur1">PHP</span> : Un langage que les serveurs comprennent, il génère la page web comme on l’a vu sur un des schémas précédents, il peut fonctionner seul mais combiné avec MySQL il devient encore plus intéressant</li><br />
            <li><span class="mise_en_valeur1">MySQL</span> : C'est Un SGBD (Système de Gestion de Base de Données), son rôle est d’enregistrer des données de manière organisée afin de nous aider à les retrouver plus facilement, c’est grâce à lui qu’on peut enregistrer la liste des membres du site web, les messages postés sur le forum, etc..</li>
            <p><span class="mise_en_valeur2">PHP et MySQL sont disponibles gratuitement sous licence Open Source.</span></p>
        </ul>
        <p>PHP est donc un langage de programmation utilisé sur de nombreux serveurs pour prendre des décisions; C'est PHP qui décide du code HTML qui sera généré et envoyé au client à chaque fois.<br />
        Voici un exemple de ce que l'on peut écrire en PHP :<br><br>
        <span class="mise_en_valeur2">"Si le visiteur est membre de mon site et qu'elle s'appelle Clémentine, affiche Bienvenue ma Lutine sur la page web.<br />
        En revanche, si ce n'est pas un membre de mon site, affiche Bienvenue à la place, et propose au visiteur de s’inscrire."</span><br><br>
        Donc en bref, si c'est un membre enregistré ou non, il ne verra pas les mêmes choses, et n'aura peut-être pas accès au même contenu.</p>


        <h2>Préparation de l'environnement de travail pour ce cours</h2>
        <p>Pour ce cours, on va temporairement transformer l' ordinateur en serveur pour pouvoir exécuter du PHP et travailler sur le site dynamique; On va avoir besion de :</p>
        <ul>
            <li><span class="mise_en_valeur1">Apache</span> : Un des programmes les plus important, chargé de délivrer les pages web aux visiteurs, toutefois il ne gère que les sites statiques (ne peut traiter que des pages en HTML), il est donc nécessaire de rajouter PHP et MySQL pour les sites dynamiques.</li>
            <li><span class="mise_en_valeur1">PHP</span> : Plug-in pour Apache qui le rend capable de traiter des pages web dynamiques en PHP</li>
            <li><span class="mise_en_valeur1">MySQL</span> : Programme de gestion de base de données, il permet d’enregistrer des données de manière organisée</li>
        </ul>

        <p>On peut les installer un à un mais cela prend plus de temps que d’installer un pack tout prêt qui les contient déjà, la seule différence est que les installer un par un permet d'être administrateur du serveur en plus.</p>

        <p>Sur Linux on installera donc <a href="https://www.apachefriends.org/fr/index.html" target="_blank" title="Télécharger XAMPP" alt="Télécharger XAMPP">XAMPP (anciennement LAMPP)</a>, puis :</p>
        <ul>
            <li>Aller dans le dossier de téléchargement (exemple le bureau) : <span class="mise_en_valeur4">cd /Desktop</span></li>
            <li>Passer en root pour installer et lancer XAMPP : <span class="mise_en_valeur4">sudo su</span></li>
            <li><span class="mise_en_valeur4">chmod 755 xampp-linux-*-installer.run</span> (penser à remplacer l'étoile dans la commande par le numéro de version du fichier téléchargé)</li>
            <li><span class="mise_en_valeur4">./xampp-linux-*-installer.run</span></li>
            <li>Pour <span class="mise_en_valeur1">démarrer XAMPP</span> : <span class="mise_en_valeur4">/opt/lampp/lampp start</span></li>
            <li>Pour <span class="mise_en_valeur1">arrêter XAMPP</span> : <span class="mise_en_valeur4">/opt/lampp/lampp stop</span></li>
            <li>Tester XAMPP en ouvrant le navigateur et en tapant l'adresse suivante : http://localhost </li>
            <li>Les fichiers PHP devront être placés dans le répertoire /opt/lampp/htdocs, on peut y créer un sous-répertoire test pour nos premiers tests : cd /opt/lampp/htdocs && mkdir test</li>
            <li>Une fois le dossier créé, on peut y accéder depuis le navigateur à l'adresse : http://localhost/test</li>
        </ul>
        <p>PHP fournit un serveur web interne très pratique, et qui utilise PHP en ligne de commande pour provoquer l'exécution du script et le rendu de la page.<br />
        Par exemple, si l'on crée un fichier PHP index.php avec le contenu suivant :</p>
        <p class="citation_code_balise">
        &lt;?php

        echo "Coucou par ici";
        </p>
        <p>
        Et qu'<span class="gras">au niveau du dossier où se trouve le fichier index.php</span>, on exécute en ligne de commande  :
        <p class="citation_code_balise">
        php -S localhost:8080
        </p>
        <p><span class="mise_en_valeur2">localhost étant le "nom de domaine" local, "8080" étant un port HTTP quelconque</span>;<br />
        Alors en accédant à http://localhost:8080/index.php, le retour de l'exécution de ce script PHP sera disponible !</p>

        <h1 id="ancre_sur_utilisation_balise_php">Utilisation des balises PHP</h1>
        <p>Pour utiliser du PHP, on va devoir introduire une nouvelle balise et celle-ci est un peu spéciale, elle commence par <strong>&lt;?php</strong> et se termine par <strong>?&gt;</strong>, c'est donc à l'intérieur que l'on mettra du code PHP :</p>
        <p class="citation_code_balise">
        &lt;?php /* Le code PHP se met ici */ ?&gt;
        </p>
        <p>On peut sans problème écrire la balise PHP sur plusieurs lignes, ce qui sera souvent le cas car le code PHP fera souvent plusieurs lignes, exemple :</p>
        <p class="citation_code_balise">
        &lt;?php
        /* Le code PHP se met ici                    
        Et ici
        Et encore ici */
        ?&gt;
        </p>
        <p>Il existe d'autres balises pour utiliser du PHP :</p>
        <ul>
            <li><strong>&lt;? ?&gt;</strong></li>
            <li><strong>&lt;% %&gt;</strong></li>
            <li><strong>&lt;?= ?&gt;</strong></li>
        </ul>
        <p>Toutefois la forme la plus correcte est bien <strong>&lt;?php ?&gt;</strong>.</p>
        <p><span class="mise_en_valeur2">Le code source d'une page HTML est constitué de balises (aussi appelées tags, en anglais), par exemple,&lt;ul&gt;.<br />
        Le code PHP va venir s'insérer dans le code HTML, on va en effet placer dans nos pages web des morceaux de code PHP à l'intérieur du HTML, ces bouts de code PHP seront les parties dynamiques de la page, c'est-à-dire les parties qui peuvent changer toutes seules.</span>.</p>
        <p>On peut mettre du PHP à divers endroits dans le code HTML :</p>
        <ul>
            <li>Au milieu du code HTML :
            <p class="citation_code_balise">
            &lt;!DOCTYPE html&gt;
            &lt;html&gt;
                &lt;head&gt;
                    &lt;title&gt;Ceci est une page de test avec des balises PHP&lt;/title&gt;
                    &lt;meta charset="utf-8" /&gt;
                &lt;/head&gt;
                &lt;body&gt;
                    &lt;h2&gt;Page de test&lt;/h2&gt;    
                    &lt;p&gt;
                        Cette page contient du code HTML avec des balises PHP.&lt;br /&gt;
                        &lt;?php /* Insérer du code PHP ici */ ?&gt;
                        Voici quelques petits tests :
                    &lt;/p&gt;        
                    &lt;ul&gt;
                    &lt;li style="color: blue;"&gt;Texte en bleu&lt;/li&gt;
                    &lt;li style="color: red;"&gt;Texte en rouge&lt;/li&gt;
                    &lt;li style="color: green;"&gt;Texte en vert&lt;/li&gt;
                    &lt;/ul&gt;
                    &lt;?php
                    /* Encore du PHP
                    Toujours du PHP */
                    ?&gt;
                &lt;/body&gt;
            &lt;/html&gt;  
            </p>  
            </li>
            <li>Dans l'en-tête de la page :
            <p class="citation_code_balise">
            &lt;!DOCTYPE html&gt;
            &lt;html&gt;
                &lt;head&gt;
                    &lt;title&gt;Ceci est une page de test &lt;?php /* Code PHP */ ?&gt;&lt;/title&gt;
                    &lt;meta charset="utf-8" /&gt;
                &lt;/head&gt;
            </p>
            </li>
            <li>Au milieu d'une balise HTML :
            <p class="citation_code_balise">
            &lt;!DOCTYPE html&gt;
            &lt;html&gt;
                &lt;head&gt;
                    &lt;title&gt;Ceci est une page de test&lt;/title&gt;
                    &lt; meta &lt;?php /* Code PHP */ ?&gt; charset="utf-8" /&gt;
                &lt;/head&gt;
            </p>
            </li>
            <p>À noter que si l'on est dans un fichier contenant uniquement du PHP nous ne sommes pas obligé de le faire terminer par la balise "?>", en effet la balise fermante est obligatoire quand nous devons inséré du code PHP dans du code html par exemple, pour définir que, à ce passage, c'est du PHP qu'il faut exécuter.</p>
        </ul>

        <h1 id="ancre_sur_les_instructions">Les instructions</h1>
        <p>Le PHP est un langage de programmation, ce qui n'était pas le cas du HTML.<br />
        Tout langage de programmation contient ce qu'on appelle des <span class="mise_en_valeur1">instructions</span>, dont voici les caractéristiques :<br />
        <ul>
            <li>On en écrit <span class="mise_en_valeur4">une par ligne</span> en général</li>
            <li>En PHP elles se terminent toutes par un <span class="mise_en_valeur4">point-virgule</span>, ce qui signifie "fin de l'instruction"</li>
            <li>Une instruction <span class="mise_en_valeur4">commande à l'ordinateur d'effectuer une action précise</span>.</li>

        <h2>Afficher un texte avec l'instruction echo</h2>
        <p>L'instruction <strong>echo</strong> va permettre d'insérer du texte dans la page web, exemple :</p>
        <p class="citation_code_balise">
            &lt;?php echo "Ceci est du texte"; ?&gt;
            &lt;!-- Ou bien, avec des parenthèses --&gt;
            &lt;?php echo("Ceci est du texte"); ?&gt;
        </p>
        <p>
        - On écrit <span class="mise_en_valeur4">à l'intérieur de la balise PHP</span> l'instruction <strong>echo</strong> <span class="mise_en_valeur4">suivie du texte à afficher entre guillemets</span>.<br />
        - Les <span class="mise_en_valeur4">guillemets permettent de délimiter le début et la fin du texte</span>, ce qui aide l'ordinateur à se repérer.<br />
        - Enfin, l'<span class="mise_en_valeur4">instruction se termine par un point-virgule</span> ce qui signifie "fin de l'instruction".<br /><br />
        <span class="mise_en_valeur2">Plus rare, mais l'instruction <strong>echo</strong> peut être entourée de parenthèses ouvrantes et fermantes.</span><br />
        <span class="mise_en_valeur2">Il existe une instruction identique appelée <strong>print</strong>, qui fait la même chose, cependant, <strong>echo</strong> est plus couramment utilisée.</span>
        </p>
        <p>Il faut savoir qu'on a aussi le droit de demander d'afficher des balises, par exemple le code suivant fonctionne :</p>
        <p class="citation_code_balise">
        &lt;?php echo "Ceci est du <strong>texte</strong>"; ?&gt;
        </p>
        <p>
        Le mot "texte" sera affiché en gras (ou autre mise en forme, comme ici en violet) grâce à la présence des balises <strong>&lt;strong&gt;</strong> <strong>&lt;/strong&gt;</strong>.</p>

        <p>Comment faire pour afficher un guillemet ?<br />
        Si on met un guillemet, ça veut dire pour l'ordinateur que le texte à afficher s'arrête là, donc on risque au mieux de faire planter le code et d'avoir un "Parse error".<br />
        La solution consiste à faire précéder le guillemet d'un antislash \, exemple :</p>
        <p class="citation_code_balise">
        &lt;?php echo "Cette ligne a été écrite \"uniquement\" en PHP."; ?&gt;
        </p>
        <p>Donc voici un exemple d'une instruction echo dans une page HTML :</p>
        <p class="citation_code_balise">
        &lt;!DOCTYPE html&gt;
        &lt;html&gt;
            &lt;head&gt;
                &lt;title&gt;Notre première instruction : echo&lt;/title&gt;
                &lt;meta charset="utf-8" /&gt;
            &lt;/head&gt;
            &lt;body&gt;
                &lt;h2&gt;Affichage de texte avec PHP&lt;/h2&gt;
                
                &lt;p&gt;
                    Cette ligne a été écrite entièrement en HTML.&lt;br /&gt;
                    &lt;?php echo("Celle-ci a été écrite entièrement en PHP."); ?&gt;
                &lt;/p&gt;
            &lt;/body&gt;
        &lt;/html&gt;
        </p>
        
        <h2>Enregistrer une page PHP</h2>
        <p>Enregistrer la page avec l'extension .php (par exemple "affichertexte.php"), dans le dossier test créé prédémment; Il doit donc se trouver dans \opt\lampp\htdocs\test.<br />
        Quel que soit le système d'exploitation (et si on utilise XAMPP), l'essentiel est que le fichier soit enregistré dans le dossier (ou un sous dossier de) htdocs, sinon le fichier PHP ne pourra pas s'exécuter.</p>

        <h2>Tester la page PHP</h2>
        <ol>
            <li>Démarer XAMPP</li>
            <li>Aller à l’adresse http://localhost/test ou http://localhost:8888/test</li>
            <li>- Une page web s'ouvre, indiquant tous les fichiers qui se trouvent dans le dossier test, on devrait avoir le fichier affichertexte.php.<br />
            - Cliquer dessus : L'ordinateur génère alors le code PHP puis ouvre la page, on obtient donc le résultat.<br />
            <span class="mise_en_valeur2">Le même résultat peut être obtenu dans le navigateur, en allant directement à l'adresse suivante : http://localhost/test/affichertexte.php.</span></li>
        </ol>

        <p>Voici un nouveau test pour comprendre la puissance du PHP :</p>
        <p class="citation_code_balise">
        &lt;!DOCTYPE html&gt;
        &lt;html&gt;
            &lt;head&gt;
                &lt;meta charset="utf-8" /&gt;
                &lt;title&gt;Ma page web&lt;/title&gt;
            &lt;/head&gt;
            &lt;body&gt;
                &lt;h1&gt;Ma page web&lt;/h1&gt;
                &lt;p&gt;Aujourd'hui nous sommes le &lt;?php echo date('d/m/Y h:i:s'); ?&gt;.&lt;/p&gt;
            &lt;/body&gt;
        &lt;/html&gt;
        </p>
        <p>La date et l'heure s'affichent automatiquement sur la page web :) <br />
        So on regarde le code source de la page générée dans le navigateur, on ne verra pas de code PHP mais l'heure qui a directement été envoyée dans le code HTML après exécution du code PHP par le serveur.</p>

        <h1 id="ancre_sur_les_commentaires">Les commentaires</h1>
        <p>Tout comme en HTML ou CSS, les commentaires sont importants car ils permettent de se mettre des explications (pratique notamment quand on ne touche pas au fichier PHP pendant quelques semaines et qu’on souhaite savoir à quoi telle ou telle partie du code sert).</p>

        <p>Il existe deux types de commentaire :</p>
            <ul>
                <li>Les <span class="mise_en_valeur1">commentaires monolignes</span> : Commentaire sur une seule ligne, pour cela on doit taper deux slashs "<strong>//</strong>", et ensuite mettre le commentaire, exemple :<br />
                <p class="citation_code_balise">
                &lt;?php
                echo "J'habite en Chine."; // Cette ligne indique où j'habite

                // La ligne suivante indique mon âge
                echo "J'ai 92 ans.";
                ?&gt;
                </p>
                Le premier commentaire est à la fin d’une ligne, le second est sur toute une ligne.<br />
                On commente comme on veut, mais pour commenter une ligne précise alors mieux vaut mettre le commentaire à la fin de cette ligne</li>
                <li>Les <span class="mise_en_valeur1">commentaires multilignes</span> : Ce sont les plus pratiques si on pense écrire un commentaire sur plusieurs lignes, mais on peut aussi s'en servir pour écrire des commentaires d'une seule ligne, il faut commencer par écrire <strong>/*</strong>  puis refermer par <strong>*/</strong>, exemple :<br />
                <p class="citation_code_balise>">
                &lt;?php
                /* La ligne suivante indique que je suis un lutin
                Si tu ne me crois pas...
                ... tu as tort */
                echo "Mon signe Maya est Graine jaune Galactique.";
                ?&gt;
                </li>
            </ul>

        <h1 id="ancre_sur_les_erreurs">Les erreurs PHP (mode de débogage)</h1>
        
        <h2>Configurer PHP pour afficher les erreurs</h2>
        <p>La configuration de PHP se fait dans un fichier appelé <span class="mise_en_valeur1">php.ini</span>.<br />
        Pour connaître l'ensemble des informations relatives au PHP utilisé par le serveur web, il existe une commande/fonction PHP, <strong>phpinfo()</strong>.<br />, ce dernier va permettre de localiser le fichier de configuration pour le modifier.<br />
        On va donc dans un premier temps créer un fichier php (sous le nom "infophp.php" par exemple) comme suit dans le répertoire /opt/lampp/htdocs/test/ :</p>
        <p class="citation_code_balise">              
        &lt;?php
        phpinfo();
        </p>
        <p>Une fois le php.ini retrouvé, le modifier comme suit puis enregistrer le fichier :</p>
        <ul>
            <li><strong>error_reporting = E_ALL</strong> (si la ligne existe déjà et qu'elle n'a pas cette valeur)</li>
            <li><strong>display_errors = On</strong> (si la ligne existe déjà et qu'elle n'a pas cette valeur)</li>
        </ul>
        <p>Ensuite enregistrer le fichier, puis redémarrer le serveur PHP (en relançant XAMPP par exemple). <br /><br />
        <span class="mise_en_valeur2">Dans le fichier de configuration, le point-virgule (;) en début de ligne signifie que tout ce qui suit est un commentaire, et est donc ignoré, si l'une de ces lignes (ou les deux) sont commentées alors il suffit de retirer le point-virgule en début de ligne, dans tous les cas il ne faut pas rajouter une ligne si elle existe déjà.</span></p>

        <h2>Tester l'affichage des erreurs</h2>
        <p>Afin de faire un test pour voir si les erreurs s'affichent bien dans le navigateur, on va créer une erreur dans le script PHP, et ouai on est comme ça :D<br />
        Dans le script précédent créé pour afficher les informations relatives à PHP pour le serveur web, on va enlever une parenthèse, puis enregistrer le fichier, ce qui donnera :</p>
        <p class="citation_code_balise">
        &lt;?php

        phpinfo(;
        </p>
        <p>
        Maintenant, en réaffichant la page dans le navigateur web, on verra :<br /><br />
        <span class="mise_en_valeur4">Parse error: syntax error, unexpected, ‘;’ in /opt/lampp/lampp/htdocs/info.php on line 1.</span><br /><br />
        Si c'est le cas, c'est que PHP est configuré pour afficher le détail des erreurs, cela fera gagner beaucoup de temps pour comprendre les problème par la suite.</p>

        <h1 id="ancre_sur_les_variables">Les variables</h1>
        <p>Rien qu'avec leur nom, on peut imaginer que c'est quelque chose qui change tout le temps, en effet, le propre d'une variable c'est de pouvoir varier.<br /><br />
        Une variable, c'est une petite information stockée en mémoire temporairement.<br />
        En PHP, la variable (l'information) existe tant que la page est en cours de génération, dès que la page PHP est générée, toutes les variables sont supprimées de la mémoire car elles ne servent plus à rien, ce n'est donc pas un fichier qui reste stocké sur le disque dur, mais une petite information temporaire présente en mémoire vive.<br />
        C'est à nous de créer des variables quand on en a besoin pour retenir des informations.
        <p>Une variable est toujours constituée de deux éléments :</p>
        <ul>
            <li><span class="mise_en_valeur4">Son nom</span> : Pour pouvoir la reconnaître, on lui donne un nom, par exemple : age</li>
            <li><span class="mise_en_valeur4">Sa valeur</span> : C'est l'information qu'elle contient, et qui peut changer, par exemple : 17</li>
        </ul>
        <p>Dans cet exemple on a donc une variable appelée age qui a pour valeur 17.<br />
        On peut modifier quand on veut la valeur de cette variable, faire des opérations dessus, etc.<br />
        Et quand on en a besoin, on l'appelle (par son pti’ nom), et elle nous dit gentiment la valeur qu'elle contient.</p>
        <p id="ancre_sur_les_types">Il existe différents types de variables, en effet les variables sont capables de stocker différents types d'informations, on parle de <span class="mise_en_valeur4">types de données</span>; Voici les principaux types à connaître :</p>
        <ul>
            <li><span class="mise_en_valeur1">Les chaînes de caractères (string)</span> : Stocke du texte</li>
            <li><span class="mise_en_valeur1">Les nombres entiers (int pour integer)</span> : Les nombres du type 1, 2, 3, 4, etc. On compte aussi parmi eux les entiers relatifs : -1, -2, -3, ..</li>
            <li><span class="mise_en_valeur1">Les nombres décimaux (float)</span> : Comme 14,738, attention, les nombres doivent être écrits avec un point au lieu de la virgule (c'est la notation anglaise)</li>
            <li><span class="mise_en_valeur1">Les booléens (bool)</span> : Permet de stocker soit vrai soit faux</li>
            <li><span class="mise_en_valeur1">Rien (NULL)</span> : Aussi bizarre que cela puisse paraître, on a parfois besoin de dire qu'une variable ne contient rien, ce n'est pas vraiment un type de données, mais plutôt l'absence de type</li>
        </ul>

        <h2>Afficher une variable</h2>
        <p>Prenons un exemple :</p>
        <p class="citation_code_balise">
        &lt;?php
        $userAge = 17;
        ?&gt;
        </p>
        <p>Avec ce code PHP, on vient en fait de créer une variable :</p>
        <ul>
            <li>son nom est userAge</li>
            <li>sa valeur est 17</li>
        </ul>
        <p>On ne peut pas mettre d'espace dans un nom de variable, on utilise donc une majuscule pour "détacher" visuellement les mots et les rendre plus lisibles, c'est ce que l'on appelle la convention camelCase (cela fait référence aux bosses d'un chameau).<br />
        Quand on nomme des variables, il faut éviter également les accents, les cédilles et tout autre symbole, c'est pour cela qu’ici on a écrit age et non âge.</p>
        <ul>
            <li><span class="mise_en_valeur4">D'abord, on écrit le symbole "dollar" ($)</span> : Il précède toujours le nom d'une variable, c'est comme un signe de reconnaissance, ça permet de dire à PHP "J'utilise une variable"</li>
            <li><span class="mise_en_valeur4">Ensuite, il y a le signe "égal" (=)</span> : C'est pour dire que $userAge est égal à ce qui suit</li>
            <li>À la suite, il y a <span class="mise_en_valeur4">la valeur de la variable</span>, ici 17</li>
            <li>On <span class="mise_en_valeur4">finit par le point-virgule (;)</span> qui permet de terminer l'instruction</li>
        </ul>

        <p>Si on écrit :</p>
        <p class="citation_code_balise">
        &lt;?php
        $userAge = 17; // La variable est créée et vaut 17
        $userAge = 23; // La variable est modifiée et vaut 23
        $userAge = 55; // La variable est modifiée et vaut 55
        ?&gt;
        </p>
        <p>La variable <strong>$userAge</strong> va être créée et prendra pour valeur, dans l'ordre : 17, 23, puis 55.<br />
        Rien ne s'affiche, seulement, quelque part dans la mémoire de l'ordinateur, une petite zone nommée userAge vient de prendre la valeur 17, puis 23, puis 55.</p>
        
        <h1 id="ancre_sur_les_types_de_donnees">Les types de données</h1>
        <p>On les a listées <a href="#ancre_sur_les_types">ici</a>, les voici en détail :</p>
        <ul>
            <li><span class="mise_en_valeur1">String (chaîne de caractère)</span> : Permet de stocker du texte, on l’entoure de guillemets doubles "" ou simples (apostrophes) '', exemple :
                <p class="citation_code_balise">
                &lt;?php
                $fullname = "Antoine Giraud";
                $email = 'psykadelicdream@free.fr';
                ?&gt;
                </p>
                <p>Attention, si on veut insérer un guillemet simple alors que le texte est entouré de guillemets simples, il faut l'échapper en insérant un antislash devant, il en va de même pour les guillemets doubles, exexemple :</p>
                <p class="citation_code_balise">
                &lt;?php
                $variable = "Mon \"nom\" est Antoine";
                $variable = 'Je m\'appelle Antoine';
                ?&gt;
                </p>
                <p>En effet, si on oublie de mettre un antislash, PHP va croire que c'est la fin de la chaîne et il ne comprendra pas le texte qui suivra (et on aura un message Parse error).<br />
                On pourra en revanche insérer sans problème des guillemets simples au milieu de guillemets doubles, et inversement :</p>
                <p class="citation_code_balise">
                &lt;?php
                $variable = 'Mon "nom" est Antoine';
                $variable = "Je m'appelle Antoine";
                ?&gt;</p>
            </li>
            <li><span class="mise_en_valeur1">int (nombre entier)</span> : Il suffit tout simplement d'écrire le nombre, sans guillemets, exemple : 
            <p class="citation_code_balise">
            &lt;?php
            $userAge = 17;
            ?&gt;
            </p>
            </li>
            <li><span class="mise_en_valeur1">float (nombre décimale)</span> :  On doit écrire le nombre avec un point au lieu d'une virgule, c'est la notation anglaise, exemple :
            <p class="citation_code_balise">&lt;?php
            $price = 57.3;
            ?&gt;
            </p>
            </li>
            <li>
            <span class="mise_en_valeur1">bool (booléen)</span> : Pour dire si une variable vaut vrai ou faux, on doit écrire le mot true ou false sans guillemets autour (ce n’est pas une chaîne de caractères), exemple :
            <p class="citation_code_balise">
            &lt;?php
            $isAuthor = true;
            $isAdministrator = false;
            ?&gt;
            </p>
            </li>
            <li>
            <span class="mise_en_valeur1">NULL (variable vide)</span> : Sert simplement à indiquer que la variable ne contient rien.<br />
            Si on veut créer une variable qui ne contient rien, on doit lui passer le mot-clé NULL (qu’on peut aussi écrire en minuscules : null), exemple :
            <p class="citation_code_balise">
            &lt;?php
            $noValue = NULL;
            ?&gt;
            </p>
            </li>
        </ul>

        <h2>Afficher le contenu d’une variable</h2>
        <p>On a vu qu’on peut afficher du texte avec echo, on peut aussi s’en servir pour afficher la valeur d’une variable !<br />
        Pour cela il suffit d’écrire le nom de la variable que l’on veut afficher (sans guillemet car il s’agit d’une variable et non de texte) :</p>
        <p class="citation_code_balise">
        &lt;?php
        $fullname = 'Clémentine Degaine';
        echo $fullname;
        ?&gt;
        </p>
        
        <h2>Concaténer une variable</h2>
        <p>On va à présent concaténer (assembler) du texte et une variable.<br />
        Certe on pourrait écrire :</p>
        <p class="citation_code_balise">
        &lt;?php
        $fullname = "Clémentine Degaine";
        echo "Bonjour ";
        echo $fullname;
        echo " et bienvenue sur le site !";
        ?&gt;
        </p>
        <p>Mais on peut le faire sur une ligne, pour cela il y a deux méthodes :</p>
        <ul>
            <li><span class="mise_en_valeur4">Avec des guillemets doubles</span> : C'est le plus simple (mais le moins recommandé), on peut écrire le nom de la variable au milieu du texte et il sera remplacé par sa valeur, exemple :
            <p class="citation_code_balise">
            &lt;?php
            $fullname = "Clémentine Degaine";
            echo "Bonjour $fullname et bienvenue sur le site !";
            ?&gt;
            </p>
            <p>Ce qui affiche : Bonjour Clémentine Degaine et bienvenue sur le site !<br />
            En effet lorsqu’on utilise des guillemets doubles, les variables qui se trouvent à l’intérieur sont remplacées par leur vraie valeur.</p>
            </li>
            <li><span class="mise_en_valeur4">Avec des guillemets simples</span> : Moins simple mais recommandée, exemple :
            <p class="citation_code_balise">
            &lt;?php
            $fullname = 'Clémentine Degaine';
            echo 'Bonjour ' . $fullname . ' et bienvenue sur le site !'; // OK
            ?&gt;
            </p>
            <p>
            Ici on écrit la variable en dehors des guillemets et on sépare les éléments les uns des autres à l’aide d’un point.<br />
            Ça a l'air bien plus compliqué, mais en fait c'est cette méthode qu'utilisent la plupart des programmeurs expérimentés en PHP, le code est plus lisible, et on repère bien la variable, alors qu’avec des guillemets doubles elle est “noyée” dans le texte, en plus l’éditeur de texte devrait nous colorer la variable, ce qu'il ne fait pas quand on utilise les guillemets doubles.<br />
            En plus, cette méthode d’écriture est un peu plus rapide car le PHP voit tout de suite où se trouve la variable et n’a pas besoin de la chercher au milieu du texte.</p>
            </li>
        </ul>

        <h2>Faire des calculs simples</h2>

        <h3>Les opérations de base</h3>
        <table>
            <tr>
            <td class="gras">Symbole</td>
            <td class="gras">Signification</td>
            </tr>
            <tr>
            <td>+</td>
            <td>Addition</td>
            </tr>
            <tr>
            <td>-</td>
            <td>Soustraction</td>
            </tr>
            <tr>
            <td>*</td>
            <td>Multiplication</td>
            </tr>
            <tr>
            <td>/</td>
            <td>Division</td>
            </tr>
            <tr>
            <td>%</td>
            <td>Modulo</td>
            </tr>
        </table>
        <p>Voici quelques exemples :</p>
        <p class="citation_code_balise">
        &lt;?php
        $number = 2 + 4; // $number prend la valeur 6
        $number = 5 - 1; // $number prend la valeur 4
        $number = 3 * 5; // $number prend la valeur 15
        $number = 10 / 2; // $number prend la valeur 5

        // Allez on rajoute un peu de difficulté
        $number = 3 * 5 + 1; // $number prend la valeur 16
        $number = (1 + 2) * 2; // $number prend la valeur 6
        ?&gt;
        </p>
        <p>Voici des calculs avec plusieurs variables :</p>
        <p class="citation_code_balise">
        &lt;?php
        $number = 10;
        $result = ($number + 5) * $number; // $result prend la valeur 150
        ?&gt;
        </p>
        
        <h3>Le modulo :</h3>
        <p>Il est possible de faire un autre type d'opération un peu moins connu : le modulo.<br /> Cela représente le reste de la division entière.<br />
        Par exemple, 6 / 3 = 2 et il n'y a pas de reste.<br />
        En revanche, 7 / 3 = 2 (car le nombre 3 «rentre» 2 fois dans le nombre 7) et il reste 1 (on a fait ce type de calculs à l'école primaire ;))<br />
        Le modulo permet donc de récupérer ce reste :
        </p>
        <p class="citation_code_balise">
        &lt;?php
        $number = 10 % 5; // $number prend la valeur 0 car la division tombe juste
        $number = 10 % 3; // $number prend la valeur 1 car il reste 1
        ?&gt;
        </p>


        <h1 id="ancre_sur_les_comparaisons">Les opérateurs de comparaison</h1>
        <p>Voici les symboles qui peuvent être utilisés dans une condition :</p>
        <table>
            <tr>
            <td class="gras">Symbole</td>
            <td class="gras">Signification</td>
            </tr>
            <tr>
            <td>==</td>
            <td>Est égal à</td>
            <tr>
            <td>></td>
            <td>Est supérieur à</td>
            </tr>
            <tr>
            <td><</td>
            <td>Est inférieur à</td>
            </tr>
            <tr>
            <td>>=</td>
            <td>Est supérieur ou égal à</td>
            </tr>
            <tr>
            <td><=</td>
            <td>Est inférieur ou égal à</td>
            </tr>
            <tr>
            <td>!=</td>
            <td>Est différent de</td>
            </tr>
        </table>
        <p>Il y a deux symboles "égal" (==) sur la première ligne.<br />
        Le double égal sert à tester l'égalité, à dire "Si c'est égal à ..", dans les conditions, on utilisera donc jamais "=" mais le double égal "==", voir le triple égal "==="..</p>

        <p>En effet en PHP, toutes les égalités ne sont pas nées égales.</p>
        <p>Il y a deux façons de vérifier si deux valeurs sont égales en PHP (comme en JavaScript) :  <strong>==</strong> et <strong>===</strong>, aussi appelées <span class="mise_en_valeur1">égalité simple</span> et <span class="mise_en_valeur1">égalité stricte</span> :</p>
        <ul>
            <li><span class="mise_en_valeur4">L'<span class="mise_en_valeur1">égalité simple</span> vérifie la valeur, mais pas le type</span><br />
                Donc ceci renvoie la valeur <strong>true</strong> :
                <p class="citation_console">
                5 == "5"
                </p>
            </li>
            <li><span class="mise_en_valeur4">L'<span class="mise_en_valeur1">égalité stricte</span> vérifie à la fois la valeur et le type</span><br />
            Donc ceci renvoie <strong>false</strong>, car on compare un <span class="mise_en_valeur4">number</span> à un <span class="mise_en_valeur4">string</span> :
            <p class="citation_console">
            5 === "5"
            </p>
            </li>
        </ul>
        <p>De même, il y a deux <span class="mise_en_valeur1">opérateurs d'inégalité</span>, <strong>!=</strong> et <strong>!==</strong>, avec la même distinction.</p>        

        <h1 id="ancre_sur_les_conditions"></h1>
        <p>Une condition peut être écrite en PHP sous différentes formes, on parle de <span class="gras">structures conditionnelles</span>.</p>

        <h2>La structure if else elseif</h2>
        <p>Voici ce qu'on doit écrire, dans l'ordre, pour utiliser cette condition :</p>
        <ol>
            <li>Pour introduire une condition, on utilise le mot <strong>if</strong> qui signifie «si», en anglais</li>
            <li>On ajoute à la suite, entre parenthèses, la condition en elle-même</li>
            <li>Enfin, on ouvre des accolades à l'intérieur desquelles on placera les instructions à exécuter si la condition est remplie</li>
        </ol>
        <p>Exemple :</p>
        <p class="citation_code_balise">
        &lt;?php
        $isEnabled = true; // La condition d'accès

        if ($isEnabled == true) {
            echo "Vous êtes autorisé(e) à accéder au site";
        }
        ?&gt;
        </p>
        <p>Traduit cela donne : Si la variable <strong>$isEnabled</strong> est vraie, affiche "Vous êtes autorisé(e) à accéder au site".</p>
        <p>Ce qui compte ici, c'est qu'il y a deux possibilités :</p>
        <ol>
            <li>Soit la condition est remplie et alors on affiche quelque chose</li>
            <li>Sinon, on saute les instructions entre accolades, on ne fait rien</li>
        </ol>
        <p>Si on améliore un peu le script, cela donne :</p>
        <p class="citation_code_balise">
            &lt;?php
            $isEnabled = true;
            if ($isEnabled == true) {
                echo "Vous êtes autorisé(e) à accéder au site";
            }
            else {
                echo "Accès refusé ";
            }
            ?&gt;
        </p>
        <p>Ici on utilise <strong>else</strong> (sinon) en plus, ce qui permet, au cas où on ne répond pas à la première condition, de faire une deuxième instruction (contrairement au premier exemple où, si on ne répond pas à la première condition, on ne fait pas d’instruction du tout).</p>
        <p>Enfin, voici un autre exemple avec l’utilisation en plus de <strong>elseif</strong> (sinon si) :</p>
        <p class="citation_code_balise">
        &lt;?php
        $isAllowedToEnter = "Oui";

        // SI on a l'autorisation d'entrer
        if ($isAllowedToEnter == "Oui") {
            // instructions à exécuter quand on est autorisé à entrer
        } // SINON SI on n'a pas l'autorisation d'entrer
        elseif ($isAllowedToEnter == "Non") {
            // instructions à exécuter quand on n'est pas autorisé à entrer
        } // SINON (la variable ne contient ni Oui ni Non, on ne peut pas agir)
        else {
            echo "Euh, je ne comprends pas ton choix, tu peux me le rappeler s'il te plaît ?";
        }
        ?&gt;
        </p>
        <p>Traduit, cela donne :</p>
        <ol>
            <li>Si <strong>$isAllowedToEnter</strong> est égale à "Oui", tu exécutes ces instructions</li>
            <li>Sinon, si <strong>$isAllowedToEnter</strong> est égale à "Non", tu exécutes ces autres instructions</li>
            <li>Sinon, tu redemandes l'âge pour savoir si on a ou non l'autorisation d'entrer</li>
        </ol>

        <h2>Le cas des booléens</h2>
        <p>Si on regarde bien le dernier code source (avec <strong>$isAllowedToEnter</strong>), il serait plus adapté d'utiliser des booléens.<br />
        Les booléens sont ces variables qui valent :</p>
        <ul>
            <li>soit <span class="mise_en_valeur1">true</span> (vrai)</li>
            <li>soit <span class="mise_en_valeur1">false</span> (faux)</li>
        </ul>
        <p>Voici comment on teste une variable booléenne :</p>
        <p class="citation_code_balise">
        &lt;?php
        $isAllowedToEnter = true;
        if ($isAllowedToEnter) {
            echo "Bienvenue petit nouveau. :o)";
        }
        else {
            echo "T'as pas le droit d'entrer !";
        }
        ?&gt;
        </p>
        <p>L'un des avantages des booléens, c'est qu'ils sont particulièrement adaptés aux conditions parce qu'on est pas obligé d'ajouter le <span class="mise_en_valeur1">==true</span>, PHP comprend qu’il faut qu’il vérifie si <strong>$isAllowedToEnter</strong> vaut <span class="mise_en_valeur1">true</span>.<br />
        C’est plus rapide à écrire, et cela se comprend mieux.</p>
        <p>En effet si on lit la première ligne ça donne : "Si on a l’autorisation d’entrer".<br />
        Pour vérifier si la variable vaut <span class="mise_en_valeur1">false</span>, on utilisera le point d’exclamation <span class="mise_en_valeur1">!</span>, exemple :</p>
        <p class="citation_code_balise">
        &lt;?php
        $isAllowedToEnter = true;
        // Si pas autorisé
        if (! $isAllowedToEnter) {

        }
        ?&gt;
        </p>
        <p>C'est une autre façon de faire, mais si on préfère mettre <strong>if($isAllowedToEnter ==false)</strong> c'est aussi correct, cependant la méthode "courte" est plus lisible.</p>

        <h2>Les conditions multiples</h2>
        <p>Voici de nouveaux mots-clés permettant de poser plusieurs conditions à la fois :</p>
        <table>
            <tr>
            <td class="gras">Mot-clé</td>
            <td class="gras">Signification</td>
            <td class="gras">Symbole équivalent</td>
            </tr>
            <tr>
            <td>AND</td>
            <td>Et</td>
            <td>&&</td>
            </tr>
            <tr>
            <td>OR</td>
            <td>Ou</td>
            <td>||</td>
            </tr>
        </table>
        <p>Exemple :</p>
        <p class="citation_code_balise">
        &lt;?php
        $isEnabled = true;
        $isOwner = false;
        if ($isEnabled && $isOwner) {
            echo 'Accès à la recette validé';
        } else {
            echo 'Accès à la recette interdit !';
        }
        ?&gt;
        </p>
        <p>Traduit cela donne : Si l'utilisateur est actif et qu'il est l'auteur, il peut accéder à la recette validée, sinon, il verra s'afficher un message de refus.</p>
        <p>Autre exemple :</p>
        <p class="citation_code_balise">
        &lt;?php
        $isEnabled = true;
        $isOwner = false;
        $isAdmin = true;
        if (($isEnabled && $isOwner) || $isAdmin) {
            echo 'Accès à la recette validé';
        } else {
            echo 'Accès à la recette interdit !';
        }
        ?&gt;
        </p>
        <p>Ici on a rajouté une condition supplémentaire : Soit la condition précédente s'applique, soit l'utilisateur concerné est un administrateur.</p>

        <h2>Astuce possible</h2>
        <p>Avec les conditions, il y a une astuce à connaître.<br />
        Les deux codes ci-dessous donnent exactement le même résultat :</p>
        <p class="citation_code_balise">
        &lt;?php
        $chickenRecipesEnabled = true;
        if ($chickenRecipesEnabled) {
            echo '&lt;h1&gt;Liste des recettes à base de poulet&lt;/h1&gt;';
        }
        ?&gt;
        </p>
        <p class="citation_code_balise">
        &lt;?php $chickenRecipesEnabled = true; ?&gt;
        &lt;?php if ($chickenRecipesEnabled): ?&gt; &lt;!-- Ne pas oublier le ":" --&gt;
        &lt;h1&gt;Liste des recettes à base de poulet&lt;/h1&gt;
        &lt;?php endif; ?&gt;&lt;!-- Ni le ";" après le endif --&gt;
        </p>
        <p>Comme on peut le voir, dans le second cas on n'a pas utilisé de <strong>echo</strong>.<br />
        La syntaxe pour utiliser la condition diffère un peu :
        </p>
        <ul>
            <li>Il n'y a pas d'accolade</li>
            <li>On ajoute <strong>:</strong> après la parenthèse fermante de l'instruction <strong>if</strong>.</li>
            <li>Et il faut ajouter une instruction <strong>endif;</strong></li>
        </ul>

        <h2>Condition Switch</h2>
        <p>Regardons cet exemple à base de <strong>if</strong> et de <strong>elseif</strong> :</p>
        <p class="citation_code_balise">
        &lt;?php
        $grade = 16;

        if ($grade == 0) {
            echo "Tu n’as pas réussi";
        }

        elseif ($grade == 5) {
            echo "C’est pas très bon";
        }

        elseif ($grade == 7) {
            echo "C’est en dessous de la moyenne";
        }

        elseif ($grade == 10) {
            echo "Tu as pile poil la moyenne, c'est un peu juste…";
        }

        elseif ($grade == 12) {
            echo "Tu es assez bon";
        }

        elseif ($grade == 16) {
            echo "Tu te débrouilles très bien !";
        }

        elseif ($grade == 20) {
            echo "Excellent travail, c'est parfait !";
        }

        else {
            echo "Désolé, je n'ai pas de message à afficher pour cette note";
        }
        ?&gt;
        </p>
        <p>Comme on peut le voir, c'est lourd, long, et répétitif.<br />
        Dans ce cas, on peut utiliser une autre structure plus souple : c'est <strong>switch</strong> !<br />
        Voici le même exemple avec <strong>switch</strong> (le résultat est le même, mais le code est plus adapté) :</p>
        <p class="citation_code_balise"
        >
        &lt;?php
        $grade = 10;
        switch ($grade) // on indique sur quelle variable on travaille
        { 
            case 0: // dans le cas où $grade vaut 0
                echo "Tu n’as pas réussi";
            break;    
            case 5: // dans le cas où $grade vaut 5
                echo "C’est pas très bon";
            break;    
            case 7: // dans le cas où $grade vaut 7
                echo "C’est en dessous de la moyenne";
            break;
            case 10: // etc. etc.
                echo "Tu as pile poil la moyenne, c'est un peu juste…";
            break;    
            case 12:
                echo "Tu es assez bon";
            break;
            case 16:
                echo "Tu te débrouilles très bien !";
            break;    
            case 20:
                echo "Excellent travail, c'est parfait !";
            break;    
            default:
                echo "Désolé, je n'ai pas de message à afficher pour cette note";
        }
        ?&gt;
        </p>
        <p>La différence avec <strong>if</strong> est que pour <strong>switch</strong> :</p>
        <ul>
            <li>Il y a beaucoup moins d'accolades : elles marquent seulement le début et la fin du <strong>switch</strong></li>
            <li>On indique au début du <strong>switch</strong> sur quelle variable on travaille, ici <strong>$grade</strong><br />
            <span class="mise_en_valeur2">En bref on dit à PHP : "Analyse la valeur de <strong>$grade</strong>"</span></li>
            <li>On utilise des <strong>case</strong> pour analyser chaque cas : <strong>case 0</strong> ,<strong>case 10</strong> , etc<br /></li>
            <span class="mise_en_valeur2">Ce qui signifie : Dans le cas où la valeur est 0.. etc</span>
            <li>On n'a plus besoin de mettre le double égal<br />
            <span class="mise_en_valeur2">Par contre le <strong>switch</strong> <span class="mise_en_valeur1">ne peut tester que l'égalité</span>, on ne peut pas l’utiliser avec les symboles &lt; &gt; <= >= !=</span></li>
            <li>Le mot-clé <strong>default</strong> à la fin est un peu l'équivalent du <strong>else</strong><br />
            <span class="mise_en_valeur2">C'est le message qui s'affiche par défaut, quelle que soit la valeur de la variable</span></li>
        </ul>
        <p>Il y a cependant une chose importante à savoir :<br />
        Supposons dans notre exemple que la note soit de 10.<br />
        PHP va lire :</p>
        <ul>
            <li>case 0 ? Non. Je saute</li>
            <li>case 5 ? Non plus. Je saute</li>
            <li>case 7 ? Non plus. Je saute</li>
            <li>case 10 ? Oui, j'exécute les instructions</li>
        </ul>
        <p>Mais contrairement aux <strong>elseif</strong>, <span class="mise_en_valeur1">PHP ne s'arrête pas là et continue à lire les instructions des cases qui suivent !</span></p>
        <ul>
            <li>case 12</li>
            <li>case 16</li>
            <li>etc</li>
        </ul>
            <p><span class="mise_en_valeur1">Pour empêcher cela, il faut utiliser l’instruction</span> <strong>break</strong> !<br />
        L'instruction <strong>break</strong> demande à PHP de sortir du <strong>switch</strong>, en effet dès que PHP tombe sur <strong>break</strong>, il sort des accolades et donc <span class="mise_en_valeur1">il ne lit pas les case qui suivent</span>.<br />
        En pratique, on utilise très souvent un <strong>break</strong> car sinon, PHP lit des instructions qui suivent et qui ne conviennent pas.</p>
        <p>
        Alors, quand doit-on choisir <strong>if</strong> ou <strong>switch</strong> ?<br />
        C'est surtout un problème de présentation et de clarté :</p>
        <ul>
            <li><span class="mise_en_valeur4">Pour une condition simple et courte</span>, on utilise le <strong>if</strong></li>
            <li>Et <span class="mise_en_valeur4">quand on a une série de conditions à analyser</span>, on préfère utiliser <strong>switch</strong> <span class="mise_en_valeur4">pour rendre le code plus clair</span></li>
        </ul>
        
        <h2>Condition condensées : Les ternaires</h2>
        <p>Il existe une autre forme de condition, beaucoup moins fréquente, mais à voir pour info si jamais on tombe dessus, il s'agit de ce qu'on appelle les ternaires.<br />
        Un ternaire est une condition condensée qui sert à faire deux choses sur une seule ligne :</p>
        <ol>
            <li>Tester la valeur d'une variable dans une condition</li>
            <li>Affecter une valeur à une variable selon que la condition est vraie ou non</li>
        </ol>
        <p>Prenons cet exemple à base de <strong>if .. else</strong>  qui met un booléen <strong>$majeur</strong> à vrai ou faux selon l'âge du visiteur :</p>
        <p class="citation_code_balise">
        &lt;?php
        $userAge = 24;

        if ($userAge >= 18) {
            $isAdult = true;
        }
        else {
            $isAdult = false;
        }
        ?&gt;
        </p>
        <p>On peut faire la même chose en une seule ligne grâce à une structure ternaire :</p>
        <p class="citation_code_balise">
        &lt;?php
        $userAge = 24;
        $isAdult = ($userAge >= 18) ? true : false;

        // Ou mieux, dans ce cas précis
        $isAdult = ($userAge >= 18);
        ?&gt;
        </p>
        <p>La condition testée est <strong>$userAge >= 18</strong><br />.
        Si c'est vrai, alors la valeur indiquée après le point d'interrogation (ici <span class="mise_en_valeur1">true</span>) sera affectée à la variable <strong>$isAdult</strong>.<br />
        Sinon c’est la valeur qui suit le symbole : (ici <span class="mise_en_valeur1">false</span>) qui sera affectée à <strong>$isAdult</strong>.</p>
        <p>Concernant le :</p>
        <p class="citation_code_balise">
        // Ou mieux, dans ce cas précis
        $isAdult = ($userAge >= 18);
        ?&gt;
        </p>
        <p>En effet le résultat d'une condition (avec un opérateur de comparaison, ici ">=") renvoie forcément un booléen, on peut donc s'en servir par la suite, exemple :</p>
        <p class="citation_code_balise">
        // Ou mieux, dans ce cas précis
        $isAdult = ($userAge >= 18);
        if $isAdult {
            echo "Tu peux rentrer sur le site";
        } else {
            echo "Tu ne peux pas rentrer, désolé ;)"
        }
        ?&gt;
        </p>

        <h1 id="ancre_sur_les_boucles">Les boucles</h1>
        
        <h2>Introduction des tableaux</h2>
        <p>Si on prend l’exemple d’un site de partage de recette, on a :</p>
        <ul>
            <li>des utilisateurs</li>
            <li>des recettes</li>
            <li>et peut-être des commentaires</li>
        </ul>
        <p>Voici comment on pourrait définir deux utilisateurs :</p>
        <p class="citation_code_balise">
        &lt;?php

        // Premier utilisateur
        $userName1 = 'Clémentine Degaine';
        $userEmail1 = 'clementine.degaine@gmail.com';
        $userPassword1 = 'S3cr3t';
        $userAge1 = 41;

        // Deuxième utilisateur
        $userName2 = 'Antoine Giraud';
        $userEmail2 = 'psykadelicdream@free.fr';
        $userPassword2 = 'P4ssW0rD';
        $userAge2 = 36;

        // ... et ainsi de suite pour les autres utilisateurs.
        </p>
        <p>Pour afficher ces utilisateurs (ou même des recettes), on devrait, avec cette méthode, créer des variables pour chacun des éléments qui constituent les objets.<br />
        Heureusement, en PHP, il existe un type de structure appelée <span class="mise_en_valeur4">tableau"</span>.<br />
        Elle permet de gérer des objets ayant plusieurs propriétés qui ont besoin d'être rassemblées entre elles, exemple :</p>
        <p class="citation_code_balise">
        &lt;?php
        $user1 = ['Clémentine Degaine', 'email', 'S3cr3t', 41];
        echo $user1[0]; // "Clémentine Degaine"
        echo $user1[1]; // "email"
        echo $user1[3]; // 41
        </p>
        <p>Notons pour le moment (on verra les tableaux en détails plus tard) que :</p>
        <ul>
            <li>Un tableau se déclare entre crochets : <strong>[ ];</strong></li>
            <li>Il possède des indices : 0, 1, 2, …</li>
            <li>On peut accéder à un élément du tableau à partir de ces clés.</li>
        </ul>
        <p>On peut également construire des tableaux de tableaux.</p>

        <h2>Les boucles simples avec while</h2>
        <p>Une boucle est une structure qui fonctionne sur le même principe qu'une condition <strong>if else</strong>.<br/>
        Une boucle permet de répéter des instructions plusieurs fois, c'est un gain de temps, c'est très pratique, et bien souvent indispensable; Voici le principe :</p>
        <p><span class="survol_image_autre"><img src="images_pour_mise_en_forme/modele_boucle.png" title="Principe d'une boucle" alt="Principe d'une boucle" /></span></p>
        <p>Voilà ce qui se passe dans une boucle :</p>
        <ol>
            <li>Les instructions sont d'abord exécutées dans l'ordre, de haut en bas</li>
            <li>À la fin des instructions, on retourne à la première</li>
            <li>On recommence à lire les instructions dans l'ordre</li>
            <li>Et on retourne à la première, etc..</li>
        </ol>
        <p>Le problème dans ce schéma, c'est que ça ne s'arrête jamais.. Les instructions seraient réexécutées à l'infini !<br />
        C'est pour cela que, quel que soit le type de boucle, <strong>while</strong> ou <strong>for</strong>, il faut indiquer une <span class="mise_en_valeur4">condition</span>.</p>
        <ul>
            <li>Tant que la condition est remplie, les instructions sont réexécutées</li>
            <li>Dès que la condition n'est plus remplie, on sort enfin de la boucle</li>
        </ul>
        <p>Voici comment faire avec une boucle simple avec <strong>while</strong> :</p>
        <p class="citation_code_balise">
        &lt;?php
        while ($isValid) {
            // instructions à exécuter dans la boucle
        }
        ?&gt;
        </p>
        <p><strong>while</strong> peut se traduire par <span class="mise_en_valeur1">tant que</span>.<br /><br />
        Ici, on demande à PHP :<br />
        <span class="mise_en_valeur1">TANT QUE $isValid est vrai, exécuter ces instructions</span>.<br /><br />
        Les <span class="mise_en_valeur1">instructions</span> qui sont répétées en boucle se trouvent entre les <span class="mise_en_valeur1">accolades { }</span>.<br /><br />
        Prenons un exemple, on va supposer qu’on a été puni et qu’on doit recopier 100 fois : Je ne dois pas regarder les mouches voler quand j'apprends le PHP.</p>
        <p class="citation_code_balise">
        &lt;?php
        $lines = 1;
        while ($lines <= 100) {
            echo 'Je ne dois pas regarder les mouches voler quand j\'apprends le PHP.<br />';
            $lines++; // $lines = $lines + 1
        }
        </p>
        <p><span class="survol_image_autre"><img src="images_pour_mise_en_forme/exemple_boucle.png" title="Exemple de boucle" alt="Exemple de boucle" /></span></p>
        <p>La boucle pose la condition : <span class="mise_en_valeur1">TANT QUE $lines est inférieur ou égal à 100.</span><br />
        Dans cette boucle, il y a deux instructions :</p>
        <ol>
            <li><strong>echo</strong> permet d'afficher du texte en PHP, à noter qu'il y a une balise HTML &lt;br/&gt; à la fin qui permet d'aller à la ligne</li>
            <li><strong>$lines++;</strong> est une façon plus courte d'ajouter 1 à la variable; On appelle cela l'<span class="mise_en_valeur1">incrémentation</span> (ce nom tout simplement que l'on a ajouté 1 à la variable).</li>
        </ol>
        <p>Chaque fois qu'on fait une boucle, la valeur de la variable augmente : 1, 2, 3, 4… 99, 100...<br />
        Dès que la variable atteint 101, on arrête la boucle.<br />
        Et voilà, on a écrit 100 lignes rapidement; Si la punition avait été plus grosse, pas de problème, il aurait suffi de changer la condition, par exemple : mettre "TANT QUE c'est inférieur ou égal à 500" pour l'écrire 500 fois.</p>
        <p>Il faut toujours s'assurer que la condition sera fausse au moins une fois. Si elle ne l'est jamais, alors la boucle s'exécutera à l'infini !<br />
        PHP refuse normalement de travailler plus d'une quinzaine de secondes aussi il s'arrêtera tout seul s'il voit que son travail dure trop longtemps, et affichera un message d'erreur.</p>
        <p>Autre exemple : On peut écrire de la même manière une centaine de lignes, mais chacune peut être différente : on n'est pas obligé d'écrire la même chose à chaque fois.<br />
        Cet exemple devrait nous montrer que la valeur de la variable augmente à chaque passage dans la boucle :</p>
        <p class="citation_code_balise">
        &lt;?php
        $lines = 1;

        while ($lines <= 100)
        {
            echo 'Ceci est la ligne n°' . $lines . '&lt;br /&gt;';
            $lines++;
        }
        ?&gt;
        </p>
        <p>Cela donnera :<br />
        Ceci est la ligne n°1<br />
        Ceci est la ligne n°2<br />
        ..<br /><br />
        
        La particularité, ici, c'est qu'on affiche à chaque fois la valeur de <strong>$lines</strong>, cela nous permet de voir que sa valeur augmente petit à petit.</p>

        <h2>Les boucles complexes avec for</h2>
        <p><strong>for</strong> est un autre type de boucle qui a une forme un peu plus condensée, elle est donc fréquemment utilisée.<br />
        <strong>for</strong> et <strong>while</strong> donnent le même résultat et servent à la même chose : Répéter des instructions en boucle, cependant l'une peut paraître plus adaptée que l'autre dans certains cas.<br />
        Pour voir la différence avec le while , reprenons l'exemple précédent, cette fois avec un for :</p>
        <p class="citation_code_balise">
        &lt;?php
        for ($lines = 0; $lines <= 2; $lines++)
        {
            echo $users[$lines][0] . ' ' . $users[$lines][1] . '<br />';
        }
        ?&gt;
        </p>
        <p>Après le mot <strong>for</strong>, il y a des parenthèses qui contiennent trois éléments, séparés par des points-virgules <strong>;</strong> </p>
        <ol>
            <li>Le premier sert à l'<span class="mise_en_valeur1">initialisation</span>, c'est la valeur que l'on donne au départ à la variable (ici, elle vaut 0)</li>
            <li>Le second, c'est la <span class="mise_en_valeur1">condition</span>, comme pour le <strong>while</strong> : Tant que la condition est remplie, la boucle est réexécutée; Dès que la condition ne l'est plus, on en sort</li>
            <li>Enfin, le troisième c'est l'<span class="mise_en_valeur1">incrémentation</span>, cela permet d'ajouter 1 à la variable à chaque tour de boucle</li>
        </ol>
        <p>Les deux derniers codes donnent donc exactement le même résultat :</p>
        <ul>
            <li>le <strong>for</strong> fait la même chose que le <strong>while</strong></li>
            <li>..mais il rassemble sur une seule ligne tout ce qu'il faut savoir sur le fonctionnement de la boucle</li>
        </ul>
        <p>Alors, comment savoir lequel choisir ? <strong>while</strong> ou <strong>for</strong> ?</p>
        <ul>
            <li><strong>while</strong> est plus simple et plus flexible : On peut faire tous les types de boucles avec, mais on peut oublier de faire certaines étapes, comme l'incrémentation de la variable.</li><br />
            <li><strong>for</strong> est bien adapté quand on doit compter le nombre de fois que l'on répète les instructions, et il permet de ne pas oublier de faire l'incrémentation pour augmenter la valeur de la variable.</li>
        </ul>
        <p class="mise_en_valeur2">Si on hésite entre les deux, il suffit simplement de se poser la question suivante : Est-ce que je sais d'avance combien de fois je veux que mes instructions soient répétées ?.<br />
        - Si la réponse est oui, alors la boucle <strong>for</strong> est tout indiquée.<br />
        - Sinon, alors il vaut mieux utiliser la boucle <strong>while</strong>.</p>
        
        <h1 id="ancre_sur_les_tableaux">Les tableaux</h1>
        <p>Un tableau (array en anglais) est une variable, mais une variable un peu spéciale, elle est donc fréquemment utilisée.<br /><br />
        Voici pour rappel une variable simple, c’est à dire contenant un nom et une valeur :</p>
        <p class="citation_code_balise">
        &lt;?php
        $recipeTitle = 'Tarte au citron';
        echo "La recette de la " . $recipeTitle;
        // Cela affichera : La recette de la tarte au citron
        ?&gt;
        </p>
        <p>Ce qui peut se matérialiser sous la forme :</p>
        <table>
            <tr>
            <td class="gras">Nom</td>
            <td class="gras">Valeur</td>
            </tr>
            <tr>
            <td>$recipeTitle</td>
            <td>Tarte au citron</td>
            </tr>    
        </table>
        <p>Ici, nous allons voir qu'il est possible d'enregistrer de nombreuses informations dans une seule variable grâce aux tableaux; On en distingue deux types :</p>
        <ul>
            <li><span class="mise_en_valeur4">Les tableaux</span> <span class="mise_en_valeur1">numérotés</span></li>
            <li><span class="mise_en_valeur4">Les tableaux</span> <span class="mise_en_valeur1">associatifs</span></li>
        </ul>

        <h2>Les tableaux numérotés</h2>
        <p>Ces tableaux sont simples à imaginer, regardons par exemple celui-ci, contenu de la variable $recipes:</p>
        <table>
        <tr>
            <td class="gras">Clé</td>
            <td class="gras">Valeur</td>
        </tr>
        <tr>
            <td>0</td>
            <td>Tarte au citron</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Samoussas</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Salade de fleurs</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Croc-monsieur</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Wrap vegan</td>
        </tr>
        <tr>
            <td>...</td>
            <td>...</td>
        </tr>
        </table>
        <p><strong>$recipes</strong> est un <span class="mise_en_valeur1">array</span> : C'est ce qu'on appelle une variable “tableau”.<br />
        Elle n'a pas qu'une valeur, mais plusieurs (on peut d’ailleurs en mettre autant qu’on veut).<br />
        Attention, <span class="mise_en_valeur1">un tableau commence toujours par la case n°0</span>.</p>

        <h3>Création d’un tableau numéroté</h3>
        <p>Pour créer un tableau numéroté en PHP, <span class="mise_en_valeur1">on liste ses valeurs entre crochets []</span><br />
        Cet exemple nous montre comment créer l'array <strong>$recipes</strong> :</p>
        <p class="citation_code_balise">
        &lt;?php

        $users = ['Tarte au citron', 'Samoussas', 'Salade de fleurs', 'Croc-monsieur',];

        // La fonction array permet aussi de créer un array
        $users = array('Tarte au citron', 'Samoussas', 'Salade de fleurs');
        ?&gt;
        </p>
        <p>L'ordre a beaucoup d'importance :</p>
        <ol>
            <li>Le premier élément (Tarte au citron) aura le n° 0</li>
            <li>Ensuite Samoussas le n° 1</li>
            <li>Etc..</li>
        </ol>
        <p>On peut aussi créer manuellement le tableau, case par case :</p>
        <p class="citation_code_balise">
        &lt;?php
        $recipes[0] = 'Tarte au citron';
        $recipes[1] = 'Samoussas';
        $recipes[2] = 'Salade de fleurs';
        ?&gt;
        </p>
        <p>
        Si on ne veut pas avoir à écrire nous-même le numéro de la case que l’on crée, on peut laisser PHP le sélectionner automatiquement en laissant les crochets vides :</p>
        <p class="citation_code_balise">
        &lt;?php
        $recipes[] = 'Tarte au citron'; // Créera $recipes[0]
        $recipes[] = 'Samoussas'; // Créera $recipes[1]
        $recipes[] = 'Salade de fleurs'; // Créera $recipes[2]
        ?&gt;
        </p>

        <h3>Affichage d’un tableau numéroté</h3>
        <p>Pour faire cela en PHP, il faut écrire le nom de la variable, suivi du numéro entre crochets, pour afficher "Tarte au citron", on doit donc écrire :</p>
        <p class="citation_code_balise">
        &lt;?php
        echo $recipes[1]; // Cela affichera : Samoussas
        ?&gt;
        </p>
        <p>Cela revient à dire à PHP : <span class="mise_en_valeur1">Affiche-moi le contenu de la case n° 1 de $recipes</span><br /><br />              
        C'est tout bête, du moment que l’on n’oublie pas que Samoussas est en seconde position et donc qu'il a le numéro 1 (étant donné qu'on commence à compter à partir de 0).</p>

        <h2>Les tableaux associatifs</h2>
        <p>Les tableaux associatifs fonctionnent sur le même principe, sauf qu'au lieu de numéroter les cases, on va les étiqueter en leur donnant à chacune un nom différent.<br />
        Reprenons cette histoire de partage de recette, ici l’objectif est d'utiliser un tableau pour décrire une recette.<br /><br />
        Si le tableau est numéroté, comment savoir que le n° 0 est le titre ? Que le n° 1 désigne la recette ? Que le n° 2 correspond à l'auteur ?<br />
        C'est là que les tableaux associatifs deviennent utiles.</p>

        <h3>Création d’un tableau associatif</h3>
        <p>Pour mieux décrire la recette sous forme de tableau, on peut stocker une recette sous forme de tableau associatif, dans lequel chaque clé est une propriété de la recette :</p>
        <p class="citation_code_balise">
        &lt;?php
        // Une bien meilleure façon de stocker une recette !
        $recipe = [
            'title' => 'Tarte au citron',
            'recipe' => 'Étape 1 : des beaux citrons, Étape 2 : ...',
            'author' => 'clementine.degaine@gmail.com',
            'enabled' => true,
        ];
        ?&gt;
        </p>
        <p>Note importante : il n'y a ici qu'une seule instruction (un seul point-virgule).<br />
        J'aurais pu tout mettre sur la même ligne, mais rien ne m'empêche de séparer ça sur plusieurs lignes pour que ce soit plus facile à lire.<br /><br />
        On peut remarquer qu’on écrit une flèche => pour dire "associé à".<br />
        Dans cet exemple on dit donc que title du tableau <strong>$recipe</strong> prend la valeur “Tarte au citron”.<br />
        Nous avons créé un tableau qui ressemble à la structure suivante :</p>
        <table>
        <tr>
            <td class="gras">Clé</td>
            <td class="gras">Valeur</td>
        </tr>
        <tr>
            <td>title</td>
            <td>Tarte au citron</td>
        </tr>
        <tr>
            <td>recipe</td>
            <td>Étape 1 : des beaux citrons, Étape 2 : ...</td>
        </tr>
        <tr>
            <td>author</td>
            <td>clementine.degaine@gmail.com</td>
        </tr>
        <tr>
            <td>enabled</td>
            <td>true</td>
        </tr>
        </table>
        <p>Il est aussi possible de créer le tableau case par case, comme ceci :</p>
        <p class="citation_code_balise">
        &lt;?php
        $recipe['title'] = Tarte au citron';
        $recipe['recipe'] = 'Étape 1 : des beaux citrons, Étape 2 : ...';
        $recipe['author'] = 'clementine.degaine@gmail.com’;
        $recipe['enable'] = true;
        ?&gt;
        </p>
        
        <h3>Affichage d’un tableau associatif</h3>
        <p>Par exemple, pour extraire le titre de la recette, on devra taper :</p>
        <p class="citation_code_balise">
        &lt;?php
        echo $recipe['title'];
        ?&gt;
        </p>
        <p>Ce code affichera : Tarte au citron</p>
        <p><span class="gras">Quand utiliser un tableau numéroté et quand utiliser un tableau associatif ?</span><br />
        Comme on l'a vu dans nos exemples, ils ne servent pas à stocker la même chose...</p>
        <ul>
            <li><span class="mise_en_valeur4">Les tableaux numérotés permettent de stocker une série d'éléments du même type</span>, comme des prénoms, chaque élément du tableau contiendra alors un prénom</li>
            <li><span class="mise_en_valeur4">Les tableaux associatifs permettent de découper une donnée en plusieurs sous-éléments</span>, par exemple, une adresse peut être découpée en nom, prénom, nom de rue, ville ..</li>
        </ul>

        <h2>Parcourir un tableau avec des boucles</h2>
        <p>Lorsqu'un tableau a été créé, on a souvent besoin de le parcourir pour savoir ce qu'il contient, nous allons voir trois moyens d'explorer un tableau :</p>
        <ol>
            <li><span class="mise_en_valeur1">La boucle <strong>for</strong></span></li>
            <li><span class="mise_en_valeur1">La boucle <strong>foreach</strong></span></li>
            <li><span class="mise_en_valeur1">La fonction <strong>print_r</strong></span><span class="mise_en_valeur4"> (utilisée principalement pour le déboggage)</span></li>
        </ol>

        <p>1. <span class="mise_en_valeur1">Avec la boucle</span> <strong>for</strong></p>
        <p class="citation_code_balise">
        &lt;?php
        /**
         * Déclaration du tableau des recettes
         * Chaque élément du tableau est un tableau numéroté (une recette)
         */
        $recipes = [
            ['Tarte au citron','[...]','clementine.degaine@gmail.com',true,],
            ['Samoussas','[...]','psykadelicdream@free.fr',false,],
        ];
        for ($lines = 0; $lines <= 1; $lines++) {
            echo $recipes[$lines][0];
        }
        </p>
        <p>Quand on écrit <strong>$recipes[$lines]</strong>, la variable <strong>$lines</strong> est d’abord remplacée par sa valeur.<br />
        Ansi, si <strong>$lines</strong> vaut 1, cela signifie qu'on cherche ce que contient $recipes[1][0] , c'est-à-dire : Samoussas.</p>
        
        <p>2. <span class="mise_en_valeur1">Avec la boucle</span> <strong>foreach</strong><br /><br />
        La boucle <strong>for</strong> a beau fonctionner, on peut utiliser un autre type de boucle, plus adapté aux tableaux : <strong>foreach</strong>.<br />
        <strong>foreach</strong> passe en revue chaque ligne du tableau, lors de chaque passage, elle met la valeur de cette ligne dans une variable temporaire (par exemple <strong>$element</strong>), exemple :
        </p>
        <p class="citation_code_balise">
        &lt;?php
        // Déclaration du tableau des recettes
        $recipes = [
            ['Tarte au citron','[...]','clementine.degaine@gmail.com',true,],
            ['Samoussas','[...]','psykadelicdream@free.fr',false,],
        ];
        foreach ($recipes as $recipe) {
            echo $recipe[0]; // Affichera Tarte au citron, puis Samoussas
        }
        </p>
        <p>C'est le même code que tout à l'heure, mais cette fois basé sur une boucle <strong>foreach</strong>.<br />
        À chaque tour de boucle, la valeur de l'élément suivant est mise dans la variable <strong>$recipe</strong>.<br />
        On peut donc utiliser <strong>$recipe</strong> uniquement à l'intérieur de la boucle, pour afficher l'élément en cours.<br />
        L'avantage de <strong>foreach</strong>, c'est qu'il permet aussi de parcourir les tableaux associatifs.</p>
        <p class="citation_code_balise">
        &lt;?php
        $recipe = [
            'title' => 'Tarte au citron',
            'recipe' => 'Etape 1 : des beaux citrons, Etape 2 : ...',
            'author' => 'clementine.degaine@gmail.com',
            'enabled' => true,
        ];
        foreach ($recipe as $value) {
            echo $value;
        }
        /**
         * AFFICHE
         * Tarte au citronEtape 1 : des beaux citrons, Etape 2 : ...clementine.degaine@gmail.com1
         */
        </p>
        <p><strong>foreach</strong> va mettre tour à tour dans la variable <strong>$value</strong> :</p>
        <ol>
        <li>Le titre de la recette</li>
        <li>Les étapes de la recette</li>
        <li>L'auteur</li>
        <li>Et la réponse à "enabled"</li>
        </ol>
        <p>.. contenus dans le tableau <strong>$recipe</strong></p>
        <p>On met donc entre parenthèses :</p>
        <ol>
            <li>D'abord le <span class="mise_en_valeur1">nom du tableau</span>, ici <strong>$recipe</strong></li>
            <li>Ensuite le <span class="mise_en_valeur1">mot-clé</span> <strong>as</strong> (qui signifie "en tant que"»")</li>
            <li>Enfin, le <span class="mise_en_valeur1">nom d'une variable</span> que l'on choisit, et qui va contenir tour à tour chacune des valeurs du tableau, ici <strong>$value</strong></li>
        </ol>
        <p>Entre les accolades, on n'utilise donc que la variable <strong>$recipe</strong>.<br />
        La boucle s'arrête lorsqu'on a parcouru tous les éléments de l'array.<br />
        L'intérêt devient encore plus flagrant quand on utilise un tableau de tableaux :</p>
        <p class="citation_code_balise">
        &lt;?php
        $recipes = [
            [
                'title' => 'Tarte au citron',
                'recipe' => '',
                'author' => 'clementine.degaine@gmail.com',
                'is_enabled' => true,
            ],
            [
                'title' => 'Samoussas',
                'recipe' => '',
                'author' => 'psykadelicdream@free.fr',
                'is_enabled' => false,
            ],
            [
                'title' => 'Soupe d’épinard',
                'recipe' => '',
                'author' => ‘clementine.degaine@gmail.com',
                'is_enabled' => true,
            ],
            [
                'title' => 'Salade de fleurs',
                'recipe' => '',
                'author' => 'psykadelicdream@free.fr’
                'is_enabled' => false,
            ],
        ];

        foreach($recipes as $recipe) {
            echo $recipe['title'] . ' contribué(e) par : ' . $recipe['author'] . PHP_EOL; 
        }
        </p>
        <p>Qui produit le résultat suivant :</p>
        <p class="citation_console">
        $ php exemple.php
        Tarte au citron contribué(e) par : clementine.degaine@gmail.com
        Samoussas contribué(e) par :  psykadelicdream@free.fr
        Soupe d’épinard contribué(e) par : clementine.degaine@gmail.com
        Salade de fleurs contribué(e) par :  psykadelicdream@free.fr
        </p>
        <p>
        Toutefois, avec cet exemple, on ne récupère que la valeur; Or, on peut aussi récupérer la clé de l'élément.<br />
        On doit dans ce cas écrire <strong>foreach</strong>, comme ceci :</p>
        <p class="citation_code_balise">

        &lt;?php foreach($recipe as $property => $propertyValue) ?&gt;
        </p>
        <p>À chaque tour de boucle, on disposera non pas d'une, mais de deux variables :</p>
        <ol>
            <li><strong>$property</strong> qui <span class="mise_en_valeur1">contiendra la clé de l'élément en cours d'analyse</span> ("title", "author", etc..)</li>
            <li><strong>$propertyValue</strong> qui <span class="mise_en_valeur1">contiendra la valeur de l'élément en cours d'analyse</span> ("Tarte au citron", "clementine.degaine@gmail.com", etc..)</li>
        </ol>
        <p>Autre exemple :</p>
        <p class="citation_code_balise">
        &lt;?php
        $recipe = [
            'title' => 'Salade de fleurs',
            'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
            'author' => 'psykadelicdream@free.fr',
        ];
        foreach($recipe as $property => $propertyValue)
        {
            echo '[' . $property . '] vaut ' . $propertyValue . PHP_EOL;
        }
        </p>
        <p>Qui aura le résultat suivant :</p>
        <p class="citation_console">
        $ php exemple.php 
        [title] vaut Salade de fleurs
        [recipe] vaut Etape 1 : Lavez la salade ; Etape 2 : euh ...
        [author] vaut psykadelicdream@free.fr
        </p>
        <p>Avec cette façon de procéder, on a maintenant dans la boucle la clé ET la valeur.</p>

        <p>3. <span class="mise_en_valeur1">Avec la fonction</span> <strong>print_r</strong><br /><br />
        Parfois, en codant son site en PHP, on aura sur les bras un tableau et on voudra savoir ce qu'il contient, juste pour information.<br />
        On pourrait utiliser une boucle <strong>for</strong> ou mieux, une boucle <strong>foreach</strong>, mais si on a pas besoin d’une mise en forme spéciale et qu’on veut juste savoir ce que contient le tableau, on peut faire appel à la fonction <strong>print_r</strong> qui est une sorte de <strong>echo</strong> spécialisée dans les tableaux.<br /><br />
        Cette commande a toutefois un défaut : Elle ne renvoie pas de code HTML comme &lt;br /&gt; pour les retours à la ligne, donc pour bien les voir, il faut utiliser la balise HTML &lt;pre&gt;  qui permet d'avoir un affichage plus correct.</p>
        <p class="citation_code_balise">
        &lt;?php

        $recipes = [
            [
                'title' => 'Tarte au citron',
                'recipe' => '',
                'author' => 'clementine.degaine@gmail.com',
                'is_enabled' => true,
            ],
            [
                'title' => 'Samoussas',
                'recipe' => '',
                'author' => 'psykadelicdream@free.fr',
                'is_enabled' => false,
            ],
        ];

        echo '&lt;pre&gt;';
        print_r($recipes);
        echo '&lt;/pre&gt;';
        </p>
        <p>Donnera :</p>
        <p class="citation_console">
        Array
        (
            [0] => Array
                (
                    [title] => Tarte au citron
                    [recipe] => 
                    [author] => clementine.degaine@gmail.com 
                    [is_enabled] => 1
                )
            [1] => Array
                (
                    [title] => Samoussas
                    [recipe] => 
                    [author] => psykadelicdream@free.fr
                    [is_enabled] =>
                )
        )
        </p>
        <p>Bien entendu, on affichera jamais des choses comme ça à nos visiteurs; On peut en revanche s'en servir pour le déboggage, pendant la création du site, afin de voir rapidement ce que contient le tableau.</p>
        
        <h2>Rechercher dans un tableaux</h2>
        <p>
        Faire une recherche dans un tableau est utile afin de savoir s’il contient ou non certaines informations.<br />
        Pour cela, il existe trois types de recherches, basées sur des fonctions PHP :</p>
        <ul>
            <li><strong>array_key_exists</strong> pour vérifier si une clé existe dans le tableau</li>
            <li><strong>in_array</strong> pour vérifier si une valeur existe dans le tableau</li>
            <li><strong>array_search</strong> pour récupérer la clé d'une valeur dans le tableau</li>
        </ul>

        <p class="mise_en_valeur1">~ Vérifiez si une clé existe dans un tableau avec <strong>array_key_exists</strong></p>
        <p>Voici notre problème : On a un array, mais on ne sait pas si la clé qu'on cherche s'y trouve.<br />
        Pour vérifier ça, on va utiliser la fonction <strong>array_key_exists</strong> qui va parcourir le tableau pour nous, et nous dire s'il contient cette clé.</p>
        <p>On doit lui donner :</p>
            <ol>
                <li>Le nom de la clé à rechercher</li>
                <li>Puis le nom du tableau dans lequel on fait la recherche</li>
            </ol>
        <p class="citation_code_balise">&lt;?php array_key_exists('cle', $array); ?&gt;</p>
        <p>La fonction renvoie un booléen :</p>
        <ul>
            <li><strong>true</strong> (vrai) si la clé est dans le tableau</li>
            <li><strong>false</strong> (faux) si la clé ne s'y trouve pas</li>
        </ul>
        <p>Ça nous permet de faire un test facilement avec un <strong>if</strong> :</p>
        <p class="citation_code_balise">
        &lt;?php
        $recipe = [
            'title' => 'Salade de fleurs',
            'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
            'author' => 'psykadelicdream@free.fr',
        ];
        if (array_key_exists('title', $recipe))
        {
            echo 'La clé "title" se trouve dans la recette !';
        }

        if (array_key_exists('commentaires', $recipe))
        {
            echo 'La clé "commentaires" se trouve dans la recette !';
        }
        </p>
        <p class="citation_console">
        $ php exemple.php 
        La clé "title" se trouve dans la recette !
        </p>
        <p>Ici étant donné que “title” est présent mais "commentaires", seule la première condition sera donc exécutée.</p>

        <p class="mise_en_valeur1">~ Vérifiez si une valeur existe dans un tableau avec <strong>in_array</strong></p>
        <p>Le principe est le même que <strong>array_key_exists</strong> mais cette fois on recherche dans les valeurs.<br />
        in_array renvoie :</p>
            <strong>true</strong> si la valeur se trouve dans le tableau
            <strong>false</strong> si elle ne s'y trouve pas
            <p>Exemple :</p>
             <p class="citation_code_balise">
            &lt;?php
            $users = [
                'Clémentine Degaine',
                'Antoine Giraud',
                'Erell Quere',
            ];
            if (in_array('Clémentine Degaine', $users))
            {
                echo 'Clémentine fait bien partie des utilisateurs enregistrés !';
            }

            if (in_array('Fab Merlin', $users))
            {
                echo 'Fab fait bien partie des utilisateurs enregistrés !';
            }
         </p>
        <p>Résultat :</p>
        <p class="citation_console">
        $ php exemple.php
        Clémentine fait bien partie des utilisateurs enregistrés !
        </p>
        <p>On ne voit que le message pour Clémentine, car Fab ne fait pas partie des utilisateurs enregistrés.</p>
        <p class="mise_en_valeur1">~ Récupérez la clé d'une valeur dans un tableau avec <strong>array_search</strong></p>
        <strong>array_search</strong> fonctionne comme <strong>in_array</strong> : il travaille sur les valeurs d'un tableau<br />
        Voici ce que renvoie la fonction :</p>
        <ul>
            <li>Si elle a trouvé la valeur, <strong>array_search</strong> renvoie la clé correspondante (dans le cas d'un tableau numéroté, la clé sera un numéro, dans le cas d'un tableau associatif, la clé sera un nom)</li>
            <li>Si elle n'a pas trouvé la valeur, <strong>array_search</strong> renvoie <strong>false</strong></li>
        </ul>
        <p class="citation_code_balise">
        &lt;?php
        $users = [
            'Clémentine Degaine',
            'Antoine Giraud',
            'Blandine Tardieu',
        ];
        $positionClementine = array_search('Clémentine Degaine', $users);
        echo '"Clémentine" se trouve en position ' . $positionClementine . PHP_EOL;
        $positionBlandine = array_search('Blandine Tardieu', $users);
        echo '"Blandine" se trouve en position ' . $positionLaurène . PHP_EOL;
        </p>
        <p class="citation_console">
        $ php exemple.php 
        "Clémentine" se trouve en position 0
        "Blandine" se trouve en position 2
        </p>
        <p class="mise_en_valeur2">Pour rappel, car très important, un tableau en PHP commence à la valeur 0 et non la valeur 1, ce qui explique pourquoi Clém se retrouve en position 0 et Blandine en position 2.</p>

        <h1 id="ancre_sur_les_fonctions">Les fonctions</h1>
        <p>Une fonction est une série d'instructions qui effectue des actions et qui retourne une valeur.<br />
        En général, dès qu’on besoin d'effectuer des opérations un peu longues dont on a à nouveau besoin plus tard, il est conseillé de vérifier s'il n'existe pas déjà une fonction qui fait cela pour nous, et si la fonction n'existe pas, on peut aussi la créer.</p>
    
        <h2>Principe d’une fonction</h2>
        <p>Voici le genre de dialogue qu'on peut avoir avec une fonction :<br />
        "Toi, la fonction allowRecipe  , dis-moi si j'ai le droit d'afficher cette recette".<br />
        La fonction effectue les calculs demandés puis répond :<br />
        "Oui, tu peux".</p>
        <p>En clair, ici :</p>
        <ul>
            <li>On donne en entrée à la fonction un <span class="mise_en_valeur1">paramètre</span> sur lequel elle va faire des calculs (ici, une recette sous forme d'un tableau)</li>
            <li>Et la fonction nous retourne en sortie le résultat :  true</li>
        </ul>
        <p class="citation_code_balise">
        &lt;?php

        $recipe = [
            'title' => 'Salade de fleurs',
            'recipe' => '',
            'author' => 'psykadelicdream@free.fr',
            'is_enabled' => true,
        ];
        allowRecipe($recipe); // retourne le booléen true
        </p>
        <p>
        Grâce à la fonction, on a pas besoin de se souvenir de la manière dont on décide si une recette doit être affichée ou non.<br />
        Bon, ici c'était assez simple : il suffisait de vérifier la valeur de la clé <strong>is_enabled</strong>.<br />
        Mais on sera souvent amené à faire des opérations de plus en plus complexes, et les fonctions permettront de ne pas avoir à se soucier des détails des calculs.<br /><br />
        Les fonctions deviennent pratiques quand on a besoin de l'information plusieurs fois, et qu'il y a plusieurs conditions à respecter, imaginons par exemple que les conditions pour l'affichage d'une recette évoluent :</p>
        <ul>
            <li>La clé <strong>is_enabled</strong> est <strong>true</strong></li>
            <li>L'utilisateur doit être connecté</li>
            <li>L'utilisateur doit avoir un rôle administrateur</li>
            <li>L'utilisateur doit être majeur</li>
            <li>Etc..</li>
        </ul>
        <p>
        Nous n’allons pas recopier et implémenter toutes ces instructions à chaque fois, on va utiliser une fonction dont le rôle sera de retourner <strong>true</strong> ou <strong>false</strong>.<br />
        Il suffit ici de transmettre l'array <strong>$recipe</strong> à notre fonction pour qu'elle nous retourne le résultat.<br />
        Ces informations que l'on donne en entrée à la fonction sont appelées <span class="mise_en_valeur1">paramètres</span>.</p>

        <h2>Appel d’une fonction</h2>
        <p>En PHP, on appelle une fonction par son nom, exemple :</p>
        <p class="citation_code_balise">
        &lt;?php
        /**
         * Il n'est pas nécessaire de déclarer une variable $recipe
         * pour passer l'information en tant que paramètre d'une fonction.
         */
        allowRecipe([
            'title' => 'Escalope milanaise',
            'recipe' => '',
            'author' => 'psykadelicdream@free.fr',
            'is_enabled' => true,
        ]);
        </p>
        <p>Ainsi, <strong>allowRecipe</strong> saura qu'elle doit travailler avec le tableau PHP passé en paramètre.<br /><br />

        Souvent, les fonctions acceptent plusieurs paramètres, dans ce cas on doit les séparer par des virgules, exemple :</p>
        <p class="citation_code_balise">
        &lt;?php
        fonctionImaginaire(17, 'Vert', true, 41.7);
        </p>
        <p>Cette fonction recevra quatre paramètres : 17, le texte « Vert », le booléen Vrai, et le nombre 41,7.</p>

        <h2>Récupération d’une fonction</h2>
        <p>Il existe deux types de fonctions :</p>
        <ul>
            <li>Celles qui ne retournent aucune valeur (mais elles effectuent quand même des actions)</li>
            <li>Celles qui retournent une valeur</li>
        </ul>
        <p>Si la fonction retourne une valeur (comme ça devrait être le cas pour <strong>allowRecipe</strong>), on la récupère dans une variable, comme ceci :</p>
        <p class="citation_code_balise">
        &lt;?php
        $isAllowed = allowRecipe([
            'title' => 'Salade de fleurs',
            'recipe' => '',
            'author' => 'psyakdelicdream@free.fr',
            'is_enabled' => true,
        ]);
        if ($isAllowed) {
            echo 'La recette doit être affichée !';
        } else {
            echo 'La recette doit être cachée !';
        }
        </p>

        <p>Sur une ligne comme celle-ci, il se passe en fait les deux choses suivantes (dans l'ordre, et de droite à gauche) :</p>
            <ol>
                <li>La <span class="mise_en_valeur1">fonction</span> <strong>allowRecipe</strong> est <span class="mise_en_valeur4">appelée</span> avec un <span class="mise_en_valeur1">tableau</span> en <span class="mise_en_valeur1">paramètre</span></li>
                <li>Le <span class="mise_en_valeur1">résultat</span> <span class="mise_en_valeur4">renvoyé</span> par la <span class="mise_en_valeur1">fonction</span> (lorsqu'elle a terminé) est <span class="mise_en_valeur4">stocké</span> dans la <span class="mise_en_valeur1">variable</span> <strong>$isAllowed</strong></li>
            </ol>
        <p>La variable <strong>$isAllowed</strong> aura donc pour valeur <strong>true</strong> après l'exécution de cette ligne de code !<br />
        Bon à savoir, comme on l'a vu il est possible d'envoyer en entrée plusieurs paramètres à une fonction, en revanche, cette dernière ne peut retourner qu'une seule valeur.<br />
        Il existe un moyen de contourner cette limitation en <span class="mise_en_valeur4">combinant des variables au sein d'un tableau de variables</span> (appelé array) dont on a parlé précédemment.</p>

        <h2>Utiliser les fonctions prêtes à l’emploi</h2>
        <p>PHP propose des centaines de fonctions prêtes à l'emploi.<br />
        Sur le site officiel, la documentation PHP les répertorie toutes, elles sont accessibles ici : <a href="http://fr.php.net/manual/fr/funcref.php" title="fonctions classées par catégorie" alt="fonctions classées par catégorie" target="_blank">fonctions classées par catégorie</a>.<br />
        C’est en partie là que réside la force de PHP, ses fonctions couvrent la quasi-totalité de nos besoins.</p>
        <p>Voici un petit aperçu de ce que peuvent nous permettre de faire des fonctions PHP :</p>
        <ul>
            <li><strong>str_replace</strong> pour rechercher et remplacer des mots dans une variable</li>
            <li><strong>move_uploaded_file</strong> pour envoyer un fichier sur un serveur</li>
            <li><strong>imagecreate</strong> pour créer des images miniatures (aussi appelées "thumbnails")</li>
            <li><strong>mail</strong> pour envoyer un mail avec PHP (très pratique pour faire une newsletter)</li>
            <li>de nombreuses options pour modifier des images, y écrire du texte, tracer des lignes, des rectangles, etc..</li>
            <li><strong>crypt</strong> pour chiffrer des mots de passe</li>
            <li><strong>date</strong> pour renvoyer l'heure, la date, etc..</li>
        </ul>
        <p>Dans la plupart des cas, il faudra indiquer des paramètres à la fonction, pour qu'elle sache sur quoi travailler.<br />
        Voici quatre exemples de fonctions et de leur utilisation :</p>
        <ol>
            <li><strong>strlen</strong> <span class="mise_en_valeur4">pour calculer la longueur d'une chaîne de caractères</span><br />
            Exemple :
            <p class="citation_code_balise">
            &lt;?php
            $recipe = 'Etape 1 : des fleurs ! Etape 2 : de la mâche';
            $length = strlen($recipe);

            echo 'La phrase ci-dessous comporte ' . $length . ' caractères :' . PHP_EOL . $recipe;
            </p>
            <p class="citation_console">
            $ php exemple.php
            La phrase ci-dessous comporte 44 caractères :
            Etape 1 : des fleurs ! Etape 2 : de la mâche
            </p>
            <p>
            Dans le même ordre d'idée, la fonction count permet aussi de compter le nombre d'éléments dans un tableau, car en PHP une chaîne de caractères, c'est un tableau de caractères !</p>
            </li>
            <li><strong>str_replace</strong> <span class="mise_en_valeur4">pour rechercher et remplacer une chaîne de caractères</span><br />
            Exemple :
            <p class="citation_code_balise">
            &lt;?php
            echo str_replace('c', 'C', 'la tarte au citron, c\'est très bon');
            </p>
            <p class="citation_console">
            $ php exemple.php
            la tarte au Citron, C’est très bon
            </p>
            <p>On a besoin d'indiquer trois paramètres :</p>
            <ol>
                <li>La chaîne qu'on recherche, ici les "c" (on aurait très bien pu rechercher un mot aussi)</li>
                <li>La chaîne qu'on veut mettre à la place, ici on met des "C" à la place des “c”</li>
                <li>La chaîne dans laquelle on doit faire la recherche</li><br />
            </ol>
            </li>
            <li><strong>sprintf</strong> <span class="mise_en_valeur4">pour formater une chaîne de caractères</span><br />
            Elle est très pratique lorsque nous avons besoin de passer plusieurs variables et elle peut remplacer la concaténation pour des raisons de lisibilité du code, exemple :
            <p class="citation_code_balise">
            &lt;?php
            $recipe = [
                'title' => 'Salade de fleurs',
                'recipe' => 'Etape 1 : Laver la salade ; Etape 2 : euh ...',
                'author' => 'psykadelicdream@free.fr',
            ];
            echo sprintf(
                '%s par "%s" : %s',
                $recipe['title'],
                $recipe['author'],
                $recipe['recipe']
            );
            </p>
            <p class="citation_console">
            $ php exemple.php
            Salade de fleurs par "psykadelicdream@free.fr" : Etape 1 : Laver la salade ; Etape 2 : euh ...
            </p>
            </li><br />
            <li><strong>date</strong> <span class="mise_en_valeur4">permet de récupérer la date, elle renvoie l’heure, les minutes et d’autres informations</span>, voici les principaux paramètres :
            <table>
            <tr>
                <td span class="gras">Paramètre</td>
                <td span class="gras">Description</td>
            </tr>
            <tr>
                <td>H</td>
                <td>Heure</td>
            </tr>
            <tr>
                <td>i</td>
                <td>Minute</td>
            </tr>
            <tr>
                <td>d</td>
                <td>Jour</td>
            </tr>
            <tr>
                <td>m</td>
                <td>Mois</td>
            </tr>
            <tr>
                <td>Y</td>
                <td>Année</td>
            </tr>
            </table>
            Attention il faut bien respecter les minuscules et majuscules selon ce que l’on souhaite récupérer, c’est important.<br />
            Si on veut afficher l’année, il faut envoyer le paramètre Y à la fonction :
            <p class="citation_code_balise">
            &lt;?php
            $year = date('Y');
            echo $annee;
            </p>
            Autre exemple, avec la date complète et l’heure :
            <p class="citation_code_balise">
            &lt;?php
            // Enregistrons les informations de date dans des variables
            $day = date('d');
            $month = date('m');
            $year = date('Y');

            $hour = date('H');
            $minut = date('i');
            // Maintenant on peut afficher ce qu'on a recueilli
            echo 'Bonjour ! Nous sommes le ' . $day . '/' . $month . '/' . $year . 'et il est ' . $hour. ' h ' . $minut;
            ?&gt;
            </p>
            Un code à retenir pour marquer par exemple l’heure et la date sur un site, ou afficher l’heure et la date d’ajout d’un post d’un utilisateur sur un forum par exemple.
            </li>
        </ol>

        <h2>Créer ses propres fonctions</h2>
        <p>Bien que PHP propose des centaines de fonctions, parfois il n’y aura pas ce qu’on cherche, aussi il faudra l’écrire nous même, c’est une façon pratique d’étendre les possibilités offertes par PHP, en plus <span class="mise_en_valeur4">on pourra la réutiliser plus tard</span> pour d’autres sites par exemple si on le souhaite.<br />
        On écrit une fonction quand, en général, on a des opérations un peu complexes qu’on pense avoir besoin de faire régulièrement.<br /><br />
        Ici on va décrouvrir la création de fonctions à travers trois exemples :</p>
        <ol>
            <li class="mise_en_valeur4">Vérifier si la recette est valide</li>
            <li class="mise_en_valeur4">Récupérer des recettes à afficher</li>
            <li class="mise_en_valeur4">Récupérer le nom d'un utilisateur en fonction de l'e-mail associé à la création d'une recette</li>
        </ol>
        <p><span class="mise_en_valeur1">Vérifier si la recette est valide</span><br />
        Un premier exemple simple, c'est d'établir une fonction qui retourne :</p>
            <ul>
                <li><strong>true</strong> si la recette est valide</li>
                <li><strong>faux</strong> si la recette ne l'est pas</li>
            </ul>
        <p>Pour cela, nous avions utilisé une condition <strong>if</strong> pour vérifier la propriété <strong>is_enabled</strong> de la recette, la voici pour rappel :</p>
        <p class="citation_code_balise">
        &lt;?php
        $recipe = [
            'title' => 'Salade de fleurs',
            'recipe' => 'Etape 1 : Laver la salade ; Etape 2 : euh ...',
            'author' => 'psykadelicdream@free.fr',
            'is_enabled' => true,
        ];
        // au minimum
        if ($recipe['is_enabled']) {
            return true;
        } else {
            return false;
        }
        // mieux
        $isEnabled = $recipe['is_enabled'];
        // encore mieux !
        if (array_key_exists('is_enabled', $recipe)) {
            $isEnabled = $recipe['is_enabled'];
        } else {
            $isEnabled = false;
        }
        </p>
        <p>On va quand même pas réécrire ça à chaque fois qu'on a besoin de vérifier si une recette est valide, et bien non car on va créer une fonction pour reprendre ceci, voici donc la fonction correspondante :</p>
        <p class="citation_code_balise">
        &lt;?php

        function isValidRecipe(array $recipe) : bool
        {
            if (array_key_exists('is_enabled', $recipe)) {
                $isEnabled = $recipe['is_enabled'];
            } else {
                $isEnabled = false;
            }
            return $isEnabled;
        }
        </p>
        <p>Pour créer une fonction :</p>
            <ol>
                <li><span class="mise_en_valeur1">On tape function</span> (en français, ça veut dire “fonction”)</li>
                <li>Ensuite, <span class="mise_en_valeur1">on lui donne un nom</span>, par exemple, celle-ci s'appelle <strong>isValidRecipe</strong></li>
            </ol>
        <p>Ce qui est plus particulier après, c'est ce qu'on met entre parenthèses : Il y a une <span class="mise_en_valeur1">variable</span>.<br />
        C'est le paramètre dont a besoin la fonction pour travailler, ici il s'agit de notre tableau.<br />
        Nous pouvons (et c'est une bonne pratique) définir le type de la variable attendue : Ici, nous souhaitons un tableau donc nous préfixons la variable <strong>$recipe</strong> par le mot-clé <strong>array</strong>.<br /><br />
        Notre fonction doit forcément être appelée avec un paramètre (une recette), sans quoi elle va générer une erreur.<br />
        On remarquera que cette ligne est la seule <span class="mise_en_valeur4">à ne pas se terminer par un point-virgule</span>, c'est normal, <span class="mise_en_valeur1">il ne s'agit pas d'une instruction</span> mais juste d'une "carte d'identité" de la fonction (son nom, ses paramètres…).<br /><br />
        Notre fonction peut aussi (et c'est une deuxième bonne pratique) donner un <span class="mise_en_valeur1">type de retour</span>, c'est-à-dire le <span class="mise_en_valeur1">type de valeur que la fonction doit retourner</span>.<br />
        Ici, nous récupérons soit <strong>true</strong>, soit <strong>false</strong> donc le <span class="mise_en_valeur1">type</span> est <strong>bool</strong>.<br /><br />
        Ensuite, on a des accolades, elles permettent de marquer les limites de la fonction.<br />
        Voilà, la fonction est créée, on a plus besoin d'y toucher.<br /><br />
        Après, <span class="mise_en_valeur4">pour faire appel à elle, il suffit d'indiquer son nom, et de préciser ses paramètres entre parenthèses</span> (<span class="mise_en_valeur1">il ne faut pas oublier le point-virgule (<strong>;</strong>), car il s'agit d'une instruction</span>), exemple :</p>
        <p class="citation_code_balise">
        &lt;?php

        // 2 exemples
        $fleursSalad = [
            'title' => 'Salade de fleurs',
            'recipe' => 'Etape 1 : Laver la salade ; Etape 2 : euh ...',
            'author' => 'psykadelicdream@free.fr',
            'is_enabled' => true,
        ];
        $wrap = [
            'title' => 'Wrap',
            'recipe' => 'Etape 1 : des wrap ; Etape 2 : des graines germées',
            'author' => 'psykadelicdream@free.fr',
            'is_enabled' => false,
        ];
        // Répond true !
        $is FleursSaladValid = isValidRecipe($fleursSalad);
        // Répond false !
        $isWrapValid = isValidRecipe($wrap);
        </p>
        <p><span class="mise_en_valeur1">Récupérer des recettes à afficher</span><br />
        Nous venons de créer la fonction qui permet de vérifier qu'une recette est valide, il nous manque maintenant à boucler sur la liste des recettes : Voilà une première occasion de réutiliser la fonction créée précédemment !</p>
        <p class="citation_code_balise">
        &lt;?php
        $recipes = [...]; // Les recettes

        // AVANT
        foreach ($recipes as $recipe) {
            if ($recipe['is_enabled']) {
                // echo $recipe['title'] ..
            }
        }
        // APRES

        function getRecipes(array $recipes) : array
        {
            $validRecipes = [];

            foreach($recipes as $recipe) {
                if (isValidRecipe($recipe)) {
                    $validRecipes[] = $recipe;
                }
            }
            return $validRecipes;
        }
        // construire l'affichage HTML des recettes
        foreach(getRecipes($recipes) as $recipe) {
            // echo $recipe['title'] .. 
        }
        </p>
        <p>
        Ici, la fonction contient le code nécessaire à la récupération des recettes valides.<br />
        Il n'est pas nécessaire d'assigner le résultat d'une fonction à une variable, nous voyons ici que nous passons directement la fonction <strong>getRecipes</strong> dans la boucle (nous savons que c'est un tableau parce que nous avons défini le type de retour).</p>
        <p><span class="mise_en_valeur1">Récupérer le nom d'un utilisateur en fonction de l'e-mail associé à la création d'une recette
        </span><br />
        Nous allons créer une fonction pour améliorer l'affichage, ce qui nous donne à nouveau l'occasion de manipuler des tableaux.<br /><br />
        Cette fois, la problématique est de relier l'e-mail associé à un compte utilisateur à l'e-mail utilisé pour la contribution d'une recette.<br /><br />
        Si on découpe le problème en étapes, on a déjà toutes les connaissances nécessaires :</p>
        <ol>
            <li>Boucler sur les recettes valides</li>
            <li>Prendre l'e-mail</li>
            <li>Boucler sur les utilisateurs de la plateforme</li>
            <li>Si les e-mails correspondent, prendre le nom</li>
            <li>Sinon, continuer à parcourir la liste des utilisateurs</li>
        </ol>
        <p>Une solution tout à fait valide serait donc celle-ci (avec une boucle dans une boucle) :</p>
        <p class="citation_code_balise">
        &lt;?php

        $users = [
            [
                'full_name' => 'Clémentine Degaine',
                'email' => 'clementine.degaine@gmail.com',
                'age' => 41,
            ],
            [
                'full_name' => 'Antoine Giraud',
                'email' => 'psykadelicdream@free.fr',
                'age' => 37,
            ],
        ];

        $recipes = [
            [
                'title' => 'Salade de fleurs',
                'recipe' => '',
                'author' => 'psykadelicdream@free.fr',
                'is_enabled' => true,
            ],
            [
                'title' => 'Tarte au citron',
                'recipe' => '',
                'author' => 'clementine.degaine@gmail.com',
                'is_enabled' => false,
            ],
            [
                'title' => 'Samoussas',
                'recipe' => '',
                'author' => 'psykadelicdream@free.fr',
                'is_enabled' => true,
            ],
            [
                'title' => 'Wrap',
                'recipe' => '',
                'author' => 'clementine.degaine@gmail.com',
                'is_enabled' => false,
            ],
        ];

        function displayAuthor(string $authorEmail, array $users) : string
        {
            for ($i = 0; $i &lt; count($users); $i++) {
                $author = $users[$i];
                if ($authorEmail === $author['email']) {
                    return $author['full_name'] . '(' . $author['age'] . ' ans)';
                }
            }
        }

        function isValidRecipe(array $recipe) : bool
        {
            if (array_key_exists('is_enabled', $recipe)) {
                $isEnabled = $recipe['is_enabled'];
            } else {
                $isEnabled = false;
            }
            return $isEnabled;
        }

        function getRecipes(array $recipes) : array
        {
            $valid_recipes = [];

            foreach($recipes as $recipe) {
                if (isValidRecipe($recipe)) {
                    $valid_recipes[] = $recipe;
                }
            }

            return $valid_recipes;
        }

        ?&gt;
        &lt;!DOCTYPE html&gt;
        &lt;html lang="en"&gt;
        &lt;head&gt;
            &lt;title&gt;Recettes de cuisine&lt;/title&gt;
            &lt;link
                href="https://monsite.fr/css/style.css" 
                rel="stylesheet"
            &gt;
        &lt;/head&gt;
        &lt;body&gt;
            &lt;div class="container"&gt;
                &lt;h1&gt;Liste des recettes de cuisine&lt;/h1&gt;

                &lt;?php foreach(getRecipes($recipes) as $recipe) : ?&gt;
                    &lt;article&gt;
                        &lt;h3&gt;&lt;?php echo $recipe['title']; ?&gt;&lt;/h3&gt;
                        &lt;div&gt;&lt;?php echo $recipe['recipe']; ?&gt;&lt;/div&gt;
                        &lt;i&gt;&lt;?php echo displayAuthor($recipe['author'], $users); ?&gt;&lt;/i&gt;
                    &lt;/article&gt;
                &lt;?php endforeach ?&gt;
            &lt;/div&gt;   
        &lt;/body&gt;
        &lt;/html&gt;
        </p>

        <h1 id="ancre_sur_les_plantages">Plantage de script</h1>
        <p>Il arrive souvent que le script PHP ne soit pas bon du premier coup, aussi une ou plusieurs erreurs peuvent s’afficher.<br />
        Voici une présentation des erreurs les plus courantes, ce qui devrait résoudre la grande majorité de nos problèmes (<span class="mise_en_valeur2">petit rappel sur comment activer les erreurs PHP <a href=#ancre_sur_les_erreurs>ici</a>)</span></p>
       
        <h2>Les erreurs courantes</h2>
        <p>Certaines erreurs reviennent plus souvent que d’autres, c’est le cas des trois suivantes :</p>
        <ul>
            <li><strong>Parse error</strong> : <span class="mise_en_valeur4">Si on formule mal une instruction</span></li>
            <li><strong>Undefined function</strong> : <span class="mise_en_valeur4">Si on utilise une fonction non reconnue</span></li>
            <li><strong>Wrong parameter count</strong> : <span class="mise_en_valeur4">Si on entre un nombre inccorect de paramètres pour une fonction</span></li>
        </ul>
        <p class="mise_en_valeur1">Parse error</p>
        <p>Exemple :</p>
        <p class="citation_console">Parse error: syntax error in error.php on line 7</p>
        <p>Ce message indique une erreur dans error.php à la ligne 7, mais ce n'est pas toujours le cas, parfois, c'est la ligne précédente qui a un problème : Il faut donc penser à regarder autour de la ligne indiquée.<br />
        Une <strong>parse error</strong> est en fait une instruction PHP mal formée.<br />
        Il peut y avoir plusieurs causes :</p>
        <ul>
            <li><span class="mise_en_valeur4">Oublier le point-virgule à la fin de l'instruction</span>, exemple :
            <p class="citation_code_balise">
            $id_news = 5
            </p>
            <p>Correction :</p>
            <p class="citation_code_balise"> 
            $id_news = 5;
            </p>
            </li>
            <li><span class="mise_en_valeur4">Oublier de fermer un guillemet (une apostrophe ou une parenthèse)</span>, exemple :
            <p class="citation_code_balise">
            echo "Bonjour !;
            </p>
            <p>Correction :</p>
            <p class="citation_code_balise">
            echo "Bonjour !";
            </p>
            </li>
            <li>
            <span class="mise_en_valeur4">Se tromper dans la concaténation et oublier un point</span>, exemple :
            <p class="citation_code_balise">
            echo "J'ai " . $age " ans";
            </p>
            <p>Correction :</p>
            <p class="citation_code_balise">
            echo "J'ai " . $age . " ans";
            </p>
            </li><br />
            <li><span class="mise_en_valeur4">Mal fermer une accolade</span>, cela peut être le cas pour une structure en if, par exemple.<br />
            Si on oublie d'en fermer une, il est probable que la parse error nous indique que l'erreur se trouve à la dernière ligne du fichier (c'est-à-dire à la ligne 115 si le fichier comporte 115 lignes).<br />
            Donc, si on nous indique une erreur à la dernière ligne, il va probablement falloir relire tout le fichier PHP à la recherche d'une accolade mal fermée !
            </li>
        </ul>
        <p class="mise_en_valeur1">Undefined function</p>
        <p>Exemple :</p>
        <p class="citation_console">Fatal Error: Call to undefined function: is_valid_recipe() in fichier.php on line 27</p>
        <p>Là, il faut comprendre que l’on a utilisé une fonction qui n'existe pas.<br />
        Trois possibilités :</p>
        <ul>
            <li><span class="mise_en_valeur4">Soit la fonction n'existe vraiment pas</span>, on a probablement fait une faute de frappe.<br /><br />
            Correction  : <span class="mise_en_valeur4">Vérifier si une fonction à l'orthographe similaire existe.</span><br /><br />
            </li>
            <li><span class="mise_en_valeur4">Soit la fonction existe vraiment, mais PHP ne la reconnaît pas</span>, c'est parce que cette fonction se trouve dans une extension de PHP que l’on a pas activée.<br />
            Par exemple, si on essaie d'utiliser la fonction imagepng alors que l’on a pas activé la bibliothèque nécessaire pour les images en PHP, on nous dira que la fonction n'existe pas.<br /><br />
            Correction : <span class="mise_en_valeur4">Activer la bibliothèque qui utilise la fonction</span>, et tout sera réglé.<br /><br />
            </li>
            <li>Il se peut aussi que l’<span class="mise_en_valeur4">on essaie d'utiliser une fonction qui n'est pas disponible dans la version de PHP que l’on a</span>.<br /><br />
            Correction : Dans ce cas <span class="mise_en_valeur4">vérifier dans le manuel dans quelles versions de PHP cette fonction est disponible</span>.
            </li>
        </ul>
        <p class="citation_console">Wrong parameter count</p>
        <p>Exemple :</p>
        <p class="citation_console">Warning: Wrong parameter count for fonction() in fichier.php on line 112</p>
        <p>Cela veut dire qu’<span class="mise_en_valeur4">on utilise mal une fonction</span>, exemple :</p>
        <ul>
            <li>On a oublié des paramètres pour la fonction</li>
            <li>On alors on en a trop mis</li>
        </ul>
        <p>Correction : S'il s'agit d'une fonction fournie par PHP, <span class="mise_en_valeur4">se rendre sur la documentation et consulter le mode d'emploi de la fonction</span> pour savoir combien de paramètres elle prend, et quels sont ceux qui sont facultatifs.<br />
        Par exemple, la fonction <strong>fopen</strong> requiert au minimum deux paramètres :
        <ul>
            <li>Le premier pour le nom du fichier à ouvrir</li>
            <li>Et le second pour le mode d'ouverture (en lecture seule, écriture, etc.)</li>
        </ul>
        <p>Si on ne met que le nom du fichier à ouvrir, comme ceci :</p>
        <p class="citation_code_balise">$fichier = fopen("fichier.txt");</p>
        <p>
        Dans ce cas on aura l'erreur <strong>Wrong parameter count</strong></p>
        <p>Correction : <span class="mise_en_valeur4">Penser à rajouter le paramètre qui manque</span>, par exemple comme ceci :</p>
        <p class="citation_code_balise">$fichier = fopen("fichier.txt", "r");</p>

        <h2>Les erreurs plus rares</h2>
        <p>Certaines erreurs reviennent plus souvent que d’autres, c’est le cas des trois suivantes :</p>
        <ul>
            <li><strong>Headers already sent by..</strong> : <span class="mise_en_valeur4">Si on écrit du code au mauvais endroit</span></li>
            <li><strong>L'image contient des erreurs</strong> : <span class="mise_en_valeur4">Si on a fait une erreur d'utilisation de la librairie GD</span></li>
            <li><strong>Maximum execution time exceeded</strong> : <span class="mise_en_valeur4">Si on fait une boucle infinie</span></li>
        </ul>
        <p class="mise_en_valeur1">Headers already sent by..</p>
        <p>Voilà une erreur <span class="mise_en_valeur4">classique quand on travaille avec les sessions ou avec les cookies</span> :<br />
        Exemple :</p>
        <p class="citation_code_balise">Cannot modify header information - headers already sent by ...</p>
        <p>Les "headers" sont des informations d'en-tête qui sont envoyées avant toute chose au navigateur du visiteur.<br />
        Elles permettent de dire :<br /><br />
        <span class="mise_en_valeur2">"Ce que tu vas recevoir est une page HTML"</span><br />
        Ou<br />
        <span class="mise_en_valeur2">"Ce que tu vas recevoir est une image PNG", ou encore "Inscris un cookie"</span><br /><br />
        <p>Toutes ces choses-là doivent être effectuées avant que le moindre code HTML ne soit envoyé.<br />
        En PHP, la fonction qui permet d'envoyer des informations de "headers" s'appelle <strong>header()</strong>.<br />
        Il y a d'autres fonctions qui envoient des "headers" toutes seules, c'est le cas de <strong>session_start()</strong> et <strong>setcookie()</strong>.<br /><br />
        Ce que l’on doit retenir, <span class="mise_en_valeur4">c'est que chacune de ces fonctions doit être utilisée au tout début de notre code PHP</span>, <span class="mise_en_valeur1">il ne faut RIEN mettre avant</span>, <span class="mise_en_valeur4">sinon ça provoquera l'erreur</span> <strong>Headers already sent by..</strong>.<br />
        Exemple :</p>
        <p class="citation_code_balise">
        &lt;html&gt;
        &lt;?php session_start(); ?&gt;
        </p>
        <p>Ici, il y a un peu de code HTML avant le <strong>session_start()</strong> et c'est ce qui a provoqué l'erreur.<br /><br />
        Correction : Mettre le <strong>session_start()</strong> en tout premier et on aura plus de problème, cela donne donc :</p>
        <p class="citation_code_balise">
        &lt;?php session_start(); ?&gt;
        &lt;html&gt;
        </p>
        <p class="mise_en_valeur1">L'image contient des erreurs</p>
        <p>C'est le navigateur qui nous donne ce message d'erreur, et non pas PHP, <span class="mise_en_valeur4">ce message survient lorsqu’on travaille avec la bibliothèque GD</span>.<br />
        Si on a fait une erreur dans notre code (par exemple une banale <strong>parse error</strong>), cette erreur sera inscrite dans l'image, du coup l'image ne sera pas valide et le navigateur ne pourra pas l'afficher.<br /><br />

        L’erreur étant dans l’image, comment faire pour faire apparaître l’erreur ?<br />
        Deux possibilités :</p>
        <ul>
            <li><span class="mise_en_valeur4">Supprmer la ligne suivante dans le code</span> :
            <p class="citation_code_balise">
            &lt;?php header ("Content-type: image/png"); ?&gt;
            </p>
            <p>L'erreur apparaîtra à la place du message <strong>L'image contient des erreurs</strong>.</p>
            </li>
            <li><span class="mise_en_valeur4">Afficher le code source de l’image</span> (comme si on allait regarder la source HTML de la page, sauf que là, il s’agit d’une image).
             </li>                   
        </ul>
        <p>Dans les deux cas on verra le message d’erreur apparaître, ensuite il ne restera plus qu’à corriger le bug.</p>
        <p class="mise_en_valeur1">Maximum execution time exceeded</p>
        <p>Exemple :</p>
        <p class="citation_console">Fatal error: Maximum execution time exceeded in fichier.php on line 57</p>
        <p>Imaginons que nous fassions une boucle <strong>while</strong> mais que celle-ci ne s’arrête jamais, notre script PHP va tourner en boucle sans jamais s’arrêter.<br />
        Heureusement, PHP limite le temps d'exécution d'une page PHP à 30 secondes par défaut.<br />
        Si une page met plus de 30 secondes à se générer, PHP arrête tout en signalant que c'est trop long, et il fait bien, parce que sinon cela pourrait ralentir tout le serveur et rendre votre site inaccessible !<br /><br />

        Voici un exemple de boucle while qui ne s'arrêtera jamais :</p>
        <p class="citation_code_balise">
        &lt;?php
        $counter = 5;
        while ($counter == 5)
        {
            echo 'Zéro ';
        }
        ?&gt;
        </p>
        <p>Comme on peut le voir, un tel code PHP ne s’arrêtera jamais parce que $counter vaut toujours 5..<br /><br />
        Correction : Dans le cas de ce message d’erreur, <span class="mise_en_valeur4">il va falloir repérer une boucle qui ne s'arrête jamais</span>, car c'est elle qui provoque ce problème.</p>

        <h2>Déboguer son premier script</h2>
        <p>Voici un exemple de code à corriger :</p>
        <p class="citation_code_balise">
        &lt;?php

        $users = [
            [
                'full_name' => 'Antoine Giraud',
                'email' => 'psykadelicdream@free.fr'
                'age' => 37,
            ],
            [
                'full_name' => 'Clémentine Degaine ',
                'email' => 'clementine.degaine@gmail.com',
                'age' => 41,
            ],
            [
                'full_name' => 'Blandine Tardieu',
                'email' => 'blandine.tardieu@gmail.com',
                'age' => 37,
            ],
        ];
        $recipes = [
            [
                'title' => 'Salade de fleurs',
                'recipe' => '',
                'author' => 'psykadelicdream@free.fr',
                'is_enabled' => true,
            ],
            [
                'title' => 'Wrap',
                'recipe' => '',
                'author' => 'psykadelicdream@free.fr',
                'is_enabled' => false,
            ],
            [
                'title' => 'Tarte au citron',
                'recipe' => '',
                'author' => 'clementine.degaine@gmail.com',
                'is_enabled' => true,
            ],
            [
                'title' => 'Samoussas',
                'recipe' => '',
                'author' => 'blandine.tardieu@gmail.com',
                'is_enablad' => false,
            ],
        ];

        function display_recipe(array $recipe) : string
        {
            $recipe_content = '';

            if ($recipe['is_enabled']) {
                $recipe_content = '&lt;article&gt;';
                $recipe_content .= '&lt;h3&gt;' . $recipe['title'] . '&lt;/h3&gt;';
                $recipe_content .= '&lt;div&gt;' . $recipe['recipe'] . '&lt;/div&gt;';
                $recipe_content .= '&lt;i&gt;' . $recipe['author'] . '&lt;/i&gt;';
                $recipe_content .= '&lt;/article&gt;';
            }  
            return $recipe;
        }

        function display_author(string $authorEmail, array $users) : string
        {
            for ($i = 0; $i < count($users); $i++) {
                $author = $users[$i];
                if ($authorEmail === $author['email']) {
                    return $author['full_name'] . '(' . $author['age'] . ' ans)';
                }
            }
        }
        function get_recipes(array $recipes) : array
        {
            $valid_recipes = [];
            foreach($recipes as $recipe) {
                if ($recipe['is_enabled']) {
                    $valid_recipes[] = $recipe;
                }
            }

            return $valid_recipes;
        }
        ?&gt;
        &lt;!DOCTYPE html&gt;
        &lt;html lang="en"&gt;
        &lt;head&gt;
            &lt;title&gt;Les recettes mais page blanche :(&lt;/title&gt;
            &lt;link
                href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
                rel="stylesheet"
            &gt;
        &lt;/head&gt;
        &lt;body&gt;
            &lt;div class="container"&gt;
                &lt;h1&gt;Liste des recettes&lt;/h1&gt;
                &lt;!-- Plus facile à lire --&gt;
                &lt;?php foreach(get_recipes($recipes) as $recipe) : ?&gt;
                    &lt;article&gt;
                        &lt;h3&gt;&lt;?php echo($recipe['title']); ?&gt;&lt;/h3&gt;
                        &lt;div&gt;&lt;?php echo($recipe['recipe']); ?&gt;&lt;/div&gt;
                        &lt;i&gt;&lt;?php echo(display_author($recipe['author'], $users)); ?&gt;&lt;/i&gt;
                    &lt;/article&gt;
                &lt;?php endforeach ?&gt;
            &lt;/div&gt;   
        &lt;/body&gt;
        &lt;/html&gt;
        </p>
        <p>
        <p class="mise_en_valeur1">1. La première erreur affichée par PHP est la suivante :</p>
        <p class="citation_console">Parse error: syntax error, unexpected ''age'' (T_CONSTANT_ENCAPSED_STRING), expecting ']' in exemple.php on line 7</p>
        <p>Il y a donc une erreur à la ligne 7, ou autour.. effectivement il manque une virgule en ligne 6 juste après l'assignation de la propriété email :<br />
        Erreur :</p>
        <p class="citation_code_balise">
            [
                'full_name' => 'Antoine Giraud',
                'email' => 'psykadelicdream@free.fr'
                'age' => 37,
            ]
        </p>
        <p>Correction :</p>
        <p class="citation_code_balise">
            [
                'full_name' => 'Antoine Giraud',
                'email' => 'psykadelicdream@free.fr',
                'age' => 37,
            ],
        </p>
        <p class="mise_en_valeur1">2. La deuxième erreur est plus discrète puisque le site a l'air de s'afficher correctement, mais il y a pourtant un message d'erreur sous le titre principal :</p>
        <p class="citation_console">Notice: Undefined index: is_enabled in exemple.php on line 78</p>
        <p>L'index ou la clé pour le tableau <strong>$recipe</strong> ne semblent pas définis (bug qui ne serait jamais arrivé si on avait utilisé la fonction <strong>array_key_exists</strong>, d'ailleurs).<br />
        Il va falloir vérifier le tableau des recettes et compléter ou corriger : </p>
        <p class="citation_code_balise">
        //     Avant 
            [
                'title' => 'Samoussas',
                'recipe' => '',
                'author' => 'blandine.tardieu@gmail.com',
                'is_enablad' => false,
            ],

        //     Après
            [
                'title' => 'Samoussas',
                'recipe' => '',
                'author' => 'blandine.tardieu@gmail.com',
                'is_enabled' => false,
            ],
        </p>
        <p>Il y avait une toute petite coquille : <strong>is_enabled</strong> avait été remplacé par <strong>is_enablad</strong>.</p>
        <p class="mise_en_valeur1">3. La troisième erreur et dernière erreur est beaucoup plus bavarde :</p>
        <p class="citation_console">
Fatal error: Uncaught TypeError: Return value of display_author() must be of the type string, none returned in exemple.php:71
Stack trace: #0 exemple.php(107): display_author() #1 {main} thrown in exemple.php on line 71</p>
        <p>Cette fois, l'erreur provient du retour de la fonction <strong>display_author</strong> qui doit retourner une chaîne de caractères (le nom de l'utilisateur) et retourne.. rien (None).</p>
        <p class="citation_code_balise">
        &lt;?php
        function display_author(string $authorEmail, array $users) : string
        {
            for ($i = 0; $i < count($users); $i++) {
                $author = $users[$i];
                if ($authorEmail === $author['email']) {
                    return $author['full_name'] . '(' . $author['age'] . ' ans)';
                }
            }
        }
        </p>
        <p>Si l'on considère le code de la fonction, on peut noter que si l'e-mail est trouvé, alors le nom et l'âge de l'utilisateur sont retournés.<br />
        Mais si l'e-mail n'est pas trouvé, il ne se passe rien car le cas n'a pas été prévu.<br />
        Nous avons deux options pour tenter de  corriger ce problème :</p>
        <ol>
            <li>Retourner une chaîne de caractères même si le mail n'est pas trouvé ("utilisateur inconnu")</li>
            <li>Vérifier la liste des e-mails utilisateur et recette : Si ça se trouve, il y a une coquille dans l'un des e-mails..</li>
        </ol>
        <p>Enfin, on peut aussi copier le message d’erreur et le rechercher sur internet, il y a de fortes chances que d’autres personnes aient déjà rencontré ce problème.</p>

        <h1 id="ancre_sur_les_includes">L'inclusion</h1>
        <p>Jusque-là, nous avions travaillé sur la page d'accueil de notre site, qui contient la liste des articles.<br />
        Mais notre projet va contenir plusieurs pages :</p>
        <ul>
            <li>Une page "recettes"</li>
            <li>Une page d'édition et de création de recette</li>
            <li>Une page avec un formulaire de contact</li>
        </ul>
        <p>Et pour pouvoir accéder à ces pages, il faudra nécessairement quelques liens HTML regroupés dans un menu principal.<br />
        On peut vouloir modifier le menu de notre site et de devoir pour cela corriger le code HTML de chacune de vos pages web; Le menu d'une page web apparaît en effet sur chacune des pages, et on a dû le recopier sur chacune d'elles, ça marche, mais ce n'est pas très pratique..<br /><br />
        Une des fonctionnalités les plus simples et les plus utiles de PHP est <span class="mise_en_valeur1">l'inclusion de pages</span>.<br />
        <span class="mise_en_valeur4">On peut très facilement inclure toute une page, ou un bout de page à l'intérieur d'une autre</span>.<br />
        Cela nous évitera d'avoir à copier le même code HTML plusieurs fois.</p>

        <h2>Découpage d'une page Web</h2>
        <p>La plupart des sites web sont généralement découpés selon le schéma suivant :</p>
        <p><span class="survol_image_autre"><img src="images_pour_mise_en_forme/recap_decoupe_site.png" title="Découpe d'un site" alt="Découpe d'un site" /></span></p>Jusqu'ici, on devait copier sur chaque page à l'identique :</p>
        <ul>
            <li>L'en-tête</li>
            <li>Le menu</li>
            <li>Le pied de page</li>
        </ul>
        <p>Cela donnait du code lourd et répétitif sur toutes les pages !<br />
        Exemple avec le code ci-dessous qui représente une page web avec un en-tête, un menu et un pied de page.</p>
        <p class="citation_code_balise">
        &lt;!DOCTYPE html&gt;
        &lt;html&gt;
            &lt;head&gt;
                &lt;meta charset="utf-8" /&gt;
                &lt;title&gt;Mon super site&lt;/title&gt;
            &lt;/head&gt;
         
           &lt;body&gt;
         
            &lt;!-- L'en-tête --&gt;    
            &lt;header&gt;
                &lt;!-- Le menu --&gt;
                    &lt;nav id="menu"&gt;        
                    &lt;div class="element_menu"&gt;
                        &lt;h3&gt;Titre menu&lt;/h3&gt;
                        &lt;ul&gt;
                            &lt;li&gt;&lt;a href="page1.html"&gt;Lien&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a href="page2.html"&gt;Lien&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a href="page3.html"&gt;Lien&lt;/a&gt;&lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/div&gt;    
                &lt;/nav&gt;
               
            &lt;/header&gt;
            
            &lt;!-- Le corps --&gt;
            
            &lt;div id="corps"&gt;
                &lt;h1&gt;Mon super site&lt;/h1&gt;
               
                &lt;p&gt;
                    Bienvenue sur mon super site !&lt;br /&gt;
                    Vous allez adorer ici, c'est un site génial qui va parler de... euh... Je cherche encore un peu le thème de mon site. :-D
                &lt;/p&gt;
            &lt;/div&gt;
            
            &lt;!-- Le pied de page →
            
            &lt;footer id="pied_de_page"&gt;
                &lt;p&gt;Copyright moi, tous droits réservés&lt;/p&gt;
            &lt;/footer&gt;
            
            &lt;/body&gt;
        &lt;/html&gt;
        </p>
        <p>D'une page à l'autre, ce site contiendra à chaque fois le même code pour l'en-tête, le menu et le pied de page ! En effet, seul le contenu du corps change, en temps normal.</p>

        <h2>Penser le contenu web en bloc fonctionnels</h2>
        <p>En PHP, nous pouvons facilement insérer d'autres pages.<br />
        Mais on peut aussi insérer des morceaux de pages, à l'intérieur d'une page.</p>
        <p>On a un site web composé de vingt pages par exemple.<br />
        Sur chaque page, il y a un menu, toujours le même, pourquoi ne pas écrire ce menu (et seulement lui) une seule fois dans une page header.php ?<br />
        En effet en PHP <span class="mise_en_valeur4">on va pouvoir inclure notre menu sur toutes nos pages</span>.<br />
        <span class="mise_en_valeur4">Lorsqu’on voudra modifier le menu, on aura qu’à modifier le header.php et l’ensemble des pages de notre site web sera automatiquement mis à jour.</span></p>
        <p>Imaginons qu’on ait besoin de fonctions ou de variables sur toutes les pages du site.<br />
        Créons un nouveau fichier PHP : Nous allons insérer uniquement le code HTML correspondant à notre menu, comme ceci :</p>
        <p class="citation_code_balise">
        &lt;nav id="menu"&gt;        
            &lt;div class="element_menu"&gt;
                &lt;h3&gt;Titre menu&lt;/h3&gt;
                &lt;ul&gt;
                    &lt;li&gt;&lt;a href="page1.html"&gt;Lien&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href="page2.html"&gt;Lien&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href="page3.html"&gt;Lien&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;    
        &lt;/nav&gt;
        </p>
        <p>Une page dont l'extension est .php  peut très bien ne contenir aucune balise PHP (même si c'est plutôt rare), dans ce cas, cela redevient une page HTML classique qui n'est pas modifiée avant l'envoi.<br />
        En théorie, on pourrait très bien enregistrer sa page avec l'extension.html (header.html), toutefois afin d'éviter de mélanger des pages .php  et .html  sur notre site, il est recommandé de travailler uniquement avec l'extension .php.</p>
        <p>Une fois que les “morceaux de pages” sont prêts :</p>
        <ul>
            <li>Reprendre les pages de son site, par exemple index.php</li>
            <li>Remplacer le menu par le code PHP suivant :
            <p class="citation_code_balise">
            &lt;?php include('header.php'); ?&gt;
            </p>
            <p>Cette instruction ordonne à l'ordinateur :<br />
            <span class="mise_en_valeur2">“Insère ici le contenu de la page header.php“.</span>
            </p>
            </li>
        </ul>
        <p>Si on reprend le code que nous avons vu tout à l'heure et que nous remplaçons chaque code répétitif par un include (lignes 10, 12 et 27), cela donne le code source suivant :</p>
        <p class="citation_code_balise">
        &lt;!DOCTYPE html&gt;
        &lt;html&gt;
            &lt;head&gt;
                &lt;meta charset="utf-8" /&gt;
                &lt;title&gt;Mon super site&lt;/title&gt;
            &lt;/head&gt;

            &lt;body&gt;
         
            &lt;?php include('header.php'); ?&gt;
            
            &lt;!-- Le corps --&gt;    
            &lt;div id="corps"&gt;
                &lt;h1&gt;Mon super site&lt;/h1&gt;
                
                &lt;p&gt;
                    Bienvenue sur mon super site !&lt;br /&gt;
                    Vous allez adorer ici, c'est un site génial qui va parler de... euh... Je cherche encore un peu le thème de mon site. :-D
                &lt;/p&gt;
            &lt;/div&gt;
            
            &lt;!-- Le pied de page --&gt;
            &lt;?php include('footer.php'); ?&gt;
            &lt;/body&gt;
        &lt;/html&gt;
        </p>
        <p>Ce code suppose que notre page index.php  et celles qui sont incluses (comme header.php) sont dans le même dossier.<br />
        Si le menu était dans un sous-dossier appelé includes, il aurait fallu écrire :</p>
        <p class="citation_code_balise">
        &lt;?php include('includes/header.php'); ?&gt;
        </p>
        <p>C'est le même principe que pour les liens relatifs, que l’on connait déjà dans le langage HTML.</p>
        <p>
        Le visiteur reçoit donc le même code qu’avant, la page en PHP est générée.<br />
        On gagne juste énormément en flexibilité puisque le code n’est plus recopié autant de fois qu’avant.<br /><br />
        Le nombre d’include n’est pas limité donc <span class="mise_en_valeur4">on peut découper le code en autant de sous-partie qu’on le souhaite</span>.</p>
        
        <h1 id="ancre_sur_ecoute_url">Écouter les URL</h1>
        <p>Grâce aux URL et à PHP, nous allons rendre le formulaire de contact dynamique en retournant une page de prise en compte de la demande à chaque personne qui soumettra le formulaire.<br /><br />
        Une URL classique sera par exemple https://www.openclassrooms.com<br />
        En faisant une recherche sur google par exemple, si on tape le mot “OpenClassrooms” on obtient une URL plus longue : http://www.google.fr/search?rlz=1C1GFR343&amp;q=openclassrooms<br /><br />
        Les informations après le point d'interrogation (<strong>?</strong>) sont en réalité des données <span class="mise_en_valeur1">que l'on fait transiter d'une page à une autre.</span></p>
        
        <h2>Envoyer des paramètres dans l’URL</h2>
        <p>En effet <span class="mise_en_valeur4">les URL permettent de transmettre des informations</span>.<br /><br />
        Imaginons que notre site s’appelle monsite.fr et qu’il possède une page PHP de contact contat.php.<br />
        Pour accéder à la page de contact on va aller à l’URL https://www.monsite.fr/contact.php.<br />
        Mais on peut aussi envoyer des informations à la page contact.php.<br /><br />
        Ces informations vont figurer à la fin de l’URL par exemple :<br />
        https://www.monsite.fr/contact.php?nom=Giraud&amp;prenom=Antoine<br /><br />

        Ce que l’on voit après le point d’interrogation sont des <span class="mise_en_valeur1">paramètres</span><span class="mise_en_valeur4"> que l’on envoie à la page PHP</span>, <span class="mise_en_valeur4">cela permet de</span> <span class="mise_en_valeur1">récupérer ces informations dans des variables</span>.<br /><br />
        Voici une description du principe :<br />
        <span class="survol_image_autre"><img src="images_pour_mise_en_forme/recap_url.png" title="Découpe d'une URL" alt="Découpe d'une URL" /></span></p>
        <p><span class="mise_en_valeur4">Le point d'interrogation sépare le nom de la page PHP des paramètres.</span><br />
        <span class="mise_en_valeur4">Les paramètres s'enchaînent selon la forme</span><span class="mise_en_valeur1"> nom=valeur</span><span class="mise_en_valeur4"> et sont </span><span class="mise_en_valeur1">séparés les uns des autres par le symbole &amp;</span><span class="mise_en_valeur4">.</span><br /><br />
        On pourrait donc avoir une URL sous la forme "page.php?param1=valeur1&amp;param2=valeur2&amp;param3=valeur3&amp;param4=valeur4.."<br />
        <span class="mise_en_valeur4">La seule limite est la longueur de l’URL</span>, qui, en générale, ne dépasse pas 256 caractères, même s’il arrive que les navigateurs gèrent parfois des URL plus longues.</p>

        <h2>Créer un lien avec les paramètres</h2>
        <p>On peut créer des liens en HTML qui transmettent des paramètres d’une page à une autre.<br /><br />
        Imaginons que l’on a deux fichiers sur le site, index.php (l’accueil) et bonjour.php.<br />
        On peut faire un lien de index.php à bonjour.php pour transmettre des informations dans l’URL :<br /><br />
        <span class="survol_image_autre"><img src="images_pour_mise_en_forme/transmission_par_url.png" title="Découpe d'une URL" alt="Découpe d'une URL" /></span></p>
        <p>Pour cela, ouvrir index.php et y insérer par exemple :
        <p class="citation_code_balise">
        &lt;a href="bonjour.php?nom=Dupont& amp;prenom=Jean"&gt;Dis-moi bonjour !&lt;/a&gt;
        </p>
        <p>Comme on peut le voir, dans le lien le &amp; sera remplacé par & avec amp; tout attaché (j'ai mis un espace dans l'URL sinon ce n'était pas affiché puisqu'il est interprêté en HTML comme un & directement, c’est ainsi que cela fonctionne en HTML.<br />
        Ce lien appelle donc la page bonjour.php et lui envoie deux <span class="mise_en_valeur1">paramètres</span> :</p>
        <ul>
            <li>nom : Dupont</li>
            <li>prenom : Jean</li>
        </ul>

        <h2>Créer formulaire avec la méthode HTTP GET</h2>
        <p>
        La deuxième solution pour faire passer des informations dans l'URL, c'est de proposer à l'utilisateur de soumettre un formulaire avec la méthode HTTP <strong>GET</strong>.<br />
        <p>Nous pouvons faire cela avec une balise <strong>form</strong> qui a pour <strong>attribut method</strong> la valeur <strong>GET</strong>.</p>
        <p class="citation_code_balise"></p>
        &lt;form action="contact.php" method="GET"&gt;
            &lt;!-- données à faire passer à l'aide d'inputs --&gt;
            &lt;input name="nom"&gt;
            &lt;input name="prenom"&gt;
        &lt;/form&gt;
        </p>
        <p>Les données soumises à l'aide du formulaire se retrouveront dans l'URL, comme pour un lien.<br />
        Il suffit à présent de récupérer les données soumises à l’aide du formulaire.</p>
        
        <h2>Récupérer les paramètres en PHP un formulaire avec la méthode HTTP GET</h2>
        <p> Pour notre besoin, nous avons un formulaire de contact "contact.php" que nous allons soumettre sur une autre page, et qui affichera un message de bonne réception : submit_contact.php.<br /><br />
        Rappel de code d’un formulaire :</p>
        <p class="citation_code_balise">
        &lt;form action="submit_contact.php" method="GET"&gt;
            &lt;div&gt;
                &lt;label for="email"&gt;Email&lt;/label&gt;
                &lt;input type="email" name="email"&gt;
            &lt;/div&gt;
            &lt;div&gt;
                &lt;label for="message"&gt;Votre message&lt;/label&gt;
                &lt;textarea placeholder="Exprimez vous" name="message"&gt;&lt;/textarea&gt;
            &lt;/div&gt;
            &lt;button type="submit"&gt;Envoyer&lt;/button&gt;
        &lt;/form&gt;
        </p>
        <p>Par exemple, si l'utilisateur complète le formulaire de contact avec pour e-mail utilisateur@exemple.com et comme message "Bonjour" :<br />
        - Le formulaire va alors être converti en lien vers submit_contact.php?email=utilisateur%40exemple.com&message=Bonjour<br />
        - Et ces informations pourront être récupérées par PHP dans le fichier submit_contact.php.<br /><br />
        <span class="mise_en_valeur4">Lors de la soumission, une variable superglobale appelée <strong>$_GET</strong> va contenir les données envoyées, il s'agit d'un tableau associatif dont les clés correspondent aux noms des paramètres envoyés dans l'URL :</span></p>
        <table>
            <tr>
            <td class="gras">Nom</td>
            <td class="gras">Valeur</td>
            </tr>
            <tr>
            <td>$_GET['email']</td>
            <td>$_GET['message']</td>
        </table>
        <p>On peut donc :</p>
        <ul>
            <li class="mise_en_valeur4">Récupérer ces informations</li>
            <li class="mise_en_valeur4">Les traiter</li>
            <li class="mise_en_valeur4">Les afficher</li>
        </ul>
        <p>Pour l'exemple, on va créer un nouveau fichier PHP submit_contact.php et y placer le code suivant :</p>
        <p class="citation_code_balise">
        &lt;h1&gt;Message bien reçu !&lt;/h1&gt;
        &lt;div class="card"&gt;    
            &lt;div class="card-body"&gt;
                &lt;h5 class="card-title"&gt;Rappel de vos informations&lt;/h5&gt;
                &lt;p class="card-text"&gt;&lt;b&gt;Email&lt;/b&gt; : &lt;?php echo $_GET['email']; ?&gt;&lt;/p&gt;
                &lt;p class="card-text"&gt;&lt;b&gt;Message&lt;/b&gt; : &lt;?php echo $_GET['message']; ?&gt;&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        </p>
        <p>Résultat sur le site de recettes :<br />
        <span class="survol_image_autre"><img src="images_pour_mise_en_forme/affichage_suite_formulaire.png" title="Résultat" alt="Résultat" /></span></p>

        <h2>Ne pas faire confiance aux données reçues</h2>
        <p>Il ne faut jamais faire confiance aux variables qui transitent de page en page comme <strong>$_GET</strong>.</p>
        
        <h3>Tous les visiteurs peuvent trafiquer leur URL</h3>
        <p>En étant un peu bricoleur, on pourrait modifier l’URL dans le navigateur :<br />
        http://localhost/submit_contact.php?email=utilisateur%40exemple.com&message=Hihiiiii<br /><br />
        En effet <span class="mise_en_valeur4">n'importe qui peut facilement modifier les URL et y mettre ce qu'il veut</span> : Il suffit simplement de changer l'URL dans la barre d'adresse de votre navigateur.</p>
        
        <h3>Tester la présence d’un paramètre</h3>
        <p><span class="mise_en_valeur4">Rien n’empêche au visiteur de supprimer tous les paramètres de l’URL</span>, par exemple il pourrait essayer d’accéder à http://localhost/submit_contact.php .<br /><br />
        La page submit_contact.php affichera quelque chose  comme :</p>
        <p class="citation_console">Notice: Undefined index: email in submit_contact.php on line 15</p>
        <p>OU</p>
        <p class="citation_console">Warning: Undefined array key "email" in submit_contact.php on line 15</p>
        <p>Le résultat est ainsi car on a essayé d'afficher la valeur de <strong>$_GET['email']</strong> et celle de <strong>$_GET['message']</strong>, mais comme on vient de les supprimer de l’URL, ces variables n’ont pas été créées et donc elles n’existent pas.<br /><br />
        PHP avertit qu’on essaie d’utiliser des variables qui n’existent pas, d’où les <strong>Undefined index</strong>.<br /><br />
        <span class="mise_en_valeur4">Pour résoudre ce problème on peut faire appel à la fonction <strong>isset()</strong>,</span> <span class="mise_en_valeur1">cette dernière test si une variable existe</span><span class="mise_en_valeur4">.</span><br /><br />
        Nous allons nous en servir pour afficher un message spécifique, dans le cas où le nom ou le prénom serait absent.</p>
        <p class="citation_code_balise">
        &lt;?php
        if (!isset($_GET['email']) || !isset($_GET['message']))
        {
            echo('Il faut un email et un message pour soumettre le formulaire.');
            // Arrête l'exécution de PHP
            return;
        }
        ?&gt;
        </p>
        <p>Explication du code :<br /><br />
        Il teste si les variables <strong>$_GET['email']</strong> et <strong>$_GET['message']</strong> existent.</p>
        <ul>
            <li>Si elles existent, on affiche la confirmation de prise en compte du message.</li>
            <li>S'il nous manque une des variables (ou les deux), on affiche un message d'erreur : "Il faut un e-mail et un message pour soumettre le formulaire", et on arrête l'exécution de la page.</li>
        </ul>
        <p>Si on essaie maintenant d’accéder à la page sumit_contact.php sans les paramètres, on aura donc : "Il faut un email et un message pour soumettre le formulaire".<br /><br />
            C’est une bonne pratique d’afficher un message d’erreur utilisateur en cas de souci, en effet <span class="mise_en_valeur1">il faut que le site soit prêt à gérer le cas d’un utilisateur mal intentionné</span>.</p>
        
        <h3>Contrôler la valeur des paramètres</h3>
        <p>Une fois les valeurs soumises et correctement récupérées, il faut vérifier qu’elles correspondent à ce qui est attendu !</p>
        <p>Imaginons qu’un utilisateur se soit trompé et que l’e-mail envoyé ne soit pas valide, on ne pourra pas le recontacter pour répondre à son besoin.<br /><br />
        Il va donc falloir :</p>
        <ul>
        <li class="mise_en_valeur4">Contrôler si l’email passé est bien valide, à l’aide de la fonction <strong>filter_var</strong></li>
        <li class="mise_en_valeur4">Vérifier que le message n’est pas vide, à l’aide de la fonction <strong>empty</strong></li>
        </ul>
        <p>Voici le code finalisé qui prévoit tous les cas pour éviter d’être pris au dépourvu :</p>
        <p class="citation_code_balise">
        &lt;?php
        if (
            (!isset($_GET['email']) || !filter_var($_GET['email'], FILTER_VALIDATE_EMAIL))
            || (!isset($_GET['message']) || empty($_GET['message']))
            )
        {
            echo('Il faut un email et un message valides pour soumettre le formulaire.');
            return;
        }
        </p>
        <p>Cela fait beaucoup de conditions pour quelque chose qui de base est simple, mais c’est nécessaire.<br /><br />
        On doit toujours faire très attention et prévoir les cas les plus tordus, ainsi il faut bien veiller à :</p>
        <ul>
            <li class="mise_en_valeur1">Vérifier que tous les paramètres que l’on attend soient là</li>
            <li class="mise_en_valeur1">Vérifier qu’ils contiennent des valeurs correctes</li>
        </ul>
        <p>Afin de savoir ce qu'on doit utiliser, entre <strong>empty()</strong>, <strong>isset()</strong> (ou même l'inverse <strong>!empty()</strong>, <strong>!isset()</strong>), ou encore <strong>is_null()</strong>, ou <strong>if($variable)</strong> qui renvoie un booléen, ou même <strong>gettype()</strong>, on peut aller sur la doc PHP avec ce que renvoie chaque fonction : <a href="https://www.php.net/manual/fr/types.comparisons.php" alt="comparaison" title="comparaison">https://www.php.net/manual/fr/types.comparisons.php</a></p>
        <p><span class="survol_image_autre comparaison"><img src="images_pour_mise_en_forme/comparaison.png" title="Comparaison" alt="Comparaison" /></span></p>


        <h1 id="ancre_sur_les_formulaires_securises">Administrer des formulaires sécurisés</h1>
        <p>Les formulaires constituent le principal moyen pour les visiteurs d'entrer des informations sur son site.<br /><br />
        Nous allons voir comment faire des formulaires de façon plus sécurisée.<br />
        Pour rappel, voici comment insérer un formulaire en HTML :</p>
        <p contextmenu="citation_code_balise">
        &lt;!-- index.php --&gt;
        <&lt;form method="post" action="submit_form.php"&gt;
        &lt;p&gt;
            On insèrera ici les éléments de notre formulaire.
        &lt;/p&gt;
        &lt;/form&gt;
        </p>
        <p>Il y a deux attributs à connaître pour la balise <strong>&lt;form&gt;</strong> :</p>
        <ul>
            <li><strong>method</strong> : Qui est la <span class="mise_en_valeur1">méthode d’envoi du formulaire</span></li>
            <li><strong>action</strong> : Qui <span class="mise_en_valeur1">sert à définir la page appelée par le formulaire, cette page recevra les données du formulaire et sera chargée de les traiter</span></li>
            <li></li>
        </ul>
        <h2>method : Privilégier la méthode post pour envoyer les données du formulaire</h2>
        <p>Comme vu dans le cours du HTML, il existe plusieurs moyens d'envoyer les données du formulaire (plusieurs ”méthodes”) :</p>
        <ul>
            <li><strong>get</strong> : Les données transiteront par l'URL, comme on l'a appris précédemment.<br />
            On pourra les récupérer grâce au tableau <strong>$_GET</strong>.<br />
            Cette méthode est assez peu utilisée car on ne peut pas envoyer beaucoup d'informations dans l'URL.
            </li>
            <li><strong>post</strong> : <span class="mise_en_valeur4"><span class="mise_en_valeur1">Les données ne transiteront pas par l'URL</span>, l'utilisateur ne les verra donc pas passer dans la barre d'adresse.</span><br />
            Cette méthode permet d'envoyer autant de données que l'on veut, ce qui fait qu'on la privilégie le plus souvent, néanmoins, <span class="mise_en_valeur1">les données ne sont pas plus sécurisées qu'avec la méthode <strong>GET</strong></span> , et <span class="mise_en_valeur1">il faudra toujours vérifier si tous les paramètres sont bien présents et valides</span> (cf chapitre précédent), en effet <span class="mise_en_valeur1">on ne doit pas plus faire confiance aux formulaires qu’aux URL</span>.<br />
            <span class="mise_en_valeur4">La bonne pratique consiste généralement à privilégier la méthode <strong>post</strong> pour les formulaires.</span>
            </li>
        </ul>
        <h2>action : Choisir la page appelée par le formulaire en définissant la cible</h2>
        <p>Selon la méthode utilisée, ce ne sera pas la même variable :</p>
        <ul>
            <li class="mise_en_valeur4">Si la méthode est <strong>GET</strong> : Ce sera la supervariable <strong>$_GET</strong></li>
            <li class="mise_en_valeur4">Si la méthode est <strong>POST</strong>(à privilégier) ce sera la supervariable $_POST</strong> qui recevra les données.</li>
        </ul>
        <p>On travaille donc sur deux pages différentes, <span class="mise_en_valeur4">la page qui contient le formulaire</span> (form.php par exemple) et <span class="mise_en_valeur4">la page qui reçoit les données du formulaire pour les traiter</span> (submit_form.php par exemple).</p>

        <p>La variable <strong>$_GET</strong> ou <strong>$_POST</strong>  sera complétée avec la valeur de l'attribut  <strong>name</strong> en tant que clé, et aura pour valeur ce qui aura été soumis par l'utilisateur :</p>
        <p class="citation_code_balise">
        &lt;input type="text" name="nom" value="Lutin69" /&gt;
        &lt;?php
        // Après soumission du formulaire
        echo $_GET['nom']; // "Lutin69"
        // OU
        echo $_POST['nom']; // "Lutin69"
        </p>
        <p>Il y aura autant de clés dans le tableau <strong>$_GET</strong> ou <strong>$_POST</strong> que de champs avec un attribut <strong>name</strong> dans le formulaire soumis.</p>

        <h2>Attention aux champs cachés</h2>
        <p>
        Comme on l’a vu précédemment, il ne faut pas mettre d’informations compromettantes dans le code source, car on peut afficher le code source d’un site depuis un navigateur.<br /><br />
        Aussi on serait tenter de cacher un champs en mettant un code dans le formulaire qui n’apparaîtra pas pour les visiteurs, exemple :</p>
        <p class="citation_code_balise">
        &lt;input type="hidden" name="pseudo" value="Lutin69" /&gt;
        </p>
        <p>Ce dernier est masqué, mais la variable <strong>$_POST[‘pseudo’]</strong> sera créée et elle contiendra la valeur "Lutin69", <span class="mise_en_valeur1">toutefois le visiteur pourra s’il le veut afficher le code source et voir qu’un utilisateur se nomme Lutin69</span>.</p>

        <h2 id="ancre_sur_la_faille_xss">La faille XSS</h2>
        <p class="mise_en_valeur1">Cette faille est une technique qui consiste à injecter du code HTML contenant du JavaScript dans nos pages, pour le faire exécuter par nos visiteurs.</p>
        <p>Exemple :</p>
        <p class="citation_code_balise">
        &lt;h5&gt;Rappel de vos informations&lt;/h5&gt;
        &lt;p&gt;&lt;b&gt;Email&lt;/b&gt; : &lt;?php echo $_POST['email']; ?&gt;&lt;/p&gt;
        &lt;p&gt;&lt;b&gt;Message&lt;/b&gt; : &lt;?php echo $_POST['message']; ?&gt;&lt;/p&gt;
        </p>
        <p>Si le visiteur décide d'écrire du code HTML dans la zone de message, cela fonctionnera très bien !</p>
        <p>Par exemple, imaginons qu'il écrive dans le champ « Votre message » le code :</p>
        <p class="citation_code_balise">
        &lt;strong&gt;Badaboum&lt;/strong&gt;
        </p>
        Le code source HTML qui sera généré par PHP sera le suivant :
        <p class="citation_code_balise">
        &lt;p&gt;&lt;b&gt;Message&lt;/b&gt; : &lt;strong&gt;Badaboum&lt;/strong&gt;&lt;/p&gt;
        </p>
        <p>Outre le fait qu'il peut insérer n'importe quel code HTML (et rendre notre page invalide), ce qui n'est pas le plus grave, <span class="mise_en_valeur1">il peut aussi ouvrir des balises de type &lt;script&gt; pour faire exécuter du code JavaScript</span> au visiteur qui visualisera la page, exemple :</p>
        &lt;p&gt;&lt;b&gt;Message&lt;/b&gt; : &lt;script&gt;alert('Badaboum')&lt;/script&gt;&lt;/p&gt;
        <p>Tous les visiteurs qui arriveront sur cette page verront une boîte de dialogue JavaScript s'afficher :<br />
        <span class="survol_image_autre"><img src="images_pour_mise_en_forme/faille_xss.png" title="Faille XSS" alt="Faille XSS" /></span></p>

        <h2>Sécuriser le code en bloquant l’exécution du code JavaScript</h2>
        <p class="mise_en_valeur1">Pour ignorer le code HTML, il suffit d'utiliser la fonction <strong>htmlspecialchars</strong> :</p>
        <p class="citation_code_balise">
        &lt;p&gt;&lt;b&gt;Message&lt;/b&gt; : &lt;?php echo htmlspecialchars($_POST['message']); ?&gt;&lt;/p&gt;
        </p>
        <p><span class="mise_en_valeur4">Elle va transformer les chevrons des balises HTML < et > en &lt ; et &gt ; respectivement</span> (j'ai mis un espace entre le &lt et &gt et ; sinon le code n'était pas affiché vu qu'il est interprêté).<br />
        <p class="mise_en_valeur4">Le code HTML qui en résultera sera propre et protégé, car les balises HTML insérées par le visiteur auront été échappées :</p>
        <p class="citation_code_balise">
        &lt;p&gt;&lt;b&gt;Message&lt;/b&gt; : &lt;strong&gt;Badaboum&lt;/strong&gt; ?&gt;&lt;/p&gt;
        </p>
        <p><span class="mise_en_valeur1">Il faut penser à utiliser cette fonction sur tous les textes envoyés par l'utilisateur qui sont susceptibles d'être affichés sur une page web.<br />
        Bref, tout ce qui est affiché et qui vient, à la base, d'un visiteur, on doit penser à le protéger avec <strong>htmlspecialchars</strong>.</span><br /><br />
        Si on préfère retirer les balises HTML que le visiteur a tenté d'envoyer plutôt que de les afficher, on peut utiliser la fonction <strong>strip_tags</strong>.<br /><br />
        Voici une nouvelle version du code de réception du formulaire avec post, de façon sécurisée, qui prévoit tous les cas pour éviter d’être pris au dépourvu par un utilisateur mal intentionné :</p>
        <p class="citation_code_balise">
        &lt;?php

        // submit_contact.php
        if (!isset($_POST['email']) || !isset($_POST['message']))
        {
            echo('Il faut un email et un message pour soumettre le formulaire.');
            return;
        }   

        $email = $_POST['email'];
        $message = $_POST['message'];
        ?&gt;

        &lt;!DOCTYPE html&gt;
        &lt;html&gt;
            &lt;head&gt;
                &lt;meta charset="UTF-8"&gt;

                &lt;title&gt;Site de Recettes - Demande de contact reçue&lt;/title&gt;
                &lt;link
                    href="https://monsite.fr/style.css" 
                    rel="stylesheet"
                &gt;
            &lt;/head&gt;
            &lt;body&gt;
                &lt;div class="container"&gt;
            
                &lt;?php include_once('header.php'); ?&gt;
                    &lt;h1&gt;Message bien reçu !&lt;/h1&gt;
                    
                    &lt;div class="card"&gt;
                        
                        &lt;div class="card-body"&gt;
                            &lt;h5 class="card-title"&gt;Rappel de vos informations&lt;/h5&gt;
                            &lt;p class="card-text"&gt;&lt;b&gt;Email&lt;/b&gt; : &lt;?php echo($email); ?&gt;&lt;/p&gt;
                            &lt;p class="card-text"&gt;&lt;b&gt;Message&lt;/b&gt; : &lt;?php echo strip_tags($message); ?&gt;&lt;/p&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/body&gt;
        &lt;/html&gt;
        </p>

        <h1 id="ancre_sur_le_partage_de_fichier">Activer le partage de fichier</h1>
        <p class="mise_en_valeur4">Proposer la soumission de fichiers dans votre formulaire de contact, c’est possible grâce à la supervariable <strong>$_FILES</strong> :)</p>
        <p>Cela se passe donc en deux temps :</p>
        <ol>
            <li><span class="mise_en_valeur4">Le visiteur arrive sur le formulaire et le remplit</span> (en indiquant le fichier à envoyer)<br />
            Ici une simple page HTML suffit pour créer le formulaire.</li>
            <li><span class="mise_en_valeur4">PHP réceptionne les données du formulaire</span> et, s'il y a des fichiers dedans, il les enregistre dans un des dossiers du serveur</li>
        </ol>
            
        <h2>Paramétrage du formulaire</h2>
        <p class="mise_en_valeur4">1. Pour cela on va ajouter l’attribut <strong>enctype="multipart/form-data"</strong> à la balise <strong>&lt;form&gt;</strong></p>
        <p class="citation_code_balise">
        &lt;form action="submit_contact.php" method="POST" enctype="multipart/form-data"&gt;
        &lt;!-- champs de formulaire --&gt;
        &lt;/form&gt;
        </p>
        <p>Grâce à <strong>enctype</strong>, <span class="mise_en_valeur4">le navigateur du visiteur sait qu'il s'apprête à envoyer des fichiers</span>.</p>
        
        <p class="mise_en_valeur4">2. Puis on va ajouter à l’intérieur du formulaire une balise <strong>&lt;input type="file" /&gt;</strong> permettant l’envoi du fichier (ne pas oublier de donner un nom à ce champ de formulaire grâce à l'attribut <strong>name</strong> pour que PHP puisse reconnaître le champ par la suite), exemple  :</p>
        <p class="citation_code_balise">
        &lt;form action="submit_contact.php" method="POST" enctype="multipart/form-data"&gt;
            &lt;!-- Ajout des champs email et message --&gt;
            […]
            &lt;!-- Ajout champ d'upload ! --&gt;
            &lt;div class="mb-3"&gt;
                &lt;label for="screenshot" class="form-label"&gt;Ton fichier&lt;/label&gt;
                &lt;input type="file" class="form-control" id="image_envoyee" name="image_envoyee" /&gt;
            &lt;/div&gt;
            &lt;!-- Fin ajout du champ --&gt;
            &lt;button type="submit" class="btn btn-primary"&gt;Envoyer&lt;/button&gt;
        &lt;/form&gt;
        </p>
        <h2>Traitement de l'envoi en PHP</h2>
        <p>Au moment où la page PHP s'exécute, <span class="mise_en_valeur4">le fichier a été envoyé sur le serveur mais il est stocké dans un dossier temporaire</span>.</p>
        <p><span class="mise_en_valeur4">À nous de décider si on accepte ou non le fichier de façon définitive</span>.<br />
        En effet <span class="mise_en_valeur4">on peut vérifier si le fichier à la bonne extension</span> (si on demande une image et qu’on envoi un .txt alors on doit refuser le fichier).<br />
        <span class="mise_en_valeur4">Si le fichier est bon, on l'acceptera grâce à la fonction <strong>move_uploaded_file</strong> et ce, d'une manière définitive.</span><br /><br /><br />
        Pour chaque fichier envoyé, une variable <strong>$_FILES['nom_du_champ']</strong> est créée.<br /><br />
        Dans notre cas, la variable s'appellera <strong>$_FILES['image_envoyee']</strong>.<br />
        <span class="mise_en_valeur4">Cette variable est un tableau qui contient plusieurs informations sur le fichier</span> (exemple avec le nom de la variable "image_envoyee") :</p>
        <table>
            <tr>
                <td class="gras">Variable</td>
                <td class="gras">Signification</td>
            </tr>
            <tr>
                <td>$_FILES['image_envoyee']['name']</td>
                <td>Contient le nom du fichier envoyé par le visiteur</td>
            </tr>
            <tr>
                <td>$_FILES['image_envoyee']['type']</td>
                <td>Indique le type du fichier envoyé. Si c'est une image gif par exemple, le type sera image/gif</td>
            </tr>
            <tr>
                <td>$_FILES['image_envoyee']['size']</td>
                <td>Indique la taille du fichier envoyé<br />
                    Attention : cette taille est en octets. Il faut environ 1 000 octets pour faire 1 Ko, et 1 000 000 d'octets pour faire 1 Mo.
                    La taille de l'envoi est limitée par PHP. Par défaut, impossible d'uploader des fichiers de plus de 8 Mo.</td>
            </tr>
            <tr>
                <td>$_FILES['image_envoyee']['tmp_name']</td>
                <td>Juste après l'envoi, le fichier est placé dans un répertoire temporaire sur le serveur en attendant que votre script PHP décide si oui ou non il accepte de le stocker pour de bon. Cette variable contient l'emplacement temporaire du fichier (c'est PHP qui gère ça).</td>
            </tr>
            <tr>
                <td>$_FILES['image_envoyee']['error']</td>
                <td>Contient un code d'erreur permettant de savoir si l'envoi s'est bien effectué ou s'il y a eu un problème et si oui, lequel. La variable vaut 0 s'il n'y a pas eu d'erreur.</td>
            </tr>
        </table>
        <p>Bien-sûr si on a mis un second champ d'envoi de fichier dans le formulaire, il y aura une seconde variable <strong>$_FILES['nom_de_l_autre_champ']</strong> découpée de la même manière que le tableau qu'on vient de voir ici.<br />
        <strong>$_FILES['nom_de_l_autre_champ']['size']</strong> contiendra donc la taille du second fichier, et ainsi de suite.</p>

        <h2>Vérifications et test</h2>
        <p>Effectuons à présent les vérifications suivantes pour décider si l'on accepte le fichier ou non.</p>
        <ol>
            <li class="mise_en_valeur4">Vérifier tout d'abord si le visiteur a bien envoyé un fichier, en testant la variable <strong>$_FILES['image_envoyee']</strong> avec <strong>isset()</strong> et s'il n'y a pas eu d'erreur d'envoi, grâce à <strong>$_FILES['image_envoyee']['error']</strong>.</li>
            <li class="mise_en_valeur4">Vérifier si la taille du fichier ne dépasse pas 1 Mo par exemple (environ 1 000 000 d'octets), grâce à <strong>$_FILES['image_envoyee']['size']</strong>.
            <li class="mise_en_valeur4">Vérifier si l'extension du fichier est autorisée (il faut interdire à tout prix que les gens puissent envoyer des fichiers PHP, sinon ils pourraient exécuter des scripts sur notre serveur).<br />
            Dans notre cas, nous autoriserons seulement les images (fichiers .png, .jpg, .jpeg et .gif).<br />
            Nous analyserons pour cela la variable <strong>$_FILES['image_envoyee']['name']</strong>.</li>
        </ol>
        <p>Nous allons donc faire une série de tests dans notre page submit_contact.php.</p>
        <p class="mise_en_valeur1">1. Tester si le fichier a bien été envoyé</p>
        <p>Pour cela, on va tester si la variable <strong>$_FILES['image_envoyee']</strong> existe avec <strong>isset()</strong>.<br /> <br />
        On vérifie dans le même temps s'il n'y a pas d'erreur d'envoi :</p>
        <p class="citation_code_balise">
        &lt;?php
        // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
        if (isset($_FILES['image_envoyee']) && $_FILES['image_envoyee']['error'] == 0)
        {
         
        }
        ?&gt;
        </p>
        <p class="mise_en_valeur1">2. Vérifier la taille du fichier</p>
        <p>On veut interdire que le fichier dépasse 1 Mo, soit environ 1 000 000 d'octets.<br />
        On doit donc tester <strong>$_FILES['image_envoyee']['size']</strong>:</p>
        <p class="citation_code_balise">
        &lt;?php
        // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
        if (isset($_FILES['image_envoyee']) && $_FILES['screenshot']['error'] == 0)
        {
                // Testons si le fichier n'est pas trop gros
                if ($_FILES['image_envoyee']['size'] <= 1000000)
                {
         
                }
        }
        ?&gt;
        </p>
        <p class="mise_en_valeur1">3. Vérifier l'extension du fichier</p>
        <p>On peut récupérer l'extension du fichier dans une variable grâce à ce code :</p>
        <p class="citation_code_balise">
        &lt;?php
        $fileInfo = pathinfo($_FILES['image_envoyee']['name']);
        $extension = $fileInfo['extension'];
        ?&gt;
        </p>
        <p>La fonction <strong>pathinfo</strong> renvoie un tableau (array) contenant entre autres l'extension du fichier dans <strong>$fileInfo['extension']</strong>.<br />
        On le stocke dans la variable <strong>$extension</strong>, et une fois l’extension récupérée on peut la comparer à un tableau d’extensions autorisées et vérifier si l’extension récupérée fait bien partie de celles autorisées à l’aide de la fonction <strong>in_array()</strong>.<br /><br />
        On obtient donc le code :</p>
        <p class="citation_code_balise">
        &lt;?php
        // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
        if (isset($_FILES['image_envoyee']) AND $_FILES['image_envoyee']['error'] == 0)
        {
                // Testons si le fichier n'est pas trop gros
                if ($_FILES['image_envoyee']['size'] &lt;= 1000000)
                {
                        // Testons si l'extension est autorisée
                        $fileInfo = pathinfo($_FILES['image_envoyee']['name']);
                        $extension = $fileInfo['extension'];
                        $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
                        if (in_array($extension, $allowedExtensions))
                        {
                        
                        }
                }
        }
        ?&gt;
        </p>
        <p class="mise_en_valeur1">4. Dernière étape, la validation de l'upload du fichier</p>
        <p>Si tout est ok, on accepte le fichier en appelant <strong>move_uploaded_file()</strong>.<br />
        Cette fonction prend deux paramètres :</p>
        <ol>
            <li class="mise_en_valeur4">Le nom temporaire du fichier (on l'a avec <strong>$_FILES['image_envoyee']['tmp_name'])</strong></li>
            <li class="mise_en_valeur4">Le chemin qui est le nom sous lequel sera stocké le fichier de façon définitive.<br />
                On peut utiliser le nom d'origine du fichier <strong>$_FILES['image_envoyee']['name']</strong> ou générer un nom au hasard.</li>
        </ol>
        <p>Dans notre exemple nous placerons ce fichier dans un sous-dossier "Uploads".<br />
        On gardera le même nom de fichier que celui d'origine.<br /><br />
        Comme <strong>$_FILES['image_envoyee']['name']</strong> contient le chemin entier vers le fichier d'origine (C:\dossier\fichier.png, par exemple), il nous faudra extraire le nom du fichier.<br />
        On peut utiliser pour cela la fonction <strong>basename</strong> qui renverra juste fichier.png, ce qui donnera le code final :</p>
        <p class="citation_code_balise">
        &lt;?php
        // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
        if (isset($_FILES['image_envoyee']) && $_FILES['image_envoyee']['error'] == 0)
        {
                // Testons si le fichier n'est pas trop gros
                if ($_FILES['image_envoyee']['size'] &lt;= 1000000)
                {
                        // Testons si l'extension est autorisée
                        $fileInfo = pathinfo($_FILES['image_envoyee']['name']);
                        $extension = $fileInfo['extension'];
                        $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
                        if (in_array($extension, $allowedExtensions))
                        {
                                // On peut valider le fichier et le stocker définitivement
                                move_uploaded_file($_FILES['image_envoyee']['tmp_name'], 'uploads/' . basename($_FILES['image_envoyee']['name']));
                                echo "L'envoi a bien été effectué !";
                        }
                }
        }
        ?&gt;
        </p>
        <p class="mise_en_valeur4">Lorsque l’on met le script sur internet à l'aide d'un logiciel FTP, vérifier que le dossier ("Uploads" dans notre exemple) sur le serveur existe, et qu'il a les droits d'écriture.<br />
        Pour ce faire, sous FileZilla par exemple, faire un clic droit sur le dossier et choisir "Attributs du fichier".<br />
        Cela permettra d'éditer les droits du dossier (CHMOD).<br />
        Mettre les droits à 733, ainsi PHP pourra placer les fichiers téléversés dans ce dossier.</p>
        <p class="mise_en_valeur2">Ce script est un début, mais en pratique il faudra sûrement l'améliorer.<br />
        Par exemple, si le nom du fichier contient des espaces ou des accents, ça posera un problème une fois envoyé sur le Web.<br />
        D'autre part, si quelqu'un envoie un fichier qui a le même nom que celui d'une autre personne, l'ancien sera écrasé..<br />
        La solution consiste en général à "choisir" nous-mêmes le nom du fichier stocké sur le serveur, plutôt que de nous servir du nom d'origine.<br />
        Pour cela on peut faire un compteur qui s'incrémente : 1.png, 2.png, 3.jpg, etc..</p>
        
        <h1 id="ancre_sur_systeme_de_connexion">Implémenter un système de connexion</h1>
        <p>En fait, avec les notions de PHP déjà vues au cours de ses chapitres, on est capable de faire de multiples choses, un forum, une newsletter, un livre d’or, et même implémenter un système de connexion, car cela nécessite :</p>
        <ul>
            <li>D’affichier du texte</li>
            <li>D’utiliser des variables</li>
            <li>De transmettre des variables via une zone de texte d’un formulaire</li>
            <li>D’utiliser des conditions simples <strong>if</strong> et <strong>else</strong></li>
            <li>D’utiliser des inclusions de fichiers avec <strong>include</strong> ou <strong>include_once</strong></li>
        </ul>
        <p>Alors, ready ?</p>
        
        <h2>Protéger le contenu d’une page par un mot de passe</h2>
        <p>Si on prend comme exemple le site de recette, on souhaite que <span class="mise_en_valeur4">les visiteurs puissent contribuer au site</span>, pour cela <span class="mise_en_valeur4">ils peuvent se connecter sur ce dernier et y être reconnus</span>.<br /><br />
        Pour faire simple, il y aura <span class="mise_en_valeur4">un formulaire de connexion avec e-mail et mot de passe et une fois la personne connectée, nous afficherons un message du type</span> :<br />
        "Bonjour utilisateur@exemple.com et bienvenue sur le site !"<br /><br />
        Et nous rajoutons une contrainte : La liste des recettes ne sera affichée que si l'utilisateur est connecté !<br /><br />
        Les utilisateurs seront déjà disponibles sous forme d'un tableau associatif PHP; Ils ont :</p>
        <ul>
            <li>Une clé 'password' avec un mot de passe</li>
            <li> Et une clé 'email' avec leur e-mail</li>
        </ul>
        <p>Premièrement, écrire un brouillon en mettant ses idées sur papier, ça peut paraître futile mais c’est important de réfléchir au code à mettre avant de se lancer.<br /><br />
        On peut y faire l’algorythme notamment, ou y lister les choses dont on doit faire attention (sécuriser telle ou telle partie, etc..).<br /><br />
        Concrêtement, on découperait cela en trois étapes :<br /><br />
        <ol>
            <li class="mise_en_valeur4">Qu'est-ce que je veux arriver à faire ?</li><br />
            <li class="mise_en_valeur4">Quel schéma de code utiliser, c’est à dire qu’on va commencer à le découper en plusieurs morceaux, eux-mêmes découpés en petits morceaux (c'est plus facile à avaler).</li><br />
            <li class="mise_en_valeur4">Les fonctions et connaissances en PHP dont on va avoir besoin (pour être sûr qu’on les utilise convenablement).</li>
        </ol>
        <p class="mise_en_valeur1">1. Poser le problème : Qu’est ce que je veux faire</p>
        <p> Je dois soumettre un email et un mot de passe dans un formulaire de connexion.<br />
        Si le formulaire est valide, j’affiche un message de succès, sinon un message d’erreur.<br />
        La liste de recette n’est affichée qu’à un utilisateur qui s’est connecté avec succès.</p>

        <p class="mise_en_valeur1">2. Schématiser le code</p>
        <p>Pour que l’utilisateur puisse entrer le mot de passe, le plus simple est de créer un formulaire.<br />
        Ce dernier sera directement intégré dans la page d’accueil du site telle qu’on le connaît déjà.<br />
        Trois situations peuvent survenir :</p>
        <ul>
            <li><span class="mise_en_valeur4">L’utilisateur n’est pas connecté</span> : Auquel cas le formulaire de contact s’affiche et la liste de recettes ne s’affiche pas.</li>
            <li><span class="mise_en_valeur4">L’utilisateur a soumis le formulaire avec le bon mot de passe pour ce dernier</span> : Le message de succès s’affiche, le formulaire de connexion ne s’affiche pas et les recettes ne s’affichent.</li>
            <li><span class="mise_en_valeur4">L’utilisateur a soumis le formulaire avec le mauvais mot de passe pour ce dernier</span> : Le message d’erreur s’affiche, le formulaire de connexion s’affiche et les recettes ne s’affichent pas.</li>
        </ul>
        <p>On doit donc créer une nouvelle page et adapter la page d’accueil :</p>
        <ul>
            <li><span class="mise_en_valeur4">login.php</span> : Contient un simple formulaire.</li>
            <li><span class="mise_en_valeur4">home.php</span> : Doit maintenant inclure un formulaire de connexion et une condition sur l’affichage des recettes.</li>
        </ul>
        <p class="mise_en_valeur1">3. Mobiliser les connaissances requises</p>
        <p>Coder la page login.php :</p>
        <p class="citation_code_balise">
        &lt;?php

        // Validation du formulaire
        if (isset($_POST['email']) &&  isset($_POST['password'])) {
            foreach ($users as $user) {
                if (
                    $user['email'] === $_POST['email'] &&
                    $user['password'] === $_POST['password']
                ) {
                    $loggedUser = [
                        'email' => $user['email'],
                    ];
                } else {
                    $errorMessage = sprintf('Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
                        $_POST['email'],
                        $_POST['password']
                    );
                }
            }
        }
        ?&gt;

        &lt;!--
           Si utilisateur/trice est non identifié(e), on affiche le formulaire
        --&gt;
        &lt;?php if(!isset($loggedUser)): ?&gt;
        &lt;form action="home.php" method="post"&gt;
            &lt;!-- si message d'erreur on l'affiche --&gt;
            &lt;?php if(isset($errorMessage)) : ?&gt;
                &lt;div class="alert alert-danger" role="alert"&gt;
                    &lt;?php echo $errorMessage; ?&gt;
                &lt;/div&gt;
            &lt;?php endif; ?&gt;
            &lt;div class="mb-3"&gt;
                &lt;label for="email" class="form-label"&gt;Email&lt;/label&gt;
                &lt;input type="email" class="form-control" id="email" name="email" aria-describedby="email-help" placeholder="you@exemple.com"&gt;
                &lt;div id="email-help" class="form-text"&gt;L'email utilisé lors de la création de compte.&lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="mb-3"&gt;
                &lt;label for="password" class="form-label"&gt;Mot de passe&lt;/label&gt;
                &lt;input type="password" class="form-control" id="password" name="password"&gt;
            &lt;/div&gt;
            &lt;button type="submit" class="btn btn-primary"&gt;Envoyer&lt;/button&gt;
        &lt;/form&gt;
        &lt;!-- 
            Si utilisateur/trice bien connecté on affiche un message de succès
        --&gt;
        &lt;?php else: ?&gt;
            &lt;div class="alert alert-success" role="alert"&gt;
                Bonjour &lt;?php echo $loggedUser['email']; ?&gt; et bienvenue sur le site !
            &lt;/div&gt;
        &lt;?php endif; ?&gt;
        </p>
        <p>Coder la page home.php :</p>
        <p class="citation_code_balise">
        &lt;!DOCTYPE html&gt;
        &lt;html&gt;
        &lt;head&gt;
            &lt;meta charset="UTF-8"&gt;
            &lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;
            &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
            &lt;title&gt;Site de Recettes - Page d'accueil&lt;/title&gt;
            &lt;link
                href="https://monsite.fr/style.css" 
                rel="stylesheet"
            &gt;
        &lt;/head&gt;
        &lt;body class="d-flex flex-column min-vh-100"&gt;
            &lt;div class="container"&gt;

            &lt;!-- Navigation --&gt;
            &lt;?php include_once('header.php'); ?&gt;

            &lt;!-- Inclusion du formulaire de connexion --&gt;
            &lt;?php include_once('login.php'); ?&gt;
                &lt;h1&gt;Site de Recettes !&lt;/h1&gt;

                &lt;!-- Si l'utilisateur existe, on affiche les recettes --&gt;
                &lt;?php if(isset($loggedUser)): ?&gt;
                    &lt;?php foreach(get_recipes($recipes, $limit) as $recipe) : ?&gt;
                        &lt;article&gt;
                            &lt;h3&gt;&lt;?php echo $recipe['title']; ?&gt;&lt;/h3&gt;
                            &lt;div&gt;&lt;?php echo $recipe['recipe']; ?&gt;&lt;/div&gt;
                            &lt;i&gt;&lt;?php echo display_author($recipe['author'], $users); ?&gt;&lt;/i&gt;
                        &lt;/article&gt;
                    &lt;?php endforeach ?&gt;
                &lt;?php endif; ?&gt;
            &lt;/div&gt;

            &lt;?php include_once('footer.php'); ?&gt;
        &lt;/body&gt;
        &lt;/html&gt;
        </p>
        <p>Résultat :</p>
        <span class="survol_image_autre"><img src="images_pour_mise_en_forme/resultat_formulaire.png" title="Résultat formulaire" alt="Résultat formulaire" /></span></p>
        <p>Il reste un détail, <span class="mise_en_valeur4">le système de connexion n’est pas persistant</span>, si on recharge la page d’accueil ou qu’on revient sur le site plus tard, l’information de connexion n’aura pas été conservée, c’est ce que l’on va voir à présent.</p>

        <h1 id="ancre_sur_la_conservation_des_donnees">Conservation des données grâce aux sessions et aux cookies</h1>
        <p>Deux notions permettent de conserver l’information entre deux pages PHP, pour une durée plus ou moins longue :</p>
        <ul>
            <li class="mise_en_valeur4">Les sessions</li>
            <li class="mise_en_valeur4">Les cookies</li>
        </ul>
        <p>Jusqu'ici, nous étions parvenus à passer des variables de page en page à l'aide d'URL ou de formulaires.<br />
        On sait ainsi envoyer d'une page à une autre le nom et le prénom du visiteur, mais dès qu'on charge une autre page, ces informations sont "oubliées", c'est pour cela qu'on a inventé les sessions et les cookies.</p>

        <h2>Comprendre le fonctionnement des sessions</h2>
        <p>Les sessions permettent de conserver des variables sur toutes les pages du site.</p>
        <p class="mise_en_valeur1">Étape 1 : Création d'une session unique</p>
        <ol>
            <li>Un visiteur arrive sur le site</li>
            <li>On demande à créer une session pour lui</li>
            <li>PHP génère alors un numéro unique<br />
            Ce numéro est souvent très grand, exemple : a02bbffc6198e6e0cc2715047bc3766f.<br />
            Ce numéro sert d'identifiant, c'est ce qu'on appelle un ID de session</span> ou <span class="mise_en_valeur1">PHPSESSID</span>.</li>
        </ol>
        <p class="mise_en_valeur1">Étape 2 : Création de variables pour la session</p>
        <p>Une fois la session générée, on peut créer une infinité de variable de sessions pour nos besoins, exexemple :</p>
        <ul>
        <li class="mise_en_valeur4">Une variable qui contient le nom du visiteur : <strong>$_SESSION['nom']</strong></li>
        <li class="mise_en_valeur4">Une autre qui contient son prénom : <strong>$_SESSION['prenom']</strong></li>
        <li class="mise_en_valeur4">Etc..</li>
        </ul>
        <p><span class="mise_en_valeur4">Le serveur conserve ces variables même lorsque la page PHP a fini d'être générée</span>, donc <span class="mise_en_valeur4">quelle que soit la page du site, on pourra récupérer le nom et le prénom du visiteur via la superglobale</span> <strong>$_SESSION</strong> :)</p>

        <p class="mise_en_valeur1">Étape 3 : Suppression de la session</p>
        <p>Lorsque le visiteur se déconnecte du site, la session est fermée et PHP "oublie" alors toutes les variables de session que vous l’on a créé.<br /><br />
        Il est en fait difficile de savoir précisément quand un visiteur quitte son site, en effet, lorsqu'il ferme son navigateur ou va sur un autre site, le nôtre n'en est pas informé.</p>
        <ul>
        <li><span class="mise_en_valeur4">Soit le visiteur clique sur un bouton "Déconnexion"</span> (que l’on a créé) avant de s'en aller</li>
        <li><span class="mise_en_valeur4">Soit on attend quelques minutes d'inactivité pour le déconnecter automatiquement</span> : On parle alors de <span class="mise_en_valeur1">timeout</span></li>
        </ul>
        <p>Pour activer ou détruire une session, deux fonctions le permettent :</p>
        <ul>
            <li><strong>session_start()</strong> : <span class="mise_en_valeur4">Démarre le système de sessions, si le visiteur vient d'arriver sur le site, alors un numéro de session est généré pour lui</span></li>
            <li><strong>session_destroy()</strong> : <span class="mise_en_valeur4">Ferme la session du visiteur, cette fonction est automatiquement appelée lorsque le visiteur ne charge plus de page du site pendant plusieurs minutes (c'est le timeout), mais on peut aussi créer une page "Déconnexion" si le visiteur souhaite se déconnecter manuellement.</span></li>
        </ul>
        <p>
        Il faut appeler <strong>session_start()</strong> sur chacune des pages <span class="gras">avant d'écrire le moindre code HTML ou PHP</span> (avant même la balise <strong>&lt;!DOCTYPE&gt;</strong>).<br />
        Si on oublie de lancer <strong>session_start()</strong>, on ne pourra pas accéder à la variable superglobale <strong>$_SESSION</strong>.</p>

        <h2>Informations complémentaires sur les sessions</h2>
        <p>Si on veut détruire manuellement la session du visiteur, on peut faire un lien "Déconnexion" amenant vers une page qui fait appel à la fonction <strong>session_destroy()</strong>.<br />
        Néanmoins, la session sera automatiquement détruite au bout d’un certain temps d’inactivité.</p>

        <p>Les sessions peuvent donc servir à de nombreuses choses, comme par exemple :</p>
        <ul>
            <li>Un script qui demande un identifiant et un mot de passe pour qu'un visiteur puisse se "connecter" (s'authentifier).<br />
            On peut enregistrer ces informations dans des variables de session et se souvenir de l'identifiant du visiteur sur toutes les pages du site.</li>
            <li>Puisqu'on retient son identifiant et que la variable de session n'est créée que s'il a réussi à s'authentifier, on peut l'utiliser pour restreindre certaines pages de notre site à certains visiteurs uniquement.<br />
            Cela permet de créer toute une zone d'administration sécurisée : Si la variable de session login existe, on affiche le contenu, sinon on affiche une erreur.<br />
            Cela rappel l'exercice sur la protection d'une page par mot de passe, sauf qu'ici, on peut se servir des sessions pour protéger automatiquement plusieurs pages.</li>
            <li>On se sert activement des sessions sur les sites de vente en ligne car cela permet de gérer un panier : On retient les produits que commande le client quelle que soit la page où il est.<br />
            Lorsqu'il valide sa commande, on récupère ces informations et on le fait payer.</li>
        </ul>
        <h2>Comprendre le fonctionnement des cookies</h2>
        <p class="mise_en_valeur4">Un cookie, c'est un fichier que l'on enregistre sur l'ordinateur du visiteur.</p>
        <p>Ce fichier contient du texte et permet de retenir des informations sur le visiteur.<br />
        La taille est limitée à quelques kilo-octets, aussi on ne peut pas stocker beaucoup d'informations à la fois, mais c'est en général suffisant.</p>
        <p>Par exemple, si on inscrit dans un cookie le pseudo du visiteur, la prochaine fois qu'il viendra sur le site on pourra lire son pseudo en allant regarder ce que son cookie contient.<br /><br />
        Les cookies ont une mauvaise image, mais pourtant ils sont utiles.<br /><br />
        Chaque cookie stocke généralement une information à la fois.<br />
        Si on veut stocker le pseudonyme du visiteur et sa date de naissance, il est donc recommandé de créer deux cookies.<br /><br />
        Les cookies sont stockés à un endroit précis selon le navigateur web utilisé.<br />
        Généralement, on ne touche pas directement à ces fichiers, mais on peut afficher à l'intérieur du navigateur la liste des cookies qui sont stockés et on peut les supprimer à tout moment.<br /><br />
        Par exemple dans Mozilla Firefox :</p>
        <ul>
            <li>Aller dans le menu Paramètres>Vie privée et sécurité>Cookies et données de sites</li>
            <li>Cliquer sur "Gérer les données"</li><br />
            On obtient la liste et la valeur de tous les cookies stockés.                
        </ul>

        <h2>Écrire un cookie</h2>
        <p class="mise_en_valeur4">Comme une variable, un cookie a un nom et une valeur.</p>
        <p>Pour écrire un cookie, on utilise la fonction PHP <strong>setcookie</strong> ("placer un cookie", en anglais).<br />
        On lui donne en général trois paramètres, dans l'ordre suivant :</p>
        <ol>
            <li class="mise_en_valeur4">Le nom du cookie (exemple : <strong>LOGGED_USER</strong>)</li>
            <li class="mise_en_valeur4">La valeur du cookie (exemple :  utilisateur@exemple.com )</li>
            <li class="mise_en_valeur4">La date d'expiration du cookie, sous forme de "timestamp" (exemple :  1090521508 )
            <p class="mise_en_valeur2">
            Le timestamp c’est le nombre de secondes écoulées depuis le 1er janvier 1970.<br />
            Le timestamp est une valeur qui augmente de 1 toutes les secondes.<br />
            Pour obtenir le timestamp actuel, on fait appel à la fonction <strong>time()</strong>.<br />
            Pour définir une date d'expiration du cookie, il faut ajouter au "moment actuel" le nombre de secondes au bout duquel il doit expirer.<br />
            Donc si on veut supprimer le cookie dans un an précisément, il faudra écrire : <strong>time() + 365*24*3600</strong><br /></li>
        </ol>

        <h2>Sécurisation d’un cookie</h2>
        <p class="mise_en_valeur4">Pour cela <span class="mise_en_valeur1">il faut configurer les options <strong>httpOnly</strong> et <strong>secure</strong></span> sur le cookie.<br />
        Cela rendra le cookie inaccessible en JavaScript sur tous les navigateurs qui supportent cette option (c'est le cas de tous les navigateurs récents).</p>
        <p class="mise_en_valeur1">Cette option permet de réduire fortement les risques de faille XSS sur le site, au cas où on aurait oublié d'utiliser <strong>htmlspecialchars</strong> à un moment ;)</p>
        <p>Voici comment créer un cookie sécurisé :</p>
        <p class="citation_code_balise" 
        &lt;?php
        // retenir l'email de la personne connectée pendant 1 an
        setcookie(
            'LOGGED_USER',
            'utilisateur@exemple.com',
            [
                'expires' => time() + 365*24*3600,
                'secure' => true,
                'httponly' => true,
            ]
        );
        </p>
        <p class="mise_en_valeur1">Ne jamais placer le moindre code HTML avant d'utiliser setcookie !</p>

        <h2>Affichage et récupération d’un cookie</h2>
        <p>Avant de commencer à travailler sur une page, PHP lit les cookies du client pour récupérer toutes les informations qu'ils contiennent.<br />
        Ces informations sont placées dans la superglobale <strong>$_COOKIE</strong> sous forme d'un tableau (array).</p>
        <p>De ce fait, si je veux ressortir l'e-mail du visiteur que j'avais inscrit dans un cookie, il suffit d'écrire :</p>
        <p class="citation_code_balise">
        $_COOKIE['LOGGED_USER']
        Bonjour &lt;?php echo $_COOKIE['LOGGED_USER']; ?&gt; !
        </p>
        <p class="mise_en_valeur4">À noter que si le cookie n'existe pas, la variable superglobale n'existe pas.<br />
        Il faut donc faire un <strong>isset</strong> pour vérifier si le cookie existe ou non.</p>

        <p>Les cookies viennent du visiteur, comme toute information qui vient du visiteur, elle n'est pas sûre; N'importe quel visiteur peut créer des cookies et envoyer ainsi de fausses informations à notre site.</p>

        <h2>Modification d’un cookie existant</h2>
        <p>Pour cela il faut refaire appel à <strong>setcookie</strong> en gardant le même nom de cookie, ce qui "écrasera" l'ancien.<br /><br />
        Par exemple, si c'est Clémentine Degaine qui se connecte au site, je ferai :</p>
        <p class="citation_code_balise">
        &lt;?php
        setcookie(
            'LOGGED_USER',
            'clementine.degaine@gmail.com',
            [
                'expires' => time() + 365*24*3600,
                'secure' => true,
                'httponly' => true,
            ]
        );
        </p>
        <p>Notons que par conséquent, le temps d'expiration du cookie est remis à zéro pour un an.</p>
        <p class="mise_en_valeur1">En résumé</p>
        <ul>
            <li>Les <span class="mise_en_valeur4">variables superglobales</span> sont des variables automatiquement créées par PHP, elles <span class="mise_en_valeur4">se présentent sous la forme de tableaux</span> (arrays) contenant différents types d'informations</li><br />
            <li>Dans les chapitres précédents, nous avons découvert deux superglobales essentielles : <strong>$_GET</strong> (qui <span class="mise_en_valeur4">contient les données issues de l'URL</span>) et <strong>$_POST</strong> (qui <span class="mise_en_valeur4">contient les données issues d'un formulaire</span>)</li><br />
            <li>La superglobale <strong>$_SESSION</strong> <span class="mise_en_valeur4">permet de stocker des informations qui seront automatiquement transmises de page en page pendant toute la durée de visite</span> d'un internaute sur notre site.<br />
            <span class="mise_en_valeur4">Il faut au préalable activer les sessions en appelant la fonction <strong>session_start()</strong></span></li><br />
            <li>La superglobale <strong>$_COOKIE</strong> <span class="mise_en_valeur4">représente le contenu de tous les cookies stockés par notre site sur l'ordinateur du visiteur</span><br />
            Les cookies sont de petits fichiers que l'on peut écrire sur la machine du visiteur pour retenir par exemple son nom; On crée un cookie avec la fonction <strong>setcookie()</strong></li>
        </ul>
    </article>
    <nav id="sous_menu">
        <p><a href="#ancre_sur_introduction_au_langage">Site web statique et dynamique</a></p>
        <p><a href="#ancre_sur_utilisation_balise_php">Utilisation des balises PHP</a></p>
        <p><a href="#ancre_sur_les_instructions">Les instructions</a></p>
        <p><a href="#ancre_sur_les_commentaires">Les commentaires</a></p>
        <p><a href="#ancre_sur_les_erreurs">Les erreurs PHP (mode de débogage)</a></p>
        <p><a href="#ancre_sur_les_variables">Les variables</a></p>
        <p><a href="#ancre_sur_les_types_de_donnees">Les types de données</a></p>
        <p><a href="#ancre_sur_les_comparaisons">Les opérateurs de comparaison</a></p>        
        <p><a href="#ancre_sur_les_conditions">Les conditions</a></p>
        <p><a href="#ancre_sur_les_boucles">Les boucles</a></p>
        <p><a href="#ancre_sur_les_tableaux">Les tableaux</a></p>
        <p><a href="#ancre_sur_les_fonctions">Les fonctions</a></p>
        <p><a href="#ancre_sur_les_plantages">Plantage de scripts</a></p>
        <p><a href="#ancre_sur_les_includes">L'inclusion</a></p>
        <p><a href="#ancre_sur_ecoute_url">Écouter les URL</a></p>
        <p><a href="#ancre_sur_les_formulaires_securises">Formulaires sécurisés</a></p>
        <p><a href="#ancre_sur_la_faille_xss">La faille XSS</a></p>
        <p><a href="#ancre_sur_le_partage_de_fichier">Activer le partage de fichier</a></p>
        <p><a href="#ancre_sur_systeme_de_connexion">Implémenter un système de connexion</a></p>
        <p><a href="#ancre_sur_la_conservation_des_donnees">Sessions et cookies</a></p>



    </nav>
</section>
<footer>
    <h1>Les liens utiles</h1>
    <div id="les_liens">
        <ul>
            <li><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1608357-memento-des-balises-html" title="Pratique pour vérifier les principales balises existantes." target="_blank" alt="Les balises HTML">Lien vers les balises HTML</a></li>
            <li><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1608902-memento-des-proprietes-css" title="Pratique pour vérifier les principales balises existantes." target="_blank" alt="Les balises HTML">Lien vers les balises CSS</a></li>
            <li><a href="http://fr.php.net/manual/fr/funcref.php"" title="Fonctions PHP classées par catégorie" target="_blank" alt="Fonctions PHP classées par catégorie">Lien vers les fonctions PHP</a></li>
        </ul>
        <ul>                        
            <li><a href="https://start.me/p/ELjr8p/html-css-markdown-git-et-github" title="Favoris" target="_blank" alt="Favoris">Favoris</a></li>
        </ul>
        <ul>
            <li><a href="mon_cv/CV.html" title="Mon CV" target="_blank" alt="Mon CV">Lien vers mon CV</a></li>
            <li><a href="mon_cv/CV_v2.html" title="Mon CV" target="_blank" alt="Mon CV">Lien vers mon CV version 2</a></li>
            <li><a href="contact.html" title="Formulaire de contact" target="_blank" alt="Formulaire de contact">Me contacter</a></li>
        </ul>
    </div>
</footer>

<?php
    include "./php/includes/templates/footer.tpl.php"
?>