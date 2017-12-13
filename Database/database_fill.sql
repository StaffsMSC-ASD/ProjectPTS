#
# TABLE STRUCTURE FOR: AIRPORTS
#

INSERT INTO AIRPORTS (`LOCATION_ID`, `IATA_CODE`, `LOCATION_NAME`) VALUES (1, 'jvc', 'New Georgianna');
INSERT INTO AIRPORTS (`LOCATION_ID`, `IATA_CODE`, `LOCATION_NAME`) VALUES (2, 'soi', 'Bryanamouth');
INSERT INTO AIRPORTS (`LOCATION_ID`, `IATA_CODE`, `LOCATION_NAME`) VALUES (3, 'xwz', 'Donatoburgh');
INSERT INTO AIRPORTS (`LOCATION_ID`, `IATA_CODE`, `LOCATION_NAME`) VALUES (4, 'iuv', 'Myamouth');
INSERT INTO AIRPORTS (`LOCATION_ID`, `IATA_CODE`, `LOCATION_NAME`) VALUES (5, 'syl', 'Sunnyfort');
INSERT INTO AIRPORTS (`LOCATION_ID`, `IATA_CODE`, `LOCATION_NAME`) VALUES (6, 'zet', 'East Miaburgh');
INSERT INTO AIRPORTS (`LOCATION_ID`, `IATA_CODE`, `LOCATION_NAME`) VALUES (7, 'rxy', 'Lake Gracie');
INSERT INTO AIRPORTS (`LOCATION_ID`, `IATA_CODE`, `LOCATION_NAME`) VALUES (8, 'ncp', 'South Rosalind');
INSERT INTO AIRPORTS (`LOCATION_ID`, `IATA_CODE`, `LOCATION_NAME`) VALUES (9, 'itc', 'O\'Konland');
INSERT INTO AIRPORTS (`LOCATION_ID`, `IATA_CODE`, `LOCATION_NAME`) VALUES (10, 'kfm', 'South Cleo');
INSERT INTO AIRPORTS (`LOCATION_ID`, `IATA_CODE`, `LOCATION_NAME`) VALUES (11, 'ktx', 'Josiannefurt');
INSERT INTO AIRPORTS (`LOCATION_ID`, `IATA_CODE`, `LOCATION_NAME`) VALUES (12, 'ryd', 'East Elise');
INSERT INTO AIRPORTS (`LOCATION_ID`, `IATA_CODE`, `LOCATION_NAME`) VALUES (13, 'fcz', 'New Lonnyshire');
INSERT INTO AIRPORTS (`LOCATION_ID`, `IATA_CODE`, `LOCATION_NAME`) VALUES (14, 'utt', 'Reichelfort');
INSERT INTO AIRPORTS (`LOCATION_ID`, `IATA_CODE`, `LOCATION_NAME`) VALUES (15, 'nvc', 'Lucileton');
INSERT INTO AIRPORTS (`LOCATION_ID`, `IATA_CODE`, `LOCATION_NAME`) VALUES (16, 'bkp', 'Caesarstad');
INSERT INTO AIRPORTS (`LOCATION_ID`, `IATA_CODE`, `LOCATION_NAME`) VALUES (17, 'gxs', 'Port Burdette');
INSERT INTO AIRPORTS (`LOCATION_ID`, `IATA_CODE`, `LOCATION_NAME`) VALUES (18, 'uhu', 'Ornmouth');
INSERT INTO AIRPORTS (`LOCATION_ID`, `IATA_CODE`, `LOCATION_NAME`) VALUES (19, 'isd', 'Tressieborough');
INSERT INTO AIRPORTS (`LOCATION_ID`, `IATA_CODE`, `LOCATION_NAME`) VALUES (20, 'ffu', 'East Tannerfurt');


#
# TABLE STRUCTURE FOR: FLIGHT_DETAIL
#

