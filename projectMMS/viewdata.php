<?php 

    include 'config.php';
   include 'menu.php';

    
    $query = "select * from user_form";
    $result = mysqli_query($conn,$query);

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>View Records</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row mt-5">
                <div class="col ">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h2 class="display-6 text center">Client Data</h2>
                        </div>
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <td> User ID </td>
                                <td> User Name </td>
                                <td> User Email </td>
                                <td> Image </td>
                                
                                <td> Delete </td>
                            </tr>

                             <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $id = $row['id'];
                                        $name = $row['name'];
                                        $email = $row['email'];
                                        $image = $row['image'];
                            ?>
                                    <tr>
                                        <td><?php echo $id ?></td>
                                        <td><?php echo $name ?></td>
                                        <td><?php echo $email ?></td>
                                        <td><?php $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }else{
            $img = $fetch['image'];
            echo "<img src='uploaded_img/$img' width='100px' height='100px'></td>";}?>
                                        
                                       
                                        <
                                        <td><a href="delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a></td> 
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                    

                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>