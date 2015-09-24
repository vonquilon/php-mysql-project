CREATE TABLE IF NOT EXISTS states (
	stateId TINYINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	stateName VARCHAR(20) NOT NULL DEFAULT '',
	CONSTRAINT unique_state UNIQUE(stateName)
);