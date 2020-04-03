SELECT  ishunin_user.user_id, 
        ishunin_user.lastname, 
        ishunin_user.firstname
FROM ishunin_user
Inner Join ishunin_student ON ishunin_student.user_id = ishunin_user.user_id
Inner Join ishunin_gruppa ON ishunin_student.gruppa_id = ishunin_gruppa.gruppa_id
Inner Join ishunin_graduate ON ishunin_graduate.gruppa_id = ishunin_gruppa.gruppa_id
Inner Join ishunin_graduate_time ON ishunin_graduate_time.graduate_id = ishunin_graduate.graduate_id
Inner Join ishunin_lesson_num ON ishunin_graduate_time.lesson_num_id = ishunin_lesson_num.lesson_num_id AND ishunin_lesson_num.time_lesson BETWEEN '10:30:00' AND '18:30:00' AND ishunin_user.gender_id='2'
