async function carregar_leitor(valor){
    if(valor.lenght >=3){
        console.log("Pesquisar:"+ valor);
       const dados =  await fetch('listar_leitor.php?nome_leitor='+ valor)
       const resposta = await dados.json();
       console.log(resposta);
    }

}
async function carregar_livro(valor){
    if(valor.lenght >=3){
        console.log("Pesquisar:"+ valor);
       const dados =  await fetch('listar_livro.php?titulo='+ valor)
       const resposta = await dados.json();
       console.log(resposta);
    }

}