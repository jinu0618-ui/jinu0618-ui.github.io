<html>
    <head><meta charset="utf-8"></head>
<body>

삼각형 : 밑변과 높이를 입력으로 받아서 면적을 출력한다<br>
밑변 <?php echo $_POST["width"]; ?><br>
높이 <?php echo $_POST["height"]; ?><br>
면적 <?php echo $_POST["width"]*$_POST["height"]/2; ?><br>
직사각형 : 가로와 세로를 입력으로 받아서 면적을 출력한다<br>
가로 <?php echo $_POST["rkfh"]; ?><br>
세로 <?php echo $_POST["tpfh"]; ?><br>
넓이 <?php echo $_POST["rkfh"]*$_POST["tpfh"]; ?><br>

원 : 반지름을 입력으로 받아서 면적을 출력한다<br>
반지름 <?php echo $_POST["반지름"]; ?><br>
면적 <?php echo $_POST["반지름"]*3.14/2; ?><br>

직육면체 : 가로, 세로, 높이를 입력으로 받아서 체적을 출력한다<br>
가로 <?php echo $_POST["가로1"]; ?><br>
세로 <?php echo $_POST["세로1"]; ?><br>
높이 <?php echo $_POST["높이"]; ?><br>
체적 <?php echo $_POST["가로1"]*$_POST["세로1"]*$_post["높이"]; ?><br>

원통 : 반지름과 높이를 입력으로 받아서 체적을 출력한다<br>
반지름 <?php echo $_POST["반지름1"]; ?><br>
높이 <?php echo $_POST["높이1"]; ?><br>
체적 <?php echo $_POST["반지름1"]*$_POST["높이1"]^2*3.14; ?><br>

구 : 반지름을 입력으로 받아서 체적을 출력한다<br>
반지름 <?php echo $_POST["반지름2"]; ?><br>
체적 <?php echo $_POST["반지름2"]*3.14*4/3*3.14^3; ?><br>

</body>
</html>