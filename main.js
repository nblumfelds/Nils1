let decreaseBtn = document.getElementById("decrement");
let increaseBtn = document.getElementById("increment");
let counter = document.getElementById("number");
let count = 0;

decreaseBtn.addEventListener("click", () => {
  count--;
  counter.innerHTML = count;
  counterStyle();
});

increaseBtn.addEventListener("click", () => {
  count++;
  counter.innerHTML = count;
  counterStyle();
});

function counterStyle() {
  if (count < 0) {
    counter.classList.add("negative");
  } else if (count > 0) {
    counter.classList.add("positive");
  } else {
    counter.classList.remove("negative");
    counter.classList.remove("positive");
  }
}

function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}