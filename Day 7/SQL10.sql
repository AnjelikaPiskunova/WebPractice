SELECT 
    ishunin_course.name
FROM 
  ishunin_graduate
  INNER JOIN ishunin_course ON ishunin_graduate.course_id = ishunin_course.course_id

  WHERE ishunin_course.special_id IS NULL

 