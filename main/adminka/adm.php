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
				 <td> Всего рефералов  </td> <td> Ссылка на приглашение </td>
			</tr>
				<?php 
					$query = 'select * from users';
					 if ($res = $mysqli->query($query))
					 	while ($row = $res->fetch_assoc())
						{
							 $idz = $row['Id'];
							  if ($idz == 1) {$row['Bonus'] = 'xxx'; $row['Premium'] = 'null'; $row['ParentId'] = 'null';  }
							echo '<tr>';
							 echo '<td>';
							 
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
								  case 0: echo 'Не подтвержденый акаунт'; break;
								  case 1: echo 'Простой акаунт'; break;
								  case 2: echo 'Premium акаунт'; break; 
 								  case 3: echo 'V.I.P акаунт'; break;
							  }
							 echo '</td>';

							 echo '<td>';
							  echo  $row['Bonus'];
							 echo '</td>';			
							 
							 echo '<td>';
							   if ($idz > 1 ) {
							                  $us = $msq2->isUserId($idz);
 							   				  $kl = $us->getCountReferal($msq2);
 							   					echo $kl;		
 							   				  } else echo 'xxx'	;
							 echo '</td>';			
							 
							 echo '<td>';
							   if ($idz > 1 ) {
							                  $s = 'http://12shara.ru/register.php?ida='.$idz; 
 							   				  	echo '<a href = \''.$s.'\'> cссылка </a>';		
 							   				  } else echo 'xxx'	;
							 echo '</td>';			

							echo '</tr>';
						}
						


						$mysqli->close();
				?>
		</table>
	<div>
	
</body>