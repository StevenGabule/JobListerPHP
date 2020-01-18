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
        }
        thead {
            background: #ddd;
        }
        tbody {
            background: #ccc;
            text-align: center;
        }

        tbody td {
            padding: 5px;
        }
        thead th {
            padding: 10px;
        }
        
        a {
            text-decoration: none;
            color: #230cff;
            font-weight: 700;
            padding: 10px;
        }

    </style>
</head>
<body>
<h2>Dashboard - Jobs Management</h2>
<a href="job_add.php" style="color:black;">Post a new Job</a>
<br>
<?php $jobs = Jobs::find_all(); ?>
<table>
    <thead>
    <tr>
        <th>Company name</th>
        <th>Job title</th>
        <th>Description</th>
        <th>Salary</th>
        <th>Location</th>
        <th>Contact user</th>
        <th>Contact email</th>
        <th>Post Date</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($jobs as $job) : ?>
        <tr>
            <td><?= $job->company; ?></td>
            <td><?= $job->job_title; ?></td>
            <td><?= $job->description; ?></td>
            <td><?= $job->salary; ?></td>
            <td><?= $job->location; ?></td>
            <td><?= $job->contact_user; ?></td>
            <td><?= $job->contact_email; ?></td>
            <td><?= $job->post_date; ?></td>
            <td>
                <a href="job_edit.php?id=<?= $job->id; ?>">Edit</a>
                <a href="job_delete.php?id=<?= $job->id; ?>">delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>