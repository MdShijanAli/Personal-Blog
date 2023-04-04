<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?php echo $name; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <h1 class="text-2xl  text-center my-10"><span class="font-semibold"><?php echo $name; ?></span> Thank you so much for you Message. We have recieved your message. We'll reply you shortly.</h1>

    <div class="w-1/2 mx-auto">
        <h3 class="text-xl text-center mt-10 font-semibold"> Your Message is:</h3>

        <table class="min-w-full table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2">Field</th>
                    <th class="px-4 py-2">Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border px-4 py-2">Name</td>
                    <td class="border px-4 py-2"><?php echo $name; ?></td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">Email</td>
                    <td class="border px-4 py-2"><?php echo $email; ?></td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">Subject</td>
                    <td class="border px-4 py-2"><?php echo $subject; ?></td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">Message</td>
                    <td class="border px-4 py-2"><?php echo $message; ?></td>
                </tr>
            </tbody>
        </table>

    </div>

</body>

</html>