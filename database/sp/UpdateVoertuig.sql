CREATE PROCEDURE UpdateVoertuig(
    IN voertuig_id INT,
    IN new_instructeur_id INT,
    IN type_voertuig_id INT,
    IN type VARCHAR(255),
    IN bouwjaar DATE,
    IN brandstof VARCHAR(255),
    IN kenteken VARCHAR(255)
)
BEGIN
    -- First update the basic vehicle details
    UPDATE voertuigen v
    SET 
        v.type_voertuig_id = type_voertuig_id,
        v.type = type,
        v.bouwjaar = bouwjaar,
        v.brandstof = brandstof,
        v.kenteken = kenteken
    WHERE v.id = voertuig_id;

    -- Only update the instructor if it's actually changing
    UPDATE voertuig_instructeur vi
    SET 
        vi.instructeur_id = new_instructeur_id,
        vi.datum_toekenning = CURRENT_DATE()
    WHERE vi.voertuig_id = voertuig_id
    AND vi.instructeur_id != new_instructeur_id;
END;
