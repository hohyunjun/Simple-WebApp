<?php
	$conn = mysqli_connect('localhost', 'root', 'wjsghgus');
	mysqli_select_db($conn, 'opentutorials');
	$result = mysqli_query($conn, 'select * from topic');
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="http://localhost/style.css">
</head>
<body id='background'>
	<header>
    <img src="https://s3.ap-northeast-2.amazonaws.com/opentutorials-user-file/course/94.png" alt="생활코딩">
		<h1><a href="http://localhost/practice/index.php">JavaScript</a></h1>
	</header>
	<nav>
		<ol>
			<?php
				while($row=mysqli_fetch_assoc($result)){
					echo '<li><a href = "http://localhost/Practice/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>';
				}
			 ?>
		</ol>
	</nav>
	<div id="control">
	<input type="button" value="white" onclick="document.getElementById('background').className='white'"/>
	<input type="button" value="black" onclick="document.getElementById('background').className='black'"/>
	<a href="http://localhost/Practice/write.php">쓰기</a>
	</div>
  <article>
		<?php
			if(empty($_GET['id'])==false){
				$result = mysqli_query($conn, 'select * from topic where id='.$_GET['id']);
				$row = mysqli_fetch_assoc($result);
				echo '<h2>'.$row['title'].'</h2>';
				echo $row['description'];
			}
		 ?>
  </article>
</body>
</html>
