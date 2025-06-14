<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
  <script>
    var menubtn = document.getElementById("menubtn");
    var sidenav = document.getElementById("sidenav");

    sidenav.style.right = "-250px";
    menubtn.onclick = function () {
      if (sidenav.style.right == "-250px") {
        sidenav.style.right = "0px";
      } else {
        sidenav.style.right = "-250px";
      }
    };
    var scroll = new SmoothScroll('a[href*="#"]', {
      speed: 1000,
      speedAsDuration: true,
    });
  </script>