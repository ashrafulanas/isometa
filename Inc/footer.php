  
  
  <!-- js scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- js plugin scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- js bootstrap scripts -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>

    <script src="Assets/js/custom.js"></script>
    
    <script>
      var header=document.getElementsByClassName('buttonGroup');
      var button=document.getElementsByClassName('bttn');
      for(i=0; i<button.length; i++){
        button[i].addEventListener("click", function(){
          var currentBtn=document.getElementsByClassName('active');
          currentBtn[0].className=currentBtn[0].className.replace("active","");
          this.className+=" active";
        });
      };

          // init isotope
    var $listing = $('.box-listing').isotope({
        itemSelector: '.box-item',
        layoutMode: 'fitRows',
        
    });
      // bind filter button click
        $("#filter").on("click", "button", function() {
            var filterValue = $(this).attr('data-filter');
            $listing.isotope({ filter: filterValue });
        });
    </script>
  
  </body>
</html>