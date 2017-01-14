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
	var project	=	document.getElementById('projects');

	//Get references
	var dbref = firebase.database().ref().child('projects');

	//Sync object changes
	dbref.on('value',snap => {
		var p	=	JSON.parse(JSON.stringify(snap.val()));
		for( var i in tys){
			project.append('<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">'+
			'<div class="thumbnail" style="background-color: #ad050b;">'+
			'<img src="'+p[i].img_src+'" alt="Thumbnail Image 1" class="img-responsive">'+
			'<div class="caption">'+
			'<h3>'+p[i].heading+'</h3>'+
			'<p>'+p[i].short_des+'</p></div></div></div>');
	
		}
		
	});

}());