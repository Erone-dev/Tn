'use strikt'

function move(){
    if(window.matchMedia('(max-width: 992px)').matches) {
        $('#collapseExample').appendTo('#marker');
    } else {
        $('#collapseExample').appendTo('#menu');
    }
}

move();

$(window).resize(()=>{
    move();
})


