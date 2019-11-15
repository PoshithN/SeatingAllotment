<!--class wise arrangement-->
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Exam Seating Arrangement
</title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/lh.css"/>
</head>
<body>
  <a href="selectoneof3.php" class="btn  btn-sm"><span class="glyphicon glyphicon-chevron-left"></span>back</a>
  <div class="container ">
    <div class="row">
      <div class="col-xs-4 col-xs-push-4" style="background-color: #ffffff;">
          <div class="panel panel-default">
            <div class="panel-body">
            <form class="form-horizontal content" action="lecturehallwisedata.php" method="post" role="form">
             <div class="form-group">
                <label  class=" control-label"for="name"> Select Room :</label>
                <br/>
                <!--branch selection -->
                  <select class="form-control" name="classroom[]">
                    <option>LH001</option>
                            <optioN>LH002</option>
                            <option>LH003</option>
                            <option>LH004</option>
                            <option>LH005</option>
                            <option>LH006</option>
                            <option>LH101</option>
                            <option>LH102</option>
                            <option>LH103</option>
                            <option>LH104</option>
                            <option>LH105</option>
                            <option>LH106</option>
                            <option>LH201</option>
                            <option>LH202</option>
                            <option>LH203</option>
                            <option>LH204</option>
                            <option>LH205</option>
                            <option>LH206</option>
                            <option>LH207</option>
                            <option>LH208</option>
                            <option>LH210</option>
               </select>
              </div>

            </div>
        <center><input type="submit" name="submit" value="search" class="btn btn-lg btn-success"></input></center>
  <form>
          </form>

    </div>
    </div>
   </div>
   </div>
 </div>
</body>
</html>
