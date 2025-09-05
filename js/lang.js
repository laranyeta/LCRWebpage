document.addEventListener("DOMContentLoaded", async () => {
    let currentLang = localStorage.getItem("lang") || "en";
    const page = document.body.dataset.page;

    async function loadLanguage() {
        try {
            const resGeneral = await fetch(`./lang/${currentLang}.json`);
            const dataGeneral = await resGeneral.json();

            let dataPage = {};
            if (page) {
                try {
                    const resPage = await fetch(`./lang/${currentLang}-${page}.json`);
                    dataPage = await resPage.json();
                } catch(e) {
                    console.log("No hay JSON específico para esta página");
                }
            }

            document.querySelectorAll("[data-key]").forEach(el => {
                const keys = el.dataset.key.split(".");
                let value = dataGeneral;
                keys.forEach(k => { value = value?.[k]; });
                if (value === undefined) {
                    value = dataPage;
                    keys.forEach(k => { value = value?.[k]; });
                }
                if (value !== undefined) el.innerHTML = value;
            });

            document.querySelectorAll("[data-key-placeholder]").forEach(el => {
                const keys = el.dataset.keyPlaceholder.split(".");
                let value = dataGeneral;
                keys.forEach(k => { value = value?.[k]; });
                if (value === undefined) {
                    value = dataPage;
                    keys.forEach(k => { value = value?.[k]; });
                }
                if (value !== undefined) el.placeholder = value;
            });


            if (page === "projects") {
                const container = document.getElementById("projects-container");
                container.innerHTML = "";

                const projects = dataPage.projects || [];
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

        } catch(err) {
            console.error("Error cargando idioma:", err);
        }
    }

    document.querySelectorAll(".lang-btn").forEach(btn => {
        btn.addEventListener("click", () => {
            const lang = btn.dataset.lang;
            if (lang !== currentLang) {
                localStorage.setItem("lang", lang);
                window.scrollTo({ top: 0, behavior: 'instant' }); 
                location.reload();
            }
        });
    });

    await loadLanguage();
});
