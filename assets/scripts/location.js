'use strict';

((window) =>{
  console.log(window.location.pathname)
})(window);


function register (target) {
  let id = target.getAttribute('data-t-id')

  window.location.href = `registerIn.php?id=${id}`
}
