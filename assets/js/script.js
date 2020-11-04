
 var menu_top = document.querySelector('.menu_top');

var menu_icone = document.querySelector('.menu_icone').addEventListener('click',function(){
   
    if(menu_top.style.display == 'block'){

    	menu_top.style.display = 'none';

    }else{
    	menu_top.style.display = 'block'
    }

})