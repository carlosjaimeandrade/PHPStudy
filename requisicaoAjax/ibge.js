// essa opção enviamos para o BACK tratar os dados, podemos até verificar se tem usuario logado ou algo assim
function ibge(event) {
    let uf = event.target.value

    axios.post('ibgeApi.php', {
        uf: uf
    }).then(resp => exibirResultado(resp.data))
}

function exibirResultado(resp) {
    let element = ''
    resp.forEach(e => {
        element += `<li>${e['nome']}</li>`
    })
    const ul = document.querySelector('[wm-return-ibge]')
    ul.innerHTML = element

}

//-------------------------------------------------------outra opção ---------------------------------------------------------------
// aqui é outra opção para consumir a api direto no FRONTEND sem envio para o BACK, mas acredito que seja melhor tratar os dados no back, ainda mais se a api que você esta consumindo é paga, assim as credenciais devera ficar no back
// aqui não passei parametro apenas consumi uma api fixa, que pode ser modificada e apresentei no console.
axios.get('https://servicodados.ibge.gov.br/api/v1/localidades/estados/mg/distritos')
    .then(response => console.log(response.data))