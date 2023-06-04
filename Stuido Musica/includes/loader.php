  
<div id="page-loader">
  <div class="loaderzz" id="loaderzz">
  <div class="music-loader">
        <div class="line line1"></div>
        <div class="line line2"></div>
        <div class="line line3"></div>
      </div>
  </div>
  
  </div>

  <script>
  
  // Loader
  
  
  
  window.addEventListener('load', function() {
    // Get the loader element
    var loader = document.getElementById('page-loader');
  
    // Set initial opacity to 1
    loader.style.opacity = '1';
  
    // Hide the page loader after a delay to allow animation to complete
    setTimeout(function() {
      // Set opacity to 0 over 1 second with ease-out transition
      loader.style.transition = 'opacity 1s ease-out';
      loader.style.opacity = '0';
  
      // Set visibility to hidden after the transition completes
      setTimeout(function() {
        loader.style.visibility = 'hidden';
      }, 200);
    }, 300);
  });
  
  
  
  
  //Next
  </script>