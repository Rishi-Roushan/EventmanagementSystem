<html>

<head>
    <style>
    * {
        box-sizing: border-box;
    }

    /* Create two unequal columns that floats next to each other */
    /* Left column */
    .leftcolumn {
        float: left;
        width: 75%;
    }

    /* Right column */
    .rightcolumn {
        float: left;
        width: 25%;
        background-color: #f1f1f1;
        padding-left: 20px;
    }

    /* Add a card effect for articles */
    .card {
        background-color: white;
        padding: 20px;
        margin-top: 20px;
    }

    .map {
        background-color: white;
        padding: 5px;
        margin-top: 20px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    body {
        font-family: Arial;
        margin: 0px;
        background: #f1f1f1;
    }

    /* Header/Blog Title */
    .header {
        padding: 0px;
        text-align: center;
        background: white;
    }

    .header h1 {
        font-size: 50px;
    }

    /* Style the top navigation bar */
    .topnav {
        overflow: hidden;
        background-color: #333;
    }

    /* Style the topnav links */
    .topnav a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    /* Change color on hover */
    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }

    /* Footer */
    .footer {
        padding: 20px;
        text-align: center;
        background: #ddd;
        margin-top: 20px;
    }

    /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 800px) {

        .leftcolumn,
        .rightcolumn {
            width: 100%;
            padding: 0;
        }
    }

    /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
    @media screen and (max-width: 400px) {
        .topnav a {
            float: none;
            width: 100%;
        }
    }

    .dropdown:hover .dropbtn {
        background-color: #ddd;
        color: black;
    }

    .dropdown {
        float: left;
        overflow: hidden;
    }

    .dropdown .dropbtn {
        font-size: 16px;
        border: none;
        outline: none;
        color: white;
        padding: 14px 16px;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
    }


    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 14px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    table {
        background-color: #C0C0C0;
    }

    th {
        padding: 10px;
    }
    </style>
</head>

<body>

    <div class="topnav">
        <img src="logo1.jpg" alt="logo" height="80px" width="100px" style="float:left">
        <a href="loginpage.php">
            <div class="row">
                <?php session_start();
        echo "Welcome ";
        echo $_SESSION["uname"];
        ?>
        </a>
        <a href="enrolled.php">Enrolled</a>
        <a href="logout.php">Log Out</a>
    </div>

    </div>
    <div class="row">

        <div class="card">
            <h1>Enroll</h1>
            <form action="event.php" method="post">
                <label for="">Enter Event ID :</label>
                <input type="text" name="id">
                <label for="">No. of Person :</label>
                <input type="text" name="nop">
                <input type="reset" value="Clear">
                <input type="submit" value="Submit">

            </form>
        </div>

        <table border="1" width="100%">
            <tr bgcolor="yellow">
                <th>Event ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Venue</th>
                <th>Date</th>
                <th>Time</th>
                <th>Details</th>
            </tr>
            <?php
      $db = mysqli_connect("localhost", "root", "", "ems");
      $sql = "SELECT * FROM events ";
      $result = mysqli_query($db, $sql);
      ?>

            <?php
      while ($row = mysqli_fetch_assoc($result)) {

      ?>

            <tr>
                <th><?php echo $row['id']; ?></th>
                <th><?php echo "<img src='{$row['img_dir']}' width='400px' height='300px' >"; ?></th>
                <th><?php echo $row['event']; ?></th>
                <th><?php echo $row['venue']; ?></th>
                <th><?php echo $row['date']; ?></th>
                <th><?php echo $row['time']; ?></th>
                <th width="30%"><?php echo $row['detail']; ?></th>
            </tr>
            <?php
      }
      ?>

        </table>
    </div>

    <div class="footer">
        <h2></h2>
        <footer>
            <p>Project on Event Management System</p>
            <p>Contact information: <a href="rishiroushanhacker@gmail.com">rishiroushanhacker@gmail.com</a></p>
        </footer>

    </div>

</body>

</html>