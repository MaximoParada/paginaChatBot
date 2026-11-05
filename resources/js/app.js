import React from 'react';
import { createRoot } from 'react-dom/client';
import Chatbot from './components/Chatbot';

const chatbot = document.getElementById('chatbot');

if (chatbot) {
    const root = createRoot(chatbot);
    root.render(React.createElement(Chatbot));
}