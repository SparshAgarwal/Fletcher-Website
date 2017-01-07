(function(){

	// Initialize Firebase
	const config = {
		apiKey: "AIzaSyB1McxJubv9LqGOj3lum2pfAiFVycPPbI4",
		authDomain: "fletcher-e4553.firebaseapp.com",
		databaseURL: "https://fletcher-e4553.firebaseio.com",
		storageBucket: "fletcher-e4553.appspot.com",
		messagingSenderId: "795770218886"
	};
	firebase.initializeApp(config);

	//Get elements
	var projects = document.getElementById('projects');

	//Get references
	var dbref = firebase.database().ref().child('projects');

	//Sync object changes
	dbref.on('value',snap => projects.innerText = snap.val());

}());