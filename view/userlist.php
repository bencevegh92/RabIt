<html>

<head>
	<link rel="stylesheet" href="/RabIt/resources/css/main.css">
</head>

<body>
	<div>
		<h1>User List</h1>

		<table>
			<tr>
				<th>Id</th>
				<th>Name</th>
			</tr>
			<?php
			foreach ($users as $title => $user) {
				echo '<tr><td>' . $user->id . '</td><td>' . $user->name . '</td></tr>';
			}
			?>
		</table>

	</div>
</body>

</html>