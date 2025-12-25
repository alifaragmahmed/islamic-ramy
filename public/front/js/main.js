(function(){
  "use strict";

  // 1) Mobile menu toggle (works with the exact homepage markup)
  const hamburger = document.getElementById("hamburger");
  const panel = document.getElementById("mobilePanel");
  if(hamburger && panel){
    hamburger.addEventListener("click", ()=>{
      const isOpen = panel.getAttribute("data-open") === "1";
      panel.setAttribute("data-open", isOpen ? "0" : "1");
      panel.style.display = isOpen ? "none" : "block";
      hamburger.setAttribute("aria-expanded", isOpen ? "false" : "true");
    });
  }

  // 2) Year
  const y = document.getElementById("y");
  if(y) y.textContent = String(new Date().getFullYear());

  // 3) Gentle attention on WhatsApp CTA every 5 seconds
  const btn = document.getElementById("waCta");
  if(btn){
    setInterval(()=>{
      btn.classList.remove("btn-attn");
      void btn.offsetWidth;
      btn.classList.add("btn-attn");
    }, 5000);
  }
})();