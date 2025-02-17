// SOcial Media
document.addEventListener("DOMContentLoaded", () => {
    const checkboxes = document.querySelectorAll("input[type='checkbox']");
    
    checkboxes.forEach((checkbox) => {
      checkbox.addEventListener("change", (e) => {
        const linkInput = document.getElementById(`${e.target.id}-link`);
        
        // Show or hide the URL input field based on checkbox state
        if (e.target.checked) {
          linkInput.classList.remove("hidden");
        } else {
          linkInput.classList.add("hidden");
          linkInput.value = ""; // Clear the input field if unchecked
        }
      });
    });
  });
  