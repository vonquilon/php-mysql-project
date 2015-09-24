SELECT 
    makeName, modelName, address, cityName, stateName, zipcode
FROM
    cars
        LEFT JOIN
    models ON modelFk = modelId
        LEFT JOIN
    makes ON makeFk = makeId
        LEFT JOIN
    locations ON locationFk = locationId
        LEFT JOIN
    zipcodes ON zipcodeFk = zipcode
        LEFT JOIN
    cities ON cityFk = cityId
        LEFT JOIN
    states ON stateFk = stateId
WHERE
    makeName = 'Honda';