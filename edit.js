var modal = document.getElementById('updateModal');
var emodalBtn = document.getElementById('uupdate');
var ecloseBtn = document.getElementsByClassName('ecloseBtn')[0];

emodalBtn.addEventListener('click', eopenModal);

ecloseBtn.addEventListener('click', ecloseModal);

window.addEventListener('click', eclickOutside);

function eopenModal(){
    modal.style.display = 'block';
}

function ecloseModal(){
  modal.style.display = 'none';
}

function eclickOutside(e){
    if(e.target == modal)
    modal.style.display = 'none';
  }
