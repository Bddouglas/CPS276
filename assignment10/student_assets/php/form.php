

<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <div class="form-container">
        <form name="frmContact" id="" frmContact"" method="post"
            action="" enctype="multipart/form-data"
            onsubmit="return validateContactForm()">

            <div class="input-row">
                <label style="padding-top: 20px;">Name</label> <span
                    id="userName-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="userName"
                    id="userName" />
            </div>

            <div class="input-row">
                <label style="padding-top: 20px;">Address</label> <span
                    id="useraddress-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="useraddress"
                    id="useraddress" />
            </div>

            <div class="input-row">
                <label style="padding-top: 20px;">City</label> <span
                    id="userCity-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="userCity"
                    id="userCity" />
            </div>

            <div class="input-row">
                <label style="padding-top: 20px;">State</label> <span
                    id="userstate-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="userstate"
                    id="userstate" />
            </div>

            <div class="input-row">
                <label style="padding-top: 20px;">Phone</label> <span
                    id="userphone-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="userphone"
                    id="userphone" />
            </div>

            <div class="input-row">
                <label>Email</label> <span id="userEmail-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="userEmail" id="userEmail" />
            </div>

            <div class="input-row">
                <label style="padding-top: 20px;">Date of birth</label> <span
                    id="userDOB-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="userDOB"
                    id="userDOB" />
            </div>

            <p>please check all contact types you would like(Optional):</p>
<div>
  <input type="checkbox" id="NL" name="NL">
  <label for="NL">News letter</label>

  <input type="checkbox" id="emailU" name="horns">
  <label for="emailU">Email updates</label>

  <input type="checkbox" id="text" name="text">
  <label for="text">Text updates</label>
</div>


<p>please select an age range(you must select one)</p>
<label><input type="radio" name="age" value="10-18" > 10-18</label>
<label><input type="radio" name="age" value="19-30"  > 19-30</label>
<label><input type="radio" name="age" value="30-50"  > 30-50</label>
<label><input type="radio" name="age" value="51+"  > 51+</label>

            <div>
                <input type="submit" name="submit" class="btn-submit"
                    value="submit" />

                <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var address = $("#useraddress").val();
            var usercity = $("#usercity").val();
            var userphone = $("#userphone").val();
            var userstate = $("#userstate").val();
            var userDOB = $("#userDOB").val();
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (address == "") {
                $("#useraddress-info").html("Required.");
                $("#useraddress").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (city == "") {
                $("#usercity-info").html("Required.");
                $("#usercity").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (state == "") {
                $("#userstate-info").html("Required.");
                $("#userstate").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (phone == "") {
                $("#userphone-info").html("Required.");
                $("#userphone").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (DOB == "") {
                $("#userDOB-info").html("Required.");
                $("#userDOB").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>
</body>
</html>