INSERT INTO FLIGHT_DETAIL (`FLIGHT_NUMBER`, `CREW`, `DESTINATION`, `ORIGIN`, `FLIGHT_CAPACITY`) VALUES (1, 4, 11, 7, 85);
INSERT INTO FLIGHT_DETAIL (`FLIGHT_NUMBER`, `CREW`, `DESTINATION`, `ORIGIN`, `FLIGHT_CAPACITY`) VALUES (2, 6, 14, 7, 70);
INSERT INTO FLIGHT_DETAIL (`FLIGHT_NUMBER`, `CREW`, `DESTINATION`, `ORIGIN`, `FLIGHT_CAPACITY`) VALUES (3, 9, 17, 9, 84);
INSERT INTO FLIGHT_DETAIL (`FLIGHT_NUMBER`, `CREW`, `DESTINATION`, `ORIGIN`, `FLIGHT_CAPACITY`) VALUES (4, 5, 1, 4, 77);
INSERT INTO FLIGHT_DETAIL (`FLIGHT_NUMBER`, `CREW`, `DESTINATION`, `ORIGIN`, `FLIGHT_CAPACITY`) VALUES (5, 5, 6, 6, 86);
INSERT INTO FLIGHT_DETAIL (`FLIGHT_NUMBER`, `CREW`, `DESTINATION`, `ORIGIN`, `FLIGHT_CAPACITY`) VALUES (6, 8, 6, 3, 98);
INSERT INTO FLIGHT_DETAIL (`FLIGHT_NUMBER`, `CREW`, `DESTINATION`, `ORIGIN`, `FLIGHT_CAPACITY`) VALUES (7, 5, 10, 8, 89);
INSERT INTO FLIGHT_DETAIL (`FLIGHT_NUMBER`, `CREW`, `DESTINATION`, `ORIGIN`, `FLIGHT_CAPACITY`) VALUES (8, 10, 18, 6, 72);
INSERT INTO FLIGHT_DETAIL (`FLIGHT_NUMBER`, `CREW`, `DESTINATION`, `ORIGIN`, `FLIGHT_CAPACITY`) VALUES (9, 6, 15, 7, 60);
INSERT INTO FLIGHT_DETAIL (`FLIGHT_NUMBER`, `CREW`, `DESTINATION`, `ORIGIN`, `FLIGHT_CAPACITY`) VALUES (10, 5, 14, 3, 73);
INSERT INTO FLIGHT_DETAIL (`FLIGHT_NUMBER`, `CREW`, `DESTINATION`, `ORIGIN`, `FLIGHT_CAPACITY`) VALUES (11, 7, 15, 4, 62);
INSERT INTO FLIGHT_DETAIL (`FLIGHT_NUMBER`, `CREW`, `DESTINATION`, `ORIGIN`, `FLIGHT_CAPACITY`) VALUES (12, 9, 16, 2, 39);
INSERT INTO FLIGHT_DETAIL (`FLIGHT_NUMBER`, `CREW`, `DESTINATION`, `ORIGIN`, `FLIGHT_CAPACITY`) VALUES (13, 10, 10, 6, 58);
INSERT INTO FLIGHT_DETAIL (`FLIGHT_NUMBER`, `CREW`, `DESTINATION`, `ORIGIN`, `FLIGHT_CAPACITY`) VALUES (14, 8, 9, 3, 70);
INSERT INTO FLIGHT_DETAIL (`FLIGHT_NUMBER`, `CREW`, `DESTINATION`, `ORIGIN`, `FLIGHT_CAPACITY`) VALUES (15, 5, 6, 9, 50);
INSERT INTO FLIGHT_DETAIL (`FLIGHT_NUMBER`, `CREW`, `DESTINATION`, `ORIGIN`, `FLIGHT_CAPACITY`) VALUES (16, 9, 20, 1, 40);
INSERT INTO FLIGHT_DETAIL (`FLIGHT_NUMBER`, `CREW`, `DESTINATION`, `ORIGIN`, `FLIGHT_CAPACITY`) VALUES (17, 8, 12, 1, 76);
INSERT INTO FLIGHT_DETAIL (`FLIGHT_NUMBER`, `CREW`, `DESTINATION`, `ORIGIN`, `FLIGHT_CAPACITY`) VALUES (18, 5, 4, 9, 20);
INSERT INTO FLIGHT_DETAIL (`FLIGHT_NUMBER`, `CREW`, `DESTINATION`, `ORIGIN`, `FLIGHT_CAPACITY`) VALUES (19, 7, 1, 3, 70);
INSERT INTO FLIGHT_DETAIL (`FLIGHT_NUMBER`, `CREW`, `DESTINATION`, `ORIGIN`, `FLIGHT_CAPACITY`) VALUES (20, 8, 18, 9, 85);


