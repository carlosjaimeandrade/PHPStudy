<div class="titulo">Integração css</div>

<h1>
    <?php 
        echo'ola';
        echo '<small>';
        echo ' mundo ';
        echo'</small>';
    ?>
</h1>

<?= "<div> outra forma de me expressa</div>"?>
<br>
<div>
    <button>Css</button>
</div>

<style>
    button {
        background-color: red;
        border: None;
        width: <?= 2*120 ?>px;
        padding: 10px;
        color: #fff;
        cursor: pointer;
        border-radius: 5px;
    }
</style>