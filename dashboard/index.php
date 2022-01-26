<?php 
$pagetitle = "Dashboard";
$username = "Ayobami";
$referralcode = "INE6G7D9LX";
?>
<?php include '../inc/head.php';?>
<?php 
include '../inc/dashboard/navbar.php';
?>
<section class="container">
    <div class="row mt-3">
        <div class="col-md-6"><p class="mt">Welcome <?php echo $username;?>.</p></div>
        <div class="col-md-6">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Your Referral Code is </span>
                <input type="text" class="form-control" Value="<?php echo $referralcode;?>" aria-label="Username" aria-describedby="addon-wrapping" disabled/>
            </div>
        </div>
        
    </div>
    
</section>
<hr class="my-5">
<?php include '../inc/dashboard/footer.php';?>