#
# TABLE STRUCTURE FOR: PASSENGER_AET_FLIGHT
#

INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (3, 10);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (15, 19);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (12, 15);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (11, 2);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (11, 4);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (11, 18);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (8, 18);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (18, 4);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (4, 16);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (3, 11);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (11, 16);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (2, 10);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (8, 7);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (4, 8);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (10, 4);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (5, 3);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (16, 9);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (15, 14);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (8, 17);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (15, 16);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (1, 13);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (14, 19);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (11, 8);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (9, 16);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (9, 19);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (6, 5);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (4, 7);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (2, 10);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (16, 9);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (16, 14);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (2, 7);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (1, 5);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (3, 19);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (2, 12);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (10, 18);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (20, 12);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (20, 18);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (10, 11);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (18, 11);
INSERT INTO PASSENGER_AET_FLIGHT (`PASSENGER_ID`, `FLIGHT_NUMBER`) VALUES (8, 6);


#
# TABLE STRUCTURE FOR: PASSENGER_AET_RISK
#

INSERT INTO PASSENGER_AET_RISK (`PASSENGER_ID`, `RISK_TYPE_ID`) VALUES (20, 4);
INSERT INTO PASSENGER_AET_RISK (`PASSENGER_ID`, `RISK_TYPE_ID`) VALUES (2, 2);
INSERT INTO PASSENGER_AET_RISK (`PASSENGER_ID`, `RISK_TYPE_ID`) VALUES (12, 6);
INSERT INTO PASSENGER_AET_RISK (`PASSENGER_ID`, `RISK_TYPE_ID`) VALUES (10, 1);
INSERT INTO PASSENGER_AET_RISK (`PASSENGER_ID`, `RISK_TYPE_ID`) VALUES (16, 1);
INSERT INTO PASSENGER_AET_RISK (`PASSENGER_ID`, `RISK_TYPE_ID`) VALUES (15, 3);
INSERT INTO PASSENGER_AET_RISK (`PASSENGER_ID`, `RISK_TYPE_ID`) VALUES (3, 5);
INSERT INTO PASSENGER_AET_RISK (`PASSENGER_ID`, `RISK_TYPE_ID`) VALUES (1, 7);
INSERT INTO PASSENGER_AET_RISK (`PASSENGER_ID`, `RISK_TYPE_ID`) VALUES (19, 4);
INSERT INTO PASSENGER_AET_RISK (`PASSENGER_ID`, `RISK_TYPE_ID`) VALUES (11, 4);
INSERT INTO PASSENGER_AET_RISK (`PASSENGER_ID`, `RISK_TYPE_ID`) VALUES (19, 5);
INSERT INTO PASSENGER_AET_RISK (`PASSENGER_ID`, `RISK_TYPE_ID`) VALUES (14, 2);
INSERT INTO PASSENGER_AET_RISK (`PASSENGER_ID`, `RISK_TYPE_ID`) VALUES (11, 5);
INSERT INTO PASSENGER_AET_RISK (`PASSENGER_ID`, `RISK_TYPE_ID`) VALUES (13, 4);
INSERT INTO PASSENGER_AET_RISK (`PASSENGER_ID`, `RISK_TYPE_ID`) VALUES (10, 5);
INSERT INTO PASSENGER_AET_RISK (`PASSENGER_ID`, `RISK_TYPE_ID`) VALUES (1, 7);
INSERT INTO PASSENGER_AET_RISK (`PASSENGER_ID`, `RISK_TYPE_ID`) VALUES (12, 3);
INSERT INTO PASSENGER_AET_RISK (`PASSENGER_ID`, `RISK_TYPE_ID`) VALUES (16, 2);
INSERT INTO PASSENGER_AET_RISK (`PASSENGER_ID`, `RISK_TYPE_ID`) VALUES (11, 1);
INSERT INTO PASSENGER_AET_RISK (`PASSENGER_ID`, `RISK_TYPE_ID`) VALUES (20, 5);


