<?php include('safe.php'); ?>
<link rel="stylesheet" href="style.css"> 

<body>
<div class="wrapper split left" style="background-image: url('https://i2.wp.com/files.123freevectors.com/wp-content/original/171786-dark-pink-fluid-gradient-geometric-abstract-background.jpg?w=800&q=95');">
    <div class="inner">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <h3>Register Now</h3>
            <div class="form-group">
                <div class="form-wrapper">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" name="name"  value="<?php echo $fullName; ?>">
                    <span class="error"><?php echo $fullName_error; ?></span>
                </div>
                <div class="form-wrapper">
                    <label for="user">Username</label>
                    <input type="text" class="form-control" name="user"  value="<?php echo $userName; ?>">
                    <span class="error"><?php echo $userName_error; ?></span>
                </div>
            </div>
            <div class="form-wrapper">
                <label for="mail">Email</label>
                <input type="email" class="form-control" name="mail" value="<?php echo $email; ?>" >
                <span class="error"><?php echo $email_error; ?></span>
            </div>
            <div class="form-wrapper">
                <label for="pass">Password</label>
                <input type="password" class="form-control" name="pass"  value="<?php echo $passwd; ?>">
                <span class="error"><?php echo $passwd_error; ?></span>
            </div>
            <div class="form-wrapper">
                <label for="conf">Confirm Password</label>
                <input type="password" class="form-control" name="conf"  value="<?php echo $confirmPasswd; ?>">
                <span class="error"><?php echo $confirmPasswd_error; ?></span>
            </div>
            <div class="form-wrapper">
                <label for="phone">Phone</label>
                <input type="number" class="form-control" name="phone"  value="<?php echo $phone; ?>">
                <span class="error"><?php echo $phone_error; ?></span>
            </div>
            <div class="form-wrapper">
                <label for="dob">Date of Birth</label>
                <input type="date" class="form-control" name="dob"  value="<?php echo $dob; ?>">
                <span class="error"><?php echo $dob_error; ?></span>
            </div>
            <div class="form-wrapper">
                <label for="ssn">Social Security/label>
                <input type="number" class="form-control" name="ssn"  value="<?php echo $ssn; ?>">
                <span class="error"><?php echo $ssn_error; ?></span>
            </div>
            <button type="submit">Register Now</button>
            <div class="success"><?php echo $success; ?></div>
        </form>
    </div>
</div>
<div class="wrapper split right" style="background-image: url('https://image.freepik.com/free-vector/dark-wavy-background-gradient_23-2148385755.jpg');">
    <div class="inner">
        <form action="">
            <h3>Log In</h3>
            <div class="form-group">
                <div class="form-wrapper">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="existuser">
                </div>
            </div>
            <div class="form-wrapper">
                <label for="">Password</label>
                <input type="password" class="form-control" name="existpass">
            </div>
            <button>Login Now</button>
        </form>
    </div>
</div>
</body>



