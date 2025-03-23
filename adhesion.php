<?php
$title = 'Adhésion - Association des Sommeliers d\'Europe';
  require_once 'inc/header.php';
  require_once 'inc/navbar.php';
?>

    <main>
        <!-- titre -->
        <div class="bgHeaderAdhesion">
            <h1 class="wrapper">Adhésion</h1>
        </div> <!-- / titre -->

         <div class="titleAlign wrapper"> <!-- intro -->
           <h2>Rejoignez-nous</h2>
            <p>Tous les passonnés de vin sont les bienvenus !<br>
            En souscrivant à cette adhésion vous soutenez l'action d'une association de combat<br>
         pour la valorisation du métier de sommelier et la sauvegarde de nos vins.</p> 
        </div> <!-- / intro -->

        <!-- paiement -->
        <section class="paiement wrapper"> <!-- contient adhésion + paiement -->
            <div class="content-paiement"> 
                <div class="content-col"> <!-- adhésion -->
                    <div class="content-paiement">
                        <p class="adhesion-title"><span>Adhésion individuelle</span><br> valable 1 an</p>
                    
                        <ul>       
                            <li class="content-col-adhesion-qty">
                                <p class="price">70,00 &euro;</p>
                                <div class="quantity">
                                    <input type="number" min="1" max="9" step="1" value="0">
                                </div>
                            </li>
                        </ul> 
                    </div>
                    <div class="content-paiement">
                            <p class="adhesion-title"><span>Adhésion couple</span><br> valable 1 an</p>

                        <ul>       
                            <li class="content-col-adhesion-qty">
                                <p class="price">120,00 &euro;</p>
                               <div class="quantity">
                                    <input type="number" min="1" max="9" step="1" value="0">
                                </div>
                            </li>
                        </ul> 
                    </div>
                    <div class="total">
                        <p>Montant à payer : 00,00 &euro;</p>
                    </div>
                    <div>
                        <p>Vous pouvez également régler la cotisation par chèque à l’adresse suivante :
                                Thierry Corona "Vice-Président et Trésorier de l’A.S.E"<br>
                                Casino 2000<br>
                                Rue Flammang<br>
                                L 5618 Mondorf-les-bains<br>
                                Grand Duché du Luxembourg<br>
                               <span class="citation"> Chèque libellé à l'ordre de A.S.E</span></p>
                    </div>
                    
                </div> <!-- / adhésion -->

        <div class="content-col content-col-paiement"> <!-- paiement -->
            <h3 class="cb">Paiement</h3>
                <p>Toutes les informations bancaires pour traiter ce paiement sont totalement sécurisées. Grâce au cryptage SSL de vos données bancaires, vous êtes assurés de la fiabilité de vos transactions.</p>
                    <!-- formulaire -->
                    <form method="post" action="#">
                        <p>
                            <input type="text" name="nom" id="nom" placeholder="Nom" required minlength="3" maxlength="10">
                        </p>
                        <p>
                            <input type="text" name="prenom" id="prenom" placeholder="Prénom" required minlength="3" maxlength="10">
                         </p>
                        <p>
                            <input type="email" name="email-adhesion" id="email-adhesion" required placeholder="Email">
                        </p>
                         <p>
                            <input type="text" name="card" id="card" required placeholder="Numéro de carte">
                        </p>
                        <p>
                            <input type="text" name="exp" id="exp" required placeholder="Date d'expiration"><input type="text" name="crypt" id="crypt" placeholder="Cryptogramme">
                        </p>
                        <p>
                            <input type="checkbox" name="cgv" id="cgv" required value="cgv"><label for="cgv">J'accepte les conditions générales de vente</label>
                        </p>
                            <a class="btnBig" href="#">J'adhère à l'association</a>
                    </form>         
                </div> <!-- / paiement -->
            </div>
        </section>  <!-- / contient adhésion + paiement -->

    </main>

    <?php
		require_once 'inc/footer.php';
	?> 