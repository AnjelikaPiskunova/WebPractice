SELECT  
  ishunin_user.lastname, 
  ishunin_user.firstname,
  ishunin_user.patronomic,
  ishunin_gruppa.name,
  ishunin_course.name
 FROM ishunin_student

INNER JOIN ishunin_gruppa
    ON ishunin_student.gruppa_id = ishunin_gruppa.gruppa_id
INNER JOIN ishunin_user
    ON ishunin_student.user_id = ishunin_user.User_id
INNER JOIN ishunin_graduate
    ON ishunin_graduate.gruppa_id = ishunin_gruppa.gruppa_id
INNER JOIN ishunin_course
    ON ishunin_graduate.course_id = ishunin_course.course_id




  