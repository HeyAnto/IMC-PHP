document.querySelectorAll('input[type="number"]').forEach((input) => {
  input.addEventListener("input", (e) => {
    e.target.value = e.target.value.replace(/[^0-9.]/g, "");
  });
});
