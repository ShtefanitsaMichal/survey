select Distinct(employee.session_id) as employee,
					typ, Stanowisko, Wiek,
					source.zarzad,
					source.przelozony,
					source.dzial,
					source.inny_dzial,
					source.baza_danych,
					source_rate.zarzad,
					source_rate.przelozony,
					source_rate.dzial,
					source_rate.inny_dzial,
					source_rate.baza_danych				
from employee
left join source
ON employee.session_id = source.session_id 
left join source_rate
ON employee.session_id = source_rate.session_id
left join main_tools
ON employee.session_id = main_tools.session_id
Where typ like 'Direct' AND wiek like '> 30' AND Stanowisko like '> 30'
