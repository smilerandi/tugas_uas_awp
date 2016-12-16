<!DOCTYPE html>
<html>
	<head>
		<title>
			baca data json dari data faisal 
		</title>
	</head>
	<body bgcolor=silver>
		<div id="demo"></div>
	</body>
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script type="text/javascript">
			var source = "http://tugasuasawp2.esy.es/Rubah%20ke%20json.php";
			$.getJSON(source, function(data){
				$("#demo").append("<table border='1'>");
				$("#demo table").append("<tr><td>Username</td><td>Password</td><td>Log Name</td><td>No. HP</td><td>Alamat</td><td>Tanggal Lahir</td></tr>");
				$.each(data, function(i,user){
					$("#demo table").append(
						"<tr><td>" + user.username + "</td>"+
						"<td> " + user.password + "</td>"+
						"<td> " + user.log_name + "</td>"+
						"<td> " + user.no_hp + "</td>"+
						"<td> " + user.alamat + "</td>"+
						"<td> " + user.tgl_lahir + "</td></tr>" 
					);
				});
				$("#demo").append("</table>");
			});
		</script>
</html>