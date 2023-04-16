

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body style="padding-left: 0;">

<section class="form-container">
    <form class="register" action="" method="post" enctype="multipart/form-data">
        <h3>register new</h3>
      <div class="flex">
            <div class="col">
                <p>your name <span>*</span></p>
                <input type="text" name="name" placeholder="eneter your name" maxlength="50" required class="box">
                <p>your profession <span>*</span></p>
                <select name="profession" class="box" required>
                    <option value="" disabled selected>-- select your profession</option>
                    <option value="developer">developer</option>
                    <option value="desginer">desginer</option>
                    <option value="musician">musician</option>
                    <option value="biologist">biologist</option>
                    <option value="teacher">teacher</option>
                    <option value="engineer">engineer</option>
                    <option value="lawyer">lawyer</option>
                    <option value="accountant">accountant</option>
                    <option value="doctor">doctor</option>
                    <option value="journalist">journalist</option>
                    <option value="photographer">photographer</option>
                </select>
                <p>your email <span>*</span></p>
                <input type="email" name="email" placeholder="enter your email" maxlength="20" required class="box">
            </div>
            <div class="col">
                <p>your password <span>*</span></p>
                <input type="password" name="pass" placeholder="enter your password" maxlength="20" required class="box">
                <p>confirm password <span>*</span></p>
                <input type="password" name="cpass" placeholder="confirm your password" maxlength="20" required class="box">
                <p>select pic <span>*</span></p>
                <input type="file" name="image" accept="image/*" required class="box">
            </div>
      </div>
      <p class="link">already have an account? <a href="login.php">login now</a></p>
      <input type="submit" name="submit" value="register now" class="btn">
   </form>

</section>




</section>


</body>
</html>