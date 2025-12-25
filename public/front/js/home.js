(function(){
  "use strict";
  const btn = document.getElementById("waCta");
  if(!btn) return;
  setInterval(()=>{
    btn.classList.remove("btn-attn");
    void btn.offsetWidth; // reflow
    btn.classList.add("btn-attn");
  }, 5000);
})();