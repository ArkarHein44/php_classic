<?Php

ini_set('display_errors',1);


require_once('dbconnect.php');
require_once('sessionconfig.php');

if(authfailed()){
    redirectto('signin.php');
}

try{
    $conn = $GLOBALS['conn'];
    $stmt = $conn->prepare("SELECT id,profile,firstname,lastname,email,dob,phone,address FROM users");

    $stmt->execute();

    // formatprint($stmt->fetchAll());


}catch(PDOException $e){
    echo "Error Found : ".$e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User List</title>
</head>
<body>
    

    <div class="container">

        <a href="javascript:void(0);" class="">Create User</a>
        <table class="">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Birthday</th>
                <th>Phone</th>
                <th>Address</th>
            </thead>
            <tbody>
                <?php while($row = $stmt->fetch()): ?>
                    <tr>
                        <td><?php echo "{$row['id']}"; ?></td>
                        <td>
                            <img src='<?= "echo {$row['profile']}" ?>' alt="" style="width:25px; height:25px;border-radius:50%;"/>
                            <?php echo "{$row['firstname']} {$row['lastname']}"; ?>
                        </td>
                        <td><?= "{$row['email']}" ?></td>
                        <td><?= "{$row['dob']}" ?></td>
                        <td><?= "{$row['phone']}" ?></td>
                        <td><?= "{$row['address']}" ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>
</body>
</html>