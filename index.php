<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./css/stye.css">
	<script src="./script/script.js"></script>
</head>
<body>
	<h1>Welcome to PHP Learner</h1>
	<br>
	<form action="./server/Submit.php" method="post" enctype="multipart/form-data">
	<label for="uploader">Select a file to upload</label>
	<br>
	<br>
	<input type="file" name="uploadfile" id="uploadfile">
	<br>
	<br>
	<input type="submit" value="Send to DB">
	</form>

	<table>
		<thead>
			<tr>
				<th><p>Select</p></th>
				<th>
					<p>Id</p>
				</th>
				<th>
					<p>Name</p>
				</th>
				<th>
					<p>Email</p>
				</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="radio" name="selctedRow" id="selctedRow" value="1"></td>
				<td>1</td>
				<td>Dan </td>
				<td>alka@gsp.com</td>
			</tr>
			<tr>
				<td><input type="radio" name="selctedRow" id="selctedRow" value="2"></td>
				<td>2</td>
				<td>Dan </td>
				<td>kebap@gsp.com</td>
			</tr>
			<tr>
				<td><input type="radio" name="selctedRow" id="selctedRow" value="3"></td>
				<td>3</td>
				<td>Dan </td>
				<td>balena@gsp.com</td>
			</tr>
		</tbody>
	</table>
</body>
</html>
