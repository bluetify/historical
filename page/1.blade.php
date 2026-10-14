<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Affair of the Poisons</title>
    <!-- Tailwind CSS untuk styling modern dan responsif -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Font Inter dan Playfair Display untuk sentuhan estetik -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;1,400&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f4f0eb; /* Warna latar krem muda sesuai gambar */
            color: #4a4a4a;
        }
        .font-serif-custom {
            font-family: 'Playfair Display', serif;
        }
        /* Style untuk teks sambung bergaya tulisan tangan */
        .handwriting {
            font-family: 'Playfair Display', cursive;
            font-style: italic;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col justify-between py-10 px-4 sm:px-8">

    <!-- Container Utama -->
    <main class="max-w-4xl mx-auto w-full space-y-8 my-auto">
        
        <div class="p-3 sm:p-8 flex flex-col justify-center bg-neutral">
            <div class="space-y-3">
                <span class="text-xs font-semibold tracking-wider uppercase bg-[#d9d6d0] text-neutral-700 px-1.5 py-1 rounded">01</span>
                <h2 class="font-serif-custom text-2xl text-center font-bold text-neutral-600 tracking-tight">La Voisin: perempuan yang mengetahui rahasia Paris</h2>

                <img src="{{ asset('dist/images/historical/1.png') }}" alt="Sky Series" class="w-full h-76 sm:h-76 object-cover">

                <p class="text-sm leading-relaxed text-neutral-600 py-3" style="text-align: justify;">
                    Jika skandal ini memiliki satu tokoh yang paling identik dengan sisi gelap Paris, tokoh itu adalah Catherine Deshayes, atau La Voisin.
                    Ia bukan putri kerajaan. Ia berasal dari lingkungan masyarakat biasa dan dikenal menjalankan praktik ramalan serta layanan yang berkaitan dengan pengobatan tradisional. Seiring waktu, namanya dikaitkan dengan jaringan yang jauh lebih gelap.
                    Orang-orang datang kepadanya karena berbagai alasan. Ada yang ingin mengetahui masa depan. Ada yang berharap mendapatkan kembali cinta seseorang. Ada pula yang ingin menyingkirkan masalah yang mereka anggap tidak bisa diselesaikan dengan cara biasa.
                    Dalam masyarakat yang sangat dipengaruhi agama dan kepercayaan terhadap ilmu gaib, batas antara pengobatan, takhayul, penipuan, dan kejahatan sering kali menjadi kabur.
                </p>
                <p class="font-bold text-sm leading-relaxed text-neutral-600" style="text-align: justify;">Mengapa orang mendatanginya?</p>
                <p class="text-sm leading-relaxed text-neutral-600" style="text-align: justify;">
                    Bayangkan seorang perempuan bangsawan yang mulai kehilangan perhatian suaminya. Ia takut kehilangan status, uang, dan masa depan anak-anaknya.
                    Atau bayangkan seorang pria yang merasa posisinya terancam oleh pesaing di istana.
                    Mereka mungkin tidak ingin mengakui ketakutan tersebut kepada pendeta atau keluarga. Sebaliknya, mereka mencari orang yang menjanjikan solusi rahasia.
                    La Voisin dikaitkan dengan ramalan, ramuan cinta, dan penjualan bahan berbahaya. Penyidikan kemudian menghubungkan dirinya dengan jaringan orang-orang yang menawarkan jasa serupa.
                    Yang membuat kasusnya begitu menakutkan bukan berarti semua cerita tentangnya benar. Justru, selama penyelidikan, muncul berbagai kesaksian yang bercampur dengan rumor, pengakuan yang meragukan, dan tuduhan yang mungkin dibuat untuk menyelamatkan diri sendiri.
                    Dalam keadaan seperti itu, sebuah rahasia kecil bisa berkembang menjadi tuduhan pembunuhan, pengkhianatan, bahkan persekongkolan terhadap raja.
                    Dan ketika polisi mulai menggali jaringan ini, mereka menemukan sesuatu yang jauh lebih berbahaya daripada dugaan kejahatan di lingkungan masyarakat biasa.
                    Beberapa nama yang disebut berasal dari kalangan elite.
                </p>
            </div>
        </div>
        

    </main>

    <!-- Footer / Bagian Bawah -->
    <footer class="mt-12 text-center pb-4">
        <p class="text-sm tracking-wide text-neutral-600 flex items-center justify-center space-x-2">
            <span>Archive by</span> 
            <span class="handwriting text-xl font-bold text-blue-800 ml-1">bluetify</span>
        </p>
    </footer>

</body>
</html>