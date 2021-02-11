<template>
    <div>

        <div class="chat-lists">
            <div class="messages" v-for="chat in chats">
                <div class="users">
                    {{ chat.user.name }} <span class="time">{{ chat.created_at }}</span>
                </div>
                <div class="message">
                    {{ chat.subject }}
                </div>
            </div>

        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return{
                chats: []
            }
        },
        mounted() {
            this.getAllChats();
        },
        methods : {
            getAllChats(){
                axios.get('/chat/all-chats').then(response => {
                    this.chats = response.data.reverse();
                    this.scrollToBottom();
                });
            },
            scrollToBottom(){
                setTimeout(function(){
                    let chatLists = document.getElementsByClassName('chat-lists')[0];
                    chatLists.scrollTop = chatLists.scrollHeight
                }, 1);
            }
        }
    }
</script>

<style lang="scss">
    .messages{
        margin-top: 5px;
        .time{
            font-weight: 800;
        }
        .message{
            font-size: 1.2rem;
        }
    }
    .chat-lists{
        max-height: 300px;
        overflow-y: scroll;
    }
</style>
