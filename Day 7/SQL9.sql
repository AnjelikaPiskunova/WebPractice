SELECT  
  ishunin_user.lastname,
  ishunin_user.firstname,
  ishunin_user.patronomic 
  FROM 
    ishunin_teacher
 INNER JOIN ishunin_user
    ON ishunin_teacher.user_id = ishunin_user.User_id
  INNER JOIN ishunin_graduate
    ON ishunin_graduate.user_id = ishunin_teacher.user_id
  WHERE ishunin_graduate.user_id IS null