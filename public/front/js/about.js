(function(){
  "use strict";
  const form = document.getElementById("waForm");
  if(!form) return;

  const WA_NUMBER = "201019028034";
  form.addEventListener("submit", function(e){
    e.preventDefault();
    const name = (document.getElementById("waName")?.value || "").trim();
    const phone = (document.getElementById("waPhone")?.value || "").trim();
    const msg = (document.getElementById("waMsg")?.value || "").trim();

    const lines = [
      "السلام عليكم",
      "رسالة من موقع أكاديمية أنوار القرآن",
      name ? `الاسم: ${name}` : null,
      phone ? `رقم الهاتف: ${phone}` : null,
      msg ? `الرسالة: ${msg}` : null
    ].filter(Boolean);

    const text = encodeURIComponent(lines.join("\n"));
    window.open(`https://wa.me/${WA_NUMBER}?text=${text}`, "_blank", "noopener");
  });
})();