CREATE PROCEDURE GetVoertuigById(IN voertuig_id INT)
BEGIN
    SELECT 
        v.id,
        v.type_voertuig_id,
        v.type,
        v.bouwjaar,
        v.brandstof,
        v.kenteken,
        vi.instructeur_id 
    FROM voertuigen v
    INNER JOIN voertuig_instructeur vi ON v.id = vi.voertuig_id
    WHERE v.id = voertuig_id;
END;
