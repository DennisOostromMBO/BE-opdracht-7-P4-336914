CREATE PROCEDURE GetAllVoertuigen(IN instructeur_id INT)
BEGIN
    SELECT 
        v.id, 
        vi.instructeur_id, -- Include the instructeur_id field
        tv.type_voertuig AS TypeVoertuig,
        v.type AS Type,
        v.kenteken AS Kenteken,
        v.bouwjaar AS Bouwjaar,
        v.brandstof AS Brandstof,
        tv.rijbewijscategorie AS Rijbewijscategorie
    FROM voertuig_instructeur vi
    INNER JOIN voertuigen v ON vi.voertuig_id = v.id
    INNER JOIN type_voertuigen tv ON v.type_voertuig_id = tv.id
    WHERE vi.instructeur_id = instructeur_id
    ORDER BY tv.rijbewijscategorie; 
END;
