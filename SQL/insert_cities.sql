INSERT INTO cities (stateFk, cityName)
VALUES
((SELECT stateId FROM states WHERE stateName = 'New Jersey'), 'Sayreville'),
((SELECT stateId FROM states WHERE stateName = 'New Jersey'), 'New Brunswick'),
((SELECT stateId FROM states WHERE stateName = 'New Jersey'), 'South River'),
((SELECT stateId FROM states WHERE stateName = 'New Jersey'), 'Piscataway'),
((SELECT stateId FROM states WHERE stateName = 'New York'), 'New York City'),
((SELECT stateId FROM states WHERE stateName = 'Pennsylvania'), 'Philadelphia'),
((SELECT stateId FROM states WHERE stateName = 'Massachusetts'), 'Boston');