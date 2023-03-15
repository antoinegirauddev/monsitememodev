<?php 
    include "./php/includes/templates/header.tpl.php";
?>
                    <h2>Le langage SQL</h2>
                </div>    
<?php 
    include "./php/includes/templates/nav.tpl.php"
?>               
</header> 
<section>
    <article>
        <p class="introduction_langage">Envie d'apprendre le langage SQL, pas de soucis :D :<br /></p>

        <h1 id="ancre_sur_SGBD">Le rôle du SGBD</h1>
        <p class="mise_en_valeur4">Une base de données permet d'enregistrer des données de façon organisée et hiérarchisée.</p>

        <p>Nous allons utiliser le Système de Gestion de Base de Données (SGBD) <span class="mise_en_valeur1">MySQL</span> même s’il en existe d’autres, mais l'essentiel de ce qu’on va apprendre avec MySQL fonctionnera de la même manière avec un autre SGBD car le langage reste commun à tous : <span class="mise_en_valeur1">Le SQL</span>.</p>

        <p>Quelques présentations s’imposent :</p>
        <ul>
        <li><span class="mise_en_valeur1">MySQL</span> : MySQL est le plus connu des SGBD, c’est le plus utilisé (pour les sites WordPress notamment), car il était auparavant open-source (ce qui veut dire que son code et son utilisation étaient gratuits).<br />
        MySQL a depuis été racheté par Oracle Corporation, et n’est plus open-source, néanmoins, il en existe une "copie" open-source appelée <span class="mise_en_valeur4">MariaDB</span>, qui suit les mêmes règles de langage que MySQL.</li>

        <li><span class="mise_en_valeur1">Oracle Database</span> : SGBD qui est édité par Oracle Corporation (qui a racheté MySQL).<br />
        C’est très cher, mais utile pour traiter un très gros volume de données, ce sont presque exclusivement les grandes entreprises qui l’utilisent.</li>

        <li><span class="mise_en_valeur1">PostgreSQL</span> : L’autre grand <span class="mise_en_valeur4">SGBD open-source</span> disponible sur le marché, moins utilisé que MySQL car longtemps confiné au monde linuxien et un peu plus obscur.<br />
        Mais c’est en train de changer car c’est le SGBD qui suit le plus les recommandations du SQL, ainsi que le plus rapide ces dernières années, il est notamment utilisé par Instagram ou par Spotify.</li>

        <li><span class="mise_en_valeur1">SQLite</span> : Contrairement aux autres SGBD, <span class="mise_en_valeur4">SQLite stocke toute la base de données dans un seul et unique fichier</span>, il est aussi simple de configuration.<br />
        C’est aussi le SGBD utilisé par les applications Android (par exemple pour les films Netflix en mode hors-connexion) pour stocker de la donnée.</li>
        </ul>

        <h1>Installation locale</h1>
        <ul>
            <li>Soit on passe par MAMPP où tout est dedans</li><br />

            <li>Soit on installe MySQL à part de la manière suivante :<br /><br />
                <span class="citation_console">sudo apt update
