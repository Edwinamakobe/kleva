<form action="pesapal-iframe.php" method="post">
	<table>
		<tr>
			<td>Amount:</td>
			<td><input type="text" name="amount" value="100" />
			(in Kshs)
			</td>
		</tr>
		<tr>
			<td>Type:</td>
			<td><input type="text" name="type" value="MERCHANT" readonly="readonly" />
			(do not edit this - MERCHANT)
			</td>
		</tr>
		<tr>
			<td>Description:</td>
			<td><input type="text" name="description" value="brief description" /></td>
		</tr>
		<tr>
			<td>Reference:</td>
			<td><input type="text" name="reference" value="00190" />
			(you may change the id ID )
			</td>
		</tr>
		<tr>
			<td>Your First Name:</td>
			<td><input type="text" name="first_name" value="John" /></td>
		</tr>
		<tr>
			<td>Your Last Name:</td>
			<td><input type="text" name="last_name" value="Doe" /></td>
		</tr>
		<tr>
			<td>Email Address:</td>
			<td><input type="text" name="email" value="edwinamakobe10@gmail.com" /></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="Pay Now" /></td>
		</tr>
	</table>
</form>