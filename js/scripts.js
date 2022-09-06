// ------------------- header -------------------
var nav = document.querySelector('nav');
      window.addEventListener('scroll', function () {
        console.log("hay");
        if (window.pageYOffset > 100) {
          nav.classList.add('bg-dark', 'shadow');
          console.log("hay");
        } else {
          nav.classList.remove('bg-dark', 'shadow');
        }
    });