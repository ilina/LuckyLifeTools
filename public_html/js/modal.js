// Get the login modal
var loginModal = document.getElementById('loginModal');

// Get the signup modal
var signupModal = document.getElementById('signupModal');

// Get the <span> element that closes the modal
var loginSpan = document.getElementsByClassName("close-login")[0];
var signupSpan = document.getElementsByClassName('close-signup')[0];

$(document).ready(function() {
	// Selects all classes with the modal
	$('.login-modal').click(function() {
		loginModal.style.display = "block";
    	signupModal.style.display = "none";
		var scrollTop = document.body.scrollTop || document.documentElement.scrollTop;
    	$('#login-x-loc').val(scrollTop);
		return false;
	})

	$('.signup-modal').click(function() {
		signupModal.style.display = "block";
        loginModal.style.display = "none";
		var scrollTop = document.body.scrollTop || document.documentElement.scrollTop;
    	$('#signup-x-loc').val(scrollTop);
		return false;
	})

	$(document).keyup(function(e) {
	     if (e.keyCode == 27) { // escape key maps to keycode `27`
	        signupModal.style.display = "none";
	        loginModal.style.display = "none";
	    }
	});
});
// When the user clicks the button, open the modal

// When the user clicks on <span> (x), close the modal
loginSpan.onclick = function() {
    loginModal.style.display = "none";
}

signupSpan.onclick = function() {
	signupModal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == loginModal) {
        loginModal.style.display = "none";
    } else if (event.target == signupModal) {
    	signupModal.style.display = "none";
    }
}
