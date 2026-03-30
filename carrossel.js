const slides = document.querySelectorAll('.slide');
let index = 0;

function mostrarSlide(i) {
    slides.forEach(slide => slide.classList.remove('active'));
    slides[i].classList.add('active');
}

document.getElementById('next').addEventListener('click', () => {
    index = (index + 1) % slides.length;
    mostrarSlide(index);
});

document.getElementById('prev').addEventListener('click', () => {
    index = (index - 1 + slides.length) % slides.length;
    mostrarSlide(index);
});