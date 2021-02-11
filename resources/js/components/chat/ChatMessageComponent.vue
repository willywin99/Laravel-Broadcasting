<template>
    <div>
        <div class="chat-lists">
            <div class="messages">
                <div class="users">
                    Willy <span class="time">2021-02-11; 23:04:20</span>
                </div>
                <div class="message">
                    "Pesan dari Willy"
                </div>
            </div>

            <div class="messages">
                <div class="users">
                    Willy <span class="time">2021-02-11; 23:04:20</span>
                </div>
                <div class="message">
                    "Pesan dari Ruby"
                </div>
            </div>

            <div class="messages">
                <div class="users">
                    Willy <span class="time">2021-02-11; 23:04:20</span>
                </div>
                <div class="message">
                    "Pesan dari Go"
                </div>
            </div>

        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
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
</style>
