<!DOCTYPE html>
<html>
<head>
  <title>web-app-a</title>
</head>

<body>

<style>
#container {
  display: flex;
  margin-top: 30px;
  margin-left: auto;
  maring-right: auto;
  background: #f5f5f5;
  color: #444444;
  font-family: "Arial";
  justify-content: center;
  border-radius: 3px;
  box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.3);
  transition-duration: 200ms;
}

#container:hover {
  transform: scale(0.95);
  transition-duration: 300ms;
}

span {
  color: magenta;
}
</style>
  
  <div id="container">
    <h1>Hello from web-app-<span>b</span></h1>
  </div>
</body>
</html> 
