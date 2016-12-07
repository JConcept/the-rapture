SELECT
places.picture,
place_translations.name AS title,
place_translations.description,
city_translations.name AS city
FROM places
JOIN place_translations ON place_translations.place_id = places.id
JOIN city_translations ON city_translations.city_id = places.city_id
WHERE place_translations.locale = :locale
AND city_translations.locale = :locale
ORDER BY created_at DESC LIMIT 4;


# JOIN cities ON cities.id = places.city_id ==> attention deux fois la colonne id -> ERREUR car crée un conflict
