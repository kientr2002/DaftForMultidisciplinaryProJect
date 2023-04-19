/*

Visit My Website to see creative design
				www.HUSAMUI.com


*/
"use strict";
const menus = document.querySelectorAll('.menu');
menus.forEach(menu => {
    const menuItems = menu.querySelectorAll('.menu-item');
    menuItems.forEach((item) => {
        item.addEventListener('click', e => {
            menuItems.forEach(item => item.classList.remove('active'));
            const target = e.target;
            target.classList.add('active');
        });
    });
});

$(document).ready(function(){
  
    $(".drop-down").click(function(){
      $(".menubox").toggleClass("showMenu");
        $(".menubox > li").click(function(){
          $(".drop-down > p").html($(this).html());
            $(".menubox").removeClass("showMenu");
        });
    });
    
  });
