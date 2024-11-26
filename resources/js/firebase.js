import { initializeApp } from "firebase/app";
import { getDatabase, ref, onValue, push, set } from "firebase/database";

// Firebase configuration (replace with your own config from Firebase Console)
const firebaseConfig = {
    apiKey: "AIzaSyCfdYlCudzVJaRNPo4R_iC6EaAoJbjSyhs",
    authDomain: "hellotractor-1c589.firebaseapp.com",
    databaseURL: "https://hellotractor-1c589-default-rtdb.firebaseio.com",
    projectId: "hellotractor-1c589",
    storageBucket: "hellotractor-1c589.firebasestorage.app",
    messagingSenderId: "971626240863",
    appId: "1:971626240863:web:7feae9f273a7cf0dae74ea",
    measurementId: "G-5177VYS3S3",
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);

// Reference to messages collection

function MessagingArea(message, chatid, user) {
    this.message = message;
    this.chatid = chatid;
    this.user = user;
    this.sendMessage = function () {
        const newMessage = {
            id: Date.now().toString(),
            author: {
                id: user.id,
                firstName: user.name,
            },
            text: message,
            createdAt: Date.now(),
        };

        const db = getDatabase();
        const messagesRef = ref(db, `chats/${chatid}/messages`);

        const newMessageRef = push(messagesRef); // Create a unique ID for the new message
        set(newMessageRef, newMessage)
            .then(() => {
                console.log("Message sent successfully!");
                savethemessage();
            })
            .catch((error) => {
                console.error("Error sending message:", error);
            });
    };
}

function AllMessages(chatid) {
    this.chatid = chatid;

    this.getCoordinates = function () {
        const db = getDatabase();
        const starCountRef = ref(db, "chats/" + chatid + "/messages");
        onValue(starCountRef, (snapshot) => {
            const data = snapshot.val();
            updateCurrentLocation(data, chatid);
        });
    };
}

window.AllMessages = AllMessages;
window.MessagingArea = MessagingArea;
