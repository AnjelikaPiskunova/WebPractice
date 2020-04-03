SELECT 
  ishunin_course.name, 
  ishunin_course.hours, 
 ishunin_special.name
FROM  
      ishunin_special
 
INNER JOIN ishunin_course
    ON ishunin_course.special_id = ishunin_special.special_id



 WHERE ishunin_special.otdel_id = '2'