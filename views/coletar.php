<?php
/**
 * Coletar as informações do usuário para poder ganhar na caneca dele
 * 
 * PHP version 7
 * 
 * @category Database_Connectionm
 * @package  PHP_Core
 * @author   Giovanni Neves Sadauscas <gionneves@gmail.com>
 * @license  Guerreiros games
 * @link     http//localhost/
 */

require "./templates/Header.html";

require "../core/conn.php";
$result = $conn->prepare("SELECT id FROM cliente");
$result->execute();

if ($result->rowCount() < 500) {?>

<section class="hero is-small is-danger">
  <div class="hero-body">
    <p class="title">
        Inauguração!
    </p>
    <p class="subtitle">
      Guerreiros Multi.
    </p>
  </div>
</section>
<div class="content">
    <h1>Venha participar!</h1>
</div>

<?php } else { ?>
<h1>TEM NAO</h1>
<?php } require './templates/Footer.html' ?>