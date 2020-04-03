SELECT ishunin_course.name, 
  ishunin_course.hours, 
  ishunin_special.name, 
  ishunin_day.name
FROM ishunin_otdel 
INNER JOIN ishunin_special ON ishunin_special.otdel_id = ishunin_otdel.otdel_id
INNER JOIN ishunin_course ON ishunin_course.special_id = ishunin_special.special_id
INNER JOIN ishunin_graduate ON ishunin_graduate.course_id = ishunin_course.course_id
INNER JOIN ishunin_graduate_time ON ishunin_graduate_time.graduate_id = ishunin_graduate.graduate_id
INNER JOIN ishunin_day ON ishunin_graduate_time.day_id = ishunin_day.day_id 
WHERE ishunin_otdel.otdel_id = '2' AND (ishunin_day.day_id = '3' OR ishunin_day.day_id = '5')
