import "bootstrap";

document.querySelectorAll('[data-bs-toggle="popover"]').forEach((popover) => {
  new bootstrap.Popover(popover, { sanitize: false, html: true });
});

window.copyContent = function (textToCopy) {
  navigator.clipboard
    .writeText(textToCopy)
    .then(() => {
      console.log("Text copied to clipboard:", textToCopy);
    })
    .catch((err) => {
      console.error("Failed to copy text:", err);
    });
};
