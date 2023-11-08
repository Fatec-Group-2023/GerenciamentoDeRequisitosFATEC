const apiUrl = "https://www.fatecpp.edu.br/todos-professores/";

// ====================

async function informacoesAPI() 
{
    try 
    {
        const response = await fetch(apiUrl);

        if (response.status === 200) 
        {
            const userData = await response.json();
            return userData;
        } 
        else 
        {
            return null;
        }
    } 
    catch (error) 
    {
        console.error('Erro ao obter informações da API: ' + error);
        return null;
    }
}

async function BuscarEmailAPI(emailInput) 
{
    try 
    {
        const response = await fetch(apiUrl);
        
        if (response.status === 200) 
        {
            const userData = await response.json();
            const foundUser = userData.find(user => user.email === emailInput);
            return foundUser ? true : false;
        } 
        else 
        {
            return false;
        }
    } 
    catch (error) 
    {
        console.error('Erro ao obter informações sobre o email: ' + error);
        return false;
    }
}