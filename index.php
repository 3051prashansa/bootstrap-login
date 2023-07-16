<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img.jpeg" alt="Los Angeles" style="width:100%; height:200px;">
    </div>

    <div class="item">
      <img src="hh.png" alt="Chicago" style="width:100%; height:200px;">
    </div>

    <div class="item">
      <img src="image.png" alt="New York" style="width:100%; height:200px;">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
        Roll no:
        <br>
        <input type="text" class="form-control"><br>
        Name:<br>
        <input type="text" class="form-control"><br>
        Gender:<br>
        <div class="radio">
            <label><input type="radio" name="optradio" checked>Male</label>
            <label><input type="radio" name="optradio" checked>Female</label>
        </div><br>
        <div class="form-group">
            <label for="sel1">Course:</label>
            <select class="form-control" id="sel1">
                <option>C</option>
                <option>C++</option>
                <option>Java</option>
                <option>bootstrap</option>
            </select>
        </div>
</div>
</div>
</body>
</html>