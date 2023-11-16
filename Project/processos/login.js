import { buscarUsuarioPorEmail } from './api.js';

document.getElementById('logar').addEventListener('click', async function () 
{
    const emailInput = document.getElementById('email').value;
    const senhaInput = document.getElementById('senha').value;

    if (!emailInput || !senhaInput) 
    {
        alert('Por favor, preencha o email e a senha!');
        return;
    }

    try 
    {
        const usuario = await buscarUsuarioPorEmail(emailInput);

        if (usuario) 
        {
            if (senhaInput === '1234') 
            {
                window.location.href = 'home.php';
                alert(`Bem-vindo ${usuario.nome}!`);
            } 
            else 
            {
                alert('Ops! Parece que a senha está incorreta');
            }
        } 
        else 
        {
            alert('Ops! As credenciais estão incorretas');
        }
    } 
    catch (error) 
    {
        console.error('Erro ao realizar login: ' + error);
    }
});
