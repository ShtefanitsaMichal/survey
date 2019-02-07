
/*Wszystkie unikatowe sesje w employee*/
SELECT * FROM employee 
GROUP BY `session_id` 
ORDER BY `date` DESC;

/*Liczba wszystkich sesij w podanej tabeli*/
SELECT  `session_id`, count(`session_id`) FROM nazwa_tabeli 
GROUP BY `session_id` 
ORDER BY `date` DESC;

/*Kasowanie danych bez identyficatora*/
DELETE FROM `nazwa tabeli` WHERE `session_id` = '';

/*Zwraca ostatni dane konkretnej sessji w employee*/
SELECT `typ`, `date` FROM employee
JOIN source.session_id ON employee.session_id = source.session_id
WHERE `session_id` = '1v1o899a0s6lceu0uf8lvcdlp1'
GROUP BY `session_id` 
ORDER BY `date` DESC;

/*zwraca dane z tabel employee, source, source_rate*/
