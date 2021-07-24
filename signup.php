<?php 
    $file = fopen("numbers.json", "r") or die('File is no longer alive!');
    $json = json_decode(fread($file, filesize("numbers.json")));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <div class="dead-center">
        <div class="container">
            <h1>Registration</h1>
            <div class="form">
                <form action="#" method="POST">
                    <input type="text" placeholder="Full name">
                    <input type="text" placeholder="Age" onfocus="this.type='date'" onfocusout="this.type=this.value?'date':'text'">
                    <div class="gender">
                        <label>Gender:</label>
                        <input type="radio" id="" value="male" name="gender">
                        <label for="male">Male</label>
                        <input type="radio" id="" value="female" name="gender">
                        <label for="female">Female</label>
                        <input type="radio" id="" value="other" name="gender">
                        <label for="other">Other</label>
                    </div>
                    <input type="text" placeholder="Passport number">
                    <div class="phone-number">
                        <!-- country codes (ISO 3166) and Dial codes. -->
                        <select name="countryCode" id="">
                            <?php foreach ($json->base as $base): ?>
                                <option data-countryCode="<?php echo $base->key ?>" value="<?php echo $base->value ?>"><?php echo $base->country ?></option>
                            <?php endforeach ?>
                        	<optgroup label="Other countries">
                                <?php foreach ($json->others as $other): ?>
                                    <option data-countryCode="<?php echo $other->key ?>" value="<?php echo $other->value ?>"><?php echo $other->country ?></option>
                                <?php endforeach ?>
                        	</optgroup>
                        </select>
                        <input type="text" placeholder="Phone number">
                    </div>
                    <input type="email" placeholder="Email">
                    <input type="text" placeholder="Username">
                    <input type="password" placeholder="Password">
                    <input type="submit" value="Register">
                </form>
            </div>
        </div>
        <p>Have an account? Login <a href="index.php">here</a>!</p>
    </div>
</body>

</html>
