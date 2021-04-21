var modal = document.getElementById('aModal');
var emodal = document.getElementById('eModal');
var modalBtn = document.getElementById('aModalBtn');
var emodalBtn = document.getElementById('eModalBtn');
var closeBtn = document.getElementsByClassName('aCloseBtn')[0];
var ecloseBtn = document.getElementsByClassName('eCloseBtn')[0];

modalBtn.addEventListener('click', openModal);
emodalBtn.addEventListener('click', eopenModal);

closeBtn.addEventListener('click', closeModal);
ecloseBtn.addEventListener('click', ecloseModal);

window.addEventListener('click', clickOutside);

function openModal(){
    modal.style.display = 'block';
}
function eopenModal(){
    emodal.style.display = 'block';
}

function closeModal(){
  modal.style.display = 'none';
}
function ecloseModal(){
    emodal.style.display = 'none';
  }

function clickOutside(e){
    if(e.target == modal)
    modal.style.display = 'none';
    if(e.target == emodal)
    emodal.style.display = 'none';
  }


console.log('check');
