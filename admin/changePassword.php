<?php require_once "../php_include/db_connection.php"; ?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8">
		<title>Change Password</title>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />
	</head>
	<body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">Change Password</div>
			<form action="eventHandler.php" method="post">
                <div class="body bg-gray">
                	<?php //error div
                	if(isset($_REQUEST['success']) && isset($_REQUEST['msg']) && $_REQUEST['msg']){ ?>
                		<div style="margin:0px 0px 10px 0px;" class="alert alert-<?php if($_REQUEST['success']) echo "success"; else echo "danger"; ?> alert-dismissable">
			            	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			            	<?php echo $_REQUEST['msg']; ?>
			            </div>
			        <?php } // --./ error -- ?>
			        
		     <div class="form-group">
                        <input type="password" name="oldpass" class="form-control" placeholder="Old Password" required/>
					</div>
					
                    <div class="form-group">
                        <input type="password" name="newpass" class="form-control" placeholder="New Password" required/>
					</div>
                    <div class="form-group">
                        <input type="password" name="confirm" class="form-control" placeholder="Confirm Password" required/>
                    </div>          
                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-olive btn-block" onclick="return 0;">Ok</button>
                    <input type="button" class="btn bg-red btn-block" onclick="window.history.back()" value="Cancel">
                </div>
                <!-- hidden -->
                <input type="hidden" name="event" value="change-password">
                <input type="hidden" name="redirect" value="index.php">
            </form>
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>        

    </body>
</html>