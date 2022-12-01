<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GPdI Hebron - About Us</title>

    @vite('resources/css/app.css')
</head>
<body>
    <div class="md:container md:mx-auto">
        {{-- navbar --}}
        <x-navbar />

        {{-- carousel --}}
        <div id="carousel">
            <img src="https://wallpaperaccess.com/full/5356640.jpg" alt="Picture" class="bg-no-repeat object-cover w-screen h-[500px]">
        </div>
        {{-- History Page --}}
        <div class="bg-[url('https://www.planetshakers.com/wp-content/uploads/2022/02/planetshakers-urbanlife-2022-bg.jpg')] text-[#222222] flex flex-col md:flex-row h-max px-10 md:px-32 py-16 items-center md:items-start md:justify-between">
            <div class="flex flex-col h-max text-center md:text-left justify-start md:w-4/6">
                <h1 class="font-bold text-[30px]">Welcome to GPdI Hebron</h1>
                <p class="font-medium text-[20px]">History of GPdI Hebron</p>
            </div>
            <div class="flex flex-col pt-7 md:pt-0 md:pl-60 gap-5">
                <p class="text-justify">
                    Sebelum adanya GPdI Hebron, Pdt. David Ibrahim (Gembala GPdI Greenville,
                    Jakarta Barat) membentuk Persekutuan Doa Shekinah di Gading Serpong pada 
                    tanggal 24 Mei 2002. Hal ini merupakan kali pertama ibadah persekutuan doa 
                    diadakan, yang bertempatkan di ruko depan sektor 1A milik jemaat GPdI Greenville 
                    (Tante Listia). Sekitar 10-15 jiwa yang mengikuti ibadah, namun kegiatan ibadah di 
                    ruko ini hanya berjalan hingga 2 tahun karena ruko tersebut dijual. 
                </p>
                <p class="text-justify">
                    Pada tahun 2004-2006, Persekutuan Doa Shekinah diserahkan kepada Pdm. Beatrix.
                    Kegiatan ibadah dilakukan secara bergantian di rumah Bp. Timotius di sektor 1A 
                    (pada Minggu ganjil) dan di rumah Bp. Laksana di sektor 7A (pada Minggu genap).
                    Pdm. Beatrix pada saat itu menyewa rumah di sektor 8A, Jl. Kelapa Molek X, Blok 
                    FB4/No.5 untuk dijadikan sebagai ibadah Sekolah Minggu. 
                </p>
                <p class="text-justify">
                    Pada Oktober 2006, jumlah anak sekolah minggu yang beribadah mencapai sekitar 17 jiwa, 
                    dan remaja sektiar 8 jiwa. Selain itu, terdapat 23 jiwa anak sekolah minggu yang dilayani 
                    di Sektor 1A. Pada tanggal 2 Oktober 2006, oleh Pdt. David Ibrahim pelayanan di Gading Serpong 
                    dipercayakan kepada Pdt. Raimond Sumaa bersama istri Pdm. Yesie Novfyanti, dikarenakan Pdm. Beatrix
                    menikah dan harus mengikuti suami melayani di Bekasi.
                </p>
                <p class="text-justify">
                    Pelayanan di Gading Serpong tetap menggunakan rumah kontrakan di Sektor 8A Jl. Kelapa Molek X, Blok 
                    FB4 No.5. Pada 6 Oktober 2006, Ibadah Pemuda-Remaja untuk pertama kalinya diadakan dan dijadikan sebagai 
                    hari ulang tahun pemuda GPDI Hebron. Pada 10 Oktober 2006, menjadi hari pertama untuk Pdt. Raimond Sumaa 
                    melayani persekutuan doa dewasa di rumah Bp. Timotius di sektor 1A.
                </p>
                <p class="text-justify">
                    Pada 10 Oktober 2008, rumah kontrakan pindah alamat menjadi Jl. Kelapa Molek XIV Blok FB8/No.23, ditempat 
                    inilah ibadah umum hari minggu sore mulai dibuka.
                </p>
                <p class="font-bold">
                    Perjalanan Pelayanan GPdI Hebron Gading Serpong
                </p>
                <p class="text-justify">
                    Pada Tahun 2007, GPdI Hebron membuka Pelayanan anak di Sektor 7A tempat kediaman Bp. Laksana. Pada Tahun 
                    2008, GPdI Hebron juga membuka Pelayanan Anak di Cluster Calcedony, Pondok Hijau Golf PHG). 
                </p>
                <p class="text-justify">
                    Pada Tahun 2009, membentuk Pelayanan Penginjilan Anak dengan menggunakan Panggung Boneka sebagai pelatihan
                    kepada anak-anak remaja yang melayani Tuhan di beberapa gereja sekitar Jabodetabek.
                </p>
                <p class="text-justify">
                    Tanggal 1 Februari 2012 merupakan sebuah langkah besar dilakukan dengan menyewa ruko sebagai tempat ibadah, 
                    terletak di Ruko Tematik Blok N 15 Komplek Pasar Modern Paramount Gading Serpong, pada tempat inilah diperkenalkan 
                    nama gereja yaitu GPdI Hebron.
                </p>
                <p class="text-justify">
                    Pelayanan GPdI Hebron semakin berkembang dalam menumbuhkan pekerja Tuhan, baik dalam pertumbuhan rohani maupun 
                    pertumbuhan jumlah jemaat Tuhan. Pada 1 Januari 2021, gereja di pindahkan ke Ruko Tematik Blok L/39. Pada ruko tersebut, 
                    GPdI Hebron melakukan perjanjian sewa beli dengan pemilik.
                </p>
                <p class="text-justify">
                    Hingga saat ini GPdI Hebron diberikan perluasan ibadah, yaitu ibadah Anak, Remaja, Pemuda, Keluarga Muda dan Dewasa-Lansia. 
                    GPdI Hebron berusaha untuk terus fokus dalam pertumbuhan kualitas rohani jemaat dan pelayanan, untuk mempersiapkan diri menjadi
                    gereja yang berkenan di hadapan Tuhan.
                </p>
            </div>
        </div>
        {{-- Makna Logo --}}
        <div class="bg-[#F0F0F0] text-[#222222] flex flex-col md:flex-row h-max px-10 md:px-32 py-10 items-center md:items-start md:justify-between">
            <div class="flex flex-col h-max md:text-left text-center items-center md:items-start md:justify-start md:w-4/6">
                <img src="https://media.discordapp.net/attachments/943536943948513291/1047498370270363648/gpdi-hebron-gading-serpong-41181523042016.png" alt="logo" class="w-[150px] bg-no-repeat object-cover">
                <h1 class="font-bold text-[30px]">Makna Logo</h1>
                <p class="font-medium text-[20px]">GPdI Hebron - Gading Serpong</p>
            </div>
            <div class="flex flex-col md:pl-[110px] pt-5 md:pt-[100px] gap-5 text-justify">
                <li>
                    <span class="font-bold">Gedung Tinggi,</span>
                    <span>Dibentuk Seperti huruf H yaitu inisial dari Hebron;</span>
                    <span>Melambangkan Kota Perlindungan.</span>
                </li>
                <li>
                    <span class="font-bold">Tanda Salib & Terang,</span>
                    <span>Melambangkan tentang jiwa-jiwa yang dibawa kepada terang Kristus.</span>
                </li>
                <li>
                    <span class="font-bold">Bentuk Tetesan Darah,</span>
                    <span class="text-justify">
                        Melambangkan bahwa semua orang percaya telah ditebus oleh darah Yesus, 
                        yang akan membawa kepada pemulihan hidup. Ada dua bentuk tetesan darah:
                    </span>
                    <p>
                        1). Warna biru utuh, melambangkan persekutuan yang terikat dengan Tuhan.
                    </p>
                    <p class="text-justify">
                        2). Warna biru-kuning keemasan, menandakan kuat dalam Firman Tuhan, semakin
                        ke atas berwana keemasan bicara tentang semakin bertumbuh akan semakin gemuk,
                        makmur, dan penuh kemuliaan Tuhan (semakin hari semakin dipenuhi dari kemuliaan
                        sampai kepada kemuliaan).
                    </p>
                </li>
            </div>
        </div>
        {{-- Makna Hebron --}}
        <div class="bg-[url('https://www.planetshakers.com/wp-content/uploads/2022/02/planetshakers-urbanlife-2022-bg.jpg')] text-[#222222] flex flex-col md:flex-row h-max px-10 md:px-32 py-16 items-center md:items-start md:justify-between">
            <div class="flex flex-col h-max md:text-left text-center items-center md:items-start md:justify-start">
                <img src="https://media.discordapp.net/attachments/943536943948513291/1047498370270363648/gpdi-hebron-gading-serpong-41181523042016.png" alt="logo" class="w-[150px] bg-no-repeat object-cover">
                <h1 class="font-bold text-[30px]">Makna Kata Hebron</h1>
                <p class="font-medium text-[20px]">GPdI Hebron - Gading Serpong</p>
            </div>
            <div class="flex flex-col md:pl-[120px] md:w-[930px] pt-5 md:pt-24 gap-5">
                <p class="font-bold">Hebron Berarti Persekutuan</p>
                <p class="text-justify">
                    Hebron, disebut pertama kali dalam Alkitab di Kejadian 13:18, yaitu sebuah 
                    daerah di mana Abram mendirikan mezbah bagi Tuhan, setelah ia berpisah dengan 
                    Lot. Mezbah adalah  tempat untuk mempersembahkan korban bagi Allah dan tempat 
                    bersekutu dengan Tuhan. Abram (Abraham) adalah seorang yang mentaati Firman Tuhan 
                    (Kejadian 12:4) dan seorang yang suka membangun mezbah (Kejadian 12:7-8), 
                    kemanapun ia pergi dan tinggal, hal pertama yang dibuatnya adalah membangun mezbah 
                    bagi Tuhan.  Mentaati Firman Tuhan dan suka membangun mezbah bagi Tuhan (suka bersekutu 
                    dengan Tuhan), merupakan dua hal yang menjadi kunci mengapa Abraham diberkati dalam segala 
                    hal oleh Tuhan.  Apa yang dilakukan Abraham, harus kita lakukan juga bagi Tuhan. Mari 
                    menjadi orang percaya yang taat kepada Firman Tuhan (menjadi pelaku Firman) dan suka 
                    bersekutu dengan Tuhan; supaya apa yang Abraham alami dan terima dari Tuhan, kita juga 
                    akan alami dan menerimanya. Galatia 3:29 menegaskan bahwa sebagai milik Kristus, kita juga 
                    menjadi keturunan Abraham, yang berhak menerima janji Allah.
                </p>
                <p class="font-bold">Hebron Sebagai Kota Perlindungan</p>
                <p class="text-justify">
                    Dalam Yosua 20:7-9, Hebron (dahulu bernama Kiryat-Arba) merupakan salah satu dari enam kota 
                    perlindungan yang ditetapkan bagi orang Israel. Kota perlindungan adalah tempat berlindung bagi 
                    setiap orang yang membunuh seseorang dengan tidak sengaja (dengan tidak ada niat lebih dahulu). 
                    Mereka dapat melarikan diri ke kota perlindungan supaya  jangan mati dibunuh oleh tangan penuntut 
                    tebusan darah. Untuk bisa selamat, ada syarat yang harus dilakukan oleh orang yang lari ke kota 
                    perlindungan, yaitu harus tetap diam di kota itu sampai ia dihadapkan kepada rapat jemaah (Yosua 20:6).  
                    Secara rohani, kota perlindungan ini menggambarkan tentang Tuhan Yesus sebagai tempat perlindungan bagi 
                    kita orang berdosa  (Mazmur 91 dan Ibrani 6:17-20). Upah dosa ialah maut (kematian kekal), dan karena 
                    semua manusia telah berdosa maka manusia harus alami maut. Tetapi syukur, Tuhan Yesus telah menjadi 
                    kota perlindungan bagi kita, sehingga kita boleh mendapat keselamatan.  Untuk itu, kita harus tetap 
                    diam (tinggal) bersama Tuhan. Dalam Yohanes 15:5, Tuhan Yesus berkata Akulah adalah pokok anggur dan 
                    kamulah ranting-rantingnya. Barangsiapa tinggal di dalam Aku dan Aku di dalam dia, ia berbuah banyak, 
                    sebab di luar Aku kamu tidak dapat berbuat apa-apa. Percayalah, Tuhan Yesus cukup untuk semua orang dan 
                    untuk semua kebutuhan kita.  Apapun masalah persoalan yang  kita hadapi, mari lari secepatnya ke kota 
                    perlindungan kita, yaitu Tuhan Yesus Kristus.
                </p>
                <p class="font-bold">Hebron Sebagai Tanah yang Subur</p>
                <p class="text-justify">
                    Yosua 14:13-14 mencatat bahwa Kaleb memperoleh Hebron sebagai milik pusakanya, karena ia tetap mengikuti 
                    Tuhan dengan sepenuh hati. Pada masa pengembaraan bangsa Israel di padang gurun, Musa mengutus 12 pengintai 
                    (salah satunya adalah Kaleb yang berumur 40 tahun) untuk meneliti tanah Kanaan, dan daerah yang mereka selidiki 
                    adalah Hebron, yang merupakan daerah subur yang berlimpah-limpah susu dan madu, dan pada waktu itu penduduk 
                    Hebron adalah keturunan Enak  (Bilangan 13:22,27-28,33).  Ketika 10 pengintai memberi laporan yang membuat 
                    tawar hati bangsa Israel, Kaleb tampil menentramkan hati bangsanya di depan Musa, bahwa mereka akan maju dan 
                    menduduki Hebron.  Lalu Tuhan berfirman melalui Musa,  bahwa sesungguhnya tanah yang diinjak oleh kaki Kaleb 
                    akan menjadi milik pusakanya sampai selama-lamanya.  45 tahun kemudian sejak janji Firman itu disampaikan 
                    kepadanya (Kaleb telah berumur 85 tahun), Hebron ditetapkan menjadi milik pusaka Kaleb.  Perhatikan apa 
                    yang Kaleb katakan dalam Yosua 14:11 : pada waktu ini aku masih sama kuat seperti pada waktu aku disuruh Musa; 
                    seperti kekuatanku pada waktu itu demikianlah kekuatanku sekarang untuk berperang dan untuk keluar masuk.  
                    Secara rohani, kisah ini menegaskan bahwa orang yang tetap mengikut Tuhan dengan sepenuh hati, yang kekuatannya 
                    tidak pernah layu, akan menerima janji Tuhan, yaitu berkat yang melimpah bagaikan tanah  subur yang selalu menghasilkan.
                </p>
            </div>
        </div>
        {{-- Footer --}}
        <x-footer />
    </div>
</body>
</html>