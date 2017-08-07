<html>
<head>
  <title>%TITLE%</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"         integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
  <div><h2>Contact Form</h2></div>

  <div class="row">
      <div class="col-md-3" >
          <div class="alert alert-success ">
              <strong>%SUCCESSFUL_SENT%</strong>
          </div>
      </div>
  </div>
        <div class="rows">
            <div class="col-lg-4">
              <form class="form-signin" method="POST" action="index.php">
                <h2 class="form-signin-heading">Please enter</h2>
                <label class="sr-only">Name</label>
                <input type="text" name="name" class="form-control" value="%NAME%" placeholder="Name"  autofocus>
                 <div style="color: #FF0000; font-size: 15px;">
                     <strong>
                         %COUNT%
                      </strong>
                 </div>
                 <div style="color: #FF0000; font-size: 15px;">
                     <strong>
                        %ENTER%
                     </strong>
                 </div>
                <select name="select"  class="form-control">
                     <option selected disabled>subject</option>
                     <option value="option1"> option1</option>
                     <option value="option2" >option2</option>
                     <option value="option3" >option3</option>
                </select>
                  <div style="color: #FF0000; font-size: 15px;">
                      <strong>
                          %CHECK%
                      </strong>
                  </div>
                <label  class="sr-only">Email address</label>
                <input   name="mail" id="inputEmail" class="form-control" value="%MAIL%" placeholder="Email address"  autofocus>
                  <div style="color: #FF0000; font-size: 15px;">
                      <strong>
                          %MAIL_CORR%
                      </strong>
                  </div>
                  <div style="color: #FF0000; font-size: 15px;">
                      <strong>
                          %MAIL_EM%
                      </strong>
                  </div>
                <label  class="sr-only">Message</label>
                <textarea name="comment" class="form-control" placeholder="Message">%COMMENT%</textarea>
                  <div style="color: #FF0000; font-size: 15px;">
                      <strong>
                      %COMMENTS_COUNT%
                      </strong>
                  </div>
                <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Sign in</button>
              </form>
            </div>
      <div>
    </div> <!-- /container -->
  </body>
  </html>

