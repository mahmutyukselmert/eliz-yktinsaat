import * as bootstrap from "bootstrap";
window.bootstrap = bootstrap;

import ScrollReveal from "scrollreveal";

const header = document.querySelector("#header");

function handleBodyScroll() {
  const scrollY = document.documentElement.scrollTop;

  if (header) {
    if (scrollY > 50) {
      header.classList.add("header-scrolled");
    } else {
      header.classList.remove("header-scrolled");
    }
  }
}

// 2. Düzeltme: Scroll olay dinleyiciyi 'document.body' yerine 'window'a ekleyin.
window.addEventListener("scroll", handleBodyScroll);

// Sayfa yüklendiğinde bir kez çalıştırılması doğrudur.
window.addEventListener("load", () => {
  handleBodyScroll();
});

document.addEventListener("DOMContentLoaded", () => {
  // ScrollReveal instance
  const sr = ScrollReveal({
    duration: 1000,
    origin: "bottom",
    distance: "50px",
    easing: "ease-in-out",
    reset: true,
    container: document.querySelector("main"),
  });

  // Reveal öğeleri
  sr.reveal(".scroll-reveal-bottom", {
    origin: "bottom",
    distance: "100px",
  });
  sr.reveal(".scroll-reveal-left", {
    origin: "left",
  });
  sr.reveal(".scroll-reveal-left-step-1", {
    origin: "left",
    distance: "100px",
  });
  sr.reveal(".scroll-reveal-left-step-2", {
    origin: "left",
    distance: "150px",
  });
  sr.reveal(".scroll-reveal-right", {
    origin: "right",
  });
  sr.reveal(".scroll-reveal-top", {
    origin: "top",
  });
  sr.reveal(".scroll-reveal-scale", {
    scale: 0.3,
    duration: 1200,
  });
  sr.reveal(".scroll-reveal-scale-end", {
    scale: 1.3,
    duration: 1200,
  });
  sr.reveal(".scroll-reveal-fade", {
    opacity: 0,
    distance: "30px",
  });
});

//Custom Dropdown
document.addEventListener("DOMContentLoaded", function () {
  const dropdowns = document.querySelectorAll(".custom-dropdown-menu");

  dropdowns.forEach(function (dropdown) {
    const toggle = dropdown.querySelector(".dropdown-toggle");
    const menu = dropdown.querySelector(".dropdown-menu");

    let clickedOnce = false;

    dropdown.addEventListener("mouseenter", () => {
      if (window.innerWidth >= 1200) {
        toggle.classList.add("show");
        menu.classList.add("show");
      }
    });

    dropdown.addEventListener("mouseleave", () => {
      if (window.innerWidth >= 1200) {
        toggle.classList.remove("show");
        menu.classList.remove("show");
      }
    });

    toggle.addEventListener("click", function (e) {
      e.preventDefault();
      if (window.innerWidth >= 1200) {
        return (window.location.href = toggle.getAttribute("href"));
      } else {
        if (!clickedOnce) {
          toggle.classList.add("show");
          menu.classList.add("show");
          clickedOnce = true;
        } else {
          window.location.href = toggle.getAttribute("href");
        }
      }
    });
  });

  // Alt menü (dropdown-submenu) için yeni kod
  const subDropdowns = document.querySelectorAll(".dropdown-submenu");

  subDropdowns.forEach(function (subDropdown) {
    const subToggle = subDropdown.querySelector(".dropdown-toggle");
    const subMenu = subDropdown.querySelector(".dropdown-menu");

    // Masaüstü ekranlarda hover ile açılmasını sağlar
    if (window.innerWidth >= 1200) {
      subDropdown.addEventListener("mouseenter", () => {
        subToggle.classList.add("show");
        subMenu.classList.add("show");
      });

      subDropdown.addEventListener("mouseleave", () => {
        subToggle.classList.remove("show");
        subMenu.classList.remove("show");
      });
    }

    // Mobil cihazlarda tıklama ile açılmasını sağlar
    subToggle.addEventListener("click", function (e) {
      if (window.innerWidth < 1200) {
        e.preventDefault(); // Linke gitmeyi engelle
        subToggle.classList.toggle("show");
        subMenu.classList.toggle("show");
      }
    });
  });
});

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("visible");
      observer.unobserve(entry.target);
    }
  });
});

