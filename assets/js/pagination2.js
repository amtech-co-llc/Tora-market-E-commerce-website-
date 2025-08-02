const cardsPerPage = 4;
const cards = document.querySelectorAll(".card1");
const paginationContainer = document.getElementById("pagination");
const cardContainer = document.getElementById("card-container");
let currentPage = 1;

function showPage(page) {
  const totalPages = Math.ceil(cards.length / cardsPerPage);
  currentPage = Math.max(1, Math.min(page, totalPages)); // Clamp to range
  const start = (currentPage - 1) * cardsPerPage;
  const end = start + cardsPerPage;

  cards.forEach((card, index) => {
    card.style.display = index >= start && index < end ? "block" : "none";
  });

  renderPagination(totalPages);

  // Scroll to top of the card container
  /*   cardContainer.scrollIntoView({ behavior: "smooth", block: "start" }); */
  /* window.scrollTo({ top: 0, behavior: "smooth" }); */
}

function renderPagination(totalPages) {
  paginationContainer.innerHTML = "";

  // Prev Button
  const prevBtn = document.createElement("button");
  prevBtn.innerHTML = "<i class='ri-arrow-left-s-line'></i>";
  prevBtn.disabled = currentPage === 1;
  prevBtn.addEventListener("click", () => showPage(currentPage - 1));
  paginationContainer.appendChild(prevBtn);

  const maxVisibleButtons = 5;
  let startPage = 1;
  let endPage = totalPages;

  if (totalPages > maxVisibleButtons + 2) {
    if (currentPage <= 3) {
      startPage = 1;
      endPage = 3;
    } else if (currentPage >= totalPages - 2) {
      startPage = totalPages - 2;
      endPage = totalPages;
    } else {
      startPage = currentPage - 1;
      endPage = currentPage + 1;
    }

    addPageButton(1);

    if (startPage > 2) {
      addEllipsis();
    }

    for (let i = startPage; i <= endPage; i++) {
      if (i !== 1 && i !== totalPages) {
        addPageButton(i);
      }
    }

    if (endPage < totalPages - 1) {
      addEllipsis();
    }

    if (totalPages !== 1) {
      addPageButton(totalPages);
    }
  } else {
    for (let i = 1; i <= totalPages; i++) {
      addPageButton(i);
    }
  }

  // Next Button
  const nextBtn = document.createElement("button");
  nextBtn.innerHTML = "<i class='ri-arrow-right-s-line'></i>";
  nextBtn.disabled = currentPage === totalPages;
  nextBtn.addEventListener("click", () => showPage(currentPage + 1));
  paginationContainer.appendChild(nextBtn);
}

function addPageButton(pageNum) {
  const btn = document.createElement("button");
  btn.textContent = pageNum;
  btn.classList.add("page-btn");
  if (pageNum === currentPage) btn.classList.add("active");
  btn.addEventListener("click", () => showPage(pageNum));
  paginationContainer.appendChild(btn);
}

function addEllipsis() {
  const span = document.createElement("span");
  span.innerHTML = "<i class='ri-more-fill'></i>";
  span.style.margin = "0 2px";
  paginationContainer.appendChild(span);
}

// Initialize first page
showPage(1);
