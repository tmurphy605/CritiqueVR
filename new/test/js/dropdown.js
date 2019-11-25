function expandSignIn(){
    document.getElementById("signInBtn").style.height= "175px";
    document.getElementById("signInBtn").style.backgroundColor= "#ECC261";
    document.getElementById("signInForm").style.display= "block";
}

function expandSignUp(){
    document.getElementById("signUpBtn").style.height= "265px";
    document.getElementById("signUpBtn").style.backgroundColor= "#ECC261";
    document.getElementById("signUpForm").style.display= "block";
}

function expandMyRooms(){
    document.getElementById("myRoomsBtn").style.height= "265px";
    document.getElementById("myRoomsBtn").style.backgroundColor= "#ECC261";
    document.getElementById("myRoomsForm").style.display= "block";
}

function expandChangePassword(){
    document.getElementById("changePasswordBtn").style.height= "225px";
    document.getElementById("changePasswordBtn").style.backgroundColor= "#ECC261";
    document.getElementById("changePasswordForm").style.display= "block";
}

function expandFileUpload(){
    
    if(document.getElementById("roomName").value !== "" && document.getElementById("roomDescription").value !== "" && document.getElementById("piece").checked) {
        $(document).ready(function() { 
            $("#doneBtn").fadeIn("1000");
            $("#fileUploadBtn").fadeIn("1000");
        });
        document.getElementById("fileUploadBtn").style.height= "250px";
        document.getElementById("fileUploadBtn").style.height= "250px";
        document.getElementById("fileUploadForm").style.display= "block";
    }else{
        alert("Fill in the Room Name, Type and Description!");
    }
}

function expandPin(){
    document.getElementById("perfectBtn").style.height= "225px";
    document.getElementById("perfectForm").style.display= "block";
}

function createRoom(){
    $(document).ready(function() {
        // Variables
        var clickedTab = $("#roomCreationTab");
        var tabWrapper = $(".tab__content");
        var activeTab = tabWrapper.find(".active");
        var activeTabHeight = activeTab.outerHeight();

        // Show tab on page load
        activeTab.show();

        // Set height of wrapper on page load
        tabWrapper.height(activeTabHeight);
	
		
		// Remove class from active tab
		$(".tabs > li").removeClass("active");
		
		// Add class active to clicked tab
		$("#roomCreationTab").addClass("active");
		
		// Update clickedTab variable
		clickedTab = $("#roomCreationTab");
		
		// fade out active tab
		activeTab.fadeOut(250, function() {
			
			// Remove active class all tabs
			$("#accountTab").removeClass("active");
			
			// Get index of clicked tab
			var clickedTabIndex = clickedTab.index();

			// Add class active to corresponding tab
			$("#liCreateRoom").eq(clickedTabIndex).addClass("active");
			
			// update new active tab
			activeTab = $("#roomCreationTab");
			
			// Update variable
			activeTabHeight = activeTab.outerHeight();
			
			// Animate height of wrapper to new tab height
			tabWrapper.stop().delay(50).animate({
				height: activeTabHeight
			}, 500, function() {
				
				// Fade in active tab
				activeTab.delay(50).fadeIn(250);
				
			});
		});
	});
}