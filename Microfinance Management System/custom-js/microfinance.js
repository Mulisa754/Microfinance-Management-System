$(document).ready(function(){
    let butttons = document.getElementsByClassName('menu-btn');
    for(let i=0; i<butttons.length; i++){
        butttons[i].onclick = function(){
            this.classList.toggle('open');
            this.classList.toggle('active');

            let sub_menu = this.nextElementSibling;
            if(sub_menu.style.maxHeight){
                sub_menu.style.maxHeight = null
            }else{
                sub_menu.style.maxHeight = sub_menu.scrollHeight+"px";
            }
        }
    }
});