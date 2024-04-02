/* 

Navigation Window Scroll Code - 

*/

// Scroll position variable to store the current scroll position, this variable will continuosly update as the user scrolls.
let scrollPosition;
let headerNav = document.getElementById('header-nav');
window.addEventListener('scroll', function () {
  // Get the current scroll position of the window.
  let scrollTop = window.screenY || document.documentElement.scrollTop;
  // Conditional statements to check the scroll position. IF the scroll position is greater than the previous scroll position, hide the header, ELSE show the header.
  if (scrollTop > scrollPosition) {
    headerNav.style.cssText = 'top: -400px;';
  }
  else {
    headerNav.style.cssText = 'top: 0; background-color: rgba(247, 243, 241, 0.8); backdrop-filter: blur(6px);';
  }
  // IF the scroll position is less than 80, then show the header.
  if (scrollTop < 80) {
    headerNav.style.cssText = 'top: 0; background-color: transparent;';
  }
  if (window.innerWidth < 1200) {
    headerNav.style.cssText = 'top: 0; background-color: transparent;';
  }
  // Update the new scroll position to adjust the styles based on the conditional statements.
  scrollPosition = scrollTop;
});