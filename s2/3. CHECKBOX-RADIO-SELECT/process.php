<?php require_once "templates/header.php"; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $province = $_POST['province'];
    $gender = $_POST['gender'];
}
?>

<div class="card mb-3">
    <div class="card-header">Province</div>
    <div class="card-body">
        <h2 class="display-3"><?php echo $province; ?></h2>
    </div>
</div>
<div class="card mb-3">
    <div class="card-header">Gender</div>
    <div class="card-body">
        
        <?php if ($gender == 'Male'): ?>
            <img src="images/male.png" alt="Male Image">
        <?php elseif ($gender == 'Female'): ?>
            <img src="images/female.png" alt="Female Image">
        <?php endif; ?>
    </div>
</div>
    <div class="card">
        <div class="card-header">Subject</div>
        <div class="card-body" >
            
                <?php if (isset($_POST['HTML'])) { ?>
                        <button class="btn btn-primary" > <?php  echo $_POST['HTML']; ?> </button>

                <?php   }?>

                <?php if (isset($_POST['CSS'])) { ?>
                        <button class="btn btn-primary"> <?php  echo $_POST['CSS']; ?> </button>

                <?php   }?>

                <?php if (isset($_POST['JavaScript'])) { ?>
                        <button class="btn btn-primary"> <?php  echo $_POST['JavaScript']; ?> </button>

                <?php   }?>

                <?php if (isset($_POST['PHP'])) { ?>
                        <button class="btn btn-primary"> <?php  echo $_POST['PHP']; ?> </button>

                <?php   }?>
                   
                
           
            
        </div>
    </div>



<?php require_once "templates/footer.php"; ?>