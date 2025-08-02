<?php
session_start();

require_once("./php/config.php");
require_once("./php/time-format.php");

if (!isset($_SESSION['user_unique_id_session']) && !isset($_COOKIE['user_unique_id_session'])) {
    header("Location: ./");
    exit();
}

$user_select = "SELECT * FROM user_accounts WHERE user_unique_id = ? OR user_unique_id = ?";
$query_select = $pdo->prepare($user_select);
$query_select->execute([$_SESSION['user_unique_id_session'], $_COOKIE['user_unique_id_session']]);
$result_select = $query_select->fetch(PDO::FETCH_ASSOC);

if (($result_select['user_category'] == "none" && $result_select['contact_phone'] == "0") || ($result_select['user_category'] == "none" || $result_select['contact_phone'] == "0")) {
    header("Location: account-details.php");
}

$unique_idFetch = $_GET['unique_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification</title>
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/mobile-format.css">
    <link rel="stylesheet" href="./assets/RemixIcon_Fonts_v4.6.0/fonts/remixicon.css">

    <!-- Favicon -->
    <link rel="icon" href="./favicon.ico" type="image/x-icon">

</head>

<body>
    <div class="container2">
        <!-- beginning of navigation bar -->
        <div class="before-navigation-add">
            <div class="navigation-bar-add">
                <a href="./">
                    <h3>Tora corporation</h3>
                </a>
                <a href="./profile.php"><button><i class="ri-settings-4-line"></i></button></a>
            </div>
        </div>
        <!-- end of navigation bar -->
        <div class="body-contents-publish">
            <div class="card-publish">
                <div class="left-add">
                    <?php
                    $sql_mod = "SELECT * FROM produit WHERE unique_id = ?";
                    $query_mod = $pdo->prepare($sql_mod);
                    $query_mod->execute([$unique_idFetch]);
                    $res_mod = $query_mod->fetchAll(PDO::FETCH_ASSOC);
                    if (count($res_mod) > 0) {
                        foreach ($res_mod as $row_mod) {


                    ?>
                            <div class="card">
                                <h2>Modifier un produit</h2>
                                <p id="visulizer" style="text-align: center;padding:0.4em;"></p>
                                <form action="#" id="publier_produit">
                                    <div class="group-input1">
                                        <div class="input1">
                                            <label for="">Marque ou Nom</label>
                                            <input type="text" value="<?php echo $row_mod['titre'] ?>" name="marque" placeholder="Nom du produit" maxlength="28">
                                        </div>
                                        <div class="input1">
                                            <label for="">Prix</label>
                                            <input type="number" value="<?php echo $row_mod['prix'] ?>" name="prix" placeholder="Prix du produit">
                                        </div>
                                    </div>
                                    <div class="group-input1">
                                        <div class="input1">
                                            <label for="">Localisation</label>
                                            <input type="text" value="<?php echo $row_mod['location'] ?>" name="Localisation" placeholder="Localisation du produit">
                                        </div>
                                        <div class="input1">
                                            <label for="">Categorie</label>
                                            <?php $categorie = $row_mod['categorie']; ?>
                                            <select name="categorie" id="categorie">
                                                <option value="" <?php if ($categorie == '') echo 'selected'; ?>>-- Choisir --</option>
                                                <option value="telephone_ablettes" <?php if ($categorie == 'telephone_ablettes') echo 'selected'; ?>>Téléphone & Tablettes</option>
                                                <option value="electronique" <?php if ($categorie == 'electronique') echo 'selected'; ?>>Electronique</option>
                                                <option value="meubles_electromenagere" <?php if ($categorie == 'meubles_electromenagere') echo 'selected'; ?>>Meubles & Electroménagere</option>
                                                <option value="mode_habillement" <?php if ($categorie == 'mode_habillement') echo 'selected'; ?>>Mode & Habillement</option>
                                                <option value="vehicules_trans" <?php if ($categorie == 'vehicules_trans') echo 'selected'; ?>>Véhicules & Transport</option>
                                                <option value="agriculture_alimentation" <?php if ($categorie == 'agriculture_alimentation') echo 'selected'; ?>>Agriculture & Alimentation</option>
                                                <option value="proprietes" <?php if ($categorie == 'proprietes') echo 'selected'; ?>>Propriétés</option>
                                                <option value="sante_beaute" <?php if ($categorie == 'sante_beaute') echo 'selected'; ?>>Santé & Beauté</option>
                                                <option value="art_sport_plein_air" <?php if ($categorie == 'art_sport_plein_air') echo 'selected'; ?>>Art, Sport & Plein Air</option>
                                                <option value="bebe_enfants" <?php if ($categorie == 'bebe_enfants') echo 'selected'; ?>>Bébé & Enfants</option>
                                                <option value="animaux" <?php if ($categorie == 'animaux') echo 'selected'; ?>>Animaux</option>
                                                <option value="equipements" <?php if ($categorie == 'equipements') echo 'selected'; ?>>Equipements</option>
                                                <option value="quincaillerie_construction" <?php if ($categorie == 'quincaillerie_construction') echo 'selected'; ?>>Quincaillerie & Construction</option>
                                                <option value="reparation" <?php if ($categorie == 'reparation') echo 'selected'; ?>>Réparation</option>
                                                <option value="autres" <?php if ($categorie == 'autres') echo 'selected'; ?>>Autres</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="group-input1">
                                        <div class="input1">
                                            <label for="">Sous-categorie</label>
                                            <select name="sous-categorie" id="sous-categorie">
                                                <option value="<?php echo $row_mod['sous_categorie'] ?>"><?php echo $row_mod['sous_categorie'] ?></option>
                                            </select>
                                        </div>
                                        <div class="input1">
                                            <label for="">Livraison</label>
                                            <?php $selectedValue = $row_mod['delivary'] ?>
                                            <select name="Livraison" id="">
                                                <option value="" <?php if ($selectedValue == '') echo 'selected'; ?>>-- Choisir --</option>
                                                <option value="Goma" <?php if ($selectedValue == 'Goma') echo 'selected'; ?>>Goma</option>
                                                <option value="Goma-Bukavu" <?php if ($selectedValue == 'Goma-Bukavu') echo 'selected'; ?>>Goma-Bukavu</option>
                                                <option value="Est RDC" <?php if ($selectedValue == 'Est RDC') echo 'selected'; ?>>Est RDC</option>
                                                <option value="Tout la RDC" <?php if ($selectedValue == 'Tout la RDC') echo 'selected'; ?>>Toute la RDC</option>
                                                <option value="Est Afrique" <?php if ($selectedValue == 'Est Afrique') echo 'selected'; ?>>Est Afrique</option>
                                                <option value="Toute l'Afrique" <?php if ($selectedValue == "Toute l'Afrique") echo 'selected'; ?>>Toute l'Afrique</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="group-input1">
                                        <div class="input1">
                                            <label for="">Etat du produit</label>
                                            <?php $etatProduit = $row_mod['etat']; ?>
                                            <select name="etat_produit" id="">
                                                <option value="" <?php if ($etatProduit == '') echo 'selected'; ?>>-- Choisir --</option>
                                                <option value="Nouveau Produit" <?php if ($etatProduit == 'Nouveau Produit') echo 'selected'; ?>>Nouveau Produit</option>
                                                <option value="Utilisé" <?php if ($etatProduit == 'Utilisé') echo 'selected'; ?>>Utilisé</option>
                                            </select>
                                        </div>
                                        <div class="input1">
                                            <label for="">Nombre en stock</label>
                                            <input type="number" value="<?php echo $row_mod['stock_number'] ?>" name="nombre_produit" placeholder="Nombre de produit en stock">
                                        </div>
                                    </div>
                                    <div class="input1">
                                        <label for="">Déscription</label>
                                        <textarea name="description" maxlength="370" placeholder="Déscription du produit"
                                            rows="4" id=""><?php echo $row_mod['description'] ?></textarea>
                                    </div>
                                    <div class="input1">
                                        <label for="">Modifier votre photo</label>
                                        <input type="file" name="images[]" accept="image/*" multiple>
                                    </div>
                                    <button>Publier</button>
                                </form>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
                <div class="middile"></div>
                <div class="right-add">
                    <h2>Mes Publications</h2><br><br>
                    <!-- beginning of contents -->
                    <div class="contents-list-add" id="contents-list-add">
                        <?php
                        $passedTime = new passedTime();

                        $sql = "SELECT * FROM produit ORDER BY id DESC";
                        $query = $pdo->prepare($sql);
                        $query->execute();
                        $res = $query->fetchAll(PDO::FETCH_ASSOC);

                        if (count($res) > 0) {
                            foreach ($res as $row) {

                                $sql2 = "SELECT * FROM imagess WHERE product_unique_id = ? LIMIT 1";
                                $query2 = $pdo->prepare($sql2);
                                $query2->execute([$row['unique_id']]);
                                $res_image = $query2->fetchAll(PDO::FETCH_ASSOC);

                                if (count($res_image) > 0) {
                                    foreach ($res_image as $rowImage) {

                        ?>
                                        <div class="card-add">
                                            <img src="<?php echo "./" . $rowImage['image_link']; ?>" alt="">
                                            <div class="description-add">
                                                <div class="desc-desc">
                                                    <h3><?php echo $row['titre'] ?></h3>
                                                    <p>
                                                        <?php
                                                        $desc = $row['description'];
                                                        $shortDesc = (strlen($desc) > 35) ? substr($desc, 0, 35) . "..." : $desc;
                                                        echo $shortDesc;
                                                        ?>
                                                    </p>
                                                    <p class="h">
                                                        <?php
                                                        $time = $passedTime->timeAgo($row['duree']);
                                                        echo $time;
                                                        ?>
                                                    </p>
                                                </div>
                                                <button><i class="ri-more-2-fill"></i></button>
                                            </div>
                                            <div class="list-drop-down">
                                                <div class="drop-down-card">
                                                    <a href="#"><i class="ri-rocket-2-fill"></i> Booster</a>
                                                    <a href="./modifier.php?unique_id=<?php echo $row['unique_id'] ?>"><i class="ri-pencil-fill"></i> Modifier</a>
                                                    <a href="./php/delete-product.php?unique_id=<?php echo $row['unique_id'] ?>"><i class="ri-delete-bin-5-fill"></i> Supprimer</a>
                                                </div>
                                            </div>
                                        </div>
                        <?php
                                    }
                                }
                            }
                        }
                        ?>
                    </div>
                    <!-- end of contents -->
                    <div id="pagination-controls2" class="pagination-controls"></div>
                </div>
            </div>
        </div>
        <div class="mobile-navigation-bottom">
            <div class="buttons-icons">
                <div class="icon-1">
                    <a href="./index.php"><button id="home-btn"><i class="ri-home-4-line"></i></button></a>
                    <label for="">Acceuille</label>
                </div>
                <?php
                if (isset($_SESSION['user_unique_id_session']) || isset($_COOKIE['user_unique_id_session'])) {
                    $sql_acc = "SELECT * FROM user_accounts WHERE user_unique_id = ? OR user_unique_id = ?";
                    $query_acc = $pdo->prepare($sql_acc);
                    $query_acc->execute([$_SESSION['user_unique_id_session'], $_COOKIE['user_unique_id_session']]);
                    $res_acc = $query_acc->fetch(PDO::FETCH_ASSOC);

                    if ($res_acc['user_category'] == "vendeur" || $res_acc['user_category'] == "entreprise") {
                        echo '<div class="icon-1">
                    <a href="./publication.php"><button><i class="ri-add-circle-line"></i></button></a>
                    <label for="">Vendre</label>
                    </div>';
                    } else {
                        echo '<div class="icon-1" style="color:gray;">
                    <button><i class="ri-add-circle-line" style="color:gray;"></i></button>
                    <label for="">Vendre</label>
                    </div>';
                    }
                } else {
                    echo '<div class="icon-1">
                    <a href="./login.php"><button><i class="ri-add-circle-line"></i></button></a>
                    <label for="">Vendre</label>
                </div>';
                }
                ?>
                <?php
                if (isset($_SESSION['user_unique_id_session']) || isset($_COOKIE['user_unique_id_session'])) {
                    echo '<div class="icon-1">
                    <a href="./chat.php">
                        <button><i class="ri-chat-new-fill"></i><span class="chat-num">+90</span></button>
                    </a>
                    <label for="">Chater</label>
                </div>';
                } else {
                    echo '<div class="icon-1">
                    <a href="./login.php">
                        <button><i class="ri-chat-new-fill"></i><span class="chat-num">+90</span></button>
                    </a>
                    <label for="">Chater</label>
                </div>';
                }
                ?>
                <?php
                if (isset($_SESSION['user_unique_id_session']) || isset($_COOKIE['user_unique_id_session'])) {
                    echo '<div class="icon-1">
                    <a href="./profile.php"><button><i class="ri-user-add-line"></i></button></a>
                    <label for="">Compte</label>
                    </div>';
                } else {
                    echo '<div class="icon-1">
                    <a href="./login.php"><button><i class="ri-user-add-line"></i></button></a>
                    <label for="">Compte</label>
                    </div>';
                }
                ?>
            </div>
        </div>
        <!--  ====================================================================================== -->
        <p id="copy-right-conns">
            &copy;2025 Tora Corporation. Tout droit réservé.
            <br> Propulsé par
            <span itemprop="creator" itemscope itemtype="https://schema.org/Organization">
                <a href="https://www.amtech-co.com" itemprop="url" rel="sponsored">
                    <span itemprop="name">Amtech Technology (Amtech-co LLC | Software)</span>
                </a>
                <meta itemprop="foundingDate" content="2021">
                <meta itemprop="address" content="Goma, Democratic Republic of the Congo">
                <meta itemprop="email" content="contact@amtech-co.com">
                <meta itemprop="sameAs" content="https://www.linkedin.com/company/amtechtechnology/">
                <span itemprop="founder" itemscope itemtype="https://schema.org/Person">
                    <meta itemprop="name" content="Audrey Mirindi">
                </span>
            </span>
        </p>
    </div>

    <!-- beginning of pagination for rating system -->
    <script>
        /* ============================================================================================================ */
        document.addEventListener("DOMContentLoaded", function() {
            const cardsPerPage = 6;
            const cards = Array.from(document.querySelectorAll(".card-add"));
            const paginationContainer = document.getElementById("pagination-controls2");
            let currentPage = 1;

            function showPage(page) {
                const totalPages = Math.ceil(cards.length / cardsPerPage);
                currentPage = Math.max(1, Math.min(page, totalPages)); // Clamp to range

                const start = (currentPage - 1) * cardsPerPage;
                const end = start + cardsPerPage;

                cards.forEach((card, index) => {
                    card.style.display = index >= start && index < end ? "flex" : "none";
                });

                renderPagination(totalPages);

                // Scroll to top of the card container when switching pages
                /*  document.querySelector('.cotes').scrollTo({ top: 0, behavior: "smooth" }); */
            }

            function renderPagination(totalPages) {
                paginationContainer.innerHTML = "";

                // Prev Button
                const prevBtn = document.createElement("button");
                prevBtn.innerHTML = "<i class='ri-arrow-left-s-line'></i>";
                prevBtn.disabled = currentPage === 1;
                prevBtn.addEventListener("click", () => showPage(currentPage - 1));
                paginationContainer.appendChild(prevBtn);

                // Logic for pagination buttons with ellipsis
                const maxVisible = 1; // Max visible pages

                const addPageButton = (pageNum) => {
                    const btn = document.createElement("button");
                    btn.textContent = pageNum;
                    btn.classList.add("page-btn");
                    if (pageNum === currentPage) btn.classList.add("active");
                    btn.addEventListener("click", () => showPage(pageNum));
                    paginationContainer.appendChild(btn);
                };

                const addEllipsis = () => {
                    const span = document.createElement("span");
                    span.innerHTML = "<i class='ri-more-fill'></i>";
                    span.style.margin = "0 4px";
                    paginationContainer.appendChild(span);
                };

                if (totalPages <= maxVisible) {
                    // If there are 6 or fewer pages, show them all
                    for (let i = 1; i <= totalPages; i++) {
                        addPageButton(i);
                    }
                } else {
                    // Always show the first page
                    addPageButton(1);

                    // Show ellipsis if the current page is beyond the first few pages
                    if (currentPage > 2) {
                        addEllipsis();
                    }

                    // Display the range of pages around the current page
                    const start = Math.max(2, currentPage - 2);
                    const end = Math.min(totalPages - 1, currentPage + 1);

                    for (let i = start; i <= end; i++) {
                        addPageButton(i);
                    }

                    // Show ellipsis if the current page is far from the last few pages
                    if (currentPage < totalPages - 2) {
                        addEllipsis();
                    }

                    // Always show the last page
                    addPageButton(totalPages);
                }

                // Next Button
                const nextBtn = document.createElement("button");
                nextBtn.innerHTML = "<i class='ri-arrow-right-s-line'></i>";
                nextBtn.disabled = currentPage === totalPages;
                nextBtn.addEventListener("click", () => showPage(currentPage + 1));
                paginationContainer.appendChild(nextBtn);
            }

            // Initialize the first page
            showPage(1);
        });

        /* ============================================================================================================ */

        /* set a dropdown for the menu of published products as visible to either modify or delete an article */
        document.querySelectorAll('.card-add .description-add button').forEach(button => {
            button.addEventListener('click', (e) => {
                e.stopPropagation(); // Prevent click event bubbling

                // Find the closest card-add container from the button
                const card = button.closest('.card-add');

                if (!card) return; // Safety check

                // Find the dropdown within this card
                const dropdown = card.querySelector('.drop-down-card');

                if (!dropdown) return; // Safety check

                // Toggle the dropdown visibility
                dropdown.classList.toggle('show');

                // Optionally close other open dropdowns
                document.querySelectorAll('.drop-down-card.show').forEach(otherDropdown => {
                    if (otherDropdown !== dropdown) {
                        otherDropdown.classList.remove('show');
                    }
                });
            });
        });

        // Optional: Close dropdowns when clicking outside
        document.addEventListener('click', () => {
            document.querySelectorAll('.drop-down-card.show').forEach(dropdown => {
                dropdown.classList.remove('show');
            });
        });
        /* ============================================================================================================ */


        const subCategories = {
            telephone_ablettes: ["Téléphone Portable", "Accesoires pour téléphone & Tablettes", "Montre Intelligente & Traqueurs", "Tablettes"],
            electronique: ["Accesoire et Fourniture pour Electronique", "Ordinateurs et PC", "Equipement TV et DVD", "Equipement Audio et Musique", "Accesoire Informatique", "Matériels Informatique", "Moniteurs d'Ordinateur", "Equipement Réseau", "Caméra photo et vidéo", "Imprimente et Scanner", "Sécurité et Surveillance", "Jeux vidéo et Console", "Logiciels"],
            meubles_electromenagere: ["Meubles", "Fourniture de Jardin", "Accesoire de Maison", "Appareil ménagers", "Appareil de cuisine", "Cuisine et Salle à manger", "Produit chimique ménagers"],
            mode_habillement: ["Sacs", "Vêtements", "Vêtements et Accesoires", "Bijoux", "Chaussures", "Vêtement de Mariage", "Montres"],
            vehicules_trans: ["Voitures", "Bus et Microbus", "Matériels lourd", "Moto et scooter", "Camions et Remorquers", "Pièces et Accesoire du véhicule", "Motomarine et Bateau", "Service Automobile"],
            agriculture_alimentation: ["Aliments, supplements et grains", "Betails et volaille", "Répas et Boissons", "Machine et equipement agricole"],
            proprietes: ["Nouvelle construction", "Maison et Appartement à louer", "Maison et Appartement à vendre", "Terrains et Parcelles à louer", "Terrains et Parcelles à vendre", "Proprietes commerciale à louer", "Proprietes commerciale à vendre", "Centre et lieux d'evenements", "Location courte"],
            sante_beaute: ["Bain et corps", "Parfums", "Beauté de cheveux", "Maquillages", "Soin dela peau", "Outils et Accesoires", "Vitamines et supplements"],
            art_sport_plein_air: ["Art et Bricalage", "Livres et Jeux", "Equipement de camping", "CD et DVD", "Instruments musicaux et Equipements", "Equipement sportif"],
            bebe_enfants: ["Accesoires pour Bébé et Enfant", "Soin pour Bébé et Enfant", "Vêtement pour Enfant", "Meuble pour Enfant", "Equipement et Sécurité pour Enfant", "Chaussure pour Enfant", "Maternité et Grossesse", "Landaus et Poussettes", "Equipement de Terrain de jeux", "Jouets"],
            animaux: ["Oiseaux", "Chats et Chatons", "Chiens et Chiots", "Poissons", "Accesoires pour les animaux de compagnie", "Autres Animaux"],
            equipements: ["Fours Industriels", "Equipement de Frabication", "Equipement Médicale", "Equipements d'impression", "Equipements de restauration", "Equipements de Sécurité", "Equipements de salon", "Eclairage de scène et effets", "Paperterie"],
            quincaillerie_construction: ["Matériaux de construction", "Portes", "Equipements Electrique", "Outils électrique", "Outils Manuels", "Plomberie et Approvisionnement d'eau", "Energie solaire", "Fenêtres", "Autres Articles de réparation et construction"],
            reparation: ["Outils de Mesure et Implementation", "Pièces de réchanges pour téléphone et tablettes"],
            autres: ["autres"]
        };



        const categorieSelect = document.getElementById("categorie");
        const sousCategorieSelect = document.getElementById("sous-categorie");

        categorieSelect.addEventListener("change", function() {
            const selected = this.value;
            // Clear existing options
            sousCategorieSelect.innerHTML = "";

            if (subCategories[selected]) {
                subCategories[selected].forEach(sub => {
                    const option = document.createElement("option");
                    option.value = sub
                        .normalize("NFD") // Break accented letters into base + diacritics
                        .replace(/[\u0300-\u036f]/g, "") // Remove the diacritics
                        .toLowerCase()
                        .replace(/\s+/g, "-"); // Replace spaces with hyphens

                    option.textContent = sub;
                    sousCategorieSelect.appendChild(option);
                });
            } else {
                const defaultOption = document.createElement("option");
                defaultOption.textContent = "-- Choisir une catégorie d'abord --";
                sousCategorieSelect.appendChild(defaultOption);
            }
        });
    </script>
    <!-- end of pagination for rating system -->
    <!-- <script src="./ajax/afficher-produit-pub.js"></script> -->
    <script src="./ajax/publier-produit.js"></script>

</body>

</html>