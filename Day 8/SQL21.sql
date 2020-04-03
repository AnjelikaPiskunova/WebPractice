SELECT
 ishunin_day.name, COUNT(*)
 FROM ishunin_course
 INNER JOIN ishunin_graduate ON ishunin_graduate.course_id = ishunin_course.course_id
 INNER JOIN ishunin_graduate_time ON ishunin_graduate_time.graduate_id= ishunin_graduate.graduate_id
 INNER JOIN ishunin_day ON ishunin_graduate_time.day_id=ishunin_day.day_id
 GROUP BY ishunin_day.day_id
