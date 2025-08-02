const publier_produit = document.getElementById("publier_produit");
const visulizer = document.getElementById("visulizer");
const publish_btn = document.getElementById("publish-btn");

// ✅ Set watermark image path here (must be PNG with transparency)
const WATERMARK_SRC = "./assets/images/tora-watermark.webp"; // <-- CHANGE this to your real watermark image path

publier_produit.addEventListener("submit", async (e) => {
  e.preventDefault();

  const formData = new FormData();
  const MAX_FILE_SIZE = 5 * 1024 * 1024; // 5 Mo (change to 2 * 1024 * 1024 for 2MB limit)

  // Append non-file inputs
  const inputs = publier_produit.querySelectorAll("input, select, textarea");
  inputs.forEach((input) => {
    if (input.type !== "file") {
      formData.append(input.name, input.value);
    }
  });

  // Handle image input
  const imageInput = publier_produit.querySelector(
    'input[type="file"][name="images[]"]'
  );
  const files = Array.from(imageInput.files).slice(0, 4); // Max 4 files

  for (let i = 0; i < files.length; i++) {
    const originalFile = files[i];

    if (originalFile.size > MAX_FILE_SIZE) {
      setTimeout(() => {
        document.querySelector("html").scrollTo({ top: 0, behavior: "smooth" });
        visulizer.innerHTML = "";
      }, 3000);
      visulizer.innerHTML = `<span style="color:red;">Votre image dépasse 5 Mo.</span>`;
      return; // Stop the form submission
    }

    // ✅ Compress and watermark image
    const compressedJPEGBlob = await convertToCompressedJPEG(originalFile);

    const finalFile = new File([compressedJPEGBlob], `converted_${i}.jpg`, {
      type: "image/jpeg",
    });

    formData.append("images[]", finalFile);
  }

  // Send to server
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "php/publier-produit.php", true);
  xhr.onload = () => {
    if (xhr.readyState === xhr.DONE && xhr.status === 200) {
      publish_btn.disabled = true;
      publish_btn.innerHTML = '<i class="ri-loader-2-fill"></i> Publier';
      publish_btn.style.background = "rgb(0, 176, 158)";
      const data = xhr.response;
      if (data === "success") {
        setTimeout(() => {
          document
            .querySelector("html")
            .scrollTo({ top: 0, behavior: "smooth" });
          visulizer.innerHTML = "";
          publish_btn.disabled = false;
          publish_btn.style.background = "rgb(0, 176, 158)";
          publish_btn.innerHTML = "Publier";
          document.querySelector("html").scrollTo({ top: 0, behavior: "smooth" });
          location.reload();
        }, 3000);
        visulizer.innerHTML =
          "<span style='color:green;'>Ajouté avec succès!</span>";
      } else {
        setTimeout(() => {
          document
            .querySelector("html")
            .scrollTo({ top: 0, behavior: "smooth" });
          visulizer.innerHTML = "";
          publish_btn.disabled = false;
          publish_btn.style.background = "rgb(0, 176, 158)";
          publish_btn.innerHTML = "Publier";
        }, 3000);
        visulizer.innerHTML = data;
        publish_btn.disabled = true;
        publish_btn.style.background = "rgb(0, 176, 158)";
        publish_btn.innerHTML = '<i class="ri-loader-2-fill"></i> Publier';
      }
    }
  };

  xhr.send(formData);
});

// ✅ Load watermark image
function loadWatermark() {
  return new Promise((resolve) => {
    const watermark = new Image();
    watermark.onload = () => resolve(watermark);
    watermark.src = WATERMARK_SRC;
  });
}

// ✅ Convert image to compressed JPEG with watermark
async function convertToCompressedJPEG(file) {
  const MAX_SIZE = 900;

  return new Promise((resolve) => {
    const reader = new FileReader();
    reader.onload = (event) => {
      const img = new Image();
      img.onload = async () => {
        let width = img.width;
        let height = img.height;

        // Resize keeping aspect ratio inside square 900x900 box
        const ratio = Math.min(MAX_SIZE / width, MAX_SIZE / height);
        width = Math.round(width * ratio);
        height = Math.round(height * ratio);

        // Create canvas
        const canvas = document.createElement("canvas");
        canvas.width = width;
        canvas.height = height;
        const ctx = canvas.getContext("2d");

        // Draw image
        ctx.drawImage(img, 0, 0, width, height);

        // ✅ Draw watermark
        const watermark = await loadWatermark();
        const wmWidth = width / 3;
        const wmHeight = (wmWidth / watermark.width) * watermark.height;

        const wmX = (width - wmWidth) / 2;

        // Dynamic vertical position for better visibility
        const aspectRatio = height / width;
        let wmY;

        if (aspectRatio > 1.6) {
          // Tall image — place watermark higher
          wmY = (height - wmHeight) / 2 + 4;
        } else if (aspectRatio < 0.8) {
          // Wide image — place lower
          wmY = height - wmHeight - 15;
        } else {
          // Square-ish — slightly above bottom
          wmY = height - wmHeight - 30;
        }

        ctx.globalAlpha = 0.4;
        ctx.drawImage(watermark, wmX, wmY, wmWidth, wmHeight);
        ctx.globalAlpha = 1.0;

        // Export
        canvas.toBlob((blob) => resolve(blob), "image/jpeg", 0.6);
      };
      img.src = event.target.result;
    };
    reader.readAsDataURL(file);
  });
}
