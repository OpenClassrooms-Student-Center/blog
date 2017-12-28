<?php
session_start();
ob_start()
?>

<div class="col-sm-10">
    <h1 class="text-center">Rédiger un post</h1>

    <!-- Editeur Summernote -->
    <form method="post" action="../controleur/ctrl_create.php">
        <div class="form-group">
        <label for="titre">Titre:</label>
        <input class="form-control" type="text" name="titre" id="titre">
        </div>

        <div class="form-group">
        <label for="chapo">Chap&#244;:</label><br/>
        <textarea class="form-control" name="chapo" id="chapo" rows="3" cols="10"></textarea>
        </div>

        <div class="form-group">
        <label for="summernote">Texte:</label>
        <textarea name="contenu" id="summernote"></textarea>
        </div>

        <input type="submit">
    </form>
</div>

    <!-- script éditeur -->
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 450
                            });
        });
    </script>

<?php
$content = ob_get_clean();
require ('admin-template.php');
?>