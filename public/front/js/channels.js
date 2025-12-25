(function(){
  "use strict";
  const tabs = Array.from(document.querySelectorAll(".tab"));
  const cards = Array.from(document.querySelectorAll("[data-cat]"));
  if(tabs.length === 0 || cards.length === 0) return;

  function setActive(cat){
    tabs.forEach(t => t.classList.toggle("is-active", t.dataset.filter === cat));
    cards.forEach(c => {
      const ccat = c.dataset.cat;
      c.style.display = (cat === "all" || ccat === cat) ? "" : "none";
    });
  }
  tabs.forEach(t => t.addEventListener("click", ()=> setActive(t.dataset.filter)));
  setActive("all");
})();