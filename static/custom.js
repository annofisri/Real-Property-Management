/**
 * Template Name: Arsha
 * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
 * Author: BootstrapMade.com
 * License: https://bootstrapmade.com/license/
 */


$(document).ready(function () {
  $('.doctor-slider').slick({
    dots: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 20000000,
    slidesToShow: 4,
    slidesToScroll: 1,
    dots: false,

    height: '100%',

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


  // pagination

  //get page number from url
  var url = window.location.href;

  //if url contains p= then get the page number
  if (url.indexOf("p=") != -1) {
    var page = url.split("p=")[1];
    var page = page.split("&")[0];
  } else {
    var page = '1';
  }
  // console.log(page);

  if (page) {


    //get all pagination links
    var paginationLinks = document.querySelectorAll(".page-item");

    // console.log(paginationLinks);
    // console.log({ niraj: paginationLinks[1].textContent });
    // console.log({ page: page });


    //loop through pagination links and add active class to the link that matches the page number
    paginationLinks.forEach(function (link) {

      if (link.textContent == page) {

        console.log({ niran: page });
        link.classList.add("disabled");
        link.querySelector("a").classList.add("active-page");


      }
      if (page > 1) {
        paginationLinks[0].classList.remove("disabled");
      } else {
        paginationLinks[0].classList.add("disabled");
      }
      if (page < paginationLinks.length - 2) {
        paginationLinks[paginationLinks.length - 1].classList.remove("disabled");
      } else {
        paginationLinks[paginationLinks.length - 1].classList.add("disabled");
      }
    });
  }






  //share button Js template


  // GET array of ALL SHARE BUTTONS
  var shareBtns = document.querySelectorAll('.share-btn');
  const shareUrlInput = document.getElementById("share-url");
  var currentURL = window.location.href;
  if (shareBtns.length > 0) {
    // Loop through each SHARE BUTTON and add a click event listener
    shareBtns.forEach(function (shareBtnElemnt) {
      shareBtnElemnt.addEventListener('click', function (e) {
        e.preventDefault(); // Prevent the default behavior of the anchor tag


        var share_title = this.getAttribute("data-title");
        if (currentURL.indexOf("id=") != -1) {
          var shareURL = currentURL;
        }
        else {
          var id = this.getAttribute("data-custom-id");
          // Define the URL you want to share
          var shareURL = `${currentURL}?id=${id}`
          //remove space between words
          shareURL = shareURL.replace(/\s/g, '');
        }
        // Use the Web Share API if supported


        //define navigator.share
        navigator.share = navigator.share || window.navigator.share;
        console.log(navigator);
        if (navigator.share) {
          navigator.share({
            title: share_title,
            text: 'Check out this patient education resource!',
            url: shareURL
          })
            .then(() => {
              // console.log('Shared successfully');
            })
            .catch(error => {
              console.error('Error sharing:', error);
            });
        } else {
          // Fallback for browsers that don't support navigator.share
          const tempInput = document.createElement("input");
          tempInput.value = shareURL;
          document.body.appendChild(tempInput);
          tempInput.select();
          document.execCommand("copy");
          document.body.removeChild(tempInput);
          alert('URL copied to clipboard. You can manually share it.');
        }

      });

    });
  }




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
   * Navbar links active state on scroll
   */
  let navbarlinks = select("#navbar .scrollto", true);

  navbarlinks.forEach((navbarlink) => {
    navbarlink.addEventListener("click", () => {
      navbarlinks.forEach((navbarlink) => {
        navbarlink.classList.remove("active");
      });
      navbarlink.classList.add("active");
    });
  });


  // console.log(navbarlinks);
  // const navbarlinksActive = () => {
  //   let position = window.scrollY + 200;
  //   navbarlinks.forEach((navbarlink) => {
  //     if (!navbarlink.hash) return;
  //     let section = select(navbarlink.hash);
  //     if (!section) return;
  //     if (
  //       position >= section.offsetTop &&
  //       position <= section.offsetTop + section.offsetHeight
  //     ) {
  //       navbarlink.classList.add("active");
  //     } else {
  //       navbarlink.classList.remove("active");
  //     }
  //   });
  // };
  // window.addEventListener("click", navbarlinksActive);
  // onscroll(document, navbarlinksActive);

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let header = select("#header");
    let offset = header.offsetHeight;

    let elementPos = select(el).offsetTop;
    window.scrollTo({
      top: elementPos - offset,
      behavior: "smooth",
    });
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

  // dismiss navbar when zI click outside the navbar

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

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on(
    "click",
    ".scrollto",
    function (e) {
      if (select(this.hash)) {
        e.preventDefault();

        let navbar = select("#navbar");
        if (navbar.classList.contains("navbar-mobile")) {
          navbar.classList.remove("navbar-mobile");
          let navbarToggle = select(".mobile-nav-toggle");
          navbarToggle.classList.toggle("bi-list");
          navbarToggle.classList.toggle("bi-x");
        }
        scrollto(this.hash);
      }
    },
    true
  );

  // let items = document.querySelectorAll(".carousel .carousel-item");
  // console.log(items);

  // items.forEach((el) => {
  //   const minPerSlide = 4;
  //   let next = el.nextElementSibling;
  //   for (var i = 1; i < minPerSlide; i++) {
  //     if (!next) {
  //       // wrap carousel by using first child
  //       next = items[0];
  //     }
  //     let cloneChild = next.cloneNode(true);
  //     el.appendChild(cloneChild.children[0]);
  //     next = next.nextElementSibling;
  //   }
  // });

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



