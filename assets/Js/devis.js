$(document).ready(function(){
    $('#checkDevis').click(function(){
        var numeroDevis = $('#numeroDevis').val();

        if (numeroDevis) {
            $.ajax({
                url: 'chemin_vers_votre_script_php.php', // Remplacez par le chemin vers votre script PHP qui gère la recherche
                method: 'POST',
                data: {devis: numeroDevis},
                success: function(response) {
                    if (response.success && response.link) {
                        // Ouvre le PDF dans une nouvelle fenêtre/onglet
                        window.open(response.link, '_blank');
                    } else {
                        alert("Devis non trouvé ou une erreur s'est produite.");
                    }
                }
            });
        } else {
            alert("Veuillez entrer un numéro de devis.");
        }
    });
});
