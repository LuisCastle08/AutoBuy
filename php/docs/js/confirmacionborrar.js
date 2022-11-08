function confirmacion(eventoborrar) {
    if (confirm("¿Estas seguro que deseas eliminar este Registro?")) {
        return true;
    }else{
        eventoborrar.preventDefault();
    }
}

var linkborrar=document.querySelectorAll(".borrar");

for (let i = 0; i < linkborrar.length; i++) {
    linkborrar[i].addEventListener('click', confirmacion)
}