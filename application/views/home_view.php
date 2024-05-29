<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black h-screen flex justify-center items-center">
    <div class="border border-neutral-900 p-20 rounded-3xl shadow-md">
        <?php if(isset($data['nama'])): ?> <!-- Periksa apakah $data['nama'] terdefinisi -->
            <h2 class="text-2xl text-neutral-200 font-bold text-center mb-4"> Welcome Guys! <br>(<?= $data['nama'] ?>)</h2>
        <?php endif; ?>
       <div class="flex justify-center">
       <button onclick="window.location.href='<?php echo base_url('welcome_message') ?>'"
                class="bg-red-500 text-white mt-5 font-bold py-2 px-6 rounded-full">
            View Film
        </button>
       </div>
    </div>
</body>
</html>
