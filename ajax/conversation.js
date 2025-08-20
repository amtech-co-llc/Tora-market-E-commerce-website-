const msgSentForm = document.getElementById("msgSentForm");
const sendButton = document.getElementById("sendButton");
const textA = document.getElementById("textA");

msgSentForm.addEventListener("submit", (e) => {
  e.preventDefault();
});

sendButton.addEventListener("click", () => {
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "php/conversation.php", true);

  xhr.onload = () => {
    if (xhr.readyState == xhr.DONE && xhr.status == 200) {
      const data = xhr.response;
      if (data == "sent") {
        msgSentForm.reset();
        textA.textContent = "";
        image_place.classList.remove("show");
      }
    }
  };
  const formData = new FormData(msgSentForm);
  xhr.send(formData);
});

////////////////////////////////////////////////////////////////////////////////////////
const chatContainer = document.getElementById("chat-container");

setInterval(() => {
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "php/select-conversations.php", true);

  xhr.onload = () => {
    if (xhr.readyState === xhr.DONE && xhr.status === 200) {
      const previousScrollHeight = chatContainer.scrollHeight;
      chatContainer.innerHTML = xhr.response;

      // If the user sent a message or is near bottom, scroll to bottom
      const isNearBottom =
        chatContainer.scrollHeight -
          chatContainer.scrollTop -
          chatContainer.clientHeight <
        50;
      if (isNearBottom || chatContainer.scrollHeight > previousScrollHeight) {
        chatContainer.scrollTop = chatContainer.scrollHeight;
      }
    }
  };

  const formData = new FormData(msgSentForm);
  xhr.send(formData);
}, 500);
