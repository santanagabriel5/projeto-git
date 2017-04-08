use projeto_ava;

drop table if exists disciplina;

create table disciplina (
id int not null default,
titulo varchar(60) not null,
cargah int(4) not null,
codProfessor int not null,
inicio date not null,
fim date not null,
constraint PK_Disciplina primary key (id));


select * from disciplina;
