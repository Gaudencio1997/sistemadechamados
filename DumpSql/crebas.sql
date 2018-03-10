/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     09/03/2018 16:29:47                          */
/*==============================================================*/


drop table if exists TB_DADOS;

/*==============================================================*/
/* Table: TB_DADOS                                              */
/*==============================================================*/
create table TB_DADOS
(
   NOME                 char(15),
   SOBRENOME            char(35),
   MATRICULA            int not null,
   SENHA                varchar(32),
   CPF                  varchar(14),
   ADMINISTRADOR        bool,
   primary key (MATRICULA)
);

