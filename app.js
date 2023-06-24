const arrows = document.querySelectorAll(".arrow");
const movieLists = document.querySelectorAll(".movie-list");

arrows.forEach((arrow, i) => {
  const itemNumber = movieLists[i].querySelectorAll("img").length;
  let clickCounter = 0;
  arrow.addEventListener("click", () => {
    const ratio = Math.floor(window.innerWidth / 270);
    clickCounter++;
    if (itemNumber - (4 + clickCounter) + (4 - ratio) >= 0) {
      movieLists[i].style.transform = `translateX(${
        movieLists[i].computedStyleMap().get("transform")[0].x.value - 270
      }px)`;
    } else {
      movieLists[i].style.transform = "translateX(0)";
      clickCounter = 0;
    }
  });

  console.log(movieLists[i].querySelectorAll("img").length);
});

//TOGGLE

const ball = document.querySelector(".toggle-ball");
const items = document.querySelectorAll(
  ".container,.featured-desc,a:link,a:visited,.movie-list-title,.navbar-container,.sidebar,.left-menu-icon,.Search,.icon,.toggle"
);

ball.addEventListener("click", () => {
  items.forEach((item) => {
    item.classList.toggle("active");
  });
  ball.classList.toggle("active");
});

// const icon = document.querySelector(".icon");
// const search = document.querySelectorAll(".Search,icon");
// icon.onclick = function(){
//   search.classList.toggle("active1")
// };

const icon = document.querySelector(".icon");
const search = document.querySelectorAll(".Search");
icon.addEventListener("click", () => {
  search.forEach((search) => {
  search.classList.toggle("active1");
  });
  icon.classList.toggle("active1");
});