SELECT 
    ishunin_special.name
FROM 
    ishunin_course 
INNER JOIN ishunin_special
    ON ishunin_course.special_id = ishunin_special.special_id
  INNER JOIN ishunin_graduate
    ON ishunin_graduate.course_id = ishunin_course.course_id
WHERE ishunin_graduate.course_id IS NULL