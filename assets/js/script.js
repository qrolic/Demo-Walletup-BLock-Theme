
    document.addEventListener( 'DOMContentLoaded', function() {
        var splide = new Splide( '.splide' );
        splide.mount();
      } );
      

      // sidebar mate open karva mate no code 
      document.addEventListener('DOMContentLoaded', function () {

        var menuIcon = document.querySelector('.wp-block-navigation__responsive-container-open');
        
        if (menuIcon) {
          menuIcon.addEventListener('click', function () {
            // Set the flag to indicate that the open button was clicked
            console.log( 'clicked' );
            var menuContainer = document.querySelector( '.navigation-menu' );
            menuContainer.classList.add( "menu-opened" );   
          });
        }
      });
      
      