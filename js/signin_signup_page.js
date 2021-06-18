$(document).ready(function (){

    //0 = login | 1 = cadastro
    pagina = 0;

    $(".cadastrologin-link-image-button").click(mudarPagina);

});

function mudarPagina(){

    if(pagina === 0){

        $(".pagina-login").css("animation", "descer 400ms ease-in-out");
        setTimeout(function(){
            $(".pagina-login").css("display", "none");
            $(".pagina-cadastro").css("display", "block");
            $(".pagina-cadastro").css("animation", "subir 400ms ease-in-out");
        }, 300);
     
        pagina = 1;
        return false;

    }

    if(pagina === 1){

        $(".pagina-cadastro").css("animation", "descer 400ms ease-in-out");
        setTimeout(function(){
            $(".pagina-cadastro").css("display", "none");
            $(".pagina-login").css("display", "block");
            $(".pagina-login").css("animation", "subir 400ms ease-in-out");     
        }, 300);

        pagina = 0;
        return false;

    }

}