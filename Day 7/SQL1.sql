SELECT 
  ishunin_user.lastname,
  ishunin_user.firstname,
  ishunin_user.patronomic,
  ishunin_gender.name, 
  ishunin_otdel.name
  FROM ishunin_user


  INNER JOIN ishunin_teacher ON ishunin_user.user_id = ishunin_teacher.user_id
  INNER JOIN ishunin_otdel  ON ishunin_teacher.otdel_id = ishunin_otdel.otdel_id
  INNER JOIN ishunin_gender  ON ishunin_user.gender_id = ishunin_gender.gender_id

  WHERE ishunin_otdel.otdel_id=1




