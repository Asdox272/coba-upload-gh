<form action="https://api.web3forms.com/submit" method="POST" class="bg-neutral-950 p-6 rounded-3xl shadow-md w-full max-w-2xl">
			<input type="hidden" name="access_key" value="3a928331-13f9-4e84-86cf-adb4fb41d57e">

			<div class="mb-4">
				<label for="name" class="block text-gray-200 dm-sans text-sm font-semibold mb-2">Name</label>
				<input type="text" name="name" id="name" required class="shadow appearance-none bg-neutral-900 rounded-full w-full py-2 px-3 text-gray-700 leading-tight" placeholder="your Name">
			</div>

			<div class="mb-4">
				<label for="email" class="block text-gray-200 dm-sans text-sm font-semibold mb-2">Email</label>
				<input type="email" name="email" id="email" required class="shadow appearance-none bg-neutral-900 rounded-full w-full py-2 px-3 text-gray-700 leading-tight" placeholder="your Email">
			</div>

			<div class="mb-4">
				<label for="message" class="block text-gray-200 dm-sans text-sm font-semibold mb-2">Message</label>
				<textarea name="message" id="message" required class="shadow appearance-none bg-neutral-900 rounded-xl w-full py-2 px-3 text-gray-700 leading-tight h-32 resize-none" placeholder="your opini"></textarea>
			</div>
			<div class="mb-4 flex justify-center">
				<div class="h-captcha" data-captcha="true"></div>
			</div>

			<div class="flex items-center justify-center mt-2">
				<button type="submit" class="bg-blue-500 hover:bg-blue-700 text-sm text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline">
					Submit Form
				</button>
			</div> 




		FAQ seciton

		<section class="max-w-3xl p-8 bg-neutral-950 rounded-3xl shadow-md">
			<h2 class="text-3xl font-bold mb-6 dm-sans text-neutral-100">Frequently Asked Questions</h2>
			<div class="faq">
				<!-- Existing Questions -->
				<div class="faq-question p-4 cursor-pointer" onclick="toggleFAQ(event)">
					<h3 class="text-lg font-semibold dm-sans text-neutral-400">Apa itu Tailwind CSS?</h3>
				</div>
				<div class="faq-item max-h-0 overflow-hidden transition-all">
					<div class="p-4">
						<p class="text-neutral-300 archivo">Tailwind CSS adalah framework CSS yang menyediakan utility classes untuk membangun desain yang cepat dan efisien tanpa menulis banyak CSS kustom.</p>
					</div>
				</div>

				<div class="faq-question p-4 cursor-pointer" onclick="toggleFAQ(event)">
					<h3 class="text-lg font-semibold dm-sans text-neutral-400">Bagaimana cara menggunakan Tailwind CSS?</h3>
				</div>
				<div class="faq-item max-h-0 overflow-hidden transition-all">
					<div class="p-4">
						<p class="text-neutral-300 archivo">Anda bisa menginstal Tailwind CSS melalui npm, yarn, atau menggunakan CDN. Setelah itu, Anda bisa mulai menggunakan utility classes yang disediakan oleh Tailwind dalam elemen HTML Anda.</p>
					</div>
				</div>

				<div class="faq-question p-4 cursor-pointer" onclick="toggleFAQ(event)">
					<h3 class="text-lg font-semibold dm-sans text-neutral-400">Apakah Tailwind CSS mendukung kustomisasi?</h3>
				</div>
				<div class="faq-item max-h-0 overflow-hidden transition-all">
					<div class="p-4">
						<p class="text-neutral-300 archivo">Ya, Tailwind CSS sangat mendukung kustomisasi. Anda bisa mengkonfigurasi warna, ukuran, font, dan banyak lagi melalui file konfigurasi tailwind.config.js.</p>
					</div>
				</div>

				<!-- New Questions -->
				<div class="faq-question p-4 cursor-pointer" onclick="toggleFAQ(event)">
					<h3 class="text-lg font-semibold dm-sans text-neutral-400">Apakah Tailwind CSS mudah dipelajari?</h3>
				</div>
				<div class="faq-item max-h-0 overflow-hidden transition-all">
					<div class="p-4">
						<p class="text-neutral-300 archivo">Tailwind CSS relatif mudah dipelajari, terutama jika Anda sudah memiliki pengetahuan dasar tentang HTML dan CSS. Dokumentasi resmi dan banyaknya sumber belajar yang tersedia juga sangat membantu dalam mempercepat proses pembelajaran.</p>
					</div>
				</div>

				<div class="faq-question p-4 cursor-pointer" onclick="toggleFAQ(event)">
					<h3 class="text-lg font-semibold dm-sans text-neutral-400">Apa perbedaan utama antara Tailwind CSS dan Bootstrap?</h3>
				</div>
				<div class="faq-item max-h-0 overflow-hidden transition-all">
					<div class="p-4">
						<p class="text-neutral-300 archivo">Perbedaan utama antara Tailwind CSS dan Bootstrap adalah pendekatan yang digunakan. Bootstrap adalah framework berbasis komponen yang menyediakan banyak komponen siap pakai seperti tombol, formulir, dan navigasi. Sedangkan Tailwind CSS adalah framework berbasis utility yang menyediakan kelas-kelas CSS kecil yang dapat dikombinasikan untuk membangun desain yang unik dan custom.</p>
					</div>
				</div>

				<div class="faq-question p-4 cursor-pointer" onclick="toggleFAQ(event)">
					<h3 class="text-lg font-semibold max-w-xl dm-sans text-neutral-400">Bisakah Tailwind CSS digunakan dengan framework JavaScript seperti React atau Vue?</h3>
				</div>
				<div class="faq-item max-h-0 overflow-hidden transition-all">
					<div class="p-4">
						<p class="text-neutral-300 archivo">Ya, Tailwind CSS dapat digunakan dengan berbagai framework JavaScript seperti React, Vue, dan Angular. Tailwind CSS sangat fleksibel dan dapat diintegrasikan dengan mudah dalam proyek-proyek berbasis komponen.</p>
					</div>
				</div>
			</div>
		</section>