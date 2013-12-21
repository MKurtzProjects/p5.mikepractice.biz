

<!DOCTYPE html>
<html>
<head>
	<title>Share Stuff</title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	
	<!-- Common CSS/JSS -->
    <link rel="stylesheet" href="/css/master_style.css" type="text/css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
      <style>
  .ui-menu { width: 150px; }
  </style>
    <script>
  $(function() {
    $( "#menu" ).menu();
  });
  </script>
	
</head>

<body>  

    <div id='head'>

        <div id='menu'>
            <a id="logo" href='/'> <img src="/images/logo.png" alt=""></a></p>



            <!-- Menu for users who are logged in -->
            <?php if($user): ?>
                
                <ul>
                    <li><a href='/users/logout'>Logout</a></li>
                </ul>

            <!-- Menu options for users who are not logged in -->
            
            <?php else: ?>
                <ul>
                    <li><a href='/users/signup'>Sign up</a></li>
                    <li><a href='/index/index/'>Log in</a></li>
                </ul>
            <?php endif; ?>
        </div> 

    </div>

    <div id="container">

                <ul id="menu">
          <li><a href="/problems/percent">Percent</a></li>
          <li><a href="#">Rate</a></li>
          <li><a href="#">Consecutive Integers</a></li>
        </ul>

    <div id="content">

        <br>

	   <?php if(isset($content)) echo $content; ?>

	   <?php if(isset($client_files_body)) echo $client_files_body; ?>
    </div>

    </div>

</body>

</html>