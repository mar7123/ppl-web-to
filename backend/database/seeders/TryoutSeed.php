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
    array(
        'sub_title' => 'Literasi dalam Bahasa Indonesia',
        'sub_duration' => 45,
        'sub_order' => 7,
        'mean_val' => 500,
        'std_val' => 100,
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Inggris',
        'sub_duration' => 30,
        'sub_order' => 8,
        'mean_val' => 500.1,
        'std_val' => 99.98,
    ),
    array(
        'sub_title' => 'Penalaran Matematika',
        'sub_duration' => 30,
        'sub_order' => 9,
        'mean_val' => 500,
        'std_val' => 100,
    ),
);
$tryoutQuestionPKG = array(
    array(
        'sub_title' => 'Penalaran Umum Penalaran Induktif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black">Pneumonia&#13;
  adalah peradangan paru-paru yang disebabkan oleh infeksi virus, bakteri, atau&#13;
  jamur. Pneumonia dapat dicegah dengan beberapa cara, di antaranya&#13;
  menjalani </span><span lang="IN"><a href="https://www.alodokter.com/jenis-jenis-vaksin-pneumonia-yang-perlu-anda-ketahui" target="_blank"><span style="font-size:12.0pt;line-height:115%;color:black">vaksinasi</span></a></span><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black"> </span><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black">dan menghindari&#13;
  kontak dengan orang yang sedang sakit.</span></p><p class="MsoListParagraph" style="margin-top:0in;margin-right:0in;margin-bottom:&#13;&#10;  0in;margin-left:28.35pt;text-align:justify;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></b></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Berdasarkan&#13;
  informasi tersebut, manakah pernyataan berikut yang PASTI BENAR?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  informasi tersebut, manakah di bawah ini pernyataan yang BENAR?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  informasi tersebut, manakah di bawah ini pernyataan yang BENAR?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Induktif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><a name="_Hlk64111059"><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Kualifikasi akademik tenaga pengajar dapat dilihat melalui&#13;
  tingkat pendidikan terakhir yang ditamatkan.</span></a><span lang="IN" style="font-size:12.0pt;line-height:115%"> Guru pada jenjang pendidikan dasar&#13;
  dan menengah harus memiliki kualifikasi akademik minimum diploma empat (D4)&#13;
  atau sarjana 1 (S1) sebagaimana yang tertuang dalam Permendiknas RI Nomor 16&#13;
  Tahun 2007. Kemdikbud mendefinisikan guru dan kualifikasi pendidikan tersebut&#13;
  sebagai guru layak mengajar (<i>qualified teacher</i>).</span></p><p class="MsoListParagraph" style="margin-top:0in;margin-right:0in;margin-bottom:&#13;&#10;  0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Berdasarkan&#13;
  informasi tersebut, manakah pernyataan berikut yang PASTI SALAH?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Induktif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><a name="_Hlk68169384"><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Sebagian besar orang di Tiongkok sudah mulai menggunakan&#13;
  robot sebagai pengirim barang asisten rumah tangga dan penjaga rumah. </span></a><span lang="IN" style="font-size:12.0pt;line-height:115%">Robot tersebut berwarna&#13;
  hitam kuning berbentuk kecil serta dilengkapi sistem GPS kamera dan radar.&#13;
  Robot hitam kuning ini merupakan gambaran kemajuan teknologi di Tiongkok.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Berdasarkan&#13;
  informasi tersebut, manakah pernyataan berikut yang PASTI BENAR?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  informasi tersebut, manakah pernyataan berikut yang BENAR?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  pemekaran wilayah di Samosir?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  ....</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  simpulan yang PALING DIDUKUNG oleh bacaan tersebut?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  pernyataan di bawah ini yang paling mungkin benar tentang jalur PPDB?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  pernyataan berikut yang menggambarkan kualitas simpulan tersebut?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Deduktif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black">Perhatikan kedua pernyataan berikut.</span></p><p class="MsoListParagraphCxSpFirst" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:18.2pt;text-align:justify;text-indent:-.25in;&#13;&#10;  line-height:115%;background:white"><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">(1)<span style="font:7.0pt &quot;Times New Roman&quot;">   </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  color:black">Telepon pintar merk Y dihentikan produksinya</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:18.2pt;text-align:justify;text-indent:-.25in;&#13;&#10;  line-height:115%;background:white"><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">(2)<span style="font:7.0pt &quot;Times New Roman&quot;">   </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  color:black">Produsen telepon pintar merk Y menjual saham ke perusahaan X</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Manakah pilihan&#13;
  di bawah ini yang menggambarkan hubungan pernyataan (1) dan (2)?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Deduktif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black">Warna air di danau akan lebih terlihat jernih dan biru&#13;
  apabila danau terletak di daerah dengan cuaca yang lebih dingin dan lintang&#13;
  yang lebih tinggi. Hal ini dikarenakan alga yang membuat danau berwarna hijau&#13;
  kecoklatan lebih senang hidup di dataran rendah.</span></p><p class="MsoListParagraph" style="margin-top:0in;margin-right:0in;margin-bottom:&#13;&#10;  0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Jika danau&#13;
  berada di lintang rendah dengan temperatur yang tinggi, manakah simpulan yang&#13;
  benar?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Deduktif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black">Rendang dimasak dalam waktu lebih lama jika dibandingkan&#13;
  dengan masakan lainnya. Makin lama dimasak, makin enak rasanya.</span></p><p class="MsoListParagraph" style="margin-top:0in;margin-right:0in;margin-bottom:&#13;&#10;  0in;margin-left:28.35pt;text-align:justify;line-height:115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black">Berdasarkan pernyataan tersebut, manakah yang paling&#13;
  mungkin menjadi akibat lamanya waktu memasak rendang?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  sejalan dengan tingkat kepadatan penduduk”?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  ....</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Deduktif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Jika adik naik&#13;
  kelas, ayah akan membelikan komputer baru. Jika kakak lulus kuliah tepat&#13;
  waktu, ayah akan membelikan motor baru.</span></p><p class="MsoListParagraph" style="margin-top:0in;margin-right:0in;margin-bottom:&#13;&#10;  0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Saat ini, adik&#13;
  tidak memiliki komputer baru dan kakak tidak memiliki motor baru, manakah&#13;
  simpulan yang paling tepat?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Deduktif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><a name="_Hlk68169433"><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Pelatih sepak bola tim ABS mengungkapkan bahwa&#13;
  keberhasilannya membawa kemenangan bagi tim ABS tahun ini disebabkan adanya&#13;
  pemain asing yang bergabung di tim ABS.</span></a></p><p class="MsoListParagraph" style="margin-top:0in;margin-right:0in;margin-bottom:&#13;&#10;  0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Manakah&#13;
  pernyataan berikut yang mendukung<i> </i>argumen pelatih sepak bola tersebut?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Deduktif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Rendi menyukai&#13;
  pelajaran bahasa Inggris. Ia ingin melanjutkan sekolah di Australia. Vino,&#13;
  teman sekelas Rendi, menyukai pelajaran bahasa Inggris.</span></p><p class="MsoListParagraph" style="margin-top:0in;margin-right:0in;margin-bottom:&#13;&#10;  0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Kesimpulan mana&#13;
  yang benar?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Deduktif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Jika guru&#13;
  membunyikan bel tanda masuk, siswa masuk ke kelas masing-masing. Jika ada&#13;
  pengumuman, siswa berkumpul di lapangan upacara. Saat ini, siswa berada di&#13;
  luar kelas atau mereka tidak berkumpul di lapangan upacara.</span></p><p class="MsoListParagraph" style="margin-top:0in;margin-right:0in;margin-bottom:&#13;&#10;  0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Simpulan yang&#13;
  paling tepat adalah ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">10, 22, 46,&#13;
  ..., 190, 11, 23, ..., 95</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Nilai yang&#13;
  tepat untuk mengisi titik-titik di atas adalah ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Perhatikan&#13;
  gambar berikut!</span></p><p class="MsoListParagraph" style="margin-top:0in;margin-right:0in;margin-bottom:&#13;&#10;  0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"><img border="0" width="173" height="106" id="Picture 1" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image001.png"/></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Nilai 10 dalam&#13;
  segitiga P adalah hasil operasi aritmetika semua bilangan di luar segitiga P.&#13;
  Dengan menggunakan pola operasi aritmetika yang sama, nilai dalam segitiga Q&#13;
  yang paling tepat adalah ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Hasil&#13;
  perhitungan yang lebih besar dari </span><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="58" height="29" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image002.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> adalah ...</span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Toko A, Toko B,&#13;
  dan Toko C menjual bola sepak. Perbandingan banyaknya bola sepak yang terjual&#13;
  dari toko A dan toko B adalah 7 : 4. Perbandingan banyaknya bola sepak yang&#13;
  dijual toko B dan C adalah 5 : 3. Jika Toko C menjual 36 bola sepak, berapa&#13;
  banyak bola sepak yang dijual Toko A?</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:.25in;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Diagram sebar&#13;
  (scatterplot) di bawah menunjukkan hubungan antara berat mobil dan konsumsi&#13;
  bahan bakar (kilometer per liter/kmpl). Manakah dari berikut ini yang secara&#13;
  akurat menggambarkan hubungan tersebut?</span></p><p class="MsoListParagraphCxSpFirst" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:4.0pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"><img border="0" width="359" height="199" id="Chart 18" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image008.png"/></span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:.25in;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Kuantitatif',
        'question_desc' => '<p class="MTDisplayEquation" style="margin-left:0in;text-indent:0in"><span lang="IN" style="font-size:12.0pt;line-height:115%">Sebuah perusahaan penyewaan&#13;
  truk mengenakan biaya Rp200.000,00 untuk sewa truk ditambah Rp1.500,00 untuk&#13;
  setiap km jika lebih dari 100 km. Manakah dari grafik berikut yang paling&#13;
  mewakili biaya untuk menyewa truk?</span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Kuantitatif',
        'question_desc' => '<p class="MTDisplayEquationCxSpFirst" style="margin-left:0in;text-indent:0in"><span lang="IN" style="font-size:12.0pt;line-height:115%">Diagram lingkaran di bawah&#13;
  ini menunjukkan persentase penjualan dari lima buah terlaris di supermarket.&#13;
  Total penjualan untuk satu hari adalah 1.000 kg. Berapa selisih antara&#13;
  penjualan buah persik dan buah plum?</span></p><p class="MTDisplayEquationCxSpMiddle" style="text-indent:0in"><span lang="IN" style="font-size:12.0pt;line-height:115%"><img border="0" width="194" height="196" id="Picture 28" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image014.png" alt="Chart, diagram, pie chart&#10;&#10;Description automatically generated"/></span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:.25in;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Sebuah mozaik&#13;
  terbuat dari sekumpulan potongan kertas warna yang berukuran 0,5 cm × 0,8 cm.&#13;
  Jika 2 mozaik mempunyai luas 160 cm<sup>2</sup>, maka jumlah potongan kertas&#13;
  warna yang dibutuhkan untuk membuat 6 mozaik adalah ...</span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Sebuah&#13;
  perkebunan sawit melakukan evaluasi terhadap produktivitas kebun dan menemukan&#13;
  beberapa kondisi berikut.</span></p><p class="MsoListParagraphCxSpFirst" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:14.2pt;text-align:justify;text-indent:-14.2pt;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  font-family:Symbol">·<span style="font:7.0pt &quot;Times New Roman&quot;">     &#13;
  </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Jika jenis bibit yang ditanam berkualitas, hasil panen&#13;
  meningkat sebesar 10%</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:14.2pt;text-align:justify;text-indent:-14.2pt;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  font-family:Symbol">·<span style="font:7.0pt &quot;Times New Roman&quot;">     &#13;
  </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Jika menggunakan pupuk organik, hasil panen meningkat&#13;
  sebesar 15%</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:14.2pt;text-align:justify;text-indent:-14.2pt;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  font-family:Symbol">·<span style="font:7.0pt &quot;Times New Roman&quot;">     &#13;
  </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Jika curah hujan tinggi, produksi menurun sebesar </span><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="7" height="28" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image015.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> kali</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:14.2pt;text-align:justify;text-indent:-14.2pt;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  font-family:Symbol">·<span style="font:7.0pt &quot;Times New Roman&quot;">     &#13;
  </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Juka jumlah hama tanaman meningkat, hasil panen menurun&#13;
  sebesar 10%</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:42.55pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Manakah di&#13;
  antara pilihan berikut ini yang memiliki kontribusi PALING BESAR terhadap&#13;
  penurunan hasil panen?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Umum Penalaran Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Setiap bulan A&#13;
  memperoleh gaji tetap sebesar Rp6.000.000,00 dengan bonus berkisar&#13;
  Rp500.000,00 – Rp750.000,00. Sebagai pekerja, B mendapatkan upah dua mingguan&#13;
  sebesar Rp3.250.000,00. Sementara itu, melalui penjualan 15 – 20 pakaian&#13;
  setiap harinya, C mendapatkan keuntungan Rp16.000,00 per pakaian.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Jika satu bulan&#13;
  dihitung 28 hari, manakah pernyataan yang PALING TEPAT?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  luas.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black">(Diadaptasi dari https://media.neliti.com/)</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black">Kalimat yang tidak logis dalam bacaan tersebut adalah ….</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  berasosiasi dengan ….</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:21.3pt;text-align:justify;line-height:115%;&#13;&#10;  background:white"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  kalimat (4) adalah ….</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:21.3pt;text-align:justify;line-height:115%;&#13;&#10;  background:white"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  tersebut sama maknanya dengan kata .…</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:21.3pt;text-align:justify;line-height:115%;&#13;&#10;  background:white"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  hubungan ….</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  pengelompokan kalimatnya adalah ....</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  kalimat inti pada kalimat (8) adalah ....</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  game, sementara yang lain tidak</span></i><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%">, adalah ....</span></p>',
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
  bacaan tersebut terdapat pada ....</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:21.3pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  penulisan kalimat (6) pada bacaan tersebut adalah untuk ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  tepat untuk mengisi rumpang pada paragraf tersebut adalah ...</span></p>',
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
  kepentingan </i>pada teks tersebut bermakna ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  bacaan di atas adalah …</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  memiliki pola sama dengan pola kalimat ….</span></p>',
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
  pada bacaan tersebut adalah ....</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:21.3pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  dari paragraf tersebut adalah ....</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  pada bacaan di atas yang pola bentukan katanya </span><span style="font-size:&#13;&#10;  12.0pt;line-height:115%">tidak </span><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">dapat digunakan untuk membentuk kata lain?</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:21.3pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  <i>medis</i>?</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  mengandung frasa tidak sejajar adalah ....</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  bentuk <i>pe-an</i> dalam kalimat ….</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  dolar. <sup>7</sup>Oleh karena itu, pemerintah ….</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black">Kalimat (3) perlu disempurnakan dengan cara ….</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:23.75pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:23.75pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  miliar dolar. <sup>7</sup>Oleh karena itu, pemerintah ….</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black">Kata yang harus dihilangkan pada kalimat (6) adalah ….</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  adalah ….</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:23.75pt;text-align:justify;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></b></p>',
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
  </i>pada kalimat (4) merujuk ....</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:21.3pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  tersebut paling tepat ditempatkan setelah kalimat ....</span></p>',
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
  tanda koma yang salah terdapat pada kalimat ....</span></p>',
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
  perbaikan kalimat (8) yang paling efektif?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  paling tepat menggantikan kata <i>penting </i>dalam kalimat (5) adalah ....</span></p>',
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
  yang paling tepat sebagai kalimat inti nomor (6)?</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:21.3pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  yang paling tepat sebagai penggabungan kalimat (2) dan (3)?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  tidak berkaitan dengan gagasan utama bacaan adalah kalimat ....</span></p>',
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
  lembaga dan judul artikel pada kalimat (2) dan (8) yang benar adalah ....</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:21.3pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  utama paragraf tersebut?</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:21.3pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  diksi bercetak tebal pada teks tersebut yang tidak tepat terdapat pada ....</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:.25in;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  di atas?</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:21.3pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  vegetarian </span><span lang="IN" style="font-size:12.0pt;line-height:115%">....</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  pada paragraf tersebut memiliki makna ….</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:21.3pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  DIPERBAIKI atau diganti dengan pilihan lain yang tersedia (B, C, D, atau E).</span></p>',
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
  DIPERBAIKI atau diganti dengan pilihan lain yang tersedia (B, C, D, atau E).</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  DIPERBAIKI atau diganti dengan pilihan lain yang tersedia (B, C, D, atau E).</span></p>',
    ),
    array(
        'sub_title' => 'Pengetahuan Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Diantara lima bilangan&#13;
  berikut yang habis dibagi 2 adalah ...</span></p>',
    ),
    array(
        'sub_title' => 'Pengetahuan Kuantitatif',
        'question_desc' => '<p class="MsoListParagraphCxSpFirst" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:4.0pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:4.0pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:10.0pt"><img width="119" height="37" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image016.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> </span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:4.0pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:4.0pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Pada sistem persamaan di&#13;
  atas, b dan c adalah konstanta. Jika </span><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="63" height="28" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image017.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%">, manakah dari pernyataan berikut ini yang benar?</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:22.0pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Pengetahuan Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Perhatikan&#13;
  gambar berikut ini!</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"><img border="0" width="175" height="163" id="Picture 24" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image023.jpg"/></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Jika sistem&#13;
  pertidaksamaan </span><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="76" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image024.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> dan </span><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="76" height="28" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image025.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> digambar pada koordinat kartesius di atas, maka&#13;
  kuadran yang tidak berisi solusi dari pertidaksamaan adalah ...</span></p>',
    ),
    array(
        'sub_title' => 'Pengetahuan Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Perhatikan&#13;
  gambar berikut!</span></p><p class="MsoListParagraph" style="margin-top:0in;margin-right:0in;margin-bottom:&#13;&#10;  0in;margin-left:4.0pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"><img border="0" width="82" height="119" id="Picture 14" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image026.jpg" alt="A picture containing antenna&#10;&#10;Description automatically generated"/></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Dua segitiga&#13;
  sama kaki ditunjukkan pada gambar di atas. Jika 180 – z = 2y dan y = 75, maka&#13;
  nilai x adalah ...</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:18.2pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Pengetahuan Kuantitatif',
        'question_desc' => '<p class="MTDisplayEquationCxSpFirst" style="margin-left:0in;text-indent:0in"><a name="_Hlk118723106"><span lang="IN" style="font-size:12.0pt;line-height:115%">Semua&#13;
  lingkaran di bawah ini kongruen. Luas total sembilan lingkaran yang kongruen&#13;
  adalah 324π. Persegi melewati pusat delapan lingkaran seperti yang&#13;
  ditunjukkan. Berapakah luas daerah yang diarsir?</span></a></p><p class="MTDisplayEquationCxSpMiddle" style="text-indent:0in"><span lang="IN" style="font-size:12.0pt;line-height:115%"><img border="0" width="113" height="112" id="Picture 16" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image027.jpg" alt="Shape, circle&#10;&#10;Description automatically generated"/></span></p><p class="MTDisplayEquationCxSpMiddle" style="margin-left:18.2pt;text-indent:&#13;&#10;  0in"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MTDisplayEquation" style="margin-left:18.2pt;text-indent:0in"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Pengetahuan Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Diketahui&#13;
  fungsi kuadrat </span><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="121" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image028.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> dengan </span><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="39" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image029.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> memotong sumbu-x di dua titik berbeda. Nilai a yang&#13;
  memenuhi adalah ...</span></p>',
    ),
    array(
        'sub_title' => 'Pengetahuan Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Perhatikan&#13;
  gambar berikut ini!</span></p><p class="MsoListParagraphCxSpFirst" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"><img border="0" width="196" height="151" id="Picture 10" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image030.png" alt="A picture containing antenna&#10;&#10;Description automatically generated"/></span></p><p class="MsoListParagraphCxSpMiddle" style="margin:0in;text-align:justify;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Manakah&#13;
  yang merupakan persamaan yang ekuivalen dengan persamaan yang ada pada&#13;
  grafik, yang mana persamaan tersebut mengidentifikasi titik puncak A sebagai&#13;
  konstanta pada persamaan tersebut?</span></p>',
    ),
    array(
        'sub_title' => 'Pengetahuan Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Fungsi f dan g&#13;
  didefinisikan sebagai berikut:</span></p><p class="MsoListParagraphCxSpFirst" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="138" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image036.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> dan </span><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="90" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image037.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> </span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Misalkan (a, b)&#13;
  dan (c, d) adalah dua titik potong berbeda grafik fungsi f dan g, maka nilai&#13;
  a + d adalah ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Pengetahuan Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Fungsi f dan g&#13;
  didefinisikan sebagai berikut:</span></p><p class="MsoListParagraphCxSpFirst" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:28.35pt;text-align:justify;text-indent:-24.35pt;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="138" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image036.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> dan </span><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="90" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image037.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> </span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:28.35pt;text-align:justify;text-indent:-24.35pt;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:28.35pt;text-align:justify;text-indent:-24.35pt;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.5pt"><img width="128" height="23" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image038.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> = ...</span></p>',
    ),
    array(
        'sub_title' => 'Pengetahuan Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Fungsi f dan g&#13;
  didefinisikan sebagai berikut:</span></p><p class="MsoListParagraphCxSpFirst" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="138" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image036.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> dan </span><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="90" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image037.png"/></span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Luas daerah&#13;
  yang dibatasi oleh grafik fungsi f dan g adalah ...</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:.25in;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Pengetahuan Kuantitatif',
        'question_desc' => '<p class="MTDisplayEquationCxSpFirst" style="margin-left:0in;text-indent:0in"><span lang="IN" style="font-size:12.0pt;line-height:115%">Becca, Calvin, David, and&#13;
  Ellen duduk berjajar secara acak di empat kursi di barisan depan kelas.&#13;
  Peluang bahwa Becca dan Calvin duduk bersebelahan adalah ...</span></p>',
    ),
    array(
        'sub_title' => 'Pengetahuan Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Misalkan </span><span lang="IN" style="font-size:12.0pt;line-height:115%">□</span><span lang="IN" style="font-size:12.0pt;line-height:115%"> dan </span><span lang="IN" style="font-size:12.0pt;line-height:115%">∆ menyatakan operasi penjumlahan&#13;
  (+), pengurangan (</span><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">–), perkalian (</span><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">×</span><span lang="IN" style="font-size:12.0pt;line-height:115%">), atau&#13;
  pembagian (</span><span lang="IN" style="font-size:12.0pt;line-height:115%">÷</span><span lang="IN" style="font-size:12.0pt;line-height:115%">). Jika 4 </span><span lang="IN" style="font-size:12.0pt;line-height:115%">□</span><span lang="IN" style="font-size:12.0pt;line-height:115%"> 1 </span><span lang="IN" style="font-size:12.0pt;line-height:115%">∆</span><span lang="IN" style="font-size:12.0pt;line-height:115%"> 3 &lt; 8, manakah pasangan berikut&#13;
  yang benar untuk (</span><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">□</span><span lang="IN" style="font-size:12.0pt;line-height:115%">, </span><span lang="IN" style="font-size:12.0pt;line-height:115%">∆</span><span lang="IN" style="font-size:12.0pt;line-height:115%">)?</span></p><p class="MsoListParagraphCxSpFirst" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:.25in;text-align:justify;text-indent:-.25in;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">(1)<span style="font:7.0pt &quot;Times New Roman&quot;">   </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(+, </span><span lang="IN" style="font-size:12.0pt;line-height:115%">×</span><span lang="IN" style="font-size:12.0pt;line-height:115%">)</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:.25in;text-align:justify;text-indent:-.25in;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">(2)<span style="font:7.0pt &quot;Times New Roman&quot;">   </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(+, </span><span lang="IN" style="font-size:12.0pt;line-height:115%">÷</span><span lang="IN" style="font-size:12.0pt;line-height:115%">)</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:.25in;text-align:justify;text-indent:-.25in;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">(3)<span style="font:7.0pt &quot;Times New Roman&quot;">   </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(–, </span><span lang="IN" style="font-size:12.0pt;line-height:115%">÷</span><span lang="IN" style="font-size:12.0pt;line-height:115%">)</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:.25in;text-align:justify;text-indent:-.25in;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">(4)<span style="font:7.0pt &quot;Times New Roman&quot;">   </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(</span><span lang="IN" style="font-size:12.0pt;line-height:115%">×</span><span lang="IN" style="font-size:12.0pt;line-height:115%">, </span><span lang="IN" style="font-size:12.0pt;line-height:115%">÷</span><span lang="IN" style="font-size:12.0pt;line-height:115%">)</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:46.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Pengetahuan Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Tabel berikut&#13;
  menyajikan data banyaknya anggota komunitas yang memberikan respons&#13;
  ketertarikan pada dua jenis bahan penambah pedas, yaitu cabai dan merica.</span></p><table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" width="386" style="width:289.25pt;border-collapse:collapse;border:none">&#13;
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
  </table><p class="MsoListParagraphCxSpFirst" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
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
  Pulau A kurang dari 12 km<sup>2</sup>.</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:18.2pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Pengetahuan Kuantitatif',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Perhatikan&#13;
  gambar berikut!</span></p><p class="MsoListParagraphCxSpFirst" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"><img border="0" width="109" height="160" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image050.png"/></span></p><p class="MsoListParagraphCxSpMiddle" style="margin:0in;text-align:justify;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">ABCDE&#13;
  merupakan segi lima beraturan. Berapa volume limas T.ABCDE?</span></p><p class="MsoListParagraphCxSpMiddle" style="margin:0in;text-align:justify;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoListParagraphCxSpMiddle" style="margin:0in;text-align:justify;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Putuskan&#13;
  apakah pernyataan (1) dan (2) berikut cukup untuk menjawab pertanyaan&#13;
  tersebut.</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:18.2pt;text-align:justify;text-indent:-.25in;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">(1)<span style="font:7.0pt &quot;Times New Roman&quot;">   </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">TA =&#13;
  TB = TC = TD = TE = 20</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:18.2pt;text-align:justify;text-indent:-.25in;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">(2)<span style="font:7.0pt &quot;Times New Roman&quot;">   </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Keliling&#13;
  segi lima ABCDE = 50</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:46.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Indonesia',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:0in;margin-top:&#13;&#10;  0in;text-align:justify;text-indent:21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Pola makan memberikan kontribusi&#13;
  yang signifikan terhadap angka kejadian dan kematian akibat kanker di Amerika&#13;
  Serikat. Oleh sebab itu, akhir-akhir ini anjuran gaya hidup dan pola makan&#13;
  sehat sangat digalakkan. Bahkan, The American Center dan The National Center&#13;
  Institute telah mempublikasikan pedoman pola makan untuk orang-orang Amerika,&#13;
  yang intinya lebih mengurangi lemak, serta menaikkan konsumsi serat,&#13;
  buah-buahan dan sayur-sayuran. Penelitian-penelitian mutakhir memusatkan perhatian&#13;
  pada makanan dari soya yang ternyata dapat membantu mencegah kanker payudara.&#13;
  </span></p><p class="MsoNormal" style="margin-bottom:0in;margin-bottom:0in;margin-top:&#13;&#10;  0in;text-align:justify;text-indent:21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Temuan bahwa isoflavon dapat&#13;
  membantu mencegah kanker sangat menarik. Ternyata ditengah bayangan ketakutan&#13;
  akun keganasan kanker payudara, justru ditemukan soya, makanan sederhana yang&#13;
  memiliki potensi luar biasa. Dalam soya terkandung isoflavon, suatu <i>pythoestrogen</i>&#13;
  yang dapat menghambat pertumbuhan sel-sel kanker pada jaringan payudara.&#13;
  Hasil penelitian menunjukkan bahwa dengan mengkonsumsi makanan dari soya,&#13;
  resiko terserang kanker payudara secara langsung menurun 50%.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Kesimpulan dari&#13;
  teks  bacaan di atas adalah ... </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Indonesia',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:0in;margin-top:&#13;&#10;  0in;text-align:justify;text-indent:21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Pola makan memberikan kontribusi&#13;
  yang signifikan terhadap angka kejadian dan kematian akibat kanker di Amerika&#13;
  Serikat. Oleh sebab itu, akhir-akhir ini anjuran gaya hidup dan pola makan&#13;
  sehat sangat digalakkan. Bahkan, The American Center dan The National Center&#13;
  Institute telah mempublikasikan pedoman pola makan untuk orang-orang Amerika,&#13;
  yang intinya lebih mengurangi lemak, serta menaikkan konsumsi serat,&#13;
  buah-buahan dan sayur-sayuran. Penelitian-penelitian mutakhir memusatkan&#13;
  perhatian pada makanan dari soya yang ternyata dapat membantu mencegah kanker&#13;
  payudara. </span></p><p class="MsoNormal" style="margin-bottom:0in;margin-bottom:0in;margin-top:&#13;&#10;  0in;text-align:justify;text-indent:21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Temuan bahwa isoflavon dapat&#13;
  membantu mencegah kanker sangat menarik. Ternyata ditengah bayangan ketakutan&#13;
  akun keganasan kanker payudara, justru ditemukan soya, makanan sederhana yang&#13;
  memiliki potensi luar biasa. Dalam soya terkandung isoflavon, suatu <i>pythoestrogen</i>&#13;
  yang dapat menghambat pertumbuhan sel-sel kanker pada jaringan payudara.&#13;
  Hasil penelitian menunjukkan bahwa dengan mengkonsumsi makanan dari soya,&#13;
  resiko terserang kanker payudara secara langsung menurun 50%.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Berilah tanda&#13;
  centang (√) pada kolom <b>BENAR</b> atau <b>SALAH</b> setiap pernyataan&#13;
  berikut sesuai dengan bacaan.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
        'question_type' => 2
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Indonesia',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><i><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">Culture shock</span></i><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%"> merupakan istilah yang digunakan untuk menggambarkan&#13;
  kondisi terkejut, gelisah, keliru yang dirasakan ketika seseorang bersentuhan&#13;
  dengan kebudayaan lain atau tidak siap menerima kebudayaan baru yang bersifat&#13;
  asing dan datang secara tiba-tiba. Hal ini biasa dialami salah satunya ketika&#13;
  berkunjung atau berlibur ke negara lain. Perbedaan budaya juga suasana&#13;
  terkadang membuat turis mancanegara terkejut saat berkunjung ke Indonesia,&#13;
  salah satunya turis asal Korea Selatan. </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">Orang Indonesia terkenal dengan keramahannya, terbiasa menyapa atau&#13;
  hanya sekedar senyum sekalipun tidak mengenal orang yang dilihatnya. Hal&#13;
  tersebut berbeda dengan orang Korea Selatan. Namun jika dilihat dari&#13;
  kebiasaan berjalan kaki, justru berkebalikan. Mereka bahkan merasa heran&#13;
  dengan banyaknya mobil dan motor pribadi di jalanan Indonesia. Bagi orang&#13;
  Korea Selatan yang tiba di Indonesia, mereka bepergian menggunakan&#13;
  transportasi umum. Adanya area khusus wanita di dalam kereta rel listrik dan&#13;
  transjakarta sedikit membuat mereka terkejut. Meskipun begitu, hal itu malah&#13;
  membuat mereka senang dan nyaman dalam bepergian. Berbicara mengenai kebiasan&#13;
  ketika makan, orang Korea Selatan terbiasa membersihkan sisa makanan setelah&#13;
  selesai makan, seperti membuang bungkus makanan cepat saji atau meringankan&#13;
  pekerjaan pelayanan restoran. Namun mereka merasa heran dengan kebiasaan&#13;
  orang Indonesia yang kerap meninggalkannya begitu saja. Terlebih jika ada&#13;
  makanan yang dimakan menggunakan tangan secara langsung. Mereka lebih memilih&#13;
  memakai sarung tangan plastik. Mereka lebih terbiasa menggunakan sumpit dan&#13;
  sendok ketika makan. Terakhir, kebiasaan menggunakan tisu setelah buang air.&#13;
  Tidak semua toilet umum di Indonesia menyediakan tisu sehingga mereka sedikit&#13;
  merasa aneh. Hal ini karena kebiasaan orang Indonesia menggunakan air setelah&#13;
  buang hajat.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><b><span lang="IN" style="font-size:10.0pt;line-height:115%">Sumber bacaan (dikutip&#13;
  dengan perubahan): </span></b></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN"><a href="https://www.kompasiana.com/dillaaprilliarahmayanti4357/60d48b249b6500168d6cb2c4/kaget-banget-lihat-ini-di-indonesia-culture-shock-yang-dialami-orang-korea-bikin-heran"><span style="font-size:10.0pt;line-height:115%">https://www.kompasiana.com/dillaaprilliarahmayanti4357/60d48b249b6500168d6cb2c4/kaget-banget-lihat-ini-di-indonesia-culture-shock-yang-dialami-orang-korea-bikin-heran</span></a></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Perhatikan&#13;
  matriks tabel berikut ini!</span></p><table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" width="383" style="width:287.2pt;border-collapse:collapse;border:none">&#13;
   <tr>&#13;
    <td width="56" valign="top" style="width:42.3pt;border:solid windowtext 1.0pt;&#13;&#10;    background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpFirst" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%;color:black">Nomor</span></b></p>&#13;
    </td>&#13;
    <td width="156" valign="top" style="width:117.35pt;border:solid windowtext 1.0pt;&#13;&#10;    border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpMiddle" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%;color:black">A</span></b></p>&#13;
    </td>&#13;
    <td width="170" valign="top" style="width:127.55pt;border:solid windowtext 1.0pt;&#13;&#10;    border-left:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpLast" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%;color:black">B</span></b></p>&#13;
    </td>&#13;
   </tr>&#13;
   <tr>&#13;
    <td width="56" valign="top" style="width:42.3pt;border:solid windowtext 1.0pt;&#13;&#10;    border-top:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpFirst" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%;color:black">(1)</span></b></p>&#13;
    </td>&#13;
    <td width="156" valign="top" style="width:117.35pt;border-top:none;border-left:&#13;&#10;    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpMiddle" style="margin:0in;text-align:justify;&#13;&#10;    line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Menggunakan&#13;
    sumpit dan sendok ketika makan</span></p>&#13;
    </td>&#13;
    <td width="170" valign="top" style="width:127.55pt;border-top:none;border-left:&#13;&#10;    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpLast" style="margin:0in;text-align:justify;&#13;&#10;    line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Berjalan&#13;
    kaki</span></p>&#13;
    </td>&#13;
   </tr>&#13;
   <tr>&#13;
    <td width="56" valign="top" style="width:42.3pt;border:solid windowtext 1.0pt;&#13;&#10;    border-top:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpFirst" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%;color:black">(2)</span></b></p>&#13;
    </td>&#13;
    <td width="156" valign="top" style="width:117.35pt;border-top:none;border-left:&#13;&#10;    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpMiddle" style="margin:0in;text-align:justify;&#13;&#10;    line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Ramah,&#13;
    sapa, dan senyum</span></p>&#13;
    </td>&#13;
    <td width="170" valign="top" style="width:127.55pt;border-top:none;border-left:&#13;&#10;    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpLast" style="margin:0in;text-align:justify;&#13;&#10;    line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Menggunakan&#13;
    kendaraan pribadi</span></p>&#13;
    </td>&#13;
   </tr>&#13;
   <tr>&#13;
    <td width="56" valign="top" style="width:42.3pt;border:solid windowtext 1.0pt;&#13;&#10;    border-top:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpFirst" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%;color:black">(3)</span></b></p>&#13;
    </td>&#13;
    <td width="156" valign="top" style="width:117.35pt;border-top:none;border-left:&#13;&#10;    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpMiddle" style="margin:0in;text-align:justify;&#13;&#10;    line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Menggunakan&#13;
    air setelah buang hajat</span></p>&#13;
    </td>&#13;
    <td width="170" valign="top" style="width:127.55pt;border-top:none;border-left:&#13;&#10;    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpLast" style="margin:0in;text-align:justify;&#13;&#10;    line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Membuang&#13;
    sisa bungkus makanan setelah selesai makan </span></p>&#13;
    </td>&#13;
   </tr>&#13;
  </table><p class="MsoListParagraph" style="margin-top:0in;margin-right:0in;margin-bottom:&#13;&#10;  0in;margin-left:28.35pt;text-align:justify;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></b></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Kebiasaan orang&#13;
  Korea Selatan sesuai bacaan di atas dapat ditunjukkan oleh matriks tabel ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Indonesia',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><i><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">Culture shock</span></i><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%"> merupakan istilah yang digunakan untuk menggambarkan&#13;
  kondisi terkejut, gelisah, keliru yang dirasakan ketika seseorang bersentuhan&#13;
  dengan kebudayaan lain atau tidak siap menerima kebudayaan baru yang bersifat&#13;
  asing dan datang secara tiba-tiba. Hal ini biasa dialami salah satunya ketika&#13;
  berkunjung atau berlibur ke negara lain. Perbedaan budaya juga suasana&#13;
  terkadang membuat turis mancanegara terkejut saat berkunjung ke Indonesia,&#13;
  salah satunya turis asal Korea Selatan. </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">Orang Indonesia terkenal dengan keramahannya, terbiasa menyapa atau&#13;
  hanya sekedar senyum sekalipun tidak mengenal orang yang dilihatnya. Hal&#13;
  tersebut berbeda dengan orang Korea Selatan. Namun jika dilihat dari&#13;
  kebiasaan berjalan kaki, justru berkebalikan. Mereka bahkan merasa heran&#13;
  dengan banyaknya mobil dan motor pribadi di jalanan Indonesia. Bagi orang&#13;
  Korea Selatan yang tiba di Indonesia, mereka bepergian menggunakan&#13;
  transportasi umum. Adanya area khusus wanita di dalam kereta rel listrik dan&#13;
  transjakarta sedikit membuat mereka terkejut. Meskipun begitu, hal itu malah&#13;
  membuat mereka senang dan nyaman dalam bepergian. Berbicara mengenai kebiasan&#13;
  ketika makan, orang Korea Selatan terbiasa membersihkan sisa makanan setelah&#13;
  selesai makan, seperti membuang bungkus makanan cepat saji atau meringankan&#13;
  pekerjaan pelayanan restoran. Namun mereka merasa heran dengan kebiasaan&#13;
  orang Indonesia yang kerap meninggalkannya begitu saja. Terlebih jika ada&#13;
  makanan yang dimakan menggunakan tangan secara langsung. Mereka lebih memilih&#13;
  memakai sarung tangan plastik. Mereka lebih terbiasa menggunakan sumpit dan&#13;
  sendok ketika makan. Terakhir, kebiasaan menggunakan tisu setelah buang air.&#13;
  Tidak semua toilet umum di Indonesia menyediakan tisu sehingga mereka sedikit&#13;
  merasa aneh. Hal ini karena kebiasaan orang Indonesia menggunakan air setelah&#13;
  buang hajat.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><b><span lang="IN" style="font-size:10.0pt;line-height:115%">Sumber bacaan (dikutip&#13;
  dengan perubahan): </span></b></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN"><a href="https://www.kompasiana.com/dillaaprilliarahmayanti4357/60d48b249b6500168d6cb2c4/kaget-banget-lihat-ini-di-indonesia-culture-shock-yang-dialami-orang-korea-bikin-heran"><span style="font-size:10.0pt;line-height:115%">https://www.kompasiana.com/dillaaprilliarahmayanti4357/60d48b249b6500168d6cb2c4/kaget-banget-lihat-ini-di-indonesia-culture-shock-yang-dialami-orang-korea-bikin-heran</span></a></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Konsep <i>culture&#13;
  shock</i> sesuai bacaan di atas adalah ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Indonesia',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><i><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">Culture shock</span></i><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%"> merupakan istilah yang digunakan untuk menggambarkan&#13;
  kondisi terkejut, gelisah, keliru yang dirasakan ketika seseorang bersentuhan&#13;
  dengan kebudayaan lain atau tidak siap menerima kebudayaan baru yang bersifat&#13;
  asing dan datang secara tiba-tiba. Hal ini biasa dialami salah satunya ketika&#13;
  berkunjung atau berlibur ke negara lain. Perbedaan budaya juga suasana&#13;
  terkadang membuat turis mancanegara terkejut saat berkunjung ke Indonesia,&#13;
  salah satunya turis asal Korea Selatan. </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">Orang Indonesia terkenal dengan keramahannya, terbiasa menyapa atau&#13;
  hanya sekedar senyum sekalipun tidak mengenal orang yang dilihatnya. Hal&#13;
  tersebut berbeda dengan orang Korea Selatan. Namun jika dilihat dari&#13;
  kebiasaan berjalan kaki, justru berkebalikan. Mereka bahkan merasa heran dengan&#13;
  banyaknya mobil dan motor pribadi di jalanan Indonesia. Bagi orang Korea&#13;
  Selatan yang tiba di Indonesia, mereka bepergian menggunakan transportasi&#13;
  umum. Adanya area khusus wanita di dalam kereta rel listrik dan transjakarta&#13;
  sedikit membuat mereka terkejut. Meskipun begitu, hal itu malah membuat&#13;
  mereka senang dan nyaman dalam bepergian. Berbicara mengenai kebiasan ketika&#13;
  makan, orang Korea Selatan terbiasa membersihkan sisa makanan setelah selesai&#13;
  makan, seperti membuang bungkus makanan cepat saji atau meringankan pekerjaan&#13;
  pelayanan restoran. Namun mereka merasa heran dengan kebiasaan orang&#13;
  Indonesia yang kerap meninggalkannya begitu saja. Terlebih jika ada makanan&#13;
  yang dimakan menggunakan tangan secara langsung. Mereka lebih memilih memakai&#13;
  sarung tangan plastik. Mereka lebih terbiasa menggunakan sumpit dan sendok&#13;
  ketika makan. Terakhir, kebiasaan menggunakan tisu setelah buang air. Tidak&#13;
  semua toilet umum di Indonesia menyediakan tisu sehingga mereka sedikit&#13;
  merasa aneh. Hal ini karena kebiasaan orang Indonesia menggunakan air setelah&#13;
  buang hajat.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><b><span lang="IN" style="font-size:10.0pt;line-height:115%">Sumber bacaan (dikutip&#13;
  dengan perubahan): </span></b></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN"><a href="https://www.kompasiana.com/dillaaprilliarahmayanti4357/60d48b249b6500168d6cb2c4/kaget-banget-lihat-ini-di-indonesia-culture-shock-yang-dialami-orang-korea-bikin-heran"><span style="font-size:10.0pt;line-height:115%">https://www.kompasiana.com/dillaaprilliarahmayanti4357/60d48b249b6500168d6cb2c4/kaget-banget-lihat-ini-di-indonesia-culture-shock-yang-dialami-orang-korea-bikin-heran</span></a></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Perhatikan kata&#13;
  berikut ini!</span></p><p class="MsoListParagraphCxSpFirst" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:21.3pt;text-align:justify;text-indent:-21.3pt;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">(1)<span style="font:7.0pt &quot;Times New Roman&quot;">     </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">keliru</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:21.3pt;text-align:justify;text-indent:-21.3pt;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">(2)<span style="font:7.0pt &quot;Times New Roman&quot;">     </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">terbiasa</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:21.3pt;text-align:justify;text-indent:-21.3pt;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">(3)<span style="font:7.0pt &quot;Times New Roman&quot;">     </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">gelisah</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:21.3pt;text-align:justify;text-indent:-21.3pt;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">(4)<span style="font:7.0pt &quot;Times New Roman&quot;">     </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">terkejut</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><b><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></b></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Kata yang sesuai&#13;
  dengan konsep <i>culture shock</i> sesuai dengan bacaan di atas ditunjukkan&#13;
  oleh nomor ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Indonesia',
        'question_desc' => '<p style="margin:0in;text-align:justify;text-indent:21.25pt;line-height:115%;&#13;&#10;  background:white"><span lang="IN" style="font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  color:black">Untuk menangkal rasa pahit tersebut, tak jarang orang mengonsumsi&#13;
  obat dengan teh manis sebagai pengganti air putih. Padahal, kebiasaan minum&#13;
  obat dengan air teh sangat tidak disarankan. Anda lebih disarankan menenggak&#13;
  obat dengan air putih. Bahaya minum obat dengan teh dapat menyebabkan&#13;
  terjadinya interaksi obat yang tidak diinginkan. Interaksi obat yang dimaksud&#13;
  adalah berkurangnya efektivitas dari obat hingga menimbulkan sejumlah efek&#13;
  samping. </span></p><p style="margin:0in;text-align:justify;text-indent:21.25pt;line-height:115%;&#13;&#10;  background:white"><span lang="IN" style="font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  color:black">Teh adalah minuman yang mengandung senyawa kafein. Kandungan&#13;
  kafein pada teh tidak sebanyak kopi, yakni hanya 25 – 48 mg/237 ml. Jika Anda&#13;
  mengonsumsinya dengan obat, kafein tersebut malah akan menimbulkan gejala&#13;
  jantung berdebar hingga keringat dingin.</span></p><p style="margin:0in;text-align:justify;text-indent:21.25pt;line-height:115%;&#13;&#10;  background:white"><span lang="IN" style="font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  color:black">Pada umumnya, obat-obatan </span><span lang="IN" style="color:black"><a href="https://www.klikdokter.com/penyakit/masalah-pernapasan/asma"><span style="font-family:&quot;Calibri&quot;,sans-serif">asma</span></a></span><span lang="IN" style="font-family:&quot;Calibri&quot;,sans-serif;color:black"> dapat menimbulkan&#13;
  efek samping tersebut bila dikonsumsi bersamaan dengan teh. Selain itu,&#13;
  kafein pada teh dapat mengganggu penyerapan obat yang terjadi di saluran&#13;
  pencernaan. Hal ini terjadi apabila Anda mengonsumsi teh dengan semua&#13;
  obat-obatan, terutama antibiotik, obat untuk gangguan tiroid, dan&#13;
  antidepresan.</span></p><p style="margin:0in;text-align:justify;text-indent:21.25pt;line-height:115%;&#13;&#10;  background:white"><span lang="IN" style="font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  color:black">Obat-obatan jantung yang berfungsi untuk mengatur tekanan darah,&#13;
  juga tidak boleh dikonsumsi dengan teh karena dapat mengurangi efektivitas&#13;
  obat. Penderita anemia dan ibu hamil juga tidak boleh minum obat dengan teh,&#13;
  terutama setelah mengonsumsi tablet Fe (zat besi). Alasannya, senyawa-senyawa&#13;
  pada teh dapat mengganggu penyerapan zat besi pada saluran pencernaan.&#13;
  Kebiasaan ini dapat menyebabkan kondisi kekurangan zat besi.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><b><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></b></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><b><span lang="IN" style="font-size:10.0pt;line-height:115%">Sumber&#13;
  bacaan (dikutip dengan perubahan):  </span></b><span lang="IN"><a href="https://www.klikdokter.com/info-sehat/kesehatan-umum/bolehkah-minum-obat-dengan-teh-manis"><span style="font-size:10.0pt;line-height:115%">https://www.klikdokter.com/info-sehat/kesehatan-umum/bolehkah-minum-obat-dengan-teh-manis</span></a></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Berdasarkan&#13;
  bacaan di atas, seseorang yang </span><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black;background:white">tubuhnya kekurangan sel darah&#13;
  merah </span><span lang="IN" style="font-size:12.0pt;line-height:115%">tidak&#13;
  diperbolehkan minum obat yang mengandung zat besi bersamaan dengan teh,&#13;
  karena ....</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Indonesia',
        'question_desc' => '<p style="margin:0in;text-align:justify;text-indent:21.25pt;line-height:115%;&#13;&#10;  background:white"><span lang="IN" style="font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  color:black">Untuk menangkal rasa pahit tersebut, tak jarang orang&#13;
  mengonsumsi obat dengan teh manis sebagai pengganti air putih. Padahal,&#13;
  kebiasaan minum obat dengan air teh sangat tidak disarankan. Anda lebih&#13;
  disarankan menenggak obat dengan air putih. Bahaya minum obat dengan teh&#13;
  dapat menyebabkan terjadinya interaksi obat yang tidak diinginkan. Interaksi&#13;
  obat yang dimaksud adalah berkurangnya efektivitas dari obat hingga&#13;
  menimbulkan sejumlah efek samping. </span></p><p style="margin:0in;text-align:justify;text-indent:21.25pt;line-height:115%;&#13;&#10;  background:white"><span lang="IN" style="font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  color:black">Teh adalah minuman yang mengandung senyawa kafein. Kandungan&#13;
  kafein pada teh tidak sebanyak kopi, yakni hanya 25 – 48 mg/237 ml. Jika Anda&#13;
  mengonsumsinya dengan obat, kafein tersebut malah akan menimbulkan gejala&#13;
  jantung berdebar hingga keringat dingin.</span></p><p style="margin:0in;text-align:justify;text-indent:21.25pt;line-height:115%;&#13;&#10;  background:white"><span lang="IN" style="font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  color:black">Pada umumnya, obat-obatan </span><span lang="IN" style="color:black"><a href="https://www.klikdokter.com/penyakit/masalah-pernapasan/asma"><span style="font-family:&quot;Calibri&quot;,sans-serif">asma</span></a></span><span lang="IN" style="font-family:&quot;Calibri&quot;,sans-serif;color:black"> dapat menimbulkan&#13;
  efek samping tersebut bila dikonsumsi bersamaan dengan teh. Selain itu,&#13;
  kafein pada teh dapat mengganggu penyerapan obat yang terjadi di saluran&#13;
  pencernaan. Hal ini terjadi apabila Anda mengonsumsi teh dengan semua&#13;
  obat-obatan, terutama antibiotik, obat untuk gangguan tiroid, dan&#13;
  antidepresan.</span></p><p style="margin:0in;text-align:justify;text-indent:21.25pt;line-height:115%;&#13;&#10;  background:white"><span lang="IN" style="font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  color:black">Obat-obatan jantung yang berfungsi untuk mengatur tekanan darah,&#13;
  juga tidak boleh dikonsumsi dengan teh karena dapat mengurangi efektivitas&#13;
  obat. Penderita anemia dan ibu hamil juga tidak boleh minum obat dengan teh,&#13;
  terutama setelah mengonsumsi tablet Fe (zat besi). Alasannya, senyawa-senyawa&#13;
  pada teh dapat mengganggu penyerapan zat besi pada saluran pencernaan. Kebiasaan&#13;
  ini dapat menyebabkan kondisi kekurangan zat besi.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><b><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></b></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><b><span lang="IN" style="font-size:10.0pt;line-height:115%">Sumber&#13;
  bacaan (dikutip dengan perubahan):  </span></b><span lang="IN"><a href="https://www.klikdokter.com/info-sehat/kesehatan-umum/bolehkah-minum-obat-dengan-teh-manis"><span style="font-size:10.0pt;line-height:115%">https://www.klikdokter.com/info-sehat/kesehatan-umum/bolehkah-minum-obat-dengan-teh-manis</span></a></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Berilah tanda&#13;
  centang (√) pada kolom <b>BENAR</b> atau <b>SALAH</b> setiap pernyataan&#13;
  berikut sesuai dengan bacaan.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:10.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span style="font-size:12.0pt;line-height:115%"> </span></p>',
        'question_type' => 2
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Indonesia',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black;background:white">Dilansir dari Live Science, sederhananya,&#13;
  panel surya bekerja dengan memungkinkan foton atau partikel cahaya untuk&#13;
  menjatuhkan elektron bebas dari atom dan menghasilkan aliran listrik. &#13;
  Panel surya sebenarnya terdiri dari banyak unit yang lebih kecil yang disebut&#13;
  sel fotovoltaik. Ini berarti panel surya mengubah sinar matahari menjadi&#13;
  listrik. </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black;background:white">Setiap sel fotovoltaik pada dasarnya&#13;
  terdiri dari dua potong bahan semi-konduktor. Sel fotovoltaik biasanya&#13;
  terbuat dari silikon, bahan yang sama digunakan dalam mikroelektronika. Untuk&#13;
  bekerja, sel fotovoltaik perlu membentuk medan listrik. Sama seperti medan&#13;
  magnet, yang terjadi karena kutub yang berlawanan, medan listrik terjadi&#13;
  ketika muatan yang berlawanan dipisahkan.  Secara khusus, terdapat&#13;
  fosfor ke lapisan atas silikon, yang menambahkan elektron ekstra dengan&#13;
  muatan negatif ke lapisan itu.  Sementara itu, lapisan bawah mendapat&#13;
  dosis boron yang menghasilkan elektron lebih sedikit atau muatan&#13;
  positif. </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black;background:white">Ini semua terjadi hingga medan listrik di&#13;
  persimpangan antara lapisan silikon.  Kemudian, ketika foton sinar&#13;
  matahari membuat elektron bebas, medan listrik akan mendorong elektron keluar&#13;
  dari sambungan silikon. Beberapa komponen lain dari sel mengubah elektron ini&#13;
  menjadi daya yang dapat digunakan. Pelat konduktif logam di sisi sel&#13;
  mengumpulkan elektron dan mentransfernya ke kabel. Pada titik itu, elektron&#13;
  dapat mengalir seperti sumber listrik lainnya. Para peneliti telah&#13;
  menghasilkan sel surya ultra tipis dan fleksibel yang hanya setebal 1,3&#13;
  mikron dan 20 kali lebih ringan dari selembar kertas kantor. Faktanya,&#13;
  sel-selnya sangat ringan, namun dapat menghasilkan energi dengan efisiensi&#13;
  yang hampir sama dengan sel surya berbasis kaca. </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black;&#13;&#10;  background:white">Sel surya yang lebih ringan dan fleksibel seperti ini dapat&#13;
  diintegrasikan ke dalam arsitektur, teknologi kedirgantaraan, atau bahkan&#13;
  elektronik yang dapat dikenakan. Ada jenis lain dari teknologi tenaga surya,&#13;
  termasuk panas matahari dan tenaga surya terkonsentrasi, yang beroperasi&#13;
  dengan cara yang berbeda dari panel surya fotovoltaik, tetapi semuanya&#13;
  memanfaatkan kekuatan sinar matahari untuk menghasilkan energi.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"><br/>&#13;
  </span><b><span lang="IN" style="font-size:10.0pt;line-height:115%">Sumber&#13;
  bacaan (dikutip dengan perubahan):  </span></b><span lang="IN"><a href="https://www.kompas.com/sains/read/2022/04/22/153200123/bagaimana-cara-kerja-panel-surya-?page=all#google_vignette"><span style="font-size:10.0pt;line-height:115%">https://www.kompas.com/sains/read/2022/04/22/153200123/bagaimana-cara-kerja-panel-surya-?page=all#google_vignette</span></a></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Berilah tanda&#13;
  centang (√) pada kolom <b>BENAR</b> atau <b>SALAH</b> setiap pernyataan&#13;
  berikut sesuai dengan bacaan.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
        'question_type' => 2
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Indonesia',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black;background:white">Dilansir dari Live Science, sederhananya,&#13;
  panel surya bekerja dengan memungkinkan foton atau partikel cahaya untuk&#13;
  menjatuhkan elektron bebas dari atom dan menghasilkan aliran listrik. &#13;
  Panel surya sebenarnya terdiri dari banyak unit yang lebih kecil yang disebut&#13;
  sel fotovoltaik. Ini berarti panel surya mengubah sinar matahari menjadi&#13;
  listrik. </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black;background:white">Setiap sel fotovoltaik pada dasarnya&#13;
  terdiri dari dua potong bahan semi-konduktor. Sel fotovoltaik biasanya&#13;
  terbuat dari silikon, bahan yang sama digunakan dalam mikroelektronika. Untuk&#13;
  bekerja, sel fotovoltaik perlu membentuk medan listrik. Sama seperti medan&#13;
  magnet, yang terjadi karena kutub yang berlawanan, medan listrik terjadi&#13;
  ketika muatan yang berlawanan dipisahkan.  Secara khusus, terdapat&#13;
  fosfor ke lapisan atas silikon, yang menambahkan elektron ekstra dengan&#13;
  muatan negatif ke lapisan itu.  Sementara itu, lapisan bawah mendapat&#13;
  dosis boron yang menghasilkan elektron lebih sedikit atau muatan&#13;
  positif. </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black;background:white">Ini semua terjadi hingga medan listrik di&#13;
  persimpangan antara lapisan silikon.  Kemudian, ketika foton sinar&#13;
  matahari membuat elektron bebas, medan listrik akan mendorong elektron keluar&#13;
  dari sambungan silikon. Beberapa komponen lain dari sel mengubah elektron ini&#13;
  menjadi daya yang dapat digunakan. Pelat konduktif logam di sisi sel mengumpulkan&#13;
  elektron dan mentransfernya ke kabel. Pada titik itu, elektron dapat mengalir&#13;
  seperti sumber listrik lainnya. Para peneliti telah menghasilkan sel surya&#13;
  ultra tipis dan fleksibel yang hanya setebal 1,3 mikron dan 20 kali lebih&#13;
  ringan dari selembar kertas kantor. Faktanya, sel-selnya sangat ringan, namun&#13;
  dapat menghasilkan energi dengan efisiensi yang hampir sama dengan sel surya&#13;
  berbasis kaca. </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black;&#13;&#10;  background:white">Sel surya yang lebih ringan dan fleksibel seperti ini dapat&#13;
  diintegrasikan ke dalam arsitektur, teknologi kedirgantaraan, atau bahkan&#13;
  elektronik yang dapat dikenakan. Ada jenis lain dari teknologi tenaga surya,&#13;
  termasuk panas matahari dan tenaga surya terkonsentrasi, yang beroperasi&#13;
  dengan cara yang berbeda dari panel surya fotovoltaik, tetapi semuanya memanfaatkan&#13;
  kekuatan sinar matahari untuk menghasilkan energi.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"><br/>&#13;
  </span><b><span lang="IN" style="font-size:10.0pt;line-height:115%">Sumber&#13;
  bacaan (dikutip dengan perubahan):  </span></b><span lang="IN"><a href="https://www.kompas.com/sains/read/2022/04/22/153200123/bagaimana-cara-kerja-panel-surya-?page=all#google_vignette"><span style="font-size:10.0pt;line-height:115%">https://www.kompas.com/sains/read/2022/04/22/153200123/bagaimana-cara-kerja-panel-surya-?page=all#google_vignette</span></a></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%;background:white"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black;&#13;&#10;  background:white">Berdasarkan bacaan di atas, medan listrik pada sel&#13;
  fotovoltaik terjadi ketika....</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Indonesia',
        'question_desc' => '<p style="margin:0in;text-align:justify;text-indent:21.3pt;line-height:115%;&#13;&#10;  background:white;vertical-align:baseline"><span lang="IN" style="font-family:&#13;&#10;  &quot;Calibri&quot;,sans-serif;color:black">Wajah yang memerah dan perasaan malu adalah&#13;
  dua hal yang saling berkaitan. Keduanya merupakan respon alami dari seseorang&#13;
  yang diatur oleh sistem saraf simpatik. Sistem ini bekerja secara spontan dan&#13;
  tidak bisa diatur. Artinya, tidak ada hal yang harus Anda pikirkan untuk&#13;
  melakukan proses tersebut. Berbeda ketika ingin menggerakkan lengan,&#13;
  misalnya, Anda harus berpikir terlebih dahulu untuk melakukannya.</span></p><p style="margin:0in;text-align:justify;text-indent:21.3pt;line-height:115%;&#13;&#10;  background:white;vertical-align:baseline"><span lang="IN" style="font-family:&#13;&#10;  &quot;Calibri&quot;,sans-serif;color:black">Ketika Anda merasa malu, tubuh akan&#13;
  melepaskan </span><span lang="IN" style="color:black"><a href="https://hellosehat.com/mental/stres/seputar-hormon-stres/"><span style="font-family:&quot;Calibri&quot;,sans-serif">hormon adrenalin</span></a></span><span lang="IN" style="font-family:&quot;Calibri&quot;,sans-serif;color:black">. Hormon ini&#13;
  bertindak sebagai perangsang alami yang memiliki berbagai efek pada tubuh.&#13;
  Peningkatan hormon adrenalin dalam tubuh menyebabkan detak jantung dan&#13;
  pernapasan Anda juga akan meningkat. Selain itu, hormon adrenalin juga&#13;
  menyebabkan </span><span lang="IN" style="color:black"><a href="https://hellosehat.com/saraf/stroke/mengetahui-pembuluh-darah-mana-yang-dipengaruhi-oleh-stroke/"><span style="font-family:&quot;Calibri&quot;,sans-serif">pembuluh darah</span></a></span><span lang="IN" style="font-family:&quot;Calibri&quot;,sans-serif;color:black"> Anda melebar&#13;
  yang meningkatkan sirkulasi darah. Berhubung wajah Anda dipenuhi oleh&#13;
  pembuluh darah kecil, maka peningkatan aliran darah di area tersebut jadi&#13;
  lebih mudah terlihat. Nah, kondisi inilah yang membuat wajah atau pipi Anda&#13;
  merona merah, yang dianggap sebagai reaksi alami dari perasaan malu.</span></p><p style="margin:0in;text-align:justify;text-indent:21.3pt;line-height:115%;&#13;&#10;  background:white;vertical-align:baseline"><span lang="IN" style="font-family:&#13;&#10;  &quot;Calibri&quot;,sans-serif;color:black">Dengan kata lain, hormon adrenalin&#13;
  menyebabkan lebih banyak aliran darah ke pipi sehingga menimbulkan semburat&#13;
  merah di wajah Anda ketika Anda sedang tersipu-sipu malu. Menariknya, ini&#13;
  adalah respon yang tidak biasa dari pembuluh darah vena Anda. Pasalnya, pada&#13;
  daerah lain di tubuh, vena tidak banyak melakukan efek tersebut ketika&#13;
  adrenalin dilepaskan. Ya, hormon adrenalin hanya memiliki pengaruh kecil atau&#13;
  bahkan hormon ini tidak memiliki pengaruh sama sekali terhadap pembuluh darah&#13;
  vena.</span></p><p style="margin:0in;text-align:justify;text-indent:21.3pt;line-height:115%;&#13;&#10;  background:white;vertical-align:baseline"><span lang="IN" style="font-family:&#13;&#10;  &quot;Calibri&quot;,sans-serif;color:black">Jadi, hanya perasaan malu sajalah yang&#13;
  dapat dipicu oleh hormon adrenalin sehingga menyebabkan kemerahan di wajah.&#13;
  Itulah sebabnya, memerahnya wajah ketika sedang merasa malu adalah fenomena&#13;
  yang unik. Secara umum, wajah memerah ketika malu adalah kondisi alami yang&#13;
  terjadi secara spontan dan tidak bisa Anda kendalikan. Meski begitu, kondisi&#13;
  ini umumnya hanya berlangsung sementara serta akan berlalu dengan sendirinya&#13;
  setelah Anda sudah merasa lebih rileks dan dapat mengendalikan diri Anda&#13;
  sendiri.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><b><span lang="IN" style="font-size:10.0pt;line-height:115%">Sumber bacaan (dikutip&#13;
  dengan perubahan):  </span></b><span lang="IN"><a href="https://hellosehat.com/sehat/informasi-kesehatan/pipi-merah-saat-malu/"><span style="font-size:10.0pt;line-height:115%">https://hellosehat.com/sehat/informasi-kesehatan/pipi-merah-saat-malu/</span></a></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Berilah tanda centang&#13;
  (√) pada kolom <b>BENAR</b> atau <b>SALAH</b> setiap pernyataan berikut&#13;
  sesuai dengan bacaan.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Pelepasan&#13;
  hormon adrenalin merupakan respon alami dan tidak bisa diatur.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
        'question_type' => 2
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Indonesia',
        'question_desc' => '<p style="margin:0in;text-align:justify;text-indent:21.3pt;line-height:115%;&#13;&#10;  background:white;vertical-align:baseline"><span lang="IN" style="font-family:&#13;&#10;  &quot;Calibri&quot;,sans-serif;color:black">Wajah yang memerah dan perasaan malu adalah&#13;
  dua hal yang saling berkaitan. Keduanya merupakan respon alami dari seseorang&#13;
  yang diatur oleh sistem saraf simpatik. Sistem ini bekerja secara spontan dan&#13;
  tidak bisa diatur. Artinya, tidak ada hal yang harus Anda pikirkan untuk&#13;
  melakukan proses tersebut. Berbeda ketika ingin menggerakkan lengan,&#13;
  misalnya, Anda harus berpikir terlebih dahulu untuk melakukannya.</span></p><p style="margin:0in;text-align:justify;text-indent:21.3pt;line-height:115%;&#13;&#10;  background:white;vertical-align:baseline"><span lang="IN" style="font-family:&#13;&#10;  &quot;Calibri&quot;,sans-serif;color:black">Ketika Anda merasa malu, tubuh akan&#13;
  melepaskan </span><span lang="IN" style="color:black"><a href="https://hellosehat.com/mental/stres/seputar-hormon-stres/"><span style="font-family:&quot;Calibri&quot;,sans-serif">hormon adrenalin</span></a></span><span lang="IN" style="font-family:&quot;Calibri&quot;,sans-serif;color:black">. Hormon ini&#13;
  bertindak sebagai perangsang alami yang memiliki berbagai efek pada tubuh.&#13;
  Peningkatan hormon adrenalin dalam tubuh menyebabkan detak jantung dan&#13;
  pernapasan Anda juga akan meningkat. Selain itu, hormon adrenalin juga&#13;
  menyebabkan </span><span lang="IN" style="color:black"><a href="https://hellosehat.com/saraf/stroke/mengetahui-pembuluh-darah-mana-yang-dipengaruhi-oleh-stroke/"><span style="font-family:&quot;Calibri&quot;,sans-serif">pembuluh darah</span></a></span><span lang="IN" style="font-family:&quot;Calibri&quot;,sans-serif;color:black"> Anda melebar&#13;
  yang meningkatkan sirkulasi darah. Berhubung wajah Anda dipenuhi oleh&#13;
  pembuluh darah kecil, maka peningkatan aliran darah di area tersebut jadi&#13;
  lebih mudah terlihat. Nah, kondisi inilah yang membuat wajah atau pipi Anda&#13;
  merona merah, yang dianggap sebagai reaksi alami dari perasaan malu.</span></p><p style="margin:0in;text-align:justify;text-indent:21.3pt;line-height:115%;&#13;&#10;  background:white;vertical-align:baseline"><span lang="IN" style="font-family:&#13;&#10;  &quot;Calibri&quot;,sans-serif;color:black">Dengan kata lain, hormon adrenalin&#13;
  menyebabkan lebih banyak aliran darah ke pipi sehingga menimbulkan semburat&#13;
  merah di wajah Anda ketika Anda sedang tersipu-sipu malu. Menariknya, ini&#13;
  adalah respon yang tidak biasa dari pembuluh darah vena Anda. Pasalnya, pada&#13;
  daerah lain di tubuh, vena tidak banyak melakukan efek tersebut ketika&#13;
  adrenalin dilepaskan. Ya, hormon adrenalin hanya memiliki pengaruh kecil atau&#13;
  bahkan hormon ini tidak memiliki pengaruh sama sekali terhadap pembuluh darah&#13;
  vena.</span></p><p style="margin:0in;text-align:justify;text-indent:21.3pt;line-height:115%;&#13;&#10;  background:white;vertical-align:baseline"><span lang="IN" style="font-family:&#13;&#10;  &quot;Calibri&quot;,sans-serif;color:black">Jadi, hanya perasaan malu sajalah yang&#13;
  dapat dipicu oleh hormon adrenalin sehingga menyebabkan kemerahan di wajah.&#13;
  Itulah sebabnya, memerahnya wajah ketika sedang merasa malu adalah fenomena&#13;
  yang unik. Secara umum, wajah memerah ketika malu adalah kondisi alami yang&#13;
  terjadi secara spontan dan tidak bisa Anda kendalikan. Meski begitu, kondisi&#13;
  ini umumnya hanya berlangsung sementara serta akan berlalu dengan sendirinya&#13;
  setelah Anda sudah merasa lebih rileks dan dapat mengendalikan diri Anda&#13;
  sendiri.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><b><span lang="IN" style="font-size:10.0pt;line-height:115%">Sumber bacaan (dikutip&#13;
  dengan perubahan):  </span></b><span lang="IN"><a href="https://hellosehat.com/sehat/informasi-kesehatan/pipi-merah-saat-malu/"><span style="font-size:10.0pt;line-height:115%">https://hellosehat.com/sehat/informasi-kesehatan/pipi-merah-saat-malu/</span></a></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Proses yang&#13;
  terjadi di dalam tubuh akibat pelepasan hormon adrenalin adalah ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Indonesia',
        'question_desc' => '<p style="margin:0in;text-align:justify;text-indent:21.3pt;line-height:115%;&#13;&#10;  background:white;vertical-align:baseline"><span lang="IN" style="font-family:&#13;&#10;  &quot;Calibri&quot;,sans-serif;color:black">Wajah yang memerah dan perasaan malu adalah&#13;
  dua hal yang saling berkaitan. Keduanya merupakan respon alami dari seseorang&#13;
  yang diatur oleh sistem saraf simpatik. Sistem ini bekerja secara spontan dan&#13;
  tidak bisa diatur. Artinya, tidak ada hal yang harus Anda pikirkan untuk&#13;
  melakukan proses tersebut. Berbeda ketika ingin menggerakkan lengan,&#13;
  misalnya, Anda harus berpikir terlebih dahulu untuk melakukannya.</span></p><p style="margin:0in;text-align:justify;text-indent:21.3pt;line-height:115%;&#13;&#10;  background:white;vertical-align:baseline"><span lang="IN" style="font-family:&#13;&#10;  &quot;Calibri&quot;,sans-serif;color:black">Ketika Anda merasa malu, tubuh akan&#13;
  melepaskan </span><span lang="IN" style="color:black"><a href="https://hellosehat.com/mental/stres/seputar-hormon-stres/"><span style="font-family:&quot;Calibri&quot;,sans-serif">hormon adrenalin</span></a></span><span lang="IN" style="font-family:&quot;Calibri&quot;,sans-serif;color:black">. Hormon ini&#13;
  bertindak sebagai perangsang alami yang memiliki berbagai efek pada tubuh.&#13;
  Peningkatan hormon adrenalin dalam tubuh menyebabkan detak jantung dan&#13;
  pernapasan Anda juga akan meningkat. Selain itu, hormon adrenalin juga&#13;
  menyebabkan </span><span lang="IN" style="color:black"><a href="https://hellosehat.com/saraf/stroke/mengetahui-pembuluh-darah-mana-yang-dipengaruhi-oleh-stroke/"><span style="font-family:&quot;Calibri&quot;,sans-serif">pembuluh darah</span></a></span><span lang="IN" style="font-family:&quot;Calibri&quot;,sans-serif;color:black"> Anda melebar&#13;
  yang meningkatkan sirkulasi darah. Berhubung wajah Anda dipenuhi oleh&#13;
  pembuluh darah kecil, maka peningkatan aliran darah di area tersebut jadi&#13;
  lebih mudah terlihat. Nah, kondisi inilah yang membuat wajah atau pipi Anda&#13;
  merona merah, yang dianggap sebagai reaksi alami dari perasaan malu.</span></p><p style="margin:0in;text-align:justify;text-indent:21.3pt;line-height:115%;&#13;&#10;  background:white;vertical-align:baseline"><span lang="IN" style="font-family:&#13;&#10;  &quot;Calibri&quot;,sans-serif;color:black">Dengan kata lain, hormon adrenalin&#13;
  menyebabkan lebih banyak aliran darah ke pipi sehingga menimbulkan semburat&#13;
  merah di wajah Anda ketika Anda sedang tersipu-sipu malu. Menariknya, ini&#13;
  adalah respon yang tidak biasa dari pembuluh darah vena Anda. Pasalnya, pada&#13;
  daerah lain di tubuh, vena tidak banyak melakukan efek tersebut ketika&#13;
  adrenalin dilepaskan. Ya, hormon adrenalin hanya memiliki pengaruh kecil atau&#13;
  bahkan hormon ini tidak memiliki pengaruh sama sekali terhadap pembuluh darah&#13;
  vena.</span></p><p style="margin:0in;text-align:justify;text-indent:21.3pt;line-height:115%;&#13;&#10;  background:white;vertical-align:baseline"><span lang="IN" style="font-family:&#13;&#10;  &quot;Calibri&quot;,sans-serif;color:black">Jadi, hanya perasaan malu sajalah yang&#13;
  dapat dipicu oleh hormon adrenalin sehingga menyebabkan kemerahan di wajah.&#13;
  Itulah sebabnya, memerahnya wajah ketika sedang merasa malu adalah fenomena&#13;
  yang unik. Secara umum, wajah memerah ketika malu adalah kondisi alami yang&#13;
  terjadi secara spontan dan tidak bisa Anda kendalikan. Meski begitu, kondisi&#13;
  ini umumnya hanya berlangsung sementara serta akan berlalu dengan sendirinya&#13;
  setelah Anda sudah merasa lebih rileks dan dapat mengendalikan diri Anda&#13;
  sendiri.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><b><span lang="IN" style="font-size:10.0pt;line-height:115%">Sumber bacaan (dikutip&#13;
  dengan perubahan):  </span></b><span lang="IN"><a href="https://hellosehat.com/sehat/informasi-kesehatan/pipi-merah-saat-malu/"><span style="font-size:10.0pt;line-height:115%">https://hellosehat.com/sehat/informasi-kesehatan/pipi-merah-saat-malu/</span></a></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Dalam bacaan&#13;
  terdapat pernyataan “</span><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">Menariknya, ini adalah respon yang tidak biasa dari pembuluh darah vena&#13;
  Anda</span><span lang="IN" style="font-size:12.0pt;line-height:115%;color:#141414">.”</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Pernyataan&#13;
  berikut ini yang merupakan penjelasan yang tepat atas pernyataan tersebut&#13;
  adalah ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Indonesia',
        'question_desc' => '<p style="margin:0in;text-align:justify;text-indent:21.3pt;line-height:115%;&#13;&#10;  background:white"><span lang="IN" style="font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  color:black">Mengapa </span><span lang="IN" style="color:black"><a href="https://www.okezone.com/tag/tahi-lalat"><span style="font-family:&quot;Calibri&quot;,sans-serif">tahi&#13;
  lalat</span></a></span><span lang="IN" style="font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  color:black"> bisa tumbuh di wajah atau tubuh manusia? Padahal jika&#13;
  dilihat, lalat yang hinggap di area tubuh kita tidak meninggalkan kotoran,&#13;
  bahkan ada tahi lalat yang sudah dimiliki sejak lahir. Menurut sebuah&#13;
  penelitian, setiap orang rata-rata memiliki sekitar 10 hingga 40 buah tahi&#13;
  lalat yang ada di seluruh tubuhnya. Dalam dunia medis, tahi lalat disebut&#13;
  sebagai nevus.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%;background:white"><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%;color:black">Nevus merupakan kata dari bahasa latin&#13;
  yang artinya tanda lahir. Tanda lahir ini yang digunakan untuk membedakan&#13;
  tiap manusia dengan yang lain, dan biasanya tanda lahir dimiliki oleh&#13;
  seseorang sedari dia masih bayi. Tahi lalat terbentuk saat sel-sel melanosit&#13;
  berkumpul dalam satu bagian di area permukaan kulit manusia. Melanosit adalah&#13;
  sel yang membentuk pigmen kulit. Ketika sel melanosit berkumpul, pigmen yang&#13;
  dihasilkan sel ini juga berkumpul dan membentuk warna kulit kita menghitam&#13;
  dari aslinya. Selain itu, banyaknya jumlah tahi lalat di tubuh kita bisa&#13;
  dipengaruhi oleh gen yang diwarisi oleh orang tua secara turun-temurun. Pada&#13;
  umumnya, tahi lalat tidak berbahaya bagi kesehatan, tetapi ada sebagian orang&#13;
  yang kurang percaya diri karena tahi lalat yang mengganggu penampilan.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%;background:white"><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%;color:black">Meskipun tidak berbahaya, ternyata tahi&#13;
  lalat dapat berkembang menjadi penyakit atau menandakan bahwa kulit kita&#13;
  rentan terserang kanker kulit melanoma. Kanker kulit ini berasal dari sel&#13;
  melanosit, yang dapat tumbuh di dalam atau di sekitar tahi lalat yang kita&#13;
  miliki. Penampilan tahi lalat melanoma bentuknya tidak simetris, tepiannya&#13;
  agak kasar dan tidak rata, dan umumnya terdiri dari warna yang berbeda, bisa&#13;
  dua atau tiga warna. Sedangkan diemeternya lebih besar dari biasanya. Jika&#13;
  tahi lalat bertumbuh secara normal, hal ini tidak memerlukan diagnosis&#13;
  apapun. Akan tetapi, jika tahi lalat menunjukkan tanda yang aneh, segera&#13;
  lakukan pemeriksaan ke dokter. Jika curiga adanya kanker kulit melanona, dokter&#13;
  akan melalukan biopsi atau prosedur pengambilan sampel jaringan untuk&#13;
  diperiksa lebih lanjut.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><b><span lang="IN" style="font-size:10.0pt;line-height:&#13;&#10;  115%;color:black">Sumber bacaan (dikutip dengan perubahan):  </span></b><span lang="IN" style="color:black"><a href="https://techno.okezone.com/read/2022/12/08/56/2722959/bagaimana-tahi-lalat-manusia-bisa-terbentuk-ini-menurut-sains"><span style="font-size:10.0pt;line-height:115%">https://techno.okezone.com/read/2022/12/08/56/2722959/bagaimana-tahi-lalat-manusia-bisa-terbentuk-ini-menurut-sains</span></a></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Terbentuknya&#13;
  tahi lalat di kulit disebabkan oleh hal-hal berikut ini, <i>kecuali</i> ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Indonesia',
        'question_desc' => '<p style="margin:0in;text-align:justify;text-indent:21.3pt;line-height:115%;&#13;&#10;  background:white"><span lang="IN" style="font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  color:black">Mengapa </span><span lang="IN" style="color:black"><a href="https://www.okezone.com/tag/tahi-lalat"><span style="font-family:&quot;Calibri&quot;,sans-serif">tahi&#13;
  lalat</span></a></span><span lang="IN" style="font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  color:black"> bisa tumbuh di wajah atau tubuh manusia? Padahal jika dilihat,&#13;
  lalat yang hinggap di area tubuh kita tidak meninggalkan kotoran, bahkan ada&#13;
  tahi lalat yang sudah dimiliki sejak lahir. Menurut sebuah penelitian, setiap&#13;
  orang rata-rata memiliki sekitar 10 hingga 40 buah tahi lalat yang ada di&#13;
  seluruh tubuhnya. Dalam dunia medis, tahi lalat disebut sebagai nevus.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%;background:white"><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%;color:black">Nevus merupakan kata dari bahasa latin&#13;
  yang artinya tanda lahir. Tanda lahir ini yang digunakan untuk membedakan&#13;
  tiap manusia dengan yang lain, dan biasanya tanda lahir dimiliki oleh&#13;
  seseorang sedari dia masih bayi. Tahi lalat terbentuk saat sel-sel melanosit&#13;
  berkumpul dalam satu bagian di area permukaan kulit manusia. Melanosit adalah&#13;
  sel yang membentuk pigmen kulit. Ketika sel melanosit berkumpul, pigmen yang&#13;
  dihasilkan sel ini juga berkumpul dan membentuk warna kulit kita menghitam&#13;
  dari aslinya. Selain itu, banyaknya jumlah tahi lalat di tubuh kita bisa&#13;
  dipengaruhi oleh gen yang diwarisi oleh orang tua secara turun-temurun. Pada&#13;
  umumnya, tahi lalat tidak berbahaya bagi kesehatan, tetapi ada sebagian orang&#13;
  yang kurang percaya diri karena tahi lalat yang mengganggu penampilan.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%;background:white"><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%;color:black">Meskipun tidak berbahaya, ternyata tahi&#13;
  lalat dapat berkembang menjadi penyakit atau menandakan bahwa kulit kita&#13;
  rentan terserang kanker kulit melanoma. Kanker kulit ini berasal dari sel&#13;
  melanosit, yang dapat tumbuh di dalam atau di sekitar tahi lalat yang kita&#13;
  miliki. Penampilan tahi lalat melanoma bentuknya tidak simetris, tepiannya&#13;
  agak kasar dan tidak rata, dan umumnya terdiri dari warna yang berbeda, bisa&#13;
  dua atau tiga warna. Sedangkan diemeternya lebih besar dari biasanya. Jika&#13;
  tahi lalat bertumbuh secara normal, hal ini tidak memerlukan diagnosis&#13;
  apapun. Akan tetapi, jika tahi lalat menunjukkan tanda yang aneh, segera&#13;
  lakukan pemeriksaan ke dokter. Jika curiga adanya kanker kulit melanona,&#13;
  dokter akan melalukan biopsi atau prosedur pengambilan sampel jaringan untuk&#13;
  diperiksa lebih lanjut.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><b><span lang="IN" style="font-size:10.0pt;line-height:&#13;&#10;  115%;color:black">Sumber bacaan (dikutip dengan perubahan):  </span></b><span lang="IN" style="color:black"><a href="https://techno.okezone.com/read/2022/12/08/56/2722959/bagaimana-tahi-lalat-manusia-bisa-terbentuk-ini-menurut-sains"><span style="font-size:10.0pt;line-height:115%">https://techno.okezone.com/read/2022/12/08/56/2722959/bagaimana-tahi-lalat-manusia-bisa-terbentuk-ini-menurut-sains</span></a></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Berilah tanda&#13;
  centang (√) pada kolom <b>BENAR</b> atau <b>SALAH</b> setiap pernyataan&#13;
  berikut sesuai dengan bacaan.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Sel-sel&#13;
  melanosit yang tumbuh tersebar pada kulit dapat membentuk tahi lalat</span><span style="font-size:12.0pt;line-height:115%">.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
        'question_type' => 2
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Indonesia',
        'question_desc' => '<p style="margin:0in;text-align:justify;text-indent:21.3pt;line-height:115%;&#13;&#10;  background:white"><span lang="IN" style="font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  color:black">Mengapa </span><span lang="IN" style="color:black"><a href="https://www.okezone.com/tag/tahi-lalat"><span style="font-family:&quot;Calibri&quot;,sans-serif">tahi&#13;
  lalat</span></a></span><span lang="IN" style="font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  color:black"> bisa tumbuh di wajah atau tubuh manusia? Padahal jika&#13;
  dilihat, lalat yang hinggap di area tubuh kita tidak meninggalkan kotoran,&#13;
  bahkan ada tahi lalat yang sudah dimiliki sejak lahir. Menurut sebuah&#13;
  penelitian, setiap orang rata-rata memiliki sekitar 10 hingga 40 buah tahi&#13;
  lalat yang ada di seluruh tubuhnya. Dalam dunia medis, tahi lalat disebut&#13;
  sebagai nevus.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%;background:white"><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%;color:black">Nevus merupakan kata dari bahasa latin&#13;
  yang artinya tanda lahir. Tanda lahir ini yang digunakan untuk membedakan&#13;
  tiap manusia dengan yang lain, dan biasanya tanda lahir dimiliki oleh&#13;
  seseorang sedari dia masih bayi. Tahi lalat terbentuk saat sel-sel melanosit&#13;
  berkumpul dalam satu bagian di area permukaan kulit manusia. Melanosit adalah&#13;
  sel yang membentuk pigmen kulit. Ketika sel melanosit berkumpul, pigmen yang&#13;
  dihasilkan sel ini juga berkumpul dan membentuk warna kulit kita menghitam&#13;
  dari aslinya. Selain itu, banyaknya jumlah tahi lalat di tubuh kita bisa&#13;
  dipengaruhi oleh gen yang diwarisi oleh orang tua secara turun-temurun. Pada&#13;
  umumnya, tahi lalat tidak berbahaya bagi kesehatan, tetapi ada sebagian orang&#13;
  yang kurang percaya diri karena tahi lalat yang mengganggu penampilan.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%;background:white"><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%;color:black">Meskipun tidak berbahaya, ternyata tahi&#13;
  lalat dapat berkembang menjadi penyakit atau menandakan bahwa kulit kita&#13;
  rentan terserang kanker kulit melanoma. Kanker kulit ini berasal dari sel&#13;
  melanosit, yang dapat tumbuh di dalam atau di sekitar tahi lalat yang kita&#13;
  miliki. Penampilan tahi lalat melanoma bentuknya tidak simetris, tepiannya&#13;
  agak kasar dan tidak rata, dan umumnya terdiri dari warna yang berbeda, bisa&#13;
  dua atau tiga warna. Sedangkan diemeternya lebih besar dari biasanya. Jika&#13;
  tahi lalat bertumbuh secara normal, hal ini tidak memerlukan diagnosis&#13;
  apapun. Akan tetapi, jika tahi lalat menunjukkan tanda yang aneh, segera&#13;
  lakukan pemeriksaan ke dokter. Jika curiga adanya kanker kulit melanona,&#13;
  dokter akan melalukan biopsi atau prosedur pengambilan sampel jaringan untuk&#13;
  diperiksa lebih lanjut.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%;background:white"><b><span lang="IN" style="font-size:10.0pt;line-height:&#13;&#10;  115%;color:black">Sumber bacaan (dikutip dengan perubahan):  </span></b><span lang="IN" style="color:black"><a href="https://techno.okezone.com/read/2022/12/08/56/2722959/bagaimana-tahi-lalat-manusia-bisa-terbentuk-ini-menurut-sains"><span style="font-size:10.0pt;line-height:115%">https://techno.okezone.com/read/2022/12/08/56/2722959/bagaimana-tahi-lalat-manusia-bisa-terbentuk-ini-menurut-sains</span></a></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Berikut ini&#13;
  yang merupakan beberapa ciri dari tahi lalat yang perlu diwaspadai merupakan&#13;
  tanda awal kanker melanoma berdasarkan bacaan di atas adalah ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Indonesia',
        'question_desc' => '<p style="margin:0in;text-align:justify;text-indent:21.3pt;line-height:115%;&#13;&#10;  background:white"><span lang="IN" style="font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  color:black">Kabar soal rencana mengganti Rp1.000 jadi Rp1 sudah lama&#13;
  berembus, bahkan sudah menjadi Rancangan Undang-Undang (RUU), namun hingga&#13;
  saat ini belum ada kelanjutan mengenai redenominasi Rupiah. RUU Redenominasi&#13;
  Rupiah telah dimasukkan dalam rencana jangka menengah oleh Menteri Keuangan&#13;
  Sri Mulyani. Setidaknya ada dua alasan mengapa penyederhanaan nilai mata uang&#13;
  harus dilakukan. Pertama, untuk menciptakan efisiensi berupa percepatan waktu&#13;
  transaksi, berkurangnya risiko <em><span style="font-family:&quot;Calibri&quot;,sans-serif">human&#13;
  error</span></em>, dan efisiensi pencantuman harga karena sederhananya jumlah&#13;
  digit rupiah. Lebih lanjut Sri Mulyani&#13;
  menjelaskan, redenominasi rupiah bisa menyederhanakan sistem&#13;
  transaksi, akuntansi, dan pelaporan Anggaran Pendapatan Belanja Negara&#13;
  (APBN). </span></p><p style="margin:0in;text-align:justify;text-indent:21.3pt;line-height:115%;&#13;&#10;  background:white"><span lang="IN" style="font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  color:black">Dalam kajian Bank Indonesia (BI) dijelaskan, redenominasi&#13;
  bukanlah sanering atau pemotongan daya beli masyarakat melalui pemotongan&#13;
  nilai uang. Redenominasi biasanya dilakukan dalam kondisi ekonomi yang stabil&#13;
  dan menuju ke arah yang lebih sehat. Sedangkan sanering adalah pemotongan&#13;
  uang dalam kondisi perekonomian yang tidak sehat, di mana yang dipotong hanya&#13;
  nilai uangnya. Dalam redenominasi, baik nilai uang maupun barang, hanya&#13;
  dihilangkan beberapa angka nolnya saja. Dengan demikian, redenominasi akan&#13;
  menyederhanakan penulisan nilai barang dan jasa yang diikuti pula&#13;
  penyederhanaan penulisan uang. BI memandang bahwa keberhasilan redenominasi&#13;
  sangat ditentukan oleh berbagai hal yang saat ini sedang dikaji sebagaimana&#13;
  yang telah dilakukan oleh beberapa negara yang berhasil melakukannya.&#13;
  Redenominasi tersebut biasanya dilakukan di saat ekspektasi inflasi berada di&#13;
  kisaran rendah dan pergerakannya stabil, stabilitas perekonomian terjaga, dan&#13;
  ada jaminan terhadap stabilitas harga serta adanya kesiapan masyarakat.</span></p><p style="margin:0in;line-height:115%;background:white"><span lang="IN" style="font-family:&quot;Calibri&quot;,sans-serif;color:black"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><b><span lang="IN" style="font-size:10.0pt;line-height:115%">Sumber&#13;
  bacaan (dikutip dengan perubahan):</span></b><span lang="IN" style="font-size:&#13;&#10;  10.0pt;line-height:115%"> </span><span lang="IN"><a href="https://www.cnbcindonesia.com/news/20220904135416-4-369141/simak-perkembangan-terakhir-soal-rencana-rp-1000-jadi-rp-1"><span style="font-size:10.0pt;line-height:115%">https://www.cnbcindonesia.com/news/20220904135416-4-369141/simak-perkembangan-terakhir-soal-rencana-rp-1000-jadi-rp-1</span></a></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Berilah tanda&#13;
  centang (√) pada kolom <b>BENAR</b> atau <b>SALAH </b>pada setiap pernyataan&#13;
  berikut sesuai dengan bacaan.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-top:0in;margin-right:0in;margin-bottom:0in;&#13;&#10;  margin-left:3.2pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
        'question_type' => 2
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Indonesia',
        'question_desc' => '<p style="margin:0in;text-align:justify;text-indent:21.3pt;line-height:115%;&#13;&#10;  background:white"><span lang="IN" style="font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  color:black">Kabar soal rencana mengganti Rp1.000 jadi Rp1 sudah lama&#13;
  berembus, bahkan sudah menjadi Rancangan Undang-Undang (RUU), namun hingga&#13;
  saat ini belum ada kelanjutan mengenai redenominasi Rupiah. RUU Redenominasi&#13;
  Rupiah telah dimasukkan dalam rencana jangka menengah oleh Menteri Keuangan&#13;
  Sri Mulyani. Setidaknya ada dua alasan mengapa penyederhanaan nilai mata uang&#13;
  harus dilakukan. Pertama, untuk menciptakan efisiensi berupa percepatan waktu&#13;
  transaksi, berkurangnya risiko <em><span style="font-family:&quot;Calibri&quot;,sans-serif">human&#13;
  error</span></em>, dan efisiensi pencantuman harga karena sederhananya jumlah&#13;
  digit rupiah. Lebih lanjut Sri Mulyani&#13;
  menjelaskan, redenominasi rupiah bisa menyederhanakan sistem&#13;
  transaksi, akuntansi, dan pelaporan Anggaran Pendapatan Belanja Negara&#13;
  (APBN). </span></p><p style="margin:0in;text-align:justify;text-indent:21.3pt;line-height:115%;&#13;&#10;  background:white"><span lang="IN" style="font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  color:black">Dalam kajian Bank Indonesia (BI) dijelaskan, redenominasi&#13;
  bukanlah sanering atau pemotongan daya beli masyarakat melalui pemotongan&#13;
  nilai uang. Redenominasi biasanya dilakukan dalam kondisi ekonomi yang stabil&#13;
  dan menuju ke arah yang lebih sehat. Sedangkan sanering adalah pemotongan&#13;
  uang dalam kondisi perekonomian yang tidak sehat, di mana yang dipotong hanya&#13;
  nilai uangnya. Dalam redenominasi, baik nilai uang maupun barang, hanya&#13;
  dihilangkan beberapa angka nolnya saja. Dengan demikian, redenominasi akan&#13;
  menyederhanakan penulisan nilai barang dan jasa yang diikuti pula&#13;
  penyederhanaan penulisan uang. BI memandang bahwa keberhasilan redenominasi&#13;
  sangat ditentukan oleh berbagai hal yang saat ini sedang dikaji sebagaimana&#13;
  yang telah dilakukan oleh beberapa negara yang berhasil melakukannya.&#13;
  Redenominasi tersebut biasanya dilakukan di saat ekspektasi inflasi berada di&#13;
  kisaran rendah dan pergerakannya stabil, stabilitas perekonomian terjaga, dan&#13;
  ada jaminan terhadap stabilitas harga serta adanya kesiapan masyarakat.</span></p><p style="margin:0in;line-height:115%;background:white"><span lang="IN" style="font-family:&quot;Calibri&quot;,sans-serif;color:black"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><b><span lang="IN" style="font-size:10.0pt;line-height:115%">Sumber&#13;
  bacaan (dikutip dengan perubahan):</span></b><span lang="IN" style="font-size:&#13;&#10;  10.0pt;line-height:115%"> </span><span lang="IN"><a href="https://www.cnbcindonesia.com/news/20220904135416-4-369141/simak-perkembangan-terakhir-soal-rencana-rp-1000-jadi-rp-1"><span style="font-size:10.0pt;line-height:115%">https://www.cnbcindonesia.com/news/20220904135416-4-369141/simak-perkembangan-terakhir-soal-rencana-rp-1000-jadi-rp-1</span></a></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Perhatikan&#13;
  pernyataan berikut ini!</span></p><p class="MsoListParagraphCxSpFirst" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:24.5pt;text-align:justify;text-indent:-21.3pt;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">(1)<span style="font:7.0pt &quot;Times New Roman&quot;">      </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Penyerdehanaan&#13;
  digit nilai mata uang</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:24.5pt;text-align:justify;text-indent:-21.3pt;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">(2)<span style="font:7.0pt &quot;Times New Roman&quot;">      </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Minimalisasi&#13;
  kelalaian manusia</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:24.5pt;text-align:justify;text-indent:-21.3pt;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">(3)<span style="font:7.0pt &quot;Times New Roman&quot;">      </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Penyederhanaan&#13;
  sistem yang berkaitan dengan APBN</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:24.5pt;text-align:justify;text-indent:-21.3pt;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">(4)<span style="font:7.0pt &quot;Times New Roman&quot;">      </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Akselerasi&#13;
  waktu transaksi</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:46.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Alasan yang&#13;
  mendasari perlunya redenominasi dilakukan sesuai bacaan di atas ditunjukkan&#13;
  oleh pernyataan nomor ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Indonesia',
        'question_desc' => '<p style="margin:0in;text-align:justify;text-indent:21.3pt;line-height:115%;&#13;&#10;  background:white"><span lang="IN" style="font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  color:black">Kabar soal rencana mengganti Rp1.000 jadi Rp1 sudah lama berembus,&#13;
  bahkan sudah menjadi Rancangan Undang-Undang (RUU), namun hingga saat ini&#13;
  belum ada kelanjutan mengenai redenominasi Rupiah. RUU Redenominasi Rupiah&#13;
  telah dimasukkan dalam rencana jangka menengah oleh Menteri Keuangan Sri&#13;
  Mulyani. Setidaknya ada dua alasan mengapa penyederhanaan nilai mata uang&#13;
  harus dilakukan. Pertama, untuk menciptakan efisiensi berupa percepatan waktu&#13;
  transaksi, berkurangnya risiko <em><span style="font-family:&quot;Calibri&quot;,sans-serif">human&#13;
  error</span></em>, dan efisiensi pencantuman harga karena sederhananya jumlah&#13;
  digit rupiah. Lebih lanjut Sri Mulyani&#13;
  menjelaskan, redenominasi rupiah bisa menyederhanakan sistem&#13;
  transaksi, akuntansi, dan pelaporan Anggaran Pendapatan Belanja Negara&#13;
  (APBN). </span></p><p style="margin:0in;text-align:justify;text-indent:21.3pt;line-height:115%;&#13;&#10;  background:white"><span lang="IN" style="font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  color:black">Dalam kajian Bank Indonesia (BI) dijelaskan, redenominasi&#13;
  bukanlah sanering atau pemotongan daya beli masyarakat melalui pemotongan&#13;
  nilai uang. Redenominasi biasanya dilakukan dalam kondisi ekonomi yang stabil&#13;
  dan menuju ke arah yang lebih sehat. Sedangkan sanering adalah pemotongan&#13;
  uang dalam kondisi perekonomian yang tidak sehat, di mana yang dipotong hanya&#13;
  nilai uangnya. Dalam redenominasi, baik nilai uang maupun barang, hanya&#13;
  dihilangkan beberapa angka nolnya saja. Dengan demikian, redenominasi akan&#13;
  menyederhanakan penulisan nilai barang dan jasa yang diikuti pula&#13;
  penyederhanaan penulisan uang. BI memandang bahwa keberhasilan redenominasi&#13;
  sangat ditentukan oleh berbagai hal yang saat ini sedang dikaji sebagaimana&#13;
  yang telah dilakukan oleh beberapa negara yang berhasil melakukannya.&#13;
  Redenominasi tersebut biasanya dilakukan di saat ekspektasi inflasi berada di&#13;
  kisaran rendah dan pergerakannya stabil, stabilitas perekonomian terjaga, dan&#13;
  ada jaminan terhadap stabilitas harga serta adanya kesiapan masyarakat.</span></p><p style="margin:0in;line-height:115%;background:white"><span lang="IN" style="font-family:&quot;Calibri&quot;,sans-serif;color:black"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><b><span lang="IN" style="font-size:10.0pt;line-height:115%">Sumber&#13;
  bacaan (dikutip dengan perubahan):</span></b><span lang="IN" style="font-size:&#13;&#10;  10.0pt;line-height:115%"> </span><span lang="IN"><a href="https://www.cnbcindonesia.com/news/20220904135416-4-369141/simak-perkembangan-terakhir-soal-rencana-rp-1000-jadi-rp-1"><span style="font-size:10.0pt;line-height:115%">https://www.cnbcindonesia.com/news/20220904135416-4-369141/simak-perkembangan-terakhir-soal-rencana-rp-1000-jadi-rp-1</span></a></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Berilah tanda centang (√) pada <b>dua&#13;
  pernyataan </b>di bawah ini yang sesuai dengan bacaan di atas!</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span style="font-size:12.0pt;line-height:115%"> </span></p>',
        'question_type' => 1
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Indonesia',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:0in;margin-top:&#13;&#10;  0in;text-align:justify;text-indent:21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black;background:white">Para&#13;
  ilmuwan Jepang berhasil menemukan spesies bakteri pemakan plastik pada tahun&#13;
  2016. Hal ini tentu menjadi penemuan yang luar biasa karena berpotensi dapat&#13;
  membantu mengatasi permasalahan sampah plastik global. Dalam studi yang&#13;
  dipublikasikan di jurnal Science pada 11 Maret 2016, tim ilmuwan&#13;
  mengungkapkan bahwa bakteri itu ditemukannya ketika mengumpulkan botol&#13;
  plastik di luar fasilitas daur ulang. Umumnya, bakteri menghabiskan waktu&#13;
  mereka untuk menyerap bahan organik mati, tetapi bakteri yang dinamai <i>Ideonella&#13;
  sakaiensis</i> justru dapat "memakan" jenis plastik tertentu, yakni&#13;
  polietilen tereftalat (PET). Setelah menganalisisnya, para ilmuwan menemukan&#13;
  bahwa bakteri tersebut menghasilkan enzim pencernaan yang disebut hidrolisis&#13;
  PET atau PETase. Dilansir dari Live Science, enzim ini berinteraksi dengan&#13;
  plastik PET, kemudian memecah rantai molekul panjang menjadi rantai yang&#13;
  lebih pendek (monomer), yaitu asam tereftalat dan etilen glikol. Monomer ini&#13;
  dipecah lagi untuk melepaskan sebagai energi pertumbuhan bakteri.</span></p><p class="MsoNormal" style="margin-bottom:0in;margin-bottom:0in;margin-top:&#13;&#10;  0in;text-align:justify;text-indent:21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black;background:white">Tak&#13;
  lama setelah penemuan bakteri pemakan plastik, sejumlah ilmuwan turut&#13;
  melakukan eksperimen menggunakan <i>Ideonella sakaiensis</i> untuk&#13;
  meningkatkan efisiensinya. Salah satu uji coba yang dilakukan mereka adalah&#13;
  merekayasa genetika bakteri dalam memproduksi enzim seperti <i>E.coli</i>,&#13;
  lalu mengubahnya menjadi pabrik PETase. Kendati penemuan ini menawarkan&#13;
  harapan untuk mengatasi sampah plastik di dunia yang sudah melebihi&#13;
  kapasitas, para ilmuwan mengingatkan bahwa masih butuh banyak waktu untuk&#13;
  pemanfaatan bakteri secara luas. Selain itu, mereka menggarisbawahi enzim&#13;
  PETase sejauh ini hanya mampu menguraikan plastik PET. Sementara itu, ada&#13;
  enam jenis plastik lainnya yang belum bisa diuraikan dengan menggunakan enzim&#13;
  tersebut. Menyusul eksperimen bakteri pemakan plastik itu, para peneliti di&#13;
  University of Portsmouth juga merekayasa ulang enzim PETase untuk membuat&#13;
  enzim "koktail" yang diklaim dapat mencerna plastik hingga enam&#13;
  kali lebih cepat.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><b><span lang="IN" style="font-size:10.0pt;line-height:115%">Sumber&#13;
  bacaan (dikutip dengan perubahan): </span></b><span lang="IN"><a href="https://www.kompas.com/sains/read/2022/03/25/080100923/ilmuwan-temukan-bakteri-pemakan-plastik-mungkinkah-jadi-solusi-atasi?page=all#:~:text=Umumnya%2C%20bakteri%20menghabiskan%20waktu%20mereka,yakni%20polietilen%20tereftalat%20(PET)"><span style="font-size:10.0pt;line-height:115%">https://www.kompas.com/sains/read/2022/03/25/080100923/ilmuwan-temukan-bakteri-pemakan-plastik-mungkinkah-jadi-solusi-atasi?page=all#:~:text=Umumnya%2C%20bakteri%20menghabiskan%20waktu%20mereka,yakni%20polietilen%20tereftalat%20(PET)</span></a></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Kesimpulan dari&#13;
  teks  bacaan di atas adalah ... </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Indonesia',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;margin-bottom:0in;margin-top:&#13;&#10;  0in;text-align:justify;text-indent:21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black;background:white">Para&#13;
  ilmuwan Jepang berhasil menemukan spesies bakteri pemakan plastik pada tahun&#13;
  2016. Hal ini tentu menjadi penemuan yang luar biasa karena berpotensi dapat&#13;
  membantu mengatasi permasalahan sampah plastik global. Dalam studi yang&#13;
  dipublikasikan di jurnal Science pada 11 Maret 2016, tim ilmuwan&#13;
  mengungkapkan bahwa bakteri itu ditemukannya ketika mengumpulkan botol&#13;
  plastik di luar fasilitas daur ulang. Umumnya, bakteri menghabiskan waktu&#13;
  mereka untuk menyerap bahan organik mati, tetapi bakteri yang dinamai <i>Ideonella&#13;
  sakaiensis</i> justru dapat "memakan" jenis plastik tertentu, yakni&#13;
  polietilen tereftalat (PET). Setelah menganalisisnya, para ilmuwan menemukan&#13;
  bahwa bakteri tersebut menghasilkan enzim pencernaan yang disebut hidrolisis&#13;
  PET atau PETase. Dilansir dari Live Science, enzim ini berinteraksi dengan&#13;
  plastik PET, kemudian memecah rantai molekul panjang menjadi rantai yang&#13;
  lebih pendek (monomer), yaitu asam tereftalat dan etilen glikol. Monomer ini&#13;
  dipecah lagi untuk melepaskan sebagai energi pertumbuhan bakteri.</span></p><p class="MsoNormal" style="margin-bottom:0in;margin-bottom:0in;margin-top:&#13;&#10;  0in;text-align:justify;text-indent:21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black;background:white">Tak&#13;
  lama setelah penemuan bakteri pemakan plastik, sejumlah ilmuwan turut&#13;
  melakukan eksperimen menggunakan <i>Ideonella sakaiensis</i> untuk&#13;
  meningkatkan efisiensinya. Salah satu uji coba yang dilakukan mereka adalah&#13;
  merekayasa genetika bakteri dalam memproduksi enzim seperti <i>E.coli</i>,&#13;
  lalu mengubahnya menjadi pabrik PETase. Kendati penemuan ini menawarkan&#13;
  harapan untuk mengatasi sampah plastik di dunia yang sudah melebihi&#13;
  kapasitas, para ilmuwan mengingatkan bahwa masih butuh banyak waktu untuk&#13;
  pemanfaatan bakteri secara luas. Selain itu, mereka menggarisbawahi enzim&#13;
  PETase sejauh ini hanya mampu menguraikan plastik PET. Sementara itu, ada&#13;
  enam jenis plastik lainnya yang belum bisa diuraikan dengan menggunakan enzim&#13;
  tersebut. Menyusul eksperimen bakteri pemakan plastik itu, para peneliti di&#13;
  University of Portsmouth juga merekayasa ulang enzim PETase untuk membuat&#13;
  enzim "koktail" yang diklaim dapat mencerna plastik hingga enam&#13;
  kali lebih cepat.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><b><span lang="IN" style="font-size:10.0pt;line-height:115%">Sumber&#13;
  bacaan (dikutip dengan perubahan): </span></b><span lang="IN"><a href="https://www.kompas.com/sains/read/2022/03/25/080100923/ilmuwan-temukan-bakteri-pemakan-plastik-mungkinkah-jadi-solusi-atasi?page=all#:~:text=Umumnya%2C%20bakteri%20menghabiskan%20waktu%20mereka,yakni%20polietilen%20tereftalat%20(PET)"><span style="font-size:10.0pt;line-height:115%">https://www.kompas.com/sains/read/2022/03/25/080100923/ilmuwan-temukan-bakteri-pemakan-plastik-mungkinkah-jadi-solusi-atasi?page=all#:~:text=Umumnya%2C%20bakteri%20menghabiskan%20waktu%20mereka,yakni%20polietilen%20tereftalat%20(PET)</span></a></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Berilah tanda&#13;
  centang (√) pada kolom <b>BENAR</b> atau <b>SALAH </b>pada setiap pernyataan&#13;
  berikut sesuai dengan bacaan</span><span style="font-size:12.0pt;line-height:&#13;&#10;  115%">.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
        'question_type' => 2
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Indonesia',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black;background:white">Pernah</span><span style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black;background:white">kah kamu </span><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black;background:white">merasakan&#13;
  ada suara atau lagu yang terus terngiang di kepala? Bagi beberapa orang,&#13;
  kondisi ini cukup mengganggu, terlebih jika lagu yang terjebak di kepala&#13;
  adalah lagu yang disukai. Kondisi seperti itu disebut sebagai <i>involuntary&#13;
  musical imagery</i> atau lebih dikenal dengan istilah <i>earworm</i>.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black;background:white">Dilansir dari Harvard Health Publishing,&#13;
  psikolog musik, Kelly Jakubowski, dan rekan-rekannya mencoba menemukan&#13;
  penyebab <i>earworm</i>. Mereka menemukan, lagu-lagu yang terngiang di kepala&#13;
  cenderung lebih cepat dan sederhana dalam kontur melodi (nada naik dan turun&#13;
  dengan cara yang membuat lagu lebih mudah untuk dinyanyikan). Musiknya pun&#13;
  memiliki beberapa interval unik di antara nada-nada yang membuat lagu&#13;
  tersebut menonjol. Untuk terjebak di kepala, lagu-lagu tersebut mengandalkan&#13;
  jaringan otak yang terlibat dalam persepsi, emosi, memori, dan pemikiran&#13;
  spontan.  <i>Earworm</i> biasanya dipicu ketika seseorang benar-benar&#13;
  mendengar sebuah lagu. Ini juga bisa terjadi ketika seseorang sedang merasa&#13;
  bahagia dan tak sengaja mendengar sebuah lagu atau ketika sedang melamun. <i>Earworm</i>&#13;
  mungkin juga muncul ketika stres karena terlalu banyak berpikir. Juga, jika&#13;
  seseorang memiliki latar belakang musik, ia lebih rentan terhadap <i>earworm</i>.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black;background:white">Jika sudah muak dengan <i>earworm</i> dan&#13;
  perlu menghentikannya, sebaiknya tidak berusaha menghalau lagu tersebut,&#13;
  melainkan menerimanya secara pasif. Upaya yang gigih untuk mengusir lagu saat&#13;
  terngiang di kepala justru dapat menghasilkan kebalikan dari apa yang&#13;
  diinginkan. Menurut psikolog Daniel Wegner, menolak lagu saat mengalami <i>earworm</i>&#13;
  dapat membuat otak terus memainkannya berulang-ulang. Cara lain mengatasi <i>earworm&#13;
  </i>adalah dengan mengalihkan perhatian dari lagu itu. Beberapa orang mencoba&#13;
  cara ini dan berhasil.  Ada pula yang mengatasi <i>earworm</i> dengan&#13;
  mendengarkan hingga selesai lagu yang terngiang karena umumnya diyakini bahwa&#13;
  <i>earworms</i> terjadi ketika seseorang hanya mengingat sebagian dari sebuah&#13;
  lagu.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><b><span lang="IN" style="font-size:10.0pt;line-height:115%">Sumber&#13;
  bacaan (dikutip dengan perubahan): </span></b><span lang="IN"><a href="https://www.kompas.com/sains/read/2021/12/27/203200123/mengenal-earworm-saat-musik-atau-suara-terjebak-di-kepala?page=all"><span style="font-size:10.0pt;line-height:115%">https://www.kompas.com/sains/read/2021/12/27/203200123/mengenal-earworm-saat-musik-atau-suara-terjebak-di-kepala?page=all</span></a></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Berdasarkan&#13;
  bacaan di atas, <i>earworm </i>dapat didefinisikan sebagai ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Indonesia',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black;background:white">Pernah</span><span style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black;background:white">kah kamu </span><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black;background:white">merasakan&#13;
  ada suara atau lagu yang terus terngiang di kepala? Bagi beberapa orang,&#13;
  kondisi ini cukup mengganggu, terlebih jika lagu yang terjebak di kepala&#13;
  adalah lagu yang disukai. Kondisi seperti itu disebut sebagai <i>involuntary&#13;
  musical imagery</i> atau lebih dikenal dengan istilah <i>earworm</i>.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black;background:white">Dilansir dari Harvard Health Publishing,&#13;
  psikolog musik, Kelly Jakubowski, dan rekan-rekannya mencoba menemukan&#13;
  penyebab <i>earworm</i>. Mereka menemukan, lagu-lagu yang terngiang di kepala&#13;
  cenderung lebih cepat dan sederhana dalam kontur melodi (nada naik dan turun&#13;
  dengan cara yang membuat lagu lebih mudah untuk dinyanyikan). Musiknya pun&#13;
  memiliki beberapa interval unik di antara nada-nada yang membuat lagu&#13;
  tersebut menonjol. Untuk terjebak di kepala, lagu-lagu tersebut mengandalkan&#13;
  jaringan otak yang terlibat dalam persepsi, emosi, memori, dan pemikiran&#13;
  spontan.  <i>Earworm</i> biasanya dipicu ketika seseorang benar-benar&#13;
  mendengar sebuah lagu. Ini juga bisa terjadi ketika seseorang sedang merasa&#13;
  bahagia dan tak sengaja mendengar sebuah lagu atau ketika sedang melamun. <i>Earworm</i>&#13;
  mungkin juga muncul ketika stres karena terlalu banyak berpikir. Juga, jika&#13;
  seseorang memiliki latar belakang musik, ia lebih rentan terhadap <i>earworm</i>.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;color:black;background:white">Jika sudah muak dengan <i>earworm</i> dan&#13;
  perlu menghentikannya, sebaiknya tidak berusaha menghalau lagu tersebut,&#13;
  melainkan menerimanya secara pasif. Upaya yang gigih untuk mengusir lagu saat&#13;
  terngiang di kepala justru dapat menghasilkan kebalikan dari apa yang&#13;
  diinginkan. Menurut psikolog Daniel Wegner, menolak lagu saat mengalami <i>earworm</i>&#13;
  dapat membuat otak terus memainkannya berulang-ulang. Cara lain mengatasi <i>earworm&#13;
  </i>adalah dengan mengalihkan perhatian dari lagu itu. Beberapa orang mencoba&#13;
  cara ini dan berhasil.  Ada pula yang mengatasi <i>earworm</i> dengan&#13;
  mendengarkan hingga selesai lagu yang terngiang karena umumnya diyakini bahwa&#13;
  <i>earworms</i> terjadi ketika seseorang hanya mengingat sebagian dari sebuah&#13;
  lagu.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><b><span lang="IN" style="font-size:10.0pt;line-height:115%">Sumber&#13;
  bacaan (dikutip dengan perubahan): </span></b><span lang="IN"><a href="https://www.kompas.com/sains/read/2021/12/27/203200123/mengenal-earworm-saat-musik-atau-suara-terjebak-di-kepala?page=all"><span style="font-size:10.0pt;line-height:115%">https://www.kompas.com/sains/read/2021/12/27/203200123/mengenal-earworm-saat-musik-atau-suara-terjebak-di-kepala?page=all</span></a></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Menurut bacaan&#13;
  di atas, sebuah lagu dapat terus terngiang di otak jika ... (Berilah tanda&#13;
  centang (√) pada kolom <b>BENAR</b> atau <b>SALAH</b> setiap pernyataan&#13;
  berikut sesuai dengan soal)</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
        'question_type' => 2
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Indonesia',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">Medan magnet Bumi disebut kerap mengalami perubahan arah, dan bisa&#13;
  berdampak pada sinyal GPS ponsel dan membaliknya Kutub Utara dan Kutub&#13;
  Selatan. Peneliti dari Badan Luar Angkasa Eropa (ESA) memberikan hipotesis&#13;
  soal melemahnya medan magnet Bumi yang disebut menjadi tanda bakal&#13;
  terbaliknya medan magnet dari Kutub Utara dan Selatan.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">Medan magnet Bumi berfungsi menahan atmosfer di tempat dan melindungi&#13;
  manusia dari radiasi kosmik berbahaya dan Badai Matahari. Akan tetapi, secara&#13;
  berkala dalam periode jutaan tahun, medan magnet terbalik sehingga Kutub&#13;
  Utara dan Kutub Selatan bertukar tempat.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">Fitri Nuraeni dari Pusat Sains Antariksa LAPAN mengatakan pembalikan&#13;
  orientasi medan magnet Bumi tidak menghilang sesuai <i>flux preservation&#13;
  theorem</i> oleh Ned Benton. Istilah <i>flux preservation theorem</i>&#13;
  dicetuskan oleh Ned Benton. Ia adalah seorang peneliti geomagnetik yang&#13;
  mempelajari perubahan makin berkurangnya kekuatan medan magnet Bumi hingga&#13;
  mencapai nol dalam 4.000 tahun. Teori yang ia buat itu jelas menyatakan bahwa&#13;
  fluks tidak akan meninggalkan permukaan inti dari medan magnet karena&#13;
  memiliki konduktivitas listrik yang sangat tinggi. Hal tersebut merupakan&#13;
  jawaban atas kekhawatiran hilangnya gravitasi Bumi karena perubahan medan magnet&#13;
  ini. </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">Lebih lanjut Fitri menjelaskan medan magnet Bumi bukan berupa medan&#13;
  magnet dengan dua kutub yang sederhana seperti kerap dilihat pada magnet yang&#13;
  ada di alam. Tapi, medan magnet Bumi jauh lebih rumit. Fitri menegaskan bahwa&#13;
  medan magnet Bumi bersifat fluktuatif. Sebab, medan magnet yang terukur di&#13;
  permukaan Bumi merupakan akumulasi dari medan magnet internal dan eksternal&#13;
  yang berasal dari medan magnet Matahari.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">Menurut catatan dari Lembaga Antariksa dan Penerbangan Nasional&#13;
  (LAPAN), kutub utara dan selatan Bumi sempat terbalik tiga kali dalam 100&#13;
  juta tahun terakhir. Pembalikan kutub yang terakhir terjadi sekitar 780 ribu&#13;
  tahun yang lalu. Fenomena ini dikenal sebagai Brunhes-Matuyama Reversal.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><b><span lang="IN" style="font-size:10.0pt;line-height:115%">Sumber&#13;
  bacaan (dikutip dengan perubahan): </span></b><span lang="IN"><a href="https://www.cnnindonesia.com/teknologi/20211001174350-199-702244/jika-magnet-bumi-melemah-gps-kacau-hingga-kutub-terbalik"><span style="font-size:10.0pt;line-height:115%">https://www.cnnindonesia.com/teknologi/20211001174350-199-702244/jika-magnet-bumi-melemah-gps-kacau-hingga-kutub-terbalik</span></a></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Berikut ini&#13;
  kalimat yang memperjelas pernyataan “gravitasi Bumi tidak akan hilang karena&#13;
  perubahan medan magnet” adalah ....</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Indonesia',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">Medan magnet Bumi disebut kerap mengalami perubahan arah, dan bisa&#13;
  berdampak pada sinyal GPS ponsel dan membaliknya Kutub Utara dan Kutub&#13;
  Selatan. Peneliti dari Badan Luar Angkasa Eropa (ESA) memberikan hipotesis&#13;
  soal melemahnya medan magnet Bumi yang disebut menjadi tanda bakal&#13;
  terbaliknya medan magnet dari Kutub Utara dan Selatan.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">Medan magnet Bumi berfungsi menahan atmosfer di tempat dan melindungi&#13;
  manusia dari radiasi kosmik berbahaya dan Badai Matahari. Akan tetapi, secara&#13;
  berkala dalam periode jutaan tahun, medan magnet terbalik sehingga Kutub&#13;
  Utara dan Kutub Selatan bertukar tempat.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">Fitri Nuraeni dari Pusat Sains Antariksa LAPAN mengatakan pembalikan&#13;
  orientasi medan magnet Bumi tidak menghilang sesuai <i>flux preservation&#13;
  theorem</i> oleh Ned Benton. Istilah <i>flux preservation theorem</i>&#13;
  dicetuskan oleh Ned Benton. Ia adalah seorang peneliti geomagnetik yang&#13;
  mempelajari perubahan makin berkurangnya kekuatan medan magnet Bumi hingga&#13;
  mencapai nol dalam 4.000 tahun. Teori yang ia buat itu jelas menyatakan bahwa&#13;
  fluks tidak akan meninggalkan permukaan inti dari medan magnet karena&#13;
  memiliki konduktivitas listrik yang sangat tinggi. Hal tersebut merupakan&#13;
  jawaban atas kekhawatiran hilangnya gravitasi Bumi karena perubahan medan&#13;
  magnet ini. </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">Lebih lanjut Fitri menjelaskan medan magnet Bumi bukan berupa medan&#13;
  magnet dengan dua kutub yang sederhana seperti kerap dilihat pada magnet yang&#13;
  ada di alam. Tapi, medan magnet Bumi jauh lebih rumit. Fitri menegaskan bahwa&#13;
  medan magnet Bumi bersifat fluktuatif. Sebab, medan magnet yang terukur di&#13;
  permukaan Bumi merupakan akumulasi dari medan magnet internal dan eksternal&#13;
  yang berasal dari medan magnet Matahari.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">Menurut catatan dari Lembaga Antariksa dan Penerbangan Nasional&#13;
  (LAPAN), kutub utara dan selatan Bumi sempat terbalik tiga kali dalam 100&#13;
  juta tahun terakhir. Pembalikan kutub yang terakhir terjadi sekitar 780 ribu&#13;
  tahun yang lalu. Fenomena ini dikenal sebagai Brunhes-Matuyama Reversal.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><b><span lang="IN" style="font-size:10.0pt;line-height:115%">Sumber&#13;
  bacaan (dikutip dengan perubahan): </span></b><span lang="IN"><a href="https://www.cnnindonesia.com/teknologi/20211001174350-199-702244/jika-magnet-bumi-melemah-gps-kacau-hingga-kutub-terbalik"><span style="font-size:10.0pt;line-height:115%">https://www.cnnindonesia.com/teknologi/20211001174350-199-702244/jika-magnet-bumi-melemah-gps-kacau-hingga-kutub-terbalik</span></a></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Berilah tanda&#13;
  centang (√) pada kolom <b>BENAR</b> atau <b>SALAH</b> setiap pernyataan&#13;
  berikut sesuai dengan bacaan.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
        'question_type' => 2
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Indonesia',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">Saat mengambil buku di lemari pakaian, ia tidak sengaja melihat sepucuk&#13;
  surat yang sengaja ia sembunyikan di tumpukan terbawah baju. Itulah benda&#13;
  yang ia bawa saat pergi dari Parepare selain pakaian yang dikenakan. Sepucuk&#13;
  surat yang jadi muasal seluruh masalah. Ia menatap surat itu. Ia benci sekali&#13;
  kenapa tangannya refleks mengambil surat itu. Apa yang ia harapkan? Lancang&#13;
  sekali mata dan tangannya. Ia kira kali ini ia lebih tangguh saat membacanya&#13;
  kembali? Atau ia malah berharap isi surat itu telah berubah jadi sebaliknya?&#13;
  Omong kosong! Semua kesibukan ini, pengalaman baru, tidak pernah mampu&#13;
  mengusir pergi kenangan itu. Jika itu sebuah benteng maka benteng itu rapuh,&#13;
  rontok seketika. Jika itu sebuah tameng, maka tameng itu juga tipis dan&#13;
  ringkih, hancur seketika. Lihatlah ia justru lumat lagi seluruh isi surat&#13;
  itu. Menghunjam dalam hatinya seperti sakit sekali. Sama seperti yang ia&#13;
  rasakan saat pertama kali membacanya hanya bisa menatap kosong.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Keterkaitan isi&#13;
  kutipan novel tersebut dengan kehidupan sehari-hari adalah ....</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Indonesia',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">Saat mengambil buku di lemari pakaian, ia tidak sengaja melihat sepucuk&#13;
  surat yang sengaja ia sembunyikan di tumpukan terbawah baju. Itulah benda&#13;
  yang ia bawa saat pergi dari Parepare selain pakaian yang dikenakan. Sepucuk&#13;
  surat yang jadi muasal seluruh masalah. Ia menatap surat itu. Ia benci sekali&#13;
  kenapa tangannya refleks mengambil surat itu. Apa yang ia harapkan? Lancang&#13;
  sekali mata dan tangannya. Ia kira kali ini ia lebih tangguh saat membacanya&#13;
  kembali? Atau ia malah berharap isi surat itu telah berubah jadi sebaliknya?&#13;
  Omong kosong! Semua kesibukan ini, pengalaman baru, tidak pernah mampu&#13;
  mengusir pergi kenangan itu. Jika itu sebuah benteng maka benteng itu rapuh,&#13;
  rontok seketika. Jika itu sebuah tameng, maka tameng itu juga tipis dan&#13;
  ringkih, hancur seketika. Lihatlah ia justru lumat lagi seluruh isi surat&#13;
  itu. Menghunjam dalam hatinya seperti sakit sekali. Sama seperti yang ia&#13;
  rasakan saat pertama kali membacanya hanya bisa menatap kosong.</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Sudut pandang penceritaan dalam&#13;
  kutipan tersebut adalah ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Indonesia',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">Saat mengambil buku di lemari pakaian, ia tidak sengaja melihat sepucuk&#13;
  surat yang sengaja ia sembunyikan di tumpukan terbawah baju. Itulah benda&#13;
  yang ia bawa saat pergi dari Parepare selain pakaian yang dikenakan. Sepucuk&#13;
  surat yang jadi muasal seluruh masalah. Ia menatap surat itu. Ia benci sekali&#13;
  kenapa tangannya refleks mengambil surat itu. Apa yang ia harapkan? Lancang&#13;
  sekali mata dan tangannya. Ia kira kali ini ia lebih tangguh saat membacanya&#13;
  kembali? Atau ia malah berharap isi surat itu telah berubah jadi sebaliknya?&#13;
  Omong kosong! Semua kesibukan ini, pengalaman baru, tidak pernah mampu mengusir&#13;
  pergi kenangan itu. Jika itu sebuah benteng maka benteng itu rapuh, rontok&#13;
  seketika. Jika itu sebuah tameng, maka tameng itu juga tipis dan ringkih,&#13;
  hancur seketika. Lihatlah ia justru lumat lagi seluruh isi surat itu.&#13;
  Menghunjam dalam hatinya seperti sakit sekali. Sama seperti yang ia rasakan&#13;
  saat pertama kali membacanya hanya bisa menatap kosong.</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Latar tempat pada kutipan tersebut&#13;
  adalah ....</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Indonesia',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">“Mbak sama Ayu lebih baik pindah ke Ponorogo dan tinggal bersama kami.&#13;
  Kami akan sangat senang. Kalau memang bersedia, Mbak sama Ayu bisa menelepon&#13;
  kami sewaktu-waktu. Kami akan mengirim sedikit uang untuk biaya pengurusan&#13;
  kepindahan rumah,” jelas Paman.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">Meski mengangguk dan mengucapkan terima kasih, bukan berarti Ibu mau.&#13;
  Bagaimana pun kondisinya, berbeda dengan Paman yang memilih pergi dan&#13;
  melupakan masa lalu kelam, ibu tetap akan tinggal di rumah ini. Bukan karena&#13;
  cuma rumah ini yang kami punya. Dengan tinggal di sini, aku dan Ibu merasa&#13;
  batinnya dekat dengan Bapak. Sebab, rumah inilah yang mampu membuat kami&#13;
  merasa Bapak masih hidup dan tak pernah benar-benar meninggalkan kami.</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Kutipan novel tersebut menceritakan&#13;
  ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Indonesia',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">“Mbak sama Ayu lebih baik pindah ke Ponorogo dan tinggal bersama kami.&#13;
  Kami akan sangat senang. Kalau memang bersedia, Mbak sama Ayu bisa menelepon&#13;
  kami sewaktu-waktu. Kami akan mengirim sedikit uang untuk biaya pengurusan&#13;
  kepindahan rumah,” jelas Paman.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">Meski mengangguk dan mengucapkan terima kasih, bukan berarti Ibu mau.&#13;
  Bagaimana pun kondisinya, berbeda dengan Paman yang memilih pergi dan&#13;
  melupakan masa lalu kelam, ibu tetap akan tinggal di rumah ini. Bukan karena&#13;
  cuma rumah ini yang kami punya. Dengan tinggal di sini, aku dan Ibu merasa&#13;
  batinnya dekat dengan Bapak. Sebab, rumah inilah yang mampu membuat kami&#13;
  merasa Bapak masih hidup dan tak pernah benar-benar meninggalkan kami.</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Dua pernyataan yang sesuai dengan&#13;
  teks kutipan novel tersebut adalah ....</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
        'question_type' => 1
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Indonesia',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">“Mbak sama Ayu lebih baik pindah ke Ponorogo dan tinggal bersama kami.&#13;
  Kami akan sangat senang. Kalau memang bersedia, Mbak sama Ayu bisa menelepon&#13;
  kami sewaktu-waktu. Kami akan mengirim sedikit uang untuk biaya pengurusan&#13;
  kepindahan rumah,” jelas Paman.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;text-indent:&#13;&#10;  21.3pt;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">Meski mengangguk dan mengucapkan terima kasih, bukan berarti Ibu mau.&#13;
  Bagaimana pun kondisinya, berbeda dengan Paman yang memilih pergi dan&#13;
  melupakan masa lalu kelam, ibu tetap akan tinggal di rumah ini. Bukan karena&#13;
  cuma rumah ini yang kami punya. Dengan tinggal di sini, aku dan Ibu merasa&#13;
  batinnya dekat dengan Bapak. Sebab, rumah inilah yang mampu membuat kami&#13;
  merasa Bapak masih hidup dan tak pernah benar-benar meninggalkan kami.</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Nilai yang dominan pada kutipan&#13;
  cerita tersebut adalah ....</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Inggris',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">High school&#13;
  students may improve their science grades by learning about the personal&#13;
  struggles and failed experiments of great scientists such as Albert Einstein&#13;
  and Marie Curie.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          In&#13;
  one study, 402 students from four New York City high schools in low-income&#13;
  areas of the Bronx and Harlem were divided into three groups. The control&#13;
  group read an 800-word typical science textbook description about the great&#13;
  accomplishments of Einstein, Curie and Michael Faraday.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Another&#13;
  group read about those scientists’ personal struggles, including Einstein’s&#13;
  flight from Nazi Germany to avoid persecution as a Jew. The Third group of&#13;
  students read about the scientists’ intellectual struggles, such as Curie’s&#13;
  persistence despite a string of failed experiments. The struggle stories&#13;
  included actions the scientists took to overcome these <i>hurdles</i>.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Students&#13;
  who read about the scientists’ intellectual or personal struggles were more&#13;
  likely to say the famous scientists were people, like themselves, who had to&#13;
  overcome failure and obstacles to succeed. Students in the control group more&#13;
  often believed the great scientists had innate talent and a special aptitude&#13;
  for science.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          The&#13;
  study suggests that science textbooks should highlight the struggles of great&#13;
  scientists and provide more vivid narrative descriptions of the techniques&#13;
  that scientists used to overcome challenges. “Many kids do not see science as&#13;
  part of their everyday lives. We teach them important content, but we never&#13;
  bring it to life,” said the lead researchers Xiaodong Lin-Siegler, PhD. “Our&#13;
  science curriculum is impersonal, and kids have a hard time relating to it&#13;
  because they just see a long list of facts that they have to memorize.”</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">What is the&#13;
  topic of the passage?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Inggris',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">High school&#13;
  students may improve their science grades by learning about the personal&#13;
  struggles and failed experiments of great scientists such as Albert Einstein&#13;
  and Marie Curie.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          In&#13;
  one study, 402 students from four New York City high schools in low-income&#13;
  areas of the Bronx and Harlem were divided into three groups. The control&#13;
  group read an 800-word typical science textbook description about the great&#13;
  accomplishments of Einstein, Curie and Michael Faraday.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Another&#13;
  group read about those scientists’ personal struggles, including Einstein’s&#13;
  flight from Nazi Germany to avoid persecution as a Jew. The Third group of&#13;
  students read about the scientists’ intellectual struggles, such as Curie’s&#13;
  persistence despite a string of failed experiments. The struggle stories&#13;
  included actions the scientists took to overcome these <i>hurdles</i>.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Students&#13;
  who read about the scientists’ intellectual or personal struggles were more&#13;
  likely to say the famous scientists were people, like themselves, who had to&#13;
  overcome failure and obstacles to succeed. Students in the control group more&#13;
  often believed the great scientists had innate talent and a special aptitude&#13;
  for science.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          The&#13;
  study suggests that science textbooks should highlight the struggles of great&#13;
  scientists and provide more vivid narrative descriptions of the techniques&#13;
  that scientists used to overcome challenges. “Many kids do not see science as&#13;
  part of their everyday lives. We teach them important content, but we never&#13;
  bring it to life,” said the lead researchers Xiaodong Lin-Siegler, PhD. “Our&#13;
  science curriculum is impersonal, and kids have a hard time relating to it&#13;
  because they just see a long list of facts that they have to memorize.”</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">The word <i>hurdles</i>&#13;
  in paragraph 3 in the passage means ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Inggris',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">High school&#13;
  students may improve their science grades by learning about the personal&#13;
  struggles and failed experiments of great scientists such as Albert Einstein&#13;
  and Marie Curie.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          In&#13;
  one study, 402 students from four New York City high schools in low-income&#13;
  areas of the Bronx and Harlem were divided into three groups. The control&#13;
  group read an 800-word typical science textbook description about the great&#13;
  accomplishments of Einstein, Curie and Michael Faraday.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Another&#13;
  group read about those scientists’ personal struggles, including Einstein’s&#13;
  flight from Nazi Germany to avoid persecution as a Jew. The Third group of&#13;
  students read about the scientists’ intellectual struggles, such as Curie’s&#13;
  persistence despite a string of failed experiments. The struggle stories&#13;
  included actions the scientists took to overcome these <i>hurdles</i>.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Students&#13;
  who read about the scientists’ intellectual or personal struggles were more&#13;
  likely to say the famous scientists were people, like themselves, who had to&#13;
  overcome failure and obstacles to succeed. Students in the control group more&#13;
  often believed the great scientists had innate talent and a special aptitude&#13;
  for science.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          The&#13;
  study suggests that science textbooks should highlight the struggles of great&#13;
  scientists and provide more vivid narrative descriptions of the techniques&#13;
  that scientists used to overcome challenges. “Many kids do not see science as&#13;
  part of their everyday lives. We teach them important content, but we never&#13;
  bring it to life,” said the lead researchers Xiaodong Lin-Siegler, PhD. “Our&#13;
  science curriculum is impersonal, and kids have a hard time relating to it&#13;
  because they just see a long list of facts that they have to memorize.”</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">What is the&#13;
  suggestion of the study?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Inggris',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">High school&#13;
  students may improve their science grades by learning about the personal&#13;
  struggles and failed experiments of great scientists such as Albert Einstein&#13;
  and Marie Curie.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          In&#13;
  one study, 402 students from four New York City high schools in low-income&#13;
  areas of the Bronx and Harlem were divided into three groups. The control&#13;
  group read an 800-word typical science textbook description about the great&#13;
  accomplishments of Einstein, Curie and Michael Faraday.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Another&#13;
  group read about those scientists’ personal struggles, including Einstein’s&#13;
  flight from Nazi Germany to avoid persecution as a Jew. The Third group of&#13;
  students read about the scientists’ intellectual struggles, such as Curie’s&#13;
  persistence despite a string of failed experiments. The struggle stories&#13;
  included actions the scientists took to overcome these <i>hurdles</i>.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Students&#13;
  who read about the scientists’ intellectual or personal struggles were more&#13;
  likely to say the famous scientists were people, like themselves, who had to&#13;
  overcome failure and obstacles to succeed. Students in the control group more&#13;
  often believed the great scientists had innate talent and a special aptitude&#13;
  for science.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          The&#13;
  study suggests that science textbooks should highlight the struggles of great&#13;
  scientists and provide more vivid narrative descriptions of the techniques&#13;
  that scientists used to overcome challenges. “Many kids do not see science as&#13;
  part of their everyday lives. We teach them important content, but we never&#13;
  bring it to life,” said the lead researchers Xiaodong Lin-Siegler, PhD. “Our&#13;
  science curriculum is impersonal, and kids have a hard time relating to it&#13;
  because they just see a long list of facts that they have to memorize.”</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">The&#13;
  conclusion of the study can be found in paragraph ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Inggris',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">High school&#13;
  students may improve their science grades by learning about the personal&#13;
  struggles and failed experiments of great scientists such as Albert Einstein&#13;
  and Marie Curie.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          In&#13;
  one study, 402 students from four New York City high schools in low-income&#13;
  areas of the Bronx and Harlem were divided into three groups. The control&#13;
  group read an 800-word typical science textbook description about the great&#13;
  accomplishments of Einstein, Curie and Michael Faraday.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Another&#13;
  group read about those scientists’ personal struggles, including Einstein’s&#13;
  flight from Nazi Germany to avoid persecution as a Jew. The Third group of&#13;
  students read about the scientists’ intellectual struggles, such as Curie’s&#13;
  persistence despite a string of failed experiments. The struggle stories&#13;
  included actions the scientists took to overcome these <i>hurdles</i>.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Students&#13;
  who read about the scientists’ intellectual or personal struggles were more&#13;
  likely to say the famous scientists were people, like themselves, who had to&#13;
  overcome failure and obstacles to succeed. Students in the control group more&#13;
  often believed the great scientists had innate talent and a special aptitude&#13;
  for science.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          The&#13;
  study suggests that science textbooks should highlight the struggles of great&#13;
  scientists and provide more vivid narrative descriptions of the techniques&#13;
  that scientists used to overcome challenges. “Many kids do not see science as&#13;
  part of their everyday lives. We teach them important content, but we never&#13;
  bring it to life,” said the lead researchers Xiaodong Lin-Siegler, PhD. “Our&#13;
  science curriculum is impersonal, and kids have a hard time relating to it&#13;
  because they just see a long list of facts that they have to memorize.”</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Which of the&#13;
  following statement is not true according to the text?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Inggris',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Tea tree oil&#13;
  can kill bacteria and fungi. It comes from the evergreen leaves of the&#13;
  Australian Melaleuca alternifolia tree. Tea tree oil has been used as&#13;
  complementary therapy in surgery, burn care, and dental care. Numerous tea&#13;
  tree oil body care products are available, including soap, shampoo,&#13;
  toothpaste, lip balm, topical (used on the skin) cream, and essential oil.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          What&#13;
  is tea tree oil used for? People usually use tea tree oil to treat minor&#13;
  cuts, burns, acne, athlete’s foot, mild fungal nail infections, vaginal yeast&#13;
  infections, and lung problems (when they add the oil to a bath or vaporizer).&#13;
  Although there is little research on tea tree oil, some studies suggest that&#13;
  it is safe and often effective for the prevention and treatment of&#13;
  infections.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          <span style="color:black">   (1) Experts consider tea tree oil to be safe as a&#13;
  topical treatment, and you can apply it directly to the skin on a daily&#13;
  basis. (2) When applied to the skin in its pure (100% oil) form, tea tree oil&#13;
  seldom causes irritation. (3) Use it as a toner throughout the day. (4) But&#13;
  some people develop an allergic rash (contact dermatitis). (5) If you are&#13;
  concerned that you might develop a rash, try the oil first on a small area of&#13;
  skin. (6) You can also dilute tea tree oil with vegetable, olive, or almond&#13;
  oil. </span></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Tea&#13;
  tree oil is not safe to take by mouth. It is not recommended for use in the&#13;
  ears, because it may cause damage to the inner ear.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          The&#13;
  U.S. Food and Drug Administration (FDA) does not regulate tea tree oil in the&#13;
  same way it regulates medicines. It can be sold with limited or no research&#13;
  on how well it works.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          It&#13;
  is deemed essential to tell your doctor if you are using an alternative&#13;
  product or if you are thinking about combining one with your conventional&#13;
  medical treatment. It may not be safe to forgo your conventional medical&#13;
  treatment and rely only on an alternative product.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Which of the&#13;
  following reflects the author’s attitude toward the topic of the passage?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Inggris',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Tea tree oil&#13;
  can kill bacteria and fungi. It comes from the evergreen leaves of the&#13;
  Australian Melaleuca alternifolia tree. Tea tree oil has been used as complementary&#13;
  therapy in surgery, burn care, and dental care. Numerous tea tree oil body&#13;
  care products are available, including soap, shampoo, toothpaste, lip balm,&#13;
  topical (used on the skin) cream, and essential oil.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          What&#13;
  is tea tree oil used for? People usually use tea tree oil to treat minor&#13;
  cuts, burns, acne, athlete’s foot, mild fungal nail infections, vaginal yeast&#13;
  infections, and lung problems (when they add the oil to a bath or vaporizer).&#13;
  Although there is little research on tea tree oil, some studies suggest that&#13;
  it is safe and often effective for the prevention and treatment of&#13;
  infections.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          <span style="color:black">   (1) Experts consider tea tree oil to be safe as a&#13;
  topical treatment, and you can apply it directly to the skin on a daily&#13;
  basis. (2) When applied to the skin in its pure (100% oil) form, tea tree oil&#13;
  seldom causes irritation. (3) Use it as a toner throughout the day. (4) But&#13;
  some people develop an allergic rash (contact dermatitis). (5) If you are&#13;
  concerned that you might develop a rash, try the oil first on a small area of&#13;
  skin. (6) You can also dilute tea tree oil with vegetable, olive, or almond&#13;
  oil. </span></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Tea&#13;
  tree oil is not safe to take by mouth. It is not recommended for use in the&#13;
  ears, because it may cause damage to the inner ear.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          The&#13;
  U.S. Food and Drug Administration (FDA) does not regulate tea tree oil in the&#13;
  same way it regulates medicines. It can be sold with limited or no research&#13;
  on how well it works.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          It&#13;
  is deemed essential to tell your doctor if you are using an alternative&#13;
  product or if you are thinking about combining one with your conventional&#13;
  medical treatment. It may not be safe to forgo your conventional medical&#13;
  treatment and rely only on an alternative product.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">The&#13;
  paragraph following the passage will likely talk about ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Inggris',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Tea tree oil&#13;
  can kill bacteria and fungi. It comes from the evergreen leaves of the&#13;
  Australian Melaleuca alternifolia tree. Tea tree oil has been used as&#13;
  complementary therapy in surgery, burn care, and dental care. Numerous tea&#13;
  tree oil body care products are available, including soap, shampoo,&#13;
  toothpaste, lip balm, topical (used on the skin) cream, and essential oil.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          What&#13;
  is tea tree oil used for? People usually use tea tree oil to treat minor&#13;
  cuts, burns, acne, athlete’s foot, mild fungal nail infections, vaginal yeast&#13;
  infections, and lung problems (when they add the oil to a bath or vaporizer).&#13;
  Although there is little research on tea tree oil, some studies suggest that&#13;
  it is safe and often effective for the prevention and treatment of&#13;
  infections.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          <span style="color:black">   (1) Experts consider tea tree oil to be safe as a&#13;
  topical treatment, and you can apply it directly to the skin on a daily&#13;
  basis. (2) When applied to the skin in its pure (100% oil) form, tea tree oil&#13;
  seldom causes irritation. (3) Use it as a toner throughout the day. (4) But&#13;
  some people develop an allergic rash (contact dermatitis). (5) If you are&#13;
  concerned that you might develop a rash, try the oil first on a small area of&#13;
  skin. (6) You can also dilute tea tree oil with vegetable, olive, or almond&#13;
  oil. </span></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Tea&#13;
  tree oil is not safe to take by mouth. It is not recommended for use in the&#13;
  ears, because it may cause damage to the inner ear.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          The&#13;
  U.S. Food and Drug Administration (FDA) does not regulate tea tree oil in the&#13;
  same way it regulates medicines. It can be sold with limited or no research&#13;
  on how well it works.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          It&#13;
  is deemed essential to tell your doctor if you are using an alternative&#13;
  product or if you are thinking about combining one with your conventional&#13;
  medical treatment. It may not be safe to forgo your conventional medical&#13;
  treatment and rely only on an alternative product.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">The passage&#13;
  can be best summarized as ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Inggris',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Tea tree oil&#13;
  can kill bacteria and fungi. It comes from the evergreen leaves of the&#13;
  Australian Melaleuca alternifolia tree. Tea tree oil has been used as&#13;
  complementary therapy in surgery, burn care, and dental care. Numerous tea&#13;
  tree oil body care products are available, including soap, shampoo,&#13;
  toothpaste, lip balm, topical (used on the skin) cream, and essential oil.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          What&#13;
  is tea tree oil used for? People usually use tea tree oil to treat minor&#13;
  cuts, burns, acne, athlete’s foot, mild fungal nail infections, vaginal yeast&#13;
  infections, and lung problems (when they add the oil to a bath or vaporizer).&#13;
  Although there is little research on tea tree oil, some studies suggest that&#13;
  it is safe and often effective for the prevention and treatment of&#13;
  infections.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          <span style="color:black">   (1) Experts consider tea tree oil to be safe as a&#13;
  topical treatment, and you can apply it directly to the skin on a daily&#13;
  basis. (2) When applied to the skin in its pure (100% oil) form, tea tree oil&#13;
  seldom causes irritation. (3) Use it as a toner throughout the day. (4) But&#13;
  some people develop an allergic rash (contact dermatitis). (5) If you are&#13;
  concerned that you might develop a rash, try the oil first on a small area of&#13;
  skin. (6) You can also dilute tea tree oil with vegetable, olive, or almond&#13;
  oil. </span></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Tea&#13;
  tree oil is not safe to take by mouth. It is not recommended for use in the&#13;
  ears, because it may cause damage to the inner ear.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          The&#13;
  U.S. Food and Drug Administration (FDA) does not regulate tea tree oil in the&#13;
  same way it regulates medicines. It can be sold with limited or no research&#13;
  on how well it works.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          It&#13;
  is deemed essential to tell your doctor if you are using an alternative&#13;
  product or if you are thinking about combining one with your conventional&#13;
  medical treatment. It may not be safe to forgo your conventional medical&#13;
  treatment and rely only on an alternative product.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Based on the&#13;
  passage, the possible allergic effect of tea tree oil will lessen if it is&#13;
  ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Inggris',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Tea tree oil&#13;
  can kill bacteria and fungi. It comes from the evergreen leaves of the&#13;
  Australian Melaleuca alternifolia tree. Tea tree oil has been used as&#13;
  complementary therapy in surgery, burn care, and dental care. Numerous tea&#13;
  tree oil body care products are available, including soap, shampoo,&#13;
  toothpaste, lip balm, topical (used on the skin) cream, and essential oil.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          What&#13;
  is tea tree oil used for? People usually use tea tree oil to treat minor&#13;
  cuts, burns, acne, athlete’s foot, mild fungal nail infections, vaginal yeast&#13;
  infections, and lung problems (when they add the oil to a bath or vaporizer).&#13;
  Although there is little research on tea tree oil, some studies suggest that&#13;
  it is safe and often effective for the prevention and treatment of&#13;
  infections.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          <span style="color:black">   (1) Experts consider tea tree oil to be safe as a&#13;
  topical treatment, and you can apply it directly to the skin on a daily&#13;
  basis. (2) When applied to the skin in its pure (100% oil) form, tea tree oil&#13;
  seldom causes irritation. (3) Use it as a toner throughout the day. (4) But&#13;
  some people develop an allergic rash (contact dermatitis). (5) If you are&#13;
  concerned that you might develop a rash, try the oil first on a small area of&#13;
  skin. (6) You can also dilute tea tree oil with vegetable, olive, or almond&#13;
  oil. </span></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Tea&#13;
  tree oil is not safe to take by mouth. It is not recommended for use in the&#13;
  ears, because it may cause damage to the inner ear.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          The&#13;
  U.S. Food and Drug Administration (FDA) does not regulate tea tree oil in the&#13;
  same way it regulates medicines. It can be sold with limited or no research&#13;
  on how well it works.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          It&#13;
  is deemed essential to tell your doctor if you are using an alternative&#13;
  product or if you are thinking about combining one with your conventional&#13;
  medical treatment. It may not be safe to forgo your conventional medical&#13;
  treatment and rely only on an alternative product.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">The&#13;
  irrelevant sentence in paragraph 3 is sentence number ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Inggris',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><b><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Text 1</span></b></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Today&#13;
  the transplantation of many organs between well-matched human beings is quite&#13;
  successful, with the majority of recipients living five or more years.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Experiments&#13;
  continue to be done to try to improve the technology and possibilities&#13;
  regarding transplantation. For example, research is being done regarding&#13;
  human cell cultures, transplants from human fetuses, including brain tissue,&#13;
  and from animals to human beings. The latter includes attempts to genetically&#13;
  design animals with organs that are less likely to be rejected by human&#13;
  beings. Some animal products (e.g. insulin and pig heart valves) are already&#13;
  used regularly. Research also continues to be done to improve artificial&#13;
  organs and other artificial aids to human functioning.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          The&#13;
  ethical and legal issues related to organ and tissue procurement and&#13;
  transplantation are often discussed in light of such principles as autonomy,&#13;
  benevolence, non-maleficence, free and informed consent, respecting the&#13;
  dignity, integrity and equality of human beings, fairness, and the common&#13;
  good.</span></p><p class="MsoNormal" align="right" style="margin-bottom:0in;text-align:right;&#13;&#10;  line-height:115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">(</span><span lang="IN"><a href="http://www.ualberta.ca"><span lang="EN-GB" style="font-size:&#13;&#10;  12.0pt;line-height:115%;color:black">www.ualberta.ca</span></a></span><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">)</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><b><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Text 2</span></b></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Since&#13;
  the first human kidney was transplanted in 1954, the nation has engaged in&#13;
  searching public discussions about the ethics of organ transplantation: about&#13;
  the human significance of removing organs from both living and cadaveric&#13;
  donors; about the criteria for determining when death occurs and thus when&#13;
  the decedent’s organs might be taken.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Many&#13;
  lives have been saved that would not have been otherwise, and yet waiting&#13;
  lists for organs continue to increase. Many individuals have given of&#13;
  themselves (literally) to save the life of another, and yet the unequivocal&#13;
  protection of those who are not-yet-dead has been called into question. The&#13;
  human body (dead or alive) has not been reduced to mere property, and yet the&#13;
  desperation of watching thousands of individuals die every year while waiting&#13;
  for organs has prompted a renewed debate about whether monetary incentives&#13;
  should be used in an effort to increase organ supply.</span></p><p class="MsoNormal" align="right" style="margin-bottom:0in;text-align:right;&#13;&#10;  line-height:115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">(bioethics.georgetown.edu)</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">The topic&#13;
  discussed in both passage is ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Inggris',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><b><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Text 1</span></b></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Today&#13;
  the transplantation of many organs between well-matched human beings is quite&#13;
  successful, with the majority of recipients living five or more years.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Experiments&#13;
  continue to be done to try to improve the technology and possibilities&#13;
  regarding transplantation. For example, research is being done regarding&#13;
  human cell cultures, transplants from human fetuses, including brain tissue,&#13;
  and from animals to human beings. The latter includes attempts to genetically&#13;
  design animals with organs that are less likely to be rejected by human&#13;
  beings. Some animal products (e.g. insulin and pig heart valves) are already&#13;
  used regularly. Research also continues to be done to improve artificial&#13;
  organs and other artificial aids to human functioning.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          The&#13;
  ethical and legal issues related to organ and tissue procurement and&#13;
  transplantation are often discussed in light of such principles as autonomy,&#13;
  benevolence, non-maleficence, free and informed consent, respecting the&#13;
  dignity, integrity and equality of human beings, fairness, and the common&#13;
  good.</span></p><p class="MsoNormal" align="right" style="margin-bottom:0in;text-align:right;&#13;&#10;  line-height:115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">(</span><span lang="IN"><a href="http://www.ualberta.ca"><span lang="EN-GB" style="font-size:&#13;&#10;  12.0pt;line-height:115%;color:black">www.ualberta.ca</span></a></span><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">)</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><b><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Text 2</span></b></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Since&#13;
  the first human kidney was transplanted in 1954, the nation has engaged in&#13;
  searching public discussions about the ethics of organ transplantation: about&#13;
  the human significance of removing organs from both living and cadaveric&#13;
  donors; about the criteria for determining when death occurs and thus when&#13;
  the decedent’s organs might be taken.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Many&#13;
  lives have been saved that would not have been otherwise, and yet waiting&#13;
  lists for organs continue to increase. Many individuals have given of&#13;
  themselves (literally) to save the life of another, and yet the unequivocal&#13;
  protection of those who are not-yet-dead has been called into question. The&#13;
  human body (dead or alive) has not been reduced to mere property, and yet the&#13;
  desperation of watching thousands of individuals die every year while waiting&#13;
  for organs has prompted a renewed debate about whether monetary incentives&#13;
  should be used in an effort to increase organ supply.</span></p><p class="MsoNormal" align="right" style="margin-bottom:0in;text-align:right;&#13;&#10;  line-height:115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">(bioethics.georgetown.edu)</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Based on the&#13;
  texts, it can be hypothesized that ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Inggris',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><b><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Text 1</span></b></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Today&#13;
  the transplantation of many organs between well-matched human beings is quite&#13;
  successful, with the majority of recipients living five or more years.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Experiments&#13;
  continue to be done to try to improve the technology and possibilities&#13;
  regarding transplantation. For example, research is being done regarding&#13;
  human cell cultures, transplants from human fetuses, including brain tissue,&#13;
  and from animals to human beings. The latter includes attempts to genetically&#13;
  design animals with organs that are less likely to be rejected by human&#13;
  beings. Some animal products (e.g. insulin and pig heart valves) are already&#13;
  used regularly. Research also continues to be done to improve artificial&#13;
  organs and other artificial aids to human functioning.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          The&#13;
  ethical and legal issues related to organ and tissue procurement and&#13;
  transplantation are often discussed in light of such principles as autonomy,&#13;
  benevolence, non-maleficence, free and informed consent, respecting the&#13;
  dignity, integrity and equality of human beings, fairness, and the common&#13;
  good.</span></p><p class="MsoNormal" align="right" style="margin-bottom:0in;text-align:right;&#13;&#10;  line-height:115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">(</span><span lang="IN"><a href="http://www.ualberta.ca"><span lang="EN-GB" style="font-size:&#13;&#10;  12.0pt;line-height:115%;color:black">www.ualberta.ca</span></a></span><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">)</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><b><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Text 2</span></b></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Since&#13;
  the first human kidney was transplanted in 1954, the nation has engaged in&#13;
  searching public discussions about the ethics of organ transplantation: about&#13;
  the human significance of removing organs from both living and cadaveric&#13;
  donors; about the criteria for determining when death occurs and thus when&#13;
  the decedent’s organs might be taken.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Many&#13;
  lives have been saved that would not have been otherwise, and yet waiting&#13;
  lists for organs continue to increase. Many individuals have given of&#13;
  themselves (literally) to save the life of another, and yet the unequivocal protection&#13;
  of those who are not-yet-dead has been called into question. The human body&#13;
  (dead or alive) has not been reduced to mere property, and yet the&#13;
  desperation of watching thousands of individuals die every year while waiting&#13;
  for organs has prompted a renewed debate about whether monetary incentives&#13;
  should be used in an effort to increase organ supply.</span></p><p class="MsoNormal" align="right" style="margin-bottom:0in;text-align:right;&#13;&#10;  line-height:115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">(bioethics.georgetown.edu)</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Both&#13;
  passages are different in terms of dealing with ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Inggris',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><b><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Text 1</span></b></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Today&#13;
  the transplantation of many organs between well-matched human beings is quite&#13;
  successful, with the majority of recipients living five or more years.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Experiments&#13;
  continue to be done to try to improve the technology and possibilities&#13;
  regarding transplantation. For example, research is being done regarding&#13;
  human cell cultures, transplants from human fetuses, including brain tissue,&#13;
  and from animals to human beings. The latter includes attempts to genetically&#13;
  design animals with organs that are less likely to be rejected by human&#13;
  beings. Some animal products (e.g. insulin and pig heart valves) are already&#13;
  used regularly. Research also continues to be done to improve artificial&#13;
  organs and other artificial aids to human functioning.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          The&#13;
  ethical and legal issues related to organ and tissue procurement and&#13;
  transplantation are often discussed in light of such principles as autonomy,&#13;
  benevolence, non-maleficence, free and informed consent, respecting the&#13;
  dignity, integrity and equality of human beings, fairness, and the common&#13;
  good.</span></p><p class="MsoNormal" align="right" style="margin-bottom:0in;text-align:right;&#13;&#10;  line-height:115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">(</span><span lang="IN"><a href="http://www.ualberta.ca"><span lang="EN-GB" style="font-size:&#13;&#10;  12.0pt;line-height:115%;color:black">www.ualberta.ca</span></a></span><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">)</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><b><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Text 2</span></b></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Since&#13;
  the first human kidney was transplanted in 1954, the nation has engaged in&#13;
  searching public discussions about the ethics of organ transplantation: about&#13;
  the human significance of removing organs from both living and cadaveric&#13;
  donors; about the criteria for determining when death occurs and thus when&#13;
  the decedent’s organs might be taken.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Many&#13;
  lives have been saved that would not have been otherwise, and yet waiting&#13;
  lists for organs continue to increase. Many individuals have given of&#13;
  themselves (literally) to save the life of another, and yet the unequivocal&#13;
  protection of those who are not-yet-dead has been called into question. The&#13;
  human body (dead or alive) has not been reduced to mere property, and yet the&#13;
  desperation of watching thousands of individuals die every year while waiting&#13;
  for organs has prompted a renewed debate about whether monetary incentives&#13;
  should be used in an effort to increase organ supply.</span></p><p class="MsoNormal" align="right" style="margin-bottom:0in;text-align:right;&#13;&#10;  line-height:115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">(bioethics.georgetown.edu)</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Which one of&#13;
  the following reflects opinions mentioned in both passages?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Inggris',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><b><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Text 1</span></b></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Today&#13;
  the transplantation of many organs between well-matched human beings is quite&#13;
  successful, with the majority of recipients living five or more years.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Experiments&#13;
  continue to be done to try to improve the technology and possibilities&#13;
  regarding transplantation. For example, research is being done regarding&#13;
  human cell cultures, transplants from human fetuses, including brain tissue,&#13;
  and from animals to human beings. The latter includes attempts to genetically&#13;
  design animals with organs that are less likely to be rejected by human&#13;
  beings. Some animal products (e.g. insulin and pig heart valves) are already&#13;
  used regularly. Research also continues to be done to improve artificial&#13;
  organs and other artificial aids to human functioning.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          The&#13;
  ethical and legal issues related to organ and tissue procurement and&#13;
  transplantation are often discussed in light of such principles as autonomy,&#13;
  benevolence, non-maleficence, free and informed consent, respecting the&#13;
  dignity, integrity and equality of human beings, fairness, and the common&#13;
  good.</span></p><p class="MsoNormal" align="right" style="margin-bottom:0in;text-align:right;&#13;&#10;  line-height:115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">(</span><span lang="IN"><a href="http://www.ualberta.ca"><span lang="EN-GB" style="font-size:&#13;&#10;  12.0pt;line-height:115%;color:black">www.ualberta.ca</span></a></span><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">)</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><b><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Text 2</span></b></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Since&#13;
  the first human kidney was transplanted in 1954, the nation has engaged in&#13;
  searching public discussions about the ethics of organ transplantation: about&#13;
  the human significance of removing organs from both living and cadaveric&#13;
  donors; about the criteria for determining when death occurs and thus when&#13;
  the decedent’s organs might be taken.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Many&#13;
  lives have been saved that would not have been otherwise, and yet waiting&#13;
  lists for organs continue to increase. Many individuals have given of&#13;
  themselves (literally) to save the life of another, and yet the unequivocal&#13;
  protection of those who are not-yet-dead has been called into question. The&#13;
  human body (dead or alive) has not been reduced to mere property, and yet the&#13;
  desperation of watching thousands of individuals die every year while waiting&#13;
  for organs has prompted a renewed debate about whether monetary incentives&#13;
  should be used in an effort to increase organ supply.</span></p><p class="MsoNormal" align="right" style="margin-bottom:0in;text-align:right;&#13;&#10;  line-height:115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">(bioethics.georgetown.edu)</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%;color:black"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%;color:black">Below&#13;
  is the information that could be found in text 1 …</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Inggris',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">A.D. 830: A&#13;
  storm sends an Indonesian trading ship drastically off course. Months later,&#13;
  dozens of ragged survivors make landfall on an island off the southeast coast&#13;
  of Africa, more than 3,000 miles from home. Today, Murray Cox, a&#13;
  computational biologists at New Zealand’s Massey University, says a scenario&#13;
  like this may describe the <i>murky</i> origins of the first permanent&#13;
  settlements on Madagascar, home to about 22 million people today.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Genetic&#13;
  and linguistic studies suggest the island’s native Malagasy people are mainly&#13;
  of Indonesian descent. The idea of early Indonesians traveling 3,000 miles to&#13;
  the island intrigued Cox. “It’s a surprisingly long distance to come,” he&#13;
  says. So he used computer modelling to parse the clues, running through 40&#13;
  million settlement simulations. Cox soon pinpointed one that would explain&#13;
  the DNA patterns evident in Madagascar today. Surprisingly, the current&#13;
  population descends primarily from just 30 or so Indonesian women who arrived&#13;
  12 centuries ago. His conclusion is supported by prior findings that about 30&#13;
  percent of Malagasy have the same mitochondrial DNA, which is passed from&#13;
  mother to child—far less diversity than in typical human populations, which&#13;
  share less than 2 percent. “This suggests rapid, recent growth from a very small&#13;
  founder population,” Cox say.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          It&#13;
  is unclear how Madagascar’s founding mothers (and the fathers who must have&#13;
  been with them) arrived. Cox proposes seafaring merchants thrown off course,&#13;
  or refugees fleeing political strife; the latter could explain why women,&#13;
  usually not found on trade ships, were on board. Now, Cox plans to explore&#13;
  whether small founding groups are characteristics of other early island&#13;
  settlements, including Hawaii. “There may be general rules for settling&#13;
  islands,” he says.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">The word <i>murky</i>&#13;
  in paragraph 1 in the passage means ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Inggris',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">A.D. 830: A&#13;
  storm sends an Indonesian trading ship drastically off course. Months later,&#13;
  dozens of ragged survivors make landfall on an island off the southeast coast&#13;
  of Africa, more than 3,000 miles from home. Today, Murray Cox, a&#13;
  computational biologists at New Zealand’s Massey University, says a scenario&#13;
  like this may describe the <i>murky</i> origins of the first permanent&#13;
  settlements on Madagascar, home to about 22 million people today.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Genetic&#13;
  and linguistic studies suggest the island’s native Malagasy people are mainly&#13;
  of Indonesian descent. The idea of early Indonesians traveling 3,000 miles to&#13;
  the island intrigued Cox. “It’s a surprisingly long distance to come,” he&#13;
  says. So he used computer modelling to parse the clues, running through 40&#13;
  million settlement simulations. Cox soon pinpointed one that would explain&#13;
  the DNA patterns evident in Madagascar today. Surprisingly, the current&#13;
  population descends primarily from just 30 or so Indonesian women who arrived&#13;
  12 centuries ago. His conclusion is supported by prior findings that about 30&#13;
  percent of Malagasy have the same mitochondrial DNA, which is passed from&#13;
  mother to child—far less diversity than in typical human populations, which&#13;
  share less than 2 percent. “This suggests rapid, recent growth from a very&#13;
  small founder population,” Cox say.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          It&#13;
  is unclear how Madagascar’s founding mothers (and the fathers who must have&#13;
  been with them) arrived. Cox proposes seafaring merchants thrown off course,&#13;
  or refugees fleeing political strife; the latter could explain why women,&#13;
  usually not found on trade ships, were on board. Now, Cox plans to explore&#13;
  whether small founding groups are characteristics of other early island&#13;
  settlements, including Hawaii. “There may be general rules for settling&#13;
  islands,” he says.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">In presenting&#13;
  the ideas, the author starts by ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Inggris',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">A.D. 830: A&#13;
  storm sends an Indonesian trading ship drastically off course. Months later,&#13;
  dozens of ragged survivors make landfall on an island off the southeast coast&#13;
  of Africa, more than 3,000 miles from home. Today, Murray Cox, a&#13;
  computational biologists at New Zealand’s Massey University, says a scenario&#13;
  like this may describe the <i>murky</i> origins of the first permanent&#13;
  settlements on Madagascar, home to about 22 million people today.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Genetic&#13;
  and linguistic studies suggest the island’s native Malagasy people are mainly&#13;
  of Indonesian descent. The idea of early Indonesians traveling 3,000 miles to&#13;
  the island intrigued Cox. “It’s a surprisingly long distance to come,” he&#13;
  says. So he used computer modelling to parse the clues, running through 40&#13;
  million settlement simulations. Cox soon pinpointed one that would explain&#13;
  the DNA patterns evident in Madagascar today. Surprisingly, the current&#13;
  population descends primarily from just 30 or so Indonesian women who arrived&#13;
  12 centuries ago. His conclusion is supported by prior findings that about 30&#13;
  percent of Malagasy have the same mitochondrial DNA, which is passed from&#13;
  mother to child—far less diversity than in typical human populations, which&#13;
  share less than 2 percent. “This suggests rapid, recent growth from a very&#13;
  small founder population,” Cox say.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          It&#13;
  is unclear how Madagascar’s founding mothers (and the fathers who must have&#13;
  been with them) arrived. Cox proposes seafaring merchants thrown off course,&#13;
  or refugees fleeing political strife; the latter could explain why women,&#13;
  usually not found on trade ships, were on board. Now, Cox plans to explore&#13;
  whether small founding groups are characteristics of other early island&#13;
  settlements, including Hawaii. “There may be general rules for settling&#13;
  islands,” he says.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">The passage&#13;
  implies that Indonesian settlers in Madagascar most probably ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Inggris',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">A.D. 830: A&#13;
  storm sends an Indonesian trading ship drastically off course. Months later,&#13;
  dozens of ragged survivors make landfall on an island off the southeast coast&#13;
  of Africa, more than 3,000 miles from home. Today, Murray Cox, a&#13;
  computational biologists at New Zealand’s Massey University, says a scenario&#13;
  like this may describe the <i>murky</i> origins of the first permanent&#13;
  settlements on Madagascar, home to about 22 million people today.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Genetic&#13;
  and linguistic studies suggest the island’s native Malagasy people are mainly&#13;
  of Indonesian descent. The idea of early Indonesians traveling 3,000 miles to&#13;
  the island intrigued Cox. “It’s a surprisingly long distance to come,” he&#13;
  says. So he used computer modelling to parse the clues, running through 40&#13;
  million settlement simulations. Cox soon pinpointed one that would explain&#13;
  the DNA patterns evident in Madagascar today. Surprisingly, the current&#13;
  population descends primarily from just 30 or so Indonesian women who arrived&#13;
  12 centuries ago. His conclusion is supported by prior findings that about 30&#13;
  percent of Malagasy have the same mitochondrial DNA, which is passed from&#13;
  mother to child—far less diversity than in typical human populations, which&#13;
  share less than 2 percent. “This suggests rapid, recent growth from a very&#13;
  small founder population,” Cox say.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          It&#13;
  is unclear how Madagascar’s founding mothers (and the fathers who must have&#13;
  been with them) arrived. Cox proposes seafaring merchants thrown off course,&#13;
  or refugees fleeing political strife; the latter could explain why women,&#13;
  usually not found on trade ships, were on board. Now, Cox plans to explore&#13;
  whether small founding groups are characteristics of other early island&#13;
  settlements, including Hawaii. “There may be general rules for settling&#13;
  islands,” he says.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Which of the&#13;
  following is the restatement of the sentence “The idea of early Indonesians&#13;
  travelling 3,000 miles to the island intrigued Cox.” (paragraph 2 line 2)</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Literasi dalam Bahasa Inggris',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">A.D. 830: A&#13;
  storm sends an Indonesian trading ship drastically off course. Months later,&#13;
  dozens of ragged survivors make landfall on an island off the southeast coast&#13;
  of Africa, more than 3,000 miles from home. Today, Murray Cox, a computational&#13;
  biologists at New Zealand’s Massey University, says a scenario like this may&#13;
  describe the <i>murky</i> origins of the first permanent settlements on&#13;
  Madagascar, home to about 22 million people today.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          Genetic&#13;
  and linguistic studies suggest the island’s native Malagasy people are mainly&#13;
  of Indonesian descent. The idea of early Indonesians traveling 3,000 miles to&#13;
  the island intrigued Cox. “It’s a surprisingly long distance to come,” he&#13;
  says. So he used computer modelling to parse the clues, running through 40 million&#13;
  settlement simulations. Cox soon pinpointed one that would explain the DNA&#13;
  patterns evident in Madagascar today. Surprisingly, the current population&#13;
  descends primarily from just 30 or so Indonesian women who arrived 12&#13;
  centuries ago. His conclusion is supported by prior findings that about 30&#13;
  percent of Malagasy have the same mitochondrial DNA, which is passed from&#13;
  mother to child—far less diversity than in typical human populations, which&#13;
  share less than 2 percent. “This suggests rapid, recent growth from a very&#13;
  small founder population,” Cox say.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">          It&#13;
  is unclear how Madagascar’s founding mothers (and the fathers who must have&#13;
  been with them) arrived. Cox proposes seafaring merchants thrown off course,&#13;
  or refugees fleeing political strife; the latter could explain why women,&#13;
  usually not found on trade ships, were on board. Now, Cox plans to explore&#13;
  whether small founding groups are characteristics of other early island&#13;
  settlements, including Hawaii. “There may be general rules for settling&#13;
  islands,” he says.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">The&#13;
  paragraph following the passage will likely talk about …</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Matematika',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:14.0pt;line-height:115%"><img border="0" width="569" height="361" id="Picture 18" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Literasi_files/image002.jpg"/></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Tahun yang&#13;
  memiliki jumlah persentase laju pertumbuhan Produk Domestik Bruto (PDB)&#13;
  tertinggi dari semua sektor adalah ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Matematika',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:14.0pt;line-height:115%"><img border="0" width="569" height="361" id="Picture 19" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Literasi_files/image003.jpg"/></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Sektor&#13;
  pertanian, peternakan, perburuan, dan jasa pertanian mengalami kenaikan laju&#13;
  dari tahun 2015 hingga 2017. Jika pada tahun 2018 sektor tersebut mengalami&#13;
  kenaikan senilai dengan rata-rata kenaikan dari tahun 2015 hingga 2017, maka&#13;
  persentase laju pertumbuhan PDB sektor tersebut di tahun 2018 adalah ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Matematika',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Pak Andi selaku&#13;
  guru kimia di suatu sekolah memiliki satu gelas kimia berisi n mililiter&#13;
  larutan untuk dibagikan kepada murid di kelasnya. Jika dia memberikan setiap&#13;
  muridnya 3 mililiter larutan, dia kan memiliki sisa 5 mililiter larutan. Jika&#13;
  dia memberikan 4 mililiter larutan pada setiap muridnya, dia butuh tambahan&#13;
  21 mililiter larutan. Berapakah jumlah murid di kelasnya?</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:.25in;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Matematika',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Diketahui dalam&#13;
  80 mL suatu larutan mengandung air dan 40% zat X. Kemudian sebanyak y mL air&#13;
  ditambahkan ke dalam larutan tersebut untuk mendapatkan larutan yang&#13;
  mengandung 10% zat X. Nilai y adalah ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Matematika',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Sekelompok&#13;
  siswa yang beranggotakan 6 orang sedang mengerjakan projek untuk tugas akhir&#13;
  semester. Projek tersebut memerlukan beberapa alat yang akan dibeli oleh&#13;
  mereka secara patungan. Saat sedang merancang projek tersebut, 1 orang&#13;
  anggota mengundurkan diri. Karena anggota kelompok mereka berkurang, setiap&#13;
  anggota kelompok yang  tersisa dikenai biaya tambahan untuk membeli alat-alat&#13;
  projek sebesar Rp25.000,00 per orang. </span></p><p class="MsoListParagraph" style="margin-top:0in;margin-right:0in;margin-bottom:&#13;&#10;  0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Berdasarkan&#13;
  keterangan di atas, biaya total untuk alat-alat projek adalah sebesar ...</span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Matematika',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Seorang pemilik&#13;
  perkebunan menanam pohon apel dengan pola persegi. Di sekeliling pohon-pohon&#13;
  apel tersebut ditanami tanaman dandelion untuk menarik polinator berupa&#13;
  lebah. Pola penanaman pohon apel dan dandelion tersebut dapat dilihat di&#13;
  bawah ini (n menunjukkan jumlah baris pohon apel).</span></p><p class="MsoNormal" style="margin-top:0in;margin-right:0in;margin-bottom:0in;&#13;&#10;  margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" align="center" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:28.35pt;text-align:center;line-height:115%"><span lang="IN" style="font-size:14.0pt;line-height:115%"><img border="0" width="455" height="165" id="Picture 15" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Literasi_files/image004.jpg"/></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Untuk dapat&#13;
  menghitung jumlah pohon apel dan dandelion dapat diperoleh dengan rumus&#13;
  berikut:</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Jumlah pohon&#13;
  apel = n<sup>2</sup></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Jumlah&#13;
  dandelion = 8n</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">(n = jumlah&#13;
  baris pohon apel)</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Apabila jumlah&#13;
  pohon apel yang ditanam berjumlah 81, jumlah dandelion yang ditanam di&#13;
  sekeliling pohon apel berjumlah ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Matematika',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Seorang pemilik&#13;
  perkebunan menanam pohon apel dengan pola persegi. Di sekeliling pohon-pohon&#13;
  apel tersebut ditanami tanaman dandelion untuk menarik polinator berupa&#13;
  lebah. Pola penanaman pohon apel dan dandelion tersebut dapat dilihat di&#13;
  bawah ini (n menunjukkan jumlah baris pohon apel).</span></p><p class="MsoNormal" style="margin-top:0in;margin-right:0in;margin-bottom:0in;&#13;&#10;  margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" align="center" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:28.35pt;text-align:center;line-height:115%"><span lang="IN" style="font-size:14.0pt;line-height:115%"><img border="0" width="455" height="165" id="Picture 6" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Literasi_files/image004.jpg"/></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Untuk dapat&#13;
  menghitung jumlah pohon apel dan dandelion dapat diperoleh dengan rumus&#13;
  berikut:</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Jumlah pohon&#13;
  apel = n<sup>2</sup></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Jumlah&#13;
  dandelion = 8n</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">(n = jumlah&#13;
  baris pohon apel)</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">1 baris pohon&#13;
  apel memerlukan lebar lahan 5 meter. Jika lahan yang akan ditanami memiliki&#13;
  lebar 80 meter, jumlah pohon apel yang dapat ditanam pada lahan tersebut&#13;
  adalah ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Matematika',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Organisasi&#13;
  Pembinaan Kesejahteraan Keluarga (PKK) menjadi sarana pemberdayaan perempuan.&#13;
  Strategi pemberdayaan dari PKK yaitu perempuan dapat mandiri dan&#13;
  berkontribusi dalam peningkatan kesejahteraan keluarga. Sebuah kelompok PKK&#13;
  di Desa Baturappe memperoleh bantuan dari Pemerintah Kabupaten Gowa berupa&#13;
  sebidang tanah seluas 216 m<sup>2</sup>. Panjang tanah tersebut 6 m kurangnya&#13;
  dari dua kali lebarnya. Tanah tersebut rencananya akan dimanfaatkan oleh&#13;
  kelompok PKK sebagai kebun sayur organik. Sebelum ditanami, tanah tersebut&#13;
  akan dipupuk secara merata untuk meningkatkan kesuburan tanah. Biaya untuk&#13;
  memupuk tanah tersebut sebesar Rp675,00 per m<sup>2</sup>. Di sekililing&#13;
  tanah tersebut akan ditanami bibit pohon turi dengan jarak antarpohon 3 m.&#13;
  Harga satu bibit pohon turi adalah Rp16.000,00.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Berdasarkan&#13;
  fakta-fakta pada teks, berilah tanda (√) pada </span><span style="font-size:&#13;&#10;  12.0pt;line-height:115%">kolom</span><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%"> yang sesuai.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
        'question_type' => 2
    ),
    array(
        'sub_title' => 'Penalaran Matematika',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Organisasi&#13;
  Pembinaan Kesejahteraan Keluarga (PKK) menjadi sarana pemberdayaan perempuan.&#13;
  Strategi pemberdayaan dari PKK yaitu perempuan dapat mandiri dan&#13;
  berkontribusi dalam peningkatan kesejahteraan keluarga. Sebuah kelompok PKK&#13;
  di Desa Baturappe memperoleh bantuan dari Pemerintah Kabupaten Gowa berupa&#13;
  sebidang tanah seluas 216 m<sup>2</sup>. Panjang tanah tersebut 6 m kurangnya&#13;
  dari dua kali lebarnya. Tanah tersebut rencananya akan dimanfaatkan oleh&#13;
  kelompok PKK sebagai kebun sayur organik. Sebelum ditanami, tanah tersebut&#13;
  akan dipupuk secara merata untuk meningkatkan kesuburan tanah. Biaya untuk&#13;
  memupuk tanah tersebut sebesar Rp675,00 per m<sup>2</sup>. Di sekililing&#13;
  tanah tersebut akan ditanami bibit pohon turi dengan jarak antarpohon 3 m.&#13;
  Harga satu bibit pohon turi adalah Rp16.000,00.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Banyak bibit&#13;
  pohon turi yang dibutuhkan adalah ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Matematika',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Organisasi&#13;
  Pembinaan Kesejahteraan Keluarga (PKK) menjadi sarana pemberdayaan perempuan.&#13;
  Strategi pemberdayaan dari PKK yaitu perempuan dapat mandiri dan&#13;
  berkontribusi dalam peningkatan kesejahteraan keluarga. Sebuah kelompok PKK&#13;
  di Desa Baturappe memperoleh bantuan dari Pemerintah Kabupaten Gowa berupa&#13;
  sebidang tanah seluas 216 m<sup>2</sup>. Panjang tanah tersebut 6 m kurangnya&#13;
  dari dua kali lebarnya. Tanah tersebut rencananya akan dimanfaatkan oleh&#13;
  kelompok PKK sebagai kebun sayur organik. Sebelum ditanami, tanah tersebut&#13;
  akan dipupuk secara merata untuk meningkatkan kesuburan tanah. Biaya untuk&#13;
  memupuk tanah tersebut sebesar Rp675,00 per m<sup>2</sup>. Di sekililing&#13;
  tanah tersebut akan ditanami bibit pohon turi dengan jarak antarpohon 3 m.&#13;
  Harga satu bibit pohon turi adalah Rp16.000,00.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Biaya untuk&#13;
  membeli bibit pohon turi adalah ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Matematika',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Organisasi&#13;
  Pembinaan Kesejahteraan Keluarga (PKK) menjadi sarana pemberdayaan perempuan.&#13;
  Strategi pemberdayaan dari PKK yaitu perempuan dapat mandiri dan&#13;
  berkontribusi dalam peningkatan kesejahteraan keluarga. Sebuah kelompok PKK&#13;
  di Desa Baturappe memperoleh bantuan dari Pemerintah Kabupaten Gowa berupa&#13;
  sebidang tanah seluas 216 m<sup>2</sup>. Panjang tanah tersebut 6 m kurangnya&#13;
  dari dua kali lebarnya. Tanah tersebut rencananya akan dimanfaatkan oleh&#13;
  kelompok PKK sebagai kebun sayur organik. Sebelum ditanami, tanah tersebut&#13;
  akan dipupuk secara merata untuk meningkatkan kesuburan tanah. Biaya untuk&#13;
  memupuk tanah tersebut sebesar Rp675,00 per m<sup>2</sup>. Di sekililing&#13;
  tanah tersebut akan ditanami bibit pohon turi dengan jarak antarpohon 3 m.&#13;
  Harga satu bibit pohon turi adalah Rp16.000,00.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Jika luas tanah&#13;
  tidak lebih dari 216 m<sup>2</sup>, maka lebar tanah yang mungkin adalah ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Matematika',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Dua orang&#13;
  karyawan di Salemba Group mendaftar sebagai peserta asuransi kesehatan dengan&#13;
  besar premi yang sama. Untuk membayar premi asuransi tersebut, karyawan A&#13;
  yang memiliki gaji Rp8.000.000,00 akan dikenakan potongan gaji sebesar 1,5%,&#13;
  sedangkan karyawan B dikenakan potongan gaji sebesar 2%.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Berdasarkan&#13;
  informasi tersebut, besar gaji karyawan B adalah ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Matematika',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Dua orang&#13;
  karyawan di Salemba Group mendaftar sebagai peserta asuransi kesehatan dengan&#13;
  besar premi yang sama. Untuk membayar premi asuransi tersebut, karyawan A&#13;
  yang memiliki gaji Rp8.000.000,00 akan dikenakan potongan gaji sebesar 1,5%,&#13;
  sedangkan karyawan B dikenakan potongan gaji sebesar 2%.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Pernyataan yang&#13;
  tepat berkaitan dengan informasi tersebut adalah ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Matematika',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Lima orang&#13;
  siswa mengikuti tes penempatan peminatan kelas. Tes tersebut berjumlah 20&#13;
  soal dengan kriteria penilaian sebagai berikut:</span></p><p class="MsoListParagraphCxSpFirst" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:22.35pt;text-align:justify;text-indent:-21.3pt;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  font-family:Symbol">·<span style="font:7.0pt &quot;Times New Roman&quot;">          &#13;
  </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Nilai benar diberi skor 5</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:22.35pt;text-align:justify;text-indent:-21.3pt;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  font-family:Symbol">·<span style="font:7.0pt &quot;Times New Roman&quot;">          &#13;
  </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Tidak menjawab diberi skor 0</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:22.35pt;text-align:justify;text-indent:-21.3pt;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  font-family:Symbol">·<span style="font:7.0pt &quot;Times New Roman&quot;">          &#13;
  </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Nilai salah diberi skor –2</span></p><p class="MsoNormal" style="margin-top:0in;margin-right:0in;margin-bottom:0in;&#13;&#10;  margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Setelah&#13;
  diperiksa, siswa-siswa tersebut mendapatkan nilai seperti yang tertera pada&#13;
  tabel berikut.</span></p><div align="center">&#13;
  <table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" style="border-collapse:collapse;border:none">&#13;
   <tr style="height:15.4pt">&#13;
    <td width="47" valign="top" style="width:35.2pt;border:solid windowtext 1.0pt;&#13;&#10;    background:#BFBFBF;padding:0in 5.4pt 0in 5.4pt;height:15.4pt">&#13;
    <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;&#13;&#10;    line-height:115%"><b><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;    115%;color:black">Siswa</span></b></p>&#13;
    </td>&#13;
    <td width="95" valign="top" style="width:70.9pt;border:solid windowtext 1.0pt;&#13;&#10;    border-left:none;background:#BFBFBF;padding:0in 5.4pt 0in 5.4pt;height:&#13;&#10;    15.4pt">&#13;
    <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;&#13;&#10;    line-height:115%"><b><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;    115%;color:black">Nilai</span></b></p>&#13;
    </td>&#13;
   </tr>&#13;
   <tr style="height:16.3pt">&#13;
    <td width="47" valign="top" style="width:35.2pt;border:solid windowtext 1.0pt;&#13;&#10;    border-top:none;padding:0in 5.4pt 0in 5.4pt;height:16.3pt">&#13;
    <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;&#13;&#10;    line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">A</span></p>&#13;
    </td>&#13;
    <td width="95" valign="top" style="width:70.9pt;border-top:none;border-left:&#13;&#10;    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt;height:16.3pt">&#13;
    <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;&#13;&#10;    line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">81</span></p>&#13;
    </td>&#13;
   </tr>&#13;
   <tr style="height:15.4pt">&#13;
    <td width="47" valign="top" style="width:35.2pt;border:solid windowtext 1.0pt;&#13;&#10;    border-top:none;padding:0in 5.4pt 0in 5.4pt;height:15.4pt">&#13;
    <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;&#13;&#10;    line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">B</span></p>&#13;
    </td>&#13;
    <td width="95" valign="top" style="width:70.9pt;border-top:none;border-left:&#13;&#10;    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt;height:15.4pt">&#13;
    <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;&#13;&#10;    line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">88</span></p>&#13;
    </td>&#13;
   </tr>&#13;
   <tr style="height:16.3pt">&#13;
    <td width="47" valign="top" style="width:35.2pt;border:solid windowtext 1.0pt;&#13;&#10;    border-top:none;padding:0in 5.4pt 0in 5.4pt;height:16.3pt">&#13;
    <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;&#13;&#10;    line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">C</span></p>&#13;
    </td>&#13;
    <td width="95" valign="top" style="width:70.9pt;border-top:none;border-left:&#13;&#10;    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt;height:16.3pt">&#13;
    <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;&#13;&#10;    line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">97</span></p>&#13;
    </td>&#13;
   </tr>&#13;
   <tr style="height:15.4pt">&#13;
    <td width="47" valign="top" style="width:35.2pt;border:solid windowtext 1.0pt;&#13;&#10;    border-top:none;padding:0in 5.4pt 0in 5.4pt;height:15.4pt">&#13;
    <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;&#13;&#10;    line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">D</span></p>&#13;
    </td>&#13;
    <td width="95" valign="top" style="width:70.9pt;border-top:none;border-left:&#13;&#10;    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt;height:15.4pt">&#13;
    <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;&#13;&#10;    line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">63</span></p>&#13;
    </td>&#13;
   </tr>&#13;
   <tr style="height:15.4pt">&#13;
    <td width="47" valign="top" style="width:35.2pt;border:solid windowtext 1.0pt;&#13;&#10;    border-top:none;padding:0in 5.4pt 0in 5.4pt;height:15.4pt">&#13;
    <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;&#13;&#10;    line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">E</span></p>&#13;
    </td>&#13;
    <td width="95" valign="top" style="width:70.9pt;border-top:none;border-left:&#13;&#10;    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt;height:15.4pt">&#13;
    <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;&#13;&#10;    line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">79</span></p>&#13;
    </td>&#13;
   </tr>&#13;
  </table>&#13;
  </div><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Saat di cek&#13;
  ulang, terdapat kesalahan hitung pada nilai salah satu siswa. Siswa tersebut&#13;
  adalah ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Matematika',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Lima orang&#13;
  siswa mengikuti tes penempatan peminatan kelas. Tes tersebut berjumlah 20&#13;
  soal dengan kriteria penilaian sebagai berikut:</span></p><p class="MsoListParagraphCxSpFirst" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:22.35pt;text-align:justify;text-indent:-21.3pt;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  font-family:Symbol">·<span style="font:7.0pt &quot;Times New Roman&quot;">          &#13;
  </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Nilai benar diberi skor 5</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:22.35pt;text-align:justify;text-indent:-21.3pt;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  font-family:Symbol">·<span style="font:7.0pt &quot;Times New Roman&quot;">          &#13;
  </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Tidak menjawab diberi skor 0</span></p><p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;&#13;&#10;  margin-bottom:0in;margin-left:22.35pt;text-align:justify;text-indent:-21.3pt;&#13;&#10;  line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  font-family:Symbol">·<span style="font:7.0pt &quot;Times New Roman&quot;">          &#13;
  </span></span><span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Nilai salah diberi skor –2</span></p><p class="MsoNormal" style="margin-top:0in;margin-right:0in;margin-bottom:0in;&#13;&#10;  margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Setelah diperiksa,&#13;
  siswa-siswa tersebut mendapatkan nilai seperti yang tertera pada tabel&#13;
  berikut.</span></p><div align="center">&#13;
  <table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" style="border-collapse:collapse;border:none">&#13;
   <tr style="height:15.4pt">&#13;
    <td width="47" valign="top" style="width:35.2pt;border:solid windowtext 1.0pt;&#13;&#10;    background:#BFBFBF;padding:0in 5.4pt 0in 5.4pt;height:15.4pt">&#13;
    <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;&#13;&#10;    line-height:115%"><b><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;    115%;color:black">Siswa</span></b></p>&#13;
    </td>&#13;
    <td width="95" valign="top" style="width:70.9pt;border:solid windowtext 1.0pt;&#13;&#10;    border-left:none;background:#BFBFBF;padding:0in 5.4pt 0in 5.4pt;height:&#13;&#10;    15.4pt">&#13;
    <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;&#13;&#10;    line-height:115%"><b><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;    115%;color:black">Nilai</span></b></p>&#13;
    </td>&#13;
   </tr>&#13;
   <tr style="height:16.3pt">&#13;
    <td width="47" valign="top" style="width:35.2pt;border:solid windowtext 1.0pt;&#13;&#10;    border-top:none;padding:0in 5.4pt 0in 5.4pt;height:16.3pt">&#13;
    <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;&#13;&#10;    line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">A</span></p>&#13;
    </td>&#13;
    <td width="95" valign="top" style="width:70.9pt;border-top:none;border-left:&#13;&#10;    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt;height:16.3pt">&#13;
    <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;&#13;&#10;    line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">81</span></p>&#13;
    </td>&#13;
   </tr>&#13;
   <tr style="height:15.4pt">&#13;
    <td width="47" valign="top" style="width:35.2pt;border:solid windowtext 1.0pt;&#13;&#10;    border-top:none;padding:0in 5.4pt 0in 5.4pt;height:15.4pt">&#13;
    <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;&#13;&#10;    line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">B</span></p>&#13;
    </td>&#13;
    <td width="95" valign="top" style="width:70.9pt;border-top:none;border-left:&#13;&#10;    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt;height:15.4pt">&#13;
    <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;&#13;&#10;    line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">88</span></p>&#13;
    </td>&#13;
   </tr>&#13;
   <tr style="height:16.3pt">&#13;
    <td width="47" valign="top" style="width:35.2pt;border:solid windowtext 1.0pt;&#13;&#10;    border-top:none;padding:0in 5.4pt 0in 5.4pt;height:16.3pt">&#13;
    <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;&#13;&#10;    line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">C</span></p>&#13;
    </td>&#13;
    <td width="95" valign="top" style="width:70.9pt;border-top:none;border-left:&#13;&#10;    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt;height:16.3pt">&#13;
    <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;&#13;&#10;    line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">97</span></p>&#13;
    </td>&#13;
   </tr>&#13;
   <tr style="height:15.4pt">&#13;
    <td width="47" valign="top" style="width:35.2pt;border:solid windowtext 1.0pt;&#13;&#10;    border-top:none;padding:0in 5.4pt 0in 5.4pt;height:15.4pt">&#13;
    <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;&#13;&#10;    line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">D</span></p>&#13;
    </td>&#13;
    <td width="95" valign="top" style="width:70.9pt;border-top:none;border-left:&#13;&#10;    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt;height:15.4pt">&#13;
    <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;&#13;&#10;    line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">63</span></p>&#13;
    </td>&#13;
   </tr>&#13;
   <tr style="height:15.4pt">&#13;
    <td width="47" valign="top" style="width:35.2pt;border:solid windowtext 1.0pt;&#13;&#10;    border-top:none;padding:0in 5.4pt 0in 5.4pt;height:15.4pt">&#13;
    <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;&#13;&#10;    line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">E</span></p>&#13;
    </td>&#13;
    <td width="95" valign="top" style="width:70.9pt;border-top:none;border-left:&#13;&#10;    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt;height:15.4pt">&#13;
    <p class="MsoNormal" align="center" style="margin-bottom:0in;text-align:center;&#13;&#10;    line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">79</span></p>&#13;
    </td>&#13;
   </tr>&#13;
  </table>&#13;
  </div><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Siswa yang&#13;
  mempunyai jumlah soal benar yang sama adalah ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Matematika',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Dika melakukan&#13;
  wisata ke Bendungan Karet Tirtonadi. Selama menikmati wisata air, Dika&#13;
  penasaran dengan lebar sungai. Dika melakukan percobaan untuk mengetahui&#13;
  lebar sungai dengan membuat sketsa pada sebuah kertas seperti berikut.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:14.0pt;line-height:115%"><img border="0" width="227" height="148" id="Picture 7" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Literasi_files/image005.png"/></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Berdasarkan&#13;
  sketsa yang dibuat oleh Dika, berilah tanda (√) pada </span><span style="font-size:12.0pt;line-height:115%">kolom</span><span lang="IN" style="font-size:12.0pt;line-height:115%"> yang sesuai.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
        'question_type' => 2
    ),
    array(
        'sub_title' => 'Penalaran Matematika',
        'question_desc' => '<p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Dika melakukan&#13;
  wisata ke Bendungan Karet Tirtonadi. Selama menikmati wisata air, Dika&#13;
  penasaran dengan lebar sungai. Dika melakukan percobaan untuk mengetahui&#13;
  lebar sungai dengan membuat sketsa pada sebuah kertas seperti berikut.</span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:14.0pt;line-height:115%"><img border="0" width="227" height="148" id="Picture 5" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Literasi_files/image005.png"/></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Jika diketahui&#13;
  BC = 20 meter dan besar </span><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.5pt"><img width="63" height="24" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Literasi_files/image009.png"/></span><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">, maka lebar sungai tersebut adalah ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Matematika',
        'question_desc' => '<p class="MsoListParagraph" style="margin-top:0in;margin-right:0in;margin-bottom:&#13;&#10;  0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:14.0pt;line-height:115%"><img border="0" width="220" height="149" id="Picture 1" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Literasi_files/image016.jpg"/></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Di sebuah jalan&#13;
  dua arah terdapat terowongan dengan ukuran seperti pada gambar di atas. Pada&#13;
  suatu hari terdapat 5 buah truk dengan ukuran lebar dan tinggi (dihitung dari&#13;
  ban sampai bagian atas truk) sebagai berikut.</span></p><table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" style="margin-left:28.35pt;border-collapse:collapse;border:none">&#13;
   <tr>&#13;
    <td width="56" style="width:42.3pt;border:solid windowtext 1.0pt;padding:&#13;&#10;    0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpFirst" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">Truk</span></b></p>&#13;
    </td>&#13;
    <td width="94" style="width:70.85pt;border:solid windowtext 1.0pt;border-left:&#13;&#10;    none;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpMiddle" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">Lebar</span></b></p>&#13;
    </td>&#13;
    <td width="95" style="width:70.9pt;border:solid windowtext 1.0pt;border-left:&#13;&#10;    none;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpLast" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">Tinggi</span></b></p>&#13;
    </td>&#13;
   </tr>&#13;
   <tr>&#13;
    <td width="56" style="width:42.3pt;border:solid windowtext 1.0pt;border-top:&#13;&#10;    none;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpFirst" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">A</span></b></p>&#13;
    </td>&#13;
    <td width="94" style="width:70.85pt;border-top:none;border-left:none;&#13;&#10;    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpMiddle" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">2,4 m</span></p>&#13;
    </td>&#13;
    <td width="95" style="width:70.9pt;border-top:none;border-left:none;&#13;&#10;    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpLast" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">2,1 m</span></p>&#13;
    </td>&#13;
   </tr>&#13;
   <tr>&#13;
    <td width="56" style="width:42.3pt;border:solid windowtext 1.0pt;border-top:&#13;&#10;    none;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpFirst" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">B</span></b></p>&#13;
    </td>&#13;
    <td width="94" style="width:70.85pt;border-top:none;border-left:none;&#13;&#10;    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpMiddle" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">2,1 m</span></p>&#13;
    </td>&#13;
    <td width="95" style="width:70.9pt;border-top:none;border-left:none;&#13;&#10;    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpLast" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">3,9 m</span></p>&#13;
    </td>&#13;
   </tr>&#13;
   <tr>&#13;
    <td width="56" style="width:42.3pt;border:solid windowtext 1.0pt;border-top:&#13;&#10;    none;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpFirst" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">C</span></b></p>&#13;
    </td>&#13;
    <td width="94" style="width:70.85pt;border-top:none;border-left:none;&#13;&#10;    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpMiddle" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">2,0 m</span></p>&#13;
    </td>&#13;
    <td width="95" style="width:70.9pt;border-top:none;border-left:none;&#13;&#10;    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpLast" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">4,8 m</span></p>&#13;
    </td>&#13;
   </tr>&#13;
   <tr>&#13;
    <td width="56" style="width:42.3pt;border:solid windowtext 1.0pt;border-top:&#13;&#10;    none;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpFirst" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">D</span></b></p>&#13;
    </td>&#13;
    <td width="94" style="width:70.85pt;border-top:none;border-left:none;&#13;&#10;    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpMiddle" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">1,9 m</span></p>&#13;
    </td>&#13;
    <td width="95" style="width:70.9pt;border-top:none;border-left:none;&#13;&#10;    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpLast" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">5,0 m</span></p>&#13;
    </td>&#13;
   </tr>&#13;
   <tr>&#13;
    <td width="56" style="width:42.3pt;border:solid windowtext 1.0pt;border-top:&#13;&#10;    none;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpFirst" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">E</span></b></p>&#13;
    </td>&#13;
    <td width="94" style="width:70.85pt;border-top:none;border-left:none;&#13;&#10;    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpMiddle" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">1,8 m</span></p>&#13;
    </td>&#13;
    <td width="95" style="width:70.9pt;border-top:none;border-left:none;&#13;&#10;    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpLast" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">5,0 m</span></p>&#13;
    </td>&#13;
   </tr>&#13;
  </table><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Misalkan titik&#13;
  tengah jalan merupakan koordinat (0,0), maka fungsi kuadrat yang&#13;
  menggambarkan persamaan terowongan tersebut adalah ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Matematika',
        'question_desc' => '<p class="MsoListParagraph" style="margin-top:0in;margin-right:0in;margin-bottom:&#13;&#10;  0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:14.0pt;line-height:115%"><img border="0" width="220" height="149" id="Picture 12" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Literasi_files/image016.jpg"/></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Di sebuah jalan&#13;
  dua arah terdapat terowongan dengan ukuran seperti pada gambar di atas. Pada&#13;
  suatu hari terdapat 5 buah truk dengan ukuran lebar dan tinggi (dihitung dari&#13;
  ban sampai bagian atas truk) sebagai berikut.</span></p><table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" style="margin-left:28.35pt;border-collapse:collapse;border:none">&#13;
   <tr>&#13;
    <td width="56" style="width:42.3pt;border:solid windowtext 1.0pt;padding:&#13;&#10;    0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpFirst" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">Truk</span></b></p>&#13;
    </td>&#13;
    <td width="94" style="width:70.85pt;border:solid windowtext 1.0pt;border-left:&#13;&#10;    none;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpMiddle" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">Lebar</span></b></p>&#13;
    </td>&#13;
    <td width="95" style="width:70.9pt;border:solid windowtext 1.0pt;border-left:&#13;&#10;    none;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpLast" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">Tinggi</span></b></p>&#13;
    </td>&#13;
   </tr>&#13;
   <tr>&#13;
    <td width="56" style="width:42.3pt;border:solid windowtext 1.0pt;border-top:&#13;&#10;    none;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpFirst" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">A</span></b></p>&#13;
    </td>&#13;
    <td width="94" style="width:70.85pt;border-top:none;border-left:none;&#13;&#10;    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpMiddle" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">2,4 m</span></p>&#13;
    </td>&#13;
    <td width="95" style="width:70.9pt;border-top:none;border-left:none;&#13;&#10;    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpLast" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">2,1 m</span></p>&#13;
    </td>&#13;
   </tr>&#13;
   <tr>&#13;
    <td width="56" style="width:42.3pt;border:solid windowtext 1.0pt;border-top:&#13;&#10;    none;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpFirst" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">B</span></b></p>&#13;
    </td>&#13;
    <td width="94" style="width:70.85pt;border-top:none;border-left:none;&#13;&#10;    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpMiddle" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">2,1 m</span></p>&#13;
    </td>&#13;
    <td width="95" style="width:70.9pt;border-top:none;border-left:none;&#13;&#10;    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpLast" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">3,9 m</span></p>&#13;
    </td>&#13;
   </tr>&#13;
   <tr>&#13;
    <td width="56" style="width:42.3pt;border:solid windowtext 1.0pt;border-top:&#13;&#10;    none;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpFirst" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">C</span></b></p>&#13;
    </td>&#13;
    <td width="94" style="width:70.85pt;border-top:none;border-left:none;&#13;&#10;    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpMiddle" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">2,0 m</span></p>&#13;
    </td>&#13;
    <td width="95" style="width:70.9pt;border-top:none;border-left:none;&#13;&#10;    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpLast" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">4,8 m</span></p>&#13;
    </td>&#13;
   </tr>&#13;
   <tr>&#13;
    <td width="56" style="width:42.3pt;border:solid windowtext 1.0pt;border-top:&#13;&#10;    none;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpFirst" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">D</span></b></p>&#13;
    </td>&#13;
    <td width="94" style="width:70.85pt;border-top:none;border-left:none;&#13;&#10;    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpMiddle" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">1,9 m</span></p>&#13;
    </td>&#13;
    <td width="95" style="width:70.9pt;border-top:none;border-left:none;&#13;&#10;    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpLast" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">5,0 m</span></p>&#13;
    </td>&#13;
   </tr>&#13;
   <tr>&#13;
    <td width="56" style="width:42.3pt;border:solid windowtext 1.0pt;border-top:&#13;&#10;    none;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpFirst" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">E</span></b></p>&#13;
    </td>&#13;
    <td width="94" style="width:70.85pt;border-top:none;border-left:none;&#13;&#10;    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpMiddle" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">1,8 m</span></p>&#13;
    </td>&#13;
    <td width="95" style="width:70.9pt;border-top:none;border-left:none;&#13;&#10;    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpLast" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">5,0 m</span></p>&#13;
    </td>&#13;
   </tr>&#13;
  </table><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Jika truk tidak&#13;
  diizinkan untuk melewati batas jalan dan terowongan, maka truk mana saja yang&#13;
  tidak dapat melewati terowongan tersebut?</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
    array(
        'sub_title' => 'Penalaran Matematika',
        'question_desc' => '<p class="MsoListParagraph" style="margin-top:0in;margin-right:0in;margin-bottom:&#13;&#10;  0in;margin-left:28.35pt;text-align:justify;line-height:115%"><span lang="IN" style="font-size:14.0pt;line-height:115%"><img border="0" width="220" height="149" id="Picture 17" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Literasi_files/image016.jpg"/></span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Di sebuah jalan&#13;
  dua arah terdapat terowongan dengan ukuran seperti pada gambar di atas. Pada&#13;
  suatu hari terdapat 5 buah truk dengan ukuran lebar dan tinggi (dihitung dari&#13;
  ban sampai bagian atas truk) sebagai berikut.</span></p><table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" style="margin-left:28.35pt;border-collapse:collapse;border:none">&#13;
   <tr>&#13;
    <td width="56" style="width:42.3pt;border:solid windowtext 1.0pt;padding:&#13;&#10;    0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpFirst" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">Truk</span></b></p>&#13;
    </td>&#13;
    <td width="94" style="width:70.85pt;border:solid windowtext 1.0pt;border-left:&#13;&#10;    none;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpMiddle" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">Lebar</span></b></p>&#13;
    </td>&#13;
    <td width="95" style="width:70.9pt;border:solid windowtext 1.0pt;border-left:&#13;&#10;    none;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpLast" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">Tinggi</span></b></p>&#13;
    </td>&#13;
   </tr>&#13;
   <tr>&#13;
    <td width="56" style="width:42.3pt;border:solid windowtext 1.0pt;border-top:&#13;&#10;    none;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpFirst" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">A</span></b></p>&#13;
    </td>&#13;
    <td width="94" style="width:70.85pt;border-top:none;border-left:none;&#13;&#10;    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpMiddle" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">2,4 m</span></p>&#13;
    </td>&#13;
    <td width="95" style="width:70.9pt;border-top:none;border-left:none;&#13;&#10;    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpLast" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">2,1 m</span></p>&#13;
    </td>&#13;
   </tr>&#13;
   <tr>&#13;
    <td width="56" style="width:42.3pt;border:solid windowtext 1.0pt;border-top:&#13;&#10;    none;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpFirst" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">B</span></b></p>&#13;
    </td>&#13;
    <td width="94" style="width:70.85pt;border-top:none;border-left:none;&#13;&#10;    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpMiddle" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">2,1 m</span></p>&#13;
    </td>&#13;
    <td width="95" style="width:70.9pt;border-top:none;border-left:none;&#13;&#10;    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpLast" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">3,9 m</span></p>&#13;
    </td>&#13;
   </tr>&#13;
   <tr>&#13;
    <td width="56" style="width:42.3pt;border:solid windowtext 1.0pt;border-top:&#13;&#10;    none;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpFirst" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">C</span></b></p>&#13;
    </td>&#13;
    <td width="94" style="width:70.85pt;border-top:none;border-left:none;&#13;&#10;    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpMiddle" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">2,0 m</span></p>&#13;
    </td>&#13;
    <td width="95" style="width:70.9pt;border-top:none;border-left:none;&#13;&#10;    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpLast" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">4,8 m</span></p>&#13;
    </td>&#13;
   </tr>&#13;
   <tr>&#13;
    <td width="56" style="width:42.3pt;border:solid windowtext 1.0pt;border-top:&#13;&#10;    none;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpFirst" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">D</span></b></p>&#13;
    </td>&#13;
    <td width="94" style="width:70.85pt;border-top:none;border-left:none;&#13;&#10;    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpMiddle" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">1,9 m</span></p>&#13;
    </td>&#13;
    <td width="95" style="width:70.9pt;border-top:none;border-left:none;&#13;&#10;    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpLast" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">5,0 m</span></p>&#13;
    </td>&#13;
   </tr>&#13;
   <tr>&#13;
    <td width="56" style="width:42.3pt;border:solid windowtext 1.0pt;border-top:&#13;&#10;    none;padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpFirst" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><b><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">E</span></b></p>&#13;
    </td>&#13;
    <td width="94" style="width:70.85pt;border-top:none;border-left:none;&#13;&#10;    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpMiddle" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">1,8 m</span></p>&#13;
    </td>&#13;
    <td width="95" style="width:70.9pt;border-top:none;border-left:none;&#13;&#10;    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;&#13;&#10;    padding:0in 5.4pt 0in 5.4pt">&#13;
    <p class="MsoListParagraphCxSpLast" align="center" style="margin:0in;&#13;&#10;    text-align:center;line-height:115%"><span lang="IN" style="font-size:12.0pt;&#13;&#10;    line-height:115%">5,0 m</span></p>&#13;
    </td>&#13;
   </tr>&#13;
  </table><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p><p class="MsoNormal" style="margin-bottom:0in;text-align:justify;line-height:&#13;&#10;  115%"><span lang="IN" style="font-size:12.0pt;line-height:115%">Agar suatu truk&#13;
  dapat membawa barang sebanyak-banyaknya, maka ukuran truk maksimum (lebar ×&#13;
  tinggi) yang dapat melewati terowongan itu adalah (abaikan panjang truk) ...</span></p><p class="MsoNormal" style="margin-bottom:0in;line-height:115%"><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span></p>',
    ),
);
$tryoutChoicesPKG = array(
    array(
        'qnum' => 1,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Orang yang tidak divaksinasi memiliki&#13;
  risiko lebih besar terserang pneumonia.</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 1,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Vaksinasi&#13;
  merupakan cara paling efektif untuk mencegah pneumonia.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 1,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Vaksinasi&#13;
  penumonia dapat membuat seseorang sembuh dari radang paru-paru.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 1,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Infeksi&#13;
  virus, bakteri, dan jamur tidak akan terjadi jika tidak ada kontak antara&#13;
  penderita dan orang sehat.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 1,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Orang&#13;
  yang terinfeksi pneumonia tidak dapat menerima vaksin.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 2,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Industri&#13;
  tekstil dan garmen menyerap 250 juta tenaga kerja.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 2,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Industri&#13;
  tekstil termasuk tiga besar sektor manufaktur Indonesia.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 2,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Industri&#13;
  tekstil berhasil mengekspor produk senilai US$11,8 miliar.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 2,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Industri&#13;
  tekstil merupakan kebutuhan pokok seluruh rakyat Indonesia.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 2,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Industri tekstil tanah air dipantau oleh&#13;
  Asosiasi Pertekstilan Indonesia (API).</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 3,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">LPI&#13;
  menunjukkan waktu kiriman antarnegara.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 3,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">LPI&#13;
  menunjukkan besar pajak bea dan cukai yang berlaku di suatu negara.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 3,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">LPI&#13;
  menunjukkan biaya pengiriman barang secara internasional.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 3,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">LPI menunjukkan kinerja distribusi barang&#13;
  milik suatu negara.</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 3,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">LPI&#13;
  menunjukkan performa distribusi barang suatu negara setiap tahun.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 4,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Kualifikasi akademik pengajar tidak&#13;
  terlalu berperan penting dalam proses pengajaran.</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 4,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kemdikbud&#13;
  mendefinisikan guru dan kualifikasi pendidikan sebagai guru layak mengajar.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 4,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Guru pada&#13;
  jenjang pendidikan dasar dan menengah harus memiliki pendidikan terakhir&#13;
  diploma empat (D4) atau sarjana 1 (S1).</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 4,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Permendiknas&#13;
  RI Nomor 16 tahun 2007 membahas mengenai kualifikasi akademik minimum guru&#13;
  sekolah dasar dan sekolah menengah.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 4,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Tingkat&#13;
  pendidikan terakhir yang ditamatkan menentukan kualifikasi akademik pengajar.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 5,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Robot&#13;
  selain robot hitam kuning tidak dapat digunakan sebagai asisten rumah tangga.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 5,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Robot yang digunakan sebagai pengirim&#13;
  barang adalah bukti kemajuan teknologi di Tiongkok.</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 5,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Robot&#13;
  hitam kuning di Tiongkok adalah robot paling canggih di dunia.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 5,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Semua&#13;
  orang di Tiongkok menggunakan robot untuk membantu kehidupan sehari-hari.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 5,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Seluruh&#13;
  pekerjaan orang Tiongkok dilakukan oleh robot.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 6,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Penyebab&#13;
  <i>Maternal Death </i>adalah kematian karena kecelakaan atau karena&#13;
  kebetulan.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 6,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><i><span lang="IN" style="font-size:12.0pt;line-height:115%">Maternal&#13;
  death</span></i><span lang="IN" style="font-size:12.0pt;line-height:115%">&#13;
  adalah angka kematian ibu per 100.000 kelahiran hidup.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 6,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><i><span lang="IN" style="font-size:12.0pt;line-height:115%">Maternal&#13;
  mortality ratio </span></i><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">kematian yang terjadi saat kehamilan, atau selama 42 hari sejak&#13;
  terminasi kehamilan, tanpa memperhitungkan durasi dan tempat kehamilan, yang&#13;
  disebabkan atau diperparah oleh kehamilan atau pengelolaan kehamilan&#13;
  tersebut, tetapi bukan disebabkan oleh kecelakaan atau kebetulan.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 6,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Angka Kematian Ibu adalah angka kematian&#13;
  ibu per 100.000 kelahiran hidup.</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 6,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><i><span lang="IN" style="font-size:12.0pt;line-height:115%">World&#13;
  Health Organization</span></i><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%"> (WHO) memiliki beberapa istilah yang sama terkait dengan&#13;
  AKI.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 7,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kondisi&#13;
  geografisnya tidak dikatakan unik.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 7,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Pembangunan&#13;
  di Samosir terus mengalami peningkatan.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 7,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Samosir&#13;
  memiliki fondasi keuangan yang stabil.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 7,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Wisatawan&#13;
  lebih tertarik untuk berkunjung di Danau Toba dibandingkan daerah lain.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 7,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Samosir tidak dijadikan andalan pariwisata&#13;
  dan sumber pemasukan daerah.</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 8,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Transportasi publik menjadi salah satu&#13;
  sektor usaha yang ikut terdampak pandemi Covid-19.</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 8,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Pendapatan&#13;
  perusahaan bus pariwisata pada tahun pandemi menurun lebih dari 50 persen.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 8,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Pendapatan&#13;
  perusahaan taksi tidak sebanding dengan beban perusahaan sehingga mengalami&#13;
  kerugian.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 8,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Selama&#13;
  masa Pembatasan Sosial Berskala Besar (PSBB), semua jenis transportasi darat&#13;
  mengalami kerugian.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 8,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Penurunan&#13;
  kinerja semua perusahaan transportasi antarprovinsi disebabkan karena&#13;
  pelaksanaan pembatasan sosial.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 9,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Pencemaran&#13;
  lingkungan disebabkan kebutuhan kendaraan penduduk meningkat.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 9,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Peningkatan&#13;
  kebutuhan kendaraan penduduk akan mengurangi alat transportasi.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 9,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Jakarta, Surabaya, Medan, dan Bandung&#13;
  merupakan kota yang laju pertambahan kendaraannya yang terlihat.</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 9,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Laju&#13;
  pertambahan kendaraan terlihat di semua kota besar di Indonesia.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 9,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Bertambahnya&#13;
  kendaraan pribadi maupun umum menyebabkan pencemaran lingkungan.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 10,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Jumlah&#13;
  kuota siswa yang diterima dalam PPDB dari jalur prestasi dan perpindahan&#13;
  orang tua hampir sama.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 10,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Jalur&#13;
  zonasi memiliki jumlah kuota PPDB paling sedikit dibandingkan dengan jalur&#13;
  prestasi dan perpindahan orang tua.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 10,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Penerimaan&#13;
  siswa baru 2019 dilaksanakan melalui liga jalur, yaitu jalur zonasi, jalur&#13;
  prestasi bidang akademik, dan jalur prestasi bidang nonakademik.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 10,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Jalur&#13;
  prestasi hanya ditentukan oleh nilai Ujian Nasional (UN), tanpa ada kriteria&#13;
  lain yang menjadi bahan pertimbangannya.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 10,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Jalur zonasi selalu lebih banyak kuota&#13;
  PPDB walaupun kuota jalur prestasi dan perpindahan orang tua ditambahkan 10&#13;
  persen.</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 11,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Simpulan&#13;
  tersebut pasti benar.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 11,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Simpulan&#13;
  tersebut mungkin benar.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 11,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Simpulan&#13;
  tersebut pasti salah.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 11,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Simpulan tidak relevan dengan informasi&#13;
  yang diberikan.</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 11,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Simpulan&#13;
  tidak dapat dinilai karena informasi tidak cukup.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 12,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Pernyataan&#13;
  (1) adalah penyebab dan pernyataan (2) adalah akibat.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 12,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Pernyataan&#13;
  (2) adalah penyebab dan pernyataan (1) adalah akibat.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 12,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Pernyataan&#13;
  (1) dan (2) adalah penyebab, tetapi tidak saling berhubungan.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 12,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Pernyataan&#13;
  (1) dan (2) adalah akibat dari dua penyebab yang tidak saling berhubungan.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 12,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Pernyataan (1) dan (2) adalah akibat dari&#13;
  suatu penyebab yang sama.</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 13,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Air danau berwarna hijau kecoklatan dan&#13;
  keruh</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 13,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Air&#13;
  danau berwarna hijau kecoklatan atau keruh</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 13,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Hanya&#13;
  sedikit alga yang hidup pada danau</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 13,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Air&#13;
  danau tidak berwarna biru</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 13,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Air&#13;
  danau tidak terlihat jernih</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 14,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black;background:none">Rendang adalah masakan yang&#13;
  sulit dibuat.</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 14,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">Rendang hanya dimasak untuk acara-acara khusus.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 14,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">Rendang lebih banyak disukai daripada masakan&#13;
  lainnya.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 14,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">Rendang dimasak dengan menggunakan banyak&#13;
  rempah-rempah.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 14,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">Rendang yang dimasak dengan cepat kurang digemari&#13;
  orang.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 15,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Beberapa wilayah yang memiliki jumlah&#13;
  penduduk lebih banyak memilih tingkat kemacetan yang lebih tinggi.</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 15,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Jumlah&#13;
  penduduk yang banyak ikut berperan terhadap beban lalu lintas yang dilakukan&#13;
  oleh masyarakat.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 15,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kemacetan&#13;
  lalu lintas lebih banyak terjadi pada negara-negara yang masih berkembang&#13;
  karena pembangunan infrastruktur yang kurang.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 15,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Sebagian&#13;
  wilayah yang penduduknya sedikit memiliki tingkat kemacetan yang setara&#13;
  dengan wilayah yang penduduknya lebih banyak.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 15,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Beberapa&#13;
  daerah yang mengalami kemacetan memiliki fasilitas transportasi yang bisa&#13;
  menampung lebih banyak orang.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 16,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Banyak&#13;
  orang yang lebih percaya mengobatkan penyakitnya ke dokter daripada melalui&#13;
  pengobatan tradisional.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 16,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Penyakit yang dapat disembuhkan melalui&#13;
  cara minum atau menggunakan obat, jumlahnya sekitar 150 jenis.</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 16,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Hampir&#13;
  semua penyakit dapat disembuhkan melalui teknologi medis mutakhir.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 16,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Pengobatan&#13;
  tradisional memiliki peranan yang sama dengan penyembuhan secara teknologi&#13;
  media mutakhir.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 16,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Sebagian&#13;
  besar penyakit yang diderita oleh seseorang disembuhkan dengan intervensi&#13;
  obat yang berbeda-beda.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 17,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Adik&#13;
  naik kelas atau kakak tidak lulus tepat waktu.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 17,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Adik&#13;
  tidak naik kelas atau kakak tidak lulus tepat waktu.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 17,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Adik tidak naik kelas dan kakak tidak&#13;
  lulus tepat waktu.</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 17,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Ayah&#13;
  tidak membelikan komputer dan motor baru karena belum gajian.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 17,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Ayah&#13;
  hanya mampu membeli komputer maupun motor bekas.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 18,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Lawan&#13;
  main tim ABS tidak menggunakan pemain asing.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 18,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Sejak&#13;
  tiga tahun lalu manajemen tim ABS sudah merekrut pemain asing untuk bergabung&#13;
  dalam tim ABS.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 18,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Tahun&#13;
  ini tim ABS menerapkan strategi permainan yang berbeda dibandingkan&#13;
  sebelumnya.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 18,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Jumlah kemenangan tim ABS setelah pemain&#13;
  asing bergabung lebih banyak dibandingkan sebelumnya.</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 18,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Tim&#13;
  lawan tim ABS tahun ini tidak memiliki strategi permainan yang matang.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 19,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Rendi&#13;
  dan Vino belajar bahasa Inggris bersama.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 19,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Rendi&#13;
  dan Vino ingin melanjutkan sekolah di Australia.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 19,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Rendi dan&#13;
  Vino menyukai sekolah di Australia.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 19,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Rendi&#13;
  dan Vino belajar bahasa Inggris di Australia.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 19,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Rendi dan Vino menyukai pelajaran bahasa&#13;
  Inggris.</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 20,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Siswa&#13;
  kurang memperhatikan bel tanda masuk dan tidak ada pengumuman.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 20,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Guru&#13;
  lupa membunyikan bel tanda masuk dan tidak ada pengumuman.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 20,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Siswa&#13;
  tidak masuk kelas dan tidak ada upacara di lapangan.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 20,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Guru tidak membunyikan bel tanda masuk&#13;
  atau tidak ada pengumuman.</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 20,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Guru&#13;
  tidak memberikan pengumuman bahwa siswa harus masuk kelas.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 21,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">86 dan&#13;
  53</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 21,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">94 dan 47</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 21,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">97 dan&#13;
  50</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 21,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">98 dan 42</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 21,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">99 dan&#13;
  47</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 22,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">6</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 22,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">8</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 22,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">12</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 22,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">15</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 22,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">24</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 23,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="62" height="29" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image003.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> </span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 23,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="62" height="28" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image004.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> </span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 23,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="62" height="29" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image005.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> </span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 23,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="62" height="29" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image006.png"/></span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 23,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="62" height="29" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image007.png"/></span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 24,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">75</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 24,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">90</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 24,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">95</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 24,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">105</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 24,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">110</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 25,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Saat&#13;
  berat mobil bertambah, konsumsi bahan bakar juga bertambah</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 25,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Saat berat mobil bertambah, konsumsi&#13;
  bahan bakar menurun</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 25,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Saat&#13;
  berat mobil bertambah, konsumsi bahan bakar tidak berubah</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 25,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Saat berat mobil berkurang,&#13;
  konsumsi bahan bakar juga berkurang</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 25,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Saat&#13;
  berat mobil berkurang, konsumsi bahan bakar bertambah</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 26,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%"><img border="0" width="156" height="133" id="Picture 19" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image009.png"/></span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 26,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%"><img border="0" width="157" height="133" id="Picture 20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image010.png"/></span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 26,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%"><img border="0" width="157" height="134" id="Picture 21" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image011.png"/></span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 26,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%"><img border="0" width="155" height="135" id="Picture 22" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image012.png"/></span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 26,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%"><img border="0" width="156" height="133" id="Picture 23" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image013.png"/></span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 27,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">50 kg</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 27,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">100 kg</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 27,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">150 kg</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 27,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">200 kg</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 27,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">250 kg</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 28,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">1.400&#13;
  potong</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 28,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">1.200 potong</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 28,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">1.000&#13;
  potong</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 28,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">800 potong</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 28,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">600&#13;
  potong</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 29,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Jenis&#13;
  bibit dan pupuk</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 29,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Jenis&#13;
  bibit dan curah hujan</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 29,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Jenis&#13;
  pupuk dan curah hujan</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 29,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Jenis pupuk dan jumlah hama</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 29,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Curah hujan dan jumlah hama</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 30,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Penghasilan&#13;
  C adalah yang paling tinggi</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 30,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Penghasilan&#13;
  A adalah yang paling tinggi</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 30,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Penghasilan&#13;
  B adalah yang paling rendah</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 30,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">Penghasilan A dapat lebih tinggi daripada B</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 30,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Penghasilan&#13;
  C dapat lebih rendah daripada B</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 31,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">kalimat (1)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 31,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black;background:none">kalimat (2)</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 31,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">kalimat (5)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 31,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">kalimat (6)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 31,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">kalimat (7)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 32,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black;background:none">berbudi</span><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black">     </span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 32,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">bersahaja  </span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 32,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">berakal</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 32,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">berperasaan </span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 32,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">berpengetahuan</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 33,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">lorong </span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 33,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">jalan         </span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 33,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">jaringan</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 33,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">saluran </span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 33,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black;background:none">fasilitas</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 34,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">ajaran        </span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 34,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">nasihat     </span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 34,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">anjuran</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 34,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">petunjuk </span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 34,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black;background:none">ungkapan</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 35,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">perluasan</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 35,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black;background:none">penambahan</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 35,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">penegasan</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 35,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">penghubungan</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 35,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">perincian</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 36,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(1-2-3)&#13;
  dan (4-5-6-7-8-9-10)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 36,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(1-2-3-4)&#13;
  dan (5-6-7-8-9-10)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 36,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">(1-2-3-4-5) dan (6-7-8-9-10)</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 36,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(1-2-3-4-5-6)&#13;
  dan (7-8-9-10)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 36,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(1-2-3-4-5-6-7)&#13;
  dan (8-9-10)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 37,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">terdapat&#13;
  batasan warga dalam beraktivitas karena aturan</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 37,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">warga&#13;
  membuat aturan yang terdapat dalam PSBB</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 37,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">aktivitas&#13;
  warga dibatasi akibat terdapat aturan yang diterapkan pemerintah</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 37,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">terdapat beberapa aturan yang harus&#13;
  dipatuhi saat PSBB</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 37,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">aturan&#13;
  yang terdapat dalam PSBB cukup membatasi aktivitas warga</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 38,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">kalimat&#13;
  (2)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 38,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">kalimat&#13;
  (3)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 38,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">kalimat (5)</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 38,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">kalimat&#13;
  (7)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 38,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">kalimat&#13;
  (9)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 39,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">kalimat (1)</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 39,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">kalimat&#13;
  (4)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 39,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">kalimat&#13;
  (6)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 39,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">kalimat&#13;
  (7)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 39,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">kalimat&#13;
  (9)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 40,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">meyakinkan&#13;
  informasi pada kalimat sebelumnya</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 40,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">mengelaborasi&#13;
  informasi pada kalimat sebelumnya</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 40,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">menceritakan&#13;
  informasi pada kalimat sebelumnya</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 40,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">membuktikan&#13;
  informasi pada kalimat sebelumnya</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 40,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">menjelaskan informasi pada kalimat&#13;
  sebelumnya</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 41,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Ina-CTFS&#13;
  telah dipasang di Jakarta dan Semarang dengan pertimbangan kedua area&#13;
  tersebut memiliki dampak banjir di wilayah pesisir atau rob</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 41,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">BMKG (Badan Meteorologi, Klimatologi, dan&#13;
  Geofisika) membangun Ina-CIFS (<i>Indonesia Coastal Inundation Forecasting&#13;
  System</i>) untuk memberikan peringatan dini banjir di wilayah pesisir.</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 41,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">BMKG&#13;
  akan memperluas cakupan ke seluruh wilayah pesisir Indonesia yang berpotensi&#13;
  terdampak.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 41,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">sistem&#13;
  Ina-CIFS merupakan kerja sama BMKG dengan Kementerian Pekerjaan Umum dan&#13;
  Perumahan Rakyat, Kementerian Kelautan dan Perikanan, Badan Informasi&#13;
  Geospasial, Badan Nasional Penanggulangan Bencana, serta Badan Penanggulangan&#13;
  Bencana Daerah Jakarta dan Semarang.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 41,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">sistem&#13;
  ini menggabungkan konsep matematika, algoritma, dan berbagai instrumen&#13;
  lainnya.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 42,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Orang&#13;
  atau pejabat yang memiliki kepentingan tertentu.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 42,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Pejabat&#13;
  yang ditunjuk untuk mengurusi permasalahan yang terjadi.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 42,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Segenap pihak yang terkait dengan&#13;
  permasalahan yang diangkat.</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 42,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Orang&#13;
  yang ahli dalam menangani suatu masalah.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 42,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Badan&#13;
  pemerintah yang bertanggung jawab atas suatu bencana.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 43,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><i><span lang="IN" style="font-size:12.0pt;line-height:115%">oleh-oleh&#13;
  khas Bengkulu </span></i><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">dalam kalimat (4).</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 43,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><i><span lang="IN" style="font-size:12.0pt;line-height:115%">motif&#13;
  bunga rafflesia</span></i><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%"> dalam kalimat (7).</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 43,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><i><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">sang penebar bau busuk </span></i><span lang="IN" style="font-size:12.0pt;line-height:115%;background:none">dalam&#13;
  kalimat (7).</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 43,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><i><span lang="IN" style="font-size:12.0pt;line-height:115%">bunga&#13;
  bangkai </span></i><span lang="IN" style="font-size:12.0pt;line-height:115%">dalam&#13;
  kalimat (7).</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 43,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><i><span lang="IN" style="font-size:12.0pt;line-height:115%">batik&#13;
  tangan</span></i><span lang="IN" style="font-size:12.0pt;line-height:115%">&#13;
  dalam kalimat (7).</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 44,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(1)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 44,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(3) </span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 44,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">(4)</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 44,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(6)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 44,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(7)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 45,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">memotivasi</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 45,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">menggambarkan&#13;
  </span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 45,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">menjelaskan</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 45,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">mengajak</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 45,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">menceritakan</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 46,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Memperkenalkan batik Besurek oleh-oleh&#13;
  khas Bengkulu</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 46,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Membandingkan&#13;
  batik Besurek dengan batik lainnya</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 46,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Menyatakan&#13;
  bahwa batik Besurek adalah batik terbaik di Indonesia</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 46,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Menyatakan&#13;
  batik Besurek belum cukup terkenal</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 46,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Menggambarkan&#13;
  keindahan batik Besurek</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 47,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Kata <i>produk</i> dalam kalimat (1)</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 47,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kata <i>artistik</i>&#13;
  dalam kalimat (2)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 47,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kata <i>dunia</i>&#13;
  dalam kalimat (2)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 47,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kata <i>solusi</i>&#13;
  dalam kalimat (3)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 47,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kata <i>ekspresi</i>&#13;
  dalam kalimat (4)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 48,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Frasa <i>tindakan&#13;
  kreativitas</i> dalam kalimat (1)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 48,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Frasa <i>sejumlah&#13;
  kreativitas </i>dalam kalimat (4)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 48,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Frasa <i>pada&#13;
  pengalaman baru </i>dalam kalimat (5)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 48,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Frasa <i>psikolog klinis </i>dalam&#13;
  kalimat (6)</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 48,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Frasa <i>perasaan&#13;
  sulit </i>dalam kalimat (6)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 49,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kalimat&#13;
  (1)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 49,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kalimat&#13;
  (2)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 49,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kalimat&#13;
  (3)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 49,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kalimat&#13;
  (5)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 49,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Semua kalimat sejajar</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 50,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">pengertian&#13;
  (kalimat 4)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 50,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">penelitian (kalimat 5)</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 50,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">pengalaman&#13;
  (kalimat 5)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 50,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">pemikiran&#13;
  (kalimat 6)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 50,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">perasaan&#13;
  (kalimat 6)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 51,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">mengganti kata <i>berdasarkan</i> dengan <i>berdasar</i></span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 51,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">mengganti kata <i>terkait</i> dengan <i>berkaitan</i></span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 51,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black;background:none">menghilangkan kata <i>yang</i></span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 51,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">menghilangkan kata <i>akan</i></span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 51,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">menambah kata <i>dari</i> setelah 75%</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 52,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">bahwa</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 52,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">hanya</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 52,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black;background:none">pada</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 52,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">tetapi</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 52,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">mencapai</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 53,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">selayaknya menanggulangi peningkatan limbah dan&#13;
  sampah</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 53,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">perlu menyediakan dana penangan limbah dan&#13;
  sampah medis</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 53,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">harus memberi sanksi kepada masyarakat yang&#13;
  membuang sampah</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 53,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">seharusnya menangani kerusakan lingkungan&#13;
  akibat sampah dan limbah</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 53,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black;background:none">seharusnya membuat peraturan&#13;
  tentang pembuangan sampah dan limbah</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 54,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">pengetahuan&#13;
  yang bermakna</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 54,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">pelibatan&#13;
  siswa aktif</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 54,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">pembelajaran&#13;
  aktif</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 54,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">pemecahan&#13;
  masalah</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 54,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">pembelajaran antikorupsi</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 55,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(1)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 55,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">(2)</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 55,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(3)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 55,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(5)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 55,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(6)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 56,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(1)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 56,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">(2)</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 56,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(4)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 56,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(5)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 56,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(7)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 57,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Jadi, pembelajaran secara aktif&#13;
  menempatkan siswa dalam suatu situasi yang membuat mereka terlibat dalam&#13;
  aktivitas yang dirancang oleh guru untuk tujuan tertentu.</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 57,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Jadi,&#13;
  pembelajaran secara aktif dapat<span style="color:red"> </span>menempatkan&#13;
  siswa dalam suatu situasi yang membuat mereka terlibat dalam aktivitas yang&#13;
  dirancang oleh guru untuk tujuan tertentu.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 57,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Jadi,&#13;
  pembelajaran secara aktif menempatkan siswa dalam suatu situasi yang membuat&#13;
  mereka terlibat dalam aktivitas yang telah dirancang oleh guru untuk tujuan&#13;
  tertentu.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 57,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Jadi,&#13;
  proses pembelajaran secara aktif menempatkan siswa dalam suatu situasi yang&#13;
  membuat mereka terlibat dalam aktivitas yang dirancang oleh guru untuk tujuan&#13;
  tertentu.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 57,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Jadi,&#13;
  proses pembelajaran secara aktif dapat menempatkan siswa dalam suatu situasi&#13;
  yang membuat mereka terlibat dalam aktivitas yang dirancang oleh guru untuk tujuan&#13;
  tertentu.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 58,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">konkret</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 58,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">signifikan</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 58,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">tajam</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 58,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">menjulang</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 58,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">tinggi</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 59,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Banyak peluang didalami.</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 59,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Banyak&#13;
  peluang pemain profesional.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 59,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Banyak&#13;
  peluang pada aspek demografis.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 59,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Pada&#13;
  aspek demografis banyak elemen produktif.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 59,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Banyak&#13;
  kalangan berpenghasilan menengah.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 60,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kontribusi&#13;
  <i>game </i>untuk ekraf Indonesia pada 2017 adalah 1,93 persen PDB, <i>tetapi</i>&#13;
  jumlah tenaga kerja di subsektor ini 44.733.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 60,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kontribusi&#13;
  <i>game </i>untuk ekraf Indonesia pada 2017 adalah 1,93 persen PDB, <i>padahal</i>&#13;
  jumlah tenaga kerja di subsektor ini 44.733.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 60,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kontribusi&#13;
  <i>game </i>untuk ekraf Indonesia pada 2017 adalah 1,93 persen PDB, <i>sedangkan</i>&#13;
  jumlah tenaga kerja di subsektor ini 44.733.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 60,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kontribusi&#13;
  <i>game </i>untuk ekraf Indonesia pada 2017 adalah 1,93 persen PDB <i>ketika</i>&#13;
  jumlah tenaga kerja di subsektor ini 44.733.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 60,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Kontribusi <i>game </i>untuk ekraf&#13;
  Indonesia pada 2017 adalah 1,93 persen PDB <i>dan</i> jumlah tenaga kerja di&#13;
  subsektor ini 44.733.</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 61,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(1)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 61,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(2)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 61,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(4)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 61,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(5)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 61,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">(6)</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 62,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Lembaga&#13;
  Adat Melayu Jambi; <i>Peran Lembaga Adat Melayu Kota Jambi dalam&#13;
  Mempertahankan Nilai Lokal Budaya Melayu Jambi</i></span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 62,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Lembaga&#13;
  Adat Melayu Jambi; “<i>Peran Lembaga Adat Melayu Kota Jambi dalam&#13;
  Mempertahankan Nilai Lokal Budaya Melayu Jambi”</i></span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 62,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><i><span lang="IN" style="font-size:12.0pt;line-height:115%">Lembaga&#13;
  Adat Melayu Jambi</span></i><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">; “Peran Lembaga Adat Melayu Kota Jambi dalam Mempertahankan Nilai&#13;
  Lokal Budaya Melayu Jambi”</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 62,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><i><span lang="IN" style="font-size:12.0pt;line-height:115%">Lembaga&#13;
  Adat Melayu Jambi</span></i><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%">; Peran Lembaga Adat Melayu Kota Jambi dalam Mempertahankan Nilai Lokal&#13;
  Budaya Melayu Jambi</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 62,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">Lembaga Adat Melayu Jambi; “Peran Lembaga Adat Melayu Kota&#13;
  Jambi dalam Mempertahankan Nilai Lokal Budaya Melayu Jambi”</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 63,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Keyakinan&#13;
  menjadi vegetarian</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 63,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Cara&#13;
  sehat menjadi vegetarian</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 63,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Pilihan&#13;
  menjadi vegetarian</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 63,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Prinsip menjadi vegetarian</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 63,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Manfaat&#13;
  menjadi vegetarian</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 64,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Penggunaan&#13;
  kata <i>banyak</i> pada kalimat (1)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 64,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Penggunaan kata <i>kebanyakan</i> pada&#13;
  kalimat (2)</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 64,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Penggunaan&#13;
  kata <i>mereka</i> pada kalimat (3)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 64,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Penggunaan kata <i>bahwa </i> pada&#13;
  kalimat (4)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 64,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Penggunaan&#13;
  kata <i>untuk</i> pada kalimat (5)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 65,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Mengonsumsi&#13;
  sayuran jauh lebih baik dibandingkan dengan mengonsumsi hewan.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 65,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Sebuah&#13;
  dosa besar jika mengonsumsi hewan.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 65,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Kepercayaan para vegetarian yang&#13;
  menganggap salah jika mengonsumsi hewan.</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 65,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Menjadi&#13;
  seorang vegetarian adalah keputusan yang benar.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 65,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Mengonsumsi&#13;
  hewan sama saja membunuh hewan dan itu sebuah kesalahan.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 66,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">merupakan&#13;
  sebuah gaya hidup orang modern yang menyehatkan.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 66,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">dilarang&#13;
  mengonsumsi hewan karena itu tindakan yang salah dan bertentangan dengan&#13;
  kepercayaan mereka serta diet ala vegetarian adalah diet yang terbaik&#13;
  dibandingkan semua diet.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 66,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">karena&#13;
  mementingkan gaya hidup yang menurut mereka sehat.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 66,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">karena&#13;
  merasa tubuhnya sudah tidak sehat dan diet ini merupakan salah satu pilihan&#13;
  tepat</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 66,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">tidak mengonsumsi hewan karena tidaklah&#13;
  benar, bertentangan dengan kepercayaan mereka, serta diet ala vegetarian&#13;
  lebih sehat dan sudah menjadi gaya hidup.</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 67,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">pemakaian&#13;
  obat berlebih</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 67,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">dampak&#13;
  pengobatan karies</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 67,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">sakit&#13;
  yang disebabkan karies</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 67,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">gigi&#13;
  yang terkena karies</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 67,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">pembentukan kembali mineral gigi</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 68,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">TIDAK&#13;
  PERLU DIPERBAIKI</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 68,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Karena&#13;
  itu, orang Jawa kebanyakan berkumpul di Pulau Jawa.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 68,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Sehingga,&#13;
  orang Jawa kebanyakan berkumpul di Pulau Jawa.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 68,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Bahkan,&#13;
  orang Jawa kebanyakan berkumpul di Pulau Jawa.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 68,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">Akibatnya, orang Jawa kebanyakan berkumpul di Pulau Jawa</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 69,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">TIDAK&#13;
  PERLU DIPERBAIKI</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 69,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">Akan tetapi,</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 69,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Misalnya,</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 69,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Sementara,</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 69,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Sedangkan</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 70,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">TIDAK PERLU DIPERBAIKI</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 70,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Suku&#13;
  Sunda, Suku Batak dan Suku Madura adalah kelompok terbesar berikutnya di&#13;
  negara ini.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 70,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Suku&#13;
  Sunda, Suku Batak, dan Suku Madura adalah kelompok terbesar berikutnya di&#13;
  negara ini.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 70,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Suku&#13;
  Sunda, suku Batak, dan suku Madura adalah kelompok terbesar berikutnya&#13;
  dinegara ini.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 70,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Suku&#13;
  Sunda, suku Batak dan suku Madura adalah kelompok terbesar berikutnya&#13;
  dinegara ini.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 71,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">12.417</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 71,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">21.983</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 71,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">36.786</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 71,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">42.169</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 71,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">52.461</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 72,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%"> </span><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="65" height="28" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image018.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> </span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 72,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="65" height="28" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image019.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> </span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 72,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="67" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image020.png"/></span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 72,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="65" height="28" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image021.png"/></span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 72,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="65" height="28" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image022.png"/></span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 73,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kuadran&#13;
  I</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 73,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kuadran&#13;
  II</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 73,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Kuadran&#13;
  III</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 73,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;background:none">Kuadran&#13;
  IV</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 73,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Ada&#13;
  solusi di semua kuadran</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 74,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">30</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 74,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">75</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 74,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">95</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 74,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">105</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 74,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">150</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 75,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">1.296&#13;
  – 144π         </span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 75,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">576 – 144π</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 75,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">324 –&#13;
  144</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 75,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">576 – 72π</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 75,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">324 – 72π</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 76,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">2a&#13;
  &lt; 5</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 76,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">3a &lt; 4</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 76,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">a &gt;&#13;
  4</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 76,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">2a &gt; 5</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 76,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">3a&#13;
  &gt; 4</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 77,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="130" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image031.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> </span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 77,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="130" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image032.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%">          </span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 77,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="126" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image033.png"/></span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 77,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="126" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image034.png"/></span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 77,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="124" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image035.png"/></span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 78,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">–6</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 78,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">–3</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 78,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">0</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 78,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">3</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 78,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">6</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 79,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="102" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image039.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%"> </span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 79,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="115" height="29" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image040.png"/></span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 79,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="115" height="28" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image041.png"/></span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 79,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="100" height="29" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image042.png"/></span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 79,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="91" height="28" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image043.png"/></span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 80,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">3</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 80,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">4,5</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 80,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">5</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 80,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">6</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 80,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">7,5</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 81,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%"> </span><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:8.5pt"><img width="7" height="30" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image044.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%">                      </span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 81,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:8.5pt"><img width="7" height="30" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image045.png"/></span><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%">                 </span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 81,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:8.5pt"><img width="7" height="30" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image046.png"/></span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 81,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:8.5pt"><img width="7" height="30" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image047.png"/></span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 81,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:8.5pt"><img width="7" height="30" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Skolastik_files/image048.png"/></span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 82,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(1),&#13;
  (2), dan (3) SAJA yang benar</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 82,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(1)&#13;
  dan (3) SAJA yang benar</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 82,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(2)&#13;
  dan (4) SAJA yang benar</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 82,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">HANYA (4) yang benar</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 82,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">SEMUA pilihan benar</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 83,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">P &gt;&#13;
  Q</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 83,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">P &lt; Q</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 83,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">P = Q</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 83,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">P = –Q</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 83,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Hubungan&#13;
  antara P dan Q tidak dapat ditentukan</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 84,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">0</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 84,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">1</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 84,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">2</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 84,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">3</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 84,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">4</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 85,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Pernyataan&#13;
  (1) SAJA cukup untuk menjawab pertanyaan, tetapi pernyataan (2) SAJA tidak&#13;
  cukup</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 85,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Pernyataan&#13;
  (2) SAJA cukup untuk menjawab pertanyaan, tetapi pernyataan (1) SAJA tidak&#13;
  cukup</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 85,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">DUA pernyataan BERSAMA-SAMA cukup untuk&#13;
  menjawab pertanyaan, tetapi SATU pernyataan SAJA tidak cukup</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 85,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Pernyataan (1) SAJA cukup&#13;
  untuk menjawab pertanyaan dan pernyataan (2) SAJA cukup</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 85,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Pernyataan&#13;
  (1) dan pernyataan (2) tidak cukup untuk menjawab pertanyaan</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 86,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">soya dapat memperkecil angka kematian</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 86,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">pola makan menjadi penyebab kematian akibat kanker</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 86,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">makanan dari soya mencegah timbulnya sel kanker </span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 86,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">soya mengandung isoflavon</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 86,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">soya mempunyai potensi mencegah kanker payudara</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 87,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Dalam soya terkandung suatu <i>pythoestrogen</i>&#13;
  yang menghambat pertumbuhan sel-sel kanker pada jaringan payudara</span><span style="font-size:12.0pt;line-height:115%;background:none">.</span>',
        'true_answer' => true,
        'choice_val' => 0
    ),
    array(
        'qnum' => 87,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Pola makan memberikan kontribusi terhadap&#13;
  angka kematian di Amerika Serikat</span><span style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">.</span>',
        'true_answer' => true,
        'choice_val' => 0
    ),
    array(
        'qnum' => 87,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:&#13;&#10;  12.0pt;line-height:115%;background:none">ola makan sehat dengan mengonsumsi&#13;
  sera</span><span style="font-size:12.0pt;line-height:115%;background:none">t&#13;
  dan buah – buahan </span><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;background:none">sangat dianjurkan</span><span style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">.</span>',
        'true_answer' => true,
        'choice_val' => 0
    ),
    array(
        'qnum' => 87,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Penelitian menunjukkan bahwa makanan </span><span style="font-size:12.0pt;line-height:115%;background:none">s</span><span lang="IN" style="font-size:12.0pt;line-height:115%;background:none">oya dapat&#13;
  meningkatkan imunitas</span><span style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none"> diri.</span>',
        'true_answer' => true,
        'choice_val' => 1
    ),
    array(
        'qnum' => 88,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">A(1),&#13;
  A(3), dan B(2)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 88,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">A(2),&#13;
  A(3), dan B(1)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 88,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">A(3),&#13;
  B(1), dan B(2)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 88,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">A(1),&#13;
  A(2), dan B(3)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 88,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">A(1), B(1), dan B(3)</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 89,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">budaya&#13;
  yang homogen sehingga membuat seseorang merasa asing di dalamnya</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 89,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">ketimpangan&#13;
  budaya akibat perbedaan karakter satu negara dengan negara lain</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 89,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">rasa belum siap menerima budaya baru yang&#13;
  hadir </span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 89,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">rasa&#13;
  aneh dan canggung yang hanya ditemukan ketika berwisata ke luar negeri</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 89,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">kemajemukan&#13;
  budaya antara negara Indonesia dan Korea Selatan</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 90,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">semua&#13;
  nomor benar</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 90,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(1),&#13;
  (2), dan (3)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 90,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">hanya&#13;
  nomor (4) saja</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 90,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">(1), (3), dan (4)</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 90,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">hanya&#13;
  nomor (1) dan (3) saja</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 91,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">teh&#13;
  mengandung senyawa kafein </span><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">25 – 48 mg/237 ml</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 91,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">teh&#13;
  yang mengandung senyawa kafein dapat memicu gejala jantung berdebar hingga keringat&#13;
  dingin</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 91,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">senyawa yang terkandung dalam teh dapat&#13;
  mengganggu penyerapan zat besi pada saluran pencernaan</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 91,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">minum&#13;
  obat bersamaan dengan teh dapat menimbulkan terjadinya interaksi oabt yang&#13;
  tidak diinginkan</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 91,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">dapat&#13;
  menyebabkan kekurangan zat besi lebih banyak</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 92,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Teh dan kopi mengandung kafein</span><span style="font-size:12.0pt;line-height:115%;background:none">.</span>',
        'true_answer' => true,
        'choice_val' => 0
    ),
    array(
        'qnum' => 92,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;background:none">Kafein pada teh&#13;
  dapat mengganggu penyerapan obat yang terjadi mulai dari kerongkongan sampai&#13;
  dengan lambung.</span>',
        'true_answer' => true,
        'choice_val' => 1
    ),
    array(
        'qnum' => 92,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;background:none">Kandungan kafein&#13;
  pada kopi lebih dari </span><span lang="IN" style="font-size:12.0pt;line-height:&#13;&#10;  115%;background:none">25 – 48 mg/237 ml.</span>',
        'true_answer' => true,
        'choice_val' => 0
    ),
    array(
        'qnum' => 92,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Rasa pahit ketika minum obat dapat&#13;
  ditangkal dengan minum teh. Akan tetapi, tidak disarankan jika obat yang dikonsumsi&#13;
  mengandung antibiotik, obat untuk gangguan tiroid, dan antidepresan.</span>',
        'true_answer' => true,
        'choice_val' => 1
    ),
    array(
        'qnum' => 93,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black;background:none">Panel&#13;
  surya sebenarnya terdiri dari banyak unit yang lebih kecil yang disebut sel&#13;
  fotovoltaik</span>',
        'true_answer' => true,
        'choice_val' => 0
    ),
    array(
        'qnum' => 93,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span style="font-size:12.0pt;line-height:115%;color:black;background:none">Panel&#13;
  surya adalah salah satu perangkat yang mengubah energi cahaya matahari&#13;
  menjadi energi listrik.</span>',
        'true_answer' => true,
        'choice_val' => 0
    ),
    array(
        'qnum' => 93,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;background:none">Unsur boron&#13;
  berfungsi menambahkan muatan negatif (elektron) ke lapisan sel fotovoltaik.</span>',
        'true_answer' => true,
        'choice_val' => 1
    ),
    array(
        'qnum' => 93,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;background:none">Unsur fosfor&#13;
  berfungsi menghasilkan elektron lebih sedikit atau muatan positif ke lapisan&#13;
  sel fotovoltaik.</span>',
        'true_answer' => true,
        'choice_val' => 1
    ),
    array(
        'qnum' => 94,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  color:black;background:white">menjatuhkan elektron bebas dari atom dan&#13;
  menghasilkan aliran</span><span style="font-size:12.0pt;line-height:115%;&#13;&#10;  color:black;background:white"> listrik</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 94,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black;background:none">muatan yang berlawanan jenis&#13;
  dipisahkan</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 94,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  color:black;background:white">sel fotovoltaik menghasilkan elektron lebih&#13;
  sedikit atau muatan positif</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 94,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  color:black;background:white">bertambahnya elektron ekstra dengan muatan&#13;
  negatif ke lapisan sel fotovoltaik</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 94,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  color:black;background:white">mengumpulkan elektron dan mentransfernya ke&#13;
  kabel</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 95,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span style="font-size:12.0pt;line-height:115%;background:none">Pelepasan hormon&#13;
  adrenalin merupakan respon alami dan tidak bisa diatur.</span>',
        'true_answer' => true,
        'choice_val' => 0
    ),
    array(
        'qnum' => 95,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span style="font-size:12.0pt;line-height:115%;background:none">Kulit wajah yang&#13;
  lebih tipis dari bagian lain tubuh menyebabkan pembuluh darah di wajah lebih&#13;
  terlihat.</span>',
        'true_answer' => true,
        'choice_val' => 1
    ),
    array(
        'qnum' => 95,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;background:none">Peningkatan detak&#13;
  jantung menyebabkan pelebaran pembuluh darah.</span>',
        'true_answer' => true,
        'choice_val' => 1
    ),
    array(
        'qnum' => 95,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;background:none">Hormon adrenalin&#13;
  membuat pembuluh darah vena di area selain wajah membesar.</span>',
        'true_answer' => true,
        'choice_val' => 1
    ),
    array(
        'qnum' => 96,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">detak&#13;
  jantung meningkat dan perasaan</span><span style="font-size:12.0pt;&#13;&#10;  line-height:115%"> malu</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 96,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">peningkatan aliran darah dan pelebaran&#13;
  pembuluh vena di wajah</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 96,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">perasaaan&#13;
  malu dan peningkatan jumlah pembuluh darah kecil</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 96,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">pelebaran&#13;
  pembuluh vena tubuh dan peningkatan pernapasan</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 96,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">semburat&#13;
  merah pada wajah dan kerja spontan saraf simpatik</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 97,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">hormon&#13;
  adrenalin </span><span lang="IN" style="font-size:12.0pt;line-height:115%">menyebabkan&#13;
  lebih banyak aliran darah ke pipi sehingga menimbulkan semburat merah di&#13;
  wajah</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 97,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">vena&#13;
  tidak banyak melakukan efek tersebut ketika adrenalin dilepaskan</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 97,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">hormon&#13;
  adrenalin hanya memiliki pengaruh kecil atau bahkan hormon ini tidak memiliki&#13;
  pengaruh sama sekali terhadap pembuluh darah vena</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 97,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">pembuluh&#13;
  vena banyak ditemukan di area wajah sehingga </span><span lang="IN" style="font-size:12.0pt;line-height:115%">peningkatan aliran darah di area&#13;
  tersebut jadi lebih mudah terlihat</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 97,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">hanya pembuluh vena di area wajah yang&#13;
  mengalami reaksi pelebaran akibat pelepasan hormon adrenalin</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 98,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">pertumbuhan&#13;
  sel-sel melanosit yang berlebih di suatu area tubuh</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 98,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">pengaruh&#13;
  gen yang diturunkan dari orang tua</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 98,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">pigmen&#13;
  kulit yang berkumpul pada satu area di kulit</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 98,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">berubahnya&#13;
  warna kulit menjadi menghitam akibat pigmen kulit</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 98,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">melanosit yang menghitam akibat terjadi&#13;
  pelukaan pada kulit</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 99,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span style="font-size:12.0pt;line-height:115%;background:none">Sel-sel melanosit&#13;
  yang tumbuh tersebar pada kulit dapat membentuk tahi lalat.</span>',
        'true_answer' => true,
        'choice_val' => 1
    ),
    array(
        'qnum' => 99,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;background:none">Sel melanosit berperan&#13;
  sebagai penentu warna kulit manusia.</span>',
        'true_answer' => true,
        'choice_val' => 0
    ),
    array(
        'qnum' => 99,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;background:none">Kemunculan nevus&#13;
  dipengaruhi oleh gen.</span>',
        'true_answer' => true,
        'choice_val' => 0
    ),
    array(
        'qnum' => 99,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;background:none">Tahi lalat yang&#13;
  tumbuh setelah kita dewasa merupakan salah satu tanda kanker melanoma.</span>',
        'true_answer' => true,
        'choice_val' => 1
    ),
    array(
        'qnum' => 100,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">berasal&#13;
  dari sel melanosit yang menumpuk dan memiliki warna berbeda dari warna kulit</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 100,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">tumbuh&#13;
  tidak beraturan dan terasa gatal</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 100,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">memiliki&#13;
  warna lebih gelap dan memiliki riwayat keluarga pengidap kanker kulit</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 100,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">berbentuk tidak simetris dan tumbuh&#13;
  secara tidak beraturan</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 100,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">memiliki&#13;
  diamater lebih besar dan berwarna lebih gelap dari warna kulit</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 101,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;background:none">Tidak hanya nilai&#13;
  inflasi yang rendah, tetapi juga kestabilan inflasi merupakan salah satu&#13;
  syarat dalam pelaksanaan redenominasi.</span>',
        'true_answer' => true,
        'choice_val' => 0
    ),
    array(
        'qnum' => 101,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;background:none">Praktek&#13;
  redenominasi adalah penyederhanaan penulisan digit uang tanpa diikuti dengan&#13;
  penyederhanaan nilai barang dan jasa.</span>',
        'true_answer' => true,
        'choice_val' => 1
    ),
    array(
        'qnum' => 101,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;background:none">Rp10.000 menjadi&#13;
  Rp10 merupakan bentuk redenominasi.</span>',
        'true_answer' => true,
        'choice_val' => 0
    ),
    array(
        'qnum' => 101,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;background:none">Redenominasi&#13;
  adalah hal baru dalam bidang ekonomi.</span>',
        'true_answer' => true,
        'choice_val' => 1
    ),
    array(
        'qnum' => 102,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">(2), (3), dan (4</span><span style="font-size:12.0pt;line-height:115%;background:none">)</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 102,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">semua&#13;
  pernyataan benar</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 102,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">hanya&#13;
  pernyataan (2) saja</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 102,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">hanya&#13;
  pernyataan (3) saja</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 102,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">(1),&#13;
  (2) dan (4)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 103,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Indonesia&#13;
  telah melakukan redenominasi yang tertuang dalam Rancangan Undang-Undang&#13;
  Redenominasi Rupiah</span><span style="font-size:12.0pt;line-height:115%">.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 103,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Yang membedakan antara redenominasi dan&#13;
  sanering adalah tidak dilakukannya pemotongan nilai barang dan jasa pada&#13;
  sanering</span><span style="font-size:12.0pt;line-height:115%;background:none">.</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 103,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Jika&#13;
  perekonomian negara memburuk, maka kebijakan redenominasi adalah hal yang&#13;
  tepat</span><span style="font-size:12.0pt;line-height:115%">.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 103,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Partisipasi masyarakat diperlukan dalam&#13;
  pelaksanaan redenominasi </span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 104,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">bakteri pemakan plastik dapat memberikan solusi untuk&#13;
  mengatasi sampah plastik di kemudian hari</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 104,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black;background:white">bakteri <i>Ideonella&#13;
  sakaiensis</i> dapat memakan semua jenis sampah plastik yang sudah melebihi&#13;
  kapasitas dunia</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 104,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black;background:white">para ilmuwan Jepang berjasa&#13;
  menemukan spesies bakteri pemakan plastik untuk mengatasi sampah plastik</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 104,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black;background:white">para peneliti berupaya&#13;
  merekayasa genetika bakteri dalam memproduksi enzim seperti E.coli</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 104,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  color:black;background:white">enzim PETase diperlukan untuk mencerna plastik&#13;
  PET</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 105,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;background:none">Para ilmuwan&#13;
  Jepang berhasil menemukan spesies bakteri pemakan plastik yang bisa memakan&#13;
  sampah plastik jenis polietilen tereftalat.</span>',
        'true_answer' => true,
        'choice_val' => 0
    ),
    array(
        'qnum' => 105,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black;background:none">Bakteri&#13;
  <i>Ideonella sakaiensis</i> ditemukan dengan merekayasa genetika enzim PETase</span><span style="font-size:12.0pt;line-height:115%;color:black;background:none">.</span>',
        'true_answer' => true,
        'choice_val' => 1
    ),
    array(
        'qnum' => 105,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><i><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black;background:none">Ideonella&#13;
  sakaiensis menghasilkan enzim </span></i><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black;background:none">PETase yang mengubah asam&#13;
  tereftalat dan etilen glikol menjadi rantai molekul lebih pendek</span><span style="font-size:12.0pt;line-height:115%;color:black;background:none">.</span>',
        'true_answer' => true,
        'choice_val' => 1
    ),
    array(
        'qnum' => 105,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;background:none">Penemuan para&#13;
  ilmuwan Jepang mengenai bakteri pemakan masih perlu dikembangkan lebih lanjut&#13;
  untuk digunakan</span><span style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">.</span>',
        'true_answer' => true,
        'choice_val' => 0
    ),
    array(
        'qnum' => 106,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  color:black;background:white">lagu-lagu cepat dan sederhana yang terngiang di&#13;
  kepala</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 106,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">kondisi&#13;
  yang <span style="color:black;background:white">dipicu ketika seseorang&#13;
  benar-benar mendengar sebuah lagu</span></span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 106,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black;background:none">kondisi saat sebuah lagu atau&#13;
  suara terus terngiang di kepala</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 106,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">jaringan&#13;
  otak yang merekam lagu dan suara dengan <span style="color:black;background:&#13;&#10;  white">interval unik</span></span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 106,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  color:black;background:white">kondisi ketika seseorang sedang merasa bahagia&#13;
  dan tak sengaja mendengar sebuah lagu </span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 107,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;color:black;background:none">seseorang&#13;
  fokus mendengarkan sebuah lagu</span>',
        'true_answer' => true,
        'choice_val' => 0
    ),
    array(
        'qnum' => 107,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;background:none">lagu memiliki&#13;
  nada yang uni</span><span style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">k, sederhana, dan mudah untuk diingat.</span>',
        'true_answer' => true,
        'choice_val' => 1
    ),
    array(
        'qnum' => 107,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;background:none">seseorang&#13;
  berusaha melupakan sebuah lagu</span><span style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">.</span>',
        'true_answer' => true,
        'choice_val' => 1
    ),
    array(
        'qnum' => 107,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;background:none">lagu memiliki&#13;
  tempo dan interval yang lambat</span><span style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">.</span>',
        'true_answer' => true,
        'choice_val' => 0
    ),
    array(
        'qnum' => 108,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">melemahnya&#13;
  medan magnet Bumi yang disebut menjadi tanda bakal terbaliknya medan magnet&#13;
  dari Kutub Utara dan Selatan</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 108,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">fluks tidak akan meninggalkan permukaan&#13;
  inti medan magnet karena konduktivitas listrik yang dimiliki sangat tinggi</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 108,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">berkurangnya&#13;
  kekuatan medan magnet Bumi hingga mencapai nol dalam 4.000 tahun</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 108,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">medan&#13;
  magnet Bumi bersifat fluktuatif</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 108,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">medan&#13;
  magnet Bumi bukan berupa medan magnet dengan dua kutub yang sederhana seperti&#13;
  kerap dilihat pada magnet yang ada di alam</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 109,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;background:none">Menurut Fitri,&#13;
  medan magnet Bumi tidak menghilang</span><span style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">.</span>',
        'true_answer' => true,
        'choice_val' => 0
    ),
    array(
        'qnum' => 109,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;background:none">Pembalikan kutub&#13;
  bumi disebut juga dengan fenomena </span><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Brunhes-Matuyama Reversal</span><span style="font-size:12.0pt;line-height:115%;background:none">.</span>',
        'true_answer' => true,
        'choice_val' => 0
    ),
    array(
        'qnum' => 109,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;background:none">Menurut Fitri,&#13;
  pembalikan </span><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">kutub utara dan selatan Bumi terbalik dalam 100 juta tahun&#13;
  terakhir</span><span style="font-size:12.0pt;line-height:115%;background:none">.</span>',
        'true_answer' => true,
        'choice_val' => 1
    ),
    array(
        'qnum' => 109,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span style="font-size:12.0pt;line-height:115%;background:none">Medan magnet Bumi&#13;
  berfungsi melindungi Bumi dari radiasi kosmik berbahaya dan Badai Matahari.</span>',
        'true_answer' => true,
        'choice_val' => 0
    ),
    array(
        'qnum' => 110,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">merapikan&#13;
  buku berdekatan dengan tumpukan baju</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 110,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">merasakan&#13;
  sakit hati saat kita membaca surat</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 110,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">ketidakmampuan melupakan hal buruk dalam&#13;
  kehidupan</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 110,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">melupakan&#13;
  masalah dengan bekerja di tempat lain</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 110,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">pengalaman&#13;
  baru akan menghapus pengalaman lama</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 111,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">orang pertama pelaku utama</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 111,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">orang pertama pelaku sampingan</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 111,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">orang kedua</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 111,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">orang ketiga serbatahu</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 111,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">orang ketiga pengamat</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 112,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">rumah</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 112,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">villa</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 112,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">kamar</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 112,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">perpustakaan</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 112,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">ruang belajar</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 113,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Seseorang yang tidak ingin pergi dari&#13;
  kampung halamannya karena kedekatan batin.</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 113,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Seseorang&#13;
  yang menolak diberi bantuan uang oleh kerabatnya sekalipun mereka miskin.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 113,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Seseorang&#13;
  yang memilih pergi dari kampung halamannya untuk melupakan masa lalunya.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 113,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Seseorang&#13;
  yang diberi bantuan untuk biaya pengurusan kepindahan rumah oleh kerabatnya.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 113,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Seseorang&#13;
  yang ingin mengubah nasib keluarga dengan meninggalkan kampung halamannya.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 114,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">Paman menawarkan Ibu dan Ayu untuk tinggal bersamanya</span><span style="font-size:12.0pt;line-height:115%;background:none">.</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 114,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Ibu dan Ayu menyetujui ajakan paman untuk tinggal&#13;
  bersamanya</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 114,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Ibu menolak bantuan dalam bentuk uang yang diberikan oleh&#13;
  paman</span><span style="font-size:12.0pt;line-height:115%">.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 114,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">Ibu tidak dapat melupakan keberadaan Bapak di rumah itu</span><span style="font-size:12.0pt;line-height:115%">.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 114,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">Ibu dan Ayu tetap tinggal di rumah itu agar dapat&#13;
  merasakan kedekatan batin dengan Bapak</span><span style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">.</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 115,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span style="font-size:12.0pt;line-height:&#13;&#10;  115%">Sosial</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 115,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">moral</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 115,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">budaya</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 115,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">pendidikan</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 115,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%">estetika</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 116,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">A&#13;
  study on science grades </span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 116,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">A&#13;
  study on high school students</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 116,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">A&#13;
  study on high school students’ science grades</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 116,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">A study on the personal struggles of great scientists</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 116,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">A&#13;
  study on Albert Einstein and Marie Curie</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 117,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Actions</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 117,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Failures</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 117,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Obstacles</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 117,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Experiments</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 117,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Persecution</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 118,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Scientists&#13;
  have to be like ordinary people.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 118,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Scientists&#13;
  had to overcome failure to succeed.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 118,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Great&#13;
  scientists had an innate talent and a special aptitude for science.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 118,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">Science textbooks should emphasize the struggles of great scientists.</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 118,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Science&#13;
  textbooks should provide more descriptions of great scientists’ success.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 119,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">1</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 119,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">2</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 119,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">3</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 119,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">4</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 119,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">5</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 120,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">The&#13;
  control group believed that the intelligence of the scientists is brought&#13;
  with them since they were born.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 120,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Marie&#13;
  Currie carried out her experiments with some complications and failures.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 120,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">The&#13;
  writer persuades every science textbook to not only provide succeess but also&#13;
  the struggles of the scientists to overcome the obstacles.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 120,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">The study was carried&#13;
  out by involving 402 students who are divided into three groups.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 120,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Albert Einstein and Marie Curie are&#13;
  examples of great scientists whose excellent intelligence is innate.</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 121,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Skeptical</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 121,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Indifferent</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 121,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Favorable</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 121,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Concerned</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 121,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Conflicting</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 122,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Doctor’s suggestions and recommendations&#13;
  regarding tea tree oil</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 122,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Possible&#13;
  harms related to non-conventional treatments</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 122,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Various&#13;
  harmful chemical elements contained in tea tree oil</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 122,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Different conventional&#13;
  medical treatments you can rely on</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 122,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Combining&#13;
  medical treatments with alternative method</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 123,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Tea&#13;
  tree oil is used for the production of various care products, including&#13;
  toiletries, topical ointment, and essential oil</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 123,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">There&#13;
  has been little research on tea tree oil, some of which suggest that it is&#13;
  safe and often effective for the prevention and treatment of infections.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 123,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Experts consider tea tree oil to be safe&#13;
  as a topical treatment, and you can apply it directly to the skin on a daily&#13;
  basis.</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 123,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Tea tree in a moderate&#13;
  amount can be used as an effective alternative treatment for skin problem&#13;
  when necessary precautions are taken</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 123,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Use&#13;
  of tea tree oil in some body parts has been proven to be harmful, and&#13;
  therefore it has to be avoided.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 124,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Prescribed&#13;
  by doctors</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 124,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Used&#13;
  in a minimum amount</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 124,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Regulated&#13;
  by FDA</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 124,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">Mixed with vegetable, olive or almond oil</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 124,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Put&#13;
  on a skin area</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 125,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">(1)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 125,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">(2)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 125,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">(3)</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 125,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">(4)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 125,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">(5)</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 126,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Organ transplantation and its ethical&#13;
  considerations</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 126,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Advances&#13;
  in technology used for organ transplantation</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 126,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Organ&#13;
  transplantation and its significant contribution to human life</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 126,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Research on artificial&#13;
  organs and efforts to multiply organ supplies </span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 126,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Attempts&#13;
  to fulfil the increasing needs of human organs</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 127,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Public&#13;
  discussions about organ transplantation should be held</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 127,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Genetically&#13;
  designed organs from animals will raise ethical issues</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 127,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Advances in organ transplantation leave&#13;
  unresolved legal and ethical issues</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 127,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Any organ&#13;
  transplantation cannot always increase life expectancy</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 127,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Financial&#13;
  incentives will be able to increase organ supplies</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 128,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Ethical aspects considered for organ&#13;
  transplantation</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 128,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Urgency&#13;
  to increase organ supplies from various sources</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 128,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Extending&#13;
  life span of recipients with transplanted organs</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 128,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Needs of public ethics&#13;
  discussions on organ transplantation</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 128,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Success&#13;
  of doing organ transplantation from donor to recipients</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 129,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Human-to-human&#13;
  organ transplantations have been conducted quite successfully.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 129,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Clear protection of those who are still&#13;
  alive has triggered a heated discussion.</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 129,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Experiments&#13;
  keep going on to improve technology on transplantation.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 129,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Ethics of organs&#13;
  transplantations have become a national issue.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 129,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Requests&#13;
  of organs keep increasing.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 130,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%;&#13;&#10;  color:black">The first human kidney transplantation became the beginning of&#13;
  searching on the ethics of organ transplantation.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 130,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black;background:none">Organ transplantation can be&#13;
  obtained from genetically designed animal organs to fit with humans.</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 130,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%;&#13;&#10;  color:black">People with transplanted organs do not have a guarantee to live&#13;
  longer than they should.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 130,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%;&#13;&#10;  color:black">There are still pros and cons about organ transplantation from&#13;
  animal to human beings.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 130,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span class="rynqvb"><span lang="EN-GB" style="font-size:12.0pt;&#13;&#10;  line-height:115%;color:black">Legal laws must be made to regulate the ethic&#13;
  of tissue procurement and organ transplantation.</span></span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 131,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Irritated</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 131,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Fail</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 131,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Gloomy</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 131,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Amazed</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 131,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Diverse</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 132,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Introducing&#13;
  an expert</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 132,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Describing&#13;
  the sea voyage </span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 132,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Presenting a historical fact</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 132,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Theorizing the origins&#13;
  of Indonesians</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 132,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Providing&#13;
  the result of a biologist’s study</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 133,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Migrated&#13;
  due to political reasons </span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 133,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Were&#13;
  the first settlers on the islands</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 133,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Travelled&#13;
  to the island on purpose</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 133,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">Landed on the island by accident</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 133,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Found&#13;
  it hard to live on the island</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 134,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Cox&#13;
  proposed a theory of nomadic life of Indonesia people.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 134,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Cox&#13;
  investigated the intrigues behind the migration of Indonesians.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 134,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Cox&#13;
  was eager to make a long journey like Indonesians to the island.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 134,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">Cox was curious so as to why Indonesians had a long&#13;
  distance journey.</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 134,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Cox’s&#13;
  ideas of Indonesian’s long journey to the island are still in question.</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 135,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">The&#13;
  life of Hawaiian people</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 135,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">Political&#13;
  aspects of the journey</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 135,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Further similar studies on other islands</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 135,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">DNA analyses of the&#13;
  island’s population </span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 135,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="EN-GB" style="font-size:12.0pt;line-height:115%">The&#13;
  life in Madagascar compared to that in Hawaii</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 136,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">2011</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 136,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">2012</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 136,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">2013</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 136,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">2014</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 136,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">2015</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 137,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">3.58</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 137,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">3.63</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 137,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">4.00</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 137,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">4.12</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 137,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">4.36 </span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 138,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">16&#13;
  orang</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 138,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">21&#13;
  orang</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 138,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">23&#13;
  orang</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 138,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;background:none">26 orang</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 138,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">30&#13;
  orang</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 139,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">80 mL</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 139,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">120 mL</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 139,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">160 mL</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 139,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">200 mL</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 139,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">240 mL</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 140,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Rp325.000,00</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 140,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Rp500.000,00</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 140,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Rp625.000,00</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 140,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">Rp750.000,00</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 140,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Rp900.000,00</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 141,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">32</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 141,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">40</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 141,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">56</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 141,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">64</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 141,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">72</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 142,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">16</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 142,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">80</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 142,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">128</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 142,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">256</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 142,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">320</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 143,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;background:none">Lebar tanah&#13;
  adalah 9 m</span><span style="font-size:12.0pt;line-height:115%;background:none">.</span>',
        'true_answer' => true,
        'choice_val' => 1
    ),
    array(
        'qnum' => 143,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;background:none">Panjang tanah&#13;
  adalah 18 m</span><span style="font-size:12.0pt;line-height:115%;background:none">.</span>',
        'true_answer' => true,
        'choice_val' => 0
    ),
    array(
        'qnum' => 143,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;background:none">Keliling tanah adalah&#13;
  60 m</span><span style="font-size:12.0pt;line-height:115%;background:none">.</span>',
        'true_answer' => true,
        'choice_val' => 0
    ),
    array(
        'qnum' => 143,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Lebar tanah 12 m</span>',
        'true_answer' => true,
        'choice_val' => 0
    ),
    array(
        'qnum' => 144,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">5 buah</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 144,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">10&#13;
  buah</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 144,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">15&#13;
  buah</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 144,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">20 buah</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 144,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">25&#13;
  buah</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 145,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Rp300.000,00</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 145,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Rp320.000,00</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 145,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Rp400.000,00</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 145,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Rp440.000,00</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 145,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Rp480.000,00</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 146,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">10 meter</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 146,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">13&#13;
  meter</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 146,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">15&#13;
  meter</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 146,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">18 meter</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 146,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">20&#13;
  meter</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 147,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Rp5.500.000,00</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 147,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Rp6.000.000,00</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 147,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Rp6.200.000,00</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 147,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Rp6.500.000,00</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 147,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Rp7.000.000,00</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 148,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Sisa&#13;
  gaji karyawan A setelah dipotong premi asuransi adalah Rp7.800.000,00</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 148,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Sisa&#13;
  gaji karyawan B setelah dipotong premi asuransi adalah Rp5.500.000,00</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 148,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Premi&#13;
  asuransi karyawan A dan karyawan B masing-masing adalah Rp150.000,00</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 148,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">Total gaji karyawan A dan B&#13;
  setelah dipotong premi asuransi adalah Rp13.700.000,00</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 148,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Selisih gaji karyawan A dan B sebelum&#13;
  dipotong premi asuransi adalah Rp2.000.000,00</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 149,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">A</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 149,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">B</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 149,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">C</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 149,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">D</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 149,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">E</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 150,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">A dan&#13;
  B</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 150,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">B dan&#13;
  C</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 150,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">B dan&#13;
  D</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 150,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">A dan E</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 150,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">C dan&#13;
  E</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 151,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Lebar sungai dapat ditentukan dengan</span><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span><span style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="76" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Literasi_files/image006.png"/></span><span style="font-size:12.0pt;&#13;&#10;  line-height:115%">.</span>',
        'true_answer' => true,
        'choice_val' => 1
    ),
    array(
        'qnum' => 151,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Lebar sungai dapat ditentukan dengan</span><span lang="IN" style="font-size:12.0pt;line-height:115%"> </span><span style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="77" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Literasi_files/image007.png"/></span><span style="font-size:12.0pt;&#13;&#10;  line-height:115%">.</span>',
        'true_answer' => true,
        'choice_val' => 0
    ),
    array(
        'qnum' => 151,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;background:none">Lebar sungai&#13;
  dapat ditentukan dengan</span><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%"> </span><span style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="27" height="29" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Literasi_files/image008.png"/></span><span style="font-size:12.0pt;&#13;&#10;  line-height:115%">.</span>',
        'true_answer' => true,
        'choice_val' => 0
    ),
    array(
        'qnum' => 151,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">Lebar sungai dapat ditentukan dengan&#13;
  aturan AB × CD = BC × DE</span><span style="font-size:12.0pt;line-height:&#13;&#10;  115%;background:none">.</span>',
        'true_answer' => true,
        'choice_val' => 0
    ),
    array(
        'qnum' => 152,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="37" height="23" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Literasi_files/image010.png"/></span><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%"> meter</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 152,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span style="font-size:12.0pt;line-height:115%"> </span><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="37" height="22" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Literasi_files/image011.png"/></span><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none"> meter</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 152,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="37" height="22" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Literasi_files/image012.png"/></span><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%"> meter</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 152,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="37" height="23" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Literasi_files/image013.png"/></span><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%"> meter</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 152,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="37" height="22" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Literasi_files/image014.png"/></span><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%"> meter</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 153,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="96" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Literasi_files/image017.png"/></span><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%"> </span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 153,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:4.0pt"><img width="109" height="20" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Literasi_files/image018.png"/></span><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%"> </span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 153,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="112" height="29" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Literasi_files/image019.png"/></span><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%"> </span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 153,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span style="font-size:12.0pt;line-height:115%"> </span><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="112" height="29" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Literasi_files/image020.png"/></span><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%"> </span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 153,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;&#13;&#10;  position:relative;top:7.0pt"><img width="97" height="29" src="https://code.tryoutx.com/Try%20Out%208%20SNBT%202023%20Cornell/Literasi_files/image021.png"/></span><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%"> </span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 154,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">A dan&#13;
  B</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 154,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">A dan&#13;
  C</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 154,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">B dan&#13;
  C</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 154,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%;&#13;&#10;  background:none">C dan D</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 154,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">D dan&#13;
  E</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 155,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;&#13;&#10;  line-height:115%;background:none">1,7 m × 5,3 m</span>',
        'true_answer' => true,
        'choice_val' => null
    ),
    array(
        'qnum' => 155,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">1,8 m&#13;
  × 5,4 m</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 155,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">1,9 m&#13;
  × 5,5 m</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 155,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">2,0 m × 4,8 m</span>',
        'true_answer' => false,
        'choice_val' => null
    ),
    array(
        'qnum' => 155,
        'choice_img' => '',
        'explanation' => '',
        'choice_desc' => '<span dir="LTR"/><span lang="IN" style="font-size:12.0pt;line-height:115%">2,1 m&#13;
  × 5,1 m</span>',
        'true_answer' => false,
        'choice_val' => null
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
