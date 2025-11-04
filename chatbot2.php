<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="template/chatbot2.css" />
</head>

<body>
  <!-- Icono de chat -->
  <div class="chat-icon" onclick="toggleChat()">💬</div>

  <!-- Ventana del chat -->
  <div class="chat-window" id="chatWindow">
    <div class="chat-header" onclick="toggleChat()">Chatbot</div>
    <div class="chat-body" id="chatbox"></div>
    <div class="chat-footer">
      <input type="text" id="userInput" placeholder="Escribe un mensaje...">
      <button onclick="sendMessage()">Enviar</button>
    </div>
  </div>

  <script src="chatbot2.js"></script>
</body>

</html>