<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | Visual Upload</title>
    <!-- Le styles -->
    <link href="assets/css/vuStyle.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
</head>
<style>
body{
	font-family: "Myriad Pro", Helvetica, Arial, sans-serif;
	
}
	.container{
		margin-top:3em;
		
		
	}
	.content{
		padding:1.2em;
	}
	.content-top{
		margin-left:10px;
		margin-right:10px;
	}
	.top{
		border-top: 1px solid #CDCDCD;
		border-right: 1px solid #CDCDCD;
		border-left: 1px solid #CDCDCD;
		background:#000;
		color:white;
	}
	.bottom{
		border: 1px solid #CDCDCD;
		background-color:white;
	}
</style>
<body>
	<div class="container well">
		<div class="logo"><img src=""></div>
		<div class="row-fluid top">
			<div class="span12">
        		<div class="content-top">
        				<div class="span6"> <h4>Welcome to Visual Upload</h4></div>
        				<div class="span6"> <h5 align="right">help</h5></div>
        		</div>
        	</div>
		</div>
        	<div class="row-fluid bottom">
            	<div class="span12">
                	<div class="span6">
                    	<div class="area">
                    		<div class="content">
                            <form class="form-horizontal">
                                <div class="heading">
                                    <h4 class="form-heading">Sign In</h4>
                                </div>
                               
                                <div class="control-group">
                                    <label class="control-label" for="inputUsername">Email</label>
                                    <div class="controls">
                                        <input type="text" id="inputUsername" placeholder="E.g. sean@domain.com">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Password</label>
                                    <div class="controls">
                                        <input type="password" id="inputPassword" placeholder="Min. 8 Characters">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <label class="checkbox">
                                            <input type="checkbox"> Keep me signed in   ¦
                                            <a href="#" class="btn btn-link">Forgot my password</a>
                                        </label>
                                        <button type="submit" class="btn btn-success">Sign In</button>
                                        <button type="button" class="btn">Help</button>
                                    </div>
                                </div>	
                                <!--<div class="alert alert-error">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>Access Denied!</strong> Please provide valid authorization.
                                </div>-->
                            </form>
                           </div> 	
						</div>                           
                    </div>
                    <div class="span6">
                    	<div class="area">
                            <div class="content">
                                <div class="heading">
                                    <h4 class="form-heading">Sign Up</h4>
                                </div>
                               <p>Get better prices, turnaround time, delivery and more.<br />
                               	 Please read the following requrements:</p>
                               <ul id="required">
					<li> Resseller Certificate as a proof of business.</li>
					<li>Proof you are in the Printing Business Trade.</li>
					<li>Physical address is required. Do not use P.O. BOX</li>
					<li>Valid company email for all correspondence.</li>
				</ul>
	            <button type="submit" class="btn btn-success">Sign Up</button>

                               
                            </div>
						</div>                            
                    </div>
                </div>
            	
            </div>
        </div>

</body>
 <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script type="text/javascript">
		$(document).ready(function() {
			$('#myCarousel').carousel({
			interval: 10000
			})
		});
	</script>
</html>
