const popup = document.getElementById("contactPopup");
const popupTitle = document.getElementById("popupTitle");
const popupMessage = document.getElementById("popupMessage");
const form = document.querySelector(".contact-form");

function showPopup(title, message) {
    popupTitle.textContent = title;
    popupMessage.textContent = message;
    popup.classList.add("show");

    setTimeout(() => {
        popup.classList.remove("show");
    }, 3000);
}

form.addEventListener("submit", async (e) => {
    e.preventDefault();

    const formData = new FormData(form);

    try {
        const response = await fetch("contact.php", {
            method: "POST",
            body: formData
        });

        const result = await response.json();

        if (result.success) {
            showPopup("Message Sent!", "Thanks for contacting me, I’ll get back to you soon!");
            form.reset();
        } else {
            showPopup("Error", result.error || "There was a problem sending your message.");
        }
    } catch (error) {
        showPopup("Error", "Unable to send message. Please try again later.");
    }
});