sudo apt install mysql-community-server</span><br /><br />
                Ensuite pour le démarrer :<br /><br />
                <span class="citation_console">service mysql start</span></li>
        </ul><br />
        <p>Ensuite, il faudra définir le mot de passe de l’utilisateur root, cet utilisateur a tous les droits pour créer et modifier les bases de données :<br /><br />
        <span class="citation_console">mysqladmin -u root password 'tonmotdepasse'</span></p>
        
        <h1 id="ancre_sur_structure_donnees">Structuration des données</h1>
        <p class="mise_en_valeur4">La <span class="mise_en_valeur1">base de données</span> est constituée de <span class="mise_en_valeur1">tables</span>, dont chaque table est constituée de <span class="mise_en_valeur1">champs</span> (ou "<span class="mise_en_valeur1">colonnes</span>"), dont chaque champs est constitué d’<span class="mise_en_valeur1">entrées</span>.</p>
        <p class="mise_en_valeur4">La table est représentée sous forme de tableau, exemple :</p>
        <table>
            <tr>
            <td class="gras">Numéro</td>
            <td class="gras">Nom et prénom</td>
            <td class="gras">Adresse email</td>
            <td class="gras">Âge</td>
            <td class="gras">Mot de passe</td>
            </tr>
            <tr>
            <td>1</td>
            <td>Antoine Giraud</td>
            <td>psykadelicdream@free.fr</td>
            <td>37</td>
            <td>P4ssW0rd</td>
            </tr>
            <tr>
            <td>2</td>
            <td>Clémentine Degaine</td>
            <td>clementine.degaine@gmail.com</td>
            <td>41</td>
            <td>jm_les_c00kies</td>
            </tr>
        </table>
        <p class="mise_en_valeur4">Chaque ligne est une entrée.</p>
        <p>En résumé :</p>
        <p><span class="survol_image_autre"><img src="images_pour_mise_en_forme/resume_bdd.png" title="Résumé structure" alt="Résumé structure" /></span></p>
        <p>Exemple de tables dont on pourrait avoir besoin pour un site de partage de recettes :</p>
        <ul>
            <li><span class="mise_en_valeur4">users</span> : Stocke tous les comptes utilisateur du site</li>
            <li><span class="mise_en_valeur4">recipes</span> : Stocke toutes les recettes du site</li>
            <li><span class="mise_en_valeur4">comments</span> : Stocke tous les commentaires liés aux recettes</li>
        </ul>
        <p>À noter que MySQL, <span class="mise_en_valeur4">enregistre ses informations dans des fichiers</span> qui sont stockés sur le disque dur.<br />
        <span class="mise_en_valeur4">Il ne faut jamais ouvrir et/ou modifier ces fichiers directement</span>, on demande à MySQL d’enregistrer ou d’aller lire les choses, c’est lui qui se débrouille ensuite de tout réorganiser dans ses fichiers.</p>
        <p>Pour information, le <span class="mise_en_valeur1">CRUD</span> est le fait de pouvoir créer, lire, mettre à jour et effacer des données (<span class="mise_en_valeur1">C</span>reate, <span class="mise_en_valeur1">R</span>ead, <span class="mise_en_valeur1">U</span>pdate, <span class="mise_en_valeur1">D</span>elete), donc si on sait créer une base de données avec <strong>CREATE</strong>, des tables, des champs, lire les données avec <strong>SELECT</strong>, les mettre à jour avec <strong>UPDATE</strong>, et les supprimer avec <strong>DELETE</strong>, alors on connaît le CRUD.</p>

        <h1 id="ancre_sur_manipulation_bdd">Manipuler une base de données</h1>

        <h2>Créer une base de données</h2>
        <p>Lorsqu’on nomme une base de données, <span class="mise_en_valeur4">on ne doit pas mettre de caractères spéciaux</span> (espaces, etc..), il est également <span class="mise_en_valeur4">recommandé d’utiliser des caractères minuscules</span>.</p>
        <p>
        Pour se connecter à MySQL en console, on tapera la commande suivante :</p>
        <p class="citation_console">
        mysql -u root -p
        </p>
        <p>Le mot de passe de l’utilisateur root sera demandé.</p>

        <p>Pour créer la base de données, la commande est la suivante :</p>
        <p class="citation_console">
        CREATE DATABASE nomdelabase;
        </p>
        <p>Exemple :</p>
        <p class="citation_console">
        CREATE DATABASE l_ame_agie;
        </p>
        <p class="mise_en_valeur1">Le point virgule est nécessaire dans les commandes MySQL car il permet de signaler à SQL qu’on a terminé une instruction.</p>

        <p>Pour rentrer dans la base de données (pour l’utiliser, la sélectionner), il faut utiliser la commande :</p>
        <p class="citation_console">
        USE nomdelabase;
        </p>
        <p>Exemple :</p>
        <p class="citation_console">
        USE l_ame_agie;
        </p>

        <h2>Supprimer une base de données</h2>
        <p>Pour supprimer une base de données on utilisera la requête :</p>
        <p class="citation_console">
        DROP DATABASE nom_de_la_base_de_données</p>

        <h1 id="ancre_sur_type_champs">Les types de données MySQL</h1>
        <p>Il existe plusieurs types de champs, dont voici les principaux :</p>
        <ul>
            <li><strong>INT</strong> : <span class="mise_en_valeur4">Nombre entier</span></li>
            <li><strong>VARCHAR</strong> : <span class="mise_en_valeur4">Texte court (entre 1 et 255 caractères)</span></li>
            <li><strong>TEXT</strong> : <span class="mise_en_valeur4">Long texte</span></li>
            <li><strong>DATE</strong> : <span class="mise_en_valeur4">Date (jour, mois, année)</span></li>
            <li><strong>BOOLEAN</strong> : Il ne peut stocker que les <span class="mise_en_valeur4">valeurs true ou false</span></li>
            <li><strong>FLOAT</strong> : Le champ contiendra des <span class="mise_en_valeur4">chiffres décimaux</span></li>
        </ul>

        <h1 id="ancre_sur_manipulation_table">Manipuler une table</h1>

        <h2>Créer une table</h2>
        <p>Pour créer une table on utilisera la commande suivante :</p>
        <p class="citation_console">
        CREATE TABLE nom_de_la_table (
        nom_du_premier_champ avec les options du champs s’il y en a et le type de champs,
        nom_du_deuxieme_champ avec les options du champs s’il y en a et le type de champs
        );
        </p>
        <p>Exemple :</p>                    
        <p class="citation_console">
        CREATE TABLE utilisateurs (
        id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
        nom VARCHAR(100),
        prenom VARCHAR(100),
        vegan BOOLEAN DEFAULT false,
        email VARCHAR(255) NOT NULL UNIQUE
        );
        </p>
        <ul>
            <li><strong>DEFAULT</strong> : Sert à indiquer une <span class="mise_en_valeur1">valeur par défaut</span>, ce qui est utile afin de ne pas spécifier une valeur tout le temps; Ici on indique que par défaut la valeur sera <strong>false</strong>.</li>
            <li><strong>NOT NULL</strong> : Définit que la valeur <span class="mise_en_valeur1">ne peut pas être nulle</span></li>
            <li><strong>AUTO_INCREMENT</strong> : Configure le champ pour qu’il <span class="mise_en_valeur1">s’auto-incrémente</span> tout seul, pratique pour un id car il sera incrémenté de 1 à chaque création de lignes</li>
            <li><strong>PRIMARY KEY</strong> : Définit le champ comme étant une <span class="mise_en_valeur1">clé primaire</span><br />
            <span class="mise_en_valeur2">Toute table doit posséder un champ qui joue le rôle de clé primaire.<br />
            La clé primaire permet d'identifier de manière unique une entrée dans la table.<br />
            En général, on utilise le champ "id" comme clé primaire.<br />
            <span class="mise_en_valeur3">Il est important de prendre le réflexe de créer à chaque fois ce champ id en lui donnant l'index PRIMARY, ce qui aura pour effet d'en faire une clé primaire.</span><br />
            On en profitera en général pour cocher la case <strong>AUTO_INCREMENT</strong> pour que ce champ gère lui-même les nouvelles valeurs automatiquement (1, 2, 3, 4…).</span></li>
            </ul>
        <p>Pour vérifier le contenu de la base de données (la liste des tables), on utilise la commande suivante :</p>
        <p class="citation_console">
        SHOW tables;
        </p>
        <p>Pour demander le schéma d’une table, on utilisera la commande :</p>
        <p class="citation_console">
        SHOW COLUMNS FROM lenomdematable;
        </p>
        <p>Exemple :</p>
        <p class="citation_console">
        SHOW COLUMNS FROM utilisateurs;
        </p>

        <h1 id="ancre_sur_cles_etrangeres">Les clés étrangères</h1>
        <p>Admettons qu’on veuille ajouter une table villes (avec une colonne ville_id et une colonne libelle) pour que l’utilisateur puisse être rattaché à une ville.<br /><br />
        Il s’agira d’une relation <span class="mise_en_valeur1">1-N</span>, en effet une ville <span class="mise_en_valeur1">peut être liée à un ou plusieurs</span> utilisateurs.<br /><br />
        Dans ce cas, c’est la table côté "plusieurs" qui va être modifiée.</p>
        <p>Donc on va devoir :</p>
        <ol>
            <li><span class="mise_en_valeur4">Ajouter un champ dans la table utilisateurs</span>, par exemple ville_id</li>
            <li><span class="mise_en_valeur4">En faire une clé étrangère</span>, ce qui revient à modifier ce champ pour dire à MySQL que c’est une référence à l’identifiant (clé primaire) de la table ville</li>
            <li><span class="mise_en_valeur4">Indiquer le comportement en cas de suppression de la valeur du champ référencé</span> (par exemple, si on supprime SARCE <span class="mise_en_valeur4">alors qu’elle est utilisée/liée</span> à un ou plusieurs utilisateurs)<br />
            En gros cela revient à dire : Que fait-on dans le cas où la valeur utilisée dans la table villes est supprimée ?<br /><br />
            Pour cela, on utilise <strong>ON DELETE</strong> <span class="mise_en_valeur4">suivi de l’option dont voici la liste</span> :
            <ul>
                <li><strong>RESTRICT</strong> ou <strong>NO ACTION</strong> : MySQL va empêcher la suppression tant que "SARCE" est liée à au moins un utilisateur</li>
                <li><strong>SET NULL</strong>: MySQL va autoriser la suppression de "SARCE", et remplacera "ville_id" des utilisateurs qui y sont liés, par la valeur <strong>NULL</strong></li>
                <li><strong>CASCADE</strong> : L’option la plus courante, mais la plus dangereuse.<br />
                    Ici, MySQL va supprimer les utilisateurs en même temps que "SARCE" (il va donc <span class="mise_en_valeur4">supprimer tous les objets reliés</span>).</li>
            </ul>
            <li><span class="mise_en_valeur4">Indiquer le comportement en cas de mise à jour de la valeur du champ référencé</span> (par exemple, si on met à jour SARCE en SARCÉ alors qu’elle est utilisée/liée à un ou plusieurs utilisateurs).<br />
            Les options sont en fait les mêmes que pour <strong>ON DELETE</strong> :
            <ul>
                <li><strong>RESTRICT</strong> ou <strong>NO ACTION</strong> : MySQL va empêcher la mise à jour tant que "SARCE" est liée à au moins un utilisateur</li>
                <li><strong>SET NULL</strong>: MySQL va autoriser la mise à jour de "SARCE", et remplacera "ville_id" des utilisateurs qui y sont liés, par la valeur <strong>NULL</strong></li>
                <li><strong>CASCADE</strong> : MySQL va mettre à jour tous les objets reliés</li>
            </ul>
        </ol>
        <p>Ce qui donnera :</p>
        <p class="citation_console">
        ALTER TABLE utilisateurs ADD ville_id INT NOT NULL;
        ALTER TABLE utilisateurs ADD FOREIGN KEY (ville_id) REFERENCES villes (id_ville)
        ON DELETE CASCADE
        ON UPDATE CASCADE;
        </p> 
        <p>Admettons maintenant qu’on ait une relation <span class="mise_en_valeur1">N-N</span>.</p>
        <p>Par exemple un utilisateur serait lié à une ou plusieurs langues parlées, à l’inverse une langue parlée peut être liée à un ou plusieurs utilisateurs.</p>
        <p>On a donc, d’un côté, la table utilisateurs, et de l’autre la table langue_parlee.<br />
        Une relation 1-N n’est pas possible dans ce cas, alors on doit passer par une <span class="mise_en_valeur1">table de liaison</span> (<span class="mise_en_valeur4">qui va permettre la relation entre les deux tables</span>, utilisateurs et langue_parlee), on va l’appeler relation_langue_utilisateur dans notre exemple, cela donnera donc schématiquement <span class="mise_en_valeur1">1-N N-N N-1</span> <span class="mise_en_valeur4">grâce à notre table de laison</span>.</p>
        <p>On va donc dans un premier temps <span class="mise_en_valeur4">créer cette table de liaison en spécifiant</span> (elle n’a besoin que de cela) <span class="mise_en_valeur4">deux champs id référançant chaque table qu’elle relie</span>, <span class="mise_en_valeur1">à noter que la clé primaire sera l’association des deux id</span> :</p>
        <p class="citation_console">
        CREATE TABLE relation_langue_utilisateur (
        langue_parlee_id INT NOT NULL,
        utilisateur_id INT NOT NULL
        FOREIGN KEY (langue_parlee_id) REFERENCES languee_parlee (id_langue_parlee) ON DELETE RESTRICT ON UPDATE CASCADE
        FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs (id_utilisateur) ON DELETE RESTRICT ON UPDATE CASCADE
        PRIMARY KEY (langue_parlee_id, utilisateur_id)
        );
        </p>
        <br />
        
        <h1 id="ancre_sur_manipulation_des_donnees">Manipuler des données</h1>
        
        <h2>Insérer des données</h2>
        <p>Pour insérer des données on :</p>
        <ol>
            <li>Indique en SQL qu’on souhaite ajouter un objet avec <strong>INSERT INTO</strong></li>
            <li>Écrit ensuite le nom de la table dans laquelle on souhaite ajouter l’objet</li>
            <li>Écrit <span class="mise_en_valeur1">entre parenthèses</span> la liste des colonnes que l’on va ajouter, ainsi que leur <span class="mise_en_valeur1">ordre</span></li>
            <li>Ajoute le mot-clé <strong>SQLVALUES</strong> qui indique qu’on va ensuite déclarer les valeurs que l’on souhaite ajouter</li>
            <li>Écrit la liste des valeurs de l’objet qu’on souhaite ajouter, dans le même ordre que les colonnes citées dans l’étape 3, entre <span class="mise_en_valeur1">parenthèse séparés d’une virgule</span></li>
            <li>Termine par le point virgule</li>
        </ol>
        <p>Exemple :</p>
        <p class="citation_console">
        INSERT INTO 'utilisateur' ('nom', 'prenom', 'email')
        VALUES
        ('Giraud', 'Antoine', 'psykadelicdream@free.fr');
        </p>
        <p>À noter que si on exécute la commande plusieurs fois on aura un message d’erreur (en restant sur l’exemple de table précédent) car on avait déclaré que <strong>email</strong> était <strong>UNIQUE</strong>.</p>
        <p>On peut bien-sûr entrer plusieurs lignes à la fois, exemple :</p>
        <p class="citation_console">
        INSERT INTO `utilisateur` (`nom`, `prenom`, `email`)
        VALUES
        ('Giraud', 'Antoine', 'psykadelicdream@free.fr'),
        ('Degaine', 'Clémentine', 'clementine.degaine@gmail.com');
        </p>
        <p>Si on insère une valeur <span class="mise_en_valeur4">avec des apostrophes ou des guillemets</span>, <span class="mise_en_valeur1">on doit mettre un anti-slash</span> sinon MySQL comprendra que c’est un caractère de séparateur de champ, comme ceci :</p>
        <p class="citation_console">
        INSERT INTO 'utilisateur' ('nom', 'prenom', 'email')
        VALUES
        ('Giraud', 'p\'tit lutin', 'psykadelicdream@free.fr');
        </p>
        <p>Les valeurs de types <strong>BOOLEAN</strong>, <strong>INTEGER</strong> ou <strong>FLOAT</strong> ne nécessitent pas de guillemet par contre, exemple :</p>
        <p class="citation_console">
        INSERT INTO 'utilisateur' ('nom', 'prenom', 'email', 'chiffre_prefere')
        VALUES
        ('Giraud', 'p\'tit lutin', 'psykadelicdream@free.fr',69);
        </p>

        <h2>Afficher des données</h2>
        <p>Pour afficher les données d’une table on va utiliser le mot-clé <strong>SELECT</strong>, exemple :</p>
        <p class="citation_console">
        SELECT * FROM utilisateurs;
        </p>
        <p>Ici cela signifie donc : <span class="mise_en_valeur4">Récupère la donnée de toutes les colonnes de la table utilisateurs.</span></p>
        <p>Si on souhaite récupérer, non pas toutes les données de la table, mais juste les noms et prénoms, on va taper la commande suivante :</p>
        <p class="citation_console">
        SELECT 'nom', 'prenom' FROM utilisateur;
        </p>

        <h2>Modifier des données</h2>
        <p>Pour modifier des données on va utiliser la commande <strong>UPDATE</strong> comme ceci :</p>
        <p class="citation_console">
        UPDATE utilisateur SET email='clementine.degaine@gmail.com' WHERE id=1;
        </p>
        <p>Traduit cela donne :</p>
        <p class="mise_en_valeur4">Met à jour la table utilisateur, pour que la colonne email ait la valeur "clementine.degaine@gmail.com" où l’ID de l’utilisateur est 1.</p>

        <h2>Supprimer des données</h2>
        <p>Pour supprimer des données on va utiliser <strong>DELETE FROM</strong> <span class="mise_en_valeur4">suivi du nom de la table et du filtre pour pointer l'élément (ou les éléments) à supprimer</span>.</p>
        <p>Voici par exemple la commande pour supprimer le deuxième utilisateur :</p>
        <p class="citation_console">
        DELETE FROM utilisateur WHERE id=2;
        </p>
        
        <h2>Ordonner la sélection</h2>
        <p>On peut utiliser <strong>ORDER BY</strong> pour <span class="mise_en_valeur4">ordonner la sélection</span>, exemple :</p>
        <p class="citation_console">
        SELECT nom, prenom FROM utilisateurs ORDER BY nom ASC
        </p>
        <p>Ici on aura la liste de tous les noms et prénoms de la table utilisateurs, ordonnée par le nom de façon croissante (alphabétique pour le texte).</p>

        <h2 id="ancre_sur_jointure">Les jointures</h1>
        <p>Le mot-clé <strong>JOIN</strong> <span ondblclick="mise_en_valeur4">permet de joindre deux tables ensemble</span> pour en ressortir des données, exemple :</p>
        <p class="citation_console">
        SELECT * FROM utilisateurs JOIN langue ON utilisateur.langue_id=langue.id;
        </p>
        <p>Ici on vient de lier la table utilisateurs à la table langue et on y sélectionne les utilisateurs qui ont une langue présente dans la table langue.</p>

        <h1 id="ancre_sur_les_operations">Les opérations</h1>
        <p>Voici une liste des principales opérations:</p>
        <ul>
            <li class="mise_en_valeur4"><strong>COUNT</strong> : Compte</li>
            <li class="mise_en_valeur4"><strong>AVG</strong> : Moyenne</li>
            <li class="mise_en_valeur4"><strong>SUM</strong> : Somme</li>
            <li class="mise_en_valeur4"><strong>MAX</strong> : Maximum</li>
            <li class="mise_en_valeur4"><strong>MIN</strong> : Minimum</li>
        </ul>
        <p>Si on souhaite connaître l’utilisateur qui a le chiffre préféré le plus élevé, on fera :</p>
        <p class="citation_console">
        SELECT nom, MAX(chiffre_prefere) FROM utilisateurs;
        </p>
        <p>On peut compter le nombre d’utilisateurs qui ont un chiffre préféré supérieur ou égal à 50 :</p>
        <p class="citation_console">
        SELECT count(id) FROM utilisateurs WHERE chiffre_prefere>=50;
        </p>
        <p>Si on veut compter le nombre de nom de famille différent que l’on a dans la table, pas de soucis :</p>
        <p class="citation_console">
        SELECT COUNT(DISTINCT nom) FROM utilisateurs;
        </p>
        
        <h1 id="ancre_sur_les_vues">Créer une vue</h1>
        <p>Plutôt que de devoir retaper la même commande SQL à chaque fois qu’on souhaite extraire le même type de données, <span class="mise_en_valeur4">on peut sauvegarder les requêtes dans une vue</span>.</p>
        <p>MySQL a un système de <span class="mise_en_valeur1">vues</span> qui <span class="mise_en_valeur4">permet de créer des tables temporaires à partir d’une commande SQL</span>, exemple :</p>
        <p class="citation_console">
        CREATE VIEW utilisteurs_gmail AS SELECT * FROM utilisateurs WHERE email LIKE "%gmail.com";
        </p>
        <p>Là on vient de créer une vue utilisateurs_gmail qui contient le résultat de la requête qui suit, donc des utilisateurs ayant une adresse email finissant par gmail.com.</p>
        <p>À présent pour récupérer les utilisateurs, plus besoin de réécrire la requête, il suffit de faire :</p>
        <p class="citation_console">
        SELECT * FROM utilisateurs_gmail;
        </p>
        
        <h1 id="ancre_sur_modification_table">Modifier la structure d’une table</h1>
        <p>La base de données peut être amenée à évoluer, aussi il est nécessaire de connaître les requêtes permettant de modifier la structure de cette dernière.</p>

        <h2>Ajouter un champ</h2>
        <p>Pour ajouter une colonne/un champ dans une table, on utilisera <strong>ALTER TABLE</strong> et <strong>ADD</strong>, exemple :</p>
        <p class="citation_console">
        ALTER TABLE utilisateurs ADD taille INTEGER;
        </p>
        <p>Traduction :</p>
        <p class="mise_en_valeur4">Modifie la table utilisateurs, en rajoutant une colonne taille de type <strong>INTEGER</strong></p>
        <p>On peut bien entendu ajouter des options dans la requête pour que le champ soit un <strong>PRIMARY KEY</strong>, ou ait une valeur <strong>DEFAULT</strong> (<strong>DEFAULT valeur_par_defaut</strong>) ou encore <strong>NOT NULL</strong> par exemple pour mettre toutes les valeurs de cette colonne en <strong>NULL</strong>.</p>

        <h2>Modifier un champ</h2>
        <p>Pour modifier une colonne/un champ dans une table, on utilisera <strong>ALTER TABLE</strong> et <strong>MODIFY</strong>, cela peut servir par exemple si un champ qui est en <strong>VARCHAR(100)</strong> ne permet pas d’écrire tout le texte souhaité par des utilisateurs, on le passera dans ce cas en <strong>VARCHAR(255)</strong>.<br />
        Autre exemple, on veut renseigner des chiffres décimaux dans un champ alors qu'il est en type <strong>INTEGER</strong>, il faut donc le passer en <strong>FLOAT</strong> :</p>
        <p class="citation_console">
        ALTER TABLE utilisateurs MODIFY taille FLOAT;
        </p>

        <h2>Renommer un champ</h2>
        <p>Pour renommer une colonne/un champ dans une table, on utilisera <strong>ALTER TABLE</strong> et <strong>CHANGE</strong>, exemple :</p>
        <p class="citation_console">
        ALTER TABLE utilisateurs CHANGE taille taille_en_m FLOAT;
        </p>
        <p>Ici on voit une spécificité propre à MySQL, pour renommer une colonne, <span class="mise_en_valeur4">il faut aussi indiquer son type</span>.<br />
        <span class="mise_en_valeur4">Cela permet de modifier à la fois le nom et le type d’une colonne</span> dans une seule commande, et ce, même <span class="mise_en_valeur4">si on ne souhaite pas le modifier (réutiliser alors le même type)</span>.</p>
        <p>Cela n’est pas nécessaire si on utilise un autre SGBD.</p>

        <h2>Supprimer un champ</h2>
        <p>Pour supprimer une colonne/un champ dans une table, on utilisera <strong>ALTER TABLE</strong> également, mais cette fois avec <strong>DROP</strong> :</p>
        <p class="citation_console">
        ALTER TABLE utilisateurs DROP taille;
        </p>

        <h1>Importer et exporter des données</h1>
        <p>Grâce à phpMyAdmin on va pouvoir exporter des données et aussi en importer.<br />
        Cela a plusieurs avantages :</p>
        <ul>
            <li>Transmettre la base de données sur internet, car pour le moment les données sont en local mais il faudra les mettre en ligne chez l’hébergeur</li>
            <li>Effectuer une sauvegarde de la base de données, pratique en cas de plantage pour la restaurer</li>
            <li>Ou encore pour faire une copie d'une base de données, en local, pour y faire des tests plutôt que faire des requêtes directement en production</li>
        </ul>

        <h1 id="ancre_sur_connexion_bdd_avec_php">Côté PHP</h1>
        <p>On va pouvoir demander à PHP de communiquer avec la base de données.</p>
        <p><span class="survol_image_autre"><img src="images_pour_mise_en_forme/sql_cote_php.png" title="SQL côté PHP" alt="SQL côté PHP" /></span></p>
        <p>Voici ce qui peut se passer lorsque le serveur a reçu une demande d'un client qui veut poster un message :</p>
        <ol>
            <li>Le serveur utilise toujours PHP, il lui fait donc passer le message</li>
            <li>PHP effectue les actions demandées et se rend compte qu'il a besoin de MySQL, en effet, le code PHP contient à un endroit "Va demander à MySQL d'enregistrer ce message"; Il fait donc passer le travail à MySQL</li>
            <li>MySQL fait le travail que PHP lui a soumis et lui répond "OK, c'est bon !"</li>
            <li>PHP renvoie au serveur que MySQL a bien fait ce qui lui était demandé.</li>
        </ol>

        <h1>Se connecter à la base de données avec PHP</h1>
        
        <h2>Utilisation de PDO</h2>
        <p class="mise_en_valeur4">Pour se connecter à une base de données MySQL, il faut utiliser une extension PHP appelée <span class="mise_en_valeur1">PDO</span> ("<span class="mise_en_valeur1">P</span>HP <span class="mise_en_valeur1">D</span>ata <span class="mise_en_valeur1">O</span>bjects").<br />
        Cette extension est fournie avec PHP, mais <span class="mise_en_valeur">parfois il faudra l’activer</span>.</p>

        <p>Pour savoir si elle est activée, il suffit de le <span class="mise_en_valeur4">vérifier dans le phpinfo</span> (accessible depuis la page de MAMPP en local par exemple) en recherchant PDO.</p>
        <p class="mise_en_valeur4">Si besoin de l’activer, aller dans le fichier de configuration de PHP et décommenter la ligne de l’extension, et/ou rechercher la ligne qui commence par pdo_mysql.default_socket et la renseigner comme ceci :</p>
        <p class="citation_console">
        pdo_mysql.default_socket = /opt/lampp/var/mysql/mysql.sock
        </p>
        <p class="mise_en_valeur4">Ensuite redémarrer PHP (ou MAMPP, ce qui fera la même chose).</p>

        <h2>Connecter PHP à MySQL avec PDO</h2>
        <p>Maintenant que nous sommes certains que PDO est activé, nous pouvons nous connecter à MySQL.<br />
            ous allons avoir besoin de quatre renseignements :</p>
            <ol>
            <li><span class="mise_en_valeur1">Le nom de l'hôte</span> : C'est l'<span class="mise_en_valeur4">adresse IP de l'ordinateur où MySQL est installé</span>.<br />
            Le plus souvent, MySQL est installé sur le même ordinateur que PHP : Dans ce cas, mettre la valeur <span class="mise_en_valeur4">localhost</span>.</li>
            <li><span class="mise_en_valeur4">La base</span> : C'est le <span class="mise_en_valeur4">nom de la base de données à laquelle on souhaite se connecter</span>.</li>
            <li><span class="mise_en_valeur4">L'identifiant et le mot de passe</span>: Ils <span class="mise_en_valeur4">permettent de s’identifier</span>.<br />
            Il peut être nécessaire de se renseigner auprès de l’hébergeur pour les connaître; <span class="mise_en_valeur4">Sur MAMPP, la valeur de l'identifiant et du mot de passe est la même :</span> <span class="mise_en_valeur1">root</span>.</li>
        </ol>
        <p>Exemple de connexion à la base de données <strong>my_recipes</strong> :</p>
        <p class="citation_code_balise">
        &lt;?php
        // Souvent on identifie cet objet par la variable $conn ou $db
        $mysqlConnection = new PDO(
            'mysql:host=localhost;dbname=my_recipes;charset=utf8',
            'root',
            'root'
        );
        ?&gt;
        </p>

        <h1 id="ancre_sur_presence_erreurs">Tester la présence d’erreurs</h1>
        <p>Si on a renseigné les bonnes informations (nom de l'hôte, de la base, login et mot de passe), rien ne devrait s'afficher à l'écran.<br /><br />
        Toutefois, <span class="mise_en_valeur4">s'il y a une erreur</span> (on s’est trompé de mot de passe ou de nom de base de données, par exemple), <span class="mise_en_valeur4">PHP risque d'afficher toute la ligne qui pose l'erreur</span>, <span class="mise_en_valeur1">ce qui inclut le mot de passe !</span></p>
        <p>On ne voudra pas que les visiteurs puissent voir le mot de passe si une erreur survient, il est donc préférable de traiter l’erreur.</p>
        <p><span class="mise_en_valeur4">En cas d'erreur, PDO renvoie ce qu'on appelle une</span> <span class="mise_en_valeur1">exception</span>, <span class="mise_en_valeur4">qui permet de "capturer" l'erreur</span>, voici ce qu’on peut donc faire :</p>
        <p class="citation_code_balise">
        &lt;?php
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=my_recipes;charset=utf8', 'root', 'root');
        }
        catch (Exception $e)
        {
                die('Erreur : ' . $e→getMessage());
        }
        ?&gt;
        </p>
        <p>PHP essaie d'exécuter les instructions à l'intérieur du bloc <strong>try</strong>  :</p>
        <ol>
            <li>S'il y a une erreur, il rentre dans le bloc <strong>catch</strong> et fait ce qu'on lui demande (ici, on arrête l'exécution de la page en affichant un message décrivant l'erreur)</li>
            <li>Si au contraire tout se passe bien, PHP poursuit l'exécution du code et ne lit pas ce qu'il y a dans le bloc <strong>catch</strong>, la page PHP ne devrait donc rien afficher pour le moment.</li>
        </ol>

        <h1>Activer le détail des erreurs SQL</h1>
        <p>Lorsqu'une requête SQL "plante", bien souvent PHP nous dira qu'il y a eu une erreur à la ligne du <strong>fetchAll</strong> :</p>
        <p class="citation_console">
        Fatal error: Call to a member function fetchAll() on a non-object in index.php on line 13
        </p>
        <p>Ce n'est pas la ligne du <strong>fetchAll</strong> qui est en cause, c'est souvent qu’on a mal écrit la requête SQL quelques lignes plus haut.<br /><br />
        <span class="mise_en_valeur4">Pour afficher des détails sur l'erreur, il faut activer les erreurs lors de la connexion à la base de données via PDO.</span></p>
        <p class="mise_en_valeur4">Pour cela il faut adapter la création de l'objet <strong>$db</strong> :</p>
        <p class="citation_code_balise">
        &lt;?php
        $db = new PDO(
            'mysql:host=localhost;dbname=my_recipes;charset=utf8',
            'root',
            'root',
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
        );
        ?&gt;
        </p>
        <p class="mise_en_valeur4">Désormais, toutes les requêtes SQL qui comportent des erreurs les afficheront avec un message beaucoup plus clair.</p>
        <p>Supposons par exemple que l’on écrive mal le nom du champ :</p>
        <p class="citation_console">
        SELECT titlee FROM recipes
        </p>
        <p>L'erreur suivante s'affichera :</p>
        <p class="citation_console">
        Unknown column 'titlee' in 'field list'
        </p>
        <p>En effet, le champ s'appelle <strong>title</strong>.</p>

        <h1 id="ancre_sur_execution_sql_dans_php">Exéctuer des requêtes SQL dans PHP</h1>
        <p>Si on veut exécuter la requête suivante</p>
        <p class="citation_console">
        SELECT * FROM recipes
        </p>
        <p>.. dans MySQL depuis PHP à l’aide de l’objet PDO, alors on écrira :</p>
        <p class="citation_code_balise">
        &lt;?php
        $recipesStatement = $db->prepare('SELECT * FROM recipes');
        ?&gt;
        </p>
        <p>De même si on veut exécuter :</p>
        <p class="citation_console">
        SELECT title, author FROM recipes
        </p>
        <p>Alors on écrira :</p>
        <p class="citation_code_balise">
        &lt;?php
        $recipesStatement = $db->prepare('SELECT title, author FROM recipes');
        ?&gt;
        </p>

        <h1 id="ancre_sur_affichage_sql_dans_php">Afficher le résultat d’une requête SQL via PHP</h1>
        <p>Le soucis avec le code précédent c’est que <strong>$recipesStatement</strong> contient quelque chose d'inexploitable directement : Un objet <strong>PDOStatement</strong>.</p>
        <p>Cet objet va contenir la requête SQL que nous devons exécuter, et par la suite, les informations récupérées en base de données.<br />
        <span class="mise_en_valeur4">Pour récupérer les données, il faut demander à cet objet d'exécuter la requête SQL et de récupérer toutes les données dans un format "exploitable"</span> pour nous, c'est-à-dire <span class="mise_en_valeur4">sous forme d'un tableau PHP</span> :</p>
        <p class="citation_code_balise">
        &lt;?php
        $recipesStatement→execute();
        $recipes = $recipesStatement→fetchAll();
        ?&gt;
        </p>
        <p><strong>Fetch</strong> en anglais signifie "va chercher".<br />
        <span class="mise_en_valeur4">On récupère alors les données sous forme d’un tableau PHP.</span></p>
        <p>Voici un résumé de la connexion et des requêtes PHP et MySQL :</p>
        <p class="citation_code_balise">
        &lt;?php
        try
        {
            // On se connecte à MySQL
            $mysqlClient = new PDO('mysql:host=localhost;dbname=my_recipes;charset=utf8', 'root', 'root');
        }
        catch(Exception $e)
        {
            // En cas d'erreur, on affiche un message et on arrête tout
                die('Erreur : '.$e→getMessage());
        }

        // Si tout va bien, on peut continuer

        // On récupère tout le contenu de la table recipes
        $sqlQuery = 'SELECT * FROM recipes';
        $recipesStatement = $mysqlClient→prepare($sqlQuery);
        $recipesStatement→execute();
        $recipes = $recipesStatement→fetchAll();

        // On affiche chaque recette une à une
        foreach ($recipes as $recipe) {
        ?>
            &lt;p&gt;&lt;?php echo $recipe['author']; ?&gt;&lt;/p&gt;
            &lt?php
        }
        ?&gt;
        </p>
        <p>
        Encore un exemple, si l’on souhaite récupérer uniquement les recettes avec le champ <strong>is_enabled</strong> à <strong>TRUE</strong>, alors la requête sera :</p>
        Cela vous donne la requête :
        <p class="citation_code_balise">
        &lt;?php
        $sqlQuery = 'SELECT * FROM recipes WHERE is_enabled = TRUE';
        </p>

        <h1 id="ancre_sur_les_marqueurs">Utiliser des variables dans des requêtes : Les marqueurs</h1>
        <p class="mise_en_valeur4">Il est possible d’utiliser des variables de PHP dans les requêtes.</p>
        <p class="mise_en_valeur4">On identifie les variables dans les requêtes SQL, à l’aide de <span class="mise_en_valeur1">marqueurs</span>.</p>
        <p class="mise_en_valeur4">Les marqueurs sont des identifiants reconnus par PDO pour être remplacés lors de la préparation de la requête par les variables PHP, exemple :</p>
        <p class="citation_code_balise">
        &lt;?php
        $sqlQuery = 'SELECT * FROM recipes WHERE author = :author AND is_enabled = :is_enabled';

        $db→prepare($sqlQuery);
        $recipes = $db→execute([
            'author' =&gt; 'psykadelicdream@free.fr',
            'is_enabled' =&gt; true,
        ]);
        </p>
        <p class="mise_en_valeur4">Lors de l’exécution de la requête, les variables nommées vont être remplacées.</p>
        <p>Les marqueurs sont donc précédés par <strong>:</strong> (<strong>:is_enabled</strong> sera donc remplacé par le contenu de la variable <strong>is_enabled</strong>).</p>

        <h1 id="ancre_sur_insertion_valeurs_sql_depuis_php">Insérer des valeurs en base depuis PHP</h1>
        <p>Exemple pour ajouter une entrée dans MySQL :</p>
        <p class="citation_code_balise">
        &lt;?php
        $sqlQuery = 'INSERT INTO recipes(title, recipe, author, is_enabled) VALUES (:title, :recipe, :author, :is_enabled)';
        </p>
        <p>Utilisons cette requête SQL au sein d'un script PHP :</p>
        <p class="citation_code_balise">
        &lt;?php
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=my_recipes;charset=utf8', 'root', 'root');
        }
        catch (Exception $e)
        {
                die('Erreur : ' . $e→getMessage());
        }
        // Ecriture de la requête
        $sqlQuery = 'INSERT INTO recipes(title, recipe, author, is_enabled) VALUES (:title, :recipe, :author, :is_enabled)';

        // Préparation
        $insertRecipe = $mysqlClient→prepare($sqlQuery);

        // Exécution ! La recette est maintenant en base de données
        $insertRecipe→execute([
            'title' => 'Salade de fleurs',
            'recipe' => 'Etape 1 : Des fleurs! Etape 2 : Euh ...',
            'author' => 'psykadelicdream@free.fr',
            'is_enabled' => 1, // 1 = true, 0 = false
        ]);
        </p>
        <p>On remarquera que je n'ai pas passé de valeur pour le champ <strong>recipe_id</strong>.<br />
        C'est normal, le champ a la propriété <strong>AUTO_INCREMENT</strong>, MySQL lui attribuera une valeur automatiquement.</p>
        <p>Et si j'ai passé une valeur booléenne pour le champ <strong>is_enabled</strong>, c'est parce que j'ai fait le choix de stocker cette information sous forme d'entier :</p>
        <ul>
            <li><strong>0</strong> pour <span class="mise_en_valeur1">FAUX</span></li>
            <li><strong>1</strong> pour <span class="mise_en_valeur1">VRAI</span></li>
        </ul>
        <p>Donc la requête d’insertion de MySQL va prendre les valeurs des variables correspondantes (citées à travers les marqueurs :title, :recipe, etc..).</p>

        <h1>Modifier des valeurs depuis PHP</h1>
        <p>Admettons que les utilisateurs souhaitent maintenant modifier leur recettes, pour cela on utilisera <strong>UPDATE</strong> et <strong>SET</strong>.</p>
        <p>En imaginant qu’on fournit un formulaire d’édition et que l’on autorise les utilisateurs à éditer les champs <strong>title</strong> et <strong>recipe</strong>, on aura la requête SQL quivante :</p>
        <p class="citation_code_balise">
        UPDATE recipes SET title = :title, recipe = :recipe WHERE recipe_id = :id
        </p>

        <h1 id="ancre_sur_recap_commandes_sql">Récapitulatif des commandes SQL à connaître</h1>

        <p class="mise_en_valeur4">Création d’une base de données :</p>
        <p class="citation_console">
        CREATE DATABASE nom_de_la_base_de_donnees;
        </p>
        <p class="mise_en_valeur4">Suppression d’une base de données :</p>
        <p class="citation_console">
        DROP DATABASE nom_de_la_base_de_donnees;
        </p>
        <p class="mise_en_valeur4">Création d’une table :</p>
        <p class="citation_console">
        CREATE TABLE nom_de_la_table (
        nom_du_premier_champ type_de_donnees_du_champ options_du_champ,
        nom_du_seconde_champ type_de_donnees_du_champ options_du_champ
        );
        </p>
        <p class="mise_en_valeur4">Création d’une table (exemple) :</p>
        <p class="citation_console">
        CREATE TABLE nom_de_la_table (
        nom_de_l’id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
        deuxieme_nom_de_champ VARCHAR(100),
        troiseme_nom_de_champ BOOLEAN DEFAULT false,
        quatrieme_nom_de_champ VARCHAR(255) NOT NULL UNIQUE
        );
        </p>
        <p class="mise_en_valeur4">Sélection d’une table :</p>
        <p class="citation_console">
        USE nom_de_la_table;
        </p>
        <p class="mise_en_valeur4">Schéma d’une table :</p>
        <p class="citation_console">
        SHOW COLUMNS FROM nom_de_la_table;
        </p>
        <p class="mise_en_valeur4">Insertion de lignes :</p> 
        <p class="citation_console">
        INSERT INTO 'nom_de_la_table' ('nom_du_champ_1', 'nom_du_champ_2')
        VALUES ('premiere_ligne_valeur_du_champ_1', 'premiere_ligne_valeur_du_champ_2'),('premiere_ligne_valeur_du_champ_1', 'premiere_ligne_valeur_du_champ_2');
        </p>
        <p class="mise_en_valeur4">Sélectionner une ou plusieurs lignes :</p>
        <p class="citation_console">
        SELECT nom_colonne FROM nom_de_la_table WHERE condition;
        </p>
        <p class="mise_en_valeur4">Mettre à jour une ou plusieurs lignes :</p>
        <p class="citation_console">
        UPDATE nom_de_la_table SET nom_du_champ_a_mettre_a_jour='nouvelle_valeur' WHERE condition;
        </p>
        <p class="mise_en_valeur4">Supprimer une ou plusieurs lignes :</p>
        <p class="citation_console">
        DELETE FROM nom_de_la_table WHERE condition;
        </p>
        <p class="mise_en_valeur4">Ajouter un champ :</p>
        <p class="citation_console">
        ALTER TABLE nom_de_la_table ADD nom_du_champ type_de_donnees_du_champ;
        </p>
        <p class="mise_en_valeur4">Modifier un champ (par exemple pour le changer de type de données) :</p>
        <p class="citation_console">
        ALTER TABLE nom_de_la_table MODIFY nom_du_champ type_de_donnees_du_champ;
        </p>
        <p class="mise_en_valeur4">Renommer un champ (indiquer le type de données, même si on ne souhaite pas le changer) :</p>
        <p class="citation_console">
        ALTER TABLE utilisateurs CHANGE nom_du_champ nouveau_nom_du_champ type_de_donnees_du_champ;
        </p>
        <p class="mise_en_valeur4">Supprimer un champ :</p>
        <p class="citation_console">
        ALTER TABLE nom_de_la_table DROP nom_du_champ;
        </p>
        <p class="mise_en_valeur4">Définir un champ comme clé étrangère :</p>
        <p class="citation_console">
        ALTER TABLE nom_de_la_table ADD FOREIGN KEY (nom_du_champ_de_cle_etrangere) REFERENCES nom_de_la_table_vers_laquelle_on_fait_la_relation (nom_du_champ_vers_lequel_on_fait_la_relation) ON DELETE option_du_on_delete ON UPDATE option_du_on_update;
        </p>
        <p class="mise_en_valeur4">Options du <strong>ON DELETE</strong> (<strong>ON DELETE</strong> est facultatif) :</p>
        <ul class="mise_en_valeur4">
            <li><strong>RESTRICT</strong> ou <strong>NO ACTION</strong> : MySQL va empêcher la suppression de la valeur du champ pointé par la clé étrangère tant que la valeur sera utilisée.</li> 
            <li><strong>SET NULL</strong> : MySQL va autoriser la suppression de la valeur du champ pointé par la clé étrangère si elle est utilisée (ou non), et remplacera la valeur de la clé étrangère par la valeur <strong>NULL</strong>.</li>
            <li><strong>CASCADE</strong> : L’option la plus courante, mais la plus dangereuse.<br />
            MySQL va supprimer les lignes (dans la table où se trouve la clé étrangère) qui utilisent la valeur supprimée du champ pointé par la clé étrangère (il va donc supprimer tous les objets reliés).</li>
        </ul>
        <p class="mise_en_valeur4">Options du <strong>ON UPDATE</strong> (<strong>ON UPDATE</strong> est facultatif), les mêmes que pour <strong>ON DELETE</strong> :</p>
        <ul class="mise_en_valeur4">
            <li><strong>RESTRICT</strong> ou <strong>NO ACTION</strong> : MySQL va empêcher la mise à jour de la valeur du champ pointé par la clé étrangère tant que la valeur sera utilisée.</li>
            <li><strong>SET NULL</strong> : MySQL va autoriser la mise à jour de la valeur du champ pointé par la clé étrangère si elle est utilisée (ou non), et remplacera la valeur de la clé étrangère par la valeur <strong>NULL</strong>.</li>
            <li><strong>CASCADE</strong> : MySQL va mettre tous les objets reliés.</li>
        </ul>
        <p class="mise_en_valeur4">Exemple :</p>
        <p class="citation_console">
        ALTER TABLE utilisateurs ADD FOREIGN KEY (ville_id) REFERENCES villes (id_ville)
        ON DELETE CASCADE ON UPDATE CASCADE;
        </p>
        <p class="mise_en_valeur4">Créer une vue :</p>
        <p class="citation_console">
        CREATE VIEW nom_de_la_vue_a_creer AS requete_a_mettre_dans_la_vue;
        </p>


    </article>
    <nav id="sous_menu">
        <p><a href="#ancre_sur_SGBD">SGBD et SQL</a></p>
        <p><a href="#ancre_sur_structure_donnees">Structuration des données</a></p>
        <p><a href="#ancre_sur_manipulation_bdd">Manipuler une base de données</a></p>
        <p><a href="#ancre_sur_type_champs">Les types de données</a></p>
        <p><a href="#ancre_sur_manipulation_table">Manipuler une table</a></p>
        <p><a href="#ancre_sur_cles_etrangeres">Les clés étrangères</a></p>
        <p><a href="#ancre_sur_manipulation_des_donnees">Manipuler des données</a></p>
        <p><a href="#ancre_sur_jointure">Les jointures</a></p>
        <p><a href="#ancre_sur_les_operations">Les opérations</a></p>
        <p><a href="#ancre_sur_les_vues">Créer une vue</a></p>
        <p><a href="#ancre_sur_modification_table">Modifier la structure d'une table</a></p>
        <p><a href="#ancre_sur_connexion_bdd_avec_php">Côté PHP</a></p>
        <p><a href="#ancre_sur_presence_erreurs">Activer le détail des erreurs SQL</a></p>
        <p><a href="#ancre_sur_execution_sql_dans_php">Exéctuer des requêtes SQL dans PHP</a></p>
        <p><a href="#ancre_sur_affichage_sql_dans_php">Afficher le résultat d’une requête SQL via PHP</a></p>
        <p><a href="#ancre_sur_les_marqueurs">Utiliser des variables dans des requêtes</a></p>
        <p><a href="#ancre_sur_insertion_valeurs_sql_depuis_php">Insérer/modifier des valeurs en BDD via PHP</a></p>
        <p><a href="#ancre_sur_recap_commandes_sql">Récapitulatif des commandes SQL</a></p>



    </nav>
