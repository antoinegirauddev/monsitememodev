<?php 
    include "./php/includes/templates/header.tpl.php";
?>
                    <h2>Git et GitHub</h2>
                </div>    
<?php 
    include "./php/includes/templates/nav.tpl.php"
?>       
</header> 
<section>
    <article>
        <p class="introduction_langage">Envie d'apprendre à utiliser Git et GitHub, pas de soucis :D :<br /></p>
      
        <h1 id="ancre_sur_introduction">Git : Le gestionnaire de versions</h1>
        <p class="mise_en_valeur4">Un <span class="mise_en_valeur1">gestionnaire de versions</span> est un programme qui permet aux développeurs de conserver un historique des modifications et des versions de tous leurs fichiers, on appelle aussi cela le <span class="mise_en_valeur1">versionning</span>.</p>
        <p>Le gestionnaire de versions permet de garder en mémoire :</p>
        <ul>
            <li>Chaque modification de chaque fichier</li>
            <li>Pourquoi elle a eu lieu</li>
            <li>Et par qui </li>
        </ul>
        <p>Si on travaille seul, on pourra donc <span class="mise_en_valeur4">garder l'historique de nos modifications ou revenir à une version précédente</span> facilement.</p>
        <p>Dans le cas où on travaille en équipe, le gestionnaire de version <span class="mise_en_valeur4">fusionne les modifications des personnes qui travaillent simultanément sur un même fichier</span>, grâce à cela on ne risque plus de voir son travail supprimé par erreur.</p>
        <p>Git est le système de contrôle de versions le plus utilisé aujourd'hui, c'est un programme qui a une structure décentralisée.<br />
        Cela signifie que l'historique complet du code n'est pas conservé dans un emplacement unique, <span class="mise_en_valeur4">chaque copie du code effectué correspond à un nouveau dépôt dans lequel est conservé l'historique des modifications</span>.</p>
        <p><span class="mise_en_valeur1">Git</span> et <span class="mise_en_valeur1">GitHub</span> sont deux choses différentes :</p>
        <ul>
            <li><span class="mise_en_valeur1">Git</span> : C'est un <span class="mise_en_valeur1">gestionnaire de versions</span>, on l'utilise pour <span class="mise_en_valeur4">créer un dépôt local et gérer les versions de nos fichiers.</li><br />
            <li><span class="mise_en_valeur1">GitHub</span> : C'est un <span class="mise_en_valeur1">service en ligne</span>, il va <span class="mise_en_valeur4">héberger notre dépôt</span>, dans ce cas, on parle de <span class="mise_en_valeur1">dépôt distant</span> puisqu'il n'est pas stocké sur notre machine.
        </ul>
        
        <h1 id="ancre_sur_difference_depot_local_et_distant">Différence entre dépôt local et dépôt distant</h1>
        <p class="mise_en_valeur4">Un <span class="mise_en_valeur1">dépôt local</span> est un <span class="mise_en_valeur1">entrepôt virtuel de notre projet</span>, il nous permet d'enregistrer les versions de notre code et d'y accéder au besoin.</p>
        <p class="mise_en_valeur4">Le <span class="mise_en_valeur1">dépôt distant</span> est un peu différent, il permet de stocker les différentes versions de notre code afin de garder un historique délocalisé, c'est-à-dire un historique hébergé sur Internet ou sur un réseau.</p>
        <p>On peut avoir plusieurs dépôts distants avec des droits différents (lecture seule, écriture, etc).<br />
        Cela est très pratique, par exemple si notre PC rend l'âme, alors on aura quand même accès à nos programmes sur ce dépôt distant.</p>
        <p>Il est conseillé de toujours commencer par copier nos sources sur un dépôt distant lorsqu'on commence un nouveau projet.</p>
        <p>Ce dernier peut aussi être rendu public pour que d'autre y ajoute des évolutions si besoin.</p>
        <p>Il est nécessaire de créer une copie locale, en effet <span class="mise_en_valeur4">le dépôt local est un clone du dépôt distant</span> et <span class="mise_en_valeur1">c'est sur ce dépôt local qu'on fera toutes les modifications de code</span>.</p>

        <h1 id="ancre_sur_plateformes_possibles">Plusieurs plateformes possibles</h1>
        <p>Il existe plusieurs outils intéressants pour héberger son code, voici une petite liste :</p>
        <ul>
            <li><span class="mise_en_valeur1">GitHub</span> : C'est un outil de communication et de collaboration entre plusieurs développeurs (ou toute autre personne qui écrit du texte), c'est une interface web créée pour faciliter l'interaction avec Git.<br />
            L'avantage de GitHub, c'est que depuis quelques années, il est devenu le book/portfolio des développeurs.<br />
            Dans beaucoup de processus de recrutement, on nous demande maintenant notre lien GitHub.<br />
            Il permet de mettre en avant la qualité de son code.<br /><br />
            GitHub est considéré comme un véritable réseau social, et permet de contribuer à des projets open source.<br />
            Il fonctionne par abonnement, mais il y a un abonnement gratuit qui est déjà très bien.</li><br />
            <li><span class="mise_en_valeur1">GitLab</span> : Principale alternative à GitHub depuis le rachat de GitHub par Microsoft ..<br />
            GitLab propose une version gratuite hebergée par ses soins ou sur nos propres serveurs.<br />
            Il existe aussi des versions payantes avec plus d'options.</li><br />
            <li><span class="mise_en_valeur1">Bitbucket</span> : Version de Atlassian, elle conviendra aussi bien aux étudiants ou petites équipes qu'aux grands groupes.<br />
            Une version gratuite est disponible.</li>
        </ul>

        <h1 id="ancre_sur_demarrage_github">Démarrer un projet sous GitHub</h1>
        <p>GitHub est donc un service en ligne qui permet d'héberger nos dépôts distants.</p>
        <p>Pour démarrer un projet, on doit tout d'abord créer son compte GitHub, on pourra y suivre nos différents projets grâce au tableau de bord (overview) ainsi que créer un repository (cela permet de mettre son projet sur GitHub).</p>

        <p>Pour créer un compte GitHub il suffit d'aller sur la page d'accueil (https://github.com/) et de cliquer sur <span class="mise_en_valeur4">Sign up</span>.</p>
        <p>De mon côté je viens de créer un compte antoine.giraud@free.fr, rattaché à ma boîte mail sur imp(en migration vers zimbra actuellement).</p>

        <p>Petite présentation de GitHub :</p>
        <ul>
            <li><span class="mise_en_valeur1">Overview</span> : Permet de <span class="mise_en_valeur4">consulter son tableau de bord personnel</span> pour :
                <ul>
                    <li class="mise_en_valeur4">Suivre les problèmes et extraire les demandes sur lesquelles on travaille ou que l'on suit.</li>
                    <li class="mise_en_valeur4">Accéder à ses principaux repositories et pages d'équipe.</li>
                    <li class="mise_en_valeur4">Rester à jour sur les activités récentes des organisations et des repositories auxquels on s'est abonné.</li>
                </ul></li><br />
            <li><span class="mise_en_valeur1">Repositories</span> : Emplacement où on peut créer et <span class="mise_en_valeur4">retrouver ses dépôts existants</span>.</li><br />
            <li><span class="mise_en_valeur1">Projects</span> : Où l'on peut <span class="mise_en_valeur4">créer un nouveau projet en cliquant sur "New project"</span>.</li><br />
            <li><span class="mise_en_valeur1">Pulls</span> : Permet de <span class="mise_en_valeur4">faire des demandes de modifications réalisées sur le code</span>; Ce sont des demandes de pull permettant d'informer les autres utilisateurs des modifications qu'on l'on a appliquées à une branche repository sur GitHub, et qu'on veut fusionner avec le code principal.</li><br />
            <li><span class="mise_en_valeur1">Explore</span> : C'est ici qu'on trouve de <span class="mise_en_valeur4">nouveaux projets open source sur lesquels travailler</span>, en parcourant les projets recommandés, en se connectant à la communauté GitHub et en recherchant des repositories par sujet ou par libellé.
        </ul>

        <h2>Créer son propre dépôt</h2>
        <p>Pour mettre son projet sur GitHub on doit créer un <span class="mise_en_valeur1">repository</span> (<span class="mise_en_valeur1">dépôt</span> en français) dans lequel il pourra être installé.</p>
        <p>Pour cela il suffit :</p>
        <ul>
        <li>D'aller dans le "+" en haut à droite et de cliquer sur "New repository"</li>
        <li>De choisir un nom simple pour le dépôt, comme "DeveloppementWeb"</li>
        <li>De choisir si on le met en public ou non (partagé ou non avec d'autres)</li>
        <li>De choisir si on souhaite ajouter un fichier README : README est un fichier qui indique les informations clés du projet, c'est à dire la description, l'environnement à utiliser, les dépendances possibles et les droits d'auteurs; C'est un peu comme le mode d'emploi de son projet.
        <li>Choisir si on veut un .gitignore : C'est un fichier qui permet d'ignorer certains fichiers de son projet Git</li>
        </ul>

        <h1 id="ancre_sur_demarrage_git">Démarrer avec Git</h1>
        <ul>
            <li>Dans un premier temps il faut <span class="mise_en_valeur4">installer Git</span> (via la logithèque sous la Mint par exemple, ou sur le site https://git-scm.com/download/)<br /><br />
            On peut également <span class="mise_en_valeur4">installer gitg</span> en supplément sur Linux, qui permet d'avoir une interface graphique (<span class="mise_en_valeur4">ou encore NetBeans</span> qui semble nettement mieux !)</li><br />
            <li>Ensuite il faut <span class="mise_en_valeur4">créer un dépôt local</span>, c'est-à-dire un dossier dans lequel toutes nos modifications seront enregistrées, on appelle cela initialiser un <span class="mise_en_valeur1">dépôt Git</span></li><br />

            <li>Puis on doit <span class="mise_en_valeur4">configurer son identité</span> :<br />
            Pour cela on commence par renseigner son nom et son adresse mail, information importante car on en aura besoin pour toutes nos modifications dans Git :<br /><br />
            <p class="citation_console">
            git config --global user.name "Antoine Giraud
            </p>
            <p class="citation_console">
            git config --global user.email antoine.giraud@free.fr
            </p>
            Pour vérifier que les paramètres ont bien été pris en compte, taper la commande :
            <p class="citation_console">
            git config –list
            </p>
            </li>
            <li>Avant dernière chose, on doit <span class="mise_en_valeur4">configurer les couleurs</span> pour plus de lisibilité des différentes branches :
            <p class="citation_console">
            git config --global color.diff auto
            </p>
            <p class="citation_console">
            git config --global color.status auto
            </p>
            <p class="citation_console">
            git config --global color.branch auto
            </p>
            </li>
            <li>Enfin, on doit <span class="mise_en_valeur4">configurer l'éditeur</span> :<br />
            Par défaut, Git utilise <span class="mise_en_valeur4">Vim</span> comme éditeur et <span class="mise_en_valeur4">Vimdiff</span> comme <span class="mise_en_valeur4">outil de merge</span>.<br /><br />
            <span class="mise_en_valeur4">L'outil de merge permet de fusionner deux parties distinctes d'un projet.</span><br />
            <p>On peut les modifier en tapant :</p>
            <p class="citation_console">
            git config --global core.editor xed
            </p>
            <p class="citation_console">
            git config --global merge.tool xed
            </p>
            </li>
        </ul>

        <h2 id="ancre_sur_creation_depot_local">Créer le dépôt local</h2>
        <p>Maintenant que l'on a configuré les paramètres de base, on va pouvoir <span class="mise_en_valeur4">créer le dépôt local</span>.</p>
        <p>Pour ce faire, deux solutions sont possibles :</p>
        <ul>
            <li><span class="mise_en_valeur4">Créer un dépôt local vide</span> pour accueillir un nouveau projet</li>
            <li><span class="mise_en_valeur4">Cloner un dépôt distant</span>, c'est-à-dire rapatrier l'historique d'un dépôt distant en local</li>  
        </ul>
        <p>On va choisir la première solution car on a aucun dépôt distant à cloner pour le moment.<br />
        On va donc <span class="mise_en_valeur4">initialiser son dépôt</span> en créant un dépôt local vide</p>

        <p>Première étape, <span class="mise_en_valeur4">créer un dossier sur l'ordinateur</span> (moi j'ai créé le dossier suivant : /data/Autre/Développement Web/) puis au choix :</p>
        <li>Dans gitg on peut cliquer sur "Ajouter" en haut à gauche</li>
        <li>En ligne de commande une fois s'être placé dans le dossier créé :
        <p class="citation_console">
        git init
        </p>
        À cette étape un dossier caché .git a été créé.<br />
        Ce dossier caché contient d'ailleurs tous les éléments non visibles de Git : La configuration, les "logs", les branches, etc..</li>

        <h1 id="ancre_sur_travail_depuis_depot_local">Travailler depuis le dépôt local Git</h1>
        <p><span class="survol_image_autre"><img src="images_pour_mise_en_forme/les_depots.png" title="Résumé des dépôts" alt="Résumé des dépôts" /></span></p>
        <p>Ce schéma représente le fonctionnement de Git, il est composé de 3 zones qui forment le <span class="mise_en_valeur4">dépôt local</span>, et du <span class="mise_en_valeur4">dépôt distant GitHub</span>.</p>

        <p class="mise_en_valeur1">Zones du dépôt local :</p>
        <ul>
            <li><span class="mise_en_valeur1">Le Working directory</span> : Cette zone correspond au <span class="mise_en_valeur4">dossier du projet sur l'ordinateur</span>, c'est à dire <span class="mise_en_valeur4">le dépôt que l'on vient de créer</span>.</li>
            <li><span class="mise_en_valeur1">Le Stage ou index</span> : Zone intermédiaire entre le working directory et le repository, elle représente <span class="mise_en_valeur4">tous les fichiers modifiés que l'on souhaite voir apparaître dans notre prochaine version de code</span>.</li>
            <li><span class="mise_en_valeur4">Le Repository</span> : Lorsque l'on crée de <span class="mise_en_valeur4">nouvelles versions d'un projet</span>, c'est dans cette zone qu'elles sont stockées.</li><br />
            Ces 3 zones sont donc présentes dans notre ordinateur, en local.
        </ul>
        <p class="mise_en_valeur1">En-dessous, on trouve le repository GitHub, c'est-à-dire notre dépôt distant :</p>
        <p>Imaginons un projet composé de 3 fichiers : fichier1, fichier2 et fichier3.</p>
        <p>Nous faisons une modification sur fichier1, puis une modification sur fichier2, depuis le working directory; Nous avons maintenant une version évoluée de notre projet.<br /><br />
        Nous aimerions sauvegarder cette version grâce à Git, c'est-à-dire la stocker dans le repository.</p>
        Et bien pour cela on va envoyer les fichiers modifiés (fichier1 et fichier2) du working directory vers l'index, on dit qu'<span class="mise_en_valeur4">on va indexer</span> fichier1 et fichier2.<br />
        Une fois les fichiers indexés, nous pouvons créer une nouvelle version de notre projet.</p>
        <p>Le terme <span class="mise_en_valeur4">stage</span> est aussi beaucoup utilisé par les développeurs à la place du terme <span class="mise_en_valeur4">index</span>; On peut dire <span class="mise_en_valeur4">indexer un fichier</span> ou <span class="mise_en_valeur4">stage un fichier</span>.</p>

        <p class="mise_en_valeur2">Depuis le 1er octobre 2020, tous les nouveaux dépôts créés sur GitHub sont appelés "main", au lieu de "master" comme c'était le cas historiquement.<br />
        Ce changement de terme a été opéré par la société GitHub afin d'adopter des références plus inclusives.<br />
        Les dépôts existants, eux, ne changent pas de nom. Nous verrons verrez donc les deux termes dans vos projets.</p>

        <p>Si on se réfère au schéma précédent, voici donc les étapes à faire pour envoyer nos fichiers (par exemple index.html et style.css) au dépôt distant :</p>
        <ol>
            <li><span class="mise_en_valeur1">Passer les fichiers vers l'index</span> avec la commande <strong>git add</strong> suivie des noms de fichiers :
            <p class="citation_console">
            git add index.html styles.css
            </p>
            </li><br />
            <li><span class="mise_en_valeur1">Créer une nouvelle version</span> (c'est à dire, archiver le projet en l'état) avec la commande <strong>git commit</strong> :
            <p class="citation_console">
            git commit -m "Ajout des fichiers html et css de base"
            </p>
            <span class="mise_en_valeur4"><strong>-m</strong> (comme message) est ce qu'on appelle un <span class="mise_en_valeur1">argument</span>, qui est ajouté à la commande principale.<br />
            Ici <strong>-m</strong> permet de définir un message particulier rattaché au commit effectué.<br />
            Si on n'utilise pas cet argument, la commande <strong>git commit</strong> ouvrira un éditeur de texte dans lequel on pourra saisir le message de commit.</span><br /><br />
            <span class="mise_en_valeur3">La description est très importante pour retrouver le fil de nos commits, et revenir sur un commit en particulier.</span></li><br />
            <li><span class="mise_en_valeur1">Envoyer notre commit sur le dépôt distant (pusher)</span> avec la commande <strong>git push</strong>.<br /><br />
            Mais avant de faire cette commande, notre premier push va vous demander un peu de configuration.<br />
            Pour commencer, on va devoir "relier" notre dépôt local au dépôt distant que l'on a créé sur GitHub précédemment; Pour cela :<br />
            <ol>
                <li>Aller sur GitHub</li>
                <li>Cliquer sur la petite image en haut à droite</li>
                <li>Cliquer sur "Your repositories"</li>
                <li>Cliquer sur le repository créé précédemment</li>
                <li>Copier le lien qui figure sur l'écran ou dans les options et retourner en console :
                <p class="citation_console">
                git remote add origin lien_copié
                </p>
                Taper  la commande :
                <p class="citation_console">
                git branch -M main
                </p>
                </li>
                Ça y est ! On a relié le dépôt local au dépôt distant.
            </ol><br />
            On peut donc envoyer des commits du repository vers le dépôt distant GitHub en utilisant la commande suivante :
            <p class="citation_console">
            git push -u origin main
            </p></li>
        </ol><br />
        <p>Admettons maintenant que l'on a modifié le fichier index.html en modifiant le titre via la balise h1.<br />
        On va donc refaire les 3 étapes :</p>
        <ol>
            <li><span class="mise_en_valeur1">Indexer le fichier</span> HTML modifié grâce à la commande : 
            <p class="citation_console">
            git add index.html
            </p></li>
            <li><span class="mise_en_valeur1">Créer une nouvelle version</span> grâce à la commande :
            <p class="citation_console">
            git commit -m “Modification du titre H1”
            </p></li>
            <li><span class="mise_en_valeur1">Envoyer la nouvelle version</span> sur le dépôt distant grâce à la commande :
            <p class="citation_console">
            git push origin main
            </p></li>
        </ol>

        <h1 id="ancre_sur_branches">Comprendre le système de branches</h1>
        <p>La branche principale (main ou master) portera l'intégralité des modifications effectuées.</p>
        <p>Le but n'est donc pas de réaliser les modifications directement sur cette branche, mais de les réaliser sur d'autres branches, et après divers tests, de les intégrer sur la branche principale.</p>

        <p>Git va créer une branche virtuelle, mémoriser tous les changements, et seulement quand on le souhaitera, les ajouter à notre application principale.<br />
        Il va vérifier s'il n'y a pas de conflits avec d'autres fusions, et hop, le tour est joué !</p>

        <p>Pour connaître les branches présentes dans notre projet, il faut taper la ligne de commande :</p>
        <p class="citation_console">
        git branch
        </p>
        <p>Dans un premier temps on aura que :</p>
        <p class="citation_console">
        * main
        </p>
        <p class="mise_en_valeur4">L'étoile signifie que c'est la branche sur laquelle on se situe, et que c'est sur celle-ci qu'actuellement on réalise nos modifications.</p>
        <p>Pour créer une branche, on utilise la commande :</p>
        <p class="citation_console">
        git branch nom_de_la_nouvelle_branche
        </p>
        <p>Pour aller de la branche main à la branche "nom_de_la_branche" on va utiliser la commande :</p>
        <p class="citation_console">
        git checkout nom_de_la_branche_souhaitee
        </p>
        <p>Si on refait un <strong>git branch</strong>, et qu'on est sur la branche "j_aime_les_fleurs" on aura donc le résultat :
        <p class="citation_console">
        * j_aime_les_fleurs
        </p>
        <p>On peut donc maintenant réaliser les modifications qu'on veut sans toucher à la branche principale.</p>
        <p>On peut aussi rebasculer sur la branche principale (main) à tout moment sans impacter les modifications de la branche j_aime_les_fleurs.</p>
        <p>Admettons que l'on a bien avancé sur le code d'un fichier dans la branche j_aime_les_fleurs, on va donc l'intégrer à la branche principale (main) en faisant un <strong>merge</strong>.</br/>
        <span class="mise_en_valeur1">Cette commande doit s'utiliser à partir de la branche dans laquelle on veut apporter des évolutions</span>, dans notre cas on va donc se positionner sur main :</p>
        <p class="citation_console">
        git checkout main
        </p>
        <p>Une fois qu'on est sur notre branche principale, on va <span class="mise_en_valeur4">fusionner la branche j_aime_les_fleurs avec celle-ci</span> en faisant le <span class="mise_en_valeur4">merge</span> :</p>
        <p class="citation_console">
        git merge j_aime_les_fleurs
        </p>

        <h1>Travailler avec un dépôt distant</h1>
        <h2 id="ancre_sur_recuperation_depot_distant">Récupérer un dépôt distant</h2>
        <p>Imaginons que l'on doit travailler sur un projet avec des amis.</p>
        <p>Ces derniers ont créé le repository sur GitHub et il est temps pour nous de récupérer le code pour apporter nos modifications :</p>
        <ol>
            <li>Tout d'abord, on doit <span class="mise_en_valeur4">récupérer l'URL du dépôt distant</span> : Cela se passe sur GitHub en allant sur le lien du dépôt distant (qu'on nous donne) puis cliquant sur le bouton "Code" pour copier le dépôt puis sur la section HTTPS, là on y trouvera le lien à copier</li>
            <li><span class="mise_en_valeur4">Retourner sur la console et se placer dans le dossier du projet</span></li>
            <li><span class="mise_en_valeur4">Taper la commander suivante pour copier en local un projet distant</span> :
            <p class="citation_console">
            git clone lien_copie
            </p></li>
            <li><span class="mise_en_valeur4">Lancer la commande</span> :
            <p class="citation_console">
            git remote add nom_court lien_copie
            </p>
            <span class="mise_en_valeur2">nom_court représente le <span class="mise_en_valeur1">nom court</span> que l'on utilisera ensuite pour appeler notre dépôt, on est libre de l'appeler comme bon nous semble mais un nom court et simple est toujours plus facile.<br />
            <span class="mise_en_valeur4">Cette ligne ne permet pas de copier le dépôt mais permet de dire au dépôt que l'on pointe vers le dépôt distant.</span>
            En d'autres termes, <strong>git remote add</strong> <span class="mise_en_valeur4">permet de lire un dépôt à un nom court pour une plus grande facilité d'utilisation</span>.</li>
        </ol>

        <h2 id="ancre_sur_maj_depot_local">Mettre à jour le dépôt local</h2>
        <p>Imaginons que l'un des amis ait ajouté des modifications sur la branche main et que l'on souhaite les récupérer, on utilisera pour cela la commande <strong>git pull</strong> :</p>
        <p class="citation_console">
        git pull nom_court main
        </p>
        <p><strong>git pull</strong> <span class="mise_en_valeur4">permet donc de dupliquer un dépôt GitHub en local</span>.</p>
        
        <h2 id="ancre_sur_le_pull_request">Le pull request</h2>
        <p>Une <span class="mise_en_valeur1">pull request</span>, ou <span class="mise_en_valeur1">demande de pull</span>, en français, est une <span class="mise_en_valeur4">fonctionnalité de GitHub qui permet de demander aux propriétaires d'un repository l'autorisation de fusionner nos changements sur la branche principale ou toute autre branche sur laquelle on souhaite apporter nos modifications</span>.</p>
        <p>Donc si l'on crée une pull request, on doit au préalable :</p>
        <ul>
            <li class="mise_en_valeur4">Créer une nouvelle branche</li>
            <li class="mise_en_valeur4">Envoyer notre code sur cette même branche</li>
        D'ailleurs, lorsque ces deux conditions sont remplies, un bandeau apparaît à l'écran pour nous suggérer de créer une pull request.
            <li class="mise_en_valeur4">Ajouter un commentaire pour expliquer les raisons de nos modifications.</li>
        GitHub indique les modifications effectuées par un code couleur.<br />
        Les lignes en rouge indiquent une suppression, et les lignes vertes une addition.<br /></li>
            <li class="mise_en_valeur4">Cliquer sur <span class="mise_en_valeur1">Create pull request</span> pour valider la pull request</li>
        </ul>

        <h2 id="ancre_sur_demande_relecture_code">Demander une relecture du code</h2>
        <p>Sur des projets d'envergure, il peut arriver que notre code ne puisse être fusionné sur la branche principale sans être relu et validé par d'autres membres du projet.</p>
        <p>C'est ce qu'on appelle une <span class="mise_en_valeur1">Code Review</span>, ou <span class="mise_en_valeur1">revue de code</span>, en français.</p>
        <p>Cela permet de prévenir les erreurs éventuelles, de discuter sur un choix, une prise de position ou même de poser des questions.</p>

        <h1 id="ancre_sur_erreurs_depot_local">Les erreurs sur un dépôt local</h1>
        
        <h2>Création d'une branche par erreur</h2>

        <p>Pour <span class="mise_en_valeur4">supprimer une branche créée par erreur</span>, on va exécuter la commande suivante :</p>
        <p class="citation_console">
        git branch -d brancheTest
        </p>
        <p>Si on a déjà fait des modifications dans la branche que l'on souhaite supprimer, on utilisera alors la commande :</p>
        <p class="citation_console">
        git branch -D brancheTest
        </p>
        <p class="mise_en_valeur1">La suppression de cette branche entraînera la suppression de tous les fichiers et modifications que nous n'aurons pas commités sur cette branche.</p>

        <h2>Modification de la branche principale par erreur</h2>
        <p>Il peut arriver de modifier une branche principale par erreur...</p>
        <p>Si on a modifié notre branche principale (main ou master) avant de créer notre branche et que nous n'avons pas fait le commit, ce n'est pas bien grave.<br />
        Il vous suffit de faire une <span class="mise_en_valeur4">remise</span>, ou <span class="mise_en_valeur4">un stash</span> en anglais :</p>

        <p>Allons sur notre branche principale pour modifier des fichiers.
        Nous pouvons à tout moment voir l'état de nos fichiers, c'est-à-dire voir les changements qui ont été indexés ou ceux qui ne l'ont pas été, avec la commande suivante :</p>
        <p class="citation_console">
        git status
        </p>
        <p>On peut voir nos fichiers modifiés mais qui n'ont pas encore été commités.</p>
        <p>Créer un stash avec la commande suivante :</p>
        <p class="citation_console">
        git stash
        </p>
        <p>Maintenant créons notre branche "brancheCommit" :</p>
        <p class="citation_console">
        git branch brancheCommit
        </p>
        <p>Basculons sur cette dernière :</p>
        <p class="citation_console">
        git checkout brancheCommit
        </p>
        <p>Enfin, on peut appliquer le stash pour :</p>
        <ul>
            <li class="mise_en_valeur4">Récupérer les modifications que l'on a rangées dans le stash</li>
            <li class="mise_en_valeur4">Appliquer ces modifications sur notre nouvelle branche</li>
        </ul>
        <p>Avec la commande :</p>
        <p class="citation_console">
        git stash apply
        </p>
        <p class="mise_en_valeur4">Cette commande va appliquer le dernier stash qui a été fait.</p>

        <p>Si pour une raison ou pour une autre, on a créé plusieurs stash, et que le dernier n'est pas celui que l'on souhaite appliquer, pas de panique, il est possible d'en appliquer un autre :</p>

        <ul>
            <li>En premier lieu, regardons la liste de nos stash avec la commande suivante :
            <p class="citation_console">
            git stash list
            </p>
            <p>Cette commande va retourner un tableau des stash avec des identifiants comme :</p>
            <p class="citation_console">
            stash@{0} : WIP on master : f337838 création de la branche master
            </p></li>
            <li><p>Il suffira alors d'appeler la commande git stash avec l'idendifiant :</p>
            <p class="citation_console">
            git stash apply stash@{0}
            </p></li>
        </ul>

        <p>Maintenant, admettons que l'on a réalisé nos modifications et qu'en plus on a fait le commit.<br />
        Le cas est plus complexe, puisque l'on a enregistré nos modifications sur la branche principale, alors que nous ne le devions pas.<</p>
        <p>Pour réparer cette erreur, <span class="mise_en_valeur4">on doit analyser nos derniers commits avec la fonction <strong>git log</strong>.<br />
        <span class="mise_en_valeur4">On va alors récupérer l'identifiant du commit que l'on appelle le <span class="mise_en_valeur1">hash.</span></span><br /><br />
        Par défaut, <span class="mise_en_valeur4"><strong>git log</strong> va nous lister par ordre chronologique inversé tous nos commits réalisés</span>.<br />
        Maintenant que nous disposons de notre identifiant, gardons-le bien de côté.<br /><br />
        <span class="mise_en_valeur4">Vérifions que nous sommes sur notre branche principale et réalisons la commande suivante :</span></p>
        <p class="citation_console">
        git reset --hard HEAD^
        </p>
        <p class="mise_en_valeur4">Cette ligne de commande va supprimer de la branche principale notre dernier commit.</p>
        <p>Le <strong>HEAD^</strong> indique que c'est bien le dernier commit que nous voulons supprimer.<br />
        <span class="mise_en_valeur4">L'historique sera changé, les fichiers seront supprimés.</span></p>
        <p>Créons ensuite notre nouvelle branche.</p>
        <p class="citation_console">
        git branch brancheCommit
        </p>
        <p>On va basculer sur cette branche.</p>
        <p class="citation_console">
        git checkout brancheCommit
        </p>
        <p>Maintenant, on est sur la bonne branche.<br /><br />
        Renouvelons la commande <strong>git reset</strong>, qui <span class="mise_en_valeur4">va appliquer ce commit sur notre nouvelle branche</span>.<br />
        <span class="mise_en_valeur4">Il n'est pas nécessaire d'écrire l'identifiant en entier, seuls les 8 premiers caractères sont nécessaires.</span></p>
        <p class="citation_console">
        git reset --hard ca83a6df
        </p>

        <h2>Message de commit erroné</h2>
        <p>Imaginons que nous venons de faire un commit et que nous avons fait une erreur dans notre message.</p>
        <p><span class="mise_en_valeur4">L'exécution de la commande <strong>git commit --amend -m "nouveau_message_a_mettre"</strong>, lorsqu'aucun élément n'est encore modifié, nous permet de modifier le message du commit précédent sans modifier son instantané.</span><br />
        <span class="mise_en_valeur2">L'option -m permet de transmettre le nouveau message.</span></p>
        <p class="citation_console">
        git commit --amend -m “nouveau message du commit”
        </p>
        <p>On vérifie avec <strong>git log</strong>.</p>

        <h2>Oubli d'un fichier dans le dernier commit</h2>
        <p class="mise_en_valeur4">La fonction <strong>git --amend</strong>, permet de modifier le dernier commit.</p>
        <p>Dans un premier temps ajouter le fichier oublié :</p>
        <p class="citation_console">
        git add FichierOublie.txt
        </p>
        <p>Ensuite faire la commande :</p>
        <p class="citation_console">
        git commit --amend --no-edit
        </p>
        <p>Notre fichier a été ajouté à notre commit et <span class="mise_en_valeur4">grâce à la commande <strong>--no-edit</strong>, on a pas modifié le message du commit</span>.</p>
        <p class="mise_en_valeur4">En bref <strong>git commit --amend</strong> permet de sélectionner le dernier commit afin d'y ajouter de nouveaux changements en attente.</p>
        <p>On peut donc ajouter ou supprimer des changements afin de les appliquer avec <span>commit --amend</span>.</p>
        <p class="mise_en_valeur4">Si aucun changement n'est en attente, <strong>--amend</strong> nous permet de modifier le dernier message de log du commit avec <strong>-m</strong>.</p>

        <h1 id="ancre_sur_erreurs_depot_distant">Les erreurs sur un dépôt distant</h1>

        <h2>Annuler son dernier commit</h2>
        <p>Il est possible d'annuler son commit public avec la commande <strong>git revert</strong>.</p>
        <p class="mise_en_valeur4">L'opération <strong>revert</strong> annule un commit en créant un nouveau commit.</p>
        <p>C'est une méthode sûre pour annuler des changements, car elle ne risque pas de réécrire l'historique du commit.</p>
        <p class="citation_console">
        git revert HEAD^
        </p>

        <p class="mise_en_valeur1"><strong>git revert</strong> sert à annuler des changements commités, tandis que <strong>git reset HEAD</strong> permet d'annuler des changements non commités.</p>
        <p>Du coup, <strong>git reset</strong> va revenir à l'état précédent sans créer un nouveau commit, alors que <strong>git revert</strong> va créer un nouveau commit.</p>
        <p class="mise_en_valeur1">Toutefois, attention, <strong>git revert</strong> peut écraser nos fichiers dans notre répertoire de travail, il nous sera donc demandé de commiter nos modifications ou de les remiser.</p>

        <h2>Revenir en arrière</h2>

        <p class="mise_en_valeur4">La commande <strong>git reset</strong> permet d'annuler les changements, elle peut être appelée de trois façons différentes avec <strong>--soft</strong>, <strong>--mixed</strong> et <strong>--hard</strong>.</p>
        <ul class="mise_en_valeur4">
            <li><strong>git reset notreCommitCible --hard</strong> : Cette commande permet de revenir à n'importe quel commit mais en oubliant absolument tout ce qu'il s'est passé après, il est donc important de vérifier plusieurs fois avant de la lancer car on pourrait perdre toutes nos modifications.</li><br />
            <li><strong>git reset notreCommitCible -- mixed</strong> : Cette commande va permettre de revenir juste après notre dernier commit ou le commit spécifié sans supprimer nos modifications en cours, elle permet également, dans le cas de fichier indexés mais pas encore commités, de les désindexer.</li><br />
            <li><strong>git reset notreCommitCible -- soft</strong> : Cette commande permet de se placer sur un commit spécifique afin de voir le code à un instant donné, ou de créer une branche partant d'un ancien commit, elle ne supprime aucun fichier, aucun commit, et ne crée pas de HEAD détaché.</li>
        </ul>
        <p>Si rien n'est spécifié après <strong>git reset</strong>, par défaut il exécutera un  :</p>
        <p class="citation_console">
        git reset --mixed HEAD~
        </p>

        <h2>Cas d'un conflit</h2>
        <p>Nous avons avons modifié du code pour afficher le message "Une super cagnotte !" dans un fichier alors qu'était déjà en place le message "Une cagnotte".</p>
        <p>Lorsque l'on va fusionner les deux branches, les choses ne vont donc pas très bien se passer :</p>
        <p class="citation_console">
        git checkout main git merge ameliorationCagnotte Auto-merging cagnotte.php CONFLICT
         (content): merge conflict in cagnotte.php Automatic merge failed; fix conflicts and
         then commit the result
        </p>
        <p>Git va voir que sur la même ligne on essaie de fusionner deux choses différentes.<br />
        Il ne va pas pouvoir deviner laquelle prendre, la ligne "Une cagnotte", ou bien "Une super cagnotte !" ?<br /><br />
        Git va donc afficher un conflit sur le fichier cagnotte.php et arrêtera le processus de fusion ou merge.<br />
        Ce conflit, on va devoir le résoudre en ouvrant le fichier avec notre éditeur habituel</p>
        <p class="citation_console">
        <<<<<<< HEAD Une cagnotte ======= Une super cagnotte ! >>>>>>> ameliorationCagnotte
        </p>
        <p>Maintenant, réglons les conflits en comparant les deux lignes et en choisissant quelle modification on souhaite garder; Ici, il faut garder "Une super cagnotte !", on va donc supprimer les autres lignes et ne garder que celle-ci : Une super cagnotte !</p>
        <p>Maintenant que nous avons résolu le conflit, il nous reste à le dire à Git :</p>
        <p class="citation_console">
        git add cagnotte.php git commit
        </p>
        <p>Git va détecter que nous avons résolu les conflits et va nous proposer un message de commit.<br />
        Nous pouvons bien entendu le modifier.</p>

        <h2>Ajout d'un mauvais fichier au commit</h2>
        <p>En cas d'ajout d'un mauvais fichier au commit, nous avons une fonction qui permet de re
        monter le temps : <strong>git revert</strong>, exemple :
        <p class="citation_console">
        git revert HEAD
        </p>
        <p>On revient à l'état précédent mais avec un nouveau commit, <span class="mise_en_valeur4">ainsi on ne perd pas l'historique</span>.</p>
        <p>Une fois notre commit "annulé", on va pouvoir enlever notre fichier et réaliser de nouveau notre commit.</p>

        <h1 id="ancre_sur_historique_projet">Consulter l'historique d'un projet</h1>
        <p>L'historique permet de savoir qui a contribué à quoi, de déterminer où des bugs ont été introduits, ou encore d'annuler les changements problématiques.</p>
        <p>Pour cela, on peut utiliser la commande :</p>
        <p class="citation_console">
        git log
        </p>
        <p>Cette dernière énumère en ordre chronologique inversé les commits réalisés.<br />
        Cela signifie que les commits les plus récents apparaissent en premier.</p>
        <p class="mise_en_valeur4">Cette commande affiche chaque commit avec son <span class="mise_en_valeur1">identifiant SHA</span>, l'<span class="mise_en_valeur1">auteur du commit</span>, la <span class="mise_en_valeur1">date</span> et le <span class="mise_en_valeur1">message du commit</span>.</p>
        <p class="mise_en_valeur4">Le SHA ou Secure Hash Algorithm est un identifiant.<br />
        C'est ce grand code qui nous permettra de revenir en arrière si besoin.</p>
        <p>Autre commande possible :</p>
        <p class="citation_console">
        git reflog
        </p>
        <p class="mise_en_valeur4"><strong>git reflog</strong> va loguer les commits ainsi que toutes les autres actions que nous avons pu faire en local : Nos modifications de messages, nos merges, nos resets, ..</p>
        <p>Comme <strong>git log</strong>, <strong>git reflog</strong> affiche un identifiant SHA-1 pour chaque action, il est donc très facile de revenir à une action donnée grâce au SHA.<br />
        Cette commande, c'est notre joker, elle assure notre survie en cas d'erreur.</p>
        <p>Pour revenir à une action donnée, on prend les 8 premiers caractères de son SHA et on fait (par exemple) :</p>
        <p class="citation_console">
        git checkout e789e7c
        </p>
        <p>Également, on a la commande <strong>git blame</strong> :</p>
        <p class="citation_console">
        git blame monFichier.php
        </p>
        <p class="mise_en_valeur4">La commande <strong>git blame</strong> permet d'examiner le contenu d'un fichier ligne par ligne et de déterminer la date à laquelle chaque ligne a été modifiée, et le nom de l'auteur des modifications.</p>
        <p><strong>git blame</strong> va afficher pour chaque ligne modifiée :</p>
        <ul class="mise_en_valeur4">
            <li>Son ID</li>
            <li>L'auteur</li>
            <li>L'horodatage</li>
            <li>Le numéro de la ligne</li>
            <li>Le contenu de la ligne</li>
        </ul>
        <p>Enfin, on a la commande :</p>
        <p class="citation_console">
        git cherry-pick un_identifiant_SHA-1 un_autre_identifiant_SHA-1
        </p>
        <p class="mise_en_valeur4">Cette dernière permet de sélectionner un commit et de l'appliquer sur la branche actuelle.</p>
        <p>En effet parfois, on ne veut pas fusionner une branche entière dans une autre, on a besoin que de choisir un ou deux commits spécifiques.</p>
        <p class="mise_en_valeur4">Cette commande va donc permettre de sélectionner un ou plusieurs commits grâce à leur SHA et de les migrer sur la branche principale par exemple, exemple :</p>
        <p class="citation_console">
        git cherry-pick d356940 de966d4
        </p>

        <h1 id="cloner_repo_distant">Cloner un dépôt distant</h1>
        <p>Il est possible de cloner un dépôt distant que l'on aurait déjà créé sur GitHub.</p>
        <p>Pour se faire, aller sur GitHub puis dans le repository souhaité (exemple : <a href="https://github.com/antoinegirauddev/monsitememodev">https://github.com/antoinegirauddev/monsitememodev</a>)</p>
        <p>Ensuite cliquer sur le bouton "Code" puis aller dans la partie "SSH" et copier le lien affiché (exemple : "git@github.com:antoinegirauddev/monsitememodev.git").</p>
        <p>Puis, ouvrir une console et se placer dans le répertoire souhaité en local (exemple : "/opt/lampp/htdocs/) </p>
        <p>Enfin taper la commande <strong>git clone</strong> suivi de la clé SSH copiée précédemment, exemple :</p>
        <p class="citation_console">
        git clone git@github.com:antoinegirauddev/monsitememodev.git
        </p>
        <p>Cela va cloner le projet distant dans ce répertoire, et donc, rappatrier/créer un dossier (nommé comme le projet distant) avec tous les fichiers qui y sont présents</p>

        <h1 id="permission">Donner les permissions</h1>
        <p>Pour un travail collaboratif, il peut être nécessaire de donner les droits à la personne avec qui on travaille, pour qu'il puisse cloner le repo distant mais aussi faire ses modifications en locales et les envoyer sur le repo distant.</p>
        <p>Pour cela, aller dans le repository (exemple : <a href="https://github.com/antoinegirauddev/monsitememodev">https://github.com/antoinegirauddev/monsitememodev</a>), puis dans "Settings" et "Collaborators".</p>
        <p>Cliquer sur "Add people", puis chercher le nom de la personne et cliquer sur "Add nomdelapersonne to this repository</p>
        <p>Si le dépôt n'est pas autorisé à tout le monde ou "public", on pourra sélectionner les droits spécifiques à donner à la personne, c'est à dire les droits de lecture uniquement, ou bien de lecture et écriture, etc..</p>


        <h1 id="ancre_sur_acces_distance_ko">L'accès à distance ne fonctionne pas</h1>
        <p>Si notre accès à distance ne fonctionne pas, cela peut être dû à un problème d'authentification de notre réseau.<br />
        Pour le résoudre, <span class="mise_en_valeur4">il nous faut créer une paire de clés SSH</span>.</p>
        <p class="mise_en_valeur2">Une clé Secure Shell, ou clé SSH, permet d'assurer une connexion sécurisée entre notre réseau et un dépôt distant sécurisé, c'est très utile quand nous avons besoin de nous authentifier sur une machine tierce, car cela nous évite d'avoir à nous identifier systématiquement.</p>
        <p>Nous allons maintenant générer notre duo de clés SSH :</p>
        <p class="citation_console">
        ssh-keygen -t rsa -b 4096 -C "antoine.giraud@free.fr"
        </p>
        <p>Nous pouvons soit appuyer sur Entrée, soit indiquer un nom de fichier.</p>
        <p>Un mot de passe nous est ensuite demandé.</p>
        <p>Probablement dans le dossier /home/.ssh/ on a deux fichiers, la clé publique et la cré privée.<br /><br />
        La clé id_rsa.txt est notre clé privée alors que la clé id_rsa.pub est notre clé publique.<br />
        Ici nous allons utiliser notre clé publique seulement.<br />
        Nous pouvons copier notre clé publique en l'ouvrant dans un éditeur de texte.<br /><br />
        Pour l'ajouter à GitHub il faut :</p>
        <ul>
            <li>Se connecter à l'espace GitHub</li>
            <li>Aller dans le menu en haut à droite et cliquer sur "Settings"</li>
            <li>Cliquer sur "SSH and GPG keys"</li>
            <li>Puis cliquer sur "New SSH Key"</li>
            <li>Choisir un titre et coller la clé SSH</li>
        </ul>
    </article>
    <nav id="sous_menu">
        <p><a href="#ancre_sur_introduction">Git : Le gestionnaire de versions</a></p>
        <p><a href="#ancre_sur_difference_depot_local_et_distant">Différence entre dépôt local et dépôt distant</a></p>
        <p><a href="#ancre_sur_plateformes_possibles">Plusieurs plateformes</a></p>
        <p><a href="#ancre_sur_demarrage_github">Démarrer un projet sous GitHub</a></p>
        <p><a href="#ancre_sur_demarrage_git">Démarrer avec Git</a></p>
        <p><a href="#ancre_sur_creation_depot_local">Créer le dépôt local</a></p>
        <p><a href="#ancre_sur_travail_depuis_depot_local">Travailler depuis le dépôt local Git</a></p>
        <p><a href="#ancre_sur_branches">Comprendre le système de branches</a></p>
        <p><a href="#ancre_sur_recuperation_depot_distant">Récupérer un dépôt distant</a></p>
        <p><a href="#ancre_sur_maj_depot_local">Mettre à jour le dépôt local</a></p>
        <p><a href="#ancre_sur_le_pull_request">Le pull request</a></p>
        <p><a href="#ancre_sur_demande_relecture_code">Relecture du code</a></p>
        <p><a href="#ancre_sur_erreurs_depot_local">Les erreurs sur un dépôt local</a></p>
        <p><a href="#ancre_sur_erreurs_depot_distant">Les erreurs sur un dépôt distant</a></p>
        <p><a href="#ancre_sur_historique_projet">Consulter l'historique</a></p>
        <p><a href="#cloner_repo_distant">Cloner un dếpôt distant</a></p>
        <p><a href="#permission">Les permissions</a></p>
        <p><a href="#ancre_sur_acces_distance_ko">L'accès à distance ne fonctionne pas</a></p>
        

    </nav>
</section>
<footer>
    <h1>Les liens utiles</h1>
    <div id="les_liens">
        <ul>
            <li><a href="http://ndpsoftware.com/git-cheatsheet.html#loc=stash;" title="Explication Git" target="_blank" alt="Explication Git">Explications claires sur Git avec un schéma interactif</a></li>        
            <li><a href="https://developer.mozilla.org/fr/docs/Learn/Common_questions/Tools_and_setup/Using_Github_pages" title="Démarrage rapide GitHub" target="_blank" alt="Démarrage rapide GitHub">Démarrage rapide GitHub</a></li>
            <li><a href="https://docs.github.com/fr/get-started/getting-started-with-git/why-is-git-always-asking-for-my-password" title="Configuration Git et GitHub" target="_blank" alt="Configuration Git et GitHub">Configuration Git et GitHub</a></li>
        </ul>
        <ul>      
            <li><a href="https://github.com/orgs/O-clock-Titanium/repositories" title="Dépôt sur GitHub" target="_blank" alt="Dépôt sur GitHub">Dépôt O'clock sur GitHub</a></li>  
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