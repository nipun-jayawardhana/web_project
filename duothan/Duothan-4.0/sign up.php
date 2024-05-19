
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="sign up.css">
</head>
<body>
    <section class="container">
        <header>Sign Up</header>
        <p class="title">Already have an account? 
            <a rel="noopener noreferrer" href="#" class="">Log In</a>
        </p>
        <form class="form" action="insert.php" method="post">
            <div class="row g-3">
                <div class="input-container col-lg-6">
                    <label for="first-name" class="form-label">First Name</label>
                   <input type="text" id="first-name" class="form-control">
                  
                </div>
                <div class="input-container col-lg-6">
                    <label for="last-name" class="form-label">Last Name</label>
                    <input type="text" id="last-name"  class="form-control">
                </div>
            </div>
            <div class="row g-3">
                <div class="input-container col-lg-6">
                    <label for="first-name" class="form-label">User Name</label>
                   <input type="text" id="username" class="form-control">
                  
                </div>
                <div class="input-container col-lg-6">
                    <label for="mobile number" class="form-label">Mobile Number</label>
                    <input type="text" id="mobile" class="form-control">
                </div>
            </div>
            <div class="input-container col-lg-12">
                <label for="email" class="form-label">Email</label>
                <input type="text" id="email" class="form-control">
            </div>
            <div class="row g-3">
                <div class="input-container col-lg-6">
                    <label for="Password" class="form-label">Password</label>
                   <input type="password" id="password" class="form-control">
                  
                </div>
                <div class="input-container col-lg-6">
                    <label for="Confirm Your Password" class="form-label">Confirm Your Password</label>
                    <input type="password" id="re-password"  class="form-control">
                </div>
            </div>
            <br>
            <div class="flex-row">
                <input type="checkbox">
                <label>I agree the terms & Conditions</label>
            </div>
            <button>Sign Up</button>
        </form>
      </section>
</body>
</html>