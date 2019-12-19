<?php
/**
 *Auteur:   Mounir Fiaux
 *Titre:    home.php
 *Date:     19.12.2019
 *Version:
 */
ob_start();
?>
    <div class="row">
        <div class="col-sm-6 col-lg-6">
            <a  href='?action=movies'><img class="col-sm-12 col-lg-12" src="images/movies.jpg"></a>
        </div>
        <div class="col-sm-6 col-lg-6">
            <a  href='?action=concerts'><img class="col-sm-12 col-lg-12" src="images/concerts.jpg"></a>
        </div>
    </div>
<?php
$content = ob_get_clean();
?>