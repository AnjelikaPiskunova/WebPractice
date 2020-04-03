SELECT ishunin_special.name
FROM ishunin_special
Inner Join ishunin_course ON ishunin_course.special_id = ishunin_special.special_id
Inner Join ishunin_graduate ON ishunin_graduate.course_id = ishunin_course.course_id
Inner Join ishunin_graduate_time ON ishunin_graduate_time.graduate_id = ishunin_graduate.graduate_id
Inner Join ishunin_day ON ishunin_graduate_time.day_id = azat_day.day_id AND ishunin_day.name = 'Вторник'
