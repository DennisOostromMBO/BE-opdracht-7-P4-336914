CREATE PROCEDURE GetAllTypeVoertuigen()
BEGIN
    SELECT 
        id,
        type_voertuig,
        rijbewijscategorie
    FROM type_voertuigen;
END;
