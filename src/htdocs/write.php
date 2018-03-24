<?php
	require('config/config.php');
	require('lib/db.php');
	$conn = db_init($config['host'], $config['duser'], $config['dpw'], $config['dname']);
	$result = mysqli_query($conn, 'select * from topic');
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<!--bootstrap-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--bootstrap-->
	<link rel="stylesheet" type="text/css" href="http://localhost/style.css">
	<!--bootstrap-->
	<link href="http://localhost/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
	<!--bootstrap-->
</head>
<body id='background'>
	<div class="container">
		<header class="jumbotron text-center">
			<img src="https://s3.ap-northeast-2.amazonaws.com/opentutorials-user-file/course/94.png" alt="생활코딩" class="img-circle" id="logo">
			<h1><a href="http://localhost/index.php">JavaScript</a></h1>
		</header>
		<div class="row">
			<nav class="col-md-3">
				<ol class="nav nav-pills nav-stacked">
					<?php
					 	while($row = mysqli_fetch_assoc($result)){ // 첫번째 행의 데이터만 받아서 연관배열 형태로 반환한다
							echo '<li><a href = "http://localhost/index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>'."\n";
						}
		 			?>
				</ol>
			</nav>
			<div class="col-md-9">
				<article>
					<form action="process.php" method="post">
						<div class="form-group">
							<label for="form-title">제목</label>
							<input type="text" class="form-control" name="title" id="form-title" placeholder="제목을 입력하세요">
						</div>
						<div class="form-group">
							<label for="form-author">작성자</label>
							<input type="text" class="form-control" name="author" id="form-author" placeholder="작성자를 입력하세요">
						</div>
						<div class="form-group">
							<label for="form-description">본문</label>
							<textarea rows="10" class="form-control" name="description" id="form-description" placeholder="본문을 적어주세요"></textarea>
						</div>
						<input type="submit" name="name" class="btn btn-default btn-lg">
					</form>
				</article>
				<hr>
				<div id="control" class="pull-right">
					<div class="btn-group">
						<input type="button" value="white" onclick="document.getElementById('background').className='white'" class="btn btn-default btn-lg"/>
						<input type="button" value="black" onclick="document.getElementById('background').className='black'" class="btn btn-default btn-lg"/>
					</div>
				<a href="http://localhost/write.php" class="btn btn-default btn btn-success btn-lg">쓰기</a>
				</div>
			</div>
		</div>
	</div>
	<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
	</script>
	<!--include all compiled plugins(below), or include individual files as needed-->
	<script src="http://localhost/bootstrap-3.3.4-dist/js/bootstrap.min.js">
	</script>
</body>
</html>
