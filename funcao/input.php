<h1>Input</h1>
<form method="post">
    <input type="text"  name="teste" wm-teste oninput=preenchimento(event) onkeypress="return event.charCode >= 48 && event.charCode <= 57">
    <button> Enviar</button>
</form>
<div wm-teste>

</div>

<?php var_dump($_POST) ?>
<script>
    function preenchimento(event) {
        let eventValor = event.target.value
        validacao = isNaN(parseInt(eventValor))
        console.log(validacao)
        if (validacao == false) {
            eventValor = eventValor.replace(".", "")
            eventValor = eventValor.replace(".", "")
            eventValor = eventValor.replace(".", "")
            eventValor = eventValor.replace(".", "")
            eventValor = eventValor.replace(".", "")
            eventValor = eventValor.replace(".", "")
            var numero = parseInt(eventValor).toLocaleString();
            event.target.value = numero
        }


    }
</script>