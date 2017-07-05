<?php
 //peo
  $user = $_GET['u'];
?>

<html>
<head>
	<title>Chatter</title>
	<link rel='stylesheet' type='text/css' href='style.css'/>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'/>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"> </script>
	<script src="Chat.js"> </script>
</head>
<body>

<div class='chatContainer'>
	
	<div class='chatMessages'></div>
	<div class='chatBottom'>
		<form action='#' onSubmit='return false;' id='chatForm'>
			<input type='hidden' id='name' value='<?php echo $user; ?>'/>
			<input type='text' name='text' id='text' value='' placeholder='...?' />
			<input type='submit' name='submit' value='Post' />
		</form>
	</div>
</div>
</body>
</html>




