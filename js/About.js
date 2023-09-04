document.addEventListener("DOMContentLoaded", function() {
    const showMoreBtn = document.getElementById("showMoreBtn");
    const informationSection = document.getElementById("information");
    const skillsList = document.getElementById("skillsList");

    showMoreBtn.addEventListener("click", function() {
        informationSection.classList.toggle("hidden");

        if (informationSection.classList.contains("hidden")) {
            showMoreBtn.textContent = "Show More";
        } else {
            showMoreBtn.textContent = "Show Less";
        }
    });

    const skills = ["HTML", "CSS", "JavaScript", "C#", "PHP"];
    
    for (let i = 0; i < skills.length; i++) {
        const skillItem = document.createElement("li");
        skillItem.textContent = skills[i];
        skillsList.appendChild(skillItem);
    }
});

document.addEventListener("DOMContentLoaded", function() {
    const viewCvBtn = document.createElement("a");
    viewCvBtn.textContent = "View CV";
    viewCvBtn.href = "../image/My project-1.png"; 
    viewCvBtn.target = "_blank";
    viewCvBtn.classList.add("cv-download-btn", "view-cv");

    const cvSection = document.querySelector(".cv-section");

    // Maak een container div voor de links
    const linkContainer = document.createElement("div");
    linkContainer.classList.add("link-container");

    // Voeg de downloadlink toe aan de container
    const cvDownloadBtn = cvSection.querySelector(".cv-download-btn");
    linkContainer.appendChild(cvDownloadBtn);

    // Voeg de "View CV" link toe aan de container
    linkContainer.appendChild(viewCvBtn);

    // Voeg de container toe aan de sectie
    cvSection.appendChild(linkContainer);

    const showMoreBtn = document.getElementById("showMoreBtn");
    const informationPopup = document.getElementById("informationPopup");
    const closePopupBtn = document.getElementById("closePopupBtn");

    showMoreBtn.addEventListener("click", function() {
        informationPopup.style.display = "block";
    });

    closePopupBtn.addEventListener("click", function() {
        informationPopup.style.display = "none";
    });
});



const showArtiestBtn = document.getElementById("showArtiestBtn");
const artiestPopup = document.getElementById("artiestPopup");
const closeArtiestPopupBtn = document.getElementById("closeArtiestPopupBtn");

showArtiestBtn.addEventListener("click", function() {
    artiestPopup.style.display = "block";
});

closeArtiestPopupBtn.addEventListener("click", function() {
    artiestPopup.style.display = "none";
});