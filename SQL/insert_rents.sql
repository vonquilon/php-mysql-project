INSERT INTO rents (userFk, carFk)
VALUES
((SELECT userId FROM users WHERE email = 'JS@gmail.com'),
	(SELECT carId FROM cars LEFT JOIN models ON modelFk = modelId 
		LEFT JOIN locations ON locationFk = locationId 
		WHERE modelName = 'M5' AND address = '35 Cotting Street' AND zipCodeFk = '02114'));