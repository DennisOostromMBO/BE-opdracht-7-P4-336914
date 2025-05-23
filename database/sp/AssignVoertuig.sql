CREATE PROCEDURE AssignVoertuig(
    IN p_voertuig_id INT,
    IN p_instructeur_id INT
)
BEGIN
    INSERT INTO voertuig_instructeur (voertuig_id, instructeur_id, datum_toekenning)
    VALUES (p_voertuig_id, p_instructeur_id, CURRENT_DATE());
END;
