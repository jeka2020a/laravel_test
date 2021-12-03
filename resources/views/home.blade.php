<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



    <form action="/home" class="form" method="get">
        
        <div class="form__box">
            <div class="form__box-titlebox">
                <h4 class="form__box-titlebox-title">Full Name</h4>
                <p class="form__box-titlebox-redstar">*</p>
            </div>
            <div class="form__box-flex">
                <input name="first_name" class="form__box-flex-input" type="text" placeholder="First Name" required>
                <input name="last_name"class="form__box-flex-input" type="text" placeholder="Last Name" required>
            </div>
            <div class="form__box-titlebox">
                <h4 class="form__box-titlebox-title">Address</h4>
                <p class="form__box-titlebox-redstar">*</p>
            </div>
            <div class="form__box-unflex">
                <input name="street_address" class="form__box-unflex-input" type="text" placeholder="Street Address" required>  <!---->
                <input name="street_address_2"class="form__box-unflex-input" type="text" placeholder="Street Address Line 2" required>  <!---->
            </div>
            <div class="form__box-flex">
                <input name="city" class="form__box-flex-input" type="text" placeholder="City" required>
                <input name="state_province" class="form__box-flex-input" type="text" placeholder="State / Province" required>
            </div>
            <div class="form__box-unflex">
                <input name="postal_zipcode" class="form__box-unflex-input" type="text" placeholder="Postal / Zip Code" required>
                <br><br>
            </div> 
            <div class="form__box-titlebox">
                <h4 class="form__box-titlebox-title">Phone Number</h4>
                <p class="form__box-titlebox-redstar">*</p>
            </div>
            <div class="form__box-unflex">
                <input name="phone_number" class="form__box-unflex-input-small" type="text" placeholder="(000) 000-0000" required>
            </div>
            <div class="form__box-titlebox">
                <h4 class="form__box-titlebox-title">E-mail</h4>
                <p class="form__box-titlebox-redstar">*</p>
            </div>
            <div class="form__box-unflex">
                <input name="email" class="form__box-unflex-input-small" type="email" placeholder="ex: email@yahoo.com" required>
            </div>
            <hr>
        </div>
        <div class="form__submit">
            <button name="submit" class="form__submit-butt">
                Submit
            </button>
        </div>
    </form>
</body>
</html>