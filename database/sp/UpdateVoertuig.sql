CREATE PROCEDURE UpdateVoertuig(
    IN voertuig_id INT,
    IN type_voertuig_id INT,
    IN type VARCHAR(255),
    IN bouwjaar DATE,
    IN brandstof VARCHAR(255),
    IN kenteken VARCHAR(255)
)
BEGIN
    UPDATE voertuigen
    SET 
        type_voertuig_id = type_voertuig_id,
        type = type,
        bouwjaar = bouwjaar,
        brandstof = brandstof,
        kenteken = kenteken
    WHERE id = voertuig_id;
END;
