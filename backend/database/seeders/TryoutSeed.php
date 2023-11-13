<?php

namespace Database\Seeders;


$tryoutPKG = array(
    array(
        'title' => 'Try Out 8 SNBT 2023 Cornell',
        'start_time' => fake()->dateTimeInInterval('-1 year', '+3 days'),
        'end_time' => fake()->dateTimeInInterval('+1 year', '-3 days'),
        'desc_to' => 'Try Out 8 SNBT 2023 Cornell',
    ),
);
$tryoutSubPKG = array(
    array(
        'sub_title' => 'Penalaran Umum Penalaran Induktif',
        'sub_duration' => 10,
        'sub_order' => 1,
        'mean_val' => 500,
        'std_val' => 100,
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Deduktif',
        'sub_duration' => 10,
        'sub_order' => 2,
        'mean_val' => 500,
        'std_val' => 100,
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Kuantitatif',
        'sub_duration' => 10,
        'sub_order' => 3,
        'mean_val' => 500,
        'std_val' => 100,
    ),
    array(
        'sub_title' => 'Pengetahuan dan Pemahaman Umum',
        'sub_duration' => 15,
        'sub_order' => 4,
        'mean_val' => 500,
        'std_val' => 100,
    ),
    array(
        'sub_title' => 'Kemampuan Memahami Bacaan dan Menulis',
        'sub_duration' => 25,
        'sub_order' => 5,
        'mean_val' => 500,
        'std_val' => 100,
    ),
    array(
        'sub_title' => 'Pengetahuan Kuantitatif',
        'sub_duration' => 20,
        'sub_order' => 6,
        'mean_val' => 500,
        'std_val' => 100,
    ),
    // array(
    //     'sub_title' => 'Literasi dalam Bahasa Indonesia',
    //     'sub_duration' => 45,
    //     'sub_order' => 7,
    //     'mean_val' => 500,
    //     'std_val' => 100,
    // ),
    // array(
    //     'sub_title' => 'Literasi dalam Bahasa Inggris',
    //     'sub_duration' => 30,
    //     'sub_order' => 8,
    //     'mean_val' => 500.1,
    //     'std_val' => 99.98,
    // ),
    // array(
    //     'sub_title' => 'Penalaran Matematika',
    //     'sub_duration' => 30,
    //     'sub_order' => 9,
    //     'mean_val' => 500,
    //     'std_val' => 100,
    // ),
);
$tryoutQuestionPKG = array(
    array(
        'sub_title' => 'Penalaran Umum Penalaran Induktif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black">Pneumonia&#13;
  adalah peradangan paru-paru yang disebabkan oleh infeksi virus, bakteri, atau&#13;
  jamur. Pneumonia dapat dicegah dengan beberapa cara, di antaranya&#13;
  menjalani </span><span lang="IN"><a href="https://www.alodokter.com/jenis-jenis-vaksin-pneumonia-yang-perlu-anda-ketahui" target="_blank"><span style="font-size:12.0pt;line-height:115%;color:black">vaksinasi</span></a></span><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black"> </span><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black">dan menghindari&#13;
  kontak dengan orang yang sedang sakit.</span></p><p class="MsoListParagraph" style="margin-top:0in;margin-right:0in;margin-bottom:&#13;&#10;  0in;margin-left:28.35pt;text-align:justify;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></b></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Berdasarkan&#13;
  informasi tersebut, manakah pernyataan berikut yang PASTI BENAR?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Induktif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Industri&#13;
  tekstil dan garmen saat ini menjadi industri strategis bagi perekonomian&#13;
  negara mengingat Indonesia memiliki 250 juta penduduk. Industri ini merupakan&#13;
  sektor manufaktur terbesar ketiga dan menjadi salah satu industri yang paling&#13;
  banyak menyerap tenaga kerja. Pada tahun 2017, ekspor tekstil dan produk&#13;
  tekstil Indonesia mencapai US$12,4 miliar yang mana melebihi target Asosiasi&#13;
  Pertekstilan Indonesia (API) sebesar US$11,8 miliar.</span></p><p class="MsoListParagraph" style="margin-top:0in;margin-right:0in;margin-bottom:&#13;&#10;  0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Berdasarkan&#13;
  informasi tersebut, manakah di bawah ini pernyataan yang BENAR?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Induktif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><a name="_Hlk63237655"><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Indeks Performa Logistik (LPI) merupakan kinerja logistik&#13;
  dari 160 negara yang dirilis oleh Bank Dunia setiap dua tahun sekali.</span></a><span lang="IN" style="font-size:12.0pt;line-height:115%"> Indeks tersebut ditentukan&#13;
  melalui enam komponen, antara lain bea dan cukai, infrastruktur, pengiriman&#13;
  internasional, kualitas logistik, pelacakan kiriman (<i>tracking and tracing</i>),&#13;
  dan ketepatan waktu. LPI dinyatakan dalam skala 1—5, semakin mendekati 5&#13;
  kinerja logistik suatu negara semakin baik, sebaliknya mendekati 1 semakin&#13;
  buruk.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Berdasarkan&#13;
  informasi tersebut, manakah di bawah ini pernyataan yang BENAR?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Induktif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><a name="_Hlk64111059"><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Kualifikasi akademik tenaga pengajar dapat dilihat melalui&#13;
  tingkat pendidikan terakhir yang ditamatkan.</span></a><span lang="IN" style="font-size:12.0pt;line-height:115%"> Guru pada jenjang pendidikan dasar&#13;
  dan menengah harus memiliki kualifikasi akademik minimum diploma empat (D4)&#13;
  atau sarjana 1 (S1) sebagaimana yang tertuang dalam Permendiknas RI Nomor 16&#13;
  Tahun 2007. Kemdikbud mendefinisikan guru dan kualifikasi pendidikan tersebut&#13;
  sebagai guru layak mengajar (<i>qualified teacher</i>).</span></p><p class="MsoListParagraph" style="margin-top:0in;margin-right:0in;margin-bottom:&#13;&#10;  0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Berdasarkan&#13;
  informasi tersebut, manakah pernyataan berikut yang PASTI SALAH?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Induktif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><a name="_Hlk68169384"><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Sebagian besar orang di Tiongkok sudah mulai menggunakan&#13;
  robot sebagai pengirim barang asisten rumah tangga dan penjaga rumah. </span></a><span lang="IN" style="font-size:12.0pt;line-height:115%">Robot tersebut berwarna&#13;
  hitam kuning berbentuk kecil serta dilengkapi sistem GPS kamera dan radar.&#13;
  Robot hitam kuning ini merupakan gambaran kemajuan teknologi di Tiongkok.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Berdasarkan&#13;
  informasi tersebut, manakah pernyataan berikut yang PASTI BENAR?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Induktif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><a name="_Hlk63237697"><i><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">World Health Organization </span></i></a><span lang="IN" style="font-size:12.0pt;line-height:115%">(WHO) memiliki beberapa istilah&#13;
  berbeda terkait dengan AKI.</span><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%"> Istilah pertama adalah <i>maternal</i> <i>death </i>– atau&#13;
  kematian ibu, yang didefinisikan sebagai “kematian yang terjadi saat&#13;
  kehamilan, atau selama 42 hari sejak terminasi kehamilan, tanpa&#13;
  memperhitungkan durasi dan tempat kehamilan, yang disebabkan atau diperparah&#13;
  oleh kehamilan atau pengelolaan kehamilan tersebut, tetapi bukan disebabkan&#13;
  oleh kecelakaan atau kebetulan” (WHO, 2004). Konsep <i>maternal death </i>ini&#13;
  berbeda dengan konsep <i>maternal mortality</i> <i>ratio</i>, atau yang lebih&#13;
  dikenal sebagai Angka Kematian Ibu (AKI), jika mengacu pada definisi Badan&#13;
  Pusat Statistik (BPS). Baik BPS maupun WHO mendefinisikan <i>maternal&#13;
  mortality ratio</i>/AKI sebagai angka kematian ibu per 100.000 kelahiran&#13;
  hidup (WHO, 2004; BPS, 2012).</span></p><p class="MsoListParagraph" style="margin-bottom:0in;text-align:justify;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Berdasarkan&#13;
  informasi tersebut, manakah pernyataan berikut yang BENAR?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Induktif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Beribu kota di&#13;
  Pangururan, Samosir dianugerahi keindahan alam yang luar biasa. Geografisnya&#13;
  yang dikelilingi Danau Toba merupakan salah satu keunikan alam yang hanya ada&#13;
  di Sumatra Utara. Kondisi ini tidak ada di daerah lain. Ketika isu pemekaran&#13;
  dimunculkan, pariwisata dijadikan salah satu andalan untuk pemasukan daerah.&#13;
  Asumsinya, jika pendapatan daerah Toba Samosir, sebagai kabupaten induk, dari&#13;
  sektor wisata di sekitar danau menjadi pendapatan Kabupaten Samosir maka&#13;
  kabupaten pemekaran ini akan mandiri dan mampu menjalankan pemerintahan&#13;
  dengan fondasi keuangan yang baik. Namun, nyatanya tidak. Setelah 6 tahun&#13;
  menjadi kabupaten sendiri, pembangunan yang diharapkan terjadi justru&#13;
  stagnan. Ilusi-ilusi kemajuan pembangunan hanya menjadi jualan kampanye saat&#13;
  pilkada berlangsung.</span></p><p class="MsoListParagraph" style="margin-top:0in;margin-right:0in;margin-bottom:&#13;&#10;  0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%;color:red"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Berdasarkan&#13;
  paragraf tersebut, apa yang <b>mungkin paling terjadi</b> jika tidak ada isu&#13;
  pemekaran wilayah di Samosir?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Induktif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">PT Eka Sari&#13;
  Lorena Transport Tbk mencatatkan bahwa keseluruhan nilai beban perusahaan&#13;
  dari layanan bus antarkota antarprovinsi (AKAP) itu lebih tinggi ketimbang&#13;
  pendapatan pada masa pandemi. PT Weha Transportasi Indonesia Tbk, perusahaan&#13;
  layanan bus pariwisata, mengemukakan terjadinya perubahan pendapatan dari&#13;
  Rp71,9 miliar menjadi Rp70,5 miliar. Perusahaan taksi PT Blue Bird Tbk,&#13;
  pendapatannya rontok 49,4 persen menjadi Rp2,1 triliun pada periode yang&#13;
  sama. Perusahaan taksi lain, PT Express Trasindo Utama, berhasil menurunkan&#13;
  nilai kerugian pada 2020 lalu menjadi Rp53,2 miliar dari sebelumnya Rp276,1&#13;
  miliar.</span></p><p class="MsoListParagraph" style="margin-top:0in;margin-right:0in;margin-bottom:&#13;&#10;  0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Pernyataan&#13;
  berikut ini yang tepat untuk dijadikan KESIMPULAN dari wacana tersebut adalah&#13;
  ....</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Induktif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Kebutuhan&#13;
  penduduk akan kendaraan tidak dapat dipungkiri karena kendaraan merupakan&#13;
  alat transportasi. Meningkatnya kebutuhan penduduk tersebut tentu akan&#13;
  bertambah pula alat transportasinya, baik sebagai kendaraan pribadi maupun&#13;
  kendaraan umum, sehingga jumlah kendaraan semakin bertambah. Laju pertambahan&#13;
  kendaraan ini terlihat di kota-kota besar di Indonesia, seperti Jakarta,&#13;
  Surabaya, Medan dan Bandung.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Masalah&#13;
  simpulan yang PALING DIDUKUNG oleh bacaan tersebut?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Induktif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Penerimaan&#13;
  siswa baru 2019 dilaksanakan melalui tiga jalur, yaitu zonasi dengan kuota&#13;
  minimal 90 persen, prestasi dengan kuota maksimal 5 persen, dan jalur&#13;
  perpindahan orang tua dengan kuota maksimal 5 persen. Untuk kuota zonasi 90&#13;
  persen tersebut sudah termasuk peserta didik yang tidak mampu dan penyandang&#13;
  disabilitas pada sekolah yang menyelenggarakan layanan inklusif. Sementara&#13;
  itu, untuk jalur prestasi diperuntukkan bagi siswa yang berdomisili di luar&#13;
  zonasi sekolah. Untuk jalur prestasi ditentukan oleh nilai Ujian Nasional&#13;
  (UN) ataupun dari hasil perlombaan di bidang akademik dan nonakademik. Dalam&#13;
  aturan itu, juga disebutkan bahwa sekolah hams melaksanakan PPDB secara&#13;
  transparan dan mengumumkan daya tampungnya.</span></p><p class="MsoListParagraph" style="margin-top:0in;margin-right:0in;margin-bottom:&#13;&#10;  0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Manakah&#13;
  pernyataan di bawah ini yang paling mungkin benar tentang jalur PPDB?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Deduktif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black">Jika polusi udara melebihi ambang batas, banyak balita yang&#13;
  mengalami penyakit infeksi saluran pernapasan. Jika pemerintah tidak memberi&#13;
  peringatan pada perusahaan yang menghasilkan gas buangan tinggi, polusi udara&#13;
  akan membahayakan kesehatan. Saat ini tidak banyak balita yang mengalami&#13;
  penyakit infeksi saluran pernapasan atau polusi udara tidak membahayakan&#13;
  kesehatan</span></p><p class="MsoListParagraph" style="margin-top:0in;margin-right:0in;margin-bottom:&#13;&#10;  0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Simpulan&#13;
  berdasarkan informasi dalam teks tersebut adalah pemerintah tidak memberi peringatan&#13;
  pada perusahaan yang menghasilkan gas buangan tinggi walaupun polusi udara&#13;
  melebihi ambang batas.</span></p><p class="MsoListParagraph" style="margin-top:0in;margin-right:0in;margin-bottom:&#13;&#10;  0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Manakah&#13;
  pernyataan berikut yang menggambarkan kualitas simpulan tersebut?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Deduktif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black">Perhatikan kedua pernyataan berikut.</span></p><p class="MsoListParagraphCxSpFirst" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:18.2pt;text-align:justify;text-indent:-.25in;&#13;&#10;  line-height:115%;background:white"><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">(1)<span style="font:7.0pt &quot;Times New Roman&quot;">   </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  color:black">Telepon pintar merk Y dihentikan produksinya</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:18.2pt;text-align:justify;text-indent:-.25in;&#13;&#10;  line-height:115%;background:white"><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">(2)<span style="font:7.0pt &quot;Times New Roman&quot;">   </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  color:black">Produsen telepon pintar merk Y menjual saham ke perusahaan X</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Manakah pilihan&#13;
  di bawah ini yang menggambarkan hubungan pernyataan (1) dan (2)?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Deduktif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black">Warna air di danau akan lebih terlihat jernih dan biru&#13;
  apabila danau terletak di daerah dengan cuaca yang lebih dingin dan lintang&#13;
  yang lebih tinggi. Hal ini dikarenakan alga yang membuat danau berwarna hijau&#13;
  kecoklatan lebih senang hidup di dataran rendah.</span></p><p class="MsoListParagraph" style="margin-top:0in;margin-right:0in;margin-bottom:&#13;&#10;  0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Jika danau&#13;
  berada di lintang rendah dengan temperatur yang tinggi, manakah simpulan yang&#13;
  benar?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Deduktif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black">Rendang dimasak dalam waktu lebih lama jika dibandingkan&#13;
  dengan masakan lainnya. Makin lama dimasak, makin enak rasanya.</span></p><p class="MsoListParagraph" style="margin-top:0in;margin-right:0in;margin-bottom:&#13;&#10;  0in;margin-left:28.35pt;text-align:justify;line-height:115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black">Berdasarkan pernyataan tersebut, manakah yang paling&#13;
  mungkin menjadi akibat lamanya waktu memasak rendang?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Deduktif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><a name="_Hlk68169361"><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%;color:black">Kemacetan lalu lintas di kota besar&#13;
  menjadi masalah yang sulit dipecahkan. Dapat dikatakan bahwa tingkat&#13;
  kemacetan sejalan dengan tingkat kepadatan penduduk.</span></a><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black"> Kemacetan yang&#13;
  bersifat kronis akan mengganggu kelancaran aktivitas masyarakat. Di daerah&#13;
  perkotaan, kemacetan terjadi jika volume mobil yang berada di jalan raya&#13;
  melebihi kapasitas jalan raya. Kelebihan volume di jalan raya terjadi jika&#13;
  sistem transportasi massal tidak berhasil dijalankan secara efektif. Makin&#13;
  banyak orang yang menggunakan mobil pribadi untuk melakukan perjalanan di&#13;
  suatu kota, makin tinggi angka kemacetan di kota tersebut. Kemacetan lalu&#13;
  lintas yang kronis ditandai dengan kondisi lalu lintas yang padat, terus&#13;
  menerus, dan bersifat periodik.</span></p><p class="MsoListParagraph" style="margin-top:0in;margin-right:0in;margin-bottom:&#13;&#10;  0in;margin-left:28.35pt;text-align:justify;line-height:115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:115%;color:red"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Manakah&#13;
  informasi berikut yang dapat <i>memperkuat</i> pernyataan “tingkat kemacetan&#13;
  sejalan dengan tingkat kepadatan penduduk”?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Deduktif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black">Data statistik Organisasi Kesehatan Dunia menyebutkan bahwa&#13;
  di dunia terdapat lima ratus jenis penyakit, dan hanya tiga puluh persen yang&#13;
  dapat disembuhkan dengan intervensi penggunaan obat. Yang tujuh puluh persen&#13;
  selebihnya harus disembuhkan dengan cara yang sangat berlainan, baik dengan&#13;
  teknologi medis mutakhir atau bahkan dengan cara pengobatan tradisional.&#13;
  Salah satu cara pengobatan tradisional adalah melalui terapi panas telapak&#13;
  tangan.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Pernyataan&#13;
  berikut yang sesuai dengan data statistik Organisasi Kesehatan Dunia adalah&#13;
  ....</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Deduktif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Jika adik naik&#13;
  kelas, ayah akan membelikan komputer baru. Jika kakak lulus kuliah tepat&#13;
  waktu, ayah akan membelikan motor baru.</span></p><p class="MsoListParagraph" style="margin-top:0in;margin-right:0in;margin-bottom:&#13;&#10;  0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Saat ini, adik&#13;
  tidak memiliki komputer baru dan kakak tidak memiliki motor baru, manakah&#13;
  simpulan yang paling tepat?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Deduktif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><a name="_Hlk68169433"><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Pelatih sepak bola tim ABS mengungkapkan bahwa&#13;
  keberhasilannya membawa kemenangan bagi tim ABS tahun ini disebabkan adanya&#13;
  pemain asing yang bergabung di tim ABS.</span></a></p><p class="MsoListParagraph" style="margin-top:0in;margin-right:0in;margin-bottom:&#13;&#10;  0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Manakah&#13;
  pernyataan berikut yang mendukung<i> </i>argumen pelatih sepak bola tersebut?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Deduktif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Rendi menyukai&#13;
  pelajaran bahasa Inggris. Ia ingin melanjutkan sekolah di Australia. Vino,&#13;
  teman sekelas Rendi, menyukai pelajaran bahasa Inggris.</span></p><p class="MsoListParagraph" style="margin-top:0in;margin-right:0in;margin-bottom:&#13;&#10;  0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Kesimpulan mana&#13;
  yang benar?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Deduktif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Jika guru&#13;
  membunyikan bel tanda masuk, siswa masuk ke kelas masing-masing. Jika ada&#13;
  pengumuman, siswa berkumpul di lapangan upacara. Saat ini, siswa berada di&#13;
  luar kelas atau mereka tidak berkumpul di lapangan upacara.</span></p><p class="MsoListParagraph" style="margin-top:0in;margin-right:0in;margin-bottom:&#13;&#10;  0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Simpulan yang&#13;
  paling tepat adalah ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">10, 22, 46,&#13;
  ..., 190, 11, 23, ..., 95</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Nilai yang&#13;
  tepat untuk mengisi titik-titik di atas adalah ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Perhatikan&#13;
  gambar berikut!</span></p><p class="MsoListParagraph" style="margin-top:0in;margin-right:0in;margin-bottom:&#13;&#10;  0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"><img border="0" width="173" height="106" id="Picture 1" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image001.png"/></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Nilai 10 dalam&#13;
  segitiga P adalah hasil operasi aritmetika semua bilangan di luar segitiga P.&#13;
  Dengan menggunakan pola operasi aritmetika yang sama, nilai dalam segitiga Q&#13;
  yang paling tepat adalah ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Hasil&#13;
  perhitungan yang lebih besar dari </span><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="58" height="29" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image002.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> adalah ...</span></p>'
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Toko A, Toko B,&#13;
  dan Toko C menjual bola sepak. Perbandingan banyaknya bola sepak yang terjual&#13;
  dari toko A dan toko B adalah 7 : 4. Perbandingan banyaknya bola sepak yang&#13;
  dijual toko B dan C adalah 5 : 3. Jika Toko C menjual 36 bola sepak, berapa&#13;
  banyak bola sepak yang dijual Toko A?</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:.25in;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Diagram sebar&#13;
  (scatterplot) di bawah menunjukkan hubungan antara berat mobil dan konsumsi&#13;
  bahan bakar (kilometer per liter/kmpl). Manakah dari berikut ini yang secara&#13;
  akurat menggambarkan hubungan tersebut?</span></p><p class="MsoListParagraphCxSpFirst" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:4.0pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"><img border="0" width="359" height="199" id="Chart 18" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image008.png"/></span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:.25in;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Kuantitatif',
        'question_desc' => '<p class="MTDisplayEquation" style="margin-left:0in;text-indent:0in"><span lang="IN" style="font-size:12.0pt;line-height:115%">Sebuah perusahaan penyewaan&#13;
  truk mengenakan biaya Rp200.000,00 untuk sewa truk ditambah Rp1.500,00 untuk&#13;
  setiap km jika lebih dari 100 km. Manakah dari grafik berikut yang paling&#13;
  mewakili biaya untuk menyewa truk?</span></p>'
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Kuantitatif',
        'question_desc' => '<p class="MTDisplayEquationCxSpFirst" style="margin-left:0in;text-indent:0in"><span lang="IN" style="font-size:12.0pt;line-height:115%">Diagram lingkaran di bawah&#13;
  ini menunjukkan persentase penjualan dari lima buah terlaris di supermarket.&#13;
  Total penjualan untuk satu hari adalah 1.000 kg. Berapa selisih antara&#13;
  penjualan buah persik dan buah plum?</span></p><p class="MTDisplayEquationCxSpMiddle" style="text-indent:0in"><span lang="IN" style="font-size:12.0pt;line-height:115%"><img border="0" width="194" height="196" id="Picture 28" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image014.png" alt="Chart, diagram, pie chart&#10;&#10;Description automatically generated"/></span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:.25in;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Sebuah mozaik&#13;
  terbuat dari sekumpulan potongan kertas warna yang berukuran 0,5 cm × 0,8 cm.&#13;
  Jika 2 mozaik mempunyai luas 160 cm<sup>2</sup>, maka jumlah potongan kertas&#13;
  warna yang dibutuhkan untuk membuat 6 mozaik adalah ...</span></p>'
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Sebuah&#13;
  perkebunan sawit melakukan evaluasi terhadap produktivitas kebun dan&#13;
  menemukan beberapa kondisi berikut.</span></p><p class="MsoListParagraphCxSpFirst" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:14.2pt;text-align:justify;text-indent:-14.2pt;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  font-family:Symbol">·<span style="font:7.0pt &quot;Times New Roman&quot;">     &#13;
  </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Jika jenis bibit yang ditanam berkualitas, hasil panen&#13;
  meningkat sebesar 10%</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:14.2pt;text-align:justify;text-indent:-14.2pt;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  font-family:Symbol">·<span style="font:7.0pt &quot;Times New Roman&quot;">     &#13;
  </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Jika menggunakan pupuk organik, hasil panen meningkat&#13;
  sebesar 15%</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:14.2pt;text-align:justify;text-indent:-14.2pt;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  font-family:Symbol">·<span style="font:7.0pt &quot;Times New Roman&quot;">     &#13;
  </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Jika curah hujan tinggi, produksi menurun sebesar </span><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="7" height="28" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image015.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> kali</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:14.2pt;text-align:justify;text-indent:-14.2pt;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  font-family:Symbol">·<span style="font:7.0pt &quot;Times New Roman&quot;">     &#13;
  </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Juka jumlah hama tanaman meningkat, hasil panen menurun&#13;
  sebesar 10%</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:42.55pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Manakah di&#13;
  antara pilihan berikut ini yang memiliki kontribusi PALING BESAR terhadap&#13;
  penurunan hasil panen?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Setiap bulan A&#13;
  memperoleh gaji tetap sebesar Rp6.000.000,00 dengan bonus berkisar&#13;
  Rp500.000,00 – Rp750.000,00. Sebagai pekerja, B mendapatkan upah dua mingguan&#13;
  sebesar Rp3.250.000,00. Sementara itu, melalui penjualan 15 – 20 pakaian&#13;
  setiap harinya, C mendapatkan keuntungan Rp16.000,00 per pakaian.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Jika satu bulan&#13;
  dihitung 28 hari, manakah pernyataan yang PALING TEPAT?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Pengetahuan dan Pemahaman Umum',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%;background:white"><sup><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black">1</span></sup><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black">Kemajuan&#13;
  teknologi tidak dapat dipisahkan dari kehidupan masyarakat. <sup>2</sup>Dengan&#13;
  berbagai informasi yang terjadi di berbagai belahan dunia kini dapat langsung&#13;
  kita ketahui berkat kemajuan teknologi, misalnya melalui <i>smartphone</i>. <sup>3</sup>Kalau&#13;
  dahulu kita mengenal pepatah <i>dunia tak selebar daun kelor</i>,&#13;
  sekarang pepatah itu selayaknya berganti menjadi dunia saat ini selebar daun&#13;
  kelor. <sup>4</sup>Cepatnya akses informasi di berbagai belahan dunia&#13;
  membuat dunia ini seolah semakin sempit. <sup>5</sup>Kita dapat&#13;
  menyaksikan apa yang terjadi di luar negeri dari Indonesia secara langsung.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%;background:white"><sup><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black">6</span></sup><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black">Perubahan yang&#13;
  begitu besar pada kehidupan umat manusia dengan segala peradabannya&#13;
  disebabkan oleh kemajuan teknologi yang tidak dapat kita hindari. <sup>7</sup>Kemajuan&#13;
  teknologi yang semakin dahsyat ini jangan sampai menggeser jati diri kita&#13;
  sebagai manusia. <sup>8</sup>Oleh sebab itu, kita harus melakukan&#13;
  tindakan yang bijaksana terhadap diri kita sendiri, keluarga, dan masyarakat&#13;
  luas.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black">(Diadaptasi dari https://media.neliti.com/)</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black">Kalimat yang tidak logis dalam bacaan tersebut adalah ….</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Pengetahuan dan Pemahaman Umum',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%;background:white"><sup><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black">1</span></sup><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black">Kemajuan&#13;
  teknologi tidak dapat dipisahkan dari kehidupan masyarakat. <sup>2</sup>Dengan&#13;
  berbagai informasi yang terjadi di berbagai belahan dunia kini dapat langsung&#13;
  kita ketahui berkat kemajuan teknologi, misalnya melalui <i>smartphone</i>. <sup>3</sup>Kalau&#13;
  dahulu kita mengenal pepatah <i>dunia tak selebar daun kelor</i>,&#13;
  sekarang pepatah itu selayaknya berganti menjadi dunia saat ini selebar daun&#13;
  kelor. <sup>4</sup>Cepatnya akses informasi di berbagai belahan dunia&#13;
  membuat dunia ini seolah semakin sempit. <sup>5</sup>Kita dapat&#13;
  menyaksikan apa yang terjadi di luar negeri dari Indonesia secara langsung.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%;background:white"><sup><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black">6</span></sup><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black">Perubahan yang&#13;
  begitu besar pada kehidupan umat manusia dengan segala peradabannya&#13;
  disebabkan oleh kemajuan teknologi yang tidak dapat kita hindari. <sup>7</sup>Kemajuan&#13;
  teknologi yang semakin dahsyat ini jangan sampai menggeser jati diri kita&#13;
  sebagai manusia. <sup>8</sup>Oleh sebab itu, kita harus melakukan&#13;
  tindakan yang bijaksana terhadap diri kita sendiri, keluarga, dan masyarakat&#13;
  luas.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black">(Diadaptasi dari https://media.neliti.com/)</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black">Kata <i>bijaksana</i> dalam kalimat (8)&#13;
  berasosiasi dengan ….</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:21.3pt;text-align:justify;line-height:115%;&#13;&#10;  background:white"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Pengetahuan dan Pemahaman Umum',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%;background:white"><sup><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black">1</span></sup><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black">Kemajuan&#13;
  teknologi tidak dapat dipisahkan dari kehidupan masyarakat. <sup>2</sup>Dengan&#13;
  berbagai informasi yang terjadi di berbagai belahan dunia kini dapat langsung&#13;
  kita ketahui berkat kemajuan teknologi, misalnya melalui <i>smartphone</i>. <sup>3</sup>Kalau&#13;
  dahulu kita mengenal pepatah <i>dunia tak selebar daun kelor</i>,&#13;
  sekarang pepatah itu selayaknya berganti menjadi dunia saat ini selebar daun&#13;
  kelor. <sup>4</sup>Cepatnya akses informasi di berbagai belahan dunia&#13;
  membuat dunia ini seolah semakin sempit. <sup>5</sup>Kita dapat&#13;
  menyaksikan apa yang terjadi di luar negeri dari Indonesia secara langsung.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%;background:white"><sup><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black">6</span></sup><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black">Perubahan yang&#13;
  begitu besar pada kehidupan umat manusia dengan segala peradabannya&#13;
  disebabkan oleh kemajuan teknologi yang tidak dapat kita hindari. <sup>7</sup>Kemajuan&#13;
  teknologi yang semakin dahsyat ini jangan sampai menggeser jati diri kita&#13;
  sebagai manusia. <sup>8</sup>Oleh sebab itu, kita harus melakukan&#13;
  tindakan yang bijaksana terhadap diri kita sendiri, keluarga, dan masyarakat&#13;
  luas.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black">(Diadaptasi dari https://media.neliti.com/)</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black">Kata yang memiliki makna bertingkat dengan kata <i>akses</i> dalam&#13;
  kalimat (4) adalah ….</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:21.3pt;text-align:justify;line-height:115%;&#13;&#10;  background:white"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Pengetahuan dan Pemahaman Umum',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%;background:white"><sup><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black">1</span></sup><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black">Kemajuan&#13;
  teknologi tidak dapat dipisahkan dari kehidupan masyarakat. <sup>2</sup>Dengan&#13;
  berbagai informasi yang terjadi di berbagai belahan dunia kini dapat langsung&#13;
  kita ketahui berkat kemajuan teknologi, misalnya melalui <i>smartphone</i>. <sup>3</sup>Kalau&#13;
  dahulu kita mengenal pepatah <i>dunia tak selebar daun kelor</i>,&#13;
  sekarang pepatah itu selayaknya berganti menjadi dunia saat ini selebar daun&#13;
  kelor. <sup>4</sup>Cepatnya akses informasi di berbagai belahan dunia&#13;
  membuat dunia ini seolah semakin sempit. <sup>5</sup>Kita dapat&#13;
  menyaksikan apa yang terjadi di luar negeri dari Indonesia secara langsung.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%;background:white"><sup><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black">6</span></sup><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black">Perubahan yang&#13;
  begitu besar pada kehidupan umat manusia dengan segala peradabannya&#13;
  disebabkan oleh kemajuan teknologi yang tidak dapat kita hindari. <sup>7</sup>Kemajuan&#13;
  teknologi yang semakin dahsyat ini jangan sampai menggeser jati diri kita&#13;
  sebagai manusia. <sup>8</sup>Oleh sebab itu, kita harus melakukan&#13;
  tindakan yang bijaksana terhadap diri kita sendiri, keluarga, dan masyarakat&#13;
  luas.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black">(Diadaptasi dari https://media.neliti.com/)</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black">Kata <i>pepatah </i>pada kalimat (3) dalam bacaan&#13;
  tersebut sama maknanya dengan kata .…</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:21.3pt;text-align:justify;line-height:115%;&#13;&#10;  background:white"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Pengetahuan dan Pemahaman Umum',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%;background:white"><sup><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black">1</span></sup><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black">Kemajuan&#13;
  teknologi tidak dapat dipisahkan dari kehidupan masyarakat. <sup>2</sup>Dengan&#13;
  berbagai informasi yang terjadi di berbagai belahan dunia kini dapat langsung&#13;
  kita ketahui berkat kemajuan teknologi, misalnya melalui <i>smartphone</i>. <sup>3</sup>Kalau&#13;
  dahulu kita mengenal pepatah <i>dunia tak selebar daun kelor</i>,&#13;
  sekarang pepatah itu selayaknya berganti menjadi dunia saat ini selebar daun&#13;
  kelor. <sup>4</sup>Cepatnya akses informasi di berbagai belahan dunia&#13;
  membuat dunia ini seolah semakin sempit. <sup>5</sup>Kita dapat&#13;
  menyaksikan apa yang terjadi di luar negeri dari Indonesia secara langsung.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%;background:white"><sup><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black">6</span></sup><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black">Perubahan yang&#13;
  begitu besar pada kehidupan umat manusia dengan segala peradabannya&#13;
  disebabkan oleh kemajuan teknologi yang tidak dapat kita hindari. <sup>7</sup>Kemajuan&#13;
  teknologi yang semakin dahsyat ini jangan sampai menggeser jati diri kita&#13;
  sebagai manusia. <sup>8</sup>Oleh sebab itu, kita harus melakukan&#13;
  tindakan yang bijaksana terhadap diri kita sendiri, keluarga, dan masyarakat&#13;
  luas.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black">(Diadaptasi dari https://media.neliti.com/)</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black">Kalimat (6) dan (7) dalam bacaan tersebut mengandung&#13;
  hubungan ….</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Pengetahuan dan Pemahaman Umum',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  28.35pt;line-height:115%"><sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">1</span></sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Indonesia terletak tepat di 3 lempeng tektonik dan lingkar&#13;
  cincin dunia. <sup>2</sup>Hal ini menjadi simbol bahwa Indonesia berada pada&#13;
  wilayah rawan bencana. <sup>3</sup>Ada banyak cara dan metodologi dalam&#13;
  penanganan bencana gempa bumi. <sup>4</sup>Negara, seperti Jepang yang rawan&#13;
  gempa bumi, biasanya seringkali dijadikan acuan untuk belajar mengenai&#13;
  mitigasi gempa bumi. <sup>5</sup>Beberapa suku dan wilayah di Indonesia&#13;
  memiliki caranya masing-masing dalam menangani gempa bumi, misalnya suku&#13;
  Baduy. <sup>6</sup>Suku Baduy dikenal sebagai suku yang masih memegang teguh&#13;
  adat istiadat dan nilai-nilai budaya yang diajarkan nenek moyang mereka. <sup>7</sup>Ada&#13;
  beberapa tradisi yang selalu dijaga dan diamalkan dalam kehidupan sehari-hari&#13;
  demi menjaga keamanan dari gempa bumi. <sup>8</sup>Terdapat aturan ketika&#13;
  membuat dan membangun sebuah bangunan. <sup>9</sup>Bangunan tersebut harus&#13;
  menggunakan bahan yang terbuat dari bambu, ijuk, dan kirey. <sup>10</sup>Selain&#13;
  itu, ketika membangun bangunan haruslah memakai pasak dan tidak memakai paku&#13;
  agar ketika terjadi bencana gempa tingkat kerusakan bisa diminimalisasi.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Apabila gagasan&#13;
  pada bacaan tersebut dipisahkan menjadi dua paragraf yang padu dan utuh,&#13;
  pengelompokan kalimatnya adalah ....</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Pengetahuan dan Pemahaman Umum',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  28.35pt;line-height:115%"><sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">1</span></sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Indonesia terletak tepat di 3 lempeng tektonik dan lingkar&#13;
  cincin dunia. <sup>2</sup>Hal ini menjadi simbol bahwa Indonesia berada pada&#13;
  wilayah rawan bencana. <sup>3</sup>Ada banyak cara dan metodologi dalam&#13;
  penanganan bencana gempa bumi. <sup>4</sup>Negara, seperti Jepang yang rawan&#13;
  gempa bumi, biasanya seringkali dijadikan acuan untuk belajar mengenai&#13;
  mitigasi gempa bumi. <sup>5</sup>Beberapa suku dan wilayah di Indonesia&#13;
  memiliki caranya masing-masing dalam menangani gempa bumi, misalnya suku&#13;
  Baduy. <sup>6</sup>Suku Baduy dikenal sebagai suku yang masih memegang teguh&#13;
  adat istiadat dan nilai-nilai budaya yang diajarkan nenek moyang mereka. <sup>7</sup>Ada&#13;
  beberapa tradisi yang selalu dijaga dan diamalkan dalam kehidupan sehari-hari&#13;
  demi menjaga keamanan dari gempa bumi. <sup>8</sup>Terdapat aturan ketika&#13;
  membuat dan membangun sebuah bangunan. <sup>9</sup>Bangunan tersebut harus&#13;
  menggunakan bahan yang terbuat dari bambu, ijuk, dan kirey. <sup>10</sup>Selain&#13;
  itu, ketika membangun bangunan haruslah memakai pasak dan tidak memakai paku&#13;
  agar ketika terjadi bencana gempa tingkat kerusakan bisa diminimalisasi.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Perluasan&#13;
  kalimat inti pada kalimat (8) adalah ....</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Pengetahuan dan Pemahaman Umum',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  28.35pt;line-height:115%"><sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">1</span></sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Indonesia terletak tepat di 3 lempeng tektonik dan lingkar&#13;
  cincin dunia. <sup>2</sup>Hal ini menjadi simbol bahwa Indonesia berada pada&#13;
  wilayah rawan bencana. <sup>3</sup>Ada banyak cara dan metodologi dalam&#13;
  penanganan bencana gempa bumi. <sup>4</sup>Negara, seperti Jepang yang rawan&#13;
  gempa bumi, biasanya seringkali dijadikan acuan untuk belajar mengenai&#13;
  mitigasi gempa bumi. <sup>5</sup>Beberapa suku dan wilayah di Indonesia&#13;
  memiliki caranya masing-masing dalam menangani gempa bumi, misalnya suku&#13;
  Baduy. <sup>6</sup>Suku Baduy dikenal sebagai suku yang masih memegang teguh&#13;
  adat istiadat dan nilai-nilai budaya yang diajarkan nenek moyang mereka. <sup>7</sup>Ada&#13;
  beberapa tradisi yang selalu dijaga dan diamalkan dalam kehidupan sehari-hari&#13;
  demi menjaga keamanan dari gempa bumi. <sup>8</sup>Terdapat aturan ketika&#13;
  membuat dan membangun sebuah bangunan. <sup>9</sup>Bangunan tersebut harus&#13;
  menggunakan bahan yang terbuat dari bambu, ijuk, dan kirey. <sup>10</sup>Selain&#13;
  itu, ketika membangun bangunan haruslah memakai pasak dan tidak memakai paku&#13;
  agar ketika terjadi bencana gempa tingkat kerusakan bisa diminimalisasi.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Dari bacaan di&#13;
  atas, kalimat yang berpola sama dengan pola </span><i><span lang="IN" style="font-size:12.0pt;line-height:115%">Para orang tua biasanya mempunyai&#13;
  perbedaan dalam pengasuhan anak, seperti ada yang membolehkan anaknya bermain&#13;
  game, sementara yang lain tidak</span></i><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%">, adalah ....</span></p>'
    ),
    array(
        'sub_title' => 'Pengetahuan dan Pemahaman Umum',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  28.35pt;line-height:115%"><sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">1</span></sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Indonesia terletak tepat di 3 lempeng tektonik dan lingkar&#13;
  cincin dunia. <sup>2</sup>Hal ini menjadi simbol bahwa Indonesia berada pada&#13;
  wilayah rawan bencana. <sup>3</sup>Ada banyak cara dan metodologi dalam&#13;
  penanganan bencana gempa bumi. <sup>4</sup>Negara, seperti Jepang yang rawan&#13;
  gempa bumi, biasanya seringkali dijadikan acuan untuk belajar mengenai&#13;
  mitigasi gempa bumi. <sup>5</sup>Beberapa suku dan wilayah di Indonesia&#13;
  memiliki caranya masing-masing dalam menangani gempa bumi, misalnya suku&#13;
  Baduy. <sup>6</sup>Suku Baduy dikenal sebagai suku yang masih memegang teguh&#13;
  adat istiadat dan nilai-nilai budaya yang diajarkan nenek moyang mereka. <sup>7</sup>Ada&#13;
  beberapa tradisi yang selalu dijaga dan diamalkan dalam kehidupan sehari-hari&#13;
  demi menjaga keamanan dari gempa bumi. <sup>8</sup>Terdapat aturan ketika&#13;
  membuat dan membangun sebuah bangunan. <sup>9</sup>Bangunan tersebut harus&#13;
  menggunakan bahan yang terbuat dari bambu, ijuk, dan kirey. <sup>10</sup>Selain&#13;
  itu, ketika membangun bangunan haruslah memakai pasak dan tidak memakai paku&#13;
  agar ketika terjadi bencana gempa tingkat kerusakan bisa diminimalisasi.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Fakta dalam&#13;
  bacaan tersebut terdapat pada ....</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:21.3pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Pengetahuan dan Pemahaman Umum',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  28.35pt;line-height:115%"><sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">1</span></sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Indonesia terletak tepat di 3 lempeng tektonik dan lingkar&#13;
  cincin dunia. <sup>2</sup>Hal ini menjadi simbol bahwa Indonesia berada pada&#13;
  wilayah rawan bencana. <sup>3</sup>Ada banyak cara dan metodologi dalam&#13;
  penanganan bencana gempa bumi. <sup>4</sup>Negara, seperti Jepang yang rawan&#13;
  gempa bumi, biasanya seringkali dijadikan acuan untuk belajar mengenai&#13;
  mitigasi gempa bumi. <sup>5</sup>Beberapa suku dan wilayah di Indonesia&#13;
  memiliki caranya masing-masing dalam menangani gempa bumi, misalnya suku&#13;
  Baduy. <sup>6</sup>Suku Baduy dikenal sebagai suku yang masih memegang teguh&#13;
  adat istiadat dan nilai-nilai budaya yang diajarkan nenek moyang mereka. <sup>7</sup>Ada&#13;
  beberapa tradisi yang selalu dijaga dan diamalkan dalam kehidupan sehari-hari&#13;
  demi menjaga keamanan dari gempa bumi. <sup>8</sup>Terdapat aturan ketika&#13;
  membuat dan membangun sebuah bangunan. <sup>9</sup>Bangunan tersebut harus&#13;
  menggunakan bahan yang terbuat dari bambu, ijuk, dan kirey. <sup>10</sup>Selain&#13;
  itu, ketika membangun bangunan haruslah memakai pasak dan tidak memakai paku&#13;
  agar ketika terjadi bencana gempa tingkat kerusakan bisa diminimalisasi.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Tujuan&#13;
  penulisan kalimat (6) pada bacaan tersebut adalah untuk ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Pengetahuan dan Pemahaman Umum',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">1</span></sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">[…]. <sup>2</sup>Sistem ini juga akan membuat kondisi di&#13;
  wilayah pantai menjadi terintegrasi, mulai dari melihat cuaca laut hingga&#13;
  sistem operasional di sekitar pesisir. <sup>3</sup>Menurut Deputi BMKG Bidang&#13;
  Meteorologi, sistem ini berguna untuk mengamati kondisi laut dan mengurangi&#13;
  dampak banjir rob air laut. <sup>4</sup>Selain itu, sistem ini tidak hanya&#13;
  digunakan untuk mengurangi risiko kerugian akibat bencana, tetapi juga&#13;
  berguna untuk perencanaan ke depan. <sup>5</sup>Sistem ini diharapkan mampu&#13;
  menyatukan para pemangku kepentingan di berbagai lembaga pemerintah dan&#13;
  organisasi nonpemerintah di Indonesia.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Kalimat yang&#13;
  tepat untuk mengisi rumpang pada paragraf tersebut adalah ...</span></p>'
    ),
    array(
        'sub_title' => 'Pengetahuan dan Pemahaman Umum',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">1</span></sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">[…]. <sup>2</sup>Sistem ini juga akan membuat kondisi di&#13;
  wilayah pantai menjadi terintegrasi, mulai dari melihat cuaca laut hingga&#13;
  sistem operasional di sekitar pesisir. <sup>3</sup>Menurut Deputi BMKG Bidang&#13;
  Meteorologi, sistem ini berguna untuk mengamati kondisi laut dan mengurangi&#13;
  dampak banjir rob air laut. <sup>4</sup>Selain itu, sistem ini tidak hanya&#13;
  digunakan untuk mengurangi risiko kerugian akibat bencana, tetapi juga&#13;
  berguna untuk perencanaan ke depan. <sup>5</sup>Sistem ini diharapkan mampu&#13;
  menyatukan para pemangku kepentingan di berbagai lembaga pemerintah dan&#13;
  organisasi nonpemerintah di Indonesia.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Kelompok kata <i>pemangku&#13;
  kepentingan </i>pada teks tersebut bermakna ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Pengetahuan dan Pemahaman Umum',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">1</span></sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Kerajinan tangan dihasilkan oleh masyarakat Bengkulu yang&#13;
  sangat populer adalah kain batik Besurek. <sup>2</sup>Besurek dalam bahasa&#13;
  Bengkulu memiliki arti ‘bersurat’. <sup>3</sup>Batik ini dinamakan Besurek&#13;
  karena sebagian motifnya dibuat dari panduan kaligrafi Arab dengan huruf asli&#13;
  Bengkulu, yaitu Kanganga. <sup>4</sup>Batik ini disukai banyak orang sebagai&#13;
  oleh-oleh khas Bengkulu. <sup>5</sup>Tidak kalah dengan kualitas batik dari&#13;
  berbagai wilayah Indonesia, kualitasnya yang bagus membuat batik khas&#13;
  Bengkulu ini banyak dicari. <sup>6</sup>Kain batik Besurek Bengkulu yang&#13;
  dihasilkan murni dengan tangan, bukan dicetak menggunakan mesin, sering&#13;
  disebut dengan batik tangan. <sup>7</sup>Batik dengan coraknya yang khas&#13;
  dengan motif bunga Rafflesia, sang penebar bau busuk dan lebih dikenal dengan&#13;
  bunga bangkai, juga dihasilkan dengan batik tangan.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Ungkapan yang&#13;
  digunakan oleh penulis untuk mengibaratkan sesuatu seperti manusia pada&#13;
  bacaan di atas adalah …</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Pengetahuan dan Pemahaman Umum',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">1</span></sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Kerajinan tangan dihasilkan oleh masyarakat Bengkulu yang&#13;
  sangat populer adalah kain batik Besurek. <sup>2</sup>Besurek dalam bahasa&#13;
  Bengkulu memiliki arti ‘bersurat’. <sup>3</sup>Batik ini dinamakan Besurek&#13;
  karena sebagian motifnya dibuat dari panduan kaligrafi Arab dengan huruf asli&#13;
  Bengkulu, yaitu Kanganga. <sup>4</sup>Batik ini disukai banyak orang sebagai&#13;
  oleh-oleh khas Bengkulu. <sup>5</sup>Tidak kalah dengan kualitas batik dari&#13;
  berbagai wilayah Indonesia, kualitasnya yang bagus membuat batik khas&#13;
  Bengkulu ini banyak dicari. <sup>6</sup>Kain batik Besurek Bengkulu yang&#13;
  dihasilkan murni dengan tangan, bukan dicetak menggunakan mesin, sering&#13;
  disebut dengan batik tangan. <sup>7</sup>Batik dengan coraknya yang khas&#13;
  dengan motif bunga Rafflesia, sang penebar bau busuk dan lebih dikenal dengan&#13;
  bunga bangkai, juga dihasilkan dengan batik tangan.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Bentuk pasif&#13;
  dari kalimat aktif <i>banyak orang mengagumi motif bunga Rafflesia</i>&#13;
  memiliki pola sama dengan pola kalimat ….</span></p>'
    ),
    array(
        'sub_title' => 'Pengetahuan dan Pemahaman Umum',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">1</span></sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Kerajinan tangan dihasilkan oleh masyarakat Bengkulu yang&#13;
  sangat populer adalah kain batik Besurek. <sup>2</sup>Besurek dalam bahasa&#13;
  Bengkulu memiliki arti ‘bersurat’. <sup>3</sup>Batik ini dinamakan Besurek&#13;
  karena sebagian motifnya dibuat dari panduan kaligrafi Arab dengan huruf asli&#13;
  Bengkulu, yaitu Kanganga. <sup>4</sup>Batik ini disukai banyak orang sebagai&#13;
  oleh-oleh khas Bengkulu. <sup>5</sup>Tidak kalah dengan kualitas batik dari&#13;
  berbagai wilayah Indonesia, kualitasnya yang bagus membuat batik khas&#13;
  Bengkulu ini banyak dicari. <sup>6</sup>Kain batik Besurek Bengkulu yang&#13;
  dihasilkan murni dengan tangan, bukan dicetak menggunakan mesin, sering&#13;
  disebut dengan batik tangan. <sup>7</sup>Batik dengan coraknya yang khas&#13;
  dengan motif bunga Rafflesia, sang penebar bau busuk dan lebih dikenal dengan&#13;
  bunga bangkai, juga dihasilkan dengan batik tangan.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Sikap penulis&#13;
  pada bacaan tersebut adalah ....</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:21.3pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Pengetahuan dan Pemahaman Umum',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">1</span></sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Kerajinan tangan dihasilkan oleh masyarakat Bengkulu yang&#13;
  sangat populer adalah kain batik Besurek. <sup>2</sup>Besurek dalam bahasa&#13;
  Bengkulu memiliki arti ‘bersurat’. <sup>3</sup>Batik ini dinamakan Besurek&#13;
  karena sebagian motifnya dibuat dari panduan kaligrafi Arab dengan huruf asli&#13;
  Bengkulu, yaitu Kanganga. <sup>4</sup>Batik ini disukai banyak orang sebagai&#13;
  oleh-oleh khas Bengkulu. <sup>5</sup>Tidak kalah dengan kualitas batik dari&#13;
  berbagai wilayah Indonesia, kualitasnya yang bagus membuat batik khas&#13;
  Bengkulu ini banyak dicari. <sup>6</sup>Kain batik Besurek Bengkulu yang&#13;
  dihasilkan murni dengan tangan, bukan dicetak menggunakan mesin, sering&#13;
  disebut dengan batik tangan. <sup>7</sup>Batik dengan coraknya yang khas&#13;
  dengan motif bunga Rafflesia, sang penebar bau busuk dan lebih dikenal dengan&#13;
  bunga bangkai, juga dihasilkan dengan batik tangan.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Pesan tersirat&#13;
  dari paragraf tersebut adalah ....</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Pengetahuan dan Pemahaman Umum',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  27.0pt;line-height:115%"><sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">1</span></sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Tindakan kreativitas dapat menjadi sesuatu yang hebat dan&#13;
  menginspirasi seperti seniman membuat lukisan yang indah atau merancang&#13;
  produk baru yang inovatif. <sup>2</sup>Tetapi sebuah ide tidak harus artistik&#13;
  atau mengubah dunia untuk dapat dianggap kreatif. <sup>3</sup>Hidup&#13;
  membutuhkan tindakan kecerdikan dan solusi baru. <sup>4</sup>Dengan&#13;
  pengertian ini dapat dikatakan bahwa hampir semua orang memiliki sejumlah&#13;
  kreativitas.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  27.0pt;line-height:115%"><sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">5</span></sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Penelitian menunjukkan bahwa berpikir kreatif melibatkan&#13;
  tindakan menciptakan koneksi baru antara berbagai wilayah otak yang dicapai&#13;
  dengan memupuk keterampilan berpikir yang berbeda dan mengekspos diri pada&#13;
  pengalaman baru. <sup>6</sup>Sementara para psikolog pada umumnya tertarik&#13;
  dengan pemikiran inovatif, psikolog klinis lebih cenderung mendorong pasien&#13;
  untuk menggunakan ekspresi artistik sebagai cara untuk menghadapi perasaan&#13;
  sulit.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Kata manakah&#13;
  pada bacaan di atas yang pola bentukan katanya </span><span style="font-size:&#13;&#10;  12.0pt;line-height:115%">tidak </span><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">dapat digunakan untuk membentuk kata lain?</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:21.3pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Pengetahuan dan Pemahaman Umum',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  27.0pt;line-height:115%"><sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">1</span></sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Tindakan kreativitas dapat menjadi sesuatu yang hebat dan&#13;
  menginspirasi seperti seniman membuat lukisan yang indah atau merancang&#13;
  produk baru yang inovatif. <sup>2</sup>Tetapi sebuah ide tidak harus artistik&#13;
  atau mengubah dunia untuk dapat dianggap kreatif. <sup>3</sup>Hidup membutuhkan&#13;
  tindakan kecerdikan dan solusi baru. <sup>4</sup>Dengan pengertian ini dapat&#13;
  dikatakan bahwa hampir semua orang memiliki sejumlah kreativitas.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  27.0pt;line-height:115%"><sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">5</span></sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Penelitian menunjukkan bahwa berpikir kreatif melibatkan&#13;
  tindakan menciptakan koneksi baru antara berbagai wilayah otak yang dicapai&#13;
  dengan memupuk keterampilan berpikir yang berbeda dan mengekspos diri pada&#13;
  pengalaman baru. <sup>6</sup>Sementara para psikolog pada umumnya tertarik&#13;
  dengan pemikiran inovatif, psikolog klinis lebih cenderung mendorong pasien&#13;
  untuk menggunakan ekspresi artistik sebagai cara untuk menghadapi perasaan&#13;
  sulit.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Frasa manakah&#13;
  pada bacaan di atas yang pola bentukannya sama dengan pola bentuk frasa <i>praktisi</i>&#13;
  <i>medis</i>?</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Pengetahuan dan Pemahaman Umum',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  27.0pt;line-height:115%"><sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">1</span></sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Tindakan kreativitas dapat menjadi sesuatu yang hebat dan&#13;
  menginspirasi seperti seniman membuat lukisan yang indah atau merancang&#13;
  produk baru yang inovatif. <sup>2</sup>Tetapi sebuah ide tidak harus artistik&#13;
  atau mengubah dunia untuk dapat dianggap kreatif. <sup>3</sup>Hidup&#13;
  membutuhkan tindakan kecerdikan dan solusi baru. <sup>4</sup>Dengan&#13;
  pengertian ini dapat dikatakan bahwa hampir semua orang memiliki sejumlah&#13;
  kreativitas.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  27.0pt;line-height:115%"><sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">5</span></sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Penelitian menunjukkan bahwa berpikir kreatif melibatkan&#13;
  tindakan menciptakan koneksi baru antara berbagai wilayah otak yang dicapai&#13;
  dengan memupuk keterampilan berpikir yang berbeda dan mengekspos diri pada&#13;
  pengalaman baru. <sup>6</sup>Sementara para psikolog pada umumnya tertarik&#13;
  dengan pemikiran inovatif, psikolog klinis lebih cenderung mendorong pasien&#13;
  untuk menggunakan ekspresi artistik sebagai cara untuk menghadapi perasaan&#13;
  sulit.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Kalimat yang&#13;
  mengandung frasa tidak sejajar adalah ....</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Pengetahuan dan Pemahaman Umum',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  27.0pt;line-height:115%"><sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">1</span></sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Tindakan kreativitas dapat menjadi sesuatu yang hebat dan&#13;
  menginspirasi seperti seniman membuat lukisan yang indah atau merancang&#13;
  produk baru yang inovatif. <sup>2</sup>Tetapi sebuah ide tidak harus artistik&#13;
  atau mengubah dunia untuk dapat dianggap kreatif. <sup>3</sup>Hidup&#13;
  membutuhkan tindakan kecerdikan dan solusi baru. <sup>4</sup>Dengan&#13;
  pengertian ini dapat dikatakan bahwa hampir semua orang memiliki sejumlah&#13;
  kreativitas.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  27.0pt;line-height:115%"><sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">5</span></sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Penelitian menunjukkan bahwa berpikir kreatif melibatkan&#13;
  tindakan menciptakan koneksi baru antara berbagai wilayah otak yang dicapai&#13;
  dengan memupuk keterampilan berpikir yang berbeda dan mengekspos diri pada&#13;
  pengalaman baru. <sup>6</sup>Sementara para psikolog pada umumnya tertarik&#13;
  dengan pemikiran inovatif, psikolog klinis lebih cenderung mendorong pasien&#13;
  untuk menggunakan ekspresi artistik sebagai cara untuk menghadapi perasaan&#13;
  sulit.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Bentuk <i>pe-an</i>&#13;
  pada kata <i>pembodohan</i> dalam kalimat <i>Secara tidak sadar, pembodohan&#13;
  publik seringkali terjadi kepada kita</i> mempunyai kesamaan makna dengan&#13;
  bentuk <i>pe-an</i> dalam kalimat ….</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Kemampuan Memahami Bacaan dan Menulis',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black;background:white">1</span></sup><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black;background:white">Limbah&#13;
  medis dan sampah plastik meningkat secara drastis selama pandemi&#13;
  Covid-19. <sup>2</sup>Penggunaan masker, sarung tangan, dan alat&#13;
  pelindung diri (APD) sekali pakai memicu peningkatan limbah dan sampah. <sup>3</sup>Berdasarkan&#13;
  data historis, sebanyak 75% masker sekali pakai dan sampah lain terkait&#13;
  pandemi yang akan berakhir di tempat pembuangan sampah akhir (TPA). <sup>4</sup>Sementara&#13;
  itu, sebagian lainnya mencemari lingkungan, berserakan di jalan-jalan,&#13;
  selokan, dan sungai. <sup>5</sup>Perilaku masyarakat yang tidak bertanggung&#13;
  jawab memicu krisis lingkungan. <sup>6</sup>Program Lingkungan PBB&#13;
  United Nation Environment Programme (UNEP) menyebutkan bahwa limbah dan&#13;
  sampah ini tidak hanya memicu pada kerusakan lingkungan, tetapi juga&#13;
  merugikan sektor pariwisata dan perikanan dengan kerugian mencapai 40 miliar&#13;
  dolar. <sup>7</sup>Oleh karena itu, pemerintah ….</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black">Kalimat (3) perlu disempurnakan dengan cara ….</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:23.75pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:23.75pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Kemampuan Memahami Bacaan dan Menulis',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black;background:white">1</span></sup><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black;background:white">Limbah&#13;
  medis dan sampah plastik meningkat secara drastis selama pandemi&#13;
  Covid-19. <sup>2</sup>Penggunaan masker, sarung tangan, dan alat&#13;
  pelindung diri (APD) sekali pakai memicu peningkatan limbah dan sampah. <sup>3</sup>Berdasarkan&#13;
  data historis, sebanyak 75% masker sekali pakai dan sampah lain terkait&#13;
  pandemi yang akan berakhir di tempat pembuangan sampah akhir (TPA). <sup>4</sup>Sementara&#13;
  itu, sebagian lainnya mencemari lingkungan, berserakan di jalan-jalan,&#13;
  selokan, dan sungai. <sup>5</sup>Perilaku masyarakat yang tidak&#13;
  bertanggung jawab memicu krisis lingkungan. <sup>6</sup>Program&#13;
  Lingkungan PBB United Nation Environment Programme (UNEP) menyebutkan bahwa&#13;
  limbah dan sampah ini tidak hanya memicu pada kerusakan lingkungan, tetapi&#13;
  juga merugikan sektor pariwisata dan perikanan dengan kerugian mencapai 40&#13;
  miliar dolar. <sup>7</sup>Oleh karena itu, pemerintah ….</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black">Kata yang harus dihilangkan pada kalimat (6) adalah ….</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Kemampuan Memahami Bacaan dan Menulis',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black;background:white">1</span></sup><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black;background:white">Limbah&#13;
  medis dan sampah plastik meningkat secara drastis selama pandemi&#13;
  Covid-19. <sup>2</sup>Penggunaan masker, sarung tangan, dan alat&#13;
  pelindung diri (APD) sekali pakai memicu peningkatan limbah dan sampah. <sup>3</sup>Berdasarkan&#13;
  data historis, sebanyak 75% masker sekali pakai dan sampah lain terkait&#13;
  pandemi yang akan berakhir di tempat pembuangan sampah akhir (TPA). <sup>4</sup>Sementara&#13;
  itu, sebagian lainnya mencemari lingkungan, berserakan di jalan-jalan,&#13;
  selokan, dan sungai. <sup>5</sup>Perilaku masyarakat yang tidak&#13;
  bertanggung jawab memicu krisis lingkungan. <sup>6</sup>Program&#13;
  Lingkungan PBB United Nation Environment Programme (UNEP) menyebutkan bahwa&#13;
  limbah dan sampah ini tidak hanya memicu pada kerusakan lingkungan, tetapi&#13;
  juga merugikan sektor pariwisata dan perikanan dengan kerugian mencapai 40&#13;
  miliar dolar. <sup>7</sup>Oleh karena itu, pemerintah ….</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black">Pernyataan yang paling tepat untuk melengkapi kalimat (7)&#13;
  adalah ….</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:23.75pt;text-align:justify;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></b></p>'
    ),
    array(
        'sub_title' => 'Kemampuan Memahami Bacaan dan Menulis',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">1</span></sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Sekarang ini, pembelajaran antikorupsi harus melibatkan&#13;
  siswa secara aktif dalam membangun pengetahuan yang bermakna. <sup>2</sup>Dalam&#13;
  pembelajaran aktif siswa diberi otonomi yang cukup untuk mengontrol aktivitas&#13;
  belajar, seperti menginvestigasi, memecahkan masalah, dan mendiskusikan dalam&#13;
  kelompok kecil. <sup>3</sup>Dengan kata ini, pembelajaran antikorupsi dapat&#13;
  menggunakan berbagai cara atau strategi. <sup>4</sup>Dengan catatan, cara&#13;
  atau strategi <b>tersebut</b> melibatkan siswa secara aktif, baik fisik&#13;
  maupun mental. <sup>5</sup>Proses belajar secara aktif melibatkan dua aspek,&#13;
  yaitu pengalaman dan dialog. <sup>6</sup>Dua hal yang terkait dengan&#13;
  pengalaman adalah melakukan dan mengamati. <sup>7</sup>Melakukan dalam&#13;
  belajar aktif meliputi aktivitas siswa melakukan sesuatu, menginvestigasi&#13;
  penyebab korupsi, atau memperesentasikan prosedur pengadilan perkara korupsi&#13;
  di pengadilan tindak pidana korupsi. <sup>8</sup>Jadi, proses pembelajaran&#13;
  secara aktif dapat menempatkan siswa dalam suatu situasi yang membuat mereka&#13;
  terlibat dalam aktivitas yang telah dirancang oleh guru untuk tujuan&#13;
  tertentu.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Kata <i>tersebut&#13;
  </i>pada kalimat (4) merujuk ....</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:21.3pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Kemampuan Memahami Bacaan dan Menulis',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">1</span></sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Sekarang ini, pembelajaran antikorupsi harus melibatkan&#13;
  siswa secara aktif dalam membangun pengetahuan yang bermakna. <sup>2</sup>Dalam&#13;
  pembelajaran aktif siswa diberi otonomi yang cukup untuk mengontrol aktivitas&#13;
  belajar, seperti menginvestigasi, memecahkan masalah, dan mendiskusikan dalam&#13;
  kelompok kecil. <sup>3</sup>Dengan kata ini, pembelajaran antikorupsi dapat&#13;
  menggunakan berbagai cara atau strategi. <sup>4</sup>Dengan catatan, cara&#13;
  atau strategi <b>tersebut</b> melibatkan siswa secara aktif, baik fisik&#13;
  maupun mental. <sup>5</sup>Proses belajar secara aktif melibatkan dua aspek,&#13;
  yaitu pengalaman dan dialog. <sup>6</sup>Dua hal yang terkait dengan&#13;
  pengalaman adalah melakukan dan mengamati. <sup>7</sup>Melakukan dalam&#13;
  belajar aktif meliputi aktivitas siswa melakukan sesuatu, menginvestigasi&#13;
  penyebab korupsi, atau memperesentasikan prosedur pengadilan perkara korupsi&#13;
  di pengadilan tindak pidana korupsi. <sup>8</sup>Jadi, proses pembelajaran&#13;
  secara aktif dapat menempatkan siswa dalam suatu situasi yang membuat mereka&#13;
  terlibat dalam aktivitas yang telah dirancang oleh guru untuk tujuan tertentu.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Kalimat berikut&#13;
  perlu ditambahkan dalam bacaan tersebut.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><i><span lang="IN" style="font-size:12.0pt;line-height:115%">Pembelajaran&#13;
  tidak mungkin hanya dilakukan dengan ceramah.</span></i></p><p class="MsoListParagraph" style="margin-top:0in;margin-right:0in;margin-bottom:&#13;&#10;  0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Kalimat&#13;
  tersebut paling tepat ditempatkan setelah kalimat ....</span></p>'
    ),
    array(
        'sub_title' => 'Kemampuan Memahami Bacaan dan Menulis',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">1</span></sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Sekarang ini, pembelajaran antikorupsi harus melibatkan&#13;
  siswa secara aktif dalam membangun pengetahuan yang bermakna. <sup>2</sup>Dalam&#13;
  pembelajaran aktif siswa diberi otonomi yang cukup untuk mengontrol aktivitas&#13;
  belajar, seperti menginvestigasi, memecahkan masalah, dan mendiskusikan dalam&#13;
  kelompok kecil. <sup>3</sup>Dengan kata ini, pembelajaran antikorupsi dapat&#13;
  menggunakan berbagai cara atau strategi. <sup>4</sup>Dengan catatan, cara&#13;
  atau strategi <b>tersebut</b> melibatkan siswa secara aktif, baik fisik&#13;
  maupun mental. <sup>5</sup>Proses belajar secara aktif melibatkan dua aspek,&#13;
  yaitu pengalaman dan dialog. <sup>6</sup>Dua hal yang terkait dengan&#13;
  pengalaman adalah melakukan dan mengamati. <sup>7</sup>Melakukan dalam&#13;
  belajar aktif meliputi aktivitas siswa melakukan sesuatu, menginvestigasi&#13;
  penyebab korupsi, atau memperesentasikan prosedur pengadilan perkara korupsi&#13;
  di pengadilan tindak pidana korupsi. <sup>8</sup>Jadi, proses pembelajaran&#13;
  secara aktif dapat menempatkan siswa dalam suatu situasi yang membuat mereka&#13;
  terlibat dalam aktivitas yang telah dirancang oleh guru untuk tujuan tertentu.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Penggunaan&#13;
  tanda koma yang salah terdapat pada kalimat ....</span></p>'
    ),
    array(
        'sub_title' => 'Kemampuan Memahami Bacaan dan Menulis',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">1</span></sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Sekarang ini, pembelajaran antikorupsi harus melibatkan&#13;
  siswa secara aktif dalam membangun pengetahuan yang bermakna. <sup>2</sup>Dalam&#13;
  pembelajaran aktif siswa diberi otonomi yang cukup untuk mengontrol aktivitas&#13;
  belajar, seperti menginvestigasi, memecahkan masalah, dan mendiskusikan dalam&#13;
  kelompok kecil. <sup>3</sup>Dengan kata ini, pembelajaran antikorupsi dapat&#13;
  menggunakan berbagai cara atau strategi. <sup>4</sup>Dengan catatan, cara&#13;
  atau strategi <b>tersebut</b> melibatkan siswa secara aktif, baik fisik&#13;
  maupun mental. <sup>5</sup>Proses belajar secara aktif melibatkan dua aspek,&#13;
  yaitu pengalaman dan dialog. <sup>6</sup>Dua hal yang terkait dengan&#13;
  pengalaman adalah melakukan dan mengamati. <sup>7</sup>Melakukan dalam&#13;
  belajar aktif meliputi aktivitas siswa melakukan sesuatu, menginvestigasi&#13;
  penyebab korupsi, atau memperesentasikan prosedur pengadilan perkara korupsi&#13;
  di pengadilan tindak pidana korupsi. <sup>8</sup>Jadi, proses pembelajaran&#13;
  secara aktif dapat menempatkan siswa dalam suatu situasi yang membuat mereka&#13;
  terlibat dalam aktivitas yang telah dirancang oleh guru untuk tujuan&#13;
  tertentu.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Manakah&#13;
  perbaikan kalimat (8) yang paling efektif?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Kemampuan Memahami Bacaan dan Menulis',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">1</span></sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Industri dan ekosistem <i>game </i>(permainan) lokal&#13;
  memiliki potensi besar untuk berkontribusi dalam ekonomi kreatif. <sup>2</sup>Kontribusi&#13;
  <i>game </i>untuk ekraf Indonesia pada 2017 adalah 1,93 persen PDB. <sup>3</sup>Jumlah&#13;
  tenaga kerja di subsektor ini 44.733. <sup>4</sup>Pengembang permainan lokal&#13;
  baru juga bertambah jumlahnya dari tahun ke tahun. <sup>5</sup>Mereka&#13;
  didorong untuk berkarya karena Indonesia merupakan salah satu pangsa pasar <i>game</i>&#13;
  yang peningkatannya <b>penting</b>. <sup>6</sup>Banyak peluang bisa didalami,&#13;
  baik sebagai pembuat maupun pemain profesional, karena pada aspek demografis&#13;
  Indonesia banyak elemen produktif dan jumlah kalangan berpenghasilan&#13;
  menengah. <sup>7</sup>Subsektor pengembang permainan perlu dikelola dengan&#13;
  memerhatikan (...). <sup>8</sup>Pengelolaan subsektor tersebut akan&#13;
  menginisiasi munculnya lebih banyak inkubator pengembang permainan, memasukkan&#13;
  unsur-unsur permainan ke dalam dunia pendidikan, memproteksi para pengembang&#13;
  lokal, dan membantu mereka dalam mempromosikan karya-karyanya.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Kata yang&#13;
  paling tepat menggantikan kata <i>penting </i>dalam kalimat (5) adalah ....</span></p>'
    ),
    array(
        'sub_title' => 'Kemampuan Memahami Bacaan dan Menulis',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">1</span></sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Industri dan ekosistem <i>game </i>(permainan) lokal&#13;
  memiliki potensi besar untuk berkontribusi dalam ekonomi kreatif. <sup>2</sup>Kontribusi&#13;
  <i>game </i>untuk ekraf Indonesia pada 2017 adalah 1,93 persen PDB. <sup>3</sup>Jumlah&#13;
  tenaga kerja di subsektor ini 44.733. <sup>4</sup>Pengembang permainan lokal&#13;
  baru juga bertambah jumlahnya dari tahun ke tahun. <sup>5</sup>Mereka&#13;
  didorong untuk berkarya karena Indonesia merupakan salah satu pangsa pasar <i>game</i>&#13;
  yang peningkatannya <b>penting</b>. <sup>6</sup>Banyak peluang bisa didalami,&#13;
  baik sebagai pembuat maupun pemain profesional, karena pada aspek demografis&#13;
  Indonesia banyak elemen produktif dan jumlah kalangan berpenghasilan&#13;
  menengah. <sup>7</sup>Subsektor pengembang permainan perlu dikelola dengan&#13;
  memerhatikan (...). <sup>8</sup>Pengelolaan subsektor tersebut akan&#13;
  menginisiasi munculnya lebih banyak inkubator pengembang permainan,&#13;
  memasukkan unsur-unsur permainan ke dalam dunia pendidikan, memproteksi para&#13;
  pengembang lokal, dan membantu mereka dalam mempromosikan karya-karyanya.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Kalimat manakah&#13;
  yang paling tepat sebagai kalimat inti nomor (6)?</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:21.3pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Kemampuan Memahami Bacaan dan Menulis',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">1</span></sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Industri dan ekosistem <i>game </i>(permainan) lokal&#13;
  memiliki potensi besar untuk berkontribusi dalam ekonomi kreatif. <sup>2</sup>Kontribusi&#13;
  <i>game </i>untuk ekraf Indonesia pada 2017 adalah 1,93 persen PDB. <sup>3</sup>Jumlah&#13;
  tenaga kerja di subsektor ini 44.733. <sup>4</sup>Pengembang permainan lokal&#13;
  baru juga bertambah jumlahnya dari tahun ke tahun. <sup>5</sup>Mereka&#13;
  didorong untuk berkarya karena Indonesia merupakan salah satu pangsa pasar <i>game</i>&#13;
  yang peningkatannya <b>penting</b>. <sup>6</sup>Banyak peluang bisa didalami,&#13;
  baik sebagai pembuat maupun pemain profesional, karena pada aspek demografis&#13;
  Indonesia banyak elemen produktif dan jumlah kalangan berpenghasilan&#13;
  menengah. <sup>7</sup>Subsektor pengembang permainan perlu dikelola dengan&#13;
  memerhatikan (...). <sup>8</sup>Pengelolaan subsektor tersebut akan&#13;
  menginisiasi munculnya lebih banyak inkubator pengembang permainan,&#13;
  memasukkan unsur-unsur permainan ke dalam dunia pendidikan, memproteksi para&#13;
  pengembang lokal, dan membantu mereka dalam mempromosikan karya-karyanya.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Kalimat manakah&#13;
  yang paling tepat sebagai penggabungan kalimat (2) dan (3)?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Kemampuan Memahami Bacaan dan Menulis',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><sup><span lang="IN" style="font-size:12.0pt;line-height:115%">1</span></sup><span lang="IN" style="font-size:12.0pt;line-height:115%">Landasan dasar hukum adat&#13;
  Jambi adalah <i>induk undang nan lima </i>(lima dasar hukum adat) Jambi. <sup>2</sup>Hal&#13;
  ini diuraikan oleh “Lembaga Adat Melayu Jambi”. <sup>3</sup>Dalam eksistensi&#13;
  dan penerapannya, hukum adat dapat berfungsi sebagai sistem pengendalian&#13;
  sosial. <sup>4</sup>Adanya kesadaran hukum adat akan menciptakan keselarasan&#13;
  kehidupan sosial sehingga mengakibatkan kehidupan bermasyarakat yang sadar&#13;
  hukum. <sup>5</sup>Landasan hukum adat tersebut telah menjadi pandangan hidup&#13;
  yang membentuk sifat dan kepribadian bagi masyarakat di daerah Jambi yang&#13;
  diketahui semboyannya <i>sepucuk Jambi sembilan lurah</i>. <sup>6</sup>Adat&#13;
  istiadat merupakan identitas yang diwariskan nenek moyang kepada generasi&#13;
  penerus. <sup>7</sup>Idealnya hukum adat mampu menjadi penyaring dari dampak&#13;
  negatif budaya luar yang masuk ke dalam sendi-sendi kehidupan masyarakat. <sup>8</sup>Hal&#13;
  ini dijelaskan dalam artikel berjudul Peran Lembaga Adat Melayu Kota Jambi&#13;
  Dalam Mempertahankan Nilai Lokal Budaya Melayu Jambi.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Kalimat yang&#13;
  tidak berkaitan dengan gagasan utama bacaan adalah kalimat ....</span></p>'
    ),
    array(
        'sub_title' => 'Kemampuan Memahami Bacaan dan Menulis',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><sup><span lang="IN" style="font-size:12.0pt;line-height:115%">1</span></sup><span lang="IN" style="font-size:12.0pt;line-height:115%">Landasan dasar hukum adat&#13;
  Jambi adalah <i>induk undang nan lima </i>(lima dasar hukum adat) Jambi. <sup>2</sup>Hal&#13;
  ini diuraikan oleh “Lembaga Adat Melayu Jambi”. <sup>3</sup>Dalam eksistensi&#13;
  dan penerapannya, hukum adat dapat berfungsi sebagai sistem pengendalian&#13;
  sosial. <sup>4</sup>Adanya kesadaran hukum adat akan menciptakan keselarasan&#13;
  kehidupan sosial sehingga mengakibatkan kehidupan bermasyarakat yang sadar&#13;
  hukum. <sup>5</sup>Landasan hukum adat tersebut telah menjadi pandangan hidup&#13;
  yang membentuk sifat dan kepribadian bagi masyarakat di daerah Jambi yang&#13;
  diketahui semboyannya <i>sepucuk Jambi sembilan lurah</i>. <sup>6</sup>Adat&#13;
  istiadat merupakan identitas yang diwariskan nenek moyang kepada generasi&#13;
  penerus. <sup>7</sup>Idealnya hukum adat mampu menjadi penyaring dari dampak&#13;
  negatif budaya luar yang masuk ke dalam sendi-sendi kehidupan masyarakat. <sup>8</sup>Hal&#13;
  ini dijelaskan dalam artikel berjudul Peran Lembaga Adat Melayu Kota Jambi&#13;
  Dalam Mempertahankan Nilai Lokal Budaya Melayu Jambi.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Penulisan nama&#13;
  lembaga dan judul artikel pada kalimat (2) dan (8) yang benar adalah ....</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:21.3pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Kemampuan Memahami Bacaan dan Menulis',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">1</span></sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Ada <b>banyak</b> alasan bagi seseorang untuk memutuskan&#13;
  menjadi seorang vegetarian. <sup>2</sup><b>Kebanyakan</b> para vegetarian&#13;
  memilih untuk tidak mengonsumsi hewan, karena mereka percaya bahwa&#13;
  mengonsumsi hewan sebagai makanan <b>tidaklah</b> benar. <sup>3</sup>Selanjutnya,&#13;
  biasanya karena memakan daging bertentangan dengan kepercayaan <b>mereka</b>.&#13;
  <sup>4</sup>Selain itu, mereka meyakini <b>bahwa</b> dibandingkan dengan cara&#13;
  diet lain, diet ala vegetarian lebih sehat. <sup>5</sup>Namun, sekarang&#13;
  banyak juga orang yang memilih <b>untuk</b> menjadi vegetarian karena gaya&#13;
  hidup.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Apa gagasan&#13;
  utama paragraf tersebut?</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:21.3pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Kemampuan Memahami Bacaan dan Menulis',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">1</span></sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Ada <b>banyak</b> alasan bagi seseorang untuk memutuskan&#13;
  menjadi seorang vegetarian. <sup>2</sup><b>Kebanyakan</b> para vegetarian&#13;
  memilih untuk tidak mengonsumsi hewan, karena mereka percaya bahwa&#13;
  mengonsumsi hewan sebagai makanan <b>tidaklah</b> benar. <sup>3</sup>Selanjutnya,&#13;
  biasanya karena memakan daging bertentangan dengan kepercayaan <b>mereka</b>.&#13;
  <sup>4</sup>Selain itu, mereka meyakini <b>bahwa</b> dibandingkan dengan cara&#13;
  diet lain, diet ala vegetarian lebih sehat. <sup>5</sup>Namun, sekarang&#13;
  banyak juga orang yang memilih <b>untuk</b> menjadi vegetarian karena gaya&#13;
  hidup.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Penggunaan&#13;
  diksi bercetak tebal pada teks tersebut yang tidak tepat terdapat pada ....</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:.25in;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Kemampuan Memahami Bacaan dan Menulis',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">1</span></sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Ada <b>banyak</b> alasan bagi seseorang untuk memutuskan&#13;
  menjadi seorang vegetarian. <sup>2</sup><b>Kebanyakan</b> para vegetarian&#13;
  memilih untuk tidak mengonsumsi hewan, karena mereka percaya bahwa&#13;
  mengonsumsi hewan sebagai makanan <b>tidaklah</b> benar. <sup>3</sup>Selanjutnya,&#13;
  biasanya karena memakan daging bertentangan dengan kepercayaan <b>mereka</b>.&#13;
  <sup>4</sup>Selain itu, mereka meyakini <b>bahwa</b> dibandingkan dengan cara&#13;
  diet lain, diet ala vegetarian lebih sehat. <sup>5</sup>Namun, sekarang&#13;
  banyak juga orang yang memilih <b>untuk</b> menjadi vegetarian karena gaya&#13;
  hidup.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><i><span lang="IN" style="font-size:12.0pt;line-height:115%">Kebanyakan&#13;
  para vegetarian memilih untuk tidak mengonsumsi hewan, karena mereka percaya&#13;
  bahwa mengonsumsi hewan sebagai makanan tidaklah benar.</span></i></p><p class="MsoListParagraph" style="margin-top:0in;margin-right:0in;margin-bottom:&#13;&#10;  0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Apa maksud pernyataan&#13;
  di atas?</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:21.3pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Kemampuan Memahami Bacaan dan Menulis',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">1</span></sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Ada <b>banyak</b> alasan bagi seseorang untuk memutuskan&#13;
  menjadi seorang vegetarian. <sup>2</sup><b>Kebanyakan</b> para vegetarian&#13;
  memilih untuk tidak mengonsumsi hewan, karena mereka percaya bahwa&#13;
  mengonsumsi hewan sebagai makanan <b>tidaklah</b> benar. <sup>3</sup>Selanjutnya,&#13;
  biasanya karena memakan daging bertentangan dengan kepercayaan <b>mereka</b>.&#13;
  <sup>4</sup>Selain itu, mereka meyakini <b>bahwa</b> dibandingkan dengan cara&#13;
  diet lain, diet ala vegetarian lebih sehat. <sup>5</sup>Namun, sekarang&#13;
  banyak juga orang yang memilih <b>untuk</b> menjadi vegetarian karena gaya&#13;
  hidup.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Berdasarkan&#13;
  bacaan, dapat disimpulkan bahwa orang yang </span><span lang="IN" style="font-size:12.0pt;line-height:115%">memutuskan menjadi seorang&#13;
  vegetarian </span><span lang="IN" style="font-size:12.0pt;line-height:115%">....</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Kemampuan Memahami Bacaan dan Menulis',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">1</span></sup><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Ada <b>banyak</b> alasan bagi seseorang untuk memutuskan&#13;
  menjadi seorang vegetarian. <sup>2</sup><b>Kebanyakan</b> para vegetarian&#13;
  memilih untuk tidak mengonsumsi hewan, karena mereka percaya bahwa&#13;
  mengonsumsi hewan sebagai makanan <b>tidaklah</b> benar. <sup>3</sup>Selanjutnya,&#13;
  biasanya karena memakan daging bertentangan dengan kepercayaan <b>mereka</b>.&#13;
  <sup>4</sup>Selain itu, mereka meyakini <b>bahwa</b> dibandingkan dengan cara&#13;
  diet lain, diet ala vegetarian lebih sehat. <sup>5</sup>Namun, sekarang&#13;
  banyak juga orang yang memilih <b>untuk</b> menjadi vegetarian karena gaya&#13;
  hidup.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Struktur gigi&#13;
  yang telah rusak tidak dapat sembuh sempurna, walaupun remineralisasi pada&#13;
  karies yang sangat kecil dapat timbul jika kebersihan dapat benar-benar&#13;
  dipertahankan. Untuk kasus tertentu yang relatif masih kecil, karies dapat&#13;
  diobati dengan florida topikal untuk merangsang remineralisasi. </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Kata <i>remineralisasi</i>&#13;
  pada paragraf tersebut memiliki makna ….</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:21.3pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Kemampuan Memahami Bacaan dan Menulis',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">Suku Jawa adalah kelompok suku terbesar di Indonesia dengan jumlah&#13;
  mencapai 41% dari total populasi. <b><sup>68</sup>Sehingga orang Jawa&#13;
  kebanyakan berkumpul di Pulau Jawa. <sup>69</sup>Tetapi, </b>jutaan jiwa&#13;
  telah bertransmigrasi dan tersebar ke berbagai pulau di Nusantara. Bahkan,&#13;
  ada yang bermigrasi<b> </b>ke luar negeri, seperti ke Malaysia dan Suriname. <b><sup>70</sup>Suku&#13;
  Sunda, suku Batak, dan suku Madura adalah kelompok terbesar berikutnya di&#13;
  negara ini.</b></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Pertimbangkan&#13;
  apakah kata atau kalimat pada setiap nomor bercetak tebal TIDAK PERLU&#13;
  DIPERBAIKI atau diganti dengan pilihan lain yang tersedia (B, C, D, atau E).</span></p>'
    ),
    array(
        'sub_title' => 'Kemampuan Memahami Bacaan dan Menulis',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">Suku Jawa adalah kelompok suku terbesar di Indonesia dengan jumlah&#13;
  mencapai 41% dari total populasi. <b><sup>68</sup>Sehingga orang Jawa&#13;
  kebanyakan berkumpul di Pulau Jawa. <sup>69</sup>Tetapi, </b>jutaan jiwa&#13;
  telah bertransmigrasi dan tersebar ke berbagai pulau di Nusantara. Bahkan, ada&#13;
  yang bermigrasi<b> </b>ke luar negeri, seperti ke Malaysia dan Suriname. <b><sup>70</sup>Suku&#13;
  Sunda, suku Batak, dan suku Madura adalah kelompok terbesar berikutnya di&#13;
  negara ini.</b></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Pertimbangkan&#13;
  apakah kata atau kalimat pada setiap nomor bercetak tebal TIDAK PERLU&#13;
  DIPERBAIKI atau diganti dengan pilihan lain yang tersedia (B, C, D, atau E).</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Kemampuan Memahami Bacaan dan Menulis',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">Suku Jawa adalah kelompok suku terbesar di Indonesia dengan jumlah&#13;
  mencapai 41% dari total populasi. <b><sup>68</sup>Sehingga orang Jawa&#13;
  kebanyakan berkumpul di Pulau Jawa. <sup>69</sup>Tetapi, </b>jutaan jiwa&#13;
  telah bertransmigrasi dan tersebar ke berbagai pulau di Nusantara. Bahkan, ada&#13;
  yang bermigrasi<b> </b>ke luar negeri, seperti ke Malaysia dan Suriname. <b><sup>70</sup>Suku&#13;
  Sunda, suku Batak, dan suku Madura adalah kelompok terbesar berikutnya di&#13;
  negara ini.</b></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Pertimbangkan&#13;
  apakah kata atau kalimat pada setiap nomor bercetak tebal TIDAK PERLU&#13;
  DIPERBAIKI atau diganti dengan pilihan lain yang tersedia (B, C, D, atau E).</span></p>'
    ),
    array(
        'sub_title' => 'Pengetahuan Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Diantara lima bilangan&#13;
  berikut yang habis dibagi 2 adalah ...</span></p>'
    ),
    array(
        'sub_title' => 'Pengetahuan Kuantitatif',
        'question_desc' => '<p class="MsoListParagraphCxSpFirst" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:4.0pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:10.0pt"><img width="119" height="37" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image016.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> </span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:4.0pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Pada sistem persamaan di&#13;
  atas, b dan c adalah konstanta. Jika </span><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="63" height="28" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image017.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%">, manakah dari pernyataan berikut ini yang benar?</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:22.0pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Pengetahuan Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Perhatikan&#13;
  gambar berikut ini!</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><img width="175" height="163" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image023.jpg" align="left" hspace="12" alt="Diagram&#10;&#10;Description automatically generated"/></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Jika sistem&#13;
  pertidaksamaan </span><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="76" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image024.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> dan </span><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="76" height="28" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image025.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> digambar pada koordinat kartesius di atas, maka&#13;
  kuadran yang tidak berisi solusi dari pertidaksamaan adalah ...</span></p>'
    ),
    array(
        'sub_title' => 'Pengetahuan Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Perhatikan&#13;
  gambar berikut!</span></p><p class="MsoListParagraph" style="margin-top:0in;margin-right:0in;margin-bottom:&#13;&#10;  0in;margin-left:4.0pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"><img border="0" width="82" height="119" id="Picture 14" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image026.jpg" alt="A picture containing antenna&#10;&#10;Description automatically generated"/></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Dua segitiga&#13;
  sama kaki ditunjukkan pada gambar di atas. Jika 180 – z = 2y dan y = 75, maka&#13;
  nilai x adalah ...</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:18.2pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Pengetahuan Kuantitatif',
        'question_desc' => '<p class="MTDisplayEquationCxSpFirst" style="margin-left:0in;text-indent:0in"><a name="_Hlk118723106"><span lang="IN" style="font-size:12.0pt;line-height:115%">Semua&#13;
  lingkaran di bawah ini kongruen. Luas total sembilan lingkaran yang kongruen&#13;
  adalah 324π. Persegi melewati pusat delapan lingkaran seperti yang&#13;
  ditunjukkan. Berapakah luas daerah yang diarsir?</span></a></p><p class="MTDisplayEquationCxSpMiddle" style="text-indent:0in"><span lang="IN" style="font-size:12.0pt;line-height:115%"><img border="0" width="113" height="112" id="Picture 16" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image027.jpg" alt="Shape, circle&#10;&#10;Description automatically generated"/></span></p><p class="MTDisplayEquationCxSpMiddle" style="margin-left:18.2pt;text-indent:&#13;&#10;  0in"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MTDisplayEquation" style="margin-left:18.2pt;text-indent:0in"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Pengetahuan Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Diketahui&#13;
  fungsi kuadrat </span><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="121" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image028.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> dengan </span><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="39" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image029.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> memotong sumbu-x di dua titik berbeda. Nilai a yang&#13;
  memenuhi adalah ...</span></p>'
    ),
    array(
        'sub_title' => 'Pengetahuan Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Perhatikan&#13;
  gambar berikut ini!</span></p><p class="MsoListParagraphCxSpFirst" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"><img border="0" width="196" height="151" id="Picture 10" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image030.png" alt="A picture containing antenna&#10;&#10;Description automatically generated"/></span></p><p class="MsoListParagraphCxSpMiddle" style="margin:0in;text-align:justify;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Manakah&#13;
  yang merupakan persamaan yang ekuivalen dengan persamaan yang ada pada&#13;
  grafik, yang mana persamaan tersebut mengidentifikasi titik puncak A sebagai&#13;
  konstanta pada persamaan tersebut?</span></p>'
    ),
    array(
        'sub_title' => 'Pengetahuan Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Fungsi f dan g didefinisikan&#13;
  sebagai berikut:</span></p><p class="MsoListParagraphCxSpFirst" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="138" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image036.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> dan </span><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="90" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image037.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> </span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Misalkan (a, b)&#13;
  dan (c, d) adalah dua titik potong berbeda grafik fungsi f dan g, maka nilai&#13;
  a + d adalah ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Pengetahuan Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Fungsi f dan g didefinisikan&#13;
  sebagai berikut:</span></p><p class="MsoListParagraphCxSpFirst" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:28.35pt;text-align:justify;text-indent:-24.35pt;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="138" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image036.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> dan </span><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="90" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image037.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> </span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:28.35pt;text-align:justify;text-indent:-24.35pt;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:28.35pt;text-align:justify;text-indent:-24.35pt;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.5pt"><img width="128" height="23" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image038.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> = ...</span></p>'
    ),
    array(
        'sub_title' => 'Pengetahuan Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Fungsi f dan g&#13;
  didefinisikan sebagai berikut:</span></p><p class="MsoListParagraphCxSpFirst" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="138" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image036.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> dan </span><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="90" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image037.png"/></span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Luas daerah&#13;
  yang dibatasi oleh grafik fungsi f dan g adalah ...</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:.25in;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Pengetahuan Kuantitatif',
        'question_desc' => '<p class="MTDisplayEquationCxSpFirst" style="margin-left:0in;text-indent:0in"><span lang="IN" style="font-size:12.0pt;line-height:115%">Becca, Calvin, David, and&#13;
  Ellen duduk berjajar secara acak di empat kursi di barisan depan kelas.&#13;
  Peluang bahwa Becca dan Calvin duduk bersebelahan adalah ...</span></p>'
    ),
    array(
        'sub_title' => 'Pengetahuan Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Misalkan </span><span lang="IN" style="font-size:12.0pt;line-height:115%">□</span><span lang="IN" style="font-size:12.0pt;line-height:115%"> dan </span><span lang="IN" style="font-size:12.0pt;line-height:115%">∆ menyatakan operasi penjumlahan&#13;
  (+), pengurangan (</span><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">–), perkalian (</span><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">×</span><span lang="IN" style="font-size:12.0pt;line-height:115%">), atau&#13;
  pembagian (</span><span lang="IN" style="font-size:12.0pt;line-height:115%">÷</span><span lang="IN" style="font-size:12.0pt;line-height:115%">). Jika 4 </span><span lang="IN" style="font-size:12.0pt;line-height:115%">□</span><span lang="IN" style="font-size:12.0pt;line-height:115%"> 1 </span><span lang="IN" style="font-size:12.0pt;line-height:115%">∆</span><span lang="IN" style="font-size:12.0pt;line-height:115%"> 3 &lt; 8, manakah pasangan berikut&#13;
  yang benar untuk (</span><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">□</span><span lang="IN" style="font-size:12.0pt;line-height:115%">, </span><span lang="IN" style="font-size:12.0pt;line-height:115%">∆</span><span lang="IN" style="font-size:12.0pt;line-height:115%">)?</span></p><p class="MsoListParagraphCxSpFirst" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:.25in;text-align:justify;text-indent:-.25in;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">(1)<span style="font:7.0pt &quot;Times New Roman&quot;">   </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(+, </span><span lang="IN" style="font-size:12.0pt;line-height:115%">×</span><span lang="IN" style="font-size:12.0pt;line-height:115%">)</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:.25in;text-align:justify;text-indent:-.25in;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">(2)<span style="font:7.0pt &quot;Times New Roman&quot;">   </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(+, </span><span lang="IN" style="font-size:12.0pt;line-height:115%">÷</span><span lang="IN" style="font-size:12.0pt;line-height:115%">)</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:.25in;text-align:justify;text-indent:-.25in;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">(3)<span style="font:7.0pt &quot;Times New Roman&quot;">   </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(–, </span><span lang="IN" style="font-size:12.0pt;line-height:115%">÷</span><span lang="IN" style="font-size:12.0pt;line-height:115%">)</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:.25in;text-align:justify;text-indent:-.25in;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">(4)<span style="font:7.0pt &quot;Times New Roman&quot;">   </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(</span><span lang="IN" style="font-size:12.0pt;line-height:115%">×</span><span lang="IN" style="font-size:12.0pt;line-height:115%">, </span><span lang="IN" style="font-size:12.0pt;line-height:115%">÷</span><span lang="IN" style="font-size:12.0pt;line-height:115%">)</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:46.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Pengetahuan Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Tabel berikut menyajikan&#13;
  data banyaknya anggota komunitas yang memberikan respons ketertarikan pada&#13;
  dua jenis bahan penambah pedas, yaitu cabai dan merica.</span></p><table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" width="386" style="width:289.25pt;border-collapse:collapse;border:none">&#13;
   <tr>&#13;
    <td width="81" rowspan="2" style="width:60.4pt;border:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpFirst" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">Komunitas</span></b></p>&#13;
    </td>&#13;
    <td width="132" rowspan="2" style="width:99.25pt;border:solid windowtext 1.0pt;&#13;&#10;    border-left:none;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpMiddle" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">Banyaknya Anggota</span></b></p>&#13;
    <p class="MsoListParagraphCxSpMiddle" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">yang Memberikan Respons</span></b></p>&#13;
    </td>&#13;
    <td colspan="2" style="border:solid windowtext 1.0pt;border-left:none;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpLast" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">Banyaknya Anggota Komunitas</span></b></p>&#13;
    </td>&#13;
   </tr>&#13;
   <tr>&#13;
    <td style="border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;&#13;&#10;    border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpMiddle" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">Suka Cabai</span></b></p>&#13;
    </td>&#13;
    <td style="border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;&#13;&#10;    border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpLast" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">Tidak Suka Merica</span></b></p>&#13;
    </td>&#13;
   </tr>&#13;
   <tr>&#13;
    <td width="81" style="width:60.4pt;border:solid windowtext 1.0pt;border-top:&#13;&#10;    none;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpFirst" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">Komunitas A</span></p>&#13;
    </td>&#13;
    <td width="132" style="width:99.25pt;border-top:none;border-left:none;&#13;&#10;    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpMiddle" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">100</span></p>&#13;
    </td>&#13;
    <td style="border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;&#13;&#10;    border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpMiddle" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">40</span></p>&#13;
    </td>&#13;
    <td style="border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;&#13;&#10;    border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpLast" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">15</span></p>&#13;
    </td>&#13;
   </tr>&#13;
   <tr>&#13;
    <td width="81" style="width:60.4pt;border:solid windowtext 1.0pt;border-top:&#13;&#10;    none;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpFirst" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">Komunitas B</span></p>&#13;
    </td>&#13;
    <td width="132" style="width:99.25pt;border-top:none;border-left:none;&#13;&#10;    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpMiddle" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">250</span></p>&#13;
    </td>&#13;
    <td style="border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;&#13;&#10;    border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpMiddle" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">100</span></p>&#13;
    </td>&#13;
    <td style="border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;&#13;&#10;    border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpLast" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">150</span></p>&#13;
    </td>&#13;
   </tr>&#13;
   <tr>&#13;
    <td width="81" style="width:60.4pt;border:solid windowtext 1.0pt;border-top:&#13;&#10;    none;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpFirst" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">Komunitas C</span></p>&#13;
    </td>&#13;
    <td width="132" style="width:99.25pt;border-top:none;border-left:none;&#13;&#10;    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpMiddle" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">150</span></p>&#13;
    </td>&#13;
    <td style="border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;&#13;&#10;    border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpMiddle" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">30</span></p>&#13;
    </td>&#13;
    <td style="border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;&#13;&#10;    border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpLast" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">60</span></p>&#13;
    </td>&#13;
   </tr>&#13;
  </table><p class="MsoListParagraph" style="margin-top:0in;margin-right:0in;margin-bottom:&#13;&#10;  0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Berdasarkan&#13;
  informasi yang diberikan, manakah hubungan antara kuantitas P dan Q berikut&#13;
  yang benar?</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" style="margin-left:28.35pt;border-collapse:collapse;border:none">&#13;
   <tr>&#13;
    <td width="198" style="width:148.6pt;border:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpFirst" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">P</span></b></p>&#13;
    </td>&#13;
    <td width="104" style="width:77.95pt;border:solid windowtext 1.0pt;&#13;&#10;    border-left:none;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpLast" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">Q</span></b></p>&#13;
    </td>&#13;
   </tr>&#13;
   <tr>&#13;
    <td width="198" style="width:148.6pt;border:solid windowtext 1.0pt;&#13;&#10;    border-top:none;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpFirst" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">Banyaknya anggota Komunitas C yang memberikan respons&#13;
    suka merica tetapi tidak suka cabai</span></p>&#13;
    </td>&#13;
    <td width="104" style="width:77.95pt;border-top:none;border-left:none;&#13;&#10;    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpLast" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">100</span></p>&#13;
    </td>&#13;
   </tr>&#13;
  </table><p class="MsoListParagraphCxSpFirst" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Pengetahuan Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Perhatikan&#13;
  gambar berikut!</span></p><p class="MsoListParagraphCxSpFirst" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:28.35pt;text-align:justify;text-indent:-24.35pt;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"><img border="0" width="182" height="200" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image049.png"/></span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoListParagraphCxSpMiddle" style="margin:0in;text-align:justify;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Pulau&#13;
  A, B, dan C digambarkan dalam peta di atas. Titik A, B, dan C pada peta&#13;
  berturut-turut menyatakan posisi titik nol Kota A, Kota B, dan Kota C yang&#13;
  diberi nama sesuai dengan nama pulaunya. Persegi pada peta berukuran 1 cm </span><span lang="IN" style="font-size:12.0pt;line-height:115%">×</span><span lang="IN" style="font-size:12.0pt;line-height:115%"> 1 cm.</span></p><p class="MsoListParagraphCxSpMiddle" style="margin:0in;text-align:justify;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoListParagraphCxSpMiddle" style="margin:0in;text-align:justify;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Berapakah&#13;
  dari pernyataan berikut yang bernilai benar berdasarkan informasi di atas?</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:18.2pt;text-align:justify;text-indent:-.25in;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">(1)<span style="font:7.0pt &quot;Times New Roman&quot;">   </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Jarak&#13;
  terdekat antara garis pantai Pulau A dan Pulau B lebih dari 10 km.</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:18.2pt;text-align:justify;text-indent:-.25in;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">(2)<span style="font:7.0pt &quot;Times New Roman&quot;">   </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Jarak&#13;
  antara Kota A dan Kota B sama dengan jarak antara Kota A dan Kota C.</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:18.2pt;text-align:justify;text-indent:-.25in;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">(3)<span style="font:7.0pt &quot;Times New Roman&quot;">   </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Jarak&#13;
  antara Kota B dan Kota C lebih dari 20 km.</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:18.2pt;text-align:justify;text-indent:-.25in;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">(4)<span style="font:7.0pt &quot;Times New Roman&quot;">   </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Luas&#13;
  Pulau A kurang dari 12 km<sup>2</sup>.</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:18.2pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
    array(
        'sub_title' => 'Pengetahuan Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Perhatikan&#13;
  gambar berikut!</span></p><p class="MsoListParagraphCxSpFirst" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"><img border="0" width="109" height="160" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image050.png"/></span></p><p class="MsoListParagraphCxSpMiddle" style="margin:0in;text-align:justify;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">ABCDE&#13;
  merupakan segi lima beraturan. Berapa volume limas T.ABCDE?</span></p><p class="MsoListParagraphCxSpMiddle" style="margin:0in;text-align:justify;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoListParagraphCxSpMiddle" style="margin:0in;text-align:justify;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Putuskan&#13;
  apakah pernyataan (1) dan (2) berikut cukup untuk menjawab pertanyaan&#13;
  tersebut.</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:18.2pt;text-align:justify;text-indent:-.25in;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">(1)<span style="font:7.0pt &quot;Times New Roman&quot;">   </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">TA =&#13;
  TB = TC = TD = TE = 20</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:18.2pt;text-align:justify;text-indent:-.25in;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">(2)<span style="font:7.0pt &quot;Times New Roman&quot;">   </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Keliling&#13;
  segi lima ABCDE = 50</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:46.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>'
    ),
);
$tryoutChoicesPKG = array(
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Orang yang tidak divaksinasi memiliki&#13;
  risiko lebih besar terserang pneumonia.</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Vaksinasi&#13;
  merupakan cara paling efektif untuk mencegah pneumonia.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Vaksinasi&#13;
  penumonia dapat membuat seseorang sembuh dari radang paru-paru.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Infeksi&#13;
  virus, bakteri, dan jamur tidak akan terjadi jika tidak ada kontak antara&#13;
  penderita dan orang sehat.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Orang&#13;
  yang terinfeksi pneumonia tidak dapat menerima vaksin.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Industri&#13;
  tekstil dan garmen menyerap 250 juta tenaga kerja.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Industri&#13;
  tekstil termasuk tiga besar sektor manufaktur Indonesia.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Industri&#13;
  tekstil berhasil mengekspor produk senilai US$11,8 miliar.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Industri&#13;
  tekstil merupakan kebutuhan pokok seluruh rakyat Indonesia.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Industri tekstil tanah air dipantau oleh&#13;
  Asosiasi Pertekstilan Indonesia (API).</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">LPI&#13;
  menunjukkan waktu kiriman antarnegara.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">LPI&#13;
  menunjukkan besar pajak bea dan cukai yang berlaku di suatu negara.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">LPI&#13;
  menunjukkan biaya pengiriman barang secara internasional.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">LPI menunjukkan kinerja distribusi barang&#13;
  milik suatu negara.</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">LPI&#13;
  menunjukkan performa distribusi barang suatu negara setiap tahun.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Kualifikasi akademik pengajar tidak&#13;
  terlalu berperan penting dalam proses pengajaran.</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kemdikbud&#13;
  mendefinisikan guru dan kualifikasi pendidikan sebagai guru layak mengajar.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Guru pada&#13;
  jenjang pendidikan dasar dan menengah harus memiliki pendidikan terakhir&#13;
  diploma empat (D4) atau sarjana 1 (S1).</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Permendiknas&#13;
  RI Nomor 16 tahun 2007 membahas mengenai kualifikasi akademik minimum guru&#13;
  sekolah dasar dan sekolah menengah.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Tingkat&#13;
  pendidikan terakhir yang ditamatkan menentukan kualifikasi akademik pengajar.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Robot&#13;
  selain robot hitam kuning tidak dapat digunakan sebagai asisten rumah tangga.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Robot yang digunakan sebagai pengirim&#13;
  barang adalah bukti kemajuan teknologi di Tiongkok.</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Robot&#13;
  hitam kuning di Tiongkok adalah robot paling canggih di dunia.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Semua&#13;
  orang di Tiongkok menggunakan robot untuk membantu kehidupan sehari-hari.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Seluruh&#13;
  pekerjaan orang Tiongkok dilakukan oleh robot.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Penyebab&#13;
  <i>Maternal Death </i>adalah kematian karena kecelakaan atau karena&#13;
  kebetulan.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><i><span lang="IN" style="font-size:12.0pt;line-height:115%">Maternal&#13;
  death</span></i><span lang="IN" style="font-size:12.0pt;line-height:115%">&#13;
  adalah angka kematian ibu per 100.000 kelahiran hidup.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><i><span lang="IN" style="font-size:12.0pt;line-height:115%">Maternal&#13;
  mortality ratio </span></i><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">kematian yang terjadi saat kehamilan, atau selama 42 hari sejak&#13;
  terminasi kehamilan, tanpa memperhitungkan durasi dan tempat kehamilan, yang&#13;
  disebabkan atau diperparah oleh kehamilan atau pengelolaan kehamilan&#13;
  tersebut, tetapi bukan disebabkan oleh kecelakaan atau kebetulan.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Angka Kematian Ibu adalah angka kematian&#13;
  ibu per 100.000 kelahiran hidup.</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><i><span lang="IN" style="font-size:12.0pt;line-height:115%">World&#13;
  Health Organization</span></i><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%"> (WHO) memiliki beberapa istilah yang sama terkait dengan&#13;
  AKI.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kondisi&#13;
  geografisnya tidak dikatakan unik.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Pembangunan&#13;
  di Samosir terus mengalami peningkatan.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Samosir&#13;
  memiliki fondasi keuangan yang stabil.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Wisatawan&#13;
  lebih tertarik untuk berkunjung di Danau Toba dibandingkan daerah lain.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Samosir tidak dijadikan andalan pariwisata&#13;
  dan sumber pemasukan daerah.</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Transportasi publik menjadi salah satu&#13;
  sektor usaha yang ikut terdampak pandemi Covid-19.</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Pendapatan&#13;
  perusahaan bus pariwisata pada tahun pandemi menurun lebih dari 50 persen.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Pendapatan&#13;
  perusahaan taksi tidak sebanding dengan beban perusahaan sehingga mengalami&#13;
  kerugian.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Selama&#13;
  masa Pembatasan Sosial Berskala Besar (PSBB), semua jenis transportasi darat&#13;
  mengalami kerugian.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Penurunan&#13;
  kinerja semua perusahaan transportasi antarprovinsi disebabkan karena&#13;
  pelaksanaan pembatasan sosial.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Pencemaran&#13;
  lingkungan disebabkan kebutuhan kendaraan penduduk meningkat.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Peningkatan&#13;
  kebutuhan kendaraan penduduk akan mengurangi alat transportasi.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Jakarta, Surabaya, Medan, dan Bandung&#13;
  merupakan kota yang laju pertambahan kendaraannya yang terlihat.</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Laju&#13;
  pertambahan kendaraan terlihat di semua kota besar di Indonesia.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Bertambahnya&#13;
  kendaraan pribadi maupun umum menyebabkan pencemaran lingkungan.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Jumlah&#13;
  kuota siswa yang diterima dalam PPDB dari jalur prestasi dan perpindahan&#13;
  orang tua hampir sama.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Jalur&#13;
  zonasi memiliki jumlah kuota PPDB paling sedikit dibandingkan dengan jalur&#13;
  prestasi dan perpindahan orang tua.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Penerimaan&#13;
  siswa baru 2019 dilaksanakan melalui liga jalur, yaitu jalur zonasi, jalur&#13;
  prestasi bidang akademik, dan jalur prestasi bidang nonakademik.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Jalur&#13;
  prestasi hanya ditentukan oleh nilai Ujian Nasional (UN), tanpa ada kriteria&#13;
  lain yang menjadi bahan pertimbangannya.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Jalur zonasi selalu lebih banyak kuota&#13;
  PPDB walaupun kuota jalur prestasi dan perpindahan orang tua ditambahkan 10&#13;
  persen.</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Simpulan&#13;
  tersebut pasti benar.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Simpulan&#13;
  tersebut mungkin benar.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Simpulan&#13;
  tersebut pasti salah.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Simpulan tidak relevan dengan informasi&#13;
  yang diberikan.</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Simpulan&#13;
  tidak dapat dinilai karena informasi tidak cukup.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Pernyataan&#13;
  (1) adalah penyebab dan pernyataan (2) adalah akibat.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Pernyataan&#13;
  (2) adalah penyebab dan pernyataan (1) adalah akibat.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Pernyataan&#13;
  (1) dan (2) adalah penyebab, tetapi tidak saling berhubungan.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Pernyataan&#13;
  (1) dan (2) adalah akibat dari dua penyebab yang tidak saling berhubungan.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Pernyataan (1) dan (2) adalah akibat dari&#13;
  suatu penyebab yang sama.</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Air danau berwarna hijau kecoklatan dan&#13;
  keruh</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Air&#13;
  danau berwarna hijau kecoklatan atau keruh</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Hanya&#13;
  sedikit alga yang hidup pada danau</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Air&#13;
  danau tidak berwarna biru</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Air&#13;
  danau tidak terlihat jernih</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black;background:none">Rendang adalah masakan yang&#13;
  sulit dibuat.</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">Rendang hanya dimasak untuk acara-acara khusus.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">Rendang lebih banyak disukai daripada masakan&#13;
  lainnya.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">Rendang dimasak dengan menggunakan banyak&#13;
  rempah-rempah.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">Rendang yang dimasak dengan cepat kurang digemari&#13;
  orang.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Beberapa wilayah yang memiliki jumlah&#13;
  penduduk lebih banyak memilih tingkat kemacetan yang lebih tinggi.</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Jumlah&#13;
  penduduk yang banyak ikut berperan terhadap beban lalu lintas yang dilakukan&#13;
  oleh masyarakat.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kemacetan&#13;
  lalu lintas lebih banyak terjadi pada negara-negara yang masih berkembang&#13;
  karena pembangunan infrastruktur yang kurang.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Sebagian&#13;
  wilayah yang penduduknya sedikit memiliki tingkat kemacetan yang setara&#13;
  dengan wilayah yang penduduknya lebih banyak.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Beberapa&#13;
  daerah yang mengalami kemacetan memiliki fasilitas transportasi yang bisa&#13;
  menampung lebih banyak orang.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Banyak&#13;
  orang yang lebih percaya mengobatkan penyakitnya ke dokter daripada melalui&#13;
  pengobatan tradisional.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Penyakit yang dapat disembuhkan melalui&#13;
  cara minum atau menggunakan obat, jumlahnya sekitar 150 jenis.</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Hampir&#13;
  semua penyakit dapat disembuhkan melalui teknologi medis mutakhir.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Pengobatan&#13;
  tradisional memiliki peranan yang sama dengan penyembuhan secara teknologi&#13;
  media mutakhir.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Sebagian&#13;
  besar penyakit yang diderita oleh seseorang disembuhkan dengan intervensi&#13;
  obat yang berbeda-beda.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Adik&#13;
  naik kelas atau kakak tidak lulus tepat waktu.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Adik&#13;
  tidak naik kelas atau kakak tidak lulus tepat waktu.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Adik tidak naik kelas dan kakak tidak&#13;
  lulus tepat waktu.</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Ayah&#13;
  tidak membelikan komputer dan motor baru karena belum gajian.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Ayah&#13;
  hanya mampu membeli komputer maupun motor bekas.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Lawan&#13;
  main tim ABS tidak menggunakan pemain asing.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Sejak&#13;
  tiga tahun lalu manajemen tim ABS sudah merekrut pemain asing untuk bergabung&#13;
  dalam tim ABS.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Tahun&#13;
  ini tim ABS menerapkan strategi permainan yang berbeda dibandingkan&#13;
  sebelumnya.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Jumlah kemenangan tim ABS setelah pemain&#13;
  asing bergabung lebih banyak dibandingkan sebelumnya.</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Tim&#13;
  lawan tim ABS tahun ini tidak memiliki strategi permainan yang matang.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Rendi&#13;
  dan Vino belajar bahasa Inggris bersama.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Rendi&#13;
  dan Vino ingin melanjutkan sekolah di Australia.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Rendi dan&#13;
  Vino menyukai sekolah di Australia.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Rendi&#13;
  dan Vino belajar bahasa Inggris di Australia.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Rendi dan Vino menyukai pelajaran bahasa&#13;
  Inggris.</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Siswa&#13;
  kurang memperhatikan bel tanda masuk dan tidak ada pengumuman.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Guru&#13;
  lupa membunyikan bel tanda masuk dan tidak ada pengumuman.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Siswa&#13;
  tidak masuk kelas dan tidak ada upacara di lapangan.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Guru tidak membunyikan bel tanda masuk&#13;
  atau tidak ada pengumuman.</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Guru&#13;
  tidak memberikan pengumuman bahwa siswa harus masuk kelas.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">86 dan&#13;
  53</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">94 dan 47</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">97 dan&#13;
  50</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">98 dan 42</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">99 dan&#13;
  47</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">6</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">8</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">12</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">15</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">24</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="62" height="29" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image003.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> </span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="62" height="28" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image004.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> </span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="62" height="29" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image005.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> </span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span style="font-size:12.0pt;line-height:115%"> </span><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="62" height="29" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image006.png"/></span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="62" height="29" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image007.png"/></span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">75</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">90</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">95</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">105</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">110</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Saat&#13;
  berat mobil bertambah, konsumsi bahan bakar juga bertambah</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Saat berat mobil bertambah, konsumsi&#13;
  bahan bakar menurun</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Saat&#13;
  berat mobil bertambah, konsumsi bahan bakar tidak berubah</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Saat berat mobil berkurang,&#13;
  konsumsi bahan bakar juga berkurang</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Saat&#13;
  berat mobil berkurang, konsumsi bahan bakar bertambah</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%"><img border="0" width="156" height="133" id="Picture 19" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image009.png"/></span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%"><img border="0" width="157" height="133" id="Picture 20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image010.png"/></span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%"><img border="0" width="157" height="134" id="Picture 21" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image011.png"/></span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%"><img border="0" width="155" height="135" id="Picture 22" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image012.png"/></span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%"><img border="0" width="156" height="133" id="Picture 23" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image013.png"/></span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">50 kg</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">100 kg</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">150 kg</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">200 kg</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">250 kg</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">1.400&#13;
  potong</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">1.200 potong</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">1.000&#13;
  potong</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">800 potong</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">600&#13;
  potong</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Jenis&#13;
  bibit dan pupuk</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Jenis&#13;
  bibit dan curah hujan</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Jenis&#13;
  pupuk dan curah hujan</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Jenis pupuk dan jumlah hama</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Curah hujan dan jumlah hama</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Penghasilan&#13;
  C adalah yang paling tinggi</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Penghasilan&#13;
  A adalah yang paling tinggi</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Penghasilan&#13;
  B adalah yang paling rendah</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">Penghasilan A dapat lebih tinggi daripada B</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Penghasilan&#13;
  C dapat lebih rendah daripada B</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">kalimat (1)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black;background:none">kalimat (2)</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">kalimat (5)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">kalimat (6)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">kalimat (7)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black;background:none">berbudi</span><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black">     </span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">bersahaja  </span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">berakal</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">berperasaan </span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">berpengetahuan</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">lorong </span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">jalan         </span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">jaringan</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">saluran </span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black;background:none">fasilitas</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">ajaran        </span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">nasihat     </span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">anjuran</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">petunjuk </span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black;background:none">ungkapan</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">perluasan</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black;background:none">penambahan</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">penegasan</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">penghubungan</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">perincian</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(1-2-3)&#13;
  dan (4-5-6-7-8-9-10)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(1-2-3-4)&#13;
  dan (5-6-7-8-9-10)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">(1-2-3-4-5) dan (6-7-8-9-10)</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(1-2-3-4-5-6)&#13;
  dan (7-8-9-10)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(1-2-3-4-5-6-7)&#13;
  dan (8-9-10)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">terdapat&#13;
  batasan warga dalam beraktivitas karena aturan</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">warga&#13;
  membuat aturan yang terdapat dalam PSBB</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">aktivitas&#13;
  warga dibatasi akibat terdapat aturan yang diterapkan pemerintah</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">terdapat beberapa aturan yang harus&#13;
  dipatuhi saat PSBB</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">aturan&#13;
  yang terdapat dalam PSBB cukup membatasi aktivitas warga</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">kalimat&#13;
  (2)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">kalimat&#13;
  (3)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">kalimat (5)</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">kalimat&#13;
  (7)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">kalimat&#13;
  (9)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">kalimat (1)</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">kalimat&#13;
  (4)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">kalimat&#13;
  (6)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">kalimat&#13;
  (7)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">kalimat&#13;
  (9)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">meyakinkan&#13;
  informasi pada kalimat sebelumnya</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">mengelaborasi&#13;
  informasi pada kalimat sebelumnya</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">menceritakan&#13;
  informasi pada kalimat sebelumnya</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">membuktikan&#13;
  informasi pada kalimat sebelumnya</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">menjelaskan informasi pada kalimat&#13;
  sebelumnya</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Ina-CTFS&#13;
  telah dipasang di Jakarta dan Semarang dengan pertimbangan kedua area&#13;
  tersebut memiliki dampak banjir di wilayah pesisir atau rob</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">BMKG (Badan Meteorologi, Klimatologi, dan&#13;
  Geofisika) membangun Ina-CIFS (<i>Indonesia Coastal Inundation Forecasting&#13;
  System</i>) untuk memberikan peringatan dini banjir di wilayah pesisir.</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">BMKG&#13;
  akan memperluas cakupan ke seluruh wilayah pesisir Indonesia yang berpotensi&#13;
  terdampak.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">sistem&#13;
  Ina-CIFS merupakan kerja sama BMKG dengan Kementerian Pekerjaan Umum dan&#13;
  Perumahan Rakyat, Kementerian Kelautan dan Perikanan, Badan Informasi&#13;
  Geospasial, Badan Nasional Penanggulangan Bencana, serta Badan Penanggulangan&#13;
  Bencana Daerah Jakarta dan Semarang.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">sistem&#13;
  ini menggabungkan konsep matematika, algoritma, dan berbagai instrumen&#13;
  lainnya.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Orang&#13;
  atau pejabat yang memiliki kepentingan tertentu.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Pejabat&#13;
  yang ditunjuk untuk mengurusi permasalahan yang terjadi.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Segenap pihak yang terkait dengan&#13;
  permasalahan yang diangkat.</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Orang&#13;
  yang ahli dalam menangani suatu masalah.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Badan&#13;
  pemerintah yang bertanggung jawab atas suatu bencana.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><i><span lang="IN" style="font-size:12.0pt;line-height:115%">oleh-oleh&#13;
  khas Bengkulu </span></i><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">dalam kalimat (4).</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><i><span lang="IN" style="font-size:12.0pt;line-height:115%">motif&#13;
  bunga rafflesia</span></i><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%"> dalam kalimat (7).</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><i><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">sang penebar bau busuk </span></i><span lang="IN" style="font-size:12.0pt;line-height:115%;background:none">dalam&#13;
  kalimat (7).</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><i><span lang="IN" style="font-size:12.0pt;line-height:115%">bunga&#13;
  bangkai </span></i><span lang="IN" style="font-size:12.0pt;line-height:115%">dalam&#13;
  kalimat (7).</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><i><span lang="IN" style="font-size:12.0pt;line-height:115%">batik&#13;
  tangan</span></i><span lang="IN" style="font-size:12.0pt;line-height:115%">&#13;
  dalam kalimat (7).</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(1)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(3) </span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">(4)</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(6)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(7)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">memotivasi</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">menggambarkan&#13;
  </span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">menjelaskan</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">mengajak</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">menceritakan</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Memperkenalkan batik Besurek oleh-oleh&#13;
  khas Bengkulu</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Membandingkan&#13;
  batik Besurek dengan batik lainnya</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Menyatakan&#13;
  bahwa batik Besurek adalah batik terbaik di Indonesia</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Menyatakan&#13;
  batik Besurek belum cukup terkenal</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Menggambarkan&#13;
  keindahan batik Besurek</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Kata <i>produk</i> dalam kalimat (1)</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kata <i>artistik</i>&#13;
  dalam kalimat (2)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kata <i>dunia</i>&#13;
  dalam kalimat (2)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kata <i>solusi</i>&#13;
  dalam kalimat (3)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kata <i>ekspresi</i>&#13;
  dalam kalimat (4)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Frasa <i>tindakan&#13;
  kreativitas</i> dalam kalimat (1)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Frasa <i>sejumlah&#13;
  kreativitas </i>dalam kalimat (4)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Frasa <i>pada&#13;
  pengalaman baru </i>dalam kalimat (5)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Frasa <i>psikolog klinis </i>dalam&#13;
  kalimat (6)</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Frasa <i>perasaan&#13;
  sulit </i>dalam kalimat (6)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kalimat&#13;
  (1)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kalimat&#13;
  (2)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kalimat&#13;
  (3)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kalimat&#13;
  (5)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Semua kalimat sejajar</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">pengertian&#13;
  (kalimat 4)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">penelitian (kalimat 5)</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">pengalaman&#13;
  (kalimat 5)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">pemikiran&#13;
  (kalimat 6)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">perasaan&#13;
  (kalimat 6)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">mengganti kata <i>berdasarkan</i> dengan <i>berdasar</i></span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">mengganti kata <i>terkait</i> dengan <i>berkaitan</i></span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black;background:none">menghilangkan kata <i>yang</i></span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">menghilangkan kata <i>akan</i></span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">menambah kata <i>dari</i> setelah 75%</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">bahwa</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">hanya</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black;background:none">pada</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">tetapi</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">mencapai</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">selayaknya menanggulangi peningkatan limbah dan&#13;
  sampah</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">perlu menyediakan dana penangan limbah dan&#13;
  sampah medis</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">harus memberi sanksi kepada masyarakat yang&#13;
  membuang sampah</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">seharusnya menangani kerusakan lingkungan&#13;
  akibat sampah dan limbah</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black;background:none">seharusnya membuat peraturan&#13;
  tentang pembuangan sampah dan limbah</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">pengetahuan&#13;
  yang bermakna</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">pelibatan&#13;
  siswa aktif</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">pembelajaran&#13;
  aktif</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">pemecahan&#13;
  masalah</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">pembelajaran antikorupsi</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(1)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">(2)</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(3)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(5)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(6)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(1)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">(2)</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(4)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(5)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(7)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Jadi, pembelajaran secara aktif&#13;
  menempatkan siswa dalam suatu situasi yang membuat mereka terlibat dalam&#13;
  aktivitas yang dirancang oleh guru untuk tujuan tertentu.</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Jadi,&#13;
  pembelajaran secara aktif dapat<span style="color:red"> </span>menempatkan&#13;
  siswa dalam suatu situasi yang membuat mereka terlibat dalam aktivitas yang&#13;
  dirancang oleh guru untuk tujuan tertentu.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Jadi,&#13;
  pembelajaran secara aktif menempatkan siswa dalam suatu situasi yang membuat&#13;
  mereka terlibat dalam aktivitas yang telah dirancang oleh guru untuk tujuan&#13;
  tertentu.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Jadi,&#13;
  proses pembelajaran secara aktif menempatkan siswa dalam suatu situasi yang&#13;
  membuat mereka terlibat dalam aktivitas yang dirancang oleh guru untuk tujuan&#13;
  tertentu.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Jadi,&#13;
  proses pembelajaran secara aktif dapat menempatkan siswa dalam suatu situasi&#13;
  yang membuat mereka terlibat dalam aktivitas yang dirancang oleh guru untuk tujuan&#13;
  tertentu.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">konkret</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">signifikan</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">tajam</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">menjulang</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">tinggi</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Banyak peluang didalami.</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Banyak&#13;
  peluang pemain profesional.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Banyak&#13;
  peluang pada aspek demografis.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Pada&#13;
  aspek demografis banyak elemen produktif.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Banyak&#13;
  kalangan berpenghasilan menengah.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kontribusi&#13;
  <i>game </i>untuk ekraf Indonesia pada 2017 adalah 1,93 persen PDB, <i>tetapi</i>&#13;
  jumlah tenaga kerja di subsektor ini 44.733.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kontribusi&#13;
  <i>game </i>untuk ekraf Indonesia pada 2017 adalah 1,93 persen PDB, <i>padahal</i>&#13;
  jumlah tenaga kerja di subsektor ini 44.733.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kontribusi&#13;
  <i>game </i>untuk ekraf Indonesia pada 2017 adalah 1,93 persen PDB, <i>sedangkan</i>&#13;
  jumlah tenaga kerja di subsektor ini 44.733.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kontribusi&#13;
  <i>game </i>untuk ekraf Indonesia pada 2017 adalah 1,93 persen PDB <i>ketika</i>&#13;
  jumlah tenaga kerja di subsektor ini 44.733.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Kontribusi <i>game </i>untuk ekraf&#13;
  Indonesia pada 2017 adalah 1,93 persen PDB <i>dan</i> jumlah tenaga kerja di&#13;
  subsektor ini 44.733.</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(1)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(2)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(4)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(5)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">(6)</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Lembaga&#13;
  Adat Melayu Jambi; <i>Peran Lembaga Adat Melayu Kota Jambi dalam&#13;
  Mempertahankan Nilai Lokal Budaya Melayu Jambi</i></span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Lembaga&#13;
  Adat Melayu Jambi; “<i>Peran Lembaga Adat Melayu Kota Jambi dalam&#13;
  Mempertahankan Nilai Lokal Budaya Melayu Jambi”</i></span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><i><span lang="IN" style="font-size:12.0pt;line-height:115%">Lembaga&#13;
  Adat Melayu Jambi</span></i><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">; “Peran Lembaga Adat Melayu Kota Jambi dalam Mempertahankan Nilai&#13;
  Lokal Budaya Melayu Jambi”</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><i><span lang="IN" style="font-size:12.0pt;line-height:115%">Lembaga&#13;
  Adat Melayu Jambi</span></i><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">; Peran Lembaga Adat Melayu Kota Jambi dalam Mempertahankan Nilai Lokal&#13;
  Budaya Melayu Jambi</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">Lembaga Adat Melayu Jambi; “Peran Lembaga Adat Melayu Kota&#13;
  Jambi dalam Mempertahankan Nilai Lokal Budaya Melayu Jambi”</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Keyakinan&#13;
  menjadi vegetarian</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Cara&#13;
  sehat menjadi vegetarian</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Pilihan&#13;
  menjadi vegetarian</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Prinsip menjadi vegetarian</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Manfaat&#13;
  menjadi vegetarian</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Penggunaan&#13;
  kata <i>banyak</i> pada kalimat (1)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Penggunaan kata <i>kebanyakan</i> pada&#13;
  kalimat (2)</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Penggunaan&#13;
  kata <i>mereka</i> pada kalimat (3)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Penggunaan kata <i>bahwa </i> pada&#13;
  kalimat (4)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Penggunaan&#13;
  kata <i>untuk</i> pada kalimat (5)</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Mengonsumsi&#13;
  sayuran jauh lebih baik dibandingkan dengan mengonsumsi hewan.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Sebuah&#13;
  dosa besar jika mengonsumsi hewan.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Kepercayaan para vegetarian yang&#13;
  menganggap salah jika mengonsumsi hewan.</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Menjadi&#13;
  seorang vegetarian adalah keputusan yang benar.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Mengonsumsi&#13;
  hewan sama saja membunuh hewan dan itu sebuah kesalahan.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">merupakan&#13;
  sebuah gaya hidup orang modern yang menyehatkan.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">dilarang&#13;
  mengonsumsi hewan karena itu tindakan yang salah dan bertentangan dengan&#13;
  kepercayaan mereka serta diet ala vegetarian adalah diet yang terbaik&#13;
  dibandingkan semua diet.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">karena&#13;
  mementingkan gaya hidup yang menurut mereka sehat.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">karena&#13;
  merasa tubuhnya sudah tidak sehat dan diet ini merupakan salah satu pilihan&#13;
  tepat</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">tidak mengonsumsi hewan karena tidaklah&#13;
  benar, bertentangan dengan kepercayaan mereka, serta diet ala vegetarian&#13;
  lebih sehat dan sudah menjadi gaya hidup.</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">pemakaian&#13;
  obat berlebih</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">dampak&#13;
  pengobatan karies</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">sakit&#13;
  yang disebabkan karies</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">gigi&#13;
  yang terkena karies</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">pembentukan kembali mineral gigi</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">TIDAK&#13;
  PERLU DIPERBAIKI</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Karena&#13;
  itu, orang Jawa kebanyakan berkumpul di Pulau Jawa.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Sehingga,&#13;
  orang Jawa kebanyakan berkumpul di Pulau Jawa.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Bahkan,&#13;
  orang Jawa kebanyakan berkumpul di Pulau Jawa.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">Akibatnya, orang Jawa kebanyakan berkumpul di Pulau Jawa</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">TIDAK&#13;
  PERLU DIPERBAIKI</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">Akan tetapi,</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Misalnya,</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Sementara,</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Sedangkan</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">TIDAK PERLU DIPERBAIKI</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Suku&#13;
  Sunda, Suku Batak dan Suku Madura adalah kelompok terbesar berikutnya di&#13;
  negara ini.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Suku&#13;
  Sunda, Suku Batak, dan Suku Madura adalah kelompok terbesar berikutnya di&#13;
  negara ini.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Suku&#13;
  Sunda, suku Batak, dan suku Madura adalah kelompok terbesar berikutnya&#13;
  dinegara ini.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Suku&#13;
  Sunda, suku Batak dan suku Madura adalah kelompok terbesar berikutnya&#13;
  dinegara ini.</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">12.417</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">21.983</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">36.786</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">42.169</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">52.461</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span style="font-size:12.0pt;line-height:115%"> </span><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="65" height="28" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image018.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> </span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="65" height="28" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image019.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> </span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="67" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image020.png"/></span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="65" height="28" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image021.png"/></span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="65" height="28" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image022.png"/></span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kuadran&#13;
  I</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kuadran&#13;
  II</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kuadran&#13;
  III</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;background:none">Kuadran&#13;
  IV</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Ada&#13;
  solusi di semua kuadran</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">30</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">75</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">95</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">105</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">150</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">1.296&#13;
  – 144π         </span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">576 – 144π</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">324 –&#13;
  144</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">576 – 72π</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">324 – 72π</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">2a&#13;
  &lt; 5</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">3a &lt; 4</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">a &gt;&#13;
  4</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">2a &gt; 5</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">3a&#13;
  &gt; 4</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="130" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image031.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> </span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="130" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image032.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%">          </span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="126" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image033.png"/></span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="126" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image034.png"/></span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span style="font-size:12.0pt;line-height:115%"> </span><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="124" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image035.png"/></span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">–6</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">–3</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">0</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">3</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">6</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="102" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image039.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> </span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span style="font-size:12.0pt;line-height:115%"> </span><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="115" height="29" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image040.png"/></span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="115" height="28" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image041.png"/></span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="100" height="29" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image042.png"/></span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="91" height="28" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image043.png"/></span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">3</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">4,5</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">5</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">6</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">7,5</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span style="font-size:12.0pt;line-height:115%"> </span><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:8.5pt"><img width="7" height="30" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image044.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%">               </span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:8.5pt"><img width="7" height="30" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image045.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%">                 </span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:8.5pt"><img width="7" height="30" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image046.png"/></span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:8.5pt"><img width="7" height="30" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image047.png"/></span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:8.5pt"><img width="7" height="30" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image048.png"/></span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(1),&#13;
  (2), dan (3) SAJA yang benar</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(1)&#13;
  dan (3) SAJA yang benar</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(2)&#13;
  dan (4) SAJA yang benar</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">HANYA (4) yang benar</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">SEMUA pilihan benar</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">P &gt;&#13;
  Q</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">P &lt; Q</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">P = Q</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">P = –Q</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Hubungan&#13;
  antara P dan Q tidak dapat ditentukan</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">0</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">1</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">2</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">3</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">4</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Pernyataan&#13;
  (1) SAJA cukup untuk menjawab pertanyaan, tetapi pernyataan (2) SAJA tidak&#13;
  cukup</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Pernyataan&#13;
  (2) SAJA cukup untuk menjawab pertanyaan, tetapi pernyataan (1) SAJA tidak&#13;
  cukup</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">DUA pernyataan BERSAMA-SAMA cukup untuk&#13;
  menjawab pertanyaan, tetapi SATU pernyataan SAJA tidak cukup</span>',
        'true_answer' => true
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Pernyataan (1) SAJA cukup&#13;
  untuk menjawab pertanyaan dan pernyataan (2) SAJA cukup</span>',
        'true_answer' => false
    ),
    array(
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Pernyataan&#13;
  (1) dan pernyataan (2) tidak cukup untuk menjawab pertanyaan</span>',
        'true_answer' => false
    ),
);


