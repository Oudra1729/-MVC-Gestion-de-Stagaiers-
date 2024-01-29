<?php $title = "Ajoute stagiaire"; ?>
<?php ob_start(); ?>
<form action="index.php?action=store" method="post">
   <div class="form-group">
      <div class="form-group">
         <label>cin:</label>
         <input type="text" class="form-control" name="cin">
      </div>
      <label>Nom:</label>
      <input type="text" class="form-control" name="nom">
   </div>
   <div class="form-group">
      <label>Prénom:</label>
      <input type="text" class="form-control" name="prenom">
   </div>
   <div class="form-group">
      <label>date de nassence</label>
      <input type="date" class="form-control" name="date_n">
   </div>
   <div class="form-group">
      <input type="submit" class="btn btn-success my-2" value="ajouter" name="ajouter">
   </div>
</form>
<?php $content = ob_get_clean(); ?>
<?php include_once 'views/layout.php'; ?>