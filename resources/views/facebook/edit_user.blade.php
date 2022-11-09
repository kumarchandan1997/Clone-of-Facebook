<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <title>Document</title>
</head>
<body>
   <h3><center>Your Profile</center></h3>

<div>
  <form action="{{url('save_user')}}" method="post" enctype="multipart/form-data">
    @csrf
  
    <label for="lname">Change Password</label>
    <input type="text"  name="change_password">
    <label for="img">Select your profile image:</label>
  <input type="file"  name="profile_image"  accept="image/*">
    <input type="submit" value="Submit">
  </form>
</div>
   

</body>
</html>