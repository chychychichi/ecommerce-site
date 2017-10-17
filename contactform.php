<html>
	<head>
		<title>HTML FORM ELEMENT</title>
		<link rel="stylesheet" href="style.css">
	</head>	
	<body>
		<form novalidate>
		
			<table class="table1">
				<tr>
				
					<td>Name</td>
					<td><input type="text" placeholder="insert your full name" required></td>
					
				</tr>
				<tr>
				
					<td>Email</td>
					<td><Input type="Email" placeholder="insert the email address"  required autofocus required></td>
					
				</tr>
				
				<tr>
					<td>Rate our site</td>
					<td><input type="number" min="0" max="10" placeholder="please rate our site"></td>
				</tr>
				
				
				
				<tr>
					<td>your birthday</td>
					<td><input type="date" min="1990-12-15" max="2015-12-15"></td>

				</tr>
				<tr>
					<td>your birthday<br>(with month)</td>
					<td><input type="month" min="1990-12-15" max="2015-12-15"></td>

				</tr>
				<tr>
					<td>your birthday<br>(with week)</td>
					<td><input type="week" min="1990-12-15" max="2015-12-15"></td>

				</tr>
				<tr>
					<td>your birthday<br>(with time)</td>
					<td><input type="time"></td>

				</tr>
				<tr>
					<td>your birthday<br>(with date time local)</td>
					<td><input type="datetime-local"></td>

				</tr>
				<tr>
					<td>Enter your web Address</td>
					<td><input type="url"></td>
				</tr>
				<tr>
					<td>search something</td>
					<td><input type="search"></td>

				</tr>
				<tr>
					<td>upload your image</td>
					<td><input type="file"></td>

				</tr>
				<tr>
					<td>upload your multiple files</td>
					<td><input type="file" multiple></td>

				</tr
				<tr>
					<td> select your country </td>
					<td>
						<select>
							<option>America</option>
							<option>Afghanista</option>
							<option>Africa</option>
							<option>Brazil</option>
						</select>
					</td>

				</tr>
				<tr>
					<td>select country with datalist tag</td>
					<td>
						<input list="country_list">
						<datalist id="country_list">
							<option>America</option>
							<option>Afghanista</option>
							<option>Africa</option>
							<option>Brazil</option>

						</datalist>
					</td>

				</tr>
				
				<tr>
					<td></td>
					<td><input type="submit"></td>
				</tr>	
			</table>
			<tr>
					<td> Rate our site ( with range input)</td>
					<td> <input type="range" min="0" max="10" value="2" step="4"> </td><br>
					<tr>
					<td> choose any color </td>
					<td> <input type="color"> </td>
			</tr>
			</tr>
		</form>
	</body>
</html>