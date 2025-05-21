function gymwordpress() {
    if (document.querySelector('.swiper')) {
        const opciones = {
            loop: true,
            autoplay: {
                delay: 2800
            }
        }
        new Swiper('.swiper', opciones);
    }

    var textWrapper = document.querySelector('.ml3');
    if (textWrapper) {
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({ loop: true })
            .add({
                targets: '.ml3 .letter',
                opacity: [0, 1],
                easing: "easeInOutQuad",
                duration: 2250,
                delay: (el, i) => 150 * (i + 1)
            }).add({
                targets: '.ml3',
                opacity: 0,
                duration: 1000,
                easing: "easeOutExpo",
                delay: 1000
            });
    }

    var textWrapper = document.querySelector('.ml11 .letters');
    textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");

    anime.timeline({ loop: true })
        .add({
            targets: '.ml11 .line',
            scaleY: [0, 1],
            opacity: [0.5, 1],
            easing: "easeOutExpo",
            duration: 700
        })
        .add({
            targets: '.ml11 .line',
            translateX: [0, document.querySelector('.ml11 .letters').getBoundingClientRect().width + 10],
            easing: "easeOutExpo",
            duration: 700,
            delay: 100
        }).add({
            targets: '.ml11 .letter',
            opacity: [0, 1],
            easing: "easeOutExpo",
            duration: 600,
            offset: '-=775',
            delay: (el, i) => 34 * (i + 1)
        }).add({
            targets: '.ml11',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1500
        });

    const hamburguer = document.querySelector('.hamburguer-menu svg')
    hamburguer.addEventListener('click', function(){
        const menuPrincipal = document.querySelector('.contenedor-menu');
        menuPrincipal.classList.toggle('mostrar');
    })
}

document.addEventListener('DOMContentLoaded', gymwordpress)

window.onscroll = function(){
    const scroll = window.scrollY;
    const barranav = document.querySelector('.barra-navegacion')

    if (scroll > 300) {
        console.log('hola');
        barranav.classList.add('fixed-top');
    }else{
        barranav.classList.remove('fixed-top');
    }
}