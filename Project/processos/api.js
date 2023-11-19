const apiUrl = "https://fatecpp.edu.br/wp-json/fatec/professores";

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

async function buscarUsuarioPorEmail(emailInput) 
{
    try 
    {
        const userData = await informacoesAPI();
        if (userData) 
        {
            const foundUser = userData.find(user => user.email === emailInput);
            return foundUser || null;
        } 
        else 
        {
            return null;
        }
    } 
    catch (error) 
    {
        console.error('Erro ao buscar usuário por email: ' + error);
        return null;
    }
}

export { buscarUsuarioPorEmail };
