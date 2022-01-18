<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>@yeild('title')</title>
</head>
<body>
    <div id="header">
      <h2>header section</h2>
    </div>

    <div id="container">
      @section('container')
      <h2>container data</h2>
      @show
    </div>

    <div id="footer">
      <h2>footer</h2>
    </div>


</body>
</html>