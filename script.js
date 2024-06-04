let menu=document.querySelector('#menu-btn');
let navbar=document.querySelector('.navbar .nav');
let header=document.querySelector('.navbar ')
menu.onclick=()=>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll=()=>{
    menu.classList.remove('fa-times');
    navbar.classList.remove ('active');

    if(window.scrollY>0){
        navbar.classList.add('active');

    }else{
        navbar.classList.remove('active');
    }
}