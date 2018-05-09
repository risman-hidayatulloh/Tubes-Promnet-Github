create database bengkel;
use bengkel;


create table mekanik(
	id_mekanik int primary key AUTO_INCREMENT,
	kode_mekanik varchar(20) not null,
	nama_mekanik varchar(50) not null
);

create table user(
	id_user int primary key AUTO_INCREMENT,
	username varchar(30) not null,
	passwrod varchar(50) not null,
	jenis_user int not null
);

-- create table profile_user(
-- 	id_profile_user int primary key AUTO_INCREMENT,
-- 	id_user......
-- );

create table part(
	id_part int primary key AUTO_INCREMENT,
	kode_part varchar(20) not null,
	nama_part varchar(50) not null
);

create table href_part(
	id_href_part int primary key AUTO_INCREMENT,
	id_part int not null,
	harga_ref_part int not null,

	foreign key (id_part) references part(id_part)
);

create table jasa(
	id_jasa int primary key AUTO_INCREMENT,
	kode_jasa varchar(20) not null,
	nama_jasa varchar(50) not null
);

create table href_jasa(
	id_href_jasa int primary key AUTO_INCREMENT,
	id_jasa int not null,
	harga_ref_jasa int not null,

	foreign key (id_jasa) references jasa(id_jasa)
);

create table pelanggan(
	id_pelanggan int primary key AUTO_INCREMENT,
	kode_pelanggan varchar(20) not null,
	nama_pelanggan varchar(50) not null,
	alamat_pelanggan varchar(100) not null,
	plat_nomor varchar(10) not null,
	no_stnk varchar(30) not null
);


create table transaksi(
	id_transaksi int primary key AUTO_INCREMENT,
	id_pelanggan int not null,
	kode_transaksi varchar(20) not null,
	waktu date not null,
	bayar int not null
);

create table penjualan_part(
	id_penjualan_part int primary key AUTO_INCREMENT,
	id_transaksi int not null,
	kode_penjualan varchar(20) not null,
	total_harga_ref int not null,

	foreign key (id_transaksi) references transaksi(id_transaksi)
); 


create table detail_penjualan_part(
	id_detail_penjualan_part int primary key AUTO_INCREMENT,
	id_penjualan_part int not null,
	id_href_part int not null,
	id_part int not null,
	kode_detail_penjualan_part varchar(20) not null,
	jumlah int not null,
	harga_ref_part int not null,

	foreign key (id_penjualan_part) references penjualan_part(id_penjualan_part),
	foreign key (id_part) references part(id_part),
	foreign key (id_href_part) references href_part(id_href_part)
);

create table perbaikan(
	id_perbaikan int primary key AUTO_INCREMENT,
	id_transaksi int not null,
	kode_perbaikan varchar(20) not null,
	id_mekanik int not null,
	total_harga_ref int not null,

	foreign key (id_transaksi) references transaksi(id_transaksi),
	foreign key (id_mekanik) references mekanik(id_mekanik)
);

create table detail_perbaikan(
	id_detail_perbaikan int primary key AUTO_INCREMENT,
	id_perbaikan int not null,
	id_href_jasa int not null,
	id_jasa int not null,
	kode_detail_perbaikan varchar(20) not null,
	harga_ref_jasa int not null,

	foreign key (id_perbaikan) references perbaikan(id_perbaikan),
	foreign key (id_jasa) references jasa(id_jasa),
	foreign key (id_href_jasa) references href_jasa(id_href_jasa)
);
