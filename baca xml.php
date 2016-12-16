<!DOCTYPE html>
<html>
	<head>
		<title>
			baca data xml dari data faisal
		</title>
	</head>
	<body bgcolor=silver>
		<div id="demo"></div>
		</body>
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script type="text/javascript">
			var source = "http://tugasuasawp2.esy.es/rubah%20ke%20XML%202.php";
			$.ajax({
				url : source,
				method : 'GET',
				success : function(xml){
				$("#demo").append("<table border='1'>");
				$("#demo table").append("<thead><tr><td>Username</td><td>Password</td><td>Log Name</td><td>No. HP</td><td>Alamat</td><td>Tanggal Lahir</td></tr></thead><tbody></tbody>");
				$(xml).find('user_login').each(function(i){
					var row = $(this);
					$("#demo table tbody").append(
						"<tr><td>" + row.find('username').text() + "</td>"+
						"<td> " + row.find('password').text()  + "</td>"+
						"<td> " + row.find('log_name').text()  + "</td>"+
						"<td> " + row.find('no_hp').text()  + "</td>"+
						"<td> " + row.find('alamat').text()  + "</td>"+
						"<td> " + row.find('tgl_lahir').text()  + "</td></tr>" 
					);
				});
				$("#demo").append("</table>");
				},
				error : function(data){
					alert(data);
				}
				
			});
		</script>
</html>