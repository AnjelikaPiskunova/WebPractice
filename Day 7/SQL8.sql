SELECT
  ishunin_gruppa.name, COUNT(*)
FROM  ishunin_gruppa
  INNER JOIN ishunin_graduate ON ishunin_gruppa.gruppa_id=ishunin_graduate.gruppa_id
GROUP BY ishunin_gruppa.gruppa_id 