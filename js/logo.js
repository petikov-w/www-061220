
document.querySelector('.logo-box').addEventListener('click', handler_logo_onclick, false);

function handler_logo_onclick () {
    if (home.classList.contains('hidden')) {
      add_class(document.querySelector('.view-list'), 'hidden');
      rem_class(document.querySelector('#home'), 'hidden');
    }
}