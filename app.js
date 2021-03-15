// Your web app's Firebase configuration
var firebaseConfig = {
   apiKey: "AIzaSyAvT1ibdly8CXIzPzgniRmGN7idmI4mhe4",
    authDomain: "validatorsfinal.firebaseapp.com",
    projectId: "validatorsfinal",
    storageBucket: "validatorsfinal.appspot.com",
    messagingSenderId: "715393045453",
    appId: "1:715393045453:web:ad8b5bc799ad52886eaa84",
    measurementId: "G-R95RTDQC8C",
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);

// Refernece contactInfo collections
let contactInfo = firebase.database().ref("infos");

// Listen for a submit
document.querySelector(".contact-form").addEventListener("submit", submitForm);

function submitForm(e) {
  e.preventDefault();

  //   Get input Values
  let name = document.querySelector(".name").value;
  let email = document.querySelector(".email").value;
  let number = document.querySelector(".number").value;
  let message = document.querySelector(".message").value;
  console.log(name, email, number,message);

  saveContactInfo(name, email, number,message);

  document.querySelector(".contact-form").reset();
}

// Save infos to Firebase
function saveContactInfo(name, email, number,message) {
  let newContactInfo = contactInfo.push();

  newContactInfo.set({
    name: name,
    email: email,
	 number: number,
    message: message,
  });
}
