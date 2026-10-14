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
                <span class="text-xs font-semibold tracking-wider uppercase bg-[#d9d6d0] text-neutral-700 px-1.5 py-1 rounded">06</span>
                <h2 class="font-serif-custom text-2xl text-center font-bold text-neutral-600 tracking-tight">Kematian La Voisin: akhir yang tidak mengakhiri misteri</h2>

                <img src="{{ asset('dist/images/historical/6.jpg') }}" alt="Sky Series" class="w-full h-72 sm:h-72 object-cover">

                <p class="text-sm leading-relaxed text-neutral-600 py-3" style="text-align: justify;">
                    Pada 22 Februari 1680, La Voisin dieksekusi dengan dibakar di Place de Grève, Paris, berdasarkan putusan atas perkara yang melibatkannya.
                    Bagi banyak orang, kematiannya mungkin tampak seperti akhir yang wajar: seorang perempuan yang dituduh terlibat dalam jaringan racun dan praktik terlarang akhirnya menerima hukuman.
                    Tetapi kematiannya tidak mengakhiri semua pertanyaan.
                    Sebaliknya, perkara ini semakin rumit karena orang-orang yang dituduh terlibat memiliki kepentingan untuk menyelamatkan diri, sementara penyelidik berusaha mencari tahu seberapa jauh jaringan tersebut menjangkau lingkungan kerajaan.
                    Setelah La Voisin meninggal, putrinya, Marie-Marguerite Monvoisin, menyampaikan tuduhan lebih lanjut yang mengaitkan Montespan dengan perkara tersebut. Tuduhan ini memperbesar tekanan politik, tetapi tidak menghasilkan pembuktian yang meyakinkan atas seluruh klaim yang beredar.
                    Bayangkan betapa sulitnya situasi tersebut bagi raja.
                    Jika penyelidikan diteruskan tanpa batas, reputasi orang-orang di lingkungan istana bisa hancur. Jika dihentikan terlalu cepat, masyarakat mungkin mengira ada pihak yang sengaja dilindungi.
                    Apa pun keputusan yang diambil, kepercayaan terhadap istana telah terancam.
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