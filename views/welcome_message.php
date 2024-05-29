<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sebelah Layar</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
	/* css landing page */
	@import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap');
	@import url('https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap');

	.archivo {
		font-family: "Archivo", sans-serif;
	}

	.dm-sans {
		font-family: "DM Sans", sans-serif;
	}


	html {
		background-color: black;
	}

	.carousel {
		overflow: hidden;
	}

	.carousel-inner {
		display: flex;
		transition: transform 0.3s ease;
	}

	.carousel-item {
		min-width: 100%;
	}

	.custom-carousel {
		overflow: hidden;
	}

	.custom-carousel-inner {
		display: flex;
		transition: transform 0.3s ease;
	}

	.custom-carousel-item {
		min-width: 100%;
	}

	.custom-carousel-container {
		overflow: hidden;
	}

	.custom-carousel-track {
		display: flex;
		transition: transform 0.3s ease;
	}

	.custom-carousel-slide {
		min-width: 100%;
	}

	.faq-item {
		transition: max-height 0.3s ease;
	}

	.faq-item.collapsed {
		max-height: 0;
	}

	.faq-item.expanded {
		max-height: 1000px;
	}

	.carousel-container-automatic {
		display: flex;
		overflow-x: hidden;
		scroll-behavior: smooth;
		gap: 1rem;
	}

	.carousel-item-automatic {
		min-width: 300px;
		flex: 0 0 auto;
	}
</style>

