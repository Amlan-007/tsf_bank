<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TSF Bank</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/table.css">
  <link rel="stylesheet" type="text/css" href="css/createuser.css">
  <link rel="stylesheet" type="text/css" href="css/contact.css">
  <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel = "icon" href = "img/logo.ico" type = "image/x-icon">
</head>


<body>

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #1e272e;">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

        <h1><a href="index.php">TSF Bank</a></h1>
        <ul class="navbar-nav">
          <li class="nav-item btn btn-secondary">
            <a class="nav-link text-white" href="index.php">Home</a>
          </li>
          <li class="nav-item btn btn-secondary">
            <a class="nav-link link-text text-white" href="http://amlan-007.github.io/Portfolio/">About Me</a>
          </li>
          <li class="nav-item btn btn-secondary">
            <a class="nav-link link-text text-white" href="contactme.php">Contact me</a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
 

<style>

body{
    background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
}

.contact-form{
    background: #fff;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 70%;
}

.contact-form .form-control{
    border-radius:1rem;
}

.contact-image{
    text-align: center;
}

.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
}

.contact-form form{
    padding: 14%;
}

.contact-form form .row{
    margin-bottom: -7%;
}

.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}

.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}

.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}

.form-group{
   padding-bottom: 20px;
}
.post{
   align-items: center;
}

</style>
<!------ Include the above in your HEAD tag ---------->

<div class="container contact-form">
            <div class="contact-image">
                <img src="https://cdn0.iconfinder.com/data/icons/most-usable-logos/120/Email-512.png" alt="rocket_contact"/>
            </div>
            <form method="post">
                <h3>Drop Us a Message</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                        </div>
                    </div>
                     <div class="col-md-6"> 
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                         </div>
                    </div>
                    
                </div>
            </form>
</div>

<div id="container">
    <div id="header"  class="footer">© 2021. Made with ❤️ by <a class="" href="http://amlan-007.github.io/Portfolio/">Amlan Dutta</a><br>
    </div>  
 </div>