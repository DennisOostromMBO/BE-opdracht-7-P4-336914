CREATE PROCEDURE GetAllInstructeurs()
BEGIN
    SELECT 
        CONCAT_WS(' ', voornaam, tussenvoegsel, achternaam) AS naam,
        mobiel,
        datum_in_dienst,
        aantal_sterren
    FROM instructeurs
    ORDER BY aantal_sterren DESC; 
END;

