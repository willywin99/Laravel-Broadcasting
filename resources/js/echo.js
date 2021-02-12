import BusEvent from './bus';

Echo.join('chat-channel')
    .listen('ChatStoredEvent', (e) => {
        BusEvent.$emit('chat.sent', e.data);
    });
