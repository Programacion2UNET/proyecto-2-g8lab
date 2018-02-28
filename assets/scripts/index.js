'use strict';

function register (target) {
  let id = target.getAttribute('data-t-id')

  window.location.href = `registerIn.php?id=${id}`
}


((window) =>{
  console.log(window.location.pathname)
})(window);
