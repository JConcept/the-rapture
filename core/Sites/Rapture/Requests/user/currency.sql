SELECT
name,
code,
symbol,
rate
FROM users
JOIN currencies ON currencies.id = users.currency_id
WHERE users.id = :id;
