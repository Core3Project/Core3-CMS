<?php
include "system/core/init.php";
print(load_which("system/templates/header.tpl.php"));
//print(load_page());
?>


<html>
<body>
<head>
</head>


<form role="form" method="post" action="" autocomplete="off">
                <div class="form-group col-lg-3">
                    <input type="text" name="username" id="username" class="form-control input-lg" placeholder="User Name" value="<?php if(isset($error)){ echo $_POST['username']; } ?>" tabindex="1">
                </div>
                <div class="row">
                    <div>
                      <div class="form-group col-lg-3">
                            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="3">
                        </div>
                    </div>
                    <div>
                    </div>
                </div>

                <div class="row">
                    <div><input type="submit" name="submit" value="Login" class="btn btn-primary btn-block btn-lg" tabindex="5"></div>
                </div>


            </form>
          </body>
</html>
<?php
print(load_which("system/templates/footer.tpl.php"));
?>
