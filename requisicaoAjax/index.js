function sendImgPerfil(event) {
    //essa pare  apenas para dar o preview da img

    //local onde irá o preview da img
    const imgPreview = document.querySelector('[wm-preview-img]')
        // constante que irá salvar o arquivo carregado no input
    const files = event.target.files
        // criando um elemento tipo img, será onde iremos colocar a nossa img
    let img = document.createElement('img');
    // criamos uma URL temporaria da imagem para enviarmos para o back e para poder tambem usar no preview, percebe que passamos o arquivo dentro da função createObjectURL
    // precisamos infomar qual o indece da constante files, pois essa contante acaba se tornando um array após obtermos o valores do input
    let url = URL.createObjectURL(files[0])
        // agora iremos usar a constante img para inserir um atributo src com a url da imagem
    img.src = url
        // na constante imgPreview vamos agora inserir a nossa TAG img que já foi inserida o SRC com a URL temporaria, usaremos para isso o insertAdjacentElement
        // usamos o innerHTML para limpar caso a pessoa carregue uma nova imagem assim ira sobrepor a anterior 
    imgPreview.innerHTML = '';
    imgPreview.insertAdjacentElement('beforeend', img)

    //agora vamos enviar para o back tratar o  envio para o servidor, usaremos pra isso o AJAX, no caso sem o JQUERY, mas para ficar mais facil podemos usar o JQUERY
    // mandamos para o moveServerApi.php a requisição via post com os parametros URL com a url temporaria que criamos
    axios.post('moveServerApi.php', {
        url: url
    }).then(resp => exibirResultado(resp.data))

}

function exibirResultado(dados) {
    // a variavel dados veio do back com a informação de texto enviado com sucesso pois solicitamos assim 
    alert(dados)
}
