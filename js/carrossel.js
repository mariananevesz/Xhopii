const slides = document.querySelectorAll('.slide');
let atual = 0;

function mostrarSlide(index) {
    slides.forEach(slide => slide.classList.remove('active'));
    slides[index].classList.add('active');
}

document.getElementById('prev').addEventListener('click', function() {
    atual = (atual - 1 + slides.length) % slides.length;
    mostrarSlide(atual);
});

document.getElementById('next').addEventListener('click', function() {
    atual = (atual + 1) % slides.length;
    mostrarSlide(atual);
});

setInterval(function() {
    atual = (atual + 1) % slides.length;
    mostrarSlide(atual);
}, 4000);