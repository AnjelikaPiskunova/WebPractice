SELECT ishunin_course.course_id, 
       ishunin_course.name
FROM ishunin_course
Inner Join ishunin_graduate ON ishunin_graduate.course_id = ishunin_course.course_id
Inner Join ishunin_graduate_time ON ishunin_graduate_time.graduate_id = ishunin_graduate.graduate_id
Inner Join ishunin_lesson_num ON ishunin_graduate_time.lesson_num_id = ishunin_lesson_num.lesson_num_id AND ishunin_lesson_num.time_lesson BETWEEN '12:30:00' AND '18:30:00'
