<!doctype html>
<html lang="en">
	<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	</head>
	<body>
		
		<nav>
		
			<ul>
			
				<li><a href = "/about">About Page</a></li>
				<li><a href = "/contact">Contact Page</a></li>
				<li><a href = "/about/culture">Our Culture</a></li>
			
			</ul>
		
		</nav>
	
		
	
	
		<table>
			<tr>
				<th>Username</th>
				<th>Password</th>
				<th>Email</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Birthdate</th>
				<th>Gender</th>
				<th></th>
				<th></th>
			</tr>
			<?php foreach($query as $row):?>
			
				<tr>
					<td><?= $row->username;?></td>
					<td><?= $row->password;?></td>
					<td><?= $row->email;?></td>
					<td><?= $row->firstname;?></td>
					<td><?= $row->lastname;?></td>
					<td><?= $row->birthdate;?></td>
					<td><?= $row->gender;?></td>
					<td>
						<button name = "delete" id = "delete">
							Delete
						</button>
					</td>
					<td>
						<button name = "update" id = "update">
							Update
						</button>
						
					
				</tr>
			<?php endforeach;?>
		</table>
	
	</body>
</html>