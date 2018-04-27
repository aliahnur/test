<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Create</title>
    </head>
    <body>
        <form action="store" method="post" enctype="multiple/form-data">
            <label for="name">Name</label>
            <input type="text" name="name"><br>

            <label for="ic">IC No</label>
            <input type="text" name="ic"><br>

            <label for="email">Email</label>
            <input type="text" name="email"><br>

            <label for="pic">Profile Picture</label>
            <input type="file" name="picture"><br>

            <label for="mobile">Telephone No</label>
            <input type="text" name="mobile"><br>

            <label for="officephone">Office Phine No.</label>
            <input type="text" name="officephone"><br>

            <label for="occupation">Occupation</label>
            <input type="text" name="occupation"><br>

            <label for="race">Race</label>
            <input type="text" name="race"><br>

            <label for="religion">Religion</label>
            <input type="text" name="religion"><br>

            <label for="address1">Address 1</label>
            <input type="text" name="address1"><br>

            <label for="address2">Address 2</label>
            <input type="text" name="address2"><br>

            <label for="postcode">Postcode</label>
            <input type="text" name="postcode"><br>

            <label for="city">City</label>
            <input type="text" name="city"><br>

            <label for="province">Province</label>
            <input type="text" name="province"><br>

            <label for="note">Note</label>
            <input type="text" name="note"><br>

            Gender <input type="radio" name="gender" value="Female"> Female
            <input type="radio" name="gender" value="Male">Male<br>  

        <input type="hidden" name="_token" value="{{csrf_token()}}">


            <label for=""></label>
            <input type="submit" name="submit" value="Submit"><br>

        </form>
    </body>
</html>
