<?php
session_start();

require_once("./php/config.php");
require_once("./php/view_format.php");
$viewF = new viewFormat();

if (!isset($_SESSION['user_unique_id_session']) && !isset($_COOKIE['user_unique_id_session'])) {
  header("Location: ./");
  exit();
}

$user_select = "SELECT * FROM user_accounts WHERE user_unique_id = ? OR user_unique_id = ?";
$query_select = $pdo->prepare($user_select);
$query_select->execute([$_SESSION['user_unique_id_session'], $_COOKIE['user_unique_id_session']]);
$result_select = $query_select->fetch(PDO::FETCH_ASSOC);

if ($result_select['user_category'] != "none" && $result_select['contact_phone'] != "0") {
  header("Location: index.php");
}

$session = $_SESSION['user_unique_id_session'];

$sql = "SELECT * FROM user_accounts WHERE user_unique_id = ?";
$query = $pdo->prepare($sql);
$query->execute([$session]);

$res = $query->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tora Corporation</title>

  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/mobile-format.css">
  <link rel="stylesheet" href="./assets/RemixIcon_Fonts_v4.6.0/fonts/remixicon.css">

  <!-- Essential SEO Meta Tags -->
  <meta name="description" content="Vendez vos produits avec toute sécurité et prix abordable">
  <meta name="keywords" content="Vente, Achat, Tora Corporation">
  <meta name="author" content="Tora Corporation">
  <meta name="robots" content="noindex, nofollow">

  <!-- Open Graph / Facebook / WhatsApp -->
  <meta property="og:title" content="Tora Corporation">
  <meta property="og:description" content="Vendez vos produits avec toute sécurité et prix abordable">
  <meta property="og:image" content="https://www.example.com/images/preview.jpg">
  <meta property="og:url" content="https://www.example.com/your-page">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Tora Corporation">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="Vente en ligne">
  <meta name="twitter:title" content="Tora Corporation">
  <meta name="twitter:description" content="Vendez vos produits avec toute sécurité et prix abordable">
  <meta name="twitter:image" content="https://www.example.com/images/preview.jpg">
  <meta name="twitter:site" content="@YourTwitterHandle">
  <meta name="twitter:creator" content="@YourTwitterHandle">

  <!-- Favicon -->
  <link rel="icon" href="./favicon.ico" type="image/x-icon">

</head>

