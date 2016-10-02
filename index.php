<!--
	Copyright (C) 2016 Rumesh Sudhaharan
	
	This file is part of Lightswitch.
	
	Lightswitch is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.
	
	Lightswitch is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
	
	You should have received a copy of the GNU General Public License
	along with Lightswitch.  If not, see <http://www.gnu.org/licenses/>.
-->
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Lightswitch</title>
	</head>
	<body>
		<?php
			$connection = ssh2_connect('localhost', 22);
			ssh2_auth_password($connection, 'pi', 'raspberry');

			if ($_GET['light_toggle']) {
				ssh2_exec($connection, 'gpioled');
			}
			if ($_GET['shutdown']) {
				ssh2_exec($connection, 'sudo shutdown -h now');
			}
		?>
			<a style="color:white;" href="?light_toggle=true">
				<button style="background:blue; width:200px; height:200px;">PRESS to toggle</button>
			</a>
			<a href="?shutdown=true">SHUTDOWN</a>

	</body>
