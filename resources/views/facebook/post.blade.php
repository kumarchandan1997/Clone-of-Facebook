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

   
  

   
   <h3><center>Post Your Post</center></h3>

<div>
  <form action="{{url('save')}}" method="post" enctype="multipart/form-data">
    @csrf
  <p><label for="w3review">Post Description</label></p>
    <textarea  name="description" rows="4" cols="198" placeholder="Add description....."></textarea>
    <label for="lname">Location</label>
    <input type="text"  name="location" placeholder="Add location..">
    <label for="img">Select image:</label>
  <input type="file"  name="post_image"  accept="image/*">
    <input type="submit" value="Submit">
  </form>
</div>
   

</body>
</html>