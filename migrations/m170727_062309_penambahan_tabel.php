<?php

use yii\db\Migration;

class m170727_062309_penambahan_tabel extends Migration
{
    public function safeUp()
    {

    }

    public function safeDown()
    {
        echo "m170727_062309_penambahan_tabel cannot be reverted.\n";

        return false;
    }

    
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
if (!in_array('kegiatan', $tables))  { 
if ($dbType == "mysql") {
    $this->createTable('{{%kegiatan}}', [
        'id' => 'INT(11) NOT NULL AUTO_INCREMENT',
        0 => 'PRIMARY KEY (`id`)',
        'nama' => 'VARCHAR(255) NOT NULL',
        'latar_belakang' => 'TEXT NULL',
        'tujuan_sasaran' => 'TEXT NULL',
        'ruang_lingkup' => 'TEXT NULL',
        'penanggungjawab' => 'VARCHAR(255) NULL',
        'jangka_waktu' => 'VARCHAR(255) NULL',
        'alur_kerja' => 'VARCHAR(255) NULL',
        'disetujui_nama' => 'VARCHAR(255) NULL',
        'disetujui_jabatan' => 'VARCHAR(255) NULL',
        'diperiksa_nama' => 'VARCHAR(255) NULL',
        'diperiksa_jabatan' => 'VARCHAR(255) NULL',
        'disusun_nama' => 'VARCHAR(255) NULL',
        'disusun_jabatan' => 'VARCHAR(255) NULL',
    ], $tableOptions_mysql);
}
}
 
/* MYSQL */
if (!in_array('kegiatan_stakeholder', $tables))  { 
if ($dbType == "mysql") {
    $this->createTable('{{%kegiatan_stakeholder}}', [
        'id' => 'INT(11) NOT NULL AUTO_INCREMENT',
        0 => 'PRIMARY KEY (`id`)',
        'id_kegiatan' => 'INT(11) NOT NULL',
        'nama' => 'VARCHAR(255) NOT NULL',
        'kaitan' => 'VARCHAR(255) NULL',
    ], $tableOptions_mysql);
}
}
 
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
if (!in_array('ref_risiko_dampak', $tables))  { 
if ($dbType == "mysql") {
    $this->createTable('{{%ref_risiko_dampak}}', [
        'id' => 'INT(11) NOT NULL AUTO_INCREMENT',
        0 => 'PRIMARY KEY (`id`)',
        'kode_risiko_dampak' => 'VARCHAR(50) NOT NULL',
        'nama' => 'VARCHAR(255) NOT NULL',
    ], $tableOptions_mysql);
}
}
 
/* MYSQL */
if (!in_array('ref_risiko_kemungkinan', $tables))  { 
if ($dbType == "mysql") {
    $this->createTable('{{%ref_risiko_kemungkinan}}', [
        'id' => 'INT(11) NOT NULL AUTO_INCREMENT',
        0 => 'PRIMARY KEY (`id`)',
        'kode_risiko_kemungkinan' => 'VARCHAR(50) NOT NULL',
        'nama' => 'VARCHAR(255) NOT NULL',
    ], $tableOptions_mysql);
}
}
 
/* MYSQL */
if (!in_array('ref_risiko_level', $tables))  { 
if ($dbType == "mysql") {
    $this->createTable('{{%ref_risiko_level}}', [
        'id' => 'INT(11) NOT NULL AUTO_INCREMENT',
        0 => 'PRIMARY KEY (`id`)',
        'kode_risiko_kemungkinan' => 'VARCHAR(50) NOT NULL',
        'kode_risiko_dampak' => 'VARCHAR(50) NOT NULL',
        'nama' => 'VARCHAR(255) NOT NULL',
    ], $tableOptions_mysql);
}
}
 
/* MYSQL */
if (!in_array('risiko', $tables))  { 
if ($dbType == "mysql") {
    $this->createTable('{{%risiko}}', [
        'id' => 'INT(11) NOT NULL AUTO_INCREMENT',
        0 => 'PRIMARY KEY (`id`)',
        'id_kegiatan' => 'INT(11) NOT NULL',
        'deskripsi' => 'VARCHAR(255) NULL',
        'penyebab' => 'VARCHAR(255) NULL',
        'dampak' => 'VARCHAR(255) NULL',
        'keterangan' => 'VARBINARY(255) NULL',
        'kode_risiko_kemungkinan' => 'VARCHAR(50) NULL',
        'kode_risiko_dampak' => 'VARCHAR(50) NULL',
    ], $tableOptions_mysql);
}
}
 
/* MYSQL */
if (!in_array('risiko_mitigasi', $tables))  { 
if ($dbType == "mysql") {
    $this->createTable('{{%risiko_mitigasi}}', [
        'id' => 'INT(11) NOT NULL AUTO_INCREMENT',
        0 => 'PRIMARY KEY (`id`)',
        'id_risiko' => 'INT(11) NOT NULL',
        'nama' => 'VARCHAR(255) NOT NULL',
        'penanggungjawab' => 'VARCHAR(255) NULL',
        'waktu' => 'VARCHAR(255) NULL',
        'biaya' => 'VARCHAR(255) NULL',
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
 
 
$this->createIndex('idx_id_kegiatan_1302_00','kegiatan_stakeholder','id_kegiatan',0);
$this->createIndex('idx_UNIQUE_kode_kuesioner_bagian_1339_01','ref_kuesioner_bagian','kode_kuesioner_bagian',1);
$this->createIndex('idx_UNIQUE_kode_kuesioner_bagian_kode_kuesioner_subbagian_kode_kuesioner_pernyataan_1366_02','ref_kuesioner_pernyataan','kode_kuesioner_bagian,kode_kuesioner_subbagian,kode_kuesioner_pernyataan',1);
$this->createIndex('idx_kode_kuesioner_subbagian_1367_03','ref_kuesioner_pernyataan','kode_kuesioner_subbagian',0);
$this->createIndex('idx_UNIQUE_kode_kuesioner_bagian_kode_kuesioner_subbagian_1393_04','ref_kuesioner_subbagian','kode_kuesioner_bagian,kode_kuesioner_subbagian',1);
$this->createIndex('idx_kode_risiko_dampak_1408_05','ref_risiko_dampak','kode_risiko_dampak',0);
$this->createIndex('idx_kode_risiko_kemungkinan_1427_06','ref_risiko_kemungkinan','kode_risiko_kemungkinan',0);
$this->createIndex('idx_UNIQUE_kode_risiko_kemungkinan_kode_risiko_dampak_1454_07','ref_risiko_level','kode_risiko_kemungkinan,kode_risiko_dampak',1);
$this->createIndex('idx_kode_risiko_dampak_1454_08','ref_risiko_level','kode_risiko_dampak',0);
$this->createIndex('idx_id_kegiatan_1483_09','risiko','id_kegiatan',0);
$this->createIndex('idx_kode_risiko_kemungkinan_1483_10','risiko','kode_risiko_kemungkinan',0);
$this->createIndex('idx_kode_risiko_dampak_1483_11','risiko','kode_risiko_dampak',0);
$this->createIndex('idx_id_risiko_1507_12','risiko_mitigasi','id_risiko',0);
$this->createIndex('idx_kode_pegawai_1531_13','user','kode_pegawai',0);
 
$this->execute('SET foreign_key_checks = 0');
$this->addForeignKey('fk_kegiatan_1299_00','{{%kegiatan_stakeholder}}', 'id_kegiatan', '{{%kegiatan}}', 'id', 'CASCADE', 'NO ACTION' );
$this->addForeignKey('fk_ref_kuesioner_subbagian_136_01','{{%ref_kuesioner_pernyataan}}', 'kode_kuesioner_bagian', '{{%ref_kuesioner_subbagian}}', 'kode_kuesioner_bagian', 'CASCADE', 'NO ACTION' );
$this->addForeignKey('fk_ref_kuesioner_subbagian_1361_02','{{%ref_kuesioner_pernyataan}}', 'kode_kuesioner_subbagian', '{{%ref_kuesioner_subbagian}}', 'kode_kuesioner_subbagian', 'CASCADE', 'NO ACTION' );
$this->addForeignKey('fk_ref_kuesioner_bagian_1389_03','{{%ref_kuesioner_subbagian}}', 'kode_kuesioner_bagian', '{{%ref_kuesioner_bagian}}', 'kode_kuesioner_bagian', 'CASCADE', 'NO ACTION' );
$this->addForeignKey('fk_ref_risiko_kemungkinan_1451_04','{{%ref_risiko_level}}', 'kode_risiko_kemungkinan', '{{%ref_risiko_kemungkinan}}', 'kode_risiko_kemungkinan', 'CASCADE', 'NO ACTION' );
$this->addForeignKey('fk_ref_risiko_dampak_1451_05','{{%ref_risiko_level}}', 'kode_risiko_dampak', '{{%ref_risiko_dampak}}', 'kode_risiko_dampak', 'CASCADE', 'NO ACTION' );
$this->addForeignKey('fk_ref_risiko_kemungkinan_1476_06','{{%risiko}}', 'kode_risiko_kemungkinan', '{{%ref_risiko_kemungkinan}}', 'kode_risiko_kemungkinan', 'CASCADE', 'NO ACTION' );
$this->addForeignKey('fk_ref_risiko_kemungkinan_1477_07','{{%risiko}}', 'kode_risiko_kemungkinan', '{{%ref_risiko_kemungkinan}}', 'kode_risiko_kemungkinan', 'CASCADE', 'NO ACTION' );
$this->addForeignKey('fk_ref_risiko_dampak_1477_08','{{%risiko}}', 'kode_risiko_dampak', '{{%ref_risiko_dampak}}', 'kode_risiko_dampak', 'CASCADE', 'NO ACTION' );
$this->addForeignKey('fk_risiko_1504_09','{{%risiko_mitigasi}}', 'id_risiko', '{{%risiko}}', 'id', 'CASCADE', 'NO ACTION' );
$this->execute('SET foreign_key_checks = 1;');

    }

    public function down()
    {

 $this->execute('SET foreign_key_checks = 0');
$this->execute('DROP TABLE IF EXISTS `kegiatan`');
$this->execute('SET foreign_key_checks = 1;');
$this->execute('SET foreign_key_checks = 0');
$this->execute('DROP TABLE IF EXISTS `kegiatan_stakeholder`');
$this->execute('SET foreign_key_checks = 1;');
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
$this->execute('DROP TABLE IF EXISTS `ref_risiko_dampak`');
$this->execute('SET foreign_key_checks = 1;');
$this->execute('SET foreign_key_checks = 0');
$this->execute('DROP TABLE IF EXISTS `ref_risiko_kemungkinan`');
$this->execute('SET foreign_key_checks = 1;');
$this->execute('SET foreign_key_checks = 0');
$this->execute('DROP TABLE IF EXISTS `ref_risiko_level`');
$this->execute('SET foreign_key_checks = 1;');
$this->execute('SET foreign_key_checks = 0');
$this->execute('DROP TABLE IF EXISTS `risiko`');
$this->execute('SET foreign_key_checks = 1;');
$this->execute('SET foreign_key_checks = 0');
$this->execute('DROP TABLE IF EXISTS `risiko_mitigasi`');
$this->execute('SET foreign_key_checks = 1;');
$this->execute('SET foreign_key_checks = 0');
$this->execute('DROP TABLE IF EXISTS `user`');
$this->execute('SET foreign_key_checks = 1;');


        return true;
    }
    
}
