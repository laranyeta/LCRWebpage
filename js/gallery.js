const mediaItems = document.querySelectorAll(".media-item");
const mediaGrid = document.querySelector(".media-grid");

mediaItems.forEach(item => {
  const video = item.querySelector("video");

  item.addEventListener("mouseenter", () => {
    if (!item.classList.contains("active") && video) {
      video.play();
    }
  });

  item.addEventListener("mouseleave", () => {
    if (!item.classList.contains("active") && video) {
      video.pause();
      video.currentTime = 0;
    }
  });

  item.addEventListener("click", (e) => {
    e.stopPropagation();
    mediaGrid.classList.add("expanded");

    mediaItems.forEach(el => {
      el.classList.remove("active");
      const v = el.querySelector("video");
      if (v) {
        v.pause();
        v.currentTime = 0;
      }
    });

    item.classList.add("active");
    if (video) {
      video.play();
    }
  });
});

document.addEventListener("click", () => {
  mediaGrid.classList.remove("expanded");
  mediaItems.forEach(el => {
    el.classList.remove("active");
    const v = el.querySelector("video");
    if (v) {
      v.pause();
      v.currentTime = 0;
    }
  });
});
