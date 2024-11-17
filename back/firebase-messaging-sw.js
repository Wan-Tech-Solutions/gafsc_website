importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js');

firebase.initializeApp({

    apiKey: "AIzaSyDqp48KlAiYyzOjrVIBwW7AqzYKRwla1UE",
    authDomain: "elevar-67a26.firebaseapp.com",
    projectId: "elevar-67a26",
    storageBucket: "elevar-67a26.appspot.com",
    messagingSenderId: "553025576275",
    appId: "1:553025576275:web:deeb230d2ad6793eb515a6"
});

const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function({data:{title,body,icon}}) {
    alert()
    return self.registration.showNotification(title,{body,icon});
});
