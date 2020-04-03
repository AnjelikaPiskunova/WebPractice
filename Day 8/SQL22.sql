SELECT *
FROM ishunin_special
INNER JOIN ishunin_course ON ishunin_course.special_id = ishunin_special.special_id
INNER JOIN ishunin_graduate ON ishunin_graduate.course_id = ishunin_course.course_id
INNER JOIN ishunin_graduate_time ON ishunin_graduate_time.graduate_id = ishunin_graduate.graduate_id
LEFT JOIN ishunin_day ON (ishunin_graduate_time.day_id = ishunin_day.day_id)
LEFT JOIN ishunin_lesson_num ON (ishunin_graduate_time.lesson_num_id = ishunin_lesson_num.lesson_num_id)
WHERE ishunin_lesson_num.time_lesson BETWEEN '14:00:00' and '18:00:00' AND (ishunin_day.name = 'Четверг' OR ishunin_day.name = 'Суббота') AND ishunin_day.day_id IS NULL AND ishunin_lesson_num.lesson_num_id IS NULL
