const select_image = document.getElementById("select-file");
const image_place = document.querySelector(".image-place");

function scrollToBottom() {
  const conversation_place = document.getElementById("chat-container");
  conversation_place.scrollTo({
    top: conversation_place.scrollHeight,
  });
}

select_image.addEventListener("change", () => {
  image_place.classList.add("show");
  const image_preview = document.querySelectorAll(".imagePreview");

  image_preview.forEach((preview) => {
    const file = select_image.files[0];

    if (file && file.type.startsWith("image/")) {
      const reader = new FileReader();

      reader.onload = function (e) {
        preview.src = e.target.result;
        preview.style.display = "block";
      };
      reader.readAsDataURL(file);
    } else {
      preview.src = "";
      preview.style.display = "none";
      alert("Please select a valid image file.");
    }
  });
});
