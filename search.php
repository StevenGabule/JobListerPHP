<?php include 'include/init.php'; ?>
<?php
    $db = mysqli_connect("localhost", "root", "paranormalLove@@**", "dbjoblister");

    if (isset($_GET['search']) && $_GET['search'] != "") {
        $search = preg_replace('#[^a-z 0-9?!]#i', '', $_GET['search']);
        $sqlCommand = "SELECT * FROM tbljobs WHERE job_title LIKE '%$search%'";
        $query = mysqli_query($db, $sqlCommand);
//        $job = Jobs::Search()

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboards - All Jobs</title>
    <style>
        body {
            line-height: 2em;
            font-family: Helvetica, serif;
            font-size: 14px;
            background-color: #f1f1f1;
        }

        .jobs {
            width: 400px;
            background: #fff;
            padding: 20px;
            margin-left: 20px;
            margin-bottom: 20px;
            box-shadow: 0 0 1px #ccc;
            float: left;
        }

        .jobs h3 {
            color: #000;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
        }

        .container {
            width: 90%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<h2>All Available Job In The Market</h2>

<div class="container">
    <?php
        while ($row = mysqli_fetch_array($query)) {
            $id = $row["id"];
            $job_title = $row["job_title"];
            $company = $row["company"];
            $description = $row["description"];
            $salary = $row["salary"];
            $location = $row["location"];
            $post_date = $row["post_date"];
    ?>
        <div class="jobs">
            <h3><?= $job_title; ?></h3>
            <p>Company: <?= $company; ?> <br>
                Description: <?= $description; ?><br>
                Expected Salary: <?= $salary; ?><br>
                Location: <?= $location; ?><br>
                Date Posted: <?= $post_date; ?><br>
                <a href="single_page.php?id=<?= $id; ?>">Read more</a>
            </p>
        </div>
    <?php
        } // close while
    }
    ?>
</div>
</body>
</html>