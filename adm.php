<head>
</head>
<body>
<?php 
 include 'main/config.php';
 $mysqli = new mysqli(serverConfig,userConfig,passwordConfig,bdConfig);
 ?>
	<div style="width:100%">
		<p> ������� ������������� 1 </p>
		 <table border=1> 
		    <tr>
				<td>  id  </td>  <td>  name  </td> <td>  Id ������������� </td> <td> ��� ������� </td>  <td> ������ </td>  
			</tr>
				<?php 
					$query = 'select * from users';
					 if ($res = $mysqli->query($query))
					 	while ($row = $res->fetch_assoc())
						{
							echo '<tr>';
							 echo '<td>';
							  echo  $row['Id'];
							 echo '</td>';
							 
							 echo '<td>';
							  echo  $row['Login'];
							 echo '</td>';

							 echo '<td>';
							  echo  $row['ParentId'];
							 echo '</td>';			

							 echo '<td>';
							  switch ($row['Premium'])
							  {
								  case 0: echo '�� ������������� ������';
								  case 1: echo '������� ������';
								  case 2: echo 'Premium ������';
 								  case 3: echo 'V.I.P ������';
							  }
							 echo '</td>';

							 echo '<td>';
							  echo  $row['Bonus'];
							 echo '</td>';			
							 
							echo '</tr>';
						}
						$mysqli->close();
				?>
		</table>
	<div>
	
</body>