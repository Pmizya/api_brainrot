// array di oggetti per le card

const cardData = [
  { title: "", text: "" },
  { title: "", text: "" },
  { title: "", text: "" },
  { title: "", text: "" },
  { title: "", text: "" },
  { title: "", text: "" }
];

const cardRow = document.getElementById('card-row');

cardData.forEach((card, i) => {
  const col = document.createElement('div');
  col.className = 'col-12 col-md-6 col-lg-4';
  col.innerHTML = `
    <div class="card slide-in" style="min-height: 200px;">
      <div class="card-body">
        <h5 class="card-title">${card.title}</h5>
        <p class="card-text">${card.text}</p>
      </div>
    </div>
  `;
  cardRow.appendChild(col);
});

// animazione slide in
function handleScrollAnim() {
  const cards = document.querySelectorAll('.slide-in');
  const triggerBottom = window.innerHeight * 0.85;
  cards.forEach(card => {
    const cardTop = card.getBoundingClientRect().top;
    if (cardTop < triggerBottom) {
      card.classList.add('show');
    } else {
      card.classList.remove('show');
    }
  });
}
window.addEventListener('scroll', handleScrollAnim);
window.addEventListener('load', handleScrollAnim);
