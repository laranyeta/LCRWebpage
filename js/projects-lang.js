let currentLang = "en"; 

async function loadProjects(lang) {
    const res = await fetch(`lang/projects-${lang}.json`);
    const projects = await res.json();

    const container = document.getElementById("projects-container");
    container.innerHTML = "";

    projects.forEach(project => {
        const projectCard = document.createElement("div");
        projectCard.classList.add("project-card");

        projectCard.innerHTML = `
            <div class="aura"></div>
            <a href="${project.page}">
                <img id="project-img" src="${project.image}" alt="${project.title}">
            </a>
            <div class="project-info">
                <h2>${project.title}</h2>
                <a href="${project.link}" target="_blank">
                    <img src="img/logos/github.png" alt="GitHub" width="30">
                </a>
            </div>
            <p id="project-description">${project.description}</p>
        `;

        container.appendChild(projectCard);
    });
}

document.querySelectorAll(".lang-btn").forEach(btn => {
    btn.addEventListener("click", () => {
        currentLang = btn.dataset.lang;
        loadProjects(currentLang);
    });
});

document.addEventListener("DOMContentLoaded", () => {
    loadProjects(currentLang);
});
