CREATE TABLE IF NOT EXISTS makes (
	makeId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	makeName VARCHAR(30) NOT NULL DEFAULT '',
	CONSTRAINT unique_make UNIQUE(makeName)
);