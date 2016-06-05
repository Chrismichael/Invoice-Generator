


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Developer Invoice</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="js/respond.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script>
        function myMath() {

            var e = +(document.getElementById('hours').value);
            var f = parseFloat(document.getElementById('hourlyprice').value);
            var g = parseFloat(document.getElementById('tax').value);
            var subtotal= e * f;
            var taxdeduct= subtotal * g;
            var total = subtotal - taxdeduct;


            document.getElementById('hours').value = e;
            document.getElementById('hourlyprice').value = f;
            document.getElementById('tax').value = g;
            document.getElementById('total_input').value = total;

        }

     </script>
</head>

<body>



<div class="container">
    <div class="row">


            <form action="generate.php" enctype="multipart/form-data" method="post" class="form-horizontal">
                <fieldset>

                    <!-- Form Name -->
                    <legend>Developer Invoice</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textinput">Developer</label>
                        <div class="col-md-6">
                            <input id="developer" name="developer" placeholder="Your Name" class="form-control input-md" required="" type="text" value="">

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textinput">Address</label>
                        <div class="col-md-6">
                            <input id="address" name="address" placeholder="Your Address" class="form-control input-md" required="" type="text" value="">

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textinput">Phone</label>
                        <div class="col-md-6">
                            <input id="phone" name="phone" placeholder="(999)999-9999" class="form-control input-md" required="" type="text" value="">

                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-2 control-label" for="Description">Description</label>
                        <div class="col-md-6">
                            <input id="description" name="description" placeholder="Describe the work" class="form-control input-md" type="text" value="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                    <label class="col-md-2 control-label" for="textinput">Hourly Rate</label>
                    <div class="col-md-6">
                        <input id="hourlyprice" class="hourlyprice" name="hourlyprice" placeholder="9.99" class="form-control input-md" required="" type="text" value="" onkeyup="myMath();">

                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-md-2 control-label" for="textinput">Hours</label>
                    <div class="col-md-6">
                        <input id="hours" class="hours" name="hours" placeholder="40" class="form-control input-md" required="" type="text" value="" onkeyup="myMath();">

                    </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textinput">Tax</label>
                        <div class="col-md-6">
                            <input id="tax" name="tax" placeholder="40" class="form-control input-md" required="" type="text" onkeyup="myMath();" value=".0625">

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textinput">Total:</label>
                        <div class="col-md-6">
                        <input type="text" id="total_input" readonly="true" />
                        </div></div>


                    <div class="row">
                    <div class="form-group">
                        <div class="col-md-4"><input type="submit" name="submit" value="Generate PDF" class="btn btn-primary btn-block btn-lg" tabindex="5">
                        </div>
                    </div>
                    </div>


        </div>


        </div>
</div>


<!-- javascript -->

<script src="js/bootstrap.min.js"></script>
</body>
</html>
