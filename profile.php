
<?php

    include('config.php');  
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmnt = $conn->prepare("SELECT * FROM tbl_msg");
    $stmnt->execute();
    $records = $stmnt->fetchAll();
?>

<html lang="en">
<head>
<!-- Force latest IE rendering engine or ChromeFrame if installed -->
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<![endif]-->
<meta charset="utf-8">
<title>Staff Communicator</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap styles -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<!-- Generic page styles -->
<link rel="stylesheet" href="css/style.css">
<!-- blueimp Gallery styles -->

<!-- CSS adjustments for browsers with JavaScript disabled -->
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Staff Communicator</a>
    </div>
  </div>
</nav>
<div class="container">
    <h2 class="lead">Post Message</h2>
            
    <div class="row">
        <div class="col-sm-12">
        	<table class="table table-striped table-bordered">
                    <tr>
                        <th>title</th>
                        <th>description</th>
                                           
                    </tr>
                    <?php

                    foreach ($records as $record) {
                        # code...
                        $title=$record['title'];
                        $description=$record['description'];
                        //$Remark=$record['Remark'];
                        
                    echo "
                    <tr>
                        <td>$title</td>
                        <td>$description</td>                  
                                             
                    </tr>";
                }
                    ?>
                </table>
      	</div>
    </div>

</body>
</html>