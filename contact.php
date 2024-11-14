<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
</head>

<body>
    <?php include "includes/header.php"; ?>
    <div class="w-full flex">
        <div class="flex flex-1">
            <img src="images/furniture_029_1.webp" alt="" class="border">
        </div>
        <div class="flex flex-1 flex-col gap-5 px-10 py-5 ">
            <h2 class="text-[#0E3F54] text-4xl">Project Inquires</h2>
            <p class="font-light tracking-wider">Thank you for your interest in working with us. Please fill out the form below by clicking on the "Project Quote" button. We typically respond within 24 to 48 hours.</p>

                <p class="font-light tracking-wider ">We love collaborating with clients so you may not have all the answers to our questions. Just mark "other" and use "Additional Notes" to explain.</p>

               <p class="font-light tracking-wider"> As always, if you prefer to speak to us directly feel free to call us at 646-933-0736</p>


            </p>
            <button class="border px-5 py-3 text-[#D1A773] border-[#D1A773] self-start">Project QUOTE</button>

        </div>
    </div>
    <div class="w-full flex py-10">

        <div class="flex flex-1 flex-col gap-5 px-10 py-5  justify-center">
            <h2  class="text-[#0E3F54] text-4xl">Outdoor Project Inquires</h2>
            <p class="font-light tracking-wider text-lg">
                TCSC Outdoors takes on a select amount of projects each year. If you have a project you want us to quote please contact us using the "Quote" button below.
            </p>

            <button class="border px-10 py-3 self-start  text-[#D1A773] border-[#D1A773] "> QUOTE</button>

        </div>
        <div class="flex flex-1">
            <img src="images/Photo_Apr_20_2_34_24_PM.webp" alt="" class="border">
        </div>
    </div>
    <div class="flex flex-col justify-center items-center h-40 w-full gap-5 py-10 ">
        <h2 class="text-[#0E3F54] text-5xl text-light">Other Inquiries</h2>
       <p class="font-light tracking-wider text-lg text-center text-slate-400"> We love hearing from our customers. If you would like to speak with a memeber of our team <br>please contact us as info@thecarpentryshopco.com or 646-933-0736</p>
    </div>
    <?php include "footer.php"; ?>
</body>

</html>