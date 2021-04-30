<?php
$servername = "mysql.omega";
$username = "takacszoltan";
$password = "123456";
try {
    $conn = new PDO("mysql:host=$servername;dbname=takacszoltan;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
        if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["text"]))
        {
		$stmt2 = $conn->prepare("INSERT INTO kapcsolat(id,name,subject,email,text) VALUES('',:name,:subject,:email,:text)");
		$stmt2->bindParam("name", $_POST["name"], PDO::PARAM_STR);
		$stmt2->bindParam("subject", $_POST['subject'], PDO::PARAM_STR);
		$stmt2->bindParam("email", $_POST['email'], PDO::PARAM_STR);
		$stmt2->bindParam("text", $_POST['message'], PDO::PARAM_STR);
		$stmt2->execute();
        }?>
		
<?php
					$stmt = $conn->prepare("SELECT * FROM `kapcsolat` ORDER BY `kapcsolat`.`name` DESC");
                    $stmt->execute();
					$count =0;
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC))
                    {
                        echo ' 
						
						<table>
						<tr>
							<th class="short">Név</th>
							<th class="short">E-mail</th>
							<th class="long">Tárgy</th>
							<th class="long">Üzenet</th>
						</tr>
						<tr>
							<td class="short">'.$row['name'].'</td>
							<td class="short">'.$row['email'].'</td>
							<td class="long">'.$row['subject'].'</td>
							<td class="long">'.$row['text'].'</td>
							
						</tr>
						</table>
						';
                    }
?>		
</body>
</html>