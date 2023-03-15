<?php 
    include "./php/includes/templates/header.tpl.php";
    echo "</div>";
    include "./php/includes/templates/nav.tpl.php";
?>               
<section>
    <article>
            <p>Bienvenue sur le site d'explication des différents langages que j'ai eu le plaisir d'apprendre et de mettre en pratique via ce site.<br /><br /><br /></p>
            <div id="formulaire">
            <form method="post" action="search.php">
                <fieldset>
                <legend><span class="mise_en_valeur1">Tu souhaites faire une recherche ?</span></legend>
                <label for="recherche"></label> <br /> <input type="search" name="recherche" id="recherche" placeholder="Exemple : Les balises" size="18" maxlenght="60" />
                <input type="submit" value="Rechercher" />
                </fieldset>
            </form>
            <form method="post" action="./php/connexion.php">
                <fieldset>
                <legend><span class="mise_en_valeur1">Tu peux aussi te connecter :)</span></legend>
                <p>
                    <label for="pseudo">Pseudo :</label> <input type="text" name="pseudo" id="pseudo" placeholder="Exemple : Lutine72" size="10" maxlenght="30" required /><br />
                    <label for="pass">Mot de passe :</label> <input type="password" name="pass" id="pass" size="10" maxlenght="30" required />
                <input type="submit" value="Se connecter" />
                </p>
                </fieldset>
            </form>
        </div>    
    </article>
    <nav id="sous_menu">
        <p>Ici seront affichés les titres principaux de chaque langage.</p>
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
    include "./php/includes/templates/footer.tpl.php";
?>