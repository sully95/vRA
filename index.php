<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Employees Details</h2>
                        <a href="create.php" class="btn btn-success pull-right">Add New Employee</a>
                    </div>
         
  <table id="customers">
  <tr>
    <th>Employee</th>
    <th>Phone</th>
    <th>Specialization</th>
  </tr>
  <tr>
    <td>Alex Sullivan</td>
    <td>703-889-9776</td>
    <td>vRealize and VMC on AWS</td>
  </tr>
  <tr>
    <td>Ethan Palmer</td>
    <td>703-230-7542</td>
    <td>NSX and HCI (vSAN)</td>
  </tr>
  <tr>
    <td>Nick Wager</td>
    <td>703-581-6615</td>
    <td>Horizon and WorkspaceONE</td>
  </tr>
  <tr>
    <td>John Sneed</td>
    <td>703-921-4192</td>
    <td>AWS Native and VMC on AWS</td>
  </tr>
  
</table>

</body>                  

   
</body>
</html>