</section>
<footer>
    <h1>Les liens utiles</h1>
    <div id="les_liens">
        <ul>
            <li><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1608357-memento-des-balises-html" title="Pratique pour vérifier les principales balises existantes." target="_blank" alt="Les balises HTML">Lien vers les balises HTML</a></li>
            <li><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1608902-memento-des-proprietes-css" title="Pratique pour vérifier les principales balises existantes." target="_blank" alt="Les balises HTML">Lien vers les balises CSS</a></li>
            <li><a href="https://html5up.net/" title="Site qui propose des idées de design et qui donne le code HTML et CSS tout prêt !" target="_blank" alt="Design et code HTML et CSS tout prêt.">Lien vers HTML5up</a></li>
        </ul>
        <ul>
            <li><a href="http://validator.w3.org" title="Site qui permet de vérifier que son code HTML est ok, pour cela il suffit de transmettre le .html et on a le résultat." target="_blank" alt="Validateur de code HTML">Lien vers un validator.w3</a></li>
            <li><a href="http://colorschemedesigner.com/csd-3.5/" title="Site de couleurs pratique :)" target="_blank" alt="Site de couleurs pratique">Lien vers colorschemedesigner</a></li>
            <li><a href src="https://caniuse.com/" title="Pratique pour vérifier la compatibilité d'un code ou d'un format (exemple : MP3) avec les différents navigateurs" target="_blank" alt="Site caniuse">Lien caniuse.com pour compatibilité navigateur</a></li>
        </ul>
        <ul>
            <li><a href="mon_cv/CV.html" title="Mon CV" target="_blank" alt="Mon CV">Lien vers mon CV</a></li>
            <li><a href="mon_cv/CV_v2.html" title="Mon CV" target="_blank" alt="Mon CV">Lien vers mon CV version 2</a></li>
            <li><a href="contact.html" title="Formulaire de contact" target="_blank" alt="Formulaire de contact">Me contacter</a></li>
            <li><a href="https://start.me/p/ELjr8p/html-css-markdown-git-et-github" title="Favoris" target="_blank" alt="Favoris">Favoris</a></li>
        </ul>
    </div>
</footer>
<?php
    include "./php/includes/templates/footer.tpl.php"
?>