 <!-- Bannière publicitaire -->
<style>
    /* Style pour la bannière */
    .banner-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #f9f9f9;
    text-align: center;
    padding: 10px 0;
    z-index: 1000; /* S'assurer que la bannière est au-dessus de tout */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }
  
  /* Style pour l'image de la bannière */
  .banner {
    max-width: 100%;
    height: auto;
  }
  
  /* Bouton de fermeture (croix) */
  .close-btn {
  position: absolute;
  top: 10px;
  right: 15px;
  background-color: red; /* Arrière-plan rouge */
  color: white; /* Couleur de la croix en blanc */
  border: none;
  font-size: 24px;
  cursor: pointer;
  padding: 5px 10px;
  }

  .close-btn:hover {
  background-color: darkred; /* Changer le rouge en plus sombre au survol */
  }
</style>
<div id="banner" class="banner-container">
    <img src="img/Bazz2.png" alt="Publicité" class="banner">
    <button class="close-btn" onclick="closeBanner()">&times;</button>
</div>
<script>
      function closeBanner() {
    document.getElementById('banner').style.display = 'none';
    }
</script>