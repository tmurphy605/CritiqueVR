<?php
    session_start();
    include ('account.php');
    include ('functions.php');

    gatekeeper();

    $email      = $_SESSION['email'];
    $firstName  = ucwords($_SESSION['firstName']);
    $lastName   = ucwords($_SESSION['lastName']);
?>

<!DOCTYPE html>
<html lang="en" class="bg-color">
<head>
  <meta charset="UTF-8">
  <title>VReview</title>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/dropdown.css">

</head>
    
<div class="vLogoContainer">
    <div class="vLogo"></div>
</div>
    
<body>
<!-- partial:index.partial.html -->

<section class="wrapper">
	<ul class="tabs">
		<li class="liWelcome noclick" id="tab"><div class="logoWelcome"></div></li>
		<li id="tab" class="active liAccount noclick"><div class="logoAccount"></div></li>
		<li id="tab" class="liCreateRoom noclick"><div class="logoCreateRoom"></div></li>
		<li id="tab" class="liPin noclick"><div class="logoPin"></div></li>
	</ul>

	<ul class="tab__content">
		<li id="welcomeTab">
			<div class="content__wrapper">
				<h2 class="text-color">Welcome</h2>
                <ul class="colors">
					<li data-color="#2ecc71"></li>
					<li data-color="#D64A4B"></li>
					<li data-color="#8e44ad"></li>
					<li class="active-color" data-color="#81974F"></li>
					<li data-color="#bdc3c7"></li>
				</ul>
                <br>
                <hr>
                <br>
                <div class="welcomeInfoContainer">
                    <div class="vReviewTitle">
                        <h2 class="section-color">A little bit about VReview!</h2>
                    </div>
                    <div class="welcomeInfo">
                        <div class="welcomeInfoText">
                            We're your new best friend for team design reviews, in Virtual Reality!
                            <br><br>
                            A remote collaborative experience!
                            <br><br>
                            We also make sure you get a decent amount of feedback from participants.
                            <br><br>
                            Sign up to see how we can help!
                        </div>
                        <br>&nbsp;
                    </div>
                </div>
                <div class="loginContainer">
                    <div class="signInContainer">
                        <div class="signInBtn" id="signInBtn" onclick="expandSignIn()">
                            <h4>Sign In</h4>
                            <br>
                            <div id="signInForm">
                                <label>Email:</label><br>
                                <input type="text" id="email" placeholder="example@example.com" required>
                                <br>
                                <label>Password:</label><br>
                                <input type="password" id="password" placeholder="Password" required>
                                <input type="submit">
                            </div>
                        </div>
                    </div>
                    
                    <div class="signUpContainer">
                        <div class="signUpBtn" id="signUpBtn" onclick="expandSignUp()">
                            <h4>Sign Up</h4>
                            <br>
                            <div id="signUpForm">
                                <label>First Name:</label><br>
                                <input type="text" id="firstName" placeholder="Johnny" required>
                                <br>
                                <label>Last Name:</label><br>
                                <input type="text" id="lastName" placeholder="Appleseed" required>
                                <br>
                                <label>Email:</label><br>
                                <input type="text" id="email" placeholder="example@example.com" required>
                                <br>
                                <label>Password:</label><br>
                                <input type="password" id="password" placeholder="Password" required>
                                <input type="submit" >
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</li>
		<li id="accountTab" class="active">
			<div class="content__wrapper">
				<h2 class="text-color">Account</h2>
				<div class="accountInfoContainer">
                    <div class="accountInfo">
                        <h2 class="section-color">Hello, <?php  echo $firstName." ".$lastName;?></h2>
                        <div class="accountInfoText">
                            We let you create Virtual Reality rooms to host mid or final reviews to get input, narrow down ideas or discuss the final product.
                            <br><br>
                            <b>All while being able to save the room and look back at it in the future.</b>
                            <br><br>
                            You give us the information, we do the work!
                        </div>
                        <br>&nbsp;
                    </div>
                </div>
                <div class="accountOptionsContainer">
                    <div class="createRoomContainer">
                        <div class="createRoomBtn" id="createRoomBtn" onclick="createRoom()">
                            <h4>Create Room</h4>
                        </div>
                    </div>
                    <div class="myRoomsContainer">
                        <div class="myRoomsBtn" id="myRoomsBtn" onclick="expandMyRooms()">
                            <h4>My Rooms</h4>
                            <br>
                            <div id="myRoomsForm">
                                <div class="myRoomsOpen">
                                    <span>Open</span>
                                    <table padding="2px">
                                        <tr>
                                            <td>Room 1</td>
                                        </tr>
                                        <tr>
                                            <td>Room 2</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="myRoomsClosed">
                                    <span>Closed</span>
                                    <table padding="2px">
                                        <tr>
                                            <td>Room 3</td>
                                        </tr>
                                        <tr>
                                            <td>Room 4</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="changePasswordContainer">
                        <div class="changePasswordBtn" id="changePasswordBtn" onclick="expandChangePassword()">
                            <form action="handler_changepassword.php" method="post">
                                <h4>Change Password</h4>
                                <br>
                                <div id="changePasswordForm">
                                    <label>Password:</label><br>
                                    <input type="password" id="passwordChange1" name="passwordChange1" placeholder="Password">
                                    <br>
                                    <label>Confirm Password:</label><br>
                                    <input type="password" id="passwordChange2" name="passwordChange2" placeholder="Confirm Password">
                                    <input type="submit" value="Change Password">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
			</div>
		</li>
        <li id="roomCreationTab">
            <div class="content__wrapper">
                <div class="roomCreationInputContainer">
                    <div class="roomCreationInfo">
                        <h2 class="section-color">Create a room!</h2>
                        <div class="roomCreationInfoText">
                            This is the <input type="text" placeholder="Give it a name!" name="roomName" id="roomName"> room.
                            <br><br>
                            <div class="radioPresent" id="radioPresent">
                                <span>I am presenting my...</span>
                                <br><br>
                                <input type="radio" name="piece" id="piece" value="1">
                                    <label>Final Design</label>
                                <br>
                                <input type="radio" name="piece" id="piece" value="2">
                                    <label>Concepts</label>
                                <br>
                                <input type="radio" name="piece" id="piece" value="3">
                                    <label>Story Board</label>
                                <br>
                                <input type="radio" name="piece" id="piece" value="4">
                                    <label>Prototype</label>
                            </div>
                            <br>
                            ...because....
                            <br><br>
                            <div id="textAreaWrapper">
                                <div>
                                    <textarea placeholder="Ex. I need to finalize my character's look." id="roomDescription" name="roomDescription" rows="6" ></textarea>  
                                    <br>
                                    <!--NEXT BUTTON-->
                                    <button id="button" data-hover="Lets go!" onclick="expandFileUpload()"><div>Next</div></button>
                                </div>
                            </div>
                            <br>
                        </div>
                        <br>&nbsp;
                    </div>
                </div>
                <div class="roomCreationFileContainer">
                    <div class="fileUploadContainer">
                        <div class="fileUploadBtn" id="fileUploadBtn">
                            <h4>Let's Upload Your Work</h4>
                            <br>
                            <div id="fileUploadForm">
                                <label for="oneFile">File 1:&nbsp;</label>
                                <input type="file" name="oneFile" id="oneFile">
                                <br><br>
                                <label for="twoFile">File 2:&nbsp;</label>
                                <input type="file" name="twoFile" id="twoFile">
                                <br><br>
                                <label for="threeFile">File 3:&nbsp;</label>
                                <input type="file" name="threeFile" id="threeFile">
                                <br><br>
                                <label for="fourFile">File 4:&nbsp;</label>
                                <input type="file" name="fourFile" id="fourFile">
                            </div>
                        </div>
                    </div>
                    <div class="doneBtnContainer">
                        <div class="doneBtn" id="doneBtn" onclick="doneRoom()">
                            <h4>Create Room</h4>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li id="pinTab">
            <div class="content__wrapper">
                <div class="pinContainer">
                    <div class="pinInfo">
                        <div class="pinTextTop">
                            This is what will be presented when everyone enters the room, is this ok?
                        </div>
                        <div class="pinTextBottom">
                            <b>"Welcome to the ROOM NAME Room!
                            <br><br>
                            A virtual design review that</b> FIRST&LASTNAME <b>created!
                            <br><br>
                            I am presenting my</b> ROOMTYPE <b>because</b> ROOMDESCRIPTION."
                        </div>
                        <br>&nbsp;
                    </div>
                </div>
                <div class="doubleCheckContainer">
                    <div class="perfectContainer">
                        <form action="handler_createsession.php" method="post">
                            <div class="perfectBtn" id="perfectBtn" onclick="expandPin()">
                                <h4>Perfect</h4>
                                <br>
                                <div id="perfectForm">
                                    <label>Your room code is:</label><br>
                                    <div>CODE</div>
                                    <br>
                                    <div class="instructions">
                                        Tell your team to enter this code on the headset!
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="goBackContainer">
                        <div class="goBackBtn" id="goBackBtn" onclick="goBack()">
                            <h4>Go Back</h4>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </li>
	</ul>
</section>

<footer>&copy;Copyright 2019</footer>
<!-- partial -->
    <script src="js/dropdown.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='js/script.js'></script>
    <script src='https://static.tumblr.com/maopbtg/oimmiw86r/jquery.autosize-min.js'></script>
</body>
</html>