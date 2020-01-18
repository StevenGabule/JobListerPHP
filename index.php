<?php include 'include/init.php'; ?>
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
            width: 25%;
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
            text-transform: capitalize;

        }

        h2 {
            text-align: center;
            text-transform: capitalize;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }
        input[type='text'] {
            width: 80%;
            padding: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
            margin-bottom:20px;
        }
        input[type='submit'] {
            height: inherit;
            padding: 10px;

        }
    </style>
</head>
<body>
<h2>All Available Job In The Market</h2>

<div class="container">
    <form action="search.php" method="get">
        <label for="Search">Search:</label>
        <input type="text" name="search" placeholder="Search a job">
        <input type="submit" value="Search a job">
    </form>
    <?php $jobs = Jobs::find_all(); ?>
    <?php foreach ($jobs as $job) : ?>
        <div class="jobs">
            <h3><?= $job->job_title; ?></h3>
            <p>Company: <?= $job->company; ?> <br>
                Description: <?= $job->description; ?><br>
                Expected Salary: <?= $job->salary; ?><br>
                Location: <?= $job->location; ?><br>
                Date Posted: <?= $job->post_date; ?><br>
                <a href="single_page.php?id=<?= $job->id; ?>">Read more</a>
            </p>
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>