#
# TABLE STRUCTURE FOR: PASSENGER_DETAIL
#

INSERT INTO PASSENGER_DETAIL (`PASSENGER_ID`, `FIRSTNAME`, `SURNAME`, `AGE`, `ADDRESS`) VALUES (1, 'Betty', 'Cruickshank', 66, '0503 Lowe Prairie\nNorth Jerry, ID 74475');
INSERT INTO PASSENGER_DETAIL (`PASSENGER_ID`, `FIRSTNAME`, `SURNAME`, `AGE`, `ADDRESS`) VALUES (2, 'Regan', 'Batz', 18, '5531 Jacobs Vista\nNorth Thomastown, AK 34051');
INSERT INTO PASSENGER_DETAIL (`PASSENGER_ID`, `FIRSTNAME`, `SURNAME`, `AGE`, `ADDRESS`) VALUES (3, 'Kennith', 'Moen', 37, '65609 Jacobson Trail Apt. 804\nWest Ariane, OK 51251-0825');
INSERT INTO PASSENGER_DETAIL (`PASSENGER_ID`, `FIRSTNAME`, `SURNAME`, `AGE`, `ADDRESS`) VALUES (4, 'Kieran', 'Schmidt', 73, '430 Laury Dale Suite 198\nWeststad, IN 33443');
INSERT INTO PASSENGER_DETAIL (`PASSENGER_ID`, `FIRSTNAME`, `SURNAME`, `AGE`, `ADDRESS`) VALUES (5, 'Tyrique', 'Sanford', 33, '2943 Pollich Route Suite 950\nWalterbury, IA 32572-0173');
INSERT INTO PASSENGER_DETAIL (`PASSENGER_ID`, `FIRSTNAME`, `SURNAME`, `AGE`, `ADDRESS`) VALUES (6, 'Kiel', 'Schiller', 82, '49736 Norene Circle Suite 139\nNew Charlotte, DE 48153-6219');
INSERT INTO PASSENGER_DETAIL (`PASSENGER_ID`, `FIRSTNAME`, `SURNAME`, `AGE`, `ADDRESS`) VALUES (7, 'Chelsea', 'Sipes', 22, '55069 Derek Isle\nAdamstown, ID 96839-5921');
INSERT INTO PASSENGER_DETAIL (`PASSENGER_ID`, `FIRSTNAME`, `SURNAME`, `AGE`, `ADDRESS`) VALUES (8, 'Kristina', 'Fay', 30, '0649 Gislason Land\nRunteton, ND 83450-7006');
INSERT INTO PASSENGER_DETAIL (`PASSENGER_ID`, `FIRSTNAME`, `SURNAME`, `AGE`, `ADDRESS`) VALUES (9, 'Tomas', 'Schuster', 63, '42108 Schimmel Well Apt. 800\nJuddtown, FL 97244');
INSERT INTO PASSENGER_DETAIL (`PASSENGER_ID`, `FIRSTNAME`, `SURNAME`, `AGE`, `ADDRESS`) VALUES (10, 'Hortense', 'Langosh', 86, '0727 Mayert Key Suite 658\nJoanyside, WI 05487-2511');
INSERT INTO PASSENGER_DETAIL (`PASSENGER_ID`, `FIRSTNAME`, `SURNAME`, `AGE`, `ADDRESS`) VALUES (11, 'Tianna', 'Pollich', 65, '3220 Rafael Island\nWest Trevionfort, IA 24688-9560');
INSERT INTO PASSENGER_DETAIL (`PASSENGER_ID`, `FIRSTNAME`, `SURNAME`, `AGE`, `ADDRESS`) VALUES (12, 'Olin', 'Stokes', 94, '987 Brain Place\nSouth Israelside, AL 28288');
INSERT INTO PASSENGER_DETAIL (`PASSENGER_ID`, `FIRSTNAME`, `SURNAME`, `AGE`, `ADDRESS`) VALUES (13, 'Aaron', 'Kerluke', 86, '748 Jeanette Via Suite 672\nSouth Jesusborough, WV 72283');
INSERT INTO PASSENGER_DETAIL (`PASSENGER_ID`, `FIRSTNAME`, `SURNAME`, `AGE`, `ADDRESS`) VALUES (14, 'Carter', 'Marvin', 100, '8819 Daugherty Gateway Suite 580\nPort Samir, NY 50665');
INSERT INTO PASSENGER_DETAIL (`PASSENGER_ID`, `FIRSTNAME`, `SURNAME`, `AGE`, `ADDRESS`) VALUES (15, 'Jerry', 'Jacobs', 77, '3775 Pietro Streets Apt. 746\nEast Fanny, AR 51519-4947');
INSERT INTO PASSENGER_DETAIL (`PASSENGER_ID`, `FIRSTNAME`, `SURNAME`, `AGE`, `ADDRESS`) VALUES (16, 'Aglae', 'Turcotte', 50, '94737 Alvis Island\nNew Alexieberg, DE 30855-2912');
INSERT INTO PASSENGER_DETAIL (`PASSENGER_ID`, `FIRSTNAME`, `SURNAME`, `AGE`, `ADDRESS`) VALUES (17, 'Palma', 'Aufderhar', 36, '7615 Richie Circle\nBentonton, DE 07582');
INSERT INTO PASSENGER_DETAIL (`PASSENGER_ID`, `FIRSTNAME`, `SURNAME`, `AGE`, `ADDRESS`) VALUES (18, 'Gloria', 'Hagenes', 58, '4249 Reinger Mission\nNew Lacyside, MS 24131');
INSERT INTO PASSENGER_DETAIL (`PASSENGER_ID`, `FIRSTNAME`, `SURNAME`, `AGE`, `ADDRESS`) VALUES (19, 'Fay', 'Huels', 58, '3955 Angie Junction Apt. 637\nEast Kallieland, CA 22817');
INSERT INTO PASSENGER_DETAIL (`PASSENGER_ID`, `FIRSTNAME`, `SURNAME`, `AGE`, `ADDRESS`) VALUES (20, 'Emmet', 'Okuneva', 72, '6987 Johnson Causeway\nSouth Robertstad, OH 33127');


