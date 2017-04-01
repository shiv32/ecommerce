
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>SundayBazar</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/starter-template.css" rel="stylesheet">

<!-- sticky footer-->
    <link href="assets/css/sticky-footer.css" rel="stylesheet">


  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">SundayBazar</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="allitem.html">All Items</a></li>
            <li><a href="register.html">Create Account</a></li>

          </ul>
          <form class="navbar-form navbar-right">
         <div class="form-group">
           <input name="username" type="text" class="form-control" placeholder="Enter Username">
          </div>
          <div class="form-group">
            <input name="password" type="password" class="form-control" placeholder="Enter Password">
           </div>
          <button name="submit" type="submit" class="btn btn-default">Login</button>
          </form>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">

        <div class="row">
                <div class="col-md-4">

                                  <div class="panel panel-primary">
                                    <div class="panel-heading">
                                      <h3 class="panel-title">Sell Of The Month</h3>
                                    </div>
                                    <div class="panel-body">
                                      Mens T-Shirts
                                    </div>
                                  </div> <br><br> <br><br>


                              <!--cart -->
                                <form>
                                  <div class="form-group">
                                    <table class="table table-striped table-hover ">
                                          <thead>
                                          <tr>
                                           <th>Item QTY</th>
                                           <th>Item Description</th>
                                           <th>Item Price</th>
                                          </tr>
                                          </thead>
                                          <tbody>
                                          <tr>

                                           <td></td>
                                           <td>Total</td>
                                           <td>Rs.</td>
                                          </tr>

                                          </tbody>
                                          </table>
                                  </div>
                              <a href="#" class="btn btn-primary">Update Cart</a>
                              <a href="#" class="btn btn-success">Go To cart</a>
                                </form>


                    </div> <br>
