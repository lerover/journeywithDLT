// UI
const slides = document.getElementsByClassName("carousel-item");
const dots = document.querySelectorAll(".dot");
// console.log(slides);  // HTMLCollection(3)
// console.log(dots); // NodeList(3)

let currslide = 1; //  1 2 3

document.getElementById("prev").addEventListener("click", function () {
  // console.log("i am prev");

  // console.log((currslide -= 1));
  // console.log(currslide--);
  carousel((currslide -= 1));
});

document.getElementById("next").addEventListener("click", function () {
  // console.log("i am next");

  // console.log((currslide += 1));
  // console.log(currslide++);
  carousel((currslide += 1));
});

carousel(currslide);

function carousel(slidenum) {
  let x, y;

  // hide all slides
  for (x = 0; x < slides.length; x++) {
    slides[x].style.display = "none";
  }

  // hide all dots
  for (y = 0; y < slides.length; y++) {
    // dots[y].className = "dot";

    //  replace("active", "")
    // dots[y].className = dots[y].className.replace("active", "");

    dots[y].classList.remove("active");
  }

  // 1 > 3
  if (slidenum > slides.length) {
    currslide = 1;
  } else if (slidenum < 1) {
    currslide = slides.length;
  }

  // currslide 1 2 3 or 3 2 1
  console.log(currslide);

  slides[currslide - 1].style.display = "block";

  // dots[currslide - 1].className = "dot active";
  // dots[currslide - 1].className += " active";
  dots[currslide - 1].classList.add("active");
}

// slides      0              1                2
// currslide   1-1=0          2-1=1           3-1=2
// dots        0              1                 2

for (let q = 0; q < dots.length; q++) {
  dots[q].addEventListener("click", function () {
    currslide = this.getAttribute("data-bs-slide-top");
    // console.log(currslide);

    carousel(currslide);
  });
}