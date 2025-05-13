@php
    $chatHistory = \App\Models\ChatMessage::latest()->take(20)->get()->reverse();
@endphp
<style>
    
    #chatbot-icon {
        position: fixed;
        bottom: 30px;
        right: 30px;
        background-color: #007bff;
        color: white;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        font-size: 28px;
        text-align: center;
        line-height: 60px;
        cursor: pointer;
        z-index: 1000;
    }

    #chatbox {
        position: fixed;
        bottom: 100px;
        right: 30px;
        width: 300px;
        background-color: white;
        border: 1px solid #ccc;
        border-radius: 10px;
        display: none;
        z-index: 1000;
    }

    #chatbox-header {
        background-color: #007bff;
        color: white;
        padding: 10px;
        border-radius: 10px 10px 0 0;
    }

    #chatbox-body {
        height: 200px;
        overflow-y: auto;
        padding: 10px;
    }

    #chatbox input {
        width: 100%;
        border: none;
        border-top: 1px solid #ccc;
        padding: 8px;
    }
</style>

<div id="chatbot-icon">
    <i class="bi bi-chat-dots-fill"></i>
</div>


<div id="chatbox">
    <div id="chatbox-header">Trợ lý ảo</div>
    <div id="chatbox-body"></div>
    <input type="text" id="chat-input" placeholder="Nhập tin nhắn...">
</div>


<script>
    //sự kiện mở đóng khung chat
    document.getElementById('chatbot-icon').addEventListener('click', function () {
        const box = document.getElementById('chatbox'); 
        box.style.display = box.style.display === 'none' ? 'block' : 'none';
    });

    //lấy dữ liệu khi người dùng gõ tin nhắn trong ô chat
    document.getElementById('chat-input').addEventListener('keypress', function (e) {
        //thực hiện nếu như nút gõ là nút enter
        if (e.key === 'Enter') {
            const msg = this.value;
            if (!msg) return;
            const body = document.getElementById('chatbox-body');
            body.innerHTML += `<div><strong>Bạn:</strong> ${msg}</div>`;
            this.value = '';

            fetch("{{ route('chat.send') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ message: msg })
            })
            .then(res => res.json())
            .then(data => {
                body.innerHTML += `<div><strong>Bot:</strong> ${data.reply}</div>`;
                body.scrollTop = body.scrollHeight;
            });
        }
    });
</script>
