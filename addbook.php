<?php
require 'include/dbconnection.php'
    
?>
<html>

<head>
    
	<title>Book Information</title>
    <link href="assets/css/reg.css" rel="stylesheet">

</head>

<body>
	<form action="connect.php" method="post">
	<h1>Library Database</h1>
	<fieldset>
		<legend>Book Information</legend>
		<label>Title:</label> <input type="text" name="Title" required/><br />
		<label>Pages:</label> <input type="number" min=1 name="Pages" required/><br />
		<label>Author:</label> <input type="text" name="Author" required/><br />
		<label>Published Year:</label> <input type="text" name="Publish_year" required/>
        <div><br/></div>
    <input style="float:right" type="submit" value="Add Book" onClick="return submit_form();" name="submit"/>
    </fieldset>
    <h3>List of Stored Books</h3>
    <table border="2" align="center" cellpadding=5>
            <thead>
                <tr><th>Title</th>
                    <th>Pages</th>
                    <th>Author</th>
                    <th>Published Year</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
               <?php
                              $table  = mysqli_query($dbconn , "SELECT * FROM add");
                              while($row  = mysqli_fetch_array($table)){ ?>
                                  <tr id="<?php echo $row['id']; ?>">
                                    <td data-target="title"><?php echo $row['Title']; ?></td>
                                    <td data-target="pages"><?php echo $row['Pages']; ?></td>
                                    <td data-target="author"><?php echo $row['Author']; ?></td>
                                      <td data-target="year"><?php echo $row['Publish_year']; ?></td>
                                    <td>
                
                                 <input type="submit" value="Update" />
                                        
                                     
                                      </td>
                                  </tr>
                             <?php }
                                

                           ?>
            </tbody>
        </table>
	</form>
    <script type="text/javascript" src="assets/js/jquery-1.10.2.js"></script>
	<script type="text/javascript">
		function submit_form(){
			alert("A new book has been successfully added!");
		}
	</script>
<?php 
    $dbconn->close();
?>
</body>
</html>