$(function () {

  // --------------------------------
  // ヘッダー
  // --------------------------------
  const header = document.querySelector("header");
  const toggle = document.querySelector(".toggle");

  toggle.addEventListener("click", (e) => {
    e.stopPropagation();
    header.classList.toggle("active");
    document.body.classList.toggle("no-scroll");
  });

  const closeMenu = () => {
    header.classList.remove("active");
    document.body.classList.remove("no-scroll");
  };

  document.addEventListener("click", () => {
    if (header.classList.contains("active")) {
      closeMenu();
    }
  });

  // --------------------------------
  // スムーススクロール
  // --------------------------------
  $('a[href^="#"]').click(function () {
    closeMenu();
    
    let href = $(this).attr("href");
    let target = $(href === "#" || href === "" ? "html" : href);
    
    if (!target.length) return false;
    
    let position = target.offset().top;
    
    $("html,body").animate(
      { scrollTop: position },
      600,
      "swing"
    );
    
    return false;
  });
  // --------------------------------
  // ファーストビュー
  // アネラ英文字
  // --------------------------------
  const text = document.querySelector(".fv-name-en");
  const chars = text.textContent.split("");

  text.textContent = "";

  chars.forEach((char, index) => {
    const span = document.createElement("span");
    span.textContent = char;
    span.style.animationDelay = `${index * 0.3}s`;
    text.appendChild(span);
  });
  // --------------------------------
  // アネラ画像
  // --------------------------------
  window.addEventListener("load", () => {
    const fvImg = document.querySelector(".fv-2");
    if (fvImg) {
      fvImg.classList.add("is-show");
    }
  });
  // --------------------------------
  
});