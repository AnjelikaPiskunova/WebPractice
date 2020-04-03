SELECT
  ishunin_user.lastname,
  ishunin_user.firstname,
  ishunin_user.patronomic,
  ishunin_gruppa.name,
  ishunin_course.hours,
  ishunin_course.name
FROM ishunin_teacher
INNER JOIN ishunin_user
    ON ishunin_teacher.user_id = ishunin_user.User_id
  INNER JOIN ishunin_graduate
    ON ishunin_graduate.user_id = ishunin_teacher.user_id
  INNER JOIN ishunin_graduate_time
    ON ishunin_graduate_time.graduate_id = ishunin_graduate.graduate_id
  INNER JOIN ishunin_lesson_num
    ON ishunin_graduate_time.lesson_num_id = ishunin_lesson_num.lesson_num_id
  INNER JOIN ishunin_course
    ON ishunin_graduate.course_id = ishunin_course.course_id
  INNER JOIN ishunin_gruppa
    ON ishunin_graduate.gruppa_id = ishunin_gruppa.gruppa_id
WHERE ishunin_lesson_num.time_lesson between '08:30:00' AND '15:00:00'
  
