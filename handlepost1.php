    <?php require_once("header.php"); ?>
    <?php require_once("badgeGET.php"); ?>
  </head>
  <body>
Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?><br>
    You really like the sport, <? echo $_GET["Sport"]; ?><br>
    Your favorite movie is <? echo $_GET["Movie"]; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
