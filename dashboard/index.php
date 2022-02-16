<?php 
$pagetitle = "Dashboard";
$username = "Ayobami";
$referralcode = "INE6G7D9LX";
?>
<?php include '../inc/head.php';?>
<?php 
include '../inc/dashboard/navbar.php';
?>
<section class="" id="referral-code">
    <div class="container">
        <div class="row py-3">
            <div class="col-md-6"><p class="">Welcome <?php echo $username;?>.</p></div>
            <div class="col-md-6">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text bg-light" id="addon-wrapping">Your Referral Code is </span>
                    <input type="text" class="form-control" Value="<?php echo $referralcode;?>" aria-label="Username" aria-describedby="addon-wrapping" disabled/>
                </div>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-lg-3 col-md-6 col-sm-12 p-3">
                <div class="card text-white bg-primary text-center">
                    <div class="card-header">Featured</div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-outline-light" data-mdb-ripple-color="dark">Button</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 p-3">
                <div class="card text-white bg-primary text-center">
                        <div class="card-header">Featured</div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-outline-light" data-mdb-ripple-color="dark">Button</a>
                        </div>
                    </div>
                </div>
            <div class="col-lg-3 col-md-6 col-sm-12 p-3">
                <div class="card text-white bg-primary text-center">
                        <div class="card-header">Featured</div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-outline-light" data-mdb-ripple-color="dark">Button</a>
                        </div>
                    </div>
                </div>
            <div class="col-lg-3 col-md-6 col-sm-12 p-3">
                <div class="card text-white bg-primary text-center">
                        <div class="card-header">Featured</div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-outline-light" data-mdb-ripple-color="dark">Button</a>
                        </div>
                    </div>
                </div>
        </div>
        <div class="row py-3">
            <div class="col-md-6 px-2"></div>
            <div class="col-md-6 px-2"></div>
        </div>
    </div> 
</section>
<!-- <hr class="my-5"> -->
<section class="bg-primary" id="metrics">
    <div class="container">
        
    </div>
</section>
<hr class="my-5">
<?php include '../inc/dashboard/settings.php';?>
<?php include '../inc/dashboard/footer.php';?>