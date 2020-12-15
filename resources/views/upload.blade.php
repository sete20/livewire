<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Laravel Ajax Image Upload Using Intervention Package Example - Tutsmake.com</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<style>
.avatar-pic {
width: 300px;
}
</style>
</head>
<body>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<form id="imageUploadForm"  method="post" action="{{ route('uploaded') }}"  enctype="multipart/form-data">
@csrf
    <div class="file-field">
<div class="row">
<div class="mb-4 col-md-8">
<img id="original" src="" class=" z-depth-1-half avatar-pic" alt="">
<div class="mt-3 d-flex justify-content-center">
<div class="float-left btn btn-mdb-color btn-rounded">
<input type="file" name="photo_name" id="photo_name" required=""> <br>
<button type="submit" class="mt-3 btn btn-secondary d-flex justify-content-center">submit</button>
</div>
</div>
</div>
<div class="mb-4 col-md-4">
<img id="thumbImg" src="" class=" z-depth-1-half thumb-pic"
alt="">
</div>
</div>
</form>
</div>
</div>
</div>
</body>
</html>
