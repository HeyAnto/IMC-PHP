document.querySelectorAll('input[type="number"]').forEach((input) => {
  input.addEventListener("input", (e) => {
    let value = e.target.value.replace(/[^0-9.]/g, "");

    if (value.length > 3) {
      value = value.slice(0, 3);
    }

    e.target.value = value;
  });
});
