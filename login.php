<?php include "function.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body background="images/wp9764014.webp" class=" bg-no-repeat  h-full w-full object-cover  ">

    <div class="flex">
        <div class="flex w-6/12">
            <h3 class=" line-clamp-3 p-5 m-3 justify-center flex items-center ">Interior design is the art and science of enhancing the interior of a building to achieve a healthier and more aesthetically pleasing environment for the people using the space. With a keen eye for detail and a creative flair, an interior designer is someone who plans, researches, coordinates, and manages such enhancement projects. Interior design is a multifaceted profession that includes conceptual development, space planning, site inspections, programming, research, communicating with the stakeholders of a project, construction management, and execution of the design.</h3>
        </div>

        <div class="flex w-6/12">
            <div class="h-[500px] w-[350px]  mt-28 rounded-lg  p-5 m-8">
                <h1 class=" text-slate-700 text-2xl font-semibold text-center mt-3 underline">Signup to access Interior Design</h1>
                <div class="m-3 p-4">
                    <form action="" method="post">
                        <label for="" class="flex flex-col text-xl ">Name:</label>
                        <input type="text" name="name" class=" px-1 py-1 flex border border-black mb-2 w-full">
                        <label for="" class="flex flex-col text-xl ">Email:</label>
                        <input type="email" name="email" class=" px-1 py-1 flex border border-black mb-2 w-full">
                        <label for="" class="flex flex-col text-xl ">Contact:</label>
                        <input type="text" name="contact" class=" px-1 py-1 flex border border-black mb-2 w-full">
                        <label for="" class="flex flex-col text-xl ">Password:</label>
                        <input type="password" name="password" class=" px-1 py-1 flex border border-black mb-2 w-full">

                        <label for="" class=" flex justify-center items-center"></label>
                        <input type="submit" name="login" value="Submit Form" class=" px-4 py-2 bg-teal-950 text-white mt-3  p-5">
                    </form>

                </div>

            </div>

        </div>

    </div>
</body>

</html>


<?php

if (isset($_POST['login'])) {

    $data = [
        'name' => $_POST['name'],
        'contact' => $_POST['contact'],
        'email' => $_POST['email'],
        'password' => sha1($_POST['password']),
    ];
    if (insertData("clients", $data)) {
        redirect('index.php');
    }
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    $count = countData('clients', "email='$email'and password='$password'and name='$name' and contact='$contact'");


    if ($count > 0) {

        $checkAdmin = countData("clients", "email='$email' and password='$password'
         and isAdmin=true");
    }



    redirect("index.php");
}
