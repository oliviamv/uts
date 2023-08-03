/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     12/06/2023 13:16:52                          */
/*==============================================================*/


drop table if exists TBSISWA;

drop table if exists TBABSENSI;

drop table if exists TBGURU_PIKET;

/*==============================================================*/
/* Table: TBSISWA                                          */
/*==============================================================*/
create table TBSISWA
(
   ID_SISWA        char(20) not null,
   NIS                  char(25),
   NISN                 char(25),
   NAMA_SISWA       char(50),
   TINGKAT_SISWA                  char(15),
   JURUSAN_SISWA                  char(30),
   ALAMAT_SISWA                  char(30),
   TLP_SISWA     int,
   primary key (IDPEMBAYARAN)
);

/*==============================================================*/
/* Table: TBABSENSI                                            */
/*==============================================================*/
create table TBABSENSI
(
   ID_ABSENSI           char(20) not null,
   KETERANGAN       char(20),
   TANGGAL        DATE,
   primary key (IDABSENSI)
);

/*==============================================================*/
/* Table: TBGURU_PIKET                                              */
/*==============================================================*/
create table TBGURU_PIKET
(
   ID_GURU                  char(20) not null,
   NIP                char(25),
   NAMA_GURU               char(40),
   ALAMAT_GURU              char(30),
   TLP_GURU        INT,
   primary key (NIP)
);

alter table TBSISWA add constraint FK_SISWA foreign key (NIS)
      references TBGURU_PIKET (NIP) on delete restrict on update restrict;

alter table TBSISWA add constraint FK_SISWA foreign key (IDSISWA)
      references TBSISWA (IDSISWA) on delete restrict on update restrict;

