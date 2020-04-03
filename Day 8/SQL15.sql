SELECT ishunin_day.*
FROM ishunin_day
LEFT JOIN ishunin_graduate_time ON (ishunin_day.day_id = ishunin_graduate_time.day_id)
WHERE ishunin_graduate_time.graduate_time_id IS NULL