<body>
	<header class="flex fixed flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-white border-gray-200 text-sm py-3 sm:py-0 dark:bg-black">
		<nav class="relative max-w-[85rem] gap-10 w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8" aria-label="Global">
			<div class="flex items-center justify-between">
				<a class="flex-none text-3xl font-semibold dark:text-white tracking-tighter dm-sans" href="#" aria-label="Brand">Sebelah Layar</a>
				<div class="sm:hidden">
					<button type="button" class="hs-collapse-toggle size-9 flex justify-center items-center text-sm font-semibold rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-700 dark:hover:bg-neutral-700" data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
						<svg class="hs-collapse-open:hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<line x1="3" x2="21" y1="6" y2="6" />
							<line x1="3" x2="21" y1="12" y2="12" />
							<line x1="3" x2="21" y1="18" y2="18" />
						</svg>
						<svg class="hs-collapse-open:block hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<path d="M18 6 6 18" />
							<path d="m6 6 12 12" />
						</svg>
					</button>
				</div>
			</div>
			<div class="hs-collapse mt-1 hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
				<div class="flex flex-col gap-y-4 mt-5 sm:flex-row sm:items-center archivo sm:gap-y-0 gap-5 sm:mt-0 sm:ps-7">
					<a class="font-medium text-red-500 sm:py-6" href="#" aria-current="page">About</a>
					<a class="font-medium text-gray-500 hover:text-gray-400 sm:py-6 dark:text-neutral-400 dark:hover:text-neutral-500" href="#">Contact</a>
					<a class="font-medium text-gray-500 hover:text-gray-400 sm:py-6 dark:text-neutral-400 dark:hover:text-neutral-500" href="#">Services</a>
					<a class="font-medium text-gray-500 hover:text-gray-400 sm:py-6 dark:text-neutral-400 dark:hover:text-neutral-500" href="#">Blog</a>

					<div class="flex items-center archivo gap-x-2 sm:ms-auto">
						<a class="flex items-center  gap-x-2 font-medium text-gray-500 hover:text-red-500" href="#">
							<svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
								<circle cx="12" cy="7" r="4" />
							</svg>
							Log in
						</a>
					</div>
					<div class="relative mt-4 md:mt-0">
						<span class="absolute inset-y-0 left-0 flex items-center pl-3">
							<svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
								<path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
							</svg>
						</span>
						<input type="text" class="w-full py-2 pl-10 pr-4 text-gray-700 border rounded-3xl bg-black dark:text-gray-300 dark:border-gray-600 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Search">
					</div>
				</div>
			</div>
		</nav>
	</header>

	

	<!-- carousel -->
	<div class="carousel w-full">
		<div class="carousel-inner">
			<div class="carousel-item overflow-hidden bg-[url('https://i.ytimg.com/vi/n0r1fTg-HvA/maxresdefault.jpg')] bg-cover opacity-50 bg-blue-300 flex justify-center items-center h-[900px]"></div>
			<div class="carousel-item overflow-hidden bg-[url('https://i.ytimg.com/vi/G6KA3vWuQ3o/maxresdefault.jpg')] bg-cover opacity-50 bg-green-300 flex justify-center items-center h-[900px]"></div>
			<div class="carousel-item overflow-hidden bg-[url('https://asset.kompas.com/crops/tYnopPEshyaARHNGOzeVvhiLvCg=/0x362:662x804/750x500/data/photo/2024/01/29/65b77370d929f.png')] bg-cover opacity-50 bg-yellow-300 flex justify-center items-center h-[900px]"></div>
		</div>
	</div>

	<!-- attention -->
	<div class="bg-red-500 text-white px-4 py-3 rounded-md flex justify-center items-center">
		<svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
			<path d="M9 12a2 2 0 1 1 0-4a2 2 0 0 1 0 4zM3 6a2 2 0 1 1 0-4a2 2 0 0 1 0 4z" />
		</svg>
		<span class="text-center archivo">Perhatian!, bahwa website ini mengandung hamil 20 bulan dan belum di lahirkan, tolong</span>
	</div>

	<!-- card Product -->
	<div class="mt-20">
		<h1 class="text-neutral-200 text-5xl dm-sans tracking-tight font-semibold text-center">Most <span class="text-red-500">Popular</span></h1>
		<p class="text-neutral-400 text-center archivo mt-2">with many of the best movie genres</p>
	</div>
	<div class="flex justify-center items-center mt-12">
		<div class="grid grid-cols-1 sm:grid-cols-4 md:grid-cols-6 gap-6">
			<!-- Card 1 -->
			<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
				<img class="w-full h-40 object-cover object-center" src="https://cdn1-production-images-kly.akamaized.net/yxaY5QaYOmdZqkOxFXScBL7vJtg=/800x450/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/920091/original/056141600_1436170263-character-banner.jpeg" alt="Product Image">
				<div class="p-4">
					<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 1</h2>
					<p class="text-gray-300 text-sm archivo mt-2">Description of product 1.</p>
					<div class="mt-8 flex justify-between items-center">
						<span class="text-yellow-500 font-bold">$20</span>
						<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
					</div>
				</div>
			</div>

			<!-- Card 2 -->
			<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
				<img class="w-full h-40 object-cover object-center" src="https://dl.kaskus.id/cdn.tigthai.com/imguploads/202203/21/04361810016478747859581_Mov1.jpg" alt="Product Image">
				<div class="p-4">
					<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 2</h2>
					<p class="text-gray-300 text-sm archivo mt-2">Description of product 2.</p>
					<div class="mt-8 flex justify-between items-center">
						<span class="text-yellow-500 font-bold">$25</span>
						<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
					</div>
				</div>
			</div>

			<!-- Card 3 -->
			<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
				<img class="w-full h-40 object-cover object-center" src="https://www.harapanrakyat.com/wp-content/uploads/2023/08/Sinopsis-film-A-Keganjilan-di-Sebuah-Sekolah-Populer.jpg" alt="Product Image">
				<div class="p-4">
					<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 3</h2>
					<p class="text-gray-300 text-sm archivo mt-2">Description of product 3.</p>
					<div class="mt-8 flex justify-between items-center">
						<span class="text-yellow-500 font-bold">$30</span>
						<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
					</div>
				</div>
			</div>

			<!-- Card 4 -->
			<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
				<img class="w-full h-40 object-cover object-center" src="https://www.whiteboardjournal.com/wp-content/uploads/2021/01/https___hypebeast.com_image_2021_01_netflix-700-million-usd-korean-content-investment-info-001.jpg" alt="Product Image">
				<div class="p-4">
					<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 4</h2>
					<p class="text-gray-300 text-sm archivo mt-2">Description of product 4.</p>
					<div class="mt-8 flex justify-between items-center">
						<span class="text-yellow-500 font-bold">$35</span>
						<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
					</div>
				</div>
			</div>

			<!-- card 5 -->
			<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
				<img class="w-full h-40 object-cover object-center" src="https://cinemags.org/wp-content/uploads/2018/01/Film-Januari-2018.jpg" alt="Product Image">
				<div class="p-4">
					<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 4</h2>
					<p class="text-gray-300 text-sm archivo mt-2">Description of product 4.</p>
					<div class="mt-8 flex justify-between items-center">
						<span class="text-yellow-500 font-bold">$35</span>
						<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
					</div>
				</div>
			</div>

			<!-- card 6 -->
			<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
				<img class="w-full h-40 object-cover object-center" src="https://www.viu.com/ott/id/articles/wp-content/uploads/2020/03/nonton-film-indonesia-pengabdi-setan-viu-800x450.jpg" alt="Product Image">
				<div class="p-4">
					<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 4</h2>
					<p class="text-gray-300 text-sm archivo mt-2">Description of product 4.</p>
					<div class="mt-8 flex justify-between items-center">
						<span class="text-yellow-500 font-bold">$35</span>
						<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- next flex card -->
	<div class="flex justify-center items-center mt-12">
		<div class="grid grid-cols-1 sm:grid-cols-4 md:grid-cols-6 gap-6">
			<!-- Card 1 -->
			<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
				<img class="w-full h-40 object-cover object-center" src="https://images.tokopedia.net/blog-tokopedia-com/uploads/2019/01/1_yRNV4OGyhv4fNIYnIMekUQ.jpeg" alt="Product Image">
				<div class="p-4">
					<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 1</h2>
					<p class="text-gray-300 text-sm archivo mt-2">Description of product 1.</p>
					<div class="mt-8 flex justify-between items-center">
						<span class="text-yellow-500 font-bold">$20</span>
						<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
					</div>
				</div>
			</div>

			<!-- Card 2 -->
			<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
				<img class="w-full h-40 object-cover object-center" src="https://o-cdn-cas.sirclocdn.com/parenting/images/film-action-terbaik.width-800.format-webp.webp" alt="Product Image">
				<div class="p-4">
					<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 2</h2>
					<p class="text-gray-300 text-sm archivo mt-2">Description of product 2.</p>
					<div class="mt-8 flex justify-between items-center">
						<span class="text-yellow-500 font-bold">$25</span>
						<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
					</div>
				</div>
			</div>

			<!-- Card 3 -->
			<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
				<img class="w-full h-40 object-cover object-center" src="https://www.yupiland.com/assets/images/blog/Film%20Disney%20aladdin.jpeg" alt="Product Image">
				<div class="p-4">
					<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 3</h2>
					<p class="text-gray-300 text-sm archivo mt-2">Description of product 3.</p>
					<div class="mt-8 flex justify-between items-center">
						<span class="text-yellow-500 font-bold">$30</span>
						<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
					</div>
				</div>
			</div>

			<!-- Card 4 -->
			<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
				<img class="w-full h-40 object-cover object-center" src="https://www.ruparupa.com/blog/wp-content/uploads/2022/11/live-action-disney-maleficent.jpg" alt="Product Image">
				<div class="p-4">
					<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 4</h2>
					<p class="text-gray-300 text-sm archivo mt-2">Description of product 4.</p>
					<div class="mt-8 flex justify-between items-center">
						<span class="text-yellow-500 font-bold">$35</span>
						<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
					</div>
				</div>
			</div>

			<!-- card 5 -->
			<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
				<img class="w-full h-40 object-cover object-center" src="https://cdn0-production-images-kly.akamaized.net/-JrY4R_PfwroX5lJYUQMq0DKaS8=/800x450/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4044589/original/013306000_1654566885-Thumbnail_-_Minority_Report_-_A.jpg" alt="Product Image">
				<div class="p-4">
					<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 4</h2>
					<p class="text-gray-300 text-sm archivo mt-2">Description of product 4.</p>
					<div class="mt-8 flex justify-between items-center">
						<span class="text-yellow-500 font-bold">$35</span>
						<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
					</div>
				</div>
			</div>

			<!-- card 6 -->
			<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
				<img class="w-full h-40 object-cover object-center" src="https://foto.kontan.co.id/t2ORxu-QFIS3TTzVVcqFtQPAesU=/smart/filters:format(webp)/2022/03/11/1538866374p.jpg" alt="Product Image">
				<div class="p-4">
					<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 4</h2>
					<p class="text-gray-300 text-sm archivo mt-2">Description of product 4.</p>
					<div class="mt-8 flex justify-between items-center">
						<span class="text-yellow-500 font-bold">$35</span>
						<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section>
		<!-- Reviews List -->
		<div class="flex justify-center">
			<div id="reviewsList" class="carousel-container-automatic mt-36">
				<!-- Komentar akan ditambahkan di sini -->
			</div>
		</div>
	</section>

	<!-- selection category filter film -->
	<div class="mt-32">
		<h1 class="text-center text-neutral-200 dm-sans font-semibold text-5xl">You can filter what you want</h1>
		<p class="archivo max-w-xl mx-auto text-center mt-3 text-neutral-400">In this filter you can use our feature with year selection, movie genre and movie rating.
			Collect all the categories you like.</p>
	</div>
	<section class="filter-section mt-12 container mx-auto my-8 p-7 bg-neutral-950 shadow-lg rounded-2xl">
		<div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0 md:space-x-4">
			<div class="flex flex-col space-y-2">
				<label for="category" class="font-semibold dm-sans text-gray-200">Kategori</label>
				<select id="category" class="p-2 archivo border text-neutral-200 bg-neutral-800 border-gray-900 rounded-md">
					<option value="">Semua Kategori</option>
					<option value="action">Action</option>
					<option value="comedy">Comedy</option>
					<option value="drama">Drama</option>
					<option value="horror">Horror</option>
				</select>
			</div>
			<div class="flex flex-col space-y-2">
				<label for="year" class="font-semibold dm-sans text-gray-200">Tahun</label>
				<select id="year" class="p-2 border archivo text-neutral-200 bg-neutral-800 border-gray-900 rounded-md">
					<option value="">Semua Tahun</option>
					<option value="2024">2024</option>
					<option value="2023">2023</option>
					<option value="2022">2022</option>
					<option value="2021">2021</option>
				</select>
			</div>
			<div class="flex flex-col space-y-2">
				<label for="rating" class="font-semibold dm-sans text-gray-200">Rating</label>
				<select id="rating" class="p-2 border archivo text-neutral-200 bg-neutral-800 border-gray-900 rounded-md">
					<option value="">Semua Rating</option>
					<option value="5">5 Bintang</option>
					<option value="4">4 Bintang</option>
					<option value="3">3 Bintang</option>
					<option value="2">2 Bintang</option>
					<option value="1">1 Bintang</option>
				</select>
			</div>
			<button id="applyFilters" class="mt-4 md:mt-0 bg-blue-600 text-white p-2 rounded-3xl px-4 archivo hover:bg-blue-700 transition">
				Terapkan
			</button>
		</div>
	</section>

	<section class="film-results container mx-auto my-8 p-4 -mt-14 bg-neutral-950 shadow-lg rounded-lg">
		<div id="filmsGrid" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
			<!-- Film cards will be dynamically inserted here by JavaScript -->
		</div>
	</section>

	<!-- next flex card -->
	<div class="flex justify-center items-center mt-12">
		<div class="grid grid-cols-1 sm:grid-cols-4 md:grid-cols-6 gap-6">
			<!-- Card 1 -->
			<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
				<img class="w-full h-40 object-cover object-center" src="https://img.okezone.com/content/2020/07/25/620/2251857/5-film-terbaik-karya-christopher-nolan-g2P8XSexiO.jpg" alt="Product Image">
				<div class="p-4">
					<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 1</h2>
					<p class="text-gray-300 text-sm archivo mt-2">Description of product 1.</p>
					<div class="mt-8 flex justify-between items-center">
						<span class="text-yellow-500 font-bold">$20</span>
						<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
					</div>
				</div>
			</div>

			<!-- Card 2 -->
			<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
				<img class="w-full h-40 object-cover object-center" src="https://cdn.rri.co.id/berita/23/images/1706065573202-0/yo0qtrsu1e8qvwy.jpeg" alt="Product Image">
				<div class="p-4">
					<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 2</h2>
					<p class="text-gray-300 text-sm archivo mt-2">Description of product 2.</p>
					<div class="mt-8 flex justify-between items-center">
						<span class="text-yellow-500 font-bold">$25</span>
						<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
					</div>
				</div>
			</div>

			<!-- Card 3 -->
			<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
				<img class="w-full h-40 object-cover object-center" src="https://img.youtube.com/vi/2x8UzELvKlY/maxresdefault.jpg" alt="Product Image">
				<div class="p-4">
					<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 3</h2>
					<p class="text-gray-300 text-sm archivo mt-2">Description of product 3.</p>
					<div class="mt-8 flex justify-between items-center">
						<span class="text-yellow-500 font-bold">$30</span>
						<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
					</div>
				</div>
			</div>

			<!-- Card 4 -->
			<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
				<img class="w-full h-40 object-cover object-center" src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p3/51/2024/05/07/5-Film-action-terbaik-2024-1959866815.jpg" alt="Product Image">
				<div class="p-4">
					<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 4</h2>
					<p class="text-gray-300 text-sm archivo mt-2">Description of product 4.</p>
					<div class="mt-8 flex justify-between items-center">
						<span class="text-yellow-500 font-bold">$35</span>
						<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
					</div>
				</div>
			</div>

			<!-- card 5 -->
			<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
				<img class="w-full h-40 object-cover object-center" src="https://www.anakui.com/wp-content/uploads/2023/12/Film-Action-Netflix-Terbaik.jpg" alt="Product Image">
				<div class="p-4">
					<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 4</h2>
					<p class="text-gray-300 text-sm archivo mt-2">Description of product 4.</p>
					<div class="mt-8 flex justify-between items-center">
						<span class="text-yellow-500 font-bold">$35</span>
						<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
					</div>
				</div>
			</div>

			<!-- card 6 -->
			<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
				<img class="w-full h-40 object-cover object-center" src="https://asset-2.tstatic.net/palu/foto/bank/images/Sinopsis-Film-Agak-Laen.jpg" alt="Product Image">
				<div class="p-4">
					<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 4</h2>
					<p class="text-gray-300 text-sm archivo mt-2">Description of product 4.</p>
					<div class="mt-8 flex justify-between items-center">
						<span class="text-yellow-500 font-bold">$35</span>
						<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="mt-36">
		<h1 class="text-5xl dm-sans text-center text-neutral-200 font-semibold">Tracking Episode</h1>
		<p class="text-center mt-3 max-w-sm archivo text-neutral-300 mx-auto">You can search for episodes of this movie that you like.
			we present fast and furious.</p>
	</div>
	<section class="container mx-auto mt-14	 my-8 p-4 bg-neutral-950 shadow-lg rounded-2xl">
		<div id="filmGrid" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 rounded-3xl gap-4 overflow-hidden">
			<!-- Film cards will be dynamically inserted here by JavaScript -->
		</div>
		<div class="flex justify-center mt-4 mb-4">
			<button id="moreFilmsBtn" class="mt-4 bg-blue-600 text-white p-2 rounded-full px-5 archivo hover:bg-blue-700 transition">
				More Films
			</button>
		</div>
	</section>

	<!-- next again -->
	<div class="flex justify-center items-center mt-32">
		<div class="grid grid-cols-1 sm:grid-cols-4 md:grid-cols-6 gap-6">
			<!-- Card 1 -->
			<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
				<img class="w-full h-40 object-cover object-center" src="https://www.parfi.or.id/wp-content/uploads/2024/02/The-Old-Way-2023-Film-Nicolas-Cage-Terbaru.jpg" alt="Product Image">
				<div class="p-4">
					<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 1</h2>
					<p class="text-gray-300 text-sm archivo mt-2">Description of product 1.</p>
					<div class="mt-8 flex justify-between items-center">
						<span class="text-yellow-500 font-bold">$20</span>
						<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
					</div>
				</div>
			</div>

			<!-- Card 2 -->
			<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
				<img class="w-full h-40 object-cover object-center" src="https://kastara.id/wp-content/uploads/2018/02/Film-Feb-2018.jpg" alt="Product Image">
				<div class="p-4">
					<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 2</h2>
					<p class="text-gray-300 text-sm archivo mt-2">Description of product 2.</p>
					<div class="mt-8 flex justify-between items-center">
						<span class="text-yellow-500 font-bold">$25</span>
						<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
					</div>
				</div>
			</div>

			<!-- Card 3 -->
			<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
				<img class="w-full h-40 object-cover object-center" src="https://images.tokopedia.net/img/JFrBQq/2022/6/29/550195e2-f04d-40c6-983b-32ba66d7d35b.jpg" alt="Product Image">
				<div class="p-4">
					<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 3</h2>
					<p class="text-gray-300 text-sm archivo mt-2">Description of product 3.</p>
					<div class="mt-8 flex justify-between items-center">
						<span class="text-yellow-500 font-bold">$30</span>
						<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
					</div>
				</div>
			</div>

			<!-- Card 4 -->
			<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
				<img class="w-full h-40 object-cover object-center" src="https://www.blibli.com/friends-backend/wp-content/uploads/2023/02/B100180-cover.jpg" alt="Product Image">
				<div class="p-4">
					<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 4</h2>
					<p class="text-gray-300 text-sm archivo mt-2">Description of product 4.</p>
					<div class="mt-8 flex justify-between items-center">
						<span class="text-yellow-500 font-bold">$35</span>
						<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
					</div>
				</div>
			</div>

			<!-- card 5 -->
			<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
				<img class="w-full h-40 object-cover object-center" src="https://images.tokopedia.net/img/KRMmCm/2023/12/8/211ba8a9-9649-4fc3-8cd6-a0256d84ee17.jpg	" alt="Product Image">
				<div class="p-4">
					<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 4</h2>
					<p class="text-gray-300 text-sm archivo mt-2">Description of product 4.</p>
					<div class="mt-8 flex justify-between items-center">
						<span class="text-yellow-500 font-bold">$35</span>
						<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
					</div>
				</div>
			</div>

			<!-- card 6 -->
			<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
				<img class="w-full h-40 object-cover object-center" src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p2/06/2024/02/12/sinospsis-Film-Women-From-Rote-Island-3862409981.jpg" alt="Product Image">
				<div class="p-4">
					<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 4</h2>
					<p class="text-gray-300 text-sm archivo mt-2">Description of product 4.</p>
					<div class="mt-8 flex justify-between items-center">
						<span class="text-yellow-500 font-bold">$35</span>
						<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- next content card -->
	<div class="flex justify-center items-center mt-12">
		<div class="grid grid-cols-1 sm:grid-cols-4 md:grid-cols-6 gap-6">
			<!-- Card 1 -->
			<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
				<img class="w-full h-40 object-cover object-center" src="https://foto.kontan.co.id/1EnwB1khOQtGbb_FvthIGsu4MQ0=/smart/filters:format(webp)/2021/10/13/1625921494p.jpg" alt="Product Image">
				<div class="p-4">
					<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 1</h2>
					<p class="text-gray-300 text-sm archivo mt-2">Description of product 1.</p>
					<div class="mt-8 flex justify-between items-center">
						<span class="text-yellow-500 font-bold">$20</span>
						<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
					</div>
				</div>
			</div>

			<!-- Card 2 -->
			<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
				<img class="w-full h-40 object-cover object-center" src="https://assets.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2023/06/11/the-lord-of-the-rings-the-fellowship-of-the-ring-2238560830.jpg" alt="Product Image">
				<div class="p-4">
					<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 2</h2>
					<p class="text-gray-300 text-sm archivo mt-2">Description of product 2.</p>
					<div class="mt-8 flex justify-between items-center">
						<span class="text-yellow-500 font-bold">$25</span>
						<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
					</div>
				</div>
			</div>

			<!-- Card 3 -->
			<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
				<img class="w-full h-40 object-cover object-center" src="https://i.ytimg.com/vi/t6QEAwVF_FA/maxresdefault.jpg" alt="Product Image">
				<div class="p-4">
					<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 3</h2>
					<p class="text-gray-300 text-sm archivo mt-2">Description of product 3.</p>
					<div class="mt-8 flex justify-between items-center">
						<span class="text-yellow-500 font-bold">$30</span>
						<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
					</div>
				</div>
			</div>

			<!-- Card 4 -->
			<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
				<img class="w-full h-40 object-cover object-center" src="https://cdn1.katadata.co.id/media/images/thumb/2022/11/01/FILM_PERANG_TERBAIK_HOLLYWOOD-2022_11_01-13_38_21_31bd9015b5d0571933565a9515d5bb3d_960x640_thumb.png" alt="Product Image">
				<div class="p-4">
					<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 4</h2>
					<p class="text-gray-300 text-sm archivo mt-2">Description of product 4.</p>
					<div class="mt-8 flex justify-between items-center">
						<span class="text-yellow-500 font-bold">$35</span>
						<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
					</div>
				</div>
			</div>

			<!-- card 5 -->
			<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
				<img class="w-full h-40 object-cover object-center" src="https://media.suara.com/pictures/653x366/2021/11/01/11349-film-jiu-jitsu.jpg" alt="Product Image">
				<div class="p-4">
					<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 4</h2>
					<p class="text-gray-300 text-sm archivo mt-2">Description of product 4.</p>
					<div class="mt-8 flex justify-between items-center">
						<span class="text-yellow-500 font-bold">$35</span>
						<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
					</div>
				</div>
			</div>

			<!-- card 6 -->
			<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
				<img class="w-full h-40 object-cover object-center" src="https://cdn.idntimes.com/content-images/community/2023/01/image-d515a2dfc82ace1585d96e2e64b2b9d6.jpg" alt="Product Image">
				<div class="p-4">
					<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 4</h2>
					<p class="text-gray-300 text-sm archivo mt-2">Description of product 4.</p>
					<div class="mt-8 flex justify-between items-center">
						<span class="text-yellow-500 font-bold">$35</span>
						<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
					</div>
				</div>
			</div>
		</div>
	</div>



	<section>
		<!-- next content card -->
		<div class="flex justify-center items-center mt-12">
			<div class="grid grid-cols-1 sm:grid-cols-4 md:grid-cols-6 gap-6">
				<!-- Card 1 -->
				<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
					<img class="w-full h-40 object-cover object-center" src="https://cdn.linkaja.com/website/posts/April2022/1650875581-film-barat-terbaru.jpg" alt="Product Image">
					<div class="p-4">
						<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 1</h2>
						<p class="text-gray-300 text-sm archivo mt-2">Description of product 1.</p>
						<div class="mt-8 flex justify-between items-center">
							<span class="text-yellow-500 font-bold">$20</span>
							<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
						</div>
					</div>
				</div>

				<!-- Card 2 -->
				<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
					<img class="w-full h-40 object-cover object-center" src="https://img.inews.co.id/media/1200/files/inews_new/2022/01/01/marvel_dr_strange_2.jpg" alt="Product Image">
					<div class="p-4">
						<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 2</h2>
						<p class="text-gray-300 text-sm archivo mt-2">Description of product 2.</p>
						<div class="mt-8 flex justify-between items-center">
							<span class="text-yellow-500 font-bold">$25</span>
							<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
						</div>
					</div>
				</div>

				<!-- Card 3 -->
				<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
					<img class="w-full h-40 object-cover object-center" src="https://awsimages.detik.net.id/visual/2021/01/05/mission-impossible-7_169.jpeg?w=650" alt="Product Image">
					<div class="p-4">
						<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 3</h2>
						<p class="text-gray-300 text-sm archivo mt-2">Description of product 3.</p>
						<div class="mt-8 flex justify-between items-center">
							<span class="text-yellow-500 font-bold">$30</span>
							<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
						</div>
					</div>
				</div>

				<!-- Card 4 -->
				<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
					<img class="w-full h-40 object-cover object-center" src="https://www.ruparupa.com/blog/wp-content/uploads/2022/04/film-netflix-terbaru-2022.jpeg" alt="Product Image">
					<div class="p-4">
						<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 4</h2>
						<p class="text-gray-300 text-sm archivo mt-2">Description of product 4.</p>
						<div class="mt-8 flex justify-between items-center">
							<span class="text-yellow-500 font-bold">$35</span>
							<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
						</div>
					</div>
				</div>

				<!-- card 5 -->
				<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
					<img class="w-full h-40 object-cover object-center" src="https://assets.promediateknologi.id/crop/0x42:750x536/750x500/webp/photo/2023/01/02/2238754889.jpg" alt="Product Image">
					<div class="p-4">
						<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 4</h2>
						<p class="text-gray-300 text-sm archivo mt-2">Description of product 4.</p>
						<div class="mt-8 flex justify-between items-center">
							<span class="text-yellow-500 font-bold">$35</span>
							<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
						</div>
					</div>
				</div>

				<!-- card 6 -->
				<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
					<img class="w-full h-40 object-cover object-center" src="https://media.suara.com/pictures/970x544/2022/07/10/24423-poster-incantation-netflix.jpg		" alt="Product Image">
					<div class="p-4">
						<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 4</h2>
						<p class="text-gray-300 text-sm archivo mt-2">Description of product 4.</p>
						<div class="mt-8 flex justify-between items-center">
							<span class="text-yellow-500 font-bold">$35</span>
							<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- next content card -->
		<div class="flex justify-center items-center mt-12">
			<div class="grid grid-cols-1 sm:grid-cols-4 md:grid-cols-6 gap-6">
				<!-- Card 1 -->
				<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
					<img class="w-full h-40 object-cover object-center" src="https://foto.kontan.co.id/1EnwB1khOQtGbb_FvthIGsu4MQ0=/smart/filters:format(webp)/2021/10/13/1625921494p.jpg" alt="Product Image">
					<div class="p-4">
						<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 1</h2>
						<p class="text-gray-300 text-sm archivo mt-2">Description of product 1.</p>
						<div class="mt-8 flex justify-between items-center">
							<span class="text-yellow-500 font-bold">$20</span>
							<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
						</div>
					</div>
				</div>

				<!-- Card 2 -->
				<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
					<img class="w-full h-40 object-cover object-center" src="https://assets.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2023/06/11/the-lord-of-the-rings-the-fellowship-of-the-ring-2238560830.jpg" alt="Product Image">
					<div class="p-4">
						<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 2</h2>
						<p class="text-gray-300 text-sm archivo mt-2">Description of product 2.</p>
						<div class="mt-8 flex justify-between items-center">
							<span class="text-yellow-500 font-bold">$25</span>
							<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
						</div>
					</div>
				</div>

				<!-- Card 3 -->
				<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
					<img class="w-full h-40 object-cover object-center" src="https://i.ytimg.com/vi/t6QEAwVF_FA/maxresdefault.jpg" alt="Product Image">
					<div class="p-4">
						<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 3</h2>
						<p class="text-gray-300 text-sm archivo mt-2">Description of product 3.</p>
						<div class="mt-8 flex justify-between items-center">
							<span class="text-yellow-500 font-bold">$30</span>
							<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
						</div>
					</div>
				</div>

				<!-- Card 4 -->
				<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
					<img class="w-full h-40 object-cover object-center" src="https://cdn1.katadata.co.id/media/images/thumb/2022/11/01/FILM_PERANG_TERBAIK_HOLLYWOOD-2022_11_01-13_38_21_31bd9015b5d0571933565a9515d5bb3d_960x640_thumb.png" alt="Product Image">
					<div class="p-4">
						<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 4</h2>
						<p class="text-gray-300 text-sm archivo mt-2">Description of product 4.</p>
						<div class="mt-8 flex justify-between items-center">
							<span class="text-yellow-500 font-bold">$35</span>
							<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
						</div>
					</div>
				</div>

				<!-- card 5 -->
				<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
					<img class="w-full h-40 object-cover object-center" src="https://media.suara.com/pictures/653x366/2021/11/01/11349-film-jiu-jitsu.jpg" alt="Product Image">
					<div class="p-4">
						<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 4</h2>
						<p class="text-gray-300 text-sm archivo mt-2">Description of product 4.</p>
						<div class="mt-8 flex justify-between items-center">
							<span class="text-yellow-500 font-bold">$35</span>
							<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
						</div>
					</div>
				</div>

				<!-- card 6 -->
				<div class="bg-neutral-950 w-60 rounded-lg overflow-hidden shadow-md">
					<img class="w-full h-40 object-cover object-center" src="https://cdn.idntimes.com/content-images/community/2023/01/image-d515a2dfc82ace1585d96e2e64b2b9d6.jpg" alt="Product Image">
					<div class="p-4">
						<h2 class="text-lg text-neutral-200 dm-sans font-semibold">Product 4</h2>
						<p class="text-gray-300 text-sm archivo mt-2">Description of product 4.</p>
						<div class="mt-8 flex justify-between items-center">
							<span class="text-yellow-500 font-bold">$35</span>
							<button class="px-3 py-1 bg-blue-500 text-white rounded archivo hover:bg-blue-600 focus:outline-none text-sm focus:bg-blue-600">Add to Cart</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- carousel popular card product -->
	<div class="mt-24">
		<h1 class="text-neutral-200 text-5xl dm-sans tracking-tight font-semibold text-center"><span class="text-red-500">Free</span> for Watching</h1>
		<p class="text-neutral-400 text-center max-w-sm mx-auto archivo mt-2">we provide many free movies that you can watch on this platform.</p>
	</div>
	<div class="xl:flex items-center gap-10 mt-14 justify-center">
		<div class="custom-carousel rounded-2xl w-[500px]">
			<div class="custom-carousel-inner">
				<div class="custom-carousel-item">
					<div class="bg-neutral-950 rounded-2xl overflow-hidden shadow-md">
						<img class="w-full h-72 object-cover object-center" src="https://cdn0-production-images-kly.akamaized.net/u26V6ZK0lhoMTECm99vUW-iMHks=/800x450/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3233570/original/047880900_1599684220-TVN_Cover-Title-Thumbnail.jpg" alt="Product Image" />
						<div class="p-4">
							<h2 class="text-lg text-neutral-200 font-semibold">Product 1</h2>
							<p class="text-gray-300 mt-2">Description of product 1.</p>
							<div class="mt-4 flex justify-between items-center">
								<span class="text-yellow-500 font-bold">free</span>
								<button class="px-3 py-1 bg-blue-500 text-white rounded text-sm hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
									Add to Cart
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="custom-carousel-item">
					<div class="bg-neutral-950 rounded-2xl overflow-hidden shadow-md">
						<img class="w-full h-72 object-cover object-center" src="https://images.tokopedia.net/img/JFrBQq/2022/6/29/550195e2-f04d-40c6-983b-32ba66d7d35b.jpg" alt="Product Image" />
						<div class="p-4">
							<h2 class="text-lg text-neutral-200 font-semibold">Product 2</h2>
							<p class="text-gray-300 mt-2">Description of product 2.</p>
							<div class="mt-4 flex justify-between items-center">
								<span class="text-yellow-500 font-bold">free</span>
								<button class="px-3 py-1 bg-blue-500 text-white rounded text-sm hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
									Add to Cart
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="custom-carousel-item">
					<div class="bg-neutral-950 rounded-2xl overflow-hidden shadow-md">
						<img class="w-full h-72 object-cover object-center" src="https://media.sukabumiupdate.com/media/2023/07/19/1689764733_64b7c37dcd837_QcGQRxUOx5cjub9rGOT6.webp" alt="Product Image" />
						<div class="p-4">
							<h2 class="text-lg text-neutral-200 font-semibold">Product 3</h2>
							<p class="text-gray-300 mt-2">Description of product 3.</p>
							<div class="mt-4 flex justify-between items-center">
								<span class="text-yellow-500 font-bold">free</span>
								<button class="px-3 py-1 bg-blue-500 text-white rounded text-sm hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
									Add to Cart
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- carousel card -->
		<div class="custom-carousel-container w-[500px] rounded-2xl">
			<div class="custom-carousel-track ">
				<div class="custom-carousel-slide">
					<div class="bg-neutral-950 rounded-2xl overflow-hidden shadow-md">
						<img class="w-full h-72 object-cover object-center" src="https://t-2.tstatic.net/kaltim/foto/bank/images/poster-film-jin-dan-jun.jpg" alt="Product Image">
						<div class="p-4">
							<h2 class="text-lg text-neutral-200 font-semibold">Product 1</h2>
							<p class="text-gray-300 mt-2">Description of product 1.</p>
							<div class="mt-4 flex justify-between items-center">
								<span class="text-yellow-500 font-bold">free</span>
								<button class="px-3 py-1 bg-blue-500 text-white rounded text-sm hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Add to Cart</button>
							</div>
						</div>
					</div>
				</div>
				<div class="custom-carousel-slide">
					<div class="bg-neutral-950 rounded-2xl overflow-hidden shadow-md">
						<img class="w-full h-72 object-cover object-center" src="https://www.ruparupa.com/blog/wp-content/uploads/2022/03/Encanto-Film-animasi-disney.jpeg" alt="Product Image">
						<div class="p-4">
							<h2 class="text-lg text-neutral-200 font-semibold">Product 2</h2>
							<p class="text-gray-300 mt-2">Description of product 2.</p>
							<div class="mt-4 flex justify-between items-center">
								<span class="text-yellow-500 font-bold">free</span>
								<button class="px-3 py-1 bg-blue-500 text-white rounded text-sm hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Add to Cart</button>
							</div>
						</div>
					</div>
				</div>
				<div class="custom-carousel-slide">
					<div class="bg-neutral-950 rounded-2xl overflow-hidden shadow-md">
						<img class="w-full h-72 object-cover object-center" src="https://asset-a.grid.id/crop/0x0:0x0/700x465/photo/cewekbangetfoto/original/33119_catat-6-film-keren-wajib-tonton-di-tahun-2017.png" alt="Product Image">
						<div class="p-4">
							<h2 class="text-lg text-neutral-200 font-semibold">Product 3</h2>
							<p class="text-gray-300 mt-2">Description of product 3.</p>
							<div class="mt-4 flex justify-between items-center">
								<span class="text-yellow-500 font-bold">free</span>
								<button class="px-3 py-1 bg-blue-500 text-white rounded text-sm hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Add to Cart</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- forms -->
	<div>
		<h1 class="text-3xl dm-sans font-semibold mt-32 text-center text-neutral-200">Send your Opini!</h1>
		<p class="max-w-xl text-center archivo text-neutral-400 mt-3 mx-auto">Any opinions, inputs, conclusions, suggestions and criticisms will be very influential for us in developing this website.</p>
	</div>
	<div class="xl:flex gap-10 grid items-center justify-center mt-16">
		<!-- Review Section -->
		<section class="w-full max-w-2xl mx-auto xl:mx-0 p-5 bg-neutral-950 rounded-3xl shadow-md">
			<h2 class="text-3xl font-bold mb-6 text-neutral-200 dm-sans">Review Film</h2>
			<!-- Review Form -->
			<form id="reviewForm" class="mb-6" autocomplete="off">
				<div class="mb-4">
					<label for="name" class="block text-gray-200 dm-sans">Nama:</label>
					<input type="text" id="name" class="w-full text-neutral-200 p-2 rounded-2xl mt-2 bg-neutral-900" autocomplete="off" required />
				</div>
				<div class="mb-4">
					<label for="review" class="block text-gray-200 dm-sans">Komentar:</label>
					<input type="text" id="review" class="w-full text-neutral-200 p-2 h-44 mt-2 bg-neutral-900 rounded-2xl" autocomplete="off" required />
				</div>
				<div class="flex justify-center">
					<button type="submit" class="bg-blue-500 hover:bg-blue-600 hover:scale-95 duration-300 archivo text-white px-10 p-2 mt-10 rounded-full">
						Kirim
					</button>
				</div>
			</form>
		</section>
		</form>
	</div>


	<!-- footer -->
	<footer class="px-4 mt-32 bg-neutral-950 text-neutral-400">
		<div class="container flex flex-col justify-between py-10 mx-auto space-y-8 lg:flex-row lg:space-y-0">
			<div class="lg:w-1/3">
				<span class="self-center text-2xl text-neutral-200 font-semibold dm-sans tracking-tighter">Sebelah Layar</span>
			</div>
			<div class="grid grid-cols-2 text-sm gap-x-3 gap-y-8 lg:w-2/3 sm:grid-cols-4">
				<div class="space-y-3">
					<h3 class="tracking-wide uppercase text-gray-200">Product</h3>
					<ul class="space-y-1 archivo">
						<li>
							<a rel="noopener noreferrer" href="#">Features</a>
						</li>
						<li>
							<a rel="noopener noreferrer" href="#">Integrations</a>
						</li>
						<li>
							<a rel="noopener noreferrer" href="#">Pricing</a>
						</li>
						<li>
							<a rel="noopener noreferrer" href="#">FAQ</a>
						</li>
					</ul>
				</div>
				<div class="space-y-3">
					<h3 class="tracking-wide uppercase text-gray-200">Company</h3>
					<ul class="space-y-1 archivo">
						<li>
							<a rel="noopener noreferrer" href="#">Privacy</a>
						</li>
						<li>
							<a rel="noopener noreferrer" href="#">Terms of Service</a>
						</li>
					</ul>
				</div>
				<div class="space-y-3">
					<h3 class="uppercase text-gray-200">Developers</h3>
					<ul class="space-y-1 archivo">
						<li>
							<a rel="noopener noreferrer" href="#">Public API</a>
						</li>
						<li>
							<a rel="noopener noreferrer" href="#">Documentation</a>
						</li>
						<li>
							<a rel="noopener noreferrer" href="#">Guides</a>
						</li>
					</ul>
				</div>
				<div class="space-y-3">
					<div class="uppercase text-gray-200 dm-sans">Social media</div>
					<div class="flex justify-start space-x-3">
						<a rel="noopener noreferrer" href="#" title="Facebook" class="flex items-center p-1">
							<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 32 32" class="w-5 h-5 fill-current">
								<path d="M32 16c0-8.839-7.167-16-16-16-8.839 0-16 7.161-16 16 0 7.984 5.849 14.604 13.5 15.803v-11.177h-4.063v-4.625h4.063v-3.527c0-4.009 2.385-6.223 6.041-6.223 1.751 0 3.584 0.312 3.584 0.312v3.937h-2.021c-1.984 0-2.604 1.235-2.604 2.5v3h4.437l-0.713 4.625h-3.724v11.177c7.645-1.199 13.5-7.819 13.5-15.803z"></path>
							</svg>
						</a>
						<a rel="noopener noreferrer" href="#" title="Twitter" class="flex items-center p-1">
							<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current">
								<path d="M23.954 4.569a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.691 8.094 4.066 6.13 1.64 3.161a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.061a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.937 4.937 0 004.604 3.417 9.868 9.868 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63a9.936 9.936 0 002.46-2.548l-.047-.02z"></path>
							</svg>
						</a>
						<a rel="noopener noreferrer" href="#" title="Instagram" class="flex items-center p-1">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor" class="w-5 h-5 fill-current">
								<path d="M16 0c-4.349 0-4.891 0.021-6.593 0.093-1.709 0.084-2.865 0.349-3.885 0.745-1.052 0.412-1.948 0.959-2.833 1.849-0.891 0.885-1.443 1.781-1.849 2.833-0.396 1.020-0.661 2.176-0.745 3.885-0.077 1.703-0.093 2.244-0.093 6.593s0.021 4.891 0.093 6.593c0.084 1.704 0.349 2.865 0.745 3.885 0.412 1.052 0.959 1.948 1.849 2.833 0.885 0.891 1.781 1.443 2.833 1.849 1.020 0.391 2.181 0.661 3.885 0.745 1.703 0.077 2.244 0.093 6.593 0.093s4.891-0.021 6.593-0.093c1.704-0.084 2.865-0.355 3.885-0.745 1.052-0.412 1.948-0.959 2.833-1.849 0.891-0.885 1.443-1.776 1.849-2.833 0.391-1.020 0.661-2.181 0.745-3.885 0.077-1.703 0.093-2.244 0.093-6.593s-0.021-4.891-0.093-6.593c-0.084-1.704-0.355-2.871-0.745-3.885-0.412-1.052-0.959-1.948-1.849-2.833-0.885-0.891-1.776-1.443-2.833-1.849-1.020-0.396-2.181-0.661-3.885-0.745-1.703-0.077-2.244-0.093-6.593-0.093zM16 2.88c4.271 0 4.781 0.021 6.469 0.093 1.557 0.073 2.405 0.333 2.968 0.553 0.751 0.291 1.276 0.635 1.844 1.197 0.557 0.557 0.901 1.088 1.192 1.839 0.22 0.563 0.48 1.411 0.553 2.968 0.072 1.688 0.093 2.199 0.093 6.469s-0.021 4.781-0.099 6.469c-0.084 1.557-0.344 2.405-0.563 2.968-0.303 0.751-0.641 1.276-1.199 1.844-0.563 0.557-1.099 0.901-1.844 1.192-0.556 0.22-1.416 0.48-2.979 0.553-1.697 0.072-2.197 0.093-6.479 0.093s-4.781-0.021-6.48-0.099c-1.557-0.084-2.416-0.344-2.979-0.563-0.76-0.303-1.281-0.641-1.839-1.199-0.563-0.563-0.921-1.099-1.197-1.844-0.224-0.556-0.48-1.416-0.563-2.979-0.057-1.677-0.084-2.197-0.084-6.459 0-4.26 0.027-4.781 0.084-6.479 0.083-1.563 0.339-2.421 0.563-2.979 0.276-0.761 0.635-1.281 1.197-1.844 0.557-0.557 1.079-0.917 1.839-1.199 0.563-0.219 1.401-0.479 2.964-0.557 1.697-0.061 2.197-0.083 6.473-0.083zM16 7.787c-4.541 0-8.213 3.677-8.213 8.213 0 4.541 3.677 8.213 8.213 8.213 4.541 0 8.213-3.677 8.213-8.213 0-4.541-3.677-8.213-8.213-8.213zM16 21.333c-2.948 0-5.333-2.385-5.333-5.333s2.385-5.333 5.333-5.333c2.948 0 5.333 2.385 5.333 5.333s-2.385 5.333-5.333 5.333zM26.464 7.459c0 1.063-0.865 1.921-1.923 1.921-1.063 0-1.921-0.859-1.921-1.921 0-1.057 0.864-1.917 1.921-1.917s1.923 0.86 1.923 1.917z"></path>
							</svg>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="py-6 text-sm text-center text-gray-400 archivo">XI RPL Muhiyo Project | 2024</div>
		<div class="py-6 text-sm text-center text-gray-400 archivo">Developed by Ronald</div>
	</footer>
	<script src="https://web3forms.com/client/script.js" async defer></script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const carousel = document.querySelector('.carousel');
			const slides = document.querySelectorAll('.carousel-item');
			const slideWidth = slides[0].clientWidth;
			let currentIndex = 0;

			carousel.addEventListener('click', () => {
				currentIndex = (currentIndex + 1) % slides.length;
				updateCarousel();
			});

			function updateCarousel() {
				const offset = -currentIndex * slideWidth;
				carousel.querySelector('.carousel-inner').style.transform = `translateX(${offset}px)`;
			}
		});


		document.addEventListener("DOMContentLoaded", () => {
			const films = [{
					title: "Film 1",
					category: "Horror",
					year: "2023",
					rating: 4,
					image: "https://berita.99.co/wp-content/uploads/2023/11/The-Fast-and-the-Furious.jpg",
				},
				{
					title: "Film 2",
					category: "action",
					year: "2022",
					rating: 5,
					image: "https://berita.99.co/wp-content/uploads/2023/11/2-Fast-2-Furious.jpg",
				},
				{
					title: "Film 3",
					category: "drama",
					year: "2021",
					rating: 3,
					image: "https://berita.99.co/wp-content/uploads/2023/11/The-Fast-and-the-Furious-Tokyo-Drift.jpg",
				},
				{
					title: "Film 4",
					category: "drama",
					year: "2024",
					rating: 2,
					image: "https://berita.99.co/wp-content/uploads/2023/11/film-Fast-Furious.jpg",
				},
				{
					title: "Film 5",
					category: "action",
					year: "2020",
					rating: 4,
					image: "https://berita.99.co/wp-content/uploads/2023/11/film-fast-five.jpg",
				},
				{
					title: "Film 6",
					category: "comedy",
					year: "2019",
					rating: 5,
					image: "https://berita.99.co/wp-content/uploads/2023/11/Fast-Furious-6.jpg",
				},
				{
					title: "Film 7",
					category: "drama",
					year: "2018",
					rating: 3,
					image: "https://berita.99.co/wp-content/uploads/2023/11/Furious-7.jpg",
				},
				{
					title: "Film 8",
					category: "horror",
					year: "2017",
					rating: 2,
					image: "https://berita.99.co/wp-content/uploads/2023/11/The-Fate-of-the-Furious.jpg",
				},
				{
					title: "Film 9",
					category: "action",
					year: "2016",
					rating: 4,
					image: "https://berita.99.co/wp-content/uploads/2023/11/Fast-Furious-Presents-Hobbs-Shaw.jpg",
				},
				{
					title: "Film 10",
					category: "comedy",
					year: "2015",
					rating: 5,
					image: "https://berita.99.co/wp-content/uploads/2023/11/Fast-Furious-9-The-Fast-Saga.jpg",
				},
				{
					title: "Film 11",
					category: "drama",
					year: "2014",
					rating: 3,
					image: "https://berita.99.co/wp-content/uploads/2023/11/Fast-X.jpg",
				},
			];

			const filmGrid = document.getElementById("filmGrid");
			const moreFilmsBtn = document.getElementById("moreFilmsBtn");
			const hiddenFilms = films.slice(4); // Mengambil 8 card yang akan disembunyikan awalnya
			let isHiddenFilmsVisible = false;

			function renderFilms(films) {
				films.forEach((film) => {
					const filmCard = document.createElement("div");
					filmCard.classList.add(
						"film-card",
						"bg-neutral-900",
						"p-4",
						"rounded-lg"
					);
					filmCard.innerHTML = `
                <img src="${film.image}" alt="${
							film.title
						}" class="w-full h-[250px] rounded-md">
                <h3 class="mt-2 font-semibold dm-sans text-gray-200 text-2xl">${film.title}</h3>
                <p class="text-gray-300 archivo mt-2">Kategori: ${
									film.category.charAt(0).toUpperCase() + film.category.slice(1)
								}</p>
                <p class="text-gray-300 archivo mt-2">Tahun: ${film.year}</p>
                <p class="text-gray-300 archivo text-end mt-2">Rating: ${film.rating} Bintang</p>
            `;
					filmGrid.appendChild(filmCard);
				});
			}

			function toggleHiddenFilms() {
				if (isHiddenFilmsVisible) {
					// Sembunyikan card tambahan
					hiddenFilms.forEach((film) => {
						document.querySelector(
							`[data-title="${film.title}"]`
						).style.display = "none";
					});
					moreFilmsBtn.innerText = "More Films";
				} else {
					// Tampilkan card tambahan
					hiddenFilms.forEach((film) => {
						const filmCard = document.createElement("div");
						filmCard.classList.add(
							"film-card",
							"bg-neutral-900",
							"p-4",
							"rounded-lg"
						);
						filmCard.setAttribute("data-title", film.title); // Tambahkan atribut untuk identifikasi film
						filmCard.innerHTML = `
                    <img src="${film.image}" alt="${
								film.title
							}" class="w-full h-auto rounded-md">
                    <h3 class="mt-2 font-semibold dm-sans text-gray-200">${
											film.title
										}</h3>
                    <p class="text-gray-300 mt-2 archivo">Kategori: ${
											film.category.charAt(0).toUpperCase() +
											film.category.slice(1)
										}</p>
                    <p class="text-gray-300 archivo mt-2">Tahun: ${film.year}</p>
                    <p class="text-gray-300 archivo text-end mt-2">Rating: ${film.rating} Bintang</p>
                `;
						filmGrid.appendChild(filmCard);
					});
					moreFilmsBtn.innerText = "Hide Films";
				}
				isHiddenFilmsVisible = !isHiddenFilmsVisible;
			}

			moreFilmsBtn.addEventListener("click", toggleHiddenFilms);

			// Render 4 card pertama
			renderFilms(films.slice(0, 4));
		});


		document.addEventListener("DOMContentLoaded", () => {
			const films = [{
					title: "Film 1",
					category: "action",
					year: "2023",
					rating: 4,
					image: "https://assets.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2023/05/02/Foto164-4028683786.jpg",
				},
				{
					title: "Film 2",
					category: "comedy",
					year: "2022",
					rating: 5,
					image: "https://images.tokopedia.net/img/KRMmCm/2023/1/5/eda5a309-da32-4cf3-bc12-b8b83168eb70.jpg",
				},
				{
					title: "Film 3",
					category: "drama",
					year: "2021",
					rating: 3,
					image: "https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1613390968/gdm0dovdacaex0tapsgw.jpg",
				},
				{
					title: "Film 4",
					category: "horror",
					year: "2024",
					rating: 2,
					image: "https://pagaralampos.bacakoran.co/upload/14429944987f2fa3bec5e7a70344cd6b.jpeg",
				},

			];

			const categoryFilter = document.getElementById("category");
			const yearFilter = document.getElementById("year");
			const ratingFilter = document.getElementById("rating");
			const applyFiltersButton = document.getElementById("applyFilters");
			const filmsGrid = document.getElementById("filmsGrid");

			function renderFilms(films) {
				filmsGrid.innerHTML = "";
				films.forEach((film) => {
					const filmCard = document.createElement("div");
					filmCard.classList.add(
						"film-card",
						"bg-neutral-900",
						"p-3",
						"rounded-2xl"
					);
					filmCard.innerHTML = `
                <img src="${film.image}" alt="${
							film.title
						}" class="w-full h-52 rounded-lg">
                <h3 class="mt-5 font-semibold dm-sans text-2xl text-gray-200">${film.title}</h3>
                <p class="text-gray-300 archivo mt-5">Kategori: ${
									film.category.charAt(0).toUpperCase() + film.category.slice(1)
								}</p>
                <p class="text-gray-300 archivo mt-2">Tahun: ${film.year}</p>
                <p class="text-gray-300 archivo text-sm text-end mt-2">Rating: ${film.rating} Bintang</p>
            `;
					filmsGrid.appendChild(filmCard);
				});
			}

			function applyFilters() {
				const selectedCategory = categoryFilter.value;
				const selectedYear = yearFilter.value;
				const selectedRating = ratingFilter.value;

				const filteredFilms = films.filter((film) => {
					return (
						(selectedCategory === "" || film.category === selectedCategory) &&
						(selectedYear === "" || film.year === selectedYear) &&
						(selectedRating === "" ||
							film.rating.toString() === selectedRating)
					);
				});

				renderFilms(filteredFilms);
			}

			applyFiltersButton.addEventListener("click", applyFilters);


			renderFilms(films);
		});


		document.addEventListener("DOMContentLoaded", function() {
			const carousel = document.querySelector(".custom-carousel");
			const slides = document.querySelectorAll(".custom-carousel-item");
			const slideWidth = slides[0].clientWidth;
			let currentIndex = 0;

			carousel.addEventListener("click", () => {
				currentIndex = (currentIndex + 1) % slides.length;
				updateCarousel();
			});

			function updateCarousel() {
				const offset = -currentIndex * slideWidth;
				carousel.querySelector(
					".custom-carousel-inner"
				).style.transform = `translateX(${offset}px)`;
			}
		});

		document.addEventListener("DOMContentLoaded", function() {
			const carousel = document.querySelector('.custom-carousel-container');
			const slides = document.querySelectorAll('.custom-carousel-slide');
			const slideWidth = slides[0].clientWidth;
			let currentIndex = 0;

			carousel.addEventListener('click', () => {
				currentIndex = (currentIndex + 1) % slides.length;
				updateCarousel();
			});

			function updateCarousel() {
				const offset = -currentIndex * slideWidth;
				carousel.querySelector('.custom-carousel-track').style.transform = `translateX(${offset}px)`;
			}
		});

		function toggleFAQ(event) {
			const question = event.currentTarget;
			const answer = question.nextElementSibling;

			const allAnswers = document.querySelectorAll('.faq-item');
			allAnswers.forEach(ans => {
				if (ans !== answer) {
					ans.classList.add('collapsed');
					ans.classList.remove('expanded');
				}
			});

			answer.classList.toggle('collapsed');
			answer.classList.toggle('expanded');
		}


		function displayReviews() {
			const reviews = JSON.parse(localStorage.getItem("reviews")) || [];
			const reviewsList = document.getElementById("reviewsList");
			reviewsList.innerHTML = "";
			reviews.forEach((review) => {
				const reviewElement = document.createElement("div");
				reviewElement.classList.add(
					"carousel-item-automatic",
					"bg-neutral-950",
					"p-5",
					"hover:scale-105",
					"duration-300",
					"rounded-xl",
					"shadow"
				);
				reviewElement.innerHTML = `
                    <h3 class="text-lg  dm-sans text-neutral-200 font-semibold">${review.name}</h3>
                    <p class="max-w-sm leading-loose mt-2 text-sm archivo text-neutral-400">${review.text}</p>
                `;
				reviewsList.appendChild(reviewElement);
			});
		}

		document
			.getElementById("reviewForm")
			.addEventListener("submit", function(event) {
				event.preventDefault(); // Mencegah form dari pengiriman default

				// Ambil nilai dari form
				const name = document.getElementById("name").value;
				const review = document.getElementById("review").value;

				// Ambil review dari localStorage, atau inisialisasi array kosong jika belum ada
				const reviews = JSON.parse(localStorage.getItem("reviews")) || [];

				// Tambahkan review baru ke array
				reviews.push({
					name: name,
					text: review
				});


				localStorage.setItem("reviews", JSON.stringify(reviews));


				displayReviews();


				document.getElementById("reviewForm").reset();
			});


		window.addEventListener("load", displayReviews);


		function autoScrollCarousel() {
			const reviewsList = document.getElementById("reviewsList");
			const scrollAmount = 300;
			let scrollPosition = 0;

			setInterval(() => {

				scrollPosition += scrollAmount;

				if (
					scrollPosition >=
					reviewsList.scrollWidth - reviewsList.clientWidth
				) {
					scrollPosition = 0;
				}
				reviewsList.scrollTo({
					left: scrollPosition,
					behavior: "smooth",
				});
			}, 3000);
		}


		window.addEventListener("load", autoScrollCarousel);
	</script>
</body>

</html>