// Gözlemlemek istediğin tüm elementleri seç:
const observerImageBox = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("visible");
      observerImageBox.unobserve(entry.target);
    }
  });
});
document
  .querySelectorAll(".image-box")
  .forEach((el) => observerImageBox.observe(el));

/* CountUp.js */
import {
  CountUp
} from "countup.js";
document.querySelectorAll(".countup").forEach((el) => {
  const value = parseInt(el.dataset.value);
  if (!isNaN(value)) {
    const observer = new IntersectionObserver(
      (entries, obs) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const counter = new CountUp(el, value);
            if (!counter.error) {
              counter.start();
              obs.unobserve(el);
            } else {
              console.error(counter.error);
            }
          }
        });
      }, {
        threshold: 0.6
      }
    );

    observer.observe(el);
  }
});
/* CountUp.js - End */

import Swiper from 'swiper/bundle';
/* Swiper.js ile Slayt Gösterisi */
document.addEventListener("DOMContentLoaded", function () {
  // Swiper'ı başlatmadan önce gerekli HTML elemanının varlığını kontrol edin
  const swiperElement2 = document.querySelector(".projectSliderSwiper");
  if (!swiperElement2) {
    return;
  }

  // Swiper kütüphanesini başlatıyoruz
  const swiper2 = new Swiper(swiperElement2, {
    // İlgili yapılandırma seçenekleri
    slidesPerView: 4,
    spaceBetween: 30,
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: true,
    },
    speed: 800, // Geçiş hızı 800ms
    navigation: {
      nextEl: ".next-btn",
      prevEl: ".prev-btn",
    },

    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 40,
      },
      1440: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
    },
  });

  // Otomatik oynatmayı durdurma ve tekrar başlatma
  const sliderContainer2 = document.querySelector(".project-slider-container");
  if (sliderContainer2) {
    sliderContainer2.addEventListener("mouseenter", () => {
      swiper2.autoplay.stop();
    });
    sliderContainer2.addEventListener("mouseleave", () => {
      swiper2.autoplay.start();
    });
  }

  const swiper = new Swiper('.produtCarouselSlider', {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    speed: 500,
    effect: 'slide',
    navigation: {
      nextEl: '.carousel-control-next',
      prevEl: '.carousel-control-prev',
    },
    breakpoints: {
      320: {
        slidesPerView: 1
      },
      768: {
        slidesPerView: 1
      }
    }
  });
});

// İki modalı da bir dizi (array) içinde tanımlıyoruz
var videoModals = [
  document.getElementById('videoModal'),
  document.getElementById('videoModalHome')
];

// Her bir modal için döngü başlat
videoModals.forEach(function (modal) {
  // Eğer modal elementi sayfada varsa (null kontrolü) devam et
  if (modal) {
    var iframe = modal.querySelector('iframe');

    // iframe elementinin ve data-src'nin varlığını kontrol et
    if (iframe && iframe.hasAttribute('data-src')) {
      var originalSrc = iframe.getAttribute('data-src');

      // 1. Modal AÇILIRKEN (shown.bs.modal): Videoyu yükle
      // Bu, videoyu her açılışta sıfırlar ve oynatmaya hazır hale getirir.
      modal.addEventListener('shown.bs.modal', function () {
        iframe.src = originalSrc;
      });

      // 2. Modal KAPANIRKEN (hidden.bs.modal): Videoyu durdur ve sıfırla
      modal.addEventListener('hidden.bs.modal', function () {
        // src'yi boşaltmak, videoyu anında durdurur ve başa alır.
        iframe.src = "";
      });
    } else {
      // Konsola uyarı basılabilir, eğer iframe veya data-src eksikse
      console.warn('Uyarı: ' + modal.id + ' modalında iframe veya data-src özelliği bulunamadı.');
    }
  }
});

