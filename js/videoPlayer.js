document.addEventListener("DOMContentLoaded", () => {
  const video = document.getElementById("video-bg");
  if (!video) return;

  video.muted = true;
  video.play().catch(() => {
    const btn = document.createElement("button");
    btn.textContent = "Play Background";
    btn.className = "btn btn-secondary position-fixed bottom-0 end-0 m-3";
    btn.onclick = () => {
      video.play();
      btn.remove();
    };
    document.body.appendChild(btn);
  });
});
