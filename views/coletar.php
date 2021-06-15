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

if ($result->rowCount() > 100) {?>

<section class="hero is-small is-danger">
  <div class="hero-body">
    <p class="title">
        Inauguração!
    </p>
    <p class="subtitle">
      Guerreiros Multi
    </p>
  </div>
</section>
<div class="columns">
  <div class="column is-half">
    <div class="content m-5">
        <h1>Venha participar!</h1>
        <p>
          Estaremos abrindo nossa 5ª loja! <br>
          A loja está localizada na <strong>R. Vinte e sete de janeiro, 171</strong>. A grande inauguração começara
          as <strong>09:30h</strong> do dia <strong>19/06/2021</strong> e ira até o final do nosso horario comerial!
        </p>
        <h2>Brinde exclusivo!?</h2>
        <p>
          Para a inauguração estamos dando de brinde uma de nossas <strong>canecas 
          personalizadas</strong> para quem fazer a inscrição online aqui no final
          da página! <small>as canecas são aleatórias!</small>
        </p>
        <h3>Como funciona?</h3>
        <p>
          Somente preencher o formulario e tirar uma foto da tela (printscreen) para
          apresentar no dia da inauguração junto com o seu CPF! Só sera entregue a 
          caneca na presença do <strong> <li>Codigo gerado</li> <li>CPF</li> </strong>
        </p>
        <h4>Preencha e ganhe!</h4>
        <p>
            Preenchendo os campos abaixo você ganhara um código que você pode trocar
            por uma caneca na inauguração!
        </p>
    </div>
    <div class="container is-bordered">
        <form action="codigo.php" method="post">
            <div class="field m-5">
                <label class="label" for="nome">Nome completo</label>
                <input class="input" type="text" name="nomec" id="nome" required>
            </div>
            <div class="field m-5">
                <label class="label" for="cpf">CPF</label>
                <input class="input" type="text" name="cpfc" id="cpf" maxlength="14" required>
            </div>
            <div class="m-5 has-text-right">
                <button class="button is-danger" type="submit">Enviar</button>
            </div>
        </form>
    </div> 
  </div>
  <div class="column is-half">
    <div class="content m-5">
        <figure class="image">
            <img src="../img/caneca2.jpeg" alt="caneca2" withd="256" height="256">
            <img src="../img/caneca1.jpeg" alt="caneca1" withd="256" height="256">
        </figure>
    </div>
  </div>
</div>
<?php } else { //FALTANDO ?>
    
<section class="hero is-small is-danger">
  <div class="hero-body">
    <p class="title">
        Inauguração!
    </p>
    <p class="subtitle">
      Guerreiros Multi
    </p>
  </div>
</section>
<div class="columns">
    <div class="column is-three-fifths">
        <div class="content m-5">
        <h1>Venha participar!</h1>
        <p>
          Estaremos abrindo nossa 5ª loja! <br>
          A loja está localizada na <strong>R. Vinte e sete de Janeiro, 171</strong>. A grande inauguração começara
          as <strong>09:30h</strong> do dia <strong>19/06/2021</strong> e ira até o final do nosso horario comerial!
        </p>
        <h2>Brinde exclusivo!?</h2>
        <p>
          Infelizmente os brindes já se foram! Mas você ainda pode comprar as nossas canecas 
          em nossas lojas
        </p>
        <h3>Localização das lojas</h3>
        <p>
            <ul>
                <li>Av. João de Andrade, 1535 - Santo Antônio - Osasco - SP - (11) 3592-2991</li>
                <li>Av. Prestes Maia, 842 - Jd. D'abril - Osasco - SP - (11) 3605-7590</li>
                <li>Av. João de Andrade, 1852 - Santo Antônio - Osasco - SP - (11) 3591-9291</li>
                <li>R. Maria Antônia Niero, 455 - Santo Antônio - Osasco - SP - (11) 4625-3955</li>
                <li>R. Vinte e sete de janeiro, 171 - Novo Osasco - Osasco - SP - (11) 4384-8093 <small>novo!</small> </li>
            </ul>
        </p>
        
        </div>
    </div>
    <div class="column">
        <div class="content m-5">
            <figure class="image">
                <img src="../img/caneca2.jpeg" alt="caneca2" withd="256" height="256">
                <img src="../img/caneca1.jpeg" alt="caneca1" withd="256" height="256">
            </figure>
        </div>
    </div>
</div>

<?php } ?>

<script>
const cpf = document.querySelector("#cpf");

cpf.addEventListener("keyup", () => {
  let value = cpf.value
    .replace(/[^0-9]/g, "")
    .replace(/^([\d]{3})([\d]{3})?([\d]{3})?([\d]{2})?/, "$1.$2.$3-$4");

  cpf.value = value;
});
</script>

<?php require './templates/Footer.html' ?>