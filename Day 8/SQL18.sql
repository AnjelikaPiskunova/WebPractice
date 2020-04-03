SELECT ishunin_user.user_id, 
  ishunin_user.lastname, 
  ishunin_user.firstname, 
  ishunin_gruppa.name, 
  ishunin_special.name
  FROM ishunin_user
INNER JOIN ishunin_student ON ishunin_student.user_id = ishunin_user.user_id
INNER JOIN ishunin_gruppa ON ishunin_gruppa.gruppa_id = ishunin_student.gruppa_id
INNER JOIN ishunin_special ON ishunin_special.special_id = ishunin_gruppa.special_id
Inner JOIN ishunin_graduate ON ishunin_graduate.gruppa_id = ishunin_gruppa.gruppa_id
INNER JOIN ishunin_course ON ishunin_graduate.course_id = ishunin_course.course_id AND ishunin_course.hours > '95'
