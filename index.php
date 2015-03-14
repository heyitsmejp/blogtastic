<?php
        require("header.php");
        try {
        $sql = "SELECT entries.*, categories.cat from entries, categories"
                . " WHERE entries.cat_id = categories.id"
                . " ORDER BY dateposted DESC";
        $query = $connection->query($sql);
        $query->setFetchMode(PDO::FETCH_ASSOC);
        }
        catch (PDOException $exception){
            die("Could not connect. " . $exception->getMessage());
        }
        
       
?>

<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div id="container">
 <table>
 <tbody>
 <?php while ($row = $query->fetch()): ?>
 <tr><td><h1><?php echo htmlspecialchars($row['subject'])?></h1></td></tr>
 <tr><td><i>Posted: <?php echo htmlspecialchars($row['dateposted']); ?></i><td></tr>
 <tr><td><?php echo htmlspecialchars($row['body']); ?></td></tr> 
     
 
 <?php endwhile; ?>
 </tbody>
 </table>
</body>
</div>
</html>
<?php require("footer.php")?>
