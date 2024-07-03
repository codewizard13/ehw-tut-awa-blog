<!DOCTYPE html>
<html>

<head>
  <title>Checking if image is loaded</title>
</head>
<script type="text/javascript">
  window.addEventListener("load", event => {
    var image = document.querySelector('img');
    var load = image.complete;
    alert(load);
  });
</script>

<body>
  <img src="https://media.geeksforgeeks.org/wp-content/uploads/geeksforgeeks-6.png">
  <img src="https://elijahstreams.com/images/faces/VTM2012November320x240.jpg"
</body>

</html>