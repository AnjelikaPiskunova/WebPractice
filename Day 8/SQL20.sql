SELECT ishunin_otdel.name
From ishunin_otdel
Inner Join ishunin_teacher ON ishunin_teacher.otdel_id = ishunin_otdel.otdel_id
Inner Join ishunin_graduate ON ishunin_graduate.user_id = ishunin_teacher.user_id
Inner Join ishunin_graduate_time ON ishunin_graduate_time.graduate_id = ishunin_graduate.graduate_id
Inner Join ishunin_day ON ishunin_graduate_time.day_id = ishunin_day.day_id AND ishunin_day.name = 'Вторник'
Inner Join ishunin_lesson_num On ishunin_graduate_time.lesson_num_id = ishunin_lesson_num.lesson_num_id AND ishunin_lesson_num.time_lesson BETWEEN '09:00:00' AND '12:00:00'
