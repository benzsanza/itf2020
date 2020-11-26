#Form : การส่งค่าจาก Form แบบ POST

<html>
<body>
<form action="welcome.php" method="post">
Name: <input type="text" name="name" /><br>
Age: <input type="text" name="age" /><br>
<input type="submit" />
</form>
</body>
</html>
Form : การส่งค่าจาก Form แบบ POST
Welcome <?php echo $_POST["name"]; ?>.
You are <?php echo $_POST["age"]; ?> years old!


Form : การส่งค่าจาก Form แบบ GET
<html>
<body>
<form action="welcome_get.php" method="get">
Name: <input type="text" name="name" /><br>
Age: <input type="text" name="age" /><br>
<input type="submit" />
</form>
</body>
</html>
Form : การส่งค่าจาก Form แบบ GET
Welcome <?php echo $_GET["name"]; ?>.
You are <?php echo $_GET["age"]; ?> years old!

Form : ฟอร์มเพิ่มค่าลง Database
<html>
<body>
<form action="insert.php" method="post">
Name: <input type="text" name="name" /><br>
Age: <input type="text" name="age" /><br>
Link: <input type="text" name="link" /><br>
<input type="submit" />
</form>
</body>
</html>
Form : ฟอร์มเพิ่มค่าลง Database