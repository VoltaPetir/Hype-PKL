const semuaArtikel = [
    {
        img: "/image/iseo.jpg",
        text: "Artikel 1: Lorem ipsum dolor sit amet consectetur adipisicing elit...",
        width: "35vw",
        height: "35vh",
    },
    {
        img: "/image/iseo.jpg",
        text: "Artikel 2: Lorem ipsum dolor sit amet consectetur adipisicing elit...",
        width: "35vw",
        height: "35vh",
    },
    {
        img: "/image/iseo.jpg",
        text: "Artikel 3: Lorem ipsum dolor sit amet consectetur adipisicing elit...",
        width: "35vw",
        height: "35vh",
    },
    {
        img: "/image/gaeul-ive.jpg",
        text: "Artikel 4: Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum cum modi, ipsum quasi officiis fuga quas exercitationem asperiores fugit",
        width: "35vw",
        height: "35vh",
    },
    {
        img: "/image/gaeul-ive.jpg",
        text: "Artikel 5: Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum cum modi, ipsum quasi officiis fuga quas exercitationem asperiores fugit",
        width: "35vw",
        height: "35vh",
    },
    {
        img: "/image/gaeul-ive.jpg",
        text: "Artikel 6: Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum cum modi, ipsum quasi officiis fuga quas exercitationem asperiores fugit",
        width: "35vw",
        height: "35vh",
    },
    {
      img: "/image/wonyoung.webp",
      text: "Artikel 1: Lorem ipsum dolor sit amet consectetur adipisicing elit...",
      width: "35vw",
      height: "35vh",
  },
  {
      img: "/image/wonyoung.webp",
      text: "Artikel 2: Lorem ipsum dolor sit amet consectetur adipisicing elit...",
      width: "35vw",
      height: "35vh",
  },
  {
      img: "/image/wonyoung.webp",
      text: "Artikel 3: Lorem ipsum dolor sit amet consectetur adipisicing elit...",
      width: "35vw",
      height: "35vh",
  },
  {
      img: "/image/liz.jpg",
      text: "Artikel 4: Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum cum modi, ipsum quasi officiis fuga quas exercitationem asperiores fugit",
      width: "35vw",
      height: "45vh",
  },
  {
      img: "/image/liz.jpg",
      text: "Artikel 5: Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum cum modi, ipsum quasi officiis fuga quas exercitationem asperiores fugit",
      width: "35vw",
      height: "45vh",
  },
  {
      img: "/image/liz.jpg",
      text: "Artikel 6: Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum cum modi, ipsum quasi officiis fuga quas exercitationem asperiores fugit",
      width: "35vw",
      height: "45vh",
  },
];

const perPage = 3;
let currentPage = 1;

function renderArtikel(page) {
    const start = (page - 1) * perPage;
    const end = start + perPage;
    const halamanArtikel = semuaArtikel.slice(start, end);

    const container = document.getElementById("artikel-wrapper");
    container.innerHTML = "";

    halamanArtikel.forEach((item) => {
        container.innerHTML += `
        <article class="card">
          <img src="${item.img}" alt="" style="width: ${item.width}; height: ${item.height}; border-radius: 8px;">
          <div class="content">
            <p>${item.text}</p>
            <a href="#">Baca Selengkapnya →</a>
          </div>
        </article>
      `;
    });
}

// Jalankan saat awal load
renderArtikel(currentPage);

// Pagination click handler
document.querySelectorAll(".pag-a").forEach((el, index) => {
  el.addEventListener("click", function (e) {
      e.preventDefault();

      const totalButtons = document.querySelectorAll(".pag-a").length;
      const maxPage = Math.ceil(semuaArtikel.length / perPage);

      if (index === 0) {
          // Tombol «
          if (currentPage > 1) currentPage--;
      } else if (index === totalButtons - 1) {
          // Tombol »
          if (currentPage < maxPage) currentPage++;
      } else {
          currentPage = parseInt(el.textContent);
      }

      renderArtikel(currentPage);

      // 🔥 Reset semua tombol
      document.querySelectorAll(".pag-a").forEach((btn) =>
          btn.classList.remove("active")
      );

      // 🔥 Tambahkan class active ke tombol yang sesuai
      // Karena tombol « ada di index 0, jadi tombol pertama angka dimulai di index 1
      if (currentPage >= 1 && currentPage <= maxPage) {
          document.querySelectorAll(".pag-a")[currentPage].classList.add("active");
      }
  });
});

