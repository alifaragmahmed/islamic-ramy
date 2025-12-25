(function(){
  "use strict";
  const mount = document.getElementById("siteFooter");
  if(!mount) return;

  mount.innerHTML = `
    <footer class="footer">
      <div class="container">
        <div class="footer-grid">
          <div>
            <h4>أكاديمية أنوار القرآن</h4>
            <div class="small">
              أكاديمية تهدف لإتقان القرآن وتهذيب السلوك، عبر برامج تعليمية تربوية تُنمّي الإيمان
              وتبني شخصية قرآنية راقية.
            </div>
          </div>

          <div>
            <h4>روابط سريعة</h4>
            <div class="small">
              <div><a href="index.html">الرئيسية</a></div>
              <div><a href="channels.html">الحلقات</a></div>
              <div><a href="tests.html">الاختبارات</a></div>
              <div><a href="about.html">عن الأكاديمية</a></div>
            </div>
          </div>

          <div>
            <h4>التواصل</h4>
            <div class="small">
              <div>📍 مصر</div>
              <div>💬 <a href="https://wa.me/201019028034" target="_blank" rel="noopener">واتساب: +20 10 19028034</a></div>
              <div>📘 <a href="https://www.facebook.com/ramy.ragab.35110" target="_blank" rel="noopener">Facebook</a></div>
              <div>▶ <a href="https://www.youtube.com/" target="_blank" rel="noopener">YouTube</a></div>
            </div>
          </div>
        </div>

        <div class="small" style="margin-top:14px; opacity:.85;">
          © <span id="y"></span> جميع الحقوق محفوظة — أكاديمية أنوار القرآن
        </div>
      </div>
    </footer>

    <a class="whatsapp-float" href="https://wa.me/201019028034" target="_blank" rel="noopener">
      <span class="dot" aria-hidden="true"></span>
      واتساب الأكاديمية
    </a>
  `;

  const y = document.getElementById("y");
  if(y) y.textContent = new Date().getFullYear();
})();