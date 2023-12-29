/**
 * Template Name: Arsha
 * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
 * Author: BootstrapMade.com
 * License: https://bootstrapmade.com/license/
 */


$(document).ready(function () {
  $('.property-slider').slick({
    dots: true,
    infinite: true,
    autoplay: false,
    speed: 300,
    adaptiveHeight: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: true,

    height: '100%',
    gap: 10,

    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
});





(function () {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim();
    if (all) {
      return [...document.querySelectorAll(el)];
    } else {
      return document.querySelector(el);
    }
  };



  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all);
    if (selectEl) {
      if (all) {
        selectEl.forEach((e) => e.addEventListener(type, listener));
      } else {
        selectEl.addEventListener(type, listener);
      }
    }
  };

  /**
   * Easy on scroll event listener
   */
  const onscroll = (el, listener) => {
    el.addEventListener("scroll", listener);
  };



  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select("#header");
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add("header-scrolled");
      } else {
        selectHeader.classList.remove("header-scrolled");
      }
    };
    window.addEventListener("load", headerScrolled);
    onscroll(document, headerScrolled);
  }

  /**
   * Mobile nav toggle
   */
  on("click", ".mobile-nav-toggle", function (e) {
    select("#navbar").classList.toggle("navbar-mobile");
    this.classList.toggle("bi-list");
    this.classList.toggle("bi-x");
    //make screen unscrollable

    if (this.classList.contains("bi-x")) {
      document.body.style.overflow = "hidden";
    } else {
      document.body.style.overflow = "auto";
    }

  });

  // dismiss navbar when I click outside the navbar

  document.addEventListener("click", function (e) {
    let navbar = document.querySelector("#navbar");

    if (navbar && navbar.classList.contains("navbar-mobile")) {
      document.addEventListener("click", function (e) {
        if (e.target.closest("#navbar-ul")) return;
        if (e.target.closest(".mobile-nav-toggle")) return;
        navbar.classList.remove("navbar-mobile");
        let navbarToggle = select(".mobile-nav-toggle");
        navbarToggle.classList.remove("bi-x");
        navbarToggle.classList.add("bi-list");
        document.body.style.overflow = "auto";
      });

    }


  });

  /**
   * Mobile nav dropdowns activate
   */
  on(
    "click",
    ".navbar .dropdown > a",
    function (e) {
      if (select("#navbar").classList.contains("navbar-mobile")) {
        e.preventDefault();
        this.nextElementSibling.classList.toggle("dropdown-active");
      }
    },
    true
  );




  // Get modal and image elements
  const modal = document.getElementById("imageModal");
  const fullImage = document.getElementById("fullImage");
  const closeModal = document.getElementById("closeModal");

  // Get all images with class "popup-image"
  const images = document.querySelectorAll(".popup-image");

  // Function to set the modal content size based on the original image's width
  function setModalSize(imageSrc) {
    const originalImage = new Image();
    originalImage.src = imageSrc;
    originalImage.onload = function () {
      // set height to 80% of the screen height and width to auto
      fullImage.style.height = "90vh";
      fullImage.style.width = "auto";
      fullImage.src = imageSrc;

      //set border
      fullImage.style.border = "10px solid var(--blue-light-hover, #DCE4F0)";
    };
  }

  // Add click event listeners to open the modal with the clicked image

  if (images.length === 0) {
    return;
  }
  images.forEach((image) => {
    image.addEventListener("click", () => {
      modal.style.display = "block";
      setModalSize(image.src);
    });
  });

  // Close the modal when the close button is clicked

  if (closeModal) {
    closeModal.addEventListener("click", function () {
      modal.style.display = "none";
    });
  }

  // Close the modal when clicking outside the image
  window.addEventListener("click", (event) => {
    if (event.target === modal) {
      modal.style.display = "none";
    }
  });
})();



// custom font size for doctor card
window.addEventListener('DOMContentLoaded', function () {
  var doctorNames = document.getElementsByClassName('doctor-name');
  for (var i = 0; i < doctorNames.length; i++) {
    while (doctorNames[i].scrollWidth > doctorNames[i].offsetWidth) {
      var fontSize = parseFloat(window.getComputedStyle(doctorNames[i], null).getPropertyValue('font-size'));
      doctorNames[i].style.fontSize = (fontSize - 1) + 'px';
    }
  }
});
// custom font size for doctor card end


//home hero animated text
const words = ['HOME', 'RENT'];
let index = 0;
const animatedWord = document.getElementById('animated-word');
const cursor = document.querySelector('.cursor');

function animateWord(word, add, callback) {
  const letters = word.split('');
  const interval = setInterval(() => {
    if (letters.length === 0) {
      clearInterval(interval);
      callback();
    } else {
      if (add) {
        animatedWord.innerHTML += letters.shift();
      } else {
        animatedWord.innerHTML = animatedWord.innerHTML.slice(0, -1);
        letters.pop();
      }
    }
  }, 500);
}

function animate() {
  animateWord(words[index], true, () => {
    animateWord(words[index], false, () => {
      index = (index + 1) % words.length;
      animate();
    });
  });
}


if (animatedWord) {
  window.addEventListener('DOMContentLoaded', animate);
}

//home hero animated text end






