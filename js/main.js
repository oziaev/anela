$(function () {

  // --------------------------------
  // ヘッダー
  // --------------------------------
  const header = document.querySelector("header");
  const toggle = document.querySelector(".toggle");
  const mask = document.querySelector(".mask");

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
  
});