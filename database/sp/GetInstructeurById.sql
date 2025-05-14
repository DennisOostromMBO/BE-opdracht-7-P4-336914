CREATE PROCEDURE GetInstructeurById(IN instructeur_id INT)
BEGIN
    SELECT 
        id,
        voornaam,
        tussenvoegsel,
        achternaam,
        mobiel,
        datum_in_dienst,
        aantal_sterren
    FROM instructeurs
    WHERE id = instructeur_id;
END;