/* HomePage Projects */
document.addEventListener("DOMContentLoaded", function () {
  const carouselTrack = document.getElementById("carouselTrack");
  const items = document.querySelectorAll(".custom-carousel-item");
  
  // BUTON SEÇİMLERİNDE ÇOĞUL İSİM KULLANILDI VE QUERYSELECTORALL İLE LİSTE SEÇİLDİ
  const prevBtns = document.querySelectorAll(".prevBtn"); 
  const nextBtns = document.querySelectorAll(".nextBtn"); 
  
  let currentIndex = 1; // Aktif (ortadaki) kartın indeksi

  if (carouselTrack && items.length > 0) { 

      // Carousel'i başlangıç pozisyonuna ayarla (Bu fonksiyon aynı kalıyor)
      function updateCarouselPosition() {
          const viewportWidth = document.querySelector(".custom-carousel-viewport") ? document.querySelector(".custom-carousel-viewport").offsetWidth : window.innerWidth;
          let offset = 0;

          // Genişlik hesaplama kısmı aynı kalıyor
          let itemWidths = Array.from(items).map((item, index) => {
              if (index === currentIndex) {
                  // Aktif kartın genişliği
                  if (window.innerWidth >= 992) return viewportWidth * 0.5;
                  else if (window.innerWidth >= 768) return viewportWidth * 0.7;
                  else return viewportWidth * 1;
              } else {
                  // Pasif kartların genişliği
                  if (window.innerWidth >= 992) return viewportWidth * 0.3333;
                  else if (window.innerWidth >= 768) return viewportWidth * 0.5;
                  else return viewportWidth * 1;
              }
          });

          // Solundaki kartların toplam genişliğini hesapla
          for (let i = 0; i < currentIndex; i++) {
              offset += itemWidths[i];
          }

          // Aktif kartın kendi genişliği
          const activeItemActualWidth = itemWidths[currentIndex];

          // Aktif kartı ortalamak için ek kaydırma
          const centerOffset = viewportWidth / 2 - activeItemActualWidth / 2;

          // Toplam kaydırma miktarı
          const totalTranslateX = -(offset - centerOffset);

          carouselTrack.style.transform = `translateX(${totalTranslateX}px)`;

          // Aktif sınıfı güncelle
          items.forEach((item, index) => {
              item.classList.remove("active-center");
              if (index === currentIndex) {
                  item.classList.add("active-center");
              }
          });
      }

      // Sonraki karta geç
      function nextSlide() {
          currentIndex = (currentIndex + 1) % items.length;
          updateCarouselPosition();
      }

      // Önceki karta geç
      function prevSlide() {
          currentIndex = (currentIndex - 1 + items.length) % items.length;
          updateCarouselPosition();
      }

      /* Hata alınan kısım Düzeltildi:
      querySelectorAll bir NodeList (dizi benzeri yapı) döndürdüğü için, 
      doğrudan addEventListener uygulanamaz. Bu yüzden her bir butonu döngü ile 
      tek tek seçip olay dinleyicisi eklemeliyiz.
      Butonlar yoksa (NodeList.length === 0), döngü çalışmaz ve hata alınmaz.
      */
      
      // Önceki butonlara tıklama olaylarını ekle
      prevBtns.forEach(button => {
          button.addEventListener("click", prevSlide);
      });
      
      // Sonraki butonlara tıklama olaylarını ekle
      nextBtns.forEach(button => {
          button.addEventListener("click", nextSlide);
      });


      // Pencere boyutu değiştiğinde carousel'i yeniden konumlandır
      window.addEventListener("resize", updateCarouselPosition);

      // Sayfa yüklendiğinde ve ilk kez carousel'i ayarla
      updateCarouselPosition();
  }
});

//Faaliyet Alanları
//Sayfaya özel script ekliyorum bunu back-end de tüm sayfalarda yüklenmemesi gerekiyor!
const container = document.querySelector(".hover-accordion");
const heroImg = document.querySelector("#our-area-slider img");
const originalSrc = heroImg ? heroImg.src : "";
let timer;

// *** BURADA KONTROL YAPIYORUZ ***
if (container) {
  // container mevcutsa, içindeki card'ları sorgulayıp işlemleri başlatabiliriz
  container.querySelectorAll(".card").forEach(card => {
    let showTextTimeout;
    card.addEventListener("mouseenter", () => {
      timer = setTimeout(() => {

        const cardActive = container.querySelector(".card.active");
        // Kart aktif yapılır
        card.classList.add("active");
        container.querySelectorAll(".card").forEach(c => {
          if (c !== card) c.classList.add("shrink");
        });

        const text = card.querySelector(".card-text");
        if (text) {
          clearTimeout(showTextTimeout);
          text.classList.remove("d-none");
          text.classList.remove("active");

          showTextTimeout = setTimeout(() => {
            text.classList.add("active");
          }, 500); // gecikme burada
        }
      }, 200); // 
    });

    card.addEventListener("mouseleave", () => {
      clearTimeout(timer);

      const text = card.querySelector(".card-text");
      if (text) {
        text.classList.remove("active");

        setTimeout(() => {
          text.classList.add("d-none");
        }, 200); // .card-text'in fade-out süresinden biraz sonra
      }

      card.classList.remove("active");

      container.querySelectorAll(".card").forEach(c => c.classList.remove("shrink"));

      // Tüm stats-item'ları tekrar gösterdim
      document.querySelectorAll(".stats-item").forEach(item => {
        item.classList.remove("d-none");
      });

      //Varsayılan görsel geri yüklüyorum back-end'de buraya dokunmanıza gerek yok html'den yürütülür
      if (heroImg && originalSrc) {
        heroImg.src = originalSrc;
      }
    });
  });
}
// *** KONTROL BİTİŞİ ***

