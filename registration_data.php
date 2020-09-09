<!DOCTYPE html>
<html>
<head>
   <title>Data</title>
   <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
   <link rel="stylesheet" type="text/css" href="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
</head>
<body>


<div class="container">
  <h2>Registered Data</h2>
  <table id="my-example">
    <thead>
      <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Email</th>
          <th>Number</th>
          <th>DanceForm</th>
          <th>Date</th>
      </tr>
    </thead>
  </table>
</div>


</body>


<script type="text/javascript">
  $(document).ready(function() {
      $('#my-example').dataTable({
        "bProcessing": true,
        "sAjaxSource": "pro.php",
        "aoColumns": [
              { mData: 'id' } ,
              { mData: 'name' },
              { mData: 'email' },
              { mData: 'phone' },
              { mData: 'danceform' },
              { mData: 'date' }
            ]
      });  
  });
</script>
</html>