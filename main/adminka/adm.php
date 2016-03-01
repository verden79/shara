<head>
</head>
<body>
<?php 
 include '../lib.php';

 $mysqli = new mysqli(serverConfig,userConfig,passwordConfig,bdConfig);
 $msq2 = new BaseUsers();

 ?>
	<div style="width:100%">
		<p> “аблица пользователей 1 </p>
		 <table border=1> 
		    <tr>
				<td>  id  </td>  <td>  name  </td> <td>  Id пригласившего </td> <td> тип акаунта </td>  <td> бонусы </td> 
				 <td> Всего рефералов  </td> 
			</tr>
				<?php 
					$query = 'select * from users';
					 if ($res = $mysqli->query($query))
					 	while ($row = $res->fetch_assoc())
						{
							echo '<tr>';
							 echo '<td>';
							  $idz = $row['Id'];
							  echo  $idz;
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
								  case 0: echo 'Не подтвержденый акаунт';
								  case 1: echo 'Простой акаунт';
								  case 2: echo 'Premium акаунт';
 								  case 3: echo 'V.I.P акаунт';
							  }
							 echo '</td>';

							 echo '<td>';
							  echo  $row['Bonus'];
							 echo '</td>';			
							 
							 echo '<td>';
							   $us = $msq2->isUserId($idz);
 							   $kl = $us->getCountReferal($msq2);
 							   echo $kl;		
							 echo '</td>';			
							 
							echo '</tr>';
						}
						


						$mysqli->close();
				?>
		</table>
	<div>
	
</body>