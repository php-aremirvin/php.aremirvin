<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Navigation Bar</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        
  </style>
</head>
<body>
    
<!-- navigation div -->
<nav class="navbar navbar-expand-lg navbar-light bg-light m-3 p-3 shadow">

    <div class="navbar-brand ">PHILTRUST BANK BULACAN LIST OF EMPLOYEES</div>

    <!-- hamburger toggler icon -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    
    <!-- hamburger icon navigation lists  -->
    <div class="collapse navbar-collapse" id="navbarNav">

    <!-- navigation lists -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" name = "users" data-toggle="modal" data-target="#usersModal">Employees</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">Log-out</a>
      </li>
    </ul>
    </div>
</nav>

 <!-- array declaration for table contents -->
<?php
    $employees = array(
        array("Name" => "Apolonio Dorupa", "Position" => "Manager", "Salary" => "100,000"),
        array("Name" => "Herson Chua", "Position" => "Assistant Cashier", "Salary" => "P80,000"),
        array("Name" => "Minnie Marteja", "Position" => "Senior Accounts Officer", "Salary" => "P75,000"),
        array("Name" => "Jonalin Antillon", "Position" => "Scale 10", "Salary" => "P60,000"),
        array("Name" => "Tina Victolero", "Position" => "Scale 7", "Salary" => "P50,000"),
        array("Name" => "Pamela Amor Balasabas", "Position" => "Scale 10", "Salary" => "P55,000"),
        array("Name" => "Rina Avigail Alejaga", "Position" => "Scale 7", "Salary" => "P35,000"),
        array("Name" => "John Kristofer Pasos", "Position" => "Scale 6", "Salary" => "P30,000"),
        array("Name" => "AREM IRVIN NICDAO", "Position" => "DEVELOPER", "Salary" => "P40,000"),
        );
?>

 <!-- displaying of table contents -->        
<div class = "m-3 p-3 border-start border-secondary border-5">
<h5>Employee Information</h5>
</div>
    
<table class="table table-hover table-light">
    <thead>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Salary</th>
        </tr>   
    </thead>
    <tbody>
        <?php foreach ($employees as $employee): ?>
            <tr>
                <td><?php echo $employee['Name']; ?></td>
                <td><?php echo $employee['Position']; ?></td>
                <td><?php echo $employee['Salary']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


 <!-- logout modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="logoutModalLabel">Logout Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to log out?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a href="logout.html" class="btn btn-primary">Logout</a>
      </div>
    </div>
  </div>
</div>
        
 <!-- users modal -->
<div class="modal fade" id="usersModal" tabindex="-1" role="dialog" aria-labelledby="usersModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="usersModalLabel"><table class="table table-hover table-light">
        <table class="table table-hover table-light">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Salary</th>
                </tr>   
            </thead>
                <tbody>
                <?php foreach ($employees as $employee): ?>
                    <tr>
                        <td><?php echo $employee['Name']; ?></td>
                        <td><?php echo $employee['Position']; ?></td>
                        <td><?php echo $employee['Salary']; ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
        </table></h5>

        <!-- close (x) button for table modal -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>