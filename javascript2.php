<?php require_once('header.php');?>

<script>
function myFunction() {
  document.getElementById("demo").innerHTML = "The sauce is saucey";
}
</script>


<p>When you click "Try it", a function will be called.</p>
<p>The function will display a message.</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

</body>
</html>
