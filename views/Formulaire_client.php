<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Répar'Service</title>
  <!-- Ajout de Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://reparservices/assets/css/style.css">
  <link rel="stylesheet" href="http://reparservices/assets/css/Devis_form.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.5.3/signature-pad.min.css">
  
</head>
<body>

  <header>
    <div class="container py-3">
      <div class="d-flex flex-wrap justify-content-between align-items-center">
        <a class="logo mb-3 mb-md-0" href="/"><strong>Répar'Service</strong></a>
        <nav class="navbar mt-3 mt-md-0">
          <ul class="nav nav-links">
            <li class="nav-item">
              <a class="nav-link" href="http://reparservices/views/formulaire_client.php">Nos Services</a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link" href="">Nos Prestations</a>
            </li>
          </ul>
        </nav>
        <a class="cta btn btn-primary mt-3 mt-md-0" href="">Contact</a>
      </div>
    </div>
  </header>

    <div class="container">
        <h1 class="mt-4 mb-4 d-flex justify-content-center">Demande de devis</h1>
        <p>Découvrez nos expertises en électricité et plomberie. <strong>Demandez un devis dès maintenant.</strong></p>

        <form method="post" action="http://reparservices/app/model/traitement_client.php">
            <div class="form-group">
            <h3>Informations Client :</h3>
            
            <label for="clientNom">Nom :</label>
            <input type="text" class="form-control" id="clientNom" name="clientNom" placeholder="Nom du client" required>
            
            <label for="clientPrenom" class="mt-2">Prénom :</label>
            <input type="text" class="form-control" id="clientPrenom" name="clientPrenom" placeholder="Prénom du client" required>
        </div>
        
        <div class="form-group">
    <h3>Avez-vous déjà un numéro de devis ?</h3>
    <div class="input-group">
        <input type="text" class="form-control" id="numeroDevis" name="numeroDevis" placeholder="Entrez votre numéro de devis">
        <div class="input-group-append">
            <button id="checkDevis" class="btn btn-outline-secondary" type="button">Vérifier</button>
        </div>
    </div>
    <small class="form-text text-muted">Si vous avez déjà un numéro de devis, entrez-le pour télécharger les détails.</small>
</div>

        <!-- ... autres champs ... -->

            

            <div class="form-group">
                <h3>Type de service :</h3>
                <select class="form-control" id="activite" name="activite">
                    <option value="electricite">Electricité</option>
                    <option value="plomberie">Plomberie</option>
                </select>
            </div>

            <div class="form-group">
                <h3>Description du travail :</h3>
                <textarea class="form-control" rows="4" placeholder="Décrivez le travail que vous souhaitez réaliser"></textarea>
            </div>

                  <div class="form-group">
          <h3>Signature :</h3>
          <label for="typedSignature">Tapez votre nom comme signature :</label>
          <input type="text" class="form-control" id="typedSignature" placeholder="Nom du client">
      </div>


            <button type="submit" class="btn btn-primary">Demander un devis</button>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="http://reparservices/assets/Js/sign.js"></script>
</body>

</html>
