

// javascript para header
document.addEventListener('DOMContentLoaded', function () {
    var header = document.getElementById('myHeader');

    // Adiciona a classe 'initial' ao carregar a página
    header.classList.add('initial');

    window.addEventListener('scroll', function () {
        // Adiciona a classe 'scrolled' quando a página é rolada
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
            header.classList.remove('initial');
        } else {
            header.classList.remove('scrolled');
            header.classList.add('initial');
        }
    });
});

// JavaScript para alternar entre as imagens
const imageContainers = document.querySelectorAll('.image-container');
let currentIndex = 0;

function showNextImage() {
  imageContainers[currentIndex].classList.remove('show');
  currentIndex = (currentIndex + 1) % imageContainers.length;
  imageContainers[currentIndex].classList.add('show');
}

setInterval(showNextImage, 5000); // Muda a imagem a cada 5 segundos


  //icone de hambuguer e funções
  const hamburger = document.querySelector(".hamburger");
  const navMenu = document.querySelector(".nav-menu");
  const navBranding = document.querySelector(".nav-branding-2");

  hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
    navBranding.classList.toggle("active");
  })

  //POPUP
  document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
  }))

function openModal() {
document.getElementById('myModal').style.display = 'block';

}

function closeModal() {
  document.getElementById('myModal').style.display = 'none';
 
}