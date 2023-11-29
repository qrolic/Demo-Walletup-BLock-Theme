
    document.addEventListener( 'DOMContentLoaded', function() {
        var splide = new Splide( '.splide' );
        splide.mount();
      } );
      

      // sidebar mate close karva mate no code 
      document.addEventListener('DOMContentLoaded', function () {
        var closeButton = document.querySelector('.wp-block-navigation__responsive-container-close');
        var isCloseButtonClicked = false;
      
        if (closeButton) {
          closeButton.addEventListener('click', function () {
            // Set the flag to indicate that the close button was clicked
            isCloseButtonClicked = true;
      
            // Perform any actions you need when the close button is clicked
            // For example, hide a modal or perform other custom actions.
            // ...
      
            // Log a message to indicate that the close button was clicked
            console.log('Close button clicked!');
      
            // Allow the site to close by removing the event listener
            window.removeEventListener('beforeunload', preventSiteClosure);
          });
        }
      
        function preventSiteClosure(event) {
          // Check if the close button was clicked
          if (!isCloseButtonClicked) {
            // This message may not be displayed in modern browsers
            return 'Are you sure you want to leave?';
          }
        }
      
        // Attach the event listener to prevent site closure
        window.addEventListener('beforeunload', preventSiteClosure);
        
        // Example additional code that will only run if the close button is not clicked
        // Replace this with your actual additional code
        // ...
        function additionalCode() {
          if (!isCloseButtonClicked) {
            // Your additional JavaScript code here
            console.log('Additional code running...');
          }
        }
      
        // Call the additional code function
        additionalCode();
      });
      
      