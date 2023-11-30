//<?php
//require_once("dbconnect.php");
//session_start();
//$username = $_SESSION["username"];

//$sql = "SELECT * FROM user_info WHERE username ='$username'";
//$query = mysqli_query($conn, $sql);
//$result = mysqli_fetch_array($query);
//?>
<!-- CHANGE: Commented the php Part -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="<?php echo e(asset('css/UserProfileStyles.css')); ?>">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container light-style flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-4">
            User Profile
        </h4>
        
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="#account-general">General</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#food-info">Food Info</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#cupon-info">Cupon Info</a>                        
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">
                            <div class="card-body media align-items-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt
                                    class="d-block ui-w-80">
                                <div class="media-body ml-4">
                                    <label class="btn btn-outline-primary">
                                        Upload new photo
                                        <input type="file" class="account-settings-fileinput">
                                    </label> &nbsp;
                                    
                                </div>                                                                
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Username</label>
                                    <p type="text" class="form-control mb-1" >
                                        <?php// echo $result["username"]?></p>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <p type="text" class="form-control">
                                        <?//php echo $result["name"]?></p>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">E-mail</label>
                                    <p type="text" class="form-control mb-1" >
                                        <?//php echo $result["email"]?></p>                                   
                                </div> 
                                <div class="form-group">
                                    <label class="form-label">Address</Address></label>
                                    <p type="text" class="form-control">
                                        <?//php echo $result["address"]?>a</p>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Phone</label>
                                    <p type="text" class="form-control">
                                        <?//php echo $result["phone"]?></p>
                                </div>  
                                                              
                            </div>
                        </div>
                            
                            
                            <hr class="border-light m-0">
                            <div class="tab-pane fade" id="food-info">
                                <div class="card-body pb-2">
                                    
                                    <div class="form-group">
                                        <label class="form-label">Times of Donation</label>
                                        <p type="text" class="form-control">5</p>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Amount of Food Donated</label>
                                        <p type="text" class="form-control">4kg</p>
                                    </div>  
                                    <div class="form-group">
                                        <label class="form-label">Times of Orders</label>
                                        <p type="text" class="form-control">14</p>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Amount of Food Ordered</label>
                                        <p type="text" class="form-control">18Kg</p>
                                    </div>  
                                </div>                 
                            </div>
                            <hr class="border-light m-0">
                            <div class="tab-pane fade" id="cupon-info">
                                <div class="card-body pb-2">
                                    
                                    <div class="form-group">
                                        <label class="form-label">Cupon Code</label>
                                        <p type="text" class="form-control">ACTIVEUSER</p>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Cupon Remaining</label>
                                        <p type="text" class="form-control">2</p>
                                    </div>                                       
                                </div>                 
                            </div>                                                                                     
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">

    </script>
</body>

</html><?php /**PATH D:\BRACU\Current Semester\CSE470\Project\ShareAndCare\resources\views/UserProfile.blade.php ENDPATH**/ ?>