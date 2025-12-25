(function(){
  "use strict";
  const EP_ID = document.body.getAttribute("data-episode-id") || "ep-1";
  const $ = (s, r=document) => r.querySelector(s);

  // Rating
  const stars = Array.from(document.querySelectorAll(".star"));
  const ratingOut = $("#ratingOut");
  const ratingKey = `anwar_rating_${EP_ID}`;
  let current = parseInt(localStorage.getItem(ratingKey) || "0", 10);

  function renderStars(v){
    stars.forEach((b, i)=> b.classList.toggle("is-on", i < v));
    if(ratingOut) ratingOut.textContent = v ? `${v} / 5` : "بدون تقييم بعد";
  }
  renderStars(current);

  stars.forEach((b, i)=>{
    b.addEventListener("click", ()=>{
      current = i+1;
      localStorage.setItem(ratingKey, String(current));
      renderStars(current);
    });
  });

  // Share
  const shareBtn = $("#shareBtn");
  if(shareBtn){
    shareBtn.addEventListener("click", async ()=>{
      const url = location.href;
      const title = document.title;
      try{
        if(navigator.share){
          await navigator.share({title, url});
        }else{
          await navigator.clipboard.writeText(url);
          shareBtn.textContent = "تم نسخ الرابط ✅";
          setTimeout(()=> shareBtn.textContent="مشاركة الحلقة", 1600);
        }
      }catch(e){}
    });
  }

  // WhatsApp contact to subscribe
  const contactBtn = $("#contactSheikhBtn");
  if(contactBtn){
    contactBtn.addEventListener("click", ()=>{
      const wa = "201019028034";
      const epTitle = ($("#epTitle")?.textContent || "حلقة").trim();
      const msg = encodeURIComponent(`السلام عليكم\nأريد الاشتراك في أكاديمية أنوار القرآن.\nالحلقة: ${epTitle}\nالاسم: \n`);
      window.open(`https://wa.me/${wa}?text=${msg}`, "_blank", "noopener");
    });
  }

  // Comments (demo localStorage)
  const list = $("#commentList");
  const form = $("#commentForm");
  const nameIn = $("#cName");
  const textIn = $("#cText");
  const key = `anwar_comments_${EP_ID}`;

  function load(){
    try{ return JSON.parse(localStorage.getItem(key) || "[]"); }
    catch(e){ return []; }
  }
  function save(arr){ localStorage.setItem(key, JSON.stringify(arr)); }

  function escapeHtml(s){
    return String(s).replace(/[&<>"']/g, m=>({ "&":"&amp;","<":"&lt;",">":"&gt;",'"':"&quot;","'":"&#39;" }[m]));
  }

  function render(){
    const arr = load();
    if(!list) return;
    list.innerHTML = "";
    if(arr.length === 0){
      const div = document.createElement("div");
      div.className = "small";
      div.style.color = "var(--muted)";
      div.textContent = "لا توجد تعليقات بعد — كن أول من يشارك رأيه.";
      list.appendChild(div);
      return;
    }
    arr.slice().reverse().forEach(item=>{
      const c = document.createElement("div");
      c.className = "comment";
      c.innerHTML = `<b>${escapeHtml(item.name)}</b><p>${escapeHtml(item.text)}</p>`;
      list.appendChild(c);
    });
  }
  render();

  if(form){
    form.addEventListener("submit", (e)=>{
      e.preventDefault();
      const n = (nameIn?.value || "").trim() || "مشترك";
      const t = (textIn?.value || "").trim();
      if(!t) return;
      const arr = load();
      arr.push({name:n, text:t, ts: Date.now()});
      save(arr);
      if(textIn) textIn.value = "";
      render();
    });
  }
})();