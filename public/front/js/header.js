(function(){
  "use strict";
  const mount = document.getElementById("siteHeader");
  if(!mount) return;

  const page = (location.pathname.split("/").pop() || "index.html").toLowerCase();

  const navItems = [
    {href:"index.html", label:"الرئيسية"},
    {href:"channels.html", label:"الحلقات"},
    {href:"tests.html", label:"الاختبارات"},
    {href:"about.html", label:"عن الأكاديمية"},
  ];

  const navLinks = navItems.map(i => {
    const active = i.href.toLowerCase() === page ? "is-active" : "";
    return `<a class="${active}" href="${i.href}">${i.label}</a>`;
  }).join("");

  mount.innerHTML = `
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="badge"><i>🌙</i> أكاديمية أنوار القرآن (الشيخ رامي)</div>

          <div class="top-actions">
            <div class="badge"><i>💬</i> واتساب: +20 10 19028034</div>
            <div class="social">
              <a href="https://www.facebook.com/ramy.ragab.35110" target="_blank" rel="noopener" class="social-link fb" aria-label="Facebook">f</a>
              <a href="https://www.youtube.com/" target="_blank" rel="noopener" class="social-link yt" aria-label="YouTube">▶</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <header class="header">
      <div class="container">
        <nav class="nav">
          <a class="brand" href="index.html">
            <img class="logo-img" src="assets/img/logo.png" alt="أكاديمية أنوار القرآن" />
            <div class="title">
              <strong>أكاديمية أنوار القرآن</strong>
              <span>تعليم • تلاوة • تجويد • إجازات</span>
            </div>
          </a>

          <div class="nav-links" data-nav>
            ${navLinks}
          </div>

          <div class="nav-actions">
            <a class="btn btn-ghost" href="login.html">تسجيل الدخول</a>
            <a class="btn btn-primary" href="register.html">إنشاء حساب</a>
            <button class="hamburger" id="hamburger" aria-label="القائمة" type="button">≡</button>
          </div>
        </nav>

        <div class="mobile-panel" id="mobilePanel" data-open="0">
          <div class="stack" data-nav>
            ${navLinks}
            <div class="actions">
              <a class="btn btn-ghost" href="login.html">تسجيل الدخول</a>
              <a class="btn btn-primary" href="register.html">إنشاء حساب</a>
            </div>
          </div>
        </div>
      </div>
    </header>
  `;

  const hamburger = document.getElementById("hamburger");
  const panel = document.getElementById("mobilePanel");
  if(hamburger && panel){
    hamburger.addEventListener("click", ()=>{
      const isOpen = panel.getAttribute("data-open") === "1";
      panel.setAttribute("data-open", isOpen ? "0" : "1");
      hamburger.setAttribute("aria-expanded", isOpen ? "false" : "true");
    });
  }
})();