function toggleChat() {
  let chatWindow = document.getElementById("chatWindow");
  chatWindow.style.display = (chatWindow.style.display === "none" || chatWindow.style.display === "") ? "flex" :
    "none";
}

function sendMessage() {
  let userInput = document.getElementById("userInput").value;
  if (!userInput) return;

  let chatbox = document.getElementById("chatbox");
  chatbox.innerHTML += `<div><strong>Tú:</strong> ${userInput}</div>`;
  document.getElementById("userInput").value = "";

  // Hacer una petición AJAX a chatbot_bd.php
  fetch('chatbot_bd.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      body: 'pregunta=' + encodeURIComponent(userInput)
    })
    .then(response => response.text())
    .then(data => {
      chatbox.innerHTML += `<div><strong>Bot:</strong> ${data}</div>`;
      chatbox.scrollTop = chatbox.scrollHeight;
    })
    .catch(error => {
      console.error('Error:', error);
    });
}