#
# TABLE STRUCTURE FOR: RISK_DETAIL
#

INSERT INTO RISK_DETAIL (`RISK_TYPE_ID`, `RISK_SCORE`, `RISK_NAME`, `RISK_ACTION`) VALUES (1, 5, 'Smuggling', '');
INSERT INTO RISK_DETAIL (`RISK_TYPE_ID`, `RISK_SCORE`, `RISK_NAME`, `RISK_ACTION`) VALUES (2, 7, 'Terrorism', '');
INSERT INTO RISK_DETAIL (`RISK_TYPE_ID`, `RISK_SCORE`, `RISK_NAME`, `RISK_ACTION`) VALUES (3, 2, 'Fraud', '');
INSERT INTO RISK_DETAIL (`RISK_TYPE_ID`, `RISK_SCORE`, `RISK_NAME`, `RISK_ACTION`) VALUES (4, 6, 'Assault', '');
INSERT INTO RISK_DETAIL (`RISK_TYPE_ID`, `RISK_SCORE`, `RISK_NAME`, `RISK_ACTION`) VALUES (5, 3, 'Disorderly', '');
INSERT INTO RISK_DETAIL (`RISK_TYPE_ID`, `RISK_SCORE`, `RISK_NAME`, `RISK_ACTION`) VALUES (6, 7, 'Murder', '');
INSERT INTO RISK_DETAIL (`RISK_TYPE_ID`, `RISK_SCORE`, `RISK_NAME`, `RISK_ACTION`) VALUES (7, 5, 'Trafficking', '');