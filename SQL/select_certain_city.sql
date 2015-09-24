SELECT
	address, cityName, stateName, zipcode, availableCars, totalCars
FROM
	locations
LEFT JOIN zipcodes ON zipcodeFk = zipcode
LEFT JOIN cities ON cityFk = cityId
LEFT JOIN states ON stateFk = stateId
WHERE cityName = 'Sayreville';