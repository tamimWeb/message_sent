
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>


<!-- <div c>
 <h2>Name: </h2>
  <h2>Eamil: </h2>
  <h2>Message: </h2>

 </div> -->

  



<div class="form4 top">
          <div class="container">
                <div class="row">
                    <div class="col-md-7 col-md-offset-2">
                        <div class="form-bg">

                            <form action="store.php" method="POST" class="form">

                                <div class="form-group">
                                    <label class="sr-only">Name</label>
                                    <input type="text" class="form-control" required="" name="name" placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">Email</label>
                                    <input type="email" class="form-control" required="" name="email" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">Name</label>
                                    <textarea class="form-control" required="" rows="7" name="text_flied" placeholder="Write message"></textarea>
                                </div>

                                <button type="submit" name="btn" class="btn btn-info">
                                    Submited

                                </button>
                                <!-- <button type="submit" class="btn text-center btn-blue">Send Message</button> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>