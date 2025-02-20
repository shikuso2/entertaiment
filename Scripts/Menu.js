let seccion;
window.onload = function() { 

    
    





















};
function updatemenu(submenu) {       
    if(seccion!=submenu)
       $('.submenu').slideUp(0);     
    $('.'+submenu).slideToggle(200);
    seccion=submenu;
}
