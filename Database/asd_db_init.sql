CREATE TABLE PASSENGER_DETAIL(
	PASSENGER_ID BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    FIRSTNAME VARCHAR(40) NOT NULL,
    SURNAME VARCHAR(40) NOT NULL,
    AGE TINYINT NOT NULL,
    ADDRESS TEXT NOT NULL,
    RISK_SCORE TINYINT UNSIGNED NOT NULL,
    RISK_TYPE_ID TINYINT UNSIGNED NOT NULL,
    FLIGHT_NUMBER BIGINT UNSIGNED NOT NULL
);

CREATE TABLE RISK_DETAIL(
	RISK_TYPE_ID TINYINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    RISK_NAME VARCHAR(40) NOT NULL,
    RISK_ACTION TEXT NOT NULL
);

CREATE TABLE FLIGHT_DETAIL(
	FLIGHT_NUMBER BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    CREW TINYINT UNSIGNED NOT NULL,
    DESTINATION MEDIUMINT UNSIGNED NOT NULL,
    ORIGIN MEDIUMINT UNSIGNED NOT NULL,
    FLIGHT_CAPACITY SMALLINT UNSIGNED NOT NULL
);

CREATE TABLE AIRPORTS(
	LOCATION_ID MEDIUMINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    IATA_CODE VARCHAR(3) NOT NULL,
    LOCATION_NAME VARCHAR(40) NOT NULL
);

ALTER TABLE PASSENGER_DETAIL ADD FOREIGN KEY (RISK_TYPE_ID) REFERENCES RISK_DETAIL(RISK_TYPE_ID);
ALTER TABLE PASSENGER_DETAIL ADD FOREIGN KEY (FLIGHT_NUMBER) REFERENCES FLIGHT_DETAIL(FLIGHT_NUMBER);

ALTER TABLE FLIGHT_DETAIL ADD FOREIGN KEY (DESTINATION) REFERENCES AIRPORTS(LOCATION_ID);
ALTER TABLE FLIGHT_DETAIL ADD FOREIGN KEY (ORIGIN) REFERENCES AIRPORTS(LOCATION_ID);