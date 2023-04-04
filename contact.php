<?php
// Check if form was submitted
$name = $email = $subject = $message = "";
$nameErr = $emailErr = $subjectErr = $messageErr = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {



    if (empty($_POST['name'])) {
        $nameErr = "Name is Required";
    } else {
        $name = test_input($_POST['name']);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST['email'])) {
        $emailErr = "Email is Required";
    } else {
        $email = test_input($_POST['email']);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
    if (empty($_POST['subject'])) {
        $subjectErr = "Subject is Required";
    } else {
        $subject = test_input($_POST['subject']);
    }

    if (empty($_POST['message'])) {
        $messageErr = "Message is Required";
    } else {
        $message = test_input($_POST['message']);
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images//shijan.jpg" type="image/x-icon">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.4/tailwind.min.css">
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>

    <!-- header start -->
    <?php include('header.php'); ?>

    <!-- header end -->



    <div class="max-w-md mx-auto my-8">
        <h1 class="text-3xl font-bold mb-4">Contact Us</h1>
        <form action="contact_process.php" method="POST">
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="name">
                    Name
                </label>
                <input required class="border border-gray-500 p-2 w-full" type="text" name="name" id="name" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="email">
                    Email
                </label>
                <input required class="border border-gray-500 p-2 w-full" type="email" name="email" id="email" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="subject">
                    Subject
                </label>
                <input required class="border border-gray-500 p-2 w-full" type="text" name="subject" id="subject" required>

            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="message">
                    Message
                </label>
                <textarea required class="border border-gray-500 p-2 w-full" name="message" id="message" rows="4" required></textarea>

            </div>
            <div>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                    Submit
                </button>
            </div>
        </form>
    </div>


    <!-- Footer start -->
    <?php include('footer.php'); ?>

    <!-- Footer end -->



</body>

</html>