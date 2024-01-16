<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <link rel="stylesheet" href="{{ asset('/assets/css/style.css')}}">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
   <div class="wrapper">
      <div class="title">
         Login Form
      </div>
      <div class="alert alert-danger" style="display:none;" role="alert" id="alertMessage">
         This is a primary alert—check it out!
      </div>
      <form action="#" id="loginForm">
         <x-input name="action" type="hidden" value="submitLoginForm" hidden="1" />
         <div class="field">
            <x-input name="name" type="text" />
         </div>
         <div class="field">
            <x-input name="age" type="number" />
         </div>
         <div class="field">
            <x-input name="education" type="text" />
         </div>
         <div class="content">
         </div>
         <div class="field">
            <input type="submit" value="Login">
         </div>
      </form>
   </div>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
   crossorigin="anonymous"></script>
<script src="{{ asset('/assets/js/scripts.js')}}"></script>

</html>