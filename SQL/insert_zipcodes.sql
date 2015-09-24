INSERT INTO zipcodes (cityFk, zipcode)
VALUES
((SELECT cityId FROM cities WHERE cityName = 'Sayreville'), '08872'),
((SELECT cityId FROM cities WHERE cityName = 'Boston'), '02201'),
((SELECT cityId FROM cities WHERE cityName = 'Boston'), '02114'),
((SELECT cityId FROM cities WHERE cityName = 'New Brunswick'), '08905'),
((SELECT cityId FROM cities WHERE cityName = 'New York City'), '11201'),
((SELECT cityId FROM cities WHERE cityName = 'New York City'), '10007'),
((SELECT cityId FROM cities WHERE cityName = 'Philadelphia'), '19136'),
((SELECT cityId FROM cities WHERE cityName = 'Piscataway'), '08854'),
((SELECT cityId FROM cities WHERE cityName = 'South River'), '08882');