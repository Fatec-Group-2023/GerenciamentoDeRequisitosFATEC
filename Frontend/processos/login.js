// =============================
import { BuscarEmailAPI } from './api.js';
// =============================

const emailInput = document.getElementById('email');
const senhaInput = document.getElementById('senha');

document.getElementById('logar').addEventListener('click', Logar);

async function Logar() 
{
    const loginEmail = emailInput.value;
    const loginSenha = senhaInput.value;

    if (!loginEmail || !loginSenha) 
    {
        alert('Por favor, preencha o email e a senha!');
        return;
    }

    // Verifica se existe o email na API
    const emailExists = await api.BuscarEmailAPI(loginEmail);

    if (emailExists) 
    {
        if (loginSenha === '1234')
        {
            window.location.href = 'home.php';
            alert(`Bem-vindo ${emailExists.nome}!`);
        }
        else
        {
            alert('Ops! Parece que a senha esta incorreta');
            senhaInput.value = '';
        }
    } 
    else 
    {
        alert('Ops! As credenciais estão incorretas');
        senhaInput.value = '';
    }
}
