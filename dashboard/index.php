<?php 
$pagetitle = "Dashboard";
$username = "Ayobami";
$referralcode = "INE6G7D9LX";
?>
<?php include '../inc/head.php';?>
<?php 
include '../inc/dashboard/navbar.php';
?>
<section class="" id="metrics">
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
                    <div class="card-header">Registration Amount</div>
                    <div class="card-body">
                        <h2 class="card-title">₦1,000</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 p-3">
                <div class="card text-white bg-primary text-center">
                    <div class="card-header">Lifetime Balance</div>
                    <div class="card-body">
                        <h2 class="card-title">₦500,000</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 p-3">
                <div class="card text-white bg-primary text-center">
                    <div class="card-header">Withdrawn Balance</div>
                    <div class="card-body">
                        <h2 class="card-title">₦450,000</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 p-3">
                <div class="card text-white bg-primary text-center">
                    <div class="card-header">Current Balance</div>
                    <div class="card-body">
                        <h2 class="card-title">₦50,000</h2>
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
<section class="bg-primary" id="referrals">
    <div class="container">
        <h4 class="text-center text-light pt-5">
            Referrals
        </h4>
        <div class="row py-3">
            <div class="col-lg-3 col-md-6 col-sm-12 p-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Total Referrals</h5>
                        <h2 class="card-text">500</h2>
                    </div>
                    <div class="card-footer text-muted">
                        <strong>Total Bonus: </strong>
                        <span> ₦500,000</span></div> 
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 p-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Level 1 Referrals</h5>
                        <h2 class="card-text">5</h2>
                    </div>
                    <div class="card-footer text-muted">
                        <strong>Level 1 Bonus: </strong>
                        <span> ₦3,000</span></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 p-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Level 2 Referrals</h5>
                        <h2 class="card-text">10</h2>
                    </div>
                    <div class="card-footer text-muted">
                        <strong>Level 2 Bonus: </strong>
                        <span> ₦1,500</span></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 p-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Level 3 Referrals</h5>
                        <h2 class="card-text">20</h2>
                    </div>
                    <div class="card-footer text-muted">
                        <strong>Level 3 Bonus: </strong>
                        <span> ₦1,000</span></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <hr class="my-5"> -->
<?php include '../inc/dashboard/settings.php';?>
<?php include '../inc/dashboard/footer.php';?>