<body id="body" class="">
  <div class="container" style="display:flex;flex-direction:column;justify-content:center;align-items:center;">
    <div class="text" style="padding: 2em;">
      <h1>Complétez la configuration de votre compte</h1><br>
      <p>
        Bienvenue sur <b>Tora corporation</b>! <br />
        Afin de personnaliser votre expérience et faciliter la communication avec vos clients ou partenaires,
        veuillez compléter les informations suivantes : <br>
      <h2>1. Choisissez votre type de compte</h2>
      Sélectionnez l’option qui correspond le mieux à votre utilisation de la plateforme :
      <ul style="padding: 1em;">
        <li><b>Acheteur</b> – Je suis ici pour découvrir et acheter des produits.</li>
        <li><b>Vendeur</b> – Je souhaite proposer et vendre mes produits ou services.</li>
        <li><b>Entreprise</b> – Je représente une entreprise ou une marque enregistrée.</li>
      </ul>
      <h2>2. Entrez votre numéro de téléphone de contact</h2>
      Veuillez indiquer le numéro de téléphone que vous souhaitez associer à votre compte.
      Ce numéro pourra être utilisé pour vous contacter concernant vos produits ou services.
      <br> <i>Vos informations resteront confidentielles et seront
        utilisées conformément à notre <a href="#">Politique de confidentialité.</a></i>
      <br><br>
      <form action="#" style="width:fit-content;display:flex;flex-direction:column;gap:1em;" id="other-details">
        <!-- Hidden field sent when checkbox is NOT checked -->
        <input type="hidden" name="actual-number" value="0">
        <div class="input2" style="cursor: pointer; display:flex;gap:0.7em;align-items:center;">
          <input type="checkbox" value="<?php echo $res['user_phone'] ?>" name="actual-number" id="actual-number" style="cursor: pointer;">
          <label for="actual-number" style="cursor: pointer;">Utiliser mon numéro actuel pour me contacter.</label>
        </div>
        <div class="input" style="display: flex;flex-direction:column;">
          <label for="">Numéro de contact</label>
          <input type="tel" id="input-new-number" name="actual-number" placeholder="Ex: 243977777777" style="padding:0.6em;border:1px solid #838383;border-radius:8px;outline:none;">
        </div>
        <div class="input" style="display: flex;flex-direction:column;">
          <label for="">Type de compte</label>
          <select name="account_type" id="" style="padding:0.6em;border:1px solid #838383;border-radius:8px;outline:none;">
            <option value="none">-- Séléctionner --</option>
            <option value="vendeur">Vendeur</option>
            <option value="acheteur">acheteur</option>
            <option value="entreprise">Entreprise</option>
          </select>
        </div>
        <i>✅ Une fois les informations complétées, cliquez sur Continuer pour finaliser la configuration de votre compte.</i>
        <button style="padding:0.6em;outline:none;border:none;border-radius:8px;cursor:pointer;">Continuer</button>
      </form>
      </p>
    </div>
  </div>
  <div class="footer-contents">
    <!-- beginning of footer cards -->
    <div class="cards-footer">
      <!-- beginning of card1 footer -->
      <div class="card-f-1">
        <h3>Services</h3>
        <ul>
          <li><a href="#">Tora vente</a></li>
          <li><a href="#">Tora Aide pour client</a></li>
          <li><a href="#">Tora Aide pour vendeur</a></li>
          <li><a href="#">Soutient</a></li>
        </ul>
      </div>
      <!-- end of card1 footer -->
      <!-- beginning of card1 footer -->
      <div class="card-f-1">
        <h3>Sécurité</h3>
        <ul>
          <li><a href="#">Sécurité de vos données</a></li>
          <li><a href="#">Sécurité de vos conversations</a></li>
          <li><a href="#">Sureté de vente</a></li>
          <li><a href="#">Sécurité de vos achats</a></li>
        </ul>
      </div>
      <!-- end of card1 footer -->
      <!-- beginning of card1 footer -->
      <div class="card-f-1">
        <h3>Entreprise</h3>
        <ul>
          <li><a href="#">Qui sommes-nous?</a></li>
          <li><a href="#">Pourquoi nous faire confiance</a></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Prendre un partenariat</a></li>
        </ul>
      </div>
      <!-- end of card1 footer -->
      <!-- beginning of card1 footer -->
      <div class="card-f-1">
        <h3>Contacts</h3>
        <ul>
          <li><a href="#">contact@toracorporation.com</a></li>
          <li><a href="#">+243 000 000 000</a></li>
        </ul>
        <div class="social-medias">
          <a href="#"><button><i class="ri-facebook-circle-fill"></i></button></a>
          <a href="#"><button><i class="ri-instagram-line"></i></button></a>
          <a href="#"><button><i class="ri-twitter-x-line"></i></button></a>
        </div>
      </div>
      <!-- end of card1 footer -->
    </div>
    <!-- end of footer cards -->
    <div class="copy-right-message">
      <p>&copy;2025 Tora Corporation. Tout droits réservé
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
  </div>
  </div>

  <!-- beginning of scripting -->
  <script src="./ajax/account-details.js"></script>
  <script>
    const actual_number = document.getElementById("actual-number");
    const input_new_number = document.getElementById("input-new-number");
    actual_number.addEventListener("click", () => {
      if (actual_number.checked) {
        input_new_number.disabled = true;
        input_new_number.value = "";
        input_new_number.style.border = "1px solid rgb(228, 228, 228)";
      } else {
        input_new_number.disabled = false;
        input_new_number.style.border = "1px solid #838383";
      }
    });
  </script>

</body>

</html>