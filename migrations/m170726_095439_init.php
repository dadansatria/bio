<?php

use yii\db\Migration;

class m170726_095439_init extends Migration
{

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $tables = Yii::$app->db->schema->getTableNames();
        $dbType = $this->db->driverName;
        $tableOptions_mysql = "CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB";
        $tableOptions_mssql = "";
        $tableOptions_pgsql = "";
        $tableOptions_sqlite = "";
        /* MYSQL */
        if (!in_array('ref_kuesioner_bagian', $tables))  { 
        if ($dbType == "mysql") {
            $this->createTable('{{%ref_kuesioner_bagian}}', [
                'id' => 'INT(11) NOT NULL AUTO_INCREMENT',
                0 => 'PRIMARY KEY (`id`)',
                'kode_kuesioner_bagian' => 'VARCHAR(50) NOT NULL',
                'nama' => 'VARCHAR(255) NOT NULL',
            ], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('ref_kuesioner_pernyataan', $tables))  { 
        if ($dbType == "mysql") {
            $this->createTable('{{%ref_kuesioner_pernyataan}}', [
                'id' => 'INT(11) NOT NULL AUTO_INCREMENT',
                0 => 'PRIMARY KEY (`id`)',
                'kode_kuesioner_bagian' => 'VARCHAR(50) NOT NULL',
                'kode_kuesioner_subbagian' => 'VARCHAR(50) NOT NULL',
                'kode_kuesioner_pernyataan' => 'VARCHAR(50) NOT NULL',
                'nama' => 'VARCHAR(255) NOT NULL',
            ], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('ref_kuesioner_subbagian', $tables))  { 
        if ($dbType == "mysql") {
            $this->createTable('{{%ref_kuesioner_subbagian}}', [
                'id' => 'INT(11) NOT NULL AUTO_INCREMENT',
                0 => 'PRIMARY KEY (`id`)',
                'kode_kuesioner_bagian' => 'VARCHAR(50) NOT NULL',
                'kode_kuesioner_subbagian' => 'VARCHAR(50) NOT NULL',
                'nama' => 'VARCHAR(255) NOT NULL',
            ], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('user', $tables))  { 
        if ($dbType == "mysql") {
            $this->createTable('{{%user}}', [
                'id' => 'INT(11) NOT NULL AUTO_INCREMENT',
                0 => 'PRIMARY KEY (`id`)',
                'role' => 'INT(2) NOT NULL',
                'kode_pegawai' => 'VARCHAR(50) NULL',
                'username' => 'VARCHAR(255) NOT NULL',
                'password' => 'VARCHAR(255) NOT NULL',
                'nama' => 'VARCHAR(255) NOT NULL',
                'email' => 'VARCHAR(255) NULL',
                'auth_key' => 'VARCHAR(255) NULL',
                'access_token' => 'VARCHAR(255) NULL',
                'status_hapus' => 'DATETIME NULL',
            ], $tableOptions_mysql);
        }
        }
         
         
        $this->createIndex('idx_UNIQUE_kode_kuesioner_bagian_8564_00','ref_kuesioner_bagian','kode_kuesioner_bagian',1);
        $this->createIndex('idx_UNIQUE_kode_kuesioner_bagian_kode_kuesioner_subbagian_kode_kuesioner_pernyataan_8601_01','ref_kuesioner_pernyataan','kode_kuesioner_bagian,kode_kuesioner_subbagian,kode_kuesioner_pernyataan',1);
        $this->createIndex('idx_kode_kuesioner_subbagian_8601_02','ref_kuesioner_pernyataan','kode_kuesioner_subbagian',0);
        $this->createIndex('idx_UNIQUE_kode_kuesioner_bagian_kode_kuesioner_subbagian_8648_03','ref_kuesioner_subbagian','kode_kuesioner_bagian,kode_kuesioner_subbagian',1);
        $this->createIndex('idx_kode_pegawai_8693_04','user','kode_pegawai',0);
         
        $this->execute('SET foreign_key_checks = 0');
        $this->addForeignKey('fk_ref_kuesioner_subbagian_8593_00','{{%ref_kuesioner_pernyataan}}', 'kode_kuesioner_bagian', '{{%ref_kuesioner_subbagian}}', 'kode_kuesioner_bagian', 'CASCADE', 'CASCADE' );
        $this->addForeignKey('fk_ref_kuesioner_subbagian_8593_01','{{%ref_kuesioner_pernyataan}}', 'kode_kuesioner_subbagian', '{{%ref_kuesioner_subbagian}}', 'kode_kuesioner_subbagian', 'CASCADE', 'CASCADE' );
        $this->addForeignKey('fk_ref_kuesioner_bagian_8637_02','{{%ref_kuesioner_subbagian}}', 'kode_kuesioner_bagian', '{{%ref_kuesioner_bagian}}', 'kode_kuesioner_bagian', 'CASCADE', 'CASCADE' );
        $this->execute('SET foreign_key_checks = 1;');
         
        $this->execute('SET foreign_key_checks = 0');
        $this->insert('{{%ref_kuesioner_bagian}}',['id'=>'1','kode_kuesioner_bagian'=>'01','nama'=>'Lingkungan Pengendalian']);
        $this->insert('{{%ref_kuesioner_bagian}}',['id'=>'2','kode_kuesioner_bagian'=>'02','nama'=>'Penilaian Risiko']);
        $this->insert('{{%ref_kuesioner_bagian}}',['id'=>'3','kode_kuesioner_bagian'=>'03','nama'=>'Kegiatan Pengendalian']);
        $this->insert('{{%ref_kuesioner_bagian}}',['id'=>'4','kode_kuesioner_bagian'=>'04','nama'=>'Informasi dan Komunikasi']);
        $this->insert('{{%ref_kuesioner_bagian}}',['id'=>'5','kode_kuesioner_bagian'=>'05','nama'=>'Pemantauan']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'1','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'01','kode_kuesioner_pernyataan'=>'01','nama'=>'Pegawai telah memahami isi Peraturan Gubernur Kepulauan Bangka Belitung Nomor 1 Tahun 2013 tentang Kode Etik Pegawai Negeri Sipil di Lingkungan Pemerintah Provinsi Kepulauan Bangka Belitung ']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'2','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'01','kode_kuesioner_pernyataan'=>'02','nama'=>'Secara berkala pegawai menandatangani pakta integritas untuk menerapkan aturan perilaku']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'3','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'01','kode_kuesioner_pernyataan'=>'03','nama'=>'Pimpinan Perangkat Daerah memberikan keteladanan, membina dan mendorong terciptanya budaya yang menekankan pentingnya nilai-nilai integritas dan etika']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'4','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'01','kode_kuesioner_pernyataan'=>'04','nama'=>'Pimpinan Perangkat Daerah menegakkan tindakan disiplin yang tepat atas penyimpangan terhadap kebijakan dan prosedur, atau pelanggaran terhadap aturan perilaku ']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'5','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'01','kode_kuesioner_pernyataan'=>'05','nama'=>'Pegawai mengetahui hukuman yang akan dikenakan terhadap penyimpangan dan pelanggaran yang dilakukan']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'6','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'01','kode_kuesioner_pernyataan'=>'06','nama'=>'Dalam pelaksanaan program/kegiatan, Pegawai segera melakukan perbaikan apabila terjadi penyimpangan dan pelanggaran terhadap peraturan perundang-undangan ']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'7','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'02','kode_kuesioner_pernyataan'=>'01','nama'=>'Pegawai memahami proses bisnis pada masing-masing posisi dalam perangkat daerah  ']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'8','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'02','kode_kuesioner_pernyataan'=>'02','nama'=>'Pimpinan Perangkat Daerah memperhatikan standar kompetensi untuk setiap tugas dan fungsi pada masing-masing posisi ']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'9','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'02','kode_kuesioner_pernyataan'=>'03','nama'=>'Pegawai mendapatkan pelatihan dan pembimbingan untuk membantu pegawai mempertahankan dan meningkatkan kompetensi pekerjaannya ']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'10','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'02','kode_kuesioner_pernyataan'=>'04','nama'=>'Pimpinan Perangkat Daeah memiliki kemampuan manajerial dan pengalaman yang luas dalam pengelolaan perangkat daerah ']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'11','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'03','kode_kuesioner_pernyataan'=>'01','nama'=>'Pimpinan Perangkat Daerah memiliki sikap selalu mempertimbangkan risiko dalam pengambilan keputusan']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'12','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'03','kode_kuesioner_pernyataan'=>'02','nama'=>'Pimpinan Perangkat Daerah menerapkan manajemen berbasis kinerja ']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'13','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'03','kode_kuesioner_pernyataan'=>'03','nama'=>'Pimpinan Perangkat Daerah mendukung fungsi tertentu dalam penerapan SPIP, antara lain pencatatan dan pelaporan keuangan, sistem manajemen informasi, pengelolaan pegawai, dan pengawasan baik intern maupun ekstern.']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'14','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'03','kode_kuesioner_pernyataan'=>'04','nama'=>'Pimpinan perangkat daerah melindungi aset dan informasi dari akses dan penggunaan yang tidak sah.']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'15','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'03','kode_kuesioner_pernyataan'=>'05','nama'=>'Pimpinan Perangkat Daerah melakukan interaksi secara intensif dengan pejabat pada tingkatan yang lebih rendah  ']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'16','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'03','kode_kuesioner_pernyataan'=>'06','nama'=>'Pimpinan Perangkat Daerah merespon secara positif terhadap pelaporan yang berkaitan dengan keuangan, penganggaran, program dan kegiatan ']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'17','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'03','kode_kuesioner_pernyataan'=>'07','nama'=>'Tidak ada mutasi pegawai yang berlebihan di fungsi-fungsi kunci seperti pengelolaan operasional dan program, akuntansi atau pemeriksaan intern']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'18','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'04','kode_kuesioner_pernyataan'=>'01','nama'=>'Struktur organisasi Perangkat Daerah telah sesuai dengan ukuran dan sifat kegiatan']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'19','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'04','kode_kuesioner_pernyataan'=>'02','nama'=>'Wewenang dan tanggung jawab dalam struktur organisasi perangkat daerah diungkapkan secara jelas']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'20','kode_kuesioner_bagian'=>'05','kode_kuesioner_subbagian'=>'01','kode_kuesioner_pernyataan'=>'01','nama'=>'Pemisahan tugas dan dan tanggung jawab digunakan untuk membantu mencegah penyelewengan']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'21','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'04','kode_kuesioner_pernyataan'=>'03','nama'=>'Hubungan dan jenjang pelaporan intern dalam perangkat daerah ditetapkan secara jelas']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'22','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'04','kode_kuesioner_pernyataan'=>'04','nama'=>'Jumlah pegawai sesuai dengan kebutuhan dalam struktur organisasi ']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'23','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'05','kode_kuesioner_pernyataan'=>'01','nama'=>'Wewenang diberikan kepada pegawai yang tepat sesuai dengan tingkat tanggung jawabnya dalam rangka pencapaian tujuan perangkat daerah']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'24','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'05','kode_kuesioner_pernyataan'=>'02','nama'=>'Pegawai yang diberikan wewenang memahami bahwa wewenang dan tanggung jawab yang diterimanya terkait dengan pihak lain']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'25','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'05','kode_kuesioner_pernyataan'=>'03','nama'=>'Pegawai yang diberikan wewenang memahami bahwa pelaksanaan wewenang dan tanggung jawab terkait dengan penerapan SPIP']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'26','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'06','kode_kuesioner_pernyataan'=>'01','nama'=>'Pimpinan perangkat daerah memiliki standar dan kriteria pegawai dengan menekankan pada pendidikan, pengalaman, prestasi dan perilaku etika.']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'27','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'06','kode_kuesioner_pernyataan'=>'02','nama'=>'Pimpinan perangkat daerah mengadakan program pelatihan bagi pegawai baru dan pelatihan berkesinambungan untuk semua pegawai']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'28','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'06','kode_kuesioner_pernyataan'=>'03','nama'=>'Latar belakang calon pegawai menjadi pertimbangan pimpinan dalam proses rekruitmen pegawai ']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'29','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'06','kode_kuesioner_pernyataan'=>'04','nama'=>'Pimpinan melakukan supervisi kepada pegawai secara periodik untuk memastikan apakah pegawai memahami dengan baik tugas, tanggung jawab dan harapan pimpinan ']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'30','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'07','kode_kuesioner_pernyataan'=>'01','nama'=>'Inspektorat melakukan pengawasan atas kegiatan pada perangkat daerah']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'31','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'07','kode_kuesioner_pernyataan'=>'02','nama'=>'Terdapat mekanisme peringatan dini dan peningkatan efektivitas manajemen risiko dalam penyelenggaraan tugas dan fungsi perangkat daerah']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'32','kode_kuesioner_bagian'=>'05','kode_kuesioner_subbagian'=>'01','kode_kuesioner_pernyataan'=>'02','nama'=>'Pengeditan dan pengecekan otomatis serta kegaitan
        penatausahaan digunakan untuk membantu dalam mengontrol
        keakuratan dan kelengkapan pemrosesan transaksi']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'33','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'08','kode_kuesioner_pernyataan'=>'01','nama'=>'Perangkat daerah menjaga hubungan yang baik dengan Instansi lain yang mengelola anggaran, akuntansi, dan perbendaharaan']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'34','kode_kuesioner_bagian'=>'05','kode_kuesioner_subbagian'=>'01','kode_kuesioner_pernyataan'=>'03','nama'=>'Pimpinan mengambil langkah untuk menindaklanjuti
        rekomendasi penyempurnaan pengendalian intern yang
        direkomendasikan oleh APIP
        ']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'35','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'08','kode_kuesioner_pernyataan'=>'02','nama'=>'Biro Keuangan secara berkala melakukan pembahasan terkait pertanggungjawaban atas pelaksanaan pembayaran, pelaporan akuntansi, dan pelaporan perpajakan']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'36','kode_kuesioner_bagian'=>'05','kode_kuesioner_subbagian'=>'02','kode_kuesioner_pernyataan'=>'01','nama'=>'Pimpinan dengan dibantu oleh APIP melakukan evaluasi
        terpisah secara berkala']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'37','kode_kuesioner_bagian'=>'02','kode_kuesioner_subbagian'=>'01','kode_kuesioner_pernyataan'=>'01','nama'=>'Pimpinan menetapkan tujuan instansi secara keseluruhan dalam bentuk misi, tujuan dan sasaran sebagaimana dituangkan dalam rencana strategis dan rencana kinerja tahunan']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'38','kode_kuesioner_bagian'=>'05','kode_kuesioner_subbagian'=>'02','kode_kuesioner_pernyataan'=>'02','nama'=>'Kelemahan yang ditemukan segera dikomunikasikan kepada
        orang yang bertanggung jawab dan diselesaikan']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'39','kode_kuesioner_bagian'=>'02','kode_kuesioner_subbagian'=>'01','kode_kuesioner_pernyataan'=>'02','nama'=>'Seluruh tujuan dan sasaran perangkat daerah sudah secara jelas dikomunikasikan kepada seluruh pegawai ']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'40','kode_kuesioner_bagian'=>'05','kode_kuesioner_subbagian'=>'03','kode_kuesioner_pernyataan'=>'01','nama'=>'Pimpinan segera mereviu dan mengevaluasi hasil temuan audit,
        hasil penilaian, dan reviu lainnya yang menunjukkan adanya
        kelemahan dan yang mengidentifikasikan perlunya perbaikan']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'41','kode_kuesioner_bagian'=>'02','kode_kuesioner_subbagian'=>'01','kode_kuesioner_pernyataan'=>'03','nama'=>'Rencana strategi  mendukung tujuan secara keseluruhan mencakup alokasi dan prioritas penggunaan sumber daya ']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'42','kode_kuesioner_bagian'=>'05','kode_kuesioner_subbagian'=>'03','kode_kuesioner_pernyataan'=>'02','nama'=>'Pimpinan menetapkan tindakan yang memadai untuk
        menindaklanjuti temuan dan rekomendasi']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'43','kode_kuesioner_bagian'=>'02','kode_kuesioner_subbagian'=>'01','kode_kuesioner_pernyataan'=>'04','nama'=>'Perangkat daerah memilik rencana strategi dan penilaian risiko mempertimbangkan tujuan secara keseluruhan dan risiko serta menetapkan struktur pengendalian penanganan risiko ']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'44','kode_kuesioner_bagian'=>'02','kode_kuesioner_subbagian'=>'02','kode_kuesioner_pernyataan'=>'01','nama'=>'Penetapan tujuan pada tingkat kegiatan harus relevan berdasarkan tujuan dan rencana strategi']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'45','kode_kuesioner_bagian'=>'04','kode_kuesioner_subbagian'=>'01','kode_kuesioner_pernyataan'=>'01','nama'=>'Informasi keuangan dan anggaran yang memadai sudah
        disediakan guna mendukung penyusunan pelaporan keuangan internal dan eksternal']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'46','kode_kuesioner_bagian'=>'02','kode_kuesioner_subbagian'=>'02','kode_kuesioner_pernyataan'=>'02','nama'=>'Tujuan pada tingkat kegiatan saling melengkapi, saling menunjang dan tidak bertentangan satu dengan yang lainnya']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'47','kode_kuesioner_bagian'=>'04','kode_kuesioner_subbagian'=>'01','kode_kuesioner_pernyataan'=>'02','nama'=>'Informasi disediakan tepat waktu agar dapat dilaksanakan
        pemantauan kejadian, kegiatan, dan transaksi sehingga memungkinkan dilakukan tindakan korektif secara cepat
        ']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'48','kode_kuesioner_bagian'=>'02','kode_kuesioner_subbagian'=>'02','kode_kuesioner_pernyataan'=>'03','nama'=>'Tujuan mempunyai unsur kriteria pengukuran']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'49','kode_kuesioner_bagian'=>'02','kode_kuesioner_subbagian'=>'02','kode_kuesioner_pernyataan'=>'04','nama'=>'Tujuan pada kegiatan didukung sumber daya yang cukup']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'50','kode_kuesioner_bagian'=>'02','kode_kuesioner_subbagian'=>'03','kode_kuesioner_pernyataan'=>'01','nama'=>'Pimpinan mengidentifikasi risiko yang sesuai dengan tujuan perangkat daerah dan kegiatan secara komprehensif ']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'51','kode_kuesioner_bagian'=>'02','kode_kuesioner_subbagian'=>'03','kode_kuesioner_pernyataan'=>'02','nama'=>'Pimpinan telah mengidentifikasi risiko akibat perkembangan teknologi']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'52','kode_kuesioner_bagian'=>'02','kode_kuesioner_subbagian'=>'03','kode_kuesioner_pernyataan'=>'03','nama'=>'Pimpinan telah mengidentifikasi risiko akibat perubaha kebutuhan/harapan']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'53','kode_kuesioner_bagian'=>'02','kode_kuesioner_subbagian'=>'03','kode_kuesioner_pernyataan'=>'04','nama'=>'Pimpinan telah mengidentifikasi risiko akibat ditetapkannya peraturan baru']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'54','kode_kuesioner_bagian'=>'02','kode_kuesioner_subbagian'=>'03','kode_kuesioner_pernyataan'=>'05','nama'=>'Pimpinan telah mengidentifikasi risiko akibat interaksi dengan instansi pemerintah lainnya dan diluar pemerintah']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'55','kode_kuesioner_bagian'=>'02','kode_kuesioner_subbagian'=>'03','kode_kuesioner_pernyataan'=>'06','nama'=>'Pimpinan telah mengidentifikasi risiko akibat adanya pengurangan pegawai']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'56','kode_kuesioner_bagian'=>'02','kode_kuesioner_subbagian'=>'03','kode_kuesioner_pernyataan'=>'07','nama'=>'Pimpinan telah mengidentifikasi risiko akibat tidak terpenuhinya kualifikasi pegawai dan tidak adanya pelatihan pegawai ']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'57','kode_kuesioner_bagian'=>'02','kode_kuesioner_subbagian'=>'03','kode_kuesioner_pernyataan'=>'08','nama'=>'Pimpinan telah mengidentifikasi risiko akibat timbulnya akses pegawai yang tidak berwenang terhadap aset yang rawan hilang ']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'58','kode_kuesioner_bagian'=>'02','kode_kuesioner_subbagian'=>'03','kode_kuesioner_pernyataan'=>'09','nama'=>'Pimpinan telah mengidentifikasi risiko akibat ketidaktersediaan dana untuk pembiyaan program baru atau program lanjutan']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'59','kode_kuesioner_bagian'=>'02','kode_kuesioner_subbagian'=>'04','kode_kuesioner_pernyataan'=>'01','nama'=>'Pimpinan menetapkan proses formal dan informal untuk menganalisis risiko berdasarkan kegiatan sehari-hari']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'60','kode_kuesioner_bagian'=>'04','kode_kuesioner_subbagian'=>'02','kode_kuesioner_pernyataan'=>'01','nama'=>'Tugas yang dibebankan kepada pegawai sudah dikomunikasikan dengan jelas dan mudah dimengerti aspek pengendalian internnya, peranan masing-masing pegawai dan hubungan pekerjaan antar pegawai']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'61','kode_kuesioner_bagian'=>'02','kode_kuesioner_subbagian'=>'04','kode_kuesioner_pernyataan'=>'02','nama'=>'Kriteria risiko sudah ditetapkan']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'62','kode_kuesioner_bagian'=>'04','kode_kuesioner_subbagian'=>'02','kode_kuesioner_pernyataan'=>'02','nama'=>'Pengaduan, keluhan, dan pertanyaan mengenai layanan informasi pemerintah ditindaklanjuti dengan baik ']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'63','kode_kuesioner_bagian'=>'02','kode_kuesioner_subbagian'=>'04','kode_kuesioner_pernyataan'=>'03','nama'=>'Pimpinan dan pegawai yang berkepentingan diikutsertakan dalam kegiatan analisis risiko']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'64','kode_kuesioner_bagian'=>'04','kode_kuesioner_subbagian'=>'03','kode_kuesioner_pernyataan'=>'01','nama'=>'Pimpinan telah menggunakan bentuk dan sarana komunikasi efektif berupa buku pedoman kebijakan dan prosedur, surat edaran, memorandum, surat elektronik, dan arahan lisan
        ']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'65','kode_kuesioner_bagian'=>'02','kode_kuesioner_subbagian'=>'04','kode_kuesioner_pernyataan'=>'04','nama'=>'Risiko yang diidentifikasi dan dianalisis relevan dengan tujuan kegiatan']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'66','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'01','kode_kuesioner_pernyataan'=>'01','nama'=>'Pimpinan terlibat dalam penyusunan rencana strategis dan rencana kerja tahunan serta terlibat dalam pengukuran dan pelaporan hasil yang dicapai']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'67','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'01','kode_kuesioner_pernyataan'=>'02','nama'=>'Pimpinan secara berkala mereviu kinerja dibandingkan rencana  dengan memantau pencapaian targetnya dan tindak lanjut yang telah diambil']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'68','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'01','kode_kuesioner_pernyataan'=>'03','nama'=>'Pimpinan pada setiap kegiatan mereviu laporan kinerja, menganalisis kecendrungan, dan mengukur hasil dibandingkan target, anggaran, prakiraan, dan kinerja periode yang lalu  ']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'69','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'11','kode_kuesioner_pernyataan'=>'03','nama'=>'Terdapat dokumentasi baik dalam bentuk cetakan maupun elektronis, yang berguna bagi pimpinan dalam mengendalikan kegiatan dan pihak lain yang terlibat dalam evaluasi dan analisis kegiatan']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'70','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'01','kode_kuesioner_pernyataan'=>'04','nama'=>'Pejabat pengelola keuangan dan PPTK mereviu serta membandingkan kinerja keuangan, anggaran dan operasional dengan hasil yang direncanakan']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'71','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'01','kode_kuesioner_pernyataan'=>'05','nama'=>'Pegawai secara berkala melakukan rekonsiliasi dan pengecekan ketepatan informasi ']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'72','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'11','kode_kuesioner_pernyataan'=>'02','nama'=>'Dokumentasi atas transaksi dan kejadian penting yang lengkap dan akurat sehingga memudahkan penelusuran sejak otorisasi, inisiasi, pemrosesan hingga penyelesaian']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'73','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'02','kode_kuesioner_pernyataan'=>'01','nama'=>'Rencana strategis, rencana kerja tahunan, dan pedoman kerja telah dikomunikasikan secara jelas dan konsisten kepada seluruh pegawai']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'74','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'02','kode_kuesioner_pernyataan'=>'02','nama'=>'Instansi memiliki strategi pembinaan sumber daya manusia dalam rencana strategis dan rencana kerja tahunan']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'75','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'11','kode_kuesioner_pernyataan'=>'01','nama'=>'Dokumentasi atas transaksi dan kejadian penting yang lengkap dan akurat tersedia setiap saat untuk diperiksa']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'76','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'02','kode_kuesioner_pernyataan'=>'03','nama'=>'Pegawai diberikan orientasi, pelatihan dan kelengkapan kinerja untuk melaksanakan tugas dan meningkatkan kinerja/kemampuan serta memenuhi kebutuhan organisasi']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'77','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'10','kode_kuesioner_pernyataan'=>'01','nama'=>'Pimpinan memberikan akses hanya kepada pegawai yang berwenang dan melakukan reviu atas pembatasan tersebut secara berkala  ']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'78','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'02','kode_kuesioner_pernyataan'=>'04','nama'=>'Sistem kompensasi cukup memadai untuk mendapatkan, memotivasi pegawai serta insentif dan penghargaan disediakan untuk mendorong pegawai melakukan tugas dengan kemampuan yang maksimal']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'79','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'09','kode_kuesioner_pernyataan'=>'01','nama'=>'Transaksi dan kejadian diklasifikasikan dengan tepat dan dicatat dengan segera sehingga tetap relevan dan berguna bagi pimpinan dalam mengendalikan kegiatan dan dalam pengambilan keputusan']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'80','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'02','kode_kuesioner_pernyataan'=>'05','nama'=>'Pegawai diberikan evaluasi kinerja dan umpan balik yang bermakna, jujur dan konstruktif untuk membantu pegawai memahami hubungan antara kinerja dan pencapaian tujuan organisasi']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'81','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'03','kode_kuesioner_pernyataan'=>'01','nama'=>'Penilaian risiko dilaksanakan dan didokumentasikan secara teratur dengan mempertimbangkan sensitivitas dan keandalan data']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'82','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'03','kode_kuesioner_pernyataan'=>'02','nama'=>'Pimpinan mengembangkan rencana yang jelas menggambarkan program pengamanan, kebijakan dan prosedur yang mendukungnya serta mengimplementasikan dan mengelola program pengamanan']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'83','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'08','kode_kuesioner_pernyataan'=>'01','nama'=>'Pegawai yang diberi wewenang segera mencatat dan mengklasifikasikan sesuai dengan mata anggaran transaksi yang telah diproses pembayarannya  ']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'84','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'03','kode_kuesioner_pernyataan'=>'03','nama'=>'Pimpinan menilai kelayakan kebijakan pengamanan dan kepatuhan terhadap kebijakan secara berkala ']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'85','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'03','kode_kuesioner_pernyataan'=>'04','nama'=>'Pemisahan tugas untuk pengendalian atas akses sudah ditetapkan']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'86','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'07','kode_kuesioner_pernyataan'=>'02','nama'=>'Pimpinan menetapkan dan mengkomunikasikan kepada seluruh pegawai bahwa hanya transaksi dan kejadian yang telah diotorisasi yang dapat diproses dan di entri ']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'87','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'03','kode_kuesioner_pernyataan'=>'05','nama'=>'Akses ke terminal entri data dibatasi']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'88','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'07','kode_kuesioner_pernyataan'=>'01','nama'=>'Hanya transaksi dan kejadian yang valid diproses, dan dientri sesuai dengan keputusan dan arahan pimpinan']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'89','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'03','kode_kuesioner_pernyataan'=>'06','nama'=>'Transaksi yang dientri dan diproses ke dalam komputer adalah seluruh transaksi yang telah diotorisasi']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'90','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'03','kode_kuesioner_pernyataan'=>'07','nama'=>'Data yang salah dengan segera dicatat, dilaporkan, diinvestigasi dan diperbaiki']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'91','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'06','kode_kuesioner_pernyataan'=>'03','nama'=>'Pimpinan menetapkan kebijakan tentang rekonsiliasi saldo bank dilakukan oleh pegawai yang tidak memiliki tanggungjawab atas penerimaan, pengeluaran dan penyimpanan kas']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'92','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'04','kode_kuesioner_pernyataan'=>'01','nama'=>'Kebijakan dan prosedur pengamanan fisik atas aset telah ditetapkan, diimplementasikan dan dikomunikasikan ke seluruh pegawai ']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'93','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'04','kode_kuesioner_pernyataan'=>'02','nama'=>'Aset yang berisiko hilang, dicuri, rusak, digunakan tanpa hak seperti uang tunai, surat berharga, perlengkapan, persediaan, dan peralatan, secara fisik diamankan dan akses ke aset tersebut dikendalikan']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'94','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'04','kode_kuesioner_pernyataan'=>'03','nama'=>'Aset seperti uang tunai, perlengkapan, persediaan dan peralatan secara periodik dihitung dan dibandingkan dengan catatan pengendalian; setiap perbedaan diperiksa secara teliti
        ']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'95','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'04','kode_kuesioner_pernyataan'=>'04','nama'=>'Identitas aset dilekatkan pada meubelair, peralatan dan inventaris kantor lainnya']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'96','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'06','kode_kuesioner_pernyataan'=>'02','nama'=>'Tugas dilimpahkan secara sistematik ke sejumlah pegawai untuk memberikan keyakinan adanya checks and balances']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'97','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'06','kode_kuesioner_pernyataan'=>'01','nama'=>'Pimpinan menetapkan kebijakan tanggung jawab dan tugas atas transaksi atau kejadian dipisahkan di antara pegawai yang berbeda yang terkait dengan otorisasi, persetujuan, pemrosesan dan pencatatan, pembayaran dan penerimaan dana']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'98','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'04','kode_kuesioner_pernyataan'=>'05','nama'=>'Persediaan dan perlengkapan disimpan di tempat yang diamankan secara fisik dan dilindungi dari kerusakan']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'99','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'05','kode_kuesioner_pernyataan'=>'02','nama'=>'Pimpinan menganalisis secara periodik data capaian kinerja pegawai dibandingkan dengan sasaran yang ditetapkan']);
        $this->insert('{{%ref_kuesioner_pernyataan}}',['id'=>'100','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'05','kode_kuesioner_pernyataan'=>'01','nama'=>'Pimpinan menetapkan dan mereviu indikator dan ukuran kinerja pegawai']);
        $this->insert('{{%ref_kuesioner_subbagian}}',['id'=>'1','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'01','nama'=>'Penegakan Integritas dan Nilai Etika']);
        $this->insert('{{%ref_kuesioner_subbagian}}',['id'=>'2','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'02','nama'=>'Komitmen terhadap Kompetensi']);
        $this->insert('{{%ref_kuesioner_subbagian}}',['id'=>'3','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'03','nama'=>'Kepemimpinan yang Kondusif']);
        $this->insert('{{%ref_kuesioner_subbagian}}',['id'=>'4','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'04','nama'=>'Pembentukan Struktur Organisasi yang sesuai dengan kebutuhan']);
        $this->insert('{{%ref_kuesioner_subbagian}}',['id'=>'5','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'05','nama'=>'Pendelegasian Wewenang dan Tanggung Jawab yang tepat']);
        $this->insert('{{%ref_kuesioner_subbagian}}',['id'=>'6','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'06','nama'=>'Kebijakan dan Praktik Pembinaan Sumber Daya Manusia ']);
        $this->insert('{{%ref_kuesioner_subbagian}}',['id'=>'7','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'07','nama'=>'Perwujudan Peran Aparat Pengawasan Intern Pemerintah yang efektif']);
        $this->insert('{{%ref_kuesioner_subbagian}}',['id'=>'8','kode_kuesioner_bagian'=>'01','kode_kuesioner_subbagian'=>'08','nama'=>'Hubungan yang baik dengan Instansi Pemerintah terkait']);
        $this->insert('{{%ref_kuesioner_subbagian}}',['id'=>'9','kode_kuesioner_bagian'=>'02','kode_kuesioner_subbagian'=>'01','nama'=>'Penetapan Tujuan secara Keseluruhan']);
        $this->insert('{{%ref_kuesioner_subbagian}}',['id'=>'10','kode_kuesioner_bagian'=>'02','kode_kuesioner_subbagian'=>'02','nama'=>'Penetapan Tujuan secara Kegiatan ']);
        $this->insert('{{%ref_kuesioner_subbagian}}',['id'=>'11','kode_kuesioner_bagian'=>'02','kode_kuesioner_subbagian'=>'03','nama'=>'Identifikasi Risiko']);
        $this->insert('{{%ref_kuesioner_subbagian}}',['id'=>'12','kode_kuesioner_bagian'=>'02','kode_kuesioner_subbagian'=>'04','nama'=>'Analisis Risiko']);
        $this->insert('{{%ref_kuesioner_subbagian}}',['id'=>'13','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'01','nama'=>'Reviu atas Kinerja Instansi Pemerintah yang Bersangkutan']);
        $this->insert('{{%ref_kuesioner_subbagian}}',['id'=>'14','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'02','nama'=>'Pembinaan Sumber Daya Manusia']);
        $this->insert('{{%ref_kuesioner_subbagian}}',['id'=>'15','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'03','nama'=>'Pengendalian atas Pengelolaan Sistem Informasi']);
        $this->insert('{{%ref_kuesioner_subbagian}}',['id'=>'16','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'04','nama'=>'Pengendalian Fisik atas Aset']);
        $this->insert('{{%ref_kuesioner_subbagian}}',['id'=>'17','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'05','nama'=>'Penetapan dan Reviu Indikator dan Ukuran Kinerja']);
        $this->insert('{{%ref_kuesioner_subbagian}}',['id'=>'18','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'06','nama'=>'Pemisahan Fungsi']);
        $this->insert('{{%ref_kuesioner_subbagian}}',['id'=>'19','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'07','nama'=>'Otorisasi atas Transaksi dan Kejadian yang Penting']);
        $this->insert('{{%ref_kuesioner_subbagian}}',['id'=>'20','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'08','nama'=>'Pencatatan yang Akurat dan Tepat Waktu']);
        $this->insert('{{%ref_kuesioner_subbagian}}',['id'=>'21','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'09','nama'=>'Pembatasan Akses atas Sumber Daya dan Pencatatannya']);
        $this->insert('{{%ref_kuesioner_subbagian}}',['id'=>'22','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'10','nama'=>'Akuntabilitas terhadap Sumber Daya dan Pencatatannya']);
        $this->insert('{{%ref_kuesioner_subbagian}}',['id'=>'23','kode_kuesioner_bagian'=>'03','kode_kuesioner_subbagian'=>'11','nama'=>'Dokumentasi yang Baik atas Sistem Pengendalian Intern serta Transaksi dan Kejadian Penting']);
        $this->insert('{{%ref_kuesioner_subbagian}}',['id'=>'24','kode_kuesioner_bagian'=>'04','kode_kuesioner_subbagian'=>'01','nama'=>'Informasi']);
        $this->insert('{{%ref_kuesioner_subbagian}}',['id'=>'25','kode_kuesioner_bagian'=>'04','kode_kuesioner_subbagian'=>'02','nama'=>'Komunikasi ']);
        $this->insert('{{%ref_kuesioner_subbagian}}',['id'=>'26','kode_kuesioner_bagian'=>'04','kode_kuesioner_subbagian'=>'03','nama'=>'Bentuk dan Sarana Komunikasi ']);
        $this->insert('{{%ref_kuesioner_subbagian}}',['id'=>'27','kode_kuesioner_bagian'=>'05','kode_kuesioner_subbagian'=>'01','nama'=>'Pemantauan Berkelanjutan']);
        $this->insert('{{%ref_kuesioner_subbagian}}',['id'=>'28','kode_kuesioner_bagian'=>'05','kode_kuesioner_subbagian'=>'02','nama'=>'Evaluasi terpisah']);
        $this->insert('{{%ref_kuesioner_subbagian}}',['id'=>'29','kode_kuesioner_bagian'=>'05','kode_kuesioner_subbagian'=>'03','nama'=>'Penyelesaian Audit']);
        $this->insert('{{%user}}',['id'=>'3','role'=>'1','kode_pegawai'=>null,'username'=>'admin','password'=>'$2y$13$kNMHRGSIgIzA667kuc6Oie4XY5IYIhRUangd/0.u0K1WCknAPU3Ti','nama'=>'Admin','email'=>null,'auth_key'=>null,'access_token'=>null,'status_hapus'=>null]);
        $this->execute('SET foreign_key_checks = 1;');

    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `ref_kuesioner_bagian`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `ref_kuesioner_pernyataan`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `ref_kuesioner_subbagian`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `user`');
        $this->execute('SET foreign_key_checks = 1;');

        return true;
    }
    
}