// TEMPLATE
$tryoutQuestionPKGTemplate = array(
    //
    // Penalaran Umum Penalaran Induktif
    //
    //
    array(
        'sub_title' => 'Penalaran Umum Penalaran Induktif',
        'question_desc' => '',
        'question_img' => '',
    ),
    //
    //
    // Penalaran Umum Penalaran Deduktif
    //
    //    
    array(
        'sub_title' => 'Penalaran Umum Penalaran Deduktif',
        'question_desc' => '',
        'question_img' => '',
    ),
    //
    //
    // Penalaran Umum Penalaran Kuantitatif
    //
    //
    array(
        'sub_title' => 'Penalaran Umum Penalaran Kuantitatif',
        'question_desc' => '',
        'question_img' => '',
    ),
    //
    //
    // Pengetahuan dan Pemahaman Umum
    //
    //
    array(
        'sub_title' => 'Pengetahuan dan Pemahaman Umum',
        'question_desc' => '',
        'question_img' => '',
    ),
    //
    //
    // Kemampuan Memahami Bacaan dan Menulis
    //
    //
    array(
        'sub_title' => 'Kemampuan Memahami Bacaan dan Menulis',
        'question_desc' => '',
        'question_img' => '',
    ),
    //
    //
    // Pengetahuan Kuantitatif
    //
    //
    array(
        'sub_title' => 'Pengetahuan Kuantitatif',
        'question_desc' => '',
        'question_img' => '',
    ),
    //
    //
    // Literasi dalam Bahasa Indonesia
    //
    //
    array(
        'sub_title' => 'Literasi dalam Bahasa Indonesia',
        'question_desc' => '',
        'question_img' => '',
    ),
    //
    //
    // Literasi dalam Bahasa Inggris
    //
    //
    array(
        'sub_title' => 'Literasi dalam Bahasa Inggris',
        'question_desc' => '',
        'question_img' => '',
    ),
    //
    //
    // Penalaran Matematika
    //
    //
    array(
        'sub_title' => 'Penalaran Matematika',
        'question_desc' => '',
        'question_img' => '',
    ),
);
$tryoutChoicesPKGTemplate = array(
    array(
        'choice_img' => '',
        'choice_desc' => '',
        'true_answer' => false,
        'explanation' => '',
    ),
);
