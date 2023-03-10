<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com/"></script>
</head>
<body class="h-screen">
    <div class="flex justify-center p-2 items-center h-full bg-gray-300">
        <div class=" w-5/6 h-full">
            <div class="w-full shadow-xl p-3 rounded-tr-xl rounded-tl-xl justify-center flex bg-white">
                <img src="http://msivaji.in/asset/logo.png" alt="" srcset="">
            </div>
            <div class="bg-gray-100 p-3 h-4/6 flex flex-col justify-between">
                <div class="">
                    <h1 class="font-bold">Hello {{$uname}},</h1>
                <p class="font-medium">
                    your claim has been successfully submitted, and you have been assigned ID number <span class="bg-blue-700 rounded-xl text-white font-extrabold pl-2 pr-2">ID: {{$cid}}</span> for reference purposes. Please find attached the necessary documentation for your records.
                </p>
                </div>
                <div class="">
                    <p class="font-bold">Thnaks,</p>
                    <p>RapidTA</p>
                </div>
            </div>
            <div class="w-full shadow-xl p-2 rounded-br-xl rounded-bl-xl justify-center flex bg-gray-200">
                Copyright © 2023 Rapidtech IT Services PVT LTD. All rights reserved.

            </div>

        </div>
    </div>
</body>
</html>
