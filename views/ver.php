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
?>

<div class="container">
        <table class="table is-bordered is-hoverable is-striped">
            <thead>
                <tr class="has-text-centered">
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>CPF</th>
                    <th>Código</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <?php
                $result = $conn->prepare("SELECT id, nome, cpf, codigo FROM cliente");
                $result->execute();
                foreach ($result as $row) {
                    echo "<th>" . $row['id'] . "</th>";
                    echo "<th>" . $row['nome'] . "</th>";
                    echo "<th>" . $row['cpf'] . "</th>";
                    echo "<th>" . $row['codigo'] . "</th>";
                }
                ?>
            </tr>
        </tbody>
    </table>
</div>

<?php require './templates/Footer.html' ?>