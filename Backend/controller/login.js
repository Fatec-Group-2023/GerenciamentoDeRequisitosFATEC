
require('dotenv').config();
const axios = require('axios');

const nome = data.nome;
const email = data.email;
const senha = process.env.SENHA_FATEC;

// ===========================================================

document.getElementById('logar').addEventListener('click', Logar());

// ===========================================================

async function Logar()
{
    const loginEMAIL = document.getElementById('email').value;
    const loginSenha = document.getElementById('senha').value;
    
    if (loginEMAIL === email && loginSenha === senha)
    {
        header("Location: home.php");
        console.alert('Bem vindo ${nome}')
    }
    else
    {
        console.error('Erro ao fazer login: ', error);
        document.getElementById('senha').value = '';
    }
}