<form action="commande_recap.php" method="post">
    <table id="produit_liste">
        <tr>
            <td>
                <div class="produit_img">
                    <img src="./img/produit/produit_1.png" alt="Erable de Corée"/>
                </div>
            </td>
            <td class="produit_liste_td2">
                <input name="produit_nom_1" id="produit_nom_1" type="text" class="produit_titre" value="Erable de Corée" />
                <div class="produit_description">L’érable de Corée (Acer pseudosieboldianum) arbore des feuilles arrondies découpées en 9 à 11 lobes profonds qui possèdent une texture très similaire à celles des érables japonais (Acer nipponicum). Cependant, sa rusticité est nettement meilleure au Québec. Rustique en zone 4, il pourrait probablement survivre aux hivers en zone 3, dans un site qui lui convient.</div>
            </td>
            <td class="produit_liste_td3">
                <span>
                    <input name="produit_prix_1" id="produit_prix_1" type="text" class="produit_prix" value="20.00" readonly="readonly" />
                </span>
                <span>$</span>
            </td>
            <td class="produit_liste_td4">
                <input name="produit_qte_1" id="produit_qte_1" type="text" class="produit_qte" onkeypress="return verif_nombre(event)" value="0"/>
                <input type="button" class="btn_moins" onclick="quantite_modif(1,'a')" value="+"/>
                <input type="button" class="btn_plus" onclick="quantite_modif(1,'d')" value="-"/>
            </td>
        </tr>
        <tr>
            <td>
                <div class="produit_img">
                    <img src="./img/produit/produit_2.png" alt="Violette africaine"/>
                </div>
            </td>
            <td class="produit_liste_td2">
                <input name="produit_nom_2" id="produit_nom_2" type="text" class="produit_titre" value="Violette africaine" />
                <div class="produit_description">La violette africaine (Saintpaulia) est la plante d’intérieur la plus cultivée au monde, ayant ravi ce titre au philodendron dans les années 1970. Cette petite plante, formant une rosette applatie de feuilles duveteuses à long pétiole, s’adapte très bien aux conditions de nos demeures. De plus, elle est facile à produire, donc peu coûteuse à l’achat.</div>
            </td>
            <td  class="produit_liste_td3">
                <span>
                    <input name="produit_prix_2" id="produit_prix_2" type="text" class="produit_prix" value="44.50" readonly="readonly" />
                 </span>
                 <span>$</span>
            </td>
            <td class="produit_liste_td4">
                <input name="produit_qte_2" id="produit_qte_2" type="text" class="produit_qte" onkeypress="return verif_nombre(event)" value="0"/>
                <input type="button" class="btn_moins" onclick="quantite_modif(2,'a')" value="+"/>
                <input type="button" class="btn_plus" onclick="quantite_modif(2,'d')" value="-"/>
            </td>
        </tr>
        <tr>
            <td>
                <div class="produit_img">
                    <img src="./img/produit/produit_3.png" alt="Le Kalopanax"/>
                </div>
            </td>
            <td class="produit_liste_td2">
                <input name="produit_nom_3" id="produit_nom_3" type="text" class="produit_titre" value="Le Kalopanax" />
                <div class="produit_description">Doté de larges feuilles lobées très spectaculaires, le kalopanax (Kalopanax septemlobus) semble bien peu à sa place dans le paysage québécois. Il y est d’ailleurs peu commun et les spécimens de bonne taille sont rares. Dommage, car à chaque saison, il nous donne une nouvelle raison d’apprécier sa grande valeur ornementale. En hiver, son tronc et sa ramure à l’écorce noirâtre profondément sinueuse se découpent dramatiquement sur le fond de neige blanche. On distingue alors très bien les courtes épines jaunâtres disséminées sur les branches au port ouvert qui forment une couronne ovale à arrondie.</div>
            </td>
            <td  class="produit_liste_td3">
                <span>
                    <input name="produit_prix_3" id="produit_prix_3" type="text" class="produit_prix" value="38.65" readonly="readonly"/>
                </span>
                <span>$</span>
            </td>
            <td class="produit_liste_td4">
                <input name="produit_qte_3" id="produit_qte_3" type="text" class="produit_qte" onkeypress="return verif_nombre(event)" value="0"/>
                <input type="button" class="btn_moins" onclick="quantite_modif(3,'a')" value="+"/>
                <input type="button" class="btn_plus" onclick="quantite_modif(3,'d')" value="-"/>
            </td>
        </tr>
        <tr>
            <td>
                <div class="produit_img">
                    <img src="./img/produit/produit_4.png" alt="Le Ptérocaryer"/>
                </div>
            </td>
            <td class="produit_liste_td2">
                <input name="produit_nom_4" id="produit_nom_4" type="text" class="produit_titre" value="Le Ptérocaryer" />
                <div class="produit_description">Le ptérocaryer de Chine (Pterocarya stenoptera) fait partie de la même famille que les noyers et les caryers, celle des Juglundacées. Son nom vient du grec «ptéron» (aile) et «karion» (noix) en l’honneur de son étrange, mais très élégante fructification. C’est un arbre à croissance très rapide encore très peu connu au Québec malgré la présence de quelques beaux spécimens au Jardin botanique de Montréal.</div>
            </td>
            <td  class="produit_liste_td3">
                <span>
                    <input name="produit_prix_4" id="produit_prix_4" type="text" class="produit_prix" value="17.75" readonly="readonly"/>
                </span>
                <span>$</span>
            </td>
            <td class="produit_liste_td4">
                <input name="produit_qte_4" id="produit_qte_4" type="text" class="produit_qte" onkeypress="return verif_nombre(event)" value="0"/>
                <input type="button" class="btn_moins" onclick="quantite_modif(4,'a')" value="+"/>
                <input type="button" class="btn_plus" onclick="quantite_modif(4,'d')" value="-"/>
            </td>
        </tr>
        <tr>
            <td>
                <div class="produit_img">
                    <img src="./img/produit/produit_5.png" alt="Le Papyrus"/>
                </div>
            </td>
            <td class="produit_liste_td2">
                <input name="produit_nom_5" id="produit_nom_5" type="text" class="produit_titre" value="Le Papyrus" />
                <div class="produit_description">Les jardiniers d’intérieur se divisent principalement en deux groupes: ceux qui oublient d’arroser et ceux qui arrosent trop! Que les premiers se procurent des cactées et autres plantes succulentes: elles peuvent tolérer des écarts. Mais que recommander aux gens qui arrosent trop? Mais, le papyrus, bien sûr!</div>
            </td>
            <td  class="produit_liste_td3">
                <span>
                    <input name="produit_prix_5" id="produit_prix_5" type="text" class="produit_prix" value="24.50" readonly="readonly"/>
                </span>
                <span>$</span>
            </td>
            <td class="produit_liste_td4">
                <input name="produit_qte_5" id="produit_qte_5" type="text" class="produit_qte" onkeypress="return verif_nombre(event)" value="0"/>
                <input type="button" class="btn_moins" onclick="quantite_modif(5,'a')" value="+"/>
                <input type="button" class="btn_plus" onclick="quantite_modif(5,'d')" value="-"/>
            </td>
        </tr>
        <tr>
            <td colspan="4" style="text-align:center;background:#74b767;">
                <input type="submit" value="Commander"/>
            </td>
        </tr>
    </table>
</form>