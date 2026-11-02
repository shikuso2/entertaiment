let menu = document.createElement('menu');
const segmentos = window.location.pathname.split('/').filter(Boolean);
const nivelesDeProfundidad = segmentos.length;
let nivel="";
let subnivel="ano/";


const partes = window.location.pathname.split('/').filter(Boolean);
const ultimoElemento = partes[partes.length - 1];
if (ultimoElemento && ultimoElemento.includes('.')) {
    partes.pop();
}
const ultimoSubdirectorio = partes[partes.length - 1] || 'inicio'; 

console.log(ultimoSubdirectorio);


if (ultimoSubdirectorio == "ano") {
    nivel="../";
    subnivel="";
} else {    
    nivel="";
    subnivel="ano/";
}
menu.innerHTML=`
                <div class="submenu">
                    <li><a href="${subnivel}2026-2.html">2026-2</a></li>
                    <li><a href="#">2026-3</a></li>
                    <li><a href="${subnivel}2026-4.html">2026-4</a></li>            
                </div>
                <div class="menu">
                    <li><a href="${nivel}index.html">INICIO</a></li>
                    <li><a href="${nivel}participantes.html">participantes</a></li>
                    <li><a id="alternar">AÑO</a></li>
                    <li><a href="${nivel}hof.html">HoF</a></li>
                </div>
            `; 
document.body.appendChild(menu);

document.getElementById('alternar').addEventListener('click', function() {
    const submenu = document.querySelector('.submenu');
    if (submenu.style.display === 'grid') {
        submenu.style.display = 'none';
    } else {
        submenu.style.display = 'grid';
    }
});
const mlink = document.createElement('link');
mlink.rel = 'stylesheet';
mlink.href = `${nivel}menu/menu.css?v=` + Date.now();
document.head.appendChild(mlink);