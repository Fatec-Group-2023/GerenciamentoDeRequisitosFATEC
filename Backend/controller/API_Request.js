
// Importando o DotEnv
require('dotenv').config();
const axios = require('axios');

// URL da API
const apiUrl = process.env.API_URL;

// ===========================================================

async function BuscarDadosAPI()
{
    try 
    {
        
        const respostaAPI = await axios.get(apiUrl);

        // requisição deu certo? Então guarda as informações...
        if (respostaAPI.status === 200) 
        {
            const data = respostaAPI.data;
        } 
        else 
        {
            console.error('Falha ao buscar os dados da API');
        }

    } 
    catch (error) 
    {
        console.error('Erro ao fazer a requisição à API: ', error.message);
    }
}

// =======

BuscarDadosAPI();