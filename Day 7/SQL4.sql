SELECT 
  ishunin_gruppa.name, 
  ishunin_gruppa.date_begin, 
  ishunin_gruppa.date_end
FROM 
  ishunin_gruppa
Inner Join ishunin_special ON ishunin_gruppa.special_id = ishunin_special.special_id

where ishunin_special.name = 'Информационные системы'