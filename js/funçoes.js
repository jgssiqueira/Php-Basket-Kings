function exibir_categorias(categoria){
    //alert (categoria);

    let elementos = document.getElementsByClassName('box_produto')
    console.log(elementos);
    for(var i=0; i<elementos.length; i++){
        console.log(elementos[i].id);
        if(categoria == elementos[i].id)
            elementos[i].style = "display:block";
        else
            elementos[i].style = "display:none";
    }
}

let exibir_todos = () => {
    let elementos = document.getElementsByClassName('box_produto')
    for(var i=0; i<elementos.length; i++){
        elementos[i].style = "display:block";
    }
};

let destaque = (imagem) => {
    console.log(imagem);
    if(imagem.width == 250)
       imagem.width = 200;
    else
       imagem.width = 250;
};