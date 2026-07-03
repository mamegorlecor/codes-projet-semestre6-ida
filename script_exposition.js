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