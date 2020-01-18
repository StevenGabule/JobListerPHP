<?php include 'include/init.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Post a new Job</title>
    <style>
        body {
            line-height: 2em;
            font-family: Helvetica, serif;
        }

        input, textarea, select {
            padding: 5px;
            -webkit-border-radius:;
            -moz-border-radius:;
            border-radius: 3px;
            border: 1px solid #ddd;
            margin-left: 10px;
        }
    </style>
</head>
<body>
<?php
$jobs = new Jobs();
$cat = Category::find_all();

if (isset($_POST['submit'])) {

    $job_title = clean($_POST['job_title']);
    $company = clean($_POST['company']);
    $category_id = clean($_POST['category']);
    $description = $_POST['description'];
    $salary = clean($_POST['salary']);
    $location = clean($_POST['location']);
    $contact_user = clean($_POST['contact_user']);
    $contact_email = clean($_POST['contact_email']);
    $post_date = clean($_POST['post_date']);

    $jobs->job_title = $job_title;
    $jobs->company = $company;
    $jobs->category_id = $category_id;
    $jobs->description = $description;
    $jobs->salary = $salary;
    $jobs->location = $location;
    $jobs->contact_user = $contact_user;
    $jobs->contact_email = $contact_email;
    $jobs->post_date = $post_date;
    $jobs->save();

}

?>
<h2>Add / Edit Job</h2>
<form action="job_add.php" method="post">
    <table>
        <tr>
            <td><label for="job_title">Job Title:</label></td>
            <td><input type="text" name="job_title" id="job_title" value="" placeholder="Enter job title"></td>
        </tr>

        <tr>
            <td><label for="company">Company Name:</label></td>
            <td><input type="text" name="company" id="company" value="" placeholder="Enter company name">
            </td>
        </tr>

        <tr>
            <td><label for="category">Category:</label></td>
            <td>
                <select name="category" id="category">
                    <option value="" disabled>Select your option</option>
                    <?php foreach ($cat as $categories) : ?>
                        <option value="<?= $categories->category_id; ?>"><?= $categories->type; ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>

        <tr>
            <td style="vertical-align: top"><label for="description">Description:</label></td>
            <td><textarea name="description" id="description" rows="10" cols="40"
                          placeholder="Write job description"></textarea></td>
        </tr>

        <tr>
            <td><label for="salary">Expected Salary:</label></td>
            <td><input type="text" name="salary" id="salary" placeholder="Enter the expected salary"></td>
        </tr>

        <tr>
            <td><label for="location">Location:</label></td>
            <td><input type="text" name="location" id="location" placeholder="Enter the location"></td>
        </tr>

        <tr>
            <td><label for="contact_user">Contact user:</label></td>
            <td><input type="text" name="contact_user" id="contact_user" placeholder="Enter contact user"></td>
        </tr>

        <tr>
            <td><label for="contact_email">Contact Email:</label></td>
            <td><input type="text" name="contact_email" id="contact_email" placeholder="Enter contact email"></td>
        </tr>

        <tr>
            <td><label for="start_date">Start Date:</label></td>
            <td><input type="date" name="post_date" id="start_date" placeholder="Enter starting date"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Post"><input type="reset" name="reset" value="Clear"
                                                                       style="margin-left: 10px;"></td>
        </tr>
    </table>
</form>
</body>
</html>