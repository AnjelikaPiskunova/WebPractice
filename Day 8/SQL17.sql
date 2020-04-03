SELECT ishunin_user.user_id,
  ishunin_user.lastname,
  ishunin_user.firstname,
  ishunin_otdel.name
FROM ishunin_user
Inner Join ishunin_teacher ON ishunin_teacher.user_id = ishunin_user.user_id
Inner Join ishunin_otdel ON ishunin_teacher.otdel_id = ishunin_otdel.otdel_id
Inner Join ishunin_graduate ON ishunin_graduate.user_id = ishunin_teacher.user_id
Inner Join ishunin_graduate_time ON ishunin_graduate_time.graduate_id = ishunin_graduate.graduate_id
Inner Join ishunin_day ON ishunin_graduate_time.day_id = ishunin_day.day_id AND ishunin_day.name = 'Суббота'
