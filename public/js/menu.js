// Ejecutar funcion en el evento clic
document.getElementById('btn_open').addEventListener('click', open_close_menu);
//variables

var MenuLateral = document.getElementById('menuLateral');
var btn_open = document.getElementById('btn_open');
var contenedor = document.getElementById('contenedor');

//Evento mara mostrar y ocultar menu

function open_close_menu(){
    contenedor.classList.toggle('contenedor_move');
    MenuLateral.classList.toggle('menuLateral_move');
}

//Ocultar menu si la pagina es menor a 760px

if(window.innerWidth < 760){
    contenedor.classList.add('contenedor_move');
    MenuLateral.classList.add('menuLateral_move');
}

//Menu responsivo adaptable

window.addEventListener('resize', function(){
    if(this.window.innerWidth >760){
        contenedor.classList.remove('contenedor_move');
        MenuLateral.classList.remove('menuLateral_move');
    }

    if(this.window.innerWidth < 760){
        contenedor.classList.add('contenedor_move');
        MenuLateral.classList.add('menuLateral_move');
    }
});