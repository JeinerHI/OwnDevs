const toggle = document.getElementById("chat-toggle");
const chatbox = document.getElementById("chatbox");
const xclose = document.getElementById("close");

toggle.addEventListener('click', () =>{
    if (chatbox.style.display === 'none') {
    chatbox.style.display = 'flex';
    } else {
    chatbox.style.display = 'none';
    }
})

xclose.addEventListener('click', () =>{
    if (chatbox.style.display === 'none') {
    chatbox.style.display = 'flex';
    } else {
    chatbox.style.display = 'none';
    }
})