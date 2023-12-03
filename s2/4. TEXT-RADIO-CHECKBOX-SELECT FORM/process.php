<?php require_once 'templates/header.php'; ?>

<table class="table table-striped table-bordered">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Number</th>
        <th>Message</th>
        <th>Provinces</th>
        <th>Subject</th>
        <th>Gender</th>
    </tr>
    <?php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $number = $_POST['number'];
        $message = $_POST['message'];
        $province = $_POST['province'];
        $gender = $_POST['gender'];
    ?>
    <tr>
        <td><?php echo $name; ?></td>
        <td><?php echo $email; ?></td>
        <td><?php echo $password; ?></td>
        <td><?php echo $number; ?></td>
        <td><?php echo $message; ?></td>
        <td><?php echo $province; ?></td>
        <td>
            <?php 
            if (isset($_POST['HTML'])) { 
                echo $_POST['HTML'];
            }
            if (isset($_POST['CSS'])) { 
                echo $_POST['CSS'];
            }
            if (isset($_POST['JavaScript'])) { 
                echo $_POST['JavaScript'];
            }
            if (isset($_POST['PHP'])) { 
                echo $_POST['PHP'];
            }
            ?>
        </td>
        <td><?php echo $gender; ?></td>
    </tr>
</table>

<?php require_once 'templates/footer.php'; ?>