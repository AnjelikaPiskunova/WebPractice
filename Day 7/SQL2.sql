SELECT
  ishunin_user.lastname,
  ishunin_user.firstname,
  ishunin_user.patronomic,
  ishunin_gruppa.name,
  ishunin_special.name
  FROM ishunin_student 

  INNER JOIN ishunin_user ON ishunin_student.user_id = ishunin_user.user_id
  INNER JOIN ishunin_gruppa ON ishunin_student.gruppa_id = ishunin_gruppa.gruppa_id
  INNER JOIN ishunin_special  ON ishunin_gruppa.special_id = ishunin_special.special_id

   WHERE ishunin_special.special_id=1