<?php session_start(); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>How to send mail in php using PhpMailer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <div class="card">
<div class="card-header">
<h4>CONTACT ME BY SENDING AN EMAIL</h4>
</div>
        <div class="card-body">

<form action="sendmail.php" method="POST">
<div class="mb-3">

<label for="fullname">Date </label>
<input type="datetime-local" name="date" id="date"   required  class="form-control">

 </div>
    <div class="mb-3">

   <label for="fullname">Full Name </label>
   <input type="text" name="full_name" id="full_name"   required  class="form-control">

    </div>

    <div class="mb-3">

<label for="email_address">Email Address </label>
<input type="text" name="email" id="email_address" required  class="form-control">

 </div>
 <div class="mb-3">

<label for="subject">Subject</label>
<input type="text" name="subject" id="subject" id="subject"  required class="form-control">

 </div>
 <div class="mb-3">

<label for="message">Message</label>
<textarea name="message"  id="message" rows="3"  required class="form-control" ></textarea>

 </div>
 <div class="mb-3">
<button type="submit" name="submitContact" class="btn btn-primary">Send Mail</button>
 </div>
</form>
        </div>
        </div>
    
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>

var messageText = "<?=$_SESSION['status'] ?? ''; ?>";
if(messageText !=''){

    Swal.fire({
  title: "Thank youu",
  text: messageText,
  icon: "success"
});

<?php  unset($_SESSION['status']) ?>
}

    <script>
    
  </body>
</html>