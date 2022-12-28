import { request } from './utils.js';

const tabela = document.querySelector('#tabelaTimes');
const row = document.querySelector('#row');

tabela.addEventListener("click", function(){
    console.log("vaovapo")
})

const button = document.querySelector('#botao_editar1');
const name = document.querySelector('#valor_name1');
const email = document.querySelector('#valor_id1');
const password = document.querySelector('#valor_contato1');

button.addEventListener('click', async () => {
    const data = await request(`register`, {
        method: 'POST',
        body: {
            name: name.value,
            email: email.value,
            password: password.value,
        },
    });
    console.log(data);
});