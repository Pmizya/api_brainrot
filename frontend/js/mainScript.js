const APIKEY = "kQM9J4VvmkOqiI65gNKf2d4Lb5JDqz5J"

const searchInput = document.getElementById("search-input")

const cardRow = document.getElementById('card-row');
const title = document.getElementById('title');
const errorMsg = document.getElementById('errorMsg');

function brainrotShower(value=""){
    fetch(`http://localhost/Brainrot/api/public_html/?name=${value}&apiKey=${APIKEY}`).then(r => r.json()).then(r => {
        cardRow.innerHTML = ""
        errorMsg.innerHTML = "";
        title.innerHTML = "";
        
        if(r["success"]){
            title.innerHTML = `Brainrot (${r["brainrots"].length})`
            
            r["brainrots"].forEach(k => {

              const col = document.createElement('div');
              col.className = 'col-12 col-md-6 col-lg-4 d-flex';
              col.innerHTML = `

                <div class="card slide-in shadow-lg p-3 mb-5 bg-body-tertiary rounded" style="min-height: 500px;">
                  <div class="card-body">
                    <img class="img-fluid mb-3" src="./assets/img/${k.id}.webp">
                    <h5 class="card-title">${k.name}</h5>
                    <p class="card-text">${k.description}</p>

                    <audio controls="" style="width: 85%;" class="mt-3">
                      <source src="./assets/sounds/${k["id"]}.mp3" type="audio/mpeg">
                    </audio>

                  </div>
                </div>

              `;

              cardRow.appendChild(col);
            })
        }

        else{
            errorMsg.textContent = r["error"]
        }
    })
}


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


document.addEventListener("DOMContentLoaded", () => {
  brainrotShower()
  
  searchInput.addEventListener("input", e => brainrotShower(e.target.value))
  
  window.addEventListener('scroll', handleScrollAnim);
  window.addEventListener('load', handleScrollAnim);
})  


