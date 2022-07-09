<!DOCTYPE html>
<html lang="en">
	<body>
    <div class="footer">
      <hr />
      <time id="demo"></time> © PHP/MYSQL Project
      <script>
        var dateObj = new Date();
        var currentYear = dateObj.getFullYear();
        document.getElementById("demo").innerHTML = currentYear;
      </script>
    </div>
  </body>
</html>

