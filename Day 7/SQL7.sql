SELECT
  ishunin_otdel.name, COUNT(*)
  FROM ishunin_student
    INNER JOIN ishunin_gruppa 
      ON ishunin_student.gruppa_id = ishunin_gruppa.gruppa_id
        INNER JOIN ishunin_special 
          ON ishunin_gruppa.special_id= ishunin_special.special_id
            INNER JOIN ishunin_otdel ON ishunin_special.otdel_id=ishunin_otdel.otdel_id
              GROUP BY ishunin_otdel.otdel_id