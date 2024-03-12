let rua = document.getElementById('rua');
let bairro = document.getElementById('bairro');
let cidade = document.getElementById('cidade');
let uf = document.getElementById('estado');



function carregaCep(){
    let txtCepNum = document.getElementById('cep').value;

    const url = `https://viacep.com.br/ws/${txtCepNum}/json/`;

    fetch(url)
    .then(response => response.json())
    .then(data => {
                
    rua.value=data.logradouro;
    bairro.value=data.bairro;
    cidade.value=data.localidade;
        
    })
}