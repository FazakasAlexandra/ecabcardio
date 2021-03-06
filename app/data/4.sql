/* QUERY FOR patients_history VIEW */

SELECT
    consults.id AS consult_id,
    patients.id AS patient_id,
    CONCAT(patients.name, ' ', patients.surname) AS patient_name,
    users.name_surname AS doctor,
    consults.date,
    consults.hour,
    SUM(CE.price) AS total
FROM
    consults,
    consults_examinations CE,
    patients,
    users
WHERE
    patients.id = consults.patient_id AND users.id = consults.doctor_id AND consults.id = CE.consult_id
GROUP BY
    consults.id