SELECT ishunin_user.user_id, 
  ishunin_user.lastname, 
  ishunin_user.firstname
FROM ishunin_user
Inner Join ishunin_student ON ishunin_student.user_id = ishunin_user.user_id
Inner Join ishunin_gruppa ON ishunin_student.gruppa_id = ishunin_gruppa.gruppa_id
Inner Join ishunin_graduate ON ishunin_graduate.gruppa_id = ishunin_gruppa.gruppa_id
Inner Join ishunin_graduate_time ON ishunin_graduate_time.graduate_id = ishunin_graduate.graduate_id
Inner Join ishunin_day ON ishunin_graduate_time.day_id = ishunin_day.day_id AND ishunin_day.name = 'Пятница'