// İki modalı da bir dizi (array) içinde tanımlıyoruz
var videoModals = [
  document.getElementById('videoModal'),
  document.getElementById('videoModalHome')
];

// Her bir modal için döngü başlat
videoModals.forEach(function (modal) {
  // Eğer modal elementi sayfada varsa (null kontrolü) devam et
  if (modal) {
    var iframe = modal.querySelector('iframe');

    // iframe elementinin ve data-src'nin varlığını kontrol et
    if (iframe && iframe.hasAttribute('data-src')) {
      var originalSrc = iframe.getAttribute('data-src');

      // 1. Modal AÇILIRKEN (shown.bs.modal): Videoyu yükle
      // Bu, videoyu her açılışta sıfırlar ve oynatmaya hazır hale getirir.
      modal.addEventListener('shown.bs.modal', function () {
        iframe.src = originalSrc;
      });

      // 2. Modal KAPANIRKEN (hidden.bs.modal): Videoyu durdur ve sıfırla
      modal.addEventListener('hidden.bs.modal', function () {
        // src'yi boşaltmak, videoyu anında durdurur ve başa alır.
        iframe.src = "";
      });
    } else {
      // Konsola uyarı basılabilir, eğer iframe veya data-src eksikse
      console.warn('Uyarı: ' + modal.id + ' modalında iframe veya data-src özelliği bulunamadı.');
    }
  }
});

/*Modal slider js - Buton Varlığı Kontrol Edildi*/
document.addEventListener("DOMContentLoaded", function () {
  let modalElement = document.getElementById("imageModal");
  let imagesData = [];
  let currentIndex = 0;

  // Tüm grid-card-item elementlerinden resim verilerini topla
  document.querySelectorAll(".grid-card-item").forEach((item) => {
    imagesData.push({
      src: item.getAttribute("data-image-src"),
      title: item.getAttribute("data-image-title")
    });
  });

  // Modal içeriğini (resim ve başlık) güncelleyen fonksiyon
  let updateModalContent = (index) => {
    let imageInfo = imagesData[index];
    let modalImage = modalElement.querySelector("#modalImage");
    let modalTitle = modalElement.querySelector("#imageModalLabel");

    if (modalImage) {
      modalImage.src = imageInfo.src;
      modalImage.alt = imageInfo.title;
    }
    if (modalTitle) {
      modalTitle.textContent = imageInfo.title;
    }
  };

  // 1. Modal Açıldığında (Bootstrap event'i)
  if (modalElement) {
    modalElement.addEventListener("show.bs.modal", function (event) {
      let relatedTarget = event.relatedTarget;
      let imageSrc = relatedTarget.getAttribute("data-image-src");
      
      // Tıklanan resmin index'ini bul
      currentIndex = imagesData.findIndex(item => item.src === imageSrc);
      
      // Modalı ilgili resimle güncelle
      updateModalContent(currentIndex);
    });
  }

  // 2. İleri (Next) Butonu
  let nextButton = document.getElementById("modal-next-btn");
  if (nextButton) { // Buton varsa event listener ekle
    nextButton.addEventListener("click", function () {
      // Bir sonraki index'i bul (döngüsel)
      currentIndex = (currentIndex + 1) % imagesData.length;
      updateModalContent(currentIndex);
    });
  }

  // 3. Geri (Previous) Butonu
  let prevButton = document.getElementById("modal-prev-btn");
  if (prevButton) { // Buton varsa event listener ekle
    prevButton.addEventListener("click", function () {
      // Bir önceki index'i bul (döngüsel)
      // (currentIndex - 1 + imagesData.length) % imagesData.length, negatif indexleri önler
      currentIndex = (currentIndex - 1 + imagesData.length) % imagesData.length;
      updateModalContent(currentIndex);
    });
  }
});