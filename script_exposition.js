const styleElement = document.createElement('style');
styleElement.innerHTML = `
    :root {
        --marron-brand: #C07A1E;
        --bg-page: #F9F9F9;
    }

    /* Filtres */
    .filter-section h4 {
        font-weight: bold;
        margin-right: 15px;
    }
    .btn-filter {
        background-color: var(--marron-brand);
        color: white;
        border: none;
        border-radius: 5px;
        padding: 6px 15px;
        font-weight: 500;
        transition: background-color 0.2s ease;
    }
    .btn-filter:hover, .btn-filter:focus {
        background-color: #a36515;
        color: white;
    }

    @media (max-width: 767px) {
        body {
            padding-top: 80px !important; /* Un peu moins d'espace sur mobile */
        }
        .filter-section .d-flex {
            justify-content: center !important;
            gap: 10px !important;
        }
        .filter-section h4 {
            width: 100%;
            text-align: center;
            margin-right: 0;
            margin-bottom: 5px;
        }
        .btn-filter {
            font-size: 0.9rem;
            padding: 6px 12px;
            width: 47%;
        }
        .dropdown { 
            display: inline-block; 
            width: 50%; 
            text-align: center; 
        }
        .dropdown .btn-filter { 
            width: 100%; 
        }
    }
`;
document.head.appendChild(styleElement);


const zoneFiltres = document.createElement('div');
zoneFiltres.className = "container mt-4 mt-md-5 filter-section";

zoneFiltres.innerHTML = `
    <div class="d-flex align-items-center gap-3 flex-wrap">
        <h4 class="mb-0">Filtres</h4>
        
        <div class="dropdown">
            <button class="btn btn-filter dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Par Région
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item p-2" data-type="region" data-value="tous" href="#">Tous</a></li>
                <li><a class="dropdown-item p-2" data-type="region" data-value="dakar" href="#">Dakar</a></li>
                <li><a class="dropdown-item p-2" data-type="region" data-value="thiès" href="#">Thiès</a></li>
                <li><a class="dropdown-item p-2" data-type="region" data-value="casamance" href="#">Casamance</a></li>
            </ul>
        </div>

        <div class="dropdown">
            <button class="btn btn-filter dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Par Catégorie
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item p-2" data-type="categorie" data-value="tous" href="#">Tous</a></li>
                <li><a class="dropdown-item p-2" data-type="categorie" data-value="textile" href="#">Textile</a></li>
                <li><a class="dropdown-item p-2" data-type="categorie" data-value="menuiserie" href="#">Menuiserie</a></li>
                <li><a class="dropdown-item p-2" data-type="categorie" data-value="transformation" href="#">Transformation</a></li>
            </ul>
        </div>
    </div>
`;

document.body.prepend(zoneFiltres);


document.addEventListener("DOMContentLoaded", function () {
    
    let activeRegion = "tous";
    let activeCategorie = "tous";

    const filterLinks = document.querySelectorAll("a[data-type]");
    
    filterLinks.forEach(link => {
        link.addEventListener("click", function (e) {
            e.preventDefault(); 
            
            const filterType = this.getAttribute("data-type");
            const filterValue = this.getAttribute("data-value");
            const dropdownToggle = this.closest(".dropdown").querySelector(".dropdown-toggle");

           
            if (filterType === "region") {
                activeRegion = filterValue;
                dropdownToggle.textContent = (filterValue === "tous") ? "Par Région" : this.textContent.trim();
            } else if (filterType === "categorie") {
                activeCategorie = filterValue;
                dropdownToggle.textContent = (filterValue === "tous") ? "Par Catégorie" : this.textContent.trim();
            }

            
            const cards = document.querySelectorAll(".artisan-column");

            cards.forEach(card => {
                const regionEl = card.querySelector(".region-value");
                const secteurEl = card.querySelector(".secteur-value");

                
                if (regionEl && secteurEl) {
                    const cardRegion = regionEl.textContent.trim().toLowerCase();
                    const cardSecteur = secteurEl.textContent.trim().toLowerCase();

                    const matchRegion = (activeRegion === "tous" || cardRegion === activeRegion);
                    const matchCategorie = (activeCategorie === "tous" || cardSecteur === activeCategorie);

                    
                    if (matchRegion && matchCategorie) {
                        card.style.setProperty("display", "block", "important");
                    } else {
                        card.style.setProperty("display", "none", "important");
                    }
                }
            });
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    
    let activeRegion = "tous";
    let activeCategorie = "tous";

    
    const filterLinks = document.querySelectorAll("a[data-type]");
    const cards = document.querySelectorAll(".artisan-column");

    filterLinks.forEach(link => {
        link.addEventListener("click", function (e) {
            e.preventDefault(); 
            
            const filterType = this.getAttribute("data-type");
            const filterValue = this.getAttribute("data-value");
            const dropdownToggle = this.closest(".dropdown").querySelector(".dropdown-toggle");

          
            if (filterType === "region") {
                activeRegion = filterValue;
                dropdownToggle.textContent = (filterValue === "tous") ? "Par Région" : this.textContent.trim();
            } else if (filterType === "categorie") {
                activeCategorie = filterValue;
                dropdownToggle.textContent = (filterValue === "tous") ? "Par Catégorie" : this.textContent.trim();
            }

            
            cards.forEach(card => {
                const cardRegion = card.querySelector(".region-value").textContent.trim().toLowerCase();
                const cardSecteur = card.querySelector(".secteur-value").textContent.trim().toLowerCase();

                const matchRegion = (activeRegion === "tous" || cardRegion === activeRegion);
                const matchCategorie = (activeCategorie === "tous" || cardSecteur === activeCategorie);

                
                if (matchRegion && matchCategorie) {
                    card.style.setProperty("display", "block", "important");
                } else {
                    card.style.setProperty("display", "none", "important");
                }
            });
        });
    });
});