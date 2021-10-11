





use sis;
SHOW TABLE STATUS LIKE 'sis_checklist_complementar';
INSERT INTO sis_checklist_complementar VALUES(NULL, '2021-10-08', '09:47:56', 'Carlos', 'Inspeção para Licença Sanitária / Programas específicos de Vigilância Sanitária / ' ,'CLiente de acordo', 'Concluo que podemos liberar para ele', 'intimacao', 10, 149 );

INSERT INTO sis_checklist VALUES(NULL, '', '', 'sis_roteiro_peixaria', 1, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 2, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 3, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 4, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 5, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 6, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 7, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 8, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 9, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 10, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 11, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 12, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 13, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 14, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 15, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 16, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 17, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 18, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 19, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 20, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 21, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 22, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 23, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 24, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 25, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 26, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 27, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 28, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 29, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 30, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 31, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 32, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 33, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 34, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 35, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 36, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 37, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 38, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 39, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 40, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 41, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 42, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 43, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 44, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 45, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 46, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 47, 5, 149),(NULL, '', '', 'sis_roteiro_peixaria', 48, 5, 149),(NULL, 'NO – Não observado', 'AAAA', 'sis_roteiro_peixaria', 49, 5, 149);


SELECT * FROM sis_checklist_complementar 
INNER JOIN sis_estabelecimento on id_estabelecimento = sis_estabelecimento.id
INNER JOIN sis_checklist on sis_checklist_complementar.id_estabelecimento = sis_checklist.id_estabelecimento;

SELECT * FROM sis_checklist_complementar 
INNER JOIN sis_estabelecimento on id_estabelecimento = sis_estabelecimento.id order by sis_checklist_complementar.id DESC;

SELECT * FROM sis_checklist_complementar
INNER JOIN sis_checklist on sis_checklist_complementar.id = sis_checklist.id_complementar;

use sis;
select data from chaves_wp_extrair;
select * from chaves_wp_extrair WHERE date_add(data,interval 7 day) > now();
select date_add(now(), interval 1 day);
SELECT count(id) FROM insta_extrair;


SELECT *, 'chaves_wp_extrair' as Tipo from chaves_wp_extrair WHERE teste=1;